    <nav id="navbar" class="navbar navbar__custom is-fixed-top" aria-label="main navigation">
        <div class="container">

            <div class="navbar-brand">

                <a href="/" class="has-text-white">
                    <div class="navbar__mobile navbar__custom has-text-weight-semibold navbar-item">Home</div>
                </a>

                <div id="navBurger" class="navbar-burger burger has-text-white" data-target="navMenu">
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

                <!-- <div class="navbar-start">

                    <div class="navbar-item">
                    <div class="control">
                      <input class="navbar__search input" type="text">
                    </div>
                    </div>

                </div> -->

                <div class="columns is-centered heading is-size-7">

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
