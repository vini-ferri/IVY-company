CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    fullname varchar(300) NOT NULL,
    email varchar(300) NOT NULL,
    password varchar(300) NOT NULL,
    cep varchar(300) NOT NULL,
    logradouro varchar(300) NOT NULL,
    numero varchar(300) NOT NULL,
    complemento varchar(300) NOT NULL,
    bairro varchar(300) NOT NULL,
    uf varchar(2) NOT NULL
);