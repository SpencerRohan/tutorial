
<div class="vendor__link">
  <a href= <?= $link ?> class='btn'>
    <div class="<?= '--circle'.$size ?>"></div>
    <div class="vendor__name"><?= $name ?></div>
  </a>
</div>

<? if ($centered && count($vendors) % 2 != 0 ): ?>
  <div class="vendor__link -cursor-auto">
    <div class='btn -cursor-auto'>
      <div class='--circle-spacer'></div>
      <div class='vendor__name'></div>
    </div>
  </div>
<? endif; ?>