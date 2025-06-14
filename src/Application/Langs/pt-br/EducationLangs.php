<?php

/**
 * ================================================================
 * Arquivo de Idioma - pt-br (Escolaridade)
 * ---------------------------------------------------------------
 * Este arquivo contém textos fixos utilizados na página de escolaridade.
 * Organizado em seções para facilitar manutenção e tradução.
 *
 * Como usar:
 * - No Controller: $lang = require __DIR__ . '/education.php';
 * - Na View: use $lang['chave'] para acessar os textos.
 *
 * Dica:
 * - Pode conter HTML para formatação visual nas views.
 * ================================================================
 */

return [

    /**
     * ---------------------------------------------------------------
     * Seção: Banner (Topo da Página)
     * ---------------------------------------------------------------
     */
    'banner' => [
        'background' => 'images/banner/banner2.jpg',
        'title' => 'Escolaridade',
        'breadcrumb' => [
            ['text' => 'Home', 'link' => '#'],
            ['text' => 'Escolaridade', 'link' => '#'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Descrição da Página
     * ---------------------------------------------------------------
     */
    'section' => [
        'title' => 'Formação Acadêmica',
        'subtitle' => 'Minha trajetória educacional',
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Cartões de Escolaridade (Cards)
     * ---------------------------------------------------------------
     */
    'cards' => [
        [
            'title' => 'Pós-graduação em Desenvolvimento Web',
            'subtitle' => 'Faculdade Focus (Cursando)',
            'description' => 'Atualmente estou me especializando em Desenvolvimento Web, aprofundando conhecimentos em tecnologias modernas, melhores práticas de desenvolvimento e arquitetura de sistemas.',
            'link' => [
                'url' => 'https://faculdadefocus.com.br/curso/pos-graduacao-em-desenvolvimento-web',
                'text' => 'Saiba mais',
            ],
            'svg' => 'postgraduate',
        ],
        [
            'title' => 'Análise e Desenvolvimento de Sistemas',
            'subtitle' => 'Universidade Paulista (UNIP) – Batatais, SP<br> [06/2021 – 06/2023]',
            'description' => 'Graduação que proporcionou sólida base em Análise de Sistemas, Banco de Dados, Cibersegurança e Engenharia de Software. Essencial para minha inserção no mercado e desenvolvimento como profissional de tecnologia.',
            'link' => [
                'url' => 'https://www.unip.br/cursos/graduacao/tecnologicos/analise_desenvolvimento_sistemas.aspx',
                'text' => 'Saiba mais',
            ],
            'svg' => 'graduation',
        ],
        [
            'title' => 'Técnico em Desenvolvimento de Sistemas',
            'subtitle' => 'ETEC Antônio de Pádua Cardoso – Batatais, SP<br> [01/2020 – 06/2021]',
            'description' => 'Curso técnico com foco em Programação Web, Banco de Dados, Análise de Sistemas, segurança da informação e desenvolvimento de sistemas web com HTML, CSS, JavaScript, PHP e SQL Server.',
            'link' => [
                'url' => 'https://www.cps.sp.gov.br/cursos-etec/desenvolvimento-de-sistemas/',
                'text' => 'Saiba mais',
            ],
            'svg' => 'technical',
        ],
    ],

];