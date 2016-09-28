<?php namespace Victor;

require 'simplehtmldom_1_5'.DIRECTORY_SEPARATOR.'simple_html_dom.php';
class SimpleHtmlDom {
	
	/**
     * get html dom from file
	 * @return \simplehtmldom_1_5\simple_html_dom
	 */
	static public function parseFile() {
		return call_user_func_array ( '\simplehtmldom_1_5\file_get_html' , func_get_args() );
	}
	/**
	 * get html dom from string
	 * @return \simplehtmldom_1_5\simple_html_dom
	 */
	static public function parseStr() {
		return call_user_func_array ( '\simplehtmldom_1_5\str_get_html' , func_get_args() );
	}
}