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
      $code = 'jet_propelled_unicycle';
      include 'assets/partials/_themes.php';

    ?>


    <link rel="stylesheet" type="text/css" href="assets/css/site.css">
    <script src="assets/js/site.js" type="text/javascript"></script>

    <style>
      <? include 'assets/css/style.php'; ?>
    </style>

  </head>

  <body>
    <div class="logo-bar">
      <img class="logo" src="assets/images/block_title.png" >
    </div>
    <div class="container back box-shadow">
      <div class ="row top">
        <div class="<?= $centered ? 'col-md-12 header centered' : 'col-md-7 col-md-push-4 header' ?>">
          <?= $headline; ?>

          <? if (!$centered): ?>
            <br><a href="#promo" data-toggle="modal" alt="promo">
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
              <img class="promo-play-centered" src="assets/images/play.png">
            </a>
            </div>
          <? endif; ?>


          <div class="<?= 'coupon-'.$layout ?>">

            <div class="coupon-details">

              <h1 class="coupon-price">
                <?= $couponPrice ? $couponPrice : "SEE DETAILS" ?>
              </h1>

              <h4>
                <?= "on ".$companyName." ".$product; ?>
              </h4>
            </div>

            <button class="btn btn-primary button save-button">
              GET COUPON NOW
            </button>

          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class ="row bottom">

        <div class="col-md-6 col-sm-12 col-md-push-6 bottom-right">
          <?= $content; ?>
        </div>

        <div class="col-md-6 col-sm-12 col-md-pull-6 bottom-left">
          <h3>Available at these Fine Retailers</h3>
          <div class= "<?= 'row left-container-'.$layout ?>">
              <?php
                $i=-1;
                if ($vendors && count($vendors > 0)):
                  foreach ($vendors as $name => $link):
                    $size = $centered ? circleSize($i, $size) : " ";
                ?>
                  <div class="<?= 'retail-link-'.$layout ?>">
                    <a href= <?= $link ?> class='btn'>
                      <div class="<?= $size.'retail-circle-'.$layout; ?>"></div>
                      <div class="<?='link-'.$layout ?>"><?= $name ?></div>
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
                <div class="retail-link-centered cursor-auto">
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

