<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>/">
	<div>
	<input type="text" value="<?php _e('Search', 'magazine') ?>" name="s" id="s" onfocus="if (this.value == '<?php _e('Search', 'magazine') ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Search', 'magazine') ?>';}" />
		<input type="submit" id="searchsubmit" value="Go" />
	</div>
</form>
