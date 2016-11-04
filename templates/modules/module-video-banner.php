<?php 
if (! wp_is_mobile() ) { 
	do_action( 'pbd_video_header' );
}else {
		do_action( 'pbd_mobile_header' );
}








