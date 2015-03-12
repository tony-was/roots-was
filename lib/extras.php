<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Put main stylesheet load in "Downlevel Revealed" conditional comments
 *   Later priority so that this will process AFTER the soil plugin
 */
add_filter('style_loader_tag', 'my_downlevel_revealed', 11, 2);
function my_downlevel_revealed ($tag, $handle) {
	if ($handle !== 'roots_css')
		return $tag;
	return '<!-->' . $tag . '<!--';
}
