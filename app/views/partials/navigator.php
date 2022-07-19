<nav id="navbar">
  <section>

    <column-left>
      <button-repo>
        <button-anchor>
          <a title="Go to Website Repository" href="/git/">
            <?php echo icon('git-commit'); ?>
            <span>Repo</span>
          </a>
        </button-anchor>
      </button-repo>

      <?php require views('components', 'theme.toggle'); ?>
    </column-left>

    <column-middle>
      <?php
        $route = '/';          $label = 'Home';     $icon = 'home';      require views('components', 'navigator.link');
        $route = '/posts/';    $label = 'Posts';    $icon = 'feather';   require views('components', 'navigator.link');
        $route = '/projects/'; $label = 'Projects'; $icon = 'package';   require views('components', 'navigator.link');
        $route = '/about/';    $label = 'Profile';  $icon = 'file-text'; require views('components', 'navigator.link');
        $route = '/contact/';  $label = 'Contact';  $icon = 'mail';      require views('components', 'navigator.link');
      ?>

      <?php
        $links = true;
        $id = 'navigation';
        $icon = icon('arrow-down-circle');
        $label = <<<insert
            $icon
            <span>More</span>
          insert;
        require views('components', 'context.menu');
      ?>
    </column-middle>

    <column-right>
      <button-anchor>
        <a title="Coffee" href ="https://ko-fi.com/thedroneely">
          <?php echo icon('coffee'); ?>
          <span>Coffee</span>
        </a>
      </button-anchor>
    </column-right>

  </section>
</nav>
