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

<?php }
} ?>



<?php get_footer(); //pega o footer do wp 
?>