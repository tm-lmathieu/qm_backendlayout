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
    'description' => "This extension adds a new FAL field into backend_layout records and, if installed, gridelements' backend layout records. It allows the BE user to select an HTML template file to render the content of the page using TypoScript's FLUIDTEMPLATE cObject.",
    'category' => 'fe',
    'shy' => 0,
    'version' => '1.0.1',
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
