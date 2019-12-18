-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: digitalBurger_db
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.10.1

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
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Especiales'),(2,'Clásicas'),(3,'De Autor'),(4,'Veggies'),(5,'Bebidas');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'Afganistán'),(2,'Albania'),(3,'Alemania'),(4,'Andorra'),(5,'Angola'),(6,'Antigua y Barbuda'),(7,'Arabia Saudita'),(8,'Argelia'),(9,'Argentina'),(10,'Armenia'),(11,'Australia'),(12,'Austria'),(13,'Azerbaiyán'),(14,'Bahamas'),(15,'Bangladés'),(16,'Barbados'),(17,'Baréin'),(18,'Bélgica'),(19,'Belice'),(20,'Benín'),(21,'Bielorrusia'),(22,'Birmania'),(23,'Bolivia'),(24,'Bosnia y Herzegovina'),(25,'Botsuana'),(26,'Brasil'),(27,'Brunéi'),(28,'Bulgaria'),(29,'Burkina Faso'),(30,'Burundi'),(31,'Bután'),(32,'Cabo Verde'),(33,'Camboya'),(34,'Camerún'),(35,'Canadá'),(36,'Catar'),(37,'Chad'),(38,'Chile'),(39,'China'),(40,'Chipre'),(41,'Ciudad del Vaticano'),(42,'Colombia'),(43,'Comoras'),(44,'Corea del Norte'),(45,'Corea del Sur('),(46,')Costa de Marfil'),(47,'Costa Rica'),(48,'Croacia'),(49,'Cuba'),(50,'Dinamarca'),(51,'Dominica'),(52,'Ecuador'),(53,'Egipto'),(54,'El Salvador'),(55,'Emiratos Árabes Unidos'),(56,'Eritrea'),(57,'Eslovaquia'),(58,'Eslovenia'),(59,'España'),(60,'Estados Unidos'),(61,'Estonia'),(62,'Etiopía'),(63,'Filipinas'),(64,'Finlandia'),(65,'Fiyi'),(66,'Francia'),(67,'Gabón'),(68,'Gambia'),(69,'Georgia'),(70,'Ghana'),(71,'Granada'),(72,'Grecia'),(73,'Guatemala'),(74,'Guyana'),(75,'Guinea'),(76,'Guinea ecuatorial'),(77,'Guinea-Bisáu'),(78,'Haití'),(79,'Honduras'),(80,'Hungría'),(81,'India'),(82,'Indonesia'),(83,'Irak'),(84,'Irán'),(85,'Irlanda'),(86,'Islandia'),(87,'Islas Marshall'),(88,'Islas Salomón'),(89,'Israel'),(90,'Italia'),(91,'Jamaica'),(92,'Japón'),(93,'Jordania'),(94,'Kazajistán'),(95,'Kenia'),(96,'Kirguistán'),(97,'Kiribati'),(98,'Kuwait'),(99,'Laos'),(100,'Lesoto'),(101,'Letonia'),(102,'Líbano'),(103,'Liberia'),(104,'Libia'),(105,'Liechtenstein'),(106,'Lituania'),(107,'Luxemburgo'),(108,'Madagascar'),(109,'Malasia'),(110,'Malaui'),(111,'Maldivas'),(112,'Malí'),(113,'Malta'),(114,'Marruecos'),(115,'Mauricio'),(116,'Mauritania'),(117,'México'),(118,'Micronesia'),(119,'Moldavia'),(120,'Mónaco'),(121,'Mongolia'),(122,'Montenegro'),(123,'Mozambique'),(124,'Namibia'),(125,'Nauru'),(126,'Nepal'),(127,'Nicaragua'),(128,'Níger'),(129,'Nigeria'),(130,'Noruega'),(131,'Nueva Zelanda'),(132,'Omán'),(133,'Países Bajos'),(134,'Pakistán'),(135,'Palaos'),(136,'Panamá'),(137,'Papúa Nueva Guinea'),(138,'Paraguay'),(139,'Perú'),(140,'Polonia'),(141,'Portugal'),(142,'Reino Unido'),(143,'República Centroafricana'),(144,'República Checa'),(145,'República de Macedonia'),(146,'República del Congo'),(147,'República Dominicana'),(148,'República Sudafricana'),(149,'Ruanda'),(150,'Rumania'),(151,'Rusia'),(152,'Samoa'),(153,'San Marino'),(154,'Santa Lucía'),(155,'Santo Tomé y Príncipe'),(156,'Senegal'),(157,'Serbia'),(158,'Seychelles'),(159,'Sierra Leona'),(160,'Singapur'),(161,'Siria'),(162,'Somalia'),(163,'Sri Lanka'),(164,'Suazilandia'),(165,'Sudán'),(166,'Sudán del Sur'),(167,'Suecia'),(168,'Suiza'),(169,'Surinam'),(170,'Tailandia'),(171,'Tanzania'),(172,'Tayikistán'),(173,'Timor Oriental'),(174,'Togo'),(175,'Tonga'),(176,'Trinidad y Tobago'),(177,'Túnez'),(178,'Turkmenistán'),(179,'Turquía'),(180,'Tuvalu'),(181,'Ucrania'),(182,'Uganda'),(183,'Uruguay'),(184,'Uzbekistán'),(185,'Vanuatu'),(186,'Venezuela'),(187,'Vietnam'),(188,'Yemen'),(189,'Yibuti'),(190,'Zambia'),(191,'Zimbabue');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (3,'Veganus',280,10,365,NULL,4,'B3GDpi0xA6wHUDivPC0mq3UNn0Mxh5wG27hyZKDD.jpeg','QUINOA Y SEMILLAS / HAMBURGUESA DE QUINOA Y SELECCIÓN DE SEMILLAS, CON QUESO A ELECCIÓN LECHUGA Y TOMATES FRESCOS!'),(4,'Queso',290,5,465,NULL,2,'s0U6bRDljMV2mgonIO2bqWVbYuXhSspnQ4Cpk0Q4.jpeg','QUESO / HAMBURGUESA CASERA CON QUESO CHEDDAR, LECHUGA, TOMATE Y PEPINOS CASEROS EN VINAGRE.'),(5,'Panceta y Cheddar',385,10,800,NULL,1,'n2yekkJ5hdDvaKU7662KW7Y6uBF6lRHR3IfzT8SN.jpeg','COMPLETA / HAMBURGUESA CASERA CON PANCETA, QUESO CHEDDAR, CEBOLLA CARAMELIZADA, LECHUGA, TOMATE Y PEPINOS.'),(6,'De Cordero',520,5,477,NULL,1,'jcFtRr3ImuqP3q1Bc3LKibV71i02J3qZHYSMsyru.jpeg','CORDERO / HAMBURGUESA DE CORDERO CON CHUTNEY DE PERA CASERO, RÚCULA Y TOMATES SECOS!');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mateo','mateo@mateo.com',NULL,'$2y$10$VxqHulSUhmmclwa7quuVsOghRhdftqNveOp.X5wHUByP8/fd.BFhO',NULL,'2019-12-03 03:12:43','2019-12-03 03:12:43',NULL),(2,'juan','juan@perez.com',NULL,'$2y$10$woZ6JCOPBVboJFwmGmOL1OYHszKrRaANQVN.k.Xo4ACCHKCrK26Ly',NULL,'2019-12-11 20:53:46','2019-12-11 20:53:46',NULL),(3,'seba','seba@seba.com',NULL,'$2y$10$Sx3oWKrLXhEABx6oi4hHbO.f0Jbl1H9SeKAypzpUIAkIHomGgdBi2','adXYMmCWYLFTrOwWmAT9tGjjqUi9dJb7LBc1kYSDXPWfbyWVouxK88NWxjvw','2019-12-11 21:45:07','2019-12-11 21:45:07',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-18 18:37:39
