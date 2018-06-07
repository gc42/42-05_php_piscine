<?php
	if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) {
                echo '<a href="member.php">Bonjour '.$_SESSION['pseudo'].'</a> | <a href="logout.php">Déconnexion</a>';
            } else {
                echo '<a href="register.php">Inscription</a> | <a href="login.php">Connexion</a>';
            }
?>
<?php
// Chargement du fichier header.php
require ('header.php');
?>



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
						echo '</div>';

					$nbr = 0;
					while($nbr != 4)
					{

						echo '<div class="product_tile">';
							echo '<div class="product_tile__love">';
								echo '<a href="" title="Ajouer au panier"><img class="img_love" src="./images/icones/ico_addtocart.png"/></a>';
							echo '</div>';
							echo '<div class="product_tile__image_produit">';
								echo '<img class="img_produit" src="./images/products/p_costumes1_0.jpeg" alt="NomProduit" title="NomProduit"/>';
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

<?php
// Chargement du fichier footer.php
require 'footer.php';
?>
