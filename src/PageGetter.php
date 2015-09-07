<?php

namespace MediaWiki\Services;

use MediaWiki\DataModel\Page;
use MediaWiki\DataModel\PageIdentifier;
use MediaWiki\DataModel\Revision;
use MediaWiki\DataModel\Title;

/**
 * @author Bene* < benestar.wikimedia@gmail.com >
 */
interface PageGetter {

	/**
	 * @param int $revisionId
	 *
	 * @return Page
	 */
	public function getFromRevisionId( $revisionId );

	/**
	 * @param string $title
	 *
	 * @return Page
	 */
	public function getFromTitleValue( $title );

	/**
	 * @param int $pageId
	 *
	 * @return Page
	 */
	public function getFromPageId( $pageId );

	/**
	 * @param Title $title
	 *
	 * @return Page
	 */
	public function getFromTitle( Title $title );

	/**
	 * @param PageIdentifier $pageIdentifier
	 *
	 * @return Page
	 */
	public function getFromPageIdentifier( PageIdentifier $pageIdentifier );

	/**
	 * @param Revision $revision
	 *
	 * @return Page
	 */
	public function getFromRevision( Revision $revision );

	/**
	 * @param Page $page
	 *
	 * @return Page
	 */
	public function getFromPage( Page $page );

}

