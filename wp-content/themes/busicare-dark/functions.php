<?php
// Global variables define
define('BUSICARE_DARK_PARENT_TEMPLATE_DIR_URI', get_template_directory_uri());
define('BUSICARE_DARK_TEMPLATE_DIR_URI', get_stylesheet_directory_uri());
define('BUSICARE_DARK_CHILD_TEMPLATE_DIR', trailingslashit(get_stylesheet_directory()));

if (!function_exists('wp_body_open')) {
    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action('wp_body_open');
    }
}
add_action('after_setup_theme', 'busicare_dark_setup');

function busicare_dark_setup() {
    load_theme_textdomain('busicare-dark', BUSICARE_DARK_CHILD_TEMPLATE_DIR . '/languages');

    /*
    * Let WordPress manage the document title.
    */
    add_theme_support('title-tag');

    // Add default posts and comments RSS feed links to head.

    add_theme_support('automatic-feed-links');


    //About Theme
        if(!function_exists( 'busicarep_activate' )) :
        $theme = wp_get_theme(); // gets the current theme
        if ( 'BusiCare Dark' == $theme->name) 
        {
            if ( is_admin() ) 
            {
                require BUSICARE_DARK_CHILD_TEMPLATE_DIR . '/admin/admin-init.php';
            }
        }
        endif;
}


add_action('wp_enqueue_scripts', 'busicare_dark_enqueue_styles',11);

function busicare_dark_enqueue_styles() {
    wp_enqueue_style('busicare-dark-parent-style', BUSICARE_DARK_PARENT_TEMPLATE_DIR_URI . '/style.css', array('bootstrap'));
    wp_style_add_data('busicare-dark-parent-style', 'rtl', 'replace' );
    wp_style_add_data('busicare-dark-style', 'rtl', 'replace' );
    wp_dequeue_style( 'busicarep-default');
    if (get_theme_mod('custom_color_enable') == true) {
        busicare_dark_custom_light();
    }
    else {
        wp_enqueue_style('busicare-dark-default-style', BUSICARE_DARK_TEMPLATE_DIR_URI . '/assets/css/default.css');
    }
}


function busicare_dark_custom_light()
{
$link_color = get_theme_mod('link_color');
    list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
    $r = $r - 50;
    $g = $g - 25;
    $b = $b - 40;

    if ( $link_color != '#ff0000' ) :?>
        <style type="text/css">
        .dark a:hover {color: <?php echo esc_attr($link_color);?>;}
        .dark .business h3 a:hover {color: <?php echo esc_attr($link_color);?>;}
        .dark .slider-caption .heading {border-left: 4px solid <?php echo esc_attr($link_color);?>;}
        .dark .navbar5.navbar .nav .nav-item:hover .nav-link, .dark .navbar5.navbar .nav .nav-item.active .nav-link {color: #ffffff;background: <?php echo esc_attr($link_color);?>;}
        .hp-preloader-cube .hp-cube:before {background: <?php echo esc_attr($link_color);?>;}
        .services2 .post::before {background-color: <?php echo esc_attr($link_color);?>;}
        .dark .footer-sidebar.footer-typo a:hover {color: <?php echo esc_attr($link_color);?>;}
        .dark blockquote {border-left: 4px solid <?php echo esc_attr($link_color);?>;}
        </style>
        <?php
    endif;    
}

function busicare_dark_color_back_settings_customizer( $wp_customize ) {
    //H1 color
    $wp_customize->add_setting('h1_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    //H2 color
    $wp_customize->add_setting('h2_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    //H3 color
    $wp_customize->add_setting('h3_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    //H4 color
    $wp_customize->add_setting('h4_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    //H5 color
    $wp_customize->add_setting('h5_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    //H6 color
    $wp_customize->add_setting('h6_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    //P color
    $wp_customize->add_setting('p_color', array(
        'default' => '#999999',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    
}
add_action( 'customize_register', 'busicare_dark_color_back_settings_customizer', 11);

function busicare_dark_footer_section_hook()
{
?>
<footer class="site-footer">  
  <div class="container">
    <?php 
    if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3') || is_active_sidebar('footer-sidebar-4')): ?>
    <div class="seprator-line"></div>   
      <?php get_template_part('sidebar','footer');
    endif;?>  
  </div>
  <?php if(get_theme_mod('ftr_bar_enable',true)==true):?>
  <div class="site-info text-center">
     <?php $footer_copyright = get_theme_mod('footer_copyright','<p>'. __( 'Copyright 2021 ©  <a href="hhttps://sites.google.com/view/mksantos/portfólio">Mikael Santos</a> | Faça Contato: <a href="https://www.linkedin.com/in/mikaelsantos98//">LinkedIn</a> by <a href="https://facebook.com/mksantos98">Mikael Santos</a>', 'busicare-dark' ).'</p>'); ?>  
     <?php echo wp_kses_post($footer_copyright);?> 
  </div>
 <style type="text/css">
    <?php
    if (get_theme_mod('testimonial_image_overlay', true) != false) {
        $testimonial_overlay_section_color = get_theme_mod('testimonial_overlay_section_color', 'rgba(1, 7, 12, 0.7)');
        ?>
        .testimonial .overlay {
            background-color:<?php echo esc_attr($testimonial_overlay_section_color); ?>;
        }
        
        <?php } ?>

    </style>
<?php endif;
$scrolltotop_setting_enable = get_theme_mod('scrolltotop_setting_enable', true);
if ($scrolltotop_setting_enable == true) {
    ?>
    <div class="scroll-up custom right"><a href="#totop"><i class="fa fa-arrow-up"></i></a></div>
<?php } ?>
</footer>
<?php  
}
add_action('busicare_dark_footer_section_hook','busicare_dark_footer_section_hook');