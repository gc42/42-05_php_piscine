/*
Affichez
	-nom en MAJUSCULE dans une colonne ’NOM’,
	-prenom
	-prix de l’abonnement des membres ayant un abonnement supérieur à 42 euros.
	-Ordonnez les résultats par :
		-par nom croissant
		puis
		-par prenom croissant
*/

SELECT UPPER(FP.nom) AS NOM, FP.prenom, A.prix AS 'prix'
FROM fiche_personne FP, membre M, abonnement A
WHERE (FP.id_perso = M.id_membre) AND (M.id_abo = A.id_abo) AND (A.prix > 42)
ORDER BY FP.nom, FP.prenom;