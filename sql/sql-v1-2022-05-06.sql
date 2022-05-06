CREATE
    DATABASE cha_inv;

CREATE TABLE `cha_inv`.`departments`
(
    `id`   INT          NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `cha_inv`.`users`
(
    `id`   INT          NOT NULL AUTO_INCREMENT,
    `department_id` int(11) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

ALTER TABLE `users`
    ADD UNIQUE KEY `department_id` (`department_id`);

CREATE USER 'charles'@'%' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'charles'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `cha_inv`.* TO 'charles'@'%';
