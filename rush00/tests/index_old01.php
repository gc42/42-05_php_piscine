<?php
	$_SESSION['log'] = true;
	$_SESSION['login'] = "Pieds de plomb !";
?>

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
						<a href="#">NOUVEAUTÉS</a>
						<a href="#">PRÊT-À-PORTER</a>
						<a href="#">CHAUSSURES</a>
						<a href="#">ACCESSOIRES</a>
						<a href="#">SOLDES</a>
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
						<a href="connexion.html" title="">
							<img src="./images/ico_user.jpg"    alt="Se connecter ou s'inscrire"    title="Se connecter ou s'inscrire"/></a>
						<a href="magasins.html" title="">
							<img src="./images/ico_pin_map.png" alt="Magasins"                      title="Magasins"/></a>
						<a href="souhaits,html" title="">
							<img src="./images/ico_coeur0.png"  alt="Afficher ma liste de souhaits" title="Afficher ma liste de souhaits"/></a>
						<a href="panier.html" title="">
							<img src="./images/ico_caddy0.png"  alt="Pannier et commande"           title="Pannier et commande"/></a>
					</div>
			</header>




			<section id="content">
				<div class="product_all">

				<?php
					echo '<div class="product_tile">';
							echo '<div class="product_tile__love">';
							echo '</div>';
							echo '<div class="product_tile__image_produit">';
								echo '<p class="cat_titre">Manteaux</p>';
								echo '<p class="cat_description">Les manteaux de The Big Foot Compagny sont chauds et d\'une fabrication exemplaire</p>';
							echo '</div>';
							// echo '<div class="product_tile__texte">';
							// 	echo '<p>Description du produit avec un peu plus de texte qui decrit le tissus et la façon, ainsi que les conditions climatiques lors de sa fabrication. Aucun poste ne demarre ce matin, c\'est l\'enfer !!</p>';
							// 	echo '<p>420,00 &euro;</p>';
							// echo '</div>';
						echo '</div>';

					$nbr = 1;
					while($nbr != 6)
					{

						echo '<div class="product_tile">';
							echo '<div class="product_tile__love">';
								echo '<a href="" title="Ajouer à mes favoris"><img class="img_love" src="./images/ico_coeur_noir0.png"/></a>';
							echo '</div>';
							echo '<div class="product_tile__image_produit">';
								echo '<img class="img_produit" src="./images/p_costumes1_0.jpeg" alt="NomProduit" title="NomProduit"/>';
							echo '</div>';
							echo '<div class="product_tile__texte">';
								echo '<p>Description du produit avec un peu plus de texte qui decrit le tissus et la façon, ainsi que les conditions climatiques lors de sa fabrication. Aucun poste ne demarre ce matin, c\'est l\'enfer !!</p>';
								echo '<p>420,00 &euro;</p>';
							echo '</div>';
						echo '</div>';

						$nbr++;
					}
				?>
				</div> <!-- /product_all -->
				<!-- BACKGROUND_WHITE END -->
			</section> <!-- /content -->




			<footer>
				<!-- BACKGROUND_BLACK -->
				<div id="foot_wrapper">
					<div id="foot_services">
						<div id="services_stories">
							<h1>Fashion Stories</h1>
							<hr>
							<p>Laissez vous inspirer par des histoires exclusives qui vous donnent un apperçu de l'univers de Big foot</p>
						</div>
						<div id="services_contact">
							<h1>Contact</h1>
							<hr>
							<p><img src="./images/ico_phone.png" alt="phone number" />+33 1 111111</p>
							<p><img src="./images/ico_enveloppe.png" alt="Ecrivez-nous" />Écrivez-nous</p>
							<a href="magasins.html" title="Trouver un magasin"><p><img src="./images/ico_pin_map.png" alt="Trouver un magasin" />Trouver un magasin</p></a>

						</div>
						<div id="services_services">
							<h1>Services</h1>
							<hr>
							<a href="service_client.html" title="Retour gratuit">Retour gratuit</a>
							<a href="service_client.html" title="Livraison standard gratuite">Livraison standard<br/>gratuite</a>
							<a href="service_client.html" title="Paiement securise">Paiement sécurisé</a>
							<a href="service_client.html" title="Droit de retractation">Droit de rétractation<br/>sous 30 jours</a>
							<a href="service_client.html" title="Livraison express">Livraison express</a>
						</div>
						<div id="services_entreprise">
							<h1>Notre entreprise</h1>
							<hr>
							<a href="service_client.html" title="Carrière">Carrière</a>
							<a href="service_client.html" title="Relations investisseurs">Relations investisseurs</a>
							<a href="service_client.html" title="Mecenat">Mécénat</a>
							<a href="service_client.html" title="Presse">Presse</a>
						</div>
					</div> <!-- /services -->


					<div id="foot_mentions">
						<div class="foot_mention_left">
							<a href="https://itunes.apple.com" title="App Store" target="blank"><img src="./images/ico_app-store-badge.svg" alt="Apple store" title="Apple store"/></a>
							<a href="https://store.google.com/" title="Google Play" target="blank"><img src="./images/ico_google-play-badge-v1.png" alt="Google play" title="Google play"/></a>

						</div>
						<div class="foot_mention_center">
							<a href="service_client.html" title="FAQ">FAQ</a>
							<a href="service_client.html" title="Mentions legales">Mentions legales</a>
							<a href="service_client.html" title="Charte de confidentialite">Charte de confidentialite</a>
							<a href="service_client.html" title="Protection des donnees">Protection des donnees</a>
							<a href="service_client.html" title="Big Foot experience">Big Foot experience</a>
							<a href="service_client.html" title="Conditions d'utilisation">Conditions d'utilisation</a>
							<a href="service_client.html" title="My life with PAMP">My life with PAMP</a>
						</div>
						<div class="foot_mention_right">
							<a href="https://www.instagram.com" title="Instagram" target="blank"><img src="./images/ico_instagram.png" alt="instagram" title="instagram"/></a>
							<a href="https://twitter.com" title="Tweeter" target="blank"><img src="./images/ico_tweeter.png" alt="tweeter" title="tweeter"/></a>
							<a href="https://www.facebook.com/" title="Facebook" target="blank"><img src="./images/ico_facebook.png" alt="facebook" title="facebook"/></a>
							<a href="https://www.pinterest.com/" title="Pinterest" target="blank"><img src="./images/ico_pinterest.png" alt="pinterest" title="pinterest"/></a>
							<a href="https://www.youtube.com" title="Youtube" target="blank"><img src="./images/ico_youtube.png" alt="youtube" title="youtube"/></a>
							<a href="https://plus.google.com" title="GooglePlus" target="blank"><img src="./images/ico_googleplus.png" alt="googleplus" title="googleplus"/></a>

						</div>

					</div>
					<div class="foot_gris">
						<p>La gamme de produits disponibles sur la Boutique en Ligne est uniquement proposée aux clients ayant leur résidence habituelle en France, et pouvant fournir une adresse de livraison en France Métropolitaine et en Corse.</p>
					</div>
					<div class="foot_gris">
						<p>&copy; 2018 Made whith<img src="./images/ico_coeur_rouge.png" alt="Avec joie" title="Joie"/>by 'Les pieds de plomb'. All rights reserved.</p>
					</div>
				</div> <!-- /foot_wrapper -->
			</footer>
		</div> <!-- /site -->
	</body>
</html>