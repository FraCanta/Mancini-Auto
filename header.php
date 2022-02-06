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

<header class="header">
  <div class="banner">
 <div class="banner_items">
   <div class="banner_items_left">
     <address><i class="far fa-envelope"></i>  mancini.auto@mail.it</address>
     <address><i class="fas fa-phone-alt"></i>  +39 333 4597238</address>
   </div>
   <div class="banner_items_right">
     <i class="fab fa-instagram"></i>
     <i class="fab fa-facebook"></i>
   </div>
 </div>
  </div>

  <div class="logo-banner">
   <img src="/wp-content/themes/Mancini-Auto/assets/img/logo.png" alt="">
   <div class="logo-banner-text">

   </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark bg-dark ">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-md-flex justify-content-md-center p-2" id="navbarSupportedContent">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => false,
        'items_wrap' => '<ul>%3$s</ul>'
      ));
      ?>

    </div>
  </div>
</nav>

</header>
