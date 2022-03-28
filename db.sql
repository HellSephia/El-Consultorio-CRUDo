CREATE DATABASE IF NOT EXISTS `consultorio_crudo`;
USE `consultorio_crudo`;

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL DEFAULT 'name',
  `last_name` varchar(100) NOT NULL DEFAULT 'name',
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(60) DEFAULT NULL DEFAULT 'none',
  `topic` varchar(250) NOT NULL,
  `date` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `deletemeeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT 'name',
  `topic` varchar(250) NOT NULL,
  `date` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `meeting` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `topic`, `date`) VALUES (NULL, 'Titin Tulcan', 'Torres Tolima', 'tes@mail.com', '324567896', 'Fixing time meeting', '2022-03-30 15:06');

CREATE TRIGGER `Trigger_delete` AFTER DELETE ON `meeting` FOR EACH ROW INSERT INTO deletemeeting(name, topic, date) VALUES (old.first_name, old.topic, old.date);