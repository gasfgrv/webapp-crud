create database clientes;
use clientes;
create table clientes (
	id int(11) not null primary key auto_increment,
	nome varchar(255) not null,
	cpf_cnpj varchar(14) not null,
	data_nasc date not null,
	endereco varchar(255) not null,
	bairro varchar(100) not null,
	cep int(8) not null,
	cidade varchar(100) not null,
	estado varchar(100) not null,
	telefone int(13) not null,
	celular int(13) not null,
	ie int(11) not null,
	criado datetime not null,
	modificado datetime not null
);