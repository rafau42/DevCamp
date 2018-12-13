<?php
get_header();
pageBanner();
 ?>

<div class="container-posts-width-control">

	<?php
  while(have_posts()) {
    the_post(); 
	  get_template_part('template-parts/content', 'post');
}
?>

</div>

<?php get_footer();

