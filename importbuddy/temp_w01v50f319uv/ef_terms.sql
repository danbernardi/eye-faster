CREATE TABLE `ef_terms` (  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(200) NOT NULL DEFAULT '',  `slug` varchar(200) NOT NULL DEFAULT '',  `term_group` bigint(10) NOT NULL DEFAULT '0',  PRIMARY KEY (`term_id`),  KEY `slug` (`slug`),  KEY `name` (`name`)) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40000 ALTER TABLE `ef_terms` DISABLE KEYS */;
INSERT INTO `ef_terms` VALUES('1', 'Uncategorized', 'uncategorized', '0');
INSERT INTO `ef_terms` VALUES('2', 'Services', 'services', '0');
INSERT INTO `ef_terms` VALUES('3', 'Solutions', 'solutions', '0');
INSERT INTO `ef_terms` VALUES('4', 'Primary Navigation', 'primary-navigation', '0');
INSERT INTO `ef_terms` VALUES('5', 'About Us Subnav', 'about-us-subnav', '0');
INSERT INTO `ef_terms` VALUES('6', 'Home Subnav', 'home-subnav', '0');
INSERT INTO `ef_terms` VALUES('7', 'Services Subnav', 'services-subnav', '0');
INSERT INTO `ef_terms` VALUES('8', 'Package Design', 'package-design', '0');
INSERT INTO `ef_terms` VALUES('9', 'Package Design', 'package-design', '0');
INSERT INTO `ef_terms` VALUES('10', 'Eye Tracking', 'eye-tracking', '0');
INSERT INTO `ef_terms` VALUES('11', 'Grocery', 'grocery', '0');
INSERT INTO `ef_terms` VALUES('12', 'Mass Merchants', 'mass-merchants', '0');
INSERT INTO `ef_terms` VALUES('13', 'Consumer Behavior', 'consumer-behavior', '0');
INSERT INTO `ef_terms` VALUES('14', 'Consumer Behavior', 'consumer-behavior', '0');
INSERT INTO `ef_terms` VALUES('15', 'Behavioral Economics', 'behavioral-economics', '0');
INSERT INTO `ef_terms` VALUES('16', 'Product Design', 'product-design', '0');
INSERT INTO `ef_terms` VALUES('17', 'Shelf Layout', 'shelf-layout', '0');
INSERT INTO `ef_terms` VALUES('18', 'Retail', 'retail', '0');
INSERT INTO `ef_terms` VALUES('19', 'Shopper Research', 'shopper-research', '0');
/*!40000 ALTER TABLE `ef_terms` ENABLE KEYS */;