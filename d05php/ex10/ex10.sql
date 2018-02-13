/*
Affichez
	-titre dans une colonne ’Titre’,
	-resum dans une colonne ’Resume’ et
	-annee_prod de tous les films ’erotic’
	-classés par année de production décroissante. */

SELECT id_genre, titre AS Titre, resum AS Resume, annee_prod
FROM film
WHERE id_genre = (
	SELECT id_genre FROM genre WHERE nom = 'erotic' LIMIT 1)
ORDER BY annee_prod DESC;