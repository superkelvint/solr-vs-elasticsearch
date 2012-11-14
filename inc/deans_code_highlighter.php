<?php
/*
Plugin Name: Dean's Code Highlighter
Plugin URI: http://www.deanlee.cn/wordpress/code_highlighter_plugin_for_wordpress/
Description: this plugin using <a href="http://qbnz.com/highlighter/">Geshi</a> to highlight source code in your posts. .
Author: Dean Lee
Version: 1.2
Author URI: http://www.deanlee.cn
*/

/*  Copyright 2006  Dean Lee (email : deanlee2@hotmail.com)

You are free:

    * to copy, distribute, display, and perform the work
    * to make derivative works
    * to make commercial use of the work

Under the following conditions:
By Attribution: 

You must attribute the work by providing a link to 
http://www.deanlee.cn/projects from every domain and subdomain 
where this plugin will be used.  This link can be in the form of a simple link, 
or you can write a short post about your use of the plugin on your site.
Share Alike: 
If you alter, transform, or build upon this work, you may distribute the 
resulting work only under a licence identical to this one.

    * For any reuse or distribution, you must make clear to others the licence 
        terms of this work.
    * Any of these conditions can be waived if you get permission from the 
        copyright holder.
For more details please see: http://www.deanlee.cn/projects

*/
require_once("geshi.php");

$ch_options=array();
$ch_options['ch_b_linenumber']=false;				
$ch_options['ch_b_wrap_text']=true;				
$ch_options['ch_in_tab_width']=2;					
$ch_options['ch_b_strict_mode']=false;

//First init default values, then overwrite it with stored values so we can add default
//values with an update which get stored by the next edit.


function ch_go($key) {
	global $ch_options;
	return $ch_options[$key];	
}

class ch_highlight {
	var $ch_is_excerpt = false;
	function __construct()
	{
		$this->ch_is_excerpt= false;
		//add_action('wp_head', array(&$this, 'ch_gencss'));
		//add_filter('the_content',array(&$this, 'ch_the_content_filter'),1);
	}
	function ch_gencss()
	{
//		$cssurl = trailingslashit(get_option('siteurl')) .'wp-content/plugins/' . basename(dirname(__FILE__)) .'/geshi.css';
//		echo '<link rel="stylesheet" href="' . $cssurl .'"  type="text/css" />' ;
	}
	// PHP 4 Constructor
	function ch_highlight ()
	{
		$this->__construct() ;
	}
	
	function entodec($text){
		 $html_entities_match = array( "|\<br \/\>|", "#<#", "#>#", "|&#39;|", '#&quot;#', '#&nbsp;#' );
		$html_entities_replace = array( "\n", '&lt;', '&gt;', "'", '"', ' ' );

		$text = preg_replace( $html_entities_match, $html_entities_replace, $text );

		$text = str_replace('&lt;', '<', $text);
		$text = str_replace('&gt;', '>', $text);

		return $text;
	}

	function ch_highlight_code($matches){
		global $ch_options;
		// undo nl and p formatting
		$plancode = $matches[2];
		$plancode = $this->entodec($plancode);

		$geshi = new GeSHi($plancode, strtolower($matches[1]));
		$geshi->set_encoding('utf-8');
		$geshi->set_header_type(GESHI_HEADER_DIV);
		$geshi->enable_classes(true);
		
		$language = $geshi->get_language_name();
 
    if ($language == 'PHP') {
        $geshi->add_keyword(2, 'protected');
        $geshi->add_keyword(2, 'private');
        $geshi->add_keyword(2, 'abstract');
        $geshi->add_keyword(2, 'static');
        $geshi->add_keyword(2, 'final');
        $geshi->add_keyword(2, 'implements');
    } elseif ($language == 'Bash') {
        $geshi->add_keyword(2, 'convert');
        $geshi->add_keyword(2, 'git');
    } elseif ($language == 'Vim Script') {
        $geshi->add_keyword(1, 'endfunction');
    }
		
		if (ch_go('ch_b_linenumber'))
		{
			$geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS); 
		}
		$geshi->enable_strict_mode(ch_go('ch_b_strict_mode'));
		$geshi->set_tab_width(ch_go('ch_in_tab_width'));
		$geshi->set_overall_class('dean_ch');
		$overall_style='';
		if (!ch_go("ch_b_wrap_text"))
		{
			$overall_style.='white-space: nowrap;';
		}
		else
		{
			$overall_style.='white-space: wrap;';
		}
		
		if ($overall_style != '')
		{
			$geshi->set_overall_style($overall_style, false);
		}

		return $geshi->parse_code();
	}
	
	function ch_the_content_filter($content) {
			return preg_replace_callback("/<pre\s+.*lang\s*=\"(.*)\">(.*)<\/pre>/siU",
									 array(&$this, "ch_highlight_code"), 
									 $content);
  }
}
$ch_highlight = new ch_highlight();
?>
