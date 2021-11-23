CREATE DATABASE CURSOCI;
USE CURSOCI;
CREATE TABLE options(
ID int(11) AUTO_INCREMENT,
option_name varchar(255) ,
option_value text
);


SELECT * FROM options;

CREATE TABLE noticias(
id int(11) AUTO_INCREMENT,
titulo varchar(255) ,
conteudo longtext,
imagem varchar(255)
);

select*from noticias;

INSERT INTO options (ID, option_name, option_value) VALUES (null, “”, “”) ;



