CREATE DATABASE `lense`;
USE `lense`;
CREATE TABLE IF NOT EXISTS `users`(
    `userID` int(11) AUTO_INCREMENT,
    `email` varchar(225),
    `username` varchar(225),
    `password` varchar(225),
    `firstName` varchar(225),
    `lastName` varchar(225),
    PRIMARY KEY(`userID`)
);
CREATE TABLE IF NOT EXISTS `photos`(
    `photoID` int(11) AUTO_INCREMENT,
    `userID` int(11),
    `fileName` varchar(225),
    --`date` DATETIME(),
    --`caption` varchar(225),
    PRIMARY KEY (`photoID`)
)

INSERT INTO `users` (`userID`, `email`, `username`, `password`, `firstName`, `lastName`) 
    VALUES (1, 'example@email.com', 'usnm', 'pswd');