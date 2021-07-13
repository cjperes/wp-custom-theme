<?php
// Template name: Home
get_header(); ?>


<?php
//array de produtos por tag
$products_slide = wc_get_products([
  'limit' => 6,
  'tag' => ['slide'],
]);



//formata a saida dos produtos limpando informações desnecessárias
function format_products($products)
{
  $products_final = [];
  foreach ($products as $product) {
    $products_final[] = [
      'name' => $product->get_name(),
      'preco' => $product->get_price_html(),
      'link' => $product->get_permalink(),
      //retorna o array da img: url, width e height
      'img' => wp_get_attachment_image_src($product->get_image_id(), 'slide')[0],
    ];
  }
  return $products_final;
}
$slide = format_products($products_slide);

?>

<?php if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>


    <section class="slide-wrapper">
      <ul class="slide">
        <li class="slide-item">
          <img src="<?= $product['img']; ?>" alt="<? $product['name']; ?>">

          <div class="slide-info">


          </div>
        </li>
        <?php foreach ($slide as $product) { ?>
          <li><?= $product['name']; ?></li>
        <?   } ?>
      </ul>



    </section>


<?php }
} ?>

<?php get_footer(); ?>