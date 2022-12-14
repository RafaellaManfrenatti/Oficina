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

insert into veiculo(placa,modelo,cor,ano,marca,cpf) VALUES('LBM2411','Uno','Vermelho','2009','FIAT','123456789-12');

insert into servico(placa,garantia,valor,formapag,defeito,dataent,datasaida) VALUES('LBM2411','3meses','1000','Cart??o',
'Troca de ??leo','2022/11/22','2022/11/23'),('KPO9030','4meses','2000','Pix','Balanceamento','2022/09/04','2022/09/05');

insert into peca(nome,marca,quantidade,preco,modeloano) VALUES('Pneu','Michellin','4','250','Aro142022'),('Pneu','Pirelli',
'8','300','Aro152022');

insert into servicopeca(codigo,quantidade,ordemservico) VALUES('1','1','3'),('2','1','4');

insert into servicofunc(ordemservico,matricula,descricao) VALUES('3','1','Servico realizado integralmente'),('4','1','Servico
com demanda de troca');


Pesquisa dados de todos os clientes: select * from cliente;
Pesquisa Nome e Telefone de todos os clientes: select nome,telefone from cliente;
Pesquisa placa,marca e modelo de todos os veiculos da cor branca: select placa,marca,modelo from veiculo where cor = 'branco';
Pesquisa veiculos com variacao da cor branca: select placa,marca,modelo from veiculo where cor like '%preto%';
Pesquisa nome e telefone de todos os clientes que o nome comece com J: select nome,telefone from cliente where nome like 'm%';
Pesquisa o nome e telefone de todos os clientes que o ??ltimo sobrenome seja Silva: select nome, telefone from cliente where nome like '%silva';
Pesquisa ordem de servico, placa e defeito apresentados pelos carros que deram entrada entre o dia 01/12/2022 a 07/12/2022:
select ordemservico,placa,defeito from servico where dataent >='2022-12-01' and dataent <='2022-12-07';
select ordemservico,placa,defeito from servico where dataent between '2022-12-01' and '2022-12-12';


Fazer UPDATE

update cliente set nome='Maria Jariele de Brito' where cpf='123456789-13';


Pesquisa dados de todos os clientes: select * from cliente;
Pesquisa Nome e Telefone de todos os clientes: select nome,telefone from cliente;
Pesquisa placa,marca e modelo de todos os veiculos da cor branca: select placa,marca,modelo from veiculo where cor = 'branco';
Pesquisa veiculos com variacao da cor branca: select placa,marca,modelo from veiculo where cor like '%preto%';
Pesquisa nome e telefone de todos os clientes que o nome comece com J: select nome,telefone from cliente where nome like 'm%';
Pesquisa o nome e telefone de todos os clientes que o ??ltimo sobrenome seja Silva: select nome, telefone from cliente where nome like '%silva';
Pesquisa ordem de servico, placa e defeito apresentados pelos carros que deram entrada entre o dia 01/12/2022 a 07/12/2022:
select ordemservico,placa,defeito from servico where dataent >='2022-12-01' and dataent <='2022-12-07';
select ordemservico,placa,defeito from servico where dataent between '2022-12-01' and '2022-12-12';
Pesquisa ordem de servi??o , placa do veiculo e defeito dos veiculos que deram entrada na oficina nos dias 05 e 07 de dezembro: 
select ordemservico,placa,defeito from servico where dataent in('2022-12-05','2022-12-07');
Mostra a soma da quantidade das pe??as no estoque da oficina:
select sum(quantidade) from peca;
Mostra o valor total em mercadorias no estoque:
select sum(quantidade*preco) as 'Valor total do estoque' from peca;
Calculo do valor medio das pe??as no estoque:
select avg(preco) as 'M??dia de Pre??o'from peca;
Mostra a pe??a com menor pre??o do estoque:
select min(preco) as 'Menor pre??o' from peca;
Mostra a pe??a com maior pre??o no estoque:
select max(preco) as 'Maior pre??o' from peca;


Mostranome, teleofne,e qualific????o de todos os funcion??rios:
select nome,telefone,qualificacao from funcionario;

Mostra nome e telefone de todos os eletricistas:
select nome,telefone,qualificacao from funcionario where qualificacao='eletricista';

Mostra nome e pre??o de todos os produtos da marca frasle:
select nome,preco from peca where marca='frasle';

Mostra ordem de serci??o e pre???? pago de todos os servi??os que foram pagos a vista no dia 01/12/2022:
select ordemservico,preco from servico where dataentrada='2022/12/01' and formapagamento='a vista';


Pesquisa nome, telefone,nome da rua,numero da casa,bairro e cidade de todos os clientes da oficina:

select cliente.nome,cliente.telefone, endereco.rua, cliente.numerocasa, endereco.bairro, endereco.cidade from endereco inner join cliente
on endereco.cep=cliente.cep;


Pesquisar nome,telefone,placa e modelo do carro de todos os clientes da oficina

select cliente.nome, cliente.telefone, veiculo.placa, veiculo.modelo from cliente inner join veiculo on cliente.cpf=veiculo.cpf;

18 )Pesquisar nome,telefone,nome da rua, n??mero da casa, bairro e cidade de todos os clientes da oficina.
	
	 cliente selecionado . nome , cliente . telefone , endereco . rua , cliente . numerocasa , endereco . bairro , endereco . cidade
	de endereco inner join cliente
	no  endereco . cep  =  cliente . cep ;
	
	
	19 )Pesquisar nome, telefone, placa e modelo do carro de todos os clientes.
	
	 cliente selecionado . nome , cliente . telefone , ve??culo . placa , ve??culo . modelo
	do cliente inner join veiculo
	no  cliente . cpf  =  ve??culo . CPF ;

	20 ) Pesquisar nome e quantidade de todas as pe?? as usadas na ordem de servi??o 1 .
	
	selecione  peca . nome , servicopeca . quantidade
	de peca inner join servicopeca
	na  peca . codigopeca  =  servicopeca . codigopeca
	e  servicopeca . ordemservico  =  1 ;	
	
	21 ) Pesquisar nome do cliente, telefone, placa do ve??culo,
	ordem de servi??o e defeito de todos os servi??os que j?? foram feitos na oficina.
  
	 cliente selecionado . nome , cliente . telefone , ve??culo . placa ,
	. _ ordemservice , service . defeito
	do cliente inner join veiculo
	no  cliente . cpf  =  ve??culo . cpf
	servi??o de jun????o interna
	em  ve??culo . placa  =  servico . placa ;
