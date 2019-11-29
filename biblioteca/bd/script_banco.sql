
CREATE DATABASE marbeurban;
USE MarbeUrban;

CREATE TABLE FormaPagamento (
idFormaPagamento INT NOT NULL AUTO_INCREMENT,
descricao VARCHAR(45) NOT NULL,
PRIMARY KEY (idFormaPagamento)
);

CREATE TABLE categoria (
id_categoria INT(11) NOT NULL AUTO_INCREMENT,
nomecategoria VARCHAR (60) NOT NULL,
descricaocategoria VARCHAR(100) NOT NULL,
PRIMARY KEY(id_categoria)
);

CREATE TABLE produtos(
idproduto INT(11) NOT NULL AUTO_INCREMENT,
id_categoria INT(11) NOT NULL, 
nomeproduto VARCHAR(30) NOT NULL,
preco DOUBLE NOT NULL,
descricao VARCHAR(60) NOT NULL,
tamanho VARCHAR(60) NOT NULL,
imagem VARCHAR(60)NOT NULL,
quantidade VARCHAR(11) NOT NULL,
estoque_minimo INT(11) NOT NULL,
estoque_maximmo INT(11)NOT NULL,
PRIMARY KEY(idproduto),
FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria) ON DELETE CASCADE 
ON UPDATE CASCADE
);

CREATE TABLE usuario(
idusuario INT(11) NOT NULL AUTO_INCREMENT,
nomeusuario VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
senha VARCHAR(60) NOT NULL,
cpf BIGINT NOT NULL,
datadenascimento VARCHAR(10) NOT NULL,
sexo VARCHAR(60) NOT NULL,
tipousuario VARCHAR(5),
PRIMARY KEY(idusuario)
);

CREATE TABLE endereco (
idendereco INT(11) NOT NULL AUTO_INCREMENT,
idusuario INT(11) NOT NULL,
logradouro VARCHAR(60) NOT NULL,
numero VARCHAR(7) NOT NULL,
complemento VARCHAR(60),
bairro VARCHAR(60) NOT NULL,
cidade VARCHAR(60) NOT NULL,
cep VARCHAR(40) NOT NULL,
PRIMARY KEY (idendereco),
FOREIGN KEY (idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE 
ON UPDATE CASCADE
);

CREATE TABLE cupom (
idcupom INT(11) NOT NULL AUTO_INCREMENT,
nomecupom VARCHAR(60) NOT NULL,
desconto VARCHAR(40) NOT NULL,
PRIMARY KEY (idcupom)
);

CREATE TABLE log_produto (
id_log INT(11) NOT NULL AUTO_INCREMENT,
tabela VARCHAR(45) NOT NULL,
usuario VARCHAR(45) NOT NULL,
data_hora DATETIME NOT NULL,
acao VARCHAR(45) NOT NULL,
dados VARCHAR(1000) NOT NULL,
PRIMARY KEY (id_log)
);

CREATE TABLE pedido (
idpedido INT(11) NOT NULL AUTO_INCREMENT,
idendereco INT(11) NOT NULL,
idusuario INT(11) NOT NULL,
valorcupom VARCHAR(60),
dataCompra DATE NOT NULL,
idFormaPagamento INT NOT NULL,
PRIMARY KEY (idpedido),
FOREIGN KEY (idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE 
ON UPDATE CASCADE,
FOREIGN KEY (idendereco) REFERENCES endereco(idendereco) ON DELETE CASCADE 
ON UPDATE CASCADE,
FOREIGN KEY (idFormaPagamento) REFERENCES FormaPagamento(idFormaPagamento) ON DELETE CASCADE 
ON UPDATE CASCADE
);

CREATE TABLE pedido_produto (
idproduto INT(11) NOT NULL,
idpedido INT(11) NOT NULL,
quantidade INTEGER NOT NULL,
PRIMARY KEY (idproduto, idpedido)
);

INSERT INTO usuario (nomeusuario, email, senha, cpf, datadenascimento, sexo, tipousuario) 
VALUES ('Beatriz','msndabia@hotmail.com','12345','45729432810','18/01/2003','F','admin');
