<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<section class="lg:my-16 my-8">
  <div class="container mx-auto lg:py-10 py-5 bg-white">
    <div class="grid grid-cols-1 px-6  py-4">
      <div class="block">
        <div class="block mb-4">
          <img class="w-full" src="" alt="Lorem ipsum">
        </div>
        <div class="block mb-4">
          <h1 class="text-primary text-3xl lg:text-5xl font-bold">Lorem ipsum</h1>
        </div>
        <div class="block mb-4 text-lg contenedor-post">
	          dolor sit amet, consectetur adipisicing elit. Doloremque eos eveniet excepturi exercitationem illum inventore maiores nostrum omnis, optio porro praesentium quam, quis quo quod sequi sint soluta velit vitae.
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
