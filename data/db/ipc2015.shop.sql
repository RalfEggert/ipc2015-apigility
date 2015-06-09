SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";

DROP TABLE IF EXISTS `address`;

CREATE TABLE IF NOT EXISTS `address` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `street` varchar(64) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `city` varchar(64) NOT NULL,
  `country` enum('de','at','ch','it') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Address data' AUTO_INCREMENT=5 ;

INSERT INTO `address` (`id`, `firstname`, `lastname`, `street`, `postcode`, `city`, `country`) VALUES
(1, 'Max', 'Mustermann', 'Am Mustern 123', '12345', 'Musterhausen', 'de'),
(2, 'Theo', 'Tester', 'Am Testen 987', '98765', 'Testhausen', 'de'),
(3, 'Max', 'Mustermann', 'Bei Mutti 4711', '12321', 'Mutterhausen', 'de'),
(4, 'Luigi', 'Bartoli', 'Am Ofen 111', '1245', 'Lago di Piazetti', 'it');

DROP TABLE IF EXISTS `booking`;

CREATE TABLE IF NOT EXISTS `booking` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `amount` float NOT NULL,
  `customer` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer` (`customer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Order data' AUTO_INCREMENT=4 ;

INSERT INTO `booking` (`id`, `date`, `amount`, `customer`) VALUES
(1, '2015-05-29 10:12:47', 24.83, 1),
(2, '2015-05-29 12:11:20', 20.43, 2),
(3, '2015-05-29 15:50:22', 63.49, 3);

DROP TABLE IF EXISTS `bookingposition`;

CREATE TABLE IF NOT EXISTS `bookingposition` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `booking` mediumint(8) unsigned NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `quantity` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `booking` (`booking`,`product`),
  KEY `product` (`product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Booking position data' AUTO_INCREMENT=8 ;

INSERT INTO `bookingposition` (`id`, `booking`, `product`, `quantity`) VALUES
(1, 1, 1, 10),
(2, 1, 2, 2),
(3, 1, 4, 1),
(4, 2, 2, 15),
(5, 2, 3, 1),
(6, 3, 1, 200),
(7, 3, 3, 1);

DROP TABLE IF EXISTS `customer`;

CREATE TABLE IF NOT EXISTS `customer` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `changed` datetime NOT NULL,
  `invoice_address` smallint(5) unsigned DEFAULT NULL,
  `delivery_address` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `address_id` (`invoice_address`),
  KEY `delivery_address` (`delivery_address`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Customer data' AUTO_INCREMENT=4 ;

INSERT INTO `customer` (`id`, `changed`, `invoice_address`, `delivery_address`) VALUES
(1, '2015-05-24 09:07:13', 1, 3),
(2, '2015-05-25 07:11:36', 2, 2),
(3, '2015-05-26 08:03:43', 4, 4);

DROP TABLE IF EXISTS `product`;

CREATE TABLE IF NOT EXISTS `product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `color` enum('white','red','blue','black','green') NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Product data' AUTO_INCREMENT=5 ;

INSERT INTO `product` (`id`, `name`, `description`, `color`, `price`) VALUES
(1, 'Blatt Papier', 'Ein leeres Blatt Papier zum Bemalen, Bedrucken, Bestempeln oder Zerreißen. ', 'white', 0.29),
(2, 'Roter Luftballon', 'Ein roter Luftballon zum Aufpusten, Spielen und Kaputtmachen.', 'red', 0.99),
(3, 'Blaue Ente', 'Eine blaue Ente zum Spielen, Lieb haben, Werfen und Kaputtmachen.', 'blue', 5.49),
(4, 'Schwarzes Loch', 'Ein schwarzes Loch zum Dinge reinwerfen, Anschauen und Zuspachteln', 'black', 19.95);

ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

ALTER TABLE `bookingposition`
  ADD CONSTRAINT `bookingposition_ibfk_1` FOREIGN KEY (`booking`) REFERENCES `booking` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `bookingposition_ibfk_2` FOREIGN KEY (`product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`invoice_address`) REFERENCES `address` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`delivery_address`) REFERENCES `address` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

SET FOREIGN_KEY_CHECKS=1;

COMMIT;
