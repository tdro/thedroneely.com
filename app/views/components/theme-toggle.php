<form
  class="<?php echo $formClass ?? null; ?>"
  method="get"
  action="<?php echo $_SERVER['REQUEST_URI']; ?>"
>
  <?php if ($theme->color() === 'dark') { ?>

  <button
    title="Switch to Light Theme"
    class="<?php echo $buttonClass ?? null; ?>"
    name="theme"
    type="submit"
    value="light"
  >
    <?php echo featherIcon('sun'); ?>
    <span>Light</span>
  </button>

  <?php } else { ?>

  <button
    title="Switch to Dark Theme"
    class="<?php echo $buttonClass ?? null; ?>"
    name="theme"
    type="submit"
    value="dark"
  >
    <?php echo featherIcon('moon'); ?>
    <span>Dark</span>
  </button>

  <?php } ?>
</form>
