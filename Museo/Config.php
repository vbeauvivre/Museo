<?php

namespace Museo;

class Config {

	function __construct() {
		$this->config = array(
			'dbHost'     => 'localhost',
			'dbName'     => 'museo',
			'dbUser'     => 'root',
			'dbPassword' => 'ciatalm777',
			'debug'      => true,
		);
	}

	function get($key) {
		return $this->config[$key];
	}
}
