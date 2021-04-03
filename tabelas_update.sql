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

create table usuarios (
id INT(11) not null auto_increment,
login VARCHAR(50) not null,
senha VARCHAR(50) not null,
conf_senha VARCHAR(50) not null,
colaborador_id INT(11) not null,
funcao VARCHAR(50),
CONSTRAINT colaborador_id FOREIGN KEY (colaborador_id) REFERENCES colaborador (id),
primary key (id)
)default charset = utf8;