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
