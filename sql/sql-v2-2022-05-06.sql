CREATE TABLE `cha_inv`.`article_category`
(
    `id`   INT          NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `cha_inv`.`article`
(
    `id`          INT(100) NOT NULL AUTO_INCREMENT,
    `category_id` INT(100) NOT NULL,
    `name`        VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE (`category_id`)
) ENGINE = InnoDB;

CREATE TABLE `cha_inv`.`users_article`
(
    `user_id`    INT(100) NOT NULL,
    `article_id` INT(100) NOT NULL
) ENGINE = InnoDB;

ALTER TABLE `users_article`
    ADD PRIMARY KEY (`user_id`, `article_id`);

ALTER TABLE `users` ADD `ad_user` VARCHAR(200) NOT NULL AFTER `id`, ADD UNIQUE (`ad_user`);
