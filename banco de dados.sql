create database CEmp;
use CEmp;

create table tbUsuarios (
nomeUser varchar(50) primary key not null,
mailUser varchar(50) not null unique,
senhaUser varchar (50) not null,
sexoUser varchar(10)
);

delete from tbUsuarios where senhaUser = '.admin123.';
select mailUser from tbUsuarios where mailUser = "bruvini.silva12@gmail.com";
select * from tbUsuarios;
select * from emprestimo;
select * from cadastroProdutos;

create table cadastroProdutos(
nomeProd varchar(50) primary key not null,
estadoProd varchar(9) not null
);

drop table emprestimo;
create table emprestimo(
idEmprestimo int primary key auto_increment,
nomeProd varchar(50) not null,
nomeUser varchar(50) not null,
fone varchar(11) not null,
dataEmprestimo timestamp null default current_timestamp,
dataDevolucao varchar(10) not null
);