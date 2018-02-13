/*
Affichez
 le nombre total de film visionnés
 du 30/10/2006 au 27/07/2007
 dans une colonne ’films’
 en comptant également :
 le nombre de film vus les soirs de Noël (24 décembre de chaque année).
*/

SELECT count(id_film) AS films
FROM historique_membre
WHERE date
 BETWEEN '2006/10/30' AND '2007/07/27'
 OR DAY(date)=24 AND MONTH(date)=12;

