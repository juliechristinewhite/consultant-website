<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600|Lato:300,400" rel="stylesheet">
  <script src="https://use.fontawesome.com/858e950473.js"></script>
  <link rel="stylesheet" href="styles/style.css">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">

        <div class="topBar">

            <div class="contentWrapper contentWrapper--header">

                <nav class="topBar__nav">

                    <a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

                </nav>

                <div class="topBar__contact">

                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> INFO@CONSULTANCY.COM</p>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i> :8895-444-6858</p>
                
                </div>   

            </div> 

        </div>     
          
        <div class="navBar">

            <div class="contentWrapper contentWrapper--header">
                  <div class="navBar__logo">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="company logo">
                  </div>
                   <?php wp_nav_menu( array(
                  'container' => false,
                  'theme_location' => 'primary'
                  )); ?>

            </div>

        </div>      

    </div>

    <div class="heroImg"></div>

   
   
  </div> <!-- /.container -->
</header><!--/.header-->
