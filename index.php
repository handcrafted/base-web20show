<?php
/**
 * @package WordPress
 * @subpackage Base
 */

get_header(); ?>

<div id="preamble">
  <div class="inner">
    <h3>Would you like to be a guest on the show?</h3>
    <p>
      Here's your chance to be heard, get connected, and showcase your business to
      <br />Adam Stacoviak, Siamak Taghaddos, David Hauser, Jonathan Kay and special guests.
      <br />What are you waiting for? It's time to <strong>Pitch the Show</strong>!
    </p>
    <img src="http://grasshopper.com/img/global/about_gary.png" class="call_me" />
    <p><a href="<?php bloginfo('url'); ?>/?page_id=311" class="button">Click here to learn more &rarr;</a></p>
  </div>
</div>

<div id="body">

  <!-- start #content -->
  <div id="content">
    
    <!-- start #main -->
    <div id="main">

      <?php query_posts('category_name=podcast&posts_per_page=3'); ?>

    	<?php while (have_posts()) : the_post(); ?>

    		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <div class="sidebar">
            <div class="episode">
              <span class="label">Episode</span>
              <span class="data"><?php get_custom_field_value('episode', true); ?></span>
            </div>
            <div class="tweetmeme_retweet">
              <script type="text/javascript">
                tweetmeme_url = '<?php the_permalink() ?>';
              </script>
              <script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
            </div>
          </div>
          
          <div class="content">
            <h3><?php get_custom_field_value('the_guests', true); ?></h3>
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php  the_title_attribute(); ?>"><?php get_custom_field_value('the_long_title', true); ?></a></h2>
            <?php the_excerpt(); ?>
            <p class="continued"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php  the_title_attribute(); ?>">Read more and listen to this episode &rarr;</a></p>
          </div>
    		</div>

    	<?php endwhile; ?>

    </div>
    <!-- end #main -->

  </div>
  <!-- end #content -->
  
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>

</div>
<?php get_footer(); ?>