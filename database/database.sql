CREATE DATABASE mobi_teste;

USE mobi_teste;

CREATE TABLE IF NOT EXISTS mobi_teste.usuario (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha MEDIUMTEXT NOT NULL,
  token LONGTEXT NOT NULL,
  PRIMARY KEY (`id`)
);