<?php
	$_SESSION['log'] = true;
	$_SESSION['login'] = 'Guillaume';
?>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="">
		<!-- FLAVICON. -->
		<link rel="apple-touch-icon" sizes="57x57" href="./images/_flavicon42/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./images/_flavicon42/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./images/_flavicon42/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./images/_flavicon42/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./images/_flavicon42/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./images/_flavicon42/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./images/_flavicon42/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./images/_flavicon42/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./images/_flavicon42/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="./images/_flavicon42/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./images/_flavicon42/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./images/_flavicon42/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./images/_flavicon42/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="./images/_flavicon42/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- /FLAVICON -->
		<title>Rush42</title>
		<style>
			html{
				background-color: $EEEEEE;
				text-align: center;
				font-size: 16px;
				/*font-family: 'Ubuntu', sans-serif;*/
				font-family: 'Titillium Web', sans-serif;
			}
			body{
				min-width: 500px;
    			max-width: 100%;
    			margin: auto;
			}
			.toto {
				display: flex;
				flex-direction: row;
				justify-content: flex-start;
				flex-flow: row wrap;
					/*flex-basis: 25%;*/
			}

			.product-tile{
				min-height: 500px;
				max-height: 500px;
				min-width: 240px;
				max-width: 300px;

				/*display: inline-block;*/
				margin: 10px;
				border-radius: 0px;
				padding: 10px;
				background-color: #FFFFFF;
				border: 1px solid #F6F6F6;
				transition-duration: .275s;
				transition-property: box-shadow;
				transition-timing-function: cubic-bezier(0.4,0,.2,1);
			}
			.product-tile:hover {
			box-shadow: 0 10px 40px rgba(0,0,0,0.1)
			}

			.product-tile__image{
				width: 100%;
			}
			#header{
				margin-top: 44px;
				font-size: 5em;
				color: blue;
			}
			#menu{
				background-color: #111111;
				height: 38px;
				color: white;
				margin-bottom: 30px;
				padding-top: 19px;
				font-family: 'Ubuntu', sans-serif;
			}
			.button{
				margin-top: 10px;
				font-family: Univers,sans-serif;
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
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	</head>


	<body>
		<div id="menu">
			<img src="logo" alt="Logo" title="Logo">
			<a href="#">NOUVEAUTÉS</a>
			<a href="#">PRÊT-À-PORTER</a>
			<a href="#">CHAUSSURES</a>
			<a href="#">ACCESSOIRES</a>
			<a href="#">SOLDES</a>
			<?php
				if (isset($_SESSION['log']) && $_SESSION['log'] == TRUE)
					echo '<span>Hello '.$_SESSION['login'].'</span>';
				else
					echo '<span>connect please</span>';
				?>
		</div>
		<div class="toto">

		<?php
			$nbr = 1;
			while($nbr != 6)
			{
				echo '<div class="product-tile">';
					echo '<img class="product-tile__image" src="./images/p_costumes1_0.jpeg">';
					echo '<button class="button"value="'.$nbr.'">achat</button>';
				echo '</div>';
				$nbr++;
			}

		?>
		</div>
	</body>
</html>