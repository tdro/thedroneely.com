<form
  method="get"
  action="<?php echo $_SERVER['REQUEST_URI']; ?>"
>
  <?php if ($theme->color() === 'dark') { ?>

  <button
    title="Switch to Light Theme"
    name="theme"
    type="submit"
    value="light"
  >
    <?php echo icon('moon'); ?>
    <span>Dark</span>
  </button>

  <?php } else { ?>

  <button
    title="Switch to Dark Theme"
    name="theme"
    type="submit"
    value="dark"
  >
    <?php echo icon('sun'); ?>
    <span>Light</span>
  </button>

  <?php } ?>
</form>
