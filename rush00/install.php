<?php

$servername = "localhost";
$username = "root";
$password = "toto";

// Create connection
$conn = new mysqli($servername, $username, $password);

function exec_query($conn, $sql)
{
	if ($conn->query($sql) === TRUE) {
		echo "Query Success!<br/>";
	} else {
		echo "Error database: " . $conn->error;
	}
}

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br/>";


// Drop database
$sql = "DROP DATABASE IF EXISTS shop";
if ($conn->query($sql) === TRUE) {
	echo "Database dropped successfully<br/>";
} else {
	echo "Error creating database: " . $conn->error;
}

// Create database
$sql = "CREATE DATABASE shop";
if ($conn->query($sql) === TRUE) {
	echo "Database created successfully<br/>";
} else {
	echo "Error creating database: " . $conn->error;
}

// Create Table Products
$sql = "CREATE TABLE `products`  (
	`id_pdt` int(11) NOT NULL AUTO_INCREMENT,
	`titre` varchar(255) NOT NULL,
	`prix` float NOT NULL,
	`img` varchar(255) DEFAULT 'http://placehold.it/900x400',
	`text` text NOT NULL,
	PRIMARY KEY (`id_pdt`)
);";
exec_query($conn, $sql);


// Create Table Cat_list
$sql = "CREATE TABLE `pdts_ctg`  (
	`pdts_ctg_id` int(10) NOT NULL AUTO_INCREMENT,
	`ctg_id` int(10) NOT NULL,
	`pd_id` int(10) NOT NULL,
	PRIMARY KEY (`pdts_ctg_id`)
);";
exec_query($conn, $sql);


// Create Table categories
$sql = "CREATE TABLE `categories`  (
	`ctg_id` int(11) NOT NULL AUTO_INCREMENT,
	`titre` varchar(255) NOT NULL,
	`text` text NOT NULL
	PRIMARY KEY (`ctg_id`)
);";
exec_query($conn, $sql);

// Create Table User
$sql = "CREATE TABLE `users`  (
	`user_id` int(10) NOT NULL AUTO_INCREMENT,
	`nom` varchar(100) NOT NULL,
	`prenom` varchar(100) NOT NULL,
	`email` varchar(100) NOT NULL,
	`pwd` varchar(200) NOT NULL,
	`address` text NOT NULL,
	`is_admin` boolean NOT NULL DEFAULT 0,
	PRIMARY KEY (`user_id`)
);";
exec_query($conn, $sql);


// Create Table Commands
$sql = "CREATE TABLE `commands`  (
	`com_id` int(10) NOT NULL AUTO_INCREMENT,
	`usr_id` int(11) NOT NULL,
	`date` datetime NOT NULL,
	PRIMARY KEY (`com_id`)
);";
exec_query($conn, $sql);

// Create Table Commands Details
$sql = "CREATE TABLE `liste_pdts`  (
	`id_lst` int(10) NOT NULL AUTO_INCREMENT,
	`com_id` int(10) NOT NULL,
	`pd_id` int(10) NOT NULL,
	`qtt` int(10) NOT NULL,
	`prix` decimal(10, 2) NOT NULL,
	PRIMARY KEY (`id_lst`)
);";
exec_query($conn, $sql);

// Insert Categories

$sql = "INSERT INTO `categories` (`ctg_id`, `titre`, `text`) VALUES (1, 'Accessoires', 'Vivamus sit amet nulla ultricies ligula laoreet ornare.');";
exec_query($conn, $sql);

$sql = "INSERT INTO `categories` (`ctg_id`, `titre`, `text`) VALUES (2, 'Chaussures', 'Nam pretium turpis lacinia, maximus diam at, lobortis augue.');";
exec_query($conn, $sql);

$sql = "INSERT INTO `categories` (`ctg_id`, `titre`, `text`) VALUES (3, 'Prêt-à-porter', 'Cras maximus felis ultricies nunc fermentum, nec fringilla.');";
exec_query($conn, $sql);


// Insert Articles

$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (1, 'Ceinture', '200', 'a_ceinture1_0.jpeg', 'Lorem Ipsum dolor');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (2, 'Ceinture', '180', 'a_ceinture2_0.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (3, 'Ceinture', '231', 'a_ceinture3_0.jpeg', 'Nulla condimentum sapien ut dignissim posuere.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (4, 'Ceinture', '584', 'a_ceinture4_0.jpeg', 'Aenean egestas nisi sed enim pellentesque consequat.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (5, 'Cravatte', '448', 'a_cravatte1_0.jpeg', 'Nam pretium turpis lacinia, maximus diam at, lobortis augue.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (6, 'Cravatte', '679', 'a_cravatte2_0.jpeg', 'Nunc in arcu sed sem luctus mattis.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (7, 'Cravatte', '765', 'a_cravatte3_0.jpeg', 'Vestibulum et felis hendrerit, ultricies tellus a, blandit elit.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (8, 'Cravatte', '832', 'a_cravatte4_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (9, 'Lunettes', '984', 'a_lunettes1_0.jpeg', 'Ut quis ex a lacus sollicitudin placerat.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (10, 'Lunettes', '659', 'a_lunettes2_0.jpeg', 'Vivamus sit amet nulla ultricies ligula laoreet ornare.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (11, 'Lunettes', '926', 'a_lunettes3_0.jpeg', 'Quisque quis massa quis tortor varius feugiat.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (12, 'Lunettes', '801', 'a_lunettes4_0.jpeg', 'Nunc in est faucibus, lobortis justo sit amet, vestibulum mi.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (13, 'Baskets', '336', 'c_ch_basket1_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (14, 'Baskets', '205', 'c_ch_basket2_0.jpeg', 'Suspendisse eu est ac mi hendrerit viverra.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (15, 'Baskets', '580', 'c_ch_basket3_0.jpeg', 'Aenean egestas ipsum eget tincidunt tempor.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (16, 'Baskets', '455', 'c_ch_basket4_0.jpeg', 'In iaculis mi vitae congue tempus.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (17, 'Boots', '611', 'c_ch_boots1_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (18, 'Boots', '175', 'c_ch_boots2_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (19, 'Boots', '159', 'c_ch_boots3_0.jpeg', 'Nam quis felis ut lorem feugiat aliquam vel vitae urna.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (20, 'Boots', '159', 'c_ch_boots4_0.jpeg', 'Integer ut libero sed lorem tempus faucibus sit amet nec quam.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (21, 'Chaussures casual', '230', 'c_ch_casual1_0.jpeg', 'Nam tempor velit sit amet laoreet dictum.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (22, 'Chaussures casual', '322', 'c_ch_casual2_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (23, 'Chaussures casual', '125', 'c_ch_casual3_0.jpeg', 'Donec vestibulum tortor faucibus neque imperdiet, in maximus erat tincidunt.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (24, 'Chaussures casual', '366', 'c_ch_casual4_0.jpeg', 'Curabitur convallis neque vitae augue feugiat mattis.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (25, 'Chaussures de soirée', '658', 'c_ch_soiree1_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (26, 'Chaussures de soirée', '129', 'c_ch_soiree2_0.jpeg', 'Curabitur vel est at leo facilisis consequat eu sit amet diam.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (27, 'Chaussures de soirée', '107', 'c_ch_soiree3_0.jpeg', 'Vestibulum sollicitudin est eu ligula ornare sollicitudin.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (28, 'Chaussures de soirée', '456', 'c_ch_soiree4_0.jpeg', 'Ut quis ex a lacus sollicitudin placerat.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (29, 'Chemise', '104', 'p_chemises1_0.jpeg', 'Sed vulputate lectus et mi pharetra, sed posuere magna elementum.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (30, 'Chemise', '156', 'p_chemises2_0.jpeg', 'Quisque in ligula lobortis, congue lacus vel, suscipit ipsum.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (31, 'Chemise', '239', 'p_chemises3_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (32, 'Chemise', '207', 'p_chemises4_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (33, 'Costume', '120', 'p_costumes1_0.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (34, 'Costume', '110', 'p_costumes2_0.jpeg', 'Vivamus sit amet nulla ultricies ligula laoreet ornare.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (35, 'Costume', '420', 'p_costumes3_0.jpeg', 'Pellentesque pretium ex sed nunc iaculis viverra.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (36, 'Costume', '330', 'p_costumes4_0.jpeg', 'Ut ac eros nec libero consequat aliquam.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (37, 'Manteau', '660', 'p_manteau1_0.jpeg', 'Nullam ac magna eget risus convallis dictum.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (38, 'Manteau', '418', 'p_manteau2_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (39, 'Manteau', '217', 'p_manteau3_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (40, 'Manteau', '329', 'p_manteau4_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (41, 'Polo', '123', 'p_polo1_0.jpeg', 'Quisque at tortor eget diam sodales bibendum ut sit amet dolor.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (42, 'Polo', '201', 'p_polo2_0.jpeg', 'Fusce interdum lorem quis ullamcorper aliquet.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (43, 'Polo', '312', 'p_polo3_0.jpeg', 'Ut quis ex a lacus sollicitudin placerat.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (44, 'Polo', '505', 'p_polo4_0.jpeg', 'Nunc at dolor sed nisi dignissim aliquet non ut odio.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (45, 'Veste', '128', 'p_vestes1_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (46, 'Veste', '327', 'p_vestes2_0.jpeg', 'Duis interdum mi in massa hendrerit sodales non vitae turpis.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (47, 'Veste', '429', 'p_vestes3_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (48, 'Veste', '203', 'p_vestes4_0.jpeg', 'Nunc in est faucibus, lobortis justo sit amet, vestibulum mi.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (49, 'Veste en cuir', '155', 'p_vestescuir1_0.jpeg', 'Sed aliquet nulla sit amet elementum vulputate.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (50, 'Veste en cuir', '206', 'p_vestescuir2_0.jpeg', 'Aenean egestas ipsum eget tincidunt tempor.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (51, 'Veste en cuir', '102', 'p_vestescuir3_0.jpeg', 'Aliquam ac nisi cursus, venenatis nisi ac, tincidunt purus.');";
exec_query($conn, $sql);
$sql = "INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`) VALUES (52, 'Veste en cuir', '305', 'p_vestescuir4_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');";
exec_query($conn, $sql);

// Insert List Categories Produits
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (1, 1, 1);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (2, 1, 2);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (3, 1, 3);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (4, 1, 4);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (5, 1, 5);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (6, 1, 6);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (7, 1, 7);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (8, 1, 8);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (9, 1, 9);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (10, 1, 10);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (11, 1, 11);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (12, 1, 12);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (13, 2, 13);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (14, 2, 14);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (15, 2, 15);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (16, 2, 16);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (17, 2, 17);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (18, 2, 18);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (19, 2, 19);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (20, 2, 20);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (21, 2, 21);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (22, 2, 22);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (23, 2, 23);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (24, 2, 24);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (25, 2, 25);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (26, 2, 26);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (27, 2, 27);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (28, 2, 28);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (29, 3, 29);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (30, 3, 30);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (31, 3, 31);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (32, 3, 32);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (33, 3, 33);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (34, 3, 34);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (35, 3, 35);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (36, 3, 36);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (37, 3, 37);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (38, 3, 38);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (39, 3, 39);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (40, 3, 40);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (41, 3, 41);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (42, 3, 42);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (43, 3, 43);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (44, 3, 44);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (45, 3, 45);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (46, 3, 46);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (47, 3, 47);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (48, 3, 48);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (49, 3, 49);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (50, 3, 50);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (51, 3, 51);";
exec_query($conn, $sql);
$sql = "INSERT INTO `pdts_ctg` (`pdts_ctg_id`, `ctg_id`, `pd_id`) VALUES (52, 3, 52);";
exec_query($conn, $sql);

// Insert admin User
$sql = "INSERT INTO `users`(`user_id`, `nom`, `prenom`, `email`, `pwd`, `adress`, `is_admin`) VALUES (1, 'beckert', 'mehdi', 'mbeckert@student.42.fr', 'wordpass', '15 rue pas loin 75012 Paris', 1);";
exec_query($conn, $sql);
$sql = "INSERT INTO `users`(`user_id`, `nom`, `prenom`, `email`, `pwd`, `adress`, `is_admin`) VALUES (2, 'venturini', 'pascal', 'pventuri@student.42.fr', 'wordpass2', '15 rue pas loin non plus 75012 Paris', 1);";
exec_query($conn, $sql);

$conn->close();

?>