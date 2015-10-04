<?php
	
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
		'stationery_menu' => 'Stationery Menu',
		'design_menu' => 'Design Menu',
		'footer_meanu' => 'Footer Menu',
));

$main_nav_options = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

register_sidebar( array(
'name' => __( 'Blog Sidebar', 'te' ),
'id' => 'bbbhhhbbb',
'description' => __( 'Blog Sidebar' ),
'before_widget' => '<div class="sidebar_round">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
        'name' => __( 'Stationery', 'stationery' ),
        'id' => 'stationery',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="h4 ribbon"><span class="left-ribbon"></span>',
		'after_title'   => '<span class="right-ribbon"></span></h4>',
    ) 
);
register_sidebar( array(
        'name' => __( 'Information', 'information' ),
        'id' => 'information',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="h4 ribbon"><span class="left-ribbon"></span>',
		'after_title'   => '<span class="right-ribbon"></span></h4>',
    ) 
);
register_sidebar( array(
        'name' => __( 'Design', 'design' ),
        'id' => 'design',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="h4 ribbon"><span class="left-ribbon"></span>',
		'after_title'   => '<span class="right-ribbon"></span></h4>',
    ) 
);

add_theme_support( 'post-thumbnails' );





function codex_custom_init() {
	$args = array (
		'public' => true,
		'label' => 'Portfolio',
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies' => array('category')
	);
	$p_args = array (
		'public' => true,
		'label' => 'Press',
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies' => array('category')
	);
	register_post_type( 'portfolio', $args );
	register_post_type( 'n_press', $p_args );
}
add_action( 'init', 'codex_custom_init' );
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<a class="more-link" href="' . get_permalink() . '"> Read the rest</a>';
}


/* --------------CONTACT FORM---------------------*/
function your_scripts() {
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/ajax.js', $deps, $ver, true);
  wp_localize_script( 'script-name', 'MyAjax', array(
    // URL to wp-admin/admin-ajax.php to process data
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
 
    // Creates a random string to test against for security purposes
    'security' => wp_create_nonce( 'my-special-string' )
  ));
}
add_action( 'wp_enqueue_scripts', 'your_scripts' );

function contact_ajax(){
	wp_verify_nonce( 'my-special-string', 'security' );
	$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
	$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
	$date = htmlspecialchars(stripslashes(trim($_POST['date'])));
	$radio = htmlspecialchars(stripslashes(trim($_POST['radio'])));
	$message = htmlspecialchars(stripslashes(trim($_POST['message'])));
	
	$errors = array();
	if(strlen($name) < 4){
		$errors[] = "Please Enter Your Full Name";
	}
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	
	} else {
		$errors[] = "Please Enter A Valid Email";
	}
	
	
	if($errors){
		$error_encode = "<div class='form_errors'>";
		foreach($errors as $error){
			$error_encode .= "$error<br/>";
		}
		$error_encode .= "</div>";
		echo json_encode("$error_encode");
		die();
	} else {
 
		
		$email_message  = "<strong>Name:</strong> $fname<br/>";
		$email_message .= "<strong>Email:</strong> $email<br/>";
		$email_message .= "<strong>Date:</strong> $date<br/>";
		$email_message .= "<strong>Type:</strong> $radio<br/>";
		$email_message .= "<strong>Message:</strong> $message<br/>";
 
 
		$mail_send = wp_mail( 'me@philiparudy.com', 'April Lynn Designs', $email_message, 'no-reply@aprillynndesigns.com' );
		
 
		if($mail_send){
			echo json_encode("<div class='form_success'>Success! You Will Hear From Us Shortly</div><script>$('#contact')[0].reset();</script>");
			die();
		}
	}
	
	
}
 
add_action( 'wp_ajax_contact_ajax', 'contact_ajax' );
add_action( 'wp_ajax_nopriv_contact_ajax', 'contact_ajax' );



function theme_slug_widgets_init() {
    
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

function permalink_untrailingslashit($link) {
	return untrailingslashit($link);
}
add_filter('page_link', 'permalink_untrailingslashit');
add_filter('post_type_link', 'permalink_untrailingslashit');


?>
