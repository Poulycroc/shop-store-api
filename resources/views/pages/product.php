<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $shop_id; ?> - <?= $product['name']; ?></title>
  <link rel="stylesheet" type="text/css" href="<?= url('css/app.css') ?>">
</head>
<body>
  <div id="app" >
      <?php require __DIR__.'/../includes/nav.php'; ?>
      <div class="container">
          <section id="product" class="row" style="margin: 25px;">
              <b-card no-body class="overflow-hidden" style="max-width: 100%;">
                  <b-row no-gutters style="justify-content: space-between;padding: 0px 30px 15px 30px;">
                      <b-col md="4" class="slider">
                          <b-carousel
                              id="carousel-no-animation"
                              indicators
                              img-height="350"
                          >
                              <b-carousel-slide
                                  img-src="<?= $product['image1']; ?>"
                                ></b-carousel-slide>
                              <b-carousel-slide
                                  img-src="<?= $product['image2']; ?>"
                              ></b-carousel-slide>
                              <b-carousel-slide
                                  img-src="<?= $product['image3']; ?>"
                              ></b-carousel-slide>
                          </b-carousel>
                      </b-col>
                      <b-col md="8">
                          <b-card-body title="<?= $product['name']; ?>">
                          <b-card-sub-title class="mb-2">#<?= $product['ref']?></b-card-sub-title>
                              <b-card-text>
                                  <?= $product['description']; ?>
                              </b-card-text>
                          </b-card-body>
                      </b-col>
                      <b-button class="btnReturn" variant="primary" href="/<?= $shop_id; ?>">
                          <svg class="bi bi-arrow-90deg-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M6.104 2.396a.5.5 0 010 .708L3.457 5.75l2.647 2.646a.5.5 0 11-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                              <path fill-rule="evenodd" d="M2.75 5.75a.5.5 0 01.5-.5h6.5a2.5 2.5 0 012.5 2.5v5.5a.5.5 0 01-1 0v-5.5a1.5 1.5 0 00-1.5-1.5h-6.5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
                          </svg> Retour au shop
                      </b-button>

                      <b-button class="btnCart" variant="primary">
                              <?= $product['price']?>
                          <svg style="margin-left: 5px;" class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                              <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
                              <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                          </svg>
                      </b-button>
                  </b-row>
              </b-card>
          </section>
      </div>
  </div>
  <script type="text/javascript" src="<?= url('js/app.js') ?>"></script>
<?php require __DIR__.'/../includes/footer.php'; ?>
</body>
</html>
