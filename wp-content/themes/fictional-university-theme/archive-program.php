<?php

get_header(); ?>
	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg');?>)"></div>
		<div class="page-banner__content container container--narrow">
			<h1 class="page-banner__title">All Programs</h1>
			<div class="page-banner__intro">
				<p>There is something for everyone. Have a look around.</p>
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

		<ul class="link-list min-list">
		<?php
		while(have_posts()) {
			the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php  }
		?>
		</ul>

	</div>


<?php

get_footer();

?>