<?php
  include 'assets/partials/_themes.php';
  $companyName = "ACME";
  $couponPrice = "$6.00 OFF!";
  $code = 'glue';
  //$code = anvil | glue | jet_propelled_unicycle


  function circleSize($count, $size) {
    if ($count == 0) {
      $size = ($size == '-big' ? ' ' : '-big');
    }
    return $size;
  };
?>



<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>ACME</title>

    <link rel="stylesheet" type="text/css" href="assets/css/site.css">
    <style>
      <? include 'assets/css/style.php'; ?>
    </style>


  </head>

  <body class="<?= 'layout-'.$layout ?>">

    <div class="logo">
      <img class="logo__image" src="assets/images/block_title.png" >
    </div>

    <div class="container spotlight -background">
      <div class ="row spotlight__row">

        <div class="<?= $centered ? 'col-md-12 --header --centered' : 'col-md-7 col-md-push-4 --header' ?>">
          <?= $headline; ?>

          <? if (!$centered): ?>
            <span class="promo">
            <br>
            <a href="#promo" data-toggle="modal" alt="promo">
              <button class="btn btn-primary promo__button">
                <img class="promo__image" src="assets/images/play.png">
                WATCH VIDEO
              </button>
            </a>
          </span>
          <? endif; ?>

          <div class="modal fade" id="promo" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/NpEaa2P7qZI">
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="<?= $centered ? 'col-xs-12 --centered' : 'col-md-4 col-md-pull-7' ?>">
          <? if ($centered): ?>
            <div class="promo">
              <a href="#promo" data-toggle="modal" alt="promo">
                <img class="promo__image" src="assets/images/play.png">
              </a>
            </div>
          <? endif; ?>


          <div class="cutout --centered">
            <div class="cutout__details --centered">
              <h1 class="cutout__headline">
                <?= $couponPrice ? $couponPrice : "SEE DETAILS" ?>
              </h1>

              <h4>
                <?= "on ".$companyName." ".$product; ?>
              </h4>
            </div>

            <button class="btn btn-primary btn-brand">
              GET COUPON NOW
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="container article">
      <div class ="row article__row">
        <div class="col-md-6 col-sm-12 col-md-push-6 --card -divider-bottom --copy --copy-pad">
          <?= $content; ?>
        </div>

        <div class="col-md-6 col-sm-12 col-md-pull-6 --card -divider-right">
          <h3>Available at these Fine Retailers</h3>
          <div class="row vendor">
            <? include 'assets/partials/_retailers.php'; ?>
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

