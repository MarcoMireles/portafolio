<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">



  <section class="bg-white shadow-md">
    <div class="container mx-auto">
      <nav class="flex items-center justify-between flex-wrap bg-white py-6">
        <div class="flex lg:w-auto w-full items-center flex-shrink-0 text-white ">
          <img class="logo" src="<?php echo get_stylesheet_directory_uri() ?>/img/Marco-Mireles.svg" alt="Marco Mireles">
        </div>
        <div class="w-full lg:w-auto flex bg-white justify-end">
          <div class="text-sm text-right w-full">
	          <?php wp_nav_menu(array('theme_location'  => 'primary')); ?>
          </div>
        </div>
      </nav>
    </div>
  </section>