<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section>
  <div class="container mx-auto lg:py-10 py-5">

    <div class="flex flex-col mb-12">
      <div class="sobre-mi px-5 lg:mt-0 mx-auto lg:w-3/4">
        <h2 class="text-2xl text-mm font-black lg:text-3xl mt-3">Blog</h2>
      </div>
    </div>

    <div class=" grid grid-cols-1 gap-4">
      <div class="flex flex-col lg:flex-row w-full bg-white max-w-screen-lg mx-auto">
        <a href="#" class="w-full lg:w-1/3 h-full bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/vegas.jpg')"> </a>
        <div class="block py-8 px-6">
          <div class="tags flex mb-4">
            <a href="#" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">#JQuery</a>
            <a href="#" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">#VegasJS</a>
            <a href="#" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700">#SlideShow</a>
          </div>
          <h2 class="text-2xl text-primary font-black lg:text-2xl mb-2">¿Cómo utilizar vegas slideshow?</h2>
          <p class="text-mm font-normal text-base lg:text-lg mb-4">Dale un toque atractivo a ese backgound con este chulo slideshow.</p>
          <a href="#" class="text-mm font-normal text-base lg:text-lg ">Ver más</a>
        </div>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>

