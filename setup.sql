
CREATE DATABASE IF NOT EXISTS `picha`;

CREATE TABLE IF NOT EXISTS `picha`.`image_thread` (
  `image_id` VARCHAR(32) NOT NULL,
  `comment_x` INT NULL,
  `comment_y` INT NULL,
  `comment_w` INT NULL,
  `comment_h` INT NULL,
  `comment` VARCHAR(255) NOT NULL,
  `date` DATETIME NOT NULL,
  `channel` VARCHAR(32) NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;
