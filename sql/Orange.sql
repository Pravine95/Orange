drop database if exists Orange;
create database Orange;
use Orange;

create table client(
    idclient int(3) not null auto_increment,
    nom varchar(100),
    prenom varchar(100),
    adresse varchar (100),
    email varchar (100),
    tel varchar(10),
    primary key (idclient)
    );

create table Objet (
    idobjet int(3) not null auto_increment primary key,
    marque varchar(100),
    prix int(3),
    dateAchat date,
    idclient int(3) not null ,
    foreign key (idclient) references client (idclient)
    );

create table Technicien (
    idtechnicien int(3) not null auto_increment primary key,
    nom  varchar(100),
    prenom  varchar(100),
    competence  varchar(100),
    email  varchar(100),
    tel  varchar(100)
    );

create table Intervention (
    idintervention int(3) not null auto_increment primary key,
    descriptionInter text,
    dateInter date,
    prixInter int (3),
    idobjet int(3) not null,
    idtechnicien int(3) not null,
    foreign key (idobjet) references Objet(idobjet),
    foreign key (idtechnicien) references Technicien(idtechnicien)
    );

create table user (
    iduser int(3) not null auto_increment primary key,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(50),
    role enum("Admin","User")
    );

insert into user values(1,'Olivier','Paul','a@gmail.com',123,'Admin'),
 (2,'Marie','Lucie','b@gmail.com',456,'User');


