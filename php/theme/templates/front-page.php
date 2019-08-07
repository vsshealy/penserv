<?php 
    /**
     * php/theme/templates/front-page.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<main id="<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>">

    <?php include(get_template_directory()."/php/theme/loops/index.php"); ?>

</main>