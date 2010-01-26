<?php
/*
Template Name: Pitch the Show
*/
?>

<?php get_header(); ?>

<div id="body">

  <!-- start #content -->
  <div id="content">
    
    <!-- start #main -->
    <div id="main">
        
  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		
      <!-- start .pitch-the-show -->
      <div id="post-<?php the_ID(); ?>" class="pitch-the-show">
        
        <div class="gist">
          
          <div class="header">
            <h1>Get Connected. Be Heard. Pitch the Show!</h1>
            <h2>Getting by calling the Web 2.0 Show at 1-888-WEB20SHOW</h2>
          </div>
          <div class="body">
            <div class="sidebar">
              <a href="http://grasshopper.com/"><img src="<?php bloginfo("template_url"); ?>/images/power_by_grasshopper_logo.png" /></a>
              <h3><a href="http://grasshopper.com/">"Powered by the Virtual Phone System Designed for Entrepreneurs"</a></h3>
            </div>
            <div class="content">
              <h2>Why would I want to "Pitch the Show"?</h2>
              <p>It is the star to every wand'ring bark, that looks on tempests and is never shaken; whose worth's unknown, although his height be taken. Oh, no, it is an ever fixed mark love alters not with his brief hours and weeks, I never writ, nor no man ever loved. Within his bending sickle's compass come; or bends with the remover to remove. Which alters when it alteration finds, but bears it out even to the edge of doom.</p>
              <h2>How do I get involved?</h2>
              <p>It is the star to every wand'ring bark, that looks on tempests and is never shaken; whose worth's unknown, although his height be taken. Oh, no, it is an ever fixed mark love alters not with his brief hours and weeks, I never writ, nor no man ever loved. Within his bending sickle's compass come; or bends with the remover to remove. Which alters when it alteration finds, but bears it out even to the edge of doom.</p>
              <h2>What can pitching the show do for my business</h2>
              <p>It is the star to every wand'ring bark, that looks on tempests and is never shaken; whose worth's unknown, although his height be taken. Oh, no, it is an ever fixed mark love alters not with his brief hours and weeks, I never writ, nor no man ever loved. Within his bending sickle's compass come; or bends with the remover to remove. Which alters when it alteration finds, but bears it out even to the edge of doom.</p>
              <h2>How can I differentiate myself?</h2>
              <p>It is the star to every wand'ring bark, that looks on tempests and is never shaken; whose worth's unknown, although his height be taken. Oh, no, it is an ever fixed mark love alters not with his brief hours and weeks, I never writ, nor no man ever loved. Within his bending sickle's compass come; or bends with the remover to remove. Which alters when it alteration finds, but bears it out even to the edge of doom.</p>
            </div>
          </div>
          
        </div>
        <div class="details">
          
        </div>

      </div>
      <!-- end .pitch-the-show -->
  		
  		<?php endwhile; endif; ?>

    </div>
    <!-- end #main -->

  </div>
  <!-- end #content -->

</div>
<?php get_footer(); ?>