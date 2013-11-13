use team08;

drop table if exists pictures;

create table pictures
(
	pictureID int unsigned not null auto_increment primary key,
	pictureLoc varChar(255) not null,
	articleID int not null,
	uploaderID int
);
