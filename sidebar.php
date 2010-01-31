<?php
/**
 * @package WordPress
 * @subpackage Base
 */
?>

  <div id="subscribe">
    <ul>
      <li class="label">Subscribe</li>
      <li><a href="http://feeds.feedburner.com/web20Show" class="feed">RSS</a></li>
      <li><a href="http://itunes.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=79511655" class="itunes">iTunes</a></li>
      <li><a href="http://twitter.com/web20show" class="twitter">Twitter</a></li>
      <li><a href="http://www.facebook.com/pages/The-Web-20-Show/203485278504" class="facebook">Facebook</a></li>
      <li><a href="http://delicious.com/web20show" class="delicious">Delicious</a></li>
    </ul>
  </div>
  
  <div id="sponsors">
    <ul>
      <li class="premium">
        <a href="http://grasshopper.com/">
          <img src="<?php bloginfo("template_url") ?>/images/grasshopper_logo.png" />
        </a>
      </li>
      <li class="standard">
        <a href="http://newleaders.com/">
          <img src="<?php bloginfo("template_url") ?>/images/newleaders_logo.png" />
        </a>
      </li>
      <li class="standard">
        <a href="http://thechangelog.com/">
          <img src="<?php bloginfo("template_url") ?>/images/thechangelog_logo.png" />
        </a>
      </li>
    </ul>
  </div>

  <div id="recently">
    <div class="header">
      <h2>Call: 1-888-WEB20SHOW</h2>
    </div>
    <ul>
    	
      <?php query_posts('category_name=podcast&posts_per_page=5&offset=5'); ?>
    	<?php while (have_posts()) : the_post(); ?>
    	<li>
    		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <div class="sidebar">
            <div class="episode">
              <span class="label">Episode</span>
              <span class="data"><?php get_custom_field_value('episode', true); ?></span>
            </div>
          </div>
          <div class="content">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php  the_title_attribute(); ?>"><?php get_custom_field_value('the_long_title', true); ?></a></h3>
          </div>
    		</div>
      </li>
      <?php endwhile; ?>

    </ul>
  </div>

	<ul>
		<?php 	/* Widgetized sidebar, if you have the plugin installed. */
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<li>
			<?php get_search_form(); ?>
		</li>

		<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
		<li><h2>Author</h2>
		<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
		</li>
		-->

		<?php if ( is_404() || is_category() || is_day() || is_month() ||
					is_year() || is_search() || is_paged() ) {
		?> <li>

		<?php /* If this is a 404 page */ if (is_404()) { ?>
		<?php /* If this is a category archive */ } elseif (is_category()) { ?>
		<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

		<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for the day <?php the_time('l, F jS, Y'); ?>.</p>

		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for <?php the_time('F, Y'); ?>.</p>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for the year <?php the_time('Y'); ?>.</p>

		<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
		<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
		for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

		<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

		<?php } ?>

		</li>
	<?php }?>
	</ul>
	
	<ul>
		<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
		<li><h2>Archives</h2>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
		<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
	</ul>
	
	<ul>
		<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
			<?php wp_list_bookmarks(); ?>

			<li>
				<h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
			</li>
		<?php } ?>

		<?php endif; ?>
	</ul>