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
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-7.99.99',
            'php' => '5.4.0',
            'cart' => '3.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
