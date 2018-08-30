<?php require __DIR__ . '/partials/header.php'; ?>

    <body>

    <section class="section hero" itemscope itemtype="http://schema.org/WebPage">

    <div class="hero-head">

    <?php require __DIR__ . '/partials/navigator.php'; ?>

    </div>

<div id="contact-vue">
    <div class="hero-body">
        <div class="container">
            <div class="columns">

                <div class="contact-notification notification is-success">
                  <button class="delete"></button>
                  <p class="is-size-7">
                    <strong>Message delivered.</strong>
                    <br>
                    Thank you for your message.
                    <br>
                    <a href="#">Return to the home page</a>
                 </p>
                </div>

                <div class="column is-6 is-offset-3 has-text-centered">
                    <h1 class="title is-3">Contact</h1>

                    <div class="content">

                    <p>
                    Interested in collaborating together?
                    Complete the form below with basic info about your project or idea.
                    Please allow 24-48 hours for a response.
                    </p>

                    </div>

                        <form method="post" action="/?sent">

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field is-expanded">
                                    <label class="label">Name <span class="alert" v-show="!name">*</span></label>
                                        <div class="field has-addons">
                                            <p class="control is-expanded">
                                              <input v-model="name" class="input" type="text" name="26471" placeholder="Jason Response">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="field is-expanded">
                                        <label class="label">Email <span class="alert" v-show="!email">*</span></label>
                                            <div class="field has-addons">
                                                <p class="control is-expanded">
                                                  <input v-model="email" class="input" type="email" name="26472" placeholder="user@domain.com">
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <label class="label">Message <span class="alert" v-show="!message">*</span></label>
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
                                    <button class="button is-primary">
                                      Send message
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>

                           <input type="checkbox" name="contact" class="form" tabindex="-1" autocomplete="off">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    <!-- <pre>{{ $data | json }} </pre> -->
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
