
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
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,800|Signika:400,600,700" rel="stylesheet">
      <script async>
        let AJAXURL = '<?= home_url(); ?>/wp-admin/admin-ajax.php';
      </script>
      <?php wp_head(); ?>
    </head>

    <body>
      <div class="off-canvas position-left" id="offCanvas" data-off-canvas>
          <?php
            $args = array(
              'theme_location' => 'header',
              'container' => 'nav',
              'container_class' => 'hide-md',
              'menu_class' => 'off-canvas-menu-nav'
            );
            wp_nav_menu( $args );
          ?>
      </div>

      <div class="off-canvas-content" data-off-canvas-content>
        <section id="header">
          <div class="container">
            <div class="row row-xs-2 row-md-2 middle-xs bottom-md header-row">
              <div class="col-xs-6 col-md-2 center-md header-col">
                <figure class="header-figure">
                  <a href="<?= home_url(); ?>">
                    <img width="100" src="<?php the_field( 'header_logo', 'option' ); ?>" alt="Logo Creo Antofagasta" class="header-logo-image">
                  </a>
                </figure>
              </div>

              <div class="col-xs-6 col-md-10 end-xs start-md">
                <?php
                  $args = array(
                    'theme_location' => 'header',
                    'container' => 'nav',
                    'container_class' => 'header-nav hide-xs show-md',
                    'menu_class' => 'header-nav-items row dropdown menu'
                  );
                  wp_nav_menu( $args );
                ?>
                <a href="#" class="open--menu hide-md" data-toggle="offCanvas"><i class="fas fa-bars"></i></a>

              </div>
            </div>
          </div>
        </section>