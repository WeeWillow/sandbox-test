<?php

get_header();

$cars = new WP_Query(array(
  'post_type' => 'car',
));

while ($cars->have_posts()) {
  $cars->the_post(); ?>

  <h2>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>


<?php }
get_footer();
?>