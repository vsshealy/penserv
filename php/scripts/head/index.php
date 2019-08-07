<?php 
    /**
     * php/scripts/head/index.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<!-- TITLE -->
<title><?php single_post_title(); ?> | <?php bloginfo("name"); ?> | <?php bloginfo("description"); ?></title>

<!-- META -->
<?php include(get_template_directory()."/php/scripts/head/files/meta.php"); ?>

<!-- HEADER-SCRIPTS -->
<?php include(get_template_directory()."/php/scripts/head/files/header-scripts.php"); ?>