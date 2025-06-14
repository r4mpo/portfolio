<?php

/**
 * ================================================================
 * Arquivo de Idioma - pt-br (Clientes)
 * ---------------------------------------------------------------
 * Este arquivo contém textos fixos utilizados na página de clientes.
 * Organizado em seções para facilitar manutenção e tradução.
 *
 * Como usar:
 * - No Controller: $lang = require __DIR__ . '/clients.php';
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
        'background' => 'images/banner/banner1.jpg',
        'title' => 'Clientes',
        'breadcrumb' => [
            ['text' => 'Home', 'link' => '#'],
            ['text' => 'Clientes', 'link' => '#'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Descrição da Página
     * ---------------------------------------------------------------
     */
    'section' => [
        'title' => 'Clientes',
        'subtitle' => 'Produtos e Projetos',
        'description' => '
            🚀 Esta seção ainda está em construção — e o próximo cliente pode ser você! <br>
            Transforme sua ideia em um projeto de sucesso. Desenvolvo soluções sob medida, com foco em performance,
            segurança e resultados reais. <br>
            👉 Seja você a primeira empresa ou empreendedor a fazer parte deste portfólio de sucesso.
        ',
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Cartões de Clientes (Cards)
     * ---------------------------------------------------------------
     */
    'cards' => [
        [
            'title' => 'Seu Projeto Aqui',
            'designation' => 'Cliente Satisfeito',
            'description' => 'Esta vaga está reservada para quem deseja levar seu negócio para outro nível com tecnologia de qualidade e soluções sob medida.',
            'svg' => '<svg width="100%" height="100%" viewBox="0 0 24 24" fill="#007bff" xmlns="http://www.w3.org/2000/svg"><path d="M3 3h18v18H3V3zm2 2v14h14V5H5z" /><path d="M7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h6v2H7v-2z" /></svg>',
            'socials' => [
                ['icon' => 'fab fa-whatsapp', 'link' => '#'],
                ['icon' => 'fab fa-instagram', 'link' => '#'],
                ['icon' => 'fab fa-linkedin', 'link' => '#'],
            ],
        ],
        [
            'title' => 'Próximo Case de Sucesso',
            'designation' => 'Seu Negócio',
            'description' => 'Vamos construir juntos uma solução digital que gere impacto, credibilidade e crescimento para sua empresa ou projeto.',
            'svg' => '<svg width="100%" height="100%" viewBox="0 0 24 24" fill="#28a745" xmlns="http://www.w3.org/2000/svg"><path d="M2 21l3-3h4l3 3-3 3H5l-3-3zm16.24-3.76l-4.24-4.24 1.41-1.41 4.24 4.24-1.41 1.41zm-6.35-6.35l-4.24-4.24 1.41-1.41 4.24 4.24-1.41 1.41zM21 2l-6.95 6.95 1.41 1.41L22.41 3.41 21 2z" /></svg>',
            'socials' => [
                ['icon' => 'fab fa-whatsapp', 'link' => '#'],
                ['icon' => 'fab fa-instagram', 'link' => '#'],
                ['icon' => 'fab fa-linkedin', 'link' => '#'],
            ],
        ],
        [
            'title' => 'Vamos Conversar?',
            'designation' => 'Projeto sob medida',
            'description' => 'Entre em contato e descubra como podemos transformar sua ideia em um projeto profissional, funcional e escalável.',
            'svg' => '<svg width="100%" height="100%" viewBox="0 0 24 24" fill="#fd7e14" xmlns="http://www.w3.org/2000/svg"><path d="M20 6h-4V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2H4c-1.1 0-2 .9-2 2v2h20V8c0-1.1-.9-2-2-2zM10 4h4v2h-4V4z" /><path d="M2 12v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8H2z" /></svg>',
            'socials' => [
                ['icon' => 'fab fa-whatsapp', 'link' => '#'],
                ['icon' => 'fab fa-instagram', 'link' => '#'],
                ['icon' => 'fab fa-linkedin', 'link' => '#'],
            ],
        ],
    ],

];