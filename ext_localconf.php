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
                'Route' => ''
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
		
    }
);
