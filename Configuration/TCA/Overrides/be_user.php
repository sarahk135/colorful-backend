<?php
// Configuration/TCA/Overrides/be_user.php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addUserSetting(
    'colorful_icons',
    [
        'label' => 'Colorful Icons',
        'config' => [
            'type' => 'check',
        ],
    ],
    'after:theme'
);



