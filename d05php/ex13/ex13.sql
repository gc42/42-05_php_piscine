/*
Affichez
	dans une colonne nommée ’moyenne’
		le nombre moyen de sieges présents par salle
		arrondi à l’unité.
*/

SELECT ROUND(AVG(nbr_siege)) AS 'moyenne'
FROM salle;