<?php
/*-----------------------------------------------------------------------------------*/
/* Functions shotcodes images
/*-----------------------------------------------------------------------------------*/
class jelli_shortcodes_images
{
	public function jelli_shortcodes_images()
	{
		// Snapshot of a website using wordpress.com
		add_shortcode("snapshot", array(&$this,'website_snapshot'));
	}
	
	
	function website_snapshot($atts, $content = null) 
	{
		extract(shortcode_atts(array(
			"snap" => 'http://s.wordpress.com/mshots/v1/',
			"url" => 'http://www.jelli.com',
			"alt" => 'My image',
			"width" => '400', // width
			"height" => '300' // height
		), $atts));
		
		$img = '<img src="' . $snap . '' . urlencode($url) . '?w=' . $width . '&h=' . $height . '" alt="' . $alt . '"/>';
		return $img;
	}// end website snapshot
	
}// end class
$jelli_shortcodes_images = new jelli_shortcodes_images();
?>