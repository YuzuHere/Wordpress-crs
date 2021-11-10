<?php

get_header();


while(have_posts()) {
	the_post(); ?>
	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
		</div>
		<div class="page-banner__content container container--narrow">
			<h1 class="page-banner__title"><?php the_title(); ?></h1>
			<div class="page-banner__intro">
				<p>Dont forget to replace me later</p>
			</div>
		</div>
	</div>

	<div class="container container--narrow page-section">
		<div class="metabox metabox--position-up metabox--with-home-link">
			<p>
				<a class="metabox__blog-home-link" href="<?php echo site_url('/programs'); ?>"><i class="fa fa-home" aria-hidden="true"></i> All Programs</a>
				<span class="metabox__main"> <?php the_title(); ?>
        </span>
			</p>
		</div>

		<div class="generic-content">
			<?php the_content(); ?>
		</div>

		<?php
		$relatedProfessors = new WP_Query(array(
			'posts_per_page' => -1,
			'post_type' => 'professor',
			'orderby' => 'title',
			'order' => 'ASC',
			'meta_query' =>	array(
					'key' => 'related_program',
					'compare' => 'LIKE',
					'value' => '"' . get_the_ID() . '"',
				),
			)
		);
		if ($relatedProfessors->have_posts()) {
		echo '<h2 class="headline headline--medium"> Professors Teaching ' . get_the_title(); '</h2>';
		echo '<hr class="section-break">';

		while ($relatedProfessors->have_posts()) {
		$relatedProfessors->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php  } }
        echo '<hr class="section-break">';

        ////RESET DATA BETWEEN QUERIES
        wp_reset_postdata();


		$today = date('Ymd');
		$homepageEvents = new WP_Query(array(
			'posts_per_page' => 2,
			'post_type' => 'event',
			'meta_key' => 'event_date',
			'orderby' => 'meta_value_num',
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key' => 'event_date',
					'compare' => '>=',
					'value' => $today,
					'type' => 'numeric'
				),
                array(
                        'key' => 'related_program',
                    'compare' => 'LIKE',
                        'value' => '"' . get_the_ID() . '"',
                ),
			)
		));
        if ($homepageEvents->have_posts()) {
        echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Events</h2>';
        echo '<hr class="section-break">';

		while ($homepageEvents->have_posts()) {
			$homepageEvents->the_post(); ?>
            <div class="event-summary">
                <a class="event-summary__date event-summary__date t-center" href="<?php the_permalink(); ?>">
          <span class="event-summary__month"><?php
	          $eventDate = new DateTime(get_field('event_date'));
	          echo $eventDate->format('M');
	          ?></span>
                    <span class="event-summary__day"><?php
						$eventDay = new DateTime(get_field( 'event_date'));
						echo $eventDay->format('d')
						?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php if (has_excerpt()) {
							echo get_the_excerpt();
						} else {
							echo wp_trim_words(get_the_content(), 18);
						}
						?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                </div>
            </div>
		<?php  } } wp_reset_postdata();
		?>
	</div>

<?php }

get_footer();

?>