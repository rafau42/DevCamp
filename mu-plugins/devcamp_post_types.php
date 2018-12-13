<?php

function devcamp_post_types() {

  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  register_post_type('faq', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'Faq'),
    'has_archive' => false,
    'public' => true,
    'labels' => array(
      'name' => 'Faq',
      'add_new_item' => 'Add New Faq',
      'edit_item' => 'Edit Faq',
      'all_items' => 'All Faq',
      'singular_name' => 'Faq'
    ),
    'menu_icon' => 'dashicons-external'
  ));

  register_post_type('program', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards'
  ));

  register_post_type('skill', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'skills'),
    'has_archive' => false,
    'public' => true,
    'labels' => array(
      'name' => 'Skills',
      'add_new_item' => 'Add New Skill',
      'edit_item' => 'Edit Skill',
      'all_items' => 'All Skills',
      'singular_name' => 'Skills'
    ),
    'menu_icon' => 'dashicons-admin-customizer'
  ));

  register_post_type('location', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'locations'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Locations',
      'add_new_item' => 'Add New Location',
      'edit_item' => 'Edit Locations',
      'all_items' => 'All Locations',
      'singular_name' => 'Location'
    ),
    'menu_icon' => 'dashicons-location-alt'
  ));
}

add_action('init', 'devcamp_post_types');

?>