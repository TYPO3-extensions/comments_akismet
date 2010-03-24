<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['comments']['externalSpamCheck'][$_EXTKEY] = 'EXT:comments_akismet/classes/class.tx_commentsakismet_akismet.php:tx_commentsakismet_Akismet->checkSpam';

?>