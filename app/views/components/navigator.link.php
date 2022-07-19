<a
  href="<?php echo $route ?? null; ?>"
  <?php
    $hiddenLabels = [ 'Profile' ];
    if (in_array($label, $hiddenLabels)) { echo ' data-hidden'; }
    if ($navigation->isActive($route ?? null)) { echo ' data-active'; }
  ?>
>
  <?php echo icon($icon ?? null); ?>
  <span title="<?php echo $label ?? null; ?>">
    <?php echo $label ?? null; ?>
  </span>
</a>

<?php $route = $label = $icon = null; ?>
