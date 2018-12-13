<?php $eventDate = new DateTime(get_field('event_date')); ?>

<article class="container-posts__excerpt excerpt">
	<a class="excerpt__date" href="<?php the_permalink(); ?>">
		<span class="excerpt__month">
			<?php  echo $eventDate->format('M'); ?>
		</span>
		<span class="excerpt__day">
			<?php  echo $eventDate->format('d'); ?>
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