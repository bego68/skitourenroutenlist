<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route',
        'label' => 'routenname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'routenname,skitechnischebewertung,gehzeit,hangexposition,mountainregion_name,mountain_name',
        'iconfile' => 'EXT:skitourenroutenlist/Resources/Public/Icons/tx_skitourenroutenlist_domain_model_route.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, routenname, lawinengefahr, gesamtanspruch, skitechnischebewertung, hoehenmeter, gehzeit, schoenheit, beliebtheit, hangexposition, mountainregion_name, mountain_name, mountain_height, mountain_latitude, mountain_longitude',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, routenname, lawinengefahr, gesamtanspruch, skitechnischebewertung, hoehenmeter, gehzeit, schoenheit, beliebtheit, hangexposition, mountainregion_name, mountain_name, mountain_height, mountain_latitude, mountain_longitude, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_skitourenroutenlist_domain_model_route',
                'foreign_table_where' => 'AND {#tx_skitourenroutenlist_domain_model_route}.{#pid}=###CURRENT_PID### AND {#tx_skitourenroutenlist_domain_model_route}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'routenname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.routenname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'lawinengefahr' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.lawinengefahr',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'gesamtanspruch' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.gesamtanspruch',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'skitechnischebewertung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.skitechnischebewertung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'hoehenmeter' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.hoehenmeter',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'gehzeit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.gehzeit',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'schoenheit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.schoenheit',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'beliebtheit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.beliebtheit',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'hangexposition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.hangexposition',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'mountainregion_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.mountainregion_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'mountain_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.mountain_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'mountain_height' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.mountain_height',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'mountain_latitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.mountain_latitude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'mountain_longitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.mountain_longitude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
    
    ],
];
