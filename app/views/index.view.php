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

                    <video-container>
                      <video preload="none" poster="/images/pipes.png" width="732" autoplay="true" loop="true" muted="true">
                        <source src="/videos/pipes.mp4" type="video/mp4" />
                        Sorry, your browser doesn't support embedded videos.
                      </video>
                      <footer class="has-text-grey-dark">pipes.sh terminal screensaver</footer>
                    </video-container>

                    <div class="content">

                    <p class="introduction has-text-left">
                        <?php fetch('/cockpit/api/singletons/get/introduction', 'text'); ?>
                    </p>

                    <span class="quote marginnote leftnote">
                    <span class="has-text-weight-bold has-margin-bottom-sm is-block">Random Quote</span>
                    <?php echo shell_exec('fortune ' . dirname($_SERVER['DOCUMENT_ROOT']) . '/generators/fortune/quotes.fortune'); ?>
                    </span>

                    </div>

                    <div class="recent__article">

                    <label for="posts" class="title is-inline-block is-4 has-text-weight-normal marginnote-toggle marginnote-mark">
                       Recent Posts
                    </label>

                    <input type="checkbox" id="posts" class="marginnote-toggle">

                    <span class="marginnote rightnote">
                        See an archive of all posts <a href="/posts/archive/">here.</a>
                    </span>

                    <?php
                    $recentPosts = new DOMExtract();
                    $recentPosts->setSource($_SERVER['DOCUMENT_ROOT'] . '/posts/index.html');
                    echo $recentPosts->getInnerHTML('recent-article');
                    ?>

                    <a href="/posts/page/2/"
                    class="front__more is-block has-text-centered">
                        See More Posts
                        <?php icon('chevron-right'); ?>
                    </a>

                    <br>


                    <label for="projects" class="title is-inline-block is-4 has-text-weight-normal marginnote-toggle marginnote-mark">
                       Recent Projects
                    </label>

                    <input type="checkbox" id="projects" class="marginnote-toggle">

                    <span class="marginnote rightnote">
                        See an archive of all projects <a href="/projects/archive/">here.</a>
                    </span>

                    <?php
                    $recentProjects = new DOMExtract();
                    $recentProjects->setSource($_SERVER['DOCUMENT_ROOT'] . '/projects/index.html');
                    echo $recentProjects->getInnerHTML('recent-article');
                    ?>
                    </div>

                    <a href="/projects/page/2/"
                    class="front__more is-block has-text-centered">
                        See More Projects
                        <?php icon('chevron-right'); ?>
                    </a>

                    <br>

                </div>
            </div>
        </div>

    </section>

<?php require __DIR__ . '/partials/footer.php';?>

  </body>
</html>
