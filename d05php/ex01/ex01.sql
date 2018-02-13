
/*DROP TABLE IF EXISTS `ft_table`;*/
CREATE TABLE `ft_table` (
  `id_stud` int NOT NULL AUTO_INCREMENT,
  `s_login` varchar(8) DEFAULT 'toto' NOT NULL,
  `s_groupe` ENUM('staff', 'student', 'other') NOT NULL,
  `date_de_creation` DATE NOT NULL,
  PRIMARY KEY (`id_stud`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;