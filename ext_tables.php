<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Skitourenroutenlist',
            'Skitourenlist',
            'Skitourenlist'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Skitourenroutenlist',
            'Skitourenkarten',
            'Skitouren Karten'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('skitourenroutenlist', 'Configuration/TypoScript', 'Skitouren-Routen-List');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_skitourenroutenlist_domain_model_route', 'EXT:skitourenroutenlist/Resources/Private/Language/locallang_csh_tx_skitourenroutenlist_domain_model_route.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_skitourenroutenlist_domain_model_route');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_skitourenroutenlist_domain_model_maps', 'EXT:skitourenroutenlist/Resources/Private/Language/locallang_csh_tx_skitourenroutenlist_domain_model_maps.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_skitourenroutenlist_domain_model_maps');

    }
);
