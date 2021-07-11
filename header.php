<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') ?> | <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php
  $img_url = get_stylesheet_directory_uri() . '/img/'
  ?>

  <header class="header">

    <a href="#" target="_blank" rel="noopener noreferrer"> <img src="<?= $img_url ?>/handel.svg" alt=""> </a>
    <div class="busca">
      <?php get_product_search_form(); ?>
    </div>

  </header>