<?php require __DIR__ . '/partials/header.php'; ?>

    <body>

<?php require __DIR__ . '/partials/navigator.php'; ?>

    <section class="section hero" itemscope itemtype="http://schema.org/HomePage">

    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-8">

                    <br>

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

                    <img alt="Mountains" width="960" height="480" src="/images/mountains.jpg">

                    <div class="content">

                    <br>

                    <p class="has-text-left has-text-black line__height">
                        My name is Thedro (<span class="has-text-grey-dark">tee-dro</span>) &mdash;
                        a web developer and self-taught
                        <a href="https://en.wikipedia.org/wiki/Linux">linux and unix-like</a>
                        system administrator.
                        There are many different tools and programming languages I've come across.
                        Welcome to my corner of the web. Here you'll find things I've
                        worked on as well as other interesting discoveries.
                    </p>

                    </div>

                    <div class="columns">

                        <div class="column has-text-centered">
                            <div class="front__textbox has-text-left-desktop is-inline-block">

                                <h3 class="has-text-dark is-marginless is-size-5">
                                    Recent Posts
                                </h3>

                                <?php
                                $recent_posts = file($_SERVER['DOCUMENT_ROOT'] . '/post/index.html');
                                foreach (range(count($recent_posts) - 32,  count($recent_posts) - 24) as $line) {
                                    echo $recent_posts[$line];
                                }
                                ?>

                                <br>
                                <br>

                                <a class="front__frame" href="post/">More posts <span class="icon">➤</span></a>

                            </div>
                        </div>

                        <div class="column has-text-centered">
                            <div class="front__textbox has-text-left-desktop is-inline-block">

                                <h3 class="has-text-dark is-marginless is-size-5">
                                    Recent Projects
                                </h3>

                                <?php
                                $recent_projects = file($_SERVER['DOCUMENT_ROOT'] . '/post/index.html');
                                foreach (range(count($recent_projects) - 15,  count($recent_projects) - 7) as $line) {
                                    echo $recent_projects[$line];
                                }
                                ?>

                                <br>
                                <br>

                                <a class="front__frame" href="project/">More projects <span class="icon">➤</span></a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

<section>

<?php require __DIR__ . '/partials/footer.php'; ?>

  </body>
</html>
