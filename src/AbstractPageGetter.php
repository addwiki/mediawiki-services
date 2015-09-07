<?php

namespace MediaWiki\Services;

use MediaWiki\DataModel\Page;
use MediaWiki\DataModel\PageIdentifier;
use MediaWiki\DataModel\Revision;
use MediaWiki\DataModel\Title;
use InvalidArgumentException;

/**
 * @author Bene* < benestar.wikimedia@gmail.com >
 */
abstract class AbstractPageGetter implements PageGetter {

	/**
	 * @param Title $title
	 *
	 * @return Page
	 */
	public function getFromTitle( Title $title ) {
		return $this->getFromTitleValue( $title->getText() );
	}

	/**
	 * @param PageIdentifier $pageIdentifier
	 *
	 * @return Page
	 *
	 * @throws InvalidArgumentException
	 */
	public function getFromPageIdentifier( PageIdentifier $pageIdentifier ) {
		if ( !$pageIdentifier->identifiesPage() ) {
			throw new InvalidArgumentException( '$pageIdentifier does not identify a page' );
		}

		if ( !is_null( $pageIdentifier->getId() ) ) {
			return $this->getFromPageId( $pageIdentifier->getId() );
		} else {
			return $this->getFromTitle( $pageIdentifier->getTitle() );
		}
	}

	/**
	 * @param Revision $revision
	 *
	 * @return Page
	 *
	 * @throws InvalidArgumentException
	 */
	public function getFromRevision( Revision $revision ) {
		return $this->getFromPageIdentifier( $revision->getPageIdentifier() );
	}

	/**
	 * @param Page $page
	 *
	 * @return Page
	 *
	 * @throws InvalidArgumentException
	 */
	public function getFromPage( Page $page ) {
		return $this->getFromPageIdentifier( $page->getPageIdentifier() );
	}

}
