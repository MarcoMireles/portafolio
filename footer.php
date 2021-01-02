<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<?php
  if(!is_front_page() ) :
?>
<footer class="mt-8">
  <div class="container mx-auto px-4">
    <div class="block pt-8 pb-4">
      <p class="text-center">Hecho con Wordpress y mucho ❤</p>
      <p class="text-center">Todos los derechos e izquierdos reservados</p>
      <p class="text-center">2021©</p>
    </div>
  </div>
</footer>
<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>



