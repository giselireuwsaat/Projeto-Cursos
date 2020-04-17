CREATE DATABASE projeto_cursos;

CREATE TABLE usuarios(
	id_usuario INT NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    nome VARCHAR(65) NOT NULL,
    email VARCHAR(65) NOT NULL UNIQUE,
    senha VARCHAR(65) NOT NULL,
    cpf INT,
    foto VARCHAR(65), /* oi */ 
    tipo_usuario INT
);

CREATE TABLE tipo_usuario (
	id_tipo_usuario INT NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    nome VARCHAR(65) NOT NULL
);

CREATE TABLE cursos (
	id_curso INT NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
	descricao VARCHAR(1000),
    preco FLOAT DEFAULT 0.0,
    tag VARCHAR(65),
    image VARCHAR(1000),
    professor INT
);

CREATE TABLE professor (
	id_professor INT NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);


ALTER TABLE usuarios
CHANGE tipo_usuario tipo_usuario_fk INT;


ALTER TABLE usuarios 
ADD FOREIGN KEY (tipo_usuario_fk) REFERENCES tipo_usuario(id_tipo_usuario);


ALTER TABLE cursos
CHANGE professor professor_fk INT;

ALTER TABLE cursos
ADD FOREIGN KEY (professor_fk) REFERENCES professor(id_professor);

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  `preco` float DEFAULT '0',
  `tag` varchar(65) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `professor_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_curso`),
  UNIQUE KEY `id_curso` (`id_curso`),
  KEY `professor_fk` (`professor_fk`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`professor_fk`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Full Stack','Curso de Desenvolvimento web',50,'fullstack','foto.jpg',2),(2,'Marketing Digital','Curso de marketing digital',150,'marketing','foto.jpg',1),(3,'GND','Curso de genrenciamento de projetos',800,'gnd','foto.jpg',2),(4,'Mobile Android','Curso de desenvolvimento mobile',70,'android','foto.jpg',1);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(65) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`),
  UNIQUE KEY `id_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (1,'admin'),(2,'professor'),(3,'aluno');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `senha` varchar(65) NOT NULL,
  `cpf` bigint(12) DEFAULT NULL,
  `foto` varchar(65) DEFAULT NULL,
  `tipo_usuario_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario` (`id_usuario`),
  UNIQUE KEY `email` (`email`),
  KEY `tipo_usuario_fk` (`tipo_usuario_fk`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo_usuario_fk`) REFERENCES `tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Thomaz','thomaz@gmail.com','123',123456789011,'foto.jpg',2),(2,'Hendy','hendy@gmail.com','123',123456789011,'foto.jpg',2),(3,'Lucas','lucas@gmail.com','123',123456789011,'foto.jpg',3),(4,'Jaime','jaime@gmail.com','123',123456789011,'foto.jpg',3),(5,'Marcia','Marcia@gmail.com','123',123456789011,'foto.jpg',3),(6,'Cesar','cesar@gmail.com','123',123456789011,'foto.jpg',3),(7,'Admin','admin@gmail.com','123',123456789011,'foto.jpg',1),(8,'Rafa','rafa@gmail.com','123',123456789011,'foto.jpg',3),(9,'Douglas','douglas@gmail.com','123',123456789011,'foto.jpg',3),(10,'Cesar L','cesarl@gmail.com','123',123456789011,'foto.jpg',3),(11,'Daniel','daniel@gmail.com','123',123456789011,'foto.jpg',3),(12,'Marcio','marcio@gmail.com','123',123456789011,'foto.jpg',3),(13,'Vinicius','vinicius@gmail.com','123',123456789011,'foto.jpg',2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

SELECT * FROM usuarios

SELECT COUNT(*) FROM usuarios
WHERE tipo_usuario_fk =3;

SELECT * FROM cursos;
SELECT AVG(preco)
FROM cursos; /*media de preços*/

SELECT * FROM cursos;
SELECT MIN(preco)
FROM cursos;

SELECT * FROM cursos;
SELECT MAX(preco)
FROM cursos;

SELECT * FROM cursos;
SELECT SUM(preco)
FROM cursos;

SELECT SUM(preco), MAX(preco), MIN(preco), STDDEV(preco), AVG(preco) FROM cursos;

SELECT tipo_usuario_fk, COUNT(*)
FROM usuarios
GROUP BY tipo_usuario_fk;

SELECT SUM(preco) AS 'total', MAX(preco) AS 'maximo', MIN(preco) AS 'minimo', STDDEV(preco) AS 'desvio', AVG(preco) AS 'media' FROM cursos;

SELECT u.nome AS usuario, t.nome AS tipo /* Usuario vou chamar de U e Tipo Usuario vou chamar de T*/
FROM usuarios AS u /* TABELA A = usuario*/
INNER JOIN tipo_usuario AS T /* TABELA B = tipo usuario*/
ON u.tipo_usuario_fk = t.id_tipo_usuario;  /* campos em comum, o ON é o que liga os dois*/

/*sem ALIAS*/
SELECT cursos.descricao, usuarios.nome /* aqui é o que eu quero mostrar*/
FROM cursos
INNER JOIN usuarios
ON cursos.professor_fk = usuarios.tipo_usuario_fk; /* campo em comum das duas tabelas*/

/*sem ALIAS*/
SELECT c.nome AS curso , u.nome AS prof  /* aqui é o que eu quero mostrar*/
FROM cursos AS c
INNER JOIN usuarios AS u
ON c.professor_fk = u.id_usuario; /* campo em comum das duas tabelas*/

INSERT INTO cursos (nome, descricao, preco, tag, image)
VALUES
('Drinks Maneiros', 'Aprenda a fazer drinks sensacionais', 3000, 'drinks','happyhour.png');

SELECT cursos.nome, usuarios.nome
FROM cursos
RIGHT JOIN usuarios
ON cursos.professor_fk = usuarios.id_usuario;

SELECT * FROM cursos
