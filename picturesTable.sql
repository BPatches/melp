use team_08;

drop table if exists pictures;

create table pictures
(
	pictureID int unsigned not null auto_increment primary key,
	pictureLoc varChar(50) not null,
	articleID int not null,
	uploderID int not null
);
