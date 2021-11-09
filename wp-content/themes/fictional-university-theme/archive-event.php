<?php 

get_header(); ?>
<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg');?>)"></div>
<div class="page-banner__content container container--narrow">
  <h1 class="page-banner__title">All Events</h1>
  <div class="page-banner__intro">
    <p>See what is going on in our world!</p>
  </div>
</div>
</div>

<div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Event Home</a> 
          <span class="metabox__main"> <?php the_title(); ?>
        </span>
        </p>
      </div>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
      the_post(); ?>
      <div class="event-summary">
        <a class="event-summary__date event-summary__date t-center" href="<?php the_permalink(); ?>">
          <span class="event-summary__month"><?php
              $eventDate = new DateTime(get_field( 'event_date'));
	          echo $eventDate->format('M');
              ?></span>
          <span class="event-summary__day"><?php
              $eventDay = new DateTime(get_field( 'event_date'));
              echo $eventDay->format('d');
              ?></span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
        </div>
      </div>   
      <?php  }
echo paginate_links();
wp_reset_postdata();
      ?>
</div>


<?php

get_footer();

?>