CREATE DATABASE medialogue;
GRANT USAGE ON *.* TO 'appuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON medialogue.* TO 'appuser'@'localhost';
FLUSH PRIVILEGES;

USE medialogue;

CREATE TABLE IF NOT EXISTS 'users' (
    'id' int(16) NOT NULL AUTO_INCREMENT,
    'username' varchar(40) NOT NULL,
    'email' varchar(255) NOT NULL,
    'password' varchar(255) NOT NULL,
    PRIMARY KEY ('id')
) 

CREATE TABLE IF NOT EXISTS 'books' (
    'id' int(16) NOT NULL AUTO_INCREMENT,
    'title' varchar(255) NOT NULL,
    'authour' varchar(255),
    'genre' varchar(255),
    'description' TEXT,
    'pages' varchar(255),
    PRIMARY KEY ('id')
)

CREATE TABLE IF NOT EXISTS 'movies' (
    'id' int(16) NOT NULL AUTO_INCREMENT,
    'title' varchar(255) NOT NULL,
    'genre' varchar(255),
    'rating' varchar(255),
    'description' TEXT,
    'Runtime' varchar(255),
    PRIMARY KEY ('id')
)

CREATE TABLE IF NOT EXISTS 'games' (
    'id' int(16) NOT NULL AUTO_INCREMENT,
    'title' varchar(255) NOT NULL,
    'genre' varchar(255),
    'rating' varchar(255),
    'description' TEXT,
    'publisher' varchar(255),
    PRIMARY KEY ('id')

)
