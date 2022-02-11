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

INSERT INTO usuario (nome,email,senha,token) VALUES
  (
    'Bruno Araujo', 
    'bruno.absilva3@gmail.com', 
    MD5('102030'), 
    'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJub21lIjoiQnJ1bm8gQXJhdWpvIiwiZW1haWwiOiJicnVub2Fic2lsdmEzQGdtYWlsY29tIn0=.jt6m9arFYQjbNtBJ1xDTxI+J83fubcGcLFqgUdQvfRA='
  );