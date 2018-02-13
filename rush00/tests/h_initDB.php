<?php

	// Creation des categories
	echo "Insertion des categories: ";
	$categorie_name = array("Sculptures", "Peintures", "Photos");
	foreach($categorie_name as $name)
	{
		$req = "INSERT INTO TB_categorie (nom) VALUES('$name')";
		$res = mysqli_query($db, $req);
		$msg = mysqli_error($db);
		if ($msg)
			exit (mysqli_error($db) . "\n");
	}
	echo "OK\n";

	// Creation des produits
	echo "Insertion des produits: ";
	$req = "INSERT INTO TB_produit (id_categorie, nom, auteur, prix, image_url)
	 VALUES(1,'Monkeybird','Inconnu',35000,'http://img.over-blog-kiwi.com/0/98/90/89/20160930/ob_dc70f4_monkeybird.jpg')";
	$res = mysqli_query($db, $req);
	$msg = mysqli_error($db);
	if ($msg)
		exit (mysqli_error($db) . "\n");
	$req = "INSERT INTO TB_produit (id_categorie, nom, auteur, prix, image_url)
	 VALUES(1,'Explosed Pencil','Inconnu',200000,'https://mag.lesgrandsducs.com/wp-content/uploads/2016/10/IMG_6591-e1475698082510.jpg')";
	$res = mysqli_query($db, $req);
	$msg = mysqli_error($db);
	if ($msg)
		exit (mysqli_error($db) . "\n");
	$req = "INSERT INTO TB_produit (id_categorie, nom, auteur, prix, image_url)
	 VALUES(2,'Renaissance','Roti',200000,'http://criteres-editions.com/456-thickbox_default/70-art42.jpg')";
	$res = mysqli_query($db, $req);
	$msg = mysqli_error($db);
	if ($msg)
		exit (mysqli_error($db) . "\n");
	$req = "INSERT INTO TB_produit (id_categorie, nom, auteur, prix, image_url)
	 VALUES(2,'Rat love','Banksy',3200000,'https://theawesomer.com/photos/2016/06/medicom_banksy_flower_thrower_love_rat_sculptures_5.jpg')";
	$res = mysqli_query($db, $req);
	$msg = mysqli_error($db);
	if ($msg)
		exit (mysqli_error($db) . "\n");
	echo "OK\n";
 ?>
