<?php

/**
 * ================================================================
 * Language File - en (Footer)
 * ---------------------------------------------------------------
 * Contains texts used in the website footer.
 * Organized by sections for easier maintenance and translation.
 *
 * How to use:
 * - In the Controller: $langFooter = require __DIR__ . '/footer.php';
 * - In the View or function: use $langFooter['about']['title'], for example.
 * ================================================================
 */

return [

    /**
     * ---------------------------------------------------------------
     * Section: About
     * ---------------------------------------------------------------
     */
    'about' => [
        'title' => 'About',
        'description' => 'I am a backend developer passionate about PHP, Laravel, software architecture, and best practices.
            Here I share projects, experiences, and my professional portfolio.',
    ],

    /**
     * ---------------------------------------------------------------
     * Section: What I Do
     * ---------------------------------------------------------------
     */
    'what_i_do' => [
        'title' => 'What I Do',
        'description' => 'I work with backend development, APIs, microservices, and also in designing scalable architectures following market standards and best practices.
            <br><br>Follow me on social media for more content and updates.',
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Useful Links
     * ---------------------------------------------------------------
     */
    'links' => [
        'title' => 'Useful Links',
        'items' => [
            ['text' => 'Projects', 'link' => '/#repositories'],
            ['text' => 'About Me', 'link' => '/#about_me'],
            ['text' => 'Contact', 'link' => '/contact'],
            ['text' => 'GitHub', 'link' => 'https://github.com/r4mpo', 'external' => true],
            ['text' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/erick-agostinho-684563227/', 'external' => true],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Copyright
     * ---------------------------------------------------------------
     */
    'copyright' => [
        'text' => 'All rights reserved.',
        'menus' => [
            ['text' => 'About', 'link' => '/#about_me'],
            ['text' => 'Projects', 'link' => '/#repositories'],
            ['text' => 'Contact', 'link' => '/contact'],
        ],
    ],

];