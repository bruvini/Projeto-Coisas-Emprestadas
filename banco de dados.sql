create database CEmp;
use CEmp;

create table tbUsuarios (
idUser int primary key auto_increment,
nomeUser varchar(50) not null,
mailUser varchar(50) not null unique,
senhaUser varchar (50) not null,
sexoUser varchar(10)
);

select * from tbUsuarios;
select * from emprestimo;
select * from cadastroProdutos;

create table cadastroProdutos(
idProd int primary key auto_increment,
nomeProd varchar(50) not null,
estadoProd varchar(9) not null
);

drop table tbUsuarios;

create table emprestimo(
idEmprestimo int primary key auto_increment,
nomeProd varchar(50) not null,
nomeUser varchar(50) not null,
fone varchar(11) not null,
dataEmprestimo timestamp null default current_timestamp,
dataDevolucao varchar(10) not null
);