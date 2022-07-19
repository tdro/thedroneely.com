<?php require __DIR__ . '/partials/header.php';?>

<body>

<?php require __DIR__ . '/partials/navigator.php';?>

<main>
  <home-page>
    <article>

      <h1>Web <em>Developer </em></h1>

      <h2>In it for the long haul</h2>

      <video-container>
        <video preload="none" poster="/images/pipes.png" width="732" autoplay loop muted playsinline>
          <source src="/videos/pipes.mp4" type="video/mp4" />
          <p>
            Sorry, your browser doesn't support embedded videos. Here is a
            <a href="/videos/pipes.mp4">link to the video</a> instead.
          </p>
        </video>
        <footer><a href="https://github.com/pipeseroni/pipes.sh#readme">pipes.sh</a> terminal screensaver</footer>
      </video-container>

      <home-page-intro>
        <?php fetch('/cockpit/api/singletons/get/introduction', 'text'); ?>
      </home-page-intro>

      <fortune-quote>
        <margin-note left>
          <b>Random Quote</b>
          <?php echo shell_exec('fortune ' . dirname($_SERVER['DOCUMENT_ROOT']) . '/generators/fortune/quotes.fortune'); ?>
        </margin-note>
      </fortune-quote>

      <home-page-posts>

        <margin-note-aside>
          <label for="posts">Recent Posts</label>
          <input type="checkbox" id="posts" name="toggle">
          <margin-note right>
            See an archive of all posts <a href="/archives/posts/">here.</a>
          </margin-note>
        </margin-note-aside>

        <?php
          $recentPosts = new DOMExtract();
          echo $recentPosts->innerHTML('recent-articles', $_SERVER['DOCUMENT_ROOT'] . '/posts/index.html');
        ?>

        <a href="/posts/page/2/">
          See More Posts
          <?php echo icon('corner-down-right'); ?>
        </a>
      </home-page-posts>

      <br>

      <home-page-projects>

        <margin-note-aside>
          <label for="projects">Recent Projects</label>
          <input type="checkbox" id="projects" name="toggle">
          <margin-note right>
            See an archive of all projects <a href="/archives/projects/">here.</a>
          </margin-note>
        </margin-note-aside>

        <?php
          $recentProjects = new DOMExtract();
          echo $recentPosts->innerHTML('recent-articles', $_SERVER['DOCUMENT_ROOT'] . '/projects/index.html');
        ?>

        <a href="/projects/page/2/">
          See More Projects
          <?php echo icon('corner-down-right'); ?>
        </a>
      </home-page-projects>

      <br>

    </article>
  </home-page>
</main>

<?php require __DIR__ . '/partials/footer.php';?>

</body>
</html>
