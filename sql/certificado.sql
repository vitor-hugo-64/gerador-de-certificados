create database certificado;
use certificado;

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Livro` varchar(11) DEFAULT NULL,
  `Folha` varchar(11) DEFAULT NULL,
  `Registro` varchar(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `evento` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `eventos` VALUES (1,'10','12','2','Danilo Oliveira','danilo@liberato.com.br','speaker','4641c5ff4fe09dba184a927cfeb80e7d29ba523c.png');
INSERT INTO `eventos` VALUES (2,'10','14','4','Evandro Oliveira','evandro@liberato.com.br','attendee','f7ec14856ec3cd4b71ae070ad7a680fa4efbc956.png');
INSERT INTO `eventos` VALUES (3,'10','10','6','Jane Christina Lopes Garcia','jane@liberato.com.br','attendee','f0a6c6fdcd458ce19579516f8e39b36ced3905c3.png');
INSERT INTO `eventos` VALUES (4,'10','20','8','Danilo Oliveira','danilo@liberato.com.br','seminario_2','81c53e5717724e9f9425824871abd9323354238b.png');
INSERT INTO `eventos` VALUES (5,'10','20','10','Danilo Oliveira','danilo@liberato.com.br','foca','7c896a63a7aae9fe041b3fbdeda412d78afd9cad.png');
INSERT INTO `eventos` VALUES (7,'10','21','1','Danilo Augusto de  Oliveira','danilo@liberato.com.br','attendee','69f70f95e848c76edbf53f1f127dc6cc15b216b1.png');


DROP TABLE IF EXISTS `mostratec`;
CREATE TABLE `mostratec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Folha` varchar(11) DEFAULT NULL,
  `Registro` varchar(11) DEFAULT NULL,
  `idProjeto` varchar(11) DEFAULT NULL,
  `estande` varchar(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pais.nome` varchar(255) DEFAULT NULL,
  `uf` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `mostratec` VALUES (1,'10','5','5','1','Danilo Oliveira','danilo@liberato.com.br','Brasil','RS','Prevenção a alergia: identificando antigenos do leite nos alimentos','orientador','b116533218a30ed0c86990f88eaee9a4602bb504.png');
INSERT INTO `mostratec` VALUES (2,'10','1','2','2','Evandro Oliveira','evandro@liberato.com.br','Brasil','RS','A Importância Medicinal e Farmacêutica dos Alucinógenos Naturais','orientador','f7ec14856ec3cd4b71ae070ad7a680fa4efbc956.png');
INSERT INTO `mostratec` VALUES (3,'10','2','2','3','Jane Christina Lopes Garcia','jane@liberato.com.br','Brasil','RS','A Importância Medicinal e Farmacêutica dos Alucinógenos Naturais','attendee','f0a6c6fdcd458ce19579516f8e39b36ced3905c3.png');
INSERT INTO `mostratec` VALUES (4,'20','3','3','4','Danilo Oliveira','danilo@liberato.com.br','Brasil','RS','teste','orientador','b116533218a30ed0c86990f88eaee9a4602bb504.png');
INSERT INTO `mostratec` VALUES (5,'20','4','4','1','Danilo Oliveira','danilo@liberato.com.br','Brasil','RS','Prevenção a alergia: identificando antigenos do leite nos alimentos','orientador','b116533218a30ed0c86990f88eaee9a4602bb504.png');
INSERT INTO `mostratec` VALUES (6,'20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);