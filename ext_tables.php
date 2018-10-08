<?php
defined('TYPO3_MODE') || die('Access denied.');

$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_movierental';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_movielisting.xml');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ACME.Movierental',
            'Movierental',
            'Movie Rental System'
        );

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'ACME.Movierental',
                'web', // Make module a submodule of 'web'
                'movierantalmodule', // Submodule key
                '', // Position
                [
                    'Movie' => 'list, show','Genre' => 'list, show',
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:movierental/Resources/Public/Icons/user_mod_movierantalmodule.svg',
                    'labels' => 'LLL:EXT:movierental/Resources/Private/Language/locallang_movierantalmodule.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('movierental', 'Configuration/TypoScript', 'Movie Rental System');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_movierental_domain_model_movie', 'EXT:movierental/Resources/Private/Language/locallang_csh_tx_movierental_domain_model_movie.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_movierental_domain_model_movie');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_movierental_domain_model_genre', 'EXT:movierental/Resources/Private/Language/locallang_csh_tx_movierental_domain_model_genre.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_movierental_domain_model_genre');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_movierental_domain_model_director', 'EXT:movierental/Resources/Private/Language/locallang_csh_tx_movierental_domain_model_director.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_movierental_domain_model_director');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_movierental_domain_model_studio', 'EXT:movierental/Resources/Private/Language/locallang_csh_tx_movierental_domain_model_studio.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_movierental_domain_model_studio');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_movierental_domain_model_medium', 'EXT:movierental/Resources/Private/Language/locallang_csh_tx_movierental_domain_model_medium.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_movierental_domain_model_medium');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_movierental_domain_model_mediumtype', 'EXT:movierental/Resources/Private/Language/locallang_csh_tx_movierental_domain_model_mediumtype.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_movierental_domain_model_mediumtype');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_movierental_domain_model_comment', 'EXT:movierental/Resources/Private/Language/locallang_csh_tx_movierental_domain_model_comment.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_movierental_domain_model_comment');

        //$pluginSignature = 'movierental_movierental';
        //$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        //\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:movierental/Configuration/FlexForms/flexform_movielisting.xml');

        //$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
        //var_dump($extensionName);die();
        //$pluginSignature = strtolower($extensionName) . '_movierental';$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        //\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_movielisting.xml');

    }
);

//Z innego extension
//$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['newsfilter_filter'] = 'recursive,select_key,pages';
//$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['newsfilter_filter'] = 'pi_flexform';
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('newsfilter_filter',
//    'FILE:EXT:news_categoryfilter/Configuration/FlexForms/flexform_news_filter.xml');
