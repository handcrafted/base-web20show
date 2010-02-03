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
    	
      <?php query_posts('category_name=podcast&posts_per_page=6&offset=4'); ?>
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