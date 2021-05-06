<nav id="navbar" class="navbar is-fixed-top" aria-label="main navigation">
    <div class="container">
        <div class="navbar-menu">
            <div class="columns is-centered">

                <div class="navbar__left column">
                    <a title="Go to Website Repository"
                    href="/git/"
                    class="navbar-item item__box button is-inline-flex">
                    <?php echo icon('git-commit'); ?>
                    <span>Repo</span>
                    </a>

                    <?php
                      $formClass = 'is-inline';
                      $buttonClass ='navbar-item button item__box';
                      require views('components', 'theme.toggle');
                    ?>
                </div>

                <div class="navbar__middle column is-7">
                  <?php
                    $route = '/';          $label = 'Home';     $icon = 'home';      require views('components', 'navigator.link');
                    $route = '/posts/';    $label = 'Posts';    $icon = 'feather';   require views('components', 'navigator.link');
                    $route = '/projects/'; $label = 'Projects'; $icon = 'package';   require views('components', 'navigator.link');
                    $route = '/about/';    $label = 'Profile';  $icon = 'file-text'; require views('components', 'navigator.link');
                    $route = '/contact/';  $label = 'Contact';  $icon = 'mail';      require views('components', 'navigator.link');
                  ?>

                  <?php
                    $links = true;
                    $id = 'mobile-compact';
                    $type = 'navbar-item is-menu is-right navbar__icon has-text-dark has-tap-transparent';
                    $icon = icon('arrow-down-circle');
                    $label = <<<insert
                      <span class="is-block has-text-centered">
                        $icon
                        <span class="is-block navbar__icon__label">More</span>
                      </span>
                    insert;
                    require views('components', 'context.menu');
                  ?>
                </div>

                 <div class="navbar__right column">
                    <a title="Coffee"
                    href ="https://ko-fi.com/thedroneely"
                    class="navbar-item item__box button is-inline-flex has-margin-left-none">
                    <?php echo icon('coffee'); ?>
                    <span>Coffee</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</nav>
