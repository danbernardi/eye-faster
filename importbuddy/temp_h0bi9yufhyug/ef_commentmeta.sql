CREATE TABLE `ef_commentmeta` (  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',  `meta_key` varchar(255) DEFAULT NULL,  `meta_value` longtext,  PRIMARY KEY (`meta_id`),  KEY `comment_id` (`comment_id`),  KEY `meta_key` (`meta_key`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40000 ALTER TABLE `ef_commentmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `ef_commentmeta` ENABLE KEYS */;
