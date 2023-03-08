USE `lense`;
CREATE TABLE `users`(
    `userID` int(11) AUTO_INCREMENT,
    `email` varchar(225),
    `username` varchar(225),
    `password` varchar(225),
    `firstName` varchar(225),
    `lastName` varchar(225),
    PRIMARY KEY(`userID`)
);
CREATE TABLE `photos`(
    `photoID` int(11) AUTO_INCREMENT,
    `userID` int(11),
    --`date` DATETIME(),
    `caption` varchar(225),
    PRIMARY KEY (`photoID`)
)

INSERT INTO `users` (`userID`, `email`, `username`, `password`, `firstName`, `lastName`) 
    VALUES (1, 'example@email.com', 'usnm', 'pswd');