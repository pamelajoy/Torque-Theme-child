<?php
/**
 * Loop to display the page sections content for a default page
 *
 * @package Wordpress
 */


// check if the flexible content field has rows of data
if ( have_rows( 'sections' ) ):

  // loop through the rows of data
  while ( have_rows( 'sections' ) ) : the_row();

    switch ( get_row_layout() ) {

    case 'homepage_header' :

      $image = get_sub_field( 'background_image' );
      $headline = get_sub_field( 'page_headline' );
      $bg_overlay = get_sub_field('bg_overlay');

      include locate_template('/template-parts/template-homepage_header.php');

      break;

    case 'header' :

      $image = get_sub_field('background_image');
      $tab_color = get_sub_field('tab_color');

      include locate_template('/template-parts/template-header.php');

      break;

    case 'page_top_full' :

      $headline = get_sub_field('headline');
      $text = get_sub_field('text');
      $bg_color = get_sub_field('background_color');

      include locate_template('/template-parts/template-page_top_full.php');

      break;

    case 'page_top_split' :

      $left = get_sub_field('left');
      $right = get_sub_field('right');
      $bg_color = get_sub_field('background_color');

      include locate_template('/template-parts/template-page_top_split.php');

      break;

    case 'testimonial' :

      $posts = get_sub_field('select_testimonial');

      include locate_template('/template-parts/template-testimonial.php');

      break;

    case 'specs_table' :

      include locate_template('/template-parts/template-specs_table.php');

      break;

    case 'google_map' :

      include locate_template('/template-parts/template-google_map.php');

      break;

    case 'centered_button' :

      $button = get_sub_field('button');

      include locate_template('/template-parts/template-centered_button.php');

      break;

    case 'video' :

      $video = get_sub_field('video');

      include locate_template('/template-parts/template-video.php');

      break;

    case 'instagram_integration' :

      $headline = get_sub_field('headline');
      $text = get_sub_field('text');

      include locate_template('/template-parts/template-instagram_integration.php');

      break;

    case 'availability' :

      include locate_template('/template-parts/template-availability.php');

      break;

    case 'image_full' :

      $image = get_sub_field('image');

      include locate_template('/template-parts/template-image_full.php');

      break;

    case 'images_split' :

      $image_left = get_sub_field('image_left');
      $image_right = get_sub_field('image_right');
      $column_split = get_sub_field('column_split');

      include locate_template('/template-parts/template-images_split.php');

      break;

    case 'image_and_cta' :

      $left = get_sub_field('left');
      $right = get_sub_field('right');
      $bg_color = get_sub_field('background_color');

      include locate_template('/template-parts/template-image_and_cta.php');

      break;

    case 'cta_and_image' :

      $left = get_sub_field('left');
      $right = get_sub_field('right');
      $bg_color = get_sub_field('background_color');

      include locate_template('/template-parts/template-cta_and_image.php');

      break;

    case 'cta_and_calendar' :

      $left = get_sub_field('left');
      $right = get_sub_field('right');
      $bg_color = get_sub_field('background_color');

      include locate_template('/template-parts/template-cta_and_calendar.php');

      break;

    case 'list_and_image' :

      $left = get_sub_field('left');
      $right = get_sub_field('right');

      include locate_template('/template-parts/template-list_and_image.php');

      break;

    case 'contact_form_and_contact_info' :

      $left = get_sub_field('left');
      $right = get_sub_field('right');

      include locate_template('/template-parts/template-contact_form_and_contact_info.php');

      break;
    case 'carousel' :

      $images = get_sub_field('carousel');

      include(locate_template('/template-parts/template-carousel.php'));

      break;
    }

  endwhile;
else :
?>

  <div class="container">
    <?php the_content(); ?>
  </div>

<?php

endif;

?>
