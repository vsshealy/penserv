<?php 
    /**
     * php/scripts/footer/footer-scripts.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<div id="scripts-footer">

    <!-- THEME -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/retina/retina.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/external/modernizr.js"></script>

    <!-- WP-FOOTER -->
    <?php wp_footer(); ?>

    <!-- BOOTSTRAP -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</div>