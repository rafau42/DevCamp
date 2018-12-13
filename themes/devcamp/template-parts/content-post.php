<div class="blog-post">
	<h2 class="blog-post__headline">
		<?php the_title(); ?>
	</h2>

	<div class="blog-post__metabox">
		<p class="blog-post__metabox-paragraph">Posted by
			<?php the_author_posts_link(); ?>on
			<?php the_time('n.j.y'); ?>in
			<?php echo get_the_category_list(', '); ?>
		</p>
	</div>

	<div class="blog-post__content">

		<?php
       the_content();
     ?>

	</div>
</div>