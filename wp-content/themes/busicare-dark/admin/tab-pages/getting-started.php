<?php
/**
 * Getting started template
 */
$busicare_dark=wp_get_theme();
?>
<div id="getting_started" class="busicare_dark-tab-pane active">
		<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h1 class="busicare_dark-info-title text-center"><?php echo esc_html__('Busicare Dark', 'busicare-dark' ); ?><?php if( !empty($busicare_dark['Version']) ): ?> <sup id="busicare_dark-theme-version">Version:<?php echo esc_html( $busicare_dark['Version'] ); ?> </sup><?php endif; ?></h1>
					</div>
				</div>
				<div class="row">
						<div class="col-md-6">
								<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
										<p><?php esc_html_e( 'This theme is ideal for creating corporate and business websites. BusiCare Dark is a child theme of the BusiCare WordPress theme. The premium version has tons of features like a homepage with many sections where you can feature unlimited slides, portfolios, user reviews, latest news, services, call to action and much more. Each section in the Homepage template is carefully designed to fit to all business requirements.','busicare-dark');?></p>
										<p>
										<?php esc_html_e( 'You can use this theme for any type of activity. BusiCare Dark is compatible with popular plugins like WPML and Polylang for the translation.', 'busicare-dark' ); ?>
										</p>
										<h1 style="margin-top: 73px !important; font-size:2em !important; background: #0085ba;border-color: #0073aa #006799 #006799; color: #fff; padding: 10px 10px;"><?php esc_html_e( "Getting Started", 'busicare-dark' ); ?></h1>
										<div>
												<p style="margin-top: 16px;">
														<?php esc_html_e( 'To take full advantage of all the features this theme has to offer, install and activate the Spice Box plugin. Go to Customize and install the Spice Box plugin.', 'busicare-dark' ); ?>
												</p>
												<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" style="padding: 3px 15px;height: 40px; font-size: 16px;"><?php esc_html_e( 'Go to the Customizer','busicare-dark');?></a></p>
										</div>
								</div>
						</div>
						<div class="col-md-6">
								<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
										<img src="<?php echo esc_url( BUSICARE_DARK_TEMPLATE_DIR_URI ) . '/admin/img/busicare-dark.png'; ?>" alt="<?php esc_attr_e( 'BusiCare Dark theme', 'busicare-dark' ); ?>" />
								</div>
						</div>
				</div>

				<div class="row">
        		<div class="col-md-12">
								<div class="busicare_dark-tab-center">
										<h1><?php esc_html_e( "Useful Links", 'busicare-dark' ); ?></h1>
								</div>
            </div>
						<div class="col-md-6">
								<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
										<a href="<?php echo esc_url('https://busicare-dark.spicethemes.com/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
										<p class="info-text"><?php echo esc_html__('Lite Demo','busicare-dark'); ?></p></a>
								</div>
						</div>
						<div class="col-md-6">
								<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
										<a href="<?php echo esc_url('https://busicare-pro.spicethemes.com/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
										<p class="info-text"><?php echo esc_html__('PRO Demo','busicare-dark'); ?></p></a>
								</div>
						</div>
						<div class="col-md-6">
								<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
									<a href="<?php echo esc_url('https://wordpress.org/support/theme/busicare-dark/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-sos info-icon"></div>
									<p class="info-text"><?php echo esc_html__('Theme Support','busicare-dark'); ?></p></a>
								</div>
						</div>
						<div class="col-md-6">
								<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
									<a href="<?php echo esc_url('https://wordpress.org/support/view/theme-reviews/busicare-dark'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-smiley info-icon"></div>
									<p class="info-text"><?php echo esc_html__('Your feedback is valuable to us','busicare-dark'); ?></p></a>
								</div>
						</div>
						<div class="col-md-6">
								<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
										<a href="<?php echo esc_url('https://spicethemes.com/busicare-plus/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-book-alt info-icon"></div>
										<p class="info-text"><?php echo esc_html__('Premium Theme Details','busicare-dark'); ?></p></a>
								</div>
						</div>

						<div class="col-md-6">
							<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
									<a href="<?php echo esc_url('https://helpdoc.spicethemes.com/category/busicare/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-editor-help info-icon"></div>
									<p class="info-text"><?php echo esc_html__('Theme Help Docs','busicare-dark'); ?></p></a>
							</div>
						</div>

						<div class="col-md-6">
							<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
									<a href="<?php echo esc_url('https://spicethemes.com/busicare-free-vs-pro/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-welcome-write-blog info-icon"></div>
									<p class="info-text"><?php echo esc_html__('Free vs Pro','busicare-dark'); ?></p></a>
							</div>
						</div>

						<div class="col-md-6">
							<div class="busicare_dark-tab-pane-half busicare_dark-tab-pane-first-half">
									<a href="<?php echo esc_url('https://spicethemes.com/busicare-dark-changelog/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-portfolio info-icon"></div>
									<p class="info-text"><?php echo esc_html__('Changelog','busicare-dark'); ?></p></a>
							</div>
						</div>
				</div>
		</div>
</div>
