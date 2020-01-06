
    <nav id="navbar" class="navbar is-fixed-top" aria-label="main navigation">

        <div class="container">

            <div class="navbar-brand navbar-mobile">

                <a href="/" class="navbar-item navbar__icon
                <?php echo $check = $navigation->isActiveHome() ? 'navbar__active' : ''; ?>">
                    <div class="has-text-centered">
                    <?php echo featherIcon('user'); ?>
                    <p class="is-size-7 navbar__icon__align">Home</p>
                    </div>
                </a>

                <a href="/posts/" class="navbar-item navbar__icon
                <?php echo $check = $navigation->isActive('posts') ? 'navbar__active' : ''; ?>">
                    <div class="has-text-centered">
                    <?php echo featherIcon('book-open'); ?>
                    <p class="is-size-7 navbar__icon__align">Posts</p>
                    </div>
                </a>

                <a href="/projects/" class="navbar-item navbar__icon
                <?php echo $check = $navigation->isActive('projects') ? 'navbar__active' : ''; ?>">
                    <div class="has-text-centered">
                    <?php echo featherIcon('briefcase'); ?>
                    <p class="is-size-7 navbar__icon__align">Projects</p>
                    </div>
                </a>

                <a href="/contact/" class="navbar-item navbar__icon
                <?php echo $check = $navigation->isActive('contact') ? 'navbar__active' : ''; ?>">
                    <div class="has-text-centered">
                    <?php echo featherIcon('mail'); ?>
                    <p class="is-size-7 navbar__icon__align">Contact</p>
                    </div>
                </a>

                <div class="navbar-burger navbar-item navbar__icon has-text-dark has-tap-transparent">
                    <?php
                      $id = 'mobile-compact';
                      $type = 'is-menu is-right';
                      $icon = feathericon('menu');
                      $label = <<<insert
                      <span class="is-block has-text-centered">
                        $icon
                        <span class="is-block is-size-7 navbar__icon__align">Menu</span>
                      </span>
                      insert;
                      $links = true;
                      require views('components', 'context-menu');
                    ?>
                </div>

            </div>


            <div class="navbar-menu">

                <div class="columns is-centered has-margin-bottom-none">

                    <div class="navbar__left column">
                        <a title="Go to Website Repository"
                        href="https://www.thedroneely.com/git/explore/repos"
                        class="navbar-item item__box button is-inline-flex">
                        <?php echo featherIcon('git-commit'); ?>
                        <span>Repo</span>
                        </a>

                        <?php
                          $formClass = 'is-inline';
                          $buttonClass ='navbar-item button item__box is-inline-flex';
                          require views('components', 'theme-toggle');
                        ?>

                    </div>

                    <div class="navbar__middle column is-7">
                        <?php require views('partials', 'navigator.links'); ?>
                    </div>

                     <div class="navbar__right column">
                        <a title="Coffee"
                        href ="https://ko-fi.com/thedroneely"
                        class="navbar-item item__box button is-inline-flex has-margin-right-none">
                        <?php echo featherIcon('coffee'); ?>
                        <span>Coffee</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </nav>
