CREATE TABLE IF NOT EXISTS `internship`(
    `userid` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
)

INSERT INTO `internship` (`userid`,`username`,`password`)