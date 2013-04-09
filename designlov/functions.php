<?php
	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 360, 9999 );

	function designlov_search_form( $form ) {

    	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
			    <input type="text" placeholder="Buscar inspiração" value="' . get_search_query() . '" name="s" id="s" />
			    <input type="submit" id="searchsubmit" value=" " />
		    </form>';

    	return $form;
	}

	add_filter( 'get_search_form', 'designlov_search_form' );