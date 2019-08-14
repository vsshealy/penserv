<?php 
    /**
     * php/parts/sections/services/plan-administration/section-details.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/13/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    $servicesPlanAdministration = array(
        'post_type' => 'services',
        'posts_per_page' => 6,
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'service_type',
                'field' => 'slug',
                'terms' => 'plan-administration'
            )
        )
    );

    $servicesPlanAdministrationListing = new WP_Query($servicesPlanAdministration);
?>

<section class="section-details">
    <div class="wrapper-inner row">
        <div class="col-xl-12">

            <?php if($servicesPlanAdministrationListing -> have_posts()) : ?>
                <?php while ($servicesPlanAdministrationListing -> have_posts()) : $servicesPlanAdministrationListing -> the_post(); ?>

                    <div class="section-details-listing col-sm-12 col-md-6 col-lg-4">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <div class="wrapper-inner">

                                <!-- .SECTION-DETAILS-LISTING-BACKGROUND -->
                                <div class="section-details-listing-background">

                                    <!-- .SECTION-DETAILS-LISTING-BACKGROUND-IMAGE -->
                                    <div class="section-details-listing-background-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>

                                    <!-- .SECTION-DETAILS-LISTING-BACKGROUND-OVERLAY -->
                                    <div class="section-details-listing-background-overlay">
                                        <div class="section-details-listing-background-overlay-1"></div>
                                        <div class="section-details-listing-background-overlay-2"></div>
                                        <div class="section-details-listing-background-overlay-3"></div>
                                        <div class="section-details-listing-background-overlay-4"></div>
                                        <div class="section-details-listing-background-overlay-5"></div>
                                    </div>

                                </div>

                                <!-- .SECTION-DETAILS-LISTING-CONTENT -->
                                <div class="section-details-listing-content">
                                    <div class="wrapper-inner">

                                        <h6><i class="<?php echo the_field('service-icon'); ?>"></i></h6>
                                        <h4><?php the_title(); ?></h4>

                                        <?php the_field('service-descriptionShort'); ?>

                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>