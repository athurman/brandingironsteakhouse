<?php
/*
Template Name: Desserts
*/
?>

<?php get_header(); ?>

<div id="inner-content" class="wrap">
  <div id="dessert-items">
    <div id="header-content" class="hentry clearfix">
      <h2>Desserts</h2>
      <h4 class="sub-headline">Situated on famous Silver Street in infamous Hurley, Wisconsin. We serve the finest grain fed Midwestern beef, fresh seafood, Cajun specialties and pasta in a relaxed casual setting.</h4>
    </div>
    <div class="desserts">
      <?php
      $args = array(
      'post_type' => 'desserts',
      'posts_per_page' => -1,
      'order' => 'ASC'
      );
      $appetizers = get_posts($args);
      foreach($appetizers as $post) {
      ?>
        <div class="dessert">
          <div class="title">
            <h4 class="dessert-title"><?php the_title(); ?></h4>
            <h4 class="dessert-price"><?php echo get_field('price'); ?></h4>
            <div class="clear-both"></div>
          </div>
          <p class="dessert-description"><?php echo get_field('description'); ?></p>
        </div>
      <?php } ?>
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