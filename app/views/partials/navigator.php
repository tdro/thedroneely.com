<?php include $_SERVER['DOCUMENT_ROOT'] . '/..' . '/app/model/Navigation.php'; ?>

<?php $navigation = new Navigation(); ?>

    <nav class="navbar navbar__custom is-fixed-top" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">

                <?php $navigation->generatehomeButton(); ?>

                <div class="navbar-burger burger has-text-white" data-target="navMenu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
            </div>
            <div class="navbar-menu" id="navMenu">

            <div class="navbar-start">

                <div class="navbar-item">
                <div class="control">
                  <input class="navbar__search input" type="text">
                </div>
                </div>

            </div>

                <div class="navbar-end">

                <?php $navigation->generateNavBar(); ?>

                </div>
            </div>
        </div>
    </nav>
