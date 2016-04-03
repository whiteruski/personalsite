# Resume site with ZF2 and Angular

**To get it running locally:**

* config/autoload/doctrine.local.php - edit with db details, use .dist as template
* php composer.phar install
* npm install
* grunt

**Future additions/plans:**

* Contact form
* Admin backend

**DB Schema:**

```sql

# ************************************************************
# Sequel Pro SQL dump
# Version 4500
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: personalsite
# Generation Time: 2016-04-03 03:27:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table experience
# ------------------------------------------------------------

CREATE TABLE `experience` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `time` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(500) NOT NULL DEFAULT '',
  `description` varchar(9000) NOT NULL DEFAULT '',
  `company` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table hobby
# ------------------------------------------------------------

CREATE TABLE `hobby` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table language
# ------------------------------------------------------------

CREATE TABLE `language` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `proficiency` int(11) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table skill
# ------------------------------------------------------------

CREATE TABLE `skill` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(500) DEFAULT '',
  `proficiency` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```

This is a [live site](http://xenadev.com/) running on AWS.

**Sample AWS doctrine config**(doctrine.global.php)**:**

```php
<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => $_SERVER['RDS_HOSTNAME'],
                    'port'     => $_SERVER['RDS_PORT'],
                    'user'     => $_SERVER['RDS_USERNAME'],
                    'password' => $_SERVER['RDS_PASSWORD'],
                    'dbname'   => $_SERVER['RDS_DB_NAME'],
                )
            )
        )
    ),
);
```