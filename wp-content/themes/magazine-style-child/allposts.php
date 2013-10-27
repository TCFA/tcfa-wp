<?php 
/*
 Template Name: All posts
 */

get_header(); ?>
	<!-- BEGIN PAGE -->
		<div id="page">
			<div id="page-inner" class="clearfix">
				<?php if (magazine_get_option('magazine_banner' ) =='1' ) {load_template(get_template_directory() . '/includes/banner-top.php'); } ?>
				
				<div id="content">
					<div id="subtitle"><?php magazine_breadcrumbs(); ?></div>
				<div class="pagepost">
				<?php the_post(); ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				
				<ul>
					<?php wp_get_archives('type=postbypost&limit=1000'); ?>
				</ul>
				</div> <!-- .pagepost -->				

				</div> <!-- end div #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
