<div id="bottom-menu">


<div id="bottom-menu-inner" class="clearfix">

<div id="bottom-menu-1">

	
<?php if (!dynamic_sidebar('Bottom Menu 1') ) : ?>
		
	<?php endif; ?>
</div> <!-- end div #bottom-menu-left -->

<div id="bottom-menu-2">

	<?php if (!dynamic_sidebar('Bottom Menu 2') ) : ?>
		
	<?php endif; ?>
</div> <!-- end div #bottom-menu-center -->


<div id="bottom-menu-3">
	
<?php if ( !dynamic_sidebar('Bottom Menu 3') ) : ?>
	
	<?php endif; ?></div> <!-- end div #bottom-menu-center -->
<div id="bottom-menu-4">

	<?php if ( !dynamic_sidebar('Bottom Menu 4') ) : ?>
		
	<?php endif; ?>

</div> <!-- end div #bottom-menu-right -->

</div> <!-- end div #bottom-menu-inner -->
</div> <!-- end div #bottom-menu -->
<!-- END BOTTOM-MENU -->
	<!-- BEGIN FOOTER -->
	<div id="footer">
	<div id="footer-inner" class="clearfix">
		
		<div id="footer-left">
<p><?php _e('Copyright &#169;', 'magazine'); ?>  <?php echo date('Y');?> <a href="<?php echo esc_url(home_url());?>/" title="<?php bloginfo('name');?>" ><?php bloginfo('name');?></a><br /><?php _e('Powered by', 'magazine'); ?> <a href="http://wordpress.org/"><strong><?php _e('WordPress', 'magazine'); ?></strong></a>
</p>
</div> <!-- end div #footer-left -->

		<div id="footer-right">
<p>
<a href="<?php echo esc_url( __( 'http://www.wrock.org/magazine-style', 'magazine' ) ); ?>" title="<?php esc_attr_e( 'Wrock.Org', 'magazine' ); ?>"><?php printf( __( 'Magazine Style Theme %s', 'magazine' ),''); ?></a>
</p>
<p><a class="backtop" href="#top"><?php _e('&#8593;', 'magazine'); ?></a></p>

		</div> <!-- end div #footer-right -->


	</div> <!-- end div #footer-inner -->
	</div> <!-- end div #footer -->
	<!-- END FOOTER -->
		
</div> 