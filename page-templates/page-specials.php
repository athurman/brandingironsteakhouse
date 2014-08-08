<?php
/*
Template Name: Specials
*/
?>

<?php get_header(); ?>

<div id="inner-content" class="wrap">
  <div id="special-items">
    <div id="header-content" class="hentry clearfix">
      <h2>Specials</h2>
      <h4 class="sub-headline">Situated on famous Silver Street in infamous Hurley, Wisconsin. We serve the finest grain fed Midwestern beef, fresh seafood, Cajun specialties and pasta in a relaxed casual setting.</h4>
    </div>
    <div class="specials">
      <?php
      $args = array(
      'post_type' => 'specials',
      'posts_per_page' => -1,
      'order' => 'ASC'
      );
      $specials = get_posts($args);
      $sun = 1;
      $wed = 1;
      $thurs = 1;
      $fri = 1;
      $sat = 1;
      foreach($specials as $post) {
      ?>
      <?php if(get_field('week_day') == 'sunday') { ?>
        <?php if($sun>1) { continue; } ?>
        <h2 class="special-week-day">Sunday</h2>
        <hr />
        <?php foreach($specials as $special) { ?>
          <?php if(get_field('week_day', $special->ID) == 'sunday') { ?>
            <div class="special">
              <div class="title">
                <h4 class="special-title"><?php  echo get_the_title($special->ID); ?></h4>
                <h4 class="special-price"><?php echo get_field('price', $special->ID); ?></h4>
                <div class="clear-both"></div>
              </div>
              <p class="special-description"><?php echo get_field('description', $special->ID); ?></p>
            </div>
            <?php $sun++; ?>
          <?php } ?>
        <?php } ?>
      <?php } else if(get_field('week_day') == 'wednesday') { ?>
        <?php if($wed>1) { continue; } ?>
        <h2 class="special-week-day">Wednesday</h2>
        <hr />
        <?php foreach($specials as $special) { ?>
          <?php if(get_field('week_day', $special->ID) == 'wednesday') { ?>
            <div class="special">
              <div class="title">
                <h4 class="special-title"><?php  echo get_the_title($special->ID); ?></h4>
                <h4 class="special-price"><?php echo get_field('price', $special->ID); ?></h4>
                <div class="clear-both"></div>
              </div>
              <p class="special-description"><?php echo get_field('description', $special->ID); ?></p>
            </div>
            <?php $wed++; ?>
          <?php } ?>
        <?php } ?>
      <?php } else if(get_field('week_day') == 'thursday') { ?>
        <?php if($thurs>1) { continue; } ?>
        <h2 class="special-week-day">Thursday</h2>
        <hr />
        <?php foreach($specials as $special) { ?>
          <?php if(get_field('week_day', $special->ID) == 'thursday') { ?>
            <div class="special">
              <div class="title">
                <h4 class="special-title"><?php  echo get_the_title($special->ID); ?></h4>
                <h4 class="special-price"><?php echo get_field('price', $special->ID); ?></h4>
                <div class="clear-both"></div>
              </div>
              <p class="special-description"><?php echo get_field('description', $special->ID); ?></p>
            </div>
            <?php $thurs++; ?>
          <?php } ?>
        <?php } ?>
      <?php } else if(get_field('week_day', $post->ID) == 'friday') { ?>
        <?php if($fri>1) { continue; } ?>
        <h2 class="special-week-day">Friday</h2>
        <hr />
        <?php foreach($specials as $special) { ?>
          <?php if(get_field('week_day', $special->ID) == 'friday') { ?>
            <div class="special">
              <div class="title">
                <h4 class="special-title"><?php  echo get_the_title($special->ID); ?></h4>
                <h4 class="special-price"><?php echo get_field('price', $special->ID); ?></h4>
                <div class="clear-both"></div>
              </div>
              <p class="special-description"><?php echo get_field('description', $special->ID); ?></p>
            </div>
            <?php $fri++; ?>
          <?php } ?>
        <?php } ?>
      <?php } else if(get_field('week_day', $post->ID) == 'saturday') { ?>
        <?php if($sat>1) { continue; } ?>
        <h2 class="special-week-day">Saturday</h2>
        <hr />
        <?php foreach($specials as $special) { ?>
          <?php if(get_field('week_day', $special->ID) == 'saturday') { ?>
            <div class="special">
              <div class="title">
                <h4 class="special-title"><?php  echo get_the_title($special->ID); ?></h4>
                <h4 class="special-price"><?php echo get_field('price', $special->ID); ?></h4>
                <div class="clear-both"></div>
              </div>
              <p class="special-description"><?php echo get_field('description', $special->ID); ?></p>
            </div>
            <?php $sat++; ?>
          <?php } ?>
        <?php } ?>
      <?php } ?>
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