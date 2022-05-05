<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['a11ymevideo_videoplayer'] = 'tx_a11ymevideo_videoplayer';
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['a11ymevideo_videoplayer2'] = 'tx_a11ymevideo_videoplayer2';
    $tempColumns = [
        'tx_a11ymevideo_audiodescription' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_a11ymevideo_audiodescription',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'mp3',
                                ],
                            ],
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'mp3',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => '0',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => true,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                    ],
                    'collapseAll' => '1',
                    'expandSingle' => '0',
                    'fileUploadAllowed' => '1',
                    'showAllLocalizationLink' => '0',
                    'showPossibleLocalizationRecords' => '0',
                    'showRemovedLocalizationRecords' => '0',
                    'showSynchronizationLink' => '0',
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_audiodescription_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_audiodescription',
        ],
        'tx_a11ymevideo_audiodescriptionlink' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'mail,page,folder,telephone',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_audiodescriptionlink_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_audiodescriptionlink',
        ],
        'tx_a11ymevideo_captions' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_a11ymevideo_captions',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'vtt',
                                ],
                            ],
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'vtt',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => '0',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => true,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                    ],
                    'collapseAll' => '1',
                    'expandSingle' => '1',
                    'fileUploadAllowed' => '1',
                    'showAllLocalizationLink' => '0',
                    'showPossibleLocalizationRecords' => '0',
                    'showRemovedLocalizationRecords' => '0',
                    'showSynchronizationLink' => '0',
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_captions_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_captions',
        ],
        'tx_a11ymevideo_captionslink' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'mail,page,folder,telephone',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_captionslink_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_captionslink',
        ],
        'tx_a11ymevideo_fulltextalternative' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'mail,folder,telephone',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
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
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_header_visibility.I.0',
                        '0',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_header_visibility.I.1',
                        '1',
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
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.0',
                        'default',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.1',
                        'en',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.2',
                        'fr',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.3',
                        'de',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.4',
                        'es',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.5',
                        'ca',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.6',
                        'zh',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.7',
                        'zh-cn',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.8',
                        'hr',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.9',
                        'cs',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.10',
                        'nl',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.11',
                        'hu',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.12',
                        'it',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.13',
                        'ja',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.14',
                        'ko',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.15',
                        'ms',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.16',
                        'fa',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.17',
                        'pl',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.18',
                        'pt',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.19',
                        'ro',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.20',
                        'ru',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.21',
                        'sk',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.22',
                        'sv',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.23',
                        'tr',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_language.I.24',
                        'uk',
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
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_a11ymevideo_mp4',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'mp4',
                                ],
                            ],
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'mp4',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => '0',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => true,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                    ],
                    'collapseAll' => '1',
                    'expandSingle' => '0',
                    'fileUploadAllowed' => '1',
                    'showAllLocalizationLink' => '0',
                    'showPossibleLocalizationRecords' => '0',
                    'showRemovedLocalizationRecords' => '0',
                    'showSynchronizationLink' => '0',
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'maxitems' => '1',
                'minitems' => '1',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mp4_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mp4',
        ],
        'tx_a11ymevideo_mp4link' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'required,trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'mail,page,folder,telephone',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mp4link_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_mp4link',
        ],
        'tx_a11ymevideo_posterimg' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_a11ymevideo_posterimg',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'jpg,jpeg,png',
                                ],
                            ],
                        ],
                    ],
                    'types' => [
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'jpg,jpeg,png',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => '0',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => true,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                    ],
                    'collapseAll' => '1',
                    'expandSingle' => '0',
                    'fileUploadAllowed' => '1',
                    'showAllLocalizationLink' => '0',
                    'showPossibleLocalizationRecords' => '0',
                    'showRemovedLocalizationRecords' => '0',
                    'showSynchronizationLink' => '0',
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_posterimg_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_posterimg',
        ],
        'tx_a11ymevideo_signlanguage' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_a11ymevideo_signlanguage',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'mp4',
                                ],
                            ],
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'mp4',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => '0',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => true,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                    ],
                    'collapseAll' => '1',
                    'expandSingle' => '0',
                    'fileUploadAllowed' => '1',
                    'showAllLocalizationLink' => '0',
                    'showPossibleLocalizationRecords' => '0',
                    'showRemovedLocalizationRecords' => '0',
                    'showSynchronizationLink' => '0',
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguage_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguage',
        ],
        'tx_a11ymevideo_signlanguage_webm' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_a11ymevideo_signlanguage_webm',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'webm',
                                ],
                            ],
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'webm',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => '0',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => true,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                    ],
                    'collapseAll' => '1',
                    'expandSingle' => '0',
                    'fileUploadAllowed' => '1',
                    'showAllLocalizationLink' => '0',
                    'showPossibleLocalizationRecords' => '0',
                    'showRemovedLocalizationRecords' => '0',
                    'showSynchronizationLink' => '0',
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguage_webm_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguage_webm',
        ],
        'tx_a11ymevideo_signlanguagelink' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'mail,page,folder,telephone',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguagelink_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_signlanguagelink',
        ],
        'tx_a11ymevideo_signlanguagelink_webm' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'mail,page,folder,telephone',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
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
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videooptions.I.0',
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
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition.I.0',
                        '2',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition.I.1',
                        '3',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition.I.2',
                        '0',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videoposition.I.3',
                        '1',
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
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videowidth.I.0',
                        '1',
                    ],
                    [
                        'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_videowidth.I.1',
                        '0',
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
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_a11ymevideo_webm',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'webm',
                                ],
                            ],
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                        'parameters' => [
                            'allowedFileExtensions' => 'webm',
                        ],
                    ],
                ],
                'appearance' => [
                    'useSortable' => '0',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'height' => '45m',
                    ],
                    'enabledControls' => [
                        'info' => true,
                        'new' => false,
                        'dragdrop' => true,
                        'sort' => false,
                        'hide' => true,
                        'delete' => true,
                    ],
                    'collapseAll' => '1',
                    'expandSingle' => '0',
                    'fileUploadAllowed' => '1',
                    'showAllLocalizationLink' => '0',
                    'showPossibleLocalizationRecords' => '0',
                    'showRemovedLocalizationRecords' => '0',
                    'showSynchronizationLink' => '0',
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'maxitems' => '1',
                'minitems' => '0',
            ],
            'description' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_webm_description',
            'exclude' => '1',
            'label' => 'LLL:EXT:a11y_me_video/Resources/Private/Language/locallang_db.xlf:tt_content.tx_a11ymevideo_webm',
        ],
        'tx_a11ymevideo_webmlink' => [
            'config' => [
                'autocomplete' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => '0',
                ],
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'mail,page,folder,telephone',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
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
