<?php
/**
 * heidi Theme Customizer
 *
 * @package heidi
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function heidi_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
/**
* Add custom color options.
*
*/
	
	// Main Color
	$wp_customize->add_setting( 'main_color', array(
			'default' => '#6ac5a2',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
			'label' => 'Main Color',
			'section' => 'colors',
			'settings' => 'main_color',
	) ) );
	
	// Main Accent
	$wp_customize->add_setting( 'main_accent', array(
			'default' => '#4e9f80',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_accent', array(
			'label' => 'Main Accent',
			'section' => 'colors',
			'settings' => 'main_accent',
	) ) );
	
	// Posts Background
	$wp_customize->add_setting( 'posts_background', array(
			'default' => '#e9f0e9',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'posts_background', array(
			'label' => 'Posts Background',
			'section' => 'colors',
			'settings' => 'posts_background',
	) ) );
	
	// Posts Accent
	$wp_customize->add_setting( 'posts_accent', array(
			'default' => '#f0f7f0',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'posts_accent', array(
			'label' => 'Posts Accent',
			'section' => 'colors',
			'settings' => 'posts_accent',
	) ) );
	
	// Posts Border
	$wp_customize->add_setting( 'posts_border', array(
			'default' => '#c9cdc9',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'posts_border', array(
			'label' => 'Posts Border',
			'section' => 'colors',
			'settings' => 'posts_border',
	) ) );
	
	// Sticky Posts
	$wp_customize->add_setting( 'sticky_posts', array(
			'default' => '#bdddcf',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sticky_posts', array(
			'label' => 'Sticky Posts',
			'section' => 'colors',
			'settings' => 'sticky_posts',
	) ) );
	
	// Sticky Accent
	$wp_customize->add_setting( 'sticky_accent', array(
			'default' => '#d0e7dd',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sticky_accent', array(
			'label' => 'Sticky Accent',
			'section' => 'colors',
			'settings' => 'sticky_accent',
	) ) );
	
	// Sidebar Color
	$wp_customize->add_setting( 'sidebar_color', array(
			'default' => '#b4604e',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_color', array(
			'label' => 'Sidebar Color',
			'section' => 'colors',
			'settings' => 'sidebar_color',
	) ) );
	
	// Sidebar Links
	$wp_customize->add_setting( 'sidebar_links', array(
			'default' => '#f2bfb5',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_links', array(
			'label' => 'Sidebar Links',
			'section' => 'colors',
			'settings' => 'sidebar_links',
	) ) );
	
	// Calendar Main Color
	$wp_customize->add_setting( 'calendar_color', array(
			'default' => '#bf6956',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'calendar_color', array(
			'label' => 'Calendar Main Color',
			'section' => 'colors',
			'settings' => 'calendar_color',
	) ) );
	
	// Calendar Border
	$wp_customize->add_setting( 'calendar_border', array(
			'default' => '#c57768',
			'sanitize_callback' => 'sanitize_hex_color'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'calendar_border', array(
			'label' => 'Calendar Border',
			'section' => 'colors',
			'settings' => 'calendar_border',
	) ) );
}
add_action( 'customize_register', 'heidi_customize_register' );

function heidi_customizer_head_styles() {
	
	// Main Color
	$main_color = get_theme_mod( 'main_color' );

	if ( $main_color != '#6ac5a2' ) :
	?>
		<style type="text/css">
			.content-area a, .content-area a:visited {
				color: <?php echo esc_html( $main_color ); ?>;
			}

			.site-header, .main-navigation ul ul li, .site-footer {
				background: <?php echo esc_html( $main_color ); ?>;
			}
		</style>
	<?php
	endif;
	
	// Main Accent
	$main_accent = get_theme_mod( 'main_accent' );
	
	if ( $main_accent != '#4e9f80' ) :
	?>
		<style type="text/css">
			.sticky .entry-header {
				border-top-color: <?php echo esc_html( $main_accent ); ?>;
			}
	
			.sticky .entry-footer {
				border-bottom-color: <?php echo esc_html( $main_accent ); ?>;
			}
			
			.sticky a {
				color: <?php echo esc_html( $main_accent ); ?>;
			}
			
			blockquote {
				border-left-color: <?php echo esc_html( $main_accent ); ?>;
			}
			
			.more-link {
				background: <?php echo esc_html( $main_accent ); ?>;
			}
			
			.hentry h1 a, .posted-on a, .more-link:hover, .more-link:focus {
				color: <?php echo esc_html( $main_accent ); ?>;
			}
		</style>
	<?php
	endif;
	
	// Posts Background
	$posts_background = get_theme_mod( 'posts_background' );
	
	if ( $posts_background != '#e9f0e9' ) :
	?>
		<style type="text/css">
			.hentry, .comments-area {
				background: <?php echo esc_html( $posts_background ); ?>;
			}
		</style>
		
	<?php
	endif;
	
	// Posts Accent
	$posts_accent = get_theme_mod( 'posts_accent' );
	
	if ( $posts_background != '#f0f7f0' ) :
	?>
		<style type="text/css">
			.entry-footer, .comment-body, .single-post-thumbnail, table, pre {
				background: <?php echo esc_html( $posts_accent ); ?>;
			}
		</style>
	<?php
	endif;
	
	// Posts Border
	$posts_border = get_theme_mod( 'posts_border' );
	
	if ( $posts_background != '#c9cdc9' ) :
	?>
		<style type="text/css">
			.hentry, .comments-area {
				border-color: <?php echo esc_html( $posts_border ); ?>;
			}
		</style>
	<?php
	endif;
	
	// Sticky Posts
	$sticky_posts = get_theme_mod( 'sticky_posts' );
	
	if ( $sticky_posts != '#bdddcf' ) :
	?>
		<style type="text/css">
			.sticky, blockquote {
				background: <?php echo esc_html( $sticky_posts ); ?>!important;
			}
		</style>
	<?php
	endif;
	
	// Sticky Accent
	$sticky_accent = get_theme_mod( 'sticky_accent' );
	
	if ( $sticky_accent != '#d0e7dd' ) :
	?>
		<style type="text/css">
			.sticky .entry-footer, .sticky blockquote, thead {
				background: <?php echo esc_html( $sticky_accent ); ?>!important;
			}
		</style>
	<?php
	endif;
	
	// Sidebar Color
	$sidebar_color = get_theme_mod( 'sidebar_color' );
	
	if ( $main_accent != '#b4604e' ) :
	?>
		<style type="text/css">
			.widget-area, .date_with_link:hover, .page-title {
				background: <?php echo esc_html( $sidebar_color ); ?>;
			}
			
			.widget_calendar td > a, .widget_calendar td > a:focus,
			.sticky a:hover, .sticky a:focus,
			a:hover, a:focus, a:active {
				color: <?php echo esc_html( $sidebar_color ); ?>;
			}
			
			@media all and (min-width: 1024px) {
	
				.widget-area {
					background: transparent;
				}
				
				.widget {
					background: <?php echo esc_html( $sidebar_color ); ?>;
				}
				
			}
		</style>
	<?php
	endif;
	
	// Sidebar Links
	$sidebar_links = get_theme_mod( 'sidebar_links' );
	
	if ( $sidebar_links != '#f2bfb5' ) :
	?>
		<style type="text/css">
			.widget-area a {
				color: <?php echo esc_html( $sidebar_links ); ?>;
			}
		</style>
	<?php
	endif;
	
	// Calendar Color
	$calendar_color = get_theme_mod( 'calendar_color' );
	
	if ( $calendar_color != '#bf6956' ) :
	?>
		<style type="text/css">
			.widget-area table {
				background: <?php echo esc_html( $calendar_color ); ?>;
			}
		</style>
	<?php
	endif;
	
	// Calendar Border
	$calendar_border = get_theme_mod( 'calendar_border' );
	
	if ( $calendar_border != '#c57768' ) :
	?>
		<style type="text/css">
			.widget-area td,
			.widget-area th {
				border-color: <?php echo esc_html( $calendar_border ); ?>;
			}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'heidi_customizer_head_styles' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 * (only for site title and site description)
 */
function heidi_customize_preview_js() {
	wp_enqueue_script( 'heidi_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'heidi_customize_preview_js' );
