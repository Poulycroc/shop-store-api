<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $shopName; ?></title>
  <link rel="stylesheet" type="text/css" href="<?= url('css/app.css') ?>">
</head>
<body>
<?php require __DIR__.'/../includes/nav.php'; ?>
  <div id="app" class="container">
      <h1>Ceci est la page boutique nomée : <?= $shopName ?></h1>

      <h2>Produits</h2>
      <section id="products" class="row">
          <?php
              foreach ($products as $product){
          ?>
                <div class="product col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="product/<?= $product['ref']?>" title="<?= $product['name']?>">
                        <h3><?= $product['name']?></h3>
                        <img style="width: 100%;" src="<?= $product['image']?>" alt="<?= $product['name']?>">
                        <p><?= $product['description']?></p>
                        <p><?= $product['price']?></p>
                        <sub><?= $product['ref']?></sub>
                    </a>
                </div>
          <?php
          }
          ?>
      </section>
  </div>
  <script type="text/javascript" src="<?= url('js/app.js') ?>"></script>
<?php require __DIR__.'/../includes/footer.php'; ?>
</body>
</html>
