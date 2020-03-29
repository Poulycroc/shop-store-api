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
  <div id="app" >
      <?php require __DIR__.'/../includes/nav.php'; ?>
      <div class="container">
          <h1><?= $pageName; ?></h1>
          <section id="products" class="row">
              <b-list-group>
                  <?php $total = 0;
                  foreach ($products as $product) {
                      ?>
                      <b-list-group-item class="flex-column align-items-start">
                          <div class="d-flex flex-row" style="margin-bottom: 25px;">
                              <div class="d-flex w-20 justify-content-start" style="width: 20%;">
                                  <img style="width: 100%;" src="<?= $product['image1']?>" alt="<?= $product['name']?>">
                              </div>

                              <div class="d-flex w-100 justify-content-between align-items-center" style="padding: 0px 15px;">
                                  <h5 class="mb-1"><?= $product['name']?> <small> (Quantité : <?= $product['quantity']?>)</small></h5>
                                  <small>Prix unitaire: <?= $product['price']?> €</small>
                              </div>
                          </div>

                          <p class="mb-1">
                              <?= substr($product['description'], 0, 240) . '...';?>
                          </p>
                          <div class="d-flex w-80 justify-content-between align-items-end flex-column">
                              <?php  $subtotal = (float)$product['quantity']*(float)$product['price'];
                              $total += $subtotal;?>
                              <small class="sub-tot">Sous-total: <?= $subtotal?>€</small>
                              <b-button variant="primary" href="/shops/<?= $shopName; ?>/product/<?= $product['ref']?>">
                                  Détails
                              </b-button>
                          </div>
                      </b-list-group-item>
                  <?php
                  }
                  ?>
                  <b-list-group-item class="flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between align-items-end flex-column">
                          <h5 class="mb-1 total">Total (T.V.A. incl.): <?= $total?> €</h5>
                          <b-button variant="primary">
                            Envoyer le panier à <?= $shopName?>
                          </b-button>
                      </div>
                  </b-list-group-item>
                </b-list-group>
          </section>
      </div>
  </div>
  <script type="text/javascript" src="<?= url('js/app.js') ?>"></script>
<?php require __DIR__.'/../includes/footer.php'; ?>
</body>
</html>
