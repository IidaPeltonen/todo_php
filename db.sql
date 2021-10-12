/*poista kanta*/
drop database if exists todo;

/*luo kanta*/
create database todo;

/*luo uusi task*/
create table task ( id int primary key auto_increment, description text not null );

/*syötä taskiin soopaa*/
insert into task (description) values ('Testi taski');
insert into task (description) values ('Toinen testi taski');
