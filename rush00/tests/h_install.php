#!/usr/bin/php
<?php
	// Connecteurs BD
	require_once("./DBaccess/DBconnect.php");

	// Connexion a mysql
	echo "Connexion SGBD: ";
	if (!$db = database_connect_noDB())
		exit("Erreur de connexion au SGBD\n");
	echo "OK\n";

	// Menage
	echo "Drop database DB_rush00: ";
	$sql = "DROP DATABASE `DB_rush00`;";
	$req = mysqli_query($db, $sql);
	$msg = mysqli_error($db);
	if ($msg)
		echo(mysqli_error($db) . "\n");
	echo "OK\n";

	// Creation de la BDD
	echo "Creation database DB_rush00: ";
	$sql = "CREATE DATABASE `DB_rush00`;";
	$req = mysqli_query($db, $sql);
	$msg = mysqli_error($db);
	if ($msg)
		exit (mysqli_error($db) . "\n");
	echo "OK\n";

	// Connexion a la base de donnees
	echo "Connexion database DB_rush00: ";
	if (!$db = database_connect_DB())
		exit("Erreur de connexion a la BDD\n");
	echo "OK\n";

	// Creation du catalogue
	// table des categories de produits
	echo "Creation catalogue - table TB_categorie: ";
	$sql = "CREATE TABLE `TB_categorie` (
			`id` SMALLINT NOT NULL AUTO_INCREMENT,
			`nom` CHAR(30) NOT NULL,
			PRIMARY KEY (`id`)
		);";
	$req = mysqli_query($db, $sql);
	$msg = mysqli_error($db);
	if ($msg)
		exit (mysqli_error($db) . "\n");
	echo "OK\n";

	// table des produits
	echo "Creation catalogue - table TB_produit: ";
	$sql = "CREATE TABLE `TB_produit` (
			`id` SMALLINT NOT NULL AUTO_INCREMENT,
			`id_categorie` SMALLINT,
			`nom` CHAR(30) NOT NULL,
			`auteur` CHAR(30) NOT NULL DEFAULT 'Inconnu',
			`prix` DECIMAL(13,2) NULL,
			`image_url` VARCHAR(1024) NULL,
			PRIMARY KEY (`id`),
			FOREIGN KEY (`id_categorie`) REFERENCES TB_categorie (id)
		);";
	$req = mysqli_query($db, $sql);
	$msg = mysqli_error($db);
	if ($msg)
		exit (mysqli_error($db) . "\n");
	echo "OK\n";





	// Chargement des donnees
	include "initDB.php";
























?>
