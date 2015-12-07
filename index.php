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

      $style = array();
      switch ($code) {
        case 'anvil':
          $style['product']  = 'Anvil';
          $style['headline'] =
            "<h1 class='headline'>Stop Accelerate Incredibilus in his tracks.</h1>
             <p>Crush pesky roadrunners with ease.</p>";
          $style['content']  =
            "<h3>ACME Product Line-up</h3>
             <p>ANVIL Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>";
          $style['style'] = "default";
          $style['theme'] = array();
            $style['theme']['hex']      = "#981b1e";
            $style['theme']['color']    = "red";
            $style['theme']['headline'] = "raleway";
            $style["theme"]['body']     = "raleway";
          break;
        case 'glue':
          $style['product']  = 'Glue';
          $style['headline'] =
            "<h1 class='headline'>Stop Accelerate Incredibilus in his tracks.</h1>
             <p>Crush pesky roadrunners with ease.</p>";
          $style['content']  =
            "<h3>ACME Product Line-up</h3>
             <p>GLUE Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>";
          $style['layout']   = "default";
          $style['theme']    = array();
            $style['theme']['hex']      = "#B7AF1F";
            $style['theme']['color']    = "green";
            $style['theme']['headline'] = "oswald";
            $style["theme"]['body']     = "helvetica";
          break;
        case 'jet_propelled_unicycle':
          $style['product']  = 'Jet Propelled Unicycle';
          $style['headline'] =
            "<h1 class='headline'>Stop Accelerate Incredibilus in his tracks.</h1>
             <p>Crush pesky roadrunners with ease.</p>";
          $style['content']  =
            "<h3>ACME Product Line-up</h3>
             <p>JET Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>";
          $style['layout']   = "centered";
          $style['theme']    = array();
            $style['theme']['hex']      = "#DCA65A";
            $style['theme']['color']    = "blue";
            $style['theme']['headline'] = "roboto_slab";
            $style["theme"]['body']     = "helvetica";
          break;
        default:
          $style['product']  = 'Anvil';
          $style['headline'] =
            "<h1 class='headline'>Stop Accelerate Incredibilus in his tracks.</h1>
             <p>Crush pesky roadrunners with ease.</p>";
          $style['content']  =
            "<h3>ACME Product Line-up</h3>
             <p>ANVIL Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>";
          $style['style'] = "default";
          $style['theme'] = array();
            $style['theme']['hex']      = "#981b1e";
            $style['theme']['color']    = "red";
            $style['theme']['headline'] = "raleway";
            $style["theme"]['body']     = "raleway";
          break;
      }

      $product  = $style['product'];
      $headline = $style['headline'];
      $content  = $style['content'];
      $layout   = $style['layout'];
      $theme    = $style['theme'];

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

