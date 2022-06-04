CREATE TABLE `note` (
  `note_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `octave` int unsigned NOT NULL,
  `piano_note_id` int unsigned DEFAULT NULL,
  `frequency_hz` decimal(6,2) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
