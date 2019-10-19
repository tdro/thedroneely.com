
    <nav id="navbar" class="navbar is-fixed-top" aria-label="main navigation">

        <div class="container">

            <div class="navbar-brand navbar__mobile__compact">

                <a href="/" class="navbar-item navbar__icon
                <?php echo $check = $navigation->isActiveHome() ? 'navbar__active' : ''; ?>">
                    <div class="has-text-centered">
                    <?php featherIcon('user'); ?>
                    <p class="is-size-7 navbar__icon__align">Home</p>
                    </div>
                </a>

                <a href="/posts/" class="navbar-item navbar__icon
                <?php echo $check = $navigation->isActive('posts') ? 'navbar__active' : ''; ?>">
                    <div class="has-text-centered">
                    <?php featherIcon('book-open'); ?>
                    <p class="is-size-7 navbar__icon__align">Posts</p>
                    </div>
                </a>

                <a href="/projects/" class="navbar-item navbar__icon
                <?php echo $check = $navigation->isActive('projects') ? 'navbar__active' : ''; ?>">
                    <div class="has-text-centered">
                    <?php featherIcon('briefcase'); ?>
                    <p class="is-size-7 navbar__icon__align">Projects</p>
                    </div>
                </a>

                <a href="/contact/" class="navbar-item navbar__icon
                <?php echo $check = $navigation->isActive('contact') ? 'navbar__active' : ''; ?>">
                    <div class="has-text-centered">
                    <?php featherIcon('mail'); ?>
                    <p class="is-size-7 navbar__icon__align">Contact</p>
                    </div>
                </a>

                <div id="navBurgerCompact"
                class="navbar-burger burger navbar__icon has-text-dark"
                data-target="navMenu">
                <a href="javascript:void(0)" class="navbar-item navbar__icon__menu">
                    <div class="has-text-centered">
                    <?php featherIcon('menu'); ?>
                    <p class="is-size-7 navbar__icon__align">Menu</p>
                    </div>
                </a>
                </div>

            </div>

            <div class="navbar-brand navbar__tablet__compact">

                <?php require $_SERVER['DOCUMENT_ROOT']
                . '/..' . '/app/views/partials/navigator.links.php'; ?>

                <div id="navBurger"
                class="navbar-burger burger has-text-dark" data-target="navMenu">
                <a href="javascript:void(0)" class="navbar-item navbar__icon__menu">
                    <div class="has-text-centered">
                    <?php featherIcon('menu'); ?>
                    <p class="is-size-7 navbar__icon__align">Menu</p>
                    </div>
                </a>
                </div>

            </div>


            <div class="navbar-menu">

                <div class="columns is-centered has-margin-bottom-none">

                    <div class="navbar__left column">
                        <a title="Go to Website Repository"
                        href="https://www.thedroneely.com/git/explore/repos"
                        class="navbar-item item__box button is-inline-flex">
                        <?php featherIcon('git-commit'); ?>
                        <span>Repo</span>
                        </a>

                        <form class="is-inline" method="get"
                        action="<?php echo $_SERVER['REQUEST_URI']; ?>">

                                <?php if ($theme->color() === 'dark') { ?>

                                <button title="Switch to Light Theme"
                                class="navbar-item button item__box is-inline-flex"
                                name="theme" type="submit" value="light">

                                <?php featherIcon('sun'); ?>

                                <?php } else { ?>

                                <button title="Switch to Dark Theme"
                                class="navbar-item button item__box is-inline-flex"
                                name="theme" type="submit" value="dark">

                                <?php featherIcon('moon'); ?>

                                <?php } ?>

                            </button>
                        </form>

                    </div>

                    <div class="navbar__middle column is-7">
                        <?php require $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/app/views/partials/navigator.links.php'; ?>
                    </div>

                     <div class="navbar__right column">
                        <a title="Coffee"
                        href ="https://ko-fi.com/thedroneely"
                        class="navbar-item item__box button is-inline-flex">
                        <?php featherIcon('coffee'); ?>
                        <span>Coffee</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </nav>

    <nav id="navMenu" class="navbar-menu is-hidden-desktop">
        <div id="navMenuContainer" class="navbar-end">

            <?php require $_SERVER['DOCUMENT_ROOT']
            . '/..' . '/app/views/partials/navigator.links.php'; ?>

            <div class ="theme-toggle">
                <form method="get" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

                    <?php if ($theme->color() === 'dark') { ?>

                    <button class="theme-toggle-button button is-text has-text-left is-block"
                    name="theme" type="submit" value="light">

                        <span class="theme-toggle-moon">Light</span>

                    <?php } else { ?>

                    <button class="theme-toggle-button button is-text has-text-left is-block"
                    name="theme" type="submit" value="dark">

                        <span class="theme-toggle-moon">Dark</span>

                    <?php } ?>

                    </button>
                </form>
            </div>

        </div>
    </nav>
