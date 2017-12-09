<?php
/*
This file adds fonts to your website. It is included into functions.php. Font Settings are set through Customizer.
*/
		
		if (get_theme_mod('columnist_headings_font') == 'Lato'|get_theme_mod('columnist_body_font') == 'Lato') {
				wp_enqueue_style('lato', 'https://fonts.googleapis.com/css?family=Lato' );
		} 
		
		if (get_theme_mod('columnist_headings_font') == 'Bangers'|get_theme_mod('columnist_body_font') == 'Bangers') {
				wp_enqueue_style('bangers', 'https://fonts.googleapis.com/css?family=Bangers' );
		} 		

		if (get_theme_mod('columnist_headings_font') == 'Anton'|get_theme_mod('columnist_body_font') == 'Anton') {
				wp_enqueue_style('anton', 'https://fonts.googleapis.com/css?family=Anton' );
		} 
		
		if (get_theme_mod('columnist_headings_font') == 'Yanone Kaffeesatz'|get_theme_mod('columnist_body_font') == 'Yanone Kaffeesatz') {
				wp_enqueue_style('yanone', 'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' );
		} 
	
if ( get_theme_mod('columnist_cyrillic') == 1) {    

		if (get_theme_mod('columnist_headings_font') == 'Open Sans'|get_theme_mod('columnist_body_font') == 'Open Sans') {
				wp_enqueue_style('open_sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,cyrillic' );
		} 
		
		if (get_theme_mod('columnist_headings_font') == 'Lobster'|get_theme_mod('columnist_body_font') == 'Lobster') {
				wp_enqueue_style('lobster', 'http://fonts.googleapis.com/css?family=Lobster&subset=cyrillic,latin' );
		}	
		
		if (get_theme_mod('columnist_headings_font') == 'Noto Serif'|get_theme_mod('columnist_body_font') == 'Noto Serif') {
				wp_enqueue_style('noto_serif', 'http://fonts.googleapis.com/css?family=Noto+Serif&subset=latin,cyrillic' );
		} 	
		
		if (get_theme_mod('columnist_headings_font') == 'Noto Sans'|get_theme_mod('columnist_body_font') == 'Noto Sans') {
				wp_enqueue_style('noto_sans', 'http://fonts.googleapis.com/css?family=Noto+Sans&subset=cyrillic,latin' );
		} 	
		
		if (get_theme_mod('columnist_headings_font') == 'Roboto'|get_theme_mod('columnist_body_font') == 'Roboto') {
				wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' );
		} 

		if (get_theme_mod('columnist_headings_font') == 'PT Sans'|get_theme_mod('columnist_body_font') == 'PT Sans') {
				wp_enqueue_style('ptsans', 'https://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' );
		} 
		
		if (get_theme_mod('columnist_headings_font') == 'PT Sans Narrow'|get_theme_mod('columnist_body_font') == 'PT Sans Narrow') {
				wp_enqueue_style('ptsansnarrow', 'https://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' );
		}
		
}
else {

		if (get_theme_mod('columnist_headings_font') == 'Open Sans'|get_theme_mod('columnist_body_font') == 'Open Sans') {
				wp_enqueue_style('open_sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700' );
		} 
		
		if (get_theme_mod('columnist_headings_font') == 'Lobster'|get_theme_mod('columnist_body_font') == 'Lobster') {
				wp_enqueue_style('lobster', 'http://fonts.googleapis.com/css?family=Lobster' );
		}	
		
		if (get_theme_mod('columnist_headings_font') == 'Noto Serif'|get_theme_mod('columnist_body_font') == 'Noto Serif') {
				wp_enqueue_style('noto_serif', 'http://fonts.googleapis.com/css?family=Noto+Serif' );
		} 	
		
		if (get_theme_mod('columnist_headings_font') == 'Noto Sans'|get_theme_mod('columnist_body_font') == 'Noto Sans') {
				wp_enqueue_style('noto_sans', 'http://fonts.googleapis.com/css?family=Noto+Sans' );
		} 	
		
		if (get_theme_mod('columnist_headings_font') == 'Roboto'|get_theme_mod('columnist_body_font') == 'Roboto') {
				wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
		} 
	
		if (get_theme_mod('columnist_headings_font') == 'PT Sans'|get_theme_mod('columnist_body_font') == 'PT Sans') {
				wp_enqueue_style('ptsans', 'https://fonts.googleapis.com/css?family=PT+Sans' );
		} 
		
		if (get_theme_mod('columnist_headings_font') == 'PT Sans Narrow'|get_theme_mod('columnist_body_font') == 'PT Sans Narrow') {
				wp_enqueue_style('ptsansnarrow', 'https://fonts.googleapis.com/css?family=PT+Sans+Narrow' );
		} 	

};
?>