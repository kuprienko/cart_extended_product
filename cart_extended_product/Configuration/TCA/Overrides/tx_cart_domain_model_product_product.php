<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute1']['label'] = 'PZN [Attribut 1]';
$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute1']['config']['eval'] = '';
$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute1']['config']['default'] = '';

$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute2']['label'] = 'VE in Stk. [Attribut 2]';
$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute2']['config']['eval'] = '';
$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute2']['config']['default'] = '';

$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute3']['label'] = 'FELD NICHT BELEGT';
$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute3']['config']['eval'] = '';
$GLOBALS['TCA']['tx_cart_domain_model_product_product']['columns']['service_attribute3']['config']['default'] = '';


$_LLL = 'LLL:EXT:cart_extended_product/Resources/Private/Language/locallang_db.xlf';

$temporaryColumns = [
    'abmessungen' => [
        'exclude' => 1,
        'label' => $_LLL . ':tx_cart_domain_model_product_product.abmessungen',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_cart_domain_model_product_product',
    $temporaryColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_cart_domain_model_product_product',
    'abmessungen',
    '',
    'after:service_attribute3'
);
