<?php require __DIR__ . '/partials/header.php'; ?>

    <body>

<?php require __DIR__ . '/partials/navigator.php'; ?>


<div class="hero-body">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-7">

                <?php $hugo = shell_exec('cd ../generators/hugo; hugo; echo $?'); ?>
                <pre><?php echo $hugo; ?></pre>

            </div>
        </div>
    </div>
</div>


<?php require __DIR__ . '/partials/footer.php'; ?>
