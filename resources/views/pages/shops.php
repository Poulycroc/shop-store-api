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
  <div id="app" >
      <?php require __DIR__.'/../includes/nav.php'; ?>
      <div class="container">
          <h1><?= $shopName ?></h1>
          <section id="products" class="row">
              <?php
                  foreach ($products as $product){
              ?>
                    <div class="product col-12 col-sm-6 col-md-4 col-lg-3">
                      <b-card
                          no-body
                          style="max-width: 18rem;margin: 0px;padding-left: 0px;padding-right: 0px"
                          img-src="<?= $product['image']?>"
                          img-alt="<?= $product['name']?>"
                          img-top
                      >
                          <b-card-body>
                              <b-card-title><?= $product['name']?></b-card-title>
                              <b-card-sub-title class="mb-2"><?= $product['ref']?></b-card-sub-title>
                              <b-card-text>
                                  <?= $product['description']?>
                              </b-card-text>
                          </b-card-body>

                          <b-list-group flush>
                              <b-list-group-item><?= $product['price']?></b-list-group-item>
                          </b-list-group>

                          <b-card-body>
                              <a href="product/<?= $product['ref']?>" class="card-link">Détails</a>
                              <a href="#" class="card-link">ajouter au panier</a>
                          </b-card-body>
                      </b-card>
                    </div>
              <?php
              }
              ?>
          </section>
      </div>
  </div>
  <script type="text/javascript" src="<?= url('js/app.js') ?>"></script>
<?php require __DIR__.'/../includes/footer.php'; ?>
</body>
</html>
