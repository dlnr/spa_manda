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
	'post_type' => 'massage'
);
$query = new WP_Query( $args );


if ( $query->have_posts() ) {


	while ( $query->have_posts() ) {
    $query->the_post();
  ?>

  <div class="span12  tabinside">
    <?php the_title( '<h4>', '</h4>' ); ?>
    <div class="row">
      <div class="span3">

        <ul class="ch-grid4">
          <li>
            <div class="ch-item4 specialimg1">
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
          $rates = get_post_meta($post->ID);
          if (isset($rates)) {
            $rate1 = $rates['30_min'][0];
            $rate2 = $rates['1_hour'][0];
            $rate3 = $rates['1.5_hour'][0];
            $rate4 = $rates['2_hour'][0];
            $rate5 = $rates['3_hour'][0];
          }

          if ($rate1 != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rate1; ?></a>
            </div>
            <div class=" servicehour">
              <p>30 Min</p>
            </div>
          </div>
          <?php
          }
          if ($rate2 != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rate2; ?></a>
            </div>
            <div class=" servicehour">
              <p>1hr</p>
            </div>
          </div>
          <?php
          }
          if ($rate3 != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rate3; ?></a>
            </div>
            <div class=" servicehour">
              <p>1,5hr</p>
            </div>
          </div>
          <?php
          }
          if ($rate4 != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rate4; ?></a>
            </div>
            <div class=" servicehour">
              <p>2hr</p>
            </div>
          </div>
          <?php
          }
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
