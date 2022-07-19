<?php $title = 'Contact - ' ?>

<?php require __DIR__ . '/partials/header.php'; ?>

<body>

<?php require __DIR__ . '/partials/navigator.php'; ?>

<main>
  <contact-page>
    <article>

      <h1>Contact</h1>

      <?php if (isset($formSuccess)) : ?>
        <aside>
          <p>Your message has been successful. I'll get in touch with you soon!</p>
        </aside>
      <?php endif; ?>

      <p>
        Interested in collaborating? Complete and submit the form below to send me a
        direct message.
      </p>

      <form method="post" action="/contact/">

        <field-set>

          <section>
            <label for="name">Name</label>
            <input
              id="name"
              type="text"
              name="26471"
              value="<?php echo $name ?? '' ?>"
            >
          </section>

          <section>
            <label for="email">Email <span data-danger>*</span></label>
            <input
              required
              id="email"
              type="email"
              name="26472"
              value="<?php echo $email ?? '' ?>"
              <?php echo $border = isset($emailError) ? 'data-contact-required' : '';?>
            >
          </section>

        </field-set>

        <label for="message">Message <span data-danger>*</span></label>
        <textarea
          id="message"
          name="26478"
          placeholder="" required
        ><?php echo $message ?? '' ?> </textarea>

        <button>
          <?php echo icon('send'); ?>
          <span>Send Message</span>
        </button>

        <input type="checkbox" name="agree" tabindex="-1">

      </form>

      </article>
    </contact-page>
  </main>

<?php require __DIR__ . '/partials/footer.php'; ?>

  </body>
</html>
