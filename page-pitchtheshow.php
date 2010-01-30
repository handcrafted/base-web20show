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
          <!-- start .body -->
          <div class="body">

            <div class="columns intro">
              <h2>What is Pitch the Show?</h2>
              <div class="column one">
                <div class="inner">
                  <p>Pitch the Show is a new segment of the Web 2.0 Show, powered by Grasshopper, that gives anyone a chance to pitch their business for an opportunity to be featured on the show.</p>
                  <p>How does it work? Simple. Just call 1-888-WEB20SHOW and give us your best 90 second pitch about your business.</p>
                </div>
              </div>
              <div class="column two">
                <div class="inner">
                  <p>Each month we will select only 2 pitches out of the many businesses that call in. These 2 businesses will be featured on a special monthly episode of the Web 2.0 Show, and will get exposure to its listeners as well as special guests who've made their mark on the entrepreneurial world.</p>
                </div>
              </div>
              <!-- <p><strong>So, what are you waiting for? May the Best Pitch Win!!
  </strong></p> -->
            </div>
            <div class="logos">
              <a href="http://grasshopper.com/" class="grasshopper_logo" alt="Powered by Grasshopper"><img src="<?php bloginfo("template_url"); ?>/images/powered_by_grasshopper_logo_285.png" /></a>
            </div>
            <div class="columns questions">
              <div class="column one">
                <div class="inner">
                  <h3>Why should I pitch?</h3>
                  <p>You should be pitching your business every day. It's not always about VC funding, and it certainly doesn't matter how successful you are.</p>
                  <p>Pitching your business is about being heard, getting connected, and learning what works and what doesn't. Not only will this act as a small launch pad for you but you'll have the opportunity to showcase your business as well.</p>
                </div>
              </div>
              <div class="column two">
                <div class="inner">
                  <h3>How do I get involved?</h3>
                  <p>Read through the resources, jot down a few notes, thoughts, etc. Pick up the phone. Then pitch your heart out. </p>
                  <p>You can call as many times as it takes, seriously. You have <strong>90 seconds</strong> to show us your passion, professionalism, and buzzworthy-ness.</p>
                  <p><strong>Don't forget</strong>, just like in real life or at a demo pit if you don't spark some interest right away we are moving on!</p>
                  <!-- <p>But most importantly, pick up the phone and call!</p> -->
                </div>
              </div>
              <div class="column three">
                <div class="inner">
                  <h3>How can this help me?</h3>
                  <p>Get exposure, create awareness, get feedback, establish your credibility, and that just scratches the surface. The bottom line here is that the more you pitch yourself and your business the better you will get at doing it.</p>
                    <p>The feedback you receive along the way will be invaluable to your business as well as your growth as an entrepreneur.</p>
                </div>
              </div>
            </div>
            <div class="logos">
              <a href="http://grasshopper.com/" class="grasshopper_text"><img src="<?php bloginfo("template_url"); ?>/images/power_by_grasshopper_text_horizontal.png" alt="Powered by the Virtual Phone System Designed for Entrepreneurs" /></a>
            </div>
            <div class="outro">
              <div class="columns">
                <div class="column one">
                  <h2>Embrace the power of Twitter!</h2>           
                  <p>Arm your Twitter followers with a Tweet they can retweet or a blog they can talk about! You'll need to embrace social media and use Twitter to influence your chances. Engage us in public about your pitch, we want to hear from you. We want to see you tell your friends and ask them to retweet your message.</p>
                  <p>We'll be keeping a careful watch on Twitter by tracking the hashtag <a href="http://search.twitter.com/search?q=%23pitchtheshow">#pitchtheshow</a>. Make sure you tag your tweets!</p>
                  <p>Tweet this message to make your first tweet easier for you!</p>
                </div>
              </div>
              <img src="<?php bloginfo("template_url"); ?>/images/gary_corner.png" class="gary_corner" />
              <div class="tweet_message">
                <div class="inner">
                  I just pitched @web20show @grasshopper! [insert why you should be featured] #pitchtheshow
                </div>
              </div>
              <div class="speech_sliver"></div>
              <a href="http://twitter.com/home?status=I+just+pitched+@web20show+%26+@grasshopper!+[insert+why+you+should+be+featured]+%23pitchtheshow" class="tweet_this">Tweet This Message!</a>
            </div>

          </div>
          <!-- end .body -->
        </div>
        <div class="details">
          <div class="columns intro">
            <h2>What is Pitch the Show?</h2>
            <div class="column one">
              <div class="inner">
                <p>Pitch the Show is a new segment of the Web 2.0 Show, powered by Grasshopper, that gives anyone a chance to pitch their business for an opportunity to be featured on the show.</p>
                <p>How does it work? Simple. Just call 1-888-WEB20SHOW and give us your best 90 second pitch about your business.</p>
              </div>
            </div>
            <div class="column two">
              <div class="inner">
                <p>Each month we will select only 2 pitches out of the many businesses that call in. These 2 businesses will be featured on a special monthly episode of the Web 2.0 Show, and will get exposure to its listeners as well as special guests who've made their mark on the entrepreneurial world.</p>
              </div>
            </div>
          </div>
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