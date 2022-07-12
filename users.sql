use site;
create table users (
id integer primary key auto_increment,
nome varchar(255),
email varchar(255), 
senha varchar(255),
cpf varchar(11),
telefone varchar(11),
datadenascimento date,
cep varchar(8)
); 
CREATE TABLE ANUNCIOS( 
	id INT(40) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(255),
	ano date,
	descricao int,
	user_id int,
	USUARIOS_ID int,
	CONSTRAINT USR_TCL_FK FOREIGN KEY (USUARIOS_ID) REFERENCES USUARIOS(ID)
); 

 select * from users;
