DROP DATABASE IF EXISTS `E-learning`

CREATE TABLE Elearning (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(255) NOT NULL,
Minutes int,
Description varchar(255) NOT NULL
);