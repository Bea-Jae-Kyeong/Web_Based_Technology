CREATE TABLE IF NOT EXISTS `user` (
 `id` tinyint(4) NOT NULL AUTO_INCREMENT,
 `username` varchar(30) NOT NULL,
 `email` varchar(30) NOT NULL,
 `password` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `user` ADD `group` TINYINT UNSIGNED NOT NULL DEFAULT 2;

CREATE TABLE IF NOT EXISTS `posts` (
 `id` tinyint(255) NOT NULL AUTO_INCREMENT,
 `title` varchar(255) NOT NULL,
 `descs` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;