<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BusiCare
 */
get_header();
?>
<section class="section-space-page page">
    <div class="container<?php echo esc_html(busicare_container());?>">
        <div class="row">	
            <?php
            if (class_exists('WooCommerce')) {

                if (is_account_page() || is_cart() || is_checkout()) {
                    echo '<div class="col-lg-' . (!is_active_sidebar("woocommerce") ? "12" : "8" ) . ' col-md-' . (!is_active_sidebar("woocommerce") ? "12" : "7" ) . ' col-xs-12">';
                } else {

                    echo '<div class="col-lg-' . (!is_active_sidebar("sidebar-1") ? "12" : "8" ) . ' col-md-' . (!is_active_sidebar("sidebar-1") ? "12" : "7" ) . ' col-xs-12">';
                }
            } else {
                echo '<div class="col-lg-' . (!is_active_sidebar("sidebar-1") ? "12" : "8" ) . ' col-md-' . (!is_active_sidebar("sidebar-1") ? "12" : "7" ) . ' col-xs-12">';
            }
            ?>
            <?php
            if (class_exists('WooCommerce')) {

                if (is_account_page() || is_cart() || is_checkout()) {

                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'page');
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                    endwhile;
                } else {
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', 'page');
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                    endwhile;
                }
            } else {
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'page');
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                endwhile;
            }
            ?>
        </div>	
            <?php
            if (class_exists('WooCommerce')) {

                if (is_account_page() || is_cart() || is_checkout()) {
                    if (is_active_sidebar('woocommerce')) {
                            get_sidebar('woocommerce');
                        }
                } else {
                    get_sidebar();
                }
            } else {
                get_sidebar();
            }
            ?>
    </div>
</section>
        <?php get_footer(); ?>