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

<div class="container">
  <div class="row">
    <div class="span3">

      <ul class="ch-grid4">
        <li>
          <div class="ch-item4 specialimg2">
            <?php
              the_post_thumbnail( 'massage-thumb' );
            ?>
          </div>
        </li>
      </ul>

    </div>

    <div class="span6">
      <?php
        the_content();
      ?>
    </div>

    <div class="span3">
      <?php
        // the_meta();

        print_r(get_post_meta($post->ID));
      ?>
    </div>

  </div>
</div>

<?php

endwhile;

get_footer();

?>
