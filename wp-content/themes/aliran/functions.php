<?php

add_theme_support('post-thumbnails');

add_theme_support('menus');

//Добавление <title>:
add_theme_support( 'title-tag' );
//i love sonich

function aliran_add_scripts() {


	wp_enqueue_style( 'style-app', get_stylesheet_directory_uri() . '/css/app.css' );
	wp_enqueue_style( 'style-media', get_stylesheet_directory_uri() . '/css/media.css' );
	wp_enqueue_style( 'style-bootstrap', get_stylesheet_directory_uri() . '/libs/bootstrap/dist/css/bootstrap.min.css' );

	wp_enqueue_script( 'script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-bootstrap', get_stylesheet_directory_uri() . '/libs/bootstrap/dist/js/bootstrap.min.js', array(), '1.0.0', true );
	
}

add_action( 'wp_enqueue_scripts', 'aliran_add_scripts' );



function tpl_portfolio() {
	register_post_type( 'portfolio', array(
		'public' => true,
		'labels' => array(
			'name' => 'Портфолио',
			'all_items' => 'Все работы',
			'add_new' => 'Добавить работу',
			'add_new_item' => 'Добавление работы в портфолио'
			),
		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( 'post_tag', 'category ')
		)
	);
};
add_action( 'init', 'tpl_portfolio' );

function true_thumbnail_url_only( $html ){
	return preg_replace('#.*src="([^\"]+)".*#', '\1', $html );
}
add_filter('post_thumbnail_html', 'true_thumbnail_url_only', 10, 5);


function tpl_title_top_desc() {
	register_post_type( 'title_top_desc', array(
		'public' => true,
		'labels' => array(
			'name' => 'title description',
			'all_items' => 'Все работы',
			'add_new' => 'Добавить работу',
			'add_new_item' => 'Добавление работы в портфолио'
			),
		'supports' => array( 'title', 'thumbnail','editor' ),
		'taxonomies' => array( 'post_tag', 'category ')
		)
	);
};
add_action( 'init', 'tpl_title_top_desc' );


function tpl_improve_box() {
	register_post_type( 'improve_box', array(
		'public' => true,
		'labels' => array(
			'name' => 'improve_boxes',
			'all_items' => 'Все работы',
			'add_new' => 'Добавить работу',
			'add_new_item' => 'Добавление работы в портфолио'
			),
		'supports' => array( 'title', 'thumbnail','editor' ),
		'taxonomies' => array( 'post_tag', 'category ')
		)
	);
};
add_action( 'init', 'tpl_improve_box' );

function tpl_item_with_drop() {
	register_post_type( 'item_with_drop', array(
		'public' => true,
		'labels' => array(
			'name' => 'item_with_drop',
			'all_items' => 'Все работы',
			'add_new' => 'Добавить работу',
			'add_new_item' => 'Добавление работы в портфолио'
			),
		'supports' => array( 'title', 'thumbnail','editor' ),
		'taxonomies' => array( 'post_tag', 'category ')
		)
	);
};
add_action( 'init', 'tpl_item_with_drop' );

function tpl_item_form() {
	register_post_type( 'item_form', array(
		'public' => true,
		'labels' => array(
			'name' => 'item_form',
			'all_items' => 'Все работы',
			'add_new' => 'Добавить работу',
			'add_new_item' => 'Добавление работы в портфолио'
			),
		'supports' => array( 'title', 'thumbnail','editor' ),
		'taxonomies' => array( 'post_tag', 'category ')
		)
	);
};
add_action( 'init', 'tpl_item_form' );

function imp_wpcf7_form_elements( $content) {
    $str_pos = strpos( $content, 'name="nameg"' );
    $content = substr_replace( $content, 'data-attr="custom" data-val-msg="введите Имя"  data-val="\S" data-val-msg-id="userNameMsg" ', $str_pos, 0 );
	
	
	$str_pos_next = strpos($content, 'name="telephone"');
	$content = substr_replace( $content,  'data-attr="custom"   data-val="^\d{10}$" data-val-msg="телефон в формате 0123456789 10 цифр" data-val-msg-id="phone-msg" ', $str_pos_next, 0 );
	
	return $content;
}

add_filter( 'wpcf7_form_elements', 'imp_wpcf7_form_elements' );



?>