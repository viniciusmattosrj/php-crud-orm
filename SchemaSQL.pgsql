CREATE DATABASE phpcrud;

CREATE TABLE pessoa(
    codigo INT        NOT NULL,
    nome varchar (20) NOT NULL,
    idade INT         NOT NULL,
    PRIMARY KEY (codigo)
);

DROP DATABASE pessoa;