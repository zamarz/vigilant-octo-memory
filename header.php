<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    </head>
    <body>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url('/'); ?>"><strong>Zach</strong> Marzouk</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href="<?php echo site_url('/about-me'); ?>">About Me</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Tech Stack</a></li>
              <li><a href="#">My Articles</a></li>
              <li><a href="#">Contact Me</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  