    <nav id="navbar" class="navbar navbar__custom is-fixed-top" aria-label="main navigation">
        <div class="container">

            <div class="navbar-brand">

                <a href="/" class="has-text-white">
                    <div class="navbar__mobile navbar__custom navbar-item">Home</div>
                </a>

                 <a href="/project" class="has-text-white">
                    <div class="navbar__mobile navbar__custom navbar-item">Projects</div>
                </a>

                <div id="navBurger" class="navbar-burger burger has-text-dark" data-target="navMenu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>

            </div>

            <div id="navMenu" class="navbar__mobile navbar-menu">

                <div class="navbar-end">
                    <?php $navigation->generatehomeButton(); ?>
                    <?php $navigation->generateNavBar(); ?>
                </div>

        </div>

            <div class="navbar__desktop navbar-menu">

                <div class="columns is-centered">

                    <div class="navbar__left column is-3">
                        <?php $navigation->generatehomeButton(); ?>
                    </div>

                    <div class="navbar__right column is-5">
                        <?php $navigation->generateNavBar(); ?>
                    </div>

                </div>

            </div>

        </div>
    </nav>
