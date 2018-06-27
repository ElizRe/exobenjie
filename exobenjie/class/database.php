<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Database  //Connexion à la base de données 
{

	private static $dbHost = "localhost";
	private static $dbName = "car";
	private static $dbUser = "root";
	private static $dbUserPassword = "simplonco";

	private static $connection = null;

	public static function connect()
	{
		try
		{
			self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
		}
		catch(PDOExeption $e)
		{
			die($e->getMessage());
		}
		return self::$connection;
	}

	public static function disconnect()
	{
		self::$connection = null;
	}
}




?>
