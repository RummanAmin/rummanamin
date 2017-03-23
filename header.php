<?php global $detect; ?>

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

		<div class="band top-bar">
			<section class="layout">
				<?php if (!$detect->isMobile() || $detect->isTablet() ): ?>
					<a href="http://eepurl.com/cst6qz" target="_blank" class="subscribe-link">Subscribe to Newsletter</a>
				<?php endif; ?>
				<?php get_search_form(); ?>
			</section>
		</div>

    <div class="band top">
      <header class="layout">
				<?php if ($detect->isMobile() && !$detect->isTablet() ): ?>
	        <a href="<?php echo esc_url( home_url() ) ?>" class="logo"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo.svg" alt="Rumman Amin"></a>

				<?php else: ?>

					<a href="<?php echo esc_url( home_url() ) ?>" class="logo"><h1>Rumman Amin</h1></a>

				<?php endif; ?>

				<a href="#" class="open-panel open-icon"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/menu.svg"></a>
        <nav class="main-navigation">
          <a href="#" class="close-panel close-icon"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/close.svg"></a>
					<?php if (!$detect->isMobile() || $detect->isTablet() ): ?>
            <?php
              $defaults = array(
                'container' => '',
                'theme_location' => 'main-menu'
              );
              wp_nav_menu ( $defaults );
            ?>
					<?php endif; ?>

					<?php if ($detect->isMobile() && !$detect->isTablet() ): ?>
						<div class="mobile-navigation">
		          <nav>
		            <?php
		            $defaults = array(
		              'container' => '',
		              'theme_location' => 'mobile-menu'
		            );
		            wp_nav_menu ( $defaults );
		            ?>
		          </nav>
		          <div class="mobile-nav-ad">
		            <?php get_template_part('content', 'ad'); ?>
		          </div>
		        </div>
					<?php endif; ?>
        </nav>
      </header>
    </div>
