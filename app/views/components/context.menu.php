<div class="dropdown <?php echo $type ?? null ?>">
  <input
    class="is-hidden dropdown-input"
    type="checkbox"
    id="dropdown-menu__<?php echo $id ?? null ?>"
  />

  <label class="dropdown-label" for="dropdown-menu__<?php echo $id ?? 'none' ?>">
    <?php echo $label ?? null ?>
  </label>

  <div class="dropdown-menu">
    <div class="dropdown-content">
     <?php

        echo $content ?? null;

        if ($links ?? null  === true) {

          $route = '/';                             $label = 'Home';       include views('components', 'navigator.link.dropdown');
          $route = '/posts/';                       $label = 'Posts';      include views('components', 'navigator.link.dropdown');
          $route = '/projects/';                    $label = 'Projects';   include views('components', 'navigator.link.dropdown');
          $route = '/about/';                       $label = 'Profile';    include views('components', 'navigator.link.dropdown');
          $route = '/abstracts/';                   $label = 'Abstracts';  include views('components', 'navigator.link.dropdown');
          $route = '/contact/';                     $label = 'Contact';    include views('components', 'navigator.link.dropdown');
          $route = '/git/';                         $label = 'Repository'; include views('components', 'navigator.link.dropdown');
          $route = 'https://ko-fi.com/thedroneely'; $label = 'Coffee';     include views('components', 'navigator.link.dropdown');

          $formClass = 'theme-toggle';
          $iconClass = 'is-hidden';
          $buttonClass ='navbar-item button theme-toggle-button is-text has-text-left';
          include views('components', 'theme.toggle');
        }
        ?>
    </div>
  </div>
</div>

<?php $type = $id = $label = $content = $links = null; ?>
