DROP DATABASE IF EXISTS `e_learning`

CREATE DATABASE e_learning;
CREATE TABLE stappenplan (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(255) NOT NULL,
Minutes int,
Description varchar(255) NOT NULL
);