create table member ( 
    id varchar(10) not null,
    passwd varchar(10) not null,
    name varchar(10) not null,
    sex char(1),
    tel varchar(20),
    address varchar(90),
    address2 varchar(90),
    introduce varchar(300),
    primary key(id) 
);

