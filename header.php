<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <main id="wrapper">

    <div class="band top">
      <header class="layout">
        <a href="<?php echo esc_url( home_url() ) ?>" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo.svg" alt="Rumman Amin"><h1>Rumman Amin</h1></a>

        <nav class="main-nav">
          <?php
            $defaults = array(
              'container' => '',
              'theme_location' => 'main-menu'
            );
            wp_nav_menu ( $defaults );
            ?>
        </nav>
      </header>
    </div>
