<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine Sitemap Module
 *
 * @package     Sitemap
 * @category    Module
 * @author      Ben Croker
 * @link        https://www.putyourlightson.net/sitemap-module
 */

class Sitemap {

    // defaults
    public $default_change_frequency = 'weekly';
    public $default_priority = '0.5';

    /**
      *  Generates and returns sitemap
      */
    public function get()
    {
        // get site id
        $site_id = ee()->config->item('site_id');

        // set defaults
        $start = 0;
        $limit = 50000;

        // get start and limit parameters
        if (ee()->TMPL->fetch_param('start') || ee()->input->get_post('start'))
        {
            $start = ee()->TMPL->fetch_param('start') ? ee()->TMPL->fetch_param('start') : ee()->input->get_post('start');
        }

        if (ee()->TMPL->fetch_param('limit') || ee()->input->get_post('limit'))
        {
            $limit = ee()->TMPL->fetch_param('limit') ? ee()->TMPL->fetch_param('limit') : ee()->input->get_post('limit');
        }

        // set offset and counter
        $offset = 0;
        $count = 0;

        // sitemap header
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        ';


        /** ----------------------------------------
        /**  URLs
        /** ----------------------------------------*/

        // get the urls from the database
        $query = ee()->db->query("SELECT * FROM exp_sitemap WHERE url != '' AND site_id = '".$site_id."'");

        // loop through urls
        foreach ($query->result() as $row)
        {
            // check offset and limit
            if ($start <= $offset && $count < $limit)
            {
                $sitemap .= '
<url>
    <loc>'.$row->url.'</loc>
    <lastmod>'.$this->iso8601_date().'</lastmod>
    <changefreq>'.$row->change_frequency.'</changefreq>
    <priority>'.$row->priority.'</priority>
</url>
                ';

                $count++;
            }

            $offset++;
        }


        /** ----------------------------------------
        /**  Channels
        /** ----------------------------------------*/

        // get site pages
        $site_pages = array();

        if (ee()->db->field_exists('site_pages', 'exp_sites'))
        {
            ee()->db->select('site_pages');
            ee()->db->where('site_id', $site_id);
            $query = ee()->db->get('sites');

            $site_pages = unserialize(base64_decode($query->row('site_pages')));
            $site_pages = $site_pages[$site_id];
        }


        // get the current site channels from the database
        $channels = ee()->db->query("SELECT channel_id FROM exp_channels WHERE site_id = '$site_id'");

        // loop through channels
        foreach ($channels->result() as $channel)
        {
            $channel_id = $channel->channel_id;

            // get sitemap settings for this channel
            $settings = ee()->db->query("SELECT * FROM exp_sitemap WHERE channel_id = '$channel_id'");

            $setting = $settings->row();


            // check if this channel has settings and if it should be included
            if ($setting AND $setting->included == 1)
            {
                // wrap statuses in quotes for mysql
                $statuses = "'".str_replace(',', "','", $setting->statuses)."'";

                // Quick fix for ONLY_FULL_GROUP_BY SQL mode error
                ee()->db->query("SET SESSION sql_mode = ''");

                // get all of the channel entries in this channel that have the selected statuses and are in the current site
                $entries = ee()->db->query("
                    SELECT edit_date, entry_date, exp_channel_titles.entry_id, url_title, channel_id, exp_category_posts.cat_id, cat_name, cat_url_title FROM exp_channel_titles
                    LEFT JOIN exp_category_posts ON exp_channel_titles.entry_id = exp_category_posts.entry_id
                    LEFT JOIN exp_categories ON exp_category_posts.cat_id = exp_categories.cat_id
                    WHERE channel_id = '".$channel_id."' AND exp_channel_titles.site_id = '".$site_id."' AND status IN (".$statuses.") AND (expiration_date = 0 OR expiration_date > ".time().")
                    GROUP BY entry_id
                    LIMIT ".$limit
                );

                // loop through entries
                foreach ($entries->result() as $entry)
                {
                    // check offset and limit
                    if ($start <= $offset && $count < $limit)
                    {
                        // url location
                        if ($setting && $setting->url)
                        {
                            $url = $setting->url;
                        }

                        // channel
                        else
                        {
                            $url = ee()->functions->fetch_site_index(1);
                        }


                        // if future entry date then don't include
                        if ($entry->entry_date && $entry->entry_date > time())
                        {
                            continue;
                        }


                        // check if the edit date is formatted correctly (is more recent than 1970 - the unix epoch)
                        if (strlen($entry->edit_date) >= 8 && substr($entry->edit_date, 0, 4) >= 1970 && substr($entry->edit_date, 0, 4) <= date("Y") && substr($entry->edit_date, 4, 2) >= 1 && substr($entry->edit_date, 4, 2) <= 12 && substr($entry->edit_date, 6, 2) >= 1 && substr($entry->edit_date, 6, 2) <= 31)
                        {
                            $last_modified = $this->iso8601_date(strtotime($entry->edit_date));
                        }

                        // if the entry date is formatted correctly
                        else if ($entry->entry_date > 0 && $entry->entry_date <= time())
                        {
                            $last_modified = $this->iso8601_date($entry->entry_date);
                        }

                        else
                        {
                            $last_modified = $this->iso8601_date();
                        }


                        $change_frequency = ($setting ? $setting->change_frequency : $this->default_change_frequency);
                        $priority = ($setting ? $setting->priority : $this->default_priority);


                        // save entry date timestamp
                        $entry_date_timestamp = $entry->entry_date;

                        // format entry date for location
                        if (isset($entry->entry_date) && $entry->entry_date)
                        {
                            $entry->entry_date = date("Y/m/d", $entry->entry_date);
                        }


                        // get page_uri and page_url for location
                        if (!empty($site_pages))
                        {
                            $entry->page_uri = isset($site_pages['uris'][$entry->entry_id]) ? $site_pages['uris'][$entry->entry_id] : '';
                            $entry->page_url = ee()->functions->create_url($entry->page_uri);
                        }


                        // parse public variables for location
                        $keys = array();
                        $vals = array();

                        foreach ($entry as $key => $val)
                        {
                            $keys[] = '{'.$key.'}';
                            $vals[] = $val;
                        }

                        $location = str_replace($keys, $vals, $url);


                        if (version_compare(APP_VER, '2.8.0', '>='))
                        {
                            // parse date public variables
                            $location = ee()->TMPL->parse_date_variables($location,
                                array('entry_date' => $entry_date_timestamp)
                            );
                        }

                        // check if transcribe add-on is installed
                        $transcribe = ee('Addon')->get('transcribe');

                        if ($transcribe AND $transcribe->isInstalled())
                        {
                            ee()->db->select('enable_transcribe, force_prefix');
                            ee()->db->from('transcribe_settings');
                            ee()->db->where('site_id', $site_id);
                            $transcribe_settings = ee()->db->get()->row();

                            if ($transcribe_settings AND 1 AND $transcribe_settings->force_prefix)
                            {
                                // get language abbreviation for entry
                                ee()->db->select('abbreviation, force_prefix');
                                ee()->db->from('transcribe_languages l');
                                ee()->db->join('transcribe_entries_languages e', 'l.id = e.language_id');
                                ee()->db->where('entry_id', $entry->entry_id);
                                ee()->db->where('enabled', 1);
                                $transcribe_language = ee()->db->get()->row();

                                if ($transcribe_language AND $transcribe_language->abbreviation AND ($transcribe_settings->force_prefix == 1 OR $transcribe_language->force_prefix))
                                {
                                    $segments = explode('/', $location);

                                    // prepend abbreviation to first uri segment if not index.php, otherwise append
                                    $segments[3] = ($segments[3] == 'index.php' ? $segments[3].'/'.$transcribe_language->abbreviation : $transcribe_language->abbreviation.'/'.$segments[3]);

                                    $location = implode('/', $segments);
                                }
                            }
                        }


                        $sitemap .= '
<url>
    <loc>'.$location.'</loc>
    <lastmod>'.$last_modified.'</lastmod>
    <changefreq>'.$change_frequency.'</changefreq>
    <priority>'.$priority.'</priority>
</url>
                        ';

                        $count++;
                    }

                    // if we have reached the limit then break the outer foreach loop
                    if ($count >= $limit)
                    {
                        break 2;
                    }

                    $offset++;
                }
            }
        }


        /** ----------------------------------------
        /**  Footer and comments
        /** ----------------------------------------*/

        // get module version
        $query = ee()->db->query("SELECT module_version FROM exp_modules WHERE module_name = 'Sitemap'");
        $version = ($query->num_rows > 0) ? $query->row()->module_version : 'Unknown';

        $sitemap .= '
</urlset>

<!-- Generated by the EE Sitemap Module v'.$version.' -->
        ';

        return $sitemap;
    }

    // --------------------------------------------------------------------

    /**
      *  Create valid iso8601 date
      */
    public function iso8601_date($date='')
    {
        $date = $date ? date(DATE_ISO8601, $date) : date(DATE_ISO8601);

        // add colon in timezone
        $date = substr($date, 0, 22).':'.substr($date, 22);

        return $date;
    }

}
