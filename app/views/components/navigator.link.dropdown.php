<a href="<?php echo $route ?? null; ?>"
   class="<?php if ($navigation->isActive($route ?? null)) { echo ' navbar__active'; } ?> navbar-item"
   title="<?php echo $label ?? null; ?>"
>
  <?php echo $label ?? null; ?>
</a>

<?php $route = $label = null; ?>
