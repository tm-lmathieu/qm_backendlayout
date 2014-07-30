<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

//Fix for TCA rewritted
require(
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath(
        $_EXTKEY,
        'Configuration/TCA/Overrides/tx_gridelements_backendlayout.php'
    )
);
