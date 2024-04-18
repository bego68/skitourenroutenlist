<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route',
        'label' => 'routenname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
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
    'interface' => [],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, routenname, lawinengefahr, gesamtanspruch, skitechnischebewertung, hoehenmeter, gehzeit, schoenheit, beliebtheit, hangexposition, mountainregion_name, mountain_name, mountain_height, mountain_latitude, mountain_longitude, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
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
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
                'items' => [
                    ['label' => '', 'value' => '']
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
				'type' => 'datetime',
         		'format' => 'date',
				'size' => 13,
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
			],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
				'type' => 'datetime',
         		'format' => 'date',
				'size' => 13,
				'checkbox' => 0,
				'default' => 0,
				'range' => [
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				],
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
				'type' => 'number',
				'size' => 4,
			],
        ],
        'gesamtanspruch' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.gesamtanspruch',
            'config' => [
				'type' => 'number',
				'size' => 4,
			],
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
				'type' => 'number',
				'size' => 4,
			],
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
				'type' => 'number',
				'size' => 4,
			],
        ],
        'beliebtheit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.beliebtheit',
            'config' => [
				'type' => 'number',
				'size' => 4,
			],
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
				'type' => 'number',
				'size' => 4,
			],
        ],
        'mountain_latitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.mountain_latitude',
            'config' => [
				'type' => 'number',
				'format' => 'decimal'
			 ]
        ],
        'mountain_longitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_route.mountain_longitude',
            'config' => [
				'type' => 'number',
				'format' => 'decimal'
			 ]
        ],
    
    ],
];
