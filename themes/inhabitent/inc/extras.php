<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_logo() { ?>
	<style type="text/css">
			#login h1 a, .login h1 a {
					background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
	height:65px;
	width:320px;
	background-size: 320px 65px;
	background-repeat: no-repeat;
				padding-bottom: 30px;
			}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_logo' );


function custom_loginlogo_url($url) {
   return get_home_url();
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );

/**
* Customize the title attritbute for the login logo link.
* @return string
*/

function inhabitent_login_title(){
	return 'Inhabitent Camping Supply Co.';
}

add_filter('login_headertitle', 'inhabitent_login_title');

// changes header in about.php

function about_page_hero(){
	if ( !is_page_template( 'page-templates/about.php' ) ) {
			return;
	}
	else{
			$image = CFS()->get( 'background_hero' );
			if (!$image){
					return;
			}
			
			$hero_css = ".page-template-about .entry-header {
				background:
					linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
					url({$image}) no-repeat center bottom;
					background-size: cover, cover;
					width: 100%;
					height: 100vh;
			}";
			wp_add_inline_style ('red-starter-style',$hero_css);
	} 
}
add_action("wp_enqueue_scripts" , 'about_page_hero');