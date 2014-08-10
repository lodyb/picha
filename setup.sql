
CREATE SCHEMA IF NOT EXISTS `picha` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `picha`.`comments` (
  `image_id` VARCHAR(32) NOT NULL,
  `box_x` INT NULL,
  `box_y` INT NULL,
  `box_w` INT NULL,
  `box_h` INT NULL,
  `comment` VARCHAR(255) NOT NULL,
  `date` DATETIME NOT NULL,
  `channel` VARCHAR(32) NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `picha`.`images` (
  `image_id` VARCHAR(32) NOT NULL,
  `ip` VARCHAR(64) NOT NULL,
  `like` INT NULL DEFAULT 0,
  `dislike` INT NULL DEFAULT 0,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`image_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;
