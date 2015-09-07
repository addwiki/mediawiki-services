<?php

namespace MediaWiki\Services;

use MediaWiki\DataModel\LogList;

/**
 * @author Bene* < benestar.wikimedia@gmail.com >
 */
interface LogListGetter {

	/**
	 * @param string|null $type filter log entries by type
	 * @param string|null $action filter log entries by action, overrides $type
	 * @param int $namespace filter log entries in the given namespace
	 *
	 * @return LogList
	 */
	public function getLogList( $type = null, $action = null, $namespace = 0 );

}

