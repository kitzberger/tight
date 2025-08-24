<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Tight Backend',
    'description' => 'Tweaks the backend CSS of TYPO3 **13.4** to reduce the vast space set between the UI elements.',
    'category' => 'system',
    'state' => 'stable',
    'author' => 'Philipp Kitzberger',
    'author_email' => 'typo3@kitze.net',
    'author_company' => '',
    'version' => '1.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
