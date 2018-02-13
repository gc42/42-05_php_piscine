/*
Affichez
 -le nombre d’abonnements proposés dans une colonne ’nb_abo’,
 -ainsi que la moyenne du prix des abonnements,
 	arrondie à l’unité (inférieure) dans une colonne ’moy_abo’.
 -Il faut également une troisième colonne nommée ’ft’
 	affichant la somme des durées d’abonnement modulo 42.
*/

SELECT COUNT(*) AS 'nb_abo', FLOOR(AVG(prix)) AS 'moy_abo', MOD(SUM(duree_abo), 42) as 'ft'
  FROM abonnement;