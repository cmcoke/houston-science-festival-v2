<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package houston_science_festival
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri() . '/images/favicon/apple-touch-icon.png' ?>">

  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_template_directory_uri() . '/images/favicon/favicon-32x32.png' ?>">

  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri() . '/images/favicon/favicon-16x16.png' ?>">

  <link rel="manifest" href="<?php echo get_template_directory_uri() . '/images/favicon/site.webmanifest' ?>">

  <link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/images/favicon/safari-pinned-tab.svg' ?>"
    color="#5bbad5">

  <meta name="msapplication-TileColor" content="#2b5797">

  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <div id="page">
    <a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'houston_science_festival'); ?></a>

    <?php get_template_part('template-parts/layout/header', 'content'); ?>

    <div id="content">