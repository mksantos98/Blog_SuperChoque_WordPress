<?php
$busicare_dark_actions = $this->recommended_actions;
$busicare_dark_actions_todo = get_option( 'busicare_dark_recommended_actions', false );
?>
<div id="recommended_actions" class="busicare_dark-tab-pane panel-close">
		<div class="action-list">
    		<div class="row">
						<?php if($busicare_dark_actions): foreach ($busicare_dark_actions as $key => $busicare_dark_val): ?>
						<div class="col-md-6">
								<div class="action" id="<?php echo esc_attr($busicare_dark_val['id']); ?>">
										<div class="action-watch">
										<?php if(!$busicare_dark_val['is_done']): ?>
												<?php if(!isset($busicare_dark_actions_todo[$busicare_dark_val['id']]) || !$busicare_dark_actions_todo[$busicare_dark_val['id']]): ?>
														<span class="dashicons dashicons-visibility"></span>
												<?php else: ?>
														<span class="dashicons dashicons-hidden"></span>
												<?php endif; ?>
										<?php else: ?>
												<span class="dashicons dashicons-yes"></span>
										<?php endif; ?>
										</div>
										<div class="action-inner">
												<h3 class="action-title"><?php echo esc_html($busicare_dark_val['title']); ?></h3>
												<div class="action-desc"><?php echo esc_html($busicare_dark_val['desc']); ?></div>
												<?php echo wp_kses_post($busicare_dark_val['link']); ?>
										</div>
								</div>
						</div>
						<?php endforeach; endif; ?>
				</div>
		</div>
</div>
