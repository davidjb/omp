<?php

/**
 * @file controllers/tab/settings/information/form/InformationForm.inc.php
 *
 * Copyright (c) 2003-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class InformationForm
 * @ingroup controllers_tab_settings_information_form
 *
 * @brief Form to edit press information.
 */

import('lib.pkp.classes.controllers.tab.settings.form.ContextSettingsForm');

class InformationForm extends ContextSettingsForm {

	/**
	 * Constructor.
	 */
	function InformationForm($wizardMode = false) {
		$settings = array(
			'readerInformation' => 'string',
			'authorInformation' => 'string',
			'librarianInformation' => 'string'
		);

		parent::ContextSettingsForm($settings, 'controllers/tab/settings/information/form/informationForm.tpl', $wizardMode);
	}


	//
	// Implement template methods from Form.
	//
	/**
	 * @see Form::getLocaleFieldNames()
	 */
	function getLocaleFieldNames() {
		return array('readerInformation', 'authorInformation', 'librarianInformation');
	}
}

?>
