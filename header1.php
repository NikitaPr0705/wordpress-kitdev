<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    <?php wp_head() ?>
</head>
<body>
<header class="header"><?php wp_nav_menu(array( 'theme_location' => 'top')); ?>
   </header>
<div class="row-post">
    <div class="container-post">
