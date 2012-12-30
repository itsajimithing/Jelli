<?php
/*-----------------------------------------------------------------------------------*/
/* Functions for menus
/*-----------------------------------------------------------------------------------*/
class jelli_language
{
	public function jelli_language()
	{
	
	
	
		//load the text domain for localization
		add_action('after_theme_setup', array(&$this,'load_domain'));
	}






	function load_domain() 
	{
		$lang_dir = get_template_directory() . '/lang';
		load_theme_textdomain('jelli', $lang_dir);
	} // end load_domain
	
}// end class
$jelli_language = new jelli_language();
?>