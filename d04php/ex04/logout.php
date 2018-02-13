<?php

/*
** -Ne prends aucun parametre
** -Se sert du cookie de session pour supprimer ce cookie.
** -Cette page n'affiche rien

** Voir session_unset, date du cookie -1, session_abord
** Detruire l'enregistrement de la valeur du cookie avec $_COOKIE['nom_du_cookie']
*/

	session_start();
	$_SESSION = array();	// Detruit toutes les variables de session
	session_destroy();		// Supprime la session

?>