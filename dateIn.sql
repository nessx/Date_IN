CREATE DATABASE DateIn;

CREATE TABLE `DateIn`.`Users` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR NOT NULL , `last_name` VARCHAR NOT NULL , `email` VARCHAR NOT NULL , `password` VARCHAR NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `DateIn`.`Api-key` ( `id` VARCHAR(255) NOT NULL , `user_id` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `Api-key` CHANGE `user_id` `user_id` INT NOT NULL;

ALTER TABLE `Api-key` ADD CONSTRAINT FK_USERS_APIKEY FOREIGN KEY (user_id) REFERENCES (id.Users);

ALTER TABLE `Users` ADD `description` VARCHAR(255) NOT NULL AFTER `password`;

CREATE TABLE `DateIn`.`Actions` ( `id_user` INT NOT NULL , `id_affected_user` INT NOT NULL , `action` INT NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `Actions` ADD PRIMARY KEY( `id_user`, `id_affected_user`);
