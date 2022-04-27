<?php 


add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// Register Menus
function register_my_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu')
    ));
}

add_action('init', 'register_my_menus');

function jobportal_widgets_init() {
    register_sidebar( array(
        'name' => __('Primary Sidebar', 'jobportal'),
        'id' =>  'main-sidebar',
        'description' => 'Main Sidebar on Right Side',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ) );

    register_sidebar( array(
        'name' => __('Footer One', 'jobportal'),
        'id' =>  'footer-1',
        'description' => 'Footer One',
        'before_widget' => '<li id="%1$s" class="footer-logo %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<header><h3 class="widgettitle">',
        'after_title'   => "</h3></header>\n",
    ) );

    register_sidebar( array(
        'name' => __('Footer Two', 'jobportal'),
        'id' =>  'footer-2',
        'description' => 'Footer Two',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<header><h3 class="widgettitle">',
        'after_title'   => "</h3></header>\n",
    ) );

    register_sidebar( array(
        'name' => __('Footer Three', 'jobportal'),
        'id' =>  'footer-3',
        'description' => 'Footer three',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ) );

    register_sidebar( array(
        'name' => __('Footer Four', 'jobportal'),
        'id' =>  'footer-4',
        'description' => 'Footer Four',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ) );
}

add_action('widgets_init', 'jobportal_widgets_init');

function jobportal_add_scripts() {

    // CSS
    wp_register_style('first', get_template_directory_uri() . '/assets/css/bootstrap.css', false, false);
    wp_enqueue_style('first');

    wp_register_style('second', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, false);
    wp_enqueue_style('second');

    wp_register_style('third', get_template_directory_uri() . '/assets/css/magnific-popup.css', false, false);
    wp_enqueue_style('third');

    wp_register_style('fourth', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false, false);
    wp_enqueue_style('fourth');

    wp_register_style('five', get_template_directory_uri() . '/assets/css/animate.min.css', false, false);
    wp_enqueue_style('five');

    wp_register_style('six', get_template_directory_uri() . '/assets/css/select2.min.css', false, false);
    wp_enqueue_style('six');

    wp_register_style('seven', get_template_directory_uri() . '/assets/css/slicknav.min.css', false, false);
    wp_enqueue_style('seven');

    wp_register_style('eight', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.min.css', false, false);
    wp_enqueue_style('eight');

    wp_register_style('nine', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', false, false);
    wp_enqueue_style('nine');

    wp_register_style('ten', get_template_directory_uri() . '/assets/css/perfect-scrollbar.min.css', false, false);
    wp_enqueue_style('ten');

    wp_register_style('eleven', get_template_directory_uri() . '/assets/css/style.css', false, false);
    wp_enqueue_style('eleven');

    wp_register_style('Twelve', get_template_directory_uri() . '/assets/css/responsive.css', false, false);
    wp_enqueue_style('Twelve');


    // Js
    wp_register_script('js-1', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), false , true);
    wp_enqueue_script('js-1');

    wp_register_script('js-2', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), false , true);
    wp_enqueue_script('js-2');

    wp_register_script('js-3', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.min.js', array(), false , true);
    wp_enqueue_script('js-3');

    wp_register_script('js-4', get_template_directory_uri() . '/assets/js/jquery-perfect-scrollbar.min.js', array(), false , true);
    wp_enqueue_script('js-4');

    wp_register_script('js-5', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), false , true);
    wp_enqueue_script('js-5');

    wp_register_script('js-6', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array(), false , true);
    wp_enqueue_script('js-6');

    wp_register_script('js-7', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), false , true);
    wp_enqueue_script('js-7');

    wp_register_script('js-8', get_template_directory_uri() . '/assets/js/select2.min.js', array(), false , true);
    wp_enqueue_script('js-8');

    wp_register_script('js-9', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), false , true);
    wp_enqueue_script('js-9');

    wp_register_script('js-10', get_template_directory_uri() . '/assets/js/jarallax.min.js', array(), false , true);
    wp_enqueue_script('js-10');

    wp_register_script('js-11', get_template_directory_uri() . '/assets/js/jarallax-video.min.js', array(), false , true);
    wp_enqueue_script('js-11');

    wp_register_script('js-12', get_template_directory_uri() . '/assets/js/main.js', array(), false , true);
    wp_enqueue_script('js-12');

}

add_action('wp_enqueue_scripts', 'jobportal_add_scripts');

// Custom Post type For job listing
function create_job_listing_posttype() {
	$labels = array(
		'name' 				=> _x('Job Portal', 'Post type name'),
		'singular_name' 	=> _x('portal', 'Singular name'),
		'add_new' 			=> _x('Add New', 'Job portal'),
		'add_new_item'		=> __('Add New Job'),
		'edit_item'         => __( 'Edit Job' ),
		'all_items'         => __( 'All Jobs' ),
		'view_item'			=> __( 'View Job' ),
		'public' 			=> true,
        'has_archive' 		=> true,
		'menu_name' 		=> 'Job Portal',	
	
	);
		
	$args = array(
	  'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'job_category'),
      'query_var' => true,
      'menu_icon'   	=> 'dashicons-list-view',
	  'supports' => array(
            'title',
            'editor',
            'excerpt',
            'revisions',
            'thumbnail',
			 'page-attributes'
        )
		
	);
	
	register_post_type('job-listing', $args);
	
	register_taxonomy('job_category', 'job-listing' , array('hierarchical' => true, 'label' => 'Job Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'job-category' )));
}
add_action('init', 'create_job_listing_posttype'); 




// Custom Post type For candidate Listing
function create_candidate_posttype() {
	$labels = array(
		'name' => _x('Candidate List', 'Post type name'),
		'singular_name' => _x('candidate', 'Singular name'),
		'edit_item'          => __( 'Edit list' ),
		'all_items'          => __( 'All Candidate' ),
		'public' => true,
        'has_archive' => true,
		'menu_name' => 'Candidate List',	
	
	);
		
	$args = array(
	'labels' => $labels,
		'public' => true,
      'has_archive' => true,
      'show_ui' => true,
	'description' => 'This is for job portal',
    'menu_icon'   => 'dashicons-admin-users'
	
	);
	
	register_post_type('candidate-list', $args);
}
add_action('init', 'create_candidate_posttype');

// Custom Post type For Future Job
function future_job_posttype() {
	$labels = array(
		'name' => _x('Future Job', 'Post type name'),
		'singular_name' => _x('future', 'Singular name'),
		'edit_item'          => __( 'Edit list' ),
		'all_items'          => __( 'All jobs' ),
		'public' => true,
        	'has_archive' => true,
		'menu_name' => 'Future Job',	
	
	);
		
	$args = array(
	'labels' => $labels,
		'public' => true,
      	'has_archive' => true,
      	'show_ui' => true,
	'description' => 'This is for Future job',
    'menu_icon'   => 'dashicons-admin-users'
	
	);
	
	register_post_type('future', $args);
}
add_action('init', 'future_job_posttype');
?>