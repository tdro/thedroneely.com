<?php require __DIR__ . '/partials/header.php';?>

    <body>

<?php require __DIR__ . '/partials/navigator.php';?>

    <section class="section" itemscope itemtype="http://schema.org/HomePage">

        <div class="container">
            <div class="columns is-centered">
                <div class="column is-7">

                    <h1 class="title has-text-weight-normal">
                        <span>
                            Web
                            <span class="has-text-danger">
                                Developer
                            </span>
                        </span>
                    </h1>

                    <h2 class="subtitle has-text-grey-dark has-text-weight-normal">
                        In it for the long haul
                    </h2>

                    <img alt="Mountains" src="/images/mountains.jpg"
                    width="<?php echo getimagesize(
                        $_SERVER['DOCUMENT_ROOT'] . '/images/mountains.jpg'
                    )[0]; ?>"
                    height="<?php echo getimagesize(
                        $_SERVER['DOCUMENT_ROOT'] . '/images/mountains.jpg'
                    )[1]; ?>" >

                    <div class="content">

                    <br>

                    <p class="has-text-left">
                        My name is Thedro <span class="has-text-grey-dark">[/tee:dro/]</span> &mdash;
                        a web developer and <a href="https://en.wikipedia.org/wiki/Linux">linux and unix-like</a>
                        system administrator.
                        There are many different tools and programming languages I've come across.
                        Welcome to my corner of the web. Here you'll find things I've
                        worked on as well as other interesting discoveries.
                    </p>

                    </div>

                    <div class="recent__article">

                    <h1 class="title has-text-weight-normal">Recent Posts</h1>

                    <?php
                    $recentPosts = new DOMExtract();
                    $recentPosts->setSource($_SERVER['DOCUMENT_ROOT'] . '/posts/index.html');
                    echo $recentPosts->getInnerHTML('recent-article');
                    ?>

                    <a href="/post/"
                        class="front__more is-block has-text-right has-text-centered-mobile">
                        See All Posts
                        <?php echo file_get_contents(
                            $_SERVER['DOCUMENT_ROOT']
                            . '/..'
                            . '/public/css/fonts/feather-icons/chevron-right.svg'
                        ); ?>
                    </a>

                    <br>

                    <h1 class="title has-text-weight-normal">Recent Projects</h1>

                    <?php
                    $recentProjects = new DOMExtract();
                    $recentProjects->setSource($_SERVER['DOCUMENT_ROOT'] . '/projects/index.html');
                    echo $recentProjects->getInnerHTML('recent-article');
                    ?>
                    </div>

                    <a href="/project/"
                    class="front__more is-block has-text-right has-text-centered-mobile">
                        See All Projects
                        <?php echo file_get_contents(
                            $_SERVER['DOCUMENT_ROOT']
                            . '/..'
                            . '/public/css/fonts/feather-icons/chevron-right.svg'
                        ); ?>
                    </a>

                    <br>

                </div>
            </div>
        </div>

    </section>

<?php require __DIR__ . '/partials/footer.php';?>

  </body>
</html>
