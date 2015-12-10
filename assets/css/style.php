.button, .retail-circle, .layout-centered .retail-circle, .layout-centered .big-retail-circle, .layout-centered .promo-play, .button:focus, .button:active{
  background-color: <?= $theme['hex']; ?>;
  outline: none;
}


.button:hover, .retail-circle:hover, .retail-circle:hover, .layout-centered .big-retail-circle:hover, .promo-play:hover {
  background-color: <?= $theme['color']; ?>;
}

a:active, a:focus {
  outline: none;
}

a:hover {
  color: <?= $theme['hex']; ?>;
  outline: none;
}

h1 {
  font-family: <?= $theme['headline']; ?>;
}

h3 {
  font-family: <?= $theme['sm-headline']; ?>;
}

body {
  font-family: <?= $theme['body']; ?>;
}


.back {
  background: url(<?= 'assets/images/background-'.$layout.'.png' ?>) center;
}