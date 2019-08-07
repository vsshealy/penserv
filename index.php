<?php 
    /**
     * index.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<!DOCTYPE HTML>
<!-- PENSERV PLAN SERVICES, INC. | (888) 473-7888 -->

<html id="penserv" <?php language_attributes(); ?>>

    <!-- HEAD -->
    <head>
        <?php include(get_template_directory()."/php/scripts/head/page.php"); ?>
    </head>

    <!-- BODY -->
    <body class="page">

        <!-- HEADER -->
        <?php include(get_template_directory()."/header.php"); ?>

        <!-- CONTENT | INDEX.PHP -->
        <?php include(get_template_directory()."/php/theme/templates/index.php"); ?>

        <!-- FOOTER -->
        <?php include(get_template_directory()."/footer.php"); ?>

        <!-- SCRIPTS -->
        <?php include(get_template_directory()."/php/scripts/footer/footer-scripts.php"); ?>

    </body>

</html>