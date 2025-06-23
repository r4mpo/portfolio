<?php

/**
 * ================================================================
 * Language File - en (Contact)
 * ---------------------------------------------------------------
 * This file contains fixed texts used on the contact page.
 * Organized in sections to facilitate maintenance and translation.
 *
 * How to use:
 * - In the Controller: $lang = require __DIR__ . '/contact.php';
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
        'background' => 'images/banner/banner4.jpg',
        'title' => 'Contact',
        'breadcrumb' => [
            ['text' => 'Home', 'link' => '/'],
            ['text' => 'Contact', 'link' => '/contact'],
        ],
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Page Description
     * ---------------------------------------------------------------
     */
    'section' => [
        'title' => 'Contact',
        'subtitle' => 'Request a quote with no obligation',
    ],

    /**
     * ---------------------------------------------------------------
     * Section: Contact Form
     * ---------------------------------------------------------------
     */
    'form' => [
        'action' => '/contact/send',
        'fields' => [
            [
                'type' => 'text',
                'label' => 'Name',
                'id' => 'name',
                'name' => 'name',
                'required' => true,
            ],
            [
                'type' => 'email',
                'label' => 'Email',
                'id' => 'email',
                'name' => 'email',
                'required' => true,
            ],
            [
                'type' => 'text',
                'label' => 'Subject',
                'id' => 'subject',
                'name' => 'subject',
                'required' => false,
            ],
            [
                'type' => 'textarea',
                'label' => 'Message',
                'id' => 'message',
                'name' => 'message',
                'rows' => 5,
                'required' => true,
            ],
        ],
        'submit_text' => 'Send',
    ],

];
