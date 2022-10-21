CREATE DATABASE if not exists exercicio3;

CREATE TABLE if not exists usuario 
(	
	id INT (10) UNIQUE NOT NULL AUTO_INCREMENT,
	cpf VARCHAR (9),
	nome VARCHAR (255),
	PRIMARY KEY (cpf)
);
CREATE TABLE if not exists info 
(	
	id INT (10) UNIQUE NOT NULL AUTO_INCREMENT,
	cpf VARCHAR (9),
	genero VARCHAR (1),
	ano_nascimento INT (4), PRIMARY KEY (id), FOREIGN KEY (cpf) REFERENCES usuario(cpf)
);

#INSERT INTO usuario (cpf, nome) VALUES (16798125050, 'Luke Skywalker');
#INSERT INTO usuario (cpf, nome) VALUES (59875804045, 'Bruce Wayne');
#INSERT INTO usuario (cpf, nome) VALUES (04707649025, 'Diane Prince');
#INSERT INTO usuario (cpf, nome) VALUES (21142450040, 'Bruce Banner');
#INSERT INTO usuario (cpf, nome) VALUES (83257946074, 'Harley Quinn');
#INSERT INTO usuario (cpf, nome) VALUES (07583509025, 'Peter Parker');
#INSERT INTO info (cpf, genero, ano_nascimento) VALUES (16798125050, 'M', 1976);
#INSERT INTO info (cpf, genero, ano_nascimento) VALUES (59875804045, 'M', 1960);
#INSERT INTO info (cpf, genero, ano_nascimento) VALUES (04707649025, 'F', 1988);
#INSERT INTO info (cpf, genero, ano_nascimento) VALUES (21142450040, 'M', 1954);
#INSERT INTO info (cpf, genero, ano_nascimento) VALUES (83257946074, 'F', 1970);
#INSERT INTO info (cpf, genero, ano_nascimento) VALUES (07583509025, 'M', 1972);

SELECT concat(usuario.nome, ' - ', info.genero) AS usuário, 
if((YEAR(NOW()) - info.ano_nascimento) > 50, 'Sim', 'Não') AS maior_50_anos
FROM usuario
INNER JOIN info ON info.cpf = usuario.cpf;
