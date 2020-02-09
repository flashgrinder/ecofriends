<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="og:image" content="<?php echo IMG_DIR; ?>/social.png">
    <meta name="robots" content="index, follow"/>
    <meta name="theme-color" content="#000"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#000"/>
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class() ?>>
    <!-- Header -->
    <header class="header">
      <div class="wrapper">
        <div class="header-container">
          <div class="logo">
            <a href="<?php echo home_url(); ?>" class="logo__img">
              <img src="<?php echo IMG_DIR; ?>/logo-ecofriends.png" alt="">
            </a>
            <div class="logo__text">
              НКО «Фонд регионального экономического развития «Инвестиции и регионы»»
            </div>
          </div>
          <div class="burger">
            <span class="burger__line"></span>
          </div>
          <div class="navigation-block">
              <nav class="menu-top">
                <ul>
                  <li>
                    <a href="javascript:;">Проекты</a>
                    <ul class="menu-top__submenu">
                      <li>
                        <a href="#">ECOProF</a>
                      </li>
                      <li>
                        <a href="#">Чистые Игры</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="page-methods.html">Достижения</a>
                  </li>
                  <li>
                    <a href="#">Новости</a>
                  </li>
                  <li>
                    <a href="page-teachers.html">Команда</a>
                  </li>
                  <li>
                    <a href="page-contacts.html">Контакты</a>
                  </li>
              </ul>
            </nav>
            <?php
              wp_nav_menu([
                'theme_location'  => 'main-menu',
                'container'       => 'nav',
                'container_class' => 'menu-top',
                'menu_class'      => '',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
              ]);
            ?>
            <a href="#" class="button-primary button-primary_size_s hide">Вход/Регистрация</a>
          </div>
        </div>
      </div>
    </header>
    <!-- Modal Window -->
    <div class="modalContainer" id="modal" style="display: none;">
      <div class="modalContainer__wrapp">
          <h4 class="modalContainer__heading">Оставьте заявку</h4>
          <?php echo do_shortcode('[contact-form-7 id="131" title="Заявка с сайта"]'); ?>
      </div>
    </div>