create DATABASE oficina;
use oficina;

create table endereco(
cep char(9) primary key,
rua varchar(60) not null,
bairro varchar(40) not null,
cidade varchar(40) not null,
uf char(2) not null);

create table cliente(
cpf char(12) primary key,
nome varchar(60) not null,
telefone varchar(15) not null,
cep char(9) not null,
numerocasa integer not null,
complemento varchar(30),
foreign key(cep)references endereco(cep));

create table funcionario(
matrícula integer primary key,
nome varchar(60) not null,
telefone varchar(15) not null,
cpf char(12) not null,
qualificacao varchar(30) not null,
experiencia varchar(20) not null,
cep char(9) not null,
numerocasa integer not null,
complemento varchar(30),
foreign key(cep)references endereco(cep));

create table veiculo(
placa char(7) primary key,
modelo varchar(20) not null,
cor varchar(20) not null,
ano char(4) not null,
marca varchar(20) not null,
cpf char(12) not null,
foreign key (cpf) references cliente (cpf));



