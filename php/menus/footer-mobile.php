<?php 
    /**
     * php/menus/footer-mobile.php
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
            "theme_location" => "menu-6",
            "menu_id" => "menu-footer-mobile"
        )
    );
?>