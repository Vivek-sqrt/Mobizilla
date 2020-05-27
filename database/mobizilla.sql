-- MySQL dump 10.13  Distrib 5.1.33, for Win32 (ia32)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.1.33-community

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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'APPLE IPhone 6S Plus',22000),(2,'APPLE IPhone 7',30000),(3,'APPLE IPhone 7 Plus',53000),(4,'APPLE IPhone X',78000),(5,'Samsung Galaxy S7 EDGE',45000),(6,'Samsung Galaxy S8 PLUS',56000),(7,'Samsung Galaxy NOTE 8 PLUS',77000),(8,'Samsung Galaxy A8 ',17000),(9,'ONEPLUS 3',28000),(10,'ONEPLUS 3T',20000),(11,'ONEPLUS 5',30000),(12,'ONEPLUS 5T',26000),(13,'XIAOMI REDMI NOTE 4',14000),(14,'XIAOMI MI A1',10000),(15,'XIAOMI MI MAX 2',12000),(16,'XIAOMI MI MIX 2',36000);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'Vivek','vivekwer@gmail.com','c136fcd206e65be2d68ad1c73a162cd4','9874857844','ratlam','ratlam saher me bas naam hi kaafi hai'),(7,'Billy Boy','email@billy.com','04a78c2b717460c811f6acd3c45fc894','7845887874','Flagstaff','1183 Skips Lane');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_items`
--

LOCK TABLES `users_items` WRITE;
/*!40000 ALTER TABLE `users_items` DISABLE KEYS */;
INSERT INTO `users_items` VALUES (12,5,8,'Confirmed'),(18,5,1,'Confirmed'),(19,5,3,'Confirmed'),(20,5,6,'Confirmed'),(21,5,1,'Confirmed'),(22,5,4,'Confirmed'),(23,5,3,'Confirmed'),(24,5,8,'Confirmed'),(25,5,12,'Confirmed'),(26,5,6,'Confirmed'),(27,5,4,'Confirmed'),(28,5,6,'Confirmed'),(29,5,3,'Confirmed'),(30,5,13,'Confirmed'),(31,5,7,'Confirmed'),(32,5,3,'Confirmed'),(33,5,6,'Confirmed'),(34,5,4,'Confirmed'),(35,5,16,'Confirmed'),(36,5,4,'Confirmed'),(37,5,6,'Confirmed'),(38,5,7,'Confirmed'),(39,5,8,'Confirmed'),(40,5,2,'Confirmed'),(41,5,12,'Confirmed'),(42,5,3,'Confirmed'),(43,5,7,'Confirmed'),(44,5,8,'Confirmed'),(45,5,3,'Confirmed'),(46,5,11,'Confirmed'),(47,5,16,'Confirmed'),(48,5,6,'Confirmed'),(49,5,12,'Confirmed'),(50,5,16,'Confirmed'),(51,5,6,'Confirmed'),(52,5,4,'Confirmed'),(53,5,2,'Confirmed'),(54,5,1,'Confirmed'),(55,5,3,'Confirmed'),(56,5,6,'Confirmed'),(57,5,7,'Confirmed'),(58,5,15,'Confirmed'),(59,5,14,'Confirmed'),(60,5,6,'Confirmed'),(61,5,12,'Confirmed'),(62,5,4,'Confirmed'),(63,5,1,'Confirmed'),(64,5,15,'Confirmed'),(65,5,15,'Confirmed'),(66,5,13,'Confirmed'),(69,5,12,'Confirmed'),(70,5,8,'Confirmed'),(71,5,3,'Confirmed'),(72,5,14,'Confirmed'),(73,5,6,'Confirmed'),(74,5,7,'Confirmed'),(75,5,2,'Confirmed'),(76,5,1,'Confirmed'),(77,5,5,'Confirmed'),(78,5,1,'Confirmed'),(79,5,3,'Confirmed'),(80,5,2,'Confirmed'),(81,5,6,'Confirmed'),(82,5,15,'Confirmed'),(83,5,3,'Confirmed'),(84,5,4,'Confirmed'),(85,5,7,'Confirmed'),(86,5,2,'Confirmed'),(87,5,14,'Confirmed'),(88,5,13,'Confirmed');
/*!40000 ALTER TABLE `users_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-05 12:31:27
