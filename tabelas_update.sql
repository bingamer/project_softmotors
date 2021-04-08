create table colaborador (
id INT(11) not null auto_increment,
cpf VARCHAR(14) not null,
data_nascimento DATE,
nome VARCHAR(255) not null,
rg VARCHAR(50) not null,
ctps VARCHAR(50),
pis VARCHAR(50),
cargo VARCHAR(100),
primary key (id)
)default charset = utf8;

--TABELA DE USUÁRIO ATUALIZADA REMOVIDAS AS FOTOS POR ENQUANTO / ADICIONADA NOME, E DATA/HORA DE ENVIO
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
