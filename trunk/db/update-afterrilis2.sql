ALTER TABLE `lap_ssp` DROP `terbilang`;
ALTER TABLE `wp` ADD `logo` CHAR(140) NOT NULL DEFAULT '' AFTER `klu`;
ALTER TABLE `wp` ADD `enable_logo` TINYINT(1) NOT NULL DEFAULT 0 AFTER `logo`;
