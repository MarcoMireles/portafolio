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


<section>
  <div class="container mx-auto lg:py-10 py-5">
    <div class="grid grid-cols-1 lg:grid-cols-2 px-6  py-4">
      <div >
        <h2 class="text-2xl text-mm font-black lg:text-3xl mb-2">¿Cómo utilizar vegas slideshow?</h2>
        <div class="text-mm font-normal text-base lg:text-2xl lg:pr-4">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores at autem consequatur dicta dolore esse, exercitationem laboriosam libero molestiae numquam obcaecati odio odit praesentium repellendus sequi similique, sunt.</p>
        </div>
      </div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/xq3MuF-M1A0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="contenido my-4 lg:my-8 text-mm leading-8 w-full lg:w-2/3 mx-auto text-lg ">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores at autem consequatur dicta dolore esse, exercitationem laboriosam libero molestiae numquam obcaecati odio odit praesentium repellendus sequi similique, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolore earum eligendi eum in magni maiores, molestiae, molestias necessitatibus, nemo neque officiis provident quaerat quasi ratione recusandae repellat voluptatem voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aperiam architecto commodi dolores esse maiores maxime molestiae nihil numquam quae quod repellat, rerum soluta, voluptate? Amet expedita nam quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid beatae cum dolores eius eligendi enim eveniet exercitationem, expedita hic ipsa obcaecati omnis provident quia repudiandae, sint soluta voluptates! Quasi.</p>
      <h2>Here is a title</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores at autem consequatur dicta dolore esse, exercitationem laboriosam libero molestiae numquam obcaecati odio odit praesentium repellendus sequi similique, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolore earum eligendi eum in magni maiores, molestiae, molestias necessitatibus, nemo neque officiis provident quaerat quasi ratione recusandae repellat voluptatem voluptates. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores at autem consequatur dicta dolore esse, exercitationem laboriosam libero molestiae numquam obcaecati odio odit praesentium repellendus sequi similique, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolore earum eligendi eum in magni maiores, molestiae, molestias necessitatibus, nemo neque officiis provident quaerat quasi ratione recusandae repellat voluptatem voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aperiam architecto commodi dolores esse maiores maxime molestiae nihil numquam quae quod repellat, rerum soluta, voluptate? Amet expedita nam quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid beatae cum dolores eius eligendi enim eveniet exercitationem, expedita hic ipsa obcaecati omnis provident quia repudiandae, sint soluta voluptates! Quasi.</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
