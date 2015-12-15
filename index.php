<?php

  class Theme {
      function __construct($param) {
        $this->product = $param['product'];
        $this->headline = "<h1 class='-headline'>Stop Accelerate Incredibilus in his tracks.</h1>
                           <p>Crush pesky roadrunners with ease.</p>";
        $this->content = "<h3>ACME Product Line-up</h3>
                          <p>".$param['product']." Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>";
        $this->layout = $param['layout'];
        $this->centered = $param['layout'] == 'centered';
        $this->theme = $param['theme'];
      }

  }




  $themeData = [
    'anvil'=> [
      'product'  => 'Anvil',
      'layout'   => 'default',
      'theme'    => ['hex'   => '#981b1e',
                     'color' => 'red',
                     'headline' => 'ralewayextrabold',
                     'sm-headline' => 'ralewaybold',
                     'body' => 'raleway']
    ],
    'glue'=> [
      'product'  => 'Glue',
      'layout'   => 'centered',
      'theme'    => ['hex'   => '#00bff3',
                     'color' => 'violet',
                     'headline' => 'oswald-heavy',
                     'sm-headline' => 'oswald-bold',
                     'body' => 'helvetica']
    ],
    'jet_propelled_unicycle'=> [
      'product'  => 'Jet Propelled Unicycle',
      'layout'   => 'centered',
      'theme'    => ['hex'   => '#DCA65A',
                     'color' => 'deepskyblue',
                     'headline' => 'roboto_slab-bold',
                     'sm-headline' => 'roboto_slab',
                     'body' => 'helvetica']
    ],
  ];

  if (!$code || !$themeData[$code]) {
    $code = 'anvil';
  };

  $currentTheme = new Theme($themeData[$code]);


  $product  = $currentTheme->product;
  $headline = $currentTheme->headline;
  $content  = $currentTheme->content;
  $layout   = $currentTheme->layout;
  $theme    = $currentTheme->theme;
  $vendors = [ "Venture" => "'#'",
                     "Zayre" => "'#'",
                     "Woolworth" => "'#'",
                     "Marshall Field's" => "'#'",
                     "Bamberger's" => "'#'" ];

  $companyName = "ACME";
  $couponPrice = "$6.00 OFF!";
  $code = 'glue';
  //$code = anvil | glue | jet_propelled_unicycle
?>



<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>ACME</title>

    <link rel="stylesheet" type="text/css" href="assets/css/site.css">
    <style>
      <? include 'partials/style.php'; ?>
    </style>


  </head>

  <body class="<?= 'layout-'.$layout ?>">

    <div class="logo">
      <img class="logo__image" src="assets/images/block_title.png" >
    </div>

    <!-- START SPOTLIGHT -->
    <div class="container spotlight -background">
      <div class ="row spotlight__row">

        <?php $headerClass = ($layout == 'centered') ? 'col-md-12 --centered' : 'col-md-7 col-md-push-4'; ?>

        <div class="--header <?= $headerClass ?>">
          <?= $headline; ?>

          <? if ($layout !== 'centered'): ?>
            <?php include 'partials/promo.php' ?>
          <? endif; ?>

          <!-- MODAL -->
          <?php include 'partials/modal.php' ?>
        </div>




        <?php $cutoutClass = ($layout == 'centered') ? 'col-xs-12 --centered' : 'col-md-4 col-md-pull-7'; ?>

        <div class="<?= $cutoutClass ?>">
          <? if ($layout == 'centered'): ?>
            <div class="promo">
              <a href="#promo" data-toggle="modal" alt="promo">
                <img class="promo__image" src="assets/images/play.png">
              </a>
            </div>
          <? endif; ?>

          <?php include 'partials/cutout.php' ?>
        </div>
      </div>
    </div>

    <!-- START ARTICLE -->
    <div class="container article">
      <div class ="row article__row">

        <div class="col-md-6 col-sm-12 col-md-push-6 --card -divider-bottom --copy --copy-pad">
          <?= $content; ?>
        </div>

        <div class="col-md-6 col-sm-12 col-md-pull-6 --card -divider-right">
          <h3>Available at these Fine Retailers</h3>

          <div class="row vendor">
            <?php if (! empty($vendors)) : ?>
              <? foreach ($vendors as $name => $link): ?>
                <?php include 'partials/retailers.php'; ?>
              <? endforeach; ?>

            <?php else : ?>
              <h3>Check back soon!</h3>
            <? endif; ?>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <a href="#" alt="HOME">Home</a> |
        <a href="#" alt= "Privacy Policy">Privacy Policy</a> |
        <a href="#" alt="Contact">Contact Us</a>
      </div>
    </footer>

    <script src="assets/js/site.js" type="text/javascript"></script>

  </body>
</html>

