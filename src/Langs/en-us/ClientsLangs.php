<?php

/**
 * ================================================================
 * Language File - en (Clients)
 * ---------------------------------------------------------------
 * This file contains fixed texts used on the clients page.
 * Organized in sections to facilitate maintenance and translation.
 *
 * How to use:
 * - In the Controller: $lang = require __DIR__ . '/clients.php';
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
        'background' => 'images/banner/banner1.jpg',
        'title' => 'Clients',
        'breadcrumb' => [
            ['text' => 'Home', 'link' => '/'],
            ['text' => 'Clients', 'link' => '/clients'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Page Description
     * ---------------------------------------------------------------
     */
    'section' => [
        'title' => 'Clients',
        'subtitle' => 'Products and Projects',
        'description' => '
            🚀 This section is still under construction — and the next client could be you! <br>
            Turn your idea into a successful project. I develop tailor-made solutions focused on performance,
            security, and real results. <br>
            👉 Be the first company or entrepreneur to become part of this success portfolio.
        ',
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Client Cards
     * ---------------------------------------------------------------
     */
    'cards' => [
        [
            'title' => 'Your Project Here',
            'designation' => 'Satisfied Client',
            'description' => 'This spot is reserved for those who want to take their business to the next level with quality technology and customized solutions.',
            'svg' => '<svg width="100%" height="100%" viewBox="0 0 24 24" fill="#007bff" xmlns="http://www.w3.org/2000/svg"><path d="M3 3h18v18H3V3zm2 2v14h14V5H5z" /><path d="M7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h6v2H7v-2z" /></svg>',
            'socials' => [
                ['icon' => 'fab fa-whatsapp', 'link' => 'https://w.app/omtqqv'],
                ['icon' => 'fab fa-instagram', 'link' => 'https://www.instagram.com/off.rampo/'],
                ['icon' => 'fab fa-linkedin', 'link' => 'https://www.linkedin.com/in/erick-agostinho-684563227/'],
            ],
        ],
        [
            'title' => 'Next Success Case',
            'designation' => 'Your Business',
            'description' => 'Let’s build together a digital solution that creates impact, credibility, and growth for your company or project.',
            'svg' => '<svg width="100%" height="100%" viewBox="0 0 24 24" fill="#28a745" xmlns="http://www.w3.org/2000/svg"><path d="M2 21l3-3h4l3 3-3 3H5l-3-3zm16.24-3.76l-4.24-4.24 1.41-1.41 4.24 4.24-1.41 1.41zm-6.35-6.35l-4.24-4.24 1.41-1.41 4.24 4.24-1.41 1.41zM21 2l-6.95 6.95 1.41 1.41L22.41 3.41 21 2z" /></svg>',
            'socials' => [
                ['icon' => 'fab fa-whatsapp', 'link' => 'https://w.app/omtqqv'],
                ['icon' => 'fab fa-instagram', 'link' => 'https://www.instagram.com/off.rampo/'],
                ['icon' => 'fab fa-linkedin', 'link' => 'https://www.linkedin.com/in/erick-agostinho-684563227/'],
            ],
        ],
        [
            'title' => 'Shall We Talk?',
            'designation' => 'Custom Project',
            'description' => 'Get in touch and find out how we can turn your idea into a professional, functional, and scalable project.',
            'svg' => '<svg width="100%" height="100%" viewBox="0 0 24 24" fill="#fd7e14" xmlns="http://www.w3.org/2000/svg"><path d="M20 6h-4V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2H4c-1.1 0-2 .9-2 2v2h20V8c0-1.1-.9-2-2-2zM10 4h4v2h-4V4z" /><path d="M2 12v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8H2z" /></svg>',
            'socials' => [
                ['icon' => 'fab fa-whatsapp', 'link' => 'https://w.app/omtqqv'],
                ['icon' => 'fab fa-instagram', 'link' => 'https://www.instagram.com/off.rampo/'],
                ['icon' => 'fab fa-linkedin', 'link' => 'https://www.linkedin.com/in/erick-agostinho-684563227/'],
            ],
        ],
    ],

];