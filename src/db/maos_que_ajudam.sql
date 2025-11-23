create database maosqueajudam;
use maosqueajudam;
-- drop database maosqueajudam;

create table Usuario (
    idUsuario int primary key auto_increment,
    nome varchar(50) not null unique,
    cpf bigint not null unique,
    email varchar(100) not null unique,
    senha varchar(100) not null,
    tipo_usuario enum('cliente', 'admin', 'voluntario') not null
);
    
alter table Usuario add column created_at timestamp not null default current_timestamp;


create table Funcionario(
	idFunc int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf varchar(20) not null,
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
    
-- drop table Patrocinador;
    
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

create table backup_Usuario (
    idUsuario int primary key auto_increment,
    nome varchar(50) not null unique,
    cpf bigint not null unique,
    email varchar(100) not null unique,
    senha varchar(100) not null,
    tipo_usuario enum('cliente', 'admin', 'voluntario') not null,
    created_at timestamp not null default current_timestamp
);

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

create table backup_Usuario_Beneficiario(
	idUsuario int not null,
    idBen int not null,
    primary key (idUsuario, idBen),
    foreign key (idUsuario) references Usuario(idUsuario),
    foreign key (idBen) references Beneficiario(idBen));
    
create table backup_Usuario_Funcionario(
	idUsuario int not null,
    idFunc int not null,
    primary key (idUsuario, idFunc),
    foreign key (idUsuario) references Usuario(idUsuario),
    foreign key (idFunc) references Funcionario(idFunc));
    
create table backup_Usuario_Professor(
	idUsuario int not null,
    idProf int not null,
    primary key (idUsuario, idProf),
    foreign key (idUsuario) references Usuario(idUsuario),
    foreign key (idProf) references Professor(idProf));
    
create table backup_Usuario_Voluntario(
	idUsuario int not null,
    idVol int not null,
    primary key (idUsuario, idVol),
    foreign key (idUsuario) references Usuario(idUsuario),
    foreign key (idVol) references Voluntario(idVol));
    
create table backup_Beneficiario_Curso(
    idBen int not null,
    idCurso int not null,
    primary key (idBen, idCurso),
    foreign key (idBen) references Beneficiario(idBen),
    foreign key (idCurso) references Curso(idCurso));
    
create table backup_Professor_Curso(
    idProf int not null,
    idCurso int not null,
    primary key (idProf, idCurso),
    foreign key (idProf) references Professor(idProf),
    foreign key (idCurso) references Curso(idCurso));

-- Triggers Backup

DELIMITER //

create trigger trg_backup_Usuario
after insert on Usuario
for each row
begin
	insert into backup_Usuario(nome, cpf, email, senha, tipo_usuario, created_at) values (new.nome, new.cpf, new.email, new.senha, new.tipo_usuario, new.created_at);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Funcionario
after insert on Funcionario
for each row
begin
	insert into backup_Funcionario (nome, email, cpf, cargo) values (new.nome, new.email, new.cpf, new.cargo);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Professor
after insert on Professor
for each row
begin
	insert into backup_Professor values (new.idProf, new.nome, new.email, new.cpf, new.disciplina);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Beneficiario
after insert on Beneficiario
for each row
begin
	insert into backup_Beneficiario (nome, email, cpf) values (new.nome, new.email, new.cpf);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Voluntario
after insert on Voluntario
for each row
begin
	insert into backup_Voluntario (nome, email, cpf) values (new.nome, new.email, new.cpf);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Curso
after insert on Curso
for each row
begin
	insert into backup_Curso (nome, horaInicio, horaFim, dataInicio, dataFim) values (new.nome, new.horaInicio, new.horaFim, new.dataInicio, new.dataFim);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Patrocinador
after insert on Patrocinador
for each row
begin
	insert into backup_Patrocinador (nome, email, localidade) values (new.nome, new.email, new.localidade);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Doacoes
after insert on Doacoes
for each row
begin
	insert into backup_Doacoes(valor, dataDoacao, descricao) values (new.valor, new.dataDoacao, new.descricao);
end//

DELIMITER ;

-- triggers backup relacionamentos

DELIMITER //

create trigger trg_backup_Usuario_Beneficiario
after insert on Usuario_Beneficiario
for each row
begin
	insert into Usuario_Beneficiario values (new.idUsuario, new.idBen);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Usuario_Funcionario
after insert on Usuario_Funcionario
for each row
begin
	insert into Usuario_Funcionario values (new.idUsuario, new.idFunc);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Usuario_Professor
after insert on Usuario_Professor
for each row
begin
	insert into Usuario_Professor values (new.idUsuario, new.idProf);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Usuario_Voluntario
after insert on Usuario_Voluntario
for each row
begin
	insert into Usuario_Voluntario values (new.idUsuario, new.idVol);
end//

DELIMITER ;
  
DELIMITER //

create trigger trg_backup_Beneficiario_Curso
after insert on Beneficiario_Curso
for each row
begin
	insert into Beneficiario_Curso values (new.idBen, new.idCurso);
end//

DELIMITER ;

DELIMITER //

create trigger trg_backup_Professor_Curso
after insert on Professor_Curso
for each row
begin
	insert into Professor_Curso values (new.idProf, new.idCurso);
end//

DELIMITER ;

-- inserts

INSERT INTO Usuario (nome, cpf, email, senha, tipo_usuario) VALUES
('Lucas Andrade', 12345678901, 'lucas.andrade@example.com', 'LuA@2025!', 'cliente'),
('Marina Farias', 98765432100, 'marina.farias@example.com', 'Mf#8821$', 'voluntario'),
('Ricardo Mendes', 45678912355, 'ricardo.mendes@example.com', 'Rm!1212@', 'admin'),
('Paula Barros', 74185296310, 'paula.barros@example.com', 'Pb_2025%%', 'cliente'),
('Thiago Costa', 15935748622, 'thiago.costa@example.com', 'Tc*9931QQ', 'voluntario'),
('Fernanda Silva', 85236974133, 'fernanda.silva@example.com', 'Fs_pw77#', 'cliente'),
('Eduardo Ribeiro', 36925814790, 'eduardo.ribeiro@example.com', 'Er2025!!', 'cliente'),
('Larissa Monteiro', 25814736901, 'larissa.monteiro@example.com', 'Lm@x882', 'voluntario'),
('Bruno Carvalho', 95175348620, 'bruno.carvalho@example.com', 'Bc_!pw33', 'cliente'),
('Tatiane Rodrigues', 14725836911, 'tatiane.rodrigues@example.com', 'Tr99#Lm', 'admin'),
('Gustavo Azevedo', 32165498730, 'gustavo.azevedo@example.com', 'Ga*2024@', 'voluntario'),
('Camila Santos', 75395145682, 'camila.santos@example.com', 'Cs_pwA7$', 'cliente');


INSERT INTO Funcionario (nome, email, cpf, cargo) VALUES
('João da Silva', 'joao.silva@email.com', 12345678901, 'Analista'),
('Marina Costa', 'marina.costa@email.com', 98765432100, 'Assistente'),
('Carlos Pereira', 'carlos.pereira@email.com', 45678912345, 'Coordenador'),
('Ana Souza', 'ana.souza@email.com', 74125896312, 'Gerente'),
('Bruno Rocha', 'bruno.rocha@email.com', 85274196325, 'Instrutor'),
('Fernanda Lima', 'fernanda.lima@email.com', 36925814785, 'Auxiliar'),
('Ricardo Gomes', 'ricardo.gomes@email.com', 15975345680, 'Supervisor'),
('Tatiane Silva', 'tatiane.silva@email.com', 75395145682, 'Instrutor'),
('Eduardo Ramos', 'edu.ramos@email.com', 25814736914, 'Coordenador'),
('Paula Nunes', 'paula.nunes@email.com', 95175348620, 'Gerente'),
('Felipe Alves', 'felipe.alves@email.com', 14725836911, 'Auxiliar'),
('Larissa Prado', 'larissa.prado@email.com', 32165498730, 'Analista');

INSERT INTO Professor (idProf, nome, email, cpf, disciplina) VALUES
(1, 'Marcos Silva', 'marcos.silva@exemplo.com', 11111111111, 'Matemática'),
(2, 'Ana Souza', 'ana.souza@exemplo.com', 22222222222, 'História'),
(3, 'Ricardo Lima', 'ricardo.lima@exemplo.com', 33333333333, 'Português'),
(4, 'João Pedro', 'joao.pedro@exemplo.com', 44444444444, 'Geografia'),
(5, 'Maria Clara', 'maria.clara@exemplo.com', 55555555555, 'Física'),
(6, 'Pedro Costa', 'pedro.costa@exemplo.com', 66666666666, 'Química'),
(7, 'Fernanda Torres', 'fernanda.torres@exemplo.com', 77777777777, 'Inglês'),
(8, 'Thiago Ramos', 'thiago.ramos@exemplo.com', 88888888888, 'Biologia'),
(9, 'Juliana Freitas', 'juliana.freitas@exemplo.com', 99999999999, 'Artes'),
(10, 'Paula Mendes', 'paula.mendes@exemplo.com', 10101010101, 'Informática'),
(11, 'Vinicius Prado', 'vinicius.prado@exemplo.com', 20202020202, 'Filosofia'),
(12, 'Gabriel Fonseca', 'gabriel.fonseca@exemplo.com', 30303030303, 'Sociologia');

INSERT INTO Beneficiario (nome, email, cpf) VALUES
('Lucas Pereira', 'lucas.p@exemplo.com', 12345678901),
('Juliana Silva', 'juliana.s@exemplo.com', 23456789012),
('Carlos Santos', 'carlos.santos@exemplo.com', 34567890123),
('Beatriz Gomes', 'beatriz.gomes@exemplo.com', 45678901234),
('Paulo Henrique', 'paulo.henrique@exemplo.com', 56789012345),
('Larissa Costa', 'larissa.costa@exemplo.com', 67890123456),
('André Ribeiro', 'andre.ribeiro@exemplo.com', 78901234567),
('Mariana Souza', 'mariana.souza@exemplo.com', 89012345678),
('Rafael Oliveira', 'rafael.o@exemplo.com', 90123456789),
('Patrícia Luz', 'patricia.luz@exemplo.com', 12312312312),
('Daniel Freire', 'daniel.freire@exemplo.com', 32132132132),
('Camila Prado', 'camila.prado@exemplo.com', 45645645645);

INSERT INTO Voluntario (nome, email, cpf) VALUES
('Luana Dias', 'luana.dias@exemplo.com', 11122233344),
('Hugo Martins', 'hugo.martins@exemplo.com', 22233344455),
('Iara Mendes', 'iara.mendes@exemplo.com', 33344455566),
('Arthur Vieira', 'arthur.vieira@exemplo.com', 44455566677),
('Cecília Braga', 'cecilia.braga@exemplo.com', 55566677788),
('Mário Pontes', 'mario.pontes@exemplo.com', 66677788899),
('Paula Ramos', 'paula.ramos@exemplo.com', 77788899900),
('Eduardo Farias', 'eduardo.farias@exemplo.com', 88899900011),
('Renata Castro', 'renata.castro@exemplo.com', 99900011122),
('Felipe Souza', 'felipe.souza@exemplo.com', 12121212121),
('Sandra Lopes', 'sandra.lopes@exemplo.com', 23232323232),
('Diego Ferreira', 'diego.ferreira@exemplo.com', 34343434343);

INSERT INTO Curso (nome, horaInicio, horaFim, dataInicio, dataFim) VALUES
('Informática Básica', '08:00', '10:00', '2025-02-01', '2025-05-01'),
('Inglês I', '10:00', '12:00', '2025-02-05', '2025-06-05'),
('Matemática Aplicada', '14:00', '16:00', '2025-03-01', '2025-05:30'),
('Redação', '09:00', '11:00', '2025-01-20', '2025-04:20'),
('Empreendedorismo', '13:00', '15:00', '2025-03-10', '2025-07:10'),
('Culinária Básica', '15:00', '17:00', '2025-02-15', '2025-06:15'),
('Finanças Pessoais', '08:00', '10:00', '2025-04-01', '2025-08:01'),
('Costura Criativa', '10:00', '12:00', '2025-03-22', '2025-06:22'),
('Fotografia', '16:00', '18:00', '2025-02-10', '2025-05:10'),
('Marketing Digital', '18:00', '20:00', '2025-04-05', '2025-07:05'),
('Primeiros Socorros', '08:00', '12:00', '2025-03-01', '2025-03-30'),
('Espanhol Básico', '13:00', '15:00', '2025-02-25', '2025-06:25');

INSERT INTO Doacoes (valor, dataDoacao, descricao) VALUES
(150.00, '2025-01-10', 'Doação mensal'),
(200.00, '2025-01-15', 'Campanha de alimentos'),
(500.00, '2025-02-01', 'Doação especial'),
(75.50, '2025-02-10', 'Doação espontânea'),
(1000.00, '2025-02-12', 'Patrocínio evento'),
(120.00, '2025-02-15', 'Contribuição solidária'),
(250.00, '2025-03-01', 'Doação mensal'),
(90.00, '2025-03-03', 'Campanha de livros'),
(340.00, '2025-03-05', 'Doação de associado'),		
(50.00, '2025-03-10', 'Doação simples'),
(600.00, '2025-03-15', 'Doação especial'),
(180.00, '2025-03-20', 'Ação social');

INSERT INTO Usuario_Beneficiario VALUES
(1,1),(1,2),(2,3),(2,4),
(3,5),(3,6),(4,7),(5,8),
(6,9),(7,10),(8,11),(9,12);

INSERT INTO Usuario_Funcionario VALUES
(1,1),(2,2),(3,3),(4,4),
(5,5),(6,6),(7,7),(8,8),
(9,9),(10,10),(11,11),(12,12);

INSERT INTO Usuario_Professor VALUES
(1,1),(2,2),(3,3),(4,4),
(5,5),(6,6),(7,7),(8,8),
(9,9),(10,10),(11,11),(12,12);

INSERT INTO Usuario_Voluntario VALUES
(1,1),(2,2),(3,3),(4,4),
(5,5),(6,6),(7,7),(8,8),
(9,9),(10,10),(11,11),(12,12);

INSERT INTO Beneficiario_Curso VALUES
(1,1),(2,2),(3,3),(4,4),
(5,5),(6,6),(7,7),(8,8),
(9,9),(10,10),(11,11),(12,12);

INSERT INTO Professor_Curso VALUES
(1,1),(2,2),(3,3),(4,4),
(5,5),(6,6),(7,7),(8,8),
(9,9),(10,10),(11,11),(12,12);