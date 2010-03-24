<?php

########################################################################
# Extension Manager/Repository config file for ext: "comments_akismet"
#
# Auto generated 21-04-2009 10:47
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Akismet Spam Blocking for Comments',
	'description' => 'Uses Akismet to block spam',
	'category' => 'fe',
	'author' => 'Ingo Renner',
	'author_email' => 'ingo@typo3.org',
	'shy' => '',
	'dependencies' => 'comments',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.9.9',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.1-0.0.0',
			'comments' => '1.3.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:18:{s:9:"ChangeLog";s:4:"5c5b";s:31:"class.tx_commentsipbl_hooks.php";s:4:"e611";s:20:"createstaticdata.php";s:4:"ef3c";s:17:"debugger-slow.png";s:4:"553b";s:21:"ext_conf_template.txt";s:4:"e01c";s:12:"ext_icon.gif";s:4:"ff1e";s:17:"ext_localconf.php";s:4:"21e1";s:14:"ext_tables.php";s:4:"5b53";s:14:"ext_tables.sql";s:4:"fa7c";s:25:"ext_tables_static+adt.sql";s:4:"149f";s:30:"icon_tx_commentsipbl_local.gif";s:4:"ff1e";s:31:"icon_tx_commentsipbl_static.gif";s:4:"737e";s:16:"locallang_db.xml";s:4:"f5fc";s:7:"tca.php";s:4:"0acf";s:14:"doc/manual.sxw";s:4:"68a3";s:13:"res/email.txt";s:4:"feca";s:45:"static/ip_blocking_for_comments/constants.txt";s:4:"0c19";s:41:"static/ip_blocking_for_comments/setup.txt";s:4:"d41d";}',
	'suggests' => array(
	),
);

?>