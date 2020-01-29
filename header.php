<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Travel Asia</title>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

<div id="page">

    <header id="masthead" class="site-header sticky-top" role="banner">

        <div class="top-bar foundation-5-top-bar">
        
            <div class="top-bar-title">
                <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                    <button class="menu-icon" type="button" data-toggle></button>
                </span>
                <a href="<?php echo esc_url (home_url( '/' ) ); ?>" rel="home">
                    <?php the_custom_logo() ?>
                </a>
            </div>

            <div id="responsive-menu">
                <div class="top-bar-left">
                    <ul class="dropdown vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown" data-auto-height="true" data-animate-height="true">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <?php 
                            $args = [
                            'theme_location' => 'main-menu',
                            'depth'          =>  0,            
                            ]; 
                            wp_nav_menu( $args );
                            ?>
                        </nav>
                    </ul>
                </div>
            </div>

        </div>

    </header>