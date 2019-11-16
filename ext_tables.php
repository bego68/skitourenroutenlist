<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Golf.Skitourenroutenlist',
            'Skitourenlist',
            'Skitourenlist'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('skitourenroutenlist', 'Configuration/TypoScript', 'Skitouren-Routen-List');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_skitourenroutenlist_domain_model_route', 'EXT:skitourenroutenlist/Resources/Private/Language/locallang_csh_tx_skitourenroutenlist_domain_model_route.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_skitourenroutenlist_domain_model_route');

    }
);
