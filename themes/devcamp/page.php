<?php
  get_header();
  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

<div class="page-container">

	<?php
      $theParent = wp_get_post_parent_id(get_the_ID());

      if ($theParent) { ?>
	<div class="metabox">
		<a class="metabox__link" href="<?php echo get_permalink($theParent); ?>">
			Back to
			<?php echo get_the_title($theParent); ?>
		</a>
		<span class="metabox__title">
			<?php the_title(); ?>
		</span>
	</div>
	<?php }
    ?>

	<div class="generic-content">
		<?php the_content();

$faqQuery = new WP_Query(array(
  'post_type' => 'faq'
));
      if(is_page('faq')) { ?>
		<ul class="faq">
			<?php
        while($faqQuery->have_posts()) {
          $faqQuery->the_post();

?>
			<li class="faq__question">
			<button class="faq__button" type ="button" aria-label="Toggle Answer" aria-controls="faq" aria-expanded-"false" title="Toggle Answer">
			<i class="faq__icon" aria-hidden = "true"></i>
			<?php the_title(); ?>
			<span class = "sr-only">Toggle Answer</span>
			</button>
			<span class="faq__answer">
				<?php the_content(); ?>
			</span>
			</li>
			<?php
        } ?>
		</ul>
		<?php
      }
      ?>
	</div>

	<div class="page-links">
		<h2 class="page-links__title">
			<a href="<?php echo get_permalink($theParent); ?>">
				<?php echo get_the_title($theParent); ?>
			</a>
		</h2>
		<ul class="page-links__list">
			<?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
          ));
        ?>
		</ul>
	</div>
</div>

<?php }
  get_footer(); 