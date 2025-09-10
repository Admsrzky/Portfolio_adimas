-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for portofolio_adimas
CREATE DATABASE IF NOT EXISTS `portofolio_adimas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `portofolio_adimas`;

-- Dumping structure for table portofolio_adimas.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.cache: ~0 rows (approximately)
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:2;', 1757449020),
	('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1757449020;', 1757449020),
	('laravel-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1757485147),
	('laravel-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1757485147;', 1757485147);

-- Dumping structure for table portofolio_adimas.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.cache_locks: ~0 rows (approximately)

-- Dumping structure for table portofolio_adimas.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.clients: ~0 rows (approximately)

-- Dumping structure for table portofolio_adimas.contact_messages
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.contact_messages: ~0 rows (approximately)

-- Dumping structure for table portofolio_adimas.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table portofolio_adimas.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table portofolio_adimas.general_settings
CREATE TABLE IF NOT EXISTS `general_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_subtitle` text COLLATE utf8mb4_unicode_ci,
  `hero_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2 Y.',
  `projects_completed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '10+',
  `happy_clients` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '58',
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_description_1` text COLLATE utf8mb4_unicode_ci,
  `about_description_2` text COLLATE utf8mb4_unicode_ci,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.general_settings: ~0 rows (approximately)
INSERT INTO `general_settings` (`id`, `hero_title`, `hero_subtitle`, `hero_image`, `years_experience`, `projects_completed`, `happy_clients`, `about_title`, `about_description_1`, `about_description_2`, `about_image`, `cv_path`, `contact_address`, `contact_email`, `contact_phone`, `footer_copyright`, `created_at`, `updated_at`) VALUES
	(1, 'Adimas Rizki Purwanto', 'I am an Information Systems student with experience in Web Application and Developer with more than 2 years of experience with a track record of completing 10 projects in application and web development.', 'settings/01K4R1Y14Z67VQ91B33TG6XB8M.png', '2', '10', '20', 'I am Professional User Experience Web Developments', '<p>I develop services for customers specializing in creating stylish, modern websites, web services, and online stores. My passion is to develop digital user experiences.</p>', '<p>I specialize in web development and develop services for customers specializing in creating stylish, modern websites and web services.</p>', 'settings/01K4R1YQPMZRTNFWW27FP56M58.png', 'settings/01K4R11R8GSH9XB0HF7J5EDYJX.pdf', 'Sepang Mountain Residence, Serang Banten, Indonesia', 'adimasrizki926@gmail.com', '087887967328', 'Copyright © 2025 | Adimas Rizkis. All Rights Reserved.', '2025-09-09 12:46:30', '2025-09-09 13:16:26');

-- Dumping structure for table portofolio_adimas.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.jobs: ~0 rows (approximately)

-- Dumping structure for table portofolio_adimas.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.job_batches: ~0 rows (approximately)

-- Dumping structure for table portofolio_adimas.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_09_09_120220_create_generalsettings_table', 2),
	(5, '2025_09_09_120253_create_social_links_table', 2),
	(6, '2025_09_09_120307_create_projects_table', 2),
	(7, '2025_09_09_120331_create_work_processes_table', 2),
	(8, '2025_09_09_120343_create_clients_table', 2),
	(9, '2025_09_09_120401_create_contact_messages_table', 2);

-- Dumping structure for table portofolio_adimas.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table portofolio_adimas.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_study_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.projects: ~0 rows (approximately)
INSERT INTO `projects` (`id`, `title`, `category`, `description`, `image`, `case_study_url`, `is_published`, `order`, `created_at`, `updated_at`) VALUES
	(1, 'RE - PROJECT | Printing & Photography', 'Web Development', '<p>The re-project website was created to simplify photography and printing service orders. It features an elegant, modern, and responsive design.</p>', 'project-images/01K4QED6VYG12AVZ149BVT3VQ1.png', 'https://reprojectclgn.com/', 1, 1, '2025-09-09 07:34:49', '2025-09-09 23:18:50'),
	(2, 'E - Commerce | Almira Shop', 'Web Development', '<p>cek</p>', 'project-images/01K4QGAR2M28DMFJF29NPAD55F.png', 'https://almirashop.store/', 1, 2, '2025-09-09 08:06:58', '2025-09-09 23:19:32'),
	(3, 'Toko Online | Faa Roti', 'Web Development', '<p>cek</p>', 'project-images/01K4QGDQV63M6Q9XA8722SQ86V.png', 'https://faaroti.shop/', 1, 3, '2025-09-09 08:10:03', '2025-09-09 23:20:20'),
	(4, 'MAN 1 Cilegon Bullying and Sexual Harassment Complaint Information System', 'Web Development', '<p>cek</p>', 'project-images/01K4QGJJWDCSBAW5DSQAPHG0RY.png', 'https://sipeng.site/', 1, 4, '2025-09-09 08:12:42', '2025-09-09 23:20:45');

-- Dumping structure for table portofolio_adimas.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
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

-- Dumping data for table portofolio_adimas.sessions: ~2 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('it7j1WNFJmXCMRb4HQMtTA36EzBB4Vu1mAkDxsWK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiRjVFYWczQXNVbUI2VGVjNmNGWVltWXBBd1hiZUJtbU9GenlxaDc0TyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vd29yay1wcm9jZXNzZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkbzhFUnVJZjN6dnprV01qZnhua3JPdUdmd3hWUjEyZHJPakkvNDY0S05IQk9jZlVlejJmLjYiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fXM6NjoidGFibGVzIjthOjE6e3M6NDE6ImIxZDZmYzM0Mzk3OTFkYzc2MDhhZTEyM2FmMDQ4ZDVmX3Blcl9wYWdlIjtzOjM6ImFsbCI7fX0=', 1757489073),
	('OPjeLghPXN4jphbyelhrGZ9MauffHE56X7PhZQRh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzdvdnVPWDgxSVc3cm91bFhzWnd4TG85dWtLeml6VUVEbHViZlRqZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757487396),
	('ozfKwcbfR6yf7fdAFqKuynGvVYILnES8dEZZu2TV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMzhnV3hXOWJ3eGtxS2xrUnRlSk9zaTNVdUtzWkZwYldUQWNJUTI2eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9nZW5lcmFsLXNldHRpbmdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJG84RVJ1SWYzenZ6a1dNamZ4bmtyT3VHZnd4VlIxMmRyT2pJLzQ2NEtOSEJPY2ZVZXoyZi42IjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1757449013),
	('QaiCG756Q9jgzz4nrYtgeM7Vm0ZJaADZ7AacjWyN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNFNSd0hldHhpbTBrMjd3U2Q4UWNaemtBWXJtckxTdVFIRGhtaGJySCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757497458),
	('qAjGchrkV6qZ0c9GYI4sTJKFcWpyAqYZo9zIuBFz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejNuUzlITEFiR2NxRXU0ZzA0VlFXelVvbkpwekE1aFNCUjZxeTFFYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757496784),
	('s1nz178RXFmfH9n2Y88QZtAyF0XEFRNwy9B8VtEK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0tuQ1BJZkZCc0JNRngwQ3QzMDRhZVRWU1IxekNLMmtGRGNEZDVYbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757451947);

-- Dumping structure for table portofolio_adimas.social_links
CREATE TABLE IF NOT EXISTS `social_links` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_svg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.social_links: ~0 rows (approximately)
INSERT INTO `social_links` (`id`, `name`, `url`, `icon_svg`, `order`, `created_at`, `updated_at`) VALUES
	(1, 'Whatsaap', 'https://wa.me/6287887967328', 'social-link-icons/01K4QYHK8X7F9BYATBZJJMQ17F.png', 1, '2025-09-09 12:16:50', '2025-09-09 12:16:50'),
	(2, 'Instagram', 'https://www.instagram.com/admsrzky__', 'social-link-icons/01K4QZ49AZYEVSE04246AHANB6.png', 2, '2025-09-09 12:27:02', '2025-09-09 12:30:12'),
	(3, 'Glints', 'https://glints.com/id/profile', 'social-link-icons/01K4QZ6XAETS1KECBYPSV9XW75.png', 3, '2025-09-09 12:28:28', '2025-09-09 12:30:20'),
	(4, 'LinkedIn', 'https://www.linkedin.com/in/adimas-rizki-09172b273/', 'social-link-icons/01K4QZEKVAMHWMF7D1HHEVK5E9.png', 4, '2025-09-09 12:32:40', '2025-09-09 12:32:40');

-- Dumping structure for table portofolio_adimas.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('users','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'users',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Adimas Rizki', 'adimasrizki926@gmail.com', 'admin', NULL, '$2y$12$o8ERuIf3zvzkWMjfxnkrOuGfwxVR12drOjI/464KNHBOcfUez2f.6', NULL, '2025-09-09 05:00:31', '2025-09-09 05:00:31');

-- Dumping structure for table portofolio_adimas.work_processes
CREATE TABLE IF NOT EXISTS `work_processes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `step_number` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_svg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio_adimas.work_processes: ~0 rows (approximately)
INSERT INTO `work_processes` (`id`, `step_number`, `title`, `description`, `icon_svg`, `created_at`, `updated_at`) VALUES
	(2, 1, 'Research', 'Design meets function in every pixel, blending clarity with intuitive motion.', 'workprocess-icons/01K4QVKMKAE7PTKPBM6EZX30R3.png', '2025-09-09 11:25:31', '2025-09-09 11:25:31'),
	(3, 2, 'Analyze', 'Crafting clean, thoughtful interfaces where form flows seamlessly into function and clarity.', 'workprocess-icons/01K4QVTGYW1EN9SF70HRJZ8REJ.png', '2025-09-09 11:29:16', '2025-09-09 11:29:16'),
	(4, 3, 'Design', 'I design seamless digital experiences with precision, purpose, and a touch of elegance.', 'workprocess-icons/01K4QVY53V8WP9TJTJ70M8J3RE.png', '2025-09-09 11:31:15', '2025-09-09 11:31:15'),
	(5, 4, 'lauch', 'I craft digital products where thoughtful design meets performance-driven, responsive development.', 'workprocess-icons/01K4QVZ13YHWN69KX77SF005H6.png', '2025-09-09 11:31:44', '2025-09-09 11:31:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
