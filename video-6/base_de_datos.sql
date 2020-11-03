create database cursoyii2;
create user 'cursoyii2'@'localhost' identified with mysql_native_password by '123456';
grant all privileges on cursoyii2.* to 'cursoyii2'@'localhost';
flush privileges;

create table libro(
    id int auto_increment,
    titulo varchar(255) not null,
    autor varchar(255) not null,
    editorial varchar(255) not null,
    publicado_en date,
    primary key(id),
    unique(titulo)
);

INSERT INTO `cursoyii2`.`libro` (`titulo`, `autor`, `editorial`, `publicado_en`) values ('relato de un náufrago', 'gabriel garcía márquez', 'norma', '1990-01-02');
INSERT INTO `cursoyii2`.`libro` (`titulo`, `autor`, `editorial`, `publicado_en`) values ('maría', 'gabriel garcía márquez', 'norma', '1985-05-14');
INSERT INTO `cursoyii2`.`libro` (`titulo`, `autor`, `editorial`, `publicado_en`) values ('cien años de soledad', 'gabriel garcía márquez', 'norma', '1983-05-04');

-- pgsql --

CREATE TABLE libro
(
    id serial NOT NULL,
    titulo character varying(255) NOT NULL primary key,
    autor character varying(255) NOT NULL,
    editorial character varying(255) NOT NULL,
    publicado_en date
);