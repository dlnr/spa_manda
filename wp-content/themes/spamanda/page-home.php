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
	'post_type' => array('massage'),
  'category_name' => 'homepage',
  'posts_per_page' => 3
);
$query = new WP_Query( $args );

// print_r($query);


if ( $query->have_posts() ) {


	while ( $query->have_posts() ) {
    $query->the_post();
  ?>

  <div class="span4 spacolumn">
    <div class="spaheadline">
      <h3><?php the_title(); ?></h3>
    </div>

    <h6>- Massage -</h6>

    <div class="circleimage1a">
        <?php the_post_thumbnail('massage-thumb'); ?>
    </div>


    <div class="decoration">
    </div>

    <?php //the_content(''); ?>
    <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 125, '...');?>

    <section class="button1">
      <a href="/massages/#<?php echo $post->post_name; ?>">lees meer</a>
    </section>

  </div>

  <?php
	}
}
?>

  </div>


  <div class="row">
    <div class="span12 box">
      <div class=" buypresent1">
        <div class="bxwrap1a">
          <ul>
            <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/smallslider1.png" alt="">
            <div class="pricebg"><p> $5</p></div>
            </li>
          </ul>
        </div>
        <div class="buypresent1text">
        <h4>lorem ipsum dolor</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
        <a href="">read more </a>
        </div> <!--/buypresenttext end-->
      </div><!--/buypresent1 end-->

      <div class=" buypresent2">
        <div class="bxwrap1a1">
          <ul>
            <li>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/smallslider1a.png" alt="">
            </li>
          </ul>
        </div>
        <div class="buypresent2text">
          <h4>lorem ipsum dolor</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
          <div class="sendgiftnow">
            <a href="">send gift now</a>
          </div>
        </div> <!--/buypresenttext end-->
      </div><!--/buypresent2 end-->
    </div><!--/span12 end-->
</div>


</div>

<?php

get_footer();

?>
