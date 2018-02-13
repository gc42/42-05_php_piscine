/*
Affichez
 dans une colonne ’uptime’
 	 le nombre de jours absolu séparant le plus ancien visionnage d’un film
 	 avec le visionnage le plus récent.
*/

SELECT DATEDIFF(MAX(date), MIN(date)) AS 'uptime'
FROM historique_membre;
