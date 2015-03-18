<?php

get_header();

while ( have_posts() ) : the_post();

?>

<div class="underslider2a">
  <div class="container">
    <div class="row">
      <div class="span12">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      </div>
    </div>
  </div>
</div>

<main>
  <div class="container">

    <?php the_content(); ?>

  </div>
</main>

<?php

print_r(the_meta());

endwhile;

get_footer();

?>
