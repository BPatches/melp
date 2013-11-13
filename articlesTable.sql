use team08;

drop table if exists articles;

create table articles
(
	articlesID int unsigned not null auto_increment primary key,
	articleTitle varChar(50) not null
	# There is clearly going to need to be other stuff here at some point
);

insert into articles (articleTitle) values
        ("somewhere awesome"),
	("somewhere kinda awesome"),
	("somewhere not awesome")
;