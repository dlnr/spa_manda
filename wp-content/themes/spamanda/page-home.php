<?php

get_header();

?>

<!-- <div class="underslider1a">
  <div class="container">
    <div class="row">
      <h1>Homepage</h1>
    </div>
  </div>
</div> -->


<div class="container">
  <div class="row">

<?php
$args = array(
	'post_type' => 'massage',
  'post_count' => 3
);
$query = new WP_Query( $args );


if ( $query->have_posts() ) {


	while ( $query->have_posts() ) {
    $query->the_post();
  ?>

  <div class="span4 spacolumn">
    <div class="spaheadline">
      <h3><?php the_title(); ?></h3>
    </div>

    <div class="circleimage1a">
      <div class="circlebg">
      </div>
    </div>


    <div class="decoration">
    </div>

    <?php the_content(''); ?>

    <section class="button1">
      <a href="<?php the_permalink(); ?>">lees meer</a>
    </section>

  </div>

  <?php
	}
}
?>

  </div>
</div>

<?php

get_footer();

?>
