<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/* ===========================================================================
  Set TS
  =========================================================================== */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/backend_layout',
    'Backend Layout with Fluid (Example)'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/gridelements',
    'Gridelements with Fluid (Example)'
);

/* ===========================================================================
  Set TCA
  =========================================================================== */
//backend_layout
$tempColumns = array(
    'template' => array(
        'label' => 'LLL:EXT:qm_backendlayout/locallang_db.xml:backend_layout.template',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => array(
                'fieldname' => 'template'
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'foreign_selector_fieldTcaOverride' => array(
                'config' => array(
                    'appearance' => array(
                        'elementBrowserType' => 'file',
                        'elementBrowserAllowed' => 'html'
                    )
                )
            ),
            'filter' => array(
                array(
                    'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                    'parameters' => array(
                        'allowedFileExtensions' => 'html',
                        'disallowedFileExtensions' => '*'
                    )
                )
            ),
            'appearance' => array(
                'useSortable' => true,
                'headerThumbnail' => array(
                    'field' => 'uid_local',
                    'width' => '45',
                    'height' => '45c',
                ),
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords' => false,
                'showSynchronizationLink' => false,
                'showAllLocalizationLink' => false,
                'enabledControls' => array(
                    'info' => false,
                    'new' => false,
                    'dragdrop' => true,
                    'sort' => false,
                    'hide' => true,
                    'delete' => true,
                    'localize' => true,
                ),
            ),
            'behaviour' => array(
                'localizationMode' => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ),
            'maxitems' => 1
        )
    ),
);
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('backend_layout');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'backend_layout',
    $tempColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToAllPalettesOfField(
    'backend_layout',
    'config',
    'template'
);

//gridelements
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('gridelements')) {
    $tempColumns = array(
        'template' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:qm_backendlayout/locallang_db.xml:tx_gridelements_backend_layout.template',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => array(
                    'fieldname' => 'template'
                ),
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'foreign_selector_fieldTcaOverride' => array(
                    'config' => array(
                        'appearance' => array(
                            'elementBrowserType' => 'file',
                            'elementBrowserAllowed' => 'html'
                        )
                    )
                ),
                'filter' => array(
                    array(
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => array(
                            'allowedFileExtensions' => 'html',
                            'disallowedFileExtensions' => '*'
                        )
                    )
                ),
                'appearance' => array(
                    'useSortable' => true,
                    'headerThumbnail' => array(
                        'field' => 'uid_local',
                        'width' => '45',
                        'height' => '45c',
                    ),
                    'showPossibleLocalizationRecords' => false,
                    'showRemovedLocalizationRecords' => false,
                    'showSynchronizationLink' => false,
                    'showAllLocalizationLink' => false,
                    'enabledControls' => array(
                        'info' => false,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                        'localize' => true,
                    ),
                ),
                'behaviour' => array(
                    'localizationMode' => 'select',
                    'localizeChildrenAtParentLocalization' => true,
                ),
                'maxitems' => 1
            )
        )
    );
    \TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tx_gridelements_backend_layout');


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
