<?php
	$_SESSION['log'] = true;
	$_SESSION['login'] = "Pieds de plomb !";
?>
<?php
// Chargement du fichier header.php
require 'header.php';
?>






			<section id="caddy_content">
				<div class="caddy_wrapper">
					<div class="caddy_left_products">



					<?php
						$nbr = 1;
						while($nbr != 6)
						{

							echo '<div class="caddy_product_tile">';
								echo '<div class="caddy_image">';
									echo '<img class="img_produit" src="./images/p_costumes1_0.jpeg" alt="NomProduit" title="NomProduit"/>';
								echo '</div>';
								echo '<div class="caddy_text">';
									echo '<h2>Nom du produit</h2>';
									echo '<p>Description du produit avec un peu plus de texte qui decrit le tissus et la façon, ainsi que les conditions climatiques lors de sa fabrication. Aucun poste ne demarre ce matin, c\'est l\'enfer !!</p>';
								echo '</div>';
								echo '<div class="caddy_price">';
									echo '<p>200.20 &euro;</p>';
								echo '</div>';
								echo '<div class="caddy_remove">';
									echo '<a href="" title="Retirer du panier"><img class="img_croix" src="./images/ico_croix_noir.png"/></a>';
								echo '</div>';
							echo '</div>';
							$nbr++;
						}
					?>



					</div> <!-- /caddy_products -->

					<div class="caddy_right_recap">
						<div class="caddR_entete">

							<hr> <!-- ligne horizontale -->
						</div> <!-- /caddR_entete -->

						<div class="caddR_main">
							<div class="caddRM_1">


								<div class="tg-wrap">
									<table class="tg">
										<tr>
											<td class="tg-yw4l"><h2>Aperçu de la commande</h2></td>
											<td class="tg-lqy6"><img class="croix" src="./images/ico_croix_noir.png"></td>
										</tr>
										<tr>
											<td class="tg-baqhn" colspan="2"><hr/></td>
										</tr>
										<tr>
											<td class="tg-yw4l">Sous-total</td>
											<td class="tg-lqy6">380,00 &euro;</td>
										</tr>
										<tr>
											<td class="tg-baqhn" colspan="2" style="background-color: #111;" >Paiement</td>
										</tr>
										<tr>
											<td class="tg-baqhn" colspan="2">Payer avec PayPal<br/><hr/></td>
										</tr>
										<tr>
											<td class="tg-yw4l">VOTRE COMMANDE</td>
											<td class="tg-lqy6"></td>
										</tr>
										<tr>
											<td class="tg-yw4l">Sous-total</td>
											<td class="tg-lqy6">380,00 &euro;</td>
										</tr>
										<tr>
											<td class="tg-yw4l">Livraison La Poste</td>
											<td class="tg-lqy6">0,00 &euro;</td>
										</tr>
										<tr>
											<td class="tg-yw4l">20% TVA incluse</td>
											<td class="tg-lqy6">63,33 &euro;</td>
										</tr>
										<tr>
											<td class="tg-baqh" colspan="2"><br/><hr/></td>
										</tr>
										<tr>
											<td class="tg-yw4l">Montant total</td>
											<td class="tg-lqy6">380,00 &euro;</td>
										</tr>
										<tr>
											<td class="tg-baqhn" colspan="2"><hr/><br/>Paiement</td>
										</tr>
										<tr>
											<td class="tg-baqhn" colspan="2">Payer avec PayPal<br/><hr/></td>
										</tr>
									</table>
								</div>



							</div>

						</div>


					</div> <!-- /caddy_right_recap -->
				</div> <!-- /caddy_wrapper -->
				<!-- BACKGROUND_WHITE END -->
			</section> <!-- /content -->

<?php
// Chargement du fichier footer.php
require 'footer.php';
?>
