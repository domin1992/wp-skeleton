<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  </head>
  <body <?php body_class(); ?>>
    <header>
      <h1>HEADER</h1>
      <nav>
        <?php wp_nav_menu( array('menu' => 'Primary' )); ?>
      </nav>
    </header>
