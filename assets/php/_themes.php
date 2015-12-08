<?php
  if (!$code) {
    $code = "anvil";
  }

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
    case 'jet':
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
        $code = "anvil";
      break;
  }

  $product  = $style['product'];
  $headline = $style['headline'];
  $content  = $style['content'];
  $layout   = $style['layout'];
  $theme    = $style['theme'];
?>