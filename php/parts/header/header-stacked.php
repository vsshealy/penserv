<?php 
    /**
     * php/parts/header/header-stacked.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/8/2019
     * Updated | 
     * Notes | 
    **/
?>

<div class="stacked">

    <!-- #HEADER-MAIN -->
    <div id="header-main" class="col-xl-12">
        <div class="wrapper-content wrapper-header row">
            <?php include(get_template_directory()."/php/parts/header/files/logo.php"); ?>
        </div>
    </div>

    <!-- #HEADER-NAV -->
    <div id="header-nav" class="col-xl-12">
        <div class="wrapper-content row">
            <nav class="col-xl-12">
                <?php include(get_template_directory()."/php/menus/menu-header-primary.php"); ?>
            </nav>
        </div>
    </div>

</div>