<?php 
    /**
     * functions.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<?php //DEFAULT FUNCTIONS FILE 
    if ( ! function_exists( 'penserv_setup' ) ) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support for post thumbnails.
         */
        function penserv_setup() {
            /*
            * Make theme available for translation.
            * Translations can be filed in the /languages/ directory.
            * If you're building a theme based on PenServ, use a find and replace
            * to change 'penserv' to the name of your theme in all the template files.
            */
            load_theme_textdomain( 'penserv', get_template_directory() . '/languages' );

            // Add default posts and comments RSS feed links to head.
            add_theme_support( 'automatic-feed-links' );

            /*
            * Let WordPress manage the document title.
            * By adding theme support, we declare that this theme does not use a
            * hard-coded <title> tag in the document head, and expect WordPress to
            * provide it for us.
            */
            add_theme_support( 'title-tag' );

            /*
            * Enable support for Post Thumbnails on posts and pages.
            *
            * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
            */
            add_theme_support( 'post-thumbnails' );

            // This theme uses wp_nav_menu() in one location.
            register_nav_menus( array(
                'menu-1' => esc_html__('Header-Primary', 'penserv'),
                'menu-2' => esc_html__('Header-Secondary', 'penserv'),
                'menu-3' => esc_html__('Header-Mobile', 'penserv'),
                'menu-4' => esc_html__('Footer-Primary', 'penserv'),
                'menu-5' => esc_html__('Footer-Secondary', 'penserv'),
                'menu-6' => esc_html__('Footer-Mobile', 'penserv'),
                'menu-7' => esc_html__('Social', 'penserv')
            ) );

            /*
            * Switch default core markup for search form, comment form, and comments
            * to output valid HTML5.
            */
            add_theme_support( 'html5', array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ) );

            // Set up the WordPress core custom background feature.
            add_theme_support( 'custom-background', apply_filters( 'penserv_custom_background_args', array(
                'default-color' => 'ffffff',
                'default-image' => '',
            ) ) );

            // Add theme support for selective refresh for widgets.
            add_theme_support( 'customize-selective-refresh-widgets' );

            /**
             * Add support for core custom logo.
             *
             * @link https://codex.wordpress.org/Theme_Logo
             */
            add_theme_support( 'custom-logo', array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            ) );
        }
    endif;
    add_action( 'after_setup_theme', 'penserv_setup' );

    /**
     * Set the content width in pixels, based on the theme's design and stylesheet.
     *
     * Priority 0 to make it available to lower priority callbacks.
     *
     * @global int $content_width
     */
    function penserv_content_width() {
        // This variable is intended to be overruled from themes.
        // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
        // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
        $GLOBALS['content_width'] = apply_filters( 'penserv_content_width', 640 );
    }
    add_action( 'after_setup_theme', 'penserv_content_width', 0 );

    /**
     * Register widget area.
     *
     * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     */
    function penserv_widgets_init() {
        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar', 'penserv' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'penserv' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'penserv_widgets_init' );

    /**
     * Enqueue scripts and styles.
     */
    function penserv_scripts() {
        wp_enqueue_style( 'penserv-style', get_stylesheet_uri() );

        wp_enqueue_script( 'penserv-navigation', get_template_directory_uri() . '/js/theme/navigation.js', array(), '20151215', true );

        wp_enqueue_script( 'penserv-skip-link-focus-fix', get_template_directory_uri() . '/js/theme/skip-link-focus-fix.js', array(), '20151215', true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'penserv_scripts' );

    /**
     * Implement the Custom Header feature.
     */
    require get_template_directory() . '/php/theme/inc/custom-header.php';

    /**
     * Custom template tags for this theme.
     */
    require get_template_directory() . '/php/theme/inc/template-tags.php';

    /**
     * Functions which enhance the theme by hooking into WordPress.
     */
    require get_template_directory() . '/php/theme/inc/template-functions.php';

    /**
     * Customizer additions.
     */
    require get_template_directory() . '/php/theme/inc/customizer.php';

    /**
     * Load Jetpack compatibility file.
     */
    if ( defined( 'JETPACK__VERSION' ) ) {
        require get_template_directory() . '/php/theme/inc/jetpack.php';
    }
?>

<?php //ADMIN SITE CUSTOMIZATIONS
    /**
     * REPLACE CUSTOM ADMIN LOGIN LOGO
     * This script replaces the logo on the /wp-admin login page.
    **/
        function custom_login_logo() {
            echo
            '<style type="text/css">
                h1 {
                    margin-bottom: 2.00rem !important;
                }

                h1 a {
                    height: 209px !important;
                    width: 100.00% !important;
                    display: block;
                    background-image: url('.get_bloginfo('template_directory').'/assets/images/logos/2019/logo-penserv-fullvertical-color.svg) !important;
                    background-size: 100.00% !important;
                    margin: 0.00rem !important;
                }
            </style>';
        }
            
        add_action('login_head', 'custom_login_logo');

    /**
     * REPLACE FOOTER TEXT
     * This script replaces the default WordPress text in the footer.
    **/
        function remove_footer_admin() {
            echo 'PenServ Plan Services Website Administration | <strong>Production Site</strong> | <a href="/" target="_blank">Visit Site</a></p>';
        }

        add_filter('admin_footer_text', 'remove_footer_admin');
?>