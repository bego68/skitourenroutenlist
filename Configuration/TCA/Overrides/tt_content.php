<?php

defined('TYPO3') or die();

(static function (): void {
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
})();