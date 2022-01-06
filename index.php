<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Mon super premier site</title>
  <meta name="description" content="Mon site en local">
  <meta name="author" content="Alexandre Delaistre">

  <meta property="og:title" content="Mon super site en local">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://urldemonsite.com">
  <meta property="og:description" content="Ce site est mon premier, soyez indulgent !">
  <!--meta property="og:image" content="image.png"-->

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <?php
      include './src/devtool/debug.devtool.php';
    //   $_GET['variable'] //index string obligatoirement

    // $dir = "../src/devtool";
    $directory = './src/devtool/';
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

      foreach ( $iterator as $path ) {
          if ($path->isDir()) {
              debug($path->__toString());
          } else {
              debug($path->__toString());
          }}
    //   $directory = new \RecursiveDirectoryIterator($path);
    //   $iterator = new \RecursiveIteratorIterator($directory);
    //   $files = array();
    //   foreach ($iterator as $info) {
    //     if (...custom conditions...) {
    //       $files[] = $info->getPathname();
    //     }
    //   }
    ?>
    <script src="js/scripts.js"></script>
</body>
</html>