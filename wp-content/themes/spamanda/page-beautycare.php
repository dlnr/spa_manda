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


<div class="container">
  <div class="row">

<?php
$args = array(
	'post_type' => 'beautycare'
);
$query = new WP_Query( $args );


if ( $query->have_posts() ) {


	while ( $query->have_posts() ) {
    $query->the_post();
  ?>

  <div class="span12  tabinside">
    <a name="<?php echo $post->post_name; ?>"></a>
    <?php the_title( '<h4>', '</h4>' ); ?>
    <div class="row">
      <!-- <div class="span3">

        <ul class="ch-grid4">
          <li>
            <div class="ch-item4 specialimg1">
              <?php
                // the_post_thumbnail( 'massage-thumb' );
              ?>
            </div>
          </li>
        </ul>

      </div> -->

      <div class="span12">
        <?php
          the_content();
        ?>
      </div>



    </div>
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
