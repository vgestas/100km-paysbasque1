<?php
// theme sub header breadcrumb functions
function spicepress_curPageURL() {
	$spicepress_page_url = 'http';
	if ( key_exists("HTTPS", $_SERVER) && ( $_SERVER["HTTPS"] == "on" ) ){
		$spicepress_page_url .= "s";
	}
	$spicepress_page_url .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$spicepress_page_url .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$spicepress_page_url .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $spicepress_page_url;
}

if( !function_exists('spicepress_breadcrumbs') ):
	function spicepress_breadcrumbs() { 
			
		global $post;
		$spicepress_homelink = home_url('/');;
	?>
		<div class="page-seperate"></div>
		<!-- /Page Title Section -->

		<div class="clearfix"></div>
	<?php }
endif
?>