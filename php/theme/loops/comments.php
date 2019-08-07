<?php 
    /**
     * php/theme/loops/comments.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    if( comments_open() || get_comments_number() ):
        comments_template();
    endif;
?>