create database EmpregakiCurriculo;

Use EmpregakiCurriculo;

Create table Clientes(
	Nome VARCHAR (100) NOT NULL,
    CPF CHAR(11) NOT NULL,
	PerfilProfissional VARCHAR(200),
    DatadeNascimento CHAR(8),
    EstadoCivil VARCHAR(9),
	Genero VARCHAR(9),
    Endereco VARCHAR(100),
    Bairro VARCHAR(100),
    CEP CHAR(8),
    Estado VARCHAR(20),
    Cidade VARCHAR(20),
    Telefone CHAR(10)
);

SELECT * FROM
Clientes;
    