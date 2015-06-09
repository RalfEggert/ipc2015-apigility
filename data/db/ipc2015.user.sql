SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";

DROP TABLE IF EXISTS `profile`;

CREATE TABLE IF NOT EXISTS `profile` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `country` enum('de','at','ch','it') NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Profile data' AUTO_INCREMENT=4 ;

INSERT INTO `profile` (`id`, `firstname`, `lastname`, `country`, `description`) VALUES
(1, 'Max', 'Mustermann', 'de', 'Ich bin der Max und ein echter Mustermann'),
(2, 'Theo', 'Tester', 'de', 'Ich bin der Theo und teste das hier.'),
(3, 'Moritz', 'Mustermann', 'de', 'Ich bin der Moritz und suche meinen Bruder Max.');

DROP TABLE IF EXISTS `user`;

CREATE TABLE IF NOT EXISTS `user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `changed` datetime NOT NULL,
  `profile` smallint(5) unsigned NOT NULL,
  `login` varchar(64) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address_id` (`profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='User data' AUTO_INCREMENT=4 ;

INSERT INTO `user` (`id`, `changed`, `profile`, `login`, `password`) VALUES
(1, '2015-05-24 09:07:13', 1, 'max', '$2y$10$6DJd0UzQwfhZiq/SGCpee.gbw1BMxbQNfFSEKzJZu4YG7YytM.hZm'),
(2, '2015-05-25 07:11:36', 2, 'theo', '$2y$10$hdrRocyGp7AivE85mzrf0ONUG420srsUjr95PLGdDzVffI3ouQ/fO'),
(3, '2015-05-26 08:03:43', 3, 'moritz', '$2y$10$CAn/DKJMLglFas9yqtTvmehGeL/hhJioJG0LpokOKbebKOufeRZ9u');

ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`profile`) REFERENCES `profile` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

SET FOREIGN_KEY_CHECKS=1;

COMMIT;
