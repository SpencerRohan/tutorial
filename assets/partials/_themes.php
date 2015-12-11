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
  $centered = $currentTheme->centered;
  $theme    = $currentTheme->theme;
?>