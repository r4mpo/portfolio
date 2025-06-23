<?php

/**
 * ================================================================
 * Language File - en (Professional Experience)
 * ---------------------------------------------------------------
 * This file contains fixed texts used on the professional experience page.
 * Organized in sections to facilitate maintenance and translation.
 *
 * How to use:
 * - In the Controller: $lang = require __DIR__ . '/experience.php';
 * - In the View: use $lang['key'] to access the texts.
 *
 * Tip:
 * - It can contain HTML for visual formatting in the views.
 * ================================================================
 */

return [

    /**
     * ---------------------------------------------------------------
     * Section: Banner (Top of the Page)
     * ---------------------------------------------------------------
     */
    'banner' => [
        'background' => 'images/banner/banner3.jpg',
        'title' => 'Experience',
        'breadcrumb' => [
            ['text' => 'Home', 'link' => '#'],
            ['text' => 'Experience', 'link' => '#'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Page Description
     * ---------------------------------------------------------------
     */
    'section' => [
        'title' => 'Experience',
        'subtitle' => 'My professional journey',
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Experience Cards
     * ---------------------------------------------------------------
     */
    'cards' => [
        [
            'title' => 'PHP Programmer Analyst',
            'subtitle' => 'Grupo CRIAR - Ribeirão Preto, SP<br> [08/2023 - Present]',
            'description' => 'Working in on-site web development focusing on PHP back-end (Laravel, CakePHP, CodeIgniter), using tools such as PHPStorm, Docker, Git, and Linux. Creating responsive interfaces with HTML, CSS, JS, Bootstrap, and jQuery. Developing and maintaining RESTful APIs with authentication, database integration, and Swagger documentation. Experience evolving internal systems, stock control, integration with Power BI and Detran systems. Participated in the e-SILOBAG project, focused on APIs and microservices for IoT sensors with satellite communication, presented at Agrishow 2025.',
            'link' => [
                'url' => 'https://grupocriar.com.br/',
                'text' => 'Learn more',
            ],
            'svg' => '<svg width="60" height="60" viewBox="0 0 24 24" fill="#007bff" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a2 2 0 012 2v1.17a3.001 3.001 0 01.83 5.659V13a3 3 0 11-2 0v-2.171A3.001 3.001 0 0112 5.17V4a2 2 0 010-4zm0 18a2 2 0 110 4 2 2 0 010-4zm8-8a2 2 0 110 4 2 2 0 010-4zm-16 0a2 2 0 110 4 2 2 0 010-4z" /></svg>',
        ],
        [
            'title' => 'Trainee Programmer',
            'subtitle' => 'ELECTRA Informática – Remote<br> [12/2022 – 08/2023]',
            'description' => 'Experience in development and maintenance of monolithic and microservices-based systems, including SPAs, ERPs, and REST APIs. Created blogs and e-commerces in WordPress with advanced customizations and a proprietary plugin for issuing NF-e via PlugBoleto. Implemented security in Laravel with Spatie, user permissions, and roles control. Worked with databases running SQL operations in test and production environments. Highlight: Donation Control System for Escola VeraCruz, integrating payments and generating financial reports.',
            'link' => [
                'url' => 'https://electra.com.br/',
                'text' => 'Learn more',
            ],
            'svg' => ' <svg width="60" height="60" viewBox="0 0 24 24" fill="#28a745" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 4.24 2 7v10c0 2.76 4.48 5 10 5s10-2.24 10-5V7c0-2.76-4.48-5-10-5zm0 2c4.41 0 8 .9 8 2s-3.59 2-8 2-8-.9-8-2 3.59-2 8-2zm0 16c-4.41 0-8-.9-8-2V13c1.77 1.07 5.08 1.5 8 1.5s6.23-.43 8-1.5v5c0 1.1-3.59 2-8 2z" /></svg>',
        ],
        [
            'title' => 'Development Intern',
            'subtitle' => 'ELECTRA Informática – Remote<br> [07/2022 – 12/2022]',
            'description' => 'Started as a full stack developer focusing on PHP back-end (Laravel and CodeIgniter), working on ERP systems, integrations with Cielo, CRUD creation, and bug fixes. Experience with HTML, CSS, and JavaScript for maintaining landing pages and legacy systems. Responsible for server migrations, XML reading of NF-e, and data persistence. Used Git/GitLab, agile methodology (Kanban), and participated in technical alignments. Monitored backups to ensure data integrity.',
            'link' => [
                'url' => 'https://electra.com.br/',
                'text' => 'Learn more',
            ],
            'svg' => ' <svg width="60" height="60" viewBox="0 0 24 24" fill="#fd7e14" xmlns="http://www.w3.org/2000/svg"><path d="M19.14,12.94c0.04,-0.31 0.06,-0.63 0.06,-0.94s-0.02,-0.63 -0.06,-0.94l2.03,-1.58c0.18,-0.14 0.23,-0.4 0.12,-0.61l-1.92,-3.32c-0.11,-0.21 -0.37,-0.3 -0.59,-0.22l-2.39,0.96c-0.5,-0.38 -1.05,-0.7 -1.65,-0.94L14.5,2.81c-0.05,-0.23 -0.25,-0.4 -0.49,-0.4h-3.98c-0.24,0 -0.44,0.17 -0.49,0.4l-0.36,2.48c-0.6,0.24 -1.16,0.56 -1.65,0.94l-2.39,-0.96c-0.23,-0.09 -0.48,0.01 -0.59,0.22l-1.92,3.32c-0.12,0.21 -0.07,0.47 0.12,0.61l2.03,1.58c-0.04,0.31 -0.06,0.63 -0.06,0.94s0.02,0.63 0.06,0.94l-2.03,1.58c-0.18,0.14 -0.23,0.4 -0.12,0.61l1.92,3.32c0.11,0.21 0.37,0.3 0.59,0.22l2.39,-0.96c0.5,0.38 1.05,0.7 1.65,0.94l0.36,2.48c0.05,0.23 0.25,0.4 0.49,0.4h3.98c0.24,0 0.44,-0.17 0.49,-0.4l0.36,-2.48c0.6,-0.24 1.16,-0.56 1.65,-0.94l2.39,0.96c0.23,0.09 0.48,-0.01 0.59,-0.22l1.92,-3.32c0.11,-0.21 0.06,-0.47 -0.12,-0.61l-2.03,-1.58ZM12,15.5c-1.93,0 -3.5,-1.57 -3.5,-3.5s1.57,-3.5 3.5,-3.5 3.5,1.57 3.5,3.5 -1.57,3.5 -3.5,3.5Z" /></svg>',
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Resume Download Button
     * ---------------------------------------------------------------
     */
    'resume_button' => [
        'text' => 'Resume',
        'icon' => 'bi bi-filetype-pdf',
        'url' => '/pdf/curriculo.pdf',
    ],

];