<?php

defined('TYPO3') || die();

call_user_func(function () {
    // Register content element icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'tx_a11ymevideo_videoplayer',
        \FriendsOfTYPO3\FontawesomeProvider\Imaging\IconProvider\FontawesomeIconProvider::class,
        [
            'name' => 'film',
        ]
    );
    $iconRegistry->registerIcon(
        'tx_a11ymevideo_videoplayer2',
        \FriendsOfTYPO3\FontawesomeProvider\Imaging\IconProvider\FontawesomeIconProvider::class,
        [
            'name' => 'film',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
        @import "EXT:a11y_me_video/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig"
        @import "EXT:a11y_me_video/Configuration/TsConfig/Page/BackendPreview.tsconfig"
    ');
});
