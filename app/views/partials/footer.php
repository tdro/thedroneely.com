<div class="hero-foot">

<footer class="footer has-text-left">

<div class="container">
<div class="columns">

  <div class="column">


      <div class="footer__custom">

        <p class="has-text-grey is-size-7">Design inspired by <a href="https://github.com/solutionroute/hugo-smorg">Smorg</a></p>
        <p class="has-text-grey is-size-7">Built with <a href="https://secure.php.net/">PHP</a> | <a href="https://gohugo.io/">Hugo</a> | <a href="https://posativ.org/isso/">Isso</a></p>
        <p class="has-text-grey is-size-7">&copy; Thedro Neely</p>
        <hr>

      </div>


  </div>

  <div class="column">


      <div class="footer__custom">

        <p class="has-text-grey is-size-7" ><a href="https://github.com/tdro">Github Profile</a></p>
        <p class="has-text-grey is-size-7" ><a href="https://gitlab.com/tdro">Gitlab Repository</a></p>
        <p class="has-text-grey is-size-7" ><a href="/rss.xml">RSS Syndication</a></p>
        <hr>

      </div>


  </div>

   <div class="column">

    <div class="has-text-centered has-text-grey is-size-7">

        <p><a href="/pgp.asc"><img src="/images/pgp.png" height="111" width="111" alt="PGP Key"></a></p>
        <p><a href="/pgp.asc">&mdash; PGP Public Key &mdash;</a></p>

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

<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

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
