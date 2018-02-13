/*
Affichez
 -le nom des distributeurs ayant pour id :
 	42,
 	62, 63, 64, 65, 66, 67, 68, 69,
 	71,
 	88, 89 et 90
 	et les distributeurs contenant la lettre ’y’ ou ’Y’ deux fois.
La liste finale sera un échantillon de 5 résultats en partant du troisième résultat.
*/

SELECT nom, id_distrib
  FROM distrib
  WHERE id_distrib = 42
     OR id_distrib BETWEEN 62 AND 69
     OR id_distrib = 71
     OR id_distrib BETWEEN 88 AND 90
     OR nom LIKE '%y%y%'
     LIMIT 2, 20;

/* Ou en utilisant un REGEX qui ne retient 'QUE' deux 'y' ou deux 'Y'
	OR nom REGEXP '(^[^yY]*[yY][^yY]*[yY][^yY]*$)'
*/