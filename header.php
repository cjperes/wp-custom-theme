<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> <?php the_title(); //pega o titulo da página
                                    ?></title>
  <?php wp_head(); //pega classes
  ?>
</head>

<body>
  <?php body_class(); ?>