<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ) ; ?></title>

    <?php wp_head() ; ?>

    </head>
<body>

    <header class="header">
    <div class="inner header__inner">
        <div class="title">
                <h1 class="home-title"><a class="home-link" href="<?php bloginfo('url'); ?>"><?php bloginfo('title') ; ?></a></h1>
        </div>
        <nav class="drawer header__drawer">
        <div class="inner">
            <div class="drawer__toggler nav-toggler">
                <span class="nav-toggler__icon"></span>
                <span class="nav-toggler__icon"></span>
                <span class="nav-toggler__icon"></span>
            </div>
            <div class="drawer__content">
                <?php 
                    wp_nav_menu(
                        array(
                            'depth' => 1,
                            'theme_location' => 'drawer',
                            'container' => 'false',
                            'menu_class' => 'drawer__list',
                        )
                    );
                ; ?>
            </div>

        </div>
        </nav><!-- /.drawer-nav -->
    
    </div>
        <nav class="global-nav header__global-nav">
        <div class="inner">
            <?php 
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location' => 'global',
                        'container' => 'false',
                        'menu_class' => 'global-nav__list',
                    )
                );
            ; ?>
        </div>
        </nav><!-- /.global-nav -->
        
    </header>

    <main class="main">
