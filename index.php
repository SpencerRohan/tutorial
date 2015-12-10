<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>ACME</title>


    <?php
      $companyName = "ACME";
      $couponPrice = "$6.00 OFF!";
      $vendors = [ "Venture" => "'#'",
                   "Zayre" => "'#'",
                   "Woolworth" => "'#'",
                   "Marshall Field's" => "'#'",
                   "Bamberger's" => "'#'" ];

    function circleSize($count, $size) {
        if ($count == 0) {
          $size = ($size == 'big-' ? ' ' : 'big-');
        }
        return $size;
      };

      //$code = anvil | glue | jet_propelled_unicycle
      $code = 'anvil';
      include 'assets/partials/_themes.php';

    ?>


    <link rel="stylesheet" type="text/css" href="assets/css/site.css">
    <script src="assets/js/site.js" type="text/javascript"></script>

    <style>
      <? include 'assets/css/style.php'; ?>
    </style>

  </head>

  <body class="<?= 'layout-'.$layout ?>">

    <div class="logo-bar">
      <img class="logo" src="assets/images/block_title.png" >
    </div>

    <div class="container back box-shadow">
      <div class ="row spotlight">
        <div class="<?= $centered ? 'col-md-12 header centered' : 'col-md-7 col-md-push-4 header' ?>">
          <?= $headline; ?>

          <? if (!$centered): ?>
            <br>
            <a href="#promo" data-toggle="modal" alt="promo">
              <button class="btn btn-primary button promo-button">
                <img class="promo-play" src="assets/images/play.png">
                WATCH VIDEO
              </button>
            </a>
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
        <div class="<?= $centered ? 'col-xs-12 centered' : 'col-md-4 col-md-pull-7' ?>">

          <? if ($centered): ?>
            <div class="promo-centered">
              <a href="#promo" data-toggle="modal" alt="promo">
              <img class="promo-play" src="assets/images/play.png">
            </a>
            </div>
          <? endif; ?>


          <div class="cutout centered">

            <div class="cutout-details centered">

              <h1 class="cutout-headline">
                <?= $couponPrice ? $couponPrice : "SEE DETAILS" ?>
              </h1>

              <h4>
                <?= "on ".$companyName." ".$product; ?>
              </h4>
            </div>

            <button class="btn btn-primary button brand-button">
              GET COUPON NOW
            </button>

          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class ="row bottom">

        <div class="col-md-6 col-sm-12 col-md-push-6 info-card divider-bottom brand-copy copy-pad">
          <?= $content; ?>
        </div>

        <div class="col-md-6 col-sm-12 col-md-pull-6 info-card divider-right">
          <h3>Available at these Fine Retailers</h3>
          <div class="row link-container">

              <?php
                $i=-1;
                if ($vendors && count($vendors > 0)):
                  foreach ($vendors as $name => $link):
                    $size = $centered ? circleSize($i, $size) : " ";
                ?>
                  <div class="retail-link">
                    <a href= <?= $link ?> class='btn'>
                      <div class="<?= $size.'retail-circle' ?>"></div>
                      <div class="link"><?= $name ?></div>
                    </a>
                  </div>
              <?php
                $i == 1 ? $i = 0 : $i++;
                endforeach;
                else:
              ?>
                <h3>Check back soon!</h3>
              <? endif;
                if ($centered && count($vendors) % 2 != 0 ): ?>
                <div class="retail-link cursor-auto">
                  <div class='btn cursor-auto'>
                    <div class='retail-circle-spacer'></div>
                    <div class='link'></div>
                  </div>
                </div>
              <? endif; ?>

          </div>
        </div>

      </div>
    </div>
  </body>

  <footer>
    <div class="container">
      <a href="#" alt="HOME">Home</a> |
      <a href="#" alt= "Privacy Policy">Privacy Policy</a> |
      <a href="#" alt="Contact">Contact Us</a>
    </div>
  </footer>

</html>

