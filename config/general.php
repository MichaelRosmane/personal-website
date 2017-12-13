<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 */

return [
    // ------------------------------------------------------------------------------------------------ Global settings
    '*' => [
        'defaultWeekStartDay' => 1,
        'enableCsrfProtection' => true,
        'cpTrigger' => 'manage-content',
        'securityKey' => getenv('SECURITY_KEY'),
    ],

    // --------------------------------------------------------------------------------------- Dev environment settings
    'dev' => [
        'siteUrl' => 'http://personal-website.local',
        'devMode' => true,
        'omitScriptNameInUrls' => false,
    ],

    // ----------------------------------------------------------------------------------- Staging environment settings
    'staging' => [
        'siteUrl' => null,
        'omitScriptNameInUrls' => true,
    ],

    // -------------------------------------------------------------------------------- Production environment settings
    'production' => [
        'siteUrl' => 'http://michaelrosmane.be',
        'omitScriptNameInUrls' => true,
    ],
];
