<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BusiCare
 */
get_header();?>
<section class="section-space-page blog">
    <div class="container<?php echo esc_html(busicare_blog_post_container());?>">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 standard-view">	
                <?php
                if (have_posts()): while (have_posts()): the_post();
                        get_template_part('template-parts/content', get_post_type());
                    endwhile;
                else:
                    get_template_part('template-parts/content', 'none');
                endif;
                //pagination
                echo '<div class="row justify-content-center">';
                do_action('busicare_post_navigation');
                echo '</div>';
                //pagination
                ?> 
            </div>	

            <div class="col-lg-4 col-md-5 col-sm-12">
                <div class="sidebar s-l-space">
                    <?php dynamic_sidebar('sidebar-1'); ?>								
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>