<?php

if ((int)\TYPO3\CMS\Core\Utility\VersionNumberUtility::getCurrentTypo3Version() >= 12) {

        return[
            // need to change main logo
            'gdpr' => [
                'labels' => 'LLL:EXT:gdpr_extensions_com_youtube/Resources/Private/Language/locallang_mod_web.xlf',
                'iconIdentifier' => 'gdpr_extensions_com_tab',
                'navigationComponent' => '@typo3/backend/page-tree/page-tree-element',
            ],
            'youtube' => [
                'parent' => 'gdpr',
                'position' => [],
                'access' => 'user,group',
                'iconIdentifier' => 'gdpr_extensions_com_youtube-plugin-gdpryoutube',
                'path' => '/module/youtube',
                'labels' => 'LLL:EXT:gdpr_extensions_com_youtube/Resources/Private/Language/locallang_gdprmanager.xlf',
                'extensionName' => 'GdprExtensionsComYoutube',
                'controllerActions' => [
                    \GdprExtensionsCom\GdprExtensionsComYoutube\Controller\GdprManagerController::class => [
                        'list',
                        'index',
                        'show',
                        'new',
                        'create',
                        'edit',
                        'update',
                        'delete',
                        'uploadImage'
                    ],
                ],
            ]
        ];

}


