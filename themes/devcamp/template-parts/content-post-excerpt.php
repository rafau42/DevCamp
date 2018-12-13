<div class="blog-post">
		<h2 class="blog-post__headline">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<div class="blog-post__metabox">
			<p class="blog-post__metabox-paragraph">Posted by 
				<?php the_author_posts_link(); ?> on
				<?php the_time('n.j.y'); ?> in
				<?php echo get_the_category_list(', '); ?>
			</p>
		</div>

		<div class="blog-post__content">
			<p>
				<?php echo wp_trim_words(get_the_content(), 50); ?>
			</p>
    </div>
    
    <a class="blog-post__read-more" href="<?php the_permalink(); ?>">Continue reading &raquo;</a>
  </div>