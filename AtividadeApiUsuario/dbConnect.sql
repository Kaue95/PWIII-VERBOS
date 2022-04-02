create database dbContatos;
use dbContatos;

Create table tbContatos(
    nome varchar(100),
    email varchar(100)
);

INSERT INTO tbContatos(nome,email)values("Maria","maria@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Antonio","antonio@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Jose","jose@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Amarildo","amarildo@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Noemi","noemi@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Dalva","dalva@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Lorivaldo","lorivaldo@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Alice","alice@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Nicole","nicole@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Vicente","vicente@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Emanuel","emanuel@hotmail.com");
INSERT INTO tbContatos(nome,email)values("Gabriela","gabriela@hotmail.com");

SELECT * FROM tbContatos;

