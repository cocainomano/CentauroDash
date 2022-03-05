-- MySQL dump 10.13  Distrib 8.0.28, for macos12.0 (x86_64)
--
-- Host: localhost    Database: dashboard
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `franquicias`
--

DROP TABLE IF EXISTS `franquicias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `franquicias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idSucursal` bigint unsigned NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NombreCve` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RFC` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RazonSocial` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Calle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Colonia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ciudad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Municipio` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CP` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Celular` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WhatsApp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Banco` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumTarjeta` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CLABE` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `franquicias_idsucursal_foreign` (`idSucursal`),
  CONSTRAINT `franquicias_idsucursal_foreign` FOREIGN KEY (`idSucursal`) REFERENCES `sucursals` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `franquicias`
--

LOCK TABLES `franquicias` WRITE;
/*!40000 ALTER TABLE `franquicias` DISABLE KEYS */;
INSERT INTO `franquicias` VALUES (1,11,'LA PAZ','BCS_LA_PAZ','BCPZ020322-CHV','Franquicia La Paz','Betunias',NULL,NULL,NULL,NULL,NULL,'franquicia_lapaz@centauro.biz',NULL,NULL,NULL,NULL,NULL,2,'2022-03-03 06:35:11','2022-03-03 07:28:06'),(3,11,'Los Cabos','BCS_CABOS','CABS020322_CHV','FRANQUICIA LOS CABOS',NULL,NULL,NULL,NULL,NULL,NULL,'loscabos@centauro.biz',NULL,NULL,NULL,NULL,NULL,2,'2022-03-03 07:29:18','2022-03-03 07:29:18'),(5,1,'Centauro Nacional','CNTNAL',NULL,'Centauro Nacional',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2022-03-03 08:35:10','2022-03-03 08:35:10'),(6,1,'Centauro Estatal','CenEstatal','CENEst','Centauro Estatal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'2022-03-03 08:35:50','2022-03-03 08:35:50');
/*!40000 ALTER TABLE `franquicias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `franquicitarios`
--

DROP TABLE IF EXISTS `franquicitarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `franquicitarios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idSucursal` bigint unsigned NOT NULL,
  `idFranquicia` bigint unsigned NOT NULL,
  `idUser` bigint unsigned NOT NULL,
  `Utilidad` double(8,2) DEFAULT NULL,
  `Created_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `franquicitarios_idsucursal_foreign` (`idSucursal`),
  KEY `franquicitarios_idfranquicia_foreign` (`idFranquicia`),
  KEY `franquicitarios_iduser_foreign` (`idUser`),
  CONSTRAINT `franquicitarios_idfranquicia_foreign` FOREIGN KEY (`idFranquicia`) REFERENCES `franquicias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `franquicitarios_idsucursal_foreign` FOREIGN KEY (`idSucursal`) REFERENCES `sucursals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `franquicitarios_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `franquicitarios`
--

LOCK TABLES `franquicitarios` WRITE;
/*!40000 ALTER TABLE `franquicitarios` DISABLE KEYS */;
INSERT INTO `franquicitarios` VALUES (1,1,6,2,20.00,2,'2022-03-03 23:34:16','2022-03-03 23:34:16'),(3,1,5,1,20.00,2,'2022-03-03 23:35:48','2022-03-04 00:04:49'),(4,1,6,3,40.00,2,'2022-03-03 23:52:41','2022-03-04 00:03:58'),(5,11,1,4,100.00,2,'2022-03-03 23:52:56','2022-03-03 23:52:56'),(7,11,3,7,50.00,2,'2022-03-04 00:17:30','2022-03-04 00:17:30'),(8,11,3,6,30.00,2,'2022-03-04 05:36:41','2022-03-04 05:36:41'),(12,11,3,4,10.00,2,'2022-03-04 05:52:47','2022-03-04 05:52:47'),(15,11,3,2,9.00,2,'2022-03-04 06:43:17','2022-03-04 06:43:17');
/*!40000 ALTER TABLE `franquicitarios` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2020_11_03_103054_create_sessions_table',1),(7,'2022_03_01_022859_proveedors',2),(8,'2022_03_01_023024_portafolios',2),(9,'2022_03_01_200153_sucursals',3),(10,'2022_03_01_223218_add__edo_sucursals',4),(11,'2022_03_02_014154_socios',5),(12,'2022_03_02_171221_franquicias',6),(14,'2022_03_02_193948_franquicitarios',7),(15,'2022_03_04_013212_tarificador_sucursals',8);
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
-- Table structure for table `portafolios`
--

DROP TABLE IF EXISTS `portafolios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portafolios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idProveedor` bigint unsigned NOT NULL,
  `NombreProducto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NombreCve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `Condiciones` longtext COLLATE utf8mb4_unicode_ci,
  `Costo_Proveedor` double(8,2) DEFAULT NULL,
  `Venta_Centauro` double(8,2) DEFAULT NULL,
  `Utilidad_Centauro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `portafolios_idproveedor_foreign` (`idProveedor`),
  CONSTRAINT `portafolios_idproveedor_foreign` FOREIGN KEY (`idProveedor`) REFERENCES `proveedors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portafolios`
--

LOCK TABLES `portafolios` WRITE;
/*!40000 ALTER TABLE `portafolios` DISABLE KEYS */;
INSERT INTO `portafolios` VALUES (1,1,'Emisión del CFDI I flujo de efectivo I Persona moral o física','CDFI Efectivo','OPCIÓN 1: EMISIÓN DE CFDI > SIN FLUJO DE EFECTIVO\r\nEl cliente solicita la emisión del CFDI, sin flujo de efectivo, llenando el formato correspondiente e indica si es para persona moral o física.\r\nCentauro envía el CFDI sin timbrar para su validación y monto de comisión que debe pagar el cliente.\r\nCentauro genera el CFDI timbrado y  lo envía al cliente.\r\nEl cliente valida el CFDI y transfiere el monto de la comisión pactada a la cuenta de Centauro.\r\nEl cliente confirma de recibido y se da por concluida la operación\r\n\r\nOPCIÓN 2: EMISIÓN DE CFDI > CON FLUJO DE EFECTIVO\r\n\r\nEl cliente solicita la emisión del CFDI, con flujo de efectivo, llenando el formato correspondiente e indica si es para persona moral o física.\r\nCentauro envía el CFDI sin timbrar para su validación y monto de comisión que debe pagar el cliente.\r\nEl cliente valida el CFDI.\r\nCentauro genera el CFDI timbrado y  lo envía al cliente.\r\nEl cliente transfiere el monto total de la factura a la cuenta que se le indique y gira instrucciones para su retorno.\r\nCentauro realiza el retorno a la/s cuenta/s del cliente, conforme a las instrucciones recibidas.\r\nEl cliente confirma de recibido y se da por concluida la operación.','Si se requieren herramientas adicionales para administrar recursos, contamos con cuentas blindadas y tarjetas no nominativas, sin limite de flujos, con costo preferencial.',1.00,1.50,'0.50','2022-03-02 00:54:29','2022-03-02 06:12:26'),(4,3,'Diseño Web','Web','Diseño web para todos','Pago en una sola exhibición',2.00,4.00,'2','2022-03-04 09:03:55','2022-03-04 09:03:55');
/*!40000 ALTER TABLE `portafolios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedors`
--

DROP TABLE IF EXISTS `proveedors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NombreCve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Celular` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WhatsApp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Banco` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumTarjeta` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CLABE` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedors`
--

LOCK TABLES `proveedors` WRITE;
/*!40000 ALTER TABLE `proveedors` DISABLE KEYS */;
INSERT INTO `proveedors` VALUES (1,'Juan Carlos Lugo','Lugo','lugo@lugo.com','5534130640','5534130640','Banamex','1234123456785678','87878787687',1,NULL,NULL),(3,'Salvador Hernandez','Chavis','sh@iq-zone.com','7221312997','7221312997','Inburss','98989989898989','89898989898989898',2,'2022-03-01 10:54:23','2022-03-01 21:43:16');
/*!40000 ALTER TABLE `proveedors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('rGce8bATK1oibcxlK4emcMFfQ3yXT2NeyhlT5E2j',2,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVnVMN0RxTHlnUlhwMmF2OXpHb3llS0loR2pwemo0S2NDUGxPMWFZTCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFlKYlRBUERyZlYzWXM0QzVnNzV2dU9zNEJjby4uZlVETUpsa1NodVdiWDAwdDNBYkhVYk1HIjtzOjY6ImxheW91dCI7czo3OiJkZWZhdWx0IjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0ODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL1RhcmlmaWNhZG9yU3VjdXJzYWwvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1646429267),('zDCAeMGw2h8wADVPXmzEdmEsPfTB5nFlNAevvmD4',2,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSjZLVEpCVEtCeHNnZVhOdEhpd0JMZG5BeEJaZDdEbFRVOEdQcUZ4QSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFlKYlRBUERyZlYzWXM0QzVnNzV2dU9zNEJjby4uZlVETUpsa1NodVdiWDAwdDNBYkhVYk1HIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0ODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL1RhcmlmaWNhZG9yU3VjdXJzYWwvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJsYXlvdXQiO3M6NzoiZGVmYXVsdCI7fQ==',1646444419);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socios`
--

DROP TABLE IF EXISTS `socios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `socios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idSucursal` bigint unsigned NOT NULL,
  `idUser` bigint unsigned NOT NULL,
  `Participacion` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `socios_idsucursal_foreign` (`idSucursal`),
  KEY `socios_iduser_foreign` (`idUser`),
  CONSTRAINT `socios_idsucursal_foreign` FOREIGN KEY (`idSucursal`) REFERENCES `sucursals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `socios_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socios`
--

LOCK TABLES `socios` WRITE;
/*!40000 ALTER TABLE `socios` DISABLE KEYS */;
INSERT INTO `socios` VALUES (1,1,4,50.00,'2022-03-02 08:27:58','2022-03-02 23:04:03');
/*!40000 ALTER TABLE `socios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursals`
--

DROP TABLE IF EXISTS `sucursals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ubicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NombreCve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RFC` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RazonSocial` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Calle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Colonia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ciudad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Municipio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CP` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Celular` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WhatsApp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Banco` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumTarjeta` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CLABE` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursals`
--

LOCK TABLES `sucursals` WRITE;
/*!40000 ALTER TABLE `sucursals` DISABLE KEYS */;
INSERT INTO `sucursals` VALUES (1,'CENTAURO','Ciudad de México','CENTAURO','CENT012278LTB','Centauro S.A de C.V','Residencial Palmas Hills - Interlomas','Interlomas','Interlomas','Naucalpan','Estado de México','06829','centauro@centauro.biz','(55) 2662 9045','(55) 2662 9045','Banamex','4562788920000','8877665557772812',2,'2022-03-02 05:06:50','2022-03-02 05:54:05'),(11,'Baja California Sur','Baja California Sur','SUC_BCS','BJA010321-SUC','Baja California Sur',NULL,NULL,NULL,NULL,NULL,NULL,'SUC_BCS@centauro.biz',NULL,NULL,NULL,NULL,NULL,2,'2022-03-02 06:16:11','2022-03-02 06:16:11');
/*!40000 ALTER TABLE `sucursals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TarificadorSucursals`
--

DROP TABLE IF EXISTS `TarificadorSucursals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TarificadorSucursals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idPortafolio` bigint unsigned NOT NULL,
  `idSucursal` bigint unsigned NOT NULL,
  `CostoCentauro` double(8,2) DEFAULT NULL,
  `PrecioVentaFranquicia` double(8,2) DEFAULT NULL,
  `UtilidadSucursal` double(8,2) DEFAULT NULL,
  `Created_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tarificadorsucursals_idportafolio_foreign` (`idPortafolio`),
  KEY `tarificadorsucursals_idsucursal_foreign` (`idSucursal`),
  CONSTRAINT `tarificadorsucursals_idportafolio_foreign` FOREIGN KEY (`idPortafolio`) REFERENCES `portafolios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tarificadorsucursals_idsucursal_foreign` FOREIGN KEY (`idSucursal`) REFERENCES `sucursals` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TarificadorSucursals`
--

LOCK TABLES `TarificadorSucursals` WRITE;
/*!40000 ALTER TABLE `TarificadorSucursals` DISABLE KEYS */;
INSERT INTO `TarificadorSucursals` VALUES (1,1,1,0.50,2.00,1.50,2,'2022-03-05 02:48:42','2022-03-05 02:48:42'),(4,1,11,0.50,8.00,7.50,2,'2022-03-05 06:46:11','2022-03-05 07:12:15');
/*!40000 ALTER TABLE `TarificadorSucursals` ENABLE KEYS */;
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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adrian Demian','contact@mosaicpro.biz',NULL,'$2y$10$4A0Xzn4Ajypqmp2hvZc1rOehbumrrFX0/7oTmwFGR8xnjS8AJFKuW',NULL,NULL,NULL,NULL,NULL,'2022-03-01 08:20:30','2022-03-01 08:20:30'),(2,'Salvador Hernandez','astro@baiaba.com',NULL,'$2y$10$YJbTAPDrfV3Ys4C5g75vuOs4Bco..fUDMJlkShuWbX00t3AbHUbMG',NULL,NULL,'ov4Jslsr1HYWd26HPmbvNOXfEGmpdwZ157hb0jUSAqfCFU0voHstIg9dwYLT',NULL,NULL,'2022-03-01 08:24:53','2022-03-01 08:24:53'),(3,'Marcelo Molina','mm@centauro.biz',NULL,'$2y$10$ixtugsvuejzVyFvjB0YrCOD6u/o/nBaMBbfE/sQ0IaYa5ylmIgC/u',NULL,NULL,NULL,NULL,NULL,'2022-03-02 08:00:27','2022-03-02 08:00:27'),(4,'Guillermo Vinatier','gv@centauro.biz',NULL,'$2y$10$JYGjJ3qErq47DM2Q1q9pmuMEmy1s2EzOtvE.fCYe2G58a/HOoBQsO',NULL,NULL,NULL,NULL,NULL,'2022-03-02 08:01:30','2022-03-02 08:01:30'),(5,'Pedro Armando Lopez Santillan','santillan@centauro.biz',NULL,'$2y$10$aCen.Ljz9wv8sDXByJRoBOb106UkQnL1VHlVuBxYM0HJ5ryBiNjE2',NULL,NULL,NULL,NULL,NULL,'2022-03-04 00:07:59','2022-03-04 00:07:59'),(6,'Romulo Jimenez','jimenez@centauro.com',NULL,'$2y$10$lkFrS5vRJBjDdwpCHmZtl.8LB8VVFxSMI9X6QfZjT0B7D/iGqUXlu',NULL,NULL,NULL,NULL,NULL,'2022-03-04 00:11:54','2022-03-04 00:11:54'),(7,'Patricia Duran','duran@centauro.biz',NULL,'$2y$10$TqMb6gtzmL29kf4nj.kIH.hVaHbk5IgNYZx/EPQQrJqSyThHo3VG.',NULL,NULL,NULL,NULL,NULL,'2022-03-04 00:12:29','2022-03-04 00:12:29'),(8,'Pablo de la Cruz','pablo@centauro.biz',NULL,'$2y$10$rwUyQ/yadjGUIqIYSucLUujqo1vhPOzi7ulWHB6FastUn7/RsMte6',NULL,NULL,NULL,NULL,NULL,'2022-03-04 00:12:54','2022-03-04 00:12:54');
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

-- Dump completed on 2022-03-04 20:37:16
