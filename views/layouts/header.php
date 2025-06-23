<!DOCTYPE html>
<html lang="<?= $langHeader['lang_code'] ?>">

<head>
    <meta charset="utf-8">
    <title><?= $langHeader['site']['title'] ?></title>
    <!-- Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">
    <!-- Links -->
    <link rel="icon" type="image/png" href="images/erick-photo.jpeg">
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
<div class="body-inner">
  <header id="header" class="header-one">
    <div class="site-navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
              <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="navbar-collapse" class="collapse navbar-collapse">
                <!-- Menu da esquerda -->
                <ul class="navbar-nav mr-auto">
                  <?php foreach ($langHeader['menus'] as $menu): ?>
                  <li class="nav-item">
                    <?= $menu ?>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <!-- Bandeiras da direita -->
                <ul class="navbar-nav ml-auto d-flex flex-row">
                  <li class="nav-item">
                    <a href="#" data-setlang="setLang?lang=pt-br" class="linkSetLang nav-link px-2" title="Português (Brasil)">
                      <img src="/images/flags/br.svg" alt="Brazil Flag" style="width: 36px; height: 24px;">
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" data-setlang="setLang?lang=en-us" class="linkSetLang nav-link px-2" title="English (USA)">
                      <img src="/images/flags/us.svg" alt="USA Flag" style="width: 36px; height: 24px;">
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
