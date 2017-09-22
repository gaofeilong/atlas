CREATE DATABASE IF NOT EXISTS test;
USE test;

DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `code` CHAR(2) NOT NULL PRIMARY KEY,
  `name` CHAR(52) NOT NULL,
  `population` INT(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `country` VALUES ('AU','Australia',18886000), ('BR','Brazil',170115000), ('CA','Canada',1147000), ('CN','China',1277558000), ('DE','Germany',82164700), ('FR','France',59225700), ('GB','United Kingdom',59623400), ('IN','India',1013662000), ('RU','Russia',146934000), ('US','United States',278357000);