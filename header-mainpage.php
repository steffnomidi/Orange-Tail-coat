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

  <title><?php wp_title(); ?></title> <!-- install and enable plugin "seo yoast" -->

	</head>
  <body class="mainpage" style="background-image: url(<?php echo get_field('background')['url']; ?>);">
	<div class="wrap" style="background: rgba(0,0,0,.3 )">

  <div class="header">
    <header>
      <div class="container">

        <!-- desctop menu -->
        <div class="col-sm-2 col-xs-6">phone</div>
        <div class="col-sm-8 hidden-xs text-center">
          <?php wp_nav_menu( array(
            'menu_class' => 'menu',
            'menu' => 'Главное меню',
            )
           ); ?>
        </div>
        <div class="col-sm-2 col-xs-6 text-right">phone-number</div>
        <!-- /desctop menu -->
      </div>
    </header>
  </div>
