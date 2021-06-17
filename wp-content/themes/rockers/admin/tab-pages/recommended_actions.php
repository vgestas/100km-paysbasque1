<?php 
	$rockers_actions = $this->recommended_actions;
	$rockers_actions_todo = get_option( 'rockers_recommended_actions', false );
?>
<div id="recommended_actions" class="rockers-tab-pane panel-close">
<div class="action-list">
	<?php if($rockers_actions): foreach ($rockers_actions as $key => $rockers_val): ?>
	<div class="col-md-6">
	<div class="action" id="<?php echo esc_attr($rockers_val['id']); ?>">
		<div class="action-watch">
		<?php if(!$rockers_val['is_done']): ?>
			<?php if(!isset($rockers_actions_todo[$rockers_val['id']]) || !$rockers_actions_todo[$rockers_val['id']]): ?>
				<span class="dashicons dashicons-visibility"></span>
			<?php else: ?>
				<span class="dashicons dashicons-hidden"></span>
			<?php endif; ?>
		<?php else: ?>
			<span class="dashicons dashicons-yes"></span>
		<?php endif; ?>
		</div>
		<div class="action-inner">
			<h3 class="action-title"><?php echo esc_html($rockers_val['title']); ?></h3>
			<div class="action-desc"><?php echo esc_html($rockers_val['desc']); ?></div>
			<?php echo wp_kses_post($rockers_val['link']); ?>
		</div>
	</div>
	</div>
	<?php endforeach; endif; ?>
</div>
</div>