SELECT titre, resum
FROM film
WHERE UPPER(resum) LIKE UPPER('%vincent%')
ORDER BY id_film;