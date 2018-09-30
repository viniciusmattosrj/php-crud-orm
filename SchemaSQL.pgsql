
SELECT * FROM pessoa;

INSERT INTO pessoa(codigo, nome, idade) VALUES(1, 'Vinicius', 30);

INSERT INTO pessoa(codigo, nome, idade) VALUES(2, 'Fernanda', 29);

CREATE USER vinicius WITH PASSWORD '123456A';

DROP USER vinicius;-- remove a database role

CREATE DATABASE phpcrudorm;

GRANT ALL PRIVILEGES ON DATABASE phpcrudorm to vinicius;

CREATE TABLE pessoa(
    codigo INT        NOT NULL,
    nome varchar (20) NOT NULL,
    idade INT         NOT NULL,
    PRIMARY KEY (codigo)
);

DROP DATABASE phpcrudorm;

ALTER ROLE vinicius WITH PASSWORD '123456A';

ALTER ROLE vinicius CREATEROLE CREATEDB;