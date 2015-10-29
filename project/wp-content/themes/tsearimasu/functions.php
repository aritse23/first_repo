<?php
// Adding extra css 
//add original css styling, should be the (name of folder in htdocs)_styles()
//bootstrap_css and googlefont_css etc are just naming conventions, not predefined or have another particualar use.
function project_styles() {
	// Adding a bootstrap css
	//add google fonts, (multiple google fonts)
	//200%7c allows you to put in another font after that.
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js' );
	// Adding a google font
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Raleway:400,800,200%7cOpen+Sans' );
	// Adding a main css
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
//Add the wp_enqueue_style to make wp_function_styles function work, without this line, the above code wont work
// Makes the above work
add_action( 'wp_enqueue_scripts', 'project_styles' );
// Adding extra js 
function project_js() {
	global $wp_scripts;
	//html5_shiv helps browsers that cant deal with hml 5 to deal with html5.
// Adding respond.js & html5.shiv
//need those apostrophes at the end of line. Those are incase u have a different file link for different version numbers.	
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
// Only runs if Browser is ltr then IE9
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
// Adding bootstrap.js & main.js
	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery', 'bootstrap_js'), '', true );
}
// Makes the above work
add_action( 'wp_enqueue_scripts', 'project_js' );
//Removes the user login bar at the top 
add_filter( 'show_admin_bar', '__return_false' );
?>