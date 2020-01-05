<div class="dropdown <?php echo $type ?? null ?>">
  <input
    class="is-hidden input-dropdown"
    type="checkbox"
    id="dropdown-menu__<?php echo $id ?? null ?>"
  />

  <label for="dropdown-menu__<?php echo $id ?? null ?>">
    <?php echo $label ?? null ?>
  </label>

  <div class="dropdown-menu">
    <div class="dropdown-content">
       <?php
        echo $content ?? null;
        if ($links ?? null  === true) {
            include views('partials', 'navigator.links');
            $formClass = 'theme-toggle';
            $buttonClass ='theme-toggle-button button is-text has-text-left is-block';
            include views('components', 'theme-toggle');
        }
        ?>
    </div>
  </div>
</div>

<style>
  .input-dropdown[type="checkbox"]:checked ~ .dropdown-menu {
    display: block;
  }
</style>
