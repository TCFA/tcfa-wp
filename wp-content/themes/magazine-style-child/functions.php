<?php
function magazine_child_pagenavi() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $args['total'] = $max;
  $args['current'] = $current;
 
  $total = 1;
  $args['mid_size'] = 3;
  $args['end_size'] = 1;
  $args['prev_text'] = __('&#171; Prev', 'magazine');
  $args['next_text'] = __('Next &raquo;', 'magazine');
 
  if ($max > 1) echo '<div class="wp-pagenavi">';
 if ($total == 1 && $max > 1) $pages = '<span class="pages">'.__('Page ', 'magazine') . $current . __(' of ', 'magazine') . $max . '</span>';
 echo $pages . paginate_links($args);
 if ($max > 1) echo '</div>';
}

/**
 * Setup Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function my_child_theme_setup() {
  load_child_theme_textdomain( 'magazine-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_setup' );

?>
