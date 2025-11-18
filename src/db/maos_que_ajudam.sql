create database maosqueajudam;
use maosqueajudam;

create table Usuario(
	idUsuario int primary key auto_increment,
    nome varchar(50) not null unique,
    cpf bigint not null,
    email varchar(100) not null,
    senha varchar(100) not null,
    tipo_usuario ENUM('cliente', 'admin', 'voluntario') not null);

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

-- relacionamentos

create table Usuario_Beneficiario(
	idUsuario int not null,
    idBen int not null,
    primary key (idUsuario, idBen),
    foreign key (idUsuario) references Usuario(idUsuario),
    foreign key (idBen) references Beneficiario(idBen));
    
create table Usuario_Funcionario(
	idUsuario int not null,
    idFunc int not null,
    primary key (idUsuario, idFunc),
    foreign key (idUsuario) references Usuario(idUsuario),
    foreign key (idFunc) references Funcionario(idFunc));
    
create table Usuario_Professor(
	idUsuario int not null,
    idProf int not null,
    primary key (idUsuario, idProf),
    foreign key (idUsuario) references Usuario(idUsuario),
    foreign key (idProf) references Professor(idProf));
    
create table Usuario_Voluntario(
	idUsuario int not null,
    idVol int not null,
    primary key (idUsuario, idVol),
    foreign key (idUsuario) references Usuario(idUsuario),
    foreign key (idVol) references Voluntario(idVol));
    
create table Beneficiario_Curso(
    idBen int not null,
    idCurso int not null,
    primary key (idBen, idCurso),
    foreign key (idBen) references Beneficiario(idBen),
    foreign key (idCurso) references Curso(idCurso));
    
create table Professor_Curso(
    idProf int not null,
    idCurso int not null,
    primary key (idProf, idCurso),
    foreign key (idProf) references Professor(idProf),
    foreign key (idCurso) references Curso(idCurso));
    
-- Backups

create table backup_Usuario(
	idUsuario int primary key auto_increment,
    username varchar(50) not null unique,
    senha varchar(50) not null);

create table backup_Funcionario(
	idFunc int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf bigint not null,
    cargo varchar(50));
    
create table backup_Professor(
	idProf int primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf bigint not null,
    disciplina varchar(50) not null,
    foreign key (idProf) references Funcionario(idFunc));
    
create table backup_Beneficiario(
	idBen int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf bigint not null);
    
create table backup_Voluntario(
	idVol int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf bigint not null);
    
create table backup_Curso(
	idCurso int primary key auto_increment,
    nome varchar(100) not null,
    horaInicio time not null,
    horaFim time not null,
    dataInicio date not null,
    dataFim date not null);
    
create table backup_Patrocinador(
	idPatro int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    localidade varchar(100) not null);
    
create table backup_Doacoes(
	idDoacao int primary key auto_increment,
    valor decimal(10, 2) not null,
    dataDoacao date not null,
    descricao varchar(250));
