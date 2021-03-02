create table todolist
(
    id   int          not null auto_increment,
    todo varchar(255) not null,
    primary key (id)
) engine = Innodb;
select *
from todolist;