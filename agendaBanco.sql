DROP DATABASE db_agenda;

CREATE DATABASE db_agenda;

USE db_agenda;

CREATE TABLE tb_informacoes(
inf_id INT PRIMARY KEY AUTO_INCREMENT,
 inf_nome VARCHAR(80),
 inf_endereco VARCHAR(80),
 inf_cidade VARCHAR(80),
 inf_estado VARCHAR(80),
 inf_email VARCHAR(250),
 inf_telefone VARCHAR(11)
 );