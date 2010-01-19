<?php
/**
 * @package WordPress
 * @subpackage Base
 */

get_header(); ?>

<div id="body">

  <div id="content">
    
    <?php include(TEMPLATEPATH . '/_featured_post.php'); ?>
    
    <?php if (have_posts()) : ?>

    	<?php while (have_posts()) : the_post(); ?>

    		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    			<div class="meta_data">
            <div class="episode_details">
              <p>
                <span class="label">Episode</span>
                <span class="value"><?php if ( function_exists('get_custom_field_value') ){ get_custom_field_value('episode', true); } ?></span>
              </p>
              <p><?php the_time('F jS, Y') ?></p>
            </div>
    			</div>
          <div class="post_excerpt">
            <?php the_excerpt(); ?>
          </div>
    			<div class="post_content">
    			 <?php the_content('Read the rest of this entry &raquo;'); ?>
    			</div>
    		</div>

    	<?php endwhile; ?>

    	<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>

    <?php else : ?>

    	<h2>Not Found</h2>
    	<p>Sorry, but you are looking for something that isn't here.</p>
    	<?php get_search_form(); ?>

    <?php endif; ?>
  </div>
  
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>

</div>
<?php get_footer(); ?>