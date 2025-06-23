<?php

/**
 * ================================================================
 * Language File - en
 * ---------------------------------------------------------------
 * This file contains fixed texts used in the web application.
 * Organized in sections to facilitate maintenance and translation.
 *
 * How to use:
 * - In the Controller: $lang = require __DIR__ . '';
 * - In the View (e.g. Twig): use $lang['key'] to access texts.
 *
 * Tip:
 * - It may contain HTML to facilitate visual formatting in views.
 * - Create similar files for other languages in /Langs/{language}.
 * ================================================================
 */

return [

    /**
     * ---------------------------------------------------------------
     * Section: Banner (Home Slides)
     * ---------------------------------------------------------------
     */
    'banners' => [
        [
            'background' => 'images/slider-main/bg1.jpg',
            'content' => '
                <h2 class="slide-title" data-animation-in="slideInLeft">ERICK AGOSTINHO</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">FULL STACK DEVELOPER</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="#repositories" class="slider btn btn-primary">My Projects</a>
                    <a href="/contact" class="slider btn btn-primary border">Contact Me</a>
                </p>
            ',
        ],
        [
            'background' => 'images/slider-main/bg2.jpg',
            'content' => '
                <h2 class="slide-title-box" data-animation-in="slideInDown">REAL EXPERIENCE</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">Robust and scalable projects</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Back-End | Front-End | IoT | API | DevOps</h3>
                <p data-animation-in="slideInRight">
                    <a href="/experience" class="slider btn btn-primary border">See Experience</a>
                </p>
            ',
        ],
        [
            'background' => 'images/slider-main/bg3.jpg',
            'content' => '
                <h2 class="slide-title" data-animation-in="slideInDown">I BUILD COMPLETE SOLUTIONS</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">From Front to Back-End</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">API | Laravel | Vue.js | Docker | CI/CD | Databases</p>
                <div data-animation-in="slideInLeft">
                    <a href="#freelancer-pricing" class="slider btn btn-primary" aria-label="freelancer-pricing">My Services</a>
                    <a href="/contact" class="slider btn btn-primary border" aria-label="contact">Get in Touch</a>
                </div>
            ',
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Call to Action
     * ---------------------------------------------------------------
     */
    'call_to_action' => [
        'title' => 'Let’s build something amazing together!',
        'button' => [
            'text' => 'Get in Touch',
            'link' => '/contact',
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: About Me
     * ---------------------------------------------------------------
     */
    'about_me' => [
        'title' => 'Erick Agostinho',
        'subtitle' => 'Full Stack Developer | Back-End & DevOps',
        'description' => 'I specialize in developing robust RESTful APIs, back-end with Laravel, microservices, IoT integrations, and high-performance databases. On the front-end, I work with Vue.js, Bootstrap, and modern standards. Experienced with DevOps practices, Docker, Git, and CI/CD pipelines, including automated deployment.',
        'skills_title' => 'My Key Skills',
        'skills' => [
            '🖥️ Web Development with PHP, Laravel, CodeIgniter, and CakePHP',
            '🔗 Creation of scalable and secure RESTful APIs',
            '🗄️ MySQL and PostgreSQL databases',
            '🎨 Front-End with Vue.js, Bootstrap, and JavaScript',
            '🐳 DevOps: Docker, Linux, CI/CD, Git version control',
            '📡 Real experience with IoT projects and microservices',
            '📑 API documentation with Swagger and Postman',
        ],
        'servicos' => [
            ['icon' => 'fas fa-code',     'title' => 'Back-End & APIs'],
            ['icon' => 'fas fa-database', 'title' => 'Databases'],
            ['icon' => 'fas fa-server',   'title' => 'DevOps & Docker'],
            ['icon' => 'fas fa-desktop',  'title' => 'Front-End (Vue.js)'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Repositories
     * ---------------------------------------------------------------
     */
    'repositories' => [
        'title' => 'Personal Projects',
        'subtitle' => 'Recent and popular repositories',
        'ver_mais' => [
            'text' => 'See more on GitHub',
            'link' => 'https://github.com/r4mpo',
        ],
        'repos' => [
            [
                'title' => 'Profile @r4mpo',
                'desc' => 'GITHUB PROFILE',
                'image' => 'https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png',
                'link' => 'https://github.com/r4mpo',
            ],
            [
                'title' => 'Perfect Laravel Base',
                'desc' => 'Starter base for Laravel with clean architecture and best practices.',
                'image' => 'laravel',
                'link' => 'https://github.com/r4mpo/perfect-laravel-base',
            ],
            [
                'title' => 'Product Registration C++',
                'desc' => 'Project for product registration developed in C++.',
                'image' => 'c++',
                'link' => 'https://github.com/r4mpo/cadastro-produtos-cpp',
            ],
            [
                'title' => 'C++ Course',
                'desc' => 'Repository with codes and exercises from the C++ course.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg',
                'link' => 'https://github.com/r4mpo/cpp-curso',
            ],
            [
                'title' => 'PHP Design Patterns (Behavioral)',
                'desc' => 'Implementations of behavioral patterns using PHP, with clear and objective examples.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                'link' => 'https://github.com/r4mpo/design-patterns-em-php-padroes-comportamentais',
            ],
            [
                'title' => 'My Jobs',
                'desc' => 'Platform for freelance gigs and quick jobs.',
                'image' => 'https://cdn-icons-png.flaticon.com/512/3468/3468261.png',
                'link' => 'https://github.com/r4mpo/my-jobs',
            ],
            [
                'title' => 'SOLID with PHP',
                'desc' => 'Practical examples of SOLID principles applied in PHP projects.',
                'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
                'link' => 'https://github.com/r4mpo/solid-com-php',
            ],
            [
                'title' => 'People Pro',
                'desc' => 'SaaS employee management built with Laravel + Bootstrap + MySQL.',
                'image' => 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png',
                'link' => 'https://github.com/r4mpo/people-pro',
            ],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Freelancer
     * ---------------------------------------------------------------
     */
    'freelancer' => [
        'title' => 'Freelance Services',
        'subtitle' => 'Quality, security, and commitment',
        'services' => [
            ['title' => 'Landing Pages', 'desc' => 'Development of single, optimized, fast, and professional pages.'],
            ['title' => 'e-Commerce', 'desc' => 'Customized, secure, scalable online stores ready to sell.'],
            ['title' => 'CRMs and APIs', 'desc' => 'Development of commercial management systems, robust APIs, and tailored solutions.'],
            ['title' => 'Databases', 'desc' => 'Modeling, optimization, maintenance, and support for databases.'],
            ['title' => 'Mentoring', 'desc' => 'Lessons, consulting, and professional guidance in development and technology.'],
            ['title' => 'Maintenance', 'desc' => 'Ongoing support, corrections, and improvements for existing projects.'],
        ],
        'incluso_title' => 'What is included in my services?',
        'incluso' => [
            '✔️ Complete planning together with the client',
            '✔️ Formal contracts with notary recognition',
            '✔️ Secure and transparent payment',
            '✔️ Well-defined and agreed deadlines',
            '✔️ Guaranteed quality and focus on results',
            '✔️ Hosting on the client’s preferred platform',
            '✔️ Support and maintenance as needed',
        ],
        'orcamento_btn' => [
            'text' => 'Request a Quote',
            'link' => '/contact',
        ],
    ],

];