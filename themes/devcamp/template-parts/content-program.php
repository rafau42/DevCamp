<article class="program">
		<h1 class="program__headline">
			<?php the_title(); ?>
		</h1>

		<?php the_content();
          get_template_part('template-parts/content', 'skill');
          ?>
	</article>