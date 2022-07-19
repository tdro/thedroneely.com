<a href="<?php echo $route ?? null; ?>"
   title="<?php echo $label ?? null; ?>"
   <?php if ($navigation->isActive($route ?? null)) { echo ' data-active'; } ?>
>
  <?php echo $label ?? null; ?>
</a>

<?php $route = $label = null; ?>
