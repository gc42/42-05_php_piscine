/*
Affichez
 -tous les numéros de telephone des distributeurs commençant par ’05’
 -en enlevant le chiffre 0 avant le 5
 et
 -en inversant le numéro,
 le tout dans une colonne nommée ’enohpelet’
 (ex : 0542842169 -> 961248245).
*/

SELECT REVERSE(SUBSTRING(telephone, 3)) AS 'enohpelet'
FROM distrib
WHERE telephone LIKE '05%';