CREATE DATABASE LeCafeDesChatsErrants;
USE LeCafeDesChatsErrants;
CREATE TABLE `products` (
	`id` INT(11) NOT NULL,
	`name` VARCHAR(100) NOT NULL,
	`description` VARCHAR(1000) NOT NULL,
	`pictureUrl` VARCHAR(250) NOT NULL,
	`popularity` INT(11) NOT NULL,
	`price` DECIMAL(4,2) NOT NULL,
	`discount` INT(11) NOT NULL,
	`productsCategoryId` INT(11) NOT NULL,
	`enabled` VARCHAR(5) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `popularity` (`popularity`),
	FOREIGN KEY (`productsCategoryId`) REFERENCES `productscategory`(`id`),
	ADD CONSTRAINT `PRODUCTS_ENABLED_RESTRICT` CHECK (`enabled` in ('true','false'))
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
	`recurrence` VARCHAR(50) NOT NULL,
	`enabled` VARCHAR(5) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `popularity` (`popularity`),
	ADD CONSTRAINT `ANIMATIONS_ENABLED_RESTRICT` CHECK (`enabled` in ('true','false')),
	ADD CONSTRAINT `ANIMATIONS_RECURRENCE_RESTRICT` CHECK (`recurrence` in ('occasional','recurring')),
	ADD CONSTRAINT `ANIMATIONS_REMAININGPLACES_RESTRICT` CHECK (`remainingPlaces` <= `totalPlaces`)
);

CREATE TABLE `productscategory` (
	`id` INT(11) NOT NULL,
	`name` VARCHAR(100) NOT NULL,
	`description` VARCHAR(1000) NULL,
	PRIMARY KEY (`id`)
);

	