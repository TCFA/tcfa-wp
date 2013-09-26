<?php if(has_post_thumbnail()) : ?>
	<div class="post-content">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="thumbnail">
		<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>
	</div>
			<div class="entry">
<?php magazine_excerpt('magazine_excerptlength_index', 'magazine_excerptmore'); ?>
			</div>
			<div class="postinfo"><?php get_template_part('/includes/postmeta'); ?>

</div> <!-- end postinfo --><a href="<?php the_permalink(); ?>"><span class="readmore"><?php _e('Continue reading &raquo;', 'magazine') ?></span></a>
	</div></div>


<?php else : ?>

	<div class="post-content-no-thumb">
<div id="post-<?php the_ID(); ?>" <?php post_class('class-name'); ?>>

		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			
		<div class="entry">
		<?php magazine_excerpt('magazine_excerptlength_index', 'magazine_excerptmore'); ?>
		</div>
		<div class="postinfo"><?php get_template_part('/includes/postmeta'); ?>

</div> <!-- end postinfo --><a href="<?php the_permalink(); ?>"><span class="readmore"><?php _e('Continue reading &raquo;', 'magazine') ?></span></a>
	</div></div>

<?php endif; ?>



</div>
 <!-- end div #post -->
