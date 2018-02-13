<?php
    $_SESSION['log'] = false;
    $_SESSION['login'] = 'robert';
?>

<html>
    <head>
        <style>
            html{
                background-color: whitesmoke;
                text-align: center;
                font-size: 16px;
                font-family: 'Ubuntu', sans-serif;
            }
            body{
                min-width: 500px;
                width: 1000px;
                margin: auto;
            }
            .divPres{
                width: 186px;
                height: 167px;
                display: inline-block;
                margin: 10px;
                border-radius: 10px;
                padding: 10px;
                background-color: cadetblue;
            }
			.divLegendeImage{
				margin: 15px;
				font-size: 0.8em;
			}
			.divPrice{
				margin: 15px;
				font-size: 0.8em;
				font-style: italic;
			}
			.img {
			    width: 181px;
			    height: 165px;
			}
            #header{
                margin-top: 44px;
                font-size: 3em;
            }
            #menu{
                background-color: rgba(28, 40, 48, 0.9);
                height: 38px;
                color: white;
                margin-bottom: 30px;
                padding-top: 19px;
                font-family: 'Ubuntu', sans-serif;
            }
            .button{
                margin-top: 0px;
                font-family: 'Ubuntu', sans-serif;
                height: 23px;
                background-color: wheat;
                border: 0px;
                color: black;
            }
            a{
                text-decoration: none;
                color: inherit;
                margin: 0px 10px 0px 10px;
            }
            a:active{
                color: red;
            }
        </style>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
    <body>
        <h1 id="header">GALERIE 42</h1>
		<form action="#">
        <div id="menu">
            <a href="#">MENU</a>
            <a href="#">CATEGORIE</a>
            <a href="#">PANIER</a>
            <a href="#">LOGOUT</a>
            <?php
                if (isset($_SESSION['log']) && $_SESSION['log'] == TRUE)
                    echo '<span>Hello '.$_SESSION['login'].'</span>';
                else
                    echo '<span>connect please</span>';
                ?>
        </div>

        <?php
			require_once("./DBaccess/DBconnect.php");
			setlocale(LC_MONETARY, 'en_US');
			$db = database_connect_DB();
			$req = "SELECT * FROM TB_produit";
			$res = mysqli_query($db, $req);
			$produits = mysqli_fetch_all($res, MYSQLI_ASSOC);
			foreach($produits as $produit)
			{
				echo '<div class="divPres">';
					echo '<img class="img" src="'.$produit[image_url].'" alt="'.$produit[auteur].' - '.$produit[nom].'">';
					echo '<div class="divLegendeImage" >'.$produit[auteur].' - '.$produit[nom].' </div>';
					echo '<div class="divPrice" >'.money_format("%i", $produit[prix]).' </div>';
					echo '<button class="button" name="addpanier" value="'.$produit[id].'">ajouter au panier</button>';
				echo '</div>';
            }
        ?>
	</form>
    </body>
</html>
