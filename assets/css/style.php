.button, .retail-circle-centered, .retail-circle-default, .big-retail-circle-centered, .promo-play-centered, .button:focus, .button:active, .btn:active {
  background-color: <?= $theme['hex']; ?>;
  outline: none;
}


.button:hover, .retail-circle-default:hover, .retail-circle-centered:hover, .big-retail-circle-centered:hover, .promo-play-centered:hover {
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