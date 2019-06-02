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
INSERT INTO `fornecedor` VALUES (7,'Noc','123.231.421/1412-41'),(9,'multilaser','645.646.546/5465-46'),(10,'lg','213.125.657/6588-07'),(11,'intelbras','146.546.546/5465-46'),(12,'samsung','445.646.546/5465-46'),(13,'coca cola','648.456.484/1234-54'),(14,'romanel','789.879.645/6456-54');
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
  `dia` date NOT NULL,
  `hora` varchar(10) NOT NULL,
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
INSERT INTO `logs` VALUES (14,50,1,2,'2019-06-01','16:18:03'),(15,12,1,1,'2019-06-19','16:00:00'),(16,100,1,3,'2019-06-01','16:31:41'),(17,100,1,2,'2019-06-01','16:33:07'),(18,30,2,2,'2019-06-01','16:33:16'),(19,12,2,2,'2015-06-17','12:00:00'),(20,30,1,3,'2019-06-01','20:35:56'),(21,10,2,3,'2019-06-01','20:40:25'),(22,100,1,2,'2019-06-04','12:00:00'),(23,50,1,2,'2019-01-07','12:00:00'),(24,1500,1,4,'2019-01-23','01:55:00'),(25,100,2,4,'2019-06-02','10:21:57');
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
INSERT INTO `produtos` VALUES (1,'Monitor',5.00,'Não Perecível',50.00,' ...',7,32),(2,'Mouse',12.00,'Não Perecível',12.00,' 22',7,270),(3,'TV OLED  50',5.00,'Não Perecível',4999.00,' Para toda a Família',12,20),(4,'Interfone',1.00,'Não Perecível',1200.00,' ...',11,1400);
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
  `perfilFoto` varchar(60) NOT NULL default 'default.png',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','2b50f095d841f28feaa702b8a1288b63',1,'92a1bbdc9ba6923401911136ccc51a71.jpg'),(5,'alysson','41bf2ec9f1e6e644fe0cb85e995f9cb1',1,'b232c0eb89140864cca44f6f396b1ac2.jpg'),(6,'robin','202cb962ac59075b964b07152d234b70',2,'2e3a731c7a712003347ba27114bb0f3d.jpg'),(8,'felicity','202cb962ac59075b964b07152d234b70',1,'8e0e114d9e79608cb2086c330b08750e.jpg'),(9,'josé123','202cb962ac59075b964b07152d234b70',2,'c3b610209146e81d4dbc67e031e556d2.jpg'),(10,'roberto','202cb962ac59075b964b07152d234b70',2,'97a06c04585decbeaa855538b53c15b4.jpg'),(11,'fernando','202cb962ac59075b964b07152d234b70',1,'c6c5c0f8c8381ecedf4582d48a96d4b4.jpg');
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

-- Dump completed on 2019-06-02 20:11:04
