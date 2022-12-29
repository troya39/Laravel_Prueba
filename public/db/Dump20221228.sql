CREATE DATABASE  IF NOT EXISTS `ventas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ventas`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ventas
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `producto_id` bigint unsigned DEFAULT NULL,
  `precio` double NOT NULL,
  `impuesto` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `compras_user_id_foreign` (`user_id`),
  KEY `compras_producto_id_foreign` (`producto_id`),
  CONSTRAINT `compras_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `compras_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
INSERT INTO `compras` VALUES (1,1,15,175,28,1,'2022-12-28 01:23:46','2022-12-28 01:27:20',NULL),(2,1,14,689,35,1,'2022-12-28 01:23:49','2022-12-28 01:28:24',NULL),(3,1,13,189,26,1,'2022-12-28 01:23:53','2022-12-28 02:45:04',NULL),(4,1,12,78,16,1,'2022-12-28 01:23:57','2022-12-28 02:50:31',NULL),(5,1,11,889,51,2,'2022-12-28 01:24:00','2022-12-28 01:24:00',NULL),(6,1,10,55,12,2,'2022-12-28 01:24:04','2022-12-28 01:24:04',NULL),(7,1,6,25.12,7,2,'2022-12-28 03:53:08','2022-12-28 03:53:08',NULL),(8,2,5,59.35,10,1,'2022-12-28 04:09:46','2022-12-28 04:10:23',NULL),(9,2,3,39.73,12,1,'2022-12-28 04:09:57','2022-12-28 05:57:10',NULL),(10,1,16,25,18,1,'2022-12-28 06:15:46','2022-12-28 06:17:03',NULL),(11,2,6,25.12,7,2,'2022-12-28 21:38:02','2022-12-28 21:38:02',NULL),(12,2,12,78,16,2,'2022-12-28 21:38:08','2022-12-28 21:38:08',NULL),(13,3,16,25,18,2,'2022-12-28 21:39:33','2022-12-28 21:39:33',NULL),(14,3,8,13,4,1,'2022-12-28 21:39:42','2022-12-28 21:40:09',NULL),(15,3,2,45.65,15,2,'2022-12-28 21:39:49','2022-12-28 21:39:49',NULL),(16,3,11,889,51,2,'2022-12-28 21:39:56','2022-12-28 21:39:56',NULL),(17,4,7,320,45,2,'2022-12-28 21:41:05','2022-12-28 21:41:05',NULL),(18,4,5,59.35,10,1,'2022-12-28 21:41:09','2022-12-28 21:41:49',NULL),(19,4,3,39.73,12,1,'2022-12-28 21:41:13','2022-12-28 21:41:35',NULL),(20,4,9,6,4,2,'2022-12-28 21:41:20','2022-12-28 21:41:20',NULL),(21,4,12,78,16,2,'2022-12-28 21:41:27','2022-12-28 21:41:27',NULL),(22,5,14,689,35,1,'2022-12-28 21:42:22','2022-12-28 21:42:58',NULL),(23,5,4,13,8,0,'2022-12-28 21:42:27','2022-12-28 21:43:09','2022-12-28 21:43:09'),(24,5,10,55,12,2,'2022-12-28 21:42:31','2022-12-28 21:42:31',NULL),(25,5,15,175,28,1,'2022-12-28 21:42:36','2022-12-28 21:42:51',NULL),(26,5,7,320,45,2,'2022-12-28 21:42:40','2022-12-28 21:42:40',NULL);
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facturas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `compra_id` bigint unsigned DEFAULT NULL,
  `factura` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facturas_user_id_foreign` (`user_id`),
  KEY `facturas_compra_id_foreign` (`compra_id`),
  CONSTRAINT `facturas_compra_id_foreign` FOREIGN KEY (`compra_id`) REFERENCES `compras` (`id`) ON DELETE CASCADE,
  CONSTRAINT `facturas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (1,1,1,'1151-1',1,'2022-12-28 01:27:20','2022-12-28 01:27:20',NULL),(2,1,2,'2141-2',1,'2022-12-28 01:28:24','2022-12-28 01:28:24',NULL),(3,1,3,'3131-2',1,'2022-12-28 02:45:04','2022-12-28 02:45:04',NULL),(4,1,4,'4121-4',1,'2022-12-28 02:50:31','2022-12-28 02:50:31',NULL),(5,2,8,'852-5',1,'2022-12-28 04:10:23','2022-12-28 04:10:23',NULL),(6,2,9,'932-6',1,'2022-12-28 05:57:09','2022-12-28 05:57:09',NULL),(7,1,10,'10161-7',1,'2022-12-28 06:17:03','2022-12-28 06:17:03',NULL),(8,3,14,'1483-8',1,'2022-12-28 21:40:09','2022-12-28 21:40:09',NULL),(9,4,19,'1934-9',1,'2022-12-28 21:41:35','2022-12-28 21:41:35',NULL),(10,4,18,'1854-10',1,'2022-12-28 21:41:49','2022-12-28 21:41:49',NULL),(11,5,25,'25155-11',1,'2022-12-28 21:42:51','2022-12-28 21:42:51',NULL),(12,5,22,'22145-12',1,'2022-12-28 21:42:58','2022-12-28 21:42:58',NULL);
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (76,'2014_10_12_000000_create_users_table',1),(77,'2014_10_12_100000_create_password_resets_table',1),(78,'2019_08_19_000000_create_failed_jobs_table',1),(79,'2019_12_14_000001_create_personal_access_tokens_table',1),(80,'2022_12_26_151135_create_productos_table',1),(81,'2022_12_27_124600_create_compras_table',1),(82,'2022_12_27_173951_create_facturas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `impuesto` double NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Camara',123.45,5,'image/productos/camara.png',5,'2022-12-28 01:12:40',NULL),(2,'Camisa Wrangler',45.65,15,'image/productos/camisaWrangler.png',15,'2022-12-28 01:12:40',NULL),(3,'Cartera Mujer',39.73,12,'image/productos/carteraMujer.png',12,'2022-12-28 01:12:40',NULL),(4,'Correa Militar',13,8,'image/productos/correaMilitar.png',8,'2022-12-28 01:12:40',NULL),(5,'Falda',59.35,10,'image/productos/falda.png',10,'2022-12-28 01:12:40',NULL),(6,'Gorra Leones',25.12,7,'image/productos/gorraLeones.png',7,'2022-12-28 01:12:40',NULL),(7,'Laptop',320,45,'image/productos/laptop.png',9,'2022-12-28 01:12:40',NULL),(8,'Lentes de Sol',13,4,'image/productos/lentesSol.png',4,'2022-12-28 01:12:40',NULL),(9,'Medias Tobilleras',6,4,'image/productos/mediasTobilleras.png',4,'2022-12-28 01:12:40',NULL),(10,'Pantalón Levis',55,12,'image/productos/pantalonLevis.png',12,'2022-12-28 01:12:40',NULL),(11,'PS5',889,51,'image/productos/ps5.png',15,'2022-12-28 01:12:40',NULL),(12,'Reloj Militar ',78,16,'image/productos/relojMilitar.png',16,'2022-12-28 01:12:40',NULL),(13,'Teléfono Poco',189,26,'image/productos/telefonoPoco.png',10,'2022-12-28 01:12:40',NULL),(14,'TV',689,35,'image/productos/tv.png',10,'2022-12-28 01:12:40',NULL),(15,'Zapatos Nike',175,28,'image/productos/zapatoNike.png',10,'2022-12-28 01:12:40',NULL),(16,'Casco',25,18,'image/productos/Zg141mf7On3GA2BMKDGyOQYSYGGzu9R4cdWD55CZ.png',12,'2022-12-28 06:15:25','2022-12-28 06:15:25');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_usuario` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Oswaldo Jiménez','oswaldojimenez293@gmail.com','2022-12-28 01:12:40','$2y$10$mWfMfocnq0mryphk3ymzZ.yrw8vi9Z75JeMqyU/kimNs/eejOo8mq',NULL,1,1,'2022-12-28 01:12:40',NULL),(2,'Dayana Amaya','dayanaamaya2517@gmail.com','2022-12-28 01:12:40','$2y$10$5g/8Elv4emg3AwMTbcSBOOU6NckQAQ60iyUgVKYCEQftdLtNE0kBW',NULL,0,1,'2022-12-28 01:12:40',NULL),(3,'Antonio Agapito','antonioagapito@gmail.com','2022-12-28 01:12:40','$2y$10$Iz2LPEmCl.uThehFU2qZleNd7wLPL4ZhCQ8MNVKoggOmhxqZrbR9q',NULL,0,1,'2022-12-28 01:12:40',NULL),(4,'Solanye del Carmen','solanyedelcarmen3@gmail.com','2022-12-28 01:12:40','$2y$10$nSSjtBM4ZKroApZJX8VSWO4gfhl2.oShrd9RJ4ipmEVLowfFnhomC',NULL,0,1,'2022-12-28 01:12:40',NULL),(5,'Darwin Perez','darwinperez@gmail.com','2022-12-28 01:12:40','$2y$10$LFPnE5fWE8OfsbEyZfgDyu.k41QwClxH92IHBVjm2unTctIGnXPAS',NULL,0,1,'2022-12-28 01:12:40',NULL);
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

-- Dump completed on 2022-12-28 18:19:44
