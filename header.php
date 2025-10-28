<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'fallback_cb'    => false, // Do not fall back to wp_page_menu()
                ) );

                // Fallback for when no menu is assigned
                if ( ! has_nav_menu( 'primary' ) ) {
                    echo '<ul id="primary-menu" class="menu">';
                    echo '<li><a href="#home">Home</a></li>';
                    echo '<li><a href="#about">About</a></li>';
                    echo '<li><a href="#portfolio">Portfolio</a></li>';
                    echo '<li><a href="#contact">Contact</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>
        </div>
    </header>
    <section id="hero" class="hero-section">
        <div class="container">
            <h2>Welcome to My Portfolio</h2>
            <p>I'm a passionate developer creating awesome web experiences.</p>
            <a href="#portfolio" class="button">View My Work</a>
        </div>
    </section>
