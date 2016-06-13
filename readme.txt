Nicole van den Dries (5639050)
Tijmen van den Pol (4288234)

Link:

https://www.students.science.uu.nl/~5639050/Herkansingwebsite/ (van de server van Nicole complete source code hiervan ingeleverd)
https://www.students.science.uu.nl/~4288238/pc3/  (van de server van Tijmen geen volledige source code)

Browsers:
Chrome
Firefox


inloggegevens:

username: nicole
wachtwoord: nicole


///Ik (Nicole) kan heb niet de laatste versie van de gevulde database dus 
///dit is zijn de enige inloggevens die ik weet.


Database statements:

CREATE TABLE `Likes` (
	`id`	INTEGER NOT NULL,
	`gegeven_aan`	INTEGER NOT NULL,
	FOREIGN KEY(`id`) REFERENCES `Persoon`(`id`)
);

CREATE TABLE `Merkvoorkeur` (
	`id`	INTEGER NOT NULL,
	`merk`	TEXT NOT NULL,
	PRIMARY KEY(id,merk),
	FOREIGN KEY(`id`) REFERENCES `Persoon`(`id`)
);

CREATE TABLE `Persoon` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	`nickname`	TEXT NOT NULL,
	`naam`	TEXT NOT NULL,
	`wachtwoord`	TEXT NOT NULL,
	`email`	TEXT NOT NULL,
	`geboortedatum`	TEXT NOT NULL,
	`geslacht`	TEXT NOT NULL,
	`foto`	INTEGER,
	`beschrijving`	TEXT NOT NULL,
	`geslachtsvoorkeur`	TEXT NOT NULL,
	`leeftijdsvoorkeurmin`	INTEGER NOT NULL,
	`leeftijdsvoorkeurmax`	INTEGER NOT NULL,
	`tI`	INTEGER NOT NULL,
	`tN`	INTEGER NOT NULL,
	`tT`	INTEGER NOT NULL,
	`tJ`	INTEGER NOT NULL,
	`vI`	INTEGER NOT NULL,
	`vN`	INTEGER NOT NULL,
	`vT`	INTEGER NOT NULL,
	`vJ`	INTEGER NOT NULL
);

CREATE TABLE `ci_sessions` (
	`id`	TEXT NOT NULL DEFAULT '0',
	`ip_address`	TEXT NOT NULL DEFAULT '0',
	`timestamp`	INTEGER NOT NULL DEFAULT 0,
	`data`	TEXT NOT NULL,
	PRIMARY KEY(id)
);
