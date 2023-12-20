-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: localhost    Database: presupuesto
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `ante_proyecto_plan_presupuesto`
--

DROP TABLE IF EXISTS `ante_proyecto_plan_presupuesto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ante_proyecto_plan_presupuesto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` date NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_revision` date NOT NULL,
  `fecha_validacion` date NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ante_proyecto_plan_presupuesto`
--

LOCK TABLES `ante_proyecto_plan_presupuesto` WRITE;
/*!40000 ALTER TABLE `ante_proyecto_plan_presupuesto` DISABLE KEYS */;
/*!40000 ALTER TABLE `ante_proyecto_plan_presupuesto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20230611213510','2023-06-11 21:35:14',1107),('DoctrineMigrations\\Version20230611234858','2023-06-11 23:49:10',1877),('DoctrineMigrations\\Version20230611235109','2023-06-11 23:51:17',1404),('DoctrineMigrations\\Version20230710032458','2023-07-10 03:25:13',3585),('DoctrineMigrations\\Version20230710135303','2023-07-10 13:53:10',1437),('DoctrineMigrations\\Version20230710135950','2023-07-10 13:59:56',2409),('DoctrineMigrations\\Version20230710141111','2023-07-10 14:11:18',479),('DoctrineMigrations\\Version20230710150406','2023-07-10 15:04:16',727),('DoctrineMigrations\\Version20230710163735','2023-07-10 16:37:50',3074),('DoctrineMigrations\\Version20230711030338','2023-07-11 03:03:53',33143),('DoctrineMigrations\\Version20230711033555','2023-07-11 03:36:31',42286),('DoctrineMigrations\\Version20230711035638','2023-07-11 03:56:46',7659),('DoctrineMigrations\\Version20230717225241','2023-07-17 22:52:55',922),('DoctrineMigrations\\Version20230718001016','2023-07-18 00:10:21',362),('DoctrineMigrations\\Version20230718001235','2023-07-18 00:13:44',133),('DoctrineMigrations\\Version20230825183639','2023-08-25 18:36:52',1338),('DoctrineMigrations\\Version20230825195311','2023-08-25 19:53:21',1057);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entidad`
--

DROP TABLE IF EXISTS `entidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_entidad_id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `centro_costo` int(11) NOT NULL,
  `demanda` tinyint(1) NOT NULL,
  `modelo_nivel_actividad` tinyint(1) NOT NULL,
  `modelo_colaboracion_internacional_activos_fijos` tinyint(1) NOT NULL,
  `modelo_colaboracion_internacional_medios_transportes` tinyint(1) NOT NULL,
  `modelo_colaboracion_internacional_proyectos` tinyint(1) NOT NULL,
  `modelo_defensa_seguridad_proteccion` tinyint(1) NOT NULL,
  `modelo_dinamica_demografica` tinyint(1) NOT NULL,
  `modelo_inversiones` tinyint(1) NOT NULL,
  `modelo_portadores_combustible` tinyint(1) NOT NULL,
  `modelo_portadores_energia` tinyint(1) NOT NULL,
  `modelo_portadores_servicios` tinyint(1) NOT NULL,
  `modelo_sector_externo` tinyint(1) NOT NULL,
  `modelo_transporte` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4587B0CBFD2406C7` (`tipo_entidad_id`),
  CONSTRAINT `FK_4587B0CBFD2406C7` FOREIGN KEY (`tipo_entidad_id`) REFERENCES `tipo_entidad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entidad`
--

LOCK TABLES `entidad` WRITE;
/*!40000 ALTER TABLE `entidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `entidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_colaboracion_internacional_activos_fijos`
--

DROP TABLE IF EXISTS `modelo_colaboracion_internacional_activos_fijos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_colaboracion_internacional_activos_fijos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B45A313911914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_B45A31396CA204EF` (`entidad_id`),
  KEY `IDX_B45A31399F5A440B` (`estado_id`),
  KEY `IDX_B45A31397001B108` (`user_registra_id`),
  KEY `IDX_B45A31396CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_B45A313911914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_B45A31396CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_B45A31396CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_B45A31397001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_B45A31399F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_colaboracion_internacional_activos_fijos`
--

LOCK TABLES `modelo_colaboracion_internacional_activos_fijos` WRITE;
/*!40000 ALTER TABLE `modelo_colaboracion_internacional_activos_fijos` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_colaboracion_internacional_activos_fijos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_colaboracion_internacional_medios_transportes`
--

DROP TABLE IF EXISTS `modelo_colaboracion_internacional_medios_transportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_colaboracion_internacional_medios_transportes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AF243E8811914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_AF243E886CA204EF` (`entidad_id`),
  KEY `IDX_AF243E889F5A440B` (`estado_id`),
  KEY `IDX_AF243E887001B108` (`user_registra_id`),
  KEY `IDX_AF243E886CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_AF243E8811914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_AF243E886CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_AF243E886CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_AF243E887001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_AF243E889F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_colaboracion_internacional_medios_transportes`
--

LOCK TABLES `modelo_colaboracion_internacional_medios_transportes` WRITE;
/*!40000 ALTER TABLE `modelo_colaboracion_internacional_medios_transportes` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_colaboracion_internacional_medios_transportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_colaboracion_internacional_proyectos`
--

DROP TABLE IF EXISTS `modelo_colaboracion_internacional_proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_colaboracion_internacional_proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F4C9D4E11914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_F4C9D4E6CA204EF` (`entidad_id`),
  KEY `IDX_F4C9D4E9F5A440B` (`estado_id`),
  KEY `IDX_F4C9D4E7001B108` (`user_registra_id`),
  KEY `IDX_F4C9D4E6CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_F4C9D4E11914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_F4C9D4E6CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_F4C9D4E6CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_F4C9D4E7001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_F4C9D4E9F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_colaboracion_internacional_proyectos`
--

LOCK TABLES `modelo_colaboracion_internacional_proyectos` WRITE;
/*!40000 ALTER TABLE `modelo_colaboracion_internacional_proyectos` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_colaboracion_internacional_proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_defensa_seguridad_proteccion`
--

DROP TABLE IF EXISTS `modelo_defensa_seguridad_proteccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_defensa_seguridad_proteccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C2F3D39A11914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_C2F3D39A6CA204EF` (`entidad_id`),
  KEY `IDX_C2F3D39A9F5A440B` (`estado_id`),
  KEY `IDX_C2F3D39A7001B108` (`user_registra_id`),
  KEY `IDX_C2F3D39A6CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_C2F3D39A11914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_C2F3D39A6CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_C2F3D39A6CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_C2F3D39A7001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_C2F3D39A9F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_defensa_seguridad_proteccion`
--

LOCK TABLES `modelo_defensa_seguridad_proteccion` WRITE;
/*!40000 ALTER TABLE `modelo_defensa_seguridad_proteccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_defensa_seguridad_proteccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_dinamica_demografica`
--

DROP TABLE IF EXISTS `modelo_dinamica_demografica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_dinamica_demografica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E0CD825211914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_E0CD82526CA204EF` (`entidad_id`),
  KEY `IDX_E0CD82529F5A440B` (`estado_id`),
  KEY `IDX_E0CD82527001B108` (`user_registra_id`),
  KEY `IDX_E0CD82526CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_E0CD825211914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_E0CD82526CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_E0CD82526CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_E0CD82527001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_E0CD82529F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_dinamica_demografica`
--

LOCK TABLES `modelo_dinamica_demografica` WRITE;
/*!40000 ALTER TABLE `modelo_dinamica_demografica` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_dinamica_demografica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_inversiones`
--

DROP TABLE IF EXISTS `modelo_inversiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_inversiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fceha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F67DDFE311914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_F67DDFE36CA204EF` (`entidad_id`),
  KEY `IDX_F67DDFE39F5A440B` (`estado_id`),
  KEY `IDX_F67DDFE37001B108` (`user_registra_id`),
  KEY `IDX_F67DDFE36CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_F67DDFE311914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_F67DDFE36CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_F67DDFE36CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_F67DDFE37001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_F67DDFE39F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_inversiones`
--

LOCK TABLES `modelo_inversiones` WRITE;
/*!40000 ALTER TABLE `modelo_inversiones` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_inversiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_inversiones_apertura`
--

DROP TABLE IF EXISTS `modelo_inversiones_apertura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_inversiones_apertura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo_inversiones_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_63C982FAE5F17F6E` (`modelo_inversiones_id`),
  KEY `IDX_63C982FA7001B108` (`user_registra_id`),
  KEY `IDX_63C982FA6CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_63C982FA6CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_63C982FA7001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_63C982FAE5F17F6E` FOREIGN KEY (`modelo_inversiones_id`) REFERENCES `modelo_inversiones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_inversiones_apertura`
--

LOCK TABLES `modelo_inversiones_apertura` WRITE;
/*!40000 ALTER TABLE `modelo_inversiones_apertura` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_inversiones_apertura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_nivel_actividad`
--

DROP TABLE IF EXISTS `modelo_nivel_actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_nivel_actividad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `matricula_diurno` int(11) NOT NULL,
  `matricula_preparatoria` int(11) NOT NULL,
  `matricula_encuentro` int(11) NOT NULL,
  `matricula_distancia` int(11) NOT NULL,
  `matricula_ciclo_corto` int(11) NOT NULL,
  `nuevo_ingreso_diurno` int(11) NOT NULL,
  `nuevo_ingreso_encuentro` int(11) NOT NULL,
  `nuevo_ingreso_distancia` int(11) NOT NULL,
  `nuevo_ingreso_ciclo_corto` int(11) NOT NULL,
  `becados_mujeres` int(11) NOT NULL,
  `becados_cubanos` int(11) NOT NULL,
  `becados_cubanos_mujeres` int(11) NOT NULL,
  `becados_extranjeros` int(11) NOT NULL,
  `becados_extranjeros_mujeres` int(11) NOT NULL,
  `seminternos` int(11) NOT NULL,
  `graduados_diurnos` int(11) NOT NULL,
  `graduados_encuentro` int(11) NOT NULL,
  `graduados_distancia` int(11) NOT NULL,
  `graduados_ciclo_corto` int(11) NOT NULL,
  `profesores_plantilla` int(11) NOT NULL,
  `profesores_contratados` int(11) NOT NULL,
  `investigadores` int(11) NOT NULL,
  `trabajadores_plantilla` int(11) NOT NULL,
  `trabajadores_contratados` int(11) NOT NULL,
  `trabajadores_sustitucion` int(11) NOT NULL,
  `adiestrados_nivel_superior` int(11) NOT NULL,
  `adiestrados_nivel_medio` int(11) NOT NULL,
  `eficiencia_vertical` int(11) NOT NULL,
  `eficiencia_limpia` int(11) NOT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `matricula_total` int(11) NOT NULL,
  `nuevo_ingreso_total` int(11) NOT NULL,
  `becados_total` int(11) NOT NULL,
  `graduados_total` int(11) NOT NULL,
  `profesores_total` int(11) NOT NULL,
  `trabajadores_total` int(11) NOT NULL,
  `adiestrados_total` int(11) NOT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_550BA51211914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_550BA5126CA204EF` (`entidad_id`),
  KEY `IDX_550BA5129F5A440B` (`estado_id`),
  KEY `IDX_550BA5127001B108` (`user_registra_id`),
  KEY `IDX_550BA5126CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_550BA51211914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_550BA5126CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_550BA5126CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_550BA5127001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_550BA5129F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_nivel_actividad`
--

LOCK TABLES `modelo_nivel_actividad` WRITE;
/*!40000 ALTER TABLE `modelo_nivel_actividad` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_nivel_actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_portadores_combustible`
--

DROP TABLE IF EXISTS `modelo_portadores_combustible`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_portadores_combustible` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F32C80B11914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_1F32C80B6CA204EF` (`entidad_id`),
  KEY `IDX_1F32C80B9F5A440B` (`estado_id`),
  KEY `IDX_1F32C80B7001B108` (`user_registra_id`),
  KEY `IDX_1F32C80B6CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_1F32C80B11914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_1F32C80B6CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_1F32C80B6CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_1F32C80B7001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_1F32C80B9F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_portadores_combustible`
--

LOCK TABLES `modelo_portadores_combustible` WRITE;
/*!40000 ALTER TABLE `modelo_portadores_combustible` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_portadores_combustible` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_portadores_energia`
--

DROP TABLE IF EXISTS `modelo_portadores_energia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_portadores_energia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FE30C45611914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_FE30C4566CA204EF` (`entidad_id`),
  KEY `IDX_FE30C4569F5A440B` (`estado_id`),
  KEY `IDX_FE30C4567001B108` (`user_registra_id`),
  KEY `IDX_FE30C4566CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_FE30C45611914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_FE30C4566CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_FE30C4566CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_FE30C4567001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_FE30C4569F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_portadores_energia`
--

LOCK TABLES `modelo_portadores_energia` WRITE;
/*!40000 ALTER TABLE `modelo_portadores_energia` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_portadores_energia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_portadores_servicios`
--

DROP TABLE IF EXISTS `modelo_portadores_servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_portadores_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7F9E8F1C6CA204EF` (`entidad_id`),
  KEY `IDX_7F9E8F1C9F5A440B` (`estado_id`),
  KEY `IDX_7F9E8F1C7001B108` (`user_registra_id`),
  KEY `IDX_7F9E8F1C6CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_7F9E8F1C6CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_7F9E8F1C6CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_7F9E8F1C7001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_7F9E8F1C9F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_portadores_servicios`
--

LOCK TABLES `modelo_portadores_servicios` WRITE;
/*!40000 ALTER TABLE `modelo_portadores_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_portadores_servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_sector_externo`
--

DROP TABLE IF EXISTS `modelo_sector_externo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_sector_externo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exportaciones_total` int(11) NOT NULL,
  `exportaciones_bienes` int(11) NOT NULL,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7AFC717911914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_7AFC71796CA204EF` (`entidad_id`),
  KEY `IDX_7AFC71799F5A440B` (`estado_id`),
  KEY `IDX_7AFC71797001B108` (`user_registra_id`),
  KEY `IDX_7AFC71796CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_7AFC717911914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_7AFC71796CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_7AFC71796CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_7AFC71797001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_7AFC71799F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_sector_externo`
--

LOCK TABLES `modelo_sector_externo` WRITE;
/*!40000 ALTER TABLE `modelo_sector_externo` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_sector_externo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_transporte`
--

DROP TABLE IF EXISTS `modelo_transporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo_transporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ante_proyecto_plan_presupuesto_id` int(11) DEFAULT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `user_registra_id` int(11) DEFAULT NULL,
  `user_valida_id` int(11) DEFAULT NULL,
  `fecha_registra` datetime DEFAULT NULL,
  `fecha_revisa` datetime DEFAULT NULL,
  `fecha_valida` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2A0A232411914CE9` (`ante_proyecto_plan_presupuesto_id`),
  KEY `IDX_2A0A23246CA204EF` (`entidad_id`),
  KEY `IDX_2A0A23249F5A440B` (`estado_id`),
  KEY `IDX_2A0A23247001B108` (`user_registra_id`),
  KEY `IDX_2A0A23246CD4A6FA` (`user_valida_id`),
  CONSTRAINT `FK_2A0A232411914CE9` FOREIGN KEY (`ante_proyecto_plan_presupuesto_id`) REFERENCES `ante_proyecto_plan_presupuesto` (`id`),
  CONSTRAINT `FK_2A0A23246CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_2A0A23246CD4A6FA` FOREIGN KEY (`user_valida_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_2A0A23247001B108` FOREIGN KEY (`user_registra_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_2A0A23249F5A440B` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_transporte`
--

LOCK TABLES `modelo_transporte` WRITE;
/*!40000 ALTER TABLE `modelo_transporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelo_transporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel_acceso`
--

DROP TABLE IF EXISTS `nivel_acceso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nivel_acceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel_acceso`
--

LOCK TABLES `nivel_acceso` WRITE;
/*!40000 ALTER TABLE `nivel_acceso` DISABLE KEYS */;
/*!40000 ALTER TABLE `nivel_acceso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_entidad`
--

DROP TABLE IF EXISTS `tipo_entidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_entidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_entidad`
--

LOCK TABLES `tipo_entidad` WRITE;
/*!40000 ALTER TABLE `tipo_entidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_entidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entidad_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `nivel_acceso_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  KEY `IDX_8D93D6496CA204EF` (`entidad_id`),
  KEY `IDX_8D93D649813AC380` (`cargo_id`),
  KEY `IDX_8D93D6495108D425` (`nivel_acceso_id`),
  CONSTRAINT `FK_8D93D6495108D425` FOREIGN KEY (`nivel_acceso_id`) REFERENCES `nivel_acceso` (`id`),
  CONSTRAINT `FK_8D93D6496CA204EF` FOREIGN KEY (`entidad_id`) REFERENCES `entidad` (`id`),
  CONSTRAINT `FK_8D93D649813AC380` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'system','[\"ROLE_ADMIN\"]','$2y$13$juKaFDJAeyKXchu62WF3xuQRsmAfEFHWDhxMs1fGyJ0ZKdNjJ7c9W',NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-25 17:20:18
