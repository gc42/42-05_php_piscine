<?php
	session_start();
	if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] && $_GET['submit'] === "OK"){
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}


/* TESTS */
// echo "voir \$_GET     :: ";print_r($_GET);
// echo "voir \$_SESSION :: ";print_r($_SESSION);
/*
curl -v -c cook.txt 'http://e3r9p6.42.fr:8100/d04/ex00/index.php'
curl -v -b cook.txt 'http://e3r9p6.42.fr:8100/d04/ex00/index.php?login=sb&passwd=beeone&submit=OK'
curl -v -b cook.txt 'http://e3r9p6.42.fr:8100/d04/ex00/index.php'
curl -v 'http://http://e3r9p6.42.fr:8100/d04/ex00/index.php'

*/
?>
<html><body>
	<form action="index.php" method="GET">
		Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
		<br />
		Mot de passe: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
		<br />
		<input type="submit" name="submit" value="OK"/>
	</form>
</body></html>