<?php
/**
 * @package WordPress
 * @subpackage Base
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="body">

  <!-- start #content -->
  <div id="content">
    
    <!-- start #main -->
    <div id="main">
        
  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		
      <!-- start .page -->
      <div id="post-<?php the_ID(); ?>" class="page archives">
  		
  			<h1><?php the_title(); ?></h1>
  			<?php the_content(); ?>

      </div>
      <!-- end .page -->
  		
  		<?php endwhile; endif; ?>

    </div>
    <!-- end #main -->

  </div>
  <!-- end #content -->
  
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>

</div>
<?php get_footer(); ?>