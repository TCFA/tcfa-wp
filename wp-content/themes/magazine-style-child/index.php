<?php get_header(); ?>
<!-- BEGIN PAGE -->
	<div id="page">
		<div id="page-inner" class="clearfix">
			<?php if (magazine_get_option('magazine_banner' ) =='1' ) {load_template(get_template_directory() . '/includes/banner-top.php'); } ?>
			
				<div id="content"><div id="subtitle"><?php _e('Frontpage', 'magazine'); // magazine_breadcrumbs(); ?></div>
					<?php if(have_posts()) : ?>
					<?php while(have_posts())  : the_post(); ?>
							<?php
							// Check if betway post
							if ( has_tag('betway') ) {
								get_template_part('/includes/betway'); 
							} else {
								get_template_part('/includes/post'); 
							}
							?>
					<?php endwhile; ?>
					<?php else : ?>
							<div class="post">
								<div class="posttitle">
									<h2><?php _e('404 Error&#58; Not Found', 'magazine' ); ?></h2>
									<span class="posttime"></span>
								</div>
						</div>
					<?php endif; ?>
					<?php get_template_part('/includes/pagenav'); ?>	
				</div> <!-- end div #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>