

<div id="latesthd"><h4>Latest</h4></div>
<ul><div id="ltpost">
<?php 
/*
*Show latest post with thumbnail it can be customize from style css
*since @ 1.0 
*/
							$the_query = new WP_Query('showposts=5&orderby=post_date&order=desc');
							while ($the_query->have_posts()) : $the_query->the_post(); ?>
								<li class="latest-post">
									<?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/thumb.jpg" />
<?php } ?> 
									 <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br />
									 <div class="clear"></div>
								</li>			
							<?php endwhile; ?>
									</div></ul>						
					
		
		
	<div style="clear:both;"></div>