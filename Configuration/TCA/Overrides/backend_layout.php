<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$_EXTKEY = $GLOBALS['_EXTKEY'] = 'qm_backendlayout';

/* ===========================================================================
  Set TS
  =========================================================================== */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/backend_layout',
    'Backend Layout with Fluid (Example)'
);

/* ===========================================================================
  Set TCA
  =========================================================================== */
$tempColumns = array(
    'template' => array(
        'label' => 'LLL:EXT:qm_backendlayout/locallang_db.xml:backend_layout.template',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'template',
            array(
                'maxitems' => 1
            ),
            'html'
        )
    ),
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'backend_layout',
    $tempColumns
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToAllPalettesOfField(
    'backend_layout',
    'config',
    'template'
);
