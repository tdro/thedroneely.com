<div class="hero-foot">

  <footer class="footer footer__custom">

      <div class="columns">

          <div class="column footer__left">

            <div class="has-text-centered">
              <div class="footer-left has-text-black is-size-7">

                <p>Design inspired by <a class="has-text-black" href="https://github.com/solutionroute/hugo-smorg">Smorg</a></p>
                <p>Built with <a class="has-text-black" href="https://secure.php.net/">PHP</a> | <a class="has-text-black" href="https://gohugo.io/">Hugo</a> | <a class="has-text-black" href="https://posativ.org/isso/">Isso</a></p>
                <p>&copy; Thedro Neely</p></li>

              </div>
            </div>

          </div>

          <div class="column footer__middle">

            <div class="has-text-centered">
              <div class="footer-left is-size-7">

                <p><a class="has-text-black" href="https://github.com/tdro">Github Profile</a></p>
                <p><a class="has-text-black" href="https://gitlab.com/tdro">Gitlab Repository</a></p>
                <p><a class="has-text-black" href="#">Contact Page</a></p>

              </div>
            </div>

          </div>

          <div class="column footer__right">

          <div class="has-text-centered is-size-7">
            <div>

              <p class="img__margin"><a href="/pgp.asc"><img src="/images/pgp.png" height="111" width="111" alt="PGP Key"></a></p>
              <p><a class="has-text-black" href="/pgp.asc">&mdash; PGP Public Key &mdash;</a></p>

            </div>
          </div>

          </div>

      </div>

  </footer>

</div>

</section>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "/"
  },
  "name": "Thedro Neely: Portfolio",
   "description": "Thedro's Personal Website",
  "author": {
    "@type": "Person",
     "name": "Thedro Neely",
    "email": "thedroneely@gmail.com"
  },
  "publisher": {
     "name": "Thedro Neely",
     "type": "Person"

  }
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});
</script>

<?php if (trim($_SERVER['REQUEST_URI'], '/') == 'contact') { ?>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<!-- development version, includes helpful console warnings -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->

<script>
    new Vue({
        el: '#contact-vue',
        data: {
            name: '',
            email: '',
            message: ''
        }

    });
</script>

<?php } ?>

</body>
</html>
