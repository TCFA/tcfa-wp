<span class="auth"> <?php magazine_post_meta_data(); ?></span>
<span class="postcateg"><?php the_category(', '); ?></span>

<?php if ( comments_open() ) : ?><span class="comp"><?php comments_popup_link(__('No Comment', 'magazine-child'), __('1 Comment', 'magazine-child'), __('% Comments', 'magazine-child')); ?></span><?php endif; ?>