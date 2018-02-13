UPDATE ft_table
SET date_de_creation = ADDDATE(date_de_creation, INTERVAL 20 YEAR)
WHERE id_stud > 5;