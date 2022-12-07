-- bancos de dados--
obs.if not exists (verificar se o banco ou tabela já existe)

create database academia2;

use academia2

create table endereço(

cep char (9) primary key,
    rua varchar (60) not null,
    bairro varchar (40) not null,
    cidade varchar (40) not null,
    uf char (2) not null);
	
	create table aluno(
	matricula integer primary key,
	nome varchar (60) not null,
    telefone varchar (15) not null,
	cpf char (14) not null,
	rg varchar (15) not null,
	datanascimento date not null,
	cep char (9) not null,
	numerocasa smallint not null,
	complemento varchar (30),
	foto varchar (255),
	foreign key (cep) references enderenco(cep)
	);
	
	create table funcionario(
	cpffuncionario primary key,
	nome varchar (60) not null,
	telefone varchar (15) not null,
	cep char (9) not null,
	numerocasa smallint not null,
	complemento varchar (30),
	rg varchar (15) not null,
    foto varchar (255),
	foreign key (cep) references endereço(cep)
	);
	 
	 create table professor(
	idprofessor integer primary key,
	disponibilidade varchar (40) not null,
	cpffuncionario char (14)not null,
	foreign key (cpffuncionario)references funcionario(cpffuncionario)
	
	);
	
	