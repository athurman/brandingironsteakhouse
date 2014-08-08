<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div id="inner-content" class="wrap">
  <div id="homepage-introduction">
   <!--  <div id="home-slider" class="first clearfix"> -->
      <?php
        //echo do_shortcode("[metaslider id=8]");
      ?>
    <!-- </div> -->
    <div id="welcome" class="last clearfix">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="twelvecol first clearfix" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
          <section class="entry-content clearfix">
            <?php the_content(); ?>
          </section>
        </article>
      <?php endwhile; ?>
      <?php else : ?>
        <article id="post-not-found" class="hentry clearfix">
            <header class="article-header">
              <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
            </header>
            <section class="entry-content">
              <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
            </section>
            <footer class="article-footer">
                <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
            </footer>
        </article>
      <?php endif; ?>
    </div>
    <div class="twelvecol first image-banner">
      <?php echo do_shortcode('[print_thumbnail_slider]');?>
    </div>
    <div class="twelvecol first welcome-content">
      <div class="sixcol first welcome">
        <h1>Welcome</h1>
        <p>This is a paragraph about the restaraunt. The best food your money can buy in the northern woods.
        This is a paragraph about the restaraunt. The best food your money can buy in the northern woods.
      This is a paragraph about the restaraunt. The best food your money can buy in the northern woods.</p>
      </div>
      <div class="sixcol last margartitas-on-tap">
        <div class="float-left content">
          <h3>Margaritas on Tap</h3>
          <p>The only place in the north with Margaritas on tap.</p>
        </div>
        <img class="float-right" src="<?php echo get_template_directory_uri(); ?>/library/images/bar-margarita.jpg" />
      </div>
    </div>
    <div class="twelvecol first footer-content">
      <div class="fourcol first hours-of-operation">
        <h3 class="text-center">Hours of Operation</h3>
        <ul>
          <li><span class="day">Sun:</span> 10:00 am - 2:00 pm</li>
          <li><span class="day">Mon:</span> closed</li>
          <li><span class="day">Tues:</span> closed</li>
          <li><span class="day">Wed:</span> 4:30 pm - 10:00 pm</li>
          <li><span class="day">Thurs:</span> 4:30 pm - 10:00 pm</li>
          <li><span class="day">Fri:</span> 4:30 pm - 10:00 pm</li>
          <li><span class="day">Sat:</span> 4:30 pm - 10:00 pm</li>
        </ul>
      </div>
      <div class="fourcol location">
        <h3 class="text-center">Location</h3>
        <p>Situated on famous Silver Street in infamous Hurley, Wisconsin.</p>
        <br />
        <p>214 Silver St</p>
        <p>Hurley, Wisconsin 54534</p>
        <p>Phone: (715) 561-4562</p>
        <p><a href="https://www.facebook.com/BrandingIronSteakhouseandPub" target="_blank">Find us on Facebook</a></p>
      </div>
      <div class="fourcol last sunday-brunch">
        <h3 class="text-center">Sunday Brunch</h3>
        <p>Join us for Sunday Brunch!</p>
        <br />
        <p>Including our "Build Your Own" Bloody Mary bar and all you can eat buffet featuring delicious entrees from waffles to omeletes.</p>
      </div>
    </div>
    <div class="clear-both"></div>
  </div>
</div>

<?php get_footer(); ?>