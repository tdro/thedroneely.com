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

    <link href="https://transloadit.edgly.net/releases/uppy/v1.0.0/uppy.min.css" rel="stylesheet">
    <script src="https://transloadit.edgly.net/releases/uppy/v1.0.0/uppy.min.js"></script>

    <script>
     var uppy = Uppy.Core()
        .use(Uppy.Url, { companionUrl: 'https://companion.uppy.io/' })
        .use(Uppy.Webcam, {})
        .use(Uppy.Dashboard, { inline: true, target: '#file-upload-area',  plugins: ['Url', 'Webcam'] })
        .use(Uppy.XHRUpload, {endpoint: '/upload/', formdata: true, fieldName: 'upload' })
    </script>

    <style>
        .uppy-DashboardAddFiles { border: 2px dashed #333; }
        .uppy-size--md .uppy-Dashboard-inner { margin: 0 auto; }
    </style>

  <?php require __DIR__ . '/partials/footer.php';?>

    </body>
</html>
