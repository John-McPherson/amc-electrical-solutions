<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header class="site-header">
        <nav aria-label="Main Navigation">
            <div class="site-header__logo">
                <h1>
                    <a href="<?php echo esc_url(site_url()); ?>"
                        title="<?php echo esc_attr(get_bloginfo('name')); ?>"
                        aria-label="Homepage of <?php echo esc_attr(get_bloginfo('name')); ?>">
                        <?php echo esc_html(get_bloginfo('name')); ?>
                        <span> <?php echo esc_html(get_bloginfo('description')); ?></span>
                    </a>
                </h1>
            </div>
            <button class="menu-toggle" id="menu-toggle"
                aria-label="Open main menu"
                aria-expanded="false"
                aria-controls="main-menu">

            </button>
            <ul class="menu " id="main-menu" role="menu" aria-labelledby="menu-toggle">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>