  CREATE DATABASE users;
USE users;

CREATE TABLE `user`(
    `id` int(6) UNSIGNED ZEROFILL AUTO_INCREMENT NOT NULL,
    `username` varchar(30) NOT NULL,
    `password` varchar(30) NOT NULL,
    PRIMARY KEY(`id`)
)