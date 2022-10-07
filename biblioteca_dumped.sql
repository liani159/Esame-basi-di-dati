CREATE DATABASE  IF NOT EXISTS `Biblioteca` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `Biblioteca`;
-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: Biblioteca
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.22.04.1

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
-- Table structure for table `AUTORI`
--

DROP TABLE IF EXISTS `AUTORI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `AUTORI` (
  `AUTORI_ID` int NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `COGNOME` varchar(50) NOT NULL,
  `DATA_NASCITA` varchar(10) DEFAULT NULL,
  `LDN` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`AUTORI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AUTORI`
--

LOCK TABLES `AUTORI` WRITE;
/*!40000 ALTER TABLE `AUTORI` DISABLE KEYS */;
INSERT INTO `AUTORI` VALUES (1,'Fiorenze','Deluca','1984-07-22','Lawrence'),(2,'Alessandro','Oldam','1972-07-09','New York'),(3,'Adamo','Ligoe','1971-03-26','New York'),(4,'Bryanty','Froud','1970-10-30','London'),(5,'Lewes','Salsberg','1988-05-18','Cumberland'),(6,'Quincey','Franke','1964-10-12','Bloomington'),(7,'Inesita','Dallender','1982-04-05','New York'),(8,'Raquel','Semered','1972-03-21','Bloomington'),(9,'Kerri','Adiscot','1980-06-28','Cumberland'),(10,'Barr','Labbet','1967-07-06','Lawrence'),(11,'Godwin','Lebbern','1983-11-16','San Diego'),(12,'Ange','Symcox','1977-07-01','Paris'),(13,'Marja','Rosedale','1989-03-25','New York'),(14,'Pincas','Paulisch','1973-12-24','Berlino'),(15,'Ami','Adamo','1978-08-10','Lawrence'),(16,'Sansone','Jansen','1968-05-12','Lawrence'),(17,'Brynn','Semor','1986-05-09','Oslo'),(18,'Merrick','Harbron','1959-11-09','Pleasantville'),(19,'Petunia','Breznovic','1981-02-19','Prague'),(20,'Enrico','Zimuel','1972-04-11','Milan'),(21,'Luciano','Gamberini','1979-11-08','Rome'),(22,'Erny','Wrixon','1967-02-25','Nashville'),(23,'Corri','Gavrieli','1974-06-30','London'),(24,'Jefferson','Dewire','1971-02-16','Cardiff'),(25,'Lavena','Capey','1972-02-17','Cumberland'),(26,'Hastings','Sweetman','1978-08-13','Los Angeles'),(27,'Cointon','Stranaghan','1963-12-30','New York'),(28,'Fanchon','Bish','1987-08-27','New York'),(29,'Ramez','Elmasri','1970-02-16','Oxford'),(30,'Shamkant','Navathe','1962-11-24','London'),(31,'Sella','Marriage','1988-12-01','Madison'),(32,'Zilvia','Silver','1958-04-25','Nashville'),(33,'Marnie','Spinke','1987-09-07','Los Angeles'),(34,'Cecile','Follacaro','1986-01-08','New York'),(35,'Theo','McLauchlin','1961-03-01','Cardiff'),(36,'Junia','Everal','1973-11-09','Los Angeles'),(37,'Lu','Jenne','1977-01-11','Seul'),(38,'Giustina','Jezzard','1969-02-04','Pleasantville'),(39,'Breanne','Weben','1989-11-13','London'),(40,'Bartolemo','Chadwin','1969-07-22','Pleasantville'),(41,'Jon','Duckett','1978-08-16','Los Angeles'),(42,'Betti','Benz','1977-08-05','Berlino'),(43,'Cristian','Pes','1981-09-10','New York'),(44,'Jermaine','Van Velde','1979-04-23','Los Angeles'),(45,'Perrine','Blagden','1984-01-04','Washington'),(46,'Bruno','Goodsall','1963-04-27','London'),(47,'Hirsch','Legging','1961-12-19','Oxford'),(48,'Walker','Dumberell','1965-12-30','London'),(49,'Shelbi','Wheelton','1987-09-12','Los Angeles'),(50,'Reta','Philippsohn','1966-10-08','Washington'),(51,'Harlene','Tartt','1984-09-20','New York'),(52,'Jodee','Westwick','1968-01-23','Liverpool'),(53,'Margaretha','Aysik','1973-03-18','Washington'),(54,'Merna','Lambal','1969-09-30','London'),(55,'Vitia','Douch','1977-08-20','London'),(56,'Chelsea','Nannetti','1973-04-14','San Diego'),(57,'Gwyneth','Tinsley','1986-05-12','Los Angeles'),(58,'Jacquenette','Snookes','1973-08-07','Lawrence'),(59,'Yancey','Sacher','1961-04-17','Lawrence'),(60,'Sim','Frondt','1967-05-20','Bloomington'),(61,'Abey','Crowest','1965-07-20','New York'),(62,'Ileane','Spurriar','1969-09-03','Los Angeles'),(63,'Andrej','Von Der Empten','1989-12-17','Amsterdam'),(64,'Beverlee','Jepensen','1976-12-17','Cumberland'),(65,'Maible','Twidale','1963-01-29','Bloomington'),(66,'Cal','Inkin','1969-11-22','Oxford'),(67,'Karie','Bendixen','1969-12-29','Amsterdam'),(68,'Jasen','Itter','1967-12-24','Madison'),(69,'Peri','Maher','1967-04-08','Wilpen'),(70,'Burk','Torr','1984-08-01','Bloomington'),(71,'Farrah','Letham','1962-07-15','Oxford'),(72,'Sandro','Wilcher','1990-09-25','Nashville'),(73,'Roxy','Burnage','1955-04-13','Oxford'),(74,'Boycie','Shorey','1989-11-20','Amsterdam'),(75,'Nicki','Pharrow','1984-09-16','Los Angeles'),(76,'Xylia','Bendle','1975-01-01','Cumberland'),(77,'Ursula','Lockitt','1967-12-14','Liverpool'),(78,'Hannah','Bachnic','1956-06-22','Madison'),(79,'Gabriella','Orum','1958-11-21','Madison'),(80,'Gregorius','McPhater','1976-12-04','Pleasantville'),(81,'Hortense','Whatson','1978-08-25','Washington'),(82,'Gil','Lettington','1974-08-11','Los Angeles'),(83,'Briant','Anespie','1989-01-01','Los Angeles'),(84,'Angil','Beckson','1956-05-01','Oxford'),(85,'Giffer','Leisman','1959-05-25','Los Angeles'),(86,'Mirelle','Hehnke','1968-06-25','Los Angeles'),(87,'Eva','Elcum','1956-02-20','Pleasantville'),(88,'Margaretta','Pardal','1970-03-08','New York'),(89,'Merissa','Senechault','1956-02-02','New York'),(90,'Leroy','Vasiltsov','1976-10-13','San Diego'),(91,'Gertrudis','Corzon','1983-06-21','Oxford'),(92,'Rubie','Delgua','1970-06-03','Los Angeles'),(93,'Ludvig','Callf','1971-06-05','London'),(94,'Emiline','Greenhough','1982-04-11','Madison'),(95,'Booth','Belvard','1959-10-11','London'),(96,'Russ','Leander','1959-11-16','Oxford'),(97,'Branden','Huffer','1955-01-03','Bloomington'),(98,'De','Wackly','1989-09-17','Bloomington'),(99,'Alejandrina','Bardell','1962-10-25','Wilpen'),(100,'Isacco','McSherry','1976-04-17','Edimburg');
/*!40000 ALTER TABLE `AUTORI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BIBLIOTECA`
--

DROP TABLE IF EXISTS `BIBLIOTECA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `BIBLIOTECA` (
  `ID_BIBLIOTECA` int NOT NULL,
  `NOME_BIBLIOTECA` varchar(100) DEFAULT NULL,
  `VIA` varchar(50) DEFAULT NULL,
  `NUMERO_CIVICO` varchar(4) DEFAULT NULL,
  `CAP` int DEFAULT NULL,
  `CITTA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_BIBLIOTECA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BIBLIOTECA`
--

LOCK TABLES `BIBLIOTECA` WRITE;
/*!40000 ALTER TABLE `BIBLIOTECA` DISABLE KEYS */;
INSERT INTO `BIBLIOTECA` VALUES (1,'Architettura','Via Ghiara','36',44121,'Ferrara'),(2,'Economia e management','Via Voltapaletto','11',44121,'Ferrara'),(3,'Fisica e Scienze della Terra','Via Saragat','1',44122,'Ferrara'),(4,'Giurisprudenza','Corso Ercole I d\'Este','37',44121,'Ferrara'),(5,'Ingegneria','Via Saragat','1',44122,'Ferrara'),(6,'Matematica e informatica','Via Machiavelli','30',44121,'Ferrara'),(7,'Morfologia chirurgia e medicina sperimentale','Via Luigi Borsari','46',44121,'Ferrara'),(8,'Scienze biomediche e chirurgico specialistiche','Via Luigi Borsari','46',44121,'Ferrara'),(9,'Scienze chimiche e farmaceutiche','Via Luigi Borsari','46',44121,'Ferrara'),(10,'Scienze della vita e biotecnologie','Via Luigi Borsari','46',44121,'Ferrara'),(11,'Scienze mediche','Via Fossato di Mortara','64/B',44121,'Ferrara'),(12,'Studi umanistici','Via Paradiso','12',44121,'Ferrara');
/*!40000 ALTER TABLE `BIBLIOTECA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COPIA`
--

DROP TABLE IF EXISTS `COPIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `COPIA` (
  `CODICE_UNIVOCO` int NOT NULL AUTO_INCREMENT,
  `ISBN_ID` int NOT NULL,
  `NUM_COPIE` int NOT NULL,
  `ID_BIBLIOTECA` int DEFAULT NULL,
  PRIMARY KEY (`CODICE_UNIVOCO`,`ISBN_ID`),
  KEY `ID_BIBLIOTECA` (`ID_BIBLIOTECA`),
  KEY `ISBN_ID` (`ISBN_ID`),
  CONSTRAINT `COPIA_ibfk_1` FOREIGN KEY (`ID_BIBLIOTECA`) REFERENCES `BIBLIOTECA` (`ID_BIBLIOTECA`),
  CONSTRAINT `COPIA_ibfk_2` FOREIGN KEY (`ISBN_ID`) REFERENCES `LIBRI` (`ISBN_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1076 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COPIA`
--

LOCK TABLES `COPIA` WRITE;
/*!40000 ALTER TABLE `COPIA` DISABLE KEYS */;
INSERT INTO `COPIA` VALUES (4,2,1,5),(5,2,1,5),(6,2,1,12),(7,2,1,9),(8,2,1,9),(9,2,1,7),(10,2,1,4),(11,2,1,11),(12,3,1,7),(13,3,1,12),(14,3,1,4),(15,3,1,7),(16,3,1,1),(17,3,1,4),(18,3,1,6),(19,3,1,4),(22,4,1,2),(23,4,1,11),(24,4,1,9),(26,5,1,12),(27,5,1,3),(28,6,1,1),(29,6,1,9),(30,6,1,7),(31,6,1,5),(32,6,1,3),(33,6,1,2),(35,7,1,7),(36,7,1,10),(37,7,1,4),(38,7,1,12),(39,7,1,2),(40,7,1,8),(41,7,1,9),(42,7,1,11),(43,8,1,12),(44,8,1,4),(45,9,1,10),(47,11,1,8),(48,11,1,11),(49,11,1,7),(50,11,1,1),(51,11,1,6),(52,11,1,4),(53,11,1,1),(54,11,1,3),(55,12,1,11),(56,12,1,1),(57,12,1,4),(58,12,1,8),(59,12,1,12),(60,13,1,2),(61,13,1,7),(62,13,1,6),(63,13,1,8),(65,14,1,5),(66,14,1,5),(67,14,1,7),(68,14,1,8),(69,14,1,8),(70,14,1,3),(71,14,1,12),(72,14,1,5),(73,15,1,12),(74,15,1,10),(75,16,1,2),(76,16,1,2),(77,16,1,5),(78,16,1,7),(79,16,1,7),(80,16,1,1),(81,16,1,9),(82,17,1,7),(83,18,1,4),(84,18,1,10),(85,18,1,5),(86,18,1,4),(87,18,1,7),(88,18,1,7),(89,19,1,3),(90,19,1,7),(91,19,1,3),(92,19,1,2),(93,19,1,12),(94,19,1,8),(95,20,1,2),(96,20,1,8),(97,20,1,12),(98,20,1,12),(99,21,1,11),(100,21,1,6),(101,21,1,8),(102,22,1,11),(103,22,1,8),(104,22,1,3),(105,22,1,3),(106,22,1,7),(107,22,1,1),(108,22,1,7),(109,22,1,9),(110,22,1,11),(111,23,1,3),(112,23,1,7),(113,24,1,2),(114,24,1,10),(115,24,1,9),(116,24,1,4),(117,24,1,2),(118,24,1,9),(119,24,1,4),(120,24,1,6),(121,25,1,3),(122,25,1,9),(123,26,1,2),(124,26,1,4),(125,26,1,3),(126,26,1,2),(127,26,1,2),(128,26,1,1),(129,26,1,10),(130,26,1,12),(131,26,1,6),(132,27,1,6),(133,27,1,9),(134,27,1,5),(135,28,1,8),(136,28,1,3),(137,28,1,11),(138,29,1,12),(139,29,1,2),(140,29,1,9),(141,30,1,4),(142,30,1,5),(143,30,1,1),(144,30,1,1),(145,30,1,12),(146,30,1,8),(147,30,1,5),(148,30,1,2),(149,30,1,4),(150,31,1,1),(151,31,1,6),(152,31,1,4),(153,31,1,11),(154,31,1,9),(155,31,1,12),(156,32,1,7),(157,32,1,12),(158,32,1,2),(159,32,1,7),(160,32,1,8),(161,33,1,5),(162,34,1,12),(163,34,1,10),(164,34,1,11),(165,35,1,2),(166,35,1,12),(167,35,1,5),(168,35,1,12),(169,35,1,11),(170,35,1,5),(171,35,1,2),(172,35,1,6),(173,35,1,12),(174,36,1,8),(175,36,1,1),(176,36,1,5),(177,36,1,11),(178,36,1,3),(179,36,1,5),(180,36,1,5),(181,36,1,9),(182,36,1,6),(183,37,1,2),(184,37,1,4),(185,37,1,2),(186,38,1,7),(187,38,1,6),(188,38,1,7),(189,38,1,6),(190,38,1,10),(191,38,1,7),(192,38,1,5),(193,38,1,4),(194,39,1,3),(195,39,1,4),(196,39,1,11),(197,40,1,5),(198,40,1,6),(199,40,1,1),(200,40,1,12),(201,40,1,7),(202,40,1,12),(203,40,1,3),(204,40,1,1),(205,41,1,8),(206,41,1,11),(207,41,1,5),(208,42,1,7),(209,42,1,7),(210,42,1,11),(211,42,1,1),(212,42,1,4),(213,42,1,8),(214,42,1,1),(215,42,1,6),(216,42,1,12),(217,43,1,8),(218,43,1,2),(219,43,1,8),(220,43,1,12),(221,43,1,11),(222,43,1,6),(223,43,1,8),(224,44,1,8),(225,44,1,4),(226,44,1,10),(227,44,1,11),(228,44,1,3),(229,44,1,2),(230,44,1,4),(231,44,1,11),(232,44,1,6),(233,45,1,8),(234,45,1,10),(235,45,1,1),(236,45,1,11),(237,45,1,3),(238,45,1,4),(239,45,1,2),(240,45,1,6),(241,45,1,3),(242,46,1,6),(243,46,1,8),(244,46,1,9),(245,47,1,10),(246,47,1,12),(247,47,1,4),(248,47,1,7),(249,47,1,12),(250,48,1,12),(251,48,1,12),(252,48,1,2),(253,48,1,9),(254,49,1,12),(255,49,1,9),(256,49,1,9),(257,49,1,4),(258,49,1,7),(259,49,1,10),(260,49,1,4),(261,50,1,3),(262,50,1,1),(263,51,1,9),(264,51,1,3),(265,51,1,12),(266,51,1,2),(267,51,1,11),(268,51,1,1),(269,51,1,5),(270,51,1,11),(271,51,1,5),(272,52,1,1),(273,52,1,1),(274,53,1,2),(275,53,1,8),(276,53,1,9),(277,53,1,6),(278,53,1,5),(279,53,1,5),(280,53,1,10),(281,53,1,8),(282,53,1,1),(283,54,1,5),(284,54,1,9),(285,54,1,3),(286,54,1,1),(287,55,1,6),(288,55,1,2),(289,56,1,4),(290,57,1,4),(291,57,1,4),(292,57,1,9),(293,57,1,10),(294,57,1,9),(295,57,1,4),(296,57,1,4),(297,57,1,6),(298,57,1,6),(299,58,1,11),(300,58,1,1),(301,58,1,7),(302,58,1,9),(303,58,1,9),(304,58,1,7),(305,58,1,8),(306,59,1,7),(307,60,1,11),(308,60,1,9),(309,60,1,1),(310,60,1,11),(311,60,1,5),(312,60,1,4),(313,61,1,5),(314,61,1,10),(315,61,1,11),(316,61,1,12),(317,62,1,5),(318,62,1,11),(319,62,1,2),(320,62,1,3),(321,62,1,7),(322,63,1,1),(323,63,1,8),(324,63,1,3),(325,63,1,12),(326,63,1,1),(327,63,1,6),(328,63,1,3),(329,63,1,9),(330,63,1,10),(331,64,1,10),(332,64,1,8),(333,64,1,10),(334,64,1,12),(335,64,1,7),(336,64,1,11),(337,64,1,9),(338,64,1,10),(339,65,1,11),(340,65,1,12),(341,66,1,4),(342,66,1,7),(343,66,1,9),(344,66,1,12),(345,66,1,8),(346,66,1,3),(347,67,1,5),(348,68,1,4),(349,68,1,3),(350,68,1,1),(351,68,1,9),(352,68,1,3),(353,68,1,3),(354,68,1,4),(355,68,1,12),(356,68,1,10),(357,69,1,2),(358,69,1,3),(359,69,1,8),(360,69,1,5),(361,69,1,2),(362,69,1,8),(363,69,1,9),(364,69,1,8),(365,70,1,2),(366,70,1,10),(367,70,1,6),(368,70,1,11),(369,71,1,12),(370,71,1,2),(371,71,1,10),(372,72,1,9),(373,72,1,3),(374,72,1,9),(375,72,1,1),(376,72,1,1),(377,72,1,3),(378,72,1,10),(379,72,1,7),(380,72,1,2),(381,73,1,2),(382,73,1,2),(383,73,1,4),(384,73,1,12),(385,73,1,11),(386,73,1,6),(387,73,1,11),(388,73,1,10),(389,74,1,6),(390,74,1,12),(391,74,1,4),(392,74,1,8),(393,74,1,5),(394,74,1,11),(395,75,1,2),(396,75,1,4),(397,75,1,11),(398,75,1,8),(399,75,1,5),(400,76,1,11),(401,76,1,7),(402,76,1,11),(403,76,1,8),(404,77,1,9),(405,77,1,8),(406,77,1,11),(407,78,1,7),(408,78,1,2),(409,78,1,12),(410,78,1,6),(411,78,1,7),(412,79,1,5),(413,79,1,1),(414,79,1,1),(415,79,1,1),(416,79,1,1),(417,79,1,1),(418,79,1,3),(419,79,1,12),(420,79,1,12),(421,80,1,3),(422,80,1,11),(423,81,1,12),(424,82,1,12),(425,83,1,11),(426,83,1,9),(427,83,1,9),(428,83,1,6),(429,83,1,4),(430,84,1,1),(431,85,1,6),(432,85,1,3),(433,85,1,5),(434,85,1,7),(435,85,1,7),(436,85,1,12),(437,85,1,5),(438,85,1,9),(439,85,1,9),(440,86,1,4),(441,87,1,7),(442,87,1,7),(443,87,1,4),(444,87,1,8),(445,87,1,3),(446,87,1,3),(447,87,1,5),(448,88,1,3),(449,89,1,2),(450,89,1,11),(451,89,1,3),(452,89,1,3),(453,89,1,6),(454,90,1,8),(455,90,1,12),(456,90,1,10),(457,90,1,2),(458,90,1,1),(459,90,1,1),(460,90,1,1),(461,90,1,2),(462,90,1,6),(463,91,1,12),(464,91,1,6),(465,91,1,4),(466,91,1,1),(467,91,1,4),(468,91,1,5),(469,91,1,12),(470,91,1,11),(471,92,1,4),(472,92,1,1),(473,92,1,2),(474,92,1,9),(475,92,1,1),(476,92,1,12),(477,93,1,8),(478,93,1,5),(479,93,1,2),(480,93,1,4),(481,93,1,4),(482,93,1,6),(483,93,1,4),(484,93,1,2),(485,93,1,10),(486,94,1,9),(487,94,1,1),(488,94,1,4),(489,94,1,3),(490,94,1,12),(491,94,1,6),(492,95,1,5),(493,95,1,6),(494,96,1,2),(495,96,1,5),(496,96,1,7),(497,96,1,5),(498,96,1,3),(499,96,1,12),(500,96,1,2),(501,97,1,8),(502,97,1,12),(503,97,1,9),(504,97,1,9),(505,97,1,5),(506,98,1,9),(507,98,1,4),(508,98,1,8),(509,98,1,2),(510,98,1,9),(511,98,1,5),(512,98,1,8),(513,98,1,1),(514,98,1,5),(515,99,1,10),(516,99,1,11),(517,99,1,2),(518,99,1,10),(519,99,1,6),(520,99,1,2),(521,99,1,2),(522,99,1,2),(523,100,1,7),(524,100,1,1),(525,100,1,11),(526,100,1,2),(527,101,1,12),(528,101,1,5),(529,101,1,1),(530,101,1,3),(531,101,1,10),(532,102,1,3),(533,102,1,11),(534,102,1,10),(535,102,1,4),(536,102,1,2),(537,102,1,11),(538,102,1,11),(539,102,1,10),(540,102,1,3),(541,103,1,11),(542,103,1,8),(543,103,1,7),(544,103,1,9),(545,103,1,12),(546,103,1,9),(547,104,1,6),(548,104,1,6),(549,104,1,9),(550,104,1,4),(551,105,1,5),(552,106,1,1),(553,107,1,2),(554,107,1,4),(555,107,1,1),(556,107,1,6),(557,107,1,2),(558,107,1,5),(559,107,1,5),(560,107,1,8),(561,107,1,1),(562,108,1,6),(563,108,1,2),(564,108,1,3),(565,108,1,7),(566,108,1,5),(567,108,1,12),(568,108,1,10),(569,108,1,12),(570,108,1,8),(571,109,1,1),(572,109,1,5),(573,109,1,12),(574,109,1,6),(575,109,1,8),(576,109,1,8),(577,109,1,4),(578,109,1,6),(579,109,1,5),(580,110,1,7),(581,110,1,8),(582,110,1,8),(583,110,1,2),(584,110,1,11),(585,110,1,1),(586,110,1,5),(587,110,1,12),(588,110,1,9),(589,111,1,5),(590,111,1,1),(591,111,1,11),(592,111,1,4),(593,111,1,12),(594,111,1,10),(595,111,1,2),(596,111,1,5),(597,112,1,7),(598,112,1,6),(599,113,1,7),(600,113,1,4),(601,113,1,1),(602,113,1,5),(603,113,1,8),(604,113,1,1),(605,113,1,5),(606,114,1,9),(607,114,1,5),(608,114,1,11),(609,114,1,1),(610,114,1,10),(611,114,1,10),(612,114,1,7),(613,115,1,7),(614,115,1,10),(615,115,1,6),(616,115,1,10),(617,115,1,10),(618,115,1,7),(619,115,1,3),(620,116,1,8),(621,116,1,7),(622,116,1,10),(623,116,1,2),(624,116,1,6),(625,117,1,10),(626,117,1,8),(627,117,1,10),(628,117,1,12),(629,118,1,7),(630,118,1,10),(631,118,1,3),(632,118,1,12),(633,118,1,11),(634,118,1,9),(635,118,1,11),(636,119,1,3),(637,119,1,7),(638,119,1,11),(639,119,1,11),(640,119,1,8),(641,119,1,7),(642,119,1,10),(643,119,1,6),(644,120,1,9),(645,120,1,3),(646,120,1,2),(647,120,1,12),(648,120,1,4),(649,120,1,6),(650,120,1,7),(651,121,1,5),(652,121,1,3),(653,121,1,1),(654,121,1,7),(655,121,1,8),(656,121,1,5),(657,121,1,3),(658,121,1,11),(659,121,1,8),(660,122,1,6),(661,122,1,5),(662,122,1,9),(663,122,1,3),(664,122,1,2),(665,122,1,12),(666,122,1,7),(667,122,1,10),(668,123,1,4),(669,123,1,2),(670,123,1,9),(671,123,1,5),(672,123,1,6),(673,123,1,3),(674,123,1,11),(675,123,1,8),(676,124,1,6),(677,124,1,6),(678,124,1,10),(679,124,1,8),(680,125,1,8),(681,125,1,6),(682,125,1,4),(683,125,1,3),(684,125,1,3),(685,125,1,4),(686,126,1,12),(687,126,1,11),(688,126,1,5),(689,127,1,6),(690,127,1,1),(691,127,1,12),(692,127,1,7),(693,127,1,10),(694,127,1,4),(695,127,1,4),(696,127,1,4),(697,127,1,11),(698,128,1,5),(699,128,1,3),(700,128,1,11),(701,128,1,11),(702,128,1,11),(703,128,1,6),(704,128,1,11),(705,129,1,11),(706,130,1,10),(707,130,1,5),(708,130,1,6),(709,130,1,3),(710,130,1,6),(711,130,1,12),(712,130,1,5),(713,130,1,11),(714,130,1,2),(715,131,1,4),(716,131,1,11),(717,131,1,9),(718,131,1,11),(719,131,1,3),(720,131,1,7),(721,131,1,11),(722,132,1,10),(723,133,1,4),(724,133,1,2),(725,133,1,8),(726,133,1,12),(727,133,1,11),(728,133,1,6),(729,133,1,8),(730,134,1,9),(731,134,1,11),(732,134,1,2),(733,134,1,2),(734,134,1,2),(735,134,1,5),(736,134,1,4),(737,134,1,5),(738,134,1,3),(739,135,1,9),(740,135,1,12),(741,136,1,8),(742,136,1,5),(743,136,1,11),(744,136,1,6),(745,136,1,5),(746,136,1,9),(747,137,1,6),(748,137,1,1),(749,137,1,10),(750,138,1,10),(751,139,1,7),(752,139,1,5),(753,139,1,2),(754,139,1,7),(755,139,1,6),(756,140,1,7),(757,140,1,7),(758,140,1,12),(759,140,1,2),(760,140,1,9),(761,140,1,4),(762,140,1,6),(763,140,1,4),(764,141,1,2),(765,141,1,7),(766,141,1,8),(767,141,1,5),(768,141,1,12),(769,141,1,9),(770,141,1,10),(771,141,1,9),(772,141,1,3),(773,142,1,10),(774,142,1,6),(775,142,1,10),(776,142,1,10),(777,143,1,7),(778,144,1,6),(779,144,1,5),(780,144,1,9),(781,144,1,4),(782,145,1,6),(783,145,1,7),(784,145,1,2),(785,145,1,3),(786,145,1,6),(787,145,1,8),(788,145,1,12),(789,145,1,10),(790,146,1,12),(791,146,1,7),(792,146,1,12),(793,147,1,12),(794,147,1,3),(795,147,1,11),(796,147,1,9),(797,147,1,12),(798,147,1,10),(799,147,1,11),(800,147,1,1),(801,147,1,10),(802,148,1,9),(803,148,1,2),(804,148,1,5),(805,148,1,8),(806,148,1,2),(807,148,1,7),(808,148,1,7),(809,148,1,2),(810,148,1,12),(811,149,1,7),(812,149,1,8),(813,149,1,5),(814,149,1,4),(815,149,1,3),(816,149,1,1),(817,150,1,10),(818,150,1,11),(819,150,1,1),(820,150,1,8),(821,151,1,10),(822,152,1,4),(824,153,1,9),(825,153,1,3),(826,153,1,10),(827,153,1,6),(828,153,1,1),(829,153,1,8),(830,153,1,1),(831,154,1,3),(832,154,1,3),(833,154,1,2),(834,154,1,1),(835,154,1,10),(836,154,1,11),(837,154,1,1),(838,154,1,8),(839,155,1,11),(840,155,1,7),(841,155,1,1),(842,155,1,8),(843,156,1,2),(844,156,1,7),(845,156,1,3),(846,156,1,9),(847,157,1,11),(848,157,1,2),(849,157,1,1),(850,157,1,10),(851,157,1,1),(852,157,1,9),(853,157,1,7),(854,158,1,7),(855,158,1,1),(856,158,1,7),(857,158,1,9),(858,158,1,11),(859,158,1,2),(860,158,1,3),(861,158,1,9),(862,158,1,10),(863,159,1,9),(864,159,1,5),(865,159,1,9),(866,159,1,4),(867,159,1,6),(868,159,1,6),(869,159,1,10),(870,159,1,8),(871,160,1,9),(872,160,1,9),(873,160,1,5),(874,160,1,12),(875,161,1,7),(876,161,1,9),(877,161,1,12),(878,161,1,11),(879,161,1,4),(880,161,1,1),(881,161,1,2),(882,161,1,7),(883,162,1,7),(884,163,1,11),(885,163,1,12),(886,163,1,11),(887,163,1,10),(888,163,1,4),(889,163,1,12),(890,163,1,1),(891,163,1,5),(892,163,1,8),(893,164,1,2),(894,164,1,11),(895,164,1,11),(896,165,1,8),(897,165,1,9),(898,166,1,7),(899,166,1,9),(900,167,1,9),(901,167,1,5),(902,167,1,1),(903,167,1,10),(904,167,1,12),(905,167,1,6),(906,167,1,7),(907,167,1,3),(908,167,1,5),(909,168,1,2),(910,168,1,8),(911,169,1,11),(912,169,1,5),(913,169,1,4),(914,169,1,3),(915,170,1,4),(916,170,1,12),(917,170,1,11),(918,170,1,4),(919,170,1,11),(920,170,1,9),(921,171,1,9),(922,171,1,6),(923,171,1,1),(924,171,1,2),(925,171,1,3),(926,171,1,9),(927,171,1,1),(928,171,1,3),(929,171,1,9),(930,172,1,12),(931,172,1,11),(932,172,1,3),(933,172,1,6),(934,172,1,7),(935,172,1,8),(936,172,1,5),(937,172,1,1),(938,172,1,3),(939,173,1,10),(940,173,1,5),(941,174,1,8),(942,174,1,12),(943,174,1,10),(944,174,1,12),(945,174,1,7),(946,174,1,12),(947,174,1,2),(948,174,1,10),(949,174,1,8),(950,175,1,10),(951,175,1,1),(952,175,1,12),(953,175,1,5),(954,175,1,4),(955,175,1,4),(956,175,1,5),(957,176,1,4),(958,176,1,2),(959,176,1,11),(960,176,1,10),(961,176,1,6),(962,177,1,1),(963,177,1,11),(964,178,1,3),(965,178,1,3),(966,178,1,7),(967,178,1,3),(968,178,1,4),(969,178,1,10),(970,178,1,3),(971,178,1,6),(972,178,1,12),(973,179,1,3),(974,180,1,4),(975,180,1,9),(976,180,1,10),(977,180,1,11),(978,180,1,12),(979,180,1,3),(980,180,1,4),(981,181,1,8),(982,181,1,4),(983,181,1,7),(984,181,1,12),(985,181,1,12),(986,181,1,12),(987,181,1,1),(988,181,1,4),(989,182,1,4),(990,182,1,9),(991,182,1,8),(992,182,1,10),(993,182,1,4),(994,182,1,2),(995,182,1,10),(996,183,1,4),(997,183,1,5),(998,183,1,12),(999,183,1,9),(1000,183,1,7),(1001,183,1,9),(1002,184,1,11),(1003,184,1,3),(1004,184,1,6),(1005,184,1,8),(1006,184,1,8),(1007,184,1,4),(1008,184,1,7),(1009,184,1,11),(1010,184,1,11),(1011,185,1,7),(1012,185,1,3),(1013,186,1,6),(1014,186,1,10),(1015,186,1,5),(1016,186,1,6),(1017,186,1,2),(1018,187,1,3),(1019,188,1,11),(1020,188,1,8),(1021,188,1,5),(1022,188,1,3),(1023,188,1,11),(1024,188,1,8),(1025,188,1,6),(1026,189,1,6),(1027,189,1,1),(1028,189,1,11),(1029,189,1,4),(1030,189,1,11),(1031,190,1,3),(1032,190,1,9),(1033,190,1,9),(1034,190,1,7),(1035,191,1,5),(1036,191,1,5),(1037,191,1,10),(1038,192,1,9),(1039,192,1,4),(1040,192,1,4),(1041,193,1,6),(1042,193,1,5),(1043,193,1,8),(1044,193,1,11),(1045,193,1,7),(1046,193,1,2),(1047,194,1,1),(1048,194,1,9),(1049,194,1,6),(1050,195,1,4),(1051,195,1,1),(1052,195,1,3),(1053,195,1,2),(1054,195,1,11),(1055,195,1,1),(1056,195,1,5),(1057,195,1,12),(1058,196,1,8),(1059,196,1,5),(1060,196,1,11),(1061,196,1,5),(1062,196,1,3),(1063,196,1,1),(1064,196,1,8),(1065,196,1,9),(1066,197,1,12),(1067,197,1,8),(1068,197,1,1),(1069,197,1,6),(1070,197,1,1),(1071,198,1,12),(1072,198,1,6),(1073,198,1,7),(1074,198,1,5),(1075,199,1,1);
/*!40000 ALTER TABLE `COPIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LIBRI`
--

DROP TABLE IF EXISTS `LIBRI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LIBRI` (
  `ISBN_ID` int NOT NULL,
  `TITOLO` varchar(150) DEFAULT NULL,
  `ISBN` varchar(20) NOT NULL,
  `LINGUA` varchar(30) DEFAULT NULL,
  `ANNO_PUB` int DEFAULT NULL,
  `NUM_COPIE` int NOT NULL,
  PRIMARY KEY (`ISBN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LIBRI`
--

LOCK TABLES `LIBRI` WRITE;
/*!40000 ALTER TABLE `LIBRI` DISABLE KEYS */;
INSERT INTO `LIBRI` VALUES (1,'Get Smart','387623794-7','English',2010,2),(2,'South of Heaven West of Hell','346481000-3','English',2015,9),(3,'Human Failure (Menschliches Versagen)','068254989-4','English',2014,8),(4,'Revenge of the Nerds','502714957-3','Japanese',2019,5),(5,'Lone Ranger The','698429931-4','Icelandic',2011,3),(6,'Brides (Nyfes)','752213396-3','Georgian',2012,6),(7,'Larceny Inc','857627191-5','English',2012,9),(8,'Stonewall','660038142-6','Icelandic',2016,2),(9,'Eight Crazy Nights (Adam Sandler s Eight Crazy Nights)','870560200-9','English',2018,1),(10,'Gone Fishin ','137066182-7','Georgian',2012,1),(11,'Richard III','863050834-5','Chinese',2019,8),(12,'Stupid Boy (Garçon stupide)','998941371-1','Italian',2013,5),(13,'Secret Garden The','368968937-6','English',2014,4),(14,'Act Da Fool','653073623-9','English',2020,9),(15,'Hot Fuzz','867778553-1','Polish',2012,2),(16,'Get Bruce','389625239-9','Hebrew',2020,7),(17,'No Retreat No Surrender 2 Raging Thunder','204897847-9','Italian',2019,1),(18,'Back Soon','772713523-2','English',2013,6),(19,'Pitch Black','255439894-1','English',2015,6),(20,'Gingerbread Man The','004023598-X','Dari',2012,4),(21,'Woman on the Beach (Haebyeonui yeoin)','661872594-1','English',2020,3),(22,'Lost City The','666013383-6','English',2014,10),(23,'Paradise Lost 2 Revelations','165632171-8','Italian',2010,2),(24,'Key Largo','425111017-X','Estonian',2019,8),(25,'Diplomacy (Diplomatie)','507124152-8','French',2019,2),(26,'Lavender Hill Mob The','435456826-8','English',2016,9),(27,'Chronicle of a Summer (Chronique d un été)','851106761-2','Italian',2019,3),(28,'Such Is Life (Así es la vida)','301170811-8','English',2019,3),(29,'Tenchi The Samurai Astronomer','214940353-6','English',2018,3),(30,'Boys from Fengkuei The (Feng gui lai de ren)','351898785-2','Portuguese',2016,10),(31,'Thieves The (Dodookdeul)','887526619-0','Romanian',2011,6),(32,'Blackmailed','618325112-7','Czech',2013,5),(33,'Cocaine Cowboys II Hustlin  With the Godmother','670271351-7','Indonesian',2011,1),(34,'Ingeborg Holm','814543114-X','English',2013,3),(35,'1208 East of Bucharest (A fost sau n-a fost?)','601546113-6','Gujarati',2011,9),(36,'Redemption The Stan Tookie Williams Story','501862280-6','Finnish',2011,9),(37,'Inspectors The','050916783-7','Catalan',2017,3),(38,'Animal House','265972215-3','English',2017,8),(39,'Red Riding 1983','848202184-2','English',2019,3),(40,'Missionary Man','927994979-9','Dhivehi',2017,8),(41,'Golem','296111646-5','Japanese',2019,3),(42,'Project X','829914597-X','English',2019,9),(43,'Dragon Ball Z Bio-Broly (Doragon bôru Z 11 Sûpâ senshi gekiha! Katsu no wa ore da)','786395256-5','English',2019,7),(44,'Forbidden Christ The (Cristo proibito Il)','970334328-7','Danish',2019,9),(45,'Stingray Sam','086031288-7','Polish',2019,9),(46,'Inspector Palmu s Error (Komisario Palmun erehdys)','763200529-3','English',2016,3),(47,'Streetcar Named Desire A','510453377-8','English',2013,5),(48,'World of Kanako The (Kawaki)','290005808-2','Lao',2020,4),(49,'Suit for Wedding A (aka The Wedding Suit) (Lebassi Baraye Arossi)','085745713-6','English',2020,7),(50,'Human-computer interaction','364615054-8','English',2017,2),(51,'I m Reed Fish','775940054-3','Kashmiri',2017,10),(52,'Kumail Nanjiani Beta Male ','925812482-0','German',2010,2),(53,'Teaching Mrs Tingle','584224789-5','English',2020,10),(54,'Always','354835830-6','Catalan',2015,4),(55,'Delta','285192251-3','English',2011,2),(56,'Gunfighter The','386397507-3','Albanian',2013,1),(57,'Angels  Share The','733508116-5','English',2017,9),(58,'Murder by Proxy How America Went Postal','801081738-4','English',2019,7),(59,'Arthur and the Revenge of Maltazard (Arthur et la vengeance de Maltazard)','560797299-2','English',2017,1),(60,'Closure','492112694-1','English',2018,6),(61,'Meet Joe Black','182342356-6','Japanese',2011,4),(62,'Scenic Route','299282269-8','English',2015,5),(63,'Private Detective 62','055417113-9','English',2017,9),(64,'Cars','101215590-0','English',2012,8),(65,'Iron Mask The','951964371-0','Bengali',2014,2),(66,'Wave The (Welle Die)','469785019-X','English',2014,6),(67,'Andrei Rublev (Andrey Rublyov)','368990830-2','English',2017,1),(68,'Wild River','300485539-9','Dzongkha',2012,10),(69,'Krrish','976860084-5','English',2016,8),(70,'You Only Live Once','147191251-5','Dari',2018,4),(71,'Bed & Breakfast Love is a Happy Accident (Bed & Breakfast)','076691563-8','Dari',2018,3),(72,'Iron Horse The','860964250-X','Japanese',2013,10),(73,'Ninotchka','384050463-5','Quechua',2017,8),(74,'Rains of Ranchipur The','158999545-7','English',2012,6),(75,'Maniac','136964378-0','English',2013,5),(76,'Dakota Skye','194862546-6','English',2011,4),(77,'Family Tree','129488690-8','English',2017,3),(78,'Rebecca','432587582-4','Swedish',2015,5),(79,'The Frame','515279116-1','English',2010,9),(80,'Kairat','825867311-4','Hiri Motu',2013,2),(81,'Fear','712463375-3','English',2012,1),(82,'Slaves to the Underground','536751983-0','French',2014,1),(83,'Trial','284203566-6','Korean',2013,5),(84,'Gasoline (Benzina)','175205668-X','English',2019,1),(85,'Heaven s Prisoners','672217513-8','Bengali',2014,10),(86,'HTM & CSS','607745120-7','Italian',2018,1),(87,'Cyrano de Bergerac','611928800-7','Korean',2017,7),(88,'State of Siege (État de siège)','226372696-9','Hindi',2013,1),(89,'Memory','083845517-4','Punjabi',2014,5),(90,'Ironclad','184722570-5','Kashmiri',2011,9),(91,'Happy People A Year in the Taiga','653175736-1','Swedish',2012,8),(92,'Convoy','989371762-0','German',2015,6),(93,'Général Idi Amin Dada A Self Portrait (Général Idi Amin Dada Autoportrait)','521329516-9','English',2015,9),(94,'Come Blow Your Horn','087133062-8','English',2013,6),(95,'Carmen Comes Home (Karumen kokyo ni kaeru)','517581126-6','Hindi',2020,2),(96,'Heroine','023019395-1','Dzongkha',2013,7),(97,'Luna de Avellaneda','441842932-8','Guaraní',2018,5),(98,'Under the Bridges (Unter den Brücken)','742437654-3','Swedish',2016,9),(99,'Story of My Life The (Mensonges et trahisons et plus si affinités)','760264513-8','English',2012,8),(100,'The Fourth War','171208472-0','English',2020,4),(101,'Life of Another The (La vie d une autre)','009047587-9','English',2015,5),(102,'Sergeant Rutledge','372098427-3','Arabic',2011,9),(103,'Black Windmill The','449571196-2','English',2013,6),(104,'Nicholas on Holiday','362309208-8','English',2018,4),(105,'Beefcake','457456450-4','Aymara',2016,1),(106,'Oliver Twist','369048652-1','Guaraní',2020,1),(107,'Salvage','190222315-2','Belarusian',2014,9),(108,'Cassandra Crossing The','945660604-X','Arabic',2016,10),(109,'Crocodile Hunter Collision Course The','711604128-1','English',2014,10),(110,'Abbott and Costello Meet the Killer Boris Karloff','465297052-8','English',2016,9),(111,'Wolf Man The','836374770-X','Indonesian',2013,8),(112,'Vehicle 19','509808775-9','English',2013,2),(113,'Rollerball','595626866-2','Hungarian',2014,7),(114,'Carbon Nation','168316748-1','Portuguese',2012,7),(115,'Times Square','744780754-0','English',2020,7),(116,'Memory Keeper s Daughter The','594275024-6','English',2012,5),(117,'And Nobody Weeps for Me (Und keiner weint mir nach)','992229254-8','Italian',2017,4),(118,'Tyler Perry s I Can Do Bad All by Myself','560211284-7','Italian',2018,7),(119,'Day of the Triffids The','179592990-1','English',2011,8),(120,'Deadline','663119553-5','Spanish',2015,7),(121,'Holy Flying Circus','521847642-0','English',2016,9),(122,'Mala Noche','190401007-5','Northern Sotho',2017,8),(123,'Tracks','288231977-0','Icelandic',2010,8),(124,'Sound of Music The','103300276-3','Khmer',2019,4),(125,'Nick and Norah s Infinite Playlist','671158165-2','Czech',2019,6),(126,'Purple Rose of Cairo The','292051296-X','Guaraní',2013,3),(127,'Thief of Hearts','000369692-8','English',2016,10),(128,'Hollywood Party','769740772-8','English',2018,7),(129,'Absolute Power','946684198-X','Czech',2016,1),(130,'In the Park','264788349-1','Haitian Creole',2018,9),(131,'Life is to Whistle (Vida es silbar La)','421128511-4','English',2012,7),(132,'Avengers The','843331705-9','Bengali',2012,1),(133,'Kirikou and the Wild Beast (Kirikou et les bêtes sauvages)','978061177-0','Khmer',2010,7),(134,'Love s Labour s Lost','368515943-7','Czech',2011,9),(135,'Attack of the 50 Foot Woman','075305079-X','Danish',2010,2),(136,'Longest Yard The','014330257-4','Georgian',2010,6),(137,'PHP 7 development','331424241-7','Italian',2015,3),(138,'Great Expectations','436501926-0','Catalan',2013,1),(139,'Concrete Night (Betoniyö)','222223087-X','Irish Gaelic',2010,5),(140,'Deep Impact','385828979-5','Bengali',2019,8),(141,'Big Squeeze The','516983356-3','English',2014,10),(142,'Red White & Blue','253760945-X','English',2016,4),(143,'Saboteur','167947701-3','English',2014,1),(144,'Children Are Watching Us The (Bambini ci guardano I)','015674765-0','English',2018,4),(145,'Flight of the Living Dead','391578830-9','Kazakh',2014,8),(146,'Phil Spector','065646345-7','Irish Gaelic',2020,3),(147,'Inhale','259418123-4','English',2011,9),(148,'Little Children','756564271-1','English',2014,10),(149,'No Distance Left to Run','192373118-1','English',2019,6),(150,'Addams Family The','131544489-5','English',2019,4),(151,'From Above','872379238-8','English',2018,1),(152,'Enemy','216013488-0','Arabic',2012,2),(153,'Waydowntown','259579784-0','English',2018,7),(154,'Dead Man Walking','052706515-3','English',2011,8),(155,'Agent Vinod','526942871-7','Catalan',2017,4),(156,'Young Cassidy','280992700-6','German',2018,4),(157,'A Viking Saga The Darkest Day','835266674-6','Hindi',2012,7),(158,'Million Ways to Die in the West A','875127371-3','Norwegian',2014,10),(159,'High Spirits','256739345-5','Swedish',2016,8),(160,'Day the Universe Changed The','672560381-5','Northern Sotho',2018,4),(161,'Captain America The First Avenger','144577227-2','English',2020,8),(162,'Strangers on a Train','565659819-5','Dutch',2014,1),(163,'Buddy','170243376-5','English',2015,10),(164,'Death Defying Acts','009140312-X','Dhivehi',2017,3),(165,'History Boys The','333748888-9','Catalan',2017,2),(166,'Battle Royale 2 Requiem (Batoru rowaiaru II Chinkonka)','585173205-9','English',2018,2),(167,'Counterfeiters The (Die Fälscher)','006821799-4','Estonian',2018,9),(168,'Svidd Neger','376459959-6','English',2018,2),(169,'Altman','404884623-X','Czech',2010,4),(170,'Incredibly Strange Creatures Who Stopped Living and Became Mixed-Up Zombies!!? The','335294364-8','Italian',2018,6),(171,'Mondays in the Sun (Lunes al sol Los)','060088686-7','English',2019,9),(172,'Shaka Zulu The Citadel','829509196-4','Swedish',2014,10),(173,'Peculiarities of the National Hunt (Osobennosti natsionalnoy okhoty) ','947990234-6','English',2019,2),(174,'Sting II The','966859767-2','English',2020,9),(175,'Renaissance','554021569-9','English',2018,7),(176,'Jubilee','343838580-5','English',2015,5),(177,'Open Windows','405663612-5','English',2015,2),(178,'Elizabeth','356414253-3','English',2012,10),(179,'LA Without a Map','421308038-2','English',2014,1),(180,'Almanya - Welcome to Germany (Almanya - Willkommen in Deutschland)','022938411-0','Guaraní',2014,7),(181,'City Hall','687448355-2','English',2019,8),(182,'Kleines Arschloch - Der Film','768148078-1','Korean',2017,7),(183,'Last Ride','347737564-5','Haitian Creole',2019,6),(184,'Starflight The Plane That Couldn t Land','659332931-2','Italian',2016,9),(185,'Fundamentals of Database Systems','740153355-3','Italian',2019,2),(186,'Raisin in the Sun A','469863297-8','Punjabi',2015,5),(187,'Boys of St Vincent The','366292343-2','English',2013,1),(188,'Wall Street','600597433-5','English',2020,7),(189,'19th Wife The','371268896-2','Belarusian',2016,5),(190,'Shuttle','271280652-2','English',2017,4),(191,'Doc Savage The Man of Bronze','093035174-6','English',2015,3),(192,'Family Life','394873350-3','English',2014,3),(193,'Mon oncle d Amérique','136320382-7','English',2017,6),(194,'The Dark Horse','132261731-7','Guaraní',2018,3),(195,'My Bloody Valentine','685607790-4','Danish',2014,8),(196,'Breakdown','127368309-9','Chinese',2011,8),(197,'From the Life of the Marionettes (Aus dem Leben der Marionetten) ','542931356-4','Italian',2015,5),(198,'Split Second','816886703-3','Italian',2012,4),(199,'Knack and How to Get It The','657583349-7','English',2015,1);
/*!40000 ALTER TABLE `LIBRI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NOLLEGGIA`
--

DROP TABLE IF EXISTS `NOLLEGGIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `NOLLEGGIA` (
  `MATRICOLA` int NOT NULL,
  `CODICE_UNIVOCO` int NOT NULL,
  `ISBN_ID` int NOT NULL,
  `ID_BIBLIOTECA` int DEFAULT NULL,
  `DATA_USCITA` varchar(10) DEFAULT NULL,
  `DATA_RITORNO` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`MATRICOLA`,`CODICE_UNIVOCO`),
  KEY `ISBN_ID` (`ISBN_ID`),
  KEY `ID_BIBLIOTECA` (`ID_BIBLIOTECA`),
  KEY `CODICE_UNIVOCO` (`CODICE_UNIVOCO`),
  CONSTRAINT `NOLLEGGIA_ibfk_1` FOREIGN KEY (`MATRICOLA`) REFERENCES `STUDENTE` (`MATRICOLA`),
  CONSTRAINT `NOLLEGGIA_ibfk_2` FOREIGN KEY (`ISBN_ID`) REFERENCES `COPIA` (`ISBN_ID`),
  CONSTRAINT `NOLLEGGIA_ibfk_3` FOREIGN KEY (`ID_BIBLIOTECA`) REFERENCES `COPIA` (`ID_BIBLIOTECA`),
  CONSTRAINT `NOLLEGGIA_ibfk_4` FOREIGN KEY (`CODICE_UNIVOCO`) REFERENCES `COPIA` (`CODICE_UNIVOCO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NOLLEGGIA`
--

LOCK TABLES `NOLLEGGIA` WRITE;
/*!40000 ALTER TABLE `NOLLEGGIA` DISABLE KEYS */;
INSERT INTO `NOLLEGGIA` VALUES (111012,2,1,2,'2022-10-08','2022-11-07'),(111012,25,5,3,'2022-10-07','2022-11-06'),(123124,1,1,5,'2022-10-01','2022-10-31'),(123124,3,2,10,'2022-10-07','2022-11-06'),(124109,21,4,8,'2022-10-02','2022-11-01'),(165164,34,7,1,'2022-10-07','2022-11-06'),(170189,20,4,4,'2022-10-07','2022-11-06'),(170189,46,10,10,'2022-10-07','2022-11-06'),(170189,64,14,11,'2022-10-01','2022-10-31'),(171440,823,152,2,'2022-10-01','2022-10-31');
/*!40000 ALTER TABLE `NOLLEGGIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SCRITTO_DA`
--

DROP TABLE IF EXISTS `SCRITTO_DA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SCRITTO_DA` (
  `ISBN_ID` int NOT NULL,
  `AUTORI_ID` int NOT NULL,
  PRIMARY KEY (`ISBN_ID`,`AUTORI_ID`),
  KEY `AUTORI_ID` (`AUTORI_ID`),
  CONSTRAINT `SCRITTO_DA_ibfk_1` FOREIGN KEY (`ISBN_ID`) REFERENCES `LIBRI` (`ISBN_ID`),
  CONSTRAINT `SCRITTO_DA_ibfk_2` FOREIGN KEY (`AUTORI_ID`) REFERENCES `AUTORI` (`AUTORI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SCRITTO_DA`
--

LOCK TABLES `SCRITTO_DA` WRITE;
/*!40000 ALTER TABLE `SCRITTO_DA` DISABLE KEYS */;
INSERT INTO `SCRITTO_DA` VALUES (26,1),(114,1),(150,1),(152,1),(175,1),(186,1),(79,2),(156,2),(34,3),(45,3),(64,3),(73,3),(88,3),(137,3),(142,3),(192,3),(31,4),(50,4),(92,4),(120,4),(129,4),(158,4),(180,4),(4,5),(25,5),(42,5),(78,5),(152,5),(146,6),(96,7),(101,7),(113,7),(130,7),(162,7),(31,8),(63,8),(115,8),(133,8),(178,8),(191,8),(4,9),(49,9),(69,9),(81,9),(88,9),(121,9),(177,9),(40,10),(68,10),(118,10),(129,10),(160,10),(169,10),(7,11),(20,11),(25,11),(63,11),(70,11),(100,11),(128,11),(10,12),(144,12),(171,12),(173,12),(93,13),(99,13),(102,13),(114,13),(57,14),(149,14),(73,15),(91,15),(149,15),(86,16),(90,16),(96,16),(147,16),(197,16),(22,17),(82,17),(90,17),(105,17),(140,17),(162,17),(166,17),(11,18),(43,18),(51,18),(85,18),(160,18),(198,18),(14,19),(50,19),(164,19),(41,20),(53,20),(64,20),(69,20),(191,20),(79,21),(85,21),(156,21),(165,21),(174,21),(38,22),(44,22),(166,22),(178,22),(4,23),(66,23),(102,23),(128,23),(143,23),(41,24),(43,24),(50,24),(7,25),(52,25),(61,25),(69,25),(130,25),(6,26),(25,26),(60,26),(148,26),(152,26),(168,26),(186,26),(108,27),(114,27),(156,27),(160,27),(24,28),(40,28),(119,28),(162,28),(2,29),(36,29),(69,29),(91,29),(94,29),(103,29),(115,29),(141,29),(151,29),(191,29),(15,30),(75,30),(119,30),(160,30),(177,30),(62,31),(88,31),(108,31),(131,31),(136,31),(151,31),(185,31),(29,32),(51,32),(61,32),(105,32),(134,32),(3,33),(92,33),(96,33),(99,33),(128,33),(155,33),(162,33),(191,33),(43,34),(121,34),(125,34),(134,34),(146,34),(168,34),(199,34),(60,35),(61,35),(187,35),(27,36),(168,36),(177,36),(185,36),(44,37),(106,37),(41,38),(52,38),(140,38),(150,38),(169,38),(31,39),(117,39),(132,39),(176,39),(177,39),(198,39),(16,40),(20,40),(44,40),(73,40),(111,40),(116,40),(124,41),(144,41),(173,41),(187,41),(25,42),(116,42),(127,42),(190,42),(23,43),(27,43),(53,43),(67,43),(70,43),(72,43),(80,43),(95,43),(109,43),(140,43),(24,44),(98,44),(125,44),(127,44),(152,44),(177,44),(194,44),(26,45),(38,45),(69,45),(84,45),(94,45),(138,45),(142,45),(165,45),(67,46),(69,46),(82,46),(93,46),(116,46),(142,46),(159,46),(193,46),(6,47),(22,47),(56,47),(69,47),(80,47),(117,47),(194,47),(197,47),(146,48),(153,48),(160,48),(35,49),(52,49),(64,49),(79,49),(59,50),(109,50),(167,50),(190,50),(37,51),(61,51),(129,51),(131,51),(159,51),(160,51),(183,51),(190,51),(1,52),(6,52),(60,52),(68,52),(104,52),(111,52),(151,52),(175,52),(185,52),(37,53),(53,53),(62,53),(88,53),(137,53),(7,54),(56,54),(140,54),(155,54),(172,54),(178,54),(154,55),(169,55),(182,55),(20,56),(148,56),(155,56),(192,56),(21,57),(44,57),(52,57),(154,57),(8,58),(41,58),(81,59),(87,59),(109,59),(127,59),(144,59),(169,59),(27,60),(62,60),(83,60),(126,60),(128,60),(135,60),(146,60),(151,60),(153,60),(171,60),(53,61),(77,61),(132,61),(154,61),(44,62),(69,62),(124,62),(151,62),(153,62),(167,62),(176,62),(179,62),(13,63),(52,63),(107,63),(155,63),(45,64),(66,64),(69,64),(151,64),(173,64),(192,64),(5,65),(72,65),(78,65),(79,65),(84,65),(92,65),(130,65),(197,65),(29,66),(56,66),(72,66),(108,66),(160,66),(164,66),(15,67),(22,67),(71,67),(83,67),(116,67),(136,67),(158,67),(25,68),(34,68),(67,68),(188,68),(22,69),(79,69),(163,69),(89,70),(113,70),(197,70),(199,70),(30,71),(47,71),(13,72),(22,72),(79,72),(88,72),(111,72),(132,72),(25,73),(107,73),(174,73),(67,74),(75,74),(93,74),(96,74),(118,74),(158,74),(175,74),(176,74),(179,74),(13,75),(28,75),(108,75),(1,76),(20,76),(22,76),(24,76),(194,76),(11,77),(31,77),(73,77),(74,77),(79,77),(86,77),(145,77),(72,78),(76,78),(58,79),(62,79),(72,79),(166,79),(5,80),(9,80),(12,80),(31,80),(78,80),(90,80),(101,80),(56,81),(82,81),(91,81),(115,81),(140,81),(30,82),(143,82),(180,82),(183,82),(19,83),(48,83),(102,83),(189,83),(3,84),(28,84),(42,84),(69,84),(140,84),(146,84),(148,84),(41,85),(97,85),(105,85),(108,85),(44,86),(124,86),(143,86),(164,86),(175,86),(138,87),(5,88),(64,88),(105,88),(112,88),(137,88),(1,89),(70,89),(74,89),(171,89),(180,89),(193,89),(7,90),(11,90),(35,90),(80,90),(151,90),(47,91),(66,91),(95,91),(176,91),(179,91),(83,92),(84,92),(97,92),(133,92),(158,92),(176,92),(183,92),(13,93),(21,93),(22,93),(65,93),(77,93),(139,93),(177,93),(192,93),(47,94),(131,94),(197,94),(19,95),(92,95),(131,95),(169,95),(52,96),(68,96),(97,96),(167,96),(168,96),(187,96),(190,96),(194,96),(58,97),(64,97),(155,97),(5,98),(160,98),(42,99),(79,99),(117,99),(172,99),(189,99),(91,100),(105,100),(106,100);
/*!40000 ALTER TABLE `SCRITTO_DA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `STUDENTE`
--

DROP TABLE IF EXISTS `STUDENTE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `STUDENTE` (
  `MATRICOLA` int NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `COGNOME` varchar(50) NOT NULL,
  `INDIRIZZO` varchar(50) DEFAULT NULL,
  `TELEFONO` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`MATRICOLA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STUDENTE`
--

LOCK TABLES `STUDENTE` WRITE;
/*!40000 ALTER TABLE `STUDENTE` DISABLE KEYS */;
INSERT INTO `STUDENTE` VALUES (111012,'Federica','Franco','ferrara san mateo 18','3783956142'),(123124,'mith','cuthli','monte carlo 22','3714630861'),(124109,'tezc','lipoca','maya 2 B','3739869564'),(165164,'Isabella','Mondadori','roma, bella vita 4/c','3968792013'),(170189,'liani','mopi','vicolo santo spirito 28','3713728564'),(171440,'jordan','Medjialeu','viale padova 44','3714630861');
/*!40000 ALTER TABLE `STUDENTE` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-07 19:40:34
