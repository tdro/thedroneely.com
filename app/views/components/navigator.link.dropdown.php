<a href="<?php echo $route ?? null; ?>"
   class="
    <?php
    echo $check = ($label === 'Home')
      ? ($navigation->isActiveHome() ? ' navbar__active' : '')
      : ($navigation->isActive($route ?? null) ? ' navbar__active' : '');
    ?> navbar-item"
   title="<?php echo $label ?? null; ?>"
>
  <?php echo $label ?? null; ?>
</a>

<?php $route = $label = null; ?>
