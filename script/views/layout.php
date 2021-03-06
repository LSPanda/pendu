<!DOCTYPE html><!--[if lt IE 7]><html lang="fr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html lang="fr" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html lang="fr" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo( TITLE ); ?></title>
  <meta name="description" content="<?php echo( DESCRIPTION ); ?>">
  <meta name="viewport" content="width-device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="">
  <link rel="stylesheet" href="<?php echo( PATH_STYLE ); ?>">
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
  <!-- Inclure le header de ma vue -->
  <?php include( 'partials/header.php' ) ?>

  <?php
    if( $gameOver === false )
    {
      include( 'partials/game.php' );
    }
    else
    {
      include( 'partials/result.php' );
    }
  ?>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/script.js"></script>
</body>
