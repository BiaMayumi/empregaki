create database EmpregakiCurriculo;

Use EmpregakiCurriculo;

Create table Clientes(
	NomeCompleto VARCHAR (100) NOT NULL,
    Telefone CHAR(10),
    EstadoCivil VARCHAR(9),
    Genero VARCHAR(9),
    Endereco VARCHAR(100),
	Objetivo VARCHAR(200),
    Adicionais VARCHAR(200)
);

SELECT * FROM
Clientes;
    