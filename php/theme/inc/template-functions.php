<?php 
    /**
     * php/theme/inc/template-functions.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    function penserv_body_classes( $classes ) {
        // Adds a class of hfeed to non-singular pages.
        if ( ! is_singular() ) {
            $classes[] = 'hfeed';
        }
        // Adds a class of no-sidebar when there is no sidebar present.
        if ( ! is_active_sidebar( 'sidebar-1' ) ) {
            $classes[] = 'no-sidebar';
        }
        return $classes;
    }
    add_filter( 'body_class', 'penserv_body_classes' );
    /**
     * Add a pingback url auto-discovery header for single posts, pages, or attachments.
     */
    function penserv_pingback_header() {
        if ( is_singular() && pings_open() ) {
            printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
        }
    }
    add_action( 'wp_head', 'penserv_pingback_header' );
?>