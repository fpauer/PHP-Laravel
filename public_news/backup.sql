-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: public_news
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `Articles`
--

DROP TABLE IF EXISTS `Articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Articles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `photo_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Articles`
--

LOCK TABLES `Articles` WRITE;
/*!40000 ALTER TABLE `Articles` DISABLE KEYS */;
INSERT INTO `Articles` VALUES (24,1,'Saudi Arabia: All female Brunei crew in historic flight','<p><br></p><p class=\"story-body__introduction\">Three Royal Brunei Airlines pilots \r\nhave made history by being the company\'s first all-female flight crew, \r\nmaking their first journey to Saudi Arabia, where women are not allowed \r\nto drive.</p><p><br></p><p>The women flew the Boeing 787 Dreamliner from Brunei to Jeddah.</p><p><br></p><p>The milestone coincided with Brunei\'s National Day to celebrate independence. </p><p><br></p><p>Last\r\n year women in Saudi Arabia cast their votes for the first time in \r\nmunicipal elections. A total of 978 women also registered as candidates.</p><p><br></p><p>They were alongside 5,938 men and had to speak behind a partition while campaigning, or be represented by a man.</p><p><br></p><p>The decision to allow women to take part was taken by the late King Abdullah and is seen as a key part of his legacy.</p><p><br></p><h2 class=\"story-body__crosshead\">\'Great achievement\'</h2><p><br></p><p>The flight Captain was Sharifah Czarena, assisted by Senior First Officers Sariana Nordin and Dk Nadiah Pg Khashiem.</p><p><br></p>','http://res.cloudinary.com/pauer-projects/image/upload/v1458487192/jtczqmu2c0ttvvjl18ur.jpg','saudi-arabia-all-female-brunei-crew-in-historic-flight','BBC','','2016-03-20 18:19:53','2016-03-20 22:03:53',1),(25,1,'The empire the world forgot','<p><strong>An abandoned city of ghosts<br></strong>Ruled by a dizzying \r\narray of kingdoms and empires over the centuries – from the Byzantines \r\nto the Ottomans – the city of Ani once housed many thousands of people, \r\nbecoming a cultural hub and regional power under the medieval Bagratid \r\nArmenian dynasty. Today, it’s an eerie, abandoned city of ghosts that \r\nstands alone on a plateau in the remote highlands of northeast Turkey, \r\n45km away from the Turkish border city of Kars. As you walk among the \r\nmany ruins, left to deteriorate for over 90 years, the only sound is the\r\n wind howling through a ravine that marks the border between Turkey and \r\nArmenia.</p><p><br></p><div class=\"inline-media inline-image\">\r\n            <div class=\"inline-image-wrapper\">\r\n            <a id=\"p03m28f7\" class=\"responsive-image-wrapper fullsizeable\" data-caption=\"(Credit: Linda Caldwell/Alamy)\" data-caption-title=\"\" data-is-clickable=\"true\" href=\"http://ichef.bbci.co.uk/wwfeatures/1280_720/images/live/p0/3m/28/p03m28f7.jpg\"><img data-fixed-width-format=\"\" src=\"http://ichef.bbci.co.uk/wwfeatures/1280_720/images/live/p0/3m/28/p03m28f7.jpg\" title=\"Ani’s city walls \" alt=\"Ani’s city walls \" class=\"responsive landscape\" data-caption=\"(Credit: Linda Caldwell/Alamy)\" data-caption-title=\"\" width=\"\" height=\"\"></a><span id=\"\" class=\"icon-wrapper gel-icon-wrapper icon-wrapper-fullscreen\">\r\n    \r\n</span>\r\n            \r\n        </div>\r\n        <div class=\"caption-wrapper\">\r\n            <div class=\"caption-lining\">\r\n                <p class=\"caption-text caption-body\">(Credit: Linda Caldwell/Alamy)</p>\r\n            </div>\r\n        </div>\r\n        </div><p><br></p><p><strong>The toll of many rulers<br></strong>Visitors\r\n who pass through Ani’s city walls are greeted with a panoramic view of \r\nruins that span three centuries and five empires – including the \r\nBagratid Armenians, Byzantines, Seljuk Turks, Georgians and Ottomans. \r\nThe Ani plateau was ceded to Russia once the Ottoman Empire was defeated\r\n in the 1877-78 Russo-Turkish War. After the outbreak of World War I, \r\nthe Ottomans fought to take back northeast Anatolia, and although they \r\nrecaptured Ani and the surrounding area, the region was given to the \r\nnewly formed Republic of Armenia. The site changed hands for the last \r\ntime after the nascent Turkish Republic captured it during the 1920 \r\neastern offensive in the Turkish War of Independence.</p><p><br></p><div class=\"inline-media inline-image\">\r\n            <div class=\"inline-image-wrapper\">\r\n            <a id=\"p03m28tf\" class=\"responsive-image-wrapper fullsizeable\" data-caption=\"(Credit: Joseph Flaherty)\" data-caption-title=\"\" data-is-clickable=\"true\" href=\"http://ichef.bbci.co.uk/wwfeatures/1280_720/images/live/p0/3m/28/p03m28tf.jpg\"><img data-fixed-width-format=\"\" src=\"http://ichef.bbci.co.uk/wwfeatures/1280_720/images/live/p0/3m/28/p03m28tf.jpg\" title=\"Ancient bridge over the Akhurian River \" alt=\"Ancient bridge over the Akhurian River \" class=\"responsive landscape\" data-caption=\"(Credit: Joseph Flaherty)\" data-caption-title=\"\" width=\"\" height=\"\"></a><span id=\"\" class=\"icon-wrapper gel-icon-wrapper icon-wrapper-fullscreen\">\r\n    \r\n</span>\r\n            \r\n        </div>\r\n        <div class=\"caption-wrapper\">\r\n            <div class=\"caption-lining\">\r\n                <p class=\"caption-text caption-body\">(Credit: Joseph Flaherty)</p>\r\n            </div>\r\n        </div>\r\n        </div><p><br></p><p><strong>A hotly contested territory<br></strong>The\r\n ruins of an ancient bridge over the Akhurian River, which winds its way\r\n at the bottom of the ravine to create a natural border, are fitting \r\ngiven the vexed state of Turkish-Armenian relations. The two countries \r\nhave long disagreed over the mass killings of Armenians that took place \r\nunder the Ottoman Empire during World War I, and Turkey officially \r\nclosed its land border with Armenia in 1993 in response to a territorial\r\n conflict between Armenia and Turkey’s ally Azerbaijan.</p><p><br></p><div class=\"inline-media inline-image\">\r\n            <div class=\"inline-image-wrapper\">\r\n            <a id=\"p03m295c\" class=\"responsive-image-wrapper fullsizeable\" data-caption=\"(Credit: Joseph Flaherty)\" data-caption-title=\"\" data-is-clickable=\"true\" href=\"http://ichef.bbci.co.uk/wwfeatures/1280_720/images/live/p0/3m/29/p03m295c.jpg\"><img data-fixed-width-format=\"\" src=\"http://ichef.bbci.co.uk/wwfeatures/1280_720/images/live/p0/3m/29/p03m295c.jpg\" title=\"Ruins of Ani \" alt=\"Ruins of Ani \" class=\"responsive landscape\" data-caption=\"(Credit: Joseph Flaherty)\" data-caption-title=\"\" width=\"\" height=\"\"></a><span id=\"\" class=\"icon-wrapper gel-icon-wrapper icon-wrapper-fullscreen\">\r\n    \r\n</span>\r\n            \r\n        </div>\r\n        <div class=\"caption-wrapper\">\r\n            <div class=\"caption-lining\">\r\n                <p class=\"caption-text caption-body\">(Credit: Joseph Flaherty)</p>\r\n            </div>\r\n        </div>\r\n        </div><p><br></p><p><strong>A bid to save the ruins</strong><br>Although\r\n the focus on Turkish-Armenian tension preoccupies most discussion of \r\nAni, there’s an ongoing effort by archaeologists and activists to save \r\nthe ruins, which have been abandoned in favour of more accessible and \r\nless historically contested sites from classical antiquity. Historians \r\nhave long argued for Ani’s importance as a forgotten medieval nexus, and\r\n as a result, Ani is now on a tentative list for recognition as a <a href=\"http://whc.unesco.org/en/tentativelists/5725/\">Unesco World Heritage Site</a>. With some luck and careful restoration work, which has begun in 2011, they may be able to forestall the hands of time.</p><p><br></p>','http://res.cloudinary.com/pauer-projects/image/upload/v1458496636/ifhzbtkiem3g9wzweha4.jpg','the-empire-the-world-forgot','Joseph Flaherty','','2016-03-20 20:57:14','2016-03-20 22:04:00',1),(27,18,'Barack Obama in Cuba at start of historic visit','<p><br></p><p class=\"story-body__introduction\">President Barack Obama has arrived in Cuba for a historic visit to the island and talks with its communist leader.</p><p><br></p><p>He is the first sitting US president to visit since the 1959 revolution, which heralded decades of hostility.</p><p><br></p><p>Speaking at the reopened US embassy in Havana, he called the visit \"historic\". He also spent time in the old city.</p><p><br></p><p><a href=\"http://www.bbc.co.uk/news/topics/5e519ba4-2594-4118-a641-cdf75cd8ce46/barack-obama\" class=\"story-body__link\">Mr Obama</a>\r\n will meet President Raul Castro, but not retired revolutionary leader \r\nFidel Castro, and the pair will discuss trade and political reform.</p><p><br></p><p>The US president emerged smiling from Air Force One with First Lady Michelle and their daughters Sasha and Malia.</p><p><br></p><p>Holding\r\n umbrellas, the party walked in light drizzle along a red carpet to be \r\ngreeted by Cuban Foreign Minister Bruno Rodriguez. </p><p><br></p><p>Two hours after landing, Mr Obama greeted staff from the US embassy with the words: \"It is wonderful to be here\".</p><p><br></p><p>\"Back\r\n in 1928, President [Calvin] Coolidge came on a battleship. It took him \r\nthree days to get here, it only took me three hours. For the first time \r\never, Air Force One has landed in Cuba and this is our very first stop.\"</p><p><br></p>','http://res.cloudinary.com/pauer-projects/image/upload/v1458528380/s4yuufvsiyhxyyldljg2.jpg','barack-obama-in-cuba-at-start-of-historic-visit','Fernando Pauer 2','fpauer@hotmail.com','2016-03-21 05:46:20','2016-03-21 05:46:41',1),(30,1,'The Indian actress who hit back after being Photoshopped into porn','<p><span class=\"media-caption__text\"></span>\r\n            \r\n            \r\n        <br></p><p class=\"story-body__introduction\">Fed up with seeing \r\nthe faces of actresses Photoshopped onto other people\'s naked bodies, an\r\n Indian film star has hit back with a Facebook post attacking the \r\npractice and declaring that those who shared it had failed to embarrass \r\nher.  </p><p><br></p><p>Jyothi Krishna is one of the most famous names to emerge \r\nfrom the film industry centred in the southern Indian state of Kerala. \r\nIt\'s a smaller and more conservative filmmaking hub than the much more \r\nfamous Bollywood, and mostly makes films in the Malayalam language, but \r\nit does produce about 200 films a year. </p><p><br></p><p>South Indian film stars \r\nrarely wear racy costumes or appear in photo shoots, yet some fans graft\r\n the heads of female actors onto naked or pornographic images which are \r\nwidely shared on Whatsapp. </p><p><br></p><p>Krishna has hit back at this practice in <a href=\"https://www.facebook.com/jyothikrishnaactress/photos/a.256057061204215.1073741828.256054264537828/666214170188500/?type=3&amp;theater\" class=\"story-body__link-external\">a Facebook post</a>.\r\n Writing in local language Malayalam, Krishna - who has 1.5 million \r\nfollowers on Facebook - said she was speaking up to \"give other social \r\nmedia harassment victims like myself, the strength to express their \r\nvoice and bring culprits in front of the law.\" </p><p><br></p><p>In an interview \r\nwith BBC Trending, Krishna said she was first alerted to the image when \r\n\"a good friend, who is also a top movie director, first notified me of \r\nits existence. Then several of my friends and relatives started \r\nmessaging me to say it was being shared widely on social media.\" </p><p><br></p><p>Hers\r\n is far from an isolated case. Although not exclusive to Kerala, Krishna\r\n said that the sharing of Photoshopped porn in the region was a \"huge \r\nproblem\" and that she has lodged a complaint with the police.</p><p><br></p><p>Last year, two teenagers from Kerala were <a href=\"http://www.indiaglitz.com/kerala-police-arrest-two-teenage-boys-in-asha-sarath-fake-video-case-tamil-news-140390.html\" class=\"story-body__link-external\">charged under cybercrime laws for uploading a fake video of another Malayalam actress, Asha Sarath</a>, on Whatsapp and Facebook. And a 19 year-old man was <a href=\"http://www.ibtimes.co.in/student-arrested-creating-parasparam-actress-gayathri-arun-aka-deepthis-fake-facebook-page-640778\" class=\"story-body__link-external\">arrested for sharing \"obscene and forged material in electronic form\" of Kerala TV actress Gayathri Arun</a>. </p><p><br></p>','http://res.cloudinary.com/pauer-projects/image/upload/v1458600358/gp4oaql6nsisdak3ujpq.jpg','the-indian-actress-who-hit-back-after-being-photoshopped-into-porn','Fernando Pauer','fpauer@gmail.com','2016-03-22 01:45:57','2016-03-22 01:46:19',1);
/*!40000 ALTER TABLE `Articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1);
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('fpauer@hotmail.com','VSg7HjB9fUGk2fwvxMtnL0qc6UaJzP','2016-03-21 02:00:14'),('fpauer@hotmail.com','7c7f49b86c4e274229dbebfae5a3e1eaf81a0fcebbefcd1c0f04ff5495936fba','2016-03-21 02:16:39'),('fpauer@gmail.com','e4474d98240b514d8aa03232dc495ae4f1933c6c012c50b42e3ffe3a9c710f99','2016-03-21 05:35:22');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `confirmed` int(1) DEFAULT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='utf8_unicode_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Fernando Pauer','fpauer@gmail.com','$2y$10$xutF6HaokZaOaomlx.nwxuPjtzbueMinIuOvSzf59dGy68OM3wib.','EFeCeNnWRyH8co2KMcqgfG3bra3J66Wmu2SB4O4wlAicBESJDl9bZ831Sf9B','2016-03-19 18:17:56','2016-03-21 02:17:35',1,''),(2,'Test','test@gmail.com','$2y$10$hB6LKk/ItyVvAY4fza/u7OX7kUjCglPare4m5Tjkbp.D1FPmXHl42','TTvq5l187LNNMLDlKwzEol7PZYH3a8SInvi8zxh768oYuVUnMuV3D5DD82bv','2016-03-21 03:21:50','2016-03-21 03:31:52',1,''),(18,'Fernando Pauer 2','fpauer@hotmail.com','$2y$10$oW/Ye2yijJ.MVu1qz7BzCO8twqRoyZ3doZgbYdm/aHRQYRHDxh5He',NULL,'2016-03-21 05:43:42','2016-03-21 05:44:45',1,'rzZQFZFVrJsrAtUUl8LkKIqwVZRqnE');
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

-- Dump completed on 2016-03-21 19:48:18
