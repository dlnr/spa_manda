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
	'post_type' => 'massage'
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

      <div class="pricing">

        <?php
          $rates = get_post_meta($post->ID);

          if ($rates['30_min'][0] != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rates['30_min'][0]; ?></a>
            </div>
            <div class=" servicehour">
              <p>30 Min</p>
            </div>
          </div>
          <?php
          }
          if ($rates['1_hour'][0] != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rates['1_hour'][0]; ?></a>
            </div>
            <div class=" servicehour">
              <p>1hr</p>
            </div>
          </div>
          <?php
          }
          if ($rates['1.5_hour'][0] != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rates['1.5_hour'][0]; ?></a>
            </div>
            <div class=" servicehour">
              <p>1,5hr</p>
            </div>
          </div>
          <?php
          }
          if ($rates['2_hour'][0] != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rates['2_hour'][0]; ?></a>
            </div>
            <div class=" servicehour">
              <p>2hr</p>
            </div>
          </div>
          <?php
          }
          if ($rates['3_hour'][0] != '') {
          ?>
          <div class="span3  services">
            <div class="serviceprice">
              <a href="">€ <?php echo $rates['3_hour'][0]; ?></a>
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
