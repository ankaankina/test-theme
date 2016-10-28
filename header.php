<html>
  <head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img class="theme-logo" src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt="theme logo" />
        </a>
        <h1>Just another theme...</h1>
      </header>
      <nav class="clearfix">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav>
