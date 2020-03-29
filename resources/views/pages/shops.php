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
                          img-src="<?= $product['image1']?>"
                          img-alt="<?= $product['name']?>"
                          img-top
                      >
                          <b-card-body>
                              <b-card-title><?= $product['name']?></b-card-title>
                              <b-card-sub-title class="mb-2">#<?= $product['ref']?></b-card-sub-title>
                              <b-card-text>
                                  <?= substr($product['description'], 0, 55) . '...';?>
                              </b-card-text>
                          </b-card-body>

                          <b-card-body style="justify-content: space-between;display: flex;">
                              <b-button variant="primary" href="/shops/<?= $shopName; ?>/product/<?= $product['ref']?>">
                                  Détails
                              </b-button>
                              <b-button variant="primary">
                                  <?= $product['price']?>
                                  <svg style="margin-left: 5px;" class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                                      <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
                                      <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                                  </svg>
                              </b-button>

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
