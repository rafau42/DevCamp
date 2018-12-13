<?php get_header(); 
pageBanner(array(
  'title' => 'Devcamp',
  'subtitle' => 'Best coding bootcamp you will find.'
));
?>

<div class="container-posts">
	<div class="container-posts__column container-posts__column--one">
		<h2 class="container-posts__headline">Events</h2>

		<?php 
          $today = date('Ymd');
          $frontpageEvents = new WP_Query(array(
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
              )
            )
          ));

          while($frontpageEvents->have_posts()) {
            $frontpageEvents->the_post();
            get_template_part('template-parts/content', 'event-excerpt');
          }
        ?>

		<a href="<?php echo get_post_type_archive_link('event') ?>" class="container-posts__archive-link">View All Events</a>
	</div>

	<div class="container-posts__column container-posts__column--two">
		<h2 class="container-posts__headline">From Our Blogs</h2>

		<?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
          ));

          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post();
  get_template_part('template-parts/content', 'post-excerpt-front');
} wp_reset_postdata();
        ?>

		<a href="<?php echo site_url('/blog'); ?>" class="container-posts__archive-link">View All Blog Posts</a>
	</div>
</div>

<div class="slider">
	<?php
$programsQuery = new WP_Query(array(
  'post_type' => 'program',
));

while($programsQuery -> have_posts()) { 
  $programsQuery -> the_post();
  get_template_part('template-parts/content', 'slide');
}
?>

</div>

<?php get_footer();

