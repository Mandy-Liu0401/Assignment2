-- Database: `booklogue` and php web application user
CREATE DATABASE booklogue;
GRANT USAGE ON *.* TO 'appuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON medialogue.* TO 'appuser'@'localhost';
FLUSH PRIVILEGES;

USE booklogue;

-- Table structure for table `users`
CREATE TABLE IF NOT EXISTS 'users' (
    'id' int(8) NOT NULL AUTO_INCREMENT,
    'username' varchar(40) NOT NULL,
    'email' varchar(255) NOT NULL,
    'password' varchar(255) NOT NULL,
    PRIMARY KEY ('id')
) 

CREATE TABLE IF NOT EXISTS 'books' (
    'id' int(8) NOT NULL AUTO_INCREMENT,
    'title' varchar(255) NOT NULL,
    'authour' varchar(255),
    'genre' varchar(255),
    'description' TEXT,
    PRIMARY KEY ('id')
)

-- insert some test data for two tables
INSERT INTO 'users' ('id', 'username', 'email','password') VALUES
(1, 'test', 'test@gmail.com', 'pass1');


INSERT INTO 'books' ('id', 'title', 'author','genre','description') VALUES
(1, 'testbook', 'testauthor', 'romance','It is a romance book.');


-- CREATE TABLE IF NOT EXISTS 'movies' (
--     'id' int(8) NOT NULL AUTO_INCREMENT,
--     'title' varchar(255) NOT NULL,
--     'genre' varchar(255),
--     'rating' varchar(255),
--     'description' TEXT,
--     'Runtime' varchar(255),
--     PRIMARY KEY ('id')
-- )

-- CREATE TABLE IF NOT EXISTS 'games' (
--     'id' int(8) NOT NULL AUTO_INCREMENT,
--     'title' varchar(255) NOT NULL,
--     'genre' varchar(255),
--     'rating' varchar(255),
--     'description' TEXT,
--     'publisher' varchar(255),
--     PRIMARY KEY ('id')

