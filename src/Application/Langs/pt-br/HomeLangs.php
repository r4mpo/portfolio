<?php

/**
 * ================================================================
 * Arquivo de Idioma - pt-br
 * ---------------------------------------------------------------
 * Este arquivo contém textos fixos utilizados na aplicação web.
 * Organizado em seções para facilitar manutenção e tradução.
 *
 * Como usar:
 * - No Controller: $lang = require __DIR__ . '';
 * - Na View (ex. Twig): use $lang['chave'] para acessar os textos.
 *
 * Dica:
 * - Pode conter HTML para facilitar formatação visual nas views.
 * - Crie arquivos semelhantes para outros idiomas em /Langs/{idioma}.
 * ================================================================
 */

return [

    /**
     * ---------------------------------------------------------------
     * Seção: Banner (Slides da Home)
     * ---------------------------------------------------------------
     */
    'banners' => [
        [
            'background' => 'images/slider-main/bg1.jpg',
            'content' => '
                <h2 class="slide-title" data-animation-in="slideInLeft">ERICK AGOSTINHO</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">DESENVOLVEDOR FULL STACK</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="#repositories" class="slider btn btn-primary">Meus Projetos</a>
                    <a href="#" class="slider btn btn-primary border">Fale Comigo</a>
                </p>
            ',
        ],
        [
            'background' => 'images/slider-main/bg2.jpg',
            'content' => '
                <h2 class="slide-title-box" data-animation-in="slideInDown">EXPERIÊNCIA REAL</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">Projetos robustos e escaláveis</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Back-End | Front-End | IoT | API | DevOps</h3>
                <p data-animation-in="slideInRight">
                    <a href="#" class="slider btn btn-primary border">Ver Experiência</a>
                </p>
            ',
        ],
        [
            'background' => 'images/slider-main/bg3.jpg',
            'content' => '
                <h2 class="slide-title" data-animation-in="slideInDown">CONSTRUO SOLUÇÕES COMPLETAS</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Do Front ao Back-End</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">API | Laravel | Vue.js | Docker | CI/CD | Banco de Dados</p>
                <div data-animation-in="slideInLeft">
                    <a href="#freelancer-pricing" class="slider btn btn-primary" aria-label="freelancer-pricing">Meus Serviços</a>
                    <a href="#" class="slider btn btn-primary border" aria-label="contato">Entre em Contato</a>
                </div>
            ',
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Chamada para Ação
     * ---------------------------------------------------------------
     */
    'call_to_action' => [
        'title' => 'Vamos construir algo incrível juntos!',
        'button' => [
            'text' => 'Entre em Contato',
            'link' => '#',
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Sobre Mim
     * ---------------------------------------------------------------
     */
    'about_me' => [
        'title' => 'Erick Agostinho',
        'subtitle' => 'Desenvolvedor Full Stack | Back-End & DevOps',
        'description' => 'Sou especializado no desenvolvimento de APIs RESTful robustas, back-end com Laravel, microsserviços, integrações IoT e banco de dados performáticos. No front-end, trabalho com Vue.js, Bootstrap e padrões modernos. Tenho experiência com práticas DevOps, Docker, Git e CI/CD, além de pipelines eficientes e deploy automatizado.',
        'skills_title' => 'Minhas Principais Skills',
        'skills' => [
            '🖥️ Desenvolvimento Web com PHP, Laravel, CodeIgniter e Cake',
            '🔗 Criação de APIs RESTful escaláveis e seguras',
            '🗄️ Banco de dados MySQL e PostgreSQL',
            '🎨 Front-End com Vue.js, Bootstrap e JavaScript',
            '🐳 DevOps: Docker, Linux, CI/CD, versionamento Git',
            '📡 Experiência real com projetos IoT e microsserviços',
            '📑 Documentação de APIs com Swagger e Postman',
        ],
        'servicos' => [
            ['icon' => 'fas fa-code',     'title' => 'Back-End & APIs'],
            ['icon' => 'fas fa-database', 'title' => 'Banco de Dados'],
            ['icon' => 'fas fa-server',   'title' => 'DevOps & Docker'],
            ['icon' => 'fas fa-desktop',  'title' => 'Front-End (Vue.js)'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Repositórios
     * ---------------------------------------------------------------
     */
    'repositories' => [
        'title' => 'Projetos Pessoais',
        'subtitle' => 'Repositórios recentes e populares',
        'ver_mais' => [
            'text' => 'Ver mais no GitHub',
            'link' => 'https://github.com/r4mpo',
        ],
        'repos' => [
            [
                'title' => 'Perfil r4mpo',
                'desc' => 'GitHub Profile',
                'image' => 'https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png',
                'link' => 'https://github.com/r4mpo',
            ],
            [
                'title' => 'Perfect Laravel Base',
                'desc' => 'Base starter para Laravel, com arquitetura limpa e melhores práticas.',
                'svg' => 'laravel',
                'link' => 'https://github.com/r4mpo/perfect-laravel-base',
            ],
            [
                'title' => 'Cadastro Produtos C++',
                'desc' => 'Projeto para cadastro de produtos desenvolvido em C++.',
                'svg' => 'c++',
                'link' => 'https://github.com/r4mpo/cadastro-produtos-cpp',
            ],
            [
                'title' => 'C++ Curso',
                'desc' => 'Repositório com códigos e exercícios do curso de C++.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg',
                'link' => 'https://github.com/r4mpo/cpp-curso',
            ],
            [
                'title' => 'Design Patterns PHP (Comportamentais)',
                'desc' => 'Implementações dos padrões comportamentais usando PHP, com exemplos claros e objetivos.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                'link' => 'https://github.com/r4mpo/design-patterns-em-php-padroes-comportamentais',
            ],
            [
                'title' => 'My Jobs',
                'desc' => 'Plataforma para vagas de freelancers e empregos rápidos.',
                'image' => 'https://cdn-icons-png.flaticon.com/512/3468/3468261.png',
                'link' => 'https://github.com/r4mpo/my-jobs',
            ],
            [
                'title' => 'SOLID com PHP',
                'desc' => 'Exemplos práticos dos princípios SOLID aplicados em projetos PHP.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                'link' => 'https://github.com/r4mpo/solid-com-php',
            ],
            [
                'title' => 'People Pro',
                'desc' => 'Gestão de colaboradores SaaS feito em Laravel + Bootstrap + MySQL.',
                'image' => 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png',
                'link' => 'https://github.com/r4mpo/people-pro',
            ],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Freelancer
     * ---------------------------------------------------------------
     */
    'freelancer' => [
        'title' => 'Serviços como Freelancer',
        'subtitle' => 'Qualidade, segurança e compromisso',
        'services' => [
            ['title' => 'Landing Pages', 'desc' => 'Desenvolvimento de páginas únicas, otimizadas, rápidas e profissionais.'],
            ['title' => 'e-Commerces', 'desc' => 'Lojas virtuais personalizadas, seguras, escaláveis e prontas para vender.'],
            ['title' => 'CRMs e APIs', 'desc' => 'Desenvolvimento de sistemas de gestão comercial, APIs robustas e soluções sob medida.'],
            ['title' => 'Banco de Dados', 'desc' => 'Modelagem, otimização, manutenção e suporte para bancos de dados.'],
            ['title' => 'Mentoria', 'desc' => 'Aulas, consultorias e orientação profissional em desenvolvimento e tecnologia.'],
            ['title' => 'Manutenção', 'desc' => 'Manutenção, suporte contínuo, correções e melhorias em projetos existentes.'],
        ],
        'incluso_title' => 'O que está incluso nos meus serviços?',
        'incluso' => [
            '✔️ Planejamento completo junto ao cliente',
            '✔️ Contratos formais com reconhecimento em cartório',
            '✔️ Pagamento seguro e transparente',
            '✔️ Prazos bem definidos e acordados',
            '✔️ Qualidade garantida e foco no resultado',
            '✔️ Hospedagem na plataforma de preferência do cliente',
            '✔️ Suporte e manutenção conforme necessidade',
        ],
        'orcamento_btn' => [
            'text' => 'Solicitar Orçamento',
            'link' => '#',
        ],
    ],

];