<?php
get_header();
pageBanner(array(
  'title' => 'Welcome to our blog!',
  'subtitle' => 'Keep up with our latest news.'
));
 ?>

<div class="container-posts-width-control">

	<?php
  while(have_posts()) {
    the_post(); 
	  get_template_part('template-parts/content', 'post-excerpt');
}
  echo paginate_links();
?>

</div>

<?php get_footer();

