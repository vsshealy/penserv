<?php 
    /**
     * php/scripts/head/files/header-scripts.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<!-- FAVICON -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logos/2019/icon-penserv_icon-500x500.png"/>

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400|Roboto+Condensed|Roboto:100i,300,300i,400,400i,700&display=swap" rel="stylesheet"/>

<!-- FONT-AWESOME -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>

<!-- WP-HEAD -->
<?php wp_head(); ?>

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>

<!-- GOOGLE-ANALYTICS -->
<?php include(get_template_directory()."/php/scripts/external/google-analytics.php"); ?>

<!-- STYLESHEET -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css"/>