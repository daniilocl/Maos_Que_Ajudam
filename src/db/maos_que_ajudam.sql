create database maosqueajudam;
use maosqueajudam;

create table Usuario(
	idUsuario int primary key,
    senha varchar(50) not null);

create table Funcionario(
	idFunc int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf bigint not null,
    cargo varchar(50));
    
create table Professor(
	idProf int primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf bigint not null,
    disciplina varchar(50) not null,
    foreign key (idProf) references Funcionario(idFunc));
    
create table Beneficiario(
	idBen int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf bigint not null);
    
create table Voluntario(
	idVol int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf bigint not null);
    
create table Curso(
	idCurso int primary key auto_increment,
    nome varchar(100) not null,
    horaInicio time not null,
    horaFim time not null,
    dataInicio date not null,
    dataFim date not null);
    
create table Patrocinador(
	idPatro int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    localidade varchar(100) not null);
    
create table Doacoes(
	idDoacao int primary key auto_increment,
    valor decimal(10, 2) not null,
    dataDoacao date not null,
    descricao varchar(250));

   

    
-- colocar doações, ver parte de finanças depois
