<?php

use TYPO3\CMS\Core\Core\Environment;

$GLOBALS['TYPO3_CONF_VARS']['BE']['lockSSL'] = true;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['phpTimeZone'] = 'UTC';

$GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromAddress'] = 'info@zdrei.com';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['defaultMailFromName'] = 'zdrei';

$context = Environment::getContext();
if ((string)$context->isDevelopment() === 'Development/Local') {
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = 'smtp';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_sendmail_command'] = '';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_encrypt'] = '';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_password'] = '';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'localhost:1025';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_username'] = '';
}
