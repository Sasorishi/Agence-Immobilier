drop database if exists AgenceImmobilier;
create database AgenceImmobilier;
use AgenceImmobilier;

create table proprietaire
(
	idProprietaire int(5) auto_increment not null,
	nomProprietaire varchar(25) not null,
	prenomProprietaire varchar(25) not null,
	telProprietaire varchar(20),
	emailProprietaire varchar(40),
	mdpProprietaire varchar(25),
	image varchar(25),
	primary key(idProprietaire)
);

create table client
(
	idClient int(5) auto_increment not null,
	nomClient varchar(25) not null,
	prenomClient varchar(25) not null,
	telClient varchar(20),
	emailClient varchar(40),
	mdpClient varchar(25),
	image varchar(25),
	primary key(idClient)
);

create table typeBien
(
	idTypeBien int(5) auto_increment not null,
	libelleTypeBien enum('maison', 'appartement', 'bureau', 'immeuble', 'terrain', 'local commercial', 'parking'),
	primary key(idTypeBien)
);

create table typeMeuble
(
	idTypeMeuble int(5) auto_increment not null,
	libelleTypeMeuble enum('armoire', 'porte manteau', 'porte parapluie', 'bibliothèque', 'horloge', 'table', 'bureau', 'comptoir', 
		'commode', 'étagère', 'lit', 'chaise', 'canapé', 'banc', 'divan', 'canapé-lit', 'fauteuil'),
	primary key(idTypeMeuble)
);

create table meuble
(
	idTypeMeuble int(5),
	idMeuble int(5) auto_increment not null,
	libelleMeuble varchar(25),
	matiere enum('bois', 'metal', 'acier', 'plastique'),
	couleur varchar(25),
	primary key(idMeuble),
	foreign key(idTypeMeuble) references typeMeuble(idTypeMeuble)
);

create table bien
(
	idProprietaire int(5),
	idTypeBien int(5),
	idBien int(5) auto_increment not null,
	prix float(8,2),
	description varchar(150) not null,
	surface varchar(5) not null,
	nombrePiece int(2) default null,
	nombreChambre int(2) default null,
	etage int(2) default null,
	adresse varchar(25),
	lieu varchar(25),
	dateConstruction varchar(5),
	image varchar(25),
	primary key(idBien),
	foreign key(idTypeBien) references typeBien(idTypeBien),
	foreign key(idProprietaire) references proprietaire(idProprietaire)
);

create table bienAvecMeuble
(
	idbienAvecMeuble int(5) auto_increment not null,
	idMeuble int(5),
	idBien int(5),
	primary key(idbienAvecMeuble),
	foreign key(idMeuble) references meuble(idMeuble),
	foreign key(idBien) references bien(idBien)
);

/*
insert into proprietaire values
	(null, 'Nom', 'Prenom', '0600000000', 'nomprenom@gmail.com');

insert into client values
	(null, 'Nom', 'Prenom', '0600000000', 'nomprenom@gmail.com');

insert into typeBien values
	(null, 'maison'),
	(null, 'appartement'),
	(null, 'bureau'),
	(null, 'immeuble'),
	(null, 'terrain'),
	(null, 'local commercial'),
	(null, 'parking');

insert into bien values
	('2', null, 'Description', '65 m²', '3', '2', '1', 'Beauregard-Les Gradins', 'Torcy', '2009', 'image.png');

insert into typeMeuble values
	(null, 'armoire'), 
	(null, 'porte manteau'), 
	(null, 'porte parapluie'), 
	(null, 'bibliothèque'), 
	(null, 'horloge'), 
	(null, 'table'), 
	(null, 'bureau'), 
	(null, 'comptoir'), 
	(null, 'commode'), 
	(null, 'étagère'),
	(null, 'lit'),
	(null, 'chaise'),
	(null, 'canapé'),
	(null, 'banc'),
	(null, 'divan'),
	(null, 'canapé-lit'),
	(null, 'fauteuil');

insert into meuble values

	('11', null, 'lit simple', 'bois', 'Bleu'),

	('11', null, 'chaise', 'plastique', 'Blanc'),

	('11', null, 'table ronde', 'bois', 'Noir');

insert into bienAvecMeuble values
	(null, '1', '1'),
	(null, '2', '1'),
	(null, '3', '1');
*/