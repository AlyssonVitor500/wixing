CREATE DATABASE  IF NOT EXISTS `wixing` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wixing`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: wixing
-- ------------------------------------------------------
-- Server version	5.0.41-community-nt

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fornecedor` (
  `idForn` int(11) NOT NULL auto_increment,
  `nomeForn` varchar(70) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  PRIMARY KEY  (`idForn`),
  UNIQUE KEY `cnpj` (`cnpj`),
  UNIQUE KEY `nome` (`nomeForn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedor`
--

LOCK TABLES `fornecedor` WRITE;
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
INSERT INTO `fornecedor` VALUES (7,'Noc','123.231.421/1412-41');
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `idLog` int(11) NOT NULL auto_increment,
  `quant_prod` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `prodIdFK` int(11) NOT NULL,
  `dia` varchar(50) NOT NULL,
  PRIMARY KEY  (`idLog`),
  KEY `prodIdFK` (`prodIdFK`),
  CONSTRAINT `prodIdFK` FOREIGN KEY (`prodIdFK`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (8,10,1,2,'31/05/2019 - 02:34:57'),(9,8,2,2,'30/05/2019 às 21:35:57'),(10,1493,2,1,'30/05/2019 às 21:41:48');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(50) NOT NULL,
  `peso` float(20,2) NOT NULL,
  `tipo_produto` varchar(20) NOT NULL,
  `valor_produto` float(20,2) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `idFornFK` int(11) NOT NULL,
  `quant` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `idFornFK` (`idFornFK`),
  CONSTRAINT `idFornFK` FOREIGN KEY (`idFornFK`) REFERENCES `fornecedor` (`idForn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Monitor',5.00,'Não Perecível',50.00,' ...',7,0),(2,'Mouse',12.00,'Não Perecível',12.00,' 22',7,0);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `nivel` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'administrador','2b50f095d841f28feaa702b8a1288b63',1),(2,'admin','2b50f095d841f28feaa702b8a1288b63',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-30 21:52:02
