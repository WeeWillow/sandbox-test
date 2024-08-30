<?php

get_header();

while (have_posts()) {
  the_post(); ?>
  <section>
    <h1><?php the_title(); ?></h1>
    <div>
      <?php the_post_thumbnail(); ?>
    </div>
    <?php the_content(); ?>
  </section>
<?php }
get_footer();
?>