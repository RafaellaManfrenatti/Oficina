drop database if exists oficina;

create DATABASE oficina character set utf8 collate utf8_general_ci;
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
matricula integer primary key auto_increment,
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

create table servico(
ordemservico integer primary key auto_increment,
placa char(7) not null,
garantia varchar(50) not null,
valor double not null,
formapag varchar(10) not null,
defeito varchar(100) not null,
dataent date not null,
datasaida date not null,
foreign key (placa) references veiculo(placa));

create table peca(
codigo integer primary key auto_increment,
nome varchar(30) not null,
marca varchar(30) not null,
quantidade integer not null,
preco double not null,
modeloano varchar(250) not null);

create table servicopeca(
idservicopeca integer primary key auto_increment,
codigo integer not null,
quantidade integer not null,
ordemservico integer  not null,
foreign key (codigo) references peca (codigo),
foreign key (ordemservico) references servico (ordemservico));

create table servicofunc(
idservicofunc integer primary key auto_increment,
ordemservico integer not null,
matricula integer not null,
descricao varchar(100) not null,
foreign key (ordemservico) references servico(ordemservico),
foreign key (matricula) references funcionario(matricula));

insert into endereco(cep,rua,bairro,cidade,uf) VALUES('23085-610','Rua Padre Pauwels','Campo Grande','Rio de janeiro','RJ'),('26551-090', 'Travessa Elpidio','Cruzeiro do Sul','Mesquita','RJ');

insert into cliente(cpf,nome,telefone,cep,numerocasa,complemento) VALUES('12345679-10','Jariele','(21)99886-4587',
'26551-090',100,'apartamento10');

insert into funcionario(nome,telefone,cpf,qualificacao,experiencia,cep,numerocasa,complemento) VALUES('Maria','(21)99886-4587','123456789-10','Mecanico','4 anos','26551-090',100,'apartamento10');
insert into veiculo(placa,marca,modelo,cor,ano,cpf) VALUES('KPZ2020','Wolkswagem','T-Cross','Branco','2020','123456789-10');
