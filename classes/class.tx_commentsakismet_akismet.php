<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Ingo Renner <ingo@typo3.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


require_once(t3lib_extMgm::extPath('comments_akismet') . 'lib/Akismet.class.php');

/**
 * Akismet Spam Checker for EXT:comments
 *
 * @author	Ingo Renner <ingo@typo3.org>
 * @package TYPO3
 * @subpackage comments_akismet
 */
class tx_commentsakismet_Akismet {

	/**
	 * constructor for class tx_commentsakismet_Akismet
	 */
	public function __construct() {
		$this->configuration = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_commentsakismet.'];
	}

	public function checkSpam(array $parameters, tx_comments_pi1 $parentPlugin) {
		$points = 0;

		if ($this->isSpam($parameters['formdata'])) {
			$points = $parentPlugin->conf['spamProtect.']['spamCutOffPoint'] + 1;
		}

		return $points;
	}

	protected function isSpam($comment) {
		$akismet = new Akismet(
			$this->configuration['url'],
			$this->configuration['apiKey']
		);

		$akismet->setCommentAuthor(trim($comment['firstname'] . ' ' . $comment['lastname']));
		$akismet->setCommentAuthorEmail($comment['email']);
		$akismet->setCommentAuthorURL($comment['homepage']);
		$akismet->setCommentContent($comment['content']);
		$akismet->setPermalink(t3lib_div::getIndpEnv('TYPO3_REQUEST_URL'));
		$akismet->setCommentType('comment');
		$akismet->setUserIP(t3lib_div::getIndpEnv('REMOTE_ADDR'));

		$isSpam = $akismet->isCommentSpam();

		return $isSpam;
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/comments_akismet/classes/class.tx_commentsakismet_akismet.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/comments_akismet/classes/class.tx_commentsakismet_akismet.php']);
}

?>