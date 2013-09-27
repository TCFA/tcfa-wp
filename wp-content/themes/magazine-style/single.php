<?php get_header(); ?><!-- BEGIN PAGE -->	<div id="page">	<div id="page-inner" class="clearfix">		<?php if (magazine_get_option('magazine_banner' ) =='1' ) {load_template(get_template_directory() . '/includes/banner-top.php'); } ?>
		<div id="content">	<div id="subtitle"><?php magazine_breadcrumbs(); ?></div>
			<?php if(have_posts()) : ?>
			<?php while(have_posts())  : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="post clearfix">
			<h1><?php the_title(); ?></h1>
			<div class="entry" class="clearfix">
			<div id="ftad"><?php if ( magazine_get_option('magazine_ad2') <> "" ) { echo stripslashes(magazine_get_option('magazine_ad2')); } ?></div>	
			<?php the_content(); ?> 
				
								<div id="wrock-page-link"><?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?></div>
								<!-- <?php trackback_rdf(); ?> -->
							</div> <!-- end div .entry -->
<span class="postmeta_box">
	<div class="post_meta clearfix">
		<ul class="auth"> <?php magazine_post_meta_data(); ?>, in <?php the_category(', '); ?>
		</ul>
		<ul class="tags">			
			<?php if("the_tags") the_tags('Tags: ', ', ', ' - '); ?><?php edit_post_link('Edit', ' &#124; ', ''); ?>
		</ul>
	</div> <!-- end post_meta -->
</span><div class="gap"></div><?php if (magazine_get_option('magazine_author' ) =='1' ) {load_template(get_template_directory() . '/includes/author.php'); } ?>

		<div id="single-nav" class="clearfix">
			<div id="single-nav-left"><?php previous_post_link('&laquo; <strong class="navi">%link</strong>'); ?></div>
		<div id="single-nav-right"><?php next_post_link('<strong class="navi">%link</strong> &raquo;'); ?></div>
        </div>
        <!-- END single-nav -->
			<div class="comments">	<?php comments_template(); ?>	</div> <!-- end div .comments -->	</div> <!-- end div .post -->
			<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h3><?php _e('404 Error&#58; Not Found', 'magazine' ); ?></h3>
				</div>
			<?php endif; ?>
		</div> <!-- end div #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>