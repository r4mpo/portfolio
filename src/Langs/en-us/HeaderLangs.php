<?php

/**
 * ================================================================
 * Language File - en (Header)
 * ---------------------------------------------------------------
 * Contains fixed texts used in the site header (navigation).
 * Organized for easier translation and maintenance.
 *
 * How to use:
 * - In the Controller: $langHeader = require __DIR__ . '/header.php';
 * - In the View or function: use $langHeader['menu']['home'], for example.
 * ================================================================
 */
return [
    /**
     * ---------------------------------------------------------------
     * Site information
     * ---------------------------------------------------------------
     */
    'lang_code' => 'en',
    'site' => [
        'title' => 'Erick Agostinho (@r4mpo)',
        'description' => 'Erick Agostinho Portfolio',
    ],

    /**
     * ---------------------------------------------------------------
     * Navigation menu
     * ---------------------------------------------------------------
     */
    'menus' => [
        '<a href="/" class="nav-link"><i class="bi bi-house-door-fill"></i> Home</a>',
        '<a href="/clients" class="nav-link"><i class="bi bi-people-fill"></i> Clients</a>',
        '<a href="/education" class="nav-link"><i class="bi bi-mortarboard-fill"></i> Education</a>',
        '<a href="/experience" class="nav-link"><i class="bi bi-briefcase-fill"></i> Experience</a>',
        '<a href="/contact" class="nav-link"><i class="bi bi-envelope-fill"></i> Contact</a>'
    ],
];