<?php

/**
 * ================================================================
 * Arquivo de Idioma - pt-br (Experiência Profissional)
 * ---------------------------------------------------------------
 * Este arquivo contém textos fixos utilizados na página de experiências profissionais.
 * Organizado em seções para facilitar manutenção e tradução.
 *
 * Como usar:
 * - No Controller: $lang = require __DIR__ . '/experience.php';
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
        'background' => 'images/banner/banner3.jpg',
        'title' => 'Experiência',
        'breadcrumb' => [
            ['text' => 'Home', 'link' => '#'],
            ['text' => 'Experiência', 'link' => '#'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Descrição da Página
     * ---------------------------------------------------------------
     */
    'section' => [
        'title' => 'Experiência',
        'subtitle' => 'Minha trajetória profissional',
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Cartões de Experiências (Cards)
     * ---------------------------------------------------------------
     */
    'cards' => [
        [
            'title' => 'Analista Programador PHP',
            'subtitle' => 'Grupo CRIAR - Ribeirão Preto, SP<br> [08/2023 - Atualmente]',
            'description' => 'Atuação em desenvolvimento web presencial com foco em back-end PHP (Laravel, CakePHP, CodeIgniter), utilizando ferramentas como PHPStorm, Docker, Git e Linux. Criação de interfaces responsivas com HTML, CSS, JS, Bootstrap e jQuery. Desenvolvimento e manutenção de APIs RESTful com autenticação, integração a bancos de dados e documentação via Swagger. Experiência na evolução de sistemas internos, controle de estoque, integração com Power BI e sistemas do Detran. Participação no projeto e-SILOBAG, com foco em APIs e microsserviços para sensores IoT com comunicação via satélite, apresentado na Agrishow 2025.',
            'link' => [
                'url' => 'https://grupocriar.com.br/',
                'text' => 'Saiba mais',
            ],
            'svg' => '<svg width="60" height="60" viewBox="0 0 24 24" fill="#007bff" xmlns="http://www.w3.org/2000/svg"><path d="M12 2a2 2 0 012 2v1.17a3.001 3.001 0 01.83 5.659V13a3 3 0 11-2 0v-2.171A3.001 3.001 0 0112 5.17V4a2 2 0 010-4zm0 18a2 2 0 110 4 2 2 0 010-4zm8-8a2 2 0 110 4 2 2 0 010-4zm-16 0a2 2 0 110 4 2 2 0 010-4z" /></svg>',
        ],
        [
            'title' => 'Programador Trainee',
            'subtitle' => 'ELECTRA Informática – Remoto<br> [12/2022 – 08/2023]',
            'description' => 'Experiência em desenvolvimento e manutenção de sistemas monolíticos e baseados em microsserviços, incluindo SPAs, ERPs e APIs REST. Criação de blogs e e-commerces em WordPress com customizações avançadas e plugin próprio para emissão de NF-e via PlugBoleto. Implementação de segurança em Laravel com Spatie, controle de permissões e papéis de usuário. Atuação em bancos de dados com operações SQL em ambientes de teste e produção. Destaque para o Sistema de Controle de Doações da Escola VeraCruz, com integração de pagamentos e geração de relatórios financeiros.',
            'link' => [
                'url' => 'https://electra.com.br/',
                'text' => 'Saiba mais',
            ],
            'svg' => ' <svg width="60" height="60" viewBox="0 0 24 24" fill="#28a745" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 4.24 2 7v10c0 2.76 4.48 5 10 5s10-2.24 10-5V7c0-2.76-4.48-5-10-5zm0 2c4.41 0 8 .9 8 2s-3.59 2-8 2-8-.9-8-2 3.59-2 8-2zm0 16c-4.41 0-8-.9-8-2V13c1.77 1.07 5.08 1.5 8 1.5s6.23-.43 8-1.5v5c0 1.1-3.59 2-8 2z" /></svg>',
        ],
        [
            'title' => 'Estagiário de Desenvolvimento',
            'subtitle' => 'ELECTRA Informática – Remoto<br> [07/2022 – 12/2022]',
            'description' => 'Início como desenvolvedor full stack com foco em back-end PHP (Laravel e CodeIgniter), atuando em sistemas ERP, integrações com Cielo, criação de CRUDs e correções de bugs. Experiência com HTML, CSS e JavaScript para manutenção de landing pages e sistemas legados. Responsável por migrações de servidores, leitura de XML de NF-e e persistência de dados. Uso de Git/GitLab, metodologia ágil (Kanban) e participação em alinhamentos técnicos. Monitoramento de backups para garantir a integridade dos dados.',
            'link' => [
                'url' => 'https://electra.com.br/',
                'text' => 'Saiba mais',
            ],
            'svg' => ' <svg width="60" height="60" viewBox="0 0 24 24" fill="#fd7e14" xmlns="http://www.w3.org/2000/svg"><path d="M19.14,12.94c0.04,-0.31 0.06,-0.63 0.06,-0.94s-0.02,-0.63 -0.06,-0.94l2.03,-1.58c0.18,-0.14 0.23,-0.4 0.12,-0.61l-1.92,-3.32c-0.11,-0.21 -0.37,-0.3 -0.59,-0.22l-2.39,0.96c-0.5,-0.38 -1.05,-0.7 -1.65,-0.94L14.5,2.81c-0.05,-0.23 -0.25,-0.4 -0.49,-0.4h-3.98c-0.24,0 -0.44,0.17 -0.49,0.4l-0.36,2.48c-0.6,0.24 -1.16,0.56 -1.65,0.94l-2.39,-0.96c-0.23,-0.09 -0.48,0.01 -0.59,0.22l-1.92,3.32c-0.12,0.21 -0.07,0.47 0.12,0.61l2.03,1.58c-0.04,0.31 -0.06,0.63 -0.06,0.94s0.02,0.63 0.06,0.94l-2.03,1.58c-0.18,0.14 -0.23,0.4 -0.12,0.61l1.92,3.32c0.11,0.21 0.37,0.3 0.59,0.22l2.39,-0.96c0.5,0.38 1.05,0.7 1.65,0.94l0.36,2.48c0.05,0.23 0.25,0.4 0.49,0.4h3.98c0.24,0 0.44,-0.17 0.49,-0.4l0.36,-2.48c0.6,-0.24 1.16,-0.56 1.65,-0.94l2.39,0.96c0.23,0.09 0.48,-0.01 0.59,-0.22l1.92,-3.32c0.11,-0.21 0.06,-0.47 -0.12,-0.61l-2.03,-1.58ZM12,15.5c-1.93,0 -3.5,-1.57 -3.5,-3.5s1.57,-3.5 3.5,-3.5 3.5,1.57 3.5,3.5 -1.57,3.5 -3.5,3.5Z" /></svg>',
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Botão de Download de Currículo
     * ---------------------------------------------------------------
     */
    'resume_button' => [
        'text' => 'Currículo',
        'icon' => 'bi bi-filetype-pdf',
        'url' => '/pdf/curriculo.pdf',
    ],

];