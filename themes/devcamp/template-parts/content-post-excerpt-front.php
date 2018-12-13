<article class="container-posts__excerpt excerpt">
	<a class="excerpt__date" href="<?php the_permalink(); ?>">
		<span class="excerpt__month">
			<?php the_time('M'); ?>
		</span>
		<span class="excerpt__day">
			<?php the_time('d'); ?>
		</span>
	</a>
	<div class="excerpt__text">
		<h1 class="excerpt__title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<p>
			<?php echo wp_trim_words(get_the_content(), 18); ?>
			<a href="<?php the_permalink(); ?>" class="excerpt__read-more">Read more</a>
		</p>
	</div>
</article>