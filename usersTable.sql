use team08;

drop table if exists users;

create table users
(
	userID int unsigned not null auto_increment primary key,
	userName varChar(50) not null,
	pwd varChar(50) not null
);
