<?php

namespace MediaWiki\Services;

use MediaWiki\DataModel\Pages;

/**
 * @author Bene* < benestar.wikimedia@gmail.com >
 */
interface PageListGetter {

	/**
	 * @return Pages
	 */
	public function getPages();

}

