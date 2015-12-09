<?php

  $data = [
    'anvil'=> [
      'product'  => 'Anvil',
      'headline' => "<h1 class='headline'>Stop Accelerate Incredibilus in his tracks.</h1>
                    <p>Crush pesky roadrunners with ease.</p>",
      'content'  => "<h3>ACME Product Line-up</h3>
                    <p>ANVIL Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>",
      'layout'   => 'default',
      'theme'    => ['hex'   => '#981b1e',
                     'color' => 'red',
                     'headline' => 'raleway',
                     'body' => 'raleway']
    ],
    'glue'=> [
      'product'  => 'Glue',
      'headline' => "<h1 class='headline'>Stop Accelerate Incredibilus in his tracks.</h1>
                    <p>Crush pesky roadrunners with ease.</p>",
      'content'  => "<h3>ACME Product Line-up</h3>
                    <p>GLUE Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>",
      'layout'   => 'centered',
      'theme'    => ['hex'   => '#B7AF1F',
                     'color' => 'blue',
                     'headline' => 'oswald',
                     'body' => 'helvetica']
    ],
    'jet_propelled_unicycle'=> [
      'product'  => 'Jet Propelled Unicycle',
      'headline' => "<h1 class='headline'>Stop Accelerate Incredibilus in his tracks.</h1>
                    <p>Crush pesky roadrunners with ease.</p>",
      'content'  => "<h3>ACME Product Line-up</h3>
                    <p>JET Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>",
      'layout'   => 'centered',
      'theme'    => ['hex'   => '#DCA65A',
                     'color' => 'blue',
                     'headline' => 'roboto_slab',
                     'body' => 'helvetica']
    ],
  ];

  if (!$code || !$data[$code]) {
    $code = 'anvil';
  };


  $product  = $data[$code]['product'];
  $headline = $data[$code]['headline'];
  $content  = $data[$code]['content'];
  $layout   = $data[$code]['layout'];
  $theme    = $data[$code]['theme'];
  if ($layout == 'centered') {
    $centered = true;
  } else {$centered = false;};
?>