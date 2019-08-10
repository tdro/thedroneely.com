<?php $title = 'Upload Files - ' ?>

<?php require __DIR__ . '/partials/header.php';?>

    <body>

<?php require __DIR__ . '/partials/navigator.php';?>

    <section class="section" itemscope itemtype="http://schema.org/HomePage">
        <div class="container">

            <h1 class="title has-text-centered">Upload Files</h1>
            <div id="file-upload-area"></div>

        </div>
    </section>

    <link href="/css/uppy.min.css" rel="stylesheet">
    <script src="/js/uppy.min.js"></script>

    <script>
     var uppy = Uppy.Core()
        .use(Uppy.Url, { companionUrl: 'https://www.thedroneely.com/' })
        .use(Uppy.Webcam, {})
        .use(Uppy.Dashboard, { inline: true, target: '#file-upload-area',  plugins: ['Url', 'Webcam'] })
        .use(Uppy.XHRUpload, {endpoint: '/upload/', formdata: true, fieldName: 'upload' })
    </script>

  <?php require __DIR__ . '/partials/footer.php';?>

    </body>
</html>
