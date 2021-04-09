------------------------------------------------------------------------
----- DATABASE SOFTMOTORS ----------------------------------------------
------------------------------------------------------------------------

----------- TABELA COLABORADOR // SOFTMOTORS
create table colaborador (
	id INT(11) NOT NULL AUTO_INCREMENT,
	cpf VARCHAR(14) NOT NULL,
	data_nascimento DATE,
	nome VARCHAR(255) NOT NULL,
	rg VARCHAR(50) NOT NULL,
	ctps VARCHAR(50) NOT NULL,
	pis VARCHAR(50) NOT NULL,
	cargo VARCHAR(100) NOT NULL,
	primary key (id)
)DEFAULT charset = utf8;

----------- TABELA USUÁRIOS // SOFTMOTORS
CREATE TABLE usuarios (
	id INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(250) NOT NULL,
	login VARCHAR(50) NOT NULL, 
	senha VARCHAR(50) not null,
	conf_senha VARCHAR(50) NOT NULL,
	funcao VARCHAR(50) NOT NULL,
	dt DATETIME NOT NULL,
	PRIMARY KEY(id)
)DEFAULT charset = utf8;

----------- TABELA CLIENTES // SOFTMOTORS
CREATE TABLE clientes (
	id INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	dataNascimento VARCHAR(20) NOT NULL,
	cpf VARCHAR(25) NOT NULL,
	rg VARCHAR(25) NOT NULL,
	emissor VARCHAR(5) NOT NULL,
	uf VARCHAR(2) NOT NULL,
	cep VARCHAR(15) NOT NULL,
	endereco VARCHAR(255) NOT NULL,
	cidade VARCHAR(20) NOT NULL,
	email VARCHAR(50) NOT NULL,
	telefone VARCHAR(100) NOT NULL,
	PRIMARY KEY(id)
)DEFAULT charset = utf8;

----------- TABELA MOTOS // SOFTMOTORS
CREATE TABLE estoque_motos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    placa VARCHAR(8) NOT NULL,
    ano_fab VARCHAR(20) NOT NULL,
    ano_mod VARCHAR(20) NOT NULL,
    modelo VARCHAR(255) NOT NULL,
    cor VARCHAR(255) NOT NULL,
    valor_moto VARCHAR(255) NOT NULL,
    valor_entrada VARCHAR(255) NOT NULL,
    valor_saida VARCHAR(255) NOT NULL,
    observacao VARCHAR(255) NOT NULL,
    data DATETIME,
    PRIMARY KEY(id)
)DEFAULT charset = utf8;

