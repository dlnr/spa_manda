<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lotus</title>

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
  <a href=""><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="logo"></a>
  </section>


  <nav class="menudesktop span9">

  <ul id="menu">
  <li class="menu1">
  		<a class="mainmenu" href="index.html">Home</a>
  		<ul>
  <li><a href="index.html">Home Paralax</a></li>
  <li><a href="index2.html">Home Paralax 2</a></li>
  <li><a href="index3.html">Home Camera</a></li>

  		</ul>
  	</li>


  <li class="menu1">
  		<a class="mainmenu" href="about.html">About</a>
  		<ul>

  			<li><a href="about.html">About Us</a></li>
  			  <li><a href="about2.html">About Us 2</a></li>

  		</ul>


  	</li>
  	<li class="menu1">
  		<a class="mainmenu" href="#">Pages</a>
  		<ul>

  			<li><a href="services.html">Services</a></li>
  			  <li><a href="special.html">Special</a></li>

  		</ul>
  	</li>
  <li class="menu1">
  		<a class="mainmenu" href="gallery1.html">portfolio</a>
  		<ul>

  			<li><a href="gallery1.html">Gallery 1</a></li>
  			  <li><a href="gallery2.html">Gallery 2</a></li>

  		</ul>
  	</li>
              <li class="menu1">
                  <a class="mainmenu" href="blog.html">Blog</a>
  		<ul>
                   <li><a href="blog.html">Blog</a></li>
  			  <li><a href="blogdetails.html">Blog details</a></li>
  		</ul>
  	</li>

       <li class="menu1">
                  <a class="mainmenu mainmenulast" href="contact.html">contact</a>
  		<ul>
  		</ul>
  	</li>


  </ul>

  </nav>


  </div>  </div>
   </header>  <!--/menudesktop end-->




  <header class="menuwrappermobile">
  <div class="container">
  <div class="row">


  <section class="span12 logo">
  <a href=""><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="logo"></a>
  </section>
   </div>

  <div class="row">


  <nav class="menuwrappermobile">

  <div class="accordion span12" id="mycolapsible">

  <div class="accordion-group">
  <div class="accordion-heading">
  <a class="accordion-toggle" data-toggle="collapse" data-parent="#mycolapsible" href="#collapseOne">
  Homepages
  </a>
  </div>
  <div id="collapseOne" class="accordion-body collapse in">
  <div class="accordion-inner">
  <a href="index.html">Home Paralax</a>
  </div>
  <div class="accordion-inner">
  <a href="index2.html">Home Paralax 2</a>
  </div>
  <div class="accordion-inner">
  <a href="index3.html">Home Camera</a>
  </div>


  </div>
  </div>


  <div class="accordion-group">
  <div class="accordion-heading">
  <a class="accordion-toggle" data-toggle="collapse" data-parent="#mycolapsible" href="#collapseTwo">
  About
  </a>
  </div>
  <div id="collapseTwo" class="accordion-body collapse">
  <div class="accordion-inner">
  <a href="about.html">About us</a>
  </div>
  <div class="accordion-inner">
  <a href="about2.html">About us 2</a>
  </div>


  </div>
  </div>

  <div class="accordion-group">
  <div class="accordion-heading">
  <a class="accordion-toggle" data-toggle="collapse" data-parent="#mycolapsible" href="#collapseThree">
  Pages
  </a>
  </div>
  <div id="collapseThree" class="accordion-body collapse">
  <div class="accordion-inner">
  <a href="gallery1.html">Portfolio</a>
  </div>
  <div class="accordion-inner">
  <a href="gallery2.html">Portfolio 2</a>
  </div>
  <div class="accordion-inner">
  <a href="special.html">Special</a>
  </div>
  <div class="accordion-inner">
  <a href="services.html">Services</a>
  </div>


  </div>
  </div>


  <div class="accordion-group">
  <div class="accordion-heading">
  <a class="accordion-toggle" data-toggle="collapse" data-parent="#mycolapsible" href="#collapseFour">
  Blog pages
  </a>
  </div>
  <div id="collapseFour" class="accordion-body collapse">
  <div class="accordion-inner">
  <a href="blog.html">Blog</a>
  </div>
  <div class="accordion-inner">
  <a href="blogdetails.html">Blog Details</a>
  </div>

  </div>
  </div>


  <div class="accordion-group">
  <div class="accordion-heading">
  <a class="accordion-toggle" data-toggle="collapse" data-parent="#mycolapsible" href="#collapseFive">
  Contact
  </a>
  </div>
  <div id="collapseFive" class="accordion-body collapse">
  <div class="accordion-inner">
  <a href="contact.html">Contact</a>
  </div>


  </div>
  </div>


  </div></nav>


   </div>

   </div>
   </header>
  <!--/menumbile end-->



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
