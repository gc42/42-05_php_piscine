$sql = "CREATE TABLE `categories`  (
      `ctg_id` int(11) NOT NULL AUTO_INCREMENT,
         `titre` varchar(255) NOT NULL,
         `text` text NOT NULL
      PRIMARY KEY (`cat_id`)
    );";



INSERT INTO `categories` (`ctg_id`, `titre`, `text`)
VALUES
(1, 'Accessoires', 'Vivamus sit amet nulla ultricies ligula laoreet ornare.');
(2, 'Chaussures', 'Nam pretium turpis lacinia, maximus diam at, lobortis augue.');
(3, 'Prêt-à-porter', 'Cras maximus felis ultricies nunc fermentum, nec fringilla.');