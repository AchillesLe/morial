<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo bloginfo('name','display') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_CSS.'/bootstrap.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL_CSS.'/bootstrap.min.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL_CSS.'/flexslider.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL_CSS.'/font-awesome.min.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL_CSS.'/jigoshop.css' ?>" />

    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <div class="nav-main">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <?php bloginfo('name','display') ?>
            </div>
            <!-- Menu -->
            <div class="menu"> 
                <?php morial_header_menu() ?>
            </div>
        </div>
        <div class="line"></div>
    </div>
