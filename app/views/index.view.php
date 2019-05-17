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

                    <img image-zoom alt="Mountains" src="/images/mountains.jpg"
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

                    <label for="posts" class="title is-inline-block is-4 has-text-weight-normal marginnote-toggle marginnote-mark">
                       Recent Posts
                    </label>

                    <input type="checkbox" id="posts" class="marginnote-toggle">

                    <span class="marginnote rightnote">
                        See an archive of all posts <a class="underline" href="/posts/archive/">here.</a>
                    </span>

                    <?php
                    $recentPosts = new DOMExtract();
                    $recentPosts->setSource($_SERVER['DOCUMENT_ROOT'] . '/posts/index.html');
                    echo $recentPosts->getInnerHTML('recent-article');
                    ?>

                    <a href="/posts/page/2/"
                        class="front__more is-block has-text-centered">
                        See More Posts
                        <?php echo file_get_contents(
                            $_SERVER['DOCUMENT_ROOT']
                            . '/..'
                            . '/public/css/fonts/feather-icons/chevron-right.svg'
                        ); ?>
                    </a>

                    <br>


                    <label for="projects" class="title is-inline-block is-4 has-text-weight-normal marginnote-toggle marginnote-mark">
                       Recent Projects
                    </label>

                    <input type="checkbox" id="projects" class="marginnote-toggle">

                    <span class="marginnote rightnote">
                        See an archive of all projects <a class="underline" href="/projects/archive/">here.</a>
                    </span>

                    <?php
                    $recentProjects = new DOMExtract();
                    $recentProjects->setSource($_SERVER['DOCUMENT_ROOT'] . '/projects/index.html');
                    echo $recentProjects->getInnerHTML('recent-article');
                    ?>
                    </div>

                    <a href="/projects/"
                    class="front__more is-block has-text-centered">
                        See More Projects
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
