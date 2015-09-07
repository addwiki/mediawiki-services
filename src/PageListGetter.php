<?php

namespace MediaWiki\Services;

using MediaWiki\DataModel\Pages;

/**
 * @author Bene* < benestar.wikimedia@gmail.com >
 */
interface PageListGetter {

	/**
	 * @return Pages
	 */
	public function getPages();

}

