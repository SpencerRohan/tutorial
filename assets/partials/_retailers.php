<?php
  $vendors = [ "Venture" => "'#'",
                     "Zayre" => "'#'",
                     "Woolworth" => "'#'",
                     "Marshall Field's" => "'#'",
                     "Bamberger's" => "'#'" ];
?>

<?php
  $i=-1;
  if (count($vendors > 0)):
    foreach ($vendors as $name => $link):
      $size = $centered ? circleSize($i, $size) : " ";
?>
        <div class="vendor__link">
          <a href= <?= $link ?> class='btn'>
            <div class="<?= '--circle'.$size ?>"></div>
            <div class="vendor__name"><?= $name ?></div>
          </a>
        </div>

<?php
      $i == 1 ? $i = 0 : $i++;
    endforeach;
  else:
    echo '<h3>Check back soon!</h3>';
  endif;
  if ($centered && count($vendors) % 2 != 0 ):
?>

    <div class="vendor__link -cursor-auto">
      <div class='btn -cursor-auto'>
        <div class='--circle-spacer'></div>
        <div class='vendor__name'></div>
      </div>
    </div>

  <? endif; ?>