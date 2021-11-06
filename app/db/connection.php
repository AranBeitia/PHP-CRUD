<?php

class Connection {
	public static function Connect() {
		define('server', 'localhost');
		define('name_db', 'CRUD');
		define('user', 'root');
		define('password', '');

		$options = array(PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

		try {
			$connection = new PDO("mysql:host-".server."; dbname-".name_db, user, password, $options);
			return $connection;
		} catch (Exception $error){
			die("the error of connection is: ". $error -> getMessage());
		}
	}
}