-- DROP DATABASE stox;

CREATE DATABASE stox;

USE stox;

CREATE TABLE usuarios
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	senha VARCHAR(200) NOT NULL
);

INSERT INTO `usuarios` VALUES 
(1,'Admin','admin@teste.com','$2y$10$kttvrvXbCHuvkmf2QOxh3O33.IJilRPn9PWPXAhRw9AA09QvM2lPW');

CREATE TABLE fornecedores
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(150) NOT NULL
);

INSERT INTO `fornecedores` VALUES 
(1,'Nike Produtos Esportivos'),
(2,'Oracle Databases'),
(3,'Microsoft Computers Ltda'),
(4,'Fireworks Software Magazine'),
(5,'Philips Brasil'),
(6,'Hot Wheels Inc.');

CREATE TABLE produtos
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	produto VARCHAR(80) NOT NULL,
	descricao VARCHAR(180) NOT NULL,
	estoque INT DEFAULT 0,
	fornecedor_id INT NOT NULL,
	CONSTRAINT fk_fornec FOREIGN KEY(fornecedor_id)
		REFERENCES fornecedores(id)
);

INSERT INTO `produtos` VALUES 
(1,'Windows 8','Cd de instalação do windows 8',3,3),
(2,'Database Oracle Corp','Banco de dados Corporativo',5,2),
(3,'Tenis Amarelo Corrida','Tenis para corrida profissional',4,1),
(4,'Revista Mensal volume 1','Revista de design volume 1 mês março',10,4),
(5,'Camiseta Nike X Games','Camiseta oficial dos X Games modelo 2015',10,1),
(7,'Carrinho HotWheels','Carrinhos e motos da HotWheels Inc brinquedo infantil',9,6),
(8,'Mouse óptico','Mouse óptico super funcional, 1 ano de garantia',6,3),
(9,'Teclado sem fio Ergometrico','Teclado sem fio ergometrico, confort, 1 ano de garantia',7,3),
(10,'Camiseta Oficial Corrida','Camiseta para corrida oficial Nike',30,1),
(11,'Revista Super Designer','Resvista edição 10 do Super Designer',21,4),
(12,'Pendrive Database','Pendrive com database portatil, lançamento Oracle',23,2),
(13,'TV 29 Polegadas','TV 29 polegadas Philips importada, LED',2,5),
(14,'Carrinho elétrico com loop','Carrinho com loop hotwheels movido a eletricidade',23,6),
(15,'Calça Esporte ','Calça flexível para  esportes de contato ',3,1),
(16,'Boné Red Sox','Boné oficial Red Sox league baseball 2015',4,1);