<?php
defined('TYPO3_MODE') || die();

$boot = function ($_EXTKEY) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
        $_EXTKEY,
        'pi1/class.tx_pagebrowse_pi1.php',
        '_pi1',
        'list_type',
        1
    );
};

$boot($_EXTKEY);
unset($boot);
