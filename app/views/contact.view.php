<?php $title = 'Contact - ' ?>

<?php require __DIR__ . '/partials/header.php'; ?>

    <body>

    <?php require __DIR__ . '/partials/navigator.php'; ?>

    <section class="section" itemscope itemtype="http://schema.org/WebPage">

        <div class="container">
            <div class="columns is-centered">
                <div class="column is-7">

                    <article class="content">

                        <h1 class="title is-3">Contact</h1>

                        <?php if (isset($formSuccess)) : ?>
                        <div class="message__success" role="alert">
                        <p>Your message has been successful. I'll get in touch with you soon!</p>
                        </div>
                        <?php endif; ?>

                        <p>
                        Interested in collaborating?
                        Complete and submit the form below to send me a direct message.
                        </p>

                        <form method="post" action="/contact/">

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field is-expanded">
                                    <label for="name" class="heading is-size-6">Name</label>
                                        <div class="field has-addons">
                                            <p class="control is-expanded">
                                              <input id="name" class="input" type="text" name="26471" value="<?php echo $name ?? '' ?>">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="field is-expanded">
                                        <label for="email" class="heading is-size-6">Email <span class="alert">*</span></label>
                                        <div class="field has-addons">
                                            <p class="control is-expanded">
                                              <input id="email" class="input <?php echo $border = isset($emailError) ? 'is-danger' : '';?>"
                                              type="email" name="26472" value="<?php echo $email ?? '' ?>" required>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <label for="message" class="heading is-size-6">Message <span class="alert">*</span></label>

                            <div class="field is-horizontal">
                              <div class="field-body">
                                <div class="field">
                                  <div class="control">
                                    <textarea id="message" class="textarea" name="26478" placeholder="" required><?php echo $message ?? '' ?></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <br>

                            <div class="field is-horizontal">
                              <div class="field-body">
                                <div class="field">
                                  <div class="control">
                                    <button class="button is-link is-outlined has-text-weight-normal">
                                      Send message
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>

                           <input type="checkbox" name="agree" class="agree" tabindex="-1">

                        </form>

                    </article>

                </div>
            </div>
        </div>

    </section>

<?php require __DIR__ . '/partials/footer.php'; ?>

  </body>
</html>
