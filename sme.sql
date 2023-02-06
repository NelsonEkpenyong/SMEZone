-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sme
CREATE DATABASE IF NOT EXISTS `sme` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sme`;

-- Dumping structure for table sme.certificates
CREATE TABLE IF NOT EXISTS `certificates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.certificates: ~2 rows (approximately)
INSERT INTO `certificates` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'No Certificate', '2022-11-24 11:16:41', NULL),
	(2, 'Certificate', '2022-11-24 11:16:53', NULL);

-- Dumping structure for table sme.competition
CREATE TABLE IF NOT EXISTS `competition` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.competition: ~0 rows (approximately)

-- Dumping structure for table sme.course
CREATE TABLE IF NOT EXISTS `course` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_id` bigint(20) unsigned NOT NULL,
  `course_category_id` bigint(20) unsigned NOT NULL,
  `payment_type_id` bigint(20) unsigned NOT NULL,
  `synopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avg_time_spent_on_course` time DEFAULT NULL,
  `avg_feedback_score` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_type_id_foreign` (`type_id`),
  KEY `course_certificate_id_foreign` (`certificate_id`),
  KEY `course_course_category_id_foreign` (`course_category_id`),
  KEY `FK_course_price` (`payment_type_id`),
  CONSTRAINT `FK_course_price` FOREIGN KEY (`payment_type_id`) REFERENCES `price` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `course_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `course_course_category_id_foreign` FOREIGN KEY (`course_category_id`) REFERENCES `course_categories` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `course_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `course_type` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.course: ~6 rows (approximately)
INSERT INTO `course` (`id`, `type_id`, `name`, `embed_link`, `certificate_id`, `course_category_id`, `payment_type_id`, `synopsis`, `description`, `image`, `is_featured`, `created_at`, `updated_at`, `avg_time_spent_on_course`, `avg_feedback_score`) VALUES
	(13, 2, 'Lydia Hays', 'Coolade', 2, 3, 1, 'Officiis nostrum sin', '<p>An Amazing Course</p>', 'P5vA.png', 1, '2022-11-28 20:29:16', '2023-01-19 21:32:58', NULL, NULL),
	(14, 4, 'Pamela Gillespie', 'Aliquip et quo dolor', 2, 6, 2, 'Rem sint dignissimo', '<p>Another Course</p>', 'P12B.jpg', 0, '2022-11-28 20:38:42', '2023-01-19 20:39:23', NULL, NULL),
	(15, 4, 'Rama Meadows', 'Eaque reprehenderit', 1, 6, 2, 'Omnis dolorum conseq', '<p>Deserunt est cumque</p>', 'ally.png', 0, '2022-11-28 20:39:37', '2023-01-19 21:25:27', NULL, NULL),
	(16, 2, 'Hollee Campos', 'Dolore mollit velit', 2, 5, 1, 'Dolore occaecat rem', '<p>Ullam voluptates aut</p>', 'smart.png', 1, '2022-11-28 20:40:03', '2022-11-28 20:40:03', NULL, NULL),
	(17, 4, 'Vielka Dominguez', 'Repellendus Volupta', 1, 7, 1, 'Aut beatae labore to', '<p>Suscipit quia molest</p>', 'Acess.png', 1, '2022-11-28 20:40:31', '2022-11-28 20:40:31', NULL, NULL),
	(18, 1, 'Rukayat Biggy', 'Assumenda neque sint', 1, 3, 2, 'Qui fuga Culpa elit', '<p>Commodi est reprehen</p>', 'quick.png', 1, '2022-11-28 20:41:08', '2022-11-29 07:48:07', NULL, NULL);

-- Dumping structure for table sme.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `speakers` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaker_credential` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sme.courses: 0 rows
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Dumping structure for table sme.course_categories
CREATE TABLE IF NOT EXISTS `course_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.course_categories: ~6 rows (approximately)
INSERT INTO `course_categories` (`id`, `title`, `description`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'SME Accelerate', 'SME Accelerate', '', 1, NULL, NULL),
	(2, 'BET Videos', '	See what other Entrepreneurs are doing', '', 1, NULL, NULL),
	(3, 'Business plans and models', 'Thinking of what business Strategy to use?', '', 1, NULL, NULL),
	(4, 'Human Resources', 'Human Resources', '', 1, NULL, NULL),
	(5, 'Technology', 'Want to know how to use Technology?', '', 1, NULL, NULL),
	(6, 'Marketing', 'Having Market Problems?', '', 1, NULL, NULL),
	(7, 'Financial Management', 'Having Financial Management Challenges?', '', 1, NULL, NULL);

-- Dumping structure for table sme.course_feedback
CREATE TABLE IF NOT EXISTS `course_feedback` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) unsigned NOT NULL,
  `user_count` int(11) NOT NULL,
  `average_score` decimal(12,2) NOT NULL,
  `ratings_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_feedback_course_id_foreign` (`course_id`),
  CONSTRAINT `course_feedback_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.course_feedback: ~0 rows (approximately)

-- Dumping structure for table sme.course_type
CREATE TABLE IF NOT EXISTS `course_type` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.course_type: ~4 rows (approximately)
INSERT INTO `course_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Microsoft', '2022-11-20 20:40:01', '2022-11-20 20:40:01'),
	(2, 'Proprietary', '2022-11-20 20:40:36', '2022-11-20 20:40:36'),
	(3, 'Offline', '2022-11-20 20:40:56', '2022-11-20 20:40:56'),
	(4, 'Webinar', '2022-11-20 20:41:08', '2022-11-20 20:41:08');

-- Dumping structure for table sme.email_notifications
CREATE TABLE IF NOT EXISTS `email_notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_type_id` bigint(20) unsigned NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_video` tinyint(1) NOT NULL DEFAULT 0,
  `use_banner` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email_notifications_user_type_id_foreign` (`user_type_id`),
  CONSTRAINT `email_notifications_user_type_id_foreign` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.email_notifications: ~0 rows (approximately)

-- Dumping structure for table sme.enrollments
CREATE TABLE IF NOT EXISTS `enrollments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `enrolled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enrollments_user_id_foreign` (`user_id`),
  KEY `enrollments_course_id_foreign` (`course_id`),
  CONSTRAINT `enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `enrollments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.enrollments: ~0 rows (approximately)

-- Dumping structure for table sme.event
CREATE TABLE IF NOT EXISTS `event` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expected_participants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type_id` bigint(20) unsigned NOT NULL,
  `event_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_email_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invite_user` int(11) DEFAULT 0,
  `is_upcoming` tinyint(10) DEFAULT 0,
  `is_featured` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_event_type_id_foreign` (`event_type_id`),
  CONSTRAINT `event_event_type_id_foreign` FOREIGN KEY (`event_type_id`) REFERENCES `event_type` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.event: ~13 rows (approximately)
INSERT INTO `event` (`id`, `event_name`, `expected_participants`, `venue_address`, `event_type_id`, `event_link`, `start_date`, `end_date`, `start_time`, `end_time`, `description`, `event_image`, `thumbnail`, `invitation_email_banner`, `invite_user`, `is_upcoming`, `is_featured`, `created_at`, `updated_at`) VALUES
	(1, 'Gubernatorial Election', '3000', 'Washington DC', 2, 'https://accessmezone.com/webinar/register/monthly-special-business-webinar', '2020-10-20', '2019-07-26', '01:00:00', '04:26:00', '<p>A coolest storage event ever</p>', 'l6fz.png', 'KqF0.png', 'icz1.png', 2, 0, 0, '2022-11-16 12:56:52', '2023-01-20 17:10:49'),
	(2, 'PDP Rally', '200', 'Live on zoom UTC 19:00hrs', 1, 'https://accessmezone.com/webinar/register/monthly-special-business-webinar', '2022-11-14', '2022-11-24', '01:00:00', '06:30:00', '<p>A coolest storage event ever</p>', 'n5CP.png', 'zDS1.png', 'vtY7.png', 2, 0, 0, '2022-11-16 12:59:29', '2023-01-20 17:12:23'),
	(3, 'APC Rally', '200', 'Washington DC 2', 1, 'https://accessmezone.com/webinar/register/monthly-special-business-webinar', '2022-11-14', '2022-11-24', '01:00:00', '02:30:00', '<p>A coolest storage event ever</p>', 'dsHj.png', 'cPvJ.png', 'XOq7.png', 2, 0, 1, '2022-11-16 13:03:17', '2022-11-21 13:34:13'),
	(4, 'Business Opening Party', '65', 'Live on zoom UTC 19:00hrs', 1, 'https://accessmezone.com/webinar/register/monthly-special-business-webinar', '1977-02-06', '2000-08-11', '10:07:00', '04:26:00', '<p>rd</p>', 'qQ9h.jpg', 'cPvJ.png', 'XOq7.png', 3, 0, 0, '2022-11-16 13:04:15', '2022-11-16 13:04:15'),
	(5, 'Dedication', '49', 'Quia velit duis omni', 1, 'Error vero sunt illo', '2008-04-09', '2012-10-16', '11:25:00', '21:15:00', '<p>Lets try</p>', 'bVGN.jpg', 'roJq.jpg', 'icz1.png', 3, 0, 0, '2022-11-16 13:04:36', '2023-01-21 09:18:51'),
	(6, 'Wedding Anniversary', '26', 'Molestiae rerum non', 2, 'Modi magnam voluptat', '1991-07-26', '2017-04-09', '07:53:00', '22:22:00', '<p>Duis eveniet incidu</p>', 'uj6W.jpg', 'vtY7.png', 'icz1.png', 3, 0, 0, '2022-11-16 13:06:16', '2022-11-24 16:03:38'),
	(7, 'Birth Anniversary', '38', 'Live on zoom UTC 19:00hrs', 1, 'Molestiae odio vel n', '1982-05-19', '1975-08-06', '00:31:00', '17:51:00', '<p>Not sure what this is</p>', '4gBV.jpg', 'sGrF.jpg', NULL, 2, 0, 0, '2022-11-28 13:27:47', '2022-11-28 13:28:30'),
	(8, 'Wedding', '76', 'Veritatis quia porro', 1, 'Molestiae architecto', '1996-06-03', '1978-07-13', '03:27:00', '00:53:00', '<p>Soluta placeat elit</p>', 'Q6ft.png', NULL, NULL, 3, 0, 0, '2023-01-21 09:15:34', '2023-01-21 09:19:48'),
	(9, 'Presidential Rally', '190000', 'Abuja', 1, 'www.inec.org', '2023-02-25', '2023-03-25', '01:30:00', '17:30:00', '<p>Good event</p>', 'oeV7.jpg', NULL, NULL, NULL, 0, 0, '2023-01-21 09:31:20', '2023-01-21 09:31:20'),
	(10, 'BET Awards', '36', 'Vero veniam eum est', 1, 'Quo et ut eligendi e', '2009-02-04', '2012-12-21', '09:11', '03:37', '<p>Ok test</p>', 'DuAl.jpg', NULL, NULL, 3, 0, 0, '2023-01-24 08:19:14', '2023-01-24 08:19:14'),
	(11, 'Jacob Ballard', '65', '["Hall 1","Eastwest Hall", "Second Avenue Hall"]', 1, 'Accusantium distinct', '1995-07-06', '2022-10-07', '["02:42","18:05"]', '["22:17","13:47"]', '<p>Inventore omnis dolo</p>', '0PdU.jpg', NULL, NULL, 3, 0, 0, '2023-01-25 12:51:19', '2023-01-25 12:51:19'),
	(12, 'Access Training', '91', '["Access Bank HQ Hall"]', 2, 'Maxime et esse ut n', '2018-05-11', '1980-08-29', '["21:15"]', '["15:58"]', '<p>ujio</p>', '1Dh8.jpg', NULL, NULL, 3, 0, 0, '2023-01-25 13:16:35', '2023-01-25 13:16:35'),
	(13, 'Reading Event', '93', '["Regency Hall, 4 points"]', 2, 'Sint odit id volupt', '2020-09-27', '1977-11-13', '["14:56","10:26","20:17"]', '["17:48","13:57","03:11"]', '<p>one event, single venue, single date, multiple times, (becomes a DD on the FE)</p>', 'PY2F.jpg', NULL, NULL, 3, 0, 0, '2023-01-25 13:18:06', '2023-01-25 13:18:06');

-- Dumping structure for table sme.event_registration
CREATE TABLE IF NOT EXISTS `event_registration` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_id` bigint(20) unsigned NOT NULL DEFAULT 1,
  `role_id` bigint(20) unsigned NOT NULL DEFAULT 4,
  `event_id` bigint(20) unsigned NOT NULL,
  `venue_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_registration_gender_id_foreign` (`gender_id`),
  KEY `event_registration_event_id_foreign` (`event_id`),
  KEY `event_registration_role_id_foreign` (`role_id`),
  CONSTRAINT `event_registration_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `event_registration_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `event_registration_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.event_registration: ~0 rows (approximately)

-- Dumping structure for table sme.event_type
CREATE TABLE IF NOT EXISTS `event_type` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.event_type: ~2 rows (approximately)
INSERT INTO `event_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Offline', '2022-11-16 13:10:45', NULL),
	(2, 'Webinar', '2022-11-16 13:10:55', NULL);

-- Dumping structure for table sme.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table sme.featured_event_images
CREATE TABLE IF NOT EXISTS `featured_event_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `featured_event_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.featured_event_images: ~0 rows (approximately)

-- Dumping structure for table sme.featured_images
CREATE TABLE IF NOT EXISTS `featured_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `featured_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.featured_images: ~0 rows (approximately)
INSERT INTO `featured_images` (`id`, `featured_image`, `testimonial`, `name`, `role`, `company`, `description`, `created_at`, `updated_at`) VALUES
	(2, 'Mc1p.png', 'SMEZone brought the change for small businesses...', 'Yasmin Belo-Osagie', 'Co-founder', 'She.Leads.Africa', 'She Leads Africa is a platform that gives women the community, information and inspiration they need to live the lives of their dreams.', '2023-01-18 12:06:57', '2023-01-18 12:36:23');

-- Dumping structure for table sme.genders
CREATE TABLE IF NOT EXISTS `genders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.genders: ~2 rows (approximately)
INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'male', '2022-11-17 03:14:43', '2022-11-17 03:15:12'),
	(2, 'female', '2022-11-17 03:14:44', '2022-11-17 03:15:13');

-- Dumping structure for table sme.hero_sliders
CREATE TABLE IF NOT EXISTS `hero_sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slider` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.hero_sliders: ~1 rows (approximately)
INSERT INTO `hero_sliders` (`id`, `slider`, `created_at`, `updated_at`) VALUES
	(2, '["h3ct.png","jKLX.png"]', '2023-01-16 16:27:50', '2023-01-17 09:48:52');

-- Dumping structure for table sme.industries
CREATE TABLE IF NOT EXISTS `industries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.industries: ~15 rows (approximately)
INSERT INTO `industries` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Fashion & Lifestyle', 'fashion-lifestyle', '2022-11-18 10:01:11', '2022-11-18 10:01:11'),
	(2, 'Agriculture', 'agriculture', '2022-11-18 13:06:59', '2022-11-18 13:06:59'),
	(3, 'Catering & Confectionaries', 'catering-confectionaries', '2022-11-18 13:07:13', '2022-11-18 13:07:13'),
	(4, 'Consulting', 'consulting', '2022-11-18 13:07:32', '2022-11-18 13:07:32'),
	(5, 'Digital Marketing & Media Tech', 'digital-marketing-media-tech', '2022-11-18 13:07:55', '2022-11-18 13:07:55'),
	(6, 'Ecommerce', 'ecommerce', '2022-11-18 13:08:57', '2022-11-18 13:08:57'),
	(7, 'Education & Training', 'education-training', '2022-11-18 13:09:15', '2022-11-18 13:09:15'),
	(8, 'Information Technology', 'information-technology', '2022-11-18 21:10:03', '2022-11-18 21:10:03'),
	(9, 'Manufacturing', 'manufacturing', '2022-11-18 21:10:28', '2022-11-18 21:10:28'),
	(10, 'Oil and Gas', 'oil-and-gas', '2022-11-18 21:10:46', '2022-11-18 21:10:46'),
	(11, 'Processed Food & Products Export', 'processed-food-products-export', '2022-11-18 21:11:14', '2022-11-18 21:11:14'),
	(14, 'Real Estate and Construction', 'real-estate-and-construction', '2022-11-18 21:11:30', '2022-11-18 21:11:30'),
	(15, 'Services', 'services', '2022-11-18 21:11:42', '2022-11-18 21:11:42'),
	(16, 'Trade', 'trade', '2022-11-18 21:11:57', '2022-11-18 21:56:30'),
	(17, 'Tech', 'tech', '2022-11-20 20:10:54', '2022-11-20 20:10:54');

-- Dumping structure for table sme.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.migrations: ~13 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_10_01_185812_create_course_categories_table', 1),
	(7, '2023_01_16_054757_create_trying_table', 2),
	(9, '2023_01_16_103554_create_landing_media_table', 3),
	(10, '2023_01_16_154757_create_hero_sliders_table', 4),
	(11, '2023_01_16_154838_create_video_sliders_table', 4),
	(13, '2023_01_16_155249_create_featured_course_images_table', 4),
	(14, '2023_01_16_155327_create_featured_event_images_table', 4),
	(15, '2023_01_16_154939_create_featured_images_table', 5),
	(16, '2022_10_01_203826_create_event_registration_table', 6);

-- Dumping structure for table sme.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.password_resets: ~0 rows (approximately)

-- Dumping structure for table sme.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table sme.price
CREATE TABLE IF NOT EXISTS `price` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.price: ~2 rows (approximately)
INSERT INTO `price` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Free', '2022-11-24 11:36:03', NULL),
	(2, 'Paid', '2022-11-24 11:36:12', NULL);

-- Dumping structure for table sme.ratings
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.ratings: ~0 rows (approximately)

-- Dumping structure for table sme.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.roles: ~9 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Admin', 'Administrator', 'This role has special priviledges', '2022-11-16 12:32:16', NULL),
	(2, 'smeUsers', 'SmeUsers', 'SME Users', 'These role has and operates small businessess', '2022-11-16 12:33:04', NULL),
	(3, 'nonSmeUsers', 'NonSmeUsers', 'Non SME Users', 'These role does not have or operates small businessess', '2022-11-16 12:33:59', NULL),
	(4, 'User', 'User', 'User', 'People with Diamond accounts', '2022-11-17 02:46:37', NULL),
	(5, 'NonDBAUsers', 'Non DBA Users', 'Non DBA Users', 'People without Diamond Accounts, sme users', '2022-11-17 02:47:07', NULL),
	(6, 'accountOfficer', 'Account Officer', 'Account Officer', 'The Banks account officer', '2022-11-28 17:06:04', NULL),
	(7, 'course', 'Course', 'Course', NULL, '2022-11-28 17:07:04', NULL),
	(8, 'event_registered_users', 'Event registered users', NULL, 'People that have regostered for an event', NULL, NULL),
	(9, 'test_users', 'Test Users', NULL, NULL, NULL, NULL);

-- Dumping structure for table sme.trying
CREATE TABLE IF NOT EXISTS `trying` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.trying: ~0 rows (approximately)

-- Dumping structure for table sme.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `gender_id` bigint(20) unsigned NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `users_gender_id_foreign` (`gender_id`),
  CONSTRAINT `users_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `gender_id`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Nelson', 'Ekpenyong', 'nelsonekpenyong@gmail.com', NULL, 1, '$2y$10$44gDsZCjGW3nGRGrHJ9XZ.ls6xxEkPIjth6QTg5TMu8WCMFUm5pVu', 1, NULL, '2023-01-16 07:03:09', NULL);

-- Dumping structure for table sme.user_types
CREATE TABLE IF NOT EXISTS `user_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_types_role_id_foreign` (`role_id`),
  CONSTRAINT `user_types_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.user_types: ~11 rows (approximately)
INSERT INTO `user_types` (`id`, `name`, `role_id`, `created_at`, `updated_at`) VALUES
	(1, 'SME Customers', 2, '2022-11-28 19:04:44', NULL),
	(2, 'Non-sme Customers', 3, '2022-11-28 19:04:45', NULL),
	(3, 'Female Non-sme Customers', 3, '2022-11-28 19:04:46', NULL),
	(4, 'Male Non-sme Customers', 3, '2022-11-28 19:04:47', NULL),
	(5, 'Male SME Customers', 2, '2022-11-28 19:04:48', NULL),
	(6, 'Female SME Customers', 2, '2022-11-28 19:04:49', NULL),
	(7, 'Account Officers', 6, '2022-11-28 19:04:50', NULL),
	(8, 'All Customers', 4, '2022-11-28 19:04:51', NULL),
	(9, 'Event Registered Users', 8, '2022-11-28 19:04:51', NULL),
	(10, 'Test Users', 9, '2022-11-28 19:04:52', NULL),
	(11, 'Course', 7, '2022-11-28 19:04:53', NULL);

-- Dumping structure for table sme.venue
CREATE TABLE IF NOT EXISTS `venue` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sme.venue: 0 rows
/*!40000 ALTER TABLE `venue` DISABLE KEYS */;
/*!40000 ALTER TABLE `venue` ENABLE KEYS */;

-- Dumping structure for table sme.video_sliders
CREATE TABLE IF NOT EXISTS `video_sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `video_slider1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_slider2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_slider3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sme.video_sliders: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
