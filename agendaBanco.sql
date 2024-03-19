DROP DATABASE db_agenda;

CREATE DATABASE db_agenda;

USE db_agenda;

CREATE TABLE informacoes(
id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(80),
 endereco VARCHAR(80),
 cidade VARCHAR(80),
 estado VARCHAR(80),
 email VARCHAR(250),
 telefone VARCHAR(11)
 );
