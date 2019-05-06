-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: EAD
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id_cat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(45) DEFAULT NULL,
  `img_cat` varchar(45) DEFAULT NULL,
  `description_cat` longtext,
  `status_cat` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (2,'INGLÃŠS','banner.png','Videos de InglÃªs ','novo'),(3,'HISTORIA','135.jpg','HistÃ³ria passado arquivada em todas as lÃ­nguas por todo o mundo, por intermÃ©dio de registos histÃ³ricos.','novo'),(4,'PortuguÃªs ','E6BDE.jpg','A lÃ­ngua portuguesa, tambÃ©m designada portuguÃªs, Ã© uma lÃ­ngua romÃ¢nica flexiva ocidental originada no galego-portuguÃªs falado no Reino da Galiza e no norte de Portugal.','novo'),(5,'FÃ­sica ','fisica.jpg','FÃ­sica (do grego antigo: Ï†ÏÏƒÎ¹Ï‚ physis \"natureza\") Ã© a ciÃªncia que estuda a natureza e seus fenÃ´menos em seus aspectos mais gerais. Analisa suas relaÃ§Ãµes e propriedades, alÃ©m de descrever e explicar a maior parte de suas consequÃªncias. Busca a compreensÃ£o cientÃ­fica dos comportamentos naturais e gerais do mundo em nosso torno','novo');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_ead`
--

DROP TABLE IF EXISTS `course_ead`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_ead` (
  `id_course` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_course` varchar(100) DEFAULT NULL,
  `title_course` varchar(100) DEFAULT NULL,
  `move_course` varchar(300) DEFAULT NULL,
  `description_course` longtext,
  `question_course` longtext,
  `status_course_ead` varchar(45) DEFAULT NULL,
  `category_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_course`),
  UNIQUE KEY `id_course_UNIQUE` (`id_course`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_ead`
--

LOCK TABLES `course_ead` WRITE;
/*!40000 ALTER TABLE `course_ead` DISABLE KEYS */;
INSERT INTO `course_ead` VALUES (21,NULL,'Verbo To be','https://www.youtube.com/watch?v=2Wig3XCO_cs','Se vocÃª ainda nÃ£o aprendeu o verbo to be, que Ã© ensinado todo ano no colÃ©gio nÃ£o sei exatamente o porquÃª, nÃ³s vamos resolver esse problema hoje e aprender de uma vez por todas essa â€œjoÃ§aâ€.','\r\n        <div class=\"question\">\r\n          <p>What are the 3 forms of the verb to be ?</p>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q1\">\r\n            I, YOU, ARE\r\n          </label>\r\n          <label data-valor=\"certo\" for=\"\">\r\n            <input class=\"radio\" type=\"radio\" name=\"q1\" value=\"question 1\">\r\n            AM, ARE, IS\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q1\">\r\n            AM, I, IT\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q1\" value=\"question 3\">\r\n            nor one of the alternatives\r\n          </label>\r\n        </div>\r\n\r\n        <div class=\"question\">\r\n          <p>Adjective Funny</p>\r\n          <label data-valor=\"certo\" for=\"\">\r\n            <input  class=\"radio\" type=\"radio\" name=\"q2\">\r\n            engraÃ§ado, divertido, esquisito\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q2\">\r\n            feliz, esquisito, risÃ­vel\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q2\">\r\n            palhaÃ§o, cÃ´mico, engraÃ§ado\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q2\">\r\n            nor one of the alternatives\r\n          </label>\r\n        </div>','novo','2'),(22,NULL,'verbos importante','https://www.youtube.com/watch?v=7V68WIFtZww','VocÃª sabe quais sÃ£o os 10 verbos mais usados em inglÃªs? Neste vÃ­deo vocÃª vai aprender quais sÃ£o esses verbos e em quais contextos eles sÃ£o utilizados. Tenho certeza de que esta aula pode ajudar nÃ£o apenas aqueles que estÃ£o no nÃ­vel bÃ¡sico, mas tambÃ©m aqueles que jÃ¡ conhecem esses verbos e tÃªm interesse em aprender alguns usos diferentes para cada um deles. Pronto para a contagem regressiva? Qual deles serÃ¡ o verbo mais comum de todos? Aposto que Ã© um velho ','','novo','2'),(23,NULL,'7 DICAS PARA APRENDER INGLÃŠS','https://www.youtube.com/watch?v=S_9M9RDYu-4','OlÃ¡, pessoal! Aqui Ã© o Mairo Vergara com mais uma dica de inglÃªs. Hoje, serÃ£o 7 dicas para turbinar o seu aprendizado do idioma. ','','novo','2'),(25,NULL,'PrÃ©-HistÃ³ria - EvoluÃ§Ã£o dos hominÃ­deos','https://www.youtube.com/watch?v=wQqGWPubiqA','O prof. @Bussundahist (insta) explica direitinho gÃªnero Homo, desde os ancestrais Australopithecus, passando pelo Homo erectus, Homo habilis, Homo neanderthalensis atÃ© o homem moderno (nÃ³s!), chamado de Homo sapiens sapiens!','','novo','3'),(26,NULL,'AcentuaÃ§Ã£o: regras especiais - GramÃ¡tica','https://www.youtube.com/watch?v=wXjvN9KMbOM','Nesta videoaula, a prof. Dani continua explicando as regras de acentuaÃ§Ã£o, desta vez as regras especiais: regra do hiato, regra do ditongo+hiato e regra do ditongo aberto.','','novo','4'),(28,NULL,'Quer que desenhe? Ãtomo','https://www.youtube.com/watch?v=JvA4tKRDgzE','Descubra nesta aula uma das partÃ­culas mais fundamentais para a estrutura da matÃ©ria, os QUARKS.','<div class=\"question\">\r\n          <p>Particulas de um Ã¡tomo </p>\r\n          <label data-valor=\"certo\" for=\"\">\r\n            <input type=\"radio\" name=\"q1\" value=\"\">\r\n            EletrÃµes e um nÃºcleo compacto de protÃµes e neutrÃµes\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input class=\"radio\" type=\"radio\" name=\"q1\" value=\"\">\r\n            EletrÃµes e um nÃºcleo compacto de protÃµes quarks\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q1\" value=\"\">\r\n            EletrÃµes, protÃµes, deutrinos\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q1\" value=\"\">\r\n            Nem uma das alternativas\r\n          </label>\r\n        </div>\r\n\r\n<div class=\"question\">\r\n          <p>Quais sÃ£o os valores de carga das partÃ­culas de um Ã¡tomo </p>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q2\" value=\"\">\r\n            PrÃ³tons negativo, ElÃ©trons positivo, neutrÃµes nulos \r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input class=\"radio\" type=\"radio\" name=\"q2\" value=\"\">\r\n            PrÃ³tons nulos, ElÃ©trons positivo, neutrÃµes negativos \r\n          </label>\r\n          <label data-valor=\"certo\" for=\"\">\r\n            <input type=\"radio\" name=\"q2\" value=\"\">\r\n            PrÃ³tons positivo, ElÃ©trons negativos, neutrÃµes nulos \r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q2\" value=\"\">\r\n            Nem uma das alternativas\r\n          </label>\r\n        </div>\r\n\r\n<div class=\"question\">\r\n          <p>Quanto quilos correspondem  a 1 U.A </p>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q3\" value=\"\">\r\n            0 virgula 23 zeros virgula 1 quilo\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input class=\"radio\" type=\"radio\" name=\"q3\" value=\"\">\r\n            0 virgula 28 zeros virgula 2 quilo\r\n          </label>\r\n          <label data-valor=\"certo\" for=\"\">\r\n            <input type=\"radio\" name=\"q3\" value=\"\">\r\n            0 virgula 26 zeros virgula 1 quilo\r\n          </label>\r\n          <label data-valor=\"\" for=\"\">\r\n            <input type=\"radio\" name=\"q1\" value=\"\">\r\n            Nem uma das alternativas\r\n          </label>\r\n        </div>\r\n\r\n','novo','5');
/*!40000 ALTER TABLE `course_ead` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_ead`
--

DROP TABLE IF EXISTS `user_ead`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_ead` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_user` varchar(45) DEFAULT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL,
  `nivel_user` varchar(45) DEFAULT NULL,
  `course` longtext,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_ead`
--

LOCK TABLES `user_ead` WRITE;
/*!40000 ALTER TABLE `user_ead` DISABLE KEYS */;
INSERT INTO `user_ead` VALUES (1,'admin','admin@mail','xxxxxx','admin',NULL),(2,'aluno','aluno@mail','xxxxxx','user',NULL);
/*!40000 ALTER TABLE `user_ead` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-24 17:29:19
