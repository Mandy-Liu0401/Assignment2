-- Database: `booklogue` and php web application user
DROP DATABASE IF EXISTS booklogue;
CREATE DATABASE booklogue;
GRANT USAGE ON *.* TO 'appuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON booklogue.* TO 'appuser'@'localhost';
FLUSH PRIVILEGES;

USE booklogue;


-- Table structure for table `books`
CREATE TABLE IF NOT EXISTS `books` (
    `id` int(8) NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `author` varchar(255) NOT NULL,
    `genre` varchar(255) NOT NULL,
    `description` TEXT,
    `comment` TEXT,
    PRIMARY KEY (`id`)
);

