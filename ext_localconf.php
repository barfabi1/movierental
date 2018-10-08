<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ACME.Movierental',
            'Movierental',
            [
                'Movie' => 'list, addForm, add, show, updateForm, update, deleteConfirm, delete',
            ],
            // non-cacheable actions
            [
                'Movie' => 'list, addForm, add, show, updateForm, update, deleteConfirm, delete',
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    movierental {
                        iconIdentifier = movierental-plugin-movierental
                        title = LLL:EXT:movierental/Resources/Private/Language/locallang_db.xlf:tx_movierental_movierental.name
                        description = LLL:EXT:movierental/Resources/Private/Language/locallang_db.xlf:tx_movierental_movierental.description
                        tt_content_defValues {
                            CType = list
                            list_type = movierental_movierental
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

			$iconRegistry->registerIcon(
				'movierental-plugin-movierental',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:movierental/Resources/Public/Icons/user_plugin_movierental.svg']
			);

    }
);
