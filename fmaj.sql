-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: fmaj
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attachable_id` int(10) unsigned NOT NULL,
  `attachable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attachments_user_id_foreign` (`user_id`),
  CONSTRAINT `attachments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_applications`
--

DROP TABLE IF EXISTS `job_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cover_letter` longtext COLLATE utf8_unicode_ci NOT NULL,
  `listing_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `job_applications_user_id_foreign` (`user_id`),
  CONSTRAINT `job_applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_applications`
--

LOCK TABLES `job_applications` WRITE;
/*!40000 ALTER TABLE `job_applications` DISABLE KEYS */;
INSERT INTO `job_applications` VALUES (1,'2016-11-27 15:17:49','2016-11-27 15:17:49',1,'Just checking in you',1),(2,'2016-11-27 16:01:59','2016-11-27 16:01:59',1,'',5);
/*!40000 ALTER TABLE `job_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(10) unsigned NOT NULL,
  `work_hour_start` time NOT NULL,
  `work_hour_end` time NOT NULL,
  `last_activated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listings`
--

LOCK TABLES `listings` WRITE;
/*!40000 ALTER TABLE `listings` DISABLE KEYS */;
INSERT INTO `listings` VALUES (1,'2016-10-31 19:00:00','2016-11-27 17:02:50','Digital Marketing Specialist','Spreedly is a small startup that\'s growing. Our list of \"awesome functionality that real customers will pay us for if only we can get it implemented\" is growing faster than we can check things off, and we need to immediately grow our team with an experienced engineer that can hop into a high-functioning, experienced team and start learning and contributing quickly.\r\n<br>\r\nWhen you start at Spreedly (think first 6-12 months), you\'ll be spending 90%+ of your time working right on the product team building functionality for customers. Building product at Spreedly is somewhat unique in that our main product is a payments API used by other developers. So \"designing a UI\" often means thinking through how you would want a given API to work if you were using it and \"adding a feature for a customer\" often means working through how to securely enable a developer to do something interesting with a credit card number.\r\n\r\nOh, did we forget to mention that? We work with credit card data. Constantly. It\'s basically what we get paid to do, so that others don\'t have to. So thinking about security is a way of life at Spreedly, as is building sustainable processes to keep things safe, and our auditors happy.\r\n\r\nWhat we\'re looking for in a senior engineer is somebody who\'s not afraid to jump into a pretty complex technical problems and make sense of them. We regularly deal with the dark underbelly of software – think encryption, encoding, and security, all within the context of a distributed system. You don\'t have to be an expert in any of those aspects, but you shouldn\'t be intimidated by the thought of learning about them either.\r\n\r\nOnce you\'ve gotten your feet under you and understand the domain well enough, we envision you being the technical lead for one aspect of our service. That means you can work with junior engineers and help them tackle the task at hand using pragmatic software practices. We don\'t want rockstars or ninjas. We need people that are good at their job while also elevating the people around them.\r\n\r\nAs per the above, an interest in and some experience with leading a software engineering team.\r\nAs per our immediate needs, a proven track record of delivering well-crafted software.\r\nAs per working in a startup, a willingness to be a generalist and dig into new things you\'ve never done before.\r\nExcitement about building products for Spreedly\'s customers, who are primarily businesses doing commerce and their developers who are using our API\'s and toolkits.\r\nExcellent written communications, and a willingness to use them to document your work as necessary.\r\nThe ability to operate semi-autonomously, sorting your own immediate priorities out of the ever-shifting needs of a startup environment.\r\nA quiet confidence in your ability to learn new tech as necessary. Today we work primarily with Ruby, Rails, Elixir, Phoenix, Riak, Kafka, Postgres, Redis, and Linux ... but are always pragmatically evaluating new languages and tools\r\n\r\nRemote candidates must be located in the continental US (we\'ll want to see you in person about once a quarter). Most of our technical team is in the RDU area and works out of our office in downtown Durham, NC two days a week, and from wherever we fancy the other three days a week. We also have ~20% of our team already remote. So, although we\'re pretty aware of what it takes to support remote employees, if you are remote we\'d like for you to be an experienced one.\r\n\r\nWe are pretty opinionated about the right and wrong way to do things (while always being sure to regularly challenge our position), and that\'s reflected in our hiring process. If you want to get a sense for what your application process will look like, we\'d encourage you to read the following: Stop Hazing Your Potential Hires and Programming Puzzles Are Not the Answer.\r\n\r\nIf this at all sounds interesting, we\'d love to hear from you!',150000,'07:00:00','15:00:00','2016-11-19 19:00:00',2),(2,'2016-11-22 19:00:00','2016-11-27 07:54:54','React Developer','We are GovPredict, an exponentially growing, Y Combinator-backed startup inWashington, DC. Our software+data product helps companies predict what the USgovernment will do. We work with Fortune 500 publicly-traded companies,Ivy-League universities, and United States House and Senate offices.Our culture is \"build fast and ask questions later.\" But we value rigor andbest-practices too. Our team of powerful engineers is building the software thatno government has ever seen before.We communicate in English, Russian, and Romanian. Our team of top-tier softwaredevelopers is in Moldova and Romania and our sales + business development is inthe USA.',0,'00:00:00','00:00:00','2016-11-22 19:00:00',2),(3,'2016-11-22 19:00:00','2016-11-22 19:00:00','Rails Developer','As a senior developer at GovPredict, you will be responsible for architectingsoftware, providing technical leadership, writing smart+scalable code, andhelping grow our team.You will be a team leader working with data nobody has ever worked with before.You will work on frontend and backend features. Our product pulls in data fromstructured APIs or from unstructured sources with our python scrapers. We thenmanipulate, organize, and display it in never before seen ways to our customers.',0,'00:00:00','00:00:00','2016-11-21 19:00:00',2),(4,'2016-11-22 19:00:00','2016-11-22 19:00:00','NodeJS Developer','The perfect match is an articulate individual with an interest in internet technology and marketing. You will have the opportunity to collaborate with excellent professionals, internally and externally. This is your opportunity to see how a distributed team of professionals works to build, support, and advanced software as a service platform. Please know that this is a remote full-time contract position and requires a disciplined and motivated personality. ',0,'00:00:00','00:00:00','2016-11-18 19:00:00',2),(5,'2016-11-23 19:00:00','2016-11-27 07:13:49','Laravel Developer','Lead the backend design and development for RocketCyber’s cloud product including:\r\n\r\n\r\n\r\nRESTful APIs \r\n\r\nDesign data models and processing for high volume data ingestion\r\n\r\nCreating and improving UI interfaces to meet specifications and design mockups\r\n\r\nDefining coding standards\r\n\r\nImplementing product development infrastructure (Github, Continuous Integration, Test etc)',0,'00:00:00','00:00:00','2016-11-22 19:00:00',2),(7,'2016-11-27 16:48:32','2016-11-27 16:48:32','Janitor','asdasd',0,'16:00:00','01:00:00',NULL,2);
/*!40000 ALTER TABLE `listings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_resets_table',1),(2,'2016_11_21_090936_create_attachments_table',1),(3,'2016_11_21_090936_create_feedback_table',1),(4,'2016_11_21_090936_create_job_applications_table',1),(5,'2016_11_21_090936_create_listings_table',1),(6,'2016_11_21_090936_create_user_roles_table',1),(7,'2016_11_21_090936_create_users_table',1),(8,'2016_11_21_090946_create_foreign_keys',1),(9,'2016_11_21_220224_add_user_id_to_listings_table',2),(10,'2016_11_24_224222_edit_description_type_of_listing_table',3),(11,'2016_11_27_175224_add_cover_letter_to_job_applications_table',3),(12,'2016_11_27_195126_add_listing_id_to_job_applications_table',4),(13,'2016_11_27_215530_add_salary_to_listings_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (1,'2016-11-21 10:46:36','2016-11-21 10:46:36','admin','Administrator'),(2,'2016-11-21 10:46:36','2016-11-21 10:46:36','employer','Employer'),(3,'2016-11-21 10:46:36','2016-11-21 10:46:36','individual','Individual');
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(10) unsigned NOT NULL,
  `reward_points` mediumint(9) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_role_foreign` (`role`),
  CONSTRAINT `users_role_foreign` FOREIGN KEY (`role`) REFERENCES `user_roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'2016-11-21 11:09:37','2016-11-27 16:25:34','Adil Shaikh','hello@adils.me','$2y$10$dYpLV95zWbQNFo0K2AAutOwd/1NhXbzBZ.slMZH0rBpzOEVYWmuW6','923422633745',3,0,0,'wXuLvInObxKmKdppATHMlT3mTv78xwp3e8dEJxvpRzVGZzE8kqrlOcIYW4rJ'),(2,'2016-11-23 07:34:48','2016-11-27 17:04:13','Scon Chandler','sconchandler@gmail.com','$2y$10$ZrXLtndcTcmckDL4r26oo.WI1VftlPYD8Qvp/YUgwT7A6ToGo8kuK',NULL,2,0,0,'lx1YfLjJH1i2QAdDpkNt983G6ps3BV6zgPivSPhTPIGcqPDJUUDmEQNkeYQD');
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

-- Dump completed on 2016-11-28  4:22:32
