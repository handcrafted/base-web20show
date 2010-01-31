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
        <div class="tweetmeme_retweet">
          <script type="text/javascript">
            tweetmeme_url = '<?php the_permalink() ?>';
            tweetmeme_style = 'compact';
            tweetmeme_source = 'web20show';
          </script>
          <script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
        </div>
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
                  <a href="http://grasshopper.com/" alt="Powered by Grasshopper"><img src="<?php bloginfo("template_url"); ?>/images/powered_by_grasshopper_logo_250.png" class="grasshopper_logo" width="252" height="105" /></a>
                  <p>Pitch the Show is a new segment of the Web 2.0 Show that gives anyone a chance to pitch their business for an opportunity to be featured on the show. All you need to do is call <strong>1-888-WEB20SHOW</strong> and give us your best 90 second pitch about your business.</p>
                  <p>Each month we will select only 2 pitches out of the many businesses that call in. These 2 businesses will be featured on a special monthly episode of the Web 2.0 Show and will get exposure to the listeners as well as special guests who have made their mark on the entrepreneurial world.</p>
                </div>
              </div>
              <div class="column two">
                <div class="inner">

                </div>
              </div>
              <!-- <p><strong>So, what are you waiting for? May the Best Pitch Win!!
  </strong></p> -->
            </div>
<!--             <div class="logos">
              <a href="http://grasshopper.com/" class="grasshopper_logo" alt="Powered by Grasshopper"><img src="<?php bloginfo("template_url"); ?>/images/powered_by_grasshopper_logo_250.png" width="252" height="105" /></a>
            </div> -->
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
                  <p>You can call as many times as it takes. You have <strong>90 seconds</strong> to show us your passion, professionalism, and buzzworthy-ness.</p>
                  <p><strong>Important!</strong> Just like in real life or at a demo pit if you don't spark some interest right away we are moving on!</p>
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
                  <p>Arm your Twitter followers with a Tweet to retweet or a blog post to talk about! Tell your friends and ask them to retweet your message. You need to embrace Twitter to influence your chances.</p>
                  <p>Engage us in public about your pitch, we want to hear from you. We'll be keeping a careful watch on Twitter by tracking the hashtag <a href="http://search.twitter.com/search?q=%23pitchtheshow">#pitchtheshow</a>. Make sure you tag your tweets!</p>
                  <p><strong>Tweet this message</strong> to get started with your first tweet!</p>
                </div>
              </div>
              <img src="<?php bloginfo("template_url"); ?>/images/gary_corner.png" class="gary_corner" />
              <div class="tweet_message">
                <div class="inner">
                  I just pitched @web20show &amp; @grasshopper! [insert why you should be featured] #pitchtheshow
                </div>
              </div>
              <div class="speech_sliver"></div>
              <a href="http://twitter.com/home?status=I+just+pitched+@web20show+%26+@grasshopper!+[insert+why+you+should+be+featured]+%23pitchtheshow" class="tweet_this">Tweet This Message!</a>
            </div>

          </div>
          <!-- end .body -->
        </div>
        <div id="resources" class="details">
          <div class="columns">
            <div class="column one">
              <h2>Resources and Links</h2>
              <h3>Use the links and resources below to your advantage!</h3>
              <p>Learning to pitch your idea or business can be an adventure all its own. Don't worry, it's not as hard as it may seem. With good guidance and a little practice, you'll have your pitch ready in no time and be ready to <strong>Pitch the Show</strong>.</p>
              <ul>
                <li>
                  <p><strong>Learning what not to do</strong> can sometimes be the best place to start when researching how to pitch your idea or business.</p>
                </li>
                <li>
                  <p><strong>Bends with the remover</strong> to remove. Which alters when it alteration finds, but bears it out even to the edge of doom.</p>
                </li>
                <li>
                  <p><strong>Empowerment of all personnel</strong> not just key operatives. Exploitation of core competencies as an essential enabler, by adopting project appraisal through incremental cash flow analysis.</p>
                </li>
                <li>
                  <p><strong>It is the star</strong> to every wand'ring bark, that looks on tempests and is never shaken; whose worth's unknown, although his height be taken.</p>
                </li>
              </ul>
            </div>
            <div class="column two">
              <div class="inner">
                <h2>Meet the Judges</h2>
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

<div id="people">
  
</div>

<?php get_footer(); ?>