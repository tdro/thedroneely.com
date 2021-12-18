<a href="<?php echo $route ?? null; ?>" class="navbar-item navbar__icon has-text-centered
  <?php
    $hiddenLabels = [ 'Profile' ];
    if (in_array($label, $hiddenLabels)) { echo ' navbar__icon__hidden'; }
    if ($navigation->isActive($route ?? null)) { echo ' navbar__active'; }
  ?>
">
  <div class="has-text-centered">
    <?php echo icon($icon ?? null); ?>
    <p title="<?php echo $label ?? null; ?>" class="navbar__icon__label"><?php echo $label ?? null; ?></p>
  </div>
</a>

<?php $route = $label = $icon = null; ?>
