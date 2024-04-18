<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps',
        'label' => 'name',
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
        'searchFields' => 'name,kartenreihe,kartennummer,typ,massstab,preis,verlag,link',
        'iconfile' => 'EXT:skitourenroutenlist/Resources/Public/Icons/tx_skitourenroutenlist_domain_model_maps.gif'
    ],
    'interface' => [],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, ean, kartenreihe, kartennummer, typ, massstab, preis, verlag, link, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'ean' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.ean',
            'config' => [
				'type' => 'number',
				'size' => 4,
			],
        ],
        'kartenreihe' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.kartenreihe',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'kartennummer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.kartennummer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'typ' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.typ',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'massstab' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.massstab',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'preis' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.preis',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'verlag' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.verlag',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_domain_model_maps.link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    
    ],
];
