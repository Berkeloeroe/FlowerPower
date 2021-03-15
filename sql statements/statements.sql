CREATE DATABASE IF NOT EXISTS flowerpower;

USE flowerpower;

CREATE TABLE IF NOT EXISTS Klant (
    Klantcode int primary key NOT NULL AUTO_INCREMENT,
    Voorletters varchar(255),
    Tussenvoegsels varchar(255),
    Achternaam varchar(255),
    Adres varchar(255),
    Postcode varchar(255),
    Woonplaats varchar(255),
    Geboortedatum varchar(255),
    Gebruikersnaam varchar(255),
    Wachtwoord varchar(255)
);

CREATE TABLE IF NOT EXISTS Factuur (
    Factuurnummer int primary key NOT NULL AUTO_INCREMENT,
    Factuurdatum varchar(255),
    Klantcode int,
    foreign key (Klantcode) references Klant(Klantcode)
);

CREATE TABLE IF NOT EXISTS Artikel (
    Artikelcode int primary key NOT NULL AUTO_INCREMENT,
    Artikel varchar(255),
    Prijs decimal
);

CREATE TABLE IF NOT EXISTS Winkel (
    Winkelcode int primary key NOT NULL AUTO_INCREMENT,
    Winkelnaam varchar(255),
    Winkeladres  varchar(255),
    Winkelpostcode varchar(255),
    Winkelvestigingsplaats varchar(255),
    Telefoonnummer int
);

CREATE TABLE IF NOT EXISTS Medewerker (
    Medewerkerscode int primary key NOT NULL AUTO_INCREMENT,
    Voorletters varchar(255),
    Voorvoegsels  varchar(255),
    Achternaam varchar(255),
    Gebruikersnaam varchar(255),
    Wachtwoord varchar(255)
);

CREATE TABLE IF NOT EXISTS Factuurregel (
    Factuurnummer int NOT NULL AUTO_INCREMENT,
    Artikelcode int,
    Aantal int,
    Prijs decimal,
    foreign key (Factuurnummer) references Factuur(Factuurnummer),
	foreign key (Artikelcode) references Artikel(Artikelcode)
);

CREATE TABLE IF NOT EXISTS Bestelling (
    Bestellingsnummer int primary key NOT NULL AUTO_INCREMENT,
    Artikelcode int NOT NULL AUTO_INCREMENT,
    Winkelcode int,
    Aantal int,
    Klantcode int,
    Medewerkerscode int,
    Afgehaald varchar(255),
    foreign key (Artikelcode) references Artikel(Artikelcode),
	foreign key (Winkelcode) references Winkel(Winkelcode),
	foreign key (Klantcode) references Klant(Klantcode),
	foreign key (Medewerkerscode) references Medewerker(Medewerkerscode)
);