<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
    
</head>
<body>

<header id="header-section">
    <div class="top-header">
        FREE SHIPPING On Orders Over $50* <span>Restrictions Apply</span>
    </div>

    <div class="header-part sticky">
        <div class="container">

            <div id="header-image">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" style="margin-top: 15px;" />
                </a>
            </div>

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar',
                )
                ); 
            ?>          
        </div>
    </div>
</header>