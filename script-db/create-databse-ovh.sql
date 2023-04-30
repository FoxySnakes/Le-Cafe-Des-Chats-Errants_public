
CREATE TABLE `productscategory` (
	`id` INT(11) NOT NULL,
	`name` VARCHAR(100) NOT NULL,
	`description` VARCHAR(1000) NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `products` (
	`id` INT(11) NOT NULL,
	`name` VARCHAR(100) NOT NULL,
	`description` VARCHAR(1000) NOT NULL,
	`pictureUrl` VARCHAR(250) NOT NULL,
	`popularity` INT(11) NOT NULL,
	`price` DECIMAL(4,2) NOT NULL,
	`discount` INT(11) NOT NULL,
	`productsCategoryId` INT(11) NOT NULL,
	`enabled` ENUM('true','false') NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `popularity` (`popularity`),
	FOREIGN KEY (`productsCategoryId`) REFERENCES `productscategory`(`id`)
);


CREATE TABLE `animations` (
	`id` INT(11) NOT NULL,
	`name` VARCHAR(100) NOT NULL,
	`description` VARCHAR(1000) NOT NULL,
	`dateStart` DATETIME NOT NULL,
	`dateEnd` DATETIME NOT NULL,
	`pictureUrl` VARCHAR(250) NOT NULL,
	`popularity` INT(11) NOT NULL,
	`totalPlaces` INT(11) NOT NULL,
	`remainingPlaces` INT(11) NOT NULL,
	`recurrence` ENUM('occasional','recurring') NOT NULL,
	`enabled` ENUM('true','false') NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `popularity` (`popularity`)
);


	