<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Concessionaria Mancini Automobili">
    <meta name="author" content="Mancini Auto">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

<header class="header" id="navbar">

  <div class="logo">
   <img src="/wp-content/themes/Mancini-Auto/assets/img/logo.png" alt="">

  </div>
  <nav class="navbar" >
    <?php
    wp_nav_menu(array(
      'theme_location' => 'header',
      'container' => false,
      'items_wrap' => '<ul>%3$s</ul>'
    ));
    ?>

  </nav>



  <div class="toggle_menu">
             <div class="bar1"></div>
             <div class="bar2"></div>
             <div class="bar3"></div>
         </div>
</header>
