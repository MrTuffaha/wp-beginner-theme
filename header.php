<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <base href="<?php echo get_stylesheet_directory_uri() . '/'; ?>"> -->
    <?php wp_head(); ?>
</head>

<body class="bg-background">
    <header class="text-on-secondary">
        <div class="bg-secondary">
            <nav class="container mx-auto flex felx-row justify-between">
                <div class="py-4">
                    <p>Website</p>
                </div>
                <?php wp_nav_menu(
                    [
                        'theme_location' => 'header-menu',
                        'container_class' => 'header-menu'
                    ]
                ); ?>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="fill-on-secondary"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->
                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7l126.6 126.7c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </button>
            </nav>
        </div>
        <div class="bg-primary">
            <div class="container mx-auto">
                <a class="text-center py-4 flex flex-row gap-4 justify-center items-baseline" href="<?php echo get_site_url(); ?>">
                    <span class="drop-shadow-[2px_2px_0_rgba(0,0,0,0.20)] text-2xl">Beginner's Guide for WordPress</span>
                    <span class="text-2xl">/</span>
                    <span>Start your WordPress Blog in minutes
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="inline-block fill-on-secondary"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.-->
                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7l126.6 126.7c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </header>