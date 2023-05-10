-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: lms
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'gafar','123','a@bc');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `am_message`
--

DROP TABLE IF EXISTS `am_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `am_message` (
  `mtime` datetime DEFAULT NULL,
  `message` text,
  `admin_id` int DEFAULT NULL,
  `mentor_id` int DEFAULT NULL,
  KEY `admin_id` (`admin_id`),
  KEY `mentor_id` (`mentor_id`),
  CONSTRAINT `am_message_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`),
  CONSTRAINT `am_message_ibfk_2` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `am_message`
--

LOCK TABLES `am_message` WRITE;
/*!40000 ALTER TABLE `am_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `am_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assignement`
--

DROP TABLE IF EXISTS `assignement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assignement` (
  `sheet` blob,
  `deadline` datetime DEFAULT NULL,
  `lecture_id` int DEFAULT NULL,
  KEY `lecture_id` (`lecture_id`),
  CONSTRAINT `assignement_ibfk_1` FOREIGN KEY (`lecture_id`) REFERENCES `lecture` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignement`
--

LOCK TABLES `assignement` WRITE;
/*!40000 ALTER TABLE `assignement` DISABLE KEYS */;
/*!40000 ALTER TABLE `assignement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_message`
--

DROP TABLE IF EXISTS `au_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `au_message` (
  `mtime` datetime DEFAULT NULL,
  `message` text,
  `admin_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  KEY `admin_id` (`admin_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `au_message_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`),
  CONSTRAINT `au_message_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_message`
--

LOCK TABLES `au_message` WRITE;
/*!40000 ALTER TABLE `au_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `au_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `requirements` text,
  `mentor_id` int DEFAULT NULL,
  `learning_path_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `mentor_id` (`mentor_id`),
  KEY `learning_path_id` (`learning_path_id`),
  CONSTRAINT `course_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `course_ibfk_2` FOREIGN KEY (`learning_path_id`) REFERENCES `learning_path` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (3,'php',NULL,NULL,NULL,NULL),(4,'mysql',NULL,NULL,NULL,NULL),(5,'laravel',NULL,NULL,NULL,NULL),(7,'data structures','for coding',NULL,1002,1),(8,'algorithm','for coding',NULL,1004,1),(9,'c++',NULL,NULL,NULL,NULL),(11,'c',NULL,NULL,NULL,1),(12,'c#',NULL,NULL,1004,1),(13,'js',NULL,NULL,1004,4);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_user`
--

DROP TABLE IF EXISTS `course_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_user` (
  `user_id` int NOT NULL,
  `course_id` int NOT NULL,
  `grade` double DEFAULT NULL,
  `gpa` varchar(50) DEFAULT NULL,
  `finished` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`course_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `course_user_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `course_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_user`
--

LOCK TABLES `course_user` WRITE;
/*!40000 ALTER TABLE `course_user` DISABLE KEYS */;
INSERT INTO `course_user` VALUES (2000,3,80,'A',1),(2001,3,80,'A',1),(2003,3,80,'A',1),(2000,4,50,'D',1),(2003,4,15,'A+',0),(2000,5,100,'A+',0),(2003,5,100,'A+',1),(2015,7,NULL,NULL,NULL),(2016,7,NULL,NULL,NULL),(2029,7,NULL,NULL,NULL),(2003,8,NULL,NULL,NULL),(2015,8,NULL,NULL,NULL),(2016,8,NULL,NULL,NULL),(2029,8,NULL,NULL,NULL),(2003,12,NULL,NULL,0),(2003,13,NULL,NULL,0);
/*!40000 ALTER TABLE `course_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exam` (
  `id` int NOT NULL AUTO_INCREMENT,
  `duration` time DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam`
--

LOCK TABLES `exam` WRITE;
/*!40000 ALTER TABLE `exam` DISABLE KEYS */;
/*!40000 ALTER TABLE `exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `ftime` time DEFAULT NULL,
  `comment` text,
  `user_id` int DEFAULT NULL,
  `mentor_id` int DEFAULT NULL,
  KEY `user_id` (`user_id`),
  KEY `mentor_id` (`mentor_id`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `learning_path`
--

DROP TABLE IF EXISTS `learning_path`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `learning_path` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `learning_path`
--

LOCK TABLES `learning_path` WRITE;
/*!40000 ALTER TABLE `learning_path` DISABLE KEYS */;
INSERT INTO `learning_path` VALUES (4,'ai'),(1,'cs'),(2,'is'),(3,'it');
/*!40000 ALTER TABLE `learning_path` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `learning_path_mentor`
--

DROP TABLE IF EXISTS `learning_path_mentor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `learning_path_mentor` (
  `learning_path_id` int NOT NULL,
  `mentor_id` int NOT NULL,
  PRIMARY KEY (`learning_path_id`,`mentor_id`),
  KEY `mentor_id` (`mentor_id`),
  CONSTRAINT `learning_path_mentor_ibfk_1` FOREIGN KEY (`learning_path_id`) REFERENCES `learning_path` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `learning_path_mentor_ibfk_2` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `learning_path_mentor`
--

LOCK TABLES `learning_path_mentor` WRITE;
/*!40000 ALTER TABLE `learning_path_mentor` DISABLE KEYS */;
/*!40000 ALTER TABLE `learning_path_mentor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lecture`
--

DROP TABLE IF EXISTS `lecture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lecture` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `week` varchar(50) DEFAULT NULL,
  `video` blob,
  `link` text,
  `slide` blob,
  `info` text,
  `course_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `lecture_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lecture`
--

LOCK TABLES `lecture` WRITE;
/*!40000 ALTER TABLE `lecture` DISABLE KEYS */;
INSERT INTO `lecture` VALUES (1,'intro','1',NULL,NULL,NULL,'intro to the course',7);
/*!40000 ALTER TABLE `lecture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ma_message`
--

DROP TABLE IF EXISTS `ma_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ma_message` (
  `mtime` datetime DEFAULT NULL,
  `message` text,
  `mentor_id` int DEFAULT NULL,
  `admin_id` int DEFAULT NULL,
  KEY `mentor_id` (`mentor_id`),
  KEY `admin_id` (`admin_id`),
  CONSTRAINT `ma_message_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id`),
  CONSTRAINT `ma_message_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ma_message`
--

LOCK TABLES `ma_message` WRITE;
/*!40000 ALTER TABLE `ma_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `ma_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mentor`
--

DROP TABLE IF EXISTS `mentor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mentor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `final_rate` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=1023 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mentor`
--

LOCK TABLES `mentor` WRITE;
/*!40000 ALTER TABLE `mentor` DISABLE KEYS */;
INSERT INTO `mentor` VALUES (1002,'amr','ghoniem','123','egypt','mail','1997-06-10','sd@c','1022225555',15000,4.5),(1004,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1005,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1006,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1007,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1008,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1009,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1010,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1011,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1012,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1013,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1014,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1015,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1016,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1017,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1018,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1019,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1020,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1021,'belal','shama',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `mentor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mu_message`
--

DROP TABLE IF EXISTS `mu_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mu_message` (
  `mtime` datetime DEFAULT NULL,
  `message` text,
  `mentor_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  KEY `mentor_id` (`mentor_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `mu_message_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id`),
  CONSTRAINT `mu_message_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mu_message`
--

LOCK TABLES `mu_message` WRITE;
/*!40000 ALTER TABLE `mu_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `mu_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text,
  `correct_ans` text,
  `exam_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exam_id` (`exam_id`),
  CONSTRAINT `question_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_ans`
--

DROP TABLE IF EXISTS `question_ans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question_ans` (
  `answer` text,
  `question_id` int DEFAULT NULL,
  KEY `question_id` (`question_id`),
  CONSTRAINT `question_ans_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_ans`
--

LOCK TABLES `question_ans` WRITE;
/*!40000 ALTER TABLE `question_ans` DISABLE KEYS */;
/*!40000 ALTER TABLE `question_ans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rate` (
  `rate` int DEFAULT NULL,
  `mentor_id` int DEFAULT NULL,
  KEY `mentor_id` (`mentor_id`),
  CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate`
--

LOCK TABLES `rate` WRITE;
/*!40000 ALTER TABLE `rate` DISABLE KEYS */;
/*!40000 ALTER TABLE `rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ua_message`
--

DROP TABLE IF EXISTS `ua_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ua_message` (
  `mtime` datetime DEFAULT NULL,
  `message` text,
  `user_id` int DEFAULT NULL,
  `admin_id` int DEFAULT NULL,
  KEY `user_id` (`user_id`),
  KEY `admin_id` (`admin_id`),
  CONSTRAINT `ua_message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `ua_message_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ua_message`
--

LOCK TABLES `ua_message` WRITE;
/*!40000 ALTER TABLE `ua_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `ua_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `um_message`
--

DROP TABLE IF EXISTS `um_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `um_message` (
  `mtime` datetime DEFAULT NULL,
  `message` text,
  `user_id` int DEFAULT NULL,
  `mentor_id` int DEFAULT NULL,
  KEY `user_id` (`user_id`),
  KEY `mentor_id` (`mentor_id`),
  CONSTRAINT `um_message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `um_message_ibfk_2` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `um_message`
--

LOCK TABLES `um_message` WRITE;
/*!40000 ALTER TABLE `um_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `um_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `learning_path_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `email` (`email`),
  KEY `learning_path_id` (`learning_path_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`learning_path_id`) REFERENCES `learning_path` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2030 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2000,'ramuu','','123','',NULL,NULL,'','',NULL),(2001,'ava',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2002,'ramyoi','ss','159',NULL,NULL,NULL,'A@FF',NULL,4),(2003,'ramo','ibrahim','333SS','egypt',NULL,NULL,'a@u','01064486774',3),(2004,'ss','ssss','33355558899',NULL,NULL,NULL,'lk@u',NULL,NULL),(2005,'ytri','plpl','12345',NULL,NULL,NULL,'a@gggl',NULL,NULL),(2006,'aa','nn','333',NULL,NULL,NULL,'kk@w',NULL,NULL),(2007,'ggg','ff','ppppl',NULL,NULL,NULL,'a@ii',NULL,NULL),(2009,'acds','ss','0088',NULL,NULL,NULL,'poimnb@w',NULL,NULL),(2010,'ramy','ibrahim','4582',NULL,NULL,NULL,'z@x',NULL,NULL),(2011,'ramzy','bba','1496','',NULL,NULL,'a@xoi','',2),(2012,'rr','uit','8020',NULL,NULL,NULL,'a@ctb',NULL,NULL),(2013,'ytq','oop','1594444',NULL,NULL,NULL,'oo@p',NULL,NULL),(2015,'uas','saw','2547',NULL,NULL,NULL,'ak@ty',NULL,2),(2016,'uas','saw','2569',NULL,NULL,NULL,'ak@tytt',NULL,2),(2022,'rak','karo','8881',NULL,NULL,NULL,'w@nm',NULL,NULL),(2023,'pjv','java','14258',NULL,NULL,NULL,'java@w',NULL,NULL),(2026,'ddf','ffd','1597',NULL,NULL,NULL,'aaa@ee',NULL,NULL),(2027,'uyt','tyy','1598741',NULL,NULL,NULL,'vcxz@zxcv',NULL,NULL),(2028,'uyt','tyy','aiu',NULL,NULL,NULL,'vcxz@zxcvz',NULL,NULL),(2029,'ahmed','ibrahim','3366',NULL,NULL,NULL,'y@we',NULL,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_exam`
--

DROP TABLE IF EXISTS `user_exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_exam` (
  `exam_id` int NOT NULL,
  `user_id` int NOT NULL,
  `grade` double DEFAULT NULL,
  `gpa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`exam_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_exam_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_exam_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_exam`
--

LOCK TABLES `user_exam` WRITE;
/*!40000 ALTER TABLE `user_exam` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_exam` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-10  5:29:33
