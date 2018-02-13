/*
Affichez
	-nom
	-prenom
	de toutes les personnes ayant un nom et/ou un prenom composé,
	le tout par ordre alphabétique :
		-de nom puis de prenom.
*/

SELECT nom, prenom
FROM fiche_personne
WHERE nom LIKE '%-%' OR prenom LIKE '%-%'
ORDER BY nom, prenom;