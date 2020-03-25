<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageName; ?></title>
  <link rel="stylesheet" type="text/css" href="<?= url('css/app.css') ?>">
</head>
<body>
  <div id="app">
    <h1>Hello, <?= $pageName; ?></h1>
    <example-component></example-component>
  </div>
  <script type="text/javascript" src="<?= url('js/app.js') ?>"></script>
</body>
</html>