<?php
function devcamp_files() {
wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDI-knWgQSfDN92i7dy8_eOC8cYNPl8KRo', NULL, '1.0', true);
wp_enqueue_script( 'js-main', get_template_directory_uri() . '/js/scripts-bundled.js', array( 'jquery' ), '1.0', true);
wp_enqueue_style('font-lato', 'https://fonts.googleapis.com/css?family=Lato');
wp_enqueue_style('devicons', 'https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css');
wp_enqueue_style('genericons', get_template_directory_uri() . '/css/genericons.css');
wp_enqueue_style('css-main', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'devcamp_files');

function devcamp_features() {
    add_theme_support('title-tag');
    add_image_size('thumbnail_small', 90, 65, true);
    add_image_size('thumbnail_medium', 660, 440, true);
    add_image_size('photo_medium', 400, 400, true);
    add_image_size('photo_small', 250, 250, true);
    set_post_thumbnail_size(300, 200, true);
    register_nav_menu( 'primary', esc_html__( 'Main Navigation', 'devcamp' ) );
    register_nav_menu( 'footer_one', esc_html__( 'Footer One', 'devcamp' ) );
    register_nav_menu( 'footer_two', esc_html__( 'Footer Two', 'devcamp' ) );

  }
  
  add_action('after_setup_theme', 'devcamp_features');

function pageBanner($args = NULL) {
  
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/code.jpg');
    }
  }

  ?>

<div class="page-banner" style="background-image: url(<?php echo $args['photo']; ?>);">
	<div class="page-banner__content">
		<h1 class="page-banner__title">
			<?php echo $args['title'] ?>
		</h1>
		<p class="page-banner__text">
			<?php echo $args['subtitle']; ?>
		</p>
	</div>
</div>

<?php }

  function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary' ) {
      $classes[] = 'navigation__item';
    }
    
    return $classes; 
  }
  add_filter('nav_menu_css_class','atg_menu_classes',1,3);
  
  function add_link_atts($atts) {
    $atts['class'] = "navigation__link";
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_link_atts'); ?>