<?php
// Template Name: chloe

?>
Ceci est mon nouveau template test.php

<?php

<?php do_action( 'cl' ); ?>


$pages = get_pages ();
	echo '<p>LISTE</p>'
	foreach ($pages as $pages) {

		echo ($page->post_title . '<br>')
		# code...
	}
	
	echo 'DEBUG'
	echo '>pre>';
	print_r($pages);
	echo '</pre>';
