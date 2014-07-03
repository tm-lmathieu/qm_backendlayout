<?php

/* * *************************************************************
 * Extension Manager/Repository config file for ext "qm_backendlayout".
 *
 * Auto generated 18-04-2014 15:15
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 * ************************************************************* */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'QmBackendlayout',
    'description' => 'Extend backend layout and gridelements with fluid',
    'category' => 'fe',
    'shy' => 0,
    'version' => '1.0.0',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => 0,
    'modify_tables' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Michael Miousse, Guy Couronné',
    'author_email' => 'michael.miousse@qcmedia.ca, guy.couronne@qcmedia.ca',
    'author_company' => 'QcMédia',
    'CGLcompliance' => null,
    'CGLcompliance_note' => null,
    'constraints' =>
    array(
        'depends' =>
        array(
            'typo3' => '6.0.0-6.2.99',
        ),
        'conflicts' =>
        array(
        ),
        'suggests' =>
        array(
            'gridelements' => '2.0.0-',
        ),
    ),
);
