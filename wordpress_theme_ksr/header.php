<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header style="background:#0b2a4a;color:#fff;padding:20px">
      <div style="max-width:1100px;margin:auto;display:flex;align-items:center;justify-content:space-between">
        <div style="font-weight:bold;">
          <?php bloginfo('name'); ?>
        </div>
        <?php if (has_nav_menu('primary')): ?>
          <nav>
            <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
                'menu_class'     => 'primary-menu',
              ));
            ?>
          </nav>
        <?php endif; ?>
      </div>
    </header>