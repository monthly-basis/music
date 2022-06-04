CREATE TABLE `scale_note` (
  `scale_id` int unsigned NOT NULL,
  `key` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `octave` int NOT NULL,
  `order` int unsigned NOT NULL,
  UNIQUE KEY `scale_id_key_order` (`scale_id`,`key`,`order`),
  CONSTRAINT `scale_note_ibfk_1` FOREIGN KEY (`scale_id`) REFERENCES `scale` (`scale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
