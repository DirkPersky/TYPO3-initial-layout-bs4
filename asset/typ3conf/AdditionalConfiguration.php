<?php
$system = 0; //0 = develop, 1 = production, 2 = performance
switch ($system) {
    case 0:
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '1';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '*';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandler'] = 'TYPO3\CMS\Core\Error\ErrorHandler';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandlerErrors'] = E_ALL ^ E_NOTICE;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = E_ALL ^ E_NOTICE ^ E_WARNING ^ E_USER_ERROR ^ E_USER_NOTICE ^ E_USER_WARNING;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['debugExceptionHandler'] = 'TYPO3\CMS\Core\Error\DebugExceptionHandler';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['productionExceptionHandler'] = 'TYPO3\CMS\Core\Error\ProductionExceptionHandler';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '0';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLog'] = 'error_log';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_DLOG'] = '1';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_errorDLOG'] = '1';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_exceptionDLOG'] = '1';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = 'console';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = '1';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['extCache'] = '0';
        break;
    case 1:
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '1';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '127.0.0.*';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandler'] = 'TYPO3\CMS\Core\Error\ErrorHandler';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '2';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLog'] = 'error_log,,2;syslog,LOCAL0,,3';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_DLOG'] = '0';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_errorDLOG'] = '0';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_exceptionDLOG'] = '0';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandlerErrors'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '';

        include 'CacheConfiguration.php';

        break;
    case 2:
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '0';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandler'] = '';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['debugExceptionHandler'] = '';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['productionExceptionHandler'] = '';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLog'] = '';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_DLOG'] = '0';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_errorDLOG'] = '0';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_exceptionDLOG'] = '0';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '3';

        include 'CacheConfiguration.php';

        break;
}
/**
 * WebP Handling
 */
$GLOBALS['TYPO3_CONF_VARS']['GFX']['gdlib'] = true;
$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg,webp';
/**
 * Remove Chash
 */
$GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'] = array_merge(
    $GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'],
    [
        'tx_news_pi1[@widget_0][currentPage]'
    ]
);
