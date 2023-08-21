<?php
defined('TYPO3') || die();

call_user_func(function () {

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['a11ymevideo_videoplayer'] = 'tx_a11ymevideo_videoplayer';
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['a11ymevideo_videoplayer2'] = 'tx_a11ymevideo_videoplayer2';
    $tempColumns = [
        'tx_a11ymevideo_audiodescription' => [
            'config' => [
                'type' => 'file',
                'allowed' => ['mp3'],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_audiodescription_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_audiodescription',
        ],
        'tx_a11ymevideo_audiodescriptionlink' => [
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['file'],
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_audiodescriptionlink_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_audiodescriptionlink',
        ],
        'tx_a11ymevideo_captions' => [
            'config' => [
                'type' => 'file',
                'allowed' => ['vtt'],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_captions_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_captions',
        ],
        'tx_a11ymevideo_captionslink' => [
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['file'],
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_captionslink_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_captionslink',
        ],
        'tx_a11ymevideo_fulltextalternative' => [
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['page', 'url', 'record'],
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_fulltextalternative_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_fulltextalternative',
        ],
        'tx_a11ymevideo_header_visibility' => [
            'config' => [
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'items' => [
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_header_visibility.I.0',
                        'value' => '0',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_header_visibility.I.1',
                        'value' => '1',
                    ],
                ],
                'renderType' => 'selectSingle',
                'type' => 'select',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_header_visibility',
        ],
        'tx_a11ymevideo_language' => [
            'config' => [
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'items' => [
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.0',
                        'value' => 'default',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.1',
                        'value' => 'en',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.2',
                        'value' => 'fr',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.3',
                        'value' => 'de',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.4',
                        'value' => 'es',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.5',
                        'value' => 'ca',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.6',
                        'value' => 'zh',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.7',
                        'value' => 'zh-cn',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.8',
                        'value' => 'hr',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.9',
                        'value' => 'cs',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.10',
                        'value' => 'nl',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.11',
                        'value' => 'hu',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.12',
                        'value' => 'it',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.13',
                        'value' => 'ja',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.14',
                        'value' => 'ko',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.15',
                        'value' => 'ms',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.16',
                        'value' => 'fa',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.17',
                        'value' => 'pl',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.18',
                        'value' => 'pt',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.19',
                        'value' => 'ro',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.20',
                        'value' => 'ru',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.21',
                        'value' => 'sk',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.22',
                        'value' => 'sv',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.23',
                        'value' => 'tr',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.24',
                        'value' => 'uk',
                    ],
                ],
                'renderType' => 'selectSingle',
                'type' => 'select',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language',
        ],
        'tx_a11ymevideo_mp4' => [
            'config' => [
                'type' => 'file',
                'allowed' => ['mp4'],
                'maxitems' => '1',
                'minitems' => '1',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mp4_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mp4',
        ],
        'tx_a11ymevideo_mp4link' => [
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['file'],
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mp4link_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mp4link',
        ],
        'tx_a11ymevideo_posterimg' => [
            'config' => [
                'type' => 'file',
                'allowed' => 'common-image-types',
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_posterimg_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_posterimg',
        ],
        'tx_a11ymevideo_signlanguage' => [
            'config' => [
                'type' => 'file',
                'allowed' => ['mp4'],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguage_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguage',
        ],
        'tx_a11ymevideo_signlanguage_webm' => [
            'config' => [
                'type' => 'file',
                'allowed' => ['webm'],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguage_webm_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguage_webm',
        ],
        'tx_a11ymevideo_signlanguagelink' => [
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['file'],
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguagelink_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguagelink',
        ],
        'tx_a11ymevideo_signlanguagelink_webm' => [
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['file'],
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguagelink_webm_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguagelink_webm',
        ],
        'tx_a11ymevideo_videooptions' => [
            'config' => [
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'default' => '0',
                'items' => [
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videooptions.I.0',
                    ],
                ],
                'type' => 'check',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videooptions',
        ],
        'tx_a11ymevideo_videoposition' => [
            'config' => [
                'autoSizeMax' => '1',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'items' => [
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition.I.0',
                        'value' => '2',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition.I.1',
                        'value' => '3',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition.I.2',
                        'value' => '0',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition.I.3',
                        'value' => '1',
                    ],
                ],
                'maxitems' => '1',
                'renderType' => 'selectSingle',
                'type' => 'select',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition',
        ],
        'tx_a11ymevideo_videowidth' => [
            'config' => [
                'autoSizeMax' => '1',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'items' => [
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videowidth.I.0',
                        'value' => '1',
                    ],
                    [
                        'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videowidth.I.1',
                        'value' => '0',
                    ],
                ],
                'maxitems' => '1',
                'renderType' => 'selectSingle',
                'type' => 'select',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videowidth',
        ],
        'tx_a11ymevideo_webm' => [
            'config' => [
                'type' => 'file',
                'allowed' => ['webm'],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_webm_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_webm',
        ],
        'tx_a11ymevideo_webmlink' => [
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['file'],
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_webmlink_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_webmlink',
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._a11ymevideo_',
        '--div--',
    ];
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.CType.a11ymevideo_videoplayer',
        'a11ymevideo_videoplayer',
        'tx_a11ymevideo_videoplayer',
    ];
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.CType.a11ymevideo_videoplayer2',
        'a11ymevideo_videoplayer2',
        'tx_a11ymevideo_videoplayer2',
    ];
    $tempTypes = [
        'a11ymevideo_videoplayer' => [
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => 1,
                    ],
                ],
            ],
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,header_position,tx_a11ymevideo_header_visibility,date,header_link,subheader,bodytext,--div--;LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mainvideo_tab,tx_a11ymevideo_language,tx_a11ymevideo_videoposition,tx_a11ymevideo_videowidth,tx_a11ymevideo_posterimg,tx_a11ymevideo_mp4,tx_a11ymevideo_webm,--div--;LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_accessibility_tab,tx_a11ymevideo_captions,tx_a11ymevideo_signlanguage,tx_a11ymevideo_signlanguage_webm,tx_a11ymevideo_audiodescription,tx_a11ymevideo_fulltextalternative,tx_a11ymevideo_videooptions,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, --palette--;LLL:EXT:site_package_base/Resources/Private/Language/Database.xlf:tt_content.site_package_base_device_visibility_palette;site_package_base_device_visibility_palette,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ],
        'a11ymevideo_videoplayer2' => [
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => 1,
                    ],
                ],
            ],
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,header_layout,header_position,tx_a11ymevideo_header_visibility,date,header_link,subheader,bodytext,--div--;LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mainvideo_tab,tx_a11ymevideo_language,tx_a11ymevideo_videoposition,tx_a11ymevideo_videowidth,tx_a11ymevideo_posterimg,tx_a11ymevideo_mp4link,tx_a11ymevideo_webmlink,--div--;LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_accessibility_tab,tx_a11ymevideo_captionslink,tx_a11ymevideo_signlanguagelink,tx_a11ymevideo_signlanguagelink_webm,tx_a11ymevideo_audiodescriptionlink,tx_a11ymevideo_fulltextalternative,tx_a11ymevideo_videooptions,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames, --palette--;LLL:EXT:site_package_base/Resources/Private/Language/Database.xlf:tt_content.site_package_base_device_visibility_palette;site_package_base_device_visibility_palette,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ],
    ];
    $GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'a11y_me_video',
        'Configuration/TypoScript/',
        'a11y_me_video'
    );

});
