<?php $relatedSkills = get_field('related_skills');

if($relatedSkills) { 
  foreach($relatedSkills as $skill) { ?>
<hr class="section-break">
<article class="skill-article">
	<div class="skill__title-wrap">
		<h2 class="skill__headline">
			<?php echo get_the_title($skill); ?>
		</h2>
		<i class="skill__icon <?php the_field('devicon_class', $skill); ?>" aria-hidden="true"></i>
	</div>
	<p class="skill__content">
		<?php echo get_the_content($skill); ?>
	</p>
</article>
<?php
  } 
 } ?>
 