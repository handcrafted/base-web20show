<?php
/**
 * @package WordPress
 * @subpackage Base
 */
?>
  
    <div id="footer">
      <div class="inner">
        <p><?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress <?php bloginfo('version'); ?></a> <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>. <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. --></p>
    		<?php wp_footer(); ?>
      </div>
    </div>

	</body>

</html>