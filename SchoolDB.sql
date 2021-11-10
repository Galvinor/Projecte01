-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: SCHOOL
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `LISTS`
--

DROP TABLE IF EXISTS `LISTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LISTS` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `username` varchar(100) NOT NULL,
  `listname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LISTS`
--

/*!40000 ALTER TABLE `LISTS` DISABLE KEYS */;
INSERT INTO `LISTS` VALUES (1,'timmy','testlist1');
/*!40000 ALTER TABLE `LISTS` ENABLE KEYS */;

--
-- Table structure for table `TASKS`
--

DROP TABLE IF EXISTS `TASKS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TASKS` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `taskname` varchar(255) NOT NULL,
  `list` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TASKS`
--

/*!40000 ALTER TABLE `TASKS` DISABLE KEYS */;
INSERT INTO `TASKS` VALUES (1,'testtask1','opel');
/*!40000 ALTER TABLE `TASKS` ENABLE KEYS */;

--
-- Table structure for table `USERS`
--

DROP TABLE IF EXISTS `USERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USERS` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `userame` varchar(50) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `teacherstatus` tinyint(1) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL COMMENT 'create time',
  `update_time` datetime DEFAULT NULL COMMENT 'update time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USERS`
--

/*!40000 ALTER TABLE `USERS` DISABLE KEYS */;
INSERT INTO `USERS` VALUES (3,'timmy','$2y$10$KPjwchisOk3cgl3AjLaxc.ihLQRtaH8kEFszIQwF2NneHRf6xZBKe','timmy@gmail.com',NULL,NULL,NULL),(4,'rubius','$2y$10$kG9FUiXj.e3pfuOv9YqQwOt8ESLXKNlA4ddPTQasJEo2e1Ay7EUg2','rubius@mail.com',NULL,NULL,NULL),(5,'prova','$2y$10$Eambq6kAVU4QbwDWtT.evuRNQjb66wEXoSLrc5lWjHswwKnHP1Boa','prova@mail.com',NULL,NULL,NULL),(6,'testjavi','$2y$10$1evAZ2sj383/qx89W5x29Os23GRSV.zfOgLbreDD1v5Rd6HZuytKO','testjavi@mail.com',NULL,NULL,NULL),(7,'testjavi2','$2y$10$WMuBdTdws3IJ95FsWivPfuBgNoGy4jyluV5pPAdYhEYtJxQLq1PWW','testjavi2@mail.com',NULL,NULL,NULL),(8,'timmy2','$2y$10$W5tSvbatMOBdjSyTtNIay./IaKUa4hL4bhzC0MZSegtlsfjhlxkGW','timmy2@mail.com',NULL,NULL,NULL);
/*!40000 ALTER TABLE `USERS` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-10  0:28:31
