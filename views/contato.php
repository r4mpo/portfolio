<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Erick Agostinho (@r4mpo)</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">
  <link rel="icon" type="image/png" href="images/erick-photo.jpeg">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <div class="body-inner">
    <header id="header" class="header-one">
      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="bi bi-house-door-fill"></i> Home
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="/clientes.html" class="nav-link">
                        <i class="bi bi-people-fill"></i> Clientes
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#education" class="nav-link">
                        <i class="bi bi-mortarboard-fill"></i> Escolaridade
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#experiencia" class="nav-link">
                        <i class="bi bi-briefcase-fill"></i> Experiência
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#contato" class="nav-link">
                        <i class="bi bi-envelope-fill"></i> Contato
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
    <!--/ Header end -->
    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg)">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contato</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Contato</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section id="contact-form" class="contact py-5">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col-12">
            <h2 class="section-title">Contato</h2>
            <h3 class="section-sub-title">Faça um orçamento sem compromisso</h3>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form action="https://formspree.io/f/YOUR_ID_HERE" method="POST" class="education-and-xp-card p-4">
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="_replyto" required>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Mensagem</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
              </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-5">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer" class="footer bg-overlay">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
              <h3 class="widget-title">Sobre</h3>
              <img loading="lazy" width="200px" class="footer-logo" src="images/erick-photo.jpeg" alt="Erick Agostinho">
              <p>Sou desenvolvedor backend, apaixonado por PHP, Laravel, arquitetura de software e boas
                práticas.
                Neste espaço compartilho projetos, experiências e meu portfólio profissional.</p>
            </div>

            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
              <h3 class="widget-title">O que eu faço</h3>
              <div class="working-hours">
                Trabalho com desenvolvimento backend, APIs, microsserviços e também na modelagem de
                arquiteturas escaláveis, seguindo padrões de mercado e boas práticas.
                <br><br>
                Siga-me nas redes para mais conteúdos e novidades.
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
              <h3 class="widget-title">Links úteis</h3>
              <ul class="list-arrow">
                <li><a href="#repositories">Projetos</a></li>
                <li><a href="#about_me">Sobre mim</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="https://github.com/r4mpo" target="_blank">GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/erick-agostinho-684563227/" target="_blank">LinkedIn</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="copyright-info">
                <span>&copy;
                  <script>document.write(new Date().getFullYear())</script> Erick Agostinho. Todos os
                  direitos
                  reservados.
                </span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="footer-menu text-center text-md-right">
                <ul class="list-unstyled">
                  <li><a href="#about_me">Sobre</a></li>
                  <li><a href="#repositories">Projetos</a></li>
                  <li><a href="#">Contato</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Voltar ao Topo">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>
        </div>
      </div>
    </footer>

    <!-- initialize jQuery Library -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="plugins/shuffle/shuffle.min.js" defer></script>
    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="plugins/google-map/map.js" defer></script>
    <!-- Template custom -->
    <script src="js/script.js"></script>
  </div>
</body>

</html>