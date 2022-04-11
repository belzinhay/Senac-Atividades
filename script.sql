#criar base

create database aula8php;

# chamar a base
use aula8php;

#criar tabela
create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')
);

#inserir dado na tabela
insert into usuario value(null,'maria','adm',md5('123'),'adm');
insert into usuario value(null,'manuela','manuela',md5('123'),'user');
insert into usuario value(null,'ariane','ariane',md5('123'),'user');
select * from usuario;