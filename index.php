<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>ACME</title>


    <?php
      $companyName = "ACME";
      $couponPrice = "$6.00 OFF!";
      $vendors = array("Venture"          => "'#'",
                       "Zayre"            => "'#'",
                       "Woolworth"        => "'#'",
                       "Marshall Field's" => "'#'",
                       "Bamberger's"      => "'#'");

      //code possible = anvil | glue | jet_propelled_unicycle
      $code = 'anvil';
      include 'assets/php/_themes.php';

    ?>


    <link rel="stylesheet" type="text/css" href="assets/css/site.css">
    <script src="assets/js/site.js" type="text/javascript"></script>

  </head>

  <body>
    <div class="logo-bar">
      <img class="logo" src="assets/images/block_title.png" >
    </div>
    <div class="container back box-shadow">
      <div class ="row top">
        <div class="col-md-7 col-md-push-4 header">

          <?php
            echo $headline;
          ?>

          <br><a href="#promo" data-toggle="modal" alt="promo">
            <button class="btn btn-danger button promo-button">
              <img class="promo-play" src="assets/images/play.png">
              WATCH VIDEO
            </button>
          </a>

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

        <div class="col-md-4 col-md-pull-7">
          <div class="coupon">
            <h1 class="coupon-price">

              <?php
                if($couponPrice){
                  echo $couponPrice;
                } else {
                    echo "SEE DEALS!";
                  }
              ?>

            </h1>
            <h4>

              <?php
                echo "on ".$companyName." ".$product;
              ?>

            </h4>
            <button class="btn btn-danger button save-button">
              GET COUPON NOW
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class ="row bottom">

        <div class="col-md-6 col-sm-12 col-md-push-6 bottom-right">

            <?php echo $content; ?>

        </div>

        <div class="col-md-6 col-sm-12 col-md-pull-6 bottom-left">
          <h3>Available at these Fine Retailers</h3>
          <div class= "row left-container">

            <?php
              if ($vendors && count($vendors >= 1)){
                foreach ($vendors as $name => $link) {
                  echo "<a href=".$link."class='btn retail-link'>
                          <div class='retail-circle'></div>".$name."
                        </a>";
                }
              } else {
                    echo "<h3>Check back soon!</h3>";
              }
            ?>

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

