<?php  if ( ! defined('SYSPATH')) exit('No direct script access allowed');

use EllisLab\ExpressionEngine\Library\Filesystem\Filesystem;

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2016, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Common Functions
 *
 * Loads the base classes and executes the request.
 *
 * @package		CodeIgniter
 * @subpackage	codeigniter
 * @category	Common Functions
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/
 */

// ------------------------------------------------------------------------

/**
* Determines if the current version of PHP is greater then the supplied value
*
* Since there are a few places where we conditionally test for PHP > 5
* we'll set a static variable.
*
* @access	public
* @param	string
* @return	bool	TRUE if the current version is $version or higher
*/
	function is_php($version = '5.0.0')
	{
		return (version_compare(PHP_VERSION, $version) < 0) ? FALSE : TRUE;
	}

// ------------------------------------------------------------------------

/**
 * Tests for file writability
 *
 * is_writable() returns TRUE on Windows servers when you really can't write to
 * the file, based on the read-only attribute.  is_writable() is also unreliable
 * on Unix servers if safe_mode is on.
 *
 * @deprecated 3.0.0
 * @access	private
 * @return	void
 */
	function is_really_writable($file)
	{
		$fs = new Filesystem();

		return $fs->isWritable($file);
	}

// ------------------------------------------------------------------------

/**
* Class registry
*
* This function acts as a singleton.  If the requested class does not
* exist it is instantiated and set to a static variable.  If it has
* previously been instantiated the variable is returned.
*
* @access	public
* @param	string	the class name being requested
* @param	string	the directory where the class should be found
* @param	string	the class name prefix
* @return	object
*/
	function &load_class($class, $directory = 'libraries', $prefix = 'EE_')
	{
		static $_classes = array();

		// Does the class exist?  If so, we're done...
		if (isset($_classes[$class]))
		{
			return $_classes[$class];
		}

		$name = FALSE;

		// Look for the class first in the native system/libraries folder
		// thenin the local application/libraries folder
		foreach (array(APPPATH, BASEPATH) as $path)
		{
			if (file_exists($path.$directory.'/'.$class.'.php'))
			{
				$name = $prefix.$class;

				if (class_exists($name) === FALSE)
				{
					require($path.$directory.'/'.$class.'.php');
				}

				break;
			}
		}

		// Is the request a class extension?  If so we load it too
		if (file_exists(APPPATH.$directory.'/'.config_item('subclass_prefix').$class.'.php'))
		{
			$name = config_item('subclass_prefix').$class;

			if (class_exists($name) === FALSE)
			{
				require(APPPATH.$directory.'/'.config_item('subclass_prefix').$class.'.php');
			}
		}

		// Did we find the class?
		if ($name === FALSE)
		{
			// Note: We use exit() rather then show_error() in order to avoid a
			// self-referencing loop with the Excptions class
			set_status_header(503);
			exit('Unable to locate the specified class: '.$class.'.php');
		}

		// Keep track of what we just loaded
		is_loaded($class);

		$_classes[$class] = new $name();
		return $_classes[$class];
	}

// --------------------------------------------------------------------

/**
* Keeps track of which libraries have been loaded.  This function is
* called by the load_class() function above
*
* @access	public
* @return	array
*/
	function is_loaded($class = '')
	{
		static $_is_loaded = array();

		if ($class != '')
		{
			$_is_loaded[strtolower($class)] = $class;
		}

		return $_is_loaded;
	}

// ------------------------------------------------------------------------

/**
* Loads the main config.php file
*
* This function lets us grab the config file even if the Config class
* hasn't been instantiated yet
*
* @access	private
* @return	array
*/
	function &get_config($replace = array())
	{
		static $config;

		if (isset($config))
		{
			return $config;
		}

		// Check various paths for config files
		$basepath = (defined('EE_APPPATH')) ? APPPATH : SYSPATH.'user/';

		// Fetch the config file
		if ( ! file_exists($basepath.'config/config.php'))
		{
			set_status_header(503);
			exit('The configuration file does not exist.');
		}

		require($basepath.'config/config.php');

		// Does the $config array exist in the file?
		if ( ! isset($config) OR ! is_array($config))
		{
			set_status_header(503);
			exit('Your config file does not appear to be formatted correctly.');
		}

		// Are any values being dynamically replaced?
		if (count($replace) > 0)
		{
			foreach ($replace as $key => $val)
			{
				if (isset($config[$key]))
				{
					$config[$key] = $val;
				}
			}
		}

		return $config;
	}

// ------------------------------------------------------------------------

/**
 * Returns the default config items
 *
 * @access public
 * @return array Associative array of default config items
 */
	function default_config_items()
	{
		return array(
			'allow_extensions'   => 'y',
			'cache_driver'       => 'file',
			'cache_path'         => '',
			'charset'            => 'UTF-8',
			'cookie_httponly'    => 'y',
			'debug'              => 1,
			'encryption_key'     => '',
			'is_system_on'       => 'y',
			'log_date_format'    => 'Y-m-d H:i:s',
			'log_threshold'      => 0,
			'rewrite_short_tags' => TRUE,
			'subclass_prefix'    => 'EE_',
			'uri_protocol'       => 'AUTO',
		);
	}

// ------------------------------------------------------------------------

/**
* Returns the specified config item
*
* @access	public
* @param	string	$item		Name of config item
* @param	string	$raw_value	When TRUE, does not run through parse_config_variables
* @return	mixed
*/
	function config_item($item, $raw_value = FALSE)
	{
		$config =& get_config();

		if ( ! isset($config[$item]))
		{
			$defaults = default_config_items();

			if (isset($defaults[$item]))
			{
				return $defaults[$item];
			}

			return FALSE;
		}

		return $raw_value ? $config[$item] : parse_config_variables($config[$item]);
	}

// ------------------------------------------------------------------------

/**
* Parses select variables in a config value's string
*
* @access	public
* @param	string	$value		Config value containing variables needing parsed
* @param	string	$variables	Optional override variables, like when a parsed value
*   relies on something in POST
* @return	mixed
*/
	function parse_config_variables($value, $variables = array())
	{
		if (is_string($value) && strpos($value, '{') !== FALSE)
		{
			foreach (array('base_path', 'base_url') as $variable)
			{
				// Get the variable's value but prevent a possible infinite loop
				// by getting the raw config value; will need to revisit if we
				// allow nested variables later on
				$var_value = isset($variables[$variable]) ? $variables[$variable] : config_item($variable, TRUE);

				// Replace the variable
				$value = str_replace('{'.$variable.'}', $var_value, $value);

				// Reduce double slashes
				$value = preg_replace("#([^/:])/+#", "\\1/", $value);
			}
		}

		return $value;
	}

// ------------------------------------------------------------------------

/**
* Returns the specified config item as a boolean.
*
* Defaults to FALSE for items that are not set. Intelligently converts 'y/n'
* to booleans.
*
* @access	public
* @return	mixed
*/
	function bool_config_item($item)
	{
		if (function_exists('ee') && ee() !== NULL)
		{
			$value = ee()->config->item($item);
		}
		else
		{
			$value = config_item($item);
		}

		$setting = get_bool_from_string($value);
		return (is_bool($setting)) ? $setting : (bool) $value;
	}

// ------------------------------------------------------------------------

/**
 * Get's a boolean value from a string such as 'y', 'yes', 'n', or 'no', if it
 * doesn't find anything like that, return NULL
 * @param  string $value The string to determine the boolean value of
 * @return boolean/NULL  TRUE or FALSE if the string indicates yes or no, NULL
 *                       otherwise
 */
	function get_bool_from_string($value)
	{
		if (is_bool($value))
		{
			return $value;
		}

		switch(strtolower($value))
		{
			case 'yes':
			case 'y':
			case 'on':
				return TRUE;
			break;

			case 'no':
			case 'n':
			case 'off':
				return FALSE;
			break;

			default:
				return NULL;
			break;
		}
	}

// ------------------------------------------------------------------------

/**
* Error Handler
*
* This function lets us invoke the exception class and
* display errors using the standard error template located
* in application/errors/errors.php
* This function will send the error page directly to the
* browser and exit.
*
* @access	public
* @return	void
*/
	function show_error($message, $status_code = 500, $heading = 'Error')
	{
		$_error = load_class('Exceptions', 'core');
		echo $_error->show_error($heading, $message, 'error_general', $status_code);
		exit;
	}

// ------------------------------------------------------------------------

/**
* Exception Handler
*
* This function lets us invoke the exception class and
* display errors using the standard error template located
* in application/errors/errors.php
* This function will send the error page directly to the
* browser and exit.
*
* @access	public
* @return	void
*/
	function show_exception(\Exception $e, $status_code = 500)
	{
		$_error = load_class('Exceptions', 'core');
		echo $_error->show_exception($e, $status_code);
		exit;
	}

// ------------------------------------------------------------------------

/**
* 404 Page Handler
*
* This function is similar to the show_error() function above
* However, instead of the standard error template it displays
* 404 errors.
*
* @access	public
* @return	void
*/
	function show_404($page = '', $log_error = TRUE)
	{
		$_error = load_class('Exceptions', 'core');
		$_error->show_404($page, $log_error);
		exit;
	}

// ------------------------------------------------------------------------

/**
* Error Logging Interface
*
* We use this as a simple mechanism to access the logging
* class and send messages to be logged.
*
* @access	public
* @return	void
*/
if ( ! function_exists('log_message'))
{
	function log_message($level = 'error', $message, $php_error = FALSE)
	{
		static $_log;

		if (config_item('log_threshold') == 0)
		{
			return;
		}

		$_log = load_class('Log');
		$_log->write_log($level, $message, $php_error);
	}
}

// ------------------------------------------------------------------------

/**
 * Set HTTP Status Header
 *
 * @access	public
 * @param	int		the status code
 * @param	string
 * @return	void
 */
	function set_status_header($code = 200, $text = '')
	{
		$stati = array(
							200	=> 'OK',
							201	=> 'Created',
							202	=> 'Accepted',
							203	=> 'Non-Authoritative Information',
							204	=> 'No Content',
							205	=> 'Reset Content',
							206	=> 'Partial Content',

							300	=> 'Multiple Choices',
							301	=> 'Moved Permanently',
							302	=> 'Found',
							304	=> 'Not Modified',
							305	=> 'Use Proxy',
							307	=> 'Temporary Redirect',

							400	=> 'Bad Request',
							401	=> 'Unauthorized',
							403	=> 'Forbidden',
							404	=> 'Not Found',
							405	=> 'Method Not Allowed',
							406	=> 'Not Acceptable',
							407	=> 'Proxy Authentication Required',
							408	=> 'Request Timeout',
							409	=> 'Conflict',
							410	=> 'Gone',
							411	=> 'Length Required',
							412	=> 'Precondition Failed',
							413	=> 'Request Entity Too Large',
							414	=> 'Request-URI Too Long',
							415	=> 'Unsupported Media Type',
							416	=> 'Requested Range Not Satisfiable',
							417	=> 'Expectation Failed',

							500	=> 'Internal Server Error',
							501	=> 'Not Implemented',
							502	=> 'Bad Gateway',
							503	=> 'Service Unavailable',
							504	=> 'Gateway Timeout',
							505	=> 'HTTP Version Not Supported'
						);

		if ($code == '' OR ! is_numeric($code))
		{
			show_error('Status codes must be numeric', 500);
		}

		if (isset($stati[$code]) AND $text == '')
		{
			$text = $stati[$code];
		}

		if ($text == '')
		{
			show_error('No status text available.  Please check your status code number or supply your own message text.', 500);
		}

		$server_protocol = (isset($_SERVER['SERVER_PROTOCOL'])) ? $_SERVER['SERVER_PROTOCOL'] : FALSE;

		if (substr(php_sapi_name(), 0, 3) == 'cgi')
		{
			header("Status: {$code} {$text}", TRUE);
		}
		elseif ($server_protocol == 'HTTP/1.1' OR $server_protocol == 'HTTP/1.0')
		{
			header($server_protocol." {$code} {$text}", TRUE, $code);
		}
		else
		{
			header("HTTP/1.1 {$code} {$text}", TRUE, $code);
		}
	}

// --------------------------------------------------------------------

/**
* Exception Handler
*
* This is the custom exception handler that is declared at the top
* of boot.php.  The main reason we use this is to permit
* PHP errors to be logged in our own log files since the user may
* not have access to server logs. Since this function
* effectively intercepts PHP errors, however, we also need
* to display errors based on the current error_reporting level.
* We do that with the use of a PHP error template.
*
* @access	private
* @return	void
*/
	function _exception_handler($severity, $message, $filepath, $line)
	{
		 // We don't bother with "strict" notices since they tend to fill up
		 // the log file with excess information that isn't normally very helpful.
		 // For example, if you are running PHP 5 and you use version 4 style
		 // class functions (without prefixes like "public", "private", etc.)
		 // you'll get notices telling you that these have been deprecated.
		if ($severity == E_STRICT)
		{
			return;
		}

		$_error = load_class('Exceptions', 'core');

		// Should we display the error? We'll get the current error_reporting
		// level and add its bits with the severity bits to find out.
		if (($severity & error_reporting()) == $severity)
		{
			$_error->show_php_error($severity, $message, $filepath, $line);
		}

		// Should we log the error?
		if (config_item('log_threshold') > 0)
		{
			$_error->log_exception($severity, $message, $filepath, $line);
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Remove Invisible Characters
	 *
	 * This prevents sandwiching null characters
	 * between ascii characters, like Java\0script.
	 *
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	function remove_invisible_characters($str, $url_encoded = TRUE)
	{
		$non_displayables = array();

		// every control character except newline (dec 10)
		// carriage return (dec 13), and horizontal tab (dec 09)

		if ($url_encoded)
		{
			$non_displayables[] = '/%0[0-8bcef]/';	// url encoded 00-08, 11, 12, 14, 15
			$non_displayables[] = '/%1[0-9a-f]/';	// url encoded 16-31
		}

		$non_displayables[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';	// 00-08, 11, 12, 14-31, 127

		do
		{
			$str = preg_replace($non_displayables, '', $str, -1, $count);
		}
		while ($count);

		return $str;
	}

// ------------------------------------------------------------------------

if ( ! function_exists('function_usable'))
{
	/**
	 * Function usable
	 *
	 * Executes a function_exists() check, and if the Suhosin PHP
	 * extension is loaded - checks whether the function that is
	 * checked might be disabled in there as well.
	 *
	 * This is useful as function_exists() will return FALSE for
	 * functions disabled via the *disable_functions* php.ini
	 * setting, but not for *suhosin.executor.func.blacklist* and
	 * *suhosin.executor.disable_eval*. These settings will just
	 * terminate script execution if a disabled function is executed.
	 *
	 * @link	http://www.hardened-php.net/suhosin/
	 * @param	string	$function_name	Function to check for
	 * @return	bool	TRUE if the function exists and is safe to call,
	 *			FALSE otherwise.
	 */
	function function_usable($function_name)
	{
		static $_suhosin_func_blacklist;

		if (function_exists($function_name))
		{
			if ( ! isset($_suhosin_func_blacklist))
			{
				if (extension_loaded('suhosin'))
				{
					$_suhosin_func_blacklist = explode(',', trim(@ini_get('suhosin.executor.func.blacklist')));

					if ( ! in_array('eval', $_suhosin_func_blacklist, TRUE) && @ini_get('suhosin.executor.disable_eval'))
					{
						$_suhosin_func_blacklist[] = 'eval';
					}
				}
				else
				{
					$_suhosin_func_blacklist = array();
				}
			}

			return ! in_array($function_name, $_suhosin_func_blacklist, TRUE);
		}

		return FALSE;
	}
}

// EOF
