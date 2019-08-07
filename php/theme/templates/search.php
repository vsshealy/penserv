<?php 
    /**
     * php/theme/templates/search.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'penserv' ), '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
        </header><!-- .page-header -->

        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part( 'php/theme/parts/content', 'search' );
        endwhile;
        the_posts_navigation();
    else :
        get_template_part( 'php/theme/parts/content', 'none' );
    endif;
    ?>

    </main><!-- #main -->
</section><!-- #primary -->