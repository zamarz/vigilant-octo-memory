<?php get_header(); ?>

  <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/Typing_Unsplash.jpg'); ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Hi, I'm Zach</h1>
        <h3 class="headline headline--small">I'm an enthusiastic developer keen to delve deeper into the tech world and continue my development journey.</h3>
        <a href="<?php echo site_url('/about-me'); ?>" class="btn btn--large btn--blue">Learn more about me</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">My latest projects</h2>

          <?php

          $homePagePosts = new WP_Query(array(
            'posts_per_page' => 2
          ));


            while($homePagePosts->have_posts()) { 
                $homePagePosts->the_post(); ?>
           
           <div class="event-summary">
            <a  href="<?php the_permalink(); ?>">

              <?php the_post_thumbnail('medium'); ?>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php echo wp_trim_words(get_the_content(), 18); ?><a href="<?php the_permalink(); ?>" class="nu gray"> Learn more</a></p>
            </div>
          </div>

          <?php  } wp_reset_postdata();
          ?>


          <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Projects</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Articles I've written</h2>
          

          <div class="event-summary">
          <img src="<?php echo get_theme_file_uri('/images/Japan_image_unsplash.jpg'); ?>" width="300" height="300">
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="https://www.itpro.com/business-strategy/startups/361311/why-does-japan-lag-behind-on-startups" target="_blank">Why does Japan lag behind on startups?</a></h5>
              <p> The country has a reputation as a tech leader, but its startup ecosystem has yet to achieve its potential . <a href="https://www.itpro.com/business-strategy/startups/361311/why-does-japan-lag-behind-on-startups" target="_blank" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
                 <img src="<?php echo get_theme_file_uri('/images/Typing_Unsplash.jpg'); ?>" width="300" height="300">
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="https://www.itpro.com/technology/artificial-intelligence-ai/359765/with-ai-on-the-rise-is-it-time-to-join-a-union" target="_blank"> With AI on the rise, is it time to join a union? </a></h5>
              <p> Workplace challenges posed by new technology could be answered by very traditional solutions <a href="https://www.itpro.com/technology/artificial-intelligence-ai/359765/with-ai-on-the-rise-is-it-time-to-join-a-union" target="_blank"class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">See All Articles</a></p>
        </div>
      </div>
    </div>

    <!-- <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg'); ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg'); ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg'); ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div> -->


<?php
get_footer(); 

?>