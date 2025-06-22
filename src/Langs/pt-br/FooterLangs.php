<?php

/**
 * ================================================================
 * Arquivo de Idioma - pt-br (Footer)
 * ---------------------------------------------------------------
 * Contém textos utilizados no rodapé do site.
 * Organizado por seções para facilitar manutenção e tradução.
 *
 * Como usar:
 * - No Controller: $langFooter = require __DIR__ . '/footer.php';
 * - Na View ou função: use $langFooter['about']['title'], por exemplo.
 * ================================================================
 */

return [

    /**
     * ---------------------------------------------------------------
     * Seção: Sobre
     * ---------------------------------------------------------------
     */
    'about' => [
        'title' => 'Sobre',
        'description' => 'Sou desenvolvedor backend, apaixonado por PHP, Laravel, arquitetura de software e boas práticas. 
            Neste espaço compartilho projetos, experiências e meu portfólio profissional.',
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: O que eu faço
     * ---------------------------------------------------------------
     */
    'what_i_do' => [
        'title' => 'O que eu faço',
        'description' => 'Trabalho com desenvolvimento backend, APIs, microsserviços e também na modelagem de arquiteturas escaláveis, seguindo padrões de mercado e boas práticas. 
            <br><br>Siga-me nas redes para mais conteúdos e novidades.',
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Links úteis
     * ---------------------------------------------------------------
     */
    'links' => [
        'title' => 'Links úteis',
        'items' => [
            ['text' => 'Projetos', 'link' => '/#repositories'],
            ['text' => 'Sobre mim', 'link' => '/#about_me'],
            ['text' => 'Contato', 'link' => '/contact'],
            ['text' => 'GitHub', 'link' => 'https://github.com/r4mpo', 'external' => true],
            ['text' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/erick-agostinho-684563227/', 'external' => true],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Direitos autorais
     * ---------------------------------------------------------------
     */
    'copyright' => [
        'text' => 'Todos os direitos reservados.',
        'menus' => [
            ['text' => 'Sobre', 'link' => '/#about_me'],
            ['text' => 'Projetos', 'link' => '/#repositories'],
            ['text' => 'Contato', 'link' => '/contact'],
        ],
    ],

];