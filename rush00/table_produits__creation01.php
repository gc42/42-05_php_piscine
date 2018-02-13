$sql = "CREATE TABLE `products`  (
      `id_pdt` int(11) NOT NULL AUTO_INCREMENT,
      `titre` varchar(255) NOT NULL,
      `prix` float NOT NULL,
      `img` varchar(255),
      `text` text NOT NULL,
      PRIMARY KEY (`id_pdt`)
    );";



INSERT INTO `products` (`id_pdt`, `titre`, `prix`, `img`, `text`)
VALUES
(1, 'Ceinture', '200', 'a_ceinture1_0.jpeg', 'Lorem Ipsum dolor');
(2, 'Ceinture', '180', 'a_ceinture2_0.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
(3, 'Ceinture', '231', 'a_ceinture3_0.jpeg', 'Nulla condimentum sapien ut dignissim posuere.');
(4, 'Ceinture', '584', 'a_ceinture4_0.jpeg', 'Aenean egestas nisi sed enim pellentesque consequat.');
(5, 'Cravatte', '448', 'a_cravatte1_0.jpeg', 'Nam pretium turpis lacinia, maximus diam at, lobortis augue.');
(6, 'Cravatte', '679', 'a_cravatte2_0.jpeg', 'Nunc in arcu sed sem luctus mattis.');
(7, 'Cravatte', '765', 'a_cravatte3_0.jpeg', 'Vestibulum et felis hendrerit, ultricies tellus a, blandit elit.');
(8, 'Cravatte', '832', 'a_cravatte4_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');
(9, 'Lunettes', '984', 'a_lunettes1_0.jpeg', 'Ut quis ex a lacus sollicitudin placerat.');
(10, 'Lunettes', '659', 'a_lunettes2_0.jpeg', 'Vivamus sit amet nulla ultricies ligula laoreet ornare.');
(11, 'Lunettes', '926', 'a_lunettes3_0.jpeg', 'Quisque quis massa quis tortor varius feugiat.');
(12, 'Lunettes', '801', 'a_lunettes4_0.jpeg', 'Nunc in est faucibus, lobortis justo sit amet, vestibulum mi.');
(13, 'Baskets', '336', 'c_ch_basket1_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');
(14, 'Baskets', '205', 'c_ch_basket2_0.jpeg', 'Suspendisse eu est ac mi hendrerit viverra.');
(15, 'Baskets', '580', 'c_ch_basket3_0.jpeg', 'Aenean egestas ipsum eget tincidunt tempor.');
(16, 'Baskets', '455', 'c_ch_basket4_0.jpeg', 'In iaculis mi vitae congue tempus.');
(17, 'Boots', '611', 'c_ch_boots1_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');
(18, 'Boots', '175', 'c_ch_boots2_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');
(19, 'Boots', '159', 'c_ch_boots3_0.jpeg', 'Nam quis felis ut lorem feugiat aliquam vel vitae urna.');
(20, 'Boots', '159', 'c_ch_boots4_0.jpeg', 'Integer ut libero sed lorem tempus faucibus sit amet nec quam.');
(21, 'Chaussures casual', '230', 'c_ch_casual1_0.jpeg', 'Nam tempor velit sit amet laoreet dictum.');
(22, 'Chaussures casual', '322', 'c_ch_casual2_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');
(23, 'Chaussures casual', '125', 'c_ch_casual3_0.jpeg', 'Donec vestibulum tortor faucibus neque imperdiet, in maximus erat tincidunt.');
(24, 'Chaussures casual', '366', 'c_ch_casual4_0.jpeg', 'Curabitur convallis neque vitae augue feugiat mattis.');
(25, 'Chaussures de soirée', '658', 'c_ch_soiree1_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');
(26, 'Chaussures de soirée', '129', 'c_ch_soiree2_0.jpeg', 'Curabitur vel est at leo facilisis consequat eu sit amet diam.');
(27, 'Chaussures de soirée', '107', 'c_ch_soiree3_0.jpeg', 'Vestibulum sollicitudin est eu ligula ornare sollicitudin.');
(28, 'Chaussures de soirée', '456', 'c_ch_soiree4_0.jpeg', 'Ut quis ex a lacus sollicitudin placerat.');
(29, 'Chemise', '104', 'p_chemises1_0.jpeg', 'Sed vulputate lectus et mi pharetra, sed posuere magna elementum.');
(30, 'Chemise', '156', 'p_chemises2_0.jpeg', 'Quisque in ligula lobortis, congue lacus vel, suscipit ipsum.');
(31, 'Chemise', '239', 'p_chemises3_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');
(32, 'Chemise', '207', 'p_chemises4_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');
(33, 'Costume', '120', 'p_costumes1_0.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
(34, 'Costume', '110', 'p_costumes2_0.jpeg', 'Vivamus sit amet nulla ultricies ligula laoreet ornare.');
(35, 'Costume', '420', 'p_costumes3_0.jpeg', 'Pellentesque pretium ex sed nunc iaculis viverra.');
(36, 'Costume', '330', 'p_costumes4_0.jpeg', 'Ut ac eros nec libero consequat aliquam.');
(37, 'Manteau', '660', 'p_manteau1_0.jpeg', 'Nullam ac magna eget risus convallis dictum.');
(38, 'Manteau', '418', 'p_manteau2_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');
(39, 'Manteau', '217', 'p_manteau3_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');
(40, 'Manteau', '329', 'p_manteau4_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');
(41, 'Polo', '123', 'p_polo1_0.jpeg', 'Quisque at tortor eget diam sodales bibendum ut sit amet dolor.');
(42, 'Polo', '201', 'p_polo2_0.jpeg', 'Fusce interdum lorem quis ullamcorper aliquet.');
(43, 'Polo', '312', 'p_polo3_0.jpeg', 'Ut quis ex a lacus sollicitudin placerat.');
(44, 'Polo', '505', 'p_polo4_0.jpeg', 'Nunc at dolor sed nisi dignissim aliquet non ut odio.');
(45, 'Veste', '128', 'p_vestes1_0.jpeg', 'Etiam porta massa id purus egestas, sed varius sem congue.');
(46, 'Veste', '327', 'p_vestes2_0.jpeg', 'Duis interdum mi in massa hendrerit sodales non vitae turpis.');
(47, 'Veste', '429', 'p_vestes3_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');
(48, 'Veste', '203', 'p_vestes4_0.jpeg', 'Nunc in est faucibus, lobortis justo sit amet, vestibulum mi.');
(49, 'Veste en cuir', '155', 'p_vestescuir1_0.jpeg', 'Sed aliquet nulla sit amet elementum vulputate.');
(50, 'Veste en cuir', '206', 'p_vestescuir2_0.jpeg', 'Aenean egestas ipsum eget tincidunt tempor.');
(51, 'Veste en cuir', '102', 'p_vestescuir3_0.jpeg', 'Aliquam ac nisi cursus, venenatis nisi ac, tincidunt purus.');
(52, 'Veste en cuir', '305', 'p_vestescuir4_0.jpeg', 'Cras maximus felis vitae nunc fermentum, nec fringilla enim dignissim.');
