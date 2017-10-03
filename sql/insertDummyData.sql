INSERT INTO User
(Email)
Values
("User1@user.com"),
("User2@user.com"),
("User3@user.com"),
("User4@user.com"),
("User5@user.com"),
("User6@user.com"),
("User7@user.com"),
("User8@user.com"),
("User9@user.com"),
("User10@user.com"),
("User11@user.com"),
("User12@user.com"),
("User13@user.com"),
("User14@user.com"),
("User15@user.com"),
("User16@user.com"),
("User17@user.com"),
("User18@user.com"),
("User19@user.com"),
("User20@user.com");


INSERT INTO Round (StartDate, EndDate) values
('2017-09-04', '2017-09-10'),
('2017-09-11', '2017-09-17'),
('2017-09-18', '2017-09-24'),
('2017-09-25', '2017-10-01'),
('2017-10-02', '2017-10-08'),
('2017-10-09', '2017-10-15'),
('2017-10-16', '2017-10-22'),
('2017-10-23', '2017-10-29'),
('2017-10-30', '2017-11-05'),
('2017-11-06', '2017-11-12');


INSERT INTO Race ( RoundId) values
('1'),
('1'),
('1'),
('2'),
('2'),
('2'),
('3'),
('3'),
('3'),
('4'),
('4'),
('4'),
('5'),
('5'),
('5'),
('6'),
('6'),
('6'),
('7'),
('7'),
('7'),
('8'),
('8'),
('8'),
('9'),
('9'),
('9'),
('10'),
('10'),
('10');


insert into Horse (HorseName) VALUES ('Take A Break');
insert into Horse (HorseName) VALUES ('The Last Samuri');
insert into Horse (HorseName) VALUES ('Regal Encore');
insert into Horse (HorseName) VALUES ('Rule The World');
insert into Horse (HorseName) VALUES ('Harry Chaplain');
insert into Horse (HorseName) VALUES ('The Young Master');
insert into Horse (HorseName) VALUES ('Saint Are');
insert into Horse (HorseName) VALUES ('Rocky Creek');
insert into Horse (HorseName) VALUES ('Holywell');
insert into Horse (HorseName) VALUES ('On His Own');
insert into Horse (HorseName) VALUES ('Shutthefrontdoor');
insert into Horse (HorseName) VALUES ('Red Rum');
insert into Horse (HorseName) VALUES ('Boston Bob');
insert into Horse (HorseName) VALUES ('Onenightinvienna');
insert into Horse (HorseName) VALUES ('The Last Samuri');
insert into Horse (HorseName) VALUES ('Just A Par');
insert into Horse (HorseName) VALUES ('Warhorse');
insert into Horse (HorseName) VALUES ('Ballycasey');
insert into Horse (HorseName) VALUES ('Home Farm');
insert into Horse (HorseName) VALUES ('Gilgamboa');
insert into Horse (HorseName) VALUES ('Wonderful Charm');
insert into Horse (HorseName) VALUES ('Morning Assembley');
insert into Horse (HorseName) VALUES ('Double Ross');
insert into Horse (HorseName) VALUES ('Court By Surprise');


INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('1', '1');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('2', '1');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('3', '1');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('4', '1');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('5', '1');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('6', '1');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('7', '2');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('8', '2');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('9', '2');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('10', '2');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('11', '2');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('12', '2');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('13', '3');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('14', '3');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('15', '3');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('16', '3');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('17', '3');
INSERT INTO `MakeItRein`.`HorseRaceLink` (`HorseId`, `RaceId`) VALUES ('18', '3');

INSERT INTO `Prediction` (HorseRaceLinkId, UserId, Position) VALUES ( 5, 3, 1 );
INSERT INTO `Prediction` (HorseRaceLinkId, UserId, Position) VALUES ( 3, 3, 2 );
INSERT INTO `Prediction` (HorseRaceLinkId, UserId, Position) VALUES ( 1, 3, 3 );
INSERT INTO `Prediction` (HorseRaceLinkId, UserId, Position) VALUES ( 10, 4, 1 );
INSERT INTO `Prediction` (HorseRaceLinkId, UserId, Position) VALUES ( 8, 4, 2 );
INSERT INTO `Prediction` (HorseRaceLinkId, UserId, Position) VALUES ( 12, 4, 3 );
