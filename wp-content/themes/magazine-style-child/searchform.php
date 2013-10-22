<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>/">
	<div>
	<input type="text" value="<?php _e('Search', 'magazine-child') ?>" name="s" id="s" onfocus="if (this.value == '<?php _e('Search', 'magazine-child') ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Search', 'magazine-child') ?>';}" />
		<input type="submit" id="searchsubmit" value="<?php _e('Go','magazine-child') ?>" />
	</div>
</form>
