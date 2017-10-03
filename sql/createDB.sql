CREATE DATABASE MakeItRein;

use MakeItRein;

create table Round (
    RoundId  int not null AUTO_INCREMENT,
    StartDate  datetime not null,
    EndDate  datetime not null,
    PRIMARY KEY ( RoundId )
);

create table User(
    UserId  int(11) not null AUTO_INCREMENT,
    Email  varchar(256) not null,
    PRIMARY KEY ( UserId )
);

create table Horse(
    HorseId  int(11) not null AUTO_INCREMENT,
    HorseName  varchar(256) not null,
    PRIMARY KEY ( HorseId )
);

create table Race(
    RaceId  int(11) not null AUTO_INCREMENT,
    RoundId  int(11) not null,
    PRIMARY KEY ( RaceId ),
    FOREIGN KEY ( RoundId ) REFERENCES Round( RoundId )
);

create table HorseRaceLink(
    HorseRaceLinkId  int(11) not null AUTO_INCREMENT,
    HorseId  int(11) not null,
    RaceId  int(11) not null,
    Result int(11),
    PRIMARY KEY ( HorseRaceLinkId ),
    FOREIGN KEY ( HorseId ) REFERENCES Horse( HorseId ),
    FOREIGN KEY ( RaceId ) REFERENCES Race( RaceId )
);

create table Prediction(
    PredictionId  int(11) not null AUTO_INCREMENT,
    HorseRaceLinkId  int(11) not null,
    Position  int(11) not null,
    PRIMARY KEY ( PredictionId ),
    FOREIGN KEY ( HorseRaceLinkId ) REFERENCES HorseRaceLink( HorseRaceLinkId )
);
