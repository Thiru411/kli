<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine Sitemap Extension
 *
 * @package     Sitemap
 * @category    Extension
 * @author      Ben Croker
 * @link        https://www.putyourlightson.net/sitemap-module
 */

class Sitemap_ext
{
    public $name = '';
    public $version = '';
    public $settings = array();
    public $settings_exist = 'n';

    /**
     * Constructor
     */
    public function __construct()
    {
        // set variables
        $this->name = ee('Addon')->get('sitemap')->getName();
        $this->version = ee('Addon')->get('sitemap')->getVersion();
        }

    // --------------------------------------------------------------------

    /**
      *  Ping Sitemap
      */
    public function ping_sitemap($entry_id, $meta, $data, $view_url)
    {
        $result = '';


        // check if ping sitemap was checked
        if (!ee()->input->post('sitemap__ping_sitemap'))
        {
            return;
        }

        $results = array();

        $urls = array();

        // google
        $urls['Google'] = 'https://www.google.com/webmasters/sitemaps/ping?sitemap=';

        // bing
        $urls['Bing'] = 'https://www.bing.com/webmaster/ping.aspx?siteMap=';


        foreach ($urls as $key => $url)
        {
            $url = $url.ee()->config->slash_item('site_url').'sitemap.php';

            // cURL method
            if (function_exists('curl_init'))
            {
                $results[$key] = $this->_curl_ping($url);
            }

            // fsocket method
            else
            {
                $results[$key] = $this->_socket_ping($url);
            }
        }


        $this->_confirmation_message($results);

        ee()->functions->redirect($view_url);
    }

    // --------------------------------------------------------------------

    /**
      *  Return confirmation message
      */
    public function _confirmation_message($results)
    {
        $success_message = '';
        $failure_message = '';

        foreach ($results as $key => $result)
        {
            if ($result == '1')
            {
                $success_message .= '<b>'.$key.'</b> was successfully notified about this entry<br/>';
            }

            else if ($result == '0')
            {
                $failure_message .= 'An error was encountered while trying to notify <b>'.$key.'</b> about this entry<br/>';
            }
        }

        if ($success_message)
        {
            ee()->session->set_flashdata('message_success', $success_message);
        }

        if ($failure_message)
        {
            ee()->session->set_flashdata('message_failure', $failure_message);
        }
    }

    // --------------------------------------------------------------------

    /**
      *  Use the cURL method to send ping
      */
    public function _curl_ping($url)
    {
        $curl_handle = curl_init($url);
        curl_setopt($curl_handle, CURLOPT_HEADER, TRUE);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl_handle);
        curl_close($curl_handle);

        $response_code = trim(substr($response, 9, 4));

        if ($response_code == 200)
        {
            return '1';
        }

        else
        {
            return '0';
        }
    }

    // --------------------------------------------------------------------

    /**
      *  Use the socket method to send ping
      */
    public function _socket_ping($url)
    {
        $url = parse_url($url);

        if (!isset($url["port"]))
        {
            $url["port"] = 80;
        }

        if (!isset($url["path"]))
        {
            $url["path"] = "/";
        }

        $fp = @fsockopen($url["host"], $url["port"], $errno, $errstr, 30);

        if ($fp)
        {
            $http_request = "HEAD ".$url["path"]."?".$url["query"]." HTTP/1.1\r\n"."Host: ".$url["host"]."\r\n"."Connection: close\r\n\r\n";
            fputs($fp, $http_request);
              $response = fgets($fp, 1024);
            fclose($fp);

            $response_code = trim(substr($response, 9, 4));

            if ($response_code == 200)
            {
                return '1';
            }
        }

        return '0';
    }

    // --------------------------------------------------------------------

    /**
      *  Update Extension
      */
    public function update_extension($current='')
    {
        if ($current == '' OR $current == $this->version)
        {
            return FALSE;
        }

        if ($current < '1.6')
        {
            ee()->db->query("UPDATE exp_extensions SET hook = 'entry_submission_absolute_end' WHERE class = 'Sitemap_ext'");
        }

        ee()->db->query("UPDATE exp_extensions
                    SET version = '".$this->version."'
                    WHERE class = 'Sitemap_ext'");
    }

    // --------------------------------------------------------------------

    /**
      *  Activate Extension
      */
    public function activate_extension()
    {
        // add ping_sitemap
        ee()->db->insert('extensions',
                                  array(
                                        'class'        => "Sitemap_ext",
                                        'method'       => "ping_sitemap",
                                        'hook'         => "entry_submission_absolute_end",
                                        'settings'     => "",
                                        'priority'     => 10,
                                        'version'      => $this->version,
                                        'enabled'      => "y"
                                    )
        );
    }

    // --------------------------------------------------------------------

    /**
      *  Disable Extension
      */
    public function disable_extension()
    {
        ee()->db->query("DELETE FROM exp_extensions WHERE class = 'Sitemap_ext'");
    }

}

// END CLASS

/* End of file ext.sitemap.php */
/* Location: ./system/expressionengine/third_party/sitemap/ext.sitemap.php */
