-- MySQL dump 10.13  Distrib 8.4.8, for Linux (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	8.4.8-0ubuntu0.25.10.1

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
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` int DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` tinytext,
  `date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,1,'2026-02-07','王静怡，王志纯上扬州。','2026 年 02 月 12 日 17 点 25 分 47 秒'),(2,1,'2026-02-10','宝宝跟瑾上扬州。','2026 年 02 月 13 日 04 点 06 分 18 秒'),(3,1,'2026-02-11','杨歆妍，杨玟茜。','2026 年 02 月 16 日 10 点 04 分 03 秒'),(4,1,'2026-02-11','衡泽瑾，戴雨辰。','2026 年 02 月 16 日 10 点 04 分 16 秒'),(5,1,'2026-02-14','情人节。','2026 年 02 月 14 日 06 点 38 分 05 秒'),(6,1,'2026-02-15','陈亚威，张静，陈昭今。','2026 年 02 月 15 日 14 点 53 分 09 秒'),(7,1,'2026-02-15','王丽娜，邵梦扬。','2026 年 02 月 16 日 05 点 41 分 52 秒'),(8,1,'2026-02-15','刘柏春，刘承熙。','2026 年 02 月 16 日 05 点 42 分 36 秒'),(9,1,'2025-02-15','刘柏青，刘梓熙。','2026 年 02 月 16 日 05 点 43 分 43 秒'),(10,1,'2025-02-14','方红亮，方继旭。','2026 年 02 月 16 日 05 点 44 分 29 秒'),(11,2,'2026-02-16','c++菜鸟教程第16章。','2026 年 02 月 16 日 06 点 34 分 43 秒'),(12,1,'2026-02-16','除夕夜。','2026 年 02 月 16 日 06 点 35 分 20 秒'),(13,2,'2026-02-16','math book Pure Mathematics 1\r\nChapter 6 A','2026 年 02 月 16 日 09 点 55 分 56 秒'),(14,1,'2026-02-16','蓝牙耳机充电。','2026 年 02 月 16 日 13 点 47 分 59 秒'),(15,1,'2026-02-17','春节。','2026 年 02 月 17 日 03 点 20 分 18 秒'),(16,1,'2026-02-21','王家明。','2026 年 02 月 21 日 17 点 05 分 45 秒'),(17,1,'2022-02-22','农历正月初六。王家驹，王舒柳。','2026 年 02 月 22 日 13 点 19 分 22 秒'),(18,2,'2026-02-22','math book Pure Mathematics 1 Chapter 6 B','2026 年 02 月 22 日 18 点 28 分 44 秒'),(19,2,'2026-02-24','菜鸟教程c++第19章 字符串。','2026 年 02 月 24 日 08 点 16 分 18 秒');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'日常生活'),(2,'学习工作');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-24 14:34:06
