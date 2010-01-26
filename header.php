<?php
/**
 * @package WordPress
 * @subpackage Base
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" type="text/css" media="print" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
    <div id="header">
        <div id="branding">
          <?php if ( is_home()) { ?>
            <h1>
              <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
            </h1>
          <?php } else { ?>
            <p>
              <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
            </p>
          <?php } ?>
        </div>
        <div id="nav_main">
          <div class="inner">
            <ul>
              <li><a href="<?php bloginfo('url'); ?>" class="current">Home</a></li>
              <li><a href="<?php bloginfo('url'); ?>/archives/">Archives</a></li>
              <li><a href="<?php bloginfo('url'); ?>/about/">About</a></li>
              <li><a href="<?php bloginfo('url'); ?>/pitch/">Pitch the Show</a></li>
              <li><a href="<?php bloginfo('url'); ?>/schedule/">Schedule</a></li>
              <li><a href="<?php bloginfo('url'); ?>/advertising/">Advertise</a></li>
            </ul>
          </div>
        </div>
    </div>