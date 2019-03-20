<div class="hero-foot">

<br>

  <footer class="footer">
    <div class="container">

      <div class="columns is-centered">

        <div class="column is-6">

          <div class="footer__section has-text-centered">

            <a href="/rss.xml">
              <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/rss.svg') ?>
            </a>

            <a href="/resume">
              <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/help-circle.svg') ?>
            </a>

            <a href="https://www.thedroneely.com/git/explore/repos">
              <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/git-merge.svg') ?>
            </a>

            <a href="https://gitlab.com/tdro">
              <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/gitlab.svg') ?>
            </a>

            <a href="https://github.com/tdro">
              <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/github.svg') ?>
            </a>

            <a href="#">
              <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/arrow-up.svg') ?>
            </a>

            <p class="has-text-grey-dark is-size-7">
              Copyright &copy; <?php echo date("Y"); ?> Thedro Neely
            </p>

          </div>

        </div>

      </div>

    </div>
  </footer>

</div>

</section>

<script src="/dist/app.js"></script>

<?php if (trim($_SERVER['REQUEST_URI'], '/') == 'contact') { ?>

<script src="/js/VueDevelopment.js"></script>

<?php } ?>
