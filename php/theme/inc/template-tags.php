<?php 
    /**
     * php/theme/inc/template-tags.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    if ( ! function_exists( 'penserv_posted_on' ) ) :
        /**
         * Prints HTML with meta information for the current post-date/time.
         */
        function penserv_posted_on() {
            $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
            if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
            }
            $time_string = sprintf( $time_string,
                esc_attr( get_the_date( DATE_W3C ) ),
                esc_html( get_the_date() ),
                esc_attr( get_the_modified_date( DATE_W3C ) ),
                esc_html( get_the_modified_date() )
            );
            $posted_on = sprintf(
                /* translators: %s: post date. */
                esc_html_x( 'Posted on %s', 'post date', 'penserv' ),
                '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
            );
            echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
        }
    endif;
    if ( ! function_exists( 'penserv_posted_by' ) ) :
        /**
         * Prints HTML with meta information for the current author.
         */
        function penserv_posted_by() {
            $byline = sprintf(
                /* translators: %s: post author. */
                esc_html_x( 'by %s', 'post author', 'penserv' ),
                '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
            );
            echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
        }
    endif;
?>