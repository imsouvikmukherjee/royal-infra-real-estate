-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2025 at 02:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_infra`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `property_type`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Microtechnique IT', 'microtechniqueit@gmail.com', 'Commercial Properties', '1236548900', 'this is another test message this is another test message  this is another test message  this is another test message  this is another test message', '2025-02-25 01:17:02', NULL),
(3, 'Test 6', 'test6@gmail.com', 'Mixed-use Properties', '1234567890', 'sr 4 rtrt r', '2025-02-25 02:39:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investment_benefits`
--

CREATE TABLE `investment_benefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `investors_percentage` decimal(5,2) DEFAULT NULL,
  `channel_partner_percentage_spot` decimal(5,2) DEFAULT NULL,
  `channel_partner_percentage_month` decimal(5,2) DEFAULT NULL,
  `number_of_months` tinyint(3) UNSIGNED DEFAULT NULL,
  `master_channel_partner_percentage` decimal(5,2) DEFAULT NULL,
  `franchise_partner_percentage` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_benefits`
--

INSERT INTO `investment_benefits` (`id`, `investors_percentage`, `channel_partner_percentage_spot`, `channel_partner_percentage_month`, `number_of_months`, `master_channel_partner_percentage`, `franchise_partner_percentage`, `created_at`, `updated_at`) VALUES
(1, 8.00, 5.00, 1.00, 24, 1.00, 2.00, NULL, '2025-02-27 05:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_25_062702_create_contact_table', 2),
(5, '2025_02_27_052544_create_property_table', 3),
(6, '2025_02_27_110647_create_investment_benefits_table', 4),
(7, '2025_02_27_120834_create_profit_table', 5),
(8, '2025_02_27_155731_create_scheduled_payments_table', 6),
(9, '2025_02_28_064528_create_withdrawals_table', 7),
(10, '2025_02_28_123742_create_property_enquiries_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profit`
--

CREATE TABLE `profit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `total_turnover` decimal(15,2) NOT NULL DEFAULT 0.00,
  `current_balance` decimal(15,2) NOT NULL DEFAULT 0.00,
  `profit_amount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `monthly_amount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profit`
--

INSERT INTO `profit` (`id`, `username`, `email`, `usertype`, `property_name`, `total_turnover`, `current_balance`, `profit_amount`, `monthly_amount`, `created_at`, `updated_at`) VALUES
(5, 'Another User', 'anotheruser@gmai.com', '4', '1 rg rerg grgtrgrt tth thtrht yjy jjtyj dont delete', 100000.00, 3000.00, 2000.00, 0.00, '2025-02-27 12:18:30', NULL),
(6, 'Test User', 'testuser@gmail.com', '2', '1 rg rerg grgtrgrt tth thtrht yjy jjtyj dont delete', 60000.00, 11000.00, 3000.00, 600.00, '2025-02-27 12:19:43', NULL),
(7, 'New Member', 'newmember@gmail.com', '2', '2 rg rerg grgtrgrt tth thtrht yjy jjtyj', 200000.00, 10000.00, 10000.00, 2000.00, '2025-02-27 12:23:19', NULL),
(8, 'Test User', 'testuser@gmail.com', '2', '1 rg rerg grgtrgrt tth thtrht yjy jjtyj dont delete', 30000.00, 13100.00, 1500.00, 300.00, '2025-02-28 11:08:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_category` varchar(255) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_address` varchar(255) DEFAULT NULL,
  `property_contact` varchar(255) DEFAULT NULL,
  `property_map` text DEFAULT NULL,
  `property_image` varchar(255) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `property_video` varchar(255) DEFAULT NULL,
  `property_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `property_category`, `property_name`, `property_address`, `property_contact`, `property_map`, `property_image`, `price`, `property_video`, `property_description`, `created_at`, `updated_at`) VALUES
(2, '2', '2 rg rerg grgtrgrt tth thtrht yjy jjtyj', 'trhtr hrhjy yj tyj hrtyj tytyj trjyrj yjytjty jtj ty', 'yy jtyjytj tjyj ytj yutyj tyjtyj ytj tytj', NULL, '1740745149_jonatan-pie-3l3RwQdHRHg-unsplash.jpg', 100000.00, NULL, '<p>rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr rwr rgrg r ge getrkj ijrbgijbgi rebih gbrihb eribrijfi webi gbrib eribigbiberib gierbir e eweribgew bwiubwiu bgirbig biurigwiu nirebgi iugi rbigebijr</p>', '2025-02-27 02:00:40', '2025-02-28 06:49:09'),
(3, '3', '1 rg rerg grgtrgrt tth thtrht yjy jjtyj dont delete', 'trhtr hrhjy yj tyj hrtyj tytyj trjyrj yjytjty jtj ty', 'yy jtyjytj tjyj ytj yutyj tyjtyj ytj tytj', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238132.67288885234!2d72.65747188205489!3d21.159440566458766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1740641331593!5m2!1sen!2sin', '1740656725_finland_light.jpg', 200000.00, NULL, '<p>dtg reg rgg e rj &nbsp;ewf hjbefbiw ebibewif befbreih bribigrijg eigneij nij neijgnerijrneijgnri jngnerijn igijr igjiej jbrjwb jrbjfb jejg jbgjbwjb jwebfj web fjejrjgbr jibjjrgj rjg brijberijgb ijbrijgb irbgi brigbijr eij bgijrebgijerijg ijbrjg rijeig reijebg rjbg ijrebgreijbg rigbirebreij bgijrebgij bijebijbg ijbrijebgi jerbgijerbgij brijbg erijbgijerbgijbg ijerbgijrbgijr e ijeg ijrebgirjebgij erbgijgijer ijrgij brijg ijrebgijbrjig ijrbgij rijgb ijrb gijrbgij rebgerijbg ijerbg ijbgrijeb ij</p><p>&nbsp;</p><figure class=\"media\"><oembed url=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238132.67288885234!2d72.65747188205489!3d21.159440566458766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1740641331593!5m2!1sen!2sin\"></oembed></figure>', '2025-02-27 02:02:13', '2025-02-27 06:15:25'),
(4, '2', 'Exclusive Investment Opportunity in Dholera Smart City, Gujarat – The Future of Urban Development!', 'Dholera Smart City, Gujarat', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29379.14127513266!2d72.48620444169256!3d23.00935066928941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b278bd5fc37%3A0x35bd26f1cb0b4513!2sDholera%20Smart%20City!5e0!3m2!1sen!2sin!4v1741851437576!5m2!1sen!2sin', '1741854570_Mirrikh-Blog-Images-NEW-1024x768.png', NULL, '1741854570_videoplayback (1).mp4', '<p>Dholera Smart City, Gujarat, is India\'s first and largest planned smart city under the Delhi-Mumbai Industrial Corridor (DMIC) project. Designed for rapid urbanization and economic growth, Dholera offers world-class infrastructure, cutting-edge technology, and unparalleled investment potential.</p><p>This property is an excellent opportunity for <strong>investors and channel partners</strong> seeking high returns in a fast-growing region. With seamless connectivity, government-backed initiatives, and future-ready developments, now is the perfect time to secure your stake in India\'s most ambitious smart city project.</p><p><strong>Key Highlights:</strong><br>✅ Prime location in Dholera Smart City<br>✅ High ROI potential with futuristic infrastructure<br>✅ Excellent connectivity to Ahmedabad and Mumbai<br>✅ Government-supported smart city initiatives<br>✅ Ideal for residential, commercial, and industrial investments</p><p>Be a part of the <strong>next big growth hub in India</strong>! Contact us today to explore this <strong>exclusive investment opportunity.</strong> 🚀</p>', '2025-03-13 02:08:23', '2025-03-13 02:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `property_enquiries`
--

CREATE TABLE `property_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_enquiries`
--

INSERT INTO `property_enquiries` (`id`, `property_id`, `property_name`, `property_category`, `name`, `email`, `contact`, `created_at`, `updated_at`) VALUES
(2, 3, '1 rg rerg grgtrgrt tth thtrht yjy jjtyj dont delete', '3', 'Microtechnique IT', 'microtechniqueit@gmail.com', '1236547892', '2025-02-28 07:17:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_payments`
--

CREATE TABLE `scheduled_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `status` enum('pending','completed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scheduled_payments`
--

INSERT INTO `scheduled_payments` (`id`, `user_id`, `amount`, `payment_date`, `status`, `created_at`, `updated_at`) VALUES
(195, 6, 600.00, '2025-05-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(196, 6, 600.00, '2025-03-01', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(197, 6, 600.00, '2025-07-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(198, 6, 600.00, '2025-03-01', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(199, 6, 600.00, '2025-09-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(200, 6, 600.00, '2025-10-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(201, 6, 600.00, '2025-11-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(202, 6, 600.00, '2025-12-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(203, 6, 600.00, '2026-01-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(204, 6, 600.00, '2026-02-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(205, 6, 600.00, '2026-03-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(206, 6, 600.00, '2026-04-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(207, 6, 600.00, '2026-05-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(208, 6, 600.00, '2026-06-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(209, 6, 600.00, '2026-07-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(210, 6, 600.00, '2026-08-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(211, 6, 600.00, '2026-09-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(212, 6, 600.00, '2026-10-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(213, 6, 600.00, '2026-11-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(214, 6, 600.00, '2026-12-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(215, 6, 600.00, '2027-01-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(216, 6, 600.00, '2027-02-27', 'pending', '2025-02-27 12:19:43', '2025-02-27 12:19:43'),
(219, 3, 2000.00, '2025-05-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(220, 3, 2000.00, '2025-06-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(221, 3, 2000.00, '2025-07-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(222, 3, 2000.00, '2025-08-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(223, 3, 2000.00, '2025-09-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(224, 3, 2000.00, '2025-10-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(225, 3, 2000.00, '2025-11-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(226, 3, 2000.00, '2025-12-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(227, 3, 2000.00, '2026-01-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(228, 3, 2000.00, '2026-02-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(229, 3, 2000.00, '2026-03-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(230, 3, 2000.00, '2026-04-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(231, 3, 2000.00, '2026-05-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(232, 3, 2000.00, '2026-06-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(233, 3, 2000.00, '2026-07-02', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(234, 3, 2000.00, '2026-08-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(235, 3, 2000.00, '2026-09-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(236, 3, 2000.00, '2026-10-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(237, 3, 2000.00, '2026-11-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(238, 3, 2000.00, '2026-12-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(239, 3, 2000.00, '2027-01-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(240, 3, 2000.00, '2027-02-27', 'pending', '2025-02-27 12:23:19', '2025-02-27 12:23:19'),
(241, 6, 300.00, '2025-03-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(242, 6, 300.00, '2025-04-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(243, 6, 300.00, '2025-05-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(244, 6, 300.00, '2025-06-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(245, 6, 300.00, '2025-07-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(246, 6, 300.00, '2025-08-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(247, 6, 300.00, '2025-09-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(248, 6, 300.00, '2025-10-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(249, 6, 300.00, '2025-11-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(250, 6, 300.00, '2025-12-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(251, 6, 300.00, '2026-01-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(252, 6, 300.00, '2026-02-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(253, 6, 300.00, '2026-03-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(254, 6, 300.00, '2026-04-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(255, 6, 300.00, '2026-05-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(256, 6, 300.00, '2026-06-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(257, 6, 300.00, '2026-07-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(258, 6, 300.00, '2026-08-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(259, 6, 300.00, '2026-09-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(260, 6, 300.00, '2026-10-28', 'pending', '2025-02-28 11:08:33', '2025-02-28 11:08:33'),
(261, 6, 300.00, '2026-11-28', 'pending', '2025-02-28 11:08:34', '2025-02-28 11:08:34'),
(262, 6, 300.00, '2026-12-28', 'pending', '2025-02-28 11:08:34', '2025-02-28 11:08:34'),
(263, 6, 300.00, '2027-01-28', 'pending', '2025-02-28 11:08:34', '2025-02-28 11:08:34'),
(264, 6, 300.00, '2027-02-28', 'pending', '2025-02-28 11:08:34', '2025-02-28 11:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vBVrDvdPkguDhbEGaqtS20hqLpRkb5NCMmxbznqD', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiTHdpNGpNdUhyU3puYWxKNm9qRWhXTUE3RVhNbHkxamVsWW1nNWwweSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjQ6Im5hbWUiO3M6MTY6IlNvdXZpayBNdWtoZXJqZWUiO3M6NToiZW1haWwiO3M6Mjk6Im11a2hlcmplZXNvdXZpazIwNDNAZ21haWwuY29tIjtzOjg6InVzZXJ0eXBlIjtzOjE6IjAiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1750941174);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `email_verified_at`, `password`, `usertype`, `balance`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Souvik Mukherjee', 'mukherjeesouvik2043@gmail.com', '1234567890', NULL, '$2y$12$ydUG0ZfD7NNt7oBCtQCqRO4Gm4KhzFJ5Gwx7i3n2Cqu.7rfRPznWa', '0', 6000.00, '1', NULL, '2025-02-24 06:40:35', '2025-02-24 06:40:35'),
(3, 'New Member', 'newmember@gmail.com', '1236547897', NULL, '$2y$12$JEke3rbJusopKy9nLFFrxOjH0ssSDAzXZM6iJhr7hb67XYQcbnaKG', '2', 22000.00, '0', NULL, '2025-02-24 23:52:41', '2025-02-24 23:52:41'),
(4, 'Royal Infra', 'info@royalinfra.finance', '1234567895', NULL, '$2y$12$Nu7Z3qxtQrzqAB2yQ1pynug18XWD3swOVUOuxzCxIVcZfmF39UZ2i', '0', 0.00, '1', NULL, '2025-02-25 02:53:34', '2025-02-25 02:53:34'),
(6, 'Test User', 'testuser@gmail.com', '1234569874', NULL, '$2y$12$gIOa0RGx3O2bm8W9vZHu6e.nZRz61sa9VVVsKwFYnSbo7Uqwcen.O', '2', 11700.00, '1', NULL, '2025-02-26 05:00:44', '2025-02-26 05:00:44'),
(7, 'Another User', 'anotheruser@gmai.com', '1236547893', NULL, '$2y$12$GL.E56dElioHSDtcma8fKOEQSVLgkj4sq54ZE7VE8zYV2VyVD4TPe', '4', 3000.00, '0', NULL, '2025-02-27 11:46:42', '2025-02-27 11:46:42'),
(8, 'Demo Partner New', 'demopartnernew@gmail.com', '1236547896', NULL, '$2y$12$xzXCqgwEOE1MOfnuvKLeU.BdAb0LELIZOt/7eNLe5I.pGca.t0fDS', '2', 0.00, '0', NULL, '2025-03-13 07:09:39', '2025-03-13 07:09:39'),
(9, 'Royal Partner', 'royalpartner@gmail.com', '1236547892', NULL, '$2y$12$TbdpCGH//PbXzpa.McHvDuGa8QwrJCJqdj7y7a/VIRGh4kAm6.vKy', '1', 0.00, '1', NULL, '2025-03-13 07:10:53', '2025-03-13 07:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `accounts_holder_name` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `name`, `email`, `amount`, `bank_name`, `branch`, `account_number`, `ifsc_code`, `accounts_holder_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'Test User', 'testuser@gmail.com', 5000.00, 'Union bank of india model', 'Kolkata', '90000090000113', 'bank00112987', 'Souvik Mukherjee', '0', '2025-02-28 01:28:50', NULL),
(2, 3, 'New Member', 'newmember@gmail.com', 4000.00, 'state bank of india 2', 'Kolkata', '90000090000111', 'PNB00812', 'Souvik Mukherjee', '0', '2025-02-28 01:57:08', NULL),
(3, 6, 'Test User', 'testuser@gmail.com', 2000.00, 'Punjab National Bank', 'Kolkata', '90000090000011', 'SBI12345', 'Souvik Mukherjee', '1', '2025-02-28 11:22:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `investment_benefits`
--
ALTER TABLE `investment_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_enquiries`
--
ALTER TABLE `property_enquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_enquiries_property_id_foreign` (`property_id`);

--
-- Indexes for table `scheduled_payments`
--
ALTER TABLE `scheduled_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scheduled_payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawals_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investment_benefits`
--
ALTER TABLE `investment_benefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profit`
--
ALTER TABLE `profit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property_enquiries`
--
ALTER TABLE `property_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scheduled_payments`
--
ALTER TABLE `scheduled_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property_enquiries`
--
ALTER TABLE `property_enquiries`
  ADD CONSTRAINT `property_enquiries_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `scheduled_payments`
--
ALTER TABLE `scheduled_payments`
  ADD CONSTRAINT `scheduled_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD CONSTRAINT `withdrawals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
