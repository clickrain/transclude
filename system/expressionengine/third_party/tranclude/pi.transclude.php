<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name'        => 'Transclude',
	'pi_version'     => '1.0.0',
	'pi_author'      => 'Click Rain',
	'pi_author_url'  => 'http://clickrain.com/',
	'pi_description' => 'Transclude - Include the contents of a file in your template',
	'pi_usage'       => Transclude::usage()
	);


class Transclude
{
	var $return_data = '';

	function __construct() {
		$this->EE =& get_instance();

		$url = $this->EE->TMPL->fetch_param('url', '');
		if ($url === '') {
			$this->return_data = '';
			return;
		}

		$file = $_SERVER['DOCUMENT_ROOT'] . $url;

		$this->return_data = file_get_contents($file);
	}

	/**
	 * Usage
	 *
	 * This function describes how the plugin is used.
	 *
	 * @access	public
	 * @return	string
	 */

	//  Make sure and use output buffering

	function usage()
	{
		ob_start();
?>

Transclude trancludes a file into your template. The file is determined
relative to your document root.

{exp:tranclude url="/assets/images/logo.svg"}
=> <svg ...

<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}
