<?php
get_header();
pageBanner(array(
  'title' => 'All Programs',
  'subtitle' => 'There is something for everyone. Have a look around.'
));
 ?>

<div class="container-posts-width-control">

	<?php
  while(have_posts()) {
    the_post(); ?>

	<article class="program">
		<h1 class="program__headline">
			<a class="program__link" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>

		<?php the_excerpt(); ?>

		<a class="program__link" href="<?php the_permalink(); ?>">Read More >></a>

		<?php $relatedSkills = get_field('related_skills');
			if($relatedSkills) { ?>

		<hr class="section-break">
		<ul class="skill-list">

			<?php foreach($relatedSkills as $skill) { ?>

			<li class="skill-list__item">
				<i class="skill-list__icon <?php the_field('devicon_class', $skill); ?>" aria-hidden="true"></i>
			</li>

			<?php } 
 } ?>

		</ul>
	</article>

	<?php } ?>

</div>

<?php get_footer(); 