<?php
/**
 * @package WordPress
 * @subpackage Base
 */

get_header();
?>

<div id="body">

  <!-- start #content -->
  <div id="content">
    
    <!-- start #main -->
    <div id="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  		<!-- <?php previous_post_link('&laquo; %link') ?> | <?php next_post_link('%link &raquo;') ?> -->

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
          <h2><?php get_custom_field_value('the_guests', true); ?></h2>
          <h1><?php get_custom_field_value('the_long_title', true); ?></h1>
          <?php the_content(); ?>
        </div>
  		</div>

      <?php comments_template(); ?>

      <?php endwhile; else: ?>

      <p>Sorry, no posts matched your criteria.</p>

      <?php endif; ?>

    </div>
    <!-- end #main -->

  </div>
  <!-- end #content -->
  
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>

</div>
<?php get_footer(); ?>