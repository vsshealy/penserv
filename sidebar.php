<?php 
    /**
     * sidebar.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    if(! is_active_sidebar("sidebar-1")) {
        return;
    }
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar("sidebar-1"); ?>
</aside>