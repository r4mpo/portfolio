<?php

/**
 * ================================================================
 * Language File - en (Education)
 * ---------------------------------------------------------------
 * This file contains fixed texts used on the education page.
 * Organized in sections to facilitate maintenance and translation.
 *
 * How to use:
 * - In the Controller: $lang = require __DIR__ . '/education.php';
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
        'background' => 'images/banner/banner2.jpg',
        'title' => 'Education',
        'breadcrumb' => [
            ['text' => 'Home', 'link' => '#'],
            ['text' => 'Education', 'link' => '#'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Page Description
     * ---------------------------------------------------------------
     */
    'section' => [
        'title' => 'Academic Background',
        'subtitle' => 'My educational journey',
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Education Cards
     * ---------------------------------------------------------------
     */
    'cards' => [
        [
            'title' => 'Postgraduate in Web Development',
            'subtitle' => 'Faculdade Focus (Ongoing)',
            'description' => 'Currently specializing in Web Development, deepening knowledge in modern technologies, best development practices, and system architecture.',
            'link' => [
                'url' => 'https://faculdadefocus.com.br/curso/pos-graduacao-em-desenvolvimento-web',
                'text' => 'Learn more',
            ],
            'svg' => 'postgraduate',
        ],
        [
            'title' => 'Systems Analysis and Development',
            'subtitle' => 'Universidade Paulista (UNIP) – Batatais, SP<br> [06/2021 – 06/2023]',
            'description' => 'Undergraduate degree providing a solid foundation in Systems Analysis, Databases, Cybersecurity, and Software Engineering. Essential for my market entry and development as a technology professional.',
            'link' => [
                'url' => 'https://www.unip.br/cursos/graduacao/tecnologicos/analise_desenvolvimento_sistemas.aspx',
                'text' => 'Learn more',
            ],
            'svg' => 'graduation',
        ],
        [
            'title' => 'Technical Course in Systems Development',
            'subtitle' => 'ETEC Antônio de Pádua Cardoso – Batatais, SP<br> [01/2020 – 06/2021]',
            'description' => 'Technical course focused on Web Programming, Databases, Systems Analysis, information security, and web systems development with HTML, CSS, JavaScript, PHP, and SQL Server.',
            'link' => [
                'url' => 'https://www.cps.sp.gov.br/cursos-etec/desenvolvimento-de-sistemas/',
                'text' => 'Learn more',
            ],
            'svg' => 'technical',
        ],
    ],

];