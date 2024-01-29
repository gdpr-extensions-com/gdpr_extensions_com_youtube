<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GdprExtensionsComYoutube',
        'Gdpryoutube',
        [
            \GdprExtensionsCom\GdprExtensionsComYoutube\Controller\GdprYoutubeController::class => 'index'
        ],
        // non-cacheable actions
        [
            \GdprExtensionsCom\GdprExtensionsComYoutube\Controller\GdprYoutubeController::class => '',
            \GdprExtensionsCom\GdprExtensionsComYoutube\Controller\GdprManagerController::class => 'create, update, delete'
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    // register plugin for cookie widget
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GDPRExtensionsComYoutube',
        'Gdprcookiewidget',
        [
            \GdprExtensionsCom\GdprExtensionsComYoutube\Controller\GdprCookieWidgetController::class => 'index'
        ],
        // non-cacheable actions
        [],
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    gdprcookiewidget {
                        iconIdentifier = gdpr_extensions_com_youtube-plugin-gdpryoutube
                        title = cookie
                        description = LLL:EXT:gdpr_extensions_com_youtube/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_youtube_gdpryoutube.description
                        tt_content_defValues {
                            CType = list
                            list_type = gdprextensionscomyoutube_gdprcookiewidget
                        }
                    }
                }
                show = *
            }
       }'
    );
    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.common {
                elements {
                    gdpryoutube {
                        iconIdentifier = gdpr_extensions_com_youtube-plugin-gdpryoutube
                        title = LLL:EXT:gdpr_extensions_com_youtube/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_youtube_gdpryoutube.name
                        description = LLL:EXT:gdpr_extensions_com_youtube/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_youtube_gdpryoutube.description
                        tt_content_defValues {
                            CType = gdprextensionscomyoutube_gdpryoutube
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
