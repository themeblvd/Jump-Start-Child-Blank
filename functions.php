<?php
/*-------------------------------------------------------*/
/* Run Theme Blvd framework (required)
/*-------------------------------------------------------*/

require_once ( get_template_directory() . '/framework/themeblvd.php' );

/*-------------------------------------------------------*/
/* Start Child Theme
/*-------------------------------------------------------*/

/**
 * Add custom stylesheet after all framework and Jump Start CSS.
 */

themeblvd_add_stylesheet( 'custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', 4 );