<span class="postmeta_box">
	<div class="post_meta clearfix">
		
		<ul class="auth"> <?php magazine_post_meta_data(); ?>, in <?php the_category(', '); ?>
</ul>
<ul class="comp">
		<?php if ( comments_open() ) : ?><?php comments_popup_link(__('No Comment', 'magazine'), __('1 Comment', 'magazine'), __('% Comments', 'magazine')); ?><?php endif; ?> 
			</ul>
	</div> <!-- end post_meta -->
</span>