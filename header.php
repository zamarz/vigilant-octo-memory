<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url('/'); ?>"><strong>Zach</strong> Marzouk</a>
        </h1>
    
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href="<?php echo site_url('/about-me'); ?>">About Me</a></li>
              <li><a href="<?php echo site_url('/projects'); ?>">Projects</a></li>
              <li><a href="<?php echo site_url('/tech-stack'); ?>">Tech Stack</a></li>
              <li><a href="<?php echo site_url('/contact-me'); ?>">Contact Me</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  