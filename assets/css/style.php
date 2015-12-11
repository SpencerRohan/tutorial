.btn-primary, .retail-circle, .btn-primary:focus, .btn-primary:active {
  background-color: <?= $theme['hex']; ?>;
  outline: none;
}

.btn-primary:hover, .retail-circle:hover, .layout-centered .retail-circle:hover, .layout-centered .big-retail-circle:hover {
  background-color: <?= $theme['color']; ?>;
}


.layout-centered .retail-circle, .layout-centered .big-retail-circle, .layout-centered .promo__image {
  background-color: <?= $theme['hex']; ?>;
  outline: none;
}

.btn-primary:hover, .retail-circle:hover, .retail-circle:hover, .layout-centered .big-retail-circle:hover, .promo-play:hover {
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


.-background {
  background: url(<?= 'assets/images/background-'.$layout.'.png' ?>) center;
}