<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cart Extended Product',
    'description' => 'Shopping Cart for TYPO3 - Extended Product',
    'category' => 'services',
    'author' => 'Elena Kuprienko',
    'author_email' => 'elena@kuprienko.de',
    'author_company' => 'flux IT',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
            'php' => '5.4.0',
            'cart' => '4.5.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
