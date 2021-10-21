<?php
get_header();
global $woocommerce;?>
<div class="clearfix"></div>
<section class="section-module blog woocommerce section-space-page ">
	<div class="container<?php echo esc_html(busicare_container());?>">
		<div class="row">	
			<div class="col-lg-<?php echo ( !is_active_sidebar( 'woocommerce' ) ? '12' :'8' ); ?> col-md-<?php echo ( !is_active_sidebar( 'woocommerce' ) ? '12' :'8' ); ?> col-xs-12">
				<?php woocommerce_content(); ?>
			</div>	
                        <?php
                        if (is_active_sidebar('woocommerce')) {
                            get_sidebar('woocommerce');
                        }
                        ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>