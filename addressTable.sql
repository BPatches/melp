use team08;

drop table if exists addresses;

create table addresses
(
  addressID int unsigned not null auto_increment primary key,
  name varChar(50) not null,
  address varChar(50) not null
);