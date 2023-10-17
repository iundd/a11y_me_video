<?php

$iconList = [];
foreach (['tx_a11ymevideo_videoplayer' => 'tx_a11ymevideo_videoplayer.svg']
         as $identifier => $path) {
    $iconList[$identifier] = [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:a11y_me_video/Resources/Public/Icons/' . $path,
    ];
}

return $iconList;
