<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>

  <!-- preloader -->
  <script>
  jQuery(document).ready( function($) {
    var loadingScreen = function (progress) {
      if (progress != 100) {
        $('.preloader .img').width(progress + '%');
      } else {
        setTimeout(function () {
          $('.preloader').fadeOut();
        }, 1000);
      }
    };

    if ($('.preloader').length) {//example of how loading must be implemented, delete and implement your function for ajax loading
      var progress = 1;
      setTimeout(function () {
        loadingScreen(progress++);
        progress <= 100 && setTimeout(arguments.callee, 25);
      }, 25);
    }
  });
  </script>
  <style>
  .preloader {
      position: fixed;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
      background: #fff;
      z-index: 999;
      text-align: center;
  }
  .preloader .preloader__logo {
      position: relative;
      left: 50%;
      top: 50%;
      width: 537px;
      height: 293px;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      background: url(<?php bloginfo('template_url'); ?>/images/preloader-mute.png) 0 50% no-repeat;
  }
  .preloader .preloader__logo .bott {
      position: relative;
      z-index: 10;
      filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=40);
      opacity: 0.4;
  }
  .preloader .preloader__logo .img {
      position: absolute;
      width: 0;
      height: 100%;
      left: 0;
      top: 0;
      z-index: 5;
      overflow: hidden;
      background: url(<?php bloginfo('template_url'); ?>/images/preloader.png) 0 50% no-repeat;
  }
  </style>


  <title><?php wp_title(); ?></title> <!-- install and enable plugin "seo yoast" -->

	</head>
  <body>




        <div class="preloader">
      		<div class="preloader__logo">
      			<div class="img">
      			</div>
      		</div>
      	</div>





	<div class="wrap">

    <div class="header">
      <header>
        <div class="container">

          <!-- desctop menu -->
          <div class="col-sm-12 hidden-xs text-center">
            <?php wp_nav_menu( array(
              'menu_class' => 'menu',
              'menu' => 'Меню для страниц',
              )
             ); ?>
          </div>
          <!-- /desctop menu -->

          <div class="col-xs-6 text-left visible-xs mainpage-link">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-modal.png" /></a>
          </div>
          <div class="col-xs-6 text-right visible-xs toggle-burger" data-toggle="modal" data-target="#burgerMenu"></div>

        </div>
      </header>
    </div>
