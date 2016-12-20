CREATE TABLE news (
   id smallint(5) unsigned NOT NULL auto_increment,
   headline text NOT NULL,
   story text NOT NULL,
   name varchar(255),
   email varchar(255),
   timestamp datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   PRIMARY KEY (id)
);


CREATE TABLE `members` (
`id` int(4) NOT NULL auto_increment,
`username` varchar(65) NOT NULL default '',
`password` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;
-- 
-- Dumping data for table `members`
--
INSERT INTO `members` VALUES (1, 'Administrator', '1234');