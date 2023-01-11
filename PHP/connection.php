<?php

//database connection
require_once 'config.php';
class Connection
{
	public static function make($db_host, $db_name, $db_user, $db_password)
	{
		$dsn = "mysql:host=$db_host;dbname=$db_name;charset=UTF8";

		try {
			$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

			return new PDO($dsn, $db_user, $db_password, $options);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}

return Connection::make($db_host, $db_name, $db_user, $db_password);

?>