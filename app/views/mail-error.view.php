<?php require __DIR__ . '/partials/header.php'; ?>

<body>

    <section class="section hero is-fullheight" itemscope itemtype="http://schema.org/WebPage">

    <div class="hero-head">

    <?php require __DIR__ . '/partials/navigator.php'; ?>

    </div>

    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-7 has-text-centered">

                    <br>
                    <p><?php echo 'The message could not be sent. <br> Mailer Reply:'. "\r", $mailError; ?></p>
                    <br>
                    <a href="/contact"><b>Return to the Contact Page</b></a>
                    <br>

                </div>
            </div>
        </div>
    </div>

<?php require __DIR__ . '/partials/footer.php'; ?>

  </body>
</html>
