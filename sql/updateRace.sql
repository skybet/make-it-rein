use MakeItRein;

create table Meeting (
    MeetingId  int not null AUTO_INCREMENT,
    Meeting  varchar(256) not null,
    PRIMARY KEY ( MeetingId )
);

ALTER TABLE Race
ADD MeetingId int(11),
ADD RaceDate datetime;

ALTER TABLE RACE
ADD CONSTRAINT meeting_id FOREIGN KEY (MeetingId) REFERENCES Meeting(MeetingId);

insert into Meeting (Meeting) VALUES ('Ascot');
insert into Meeting (Meeting) VALUES ('Doncaster');
insert into Meeting (Meeting) VALUES ('York');
insert into Meeting (Meeting) VALUES ('Leicester');
insert into Meeting (Meeting) VALUES ('Nottingham');
insert into Meeting (Meeting) VALUES ('Aintree');
insert into Meeting (Meeting) VALUES ('Newmarket');
insert into Meeting (Meeting) VALUES ('Cheltenham');
insert into Meeting (Meeting) VALUES ('Pontefract');
insert into Meeting (Meeting) VALUES ('Redcar');
insert into Meeting (Meeting) VALUES ('Wetherby');

update Race set MeetingId = 1, RaceDate = '2017-09-10 13:10:00' where RaceId = 1;
update Race set MeetingId = 2, RaceDate = '2017-09-10 14:00:00' where RaceId = 2;
update Race set MeetingId = 3, RaceDate = '2017-09-10 14:50:00' where RaceId = 3;
update Race set MeetingId = 4, RaceDate = '2017-09-17 09:00:00' where RaceId = 4;
update Race set MeetingId = 5, RaceDate = '2017-09-17 13:30:00' where RaceId = 5;
update Race set MeetingId = 6, RaceDate = '2017-09-17 13:50:00' where RaceId = 6;
update Race set MeetingId = 7, RaceDate = '2017-09-24 12:30:00' where RaceId = 7;
update Race set MeetingId = 8, RaceDate = '2017-09-24 13:00:00' where RaceId = 8;
update Race set MeetingId = 9, RaceDate = '2017-09-24 13:10:00' where RaceId = 9;
update Race set MeetingId = 10, RaceDate = '2017-10-01 10:20:00' where RaceId = 10;
update Race set MeetingId = 11, RaceDate = '2017-10-01 13:00:00' where RaceId = 11;
update Race set MeetingId = 1, RaceDate = '2017-10-01 16:20:00' where RaceId = 12;
update Race set MeetingId = 2, RaceDate = '2017-10-08 13:00:00' where RaceId = 13;
update Race set MeetingId = 3, RaceDate = '2017-10-08 14:50:00' where RaceId = 14;
update Race set MeetingId = 4, RaceDate = '2017-10-08 15:20:00' where RaceId = 15;
update Race set MeetingId = 5, RaceDate = '2017-10-15 11:00:00' where RaceId = 16;
update Race set MeetingId = 6, RaceDate = '2017-10-15 12:20:00' where RaceId = 17;
update Race set MeetingId = 7, RaceDate = '2017-10-15 13:00:00' where RaceId = 18;
update Race set MeetingId = 8, RaceDate = '2017-10-22 09:20:00' where RaceId = 19;
update Race set MeetingId = 9, RaceDate = '2017-10-22 10:00:00' where RaceId = 20;
update Race set MeetingId = 10, RaceDate = '2017-10-22 10:30:00' where RaceId = 21;
update Race set MeetingId = 11, RaceDate = '2017-10-29 13:00:00' where RaceId = 22;
update Race set MeetingId = 1, RaceDate = '2017-10-29 13:20:00' where RaceId = 23;
update Race set MeetingId = 2, RaceDate = '2017-10-29 13:40:00' where RaceId = 24;
update Race set MeetingId = 3, RaceDate = '2017-11-05 12:00:00' where RaceId = 25;
update Race set MeetingId = 4, RaceDate = '2017-11-05 12:30:00' where RaceId = 26;
update Race set MeetingId = 5, RaceDate = '2017-11-05 15:30:00' where RaceId = 27;
update Race set MeetingId = 6, RaceDate = '2017-11-12 09:00:00' where RaceId = 28;
update Race set MeetingId = 7, RaceDate = '2017-11-12 13:00:00' where RaceId = 29;
update Race set MeetingId = 8, RaceDate = '2017-11-12 15:20:00' where RaceId = 30;

INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('1', '13');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('3', '13');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('5', '13');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('7', '13');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('9', '13');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('11', '13');

INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('13', '14');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('15', '14');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('17', '14');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('2', '14');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('4', '14');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('6', '14');

INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('8', '15');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('10', '15');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('12', '15');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('14', '15');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('16', '15');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('18', '15');

INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('4', '16');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('8', '16');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('13', '16');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('18', '16');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('1', '16');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('5', '16');

INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('1', '17');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('5', '17');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('10', '17');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('15', '17');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('2', '17');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('6', '17');

INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('11', '18');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('16', '18');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('3', '18');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('7', '18');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('12', '18');
INSERT INTO HorseRaceLink (HorseId, RaceId) VALUES ('17', '18');

update Horse set HorseName = "Highlander" where HorseId = 15;