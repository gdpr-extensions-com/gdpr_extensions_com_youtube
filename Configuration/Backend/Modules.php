<?php

if ((int)\TYPO3\CMS\Core\Utility\VersionNumberUtility::getCurrentTypo3Version() >= 12) {
    $allRegisteredModules = $GLOBALS['TBE_MODULES']['web'];
    if (stripos($allRegisteredModules, 'gdprmanager') == false){

        return[
            'gdprmanager' => [
                'parent' => 'web',
                'position' => [],
                'access' => 'user,group',
                'iconIdentifier' => 'gdpr_extensions_com_youtube-plugin-gdpryoutube',
                'path' => '/module/gdprmanager',
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

    }}


