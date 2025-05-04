-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: lab_loker
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
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
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin@locker.sh','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_access_tokens`
--

DROP TABLE IF EXISTS `admin_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_access_tokens`
--

LOCK TABLES `admin_access_tokens` WRITE;
/*!40000 ALTER TABLE `admin_access_tokens` DISABLE KEYS */;
INSERT INTO `admin_access_tokens` VALUES (1,1,'e8e9044abbe11ba891959efb2a7ce3a76b24c69a255a95d83d84cfdc38d2f63d','2024-11-19 22:55:44'),(2,1,'187ba1720a163d783df153a516b07844b098ee582ed2e24727c9270037d5f333','2024-11-20 13:29:06');
/*!40000 ALTER TABLE `admin_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curriculum_vitaes`
--

DROP TABLE IF EXISTS `curriculum_vitaes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curriculum_vitaes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curriculum_vitaes`
--

LOCK TABLES `curriculum_vitaes` WRITE;
/*!40000 ALTER TABLE `curriculum_vitaes` DISABLE KEYS */;
INSERT INTO `curriculum_vitaes` VALUES (2,1,'c4ca4238a0b923820dcc509a6f75849b.pdf','2024-11-17 13:53:56');
/*!40000 ALTER TABLE `curriculum_vitaes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `position` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'Backend Developer','Dibutuhkan Backend Developer yang terbiasa dengan bahasa pemrograman JAVA','fulltime','2025-12-30',NULL,'Jakarta'),(2,'Frontend Developer','Dibutuhkan Front Developer yang terbiasa dengan bahasa pemrograman React','fulltime','2025-12-30',NULL,'Jakarta'),(3,'DevOps','Dibutuhkan DevOps yang terbiasa menggunakan Github Action, Jenkins','parttime','2025-04-10',NULL,'-');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otp`
--

DROP TABLE IF EXISTS `otp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otp` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `otp` int DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otp`
--

LOCK TABLES `otp` WRITE;
/*!40000 ALTER TABLE `otp` DISABLE KEYS */;
INSERT INTO `otp` VALUES (1,3797,1,'2024-11-07 08:18:03'),(2,3939,0,'2024-11-07 08:43:04'),(3,5340,1,'2024-11-07 08:43:12'),(4,1024,0,'2024-11-08 02:52:40'),(5,9333,1,'2024-11-08 02:58:21'),(6,8373,1,'2024-11-08 03:44:34'),(7,6786,1,'2024-11-08 06:25:12'),(8,8333,1,'2024-11-08 07:52:55'),(9,2009,1,'2024-11-11 11:21:08'),(10,8761,1,'2024-11-11 12:13:36'),(11,1146,1,'2024-11-11 12:50:29'),(12,6858,1,'2024-11-12 01:49:05'),(13,4025,1,'2024-11-12 03:24:42'),(14,3032,1,'2024-11-12 03:58:52'),(15,7849,1,'2024-11-12 07:00:24'),(16,6586,1,'2024-11-12 09:09:00'),(17,9063,1,'2024-11-12 09:49:27'),(18,5951,1,'2024-11-12 10:04:19'),(19,7908,1,'2024-11-12 13:52:00'),(20,8462,1,'2024-11-13 03:12:38'),(21,4796,1,'2024-11-13 09:06:21'),(22,5889,1,'2024-11-13 09:47:02'),(23,5301,1,'2024-11-15 13:38:32'),(24,3362,1,'2024-11-15 13:55:45'),(25,3916,1,'2024-11-17 07:19:29'),(26,5444,1,'2024-11-17 08:50:58'),(27,9369,0,'2024-11-17 10:17:32'),(28,9895,0,'2024-11-17 10:18:25'),(29,5553,0,'2024-11-17 10:20:47'),(30,4371,0,'2024-11-17 10:21:01'),(31,7107,0,'2024-11-17 10:21:15'),(32,3036,0,'2024-11-17 10:22:34'),(33,1772,0,'2024-11-17 10:24:39'),(34,2712,0,'2024-11-17 10:24:41'),(35,3862,0,'2024-11-17 10:25:53'),(36,2056,0,'2024-11-17 10:27:35'),(37,1494,1,'2024-11-17 10:27:37'),(38,5983,1,'2024-11-17 12:01:28'),(39,1764,1,'2024-11-17 12:47:09'),(40,7962,1,'2024-11-17 13:40:46'),(41,2959,1,'2024-11-18 01:33:21'),(42,3269,1,'2024-11-18 03:00:06'),(43,3296,1,'2024-11-18 03:41:47'),(44,6143,1,'2024-11-18 06:24:05'),(45,6859,1,'2024-11-20 07:25:26'),(46,8689,1,'2024-11-22 14:39:57'),(47,3243,1,'2024-11-23 02:32:16');
/*!40000 ALTER TABLE `otp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skills` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,1,'PHP','2024-11-12 02:23:08'),(3,1,'JQuery','2024-11-12 03:24:56');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_access_tokens`
--

DROP TABLE IF EXISTS `user_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_access_tokens`
--

LOCK TABLES `user_access_tokens` WRITE;
/*!40000 ALTER TABLE `user_access_tokens` DISABLE KEYS */;
INSERT INTO `user_access_tokens` VALUES (2,1,'17bdbd9147f9d141bbd651ca29dbcd52b9e529ad75856411779bd3f0e5116955','2024-11-07 08:42:46'),(3,1,'25462ff7c5a4d4d2a9b02d3ef30976eed38636c45f740470b1b238dab3cfcb28','2024-11-07 08:43:24'),(4,1,'49e49d28096b6710af456fe497c67f8e65dec3bb6ba43e21092b407e99056a07','2024-11-08 02:58:26'),(5,1,'229bee7b79fb6d253847af460450b76d34d14ceae98263ed76e2fc1ae24a058c','2024-11-08 03:44:39'),(6,1,'c18ea4231537043fb621b6735ca9cffdfe54d2eac61830b390e78aa7532d6348','2024-11-08 06:25:17'),(7,1,'c5281df3868897f490cf39b3851e85caba1f00522b07df2aa6d8c5a5220d5077','2024-11-08 07:52:58'),(8,1,'b46bc7de4c6b00c597561a831a1042f279ae2bfe0c8b8558617ac43cfcb55990','2024-11-11 11:21:11'),(9,1,'cb524db729f0a617493ce13da7cbf39c73bb66422e02c2e74763d892d5637049','2024-11-11 12:13:40'),(10,1,'6b225e2f32c8c97c123fa5a76225a25047ec269a9fc4f83c358a090e65611225','2024-11-11 12:50:32'),(11,1,'2a5a6c27d69c0867b2950b20fb37194a2adb2a22433f8c3d79041d19b2ceb29f','2024-11-12 01:49:12'),(12,1,'5dc50bcb7c2cd7e10ade5659b2d8542805b0a8046f9b4ef38b67391d884f79be','2024-11-12 03:24:46'),(13,1,'72c4c049a691764ea1b5ff2c6f0087f23cefc3c92a0a05b265b2ffa6b12f6097','2024-11-12 03:58:55'),(14,1,'07d77474515604a16d2951ff80e77bc978032e7ed905fca0f1336b4f07174a0d','2024-11-12 07:00:35'),(15,1,'70eabdc78a5516a832fea8c72a597b0f7e7a78057879bb014f6b554bf86e03c1','2024-11-12 09:09:08'),(16,1,'8d60efe52fab2558532cd6a77793183b81009afd4a4184972298524a7b5f6164','2024-11-12 09:49:32'),(17,1,'30ad95fcfa02eaf33ef4628dddcf5972a73e2ed36e2516eef7803ed61034bd8a','2024-11-12 10:04:22'),(18,1,'4c5aceab85bc1817987e91b36d0f1bcb16e282d54f9772d81e692cea5d8a6a9c','2024-11-12 13:52:05'),(19,1,'3fb06726f58de27fa3267f230f1d96e09be21a23df831084e6cb5bed80f597b1','2024-11-13 03:12:59'),(20,1,'cf7415e85f883cd5247d03caba0ec3157c16fbd2af581122c227287d10a1206a','2024-11-13 09:06:27'),(21,1,'6c2b24a6b5a5c2252bcbb9896986ed3514430c505f900f9948b7d3be37437b81','2024-11-13 09:47:06'),(22,1,'bed4123269b9e7707177a74ef1e2a67d92b086b2058e4ec8a5a09c9274b6a548','2024-11-15 13:38:36'),(23,1,'6801ee9c475d80aa611003dd7291d935cedd8eaad163256b383803af7e8a307e','2024-11-15 13:55:48'),(24,1,'23f9670bafbeb5f714a2035a426417c03ee115d8655f104100eca08c757efe1b','2024-11-17 07:19:33'),(25,1,'1652925c6914fb12dc40845acfe1193d890accc1056ee2789009f8c2abaa318a','2024-11-17 08:51:03'),(26,1,'5d18389b485e7f7f264e04f5dd7abc23cc4840a38617ad17ae94b5eb720747cb','2024-11-17 10:25:58'),(27,1,'f12097b0938e899b2133077110e24da777d69140a38902a318c9c7992f6b06a7','2024-11-17 10:27:40'),(28,1,'0f1fbe9867965b69d19104cb1baca80ac0bc90dc9cc43e5381050a884f1874f2','2024-11-17 12:01:32'),(29,1,'63d64484571037e11b49682f9c02ffd04618a5a814090afd9c40ce03be17754d','2024-11-17 12:47:13'),(30,1,'0d72ad496822e36547eb98abebec9053d2eff0acec04a42ae7e1fd2f62fa7f88','2024-11-17 13:40:54'),(31,1,'d3ad5f8db844b19bd9d6fe3c74f11a5633ab762b32a66b518f8a1f65e712b953','2024-11-18 01:33:26'),(32,1,'75554b0d30e88ba9ee94baadf82dd4002d39411c44858131ceea30f632b21b26','2024-11-18 03:00:10'),(33,1,'4f10e906d362c4fc740511f2fa900ebc171d95611a0dbadc67bc392e15ee510a','2024-11-18 03:41:52'),(34,1,'aac527e47daf4c4eec553f65d5b164272c17c754c18d25ea6333c4a70ac54b1e','2024-11-18 06:24:10'),(35,1,'8368f2e51769046e1490a1e628db97886629f5e90583ca00f2670e95844c444f','2024-11-20 07:25:31'),(36,1,'5db46c804d587df7d8963114ef7447f16a65df3bfff2f12354a70b3a2de13175','2024-11-22 14:40:04'),(37,1,'f7087ffe58ae501470d8be5530cae1aaaf2db5d8ff20c8c67e67248124143a57','2024-11-23 02:32:20');
/*!40000 ALTER TABLE `user_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_jobs`
--

DROP TABLE IF EXISTS `user_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `job_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_jobs`
--

LOCK TABLES `user_jobs` WRITE;
/*!40000 ALTER TABLE `user_jobs` DISABLE KEYS */;
INSERT INTO `user_jobs` VALUES (4,1,1,'2024-11-18 03:31:49',1);
/*!40000 ALTER TABLE `user_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `phone_number` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(255) DEFAULT NULL,
  `about` longtext,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'rendy','0123',NULL,'logo-cda.png','<p>about mie</p>','bet');
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

-- Dump completed on 2024-11-29 10:21:50
