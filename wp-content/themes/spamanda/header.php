<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width,  initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Rouge+Script|Open+Sans|Oswald:400,300' rel='stylesheet' type='text/css'>


<!-- <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
<link rel="stylesheet" media="screen" href="css/camera.css" /> -->

    <?php wp_head(); ?>


  </head>

<body>


<div class="sliderbg">


  <div class="phone">
    <p>Contact Phone: +99 861 440 210</p>
  </div>


  <header class="menuwrapperdesktop">
    <div class="container">
      <div class="row">

        <section class="logo span3">
        <a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="logo"></a>
        </section>

        <nav class="menu span9">
          <?php
            $args = array(
            'container' => '',
            'container_class' => '',
            'menu' => 'Main Navigation',
            'menu_class' => 'menu'
            );
            wp_nav_menu($args);
          ?>
        </nav>
      </div>
    </div>
  </header>



        <div class="camera_wrap" id="camera_wrap">

             <div data-thumb="<?php echo get_template_directory_uri() ?>/images/p5.png"  data-src="<?php echo get_template_directory_uri() ?>/images/1.png" data-time="1500" data-trasPeriod="3000" data-target="_blank">
                  <div class="fadeIn cameracaption1">
                  <h2>spa and wellness</h2>
                   <h3>premium website template</h3>
  <p>
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit<span> sed diam nonummy </span>nibh euismod tincidunt ut laoreet dolore magna aliquam.
  </p>

  <section class="buttoncameraslider">
  <a href="">read more</a>
  </section>


            </div>
              </div>

  <div data-thumb="<?php echo get_template_directory_uri() ?>/images/p3.png" data-src="<?php echo get_template_directory_uri() ?>/images/1.png" data-time="1500" data-trasPeriod="3000" data-target="_blank">
                  <div class="fadeIn cameracaption1">

                  <h2>spa and wellness</h2>
                   <h3>premium website template</h3>
  <p>
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit<span> sed diam nonummy </span>nibh euismod tincidunt ut laoreet dolore magna aliquam.
  </p>

  <section class="buttoncameraslider">
  <a href="">read more</a>
  </section>

                  </div>
              </div>



             <div data-thumb="<?php echo get_template_directory_uri() ?>/images/p3.png"  data-src="<?php echo get_template_directory_uri() ?>/images/1.png" data-time="1500" data-trasPeriod="3000" data-target="_blank">
                  <div class="fadeIn cameracaption1">

                  <h2>spa and wellness</h2>
                   <h3>premium website template</h3>
  <p>
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit<span> sed diam nonummy </span>nibh euismod tincidunt ut laoreet dolore magna aliquam.
  </p>

  <section class="buttoncameraslider">
  <a href="">read more</a>
  </section>



                 </div>
              </div>


          </div><!-- #camera_wrap -->

  </div>
