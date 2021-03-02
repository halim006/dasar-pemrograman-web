create table customers
(
    id    varchar(100) not null,
    name  varchar(100) not null,
    email varchar(100) not null
) engine = InnoDB;

select *
from customers;

create table admin
(
    username varchar(100) not null,
    password varchar(100) not null,
    primary key (username)
) engine = InnoDB;

select *
from admin;

insert into admin (username, password)
values ('admin', 'admin');
insert into admin (username, password)
values ('saya', 'admin');

create table comment
(
    id      int          not null auto_increment,
    name    varchar(100) not null,
    comment text,
    primary key (id)
) engine = InnoDB;

select *
from comment;