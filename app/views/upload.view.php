<?php $title = 'Upload Files - ' ?>

<?php require __DIR__ . '/partials/header.php';?>

<body>

<?php require __DIR__ . '/partials/navigator.php';?>

  <main>
    <article>
      <upload-page>
        <h1>Upload Files</h1>
        <div id="file-upload-area"></div>
      </upload-page>
    </article>
  </main>

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
