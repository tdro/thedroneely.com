
        <script>document.write('<nav id="navbar" class="navbar is-fixed-top" aria-label="main navigation">');</script>
        <noscript><nav id="navbar" class="navbar" aria-label="main navigation"></noscript>

        <div class="container">

            <div class="navbar-brand navbar__mobile__compact">

                <a href="/" class="navbar-item navbar__icon
                <?php echo $navigation->isActiveHome() ?? 'has-text-gray' ?>">
                    <div class="has-text-centered">
                    <?php echo file_get_contents(
                        $_SERVER['DOCUMENT_ROOT']
                            . '/..' . '/public/css/fonts/feather-icons/user.svg'
                    ) ?>
                    <p class="is-size-7 navbar__icon__align">Home</p>
                    </div>
                </a>

                <a href="/posts/" class="navbar-item navbar__icon
                <?php echo $navigation->isActive('posts') ?? 'has-text-gray' ?>">
                    <div class="has-text-centered">
                    <?php echo file_get_contents(
                        $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/public/css/fonts/feather-icons/book-open.svg'
                    ) ?>
                    <p class="is-size-7 navbar__icon__align">Posts</p>
                    </div>
                </a>

                <a href="/projects/" class="navbar-item navbar__icon
                <?php echo $navigation->isActive('projects') ?? 'has-text-gray' ?>">
                    <div class="has-text-centered">
                    <?php echo file_get_contents(
                        $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/public/css/fonts/feather-icons/briefcase.svg'
                    ) ?>
                    <p class="is-size-7 navbar__icon__align">Projects</p>
                    </div>
                </a>

                <a href="/contact/" class="navbar-item navbar__icon
                <?php echo $navigation->isActive('contact') ?? 'has-text-gray' ?>">
                    <div class="has-text-centered">
                    <?php echo file_get_contents(
                        $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/public/css/fonts/feather-icons/mail.svg'
                    ) ?>
                    <p class="is-size-7 navbar__icon__align">Contact</p>
                    </div>
                </a>

                <div id="navBurgerCompact"
                class="navbar-burger burger navbar__icon has-text-dark"
                data-target="navMenu">
                <a href="javascript:void(0)" class="navbar-item navbar__icon__menu">
                    <div class="has-text-centered">
                    <?php echo file_get_contents(
                        $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/public/css/fonts/feather-icons/menu.svg'
                    ) ?>
                    <p class="is-size-7 navbar__icon__align">Menu</p>
                    </div>
                </a>
                </div>

            </div>

            <div class="navbar-brand navbar__tablet__compact">

                <?php require $_SERVER['DOCUMENT_ROOT']
                . '/..' . '/app/views/partials/navigator.home.php'; ?>

                <?php require $_SERVER['DOCUMENT_ROOT']
                . '/..' . '/app/views/partials/navigator.links.php'; ?>

                <div id="navBurger"
                class="navbar-burger burger has-text-dark" data-target="navMenu">
                <a href="javascript:void(0)" class="navbar-item navbar__icon__menu">
                    <div class="has-text-centered">
                    <?php echo file_get_contents(
                        $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/public/css/fonts/feather-icons/menu.svg'
                    ) ?>
                    <p class="is-size-7 navbar__icon__align">Menu</p>
                    </div>
                </a>
                </div>

            </div>

            <div class="navbar-brand is-hidden-touch"></div>


            <div class="navbar-menu">

                <div class="columns is-centered has-margin-bottom-none">

                    <div class="navbar__left column">
                        <a title="Git Repository"
                        href="https://www.thedroneely.com/git/explore/repos"
                        class="brand__custom is-inline-block">
                            <?php echo file_get_contents(
                                $_SERVER['DOCUMENT_ROOT']
                                . '/..'
                                . '/public/css/fonts/feather-icons/terminal.svg'
                            ) ?>
                        </a>

                        <div class="navbar__separator is-inline-block"></div>

                        <div class ="is-inline-block theme-toggle">
                        <form method="get"
                        action="<?php echo $_SERVER['REQUEST_URI']; ?>">

                                <?php if ($theme->color() === 'dark') { ?>

                                <button title="Light Theme"
                                class="theme-toggle-button button is-text"
                                name="theme" type="submit" value="light">

                                <span class="theme-toggle-sun">
                                    <?php echo file_get_contents(
                                        $_SERVER['DOCUMENT_ROOT']
                                        . '/..'
                                        . '/public/css/fonts/feather-icons/sun.svg'
                                    ) ?>
                                </span>

                                <?php } else { ?>

                                <button title="Dark Theme"
                                class="theme-toggle-button button is-text"
                                name="theme" type="submit" value="dark">

                                <span class="theme-toggle-moon">
                                    <?php echo file_get_contents(
                                        $_SERVER['DOCUMENT_ROOT']
                                        . '/..'
                                        . '/public/css/fonts/feather-icons/moon.svg'
                                    ) ?>
                                </span>

                                <?php } ?>

                            </button>
                        </form>
                        </div>

                    </div>

                    <div class="navbar__left column is-2">
                        <?php require $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/app/views/partials/navigator.home.php'; ?>
                    </div>

                    <div class="navbar__right column is-5">
                        <?php require $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/app/views/partials/navigator.links.php'; ?>
                    </div>

                     <div class="navbar__right column">
                        <a title="Coffee"
                        href ="https://ko-fi.com/thedroneely"
                        class="navbar-item coffee button is-success
                        is-outlined is-inline-flex">
                        <?php echo file_get_contents(
                            $_SERVER['DOCUMENT_ROOT']
                            . '/..' . '/public/css/fonts/feather-icons/coffee.svg'
                        ) ?>
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
            . '/..' . '/app/views/partials/navigator.home.php'; ?>

            <?php require $_SERVER['DOCUMENT_ROOT']
            . '/..' . '/app/views/partials/navigator.links.php'; ?>

            <div class ="theme-toggle">
                <form method="get" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

                    <?php if ($theme->color() === 'dark') { ?>

                    <button class="theme-toggle-button button is-text has-text-centered is-block"
                    name="theme" type="submit" value="light">

                        <span class="theme-toggle-sun">
                        <?php echo file_get_contents(
                            $_SERVER['DOCUMENT_ROOT']
                            . '/..'
                            . '/public/css/fonts/feather-icons/sun.svg'
                        ) ?>
                        </span>

                        <span>Light</span>

                    <?php } else { ?>

                    <button class="theme-toggle-button button is-text has-text-centered is-block"
                    name="theme" type="submit" value="dark">

                        <span class="theme-toggle-moon">
                        <?php echo file_get_contents(
                            $_SERVER['DOCUMENT_ROOT']
                            . '/..'
                            . '/public/css/fonts/feather-icons/moon.svg'
                        ) ?>
                        </span>

                        <span>Dark</span>

                    <?php } ?>

                    </button>
                </form>
            </div>

        </div>
    </nav>
