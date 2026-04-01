<?php

use MediaWiki\MediaWikiServices;
use MediaWiki\Output\OutputPage;

/**
 * SkinTemplate class for the Medik skin
 *
 * @ingroup Skins
 */
class SkinMedik extends SkinTemplate {
	/** @var string lowercase skin name */
	public $skinname = 'medik';
	/** @var string full skin name */
	public $stylename = 'Medik';
	/** @var string skin template */
	public $template = 'MedikTemplate';

	/**
	 * Add meta tags
	 *
	 * @param OutputPage $out OutputPage
	 */
	public function initPage( OutputPage $out ): void {
		parent::initPage( $out );

		$out->addMeta( 'theme-color', (string)$this->getConfig()->get( 'MedikColor' ) );

		if ( MediaWikiServices::getInstance()
			->getUserOptionsLookup()
			->getOption( $this->getUser(), 'skin-responsive' ) ) {
				$out->addMeta( 'viewport', 'width=device-width' );
		}
	}
}
