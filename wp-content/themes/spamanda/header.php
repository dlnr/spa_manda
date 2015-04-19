<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width,  initial-scale=1, maximum-scale=1">

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Rouge+Script|Open+Sans|Oswald:400,300' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>


  </head>

<body>


<div class="sliderbg">


  <div class="phone">
    <p>Bel: <a href="tel:0235768670">023 576 8670</a></p>
  </div>


  <header class="menuwrapper">
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
            'menu_class' => 'main-navigation'
            );
            wp_nav_menu($args);
          ?>
        </nav>

        <button id="toggle-menu"></button>

      </div>
    </div>
  </header>

</div>
