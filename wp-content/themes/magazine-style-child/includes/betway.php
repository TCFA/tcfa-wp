<?php if(has_post_thumbnail()) : ?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><?php the_title(); ?></h2>
			<div class="thumbnail">
		<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>
	</div>			<div class="entry">
<?php the_content(); ?> 
			</div>
<?php else : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><?php the_title(); ?></h2>
			
		<div class="entry">
		<?php the_content(); ?>
		</div>
<?php endif; ?>
<span class="postmeta_box">
		<?php get_template_part('/includes/postmeta'); ?>
	</span><!-- .entry-header -->
</article>




