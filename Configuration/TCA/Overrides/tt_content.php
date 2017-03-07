<?php
defined('TYPO3_MODE') || die();

$boot = function () {
    // add flexform for plugin configuration
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['pagebrowse_pi1'] =
        'layout,select_key,pages,recursive';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['pagebrowse_pi1'] =
        'pi_flexform';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'pagebrowse_pi1',
        'FILE:EXT:pagebrowse/Configuration/FlexForms/flexform_pi1.xml'
    );

    // add frontend plugin
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        ['LLL:EXT:pagebrowse/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1', 'pagebrowse_pi1'],
        'list_type',
        'pagebrowse'
    );
};

$boot();
unset($boot);
