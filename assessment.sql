CREATE TABLE `campaigns` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `campaign_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_type` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` DATE NOT NULL,
  `end_date` DATE NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `campaigns_campaign_name_unique` (`campaign_name`),
  KEY `campaigns_start_date_index` (`start_date`),
  KEY `campaigns_end_date_index` (`end_date`)
) ENGINE=INNODB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT  INTO `campaigns`(`id`,`campaign_name`,`campaign_type`,`start_date`,`end_date`,`created_at`,`updated_at`) VALUES 
(1,'CCC1','SALES','2021-05-04','2021-05-05','2021-05-11 20:11:32','2021-05-11 20:11:35'),
(2,'CCC2','SALES','2021-05-04','2021-05-05','2021-05-11 20:11:32','2021-05-11 20:11:35'),
(3,'CCC3','SALES','2021-05-04','2021-05-05',NULL,NULL),
(4,'CCC4','SALES','2021-05-04','2021-05-05',NULL,NULL),
(5,'CCC5','SALES','2021-05-04','2021-05-05',NULL,NULL),
(6,'CCC6','SALES','2021-05-04','2021-05-05',NULL,NULL),
(7,'CCC7','SALES','2021-05-04','2021-05-05',NULL,NULL),
(8,'CCC8','SALES','2021-05-04','2021-05-05',NULL,NULL),
(9,'CCC9','SALES','2021-05-04','2021-05-05',NULL,NULL),
(10,'CCC10','SALES','2021-05-04','2021-05-05',NULL,NULL),
(11,'CCC11','SALES','2021-05-04','2021-05-05',NULL,NULL);

CREATE TABLE `orders` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `campaign_id` INT(11) NOT NULL,
  `order_value` DECIMAL(8,2) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_campaign_id_index` (`campaign_id`)
) ENGINE=INNODB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT  INTO `orders`(`id`,`campaign_id`,`order_value`,`created_at`,`updated_at`) VALUES 
(1,1,5000.00,'2021-05-11 20:26:22','2021-05-11 20:26:25'),
(2,2,200.00,'2021-05-11 20:27:03','2021-05-11 20:27:07'),
(4,1,50.00,'2021-05-11 20:42:36','2021-05-11 20:42:39'),
(5,1,30.00,NULL,NULL),
(6,1,15.00,NULL,NULL);

CREATE TABLE `users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT  INTO `users`(`id`,`name`,`email`,`username`,`password`,`created_at`,`updated_at`) VALUES 
(1,'ABC','abc@gmail.com','abc','900150983cd24fb0d6963f7d28e17f72','2021-05-14 19:40:26','2021-05-14 19:40:31');

DROP TABLE IF EXISTS `users_old`;

CREATE TABLE `users_old` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(50) DEFAULT NULL,
  `password` VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT  INTO `users_old`(`id`,`login`,`password`) VALUES 
(1,'abc','900150983cd24fb0d6963f7d28e17f72 ');
