<?php 
    /**
     * php/menus/header-secondary.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/8/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    wp_nav_menu(
        array(
            "theme_location" => "menu-2",
            "menu_id" => "menu-header-secondary"
        )
    );
?>