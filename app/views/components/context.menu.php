<context-menu-container>
  <more-button>
    <input hidden type="checkbox" id="context-menu-<?php echo $id ?? null ?>"/>
    <label for="context-menu-<?php echo $id ?? 'none' ?>"><?php echo $label ?? null ?></label>

    <context-menu list right>
      <context-menu-content>
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

            include views('components', 'theme.toggle');
          }
        ?>
      </context-menu-content>
    </context-menu>
  </more-button>
</context-menu-container>

<?php $id = $label = $content = $links = null; ?>
