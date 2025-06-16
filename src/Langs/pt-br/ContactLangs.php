<?php

/**
 * ================================================================
 * Arquivo de Idioma - pt-br (Contato)
 * ---------------------------------------------------------------
 * Este arquivo contém textos fixos utilizados na página de contato.
 * Organizado em seções para facilitar manutenção e tradução.
 *
 * Como usar:
 * - No Controller: $lang = require __DIR__ . '/contact.php';
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
        'background' => 'images/banner/banner4.jpg',
        'title' => 'Contato',
        'breadcrumb' => [
            ['text' => 'Home', 'link' => '/'],
            ['text' => 'Contato', 'link' => '/contact'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Descrição da Página
     * ---------------------------------------------------------------
     */
    'section' => [
        'title' => 'Contato',
        'subtitle' => 'Faça um orçamento sem compromisso',
    ],

    /**
     * ---------------------------------------------------------------
     * Seção: Formulário de Contato
     * ---------------------------------------------------------------
     */
    'form' => [
        'action' => '/contact/send',
        'fields' => [
            [
                'type' => 'text',
                'label' => 'Nome',
                'id' => 'name',
                'name' => 'name',
                'required' => true,
            ],
            [
                'type' => 'email',
                'label' => 'E-mail',
                'id' => 'email',
                'name' => 'email',
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Assunto',
                'id' => 'subject',
                'name' => 'subject',
                'required' => false,
            ],
            [
                'type' => 'textarea',
                'label' => 'Mensagem',
                'id' => 'message',
                'name' => 'message',
                'rows' => 5,
                'required' => true,
            ],
        ],
        'submit_text' => 'Enviar',
    ],

];