<?php

	add_theme_support('menus');
	add_theme_support('post-thumbnails');

function thistheme_enqueue_style() {
	wp_enqueue_style( 'bs', get_bloginfo('template_url').'/css/bootstrap.min.css', false );
	wp_enqueue_style( 'roboto_font', 'https://fonts.googleapis.com/css?family=Roboto:400,500,300&subset=latin,cyrillic', false );
	wp_enqueue_style( 'owl', get_bloginfo('template_url').'/css/owl.carousel.min.css', false );
	wp_enqueue_style( 'core', get_bloginfo('template_url').'/style.css', false );
}

function thistheme_enqueue_script() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bs', get_bloginfo('template_url').'/js/bootstrap.min.js', array('jquery'), false );
	wp_enqueue_script( 'owl', get_bloginfo('template_url').'/js/owl.carousel.min.js', array('jquery'), false );
	wp_enqueue_script( 'core', get_bloginfo('template_url').'/js/script.js', array('jquery', 'owl', 'bs'), false );

}

add_action( 'wp_enqueue_scripts', 'thistheme_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'thistheme_enqueue_script' );



/* temporary fix #33199 reopened defect (bug) */
function chromefix_admin_init()
{
  if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
  {
    add_action( 'admin_print_styles', 'chromefix_print_css' );
  }
}

function chromefix_print_css()
{
?>
  <style type="text/css" media="screen">
    #adminmenu {
      transform: translateZ(0);
    }
  </style>
<?php
}

add_action( 'admin_init', 'chromefix_admin_init' );

/*********************************************/
/********     Аdding custom types    *********/
/*********************************************/

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Праздники', 'Post Type General Name', 'of_domain' ),
		'singular_name'       => _x( 'Праздник', 'Post Type Singular Name', 'of_domain' ),
		'menu_name'           => __( 'Праздники', 'of_domain' ),
		'name_admin_bar'      => __( 'Праздник', 'of_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'of_domain' ),
		'all_items'           => __( 'Все праздники', 'of_domain' ),
		'add_new_item'        => __( 'Добавит новый праздник', 'of_domain' ),
		'add_new'             => __( 'Добавить новый', 'of_domain' ),
		'new_item'            => __( 'Новый праздник', 'of_domain' ),
		'edit_item'           => __( 'Изменить праздник', 'of_domain' ),
		'update_item'         => __( 'Обновить праздник', 'of_domain' ),
		'view_item'           => __( 'Просмотреть праздник', 'of_domain' ),
		'search_items'        => __( 'Найти праздник', 'of_domain' ),
		'not_found'           => __( 'Не найдено', 'of_domain' ),
		'not_found_in_trash'  => __( 'Не найдено в корзине', 'of_domain' ),
	);
	$args = array(
		'label'               => __( 'Праздник', 'of_domain' ),
		'description'         => __( 'Портфолио — Что мы делаем', 'of_domain' ),
		'labels'              => $labels,
		'menu_icon'						=> 'dashicons-portfolio',
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 15,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'feast', $args );

}
add_action( 'init', 'custom_post_type', 0 );

/* Custom ajax-loader.gif for CF7*/
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
function my_wpcf7_ajax_loader () {
	return  get_bloginfo('stylesheet_directory') . '/images/ajax-loader.gif';
}
