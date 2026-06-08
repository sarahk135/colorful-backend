<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Colorful Backend',
    'description' => 'Adds back color to the module menu icons in TYPO3 backend. Can be activated in user settings. Works with dark/light mode and standard backend themes.',
    'category' => 'backend',
    'author' => 'Sarah Klose',
    'author_email' => '',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];