
<?php
    /**
    * Template Name: Header
    */
?>

<!doctype html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
      <?php wp_head(); ?>
    </head>

    <body>
      <div class="off-canvas position-left" id="offCanvas" data-off-canvas>
          <?php
            $args = array(
              'theme_location' => 'header',
              'container' => 'nav',
              'container_class' => 'hide-md',
              'menu_class' => ''
            );
            wp_nav_menu( $args );
          ?>
      </div>

      <div class="off-canvas-content" data-off-canvas-content>
        <section id="header">
          <div class="container">
            <div class="row row-md-2 bottom-md">
              <div class="col-md-2 center-xs">
                <figure>
                  <a href="<?= home_url(); ?>">
                    <img width="100" src="<?php the_field( 'header_logo', 'option' ); ?>" alt="Logo Creo Antofagasta">
                  </a>
                </figure>
              </div>

              <div class="col-md-10 around-xs">
                <?php
                  $args = array(
                    'theme_location' => 'header',
                    'container' => 'nav',
                    'container_class' => 'header-nav hide-xs show-md',
                    'menu_class' => 'header-nav-items row dropdown menu'
                  );
                  wp_nav_menu( $args );
                ?>
                <button type="button" class="button hide-md" data-toggle="offCanvas">Open Right</button>

              </div>
            </div>
          </div>
        </section>