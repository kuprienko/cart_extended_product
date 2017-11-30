<?php

defined('TYPO3_MODE') or die();

/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$signalSlotDispatcher->connect(
    'Extcode\Cart\Utility\ProductUtility',
    'changeNewCartProduct',
    'Turn3\CartExtendedProduct\Utility\ProductUtility',
    'changeNewCartProduct'
);

