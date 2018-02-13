<?php
	$_SESSION['log'] = true;
	$_SESSION['login'] = "Pieds de plomb !";
?>
<?php
// Chargement du fichier header.php
require 'header.php';
?>



			<section id="content">
				<div class="mag_wrapper">
					<div class="mag_carte">
						<img src="./images/carteFrance.jpg" alt="Carte des magasins" title="Carte des magasins">
					</div><!-- /mag_carte -->
					<div class="mag_liste">
						<div class="mag_liste_texte">
							<h2 class="mag_liste_titre">Les magasins</h2>
							<ul>
								<li>
									<h2>Magasin2</h2>
									<p>Adresse1</p>
								</li>
								<li>
									<h2>Magasin3</h2>
									<p>Adresse1</p>
								</li>
								<li>
									<h2>Magasin4</h2>
									<p>Adresse1</p>
								</li>
								<li>
									<h2>Magasin5</h2>
									<p>Adresse1</p>
								</li>
								<li>
									<h2>Magasin6</h2>
									<p>Adresse1</p>
								</li>
								<li>
									<h2>Magasin7</h2>
									<p>Adresse1</p>
								</li>
							</ul>
						</div>
					</div><!-- /mag_liste -->


				</div> <!-- /wrapper_magasins -->
				<!-- BACKGROUND_WHITE END -->
			</section> <!-- /content -->

<?php
// Chargement du fichier footer.php
require 'footer.php';
?>
