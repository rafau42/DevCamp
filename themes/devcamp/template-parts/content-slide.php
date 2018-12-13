<article class="slider__slide slide" style="background-image: url(<?php echo get_theme_file_uri('/images/fatos.jpg') ?>);">
		<div class="slide__container">
			<h1 class="slide__headline">
				<?php the_title(); ?>
			</h1>
			<div class="slide__wrap-paragraph">
				<?php if(has_excerpt()) {
        the_excerpt();
      } else {
        echo wp_trim_words(get_the_content(), 30);
      }  ?>
			</div>
			<a href="<?php the_permalink(); ?>" class="slide__btn">Learn more</a>
		</div>
	</article>