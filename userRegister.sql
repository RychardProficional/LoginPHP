CREATE DATABASE usersRegisters;
USE usersRegisters;

CREATE TABLE `user`(
    `id` int(30) NOT NULL ZEROFULL AUTO_INCREMENT,
    `name` varchar(30) NOT NULL,
    `password` varchar(30) NOT NULL,
    PRIMARY KEY(`id`)
)