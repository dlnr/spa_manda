<?php

get_header();

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

<?php
the_post_thumbnail();
?>

<div class="container">
  <?php the_content(); ?>
</div>

<?php

print_r(the_meta());

get_footer();

?>
