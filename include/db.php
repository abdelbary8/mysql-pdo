<?php

include_once("class.Country.php");

$host = "localhost";
$user = "root";
$password = "root";
$db_name = 'database';
$port = 3306;
$dbh = dbhandler();

function dbhandler() {
	global $dbh, $host, $user, $password, $port, $db_name;

	if (isset($dbh)) return $dbh;

	try {
		$dbh = new PDO("mysql:host=$host;port=$port;dbname=$db_name", $user, $password, 
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    return $dbh;
	}
	catch (PDOException $e) {
	    echo 'Database Connection failed: ' . $e->getMessage();
	}	
}

function getAllCountries() {
	global $dbh;
	$query = $dbh->query("SELECT code, name FROM countries");
	return $query->fetchAll(\PDO::FETCH_CLASS, '\Country');
}

?>