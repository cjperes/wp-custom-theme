<?php
//Template name: Home

get_header(); //pega o header do wp 
?>



<?php if (have_posts()) {
  while (have_posts()) {
    the_post();
  } { ?>

    <h1><?php the_title(); //exibe o titulo
        ?></h1>
    <main><?php the_content(); //pucha todos os conteúdos
          ?></main>

    <?php do_action('dentro_da_home'); ?>

    <?php echo apply_filters('titulo_home', 'Essa é a home') ?>

<?php }
} ?>



<?php get_footer(); //pega o footer do wp 
?>