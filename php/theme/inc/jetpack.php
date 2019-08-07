<?php 
    /**
     * php/theme/inc/jetpack.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    function penserv_jetpack_setup() {
        // Add theme support for Infinite Scroll.
        add_theme_support( 'infinite-scroll', array(
            'container' => 'main',
            'render'    => 'penserv_infinite_scroll_render',
            'footer'    => 'page',
        ) );
        // Add theme support for Responsive Videos.
        add_theme_support( 'jetpack-responsive-videos' );
        // Add theme support for Content Options.
        add_theme_support( 'jetpack-content-options', array(
            'post-details'    => array(
                'stylesheet' => 'penserv-style',
                'date'       => '.posted-on',
                'categories' => '.cat-links',
                'tags'       => '.tags-links',
                'author'     => '.byline',
                'comment'    => '.comments-link',
            ),
            'featured-images' => array(
                'archive'    => true,
                'post'       => true,
                'page'       => true,
            ),
        ) );
    }
    add_action( 'after_setup_theme', 'penserv_jetpack_setup' );
    /**
     * Custom render function for Infinite Scroll.
     */
    function penserv_infinite_scroll_render() {
        while ( have_posts() ) {
            the_post();
            if ( is_search() ) :
                get_template_part( 'php/theme/parts/content', 'search' );
            else :
                get_template_part( 'php/theme/parts/content', get_post_type() );
            endif;
        }
    }
?>