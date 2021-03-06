-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: miji
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

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
-- Table structure for table `acompanante`
--

DROP TABLE IF EXISTS `acompanante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acompanante` (
  `id_persona` int(10) unsigned NOT NULL,
  `id_participante` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_persona`,`id_participante`),
  KEY `id_persona` (`id_persona`),
  KEY `id_participante` (`id_participante`),
  CONSTRAINT `fk_Participante` FOREIGN KEY (`id_participante`) REFERENCES `participante` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_Persona1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acompanante`
--

LOCK TABLES `acompanante` WRITE;
/*!40000 ALTER TABLE `acompanante` DISABLE KEYS */;
INSERT INTO `acompanante` VALUES (24,14);
/*!40000 ALTER TABLE `acompanante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `action_log`
--

DROP TABLE IF EXISTS `action_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action_log` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `User_ID` int(10) unsigned DEFAULT NULL,
  `Accion` varchar(64) DEFAULT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `User_ID_FK` (`User_ID`),
  CONSTRAINT `User_ID_FK` FOREIGN KEY (`User_ID`) REFERENCES `logins` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_log`
--

LOCK TABLES `action_log` WRITE;
/*!40000 ALTER TABLE `action_log` DISABLE KEYS */;
INSERT INTO `action_log` VALUES (1,1,'Login','2018-03-15 16:56:48'),(2,1,'Descargar BD','2018-03-15 16:56:53'),(3,1,'Descargar BD','2018-03-15 16:57:58'),(4,1,'Logout','2018-03-15 16:58:53'),(5,1,'Login','2018-03-15 17:06:49'),(6,1,'Logout','2018-03-15 17:08:13'),(7,1,'Login','2018-03-15 17:08:47'),(8,1,'Descargar BD','2018-03-15 17:08:48'),(9,1,'Logout','2018-03-15 17:08:52'),(10,1,'Login','2018-03-15 17:09:41'),(11,1,'Logout','2018-03-15 17:10:49');
/*!40000 ALTER TABLE `action_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` VALUES (1,'admin','f230fecccfc6eae2c3d3fea119b8bb157fd7e237e27ea7b43d04430e34ff6e46');
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `codigo` varchar(5) DEFAULT NULL,
  `lada` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pais`
--

LOCK TABLES `pais` WRITE;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` VALUES (1,'Afghanistan','AF','+93'),(2,'Albania ','AL','+355'),(3,'Algeria','DZ','+213'),(4,'American Samoa','AS','+1-684'),(5,'Andorra, Principality of ','AD','+376'),(6,'Angola','AO','+244'),(7,'Anguilla','AI','+1-264'),(8,'Antarctica','AQ','+672'),(9,'Antigua and Barbuda','AG','+1-268'),(10,'Argentina','AR','+54'),(11,'Armenia','AM','+374'),(12,'Aruba','AW','+297'),(13,'Australia','AU','+61'),(14,'Austria','AT','+43'),(15,'Azerbaijan or Azerbaidjan (Former Azerbaijan Soviet Socialist Republic)','AZ','+994'),(16,'Bahamas, Commonwealth of The','BS','+1-242'),(17,'Bahrain, Kingdom of (Former Dilmun)','BH','+973'),(18,'Bangladesh (Former East Pakistan)','BD','+880'),(19,'Barbados','BB','+1-246'),(20,'Belarus (Former Belorussian [Byelorussian] Soviet Socialist Republic)','BY','+375'),(21,'Belgium','BE','+32'),(22,'Belize (Former British Honduras)','BZ','+501'),(23,'Benin (Former Dahomey)','BJ','+229'),(24,'Bermuda','BM','+1-441'),(25,'Bhutan, Kingdom of','BT','+975'),(26,'Bolivia','BO','+591'),(27,'Bosnia and Herzegovina','BA','+387'),(28,'Botswana (Former Bechuanaland)','BW','+267'),(29,'Bouvet Island (Territory of Norway)','BV',''),(30,'Brazil','BR','+55'),(31,'British Indian Ocean Territory (BIOT)','IO',''),(32,'Brunei (Negara Brunei Darussalam)','BN','+673'),(33,'Bulgaria','BG','+359'),(34,'Burkina Faso (Former Upper Volta)','BF','+226'),(35,'Burundi (Former Urundi)','BI','+257'),(36,'Cambodia, Kingdom of (Former Khmer Republic, Kampuchea Republic)','KH','+855'),(37,'Cameroon (Former French Cameroon)','CM','+237'),(38,'Canada','CA','+1'),(39,'Cape Verde','CV','+238'),(40,'Cayman Islands','KY','+1-345'),(41,'Central African Republic','CF','+236'),(42,'Chad','TD','+235'),(43,'Chile','CL','+56'),(44,'China','CN','+86'),(45,'Christmas Island','CX','+53'),(46,'Cocos (Keeling) Islands','CC','+61'),(47,'Colombia','CO','+57'),(48,'Comoros, Union of the','KM','+269'),(49,'Congo, Democratic Republic of the (Former Zaire)','CD','+243'),(50,'Congo, Republic of the','CG','+242'),(51,'Cook Islands (Former Harvey Islands)','CK','+682'),(52,'Costa Rica','CR','+506'),(53,'Cote D\'Ivoire (Former Ivory Coast)','CI','+225'),(54,'Croatia (Hrvatska)','HR','+385'),(55,'Cuba','CU','+53'),(56,'Cyprus','CY','+357'),(57,'Czech Republic','CZ','+420'),(58,'Czechoslavakia (Former) See CZ Czech Republic or Slovakia','CS',''),(59,'Denmark','DK','+45'),(60,'Djibouti (Former French Territory of the Afars and Issas, French Somaliland)','DJ','+253'),(61,'Dominica','DM','+1-767'),(62,'Dominican Republic','DO','+1-829'),(63,'East Timor (Former Portuguese Timor)','TP','+670'),(64,'Ecuador','EC','+593'),(65,'Egypt (Former United Arab Republic - with Syria)','EG','+20'),(66,'El Salvador','SV','+503'),(67,'Equatorial Guinea (Former Spanish Guinea)','GQ','+240'),(68,'Eritrea (Former Eritrea Autonomous Region in Ethiopia)','ER','+291'),(69,'Estonia (Former Estonian Soviet Socialist Republic)','EE','+372'),(70,'Ethiopia (Former Abyssinia, Italian East Africa)','ET','+251'),(71,'Falkland Islands (Islas Malvinas)','FK','+500'),(72,'Faroe Islands','FO','+298'),(73,'Fiji','FJ','+679'),(74,'Finland','FI','+358'),(75,'France','FR','+33'),(76,'French Guiana or French Guyana','GF','+594'),(77,'French Polynesia (Former French Colony of Oceania)','PF','+689'),(78,'French Southern Territories and Antarctic Lands','TF',''),(79,'Gabon (Gabonese Republic)','GA','+241'),(80,'Gambia, The','GM','+220'),(81,'Georgia (Former Georgian Soviet Socialist Republic)','GE','+995'),(82,'Germany','DE','+49'),(83,'Ghana (Former Gold Coast)','GH','+233'),(84,'Gibraltar','GI','+350'),(85,'Great Britain (United Kingdom)','GB',''),(86,'Greece','GR','+30'),(87,'Greenland','GL','+299'),(88,'Grenada','GD','+1-473'),(89,'Guadeloupe','GP','+590'),(90,'Guam','GU','+1-671'),(91,'Guatemala','GT','+502'),(92,'Guinea (Former French Guinea)','GN','+224'),(93,'Guinea-Bissau (Former Portuguese Guinea)','GW','+245'),(94,'Guyana (Former British Guiana)','GY','+592'),(95,'Haiti','HT','+509'),(96,'Heard Island and McDonald Islands (Territory of Australia)','HM',''),(97,'Holy See (Vatican City State)','VA',''),(98,'Honduras','HN','+504'),(99,'Hong Kong','HK','+852'),(100,'Hungary','HU','+36'),(101,'Iceland','IS','+354'),(102,'India','IN','+91'),(103,'Indonesia (Former Netherlands East Indies; Dutch East Indies)','ID','+62'),(104,'Iran, Islamic Republic of','IR','+98'),(105,'Iraq','IQ','+964'),(106,'Ireland','IE','+353'),(107,'Israel','IL','+972'),(108,'Italy','IT','+39'),(109,'Jamaica','JM','+1-876'),(110,'Japan','JP','+81'),(111,'Jordan (Former Transjordan)','JO','+962'),(112,'Kazakstan or Kazakhstan (Former Kazakh Soviet Socialist Republic)','KZ','+7'),(113,'Kenya (Former British East Africa)','KE','+254'),(114,'Kiribati (Pronounced keer-ree-bahss) (Former Gilbert Islands)','KI','+686'),(115,'Korea, Democratic People\'s Republic of (North Korea)','KP','+850'),(116,'Korea, Republic of (South Korea)','KR','+82'),(117,'Kuwait','KW','+965'),(118,'Kyrgyzstan (Kyrgyz Republic) (Former Kirghiz Soviet Socialist Republic)','KG','+996'),(119,'Lao People\'s Democratic Republic (Laos)','LA','+856'),(120,'Latvia (Former Latvian Soviet Socialist Republic)','LV','+371'),(121,'Lebanon','LB','+961'),(122,'Lesotho (Former Basutoland)','LS','+266'),(123,'Liberia','LR','+231'),(124,'Libya (Libyan Arab Jamahiriya)','LY','+218'),(125,'Liechtenstein','LI','+423'),(126,'Lithuania (Former Lithuanian Soviet Socialist Republic)','LT','+370'),(127,'Luxembourg','LU','+352'),(128,'Macau','MO','+853'),(129,'Macedonia, The Former Yugoslav Republic of','MK','+389'),(130,'Madagascar (Former Malagasy Republic)','MG','+261'),(131,'Malawi (Former British Central African Protectorate, Nyasaland)','MW','+265'),(132,'Malaysia','MY','+60'),(133,'Maldives','MV','+960'),(134,'Mali (Former French Sudan and Sudanese Republic)','ML','+223'),(135,'Malta','MT','+356'),(136,'Marshall Islands (Former Marshall Islands District - Trust Territory of the Pacific Islands)','MH','+692'),(137,'Martinique (French)','MQ','+596'),(138,'Mauritania','MR','+222'),(139,'Mauritius','MU','+230'),(140,'Mayotte (Territorial Collectivity of Mayotte)','YT','+269'),(141,'Mexico','MX','+52'),(142,'Micronesia, Federated States of (Former Ponape, Truk, and Yap Districts - Trust Territory of the Pacific Islands)','FM','+691'),(143,'Moldova, Republic of','MD','+373'),(144,'Monaco, Principality of','MC','+377'),(145,'Mongolia (Former Outer Mongolia)','MN','+976'),(146,'Montserrat','MS','+1-664'),(147,'Morocco','MA','+212'),(148,'Mozambique (Former Portuguese East Africa)','MZ','+258'),(149,'Myanmar, Union of (Former Burma)','MM','+95'),(150,'Namibia (Former German Southwest Africa, South-West Africa)','NA','+264'),(151,'Nauru (Former Pleasant Island)','NR','+674'),(152,'Nepal','NP','+977'),(153,'Netherlands','NL','+31'),(154,'Netherlands Antilles (Former Curacao and Dependencies)','AN','+599'),(156,'New Zealand (Aotearoa)','NZ','+64'),(157,'Nicaragua','NI','+505'),(158,'Niger','NE','+227'),(159,'Nigeria','NG','+234'),(160,'Niue (Former Savage Island)','NU','+683'),(161,'Norfolk Island','NF','+672'),(162,'Northern Mariana Islands (Former Mariana Islands District - Trust Territory of the Pacific Islands)','MP','+1-670'),(163,'Norway','NO','+47'),(164,'Oman, Sultanate of (Former Muscat and Oman)','OM','+968'),(165,'Pakistan (Former West Pakistan)','PK','+92'),(166,'Palau (Former Palau District - Trust Terriroty of the Pacific Islands)','PW','+680'),(167,'Palestinian State (Proposed)','PS','+970'),(168,'Panama','PA','+507'),(169,'Papua New Guinea (Former Territory of Papua and New Guinea)','PG','+675'),(170,'Paraguay','PY','+595'),(171,'Peru','PE','+51'),(172,'Philippines','PH','+63'),(173,'Pitcairn Island','PN',''),(174,'Poland','PL','+48'),(175,'Portugal','PT','+351'),(176,'Puerto Rico','PR','+1-939'),(177,'Qatar, State of','QA','+974'),(178,'Reunion (French) (Former Bourbon Island)','RE','+262'),(179,'Romania','RO','+40'),(180,'Russia - USSR (Former Russian Empire, Union of Soviet Socialist Republics, Russian Soviet Federative Socialist Republic) Now RU - Russian Federation','SU',''),(181,'Russian Federation','RU','+7'),(182,'Rwanda (Rwandese Republic) (Former Ruanda)','RW','+250'),(183,'Saint Helena','SH','+290'),(184,'Saint Kitts and Nevis (Former Federation of Saint Christopher and Nevis)','KN','+1-869'),(185,'Saint Lucia','LC','+1-758'),(186,'Saint Pierre and Miquelon','PM','+508'),(187,'Saint Vincent and the Grenadines','VC','+1-784'),(188,'Samoa (Former Western Samoa)','WS','+685'),(189,'San Marino','SM','+378'),(190,'Sao Tome and Principe','ST','+239'),(191,'Saudi Arabia','SA','+966'),(192,'Serbia, Republic of','RS',''),(193,'Senegal','SN','+221'),(194,'Seychelles','SC','+248'),(195,'Sierra Leone','SL','+232'),(196,'Singapore','SG','+65'),(197,'Slovakia','SK','+421'),(198,'Slovenia','SI','+386'),(199,'Solomon Islands (Former British Solomon Islands)','SB','+677'),(200,'Somalia (Former Somali Republic, Somali Democratic Republic)','SO','+252'),(201,'South Africa (Former Union of South Africa)','ZA','+27'),(202,'South Georgia and the South Sandwich Islands','GS',''),(203,'Spain','ES','+34'),(204,'Sri Lanka (Former Serendib, Ceylon)','LK','+94'),(205,'Sudan (Former Anglo-Egyptian Sudan)','SD','+249'),(206,'Suriname (Former Netherlands Guiana, Dutch Guiana)','SR','+597'),(207,'Svalbard (Spitzbergen) and Jan Mayen Islands','SJ',''),(208,'Swaziland, Kingdom of','SZ','+268'),(209,'Sweden','SE','+46'),(210,'Switzerland','CH','+41'),(211,'Syria (Syrian Arab Republic) (Former United Arab Republic - with Egypt)','SY','+963'),(212,'Taiwan (Former Formosa)','TW','+886'),(213,'Tajikistan (Former Tajik Soviet Socialist Republic)','TJ','+992'),(214,'Tanzania, United Republic of (Former United Republic of Tanganyika and Zanzibar)','TZ','+255'),(215,'Thailand (Former Siam)','TH','+66'),(216,'Togo (Former French Togoland)','TG',''),(217,'Tokelau','TK','+690'),(218,'Tonga, Kingdom of (Former Friendly Islands)','TO','+676'),(219,'Trinidad and Tobago','TT','+1-868'),(220,'Tromelin Island','TE',''),(221,'Tunisia','TN','+216'),(222,'Turkey','TR','+90'),(223,'Turkmenistan (Former Turkmen Soviet Socialist Republic)','TM','+993'),(224,'Turks and Caicos Islands','TC','+1-649'),(225,'Tuvalu (Former Ellice Islands)','TV','+688'),(226,'Uganda, Republic of','UG','+256'),(227,'Ukraine (Former Ukrainian National Republic, Ukrainian State, Ukrainian Soviet Socialist Republic)','UA','+380'),(228,'United Arab Emirates (UAE) (Former Trucial Oman, Trucial States)','AE','+971'),(229,'United Kingdom (Great Britain / UK)','GB','+44'),(230,'United States','US','+1'),(231,'United States Minor Outlying Islands','UM',''),(232,'Uruguay, Oriental Republic of (Former Banda Oriental, Cisplatine Province)','UY','+598'),(233,'Uzbekistan (Former UZbek Soviet Socialist Republic)','UZ','+998'),(234,'Vanuatu (Former New Hebrides)','VU','+678'),(235,'Vatican City State (Holy See)','VA','+418'),(236,'Venezuela','VE','+58'),(237,'Vietnam','VN','+84'),(238,'Virgin Islands, British','VI','+1-284'),(239,'Virgin Islands, United States (Former Danish West Indies)','VQ','+1-340'),(240,'Wallis and Futuna Islands','WF','+681'),(241,'Western Sahara (Former Spanish Sahara)','EH',''),(242,'Yemen','YE','+967'),(243,'Yugoslavia','YU',''),(244,'Zaire (Former Congo Free State, Belgian Congo, Congo/Leopoldville, Congo/Kinshasa, Zaire) Now CD - Congo, Democratic Republic of the','ZR',''),(245,'Zambia, Republic of (Former Northern Rhodesia)','ZM','+260'),(246,'Zimbabwe, Republic of (Former Southern Rhodesia, Rhodesia)','ZW','+263');
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participante`
--

DROP TABLE IF EXISTS `participante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participante` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_persona` int(10) unsigned NOT NULL,
  `institucion` varchar(140) NOT NULL,
  `talla` char(1) NOT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `posicion` varchar(100) NOT NULL,
  `prefijo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_persona` (`id_persona`),
  CONSTRAINT `fk_Persona0` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participante`
--

LOCK TABLES `participante` WRITE;
/*!40000 ALTER TABLE `participante` DISABLE KEYS */;
INSERT INTO `participante` VALUES (14,23,'La Salle CDMX','L','meluani','meluani ','Dircom','PhD');
/*!40000 ALTER TABLE `participante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(140) NOT NULL,
  `apellido` varchar(140) NOT NULL,
  `email` varchar(254) NOT NULL,
  `contacto_emergencia` varchar(140) NOT NULL,
  `sexo` char(1) NOT NULL,
  `direccion1` varchar(200) NOT NULL,
  `direccion2` varchar(200) DEFAULT NULL,
  `ciudad` varchar(140) DEFAULT NULL,
  `estado` varchar(140) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `pais_fk` int(10) unsigned NOT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pais_fk` (`pais_fk`),
  CONSTRAINT `fk_Pais` FOREIGN KEY (`pais_fk`) REFERENCES `pais` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (23,'Mijail ','Eluani ','maep@ulsa.mx','Tony ','M','Benjamin Franklin ','45','CDMX','CDMX','06140',141,'No me gusta el huevo, ni las verduras. \n'),(24,'Pepa','Perez','Pepa@pepe.com','Pepe','f','Addr1',NULL,'De Pep','Pepos','0000',100,NULL);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefono` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lada` varchar(8) DEFAULT NULL,
  `numero` varchar(15) NOT NULL,
  `id_persona` int(10) unsigned NOT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_persona` (`id_persona`),
  CONSTRAINT `fk_Persona2` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
INSERT INTO `telefono` VALUES (43,'+52','5552789500',23,'Casa'),(44,'+52','5540214822',23,'Celular'),(45,'+52','55284818',23,'Emergencia'),(46,'+1','123456',24,'Casa'),(47,'+1','54321',24,'Celular'),(48,'+1','5555555',24,'Emergencia');
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-15 11:11:41
