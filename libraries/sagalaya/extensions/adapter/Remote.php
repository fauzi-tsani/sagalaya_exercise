<?php

namespace sagalaya\extensions\adapter;

/**
 * Authenticate using remote function
 * @author Mukhamad Ikhsan
 */
class Remote extends \lithium\core\Object {

	protected $credentials;

	public function check($credentials, array $options = array()) {
		$this->credentials = $credentials;
		return call_user_func(array($options['api'], $options['function']), $credentials);
	}

	public function clear(array $options = array()) {

	}

	public function set($data, array $options = array()) {
		return $this->credentials;
	}

}

?>