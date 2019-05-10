<?php

/**
 * Extension Manager/Repository config file for ext "ajaxmap_example_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Ajaxmap Example Site',
    'description' => 'Example site package for the TYPO3 CMS extension ajaxmap',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Dwenzel\\AjaxmapExampleSite\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Dirk Wenzel',
    'author_email' => 'der-wenzel@gmx.de',
    'author_company' => 'DWenzel',
    'version' => '1.0.0',
];
