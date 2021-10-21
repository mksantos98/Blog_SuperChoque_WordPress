<div id="one_click_demo" class="busicare-tab-pane panel-close">
    <?php 
	$busicare_actions = $this->recommended_actions;
	$busicare_actions_todo = get_option( 'recommended_actions', false );
	$busicare_spicebox = $busicare_actions[0];
	?>
	<div class="action-list">
		<?php if($busicare_spicebox):?>
		<div class="action col-md-6" id="install_spicebox">
			<div class="action-box">
				<div class="action-watch">
				<?php if(!$busicare_spicebox['is_done']): ?>
					<?php if(!isset($busicare_actions_todo[$busicare_spicebox['id']]) || !$busicare_actions_todo[$busicare_spicebox['id']]): ?>
						<span class="dashicons dashicons-visibility"></span>
					<?php else: ?>
						<span class="dashicons dashicons-hidden"></span>
					<?php endif; ?>
					<?php else: ?>
						<span class="dashicons dashicons-yes"></span>
					<?php endif; ?>
				</div>
		    
				<div class="action-inner">
					<h3 class="action-title"><?php echo esc_html($busicare_spicebox['title']); ?></h3>
					<div class="action-desc"><?php echo esc_html($busicare_spicebox['desc']); ?></div>
					<?php echo wp_kses_post($busicare_spicebox['link']); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>