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
            <h1>Get Heard. Pitch the Show!</h1>
            <h2>Getting by calling the Web 2.0 Show at 1-888-WEB20SHOW</h2>
          </div>
          <!-- start .body -->
          <div class="body">

            <!-- start .columns -->
            <div class="columns intro">
              <h2>What is Pitch the Show?</h2>
              <div class="column one">
                <div class="inner">
                  <a href="http://grasshopper.com/" alt="Powered by Grasshopper"><img src="<?php bloginfo("template_url"); ?>/images/powered_by_grasshopper_logo_250.png" class="grasshopper_logo" width="252" height="105" /></a>
                  <p><em>Pitch the Show</em> is a new segment of the Web 2.0 Show that gives anyone a chance to pitch their business for an opportunity to be featured on the show.</p>
                  <p>All you need to do is call <strong>1-888-WEB20SHOW</strong> and give us your best 90 second pitch about your business.</p>
                  <p>Each month we will select only 2 pitches out of the many businesses that call in. These 2 businesses will be featured on a special monthly episode of the Web 2.0 Show and will get exposure to the listeners as well as special guests who have made their mark on the entrepreneurial world.</p>
                </div>
              </div>
            </div>
            <div class="columns questions">
              <div class="column one">
                <div class="inner">
                  <h3>Why should I pitch?</h3>
                  <p>Pitching your business is about being heard, getting connected, and figuring out what works. <em>Pitch the Show</em> provides a ton of awareness to 2 selected entrepreneurs each month with the best pitch. Not only do they gain exposure with the show's listeners, but also the judges and special guests as well.</p>
                  <p>Just like anything viral, if you get the attention of the right people, you never know who they will talk to about you!</p>
                </div>
              </div>
              <div class="column two">
                <div class="inner">
                  <h3>How do I get involved?</h3>
                  <!-- <p>Read through the resources, jot down a few notes, thoughts, etc. Pick up the phone, then pitch your heart out.</p> -->
                  <p>Get your pitch together and practice, practice, practice. Pick up the phone, then pitch your heart out!</p>
                  <p>You can call as many times as it takes. You have <em>90 seconds</em> to show us your passion, professionalism, and buzzworthy-ness.</p>
                  <p><strong>Important!</strong> Just like in real life or at a demo pit if you don't spark some interest right away we are moving on!</p>
                </div>
              </div>
              <div class="column three">
                <div class="inner">
                  <h3>How can this help me?</h3>
                  <p>Get exposure, create awareness, get feedback, establish your credibility, and that just scratches the surface of what <em>Pitch the Show</em> can do for you. The bottom line here is that the more you pitch yourself and your business the better you will get at doing it.</p>
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
                  <p>Differentiate yourself and influence your chances of getting selected by leveraging Twitter. Arm your Twitter followers with a Tweet to retweet or a blog post to talk about! Tell your friends and ask them to help you by spreading your message.</p>
                  <p>Be sure to engage us after you pitch. We understand the value of listening and want to hear from you! We will be tracking the hashtag <a href="http://search.twitter.com/search?q=%23pitchtheshow">#pitchtheshow</a>, so make sure you tag your tweets!</p>
                  <p><strong>Tweet this message</strong> to get started.</p>
                  <img src="<?php bloginfo("template_url"); ?>/images/arrow.png" class="arrow" />
                </div>
              </div>
              <img src="<?php bloginfo("template_url"); ?>/images/gary_corner.png" class="gary_corner" />
              <div class="tweet_message">
                <div class="inner">
                  I just pitched @web20show &amp; @grasshopper! [insert why you should be featured] #pitchtheshow
                </div>
              </div>
              <div class="speech_sliver"></div>
              <a href="http://twitter.com/home?status=I+just+pitched+@web20show+%26+@grasshopper!+[insert+why+you+should+be+featured]+%23pitchtheshow" class="tweet_this">Tweet This Message</a>
            </div>
            <!-- end .columns -->

          </div>
          <!-- end .body -->
        </div>
        <div id="resources" class="details">
          <div class="columns">
            
            <div class="column one">
              <h2>Meet the Judges</h2>
              <div id="judges">
                <div class="judge">
                  <h3>Adam Stacoviak<span> / <a href="http://twitter.com/adamstac">@adamstac</a></span></h3>
                  <img src="<?php bloginfo("template_url"); ?>/images/judge_adam_stacoviak.png" />
                  <p>Adam Stacoviak is the host of the Web 2.0 Show. Adam is extremely passionate about telling the story of entrepreneurs and startups.</p>
                  <p>Adam is a entrepreneur, designer &amp; developer and a connector. A few words that Adam is known to live by, "...people helping people".</p>
                  <div class="tooltip">
                    <p>This isn't TechCruch50 or the "DemoPit". It's not about winning a "prize" or taking home an award. This is about an opportunity to get on the show, get heard and tell your story to some very influential people.</p>
                  </div>
                </div>
                <div class="judge">
                  <h3>Siamak Taghaddos<span> / <a href="http://twitter.com/staghaddos">@staghaddos</a></span></h3>
                  <img src="<?php bloginfo("template_url"); ?>/images/judge_siamak_taghaddos.png" />
                  <p>Siamak Taghaddos is Co-founder and Chief Executive Officer of Grasshopper. Siamak has served as a panelist at Harvard Business School, has been a guest speaker at Loyola University School of Business, and serves as a judge for numerous Babson entrepreneurship competitions.</p>
                  <div class="tooltip">
                    <p>This is how anyone should pitch an idea to me in 90 seconds:</p>
                    <p>
                      :20 What, target, value?<br/>
                      :10 Pricing model?<br/>
                      :20 Why is it unique/buzzworthy?<br/>
                      :15 Funding requirements?<br/>
                      :25 The team?<br/>
                    </p>
                  </div>
                </div>
                <div class="judge">
                  <h3>David Hauser<span> / <a href="http://twitter.com/dh">@dh</a></span></h3>
                  <img src="<?php bloginfo("template_url"); ?>/images/judge_david_hauser.png" />
                  <p>David Hauser is Co-founder and Chief Technology Officer of Grasshopper. A technology start-up veteran, David's strong entrepreneurial spirit has allowed him to serve as a consultant for various companies as well as a mentor to emerging entrepreneurs through his alma mater, Babson College.</p>
                  <div class="tooltip">
                    <p>Tell me why you are most passionate about this opportunity, and it cannot just be the size of the opportunity.</p>
                  </div>
                </div>
                <div class="judge">
                  <h3>Jonathan Kay<span> / <a href="http://twitter.com/GrasshopperBuzz">@GrasshopperBuzz</a></span></h3>
                  <img src="<?php bloginfo("template_url"); ?>/images/judge_jonathan_kay.png" />
                  <p>Jonathan Kay is the Ambassador of Buzz at Grasshopper. He handles all buzz, strategic alliance, &amp; community related matters. Jonathan is extremely passionate about helping / meeting new entrepreneurs and always excited to learn about their unique journey.</p>
                  <div class="tooltip">
                    <p>When we launched our first Labs product at the TechCruch50 DemoPit, I pitched Chargify over 100 times in a single day. Not only did I gain confidence, but by the end of the day I was able to be more direct as I knew what was most buzz-worthy to my audience. Repetition is everything.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="column two">
              <h2>Resources and Links</h2>
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