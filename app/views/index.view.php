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

                    <?php
                    $width = getimagesize($_SERVER['DOCUMENT_ROOT'] . '/images/mountains.jpg')[0];
                    $height = getimagesize($_SERVER['DOCUMENT_ROOT'] . '/images/mountains.jpg')[1];
                    $ratio = ((($height / $width) * 100) > 100) ? $height . 'px' : $height / $width * 100 . '%';
                    ?>

                    <figure>
                      <a href="/images/mountains.jpg" onclick="return false;">
                        <div style="<?php echo 'padding-bottom:' . $ratio . ';'; ?>">
                          <img data-image-zoom alt="Mountains" src="/images/mountains.jpg"
                            width="<?php echo $width; ?>"
                            height="<?php echo $height; ?>"
                          >
                        </div>
                      </a>
                    </figure>

                    <div class="content">

                    <p class="introduction has-text-left">
                        <?php fetch('/cockpit/api/singletons/get/introduction', 'text'); ?>
                    </p>

                    <span class="quote marginnote leftnote">
                    <span class="has-text-weight-bold has-margin-bottom-sm is-block">Random Quote</span>
                    <?php $quote = shell_exec('fortune quotes'); ?>
                    <?php echo $quote; ?>
                    </span>

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
                        <?php featherIcon('chevron-right'); ?>
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

                    <a href="/projects/page/2/"
                    class="front__more is-block has-text-centered">
                        See More Projects
                        <?php featherIcon('chevron-right'); ?>
                    </a>

                    <br>

                </div>
            </div>
        </div>

    </section>

<?php require __DIR__ . '/partials/footer.php';?>

  </body>
</html>
