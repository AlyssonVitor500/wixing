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
INSERT INTO `users` VALUES (1,'root','2b50f095d841f28feaa702b8a1288b63',1,'f4a54f9f81fb7edfc463c62d508c82a5.jpg'),(5,'alysson','41bf2ec9f1e6e644fe0cb85e995f9cb1',1,'b232c0eb89140864cca44f6f396b1ac2.jpg'),(6,'robin','202cb962ac59075b964b07152d234b70',2,'2e3a731c7a712003347ba27114bb0f3d.jpg'),(8,'felicity','202cb962ac59075b964b07152d234b70',1,'8e0e114d9e79608cb2086c330b08750e.jpg'),(9,'josé123','202cb962ac59075b964b07152d234b70',2,'c3b610209146e81d4dbc67e031e556d2.jpg'),(10,'roberto','202cb962ac59075b964b07152d234b70',2,'97a06c04585decbeaa855538b53c15b4.jpg'),(11,'fernando','202cb962ac59075b964b07152d234b70',1,'c6c5c0f8c8381ecedf4582d48a96d4b4.jpg'),(12,'rute','202cb962ac59075b964b07152d234b70',1,'6a54bdbb3ff1b2edc18cf61ad20baeab.jpg'),(13,'leticia','202cb962ac59075b964b07152d234b70',2,'fe6e2b30ad972277c05c56f24209f84d.jpg'),(14,'leandro','202cb962ac59075b964b07152d234b70',1,'69cef4a72c0df4855984e32fd9c733e2.jpg'),(15,'adryangado','021bbc7ee20b71134d53e20206bd6feb',1,'1bd627d7e29cc4711fef45ffa09379db.jpg');
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

-- Dump completed on 2019-06-03 13:15:30
