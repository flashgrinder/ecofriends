<?php get_header(); ?>
    <!-- Content -->
    <main class="blogMain">
        <!-- Carts Blog Block-->
        <section class="blogContentBlock">
          <?php the_post(); ?>
            <div class="wrapper">
                <div class="blogContent">
                    <h1 class="blogContent__heading">
                      <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                </div>
            </div>
          <!--Gallery Block-->
            <div class="main-gallery">
                <div class="wrapper-fluid">
                  <?php if( get_field('toggle_gallery') == 'enable_sidebar' ) {
                      echo '<div class="gallery-block" style="display:block">';
                    } else {
                      echo '<div class="gallery-block" style="display:none">';
                    } ?>
                    <div class="gallery-block">
                        <h4 class="gallery-block__title">
                        Фотогалерея
                        </h4>
                        <div class="gallery-block__container">
                            <?php 
                              $image = get_field('single_gallery-1');
                              if( !empty( $image ) ): ?>
                                <a class="gallery-block__img gallery-block__item" href="<?php echo esc_url($image['url']); ?>" data-type="image" data-fancybox="blog">
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
    </main> 
    <?php get_footer(); ?>