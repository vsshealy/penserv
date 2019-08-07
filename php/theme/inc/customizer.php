<?php 
    /**
     * php/theme/inc/customizer.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php 
    function penserv_customize_register( $wp_customize ) {
        $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
        $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
        if ( isset( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial( 'blogname', array(
                'selector'        => '.site-title a',
                'render_callback' => 'penserv_customize_partial_blogname',
            ) );
            $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
                'selector'        => '.site-description',
                'render_callback' => 'penserv_customize_partial_blogdescription',
            ) );
        }
    }
    add_action( 'customize_register', 'penserv_customize_register' );
    /**
     * Render the site title for the selective refresh partial.
     *
     * @return void
     */
    function penserv_customize_partial_blogname() {
        bloginfo( 'name' );
    }
    /**
     * Render the site tagline for the selective refresh partial.
     *
     * @return void
     */
    function penserv_customize_partial_blogdescription() {
        bloginfo( 'description' );
    }
    /**
     * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
     */
    function penserv_customize_preview_js() {
        wp_enqueue_script( 'penserv-customizer', get_template_directory_uri() . '/js/theme/customizer.js', array( 'customize-preview' ), '20151215', true );
    }
    add_action( 'customize_preview_init', 'penserv_customize_preview_js' );
?>