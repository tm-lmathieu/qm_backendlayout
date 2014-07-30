<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$_EXTKEY = $GLOBALS['_EXTKEY'] = 'qm_backendlayout';

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('gridelements')) {
    /* ===========================================================================
      Set TS
      =========================================================================== */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $_EXTKEY,
        'Configuration/TypoScript/gridelements',
        'Gridelements with Fluid (Example)'
    );

    /* ===========================================================================
      Set TCA
      =========================================================================== */
    $tempColumns = array(
        'template' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:qm_backendlayout/locallang_db.xml:tx_gridelements_backend_layout.template',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'template',
                array(
                    'maxitems' => 1
                ),
                'html'
            )
        )
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tx_gridelements_backend_layout',
        $tempColumns
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tx_gridelements_backend_layout',
        'appearance',
        'template'
    );
}
