<?php

use Nette\Security as NS;


/**
 * Users authenticator.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class Authenticator extends Nette\Object implements NS\IAuthenticator
{
	/** @var Nette\Database\Table\Selection */
	private $curators;
	
	private $salt_pattern;

	public function __construct(\Nette\Database\Table\Selection $curators)
	{
		$this->curators = $curators;
		$this->salt_pattern = array('1, 3, 4, 8, 14, 15, 21, 23, 28, 38');

	}

	/**
	 * Performs an authentication
	 * @param  array
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;
		$row = $this->curators->where('username', $username)->fetch();

		if (!$row) {
			throw new NS\AuthenticationException("Uživatel '$username' nebyl nalezen.", self::IDENTITY_NOT_FOUND);
		}

		if ($row->password !== $this->calculateHash($password)) {
			throw new NS\AuthenticationException("Špatné heslo.", self::INVALID_CREDENTIAL);
		}

		return new NS\Identity($row->username, NULL, $row->toArray());

	}
	
	
	/**
	 * Computes salted password hash.
	 * @param  string
	 * @return string
	 */
	public function calculateHash($password)
	{
       	return hash('sha512', $password . str_repeat(PASSWORD_SALT, 10));	
	}
	

}
