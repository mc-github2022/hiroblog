<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiro's Blog</title>
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-BlackItalic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-Bold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-BoldItalic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-ExtraBold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-ExtraBoldItalic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-ExtraLight.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-ExtraLightItalic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-Light.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-LightItalic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-Light.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-Medium.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-MediumItalic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-SemiBold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-SemiBoldItalic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-SemiBoldItalic.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-Italic-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri()?>/font/CrimsonPro-VariableFont_wght.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>

    <?php if(is_front_page()) : ?>
        <div class="banner h-[90vh] overflow-y-hidden">
    <?php else : ?>
        <div class="banner h-[60vh] relative overflow-y-hidden">
    <?php endif; ?>
        <header class="header py-8">
            <div class="customContainer">
                <div class="wrapper flex items-center justify-between relative z-10">
                    <a href="<?php echo home_url(); ?>">
                        <img class="w-[222px] h-[33px]" src="<?php echo get_template_directory_uri()?>/img/theLogo.webp" alt="">
                    </a>
                    <nav>
                        <ul>
                            <li>Joy</li>
                            <li>Faith</li>
                            <li>World</li>
                            <li>Music</li>
                            <li>Bible</li>
                            <li>翻訳指導</li>
                        </ul>
                    </nav>

                    <button class="toggleNav block lg:hidden relative w-[20px] h-[20px] ml-auto z-10">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </header>