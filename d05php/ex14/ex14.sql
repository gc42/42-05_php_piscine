/*
Affichez
	pour chaque etage,
	 -le num_etage dans une colonne ’etage’
	 et
	 -le nb_sieges par etage dans une colonne ’sieges’.
	 Le tout trié par ordre de l’étage avec le plus de sièges
	 vers celui avec le moins de sièges.
*/

SELECT numero_salle AS etage, nbr_siege AS sieges
FROM salle
ORDER BY nbr_siege DESC;