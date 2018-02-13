/*
Affichez
 tous les films qui ont un id_genre compris entre 4 et 8 inclus.

La requète affichera
 -l’id_genre,
 -le nom du genre,
 - mais aussi
 	-l’id du distributeur,
  	-le nom du distributeur
	-le titre du film.

	Il faudra donc une colonne :
	’id_genre’,
	’nom genre’,
	’id_distrib’,
	’nom distrib’
	’titre film’.

	La requête doit afficher :
	 	-l’id_genre,
	 	-l’id du distributeur
	 	-le titre des films,
	 	même si on n’arrive pas à récupérer :
	 		-son nom de genre
	 		ou
	 		-le nom du distributeur.
*/

SELECT genre.id_genre 		AS 'id_genre',
       genre.nom 			AS 'nom genre',
       distrib.id_distrib 	AS 'id_distrib',
       distrib.nom 			AS 'nom distrib',
       film.titre 			AS 'titre film'
  FROM film
  LEFT JOIN genre   ON film.id_genre   = genre.id_genre
  LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib
  WHERE film.id_genre BETWEEN 4 AND 8
  ORDER BY distrib.nom 			/* AJOUTE POUR LE CONFORT VISUEL, pas demande dans l'exercice */



/*
SELECT F.id_genre AS 'id_genre', G.nom AS 'nom genre', D.id_distrib AS 'id_distrib', D.nom AS 'nom distrib', F.titre AS 'titre film'
FROM film F, genre G, distrib D
WHERE   (F.id_genre = G.id_genre)
	AND (F.id_distrib = D.id_distrib)
	AND F.id_genre BETWEEN 4 AND 8;
*/
