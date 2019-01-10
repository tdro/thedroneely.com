<?php require __DIR__ . '/partials/header.php'; ?>

    <body>

    <?php require __DIR__ . '/partials/navigator.php'; ?>

    <section class="section" itemscope itemtype="http://schema.org/WebPage">

    <div id="contact-vue">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-8">

                    <article class="content">

                        <h1 class="title is-3">Contact</h1>

                        <p>
                        Interested in collaborating together?
                        Complete the form below with basic info about your project or idea.
                        </p>

                        <form method="post" action="/?sent">

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field is-expanded">
                                    <label class="heading is-size-6">Name <span class="alert" v-show="!name">*</span></label>
                                        <div class="field has-addons">
                                            <p class="control is-expanded">
                                              <input v-model="name" class="input" type="text" name="26471" placeholder="Jason Response">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="field is-expanded">
                                        <label class="heading is-size-6">Email <span class="alert" v-show="!email">*</span></label>
                                            <div class="field has-addons">
                                                <p class="control is-expanded">
                                                  <input v-model="email" class="input" type="email" name="26472" placeholder="user@domain.com">
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <label class="heading is-size-6">Message <span class="alert" v-show="!message">*</span></label>
                                <div class="field is-horizontal">
                                  <div class="field-body">
                                    <div class="field">
                                      <div class="control">
                                        <textarea v-model="message" class="textarea" name="26478" placeholder="How would you describe your project?"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                            <br>

                            <div class="field is-horizontal">
                              <div class="field-body">
                                <div class="field">
                                  <div class="control">
                                    <button class="button is-primary contact__button has-text-weight-normal">
                                      Send message
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>

                           <input type="checkbox" name="contact" class="form" tabindex="-1" autocomplete="off">

                        </form>

                    </article>

                </div>
            </div>
        </div>
    </div>

<?php require __DIR__ . '/partials/footer.php'; ?>

  </body>
</html>
