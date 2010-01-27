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
              <p>You should be pitching your business every day. It's not always about VC funding, and it certainly doesn't matter how successful you are. Pitching your business is about being heard, getting connected, and learning what works and what doesn't.</p>
              <p>So <strong><span>why not</span></strong> "Pitch the Show". Not only will this act as a small launch pad for your venture but you'll have the opportunity to showcase your business and expertise to a feature guest (successful entrepreneur) and the audience of the Web 2.0 Show!</p>
              <h2>How do I get involved?</h2>
              <p>Pick up the phone. Jot down a few notes, thoughts, etc. But most importantly, pick up the phone! Then pitch your heart out. Call as many times as it takes, seriously. You have <strong>90 seconds</strong> to show us your passion, professionalism, and buzzworthy-ness.</p>
              <p><strong>Important!!</strong> Just like in real life or at a demo pit, if you don't spark some interest right away we're moving on!</p>
              <h2>What will pitching the show do for my business?</h2>
              <p><strong>Exposure. Awareness. Feedback. Credibility.</strong> And that just scratches the surface. The bottom line is that the more you pitch yourself and your business the better you will get at it. The feedback you receive along the way will be invaluable to your business as well as your growth as an entrepreneur.</p>
              <p>Not to mention you'll get a ton of <strong>free exposure</strong> through the Web 2.0 Show!</p>
              <h2>How can I differentiate myself?</h2>
              <p>Lets be real here, lots of people have good ideas. It's how you execute, and engage your audience that separates the mediocre from the greats.</p>
              <p>You'll also need to <strong>embrace social media</strong> as a platform to help you. Tell your friends on Twitter and Facebook. Get them to re-tweet your message and let people know you pitched the show!</p>
              <h2>Already pitched the show?</h2>
              <p>If you've already pitched the show, congratulations! Now it's time to tell the world. Use the button below to tweet it!</p>
              <p><a href="http://twitter.com/home?status=I+just+pitched+@web20show+@grasshopper!+[insert+why+you+should+be+featured]" class="button">I pitched the show!</a></p>
            </div>
          </div>
          <div class="tweet_it">

          </div>
          <img src="<?php bloginfo("template_url"); ?>/images/speech_sliver.png" class="speech_sliver" />
          <img src="<?php bloginfo("template_url"); ?>/images/gary_corner.png" class="gary_corner" />
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