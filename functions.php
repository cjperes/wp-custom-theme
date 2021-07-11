<?php

add_action('dentro_da_home', function () {
  echo 'caralhoww';
});


function mudar_titulo($titulo)
{
  echo '<h2>' . $titulo . '</h2>';
}

add_filter('titulo_home', 'mudar_titulo');

function mudar_the_titulo (){
return  'PORRAA'
};

add_filter('the_title', 'mudar_the_titulo');
