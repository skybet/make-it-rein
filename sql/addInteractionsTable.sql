use makeitrein;

create table UserInteraction    (
	TrackerId  int not null AUTO_INCREMENT,
	UserId int null,
    datetimeaccessed  datetime not null,
    ip  varchar(255),
    browserinfo  varchar(500) null,
    PRIMARY KEY ( TrackerId ),
	FOREIGN KEY ( UserId ) REFERENCES User( UserId )
);
