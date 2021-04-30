<a href="<?php echo $route ?? null; ?>" class="navbar-item navbar__icon has-text-centered
  <?php

    $hiddenLabels = [ 'Profile' ];
    if (in_array($label, $hiddenLabels)) { echo ' navbar__icon__hidden'; }

    echo $check = ($label === 'Home')
      ? ($navigation->isActiveHome() ? ' navbar__active' : '')
      : ($navigation->isActive($route ?? null) ? ' navbar__active' : '');
  ?>
">
  <div class="has-text-centered">
    <?php echo icon($icon ?? null); ?>
    <p title="<?php echo $label ?? null; ?>" class="navbar__icon__label"><?php echo $label ?? null; ?></p>
  </div>
</a>

<?php $route = $label = $icon = null; ?>
