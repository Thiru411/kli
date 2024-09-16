<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['debug'] = '1';
$config['cache_driver'] = 'file';
$config['cookie_prefix'] = '';
$config['enable_online_user_tracking'] = 'y';
$config['enable_hit_tracking'] = 'n';
$config['enable_entry_view_tracking'] = 'y';
$config['dynamic_tracking_disabling'] = '';
$config['is_system_on'] = 'y';
$config['multiple_sites_enabled'] = 'n';
$config['index_page'] = 'index.php';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '3.4.1';
$config['encryption_key'] = '5e2214b5e97c5411ba496bfcc13171f0685d6406';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'kotak',
		'username' => trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, 'JkTjjX-G=7vb14tt', base64_decode('1hIl+m7mrE6KPxmW7h3698CvvybUMA5EZbjgd73Exmg='), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))),
		'password' => trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, 'JkTjjX-G=7vb14tt', base64_decode('IPFiJ1xxFLt6b4yf9sCaNClMLbHLhVQ/OQ0yYFQ0vgs='), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))),
		'dbprefix' => 'kotak_'
	),
);

$config['site_url'] = "http://10.234.0.110/kotak-stage/";

$config['theme_folder_url'] = "http://10.234.0.110/kotak-stage/themes/";
$config['theme_folder_path'] = "D:/kotak/apache/htdocs/kotak-stage/themes/";

$config['captcha_url'] = "http://10.234.0.110/kotak-stage/images/captchas/";
$config['captcha_path'] = "D:/kotak/apache/htdocs/kotak-stage/images/captchas/";

$config['emoticon_url'] = "http://10.234.0.110/kotak-stage/images/smileys/";

$config['avatar_url'] = "http://10.234.0.110/kotak-stage/images/avatars/";
$config['avatar_path'] = "D:/kotak/apache/htdocs/kotak-stage/images/avatars/";

$config['sig_img_url'] = "http://10.234.0.110/kotak-stage/images/signature_attachments/";
$config['sig_img_path'] = "D:/kotak/apache/htdocs/kotak-stage/images/signature_attachments/";

$config['upload_preferences'] = array(
    1 => array(                                                            // ID of upload destination
        'name'        => 'Image Uploads',                          // Display name in control panel
        'server_path' => 'D:/kotak/apache/htdocs/kotak-stage/images/uploads/', // Server path to upload directory
        'url'         => 'http://10.234.0.110/kotak-stage/images/uploads/'      // URL of upload directory
    )
);

// converting / to \ because of Windows
//if(defined('PHP_OS') && strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
//	$env_config['upload_preferences'][1]['server_path'] = str_replace("/", "\\", $env_config['upload_preferences'][1]['server_path']);		
//}


// EOF