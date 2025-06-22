<?php

/**
 * ================================================================
 * Arquivo de Idioma - pt-br (Header)
 * ---------------------------------------------------------------
 * Contém textos fixos utilizados no cabeçalho do site (navegação).
 * Organizado para facilitar a tradução e manutenção.
 *
 * Como usar:
 * - No Controller: $langHeader = require __DIR__ . '/header.php';
 * - Na View ou função: use $langHeader['menu']['home'], por exemplo.
 * ================================================================
 */
return [
    /**
     * ---------------------------------------------------------------
     * Informações do site
     * ---------------------------------------------------------------
     */
    'lang_code' => 'pt-br',
    'site' => [
        'title' => 'Erick Agostinho (@r4mpo)',
        'description' => 'Portfólio de Erick Agostinho',
    ],

    /**
     * ---------------------------------------------------------------
     * Menu de navegação
     * ---------------------------------------------------------------
     */
    'menus' => [
        '<a href="/" class="nav-link"><i class="bi bi-house-door-fill"></i> Home</a>',
        '<a href="/clients" class="nav-link"><i class="bi bi-people-fill"></i> Clientes</a>',
        '<a href="/education" class="nav-link"><i class="bi bi-mortarboard-fill"></i> Escolaridade</a>',
        '<a href="/experience" class="nav-link"><i class="bi bi-briefcase-fill"></i> Experiência</a>',
        '<a href="/contact" class="nav-link"><i class="bi bi-envelope-fill"></i> Contato</a>'
    ],
];
