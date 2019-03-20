    <nav id="navbar" class="navbar navbar__custom is-fixed-top" aria-label="main navigation">
        <div class="container">

            <div class="navbar-brand navbar__mobile__compact">

                <a href="/" class="navbar-item navbar__icon <?php echo $navigation->isActiveHome() ?? 'has-text-gray' ?>">
                    <div class="has-text-centered">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/home.svg') ?>
                    <p class="is-size-7 navbar__icon__align">Home</p>
                    </div>
                </a>

                <a href="/post/" class="navbar-item navbar__icon <?php echo $navigation->isActive('/post/') ?? 'has-text-gray' ?>">
                    <div class="has-text-centered">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/book-open.svg') ?>
                    <p class="is-size-7 navbar__icon__align">Posts</p>
                    </div>
                </a>

                <a href="/project/" class="navbar-item navbar__icon <?php echo $navigation->isActive('/project/') ?? 'has-text-gray' ?>">
                    <div class="has-text-centered">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/layers.svg') ?>
                    <p class="is-size-7 navbar__icon__align">Projects</p>
                    </div>
                </a>

                <a href="/contact/" class="navbar-item navbar__icon <?php echo $navigation->isActive('/contact/') ?? 'has-text-gray' ?>">
                    <div class="has-text-centered">
                    <?php echo file_get_contents(
                        $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/public/css/fonts/feather-icons/mail.svg'
                    ) ?>
                    <p class="is-size-7 navbar__icon__align">Contact</p>
                    </div>
                </a>

                <div id="navBurgerCompact" class="navbar-burger burger navbar__icon has-text-dark" data-target="navMenu">
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

                <div id="navBurger" class="navbar-burger burger has-text-dark" data-target="navMenu">
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

                    <div class="navbar__left column is-2">
                        <?php require $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/app/views/partials/navigator.home.php'; ?>
                    </div>

                    <div class="navbar__right column is-5">
                        <?php require $_SERVER['DOCUMENT_ROOT']
                        . '/..' . '/app/views/partials/navigator.links.php'; ?>
                    </div>

                </div>

            </div>

        </div>
    </nav>
