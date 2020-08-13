CREATE DATABASE  socialnetworking;

USE socialnetworking;

CREATE TABLE categorias(
    id_codigo int not null primary key auto_increment,
    codigo varchar(3) NOT NULL,
    descricao varchar(50) NOT NULL
);

INSERT INTO categorias (codigo, descricao)
VALUES
    ('ADM', 'Administração'),
    ('CON', 'Contabilidade'),
    ('ENG', 'Engenharia'),
    ('MED', 'Medicina'),
    ('TEC', 'Tecnologia');



CREATE TABLE user(
	id_user int not null primary key auto_increment,
    cpf varchar (14) not null,
	name_full varchar(255) not null,
	email varchar(100) not null,
    cellphone varchar(25),
    datanasc date,
	created timestamp default current_timestamp,
    modified date 
);

insert into user (cpf, name_full,email, cellphone,datanasc)
values('984.508.676-49','Marcelo João Miguel Sales','marcelojoaomiguelsales_@engeseg.com.br','(38)98607-0276','1943-11-25'),
('874.076.656-05','Otávio Vinicius dos Santos','otavioviniciusdossantos__otavioviniciusdossantos@transportadoratransdel.com.','(31)99461-9881','1957-09-24'),
('079.631.076-97','Pietro Raimundo Nogueira','pietroraimundonogueira-94@vipsaude.com.br','(34)99676-8305','1965-03-16'),
('329.436.636-11','Luiz Theo Márcio Nogueira','luiztheomarcionogueira__luiztheomarcionogueira@aircominternational.com','(32)99893-5943','1998-07-09'),
('811.757.696-14','Liz Renata da Conceição','lizrenatadaconceicao__lizrenatadaconceicao@dye.com.br','(31)99755-645','1940-03-18'),
('934.598.086-59','Elza Rayssa Alves','elzarayssaalves-95@ambev.com.br','(34)98376-0938','1947-10-18');




SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;

