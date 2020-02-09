    <?php wp_footer(); ?>
    <footer class="footer">
      <div class="wrapper">
        <div class="footer-block">
          <div class="footer-nav">
            <div class="footer-logo">
              <div class="footer-logo__img">
                <img src="<?php echo IMG_DIR; ?>/logo-ecofriends.png" alt="">
              </div>
              <div class="footer-logo__text">
                НКО «Фонд регионального экономического развития «Инвестиции и регионы»»
              </div>
            </div>
            <div class="footer-phone">
              <a href="tel:+7-927-629-63-50" class="footer-phone__num">
                +7-927-629-63-50
              </a>
            </div>
            <div class="footer-menu">
              <nav class="menu-footer">
                <ul>
                  <li>
                    <a href="#">Проекты</a>
                    <ul class="menu-footer__submenu">
                      <li>
                        <a href="page-center_one.html">ECOProF</a>
                      </li>
                      <li>
                        <a href="page-center_two.html">Чистые Игры</a>
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
                    'theme_location'  => 'footer-menu',
                    'container'       => 'nav',
                    'container_class' => 'menu-footer',
                    'menu_class'      => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
                    ]);
                ?>
            </div>
          </div>
          <div class="footer-social">
            <div class="footer-social__btn">
              <a class="button-primary button-primary_size-m" href="javascript:;" data-fancybox="btn-footer" data-src="#modal" data-animation-duration="700">
                Присоедениться к проекту
              </a>
            </div>
            <div class="footer-social__group">
              <div class="footer-social__heading">
                Мы в соц.сетях:
              </div>
              <div class="footer-social__icons">
                <a href="https://vk.com/ecofriends_project" class="footer-social__icons-img">
                  <img src="<?php echo IMG_DIR; ?>/icons/vk-icons.png" alt="">
                </a>
                <a href="https://www.facebook.com/ecofriendsproject" class="footer-social__icons-img">
                  <img src="<?php echo IMG_DIR; ?>/icons/fb-icons.png" alt="">
                </a>
                <a href="https://www.instagram.com/ecofriends_project/" class="footer-social__icons-img">
                  <img src="<?php echo IMG_DIR; ?>/icons/inst-icons.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>