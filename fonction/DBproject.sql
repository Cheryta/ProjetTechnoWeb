drop table if exists Appartement;

drop table if exists Contrat;

drop table if exists Locataire;

drop table if exists Proprietaire;

drop table if exists Tarif;

/*==============================================================*/
/* Table: Appartement                                           */
/*==============================================================*/
create table Appartement
(
   numLocation          int not null,
   numContrat           int not null,
   categorie            varchar(254),
   typeAppart           varchar(254),
   nbPersonne           int,
   adresseLocation      varchar(254),
   photo                varchar(254),
   equipements          varchar(254),
   primary key (numLocation)
);

/*==============================================================*/
/* Table: Contrat                                               */
/*==============================================================*/
create table Contrat
(
   numContrat           int not null,
   etat                 varchar(254),
   dateCreation         datetime,
   dateDebut            datetime,
   dateFin              datetime,
   primary key (numContrat)
);

/*==============================================================*/
/* Table: Locataire                                             */
/*==============================================================*/
create table Locataire
(
   numLoc               int not null,
   numContrat           int not null,
   nomLoc               varchar(254),
   prenomLoc            varchar(254),
   adresse1Loc          varchar(254),
   adresse2Loc          varchar(254),
   codePostalLoc        varchar(254),
   villeLoc             varchar(254),
   numTel2Loc           int,
   numTel1Loc           int,
   emailLoc             varchar(254),
   primary key (numLoc)
);

/*==============================================================*/
/* Table: Proprietaire                                          */
/*==============================================================*/
create table Proprietaire
(
   num                  int not null,
   numLocation          int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   adresse1             varchar(254),
   adresse2             varchar(254),
   codePostal           varchar(254),
   ville                varchar(254),
   numTel2              int,
   numTel1              int,
   cAcumule             varchar(254),
   email                varchar(254),
   primary key (num)
);

/*==============================================================*/
/* Table: Tarif                                                 */
/*==============================================================*/
create table Tarif
(
   codeTarif            int not null,
   numLocation          int not null,
   prixsemHS            int,
   prixsemBS            int,
   primary key (codeTarif)
);

alter table Appartement add constraint FK_association4 foreign key (numContrat)
      references Contrat (numContrat) on delete restrict on update restrict;

alter table Locataire add constraint FK_association2 foreign key (numContrat)
      references Contrat (numContrat) on delete restrict on update restrict;

alter table Proprietaire add constraint FK_association3 foreign key (numLocation)
      references Appartement (numLocation) on delete restrict on update restrict;

alter table Tarif add constraint FK_association1 foreign key (numLocation)
      references Appartement (numLocation) on delete restrict on update restrict;
