<?php
$maxsize = 1048576;
if ($_FILES['icone']['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES['icone']['size'] > $maxsize) $erreur = "Le fichier est trop gros";

// VALIDATION des extensions
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";

// VALIDATION des tailles de fichier
$maxwidth = 1024;
$maxheight= 1024;
$image_sizes = getimagesize($_FILES['icone']['tmp_name']);
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";
echo $erreur;


print_r($_FILES);

echo "['icone']['name']" . $_FILES['icone']['name'] . "\n";     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
echo "['icone']['type']" . $_FILES['icone']['type'] . "\n";     //Le type du fichier. Par exemple, cela peut être « image/png ».
echo "['icone']['size']" . $_FILES['icone']['size'] . "\n";     //La taille du fichier en octets.
echo "['icone']['tmp_name']" . $_FILES['icone']['tmp_name'] . "\n"; //L'adresse vers le fichier uploadé dans le répertoire temporaire.
echo "['icone']['error']" . $_FILES['icone']['error'] . "\n";    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.




echo "voir \$_FILES :: ";print_r($_FILES);

/* TESTS */
/*
curl 'http://local.42.fr:8100/rush00/tests/upload_image.php'
*/
?>