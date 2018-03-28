
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

      <style>
        .menu-item .sub-menu{position:absolute;display:none;}*,*:before,*:after{box-sizing:border-box}figure,nav,section{display:block}img{height:auto;max-width:100%;vertical-align:top}li,ul{list-style:none}ul{margin:0;padding:0}a{outline:none}body{background-color:#f7f7ff;color:#565656}html{font-size:initial}figure{margin:0;padding:0}.container{margin:0 auto;max-width:1170px;padding:0 15px}.row{box-sizing:border-box;display:flex;flex:0 1 auto;flex-direction:row;flex-wrap:wrap}.row-xs-2>.col-xs-6{flex-basis:calc(100% * 6/12 - (15px - 15px * 6/12));max-width:calc(100% * 6/12 - (15px - 15px * 6/12));margin-right:15px}.row-xs-2>.col-xs-6:nth-of-type(2n+2){margin-right:0}.end-xs{justify-content:flex-end;text-align:right}.middle-xs{align-items:center}.hide-xs{display:none}@media only screen and (min-width:720px){.container{padding:0 15px}}@media only screen and (min-width:960px){.container{padding:0 15px}.row-xs-2>.col-md-10:nth-of-type(2n+2){margin-right:30px}.row-md-2>.col-md-2{flex-basis:calc(100% * 2/12 - (30px - 30px * 2/12));max-width:calc(100% * 2/12 - (30px - 30px * 2/12));margin-right:30px}.row-md-2>.col-md-10{flex-basis:calc(100% * 10/12 - (30px - 30px * 10/12));max-width:calc(100% * 10/12 - (30px - 30px * 10/12));margin-right:30px}.row-md-2>.col-md-10:nth-of-type(2n+2){margin-right:0}.start-md{justify-content:flex-start;text-align:left}.center-md{justify-content:center;text-align:center}.bottom-md{align-items:flex-end}.hide-md{display:none}.show-md{display:block}}@media only screen and (min-width:1200px){.container{padding:0}}@media only screen and (min-width:1440px){.container{padding:0}}body,a{font-family:"Open Sans",sans-serif}a{outline:none}.off-canvas-menu-nav li a{text-transform:uppercase;font-weight:bolder}.off-canvas-menu-nav li ul{margin-bottom:15px}.off-canvas-menu-nav li ul li a{text-transform:capitalize;font-weight:600;padding:0 0 0 20px}#header{background-color:white}#header .header-nav-items{justify-content:space-around;margin-bottom:15px}#header .menu-item{z-index:1001;min-width:170px;padding:0 10px}#header .menu-item a{color:black;font-size:14px;font-weight:bolder;text-transform:uppercase;padding:0;margin-top:15px}#header .menu-item a:after{content:none}#header .menu-item .sub-menu{border-top:0;margin-left:0;min-width:170px;padding-bottom:15px}#header .menu-item .sub-menu a{padding:0;text-transform:capitalize;font-weight:600;font-size:14px}#header .menu-item-has-children{border:1px solid transparent}.header-row,.header-col,.header-figure,.header-logo-image{max-height:60px;object-fit:cover}.open--menu{color:#7a75a9;font-size:30px}.off-canvas{background-color:#f7f7ff;padding:30px 20px}.off-canvas ul{margin-left:0}.off-canvas li a{color:black;display:block;padding:10px 0}.off-canvas li a:visited{color:black}@media only screen and (min-width:960px){.header-row,.header-col,.header-figure,.header-logo-image{max-height:initial}}.footer .accordion-content{background-color:transparent;border:0}.footer .accordion-content:last-child{border:0}.footer .menu-item a{color:white}.footer-newsletter input{margin-bottom:0}@media screen and (min-width:960px){.accordion-content{padding:0}.accordion-content ul{margin-left:0}}input{height:46px!important}.hslider_slide_holder{width:100%!important;height:500px!important;transform-origin:left top 0px!important;transform:translate3d(0px,0px,0px)!important}
      </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,800|Signika:400,600,700" rel="stylesheet">

      <link rel="preload" as="style" href="<?= get_template_directory_uri(); ?>/dist/style.css"">
      <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/dist/style.css"">
      <script rel="preload" as="script" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script rel="preload" as="script" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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