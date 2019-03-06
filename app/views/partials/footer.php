<div class="hero-foot">

<br>

  <footer class="footer">
    <div class="container">

      <div class="columns is-centered">

        <div class="column is-2">

            <p class="has-text-grey-dark has-text-centered-mobile is-size-7">
               <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAACrAQMAAAAjJv5aAAAABlBMVEUAAAD///+l2Z/dAAAAAnRSTlP//8i138cAAAAJcEhZcwAACxIAAAsSAdLdfvwAAALJSURBVEiJ5Ze9jeQwDIUpOFBmNyBAbShTS3YD/mnAbkmZ2xCgBuRMgWDe03r29oILjk7PGAzsbwYaUXx85BD/9aL/G2ei2cWe0hXs7e0VSMnxxXV2aQuRyIye1Akix8GM2iiOC9td83bS9AovZxy4y65jTsdbPBNvoRKlWzO/w4iSTO/jEuyqafkj+H/HOO/pND+vnzQIMK4rxNnVJaSD6/IjCAHOmoi67BElLcWQbp9I8VW6lWz21CPEUEcygxwDkGvxzZr3tnBc5Pg6u+tM2RsVqipxdJ+fFOGbDPkW2XF2mewW7PUG26yb9AaOqvDBNMjxVepQ7IateajPTOVZW4azQyXFWeMT7DHO9Mm8CHOISBSOXDEyj7pMmxxn3eR/+3Q7FBY2GJUc3xppT3w2Dc7ajC6xHPOJ4Kj3ZvZwLLNwVXKcPayu25pRwW/sxt0lxxDg7dKugVGX3RHiIMfZoRpoKpW0zS5BhoccXyeKsrubQ5hex5Y6Ob49EsW7r9NpueBbj1fJMDflptzswa5fIprk+GK0oDpqRIl3GumzbxG+Pa/EKwKF38CGy8chZLi11trrbsXaZNfvtUUYWVo1jAH5pxE12jqbGDO6q4PT4AkahKKfzMvwjcVgDB4l3lwTyZ/k+ILxO7t6FBZ+p07fhifCubURpK6dN9oRlKjkGI1doapw2B4+AR09nUSGc6ukSB6drd2v7tvwJBjnNBWUFLwBN9jdGwyzXDGwUIJ8hoJHs7zAPvbtvFtR7pCSr28w4QkNBK+0+3QVeoEzenuxXxOH/dqs3eQYVybYLeYvzHTwmKcxyjCmsNHXGfo921Sozt/DmQBjHoThrR7q644Co+qOFzg8gw+8ihRqlJ6kiTFG7NVh8G/esLtPg5HiiWvvoCDMUPYoZnqBEWVzF3gDqZKgAiXHbUZG5h2qE6ZV25gsx7K/WP8D/gXGiTnQ96NZQAAAAABJRU5ErkJggg=="
                        height="100" width="100" alt="Contact Card">
            </p>

        </div>

        <div class="column is-4">

          <div class="footer__section">

            <p class="has-text-grey-dark has-text-centered-mobile is-size-7">
              Design inspired by
              <a href="https://github.com/solutionroute/hugo-smorg">Smorg</a> &mdash;
               Built with <a href="https://secure.php.net/">PHP</a> |
              <a href="https://gohugo.io/">Hugo</a> |
              <a href="https://posativ.org/isso/">Isso</a> &mdash;
              See my <a href="https://www.thedroneely.com/git/explore/repos">Git</a> |
              <a href="http://gitea.local.lan">Github</a> |
              <a href="https://gitlab.com/tdro">Gitlab</a> &mdash;
              Subscribe to <a href="/rss.xml">RSS Feed</a> &mdash;
              Chat at <a href="https://keybase.io/tdro">Keybase</a> &mdash;
              Profile on <a href="https://dev.to/tdro">DEV</a> &mdash;
              View my <a href="/resume">Resume</a>
            </p>

          </div>

        </div>

        <div class="column has-text-right has-text-centered-mobile is-1">
           <a class="has-text-black" href="#">
            <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/..' . '/public/css/fonts/feather-icons/arrow-up.svg') ?>
          </a>
        </div>

      </div>

      <div class="columns is-centered">

        <div class="column is-7">
          <p class="has-text-grey-dark has-text-centered is-size-7">
          Copyright &copy; Thedro Neely <?php echo date("Y"); ?>. All rights reserved.
          </p>
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
