<?php
/**
 * @package WordPress
 * @subpackage Base
 */
?>

<?php
  automatic_feed_links();
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
?>

<?php function my_head() { ?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo("template_url") ?>/javascript/site.js" type="text/javascript"></script>
<?php } add_action('wp_head', 'my_head'); ?>

<?php if (function_exists('register_sidebar')) {
	register_sidebar(array(
	  'name' => 'primary_aside',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
	  'name' => 'secondary_aside',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>',
	));
} ?>

<?php function get_custom_field_value($szKey, $bPrint = false) {
  global $post;
  $szValue = get_post_meta($post->ID, $szKey, true);
  if ( $bPrint == false ) return $szValue; else echo $szValue;
} ?>