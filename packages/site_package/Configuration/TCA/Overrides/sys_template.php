<?php
defined('TYPO3') or die();

call_user_func(function()
{
   $extensionKey = 'site_package';

   /**
    * Default TypoScript
    */
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
      $extensionKey,
      'setup',
      'Site Package Static Template',
      "@import 'EXT:site_package/Configuration/setup.typoscript'"
   );
});