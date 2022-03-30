<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="" width="45" height="36" class="d-inline-block align-text-top">
                    <?php bloginfo("name") ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <?php wp_nav_menu(array(
                        "theme_location" => "main-menu",
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    )) ?>
                    <!--<ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Rooms
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="room-small.html">Small</a></li>
                                <li><a class="dropdown-item" href="room-standard.html">Standard</a></li>
                                <li><a class="dropdown-item" href="room-suite.html">Suite</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events.html">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html">Contact us</a>
                        </li>
                    </ul>-->
                </div>
                <?php get_search_form() ?>
            </div>
        </nav>
    </header>