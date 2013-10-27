<?php 
/*
 Template Name: Archives
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
				<h2><?php _e('Archives by Category:', 'magazine') ?></h2>
				<ul>
					 <?php 
					 $args = array(
					 	'show_count' => true,
					 	'title_li' => null
					 );
					 wp_list_categories($args); 
					 ?>
				</ul>
				<h2><?php _e('Archives by Month:', 'magazine') ?></h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
								
				<?php the_content(); ?>
			</div> <!-- .pagepost -->
				</div> <!-- end div #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
