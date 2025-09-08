-- MySQL dump 10.13  Distrib 8.0.41, for macos14.7 (arm64)
--
-- Host: localhost    Database: rumah_sehat
-- ------------------------------------------------------
-- Server version	8.0.41

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
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci,
  `experience` text COLLATE utf8mb4_unicode_ci,
  `schedule` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'Dr. Ahmad Wijaya, Sp.PD','Spesialis Penyakit Dalam','Dokter Spesialis','Dokter spesialis penyakit dalam dengan pengalaman lebih dari 10 tahun','08123456789','ahmad@klinik.com','https://picsum.photos/seed/doctor1/400/400.jpg',NULL,NULL,NULL,'2025-08-28 18:40:23','2025-08-28 18:40:23'),(2,'Dr. Siti Nurhaliza, Sp.A','Spesialis Anak','Dokter Spesialis Anak','Dokter spesialis anak yang ramah dan berpengalaman','08198765432','siti@klinik.com',NULL,'S1 Kedokteran Universitas Indonesia, Spesialis Anak Universitas Gadjah Mada','15 tahun praktik di berbagai rumah sakit ternama','Senin - Jumat: 08:00 - 16:00, Sabtu: 08:00 - 12:00','2025-08-28 19:17:37','2025-08-28 19:17:37'),(3,'Dr. Darwan Triyono, Sp. M','mata','Spesialis Mata','Ahli dalam pengobatan penyakit mata dan pembedahan katarak.','(021) 555-1234','darwan.triyono@kliniksehat.com',NULL,'S1 Kedokteran UI, Spesialis Mata UGM','8 tahun','Senin-Jumat: 08:00-16:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(4,'Dr. Anggraini Dian Puspitadewi, Sp. PD','penyakit-dalam','Spesialis Penyakit Dalam','Spesialis dalam pengobatan diabetes dan hipertensi.','(021) 555-5678','anggraini.dian@kliniksehat.com',NULL,'S1 Kedokteran Unpad, Spesialis Penyakit Dalam','10 tahun','Senin-Kamis: 09:00-17:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(5,'Dr. R. Dwi Hendradianko, Sp.PD','penyakit-dalam','Spesialis Penyakit Dalam','Spesialis dalam pengobatan diabetes dan hipertensi.','(021) 555-0000','example@kliniksehat.com',NULL,'S1 Kedokteran Umum, Spesialis dari Universitas Terkemuka','10 tahun','Senin-Jumat: 08:00-16:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(6,'Dr. Zahrudin Ahmad, SpDVE, M.Ked. Klin.','kulit-kelamin','Spesialis Kulit dan Kelamin','Ahli dalam penanganan jerawat dan penyakit kulit berbahaya.','(021) 555-4567','zahrudin.ahmad@kliniksehat.com',NULL,'S1 Kedokteran UGM, Spesialis UNHAS','11 tahun','Senin, Rabu, Jumat: 10:00-17:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(7,'Dr. Niluh Wijayanti, SpDV','kulit-kelamin','Spesialis Kulit dan Kelamin','Ahli dalam penanganan jerawat dan penyakit kulit berbahaya.','(021) 555-5678','niluh.wijayanti@kliniksehat.com',NULL,'S1 UNUD, Spesialis UI','7 tahun','Selasa-Kamis: 09:00-14:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(8,'Dr. Solehah Catur Rahayu, Sp.JP','jantung','Spesialis Jantung','Spesialis dalam pembedahan jantung dan penyakit jantung koroner.','(021) 555-6789','solehah.rahayu@kliniksehat.com',NULL,'S1 UNS, Spesialis Jantung UI','12 tahun','Senin-Jumat: 07:30-13:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(9,'Dr. Jody Hernanto, Sp. B','bedah','Spesialis Bedah Umum','Ahli dalam pembedahan pencernaan dan laparoskopi.','(021) 555-7890','jody.hernanto@kliniksehat.com',NULL,'S1 UNDIP, Spesialis Bedah UGM','10 tahun','Senin-Rabu: 09:00-15:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(10,'Dr. Ariya Maulana Nasution, Sp. OT','orthopedi','Spesialis Orthopedi','Spesialis dalam pengobatan cedera tulang dan sendi.','(021) 555-8910','ariya.nasution@kliniksehat.com',NULL,'S1 UNAND, Spesialis OT UI','8 tahun','Selasa-Jumat: 08:30-14:30','2025-08-28 19:29:05','2025-08-28 19:29:05'),(11,'Dr. Sujut Winartoyo, Sp. THT-KL','tht','Spesialis THT','Ahli dalam pengobatan penyakit telinga, hidung, dan tenggorokan.','(021) 555-9101','sujut.winartoyo@kliniksehat.com',NULL,'S1 UGM, Spesialis THT UI','9 tahun','Senin-Jumat: 10:00-17:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(12,'Dr. Jonathan Chandra N., Sp.OG','kandungan','Spesialis Kandungan','Spesialis dalam kehamilan berisiko tinggi dan operasi sesar.','(021) 555-1122','jonathan.chandra@kliniksehat.com',NULL,'S1 UNDIP, Spesialis Obgyn UI','10 tahun','Senin, Kamis, Sabtu: 08:00-14:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(13,'Dr. Eka Rendy W. K., Sp.A','anak','Spesialis Anak','Ahli dalam penanganan penyakit infeksi pada anak.','(021) 555-1235','eka.rendy@kliniksehat.com',NULL,'S1 Kedokteran UNAIR, Spesialis Anak UGM','9 tahun','Senin-Kamis: 08:00-14:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(14,'Dr. Arsi Widyastriastuti, Sp.A','anak','Dokter Anak','Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.','(021) 555-1236','arsi.widyastri@kliniksehat.com',NULL,'S1 Kedokteran UGM, Spesialis Anak UI','7 tahun','Selasa-Jumat: 10:00-16:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(15,'Dr. As.ad Pratama putra','umum','Dokter Umum','Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.','(021) 555-1237','asad.pratama@kliniksehat.com',NULL,'S1 Kedokteran UII','5 tahun','Senin-Sabtu: 08:00-13:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(16,'Dr. Dwi Rahmat Lutfiani','umum','Dokter Umum','Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.','(021) 555-1238','dwi.lutfiani@kliniksehat.com',NULL,'S1 Kedokteran Unair','6 tahun','Senin-Jumat: 09:00-15:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(17,'Drg. Sinta Kurniawati','umum','Dokter Umum','Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.','(021) 555-1239','sinta.kurniawati@kliniksehat.com',NULL,'S1 Kedokteran Gigi UI','8 tahun','Senin-Jumat: 08:00-12:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(18,'Dr. Yayik Andini Ekowati','umum','Dokter Umum','Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.','(021) 555-1240','yayik.ekowati@kliniksehat.com',NULL,'S1 Kedokteran UMY','4 tahun','Senin-Kamis: 08:00-14:00','2025-08-28 19:29:05','2025-08-28 19:29:05'),(19,'Dr. Yunita Wulansari','umum','Dokter Umum','Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.','(021) 555-1241','yunita.wulansari@kliniksehat.com',NULL,'S1 Kedokteran UIN Malang','5 tahun','Selasa-Jumat: 09:00-14:00','2025-08-28 19:29:06','2025-08-28 19:29:06'),(20,'Dr. Christophorus N. H.','umum','Dokter Umum','Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.','(021) 555-1242','christo.nh@kliniksehat.com',NULL,'S1 Kedokteran Atma Jaya','6 tahun','Senin-Sabtu: 07:30-12:30','2025-08-28 19:29:06','2025-08-28 19:29:06'),(21,'Dr. Tatit Syahadani Alfirdausi','umum','Dokter Umum','Spesialis dalam pemeriksaan kesehatan rutin dan konseling kesehatan.','(021) 555-1243','tatit.alfirdausi@kliniksehat.com',NULL,'S1 Kedokteran Universitas Airlangga','7 tahun','Senin-Jumat: 08:00-14:00','2025-08-28 19:29:06','2025-08-28 19:29:06'),(22,'Dr. Zahrudin Ahmad, SpDVE, M.Ked. Klin.','kusta','Spesialis Kusta','Ahli dalam pengobatan penyakit kusta dan penyakit kulit menular.','(021) 555-1244','zahrudin.kusta@kliniksehat.com',NULL,'Spesialis Kulit UNHAS','11 tahun','Rabu-Jumat: 10:00-15:00','2025-08-28 19:29:06','2025-08-28 19:29:06'),(23,'Dr. Niluh Wijayanti, SpDV','kusta','Spesialis Kusta','Ahli dalam pengobatan penyakit kusta dan penyakit kulit menular.','(021) 555-1245','niluh.kusta@kliniksehat.com',NULL,'Spesialis Kulit UI','7 tahun','Selasa & Jumat: 13:00-17:00','2025-08-28 19:29:06','2025-08-28 19:29:06'),(24,'Drg. Sinta Kurniawati','gigi','Dokter Gigi Umum','Spesialis dalam perawatan gigi dan pencegahan penyakit gigi.','(021) 555-1246','sinta.gigi@kliniksehat.com',NULL,'S1 Kedokteran Gigi UI','8 tahun','Senin-Jumat: 08:00-13:00','2025-08-28 19:29:06','2025-08-28 19:29:06'),(25,'Dr. Yunita Dwi Anggarini, Sp.K.F.R., M.Ked.Klin.','rehabilitasi','Dokter Rehabilitasi Medik','Ahli dalam rehabilitasi pasca operasi dan cedera.','(021) 555-1247','yunita.rehab@kliniksehat.com',NULL,'S1 Kedokteran UGM, Spesialis Rehabilitasi Unair','9 tahun','Senin & Rabu: 08:00-12:00','2025-08-28 19:29:06','2025-08-28 19:29:06'),(26,'Dr. Gunandar Rachmadi, Sp.U','urologi','Spesialis Urologi','Spesialis dalam pengobatan penyakit ginjal dan sistem kemih.','(021) 555-1248','gunandar.rachmadi@kliniksehat.com',NULL,'S1 Kedokteran UGM, Spesialis Urologi UI','12 tahun','Kamis-Sabtu: 09:00-14:00','2025-08-28 19:29:06','2025-08-28 19:29:06'),(27,'Dr. Indrawan Tri Purnomo, Sp.N','neurologi','Spesialis Neurologi','Ahli dalam pengobatan stroke dan penyakit saraf.','(021) 555-1249','indrawan.purnomo@kliniksehat.com',NULL,'S1 Kedokteran UGM, Spesialis Saraf Unair','10 tahun','Senin-Kamis: 08:00-12:00','2025-08-28 19:29:06','2025-08-28 19:29:06'),(28,'Drg. Fepta Dea Anggini, Sp.KG','gigi','Dokter Konservasi Gigi','Spesialis dalam perawatan saluran akar dan konservasi gigi.','(021) 555-1250','fepta.anggini@kliniksehat.com',NULL,'S1 Kedokteran Gigi UI, Spesialis Konservasi Gigi UGM','9 tahun','Selasa-Kamis: 10:00-15:00','2025-08-28 19:29:07','2025-08-28 19:29:07');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2025_08_01_011120_create_doctors_table',1),(6,'2025_08_04_071855_create_sessions_table',1),(7,'2025_08_26_080558_add_specialization_column_to_doctors_table',2),(8,'2025_08_29_021640_add_education_experience_schedule_to_doctors_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
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
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
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
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2025-09-08 14:09:17
