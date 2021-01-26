CREATE DATABASE IF NOT EXISTS flowerpower;

USE flowerpower;

CREATE TABLE IF NOT EXISTS Klant (
    Klantcode int primary key,
    Voorletters varchar(50),
    Tussenvoegsels varchar(50),
    Achternaam varchar(50),
    Adres varchar(50),
    Postcode varchar(50),
    Woonplaats varchar(50),
    Geboortedatum varchar(50),
    Gebruikersnaam varchar(50),
    Wachtwoord varchar(50)
);

CREATE TABLE IF NOT EXISTS Factuur (
    Factuurnummer int primary key,
    Factuurdatum varchar(50),
    Klantcode int,
    foreign key (Klantcode) references Klant(Klantcode)
);

CREATE TABLE IF NOT EXISTS Artikel (
    Artikelcode int primary key,
    Artikel varchar(50),
    Prijs decimal
);

CREATE TABLE IF NOT EXISTS Winkel (
    Winkelcode int primary key,
    Winkelnaam varchar(50),
    Winkeladres  varchar(50),
    Winkelpostcode varchar(50),
    Winkelvestigingsplaats varchar(50),
    Telefoonnummer int
);

CREATE TABLE IF NOT EXISTS Medewerker (
    Medewerkerscode int primary key,
    Voorletters varchar(50),
    Voorvoegsels  varchar(50),
    Achternaam varchar(50),
    Gebruikersnaam varchar(50),
    Wachtwoord varchar(50)
);

CREATE TABLE IF NOT EXISTS Factuurregel (
    Factuurnummer int,
    Artikelcode varchar(50),
    Aantal int,
    Prijs decimal,
    foreign key (Factuurnummer) references Factuur(Factuurnummer),
	foreign key (Artikelcode) references Artikel(Artikelcode)
);

CREATE TABLE IF NOT EXISTS Bestelling (
    Artikelcode int,
    Winkelcode int,
    Aantal int,
    Klantcode int,
    Medewerkerscode int,
    Afgehaald varchar(30),
    foreign key (Artikelcode) references Artikel(Artikelcode),
	foreign key (Winkelcode) references Winkel(Winkelcode),
	foreign key (Klantcode) references Klant(Klantcode),
	foreign key (Mederwerkerscode) references Medewerker(Mederwerkerscode)
);








