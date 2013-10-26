<div id="footerads">
<?php if ( magazine_get_option('magazine_ad1') <> "" ) { echo stripslashes(magazine_get_option('magazine_ad1')); } ?>
</div>	</div><!-- end div #page-inner -->
</div><!-- end div #page --><!-- END PAGE --><!-- BEGIN BOTTOM-MENU -->	
<!-- BEGIN FOOTER -->
	<div id="footer">
	<div id="footer-inner" class="clearfix">
		
		<div id="footer-left">
<p><?php _e('Copyright &#169;', 'magazine'); ?>  <?php echo date('Y');?> 
	<a href="<?php echo esc_url(home_url());?>/" title="<?php bloginfo('name');?>" ><?php bloginfo('name');?></a><br />
	<?php _e('Powered by', 'magazine'); ?> <a target="_blank" href="http://wordpress.org/"><strong><?php _e('WordPress', 'magazine'); ?></strong></a>
</p>
</div> <!-- end div #footer-left -->

		<div id="footer-right">
<p><a class="backtop" href="#top"><?php _e('&#8593;', 'magazine'); ?></a></p>

		</div> <!-- end div #footer-right -->


	</div> <!-- end div #footer-inner -->
	</div> <!-- end div #footer -->
	<!-- END FOOTER -->
<?php wp_footer(); ?>
</body>
</html>
