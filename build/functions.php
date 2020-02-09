<?php

    define('IMG_DIR', get_template_directory_uri() . '/assets/img');

    add_action('wp_enqueue_scripts', function() {

        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.min.css', [], '1.0.0' );
        wp_enqueue_style('fancybox', get_template_directory_uri() .'/assets/css/jquery.fancybox.css', ['styles']);

        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
        wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', ['jquery'], '1.0.0' );
        wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', [], '1.0.0' );
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', ['jquery', 'swiper'], '1.0.0' );
        
    });

    add_action( 'after_setup_theme', function(){
        // Регистрируем главное меню
        register_nav_menu('main-menu', 'Главное меню');
        // Регистрируем меню в подвале
        // Регистрируем главное меню
        register_nav_menu('footer-menu', 'Меню в подвале');
        // Смена логотипа
        add_theme_support( 'custom-logo' );
        // Добавляем возможность ставить постам миниатюры
        add_theme_support('post-thumbnails');
        // Тайтлы старницы ставятся автоматом
        add_theme_support('title-tag');

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    });

    // Фильтры
	add_filter( 'excerpt_length', function($number) {
		return 25;
	});
	add_filter( 'excerpt_more', function($more_string){
		return '...';
	});
	
	add_filter('wpcf7_form_elements', function($content) {
		$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
	
		return $content;
	});

	add_filter('navigation_markup_template', function(){
		return '
		<nav class="navigation %1$s" role="navigation">
			<div class="nav-links">%3$s</div>
		</nav>    
		';
    }, 10, 2 );
    
    add_filter('nav_menu_submenu_css_class', function($classes, $args, $depth){
        
        foreach ( $classes as $key => $class ) {
            if ( $class == 'sub-menu' ) {
                $classes[ $key ] = 'menu-footer__submenu';
            }
        }

        return $classes;

    }, 10, 3 );

    add_filter('wpcf7_autop_or_not', '__return_false');

	add_filter('show_admin_bar', '__return_false');