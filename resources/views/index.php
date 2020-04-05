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
      <?php require __DIR__.'/includes/nav.php'; ?>
      <div class="container">

      <h1><?= $pageName; ?></h1>
          <section id="shops" class="row">

          <?php
          foreach ($allShops as $shop) {
          ?>
                <div class="product col-12 col-sm-6 col-md-4 col-lg-3">
                    <b-card
                        no-body
                        style="max-width: 18rem;margin: 0px;padding-left: 0px;padding-right: 0px"
                        img-src="<?= $shop['image']?>"
                        img-alt="<?= $shop['name']?>"
                        img-top
                    >
                        <b-card-body>
                            <b-card-title><?= $shop['name']?></b-card-title>
                            <b-card-sub-title class="mb-2">catégorie</b-card-sub-title>
                            <b-card-text>
                                <?= substr($shop['description'], 0, 55) . '...';?>
                            </b-card-text>
                        </b-card-body>

                        <b-card-body style="justify-content: space-between;display: flex;">
                            <b-button variant="primary" href="/<?= $shop['id']?>">
                                Voir la boutique
                            </b-button>
                        </b-card-body>
                    </b-card>
                </div>
          <?php
            }
          ?>
      </div>
      <?php require __DIR__.'/includes/footer.php'; ?>

  </div>
  <script type="text/javascript" src="<?= url('js/app.js') ?>"></script>

</body>
</html>
