<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Golf.Skitourenroutenlist',
            'Skitourenlist',
            [
                'Route' => 'list'
            ],
            // non-cacheable actions
            [
                'Route' => '',
                'Maps' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Golf.Skitourenroutenlist',
            'Skitourenkarten',
            [
                'Maps' => 'list'
            ],
            // non-cacheable actions
            [
                'Route' => '',
                'Maps' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    skitourenlist {
                        iconIdentifier = skitourenroutenlist-plugin-skitourenlist
                        title = LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_skitourenlist.name
                        description = LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_skitourenlist.description
                        tt_content_defValues {
                            CType = list
                            list_type = skitourenroutenlist_skitourenlist
                        }
                    }
                    skitourenkarten {
                        iconIdentifier = skitourenroutenlist-plugin-skitourenkarten
                        title = LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_skitourenkarten.name
                        description = LLL:EXT:skitourenroutenlist/Resources/Private/Language/locallang_db.xlf:tx_skitourenroutenlist_skitourenkarten.description
                        tt_content_defValues {
                            CType = list
                            list_type = skitourenroutenlist_skitourenkarten
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'skitourenroutenlist-plugin-skitourenlist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:skitourenroutenlist/Resources/Public/Icons/user_plugin_skitourenlist.svg']
			);
		
			$iconRegistry->registerIcon(
				'skitourenroutenlist-plugin-skitourenkarten',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:skitourenroutenlist/Resources/Public/Icons/user_plugin_skitourenkarten.svg']
			);
		
    }
);
