<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

<!-- bring style files from function.php -->


<!-- wp_head()  is used to output important information and resources that need to be included in the HTML <head> section of your webpage. -->
    <?php wp_head()?> 
    

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php
                    
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_class'      => 'collapse navbar-collapse',
                            'container_id'         => 'navbarResponsive',
                              // Change this to match your HTML structure
                            'menu_class' => 'navbar-nav ml-auto',  // Adjust the class names as needed

                        ));
                    
                    ?>
        </div>
      </nav>
    </header>