<?php
// Connexion au SGBD
function database_connect_noDB()
{
	$add = "127.0.0.1";
	$user = "root";
	$pass = "root";
	$mysqli = mysqli_connect($add, $user, $pass);
	if (mysqli_connect_errno($mysqli))
	{
		echo "Echec de connexion au SGBD : " . mysqli_connect_error() ."\n";
		return (NULL);
	}
	return $mysqli;
}
// Connexion a la Base de donnees
function database_connect_DB()
{
	$add = "127.0.0.1";
	$user = "root";
	$pass = "root";
	$dbname = "DB_rush00";
	$mysqli = mysqli_connect($add, $user, $pass, $dbname);
	if (mysqli_connect_errno($mysqli))
	{
		echo "Echec de connexion à la base de données : " . mysqli_connect_error() ."\n";
		return (NULL);
	}
	return $mysqli;
}
?>
