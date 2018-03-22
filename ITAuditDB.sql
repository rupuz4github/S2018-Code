-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: ITAudit
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `Clock`
--

DROP TABLE IF EXISTS `Clock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clock` (
  `ClockID` int(11) NOT NULL AUTO_INCREMENT,
  `EmpID` int(11) NOT NULL,
  `Clock_In_Date` varchar(200) DEFAULT NULL,
  `Clock_Out_Date` varchar(200) DEFAULT NULL,
  `EntryDate` date NOT NULL,
  PRIMARY KEY (`ClockID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clock`
--

LOCK TABLES `Clock` WRITE;
/*!40000 ALTER TABLE `Clock` DISABLE KEYS */;
INSERT INTO `Clock` VALUES (3,3,'02:29:28','08:29:32','2018-03-19'),(4,3,'13:53:14','13:53:31','2018-03-21');
/*!40000 ALTER TABLE `Clock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employees`
--

DROP TABLE IF EXISTS `Employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employees` (
  `EmpID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `UserName` varchar(225) DEFAULT NULL,
  `Role` varchar(255) DEFAULT NULL,
  `Password` varchar(550) NOT NULL,
  `Level` int(11) DEFAULT NULL,
  `Location` varchar(225) DEFAULT NULL,
  `MgrID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EmpID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employees`
--

LOCK TABLES `Employees` WRITE;
/*!40000 ALTER TABLE `Employees` DISABLE KEYS */;
INSERT INTO `Employees` VALUES (1,'Jhon ','jhondoe','Manager','202cb962ac59075b964b07152d234b70',1,'Location A',NULL),(2,'Jhony Dep','jhony','Staff','202cb962ac59075b964b07152d234b70',2,'Location B',1),(3,'Biller','bill','Staff','202cb962ac59075b964b07152d234b70',2,'Location B',1),(4,'rpeters','rpeters','Manager','38f629170ac3ab74b9d6d2cc411c2f3c',1,'Location A',NULL),(5,'Manager Gill','gill','Manager','e10adc3949ba59abbe56e057f20f883e',1,'Location B',4),(6,'Doe','mdoe','Staff','202cb962ac59075b964b07152d234b70',2,'A',4);
/*!40000 ALTER TABLE `Employees` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-21 23:22:00

