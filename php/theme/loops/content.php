<?php 
    /**
     * php/theme/loops/content.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    while( have_posts() ) :
        the_post();
        get_template_part("/php/parts/content", "page");
    endwhile;
?>