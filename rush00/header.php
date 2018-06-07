<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="rush00.css">

		<!-- POLICES PERSO -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<!-- /POLICES PERSO -->

		<!-- FLAVICON. -->
		<link rel="apple-touch-icon" sizes="57x57"         href="./images/flavicon42/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60"         href="./images/flavicon42/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72"         href="./images/flavicon42/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76"         href="./images/flavicon42/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114"       href="./images/flavicon42/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120"       href="./images/flavicon42/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144"       href="./images/flavicon42/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152"       href="./images/flavicon42/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180"       href="./images/flavicon42/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="./images/flavicon42/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32"    href="./images/flavicon42/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96"    href="./images/flavicon42/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16"    href="./images/flavicon42/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="./images/flavicon42/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- /FLAVICON -->

		<title>Rush42</title>
	</head>


	<body>
		<div id="site">
			<header class="header">
					<div id="header_logo">
						<a href="index.php" title="Retour acceuil"><img src="./images/42_nb.png" alt="Logo" title="Logo"/></a>
					</div>
					<div id="header_menu">
				
				<!--  	
						Ici le menu peut etre dynamique   
						Sinon ecrire en dur
						En cliquant dessus on ouvre la page 'categorie.php'
						La variable "cat" aura l'id de la categorie
						Et ainsi elle affichera les nfos de la categorie champ 'texte' dans 'categories'

				-->
				<div class="contentMenu">
			<div id="header_menu">
						<a href="categorie.php?cat=2">PRÊT-À-PORTER</a>
						<a href="categorie.php?cat=3">CHAUSSURES</a>
						<a href="categorie.php?cat=4">ACCESSOIRES</a>
					</div>
		</div>




					</div>
					<div id="header_user">
						<?php
						
							if (isset($_SESSION['log']) && $_SESSION['log'] == TRUE)
								echo '<span>My name is '.$_SESSION['login'].'</span>';
							else
								echo '<span>connect please</span>';
						?>
					</div>
					<div id="header_button_zone">
						<a href="connexion.php" title="">
							<img src="./images/icones/ico_user.jpg"    alt="Se connecter ou s'inscrire"    title="Se connecter ou s'inscrire"/></a>
						<a href="magasins.php" title="">
							<img src="./images/icones/ico_pin_map.png" alt="Magasins"                      title="Magasins"/></a>
						<a href="souhaits.php" title="">
							<img src="./images/icones/ico_coeur0.png"  alt="Afficher ma liste de souhaits" title="Afficher ma liste de souhaits"/></a>
						<a href="panier.php" title="">
							<img src="./images/icones/ico_caddy0.png"  alt="Pannier et commande"           title="Pannier et commande"/></a>
					</div>
			</header>
