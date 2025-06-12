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
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
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

        <div class="banner-carousel banner-carousel-1 mb-0">
            <?php foreach ($lang["banners"] as $banner): ?>
                <div class="banner-carousel-item" style="background-image:url(<?php echo $banner["background"]; ?>)">
                    <div class="slider-content">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-md-12 text-center">
                                    <?php echo $banner["content"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <section class="call-to-action-box no-padding">
            <div class="container">
                <div class="action-style-box">
                    <div class="row align-items-center">
                        <div class="col-md-8 text-center text-md-left">
                            <div class="call-to-action-text">
                                <h3 class="action-title"><?php echo $lang["call_to_action"]["title"]; ?></h3>
                            </div>
                        </div>
                        <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                            <div class="call-to-action-btn">
                                <a class="btn btn-dark"
                                    href="<?php echo $lang["call_to_action"]["button"]["link"]; ?>"><?php echo $lang["call_to_action"]["button"]["text"]; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about_me" class="about_me">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ts-intro">
                            <h2 class="into-title">Erick Agostinho</h2>
                            <h3 class="into-sub-title">Desenvolvedor Full Stack | Back-End & DevOps</h3>
                            <p>Sou especializado no desenvolvimento de APIs RESTful robustas, back-end com Laravel,
                                microsserviços,
                                integrações IoT e banco de dados performáticos. No front-end, trabalho com Vue.js,
                                Bootstrap e padrões
                                modernos. Tenho experiência com práticas DevOps, Docker, Git e CI/CD, além de
                                pipelines eficientes e
                                deploy automatizado.</p>
                        </div>

                        <div class="gap-20"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon"><i class="fas fa-code"></i></span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title">Back-End & APIs</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon"><i class="fas fa-database"></i></span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title">Banco de Dados</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon"><i class="fas fa-server"></i></span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title">DevOps & Docker</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ts-service-box">
                                    <span class="ts-service-icon"><i class="fas fa-desktop"></i></span>
                                    <div class="ts-service-box-content">
                                        <h3 class="service-box-title">Front-End (Vue.js)</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h3 class="into-sub-title">Minhas Principais Skills</h3>
                        <p>
                            🖥️ Desenvolvimento Web com PHP, Laravel, CodeIgniter e Cake <br>
                            🔗 Criação de APIs RESTful escaláveis e seguras <br>
                            🗄️ Banco de dados MySQL e PostgreSQL <br>
                            🎨 Front-End com Vue.js, Bootstrap e JavaScript <br>
                            🐳 DevOps: Docker, Linux, CI/CD, versionamento Git <br>
                            📡 Experiência real com projetos IoT e microsserviços <br>
                            📑 Documentação de APIs com Swagger e Postman
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    </div>
    </section>

    <section id="repositories" class="repositories">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Projetos Pessoais</h2>
                    <h3 class="section-sub-title margin-default-sub-title">Repositórios recentes e populares</h3>
                </div>
            </div>

            <div class="row projetos-row">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="https://github.com/r4mpo" target="_blank" class="latest-post-img">
                                <img loading="lazy" class="img-fluid"
                                    src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png"
                                    alt="GitHub Profile">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="https://github.com/r4mpo" target="_blank" class="d-inline-block">Perfil
                                    r4mpo</a>
                            </h4>
                            <div class="latest-post-meta">
                                <span class="post-item-date">GitHub Profile</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media d-flex justify-content-center align-items-center"
                            style="height: 80px;">
                            <svg width="60" height="60" viewBox="0 0 512 512" fill="#FF2D20"
                                xmlns="http://www.w3.org/2000/svg" aria-label="Laravel Icon" role="img">
                                <path d="M463.79 36.04 350.75 160.06H251.12L418.67 36.04H463.79Z" />
                                <path d="M145.33 160.06 32.29 36.04H77.41L245.03 160.06H145.33Z" />
                                <path
                                    d="M463.79 219.52H414.38L325.94 327.66H275.98L363.25 219.52H313.89L245.03 292.48 176.33 219.52H128.28L241.2 342.14H292.15L128.29 477.96H81.45L245.03 351.5 408.4 477.96H458.16L463.79 219.52Z" />
                            </svg>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="https://github.com/r4mpo/perfect-laravel-base" target="_blank">Perfect Laravel
                                    Base</a>
                            </h4>
                            <p>Base starter para Laravel, com arquitetura limpa e melhores práticas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media d-flex justify-content-center align-items-center"
                            style="height: 80px;">
                            <!-- Ícone C++ estilizado -->
                            <svg width="60" height="60" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                aria-label="C++ Icon" role="img">
                                <rect width="64" height="64" rx="8" ry="8" fill="#00599C" />
                                <text x="50%" y="50%" fill="#fff" font-family="Arial, sans-serif" font-size="32"
                                    font-weight="bold" text-anchor="middle" alignment-baseline="middle">C++</text>
                            </svg>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="https://github.com/r4mpo/cadastro-produtos-cpp" target="_blank">Cadastro
                                    Produtos C++</a>
                            </h4>
                            <p>Projeto para cadastro de produtos desenvolvido em C++.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg"
                                alt="C++">
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="https://github.com/r4mpo/cpp-curso" target="_blank">C++ Curso</a>
                            </h4>
                            <p>Repositório com códigos e exercícios do curso de C++.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                                alt="PHP">
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="https://github.com/r4mpo/design-patterns-em-php-padroes-comportamentais"
                                    target="_blank">
                                    Design Patterns PHP (Comportamentais)
                                </a>
                            </h4>
                            <p>Implementações dos padrões comportamentais usando PHP, com exemplos claros e objetivos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <img src="https://cdn-icons-png.flaticon.com/512/3468/3468261.png" alt="Jobs Icon">
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="https://github.com/r4mpo/my-jobs" target="_blank">My Jobs</a>
                            </h4>
                            <p>Plataforma para vagas de freelancers e empregos rápidos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                                alt="PHP">
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="https://github.com/r4mpo/solid-com-php" target="_blank">SOLID com PHP</a>
                            </h4>
                            <p>Exemplos práticos dos princípios SOLID aplicados em projetos PHP.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="People Icon">
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="https://github.com/r4mpo/people-pro" target="_blank">People Pro</a>
                            </h4>
                            <p>Gestão de colaboradores SaaS feito em Laravel + Bootstrap + MySQL.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="general-btn text-center mt-4">
                <a class="btn btn-primary" href="https://github.com/r4mpo" target="_blank">Ver mais no GitHub</a>
            </div>
        </div>
    </section>

    <section id="freelancer-pricing" class="pricing-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Serviços como Freelancer</h2>
                    <h3 class="section-sub-title margin-default-sub-title">Qualidade, segurança e compromisso</h3>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <h3>Landing Pages</h3>
                        </div>
                        <p>Desenvolvimento de páginas únicas, otimizadas, rápidas e profissionais.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <h3>e-Commerces</h3>
                        </div>
                        <p>Lojas virtuais personalizadas, seguras, escaláveis e prontas para vender.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <h3>CRMs e APIs</h3>
                        </div>
                        <p>Desenvolvimento de sistemas de gestão comercial, APIs robustas e soluções sob medida.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <h3>Banco de Dados</h3>
                        </div>
                        <p>Modelagem, otimização, manutenção e suporte para bancos de dados.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <h3>Mentoria</h3>
                        </div>
                        <p>Aulas, consultorias e orientação profissional em desenvolvimento e tecnologia.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <h3>Manutenção</h3>
                        </div>
                        <p>Manutenção, suporte contínuo, correções e melhorias em projetos existentes.</p>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="pricing-info bg-light p-4 rounded">
                        <h4 class="text-center mb-3">O que está incluso nos meus serviços?</h4>
                        <ul class="list-unstyled">
                            <li>✔️ Planejamento completo junto ao cliente</li>
                            <li>✔️ Contratos formais com reconhecimento em cartório</li>
                            <li>✔️ Pagamento seguro e transparente</li>
                            <li>✔️ Prazos bem definidos e acordados</li>
                            <li>✔️ Qualidade garantida e foco no resultado</li>
                            <li>✔️ Hospedagem na plataforma de preferência do cliente</li>
                            <li>✔️ Suporte e manutenção conforme necessidade</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="general-btn text-center mt-4">
                <a class="btn btn-primary" href="#">Solicitar Orçamento</a>
            </div>

        </div>
    </section>

    <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">Sobre</h3>
                        <img loading="lazy" width="200px" class="footer-logo" src="images/erick-photo.jpeg"
                            alt="Erick Agostinho">
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
                            <li><a href="https://www.linkedin.com/in/erick-agostinho-684563227/"
                                    target="_blank">LinkedIn</a></li>
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