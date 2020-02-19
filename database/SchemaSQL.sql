
SELECT * FROM pessoa;

INSERT INTO pessoa(nome, idade) VALUES('Vinicius', 30);

INSERT INTO pessoa(nome, idade) VALUES('Fernanda', 29);

CREATE USER vinicius WITH PASSWORD '123456A';

DROP USER vinicius;-- remove a database role

CREATE DATABASE phpcrudorm;

GRANT ALL PRIVILEGES ON DATABASE phpcrudorm to vinicius;

CREATE TABLE pessoa(
    codigo int(11)    NOT NULL auto_increment,
    nome varchar(80)  NOT NULL,
    idade INT         NOT NULL,
    PRIMARY KEY (codigo)
);

/* Apagando database */
DROP DATABASE phpcrudorm;

/* Limpando as informações */
DELETE DATABASE phpcrudorm;

ALTER ROLE vinicius WITH PASSWORD '123456A';

ALTER ROLE vinicius CREATEROLE CREATEDB;