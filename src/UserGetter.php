<?php

namespace MediaWiki\Services;

use MediaWiki\DataModel\User;

/**
 * @author Bene* < benestar.wikimedia@gmail.com >
 */
interface UserGetter {

	/**
	 * @param string $userName
	 *
	 * @return User
	 */
	public function getUser( $userName );

	/**
	 * @param string[] $userNames
	 *
	 * @return User[]
	 */
	public function getUsers( array $userNames );

}

