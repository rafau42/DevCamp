<?php
get_header();
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'See what is going on in our world.'
));
 ?>

<div class="container-posts-width-control">

	<?php
  while(have_posts()) {
    the_post(); 
    get_template_part('template-parts/content-event-excerpt');
   }
  echo paginate_links();
?>

	<hr class="section-break">
	<p>Looking for a recap of past events?
		<a class="page-events__archive-link" href="<?php echo site_url('/past-events') ?>">Check out our past events archive</a>.</p>
</div>

<?php get_footer(); 