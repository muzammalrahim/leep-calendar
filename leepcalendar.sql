-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 01:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laura-calendar-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', '$2y$10$.65Hnm0e68ZVXq6PlM1oYe/sbpdDE698lPKa/81zxXOeyPMA4eCQG', 0, NULL, '2020-12-22 14:15:12', '2021-03-03 07:28:02'),
(3, 'Admin', 'creative.joomdev@gmail.com', '$2y$10$j4G9mzmAw2epBVpLnR232OpEedVSuhS.fwlTrH.HNja9WkNmUtP6S', 0, NULL, '2021-08-16 13:06:57', '2021-08-16 13:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(67, 64, 'Africa', 'AfricaHeader.png', NULL, NULL),
(68, 1, 'Alcohol,Tobacco & Drugs', 'AlcoholHeader.png', NULL, NULL),
(69, 2, 'Animals, Fish, Insect & Birds', 'AnimalsHeader.png', NULL, NULL),
(70, 3, 'Anniversaries', 'AnniversariesHeader.png', NULL, NULL),
(71, 4, 'Australia', 'AustraliaHeader.png', NULL, NULL),
(72, 58, 'Books', 'BooksHeader.png', NULL, NULL),
(73, 5, 'Brazil & S. America', 'BooksHeader.png', NULL, NULL),
(74, 6, 'Buddhism', 'BuddhistHeader.png', NULL, NULL),
(75, 7, 'Canada', 'CanadaHeaser.png', NULL, NULL),
(76, 8, 'Career', 'CareerHeader.png', NULL, NULL),
(77, 9, 'Children', 'ChildrenHeader.png', NULL, NULL),
(78, 61, 'China, Japan & Korea', 'ChinaHeader.png', NULL, NULL),
(79, 10, 'Christian', 'ChristianHeader.png', NULL, NULL),
(80, 59, 'Civil Rights', 'CivilRightsHeader.png', NULL, NULL),
(81, 12, 'Culture & Art', 'CultureHeader.png', NULL, NULL),
(82, 13, 'Education', 'EducationHeader.png', NULL, NULL),
(83, 14, 'Entertainment', 'EntertainmentHeader.png', NULL, NULL),
(84, 15, 'Environment, Space & The Outdoors', 'environmentHeader.png', NULL, NULL),
(85, 66, 'Eastern Europe', 'EasternEuropeHeader.png', NULL, NULL),
(86, 16, 'European Countries', 'EuropeHeader.png', NULL, NULL),
(87, 17, 'Family & Friends', 'FriendsFamilyHeader.png', NULL, NULL),
(88, 18, 'Finance & Banking', 'FinanceHeader.png', NULL, NULL),
(89, 19, 'Food', 'FoodHeader.png', NULL, NULL),
(90, 20, 'Health', 'HealthHeader.png', NULL, NULL),
(91, 21, 'Hindu', 'HinduHeader.png', NULL, NULL),
(92, 22, 'Hobby', 'HobbiesHeader.png', NULL, NULL),
(93, 70, 'India', 'India.png', NULL, NULL),
(94, 24, 'Jewish', 'JewishHeader.png', NULL, NULL),
(95, 25, 'Legal', 'LegalHeader.png', NULL, NULL),
(96, 26, 'Lifestyle', 'LifestyleHeader.png', NULL, NULL),
(97, 27, 'Media', 'MediaHeader.png', NULL, NULL),
(98, 28, 'Men', 'MenHeader.png', NULL, NULL),
(99, 62, 'Middle East/West Asia', 'MiddleEastHeader.png', NULL, NULL),
(100, 29, 'Military', 'MilitaryHeader.png', NULL, NULL),
(101, 30, 'Misc', 'MiscHeader.png', NULL, NULL),
(102, 31, 'Moon', 'MoonHeader.png', NULL, NULL),
(103, 32, 'Music', 'MusicHeader.png', NULL, NULL),
(104, 33, 'Muslim', 'MuslimHeader.png', NULL, NULL),
(105, 34, 'Mexico & Central America', 'MexicoHeader.png', NULL, NULL),
(106, 35, 'Other Religions', 'OtherReligionHeader.png', NULL, NULL),
(107, 36, 'Politics', 'PoliticalHeader.png', NULL, NULL),
(108, 37, 'Real Estate', 'RealEstateHeader.png', NULL, NULL),
(109, 38, 'Religion', 'ReligionHeader.png', NULL, NULL),
(110, 39, 'Retail', 'RetailHeader.png', NULL, NULL),
(111, 40, 'Romance, Love & Sexuality', 'RelationshipsHeader.png', NULL, NULL),
(112, 65, 'Russia', 'Russia.png', NULL, NULL),
(113, 41, 'South Africa', 'SouthAfricaHeader.png', NULL, NULL),
(114, 63, 'South Asia', 'SouthAsiaHeader.png', NULL, NULL),
(115, 42, 'Safety & Security', 'SafetyHeader.png', NULL, NULL),
(116, 43, 'Science & Math', 'ScienceHeader.png', NULL, NULL),
(117, 60, 'Seniors', 'SeniorsHeader.png', NULL, NULL),
(118, 57, 'Sikh', 'SikhHeader.png', NULL, NULL),
(119, 44, 'Silly', 'SillyHeader.png', NULL, NULL),
(120, 45, 'Sports & Fitness', 'SportsHeader.png', NULL, NULL),
(121, 46, 'Technology & Telecom', 'TechnologyHeader.png', NULL, NULL),
(122, 47, 'Transportation', 'TransportationHeader.png', NULL, NULL),
(123, 48, 'Travel & Tourism', 'TravelHeader.png', NULL, NULL),
(124, 49, 'United Kingdom & Ireland', 'UKHeader.png', NULL, NULL),
(125, 52, 'United States', 'UnitedStates.png', NULL, NULL),
(126, 50, 'Women', 'WomenEvents.png', NULL, NULL),
(127, 68, 'Conferences & Symposiums', 'ConferencesHeader.png', NULL, NULL),
(128, 69, 'Festivals & Fairs', 'FairsHeader.png', NULL, NULL),
(129, 67, 'Trade Shows & Exhibitions', 'TradeshowHeader.png', NULL, NULL),
(130, 11, 'Fundraising Event', 'FundraisingHeader.png', NULL, NULL),
(131, 23, 'Rallies & Protests', 'RalliesHeader.png', NULL, NULL),
(132, 51, 'Competitions & Awards', 'AwardsHeader.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `event_id` bigint(20) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `event_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 47, 1, 'This is comment', '2021-09-16 08:41:00', '2021-09-16 08:41:00'),
(2, 47, 1, 'This is comment 2', '2021-09-16 08:56:39', '2021-09-16 08:56:39'),
(3, 47, 1, 'This is comment 3', '2021-09-16 09:02:25', '2021-09-16 09:02:25'),
(4, 47, 1, 'This is comment 4', '2021-09-16 09:03:40', '2021-09-16 09:03:40'),
(5, 47, 1, 'This is comment 4', '2021-09-16 09:03:47', '2021-09-16 09:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'All Worldwide', ' All\n', '2021-01-28 06:20:39', '2021-01-28 06:20:39'),
(2, 'United States Only', ' US\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(3, 'United Kingdom Only', ' UK\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(4, 'Canada Only', ' CA\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(5, 'Australia Only', ' AU\n\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(6, 'Afghanistan', ' AF\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(7, 'Aland Islands', ' AX\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(8, 'Albania', ' AL\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(9, 'Algeria', ' DZ\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(10, 'American Samoa', ' AS\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(11, 'Andorra', ' AD\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(12, 'Angola', ' AO\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(13, 'Anguilla', ' AI\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(14, 'Antarctica', ' AQ\n', '2021-01-28 06:20:40', '2021-01-28 06:20:40'),
(15, 'Antigua/Barbuda', ' AG\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(16, 'Argentina', ' AR\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(17, 'Armenia', ' AM\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(18, 'Aruba', ' AW\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(19, 'Austria', ' AT\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(20, 'Azerbaijan', ' AZ\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(21, 'Bahamas', ' BS\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(22, 'Bahrain', ' BH\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(23, 'Bangladesh', ' BD\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(24, 'Barbados', ' BB\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(25, 'Belarus', ' BY\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(26, 'Belgium', ' BE\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(27, 'Belize', ' BZ\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(28, 'Benin', ' BJ\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(29, 'Bermuda', ' BM\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(30, 'Bhutan', ' BT\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(31, 'Bolivia', ' BO\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(32, 'Bosnia-Herzegovina', ' BA\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(33, 'Botswana', ' BW\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(34, 'Bouvet Island', ' BV\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(35, 'Brazil', ' BR\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(36, 'British Virgin Islands', ' VG\n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(37, 'British Indian Ocean Territory', ' IO \n', '2021-01-28 06:20:41', '2021-01-28 06:20:41'),
(38, 'Brunei', ' BN\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(39, 'Bulgaria', ' BG\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(40, 'Burkina Faso', ' BF\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(41, 'Burundi', ' BI\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(42, 'Cambodia', ' KH\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(43, 'Cameroon', ' CM\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(44, 'Cape Verde', ' CV\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(45, 'Cayman Islands', ' KY\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(46, 'Central African Republic', ' CF\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(47, 'Chad', ' TD\n', '2021-01-28 06:20:42', '2021-01-28 06:20:42'),
(48, 'Chile', ' CL\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(49, 'China', ' CN\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(50, 'Hong Kong', ' HK\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(51, 'Macao', ' MO\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(52, 'Christmas Island', ' CX\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(53, 'Cocos Islands', ' CC\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(54, 'Colombia', ' CO\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(55, 'Comoros', ' KM\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(56, 'Congo (Brazzaville)', ' CG\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(57, 'Congo (Kinshasa)', ' CD\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(58, 'Cook Islands', ' CK\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(59, 'Costa Rica', ' CR\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(60, 'Côte d\'Ivoire', ' CI\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(61, 'Croatia', ' HR\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(62, 'Cuba', ' CU\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(63, 'Cyprus', ' CY\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(64, 'Czech Republic', ' CZ\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(65, 'Denmark', ' DK\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(66, 'Djibouti', ' DJ\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(67, 'Dominica', ' DM\n', '2021-01-28 06:20:43', '2021-01-28 06:20:43'),
(68, 'Dominican Republic', ' DO\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(69, 'Ecuador', ' EC\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(70, 'Egypt', ' EG\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(71, 'El Salvador', ' SV\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(72, 'Equatorial Guinea', ' GQ\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(73, 'Eritrea', ' ER\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(74, 'Estonia', ' EE\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(75, 'Ethiopia', ' ET\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(76, 'Falkland Islands', ' FK\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(77, 'Faroe Islands', ' FO\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(78, 'Fiji', ' FJ\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(79, 'Finland', ' FI\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(80, 'France', ' FR\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(81, 'French Guiana', ' GF\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(82, 'French Polynesia', ' PF\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(83, 'French Southern Territories', ' TF \n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(84, 'Gabon', ' GA\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(85, 'Gambia', ' GM\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(86, 'Georgia', ' GE\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(87, 'Germany', ' DE\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(88, 'Ghana', ' GH\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(89, 'Gibraltar', ' GI\n', '2021-01-28 06:20:44', '2021-01-28 06:20:44'),
(90, 'Greece', ' GR\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(91, 'Greenland', ' GL\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(92, 'Grenada', ' GD\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(93, 'Guadeloupe', ' GP\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(94, 'Guam', ' GU\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(95, 'Guatemala', ' GT\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(96, 'Guernsey', ' GG\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(97, 'Guinea', ' GN\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(98, 'Guinea-Bissau', ' GW\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(99, 'Guyana', ' GY\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(100, 'Haiti', ' HT\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(101, 'Heard & Mc Donald Islands', ' HM\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(102, 'Holy See', ' VA\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(103, 'Honduras', ' HN\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(104, 'Hungary', ' HU\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(105, 'Iceland', ' IS\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(106, 'India', ' IN\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(107, 'Indonesia', ' ID\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(108, 'Iran', ' IR\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(109, 'Iraq', ' IQ\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(110, 'Ireland', ' IE\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(111, 'Isle of Man', ' IM\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(112, 'Israel', ' IL\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(113, 'Italy', ' IT\n', '2021-01-28 06:20:45', '2021-01-28 06:20:45'),
(114, 'Jamaica', ' JM\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(115, 'Japan', ' JP\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(116, 'Jersey', ' JE\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(117, 'Jordan', ' JO\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(118, 'Kazakhstan', ' KZ\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(119, 'Kenya', ' KE\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(120, 'Kiribati', ' KI\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(121, 'Korea (North)', ' KP\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(122, 'Korea (South)', ' KR\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(123, 'Kuwait', ' KW\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(124, 'Kyrgyzstan', ' KG\n', '2021-01-28 06:20:46', '2021-01-28 06:20:46'),
(125, 'Lao', ' LA\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(126, 'Latvia', ' LV\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(127, 'Lebanon', ' LB\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(128, 'Lesotho', ' LS\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(129, 'Liberia', ' LR\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(130, 'Libya', ' LY\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(131, 'Liechtenstein', ' LI\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(132, 'Lithuania', ' LT\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(133, 'Luxembourg', ' LU\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(134, 'Macedonia', ' MK\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(135, 'Madagascar', ' MG\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(136, 'Malawi', ' MW\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(137, 'Malaysia', ' MY\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(138, 'Maldives', ' MV\n', '2021-01-28 06:20:47', '2021-01-28 06:20:47'),
(139, 'Mali', ' ML\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(140, 'Malta', ' MT\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(141, 'Marshall Islands', ' MH\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(142, 'Martinique', ' MQ\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(143, 'Mauritania', ' MR\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(144, 'Mauritius', ' MU\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(145, 'Mayotte', ' YT\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(146, 'Mexico', ' MX\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(147, 'Micronesia', ' FM\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(148, 'Moldova', ' MD\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(149, 'Monaco', ' MC\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(150, 'Mongolia', ' MN\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(151, 'Montenegro', ' ME\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(152, 'Montserrat', ' MS\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(153, 'Morocco', ' MA\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(154, 'Mozambique', ' MZ\n', '2021-01-28 06:20:48', '2021-01-28 06:20:48'),
(155, 'Myanmar', ' MM\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(156, 'Namibia', ' NA\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(157, 'Nauru', ' NR\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(158, 'Nepal', ' NP\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(159, 'Netherlands', ' NL\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(160, 'Netherlands Antilles', ' AN\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(161, 'New Caledonia', ' NC\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(162, 'New Zealand', ' NZ\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(163, 'Nicaragua', ' NI\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(164, 'Niger', ' NE\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(165, 'Nigeria', ' NG\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(166, 'Niue', ' NU\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(167, 'Norfolk Island', ' NF\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(168, 'Northern Mariana Islands', ' MP\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(169, 'Norway', ' NO\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(170, 'Oman', ' OM\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(171, 'Pakistan', ' PK\n', '2021-01-28 06:20:49', '2021-01-28 06:20:49'),
(172, 'Palau', ' PW\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(173, 'Palestinian Territory', ' PS\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(174, 'Panama', ' PA\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(175, 'Papua New Guinea', ' PG\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(176, 'Paraguay', ' PY\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(177, 'Peru', ' PE\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(178, 'Philippines', ' PH\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(179, 'Pitcairn', ' PN\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(180, 'Poland', ' PL\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(181, 'Portugal', ' PT\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(182, 'Puerto Rico', ' PR\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(183, 'Qatar', ' QA\n', '2021-01-28 06:20:50', '2021-01-28 06:20:50'),
(184, 'Réunion', ' RE\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(185, 'Romania', ' RO\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(186, 'Russia', ' RU\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(187, 'Rwanda', ' RW\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(188, 'St. Barthélemy', ' BL\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(189, 'St. Helena', ' SH\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(190, 'St.  Kitts & Nevis', ' KN\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(191, 'St. Lucia', ' LC\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(192, 'St. Martin', ' MF\n', '2021-01-28 06:20:51', '2021-01-28 06:20:51'),
(193, 'St. Pierre & Miquelon', ' PM\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(194, 'St. Vincent & Grenadines', ' VC\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(195, 'Samoa', ' WS\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(196, 'San Marino', ' SM\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(197, 'Sao Tome & Principe', ' ST\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(198, 'Saudi Arabia', ' SA\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(199, 'Senegal', ' SN\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(200, 'Serbia', ' RS\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(201, 'Seychelles', ' SC\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(202, 'Sierra Leone', ' SL\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(203, 'Singapore', ' SG\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(204, 'Slovakia', ' SK\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(205, 'Slovenia', ' SI\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(206, 'Solomon Islands', ' SB\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(207, 'Somalia', ' SO\n', '2021-01-28 06:20:52', '2021-01-28 06:20:52'),
(208, 'South Africa', ' ZA\n', '2021-01-28 06:20:53', '2021-01-28 06:20:53'),
(209, 'South Georgia & South Sandwich Islands', ' GS\n', '2021-01-28 06:20:53', '2021-01-28 06:20:53'),
(210, 'South Sudan', ' SS\n', '2021-01-28 06:20:53', '2021-01-28 06:20:53'),
(211, 'Spain', ' ES\n', '2021-01-28 06:20:53', '2021-01-28 06:20:53'),
(212, 'Sri Lanka', ' LK\n', '2021-01-28 06:20:53', '2021-01-28 06:20:53'),
(213, 'Sudan', ' SD\n', '2021-01-28 06:20:53', '2021-01-28 06:20:53'),
(214, 'Suriname', ' SR\n', '2021-01-28 06:20:53', '2021-01-28 06:20:53'),
(215, 'Svalbard & Jan Mayen Islands', ' SJ\n', '2021-01-28 06:20:53', '2021-01-28 06:20:53'),
(216, 'Swaziland', ' SZ\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(217, 'Sweden', ' SE\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(218, 'Switzerland', ' CH\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(219, 'Syria', ' SY\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(220, 'Taiwan', ' TW\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(221, 'Tajikistan', ' TJ\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(222, 'Tanzania', ' TZ\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(223, 'Thailand', ' TH\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(224, 'Timor-Leste', ' TL\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(225, 'Togo', ' TG\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(226, 'Tokelau', ' TK\n', '2021-01-28 06:20:54', '2021-01-28 06:20:54'),
(227, 'Tonga', ' TO\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(228, 'Trinidad and Tobago', ' TT\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(229, 'Tunisia', ' TN\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(230, 'Turkey', ' TR\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(231, 'Turkmenistan', ' TM\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(232, 'Turks & Caicos Islands', ' TC\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(233, 'Tuvalu', ' TV\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(234, 'Uganda', ' UG\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(235, 'Ukraine', ' UA\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(236, 'United Arab Emirates', ' AE\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(237, 'US Minor Islands', ' UM\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(238, 'Uruguay', ' UY\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(239, 'Uzbekistan', ' UZ\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(240, 'Vanuatu', ' VU\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(241, 'Venezuela', ' VE\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(242, 'Viet Nam', ' VN\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(243, 'Virgin Islands', ' VI\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(244, 'Wallis & Futuna Islands', ' WF\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(245, 'Western Sahara', ' EH\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(246, 'Yemen', ' YE\n', '2021-01-28 06:20:55', '2021-01-28 06:20:55'),
(247, 'Zambia', ' ZM\n', '2021-01-28 06:20:56', '2021-01-28 06:20:56'),
(248, 'Zimbabwe', ' ZW\n', '2021-01-28 06:20:56', '2021-01-28 06:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `states` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_address2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `static_change` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes_not_public` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_champion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `champ_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `champ_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `champ_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `champ_address1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `champ_address2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physical_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_reserve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_based` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_physical_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `states`, `start_month`, `start_day`, `start_year`, `country`, `event_address1`, `event_address2`, `status`, `start_date`, `end_month`, `end_day`, `end_year`, `end_date`, `duration`, `type`, `static_change`, `notes_not_public`, `url`, `feature_picture`, `picture_name`, `alt_text`, `estimated`, `description`, `event_champion`, `champ_city`, `champ_state`, `champ_country`, `champ_address1`, `champ_address2`, `city`, `state`, `country_code`, `zip`, `ph_num`, `email_form`, `contact_person`, `contact_link`, `physical_address`, `purchase_reserve`, `location_based`, `manager`, `event_physical_address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Event Name', 'Country', 'Month Start', 'Day Start', 'Year Start', NULL, NULL, NULL, NULL, '1970-01-01', 'Month End', 'Day End', 'Year End', '1970-01-01', NULL, 'Type of Event', 'Static or Change? ', 'Notes not to be published', 'Event URL', 'Feature Picture Name', 'Event Picture Name', 'Alt Text', 'Estimated?', 'Description', 'Event Champion', 'City', 'State', 'Country', 'Address', 'Address', NULL, NULL, NULL, 'Zip', 'Phone', 'E-mail or Form', 'Contact Person', 'Contact LINK', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(2, 'AIDS Day, World: December 1', 'Worldwide', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Same', '', 'http://www.worldaidsday.org', '', '', 'About World AIDS Day', '', 'World AIDS Day is held in December each year and is an opportunity for people worldwide to unite in the fight against HIV, show their support for people living with HIV and to commemorate people who have died. \n\nWorld AIDS Day was the first global health day created. It was first observed in 1988.', 'National AIDS Trust', 'London', ' ', 'UK', 'New City Cloisters ', '196 Old Street', NULL, NULL, NULL, 'EC1V 9FR ', '(+44) (0)20 78.14.67.33', 'press@nat.org.uk', 'Media Relations', 'http://www.worldaidsday.org/contact-us', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(3, 'Anger Awareness Week, Ntl. (UK): December 1-7', 'United Kingdom', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '7', '2021', '2021-12-07', NULL, 'Weekly', 'Same', '', 'https://www.angermanage.co.uk/national-anger-awareness-week/', 'National_Anger_Awareness_WeekF.jpg', 'National_Anger_Awareness_WeekE.jpg', 'About National Anger Awareness Week in the United Kingdom', '', '0', 'British Association of Anger Management', 'West Sussex', ' ', 'UK', '14 Railway Approach', 'East Grinstead', NULL, NULL, NULL, 'RH19 1BP', '(+44)(0)34 51.30.02.86', 'info@beatinganger.com', 'General Information', 'http://www.beatinganger.com/contact-us', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(4, 'Antarctica Day, Intl. (1959): December 1', 'Worldwide', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Same', '', 'http://apecs.is/outreach/antarctica-day', 'International_Antarctica_DayF.jpg', 'International_Antarctica_DayE.jpg', 'About International Antarctica Day', '', 'Today is the anniversary of the signing of the Antarctic Treaty on December 1, 1959. This treaty, signed by 12 nations to insure the area of Antarctica (comprising 10% of the earths surface) be set aside as an international space forever and be used only for peaceful purposes.\n\nThe treaty is considered the first nuclear arms agreement and the first ever treaty that governed human activity in an international space.\n\nOn the 50th Anniversary, non-profit Our Spaces took up the cause and created International Antarctica Day to help educate the world about this pristine environment and the treaties protecting it.', 'Historical Anniversary. See Our Spaces for Information', 'Herts', ' ', 'UK', 'Our Spaces', ' 20 Chishill Road, Heydon', NULL, NULL, NULL, 'SG8 89W', '', 'http://www.ourspaces.org.uk/formulario.html', 'General Information', 'http://www.ourspaces.org.uk/formulario.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(5, 'Art, Day Without: December 1', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Same', '', 'https://www.visualaids.org/projects/detail/day-without-art', 'National_Day_Without_ArtF.jpg', 'National_Day_Without_ArtE.jpg', 'About National Day Without Art', '', 'Created in 1989 as a way for artists, museums and other cultural institutions to raise awareness about AIDS, Day Without Art (DWA) now attracts thousands of institutions worldwide and has become part of the observance calendar for may schools and libraries in addition to museums, galleries and art centers.', 'Visual AIDS', 'New York City', 'NY', 'US', '526 W. 26th St. # 510', ' ', NULL, NULL, NULL, '10001', '(212) 627.9855', 'info@visualAIDS.org', 'General Information', 'https://www.visualaids.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(6, 'Beer, Holiday Ale Fest, Portland: December 1-5', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '5', '2021', '2021-12-05', NULL, 'Weekly', 'Changes', 'Wednesday after TG', 'https://holidayale.com', '', '', 'About Portland, Oregon\'s, Holiday Ale Fest', '', 'Annually at Pioneer Courthouse Square in Downtown Portland, Oregon, the Portland Holiday Ale Fest is five days of fun and beer tasting for adults (21 and over. No children allowed) between Thanksgiving and Christmas. Designated Drivers receive free non-alcoholic drinks for the duration. \n\nThis event first ran in 1995.', '0', 'Portland', 'OR', 'US', 'Pioneer Courthouse Square', '701 SW Sixth Ave', NULL, NULL, NULL, '97204', '', 'holidayfestival@gmail.com', 'Chris Crabb', 'http://holidayale.com/festfacts.php', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(7, 'Bifocals at the Monitor Liberation Day: December 1', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Same', '', 'http://www.wellcat.com/december/bifocals_at_the_monitor_liberati.htm', '', '', 'About Bifocals at the Monitor Liberation Day', '', '0', 'Wellcat Events', 'Lebanon', 'PA', 'US', '2418 Long Lane', '', NULL, NULL, NULL, '17046', ' (717) 279.0184   ', 'info@wellcat.com', 'Thomas & Ruth Roy', 'http://www.wellcat.com/Order%20Information.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(8, 'Bingo Month, Ntl. (1929): December ', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://strangelife.com/bingodoc/bingohist.html ', '', '', 'About National Bingo Month', '', '0', 'Historical Event.  See Bingo Bugle Newspaper Group', 'Vashon', 'WA', 'US', 'Bingo Bugle Newspaper Group', 'Box 527', NULL, NULL, NULL, '98070', '(206) 463.5656', 'tara@bingobugle.com', 'Tara Snowden, President', 'http://bingobugle.com/contact.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(9, 'Calendar Awareness Month, Intl.: December', 'Worldwide', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://libguides.ctstatelibrary.org/hg/colonialresearch/calendar', '', '', 'About International Calendar Awareness Month', '', '0', 'Unofficial Event. No Sponsor. See the Connecticut State Library on topic.', 'Hartford', 'CT', 'US', 'Connecticut State Library', 'Capitol Avenue', NULL, NULL, NULL, '06106', '(866) 886.4478', 'http://ctstatelibrary.org/contact-us/email-us/', 'General Information', 'http://ctstatelibrary.org/contact-us/email-us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(10, 'Cancer Related Fatigue Awareness Month: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'https://www.mcancer.org/living-with-cancer/mind-body-and-side-effects/cancer-related-fatigue', '', '', 'About National Cancer Related Fatigue Awareness Month', '', '0', 'American Cancer Society', 'Atlanta', 'GA', 'US', '250 Williams Street NW', '', NULL, NULL, NULL, '30303', '(404) 417.5894', 'miriam.falco@cancer.org', 'Miriam Falco\nManaging Director, Media Relations', 'http://pressroom.cancer.org/media-relations-contacts', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(11, 'Cat Lover\'s Month, Ntl.: December*', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'https://www.petmd.com/cat/pet-lover/celebrate-cat-lovers-month-cat-calendar-daily-dos', '', '', 'About National Cat Lover\'s Month', '', 'Ailurophile is the fancy name for a person who loves cats and December is National Cat Lover\'s Month. Cats have been companions to people for over 10-12,000 years and perform an essential function in keeping rodent populations at bay. Cats, as we know them today, are descendants of a Middle Eastern wildcat called Felis sylvestris (Cat of the Woods). This also explains why they are called felines and where the name Sylvester (as in Sylvester the Cat) came from.  \n\nNational Cat Lover\'s Month is an opportunity for cat lovers to socialize, share and work together in order to make the world more purrfect! This event appears to have initiated in 2014. Its founder is as yet unknown.', 'Unofficial Event. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(12, 'Constipation Awareness Month: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'https://sephure.com/december-constipation-awareness-month/', '', '', 'About National Constipation Awareness Month', '', 'December was declared Constipation Awareness Month sometime ago and it appears to not have a regular sponsor or official status as of 2012.  \n\nHowever, it continues to be noted throughout the blogosphere. \n\nDecember was originally chosen because in Western cultures, this is a time of overeating, rich foods and high alcohol content.  For many this causes stomach issues ranging from indigestion to constipation.  \n\nHolistic remedies and physical activity can often prevent or relieve this issue. Left unchecked, constipation can kill. December presents an excellent opportunity to explore solutions and learn to eat in such a way that your health remains good.', 'Unofficial Event. No Sponsor. See IFFGD for background', 'Milwaukee', 'WI', 'US', 'International Foundation for Functional Gastrointestinal Disorders, Inc.', 'PO Box 170864', NULL, NULL, NULL, '53217', '(414) 964.1799', 'http://www.iffgd.org/contact-us.html', 'General Information', 'http://www.iffgd.org/contact-us.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(13, 'Decembeard (AU): December', 'Australia', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'https://www.decembeard.org.au', '', '', 'About Decembeard for Bowel Cancer', '', 'Skip shaving for a month and grow a beard for a good cause, fighting Bowel Cancer. Decembeard is an annual fundraising campaign (and the perfect excuse not to shave). To get started, simply register on the event website. Start growing your beard and enjoy the festivities of the holidays. It\'s as easy as 1-2-3 and all proceeds go to fight bowel cancer and cancer research. ', 'Bowel Cancer Australia', 'North Sydney', 'NSW', 'AU', 'Level 2, 65 Walker Street', '', NULL, NULL, NULL, '2060', '(+61) 2 9923 8269', 'https://www.decembeard.org.au/contact-us', 'General Information', 'https://www.decembeard.org.au/contact-us', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(14, 'Eggnog Month, Ntl.: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://whatscookingamerica.net/Eggnog.htm', '4318_Eggnog_MonthF.jpg', '4318_Eggnog_MonthE.jpg', 'About National Eggnog Month', '', 'The Merriam-Webster Dictionary says eggnog is a drink made of eggs, sugar, milk or cream and often includes liquor. \n\nNog is an old English dialect word (from East Anglia) of obscure origins that was used to describe a kind of strong beer (hence noggin). \n\nIt is first recorded in the seventeenth century. Enjoy the entire month by making your own recipe for Eggnog.\n\nThis is an unofficial event. ', 'Unofficial Event. No Sponsor. See Berkeley Farms on topic.', 'Dallas', 'TX', 'US', 'Berkeley Farms, Suiza Foods Corp', '2515 McKinney Ave Ste. 1200', NULL, NULL, NULL, '75201', '(510) 265.8600', 'http://www.berkeleyfarms.com/about/contactUs', 'Derek Allbee, General Manager', 'http://www.berkeleyfarms.com/about/contactUs', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(15, 'Food Service Safety Month, Intl.: December', 'Worldwide', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://www.haroldLeBouf.com', '', '', 'About Worldwide Food Service Safety Month', '', 'Worldwide Food Service Safety Month encourages food service safety. It reminds cooks, whether at home or on the job, to buy, prepare, serve, and store prepared food properly. Annually in December since 1998.', 'Harold Le Bouf', '', 'MA', 'US', '', '', NULL, NULL, NULL, '', '(978) 343.4009', 'DebKulkkula@gmail.com', 'Debra Le Bouf Kulkkula PhD', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(16, 'Identity Theft Prevention & Awareness Month: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://legal.sla.org/2012/12/identity-theft/', '', '', 'About National Identity Theft Prevention & Awareness Month', '', 'National Identity Theft Prevention and Awareness Month is supported by a number of organizations and seeks to raise awareness on how easy it is to become a victim during the busy holiday shopping season. \n\nLaws and technology have a hard time keeping up with the criminals\' ingenuity. No matter how protected we are, it\'s the responsibility of each of us to keep ourselves informed and alert for potential risk and dangers.\n\nPrecautions including never letting your card out of your sight, not using exposed ATMs (opt for ATMs in stores or banks), setting up bank alerts for all transactions, shredding bank statements and other trash that includes sensitive information, keeping passwords safe and not giving out your national ID information freely. For example, not everyone who asks for it needs your social security number in the United States. Only the government and creditors do. If you\'re not applying for credit, it\'s not tied to government services or taxes, other organizations do not need it. Never allow it to be your ID number outside of Social Security. Refuse, so it doesn\'t get reused.\n\nThese are some of the steps you can take to help guard your identity. ', 'Identity Theft Resource Centre', 'San Diego', 'CA', 'US', '3625 Ruffin Road\nSan Diego, CA  92123', '#204', NULL, NULL, NULL, '92123', '(888) 400.5530', 'Media@idtheftcenter.org', 'Media Relations', 'http://www.idtheftcenter.org/contact-us.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(17, 'Impaired Driving Prevention Month, Ntl.: December ', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://www.presidency.ucsb.edu/ws/index.php?pid=128913', '', '', 'About National Impaired Driving Prevention Month', '', 'National Impaired Driving Prevention Month aims to raise awareness about the dangers of drunk and drugged driving. Scheduled during the holiday season when parties are commonplace, this event is declared each year via Presidential Proclamation. ', 'Presidential Proclamation: National Defense Transportation Association', 'Alexandria', 'VA', 'US', '50 South Pickett Street', 'Suite 220', NULL, NULL, NULL, '22304-7296', '(703) 751.5011', 'sharon@ndtahq.com', 'Sharon Lo\nDirector of Public Relations', 'http://www.ndtahq.com/contact.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(18, 'Independence Day, (PT)(1640): December 1', 'Portugal', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Same', '', 'https://www.themayor.eu/cs/portugal/holidays/2019/12/1/restoration-of-independence-day-in-portugal', '', '', 'About Independence Restoration Day in Portugal', '', 'Independence Restoration Day in Portugal marks the anniversary of December 1, 1640, the official day Portuguese people revolted against Spanish rule and became their own kingdom. This is a national holiday.', 'Historical Anniversary. National Holiday in Portugal.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(19, 'Infantile Spasms Awareness Week: December 1-7', 'Worldwide', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '7', '2021', '2021-12-07', NULL, 'Weekly', 'Same', '', 'http://www.isweek.org', '', '', 'About Infantile Spasms Awareness Week', '', '0', 'Infantile Spasms Action Network,', 'Minneapolis', 'MN', 'US', 'Child Neurology Foundation', '201 Chicago Avenue #200', NULL, NULL, NULL, '55415', '(612) 928.6325', 'info@childneurologyfoundation.org', 'General Information', 'http://www.isweek.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(20, 'Learn a Foreign Language Month: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://library.morningside.edu/hjf-news/learn-a-foreign-language-month', '', '', 'About National Learn a Foreign Language Month', '', 'There are approximately 7,102 languages in the world.  The top five for native speakers are Mandarin Chinese, Spanish, English, Hindi and Arabic in that order.\n\nThis month is an opportunity to add to your own vocabulary and try a new language. \n\nThis is an unofficial event with no sponsor.', 'Unofficial Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(21, 'Made in America Month, Ntl.: December ', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://www.reagan.utexas.edu/archives/speeches/1986/120886d.htm', '', '', 'About National Made in America Month', '', '0', 'Presidential Decree: U.S. General Services Administration', 'Washington', 'DC', 'US', 'Office of Citizen Services and Innovative Technologies', '1800 F Street, NW', NULL, NULL, NULL, '20405', '(800) 333.4636', 'http://answers.usa.gov/system/templates/selfservice/USAGov/#!portal/1012/email_us', 'Citizen Services', 'http://www.usa.gov/Contact-Us.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(22, 'National Day, (RO)(1918): December 1', 'Romania', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Same', '', 'https://scholar.princeton.edu/sites/default/files/gpop/files/romania_twenty_years_after_1989.pdf', '', '', 'About National Day in Romania', '', 'National Day in Romania marks the anniversary of December 1, 1918, the official day people Romania and Transylvania were reunited after WWI. This is a national holiday.', 'Historical Anniversary. National Holiday in Romania.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(23, 'NORAD Santa Tracker: December 1-24', 'Worldwide', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '24', '2021', '2021-12-24', NULL, 'Weekly', 'Same', '', 'https://www.noradsanta.org', 'NORADSantaF.png', 'NORADSantaE.png', 'About the NORAD Santa Tracker', '', 'Created from a misprinted phone number in a Sears ad during the 1955, the NORAD Sannta Tracker goes live each December 1 and follows Santa\'s progress leading up to his big day, December 24. This delightful tool teaches children world geography, whilst adding to the excitement of Christmas Eve, every year since 1958. ', 'NORAD', 'Peterson AFB', 'CO', 'US', '250 Vandenberg, Ste. B-016', '', NULL, NULL, NULL, '80914-3808', '(719) 554.6889', 'n-nc.peterson.n-ncspecialstaff.mbx.usnorthcom-pa-omb@mail.mil', 'Media Relations', 'https://www.norad.mil/Contact.aspx', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(24, 'Operation Santa Paws: December 1-24', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '24', '2021', '2021-12-24', NULL, 'Monthly', 'Same', '', 'http://www.hautedogs.org/santapaws.html', '', '', 'About Operation Santa Paws', '', 'Operation Santa Paws is a three week event, organized every December, from December 1 to December 24. \n\nPromoted and ran by various different animal-related organizations (like http://www.hautedogs.org/ for example), it\'s a time for raising awareness about the countless homeless animals out there, and for encouraging people to adopt a pet for their kids (or for themselves!) before or at Christmas.', 'Haute Dogs', 'Long Beach', 'CA', 'US', '5209 E. The Toledo #1', '', NULL, NULL, NULL, '90803', '(562) 439.3316', 'justin@justinrudd.com', 'Justin Rudd', 'http://www.hautedogs.org/santapaws.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(25, 'Read a New Book Month: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://family-bookshelf.org/read-a-new-book-month/', '', '', 'About National Read a New Book Month', '', '0', 'Unofficial Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(26, 'Red Apple Day: December 1', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Same', '', 'http://www.whyguides.com/why-are-apples-associated-with-teachers.html', '', '', 'About Red Apple Day', '', '0', 'Unofficial Event. No Sponsor. See US Apple Association for info on apples', 'Vienna', 'VA', 'US', 'US Apple Association', '8233 Old Courthouse Road Suite 200', NULL, NULL, NULL, '22182', '(703) 442.8850', 'info@usapple.org', 'Media Relations', 'http://www.usapple.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(27, 'Rosa Parks Day (1955): December 1', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Same', '', 'http://www.rosaparks.org/', '', '', 'About Rosa Parks Day', '', 'On December 1, 1955, in Montgomery, Alabama, Rosa Louise Parks became known as \'The Mother of Modern Day Civil Rights Movement\' when she refused to surrender her seat to a white male passenger on a bus. At the time, segregation of races was strictly enforced in many areas of the US. This simple act was a courageous and dangerous act.\n\nBorn in 1913, Rosa Parks was 42 years old at the time and she firmly defended her right to a seat in the bus.', 'Historical Anniversary. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', '   ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(28, 'Seasonal Affective Disorder Depression (SADD) Awareness Month: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://www.mentalhealthamerica.net/conditions/sad', '', '', 'About National Seasonal Affective Disorder Depression (SADD) Awareness Month', '', 'December is the Seasonal Affective Disorder Depression (SADD) Awareness Month. It\'s a month that raises awareness about the Season Affective Disorder and aims to educate people about SADD. \n\nIt\'s much more than winter blues or autumn tiredness. SADD is real and common. It is a serious type of depression characterized by low energy, depressed mood, hopelessness, irritability or anxiety, poor concentration, social withdraw, changes in your sleep and appetite, a loss of interest in previously favorite activities, etc. It is created by shorter days and longer nights and especially prevalent in regions without a lot of sunshine during the fall and winter months like the Pacific Northwest of the United States.', 'National Institute of Health', 'Bethesda', 'MD', 'US', 'Clinical Center Office of Communications', '10 Cloister Court, Building 61, Room 100', NULL, NULL, NULL, '20892', '(301) 496.2563', 'Not Available', 'Media Relations', 'http://www.nih.gov/about/visitor/index.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(29, 'Sharps Injury Prevention & Awareness Month, Intl.: December', 'Worldwide', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://www.isips.org/page/purpose', '', '', 'About International Sharps Injury Prevention & Awareness Month', '', 'International Sharps Injury Prevention & Awareness Month seeks to reduce the number of accidental needle and sharp object injuries that happen everywhere, especially in healthcare organizations. The International Sharps Injury Prevention Society (ISIPS) is a provider of safety-engineered products and services.', 'International Sharps Injury Prevention Society', 'South Jordan', 'UT ', 'US', '10046 Prestwick Circle', '', NULL, NULL, NULL, '84095', '(801) 280.8797', 'info@isips.org', 'General Information', 'http://www.isips.org/contact', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(30, 'Toys & Gifts (Safe) Month: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'https://www.preventblindness.org/safe-toy-checklist', '7612_Safe_Toys_Gifts_MonthF.jpg', '7612_Safe_Toys_Gifts_MonthE.jpg', 'About National Safe Toys & Gifts Month: December', '', '0', 'Prevent Blindness America', 'Chicago', 'IL', 'US', '211 West Wacker Drive', 'Suite 1700', NULL, NULL, NULL, '60606', '(800) 331.2020', 'http://www.preventblindness.net/site/Survey?ACTION_REQUIRED=URI_ACTION_USER_REQUESTS&SURVEY_ID=1180', 'General Information', 'http://www.preventblindness.org/contact-us', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(31, 'Turner Prize Awarded (UK): December 1', 'United Kingdom', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'Changes', '', 'https://www.tate.org.uk/art/turner-prize', '', '', 'About the Turner Prize in the Arts', '', 'Awarded to artist working primarily in Britain or British citizens globally, the Turner Prize honors the best artistic creations of the past year. This event first ran in 1984.', 'Tate Gallery', 'London', '', 'UK', '', '', NULL, NULL, NULL, '', '(+44) (0)20 78.87.8888', 'visiting.britain@tate.org.uk', 'General  Information', 'https://www.tate.org.uk/about-us/contact-us', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(32, 'Winter Weather Safety Day, Ntl.: December 1', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '1', '2021', '2021-12-01', NULL, 'Daily', 'same', ' ', 'https://www.weather.gov/wrn/winter_safety', '', '', 'About National Winter Weather Safety Day', '', 'Thunder and lighting, snow, ice, hypothermia and extreme cold are just some of the weather related hazards which occur in the winter.  National Winter Weather Safety Day is the annual day the National Weather Service seeks to educate the public about the hazards ahead and how to prepare for them. This is one of four seasonal Safety campaigns sponsored by the  National Weather Service  each year. ', 'National Weather Service', 'Silver Spring', 'MD', 'US', '1325 East West Highway', '', NULL, NULL, NULL, '20910', '(202) 482.4883', 'publicaffairs@doc.gov', 'Media Relations', 'https://www.commerce.gov/page/media-contacts', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(33, 'Write a Business Plan Month, Ntl.: December ', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'http://www.northbaybiz.com/Monthly_Features/bizTips/December_Is_Write_a_Business_Plan_Month.php', '', '', 'About National Write a Business Plan Month', '', 'December is a slow month for business if you\'re in anything but retail or shipping.  Therefore it is the perfect time to jumpstart your new year and develop that idea you\'ve been working on in your head.  Use this month to plan the rest of your life and become your own boss. Use National Write a Business Plan Month as your motivation. \n', 'Nationwide Business Plans, LLC', 'Gilbert', 'AZ', 'US', '4718 S. Burma Rd. ', '', NULL, NULL, NULL, '85297', '(602) 430.3079', 'jocelynsaccuci@yahoo.com', 'Jocelyn Saccuci', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(34, 'Write a Friend Month, Ntl.: December', 'United States', '12', '1', '2021', NULL, NULL, NULL, NULL, '2021-12-01', '12', '31', '2021', '2021-12-31', NULL, 'Monthly', 'Same', '', 'https://www.scholastic.com/teachers/blog-posts/amanda-nehring/its-national-write-friend-month/', '', '', 'About National Write a Friend Month', '', 'National Write a Friend Month is popular with school teachers and bloggers as it provides a chance to develop writing skills and connect with people using more than shorthand and texts.  Take this opportunity to pen a letter to a friend you haven\'t connected with in awhile.  Better yet, create a letter to send out with your Christmas Cards. It\'s a great way to stay in touch, work on your penmanship and bring a smile to someone\'s face!\n\nThis is an unofficial event with no sponsor. ', 'Unofficial Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(35, 'Fritters Day, Ntl.: December 2', 'United States', '12', '2', '2021', NULL, NULL, NULL, NULL, '2021-12-02', '12', '2', '2021', '2021-12-02', NULL, 'Daily', 'Same', '', 'https://www.sparkpeople.com/mypage_public_journal_individual.asp?blog_id=6436673', '', '', 'About National Fritters Day', '', '0', 'Unofficial Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(36, 'Mutt Day, Ntl.: December 2*', 'United States', '12', '2', '2021', NULL, NULL, NULL, NULL, '2021-12-02', '12', '2', '2021', '2021-12-02', NULL, 'Daily', 'Same', '', 'http://www.nationalmuttday.com', '', '', 'About National Mutt Day', '', 'Created by Colleen Page, National Mutt Day is one of two days a year celebrating mixed breed dogs. A mutt is any dog that is not considered a pedigree/pure bred or recognized as such by the American Kennel Club and its international affiliations. Eighty-percent of dogs found in shelters are considered mutts. This day occurs twice a year as a reminder to adopt from your shelter and make sure to get your dog spayed or neutered. First run in 2005.', 'Colleen Paige', 'Scottsdale', 'AZ', 'US', '14747 N Northsight Blvd ', 'Suite 111, PMB 309', NULL, NULL, NULL, '85260', '(480) 624.2599', 'pr@theholidayguild.com', 'Colleen Paige', 'http://www.colleenpaige.com/holidays', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(37, 'National Day, (LA)(1975) December 2', 'Laos', '12', '2', '2021', NULL, NULL, NULL, NULL, '2021-12-02', '12', '2', '2021', '2021-12-02', NULL, 'Daily', 'Same', '', 'https://www.la.undp.org', '', '', 'About National Day in Laos', '', 'National Day in Laos marks the anniversary of December 2, 1975 the official day Laos declared itself a republic. This is a national holiday.', 'Historical Anniversary. National Holiday in Laos.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(38, 'National Day, (UE)(1971): December 2', 'United Arab Emirates', '12', '2', '2021', NULL, NULL, NULL, NULL, '2021-12-02', '12', '2', '2021', '2021-12-02', NULL, 'Daily', 'Same', '', 'https://u.ae/en/about-the-uae/history', '', '', 'About National Day in the UAE', '', 'National Day in United Arab Emirates marks the anniversary of December 2, 1971 the day the seven Trucial States (tribes) joined together as one to become the UAE. This is a national holiday.', 'Historical Anniversary. National Holiday in UAE.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(39, 'Slavery Abolition, World Day of (1807): December 2', 'Worldwide', '12', '2', '2021', NULL, NULL, NULL, NULL, '2021-12-02', '12', '2', '2021', '2021-12-02', NULL, 'Daily', 'Same', '', 'http://www.un.org/en/events/slaveryabolitionday/', '', '', 'About the World Day for the Abolition of Slavery ', '', 'World Day of Slavery Abolition marks the anniversary of December 2, 1807 Act Prohibiting Importation of Slaves becoming Federal Law in the United States. This act abolished the international slave trade in the country, but did not end the practice.\n\nOn this day the UN moves to resolve the 2030 Agenda for Sustainable Development as a roadmap for stamping out the root causes of slavery and freeing all enslaved people in the world.', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(40, 'Special Education Day, (1975) Ntl.: December 2', 'United States', '12', '2', '2021', NULL, NULL, NULL, NULL, '2021-12-02', '12', '2', '2021', '2021-12-02', NULL, 'Daily', 'Same', '', 'http://www.specialeducationday.com/', '', '', 'About National Special Education Day', '', 'National Special Education Day is a historic anniversary of the nation\'s first federal special education law, adopted on this day in 1975. It\'s a day that honors and celebrates students with disabilities, their teachers, parents and schools, and the progress that they and we as a society are making. \n\nThis event first ran in 2004.', 'Historical Anniversary. Special Education Day Committee', ' ', ' ', 'US', 'Special Education Day Committee', ' ', NULL, NULL, NULL, ' ', ' ', 'info@specialeducationday.com', 'General Information', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(41, 'Walter Plinge Day (UK): December 2', 'United Kingdom', '12', '2', '2021', NULL, NULL, NULL, NULL, '2021-12-02', '12', '2', '2021', '2021-12-02', NULL, 'Daily', 'Same', '', 'https://www.dramsoc.org', '', '', 'About Walter Plinge Day in the United Kingdom', '', 'Walter Plinge, George Spelvin, David Agnew and Alan Smithee, what do all these people have in common? They are all theater names, or pseudonyms, for uncast parts or when an actor wishes to hide his identity. The theater and entertainment world each have their superstitions and traditions. Walter Plinge is the London theater world\'s tradition. Sir Walter Plinge is said to have a ghost in residence at London\'s Imperial College Union Concert Hall. Walter Plinge Day honors this mythical thespian. ', 'Thespian Tradition. See Imperial College Union Concert Hall on Topic.', 'South Kensington, London', '', 'UK', 'Imperial College Union Concert Hall', 'Beit Quadrangle, Prince Consort Road', NULL, NULL, NULL, 'SW7 2BB', '(+44)(0) 20 759.48.102', 'president@dramsoc.org', 'General Information', 'https://www.dramsoc.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(42, 'Be a Blessing Day: December 3', 'Worldwide', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '3', '2021', '2021-12-03', NULL, 'Daily', 'Same', '', 'https://www.oneriverfoundation.org', '', '', 'About Be a Blessing Day', '', '0', 'One River Foundation', 'Murfreesboro', 'TN', 'US', '2441-Q Old Fort Pkwy', 'Suite 412', NULL, NULL, NULL, '37128', '', 'info@oneriverfoundation.org', 'Rabbi Rami Shapiro', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(43, 'Clerc-Galladet Week (1787): December 3-10', 'United States', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '10', '2021', '2021-12-10', NULL, 'Weekly', 'Same', '', 'http://www.foldadeaf.net', '', '', 'About Clerc-Galladet Week', '', 'First run in 1974, DC Public Library established Clerc-Gallaudet Week to honor two pioneers in deaf education, Laurent Clerc, born December 26, 1785, and Thomas Hopkins Gallaudet, born December 10, 1787. Clerc was a deaf teacher from France and Gallaudet was a hearing minister from Connecticut. The two met in 1815 and together they would create the foundation for American Sign Language, deaf culture and deaf education in the United States. \n\nThis annual celebration honors their achievements and supports the needs of America\'s deaf community. ', 'Library of Deaf Action', 'Silver Spring', 'MD', 'US', '2930 Craiglawn Rd.', '', NULL, NULL, NULL, '20904', '', 'ahagemeyer@gmail.com', 'Alice L. Hagemeyer, MLS', 'http://www.foldadeaf.net/contacts/index.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(44, 'E-Discovery Day: December 3', 'United States', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '3', '2021', '2021-12-03', NULL, 'Daily', 'Same', '', 'http://www.e-discoveryday.com', '', '', 'About E-Discovery Day', '', '0', 'Exterro', 'Beaverton', 'OR', 'US', '4145 SW Watson Ave., Ste. 400', '', NULL, NULL, NULL, '97005', '(503) 501.5134', 'Media@exterro.com', 'Media Relations', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(45, 'Farmers\' Day, Ntl. (GH): December 3', 'Ghana', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '3', '2021', '2021-12-03', NULL, 'Daily', 'Changes', '1st Friday in December', 'https://greengoldfarmsghana.com', '', '', 'About Farmers\' Day in Ghana', '', 'The African nation of Ghana is well-known for its agriculture. Key crops include: cassava, citrus, cocoa, cocoyam, maize, millet, palm oil, plantain, rice, rubber, sorghum and yams. Each year the nation celebrates the farmers who bring these essential products to market on Farmers\' Day. ', 'Public Holiday in Ghana', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(46, 'Galveston Dicken\'s on the Strand (US-TX): December 3-5', 'United States', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Changes', '', 'http://www.galvestonhistory.org', '', '', 'About Dicken\'s on the Strand in Galveston, Texas. ', '', '0', 'Galveston Historical Foundation', 'Galveston', 'TX', 'US', '2228 Broadway', '', NULL, NULL, NULL, '77550', '(409) 765.3404', 'foundation@galvestonhistory.org', 'General Information', 'http://www.galvestonhistory.org/us-template/staff-contact-page', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(47, 'Make a Gift Day: December 3', 'Worldwide', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '3', '2021', '2021-12-03', NULL, 'Daily', 'Same', '', 'http://faze.ca/diy-gift-guide/', '', '', 'About Make a Gift Day', '', 'Make a Gift Day is a day specially devoted the act of creating a gift for someone you love.  Use your talents to draw, paint, craft or sew.  Write a poem or a song.  Create a playlist of your favorite songs for your favorite person.  Whatever it is, what is important is that it is made rather than bought.\n\nThis can also be a day to do some good by making a gift of money, time or resources to your favorite charity.\n\nMake a Gift Day is an unofficial event with no sponsor. ', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(48, 'Persons with Disabilities, International Day of: December 3', 'Worldwide', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '3', '2021', '2021-12-03', NULL, 'Daily', 'Same', '', 'http://www.un.org/en/events/disabilitiesday/', '', '', 'About the International Day of Persons with Disabilities', '', 'The United Nation\'s International Day of Persons With Disabilities highlights the struggles and triumphs of 1/5 of the world\'s population. It is estimated that around one billion of people worldwide live with some form of disability. The day aims to promote the rights and well-being of persons with disabilities in all spheres of society and development, and to increase awareness of the situation of persons with disabilities in every aspect of political, social, economic and cultural life. \n\nThe annual observance was proclaimed in 1992, by the United Nations General Assembly resolution 47/3. ', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(49, 'Roof Over Your Head Day, Ntl.: December 3', 'United States', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '3', '2021', '2021-12-03', NULL, 'Daily', 'Same', '', 'https://www.c21affiliated.com/Blog/National_Roof_Over_Your_Head_Day', '', '', 'About National Roof Over Your Head Day', '', 'National Roof Over Your Head Day is a simple day with a simple message - remember how lucky you actually are if you have a roof over your head and help those less fortunate than you.', 'Unofficial Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', '   ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(50, 'Salesperson\'s Day, Ntl.: December 3', 'United States', '12', '3', '2021', NULL, NULL, NULL, NULL, '2021-12-03', '12', '3', '2021', '2021-12-03', NULL, 'Daily', 'Changes', '1st Friday in December in Chase.', 'https://blog.hubspot.com/sales/hardest-part-of-salespersons-day', '', '', 'About National Salesperson\'s Day', '', 'National Salesperson\'s Day in the United States celebrates an essential building block of a successful economy, sales. Salespeople are responsible for getting goods and services into the hands of the people who need them.  They can be found in stores, helping people find what they need. They often are the public face of companies, going out and prospecting for new and servicing existing customers. Top sales professionals earn very high salaries, often based upon a percentage of what they sell. Their service is essential. Without them, most goods and services would never find a way into the hands of the people and companies that need them.\n\nAlways the first Friday in November, this is a day to honor the efforts of these men and women. \n\nThis event first ran in 2000 and was created by author and the president of Best@Selling by Maura Schreier-Fleming.', 'Best @ Selling', 'Dallas', 'TX', 'US', '7028 Judi', '', NULL, NULL, NULL, '75379-5633', '(972) 380.0200', 'Maura@BestAtSelling.com', 'Maura Schreier-Fleming', 'http://www.bestatselling.com/contact-us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(51, 'AFL-CIO Day (1955): December 4', 'United States', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Same', '', 'http://www.aflcio.org/About/Our-History/Labor-History-Timeline', '', '', 'About AFL-CIO Day', '', '0', '0', 'Washington', 'DC', 'US', '815 16th St., N.W.', ' ', NULL, NULL, NULL, '20006', '(202) 637.5018', 'cbobb@aflcio.org', 'Carolyn Bobb, Media Outreach', 'http://www.aflcio.org/Press-Room', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(52, 'Bike Shop Day, Ntl.: December 4', 'United States', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Changes', '1st Saturday December', 'http://www.bikeshopday.com', '', '', 'About National Bike Shop Day', '', 'National Bike Shop Day was first held in 2017. Its purpose is to bring together independent bike stores across the country and educate the public about the economic, ecological and health benefits of bicycling. Annually on the first Saturday in December. ', '718 Cyclery', 'Brooklyn', 'NY', 'US', '254 3rd Ave. ', '', NULL, NULL, NULL, '11214', ' (917) 715.2524 ', 'info@718c.com', 'General  Information', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(53, 'Black Pound Day (UK): December 4', 'United Kingdom', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Changes', '1st Saturday of Each Month', 'https://blackpoundday.uk', '', '', 'About Black Pound Day', '', 'Born in 2020 in the wake of the Black Lives Matter global protest, Black Pound Day in the United Kingdom is a monthly event occurring on the first Saturday of each month (except the first day, which was held in June 2020). The purpose is to ask consumers to support Black owned businesses on this day by shopping at them or giving their patronage. Created by musician DJ Swiss. ', 'So Solid Crew', 'London', '', 'UK', '71 - 75, Shelton Street', '', NULL, NULL, NULL, 'WC2H 9JQ', '', 'info@blackpoundday.uk', 'DJ Swiss', 'https://blackpoundday.uk/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(54, 'Brown Shoes Day: December 4', 'United States', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Same', '', 'http://www.sparkpeople.com/mypage_public_journal_individual.asp?blog_id=5556633', '', '', 'About Brown Shoes Day', '', '0', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(55, 'Cheetah Day, Intl: December 4', 'Worldwide', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Same', '', 'http://internationalcheetahday.com', '', '', 'About International Cheetah Day', '', 'International Cheetah Day raises awareness on the plight of the cheetah and the importance of these animals for the environment. There are several things that you can do to celebrate this event: buy the official Cheetah Day shirt, use the hashtag #SaveTheCheetah or #IntlCheetahDay in your social media accounts or support a cheetah in Namibia.', 'The Cheetah Foundation', 'Alexandria', 'VA', 'US', '200 Daingerfield Rd.', ' Suite 200', NULL, NULL, NULL, '22314', '(866) 909.3399', ' info@cheetah.org', 'General Information', 'https://cheetah.org/contact-us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(56, 'Cookie Day, Ntl.: December 4', 'United States', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Same', '', 'http://muppet.wikia.com/wiki/National_Cookie_Day', '', '', 'About National Cookie Day', '', '0', 'Unofficial Event. No Sponsor.  See Jim Hensen Company for History', 'Hollywood', 'CA', 'US', 'Jim Henson Company', '1416 North LaBrea Ave', NULL, NULL, NULL, '90028', '(323) 802.1500', 'ngoldman@henson.com', 'Nicole Goldman, Vice President of Marketing and Public Relations', 'http://henson.com/contacts.php', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(57, 'Dice Day, Intl.: December 4', 'Worldwide', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Same', '', 'https://www.wired.com/2007/12/national-dice-d/', '', '', 'About International Dice Day', '', 'International Dice Day celebrates one of the oldest games and tools of gaming in existence, dice. Whether you choose to play Monopoly, Backgammon, Dungeons & Dragons, Craps or any other game with dice, this is your day! \n\nDice and dice games have been around longer than the written word. Dice have been found in the ruins of most ancient civilizations, whether they were made from animal bones, stone or wood. \n\nCasinos around the globe offer various different promotions on this day; but even if you\'re not into gambling, there are plenty of dice games that one can enjoy on the International Dice Day.', 'Unofficial Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37');
INSERT INTO `events` (`id`, `name`, `states`, `start_month`, `start_day`, `start_year`, `country`, `event_address1`, `event_address2`, `status`, `start_date`, `end_month`, `end_day`, `end_year`, `end_date`, `duration`, `type`, `static_change`, `notes_not_public`, `url`, `feature_picture`, `picture_name`, `alt_text`, `estimated`, `description`, `event_champion`, `champ_city`, `champ_state`, `champ_country`, `champ_address1`, `champ_address2`, `city`, `state`, `country_code`, `zip`, `ph_num`, `email_form`, `contact_person`, `contact_link`, `physical_address`, `purchase_reserve`, `location_based`, `manager`, `event_physical_address`, `user_id`, `created_at`, `updated_at`) VALUES
(58, 'Dickensian Christmas Festival, Kent (UK): December 4-5 (est)', 'United Kingdom', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Changes', '', 'http://rochesterdickensfestival.org.uk', '', '', 'About the Dickensian Christmas Festival in Rochester, Kent, United Kingdom.', 'Yes', 'Step into Charles Dickens\' \'A Christmas Carol\' and live the experience as in Victorian, England. Each year the city of Rochester in Kent, the United Kingdom, rolls out the red carpet, plumb pudding and Christmas Carols in a unique, fun filled family festival. Annually the first weekend of December.\n\nThis event first ran in 1988.', 'Medway Council', 'Rochester', 'Kent', 'US', '95 High Street', '', NULL, NULL, NULL, 'ME1 1LX', '(+44)(0)1 634.338.141', 'visitor.centre@medway.gov.uk', 'General Information', 'http://www.visitmedway.org/contact-us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(59, 'Moon-New: December 4', 'Worldwide', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Changes', '', 'http://lunaf.com/lunar-calendar/2019', 'NewMoonF.jpg', 'NewMoonE.jpg', 'About the April New Moon', '', 'The New Moon occurs when the Moon and the Sun have the same elliptical longitude. This happens when the moon is at its closest point to the sun in its orbit. From earth we usually cannot see it. The New Moon is considered the first phase. ', 'Natural Event. No Sponsor. See American Astronomical Society for info. ', 'Washington', 'DC', 'US', 'American Astronomical Society', '2000 Florida Ave., NW, Suite 300', NULL, NULL, NULL, '20009-1231', '(202) 328.2010', 'aas@aas.org', 'Media Relations', 'https://aas.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(60, 'Proxigean Tide: December 4', 'Worldwide', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Changes', '', 'http://mimiscloud.com/Tides.htm', '', '', 'About the Proxigean Tide', '', 'The Proxigean Tide occurs when the moon is in its new moon or full moon phase and closest to the Earth. \n\nThe gravitational forces between the Earth and the Moon create intense high tides and it is not unusual for increased flooding to occur across the planet.', 'Natural Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(61, 'Santa Barbara\'s Day (C): December 4', 'Worldwide', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Same', '', 'https://germangirlinamerica.com/st-barbaras-day-dec-4th/', '', '', 'About Santa Barbara Day', '', 'For all the young women hoping to marry, Santa Barbara\'s Day has a special meaning. The legend goes that if a single girl or woman puts a branch of a cherry tree in water on this day, and it blooms by Christmas, she will wed in the next year. ', 'Christian Tradition and Folklore. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(62, 'Santa\'s List Day: December 4', 'Worldwide', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Same', '', 'https://en.wikipedia.org/wiki/Santa_Claus', '', '', 'About Santa\'s List Day', '', 'Santa\'s List Day is the traditional day for children to write their letters to Santa Claus and tell him what they would like for Christmas.  Legend says it is also the day when Santa makes his Naughty and Nice lists.  Nice children, the legend goes, get presents on Christmas morning.  Naughty children get a lump of coal. ', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(63, 'Skywarn Recognition Day, Ntl.: December 4', 'United States', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Changes', '1st Saturday December', 'http://www.wrh.noaa.gov/mtr/hamradio/', '', '', 'About National Skywarn Recognition Day', '', 'The first Saturday of December is the National Skywarn Recognition Day. \n\nDeveloped in 1999 by the National Weather Service and the American Radio Relay League, the day honors and celebrates the essential contribution of volunteer SKYWARN radio operators to the National Weather Service.', 'National Weather Service', 'Silver Spring', 'MD', 'US', '1325 East West Highway', '', NULL, NULL, NULL, '20910', ' ', ' ', 'General Information', 'http://www.weather.gov/Contact', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(64, 'Solar Eclipse, Total: December 4', 'Worldwide', '12', '4', '2021', NULL, NULL, NULL, NULL, '2021-12-04', '12', '4', '2021', '2021-12-04', NULL, 'Daily', 'Changes', '', 'http://eclipse.gsfc.nasa.gov/solar.html', '', '', 'About the Solar Eclipse', '', 'A solar eclipse is a phenomenon that happens when the moon passes between the sun and the Earth and fully or partially blocks the sun. This can only happen when the Moon is full and the eclipse appears differently to each person, depending upon where you are located on the planet.', 'Natural Event. See the Griffith Observatory for Information', 'Los Angeles', 'CA', 'US', 'Griffith Observatory', '2800 East Observatory Road', NULL, NULL, NULL, '90027', '(818) 760.7131', 'sarevalo@swprgroup.com', 'Samantha Arevalo, SWPR Group ', 'http://www.griffithobservatory.org/media.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(65, 'Bathtub Party Day: December 5', 'United States', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', '', 'http://www.wellcat.com/december/bathtub_party_day.htm', '', '', 'About Bathtub Party Day', '', '0', 'Wellcat Events', 'Lebanon', 'PA', 'US', '2418 Long Lane', '', NULL, NULL, NULL, '17046', ' (717) 279.0184   ', 'info@wellcat.com', 'Thomas & Ruth Roy', 'http://www.wellcat.com/Order%20Information.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(66, 'Discovery Day (HT)(1492): December 5', 'Haiti', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', '', 'https://www.ht.undp.org', '', '', 'About Discovery Day in Haiti', '', 'Discovery Day in Haiti marks the anniversary of December 5, 1492, the day Columbus discovered the island nation. This is a public holiday.', 'Historical Anniversary. Public Holiday in Haiti.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(67, 'Handwashing Awareness Week: December 5-11', 'United States', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '11', '2021', '2021-12-11', NULL, 'Weekly', 'Changes', '1st full week Dec', 'http://www.henrythehand.com/news-events/national-handwashing-awareness-week/', '', '', 'About National Handwashing Awareness Week', '', '\"Handwashing is the new vaccine!\" is one of the slogans that we see during December\'s National Handwashing Awareness Week. Help spread the word and raise the awareness on this simple way to combat the spread of disease. ', 'Henry the Hand', 'Glendale', 'OH', 'US', '175 E Fountain', '', NULL, NULL, NULL, '45246', '(513) 769.4951', 'wsawyer@fuse.net', 'Will Sawyer', 'http://www.henrythehand.com/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(68, 'Influenza Vaccination Week, Ntl.: December 5-11', 'United States', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '11', '2021', '2021-12-11', NULL, 'Weekly', 'Changes', '1st full week Dec', 'http://www.cdc.gov/flu/nivw/', '', '', 'About National Influenza Vaccination Week', '', 'National Influenza Vaccination Week is organized by the Centers for Disease Control and Prevention and is the annual push to convince people to get immunized against the flu, especially the elderly and young who are most susceptible.', 'Centers for Disease Control and Prevention ', 'Atlanta', 'GA', 'US', '1600 Clifton Rd', '', NULL, NULL, NULL, '30333', '(800) 232.4636', 'http://www.cdc.gov/cdc-info/requestform.html', 'Media Relations', 'http://www.cdc.gov/cdc-info/requestform.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(69, 'Kids Day, Special: December 5', 'United States', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', ' ', 'http://skd.org', '', '', 'About Special Kids Day', '', 'Set aside each year to recognize the extraordinary abilities of children with mental or physical disabilities. Sponsored by Special Kids Day.  See the source website for details. ', 'Special Kids Day', 'Elmhurst', 'IL', 'US', '111 Linden', '', NULL, NULL, NULL, '60126', '', 'rich@specialkidsday.org', 'Rich Rosenberg', 'http://skd.org/about.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(70, 'Krampuslauf (Krampus): December 5', 'Europe', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', 'Eve of St. Nicolas Day', 'https://www.german-way.com/krampus-the-christmas-devil-of-alpine-europe/', '', '', 'About Krampuslauf in Europe', '', 'Have you been naughty or nice this past year? On the eve of St. Nicholas Day in Europe children enjoy wearing masks and chasing the devil (Krampuslauf) out of town. It\'s a colorful tradition of fun and pranks and kicks off the Christmas festivities. ', 'Tradition. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(71, 'Ninja, Day of the (2003): December 5', 'Worldwide', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', '', 'http://www.dayoftheninja.com/index2.html', '', '', 'About the Day of the Ninja', '', '0', 'Ninja Burger', ' ', ' ', 'US', ' ', ' ', NULL, NULL, NULL, ' ', '(800) 373.3411', 'https://www.ninjaburger.com/contact.shtml', 'General Information', 'https://www.ninjaburger.com/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(72, 'Reef, National Coral Reef Day (CO): December 5', 'Colombia', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', '', 'http://www.icriforum.org/about-icri/members-networks/colombia', '', '', 'About National Coral Reef Day in Colombia', '', '0', 'Ministry of Environment and Sustainable Development, Colombia', '0', '', 'CO', 'Calle 37 No. 8-40 ', '', NULL, NULL, NULL, ' ', '(+57) 332.3422', 'aramirez@minambiente.gov.co', 'Mrs. Andrea Ramirez\nDirectorate of Marine and Coastal Affairs and Aquatic Resources', 'http://www.minambiente.gov.co', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(73, 'Reflection Sunday (C): December 5', 'Worldwide', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Changes', '', 'http://www.usccb.org/bible/readings/120813.cfm', '', '', 'About the Christian Observance Reflection Sunday', '', 'Reflection Sunday, or the second Sunday of Advent, is a Christian observance. In the church calendar, Advent is the month long preparation leading up to the birth of Jesus Christ, marked on December 25 each year. \n\nEach Sunday of Advent has special significance with specific sermons and traditions observed within various denominations.  Reflection Sunday is a time for Christians to focus on what it means to be Christian and follow in the actions and footsteps of Christ. Reflection Sunday is a time of prayer, celebration and feasting.   \n\nAdvent comes from the Latin word advenio which means \"coming to\". It refers to the coming of the Messiah in the birth of Jesus Christ to the Virgin Mary and Joseph in Bethlehem.', 'Christian Religious Holiday: See the Vatican for Details', 'Vatican City', '', 'IT', 'The Holy See', '', NULL, NULL, NULL, '', '(+39) 06.6982', 'info@news.va', 'Media Relations', 'http://www.news.va/en/source/press-office', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(74, 'Repeal Day (1933): December 5', 'United States', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', '', 'http://www.repealday.org/', '', '', 'About National Repeal Day', '', 'Repeal Day celebrates the end of the Prohibition in the United States, December 5, 1933. \n\nThe thirteen years of Prohibition were marked by a rise in civil delinquency and organized crime, but also the loss of many customs related to the production, preparation, and consumption of alcohol.', 'Historical Anniversary. No Sponsor. Hosted by Museum of the American Cocktail', 'Brea', 'CA', 'US', ' Museum of the American Cocktail', 'Repeal Day', NULL, NULL, NULL, '92821', '(714) 706.4182', 'info@repealday.org', 'General Information', 'http://repealday.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(75, 'Sachertorte Day : December 5', 'United States', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', '', 'https://www.lincolntech.edu/news/culinary/sachertorte-recipe-december-5th', '', '', 'About Sachertorte Day', '', 'One of the first days of the most holiday-packed month of the year, today is Sachertorte Day. \n\nInvented by Austrian Franz Sacher in 1832 for the Prince Wenzel von Metternich in Vienna, Sachertorte is a rich, dense chocolate cake that has become synonymous with the city.  It is usually served with apricot jam. \n\nThis is an unofficial food holiday with no sponsor.', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(76, 'Soil Day, World: December 5', 'Worldwide', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', '', 'http://www.un.org/en/events/soilday/', 'World_Soil_DayF.jpg', 'World_Soil_DayE.jpg', 'About World Soil Day', '', 'World Soil Day connects people to soil and raises awareness of its critical importance in our lives. This event first ran in 2013. \n\nThe Food and Agriculture Organization of the United Nations Conference, in June 2013, unanimously endorsed World Soil Day and requested official adoption at the 68th UN General Assembly. In December 2013, the 68th UN General Assembly declared 5th of December as the World Soil Day.\n\nThe day is came about through the efforts of many people including the International Union of Soil Sciences (IUSS) and the Kingdom of Thailand through the Global Soil Partnership. In 2002, the IUSS made a resolution proposing December 5th as World Soil Day to celebrate the importance of soil as a critical component of the natural system and as a vital contributor to human wellbeing.\n\n\nA/RES/68/232 on World Soil Day and International Year of Soils formerly created this event.', 'Food & Agriculture Organization of the United Nations', 'Rome', ' ', 'IT', 'Viale delle Terme di Caracalla ', ' ', NULL, NULL, NULL, '00153', ' (+39) 06 57051 ', 'FAO-HQ@fao.org ', 'General Information', ' http://www.fao.org/contact-us/en/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(77, 'Tevet (J): December 5 -January 2, 2022', 'Worldwide', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '1', '2', '2022', '2022-01-02', NULL, 'Monthly', 'Changes', '', 'http://www.ou.org/chagim/roshchodesh/tevet/default.htm', '', '', 'About the Jewish Month of Tevet', '', 'All Hebrew calendar months begin and end at sundown. LEEP Calendar marks Jewish months beginning the first full day. Observant people of the faith will begin marking the month sundown the day prior. Tevet is the fourth month of the civil year and the tenth of the ecclesiastical year in the Hebrew Calendar. It comes after Kislev and before Shevat. \n\nThe two major Hebrew holidays during Tevet are Hanukkah, from 25 Kislev to 2 Tevet, and Tenth of Tevet, which is a fast day on 10 Tevet.', 'Jewish Religious Calendar. See Jewish Orthodox Union for background, information.', 'New York', 'NY', 'US', 'Jewish Orthodox Union', '11 Broadway', NULL, NULL, NULL, '10004', '(212) 613.8318', 'steiners@ou.org', 'Stephen Steiner, Public Relations', 'http://www.ou.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(78, 'Volunteer Day for Social and Economic Development, Intl.: December 5', 'Worldwide', '12', '5', '2021', NULL, NULL, NULL, NULL, '2021-12-05', '12', '5', '2021', '2021-12-05', NULL, 'Daily', 'Same', '', 'http://www.un.org/en/events/volunteerday/', '', '', 'About International Volunteer Day for Social and Economic Development\n ', '', 'International Volunteer Day for Social and Economic Development, also referred to as International Volunteer Day (IVD), is mandated by the UN General Assembly. It is viewed as a unique chance for volunteers and organizations to celebrate their efforts, to share their values, and to promote their work among their communities, non-governmental organizations (NGOs), United Nations agencies, government authorities and the private sector.\n\nApart from mobilizing thousands of volunteers every year, the United Nations Volunteers (UNV) program contributes to peace and development by advocating for the recognition of volunteers and working with partners to integrate volunteerism into development programming.', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(79, 'Computer Science Education Week (1906): December 6-12', 'Worldwide', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '12', '2021', '2021-12-12', NULL, 'Weekly', 'Changes', 'Week of December 9', 'https://csedweek.org', '', '', 'About Computer Science Education Week', '', '0', '0', 'Seattle', 'WA', 'US', '1501 4th Ave, Suite 900 ', '', NULL, NULL, NULL, '98101', '', 'https://support.code.org/hc/en-us/requests/new', 'General Information', 'https://support.code.org/hc/en-us/requests/new', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(80, 'Constitution Day, (ES)(1978): December 6', 'Spain', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'https://www.boe.es/legislacion/documentos/ConstitucionINGLES.pdf', '', '', 'About Constitution Day in Spain', '', 'Constitution Day in Spain marks the anniversary of December 6, 1978, the day the people of Spain approved a new constitution. This is a national holiday.', 'Historical Anniversary. National Holiday in Spain', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(81, 'Cookie Exchange Week: December 6-10', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '10', '2021', '2021-12-10', NULL, 'Weekly', 'Changes', 'First Mon-Fri of December', 'http://www.wilton.com', '', '', 'About Cookie Exchange Week', '', 'Christmas and Hanukah cookies are a big part of the holiday season. Cookie Exchange Week is a chance to share your family recipes and traditions with friends and coworkers, and learn about theirs as well. Annually the first work week of December. ', 'Wilton Enterprises', 'Naperville ', 'IL', 'US', '535 E. Diehl Rd. ', '', NULL, NULL, NULL, '60563', '(630) 810.2254', 'dsmith@wilton.com', 'Desiree Smith', 'https://www.wilton.com/contactus/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(82, 'Day of Quito, (EC)(1534): December 6', 'Ecuador', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'https://ecuador.travel/en/destinations/andes/quito/', '', '', 'About the Day of Quito', '', 'Day of Quito in Ecuador marks the anniversary of December 6, 1534, the day the city of Quito was founded by Spanish explorers.', 'Historical Anniversary.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(83, 'Gazpacho Day, Ntl.: December 6', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'http://kitchenproject.com/history/Gazpacho/index.htm', '', '', 'About National Gazpacho Day', '', 'National Gazpacho Day is celebrated every year and it honors the Gazpacho soup, its origin and cultural significance. Gazpacho originated in southern Spain.  It is a cold vegetable soup.', 'Unofficial Event. No Sponsor. See Kitchen Project for topical info.', 'Bend', 'OR ', 'US', ' Kitchen Project', '723 NE 11th Street', NULL, NULL, NULL, '97701', '', 'http://kitchenproject.com/html/kpcontact.html', 'General Information', 'http://kitchenproject.com/html/kpcontact.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(84, 'Independence Day, (FI)(1917): December 6', 'Finland', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'https://www.infofinland.fi', '', '', 'About Independence Day in Finland', '', 'Independence Day in Finland marks the anniversary of December 6, 1917, the day the nation declared its independence from Russia. This is a national holiday.', 'Historical Anniversary. National Holiday in Finland', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(85, 'Jumadal-Awwal (M): December 6 - January 3, 2022', 'Worldwide', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '1', '3', '2022', '2022-01-03', NULL, 'Monthly', 'Changes', '', 'http://en.wikipedia.org/wiki/Rabi%27_al-thani', '', '', 'About the Islamic Month of Jumadal-Awwal', '', 'Jumadal-Awwal is the 5th Month in the Islamic Calendar. ', 'Islamic Month, Religious Calendar', 'Plainfield', 'IN', 'US', 'Islamic Society of North America', 'P.O. Box 38', NULL, NULL, NULL, '46168', ' (202) 544.5656  ', 'http://www.isna.net/contact.html', 'Public Relations', 'http://www.isna.net/contact.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(86, 'Microwave Day: December 6', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'http://www.newworldencyclopedia.org/entry/Microwave', '', '', 'About National Microwave Day', '', '0', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(87, 'Miners\' Day (1907): December 6', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', 'Contact info from ICANN Registration', 'http://www.minersday.org/', '', '', 'About National Miners\' Day', '', 'Miner\'s Day commemorates, honors and remembers the worst mining disaster in American history, which occurred in Monongah, West Virginia on December 6, 1907. Three-hundred and sixty-one men lost their lives.\n\nThe US Senate made this an annual memorial day in 2009.', 'Historical Anniversary. US Senate Designation. ', ' Fairmont', 'WV', 'US', 'Miners\' Day', '516 Prospect Avenue', NULL, NULL, NULL, '26554', '(304) 366.0008', 'creed.holden@gmail.com', 'Creed Holden, Advocate for National Miner\'s Day Petition', 'http://www.minersday.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(88, 'Mitten Tree Day: December 6', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'https://blog.bagsandbowsonline.com/3-ways-celebrate-mitten-tree-day/', '', '', 'About Mitten Tree Day', '', '0', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(89, 'Musical Instrument Gift Day (343 AD): December 6', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', ' ', 'http://www.giftday.org', '', '', 'About Musical Instrument Gift Day', '', 'Musical Instrument Gift Day is celebrated in the United States each year. \n\nSponsored by the National Pawnbrokers Association and coinciding with St. Nicholas Day, (which commemorates the death of Nikolaos of Myra December 6, 343 AD), Patron Saint of pawnbroking, Musical Instrument Gift Day brings together the nation\'s pawnbrokers, local businesses and organizations to donate musical instruments to schools and children and need. \n\nTo see if you might participate or donate in your area, contact your local National Pawnbrokers Association chapter.', 'National Pawnbrokers Association', ' Keller', 'TX', 'US', '891 Keller Parkway', 'Suite 220', NULL, NULL, NULL, '76248', '(817) 337.8830', ' media@nationalpawnbrokers.org', 'Media Relations', ' https://www.nationalpawnbrokers.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(90, 'National Day, (CF)(1958): December 6', 'Central African Republic', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Changes', 'First Monday in December', 'https://www.cf.undp.org', '', '', 'About National Day in Dominica', '', 'National Day in the Central African Republic marks the anniversary of December 1, 1958, the official day the nation declared itself a republic. This is a national holiday observed on the first Monday of December.', 'Historical Anniversary. National Holiday in Central African Republic.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(91, 'Older Drivers Safety Week, Ntl.: December 6-10', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '10', '2021', '2021-12-10', NULL, 'Weekly', 'Changes', 'First M-F in December', 'http://www.aota.org', '', '', 'About National Older Drivers Safety Week', '', '0', 'American Occupational Therapy Association', 'Bethesda', 'MD', 'US', '4720 Montgomery Ln, Ste. 200', '', NULL, NULL, NULL, '20814', '(301) 652.6611', '', 'General Information', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(92, 'Pawnbrokers Day, Ntl. (343 AD): December 6', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'http://www.stnicholascenter.org/pages/pawnbrokers/', 'Pawnbrokers_DayF.jpg', 'Pawnbrokers_DayE.jpg', 'About National Pawnbrokers Day', '', 'National Pawnbrokers Day is celebrated on December 6 every year in honor of Saint Nicholas.\n\nLegend has it that Saint Nicholas died on December 6, 343 AD. Also known by Nikolaos of Myra, he was a Greek Bishop of Myra in Asia Minor (modern-day Turkey). Because of the miracles her performed he was also known as Nikolaos the Wonderworker. \n\nSaint Nikolaos became the patron saint of sailors, merchants, archers, repentant thieves, children, brewers, students and pawnbrokers. Hence, National Pawnbrokers Day.', 'National Pawnbrokers Association', 'Keller', 'TX', 'US', '891 Keller Parkway', 'Suite 220', NULL, NULL, NULL, '76244', '(817) 337.8830', 'media@nationalpawnbrokers.org', 'Emmett Murphy \nPublic Relations Director', 'https://www.nationalpawnbrokers.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(93, 'Put on Your Own Shoes Day: December 6', 'United States', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'http://www.momtastic.com/parenting/589465-kids-put-shoes-32-maddening-steps/', '', '', 'About Put on Your Own Shoes Day', '', '0', 'Unofficial Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(94, 'Saint Nicholas Day (343 AD): December 6', 'Worldwide', '12', '6', '2021', NULL, NULL, NULL, NULL, '2021-12-06', '12', '6', '2021', '2021-12-06', NULL, 'Daily', 'Same', '', 'http://www.stnicholascenter.org/pages/who-is-st-nicholas/', '', '', 'About Saint Nicholas Day', '', 'December 6 is Saint Nicholas Day. Acknowledged by nearly all Christian denominations, this day celebrates the life of Saint Nicholas (March 15, 270 - December 6, 343 AD). \n\nKnown as Nikolaos of Myra, a Greek, he was the Bishop of Myra in Asia Minor (Demre,Turkey). \n\nFor western Christian denominations he is the inspiration for Santa Claus. For Orthodox Christians he is much more. Saint Nicholas is the patron saint of sailors, merchants, archers, repentant thieves, children, brewers, pawnbrokers and students.', 'Christian Religious Holiday. See the St. Nicholas Center for History', 'Holland', 'MI', 'US', 'St. Nicholas Center', '109 West 12th Street', NULL, NULL, NULL, '49423', ' ', 'info@stnicholascenter.org', 'General Information', 'http://www.stnicholascenter.org/pages/contact-us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(95, 'Civil Aviation Day, Intl. (1944): December 7', 'Worldwide', '12', '7', '2021', NULL, NULL, NULL, NULL, '2021-12-07', '12', '7', '2021', '2021-12-07', NULL, 'Daily', 'Same', '', 'http://www.icao.int/Newsroom/Pages/message-from-the-president-of-the-council-on-the-occasion-of-international-civil-aviation-day.aspx', '', '', 'About International Civil Aviation Day', '', 'International Civil Aviation Day marks the anniversary of the creation of the International Civil Aviation Organization (ICAO) in Chicago in 1944. The day is acknowledged by the United Nations.', 'International Civil Aviation Organization', '0', 'QC', 'CA', '999 Robert-Bourassa Boulevard', '', NULL, NULL, NULL, 'H3C 5H7', '(514) 954.8219', 'communications@icao.int', 'Media Relations', 'http://www.icao.int/Pages/Contact_us.aspx', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(96, 'Commemoration Day, (CI)(1993): December 7', '0', '12', '7', '2021', NULL, NULL, NULL, NULL, '2021-12-07', '12', '7', '2021', '2021-12-07', NULL, 'Daily', 'Same', '', 'https://www.ci.undp.org', '', '', '0', '', '0', '0', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(97, 'Cotton Candy Day, Ntl.: December 7', 'United States', '12', '7', '2021', NULL, NULL, NULL, NULL, '2021-12-07', '12', '7', '2021', '2021-12-07', NULL, 'Daily', 'Same', '', 'http://en.wikipedia.org/wiki/Cotton_candy', '', '', 'About National Cotton Candy Day', '', '0', 'Unofficial Event. No Sponsor. See Retail Confectioners Intl. for info on subject.', 'Springfield', 'MO', 'US', 'Retail Confectioners International', '2053 S Waverly Ave, Suite C', NULL, NULL, NULL, '65804', '(800) 545.5381', 'info@retailconfectioners.org', 'Denise Alvarez\nMarketing Manager', 'http://www.retailconfectioners.org/?page=staff', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(98, 'Letter Writing Day: December 7', 'United States', '12', '7', '2021', NULL, NULL, NULL, NULL, '2021-12-07', '12', '7', '2021', '2021-12-07', NULL, 'Daily', 'Same', '', 'http://www.ehow.com/how_2152167_write-perfect-letter.html', '', '', 'About National Letter Writing Day', '', 'Letter Writing Day takes place each year in December. This unofficial event is a reminder to get those Christmas Card letters written and letters out to Santa because there are only 18 days until Christmas!', 'Unofficial Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(99, 'Pearl Harbor (1941): December 7', 'United States', '12', '7', '2021', NULL, NULL, NULL, NULL, '2021-12-07', '12', '7', '2021', '2021-12-07', NULL, 'Daily', 'Same', '', 'https://www.nps.gov/valr/learn/historyculture/national-pearl-harbor-remembrance-day.htm', '', '', 'About Pearl Harbor Day', '', 'December 7 is the anniversary of the attack on Pearl Harbor by the Japanese empire in 1941. The following day the United States declared war on Germany, Italy and Japan, thus entering WWII. \n\nNational Pearl Harbor Remembrance Day Americans honors the more than 2,400 Americans killed on that day.', 'National Park Service ', 'Honolulu', 'HI', 'US', 'WWII Valor in the Pacific National Monument', '1845 Wasp Blvd. Bldg. 176 ', NULL, NULL, NULL, '96818', '(808) 422.3399', 'https://www.nps.gov/common/utilities/sendmail/sendemail.cfm?o=5D84D7A9A2DAA1BA9B9B1DBFEA59ACA250&r=/valr/contacts.htm', 'General Information', 'https://www.nps.gov/valr/contacts.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(100, 'People\'s Choice Awards: December 7', 'Worldwide', '12', '7', '2021', NULL, NULL, NULL, NULL, '2021-12-07', '12', '7', '2021', '2021-12-07', NULL, 'Daily', 'Changes', ' ', 'www.peopleschoice.com', '', '', 'About the People\'s Choice Awards', '', 'The People\'s Choice Awards have been held since 1975. They are one of the several most popular award shows in the United States. Movies, actors, TV, music and musicians, games and celebrities - the People\'s Choice Awards envelop almost the entire spectrum of the pop culture in the country and are especially beloved for the fact that the public is the jury that decides the winners.\n\nPLEASE NOTE:\n\nAll televised and venue specific events (sporting, concerts, trade shows, etc.) should be treated as estimated, even if the dates are set. Several factors can cause an event to change dates at the last minute including weather, strikes, natural disasters, political upheaval, conflicting programming and current events. Because of this, always verify the event with the promotor prior to committing resources. In many cases we must estimate the dates based upon previous years\' schedules, as the final dates are not set until a few months or weeks prior to the event. If the date is known to be estimated, you will see an (est) following the date in the title. ', 'People\'s Choice Awards', 'New York City', 'NY', 'US', '300 West 57th Street\n15th Floor', '', NULL, NULL, NULL, '10019-3799', '(212) 969.7512', 'fred@uamg.com', '0', 'http://blog.peopleschoice.com/2014/12/31/peoples-choice-editorial-staff-list/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(101, 'Student\'s Day, (IR)(1953): December 7', 'Iran', '12', '7', '2021', NULL, NULL, NULL, NULL, '2021-12-07', '12', '7', '2021', '2021-12-07', NULL, 'Daily', 'Same', '', 'http://www.mohammadmossadegh.com/news/student-day-iran/', '', '', 'About Student\'s Day in Iran', '', 'Student\'s Day is in memory of three student protesters martyred December 7, 1953, free speech and the right to assemble.\n\nMost of the animosity between the West and Iran can be traced back to 1953. At the beginning of the year, Iran was a democracy and seen as one of the most progressive nations in the region. Its natural resources, highly educated society and forward thinking prime minister Mohammad Mosaddeq, projected a bright future for the Asian country. \n\nMosaddeq was a man of the people, and he believed the natural resources of his nation should belong to the people. This created a problem for two other countries, the United States and Great Britain. Nationalized oil wouldn\'t allow for American or British companies to profit to the extent required, and there was a lot of profit to be had. Oil wasn\'t the only natural resource. Iran has a variety of ecosystems,, minerals and sources of wealth. The prime minister had other progressive ideas that would make the most populous and wealthiest Persian nation less amenable to foreign stewardship and coaxing; these ideas also made the nation less susceptible to the internal corruption of the past. This was not acceptable to various powers in the post World War II political classes, nor to former loyalists of the monarchy within Iran.    \n\nEssentially, on August 19, 1953, agents of the CIA, MI-6 and various dissenting factions within the Iranian population, orchestrated a coup, overthrew the prime minister and installed the exiled Shah, (king), back in power. Martial law was declared and the secret police began arresting and tracking dissenters. The Shah, a dictator, ruled with an iron fist, but deferred to Western powers, which helped him to stay in power until his people overthrew him in 1979. The Hostage Crisis, culminating with the storming and occupation of the US Embassy in Tehran, is one of the most well-known events of that year. The year 1979 is when animosity between Iran and its Arab neighbors began to escalate. It is also the year much of the Arab world pivoted to very conservative. That\'s another story.\n\nGiven this (very, very, very) basic background of a tremendously complex history, we go to the reason Iran observes Student\'s Day. \n\nDecember 7, 1953, Tehran University students gathered to protest the upcoming December 9 arrival of US Vice President Richard Nixon. The peaceful protests were met with a \'Shoot to Kill\' order from the Shah\'s security forces. Three student protesters, Mostafa Bozorgnia, Ahmad Ghandchi and Mehdi Shariat-Razavi were killed. Though the public remembered the martyrs each year thereafter, the Shah\'s security services would ruthlessly pursue and dissuade anyone from recognizing their sacrifice during his rule.\n\nImmediately following the 1979 revolution and the deposing of the Shah, Student\'s Day became a symbol of the nation\'s displeasure with American foreign policy. Over the next few decades, under the strict rule of the Ayatollahs, the day was often used by the people to voice opinions about their own rulers, in addition to foreign nations. This did not sit well with the religious and political leaders, who brought the repression of dissent and free speech back full circle to 1953, without the bullets. By 2009, celebrations of Student\'s Day could be observed, as long as they were not critical of the Iranian government or its religious leaders.  \n\nIran\'s Student\'s Day embraces a dynamic history. How it will be observed in the future, only the future will tell. \n\n \n\nReview the events of the 1953 coup via the US National Security Archives: \nhttps://nsarchive2.gwu.edu/NSAEBB/NSAEBB435', 'Historical Anniversary.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(102, 'Bodhi Day (B)(JP)(532 BC): December 8', 'Japan', '12', '8', '2021', NULL, NULL, NULL, NULL, '2021-12-08', '12', '8', '2021', '2021-12-08', NULL, 'Daily', 'Same', ' ', 'http://familydharma.pulelehuadesign.com/bodhi.htm', 'Bodhi_Day_CNF.png', 'Bodhi_Day_CNE.png', 'About the Buddhist Holiday Bodhi Day', '', 'Bodhi Day celebrates the enlightenment of Siddhartha Gautama, the founder of Buddhism. Japan celebrates this event annually on December 8th. People following the Chinese religious calendar celebrate it on the 8th day of the 12th lunar (as apposed to Solar) month in the Chinese Calendar. \n\nThis day is the anniversary of him becoming the Buddha. \n\nA common misconception is that Siddhartha Gautama was born in India. He was born in Nepal, and the small Himalayan country takes great pride in this fact!', 'Buddhist Religious Calendar. See The Buddhist Association of the United States', 'Carmel', 'NY', 'US', 'Chuang Yen Monastery', '2020 Rte. 301', NULL, NULL, NULL, '10512', ' (845) 225.1819   ', 'cym@baus.org', 'Visitor Services', 'http://www.baus.org/en/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(103, 'Chocolate Brownie Day, Ntl.: December 8', 'United States', '12', '8', '2021', NULL, NULL, NULL, NULL, '2021-12-08', '12', '8', '2021', '2021-12-08', NULL, 'Daily', 'Same', '', 'https://show.restaurant.org/Read/National-Brownie-Day', '', '', 'About National Chocolate Brownie Day', '', '0', 'Unofficial Event. No Sponsor. See Palmer House Hilton for history.', 'Chicago', 'IL', 'US', 'Palmer House Hilton', '17 E. Monroe Street', NULL, NULL, NULL, '60603', '(312) 726.7500', ' http://www.palmerhousehiltonhotel.com/about-our-hotel/contact-us/', 'General Information', 'http://www.palmerhousehiltonhotel.com/about-our-hotel/contact-us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(104, 'Constitution Day, (UZ)(1991): December 8', 'Uzbekistan', '12', '8', '2021', NULL, NULL, NULL, NULL, '2021-12-08', '12', '8', '2021', '2021-12-08', NULL, 'Daily', 'Same', '', 'https://www.uz.undp.org', '', '', 'About Constitution Day in Uzbekistan', '', 'Uzbekistan\'s Constitution Day  marks the anniversary of December 8, 1991, the day the people approved their new constitution. This is a national holiday.', 'Historical Anniversary. National Holiday in Uzbekistan.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(105, 'Feast of the Immaculate Conception (C): December 8', 'Worldwide', '12', '8', '2021', NULL, NULL, NULL, NULL, '2021-12-08', '12', '8', '2021', '2021-12-08', NULL, 'Daily', 'Same', '', 'http://en.wikipedia.org/wiki/Feast_of_the_Immaculate_Conception', '', '', 'About the Christian Feast of the Immaculate Conception', '', 'The Feast of the Immaculate Conception is one of the most important Marian feasts in Roman Catholicism, praising the solemn belief in the Immaculate Conception of the Blessed Virgin Mary. Mary is one of the most important figures in Christianity and Islam.  Both faiths believe in the immaculate conception and revere Mary, though only Christians mark it as a holy day.  \n\nMany predominantly Catholic countries in the world celebrate it as a national holiday. Panama considers this day Mother\'s Day.\n\nThis observance is celebrated worldwide eight months prior to the feast of the Nativity of Mary.', 'Christian Religious Holiday: See the Vatican for Details', 'Vatican City', '', 'IT', 'The Holy See', '', NULL, NULL, NULL, '', '(+39) 06.6982', 'info@news.va', 'Media Relations', 'http://www.news.va/en/source/press-office', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(106, 'Lady of Camarin Day (GU): December 8', 'Guam', '12', '8', '2021', NULL, NULL, NULL, NULL, '2021-12-08', '12', '8', '2021', '2021-12-08', NULL, 'Daily', 'Same', '', 'https://www.guampdn.com/story/news/2019/12/04/santa-marian-kamalen-our-lady-camarin-monday-see-whats-open-closed/2602771001', '', '', 'About Lady of Camarin Day', '', '0', 'Public Holiday in Guam', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(107, 'Lard Day, Ntl.: December 8 ', 'United States', '12', '8', '2021', NULL, NULL, NULL, NULL, '2021-12-08', '12', '8', '2021', '2021-12-08', NULL, 'Daily', 'Same', '', 'http://www.healthyfatscoalition.org/news/', '', '', 'About National Lard Day', '', 'National Lard Day premiers in 2018 and promotes the use of healthy, animal based fats in cooking and baking. This day strategically falls on the day before National Pastry Day.  Lard is what makes pastries flakey and tasty.  With trans-fats, the manufactured synthetic fats, on their way out, people are rediscovering the versatility and flavor found in natural animal based fats like lard. ', 'Healthy Fats Coalition', '', '', '', '', '', NULL, NULL, NULL, '', '', 'info@healthyfatscoalition.org', 'General Information', 'http://www.healthyfatscoalition.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(108, 'Take It in the Ear Day: December 8', 'United States', '12', '8', '2021', NULL, NULL, NULL, NULL, '2021-12-08', '12', '8', '2021', '2021-12-08', NULL, 'Daily', 'Same', '', 'https://michaelstvtray.com/2015/12/08/darrin-ears/', '', '', 'About Take It in the Ear Day', '', '0', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(109, 'Anti-corruption Day, Intl.: December 9', 'Worldwide', '12', '9', '2021', NULL, NULL, NULL, NULL, '2021-12-09', '12', '9', '2021', '2021-12-09', NULL, 'Daily', 'Same', '', 'http://www.un.org/en/events/anticorruptionday/', 'International_Anti-corruption_DayF.jpg', 'International_Anti-corruption_DayE.jpg', 'About International Anti-corruption Day', '', '0', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(110, 'Christmas Card Day: December 9', 'Worldwide', '12', '9', '2021', NULL, NULL, NULL, NULL, '2021-12-09', '12', '9', '2021', '2021-12-09', NULL, 'Daily', 'Same', '', 'https://www.whychristmas.com/customs/cards.shtml', '', '', 'About Christmas Card Day', '', 'Christmas cards have been around since Sir Henry Cole commissioned the creation of such on May 1, 1843. This first set of cards was illustrated by John Callcott Horsley in London. Sir Henry was charged with creating the penny post office in Britain.  Queen Victoria had just commissioned the first stamps, which made posting a letter something even the ordinary citizen could afford. Coupled with the railroad, suddenly goods, services and messages were able to move around the kingdom at a fraction of the cost. \n\nPrior to stamps, only the wealthy could afford to send letters via couriers. Sir Henry came up with the idea for Christmas cards as he was designing the systems for what would become Royal Mail and looking for ways to encourage the public to use the services. \n\nWithin the next six years, Christmas cards would reach the United States. In 1875, German immigrant Louis Prang began printing and mass producing them.  Cards, and especially Christmas Cards, became big business. Finally, on  January 10, 1910, Joyce Hall and his brothers formed Hallmark cards, beginning with just two shoeboxes full of post cards. In 1915 they would buy their first printing press and begin producing cards in-house.\n\nHallmark would go on to define the industry and create many of the cards, holidays and traditions we see today.  \n', 'Unofficial Event. No Sponsor. See Greeting Card Association on topic.  ', 'London', ' ', 'UK', 'Greeting Card Association', 'United House, North Road', NULL, NULL, NULL, 'N7 9DP', '(+44)(0) 20 76.19.03.96', 'gca@max-publishing.co.uk', 'Sharon Little, Public Relations', 'http://www.greetingcardassociation.org.uk', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(111, 'Genocide Victims Day, Intl. (1948): December 9', 'Worldwide', '12', '9', '2021', NULL, NULL, NULL, NULL, '2021-12-09', '12', '9', '2021', '2021-12-09', NULL, 'Daily', 'Same', '', 'https://www.un.org/en/events/genocidepreventionday/', '', '', 'About International Genocide Victims Day', '', 'International Genocide Victims Day has the longest official name of any event in the calendar: International Day of Commemoration and Dignity of the Victims of the Crime of Genocide and the Prevention of this Crime. \n\nThis day marks the anniversary of December 9, 1948 and the adoption of the Genocide Convention by the United Nations. The organization began observing this day in 2015. ', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37');
INSERT INTO `events` (`id`, `name`, `states`, `start_month`, `start_day`, `start_year`, `country`, `event_address1`, `event_address2`, `status`, `start_date`, `end_month`, `end_day`, `end_year`, `end_date`, `duration`, `type`, `static_change`, `notes_not_public`, `url`, `feature_picture`, `picture_name`, `alt_text`, `estimated`, `description`, `event_champion`, `champ_city`, `champ_state`, `champ_country`, `champ_address1`, `champ_address2`, `city`, `state`, `country_code`, `zip`, `ph_num`, `email_form`, `contact_person`, `contact_link`, `physical_address`, `purchase_reserve`, `location_based`, `manager`, `event_physical_address`, `user_id`, `created_at`, `updated_at`) VALUES
(112, 'Independence/Republic Day, (TZ)(1961): December 9', 'Tanzania', '12', '9', '2021', NULL, NULL, NULL, NULL, '2021-12-09', '12', '9', '2021', '2021-12-09', NULL, 'Daily', 'Same', '', 'https://www.tz.undp.org', '', '', 'About Independence and Republic Day in Tanzania', '', 'Independence and Republic Day in Tanzania marks the anniversary of December 9, 1961, the day the nation achieved independence from Britain. In 1964, the then known nation of Tanganyika joined with Zanzibar to become the new nation of Tanzania. This is a national holiday.', 'Historical Anniversary. National Holiday in Tanzania', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(113, 'Pastry Day, Ntl.: December 9', 'United States', '12', '9', '2021', NULL, NULL, NULL, NULL, '2021-12-09', '12', '9', '2021', '2021-12-09', NULL, 'Daily', 'Same', '', 'https://parade.com/627032/samanthacoley/celebrate-national-pastry-day-with-a-pistachio-cinnamon-roll/', '', '', 'About National Pastry Day', '', 'National Pastry Day celebrates all pastry and the best way to celebrate is to indulge!\n\nThis is an unofficial event with no sponsor.', 'Unofficial Event. No Sponsor. See ACF for Topical Information.', 'St. Augustine', 'FL', 'US', 'American Culinary Federation', '180 Center Place Way', NULL, NULL, NULL, '32095', '(904) 824.4468', 'helpdesk@acfchefs.net ', 'General Information', 'http://www.acfchefs.org/ACF/Certify/Levels/CMPC/ACF/Certify/Levels/CMPC/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(114, 'C2E2 (US-IL): December 10-12', 'United States', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Changes', '', 'http://www.c2e2.com', '', '', 'About Chicago\'s  Comic & Entertainment Expo C2E2', '', 'C2E2 first ran in 2010. Today the Chicago Comic and Entertainment Expo attracts nearly 85,000 people. At the event are celebrities, unique exhibitors, comic artists and literary authors. It\'s a celebration of pop culture, Chicago Style. \n\nPLEASE NOTE:\n\nAll televised and venue specific events (sporting, concerts, trade shows, etc.) should be treated as estimated, even if the dates are set. Several factors can cause an event to change dates at the last minute including weather, strikes, natural disasters, political upheaval, conflicting programming and current events. Because of this, always verify the event with the promotor prior to committing resources. In many cases we must estimate the dates based upon previous years\' schedules, as the final dates are not set until a few months or weeks prior to the event. If the date is known to be estimated, you will see an (est) following the date in the title.  ', 'ReedPOP', 'Norwalk', 'CT', 'US', '383 Main Ave ', '', NULL, NULL, NULL, '06851', '(203) 840.4800', 'inquiry@c2e2.com', 'General Information', 'http://www.reedpop.com/About/Contact-Us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(115, 'Constitution Day, (TH)(1932): December 10', 'Thailand', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '10', '2021', '2021-12-10', NULL, 'Daily', 'Same', '', 'https://www.th.undp.org', '', '', 'About Constitution Day in Thailand', '', 'Thailand\'s Constitution Day marks the anniversary of December 10, 1932, the day the people approved their first constitution. This is a national holiday.', 'Historical Anniversary. National Holiday in Thailand.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(116, 'Dewey Decimal System Day (1873): December 10', 'United States', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '10', '2021', '2021-12-10', NULL, 'Daily', 'Same', '', 'https://www.britannica.com/science/Dewey-Decimal-Classification', '', '', 'About Dewey Decimal System Day', '', '0', 'Historic Anniversary. See American Library Association for background', 'Chicago', 'IL', 'US', 'American Library Association', '50 East Huron Street', NULL, NULL, NULL, '60611-2795', ' (800) 545.2433 ', 'ala@ala.org', 'Macey Morales', 'http://www.ala.org/aboutala/contactus', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(117, 'Human Rights Day, Intl. (1948): December 10', 'Worldwide', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '10', '2021', '2021-12-10', NULL, 'Daily', 'Same', '', 'https://news.un.org/en/story/2017/12/639032-human-rights-day-un-officials-pledge-advance-human-dignity-equality-and-rights', '', '', 'About  International Human Rights Day', '', 'International Human Rights Day marks the historic anniversary of the adoption of the Universal Declaration of Human Rights by the General Assembly of the United Nations on December 10, 1948. \n\nTogether with the International Covenant on Economic, Social and Cultural Rights and the International Covenant on Civil and Political Rights (December 16, 1966), these three declarations form the International Bill of Human Rights. Through them international standards are clear on civil, political, cultural, economic, and social rights that are the birth right of all human beings.', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(118, 'Human Rights Week, Ntl. (1948): December 10-17', 'United States', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '17', '2021', '2021-12-17', NULL, 'Daily', 'Week', '', 'https://obamawhitehouse.archives.gov/the-press-office/2016/12/09/presidential-proclamation-human-rights-day-and-human-rights-week-2016', '', '', 'About  International Human Rights Day', '', 'International Human Rights Day marks the historic anniversary of the adoption of the Universal Declaration of Human Rights by the General Assembly of the United Nations on December 10, 1948. \n\nTogether with the International Covenant on Economic, Social and Cultural Rights and the International Covenant on Civil and Political Rights (December 16, 1966), these three declarations form the International Bill of Human Rights. Through them international standards are clear on civil, political, cultural, economic, and social rights that are the birth right of all human beings.', 'Presidential Decree: U.S. General Services Administration', 'Washington', 'DC', 'US', 'Office of Citizen Services and Innovative Technologies', '1800 F Street, NW', NULL, NULL, NULL, '20405', '(800) 333.4636', 'http://answers.usa.gov/system/templates/selfservice/USAGov/#!portal/1012/email_us', 'Citizen Services', 'http://www.usa.gov/Contact-Us.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(119, 'Jane Addams Day (1931): December 10', 'United States', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '10', '2021', '2021-12-10', NULL, 'Daily', 'Same', '', 'https://maxwellhalsted.uic.edu/home/enlightened-reformer/', '', '', 'About Jane Addams Day', '', 'On December 10, 1931, Jane Addams received the Nobel Peace Prize for her pioneering efforts in Social Work. She is the first American woman to receive the Nobel Peace Prize. \n\nThis event was first celebrated in 2007. ', 'Jane Addams Hull-House Museum', 'Chicago ', 'IL', 'US', '800 S. Halsted St.', '', NULL, NULL, NULL, '60607', ' (312) 413.5353 ', 'jahh@uic.edu', 'General Information', 'https://www.hullhousemuseum.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(120, 'Lost & Found Day, Official: December 10', 'United States', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '10', '2021', '2021-12-10', NULL, 'Daily', 'Changes', 'Second Friday December', 'http://lostandfoundday.atspace.cc', '', '', 'About the Official Lost & Found Day', '', 'The second Friday of each December the world turns its attention to Official Lost and Found Day.  This event first occurred in 2012. It\'s a day to take another look and try to find something that you misplaced, forgotten or left.', 'Chautauqua Elementary', 'Vashon Island', 'WA', 'US', '9309 SW Cemetery Rd', '', NULL, NULL, NULL, '98070', ' (206) 463.2882 ', 'lmorgan@vashonsd.org', 'Lance Morgan', 'http://lostandfoundday.atspace.cc', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(121, 'Nobel Prize Anniversary, (1896): December 10', 'Worldwide', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '10', '2021', '2021-12-10', NULL, 'Daily', 'Same', '', 'https://www.nobelprize.org', '', '', 'About Nobel Prize Anniversary', '', 'Alfred Nobel was born on October 21, 1833 in Stockholm, Sweden. He devoted his life to peace, science and literature. Upon his death, December 10, 1896, he willed $9 million to create a prize honoring the great achievements in science, inventions, entrepreneurship, literature and peace work. These awards are announced each year in October. To win a Nobel Prize is to reach the pinnacle of achievement in one of these areas. ', 'Nobel Prize Committee', 'Stockholm', ' ', 'SE ', 'Sturegatan 14', ' P.O. Box 5232', NULL, NULL, NULL, ' SE-102', '(+46)(0)8 663.09.20', 'https://www.nobelprize.org/contact/', 'Press Office', 'https://www.nobelprize.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(122, 'PAX Unplugged, Philadelphia (US-PA): December 10-12', 'United States', '12', '10', '2021', NULL, NULL, NULL, NULL, '2021-12-10', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Changes', ' ', 'http://prime.paxsite.com/', '', '', 'About PAX Unplugged in Philadelphia, PA', '', '0', 'Penny Arcade, Inc.', 'Seattle', 'WA', 'US', ' 123 N 36th St', ' ', NULL, NULL, NULL, '98103', '(206) 274.0024', ' pax_media@paxsite.com', 'Media Relations', 'http://www.paxsite.com/press-kit', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(123, 'Army-Navy Football Game (US-PA): December 11  ', 'United States', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Changes', '2nd Saturday December', 'https://www.usna.com/news/army-navy-events?', '', '', 'About the Army-Navy Football Game', '', 'First played in 1890 the Army Navy Game is a college football game between the United States Military Academy (USMA) at West Point, New York and the United States Naval Academy (USNA) at Annapolis, Maryland.\n\nPLEASE NOTE:\n\nAll televised and venue specific events (sporting, concerts, trade shows, etc.) should be treated as estimated, even if the dates are set. Several factors can cause an event to change dates at the last minute including weather, strikes, natural disasters, political upheaval, conflicting programming and current events. Because of this, always verify the event with the promotor prior to committing resources. In many cases we must estimate the dates based upon previous years\' schedules, as the final dates are not set until a few months or weeks prior to the event. If the date is known to be estimated, you will see an (est) following the date in the title.  ', 'National Collegiate Athletic Association (NCAA)', 'Washington', 'DC', 'US', '700 W. Washington Street ', 'P.O. Box 6222', NULL, NULL, NULL, '46206-6222', '(317) 917.6222', 'http://www.ncaa.org/about/resources/media-center/media-inquiries', 'Media Relations', 'http://www.ncaa.org/about/resources/media-center', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(124, 'Gingerbread Decorating Day: December 11', 'Worldwide', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Changes', '2nd Saturday of December', 'http://www.wilton.com', 'Gingerbread_Decor_DayF.png', 'Gingerbread_Decor_DayE.png', 'About National Gingerbread Decorating Day', '', 'Gingerbread is a popular holiday bread/cookie and construction resource. Gingerbread has existed since 2400BC, with the first known recipe from the Greeks. The Chinese further developed the cookie, but it was the court of Queen Elizabeth the I of England, where decorating gingerbread came into vogue. Creating a house of gingerbread originated in Germany around the same time, in large part due to the popularity of the story Hansel and Gretel by the Brothers Grimm. Ever since, gingerbread houses have been a popular holiday activity.\n\nThe largest gingerbread house ever constructed is 40,000 cubic feet. It was constructed at the Traditions Golf Club in Brian, Texas, and actually required a building permit! Texas does like big.\n\nNational Gingerbread Decorating Day is an annual event promoted by Wilton Industries to encourage people to spend the day in family time and decorate some gingerbread. Annually on the second Saturday in December. ', 'Wilton Enterprises', 'Naperville ', 'IL', 'US', '535 E. Diehl Rd. ', '', NULL, NULL, NULL, '60563', '(630) 810.2254', 'dsmith@wilton.com', 'Desiree Smith', 'https://www.wilton.com/contactus/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(125, 'Horse, Ntl. Day of: December 11', 'United States', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Changes', '2nd Saturday in December', 'http://www.horsechannel.com/horse-news/2010/12/13/national-day-of-the-horse.aspx', '', '', 'About National Day of the Horse', '', 'National Horse Day was created in 2004 and is officially recognized by the U.S. Congress. Horses have played an integral part in American history.  This day is set aside to learn about them and honor them. ', 'US Government: U.S. General Services Administration', 'Washington', 'DC', 'US', 'Office of Citizen Services and Innovative Technologies', '1800 F Street, NW', NULL, NULL, NULL, '20405', '(800) 333.4636', 'http://answers.usa.gov/system/templates/selfservice/USAGov/#!portal/1012/email_us', 'Citizen Services', 'http://www.usa.gov/Contact-Us.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(126, 'Kaleidoscope Day (1781): December 11', 'Worldwide', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Same', '', 'https://buggyandbuddy.com/science-for-kids-how-to-make-a-kaleidoscope/', '', '', 'About Kaleidoscope Day', '', '0', 'Historical Anniversary. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(127, 'Moon-1st Quarter: December 11', 'Worldwide', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Changes', '', 'http://lunaf.com/lunar-calendar/2019', 'Moon_First_QuarterF.jpg', 'Moon_First_QuarterE.jpg', 'About the First Quarter Moon in April', '', 'The first quarter moon occurs when the moon is one-half illuminated by the sun. Each day forward increases the amount of the moon you can see. The 1st quarter typically occurs 7 days after the New Moon.', 'Natural Event. No Sponsor. See American Astronomical Society for info. ', 'Washington', 'DC', 'US', 'American Astronomical Society', '2000 Florida Ave., NW, Suite 300', NULL, NULL, NULL, '20009-1231', '(202) 328.2010', 'aas@aas.org', 'Media Relations', 'https://aas.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(128, 'Mountain Day, Intl: December 11', 'Worldwide', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Same', '', 'http://www.un.org/en/events/mountainday/', '', '', 'About International Mountain Day', '', '0', 'United Nations General Assembly', 'Rome', '', 'IT', 'Viale delle Terme di Caracalla ', '', NULL, NULL, NULL, '00153', '(+39) 6 57.051', 'FAO-HQ@fao.org', 'Media Relations ', ' Info-IMD@fao.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(129, 'National Day, (BF)(1958): December 11', 'Burkina Faso', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Same', ' ', 'https://www.bf.undp.org', '', '', 'About National Day in Burkina Faso', '', 'National Day in the Burkina Faso marks the anniversary of December 11, 1958, the official day the nation achieved independence from France within the French community. This is a national holiday.', 'Historical Anniversary. National Holiday in Central Burkina Faso.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(130, 'Noodle Ring Day, Ntl.: December 11', 'United States', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Same', '', 'http://www.wsj.com/articles/today-is-national-noodle-ring-day-so-if-youve-got-a-bundt-pan-use-it-1418258918', '', '', 'About National Noodle Ring Day', '', '0', 'Unofficial Event. No Sponsor. See National Pasta Association for ideas', 'Washington', 'DC', 'US', 'National Pasta Association', '750 National Press Building;\n529 14th Street N.W.', NULL, NULL, NULL, '20045', '(212) 297.2162', 'smeyering@kellencompany.com', 'Stephanie Meyering, Media', 'http://pastafits.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(131, 'UNICEF Day (1946): December 11', 'Worldwide', '12', '11', '2021', NULL, NULL, NULL, NULL, '2021-12-11', '12', '11', '2021', '2021-12-11', NULL, 'Daily', 'Same', '', 'www.unicef.org', '', '', 'About UNICEF Day', '', 'UNICEF Day marks the anniversary of the foundation of UNICEF December 11, 1946. \n\nCreated by the United Nations in the aftermath of WWII, the United Nations International Children\'s Emergency Fund (UNICEF) was created with the idea of helping provide relief and support to children in countries devastated by war. ', 'UNICEF', 'New York City', 'NY', 'US', '125 Maiden Lane, 11th Floor', '', NULL, NULL, NULL, '10038', '(212) 686.5522', 'https://www.unicefusa.org/about/contact/email', 'Media Relations', 'https://www.unicefusa.org/about/contact', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(132, 'Ambrosia Day: December 12', 'United States', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'http://www.foodtimeline.org/foodfaq.html', 'Ambrosia_DayF.jpg', 'Ambrosia_DayE.jpg', 'About Ambrosia Day', '', 'Ambrosia Day is an unofficial holiday without a sponsor celebrating the fruit salad known as ambrosia. \n\nAmbrosia salad includes a variety of tropical fruits usually mixed with coconut flakes and whipping cream.', 'Unofficial Event, No Sponsor. See Cordon Bleu Culinary School for info', 'Paris', '', 'FR', 'Cordon Bleu', '0', NULL, NULL, NULL, '75015', '(+33) (0)1 53.68.22.50', 'mwarren@cordonbleu.edu', 'Media Relations', 'http://www.cordonbleuusa.com/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(133, '0', 'Worldwide', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'http://www.bonzabottlerday.com', '', '', 'About Bonza Bottler Day', '', 'When the number of the month matches the number of the day, that\'s Bonza Bottler Day. Basically, it is a play on numbers. There are twelve Bonza Bottler Days a year.  \n\nThis event began in 1985. Bonza is Australian for \'Super\'. Bottler is slang for \'something excellent\'.', '0', '', '', '', '', '', NULL, NULL, NULL, '', '(864) 201.3988', 'bonza@bonzabottlerday.com', 'Gail Berger', 'http://www.bonzabottlerday.com/contact-us.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(134, 'Candle Lighting Day, Worldwide: December 12', 'Worldwide', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Changes', '2nd Sunday December', 'www.compassionatefriends.org', '', '', 'About Worldwide Candle Lighting Day', '', 'Worldwide Candle Lighting Day honors and remembers the people in our lives whom are no longer with us. \n\nOn this day, everyone in the world is invited to light a candle and keep it lit throughout the day in honor of their deceased loved ones.', 'The Compassionate Friends', 'Oak Brook', 'IL', 'US', 'PO Box 3696', '', NULL, NULL, NULL, '60522', '(630) 990.0010', 'http://www.compassionatefriends.org/contact_us.aspx', 'General Information', 'http://www.compassionatefriends.org/contact_us.aspx', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(135, 'Children\'s Memorial Day, Ntl.: December 12', 'United States', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Changes', '2nd Sunday December', 'https://cdhi.org/2018-childrens-national-memorial-day/', '', '', 'About National Children\'s Memorial Day', '', 'National Children\'s Memorial Day is set aside each year to grieve and remember all the children who died too young, whether through disease, accident or war. It\'s a day of grieving for parents during one of the toughest times of the year.', 'The Compassionate Friends', 'Oak Brook', 'IL', 'US', 'PO Box 3696', '', NULL, NULL, NULL, '60522', '(630) 990.0010', 'https://www.compassionatefriends.org/contact/', 'General  Information', 'https://www.compassionatefriends.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(136, 'Ding-a-Ling Day, Ntl.: December 12', 'United States', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'http://creatingmyhappiness.com/ding-a-ling-day/', '', '', 'About National Ding-a-Ling Day', '', '0', 'Unofficial Holiday, No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(137, 'Jumhuri Day, (KE)(1963): December 12', 'Kenya', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'https://www.ke.undp.org', '', '', 'About Jumhuri Day', '', 'Jumhuri (\'Independence\' in Swahili) Day in Kenya marks the anniversary of December 12, 1963, the day the nation declared its independence from Britain and became a republic. This is a national holiday.', 'Historical Anniversary. National Holiday in Kenya.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(138, 'Neutrality Day, (TM)(1995): December 12', 'Turkmenistan', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'https://www.tm.undp.org', '', '', 'About Neutrality Day', '', 'Neutrality Day in the Turkmenistan marks the anniversary of December 12, 1995, the official day the nation was recognize as a neutral state in south Asia, much like Switzerland is in Europe. This attribution was granted on this day through recognition of such by the United Nations . This is a national holiday.', 'Historical Anniversary. National Holiday in Turkmenistan.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(139, 'Neutrality Day, Intl. Day of (1995): December 12', 'Worldwide', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'https://www.un.org/en/observances/neutrality-day', '', '', 'About International Day of Neutrality', '', 'Created on the anniversary of Turkmenistan\'s permanent entry into the world body as a neutral nation on December 12, 1995, International Neutrality Day seeks to support preventive diplomacy. These guiding principles include strengthening the coordination of emergency humanitarian assistance through the United Nations system. Countries with the status of neutrality play an important role in providing and delivering humanitarian assistance in situations of complex emergencies and natural disasters. This day serves as a reminder of their importance and the need of neutral nations. ', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(140, 'Our Lady of Guadeloupe Day (C)(MX)(1531): December 12', 'Central & South America', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'http://basilica.mxv.mx/web1/-home/index.html', '', '', 'About the Christian Day of Our Lady of Guadeloupe', '', 'On December 12, Mexico celebrates Our Lady of Guadeloupe Day. \n\nOur Lady of Guadalupe, also know as the Cirgin of Guadalupe and Our Mother of Guadalupe The Madonna of Tepeyac, Tonantzin. The day celebrates the appearance of the Virgin Mary on Tepeyac Hill in Mexico City, December 12, 1531 as witness by San Juan Diego. \n\nThe Basilica of Our Lady of Guadalupe in Mexico City now stands on the site and is the most visited Catholic pilgrimage site in the world. With 20 million visitors a year, it is world\'s third most-visited sacred site, right behind the Meiji Shrine and Sensoji-Temple in Tokyo and the Kashi Vishwanath Temple, Varanasi, India.', 'Christian Religious Holiday: See the Basilica of Our Lady of Guadeloupe', 'Mexico City', 'MX', 'MX', 'Basilica of Our Lady of Guadeloupe', '0', NULL, NULL, NULL, '07050', '(+52) 55 5118.0500', '  http://basilica.mxv.mx/web1/contacto/contacto.html', 'General  Information', 'http://basilica.mxv.mx/web1/contacto/contacto.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(141, 'Poinsettia Day (1851): December 12', 'United States', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'http://www.poinsettiaday.com/', '', '', 'About Poinsettia Day', '', 'Poinsettia Day in the U.S. celebrates the beautiful red, white or pink plant most people associate with Christmas. \n\nPoinsettia Day marks the anniversary of the death of Joel Roberts Poinsett December 12, 1851.  Poinsett was an American botanist, a physician and diplomat who discovered the gorgeous plant in 1828 in Southern Mexico. \n\nBotanically, the plant is known as Euphorbia Pulcherrima, but it\'s common name since 1828 is Poinsettia.\n\nNational Poinsettia Day became an official US observance in 2002 via US House of Representatives resolution HR471.', 'Historical Anniversary.  Congressional Decree.', 'Eureka', 'CA', 'US', 'Poinsettia Day', 'PO Box 4906', NULL, NULL, NULL, '95502', ' ', 'john@poinsettiaday.com', 'General Information', 'http://www.poinsettiaday.com/bill.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(142, 'Rejoice (Gaudete) Sunday (C): December 12', 'Worldwide', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Changes', '', 'http://www.newadvent.org/cathen/06394b.htm', '', '', 'About the Christian Celebration of Rejoice Sunday, the 3rd Sunday of Advent', '', '0', 'Christian Religious Holiday: See the Vatican for Details', 'Vatican City', '', 'IT', 'The Holy See', '', NULL, NULL, NULL, '', '(+39) 06.6982', 'info@news.va', 'Media Relations', 'http://www.news.va/en/source/press-office', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(143, 'Taboo Day/Festival of Unmentionable Thoughts: December 12', 'United States', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'https://allpoetry.com/poem/6030612-Unmentionable-Thoughts-Festival-by-Borglesnarf', '', '', 'About National Taboo Day and the Festival of Unmentionable Thoughts', '', '0', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(144, 'Twelve-Twelve (CN): December 12', 'China', '12', '12', '2021', NULL, NULL, NULL, NULL, '2021-12-12', '12', '12', '2021', '2021-12-12', NULL, 'Daily', 'Same', '', 'https://www.thatsmags.com/china/post/11831/today-is-double-12-the-singles-day-sequel_1', '', '', 'About 12-12', '', '0', 'Alibaba', 'Hangzhou', ' ', 'CN', '969 West Wen Yi Road', 'Yu Hang District', NULL, NULL, NULL, '311121', '(+86) 571.8502.2088', 'http://www.alibabagroup.com/en/contact/contacts#slide_media', 'Media Relations', 'http://www.alibabagroup.com/en/contact/offices', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(145, 'Cocoa Day: December 13*', 'United States', '12', '13', '2021', NULL, NULL, NULL, NULL, '2021-12-13', '12', '13', '2021', '2021-12-13', NULL, 'Daily', 'Same', '', 'http://dyingforchocolate.blogspot.com/2010/12/national-cocoa-day-recipes-variations.html', '', '', 'About Cocoa Day', '', 'Cocoa, the base ingredient of chocolate, is truly a family affair. Currently 90% of all cocoa is produced on family farms of fewer than 5 hectares each. \n\nThe Mayans were the first to use cocoa beans with peppers for medicine, as a beverage and a spice. It is unsure if the ancient Olmec or the Mayans were the first civilization to purposely farm cocoa beans around 1000BC. What we do know is this delicacy of the new world was first encountered by Christopher Columbus when he landed on the island of Guanaja in 1502. \n\nHowever, it would have to wait until Hernan Cortez arrived in Tabasco in 1519 before its true culinary value would be realized. Cortez was presented with ample cocoa beans by the ruler of the Aztecs, Montezuma. For the Aztecs, the cocoa plant was sacred.\n\nCortez brought the beans back to Europe and this time also brought the customs of drinking and preparing the bitter bean made heavenly by sweetening. The rest is history. \n\nOn National Cocoa Day we appreciate the origins of the cocoa bean and enjoy the delicacies it creates.  The most common way to celebrate in the cold months of December is with a cup of hot chocolate. \n\nNational Cocoa Day is an unofficial holiday with no sponsor.', 'Unofficial Event. No Sponsor. See the Cocoa Research Centre for History', 'St. Augustine', ' ', 'TT', 'Cocoa Research Centre', 'The University of the West Indies', NULL, NULL, NULL, '', '(868) 662.2002', 'info@cocoacentre.com', 'Media Relations', 'https://sta.uwi.edu/cru/contact.asp', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(146, 'Green Monday (E-commerce): December 13', 'Worldwide', '12', '13', '2021', NULL, NULL, NULL, NULL, '2021-12-13', '12', '13', '2021', '2021-12-13', NULL, 'Daily', 'Changes', '1-2 Monday before Xmas', 'http://techcrunch.com/2011/12/18/green-monday-and-free-shipping-day-help-boost-online-holiday-sales-by-15-percent-to-31b/', '', '', 'About International Green Monday', '', '0', 'eBay', ' San Jose', 'CA', 'US', '2025 Hamilton Avenue.', ' ', NULL, NULL, NULL, '95125', '(408) 376.7400', ' @ebaynewsroom', 'Media Relations', 'https://www.ebayinc.com/our-company/contact-us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(147, 'Nanking Massacre Memorial Day (CN)(1937): December 13', 'China', '12', '13', '2021', NULL, NULL, NULL, NULL, '2021-12-13', '12', '13', '2021', '2021-12-13', NULL, 'Daily', 'Same', '', 'https://www.pacificwar.org.au/JapWarCrimes/TenWarCrimes/Rape_Nanking.html', '', '', 'About Nanking Massacre Memorial Day', '', 'One of the most horrific events in Chinese History, the Nanking Massacre (Nanjing Massacre), began on this day, December 13, 1937. Japanese troops invaded the city. For the next six weeks, through torture, summary executions, rape and violence, the citizens of the city were murdered in the hundreds of thousands.  Estimates range from 142,000 to up to 300,000 people were murdered and victimized. This day is honored each year in China with reverence and solemnity.', 'Historical Anniversary. Public Holiday China.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(148, 'Pathologist Pal Day, Pick a: December 13', 'United States', '12', '13', '2021', NULL, NULL, NULL, NULL, '2021-12-13', '12', '13', '2021', '2021-12-13', NULL, 'Daily', 'Same', '', 'http://www.wellcat.com/december/pick_a_pathologist_pal_day.htm', '', '', 'About Pick A Pathologist Pal Day', '', 'Pick a Pathologist Pal Day is another Wellcat.com event. \n\nThis day is meant to encourage people to overcome a fear of dying and make friends with a pathologist or coroner.', 'Wellcat Holidays', 'Lebanon', 'PA', 'US', '2418 Long Lane', '', NULL, NULL, NULL, '17046', ' (717) 279.0184   ', 'info@wellcat.com', 'Thomas & Ruth Roy', 'http://www.wellcat.com/Order%20Information.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(149, 'Popcorn Day, On a String, Ntl.: December 13', 'United States', '12', '13', '2021', NULL, NULL, NULL, NULL, '2021-12-13', '12', '13', '2021', '2021-12-13', NULL, 'Daily', 'Same', '', 'https://foodimentary.com/2014/12/13/december-13-is-national-popcorn-string-day/', 'Popcorn_on_a-String_DayF.jpg', 'Popcorn_on_a-String_DayE.jpg', 'About National Popcorn on a String Day', '', '0', 'Foodimentary', 'New York City', 'NY', 'US', '', '', NULL, NULL, NULL, '', '', 'media@foodimentary.com', 'John-Bryan Hopkins, Founder', ' https://foodimentary.com/contact-foodimentary-john-bryan-hopkins/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(150, 'Republic Day, (MT)(1974): December 13', 'Malta', '12', '13', '2021', NULL, NULL, NULL, NULL, '2021-12-13', '12', '13', '2021', '2021-12-13', NULL, 'Daily', 'Same', '', 'https://timesofmalta.com/articles/view/the-republic-of-malta.285600', '', '', 'About Republic Day in Malta', '', 'Malta\'s Republic Day marks the anniversary of December 13, 1974, the day the island nation ended the monarchy and became a republic. This is a national holiday.', 'Historical Anniversary. National Holiday in Malta.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(151, 'Santa Lucia Day (SE): December 13', 'Sweden', '12', '13', '2021', NULL, NULL, NULL, NULL, '2021-12-13', '12', '13', '2021', '2021-12-13', NULL, 'Daily', 'Same', '', 'http://www.cattoliciromani.com/forum/showthread.php/iconografia_santa_lucia-21581.html', '', '', 'About Santa Lucia Day in Sweden', '', 'Santa Lucia (Lucy), like Saint Sebastian, was persecuted and executed for her faith in pre-Christian Rome in the year of 304 AD at the age of 19. She is considered the barer of light and the patron saint of authors, salesmen, laborers and peasants. Sweden and other Christian countries celebrate her feast day on December 13 each year. ', 'Religious Holiday: See the Vatican for Details', 'Vatican City', '', 'IT', 'The Holy See', '', NULL, NULL, NULL, '', '(+39) 06.6982', 'info@news.va', 'Media Relations', 'http://www.news.va/en/source/press-office', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(152, 'Violin Day: December 13', 'United States', '12', '13', '2021', NULL, NULL, NULL, NULL, '2021-12-13', '12', '13', '2021', '2021-12-13', NULL, 'Daily', 'Same', '', 'https://www.cmuse.org/12-most-expensive-violins/', '', '', 'About Violin Day', '', 'Italian Andrea Amati of Cremona (1511-1577) created the first four string violin, the type still used today in 1555.  The oldest original violin in the world was created by Amati in 1560 and is currently on display at the National Music Museum in Vermillion, South Dakota, United States of America. \n\nThe most expensive violins in the world today include:\n\nThe Titanic violin, played by Wallace Hartley as the ship sank at $1.7 million.\n\nThe Lady Tennant by Antonio Stradivari, created in 1699 at $2,032,000.\n\nThe Lady Blunt by Antonio Stradivari, created in 1721 at $15,900,00.\n\nCurrently, the most expensive violin in the world, The Vieuxtemps Guarneri created by Guarneri Del Gesu in 1741, is valued at $16,000,000. This violin is currently played by violinist Anne Akiko Meyers. She is endowed the violin to use for the rest of her life by an anonymous donor. ', 'Unofficial Event. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(153, 'Asarah B\'Tevet (J): December 14', 'Worldwide', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '12', '14', '2021', '2021-12-14', NULL, 'Daily', 'Changes', '', 'https://www.ou.org/holidays/asara_btevet/', '', '', 'About Asarah B\'Tevet', '', 'The 10th day of the Jewish month of Tevet is set aside as a fasting day from sunrise to commemorate the beginning of the siege of Jerusalem in the 6th century BC. It is also a day in Israel to honor the dead whose date of death is unknown. ', 'Jewish Religious Observance ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(154, 'Bouillabaisse Day, Ntl.: December 14', 'United States', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '12', '14', '2021', '2021-12-14', NULL, 'Daily', 'Same', '', 'http://simplyrecipes.com/recipes/bouillabaisse/', '', '', 'About National Bouillabaisse Day', '', '0', 'Unofficial Event. No Sponsor. See Cordon Bleu Culinary School for topical info.', 'Paris', '', 'FR', 'Cordon Bleu', '0', NULL, NULL, NULL, '75015', '(+33)(1) 53.68.22.50', 'mwarren@cordonbleu.edu', 'Media Relations', 'http://www.cordonbleuusa.com/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(155, 'Christmas Bird Count (US/UK/CA): December 14-January 5, 2022', 'United Kingdom, United States & Canada', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '1', '5', '2022', '2022-01-05', NULL, 'Weekly', 'Changes', '', 'https://www.audubon.org/conservation/science/christmas-bird-count', '', '', 'About the Audubon Society\'s Christmas Bird Count', '', '0', 'Audubon Science', 'Washington', 'DC', 'US', '1200 18th St NW, Suite 500', '', NULL, NULL, NULL, '20036', '', 'cbcadmin@audubon.org', 'Christmas Bird Count', 'https://www.audubon.org/christmas-bird-count-compiler-resources', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(156, 'Energy Conservation Day, World: December 14', 'Worldwide', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '12', '14', '2021', '2021-12-14', NULL, 'Daily', 'Same', '', 'https://saveourgreen.org/allpost/a-message-on-world-energy-conservation-day/', '', '', 'About World Energy Conservation Day', '', 'Created to promote energy conservation and prevent global warming and climate change, World Energy Conservation Day is observed in over 150 countries worldwide. ', 'Indian Ministry of Environment, Forests & Climate Change', 'New Delhi', '', 'IN', 'Indira Paryavaran Bhavan', 'Jorbagh Rd. ', NULL, NULL, NULL, '110 003', '(+91) 24.69.5132', 'moef@gov.in', 'General Information', 'http://moef.gov.in/contact-us-3/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(157, 'Gita Jayanti (H): December 14', 'Worldwide', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '12', '14', '2021', '2021-12-14', NULL, 'Daily', 'Changes', '', 'http://en.wikipedia.org/wiki/Gita_Jayanti', '', '', 'About the Hindu Day of Gita Jayanti', '', 'Gita Jayanti is the birthday of Bhagavad Gita, (700-verse Hindu scripture) and the sacred text of the Hindus. It is celebrated on the Shukla Ekadashi, the 11th day of the waxing moon in the month of Margashirsha. It corresponds to November-December month in the Gregorian calendar.\n\nIt is believed the Bhagavad Gita was revealed to Arjuna by Sri Krishna himself in the battlefield of Kurukshetra (in present day Haryana, India). Gita Jayanti is celebrated by all devotees of Lord Krishna.\n\nPLEASE NOTE: \nWe use the Indian Civil Calendar, which is the official holiday calendar in India, the largest Hindu nation.  The Hindu faith has many calendars, each specific to different regions and tribes with dates and celebrations marked by differing positions of the sun, moon and stars. Names of months and holidays, as well as the corresponding dates in the Gregorian Calendar, vary widely from one calendar to the next. Use our dates as a baseline. Find out which of the dozens of Hindu calendars is used in the region you live or plan to visit if you are looking to attend or witness a specific observance. ', 'Hindu Religious Holiday. See The Hindu Temple Society of North America for more information', ' Flushing', 'NY', 'US', 'New York Ganesh Temple', ' 45-57 Bowne Street', NULL, NULL, NULL, '11355', ' (718) 460.8484   ', 'https://nyganeshtemple.org/', 'Media Relations', 'https://nyganeshtemple.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(158, 'Halcyon Days: December 14-28', 'Worldwide', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '12', '28', '2021', '2021-12-28', NULL, 'Weekly', 'Same', '', 'https://www.merriam-webster.com/dictionary/halcyon', '', '', 'About Halcyon Days', '', 'Halcyon Days is an ancient tradition honoring the mythical bird of peace and tranquility, the halcyon. It always occurs during the seven days leading up to the winter solstice and the seven days following it. ', 'Ancient Holiday Tradition. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(159, 'Mokshada Ekadashi (H): December 14', 'Worldwide', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '12', '14', '2021', '2021-12-14', NULL, 'Daily', 'Changes', 'Salvation', 'http://en.wikipedia.org/wiki/Mokshada_Ekadashi', '', '', 'About the Hindu Day of Mokshada Ekadashi', '', 'Ekadashi, or fasting, is performed in honor of Lord Vishnu. \n\nThere are two types of Ekadashi: one observed monthly and the other honored annually.\n\nMokshada Ekadeshi is the Ekadeshi of Magha Shukla Paksha. In the Gregorian calendar, this falls in November or December. This Ekadashi is celebrated on the same day as Gita Jayanti.\n\nDevotees perform a fast from sunrise on Mokshada Ekadashi to the dawn of the next day eating only vegetarian food including fruit, vegetables, milk produce and nuts.\n\nEating rice, beans, pulses, garlic, and onions is prohibited on this day.\"\n\nPLEASE NOTE: \nWe use the Indian Civil Calendar, which is the official holiday calendar in India, the largest Hindu nation.  The Hindu faith has many calendars, each specific to different regions and tribes with dates and celebrations marked by differing positions of the sun, moon and stars. Names of months and holidays, as well as the corresponding dates in the Gregorian Calendar, vary widely from one calendar to the next. Use our dates as a baseline. Find out which of the dozens of Hindu calendars is used in the region you live or plan to visit if you are looking to attend or witness a specific observance. ', 'Hindu Religious Holiday. See The Hindu Temple Society of North America for more information', ' Flushing', 'NY', 'US', 'New York Ganesh Temple', ' 45-57 Bowne Street', NULL, NULL, NULL, '11355', ' (718) 460.8484   ', 'https://nyganeshtemple.org/', 'Media Relations', 'https://nyganeshtemple.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(160, 'Monkey Day: December 14', 'United States', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '12', '14', '2021', '2021-12-14', NULL, 'Daily', 'Same', '', 'http://monkeyday.com', '', '', 'About Monkey Day', '', 'Monkey Day in the United States is an annual event that aims to support and promote primate-related causes around the globe. These can include the use of primates in laboratory testing, supporting their native environment and a host of other issues related to the species.', 'Monkey Day', 'Lansing', 'MI', 'US', '312 Rumsey Ave.', '', NULL, NULL, NULL, '48912', '(517) 575.9318', 'dayofthemonkey@gmail.com', 'General Information', 'http://monkeyday.com/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(161, '0', 'Worldwide', '12', '14', '2021', NULL, NULL, NULL, NULL, '2021-12-14', '1', '12', '2021', '2021-01-12', NULL, 'Monthly', 'Same', '', 'http://www.sikhiwiki.org/index.php/Main_Page', '', '', 'About the Sikh Month of Poh', '', 'Poh is the 10th month in the Sikh calendar. \n\nDuring this month Sikhs celebrate Shaheedi Vada Sahibzada, the Shaheedi Chota Sahibzada and the birth of Guru Gobind Singh.', 'Sikh Religious Month: See World Sikh Council for more details', 'Columbus', 'OH', 'US', 'World Sikh Council', 'PO Box 3635', NULL, NULL, NULL, '43210', '(888) 340.1702', 'contact@worldsikhcouncil.org', ' Media Relations', 'http://www.worldsikhcouncil.org/index.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37');
INSERT INTO `events` (`id`, `name`, `states`, `start_month`, `start_day`, `start_year`, `country`, `event_address1`, `event_address2`, `status`, `start_date`, `end_month`, `end_day`, `end_year`, `end_date`, `duration`, `type`, `static_change`, `notes_not_public`, `url`, `feature_picture`, `picture_name`, `alt_text`, `estimated`, `description`, `event_champion`, `champ_city`, `champ_state`, `champ_country`, `champ_address1`, `champ_address2`, `city`, `state`, `country_code`, `zip`, `ph_num`, `email_form`, `contact_person`, `contact_link`, `physical_address`, `purchase_reserve`, `location_based`, `manager`, `event_physical_address`, `user_id`, `created_at`, `updated_at`) VALUES
(162, 'Bill of Rights Day, National (1791): December 15', 'United States', '12', '15', '2021', NULL, NULL, NULL, NULL, '2021-12-15', '12', '15', '2021', '2021-12-15', NULL, 'Daily', 'Same', '', 'http://www.presidency.ucsb.edu/ws/index.php?pid=128896', '', '', 'About National Bill of Rights Day', '', 'On December 15, 1791 the first ten amendments to the US Constitution were ratified by all thirteen colonies of the United States. Known as the Bill of Rights, these amendments outline the limits to government power over the people and were revolutionary. Nothing like this had ever been done before. \n\nWhereas the Constitution outlines the duties and responsibilities of each of the three main components of the US Government (Legislative, Executive and Judicial), the first ten amendments protect the people from government intrusion, authoritarianism and false imprisonment. \n\nThe Bill of Rights for the United States of America are: \n\nAmendment I\nCongress shall make no law respecting an establishment of religion, or prohibiting the free exercise thereof; or abridging the freedom of speech, or of the press; or the right of the people peaceably to assemble, and to petition the government for a redress of grievances.\n\nAmendment II\nA well regulated militia, being necessary to the security of a free state, the right of the people to keep and bear arms, shall not be infringed.\n\nAmendment III\nNo soldier shall, in time of peace be quartered in any house, without the consent of the owner, nor in time of war, but in a manner to be prescribed by law.\n\nAmendment IV\nThe right of the people to be secure in their persons, houses, papers, and effects, against unreasonable searches and seizures, shall not be violated, and no warrants shall issue, but upon probable cause, supported by oath or affirmation, and particularly describing the place to be searched, and the persons or things to be seized.\n\nAmendment V\nNo person shall be held to answer for a capital, or otherwise infamous crime, unless on a presentment or indictment of a grand jury, except in cases arising in the land or naval forces, or in the militia, when in actual service in time of war or public danger; nor shall any person be subject for the same offense to be twice put in jeopardy of life or limb; nor shall be compelled in any criminal case to be a witness against himself, nor be deprived of life, liberty, or property, without due process of law; nor shall private property be taken for public use, without just compensation.\n\nAmendment VI\nIn all criminal prosecutions, the accused shall enjoy the right to a speedy and public trial, by an impartial jury of the state and district wherein the crime shall have been committed, which district shall have been previously ascertained by law, and to be informed of the nature and cause of the accusation; to be confronted with the witnesses against him; to have compulsory process for obtaining witnesses in his favor, and to have the assistance of counsel for his defense.\n\nAmendment VII\nIn suits at common law, where the value in controversy shall exceed twenty dollars, the right of trial by jury shall be preserved, and no fact tried by a jury, shall be otherwise reexamined in any court of the United States, than according to the rules of the common law.\n\nAmendment VIII\nExcessive bail shall not be required, nor excessive fines imposed, nor cruel and unusual punishments inflicted.\n\nAmendment IX\nThe enumeration in the Constitution, of certain rights, shall not be construed to deny or disparage others retained by the people.\n\nAmendment X\nThe powers not delegated to the United States by the Constitution, nor prohibited by it to the states, are reserved to the states respectively, or to the people.\"', 'Historical Event.  Presidential Decree', 'Washington', 'DC', 'US', 'Office of Citizen Services and Innovative Technologies', '1800 F Street, NW', NULL, NULL, NULL, '20405', '(800) 333.4636', 'http://answers.usa.gov/system/templates/selfservice/USAGov/#!portal/1012/email_us', 'Citizen Services', 'http://www.usa.gov/Contact-Us.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(163, 'Cat Herders Day, Ntl.: December 15', 'United States', '12', '15', '2021', NULL, NULL, NULL, NULL, '2021-12-15', '12', '15', '2021', '2021-12-15', NULL, 'Daily', 'Same', '', 'http://www.highconflictinstitute.com/articles/articles-for-professionals/78-hci-articles/published-articles/159-herdingcats', '', '', 'About National Cat Herders Day', '', '0', 'Wellcat Events', 'Lebanon', 'PA', 'US', '2418 Long Lane', '', NULL, NULL, NULL, '17046', ' (717) 279.0184   ', 'info@wellcat.com', 'Thomas & Ruth Roy', 'http://www.wellcat.com/Order%20Information.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(164, '0', '0', '12', '15', '2021', NULL, NULL, NULL, NULL, '2021-12-15', '12', '15', '2021', '2021-12-15', NULL, 'Daily', 'Same', '', 'https://www.curacao.com', '', '', '0', '', '0', '0', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(165, 'Dhanu Sankranti (H): December 15', 'Worldwide', '12', '15', '2021', NULL, NULL, NULL, NULL, '2021-12-15', '12', '15', '2021', '2021-12-15', NULL, 'Daily', 'Changes', '', 'http://www.drikpanchang.com/sankranti/dhanu-sankranti-date-time.html?year=2014', '', '', 'About the Hindu Day of Dhanu Sankranti', '', 'Dhanu Sankranti marks the day when Sun enters in the Dhanu Rashi or Sagittarius. This is the beginning of the ninth month of Hindu solar calendar.\n \nOn this day, Lord Surya the sun god is worshipped. \n\nIn Odisha, this festival is celebrated with much devotion and spirituality. \n\nA special delicacy made of sweetened rice flakes, Dhanu Muan, is prepared as offering to Lord Jagannath.\n\nPLEASE NOTE: \nWe use the Indian Civil Calendar, which is the official holiday calendar in India, the largest Hindu nation.  The Hindu faith has many calendars, each specific to different regions and tribes with dates and celebrations marked by differing positions of the sun, moon and stars. Names of months and holidays, as well as the corresponding dates in the Gregorian Calendar, vary widely from one calendar to the next. Use our dates as a baseline. Find out which of the dozens of Hindu calendars is used in the region you live or plan to visit if you are looking to attend or witness a specific observance.', 'Hindu Religious Holiday. See The Hindu Temple Society of North America for more information', ' Flushing', 'NY', 'US', 'New York Ganesh Temple', ' 45-57 Bowne Street', NULL, NULL, NULL, '11355', ' (718) 460.8484  ', 'https://nyganeshtemple.org/', 'Media Relations', 'https://nyganeshtemple.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(166, 'Ice Cream Cone Day (1903): December 15', 'United States', '12', '15', '2021', NULL, NULL, NULL, NULL, '2021-12-15', '12', '15', '2021', '2021-12-15', NULL, 'Daily', 'Same', '', 'http://www.idfa.org/news-views/media-kits/ice-cream/the-history-of-the-ice-cream-cone', '', '', 'About Ice Cream Cone Day', '', 'National Ice Cream Cone Day celebrates the edible and portable summer treat. \n\nThe first edible cone for ice cream was created in 1904 by Ernest Hamwi at the St. Louis World\'s Fair. The Syrian immigrant had his zalabis (Syrian Waffle) booth adjacent to the ice cream vendor at the fair. When his neighbor ran out of dishes to serve the ice cream, Hamwi displayed a moment of brilliance, rolled a waffle into a cone and put ice cream in it. And thus a legendary treat was born!\n\nThis wasn\'t the first edible dish for ice cream. That honor goes to Italo Marchiony, an Italian immigrant, who created mini dishes from pastry to make ice cream a portable street food in 1896. He filed his patent for the ice cream cuplets on September 22, 1903 and was granted the patent December 15, 1903. This day falls on the anniversary of that patent. \n\nThe cone itself, though, was created and popularized by Hamwi. \n\nPROMOTION IDEA:\nThe next time you eat an ice cream cone, take pause and thank the immigrant who created it. Today, under the current US administration, Hamwi wouldn\'t be allowed to come to the United States because he was from Syria. In fact, eating an ice cream cone today in his honor could be a tremendous sign of protest and for any enterprising NGOs and vendors serving the Syrian refugee community, a chance to raise much needed funds and awareness through the simple, yet elegant, ice cream cone.', 'Historical Anniversary. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(167, 'Lemon Cupcake Day, Ntl.: December 15', 'United States', '12', '15', '2021', NULL, NULL, NULL, NULL, '2021-12-15', '12', '15', '2021', '2021-12-15', NULL, 'Daily', 'Same', '', 'https://hellogiggles.com/lifestyle/food-drink/happy-national-lemon-cupcake-day/', '', '', 'About National Lemon Cupcake Day', '', 'Lemon Cupcake day is an unofficial food holiday that celebrates the lemon cupcake. \n\nBest way to enjoy? Have one!', 'Unofficial Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(168, 'Navidades, (PR)(C): December 15-January 6', 'Puerto Rico', '12', '15', '2021', NULL, NULL, NULL, NULL, '2021-12-15', '1', '6', '2021', '2021-01-06', NULL, 'Weekly', 'Same', '', 'https://www.discoverpuertorico.com/list/holiday-traditions-puerto-rico', '', '', 'About Navidades in Puerto Rico', '', 'Navidades is the official Christmas season in Puerto Rico. It begins ten days before Christmas and extends until Epiphany (January 6). Celebrations are vast, colorful and spiced with the unique fusion of Caribbean and Latino culture, music, food and relatively warm tropical weather.', 'Puerto Rican Tradition', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(169, 'Barbie & Barney Backlash Day: December 16 ', 'United States', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '16', '2021', '2021-12-16', NULL, 'Daily', 'Same', '', 'http://www.wellcat.com/december/barbie_and_barney_backlash_day.htm', 'Barbie_Barnie_BacklashF.jpg', 'Barbie_Barnie_BacklashE.jpg', 'About Barbie & Barney Backlash Day', '', '0', 'Wellcat Events', 'Lebanon', 'PA', 'US', '2418 Long Lane', '', NULL, NULL, NULL, '17046', ' (717) 279.0184   ', 'info@wellcat.com', 'Thomas & Ruth Roy', 'http://www.wellcat.com/Order%20Information.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(170, 'Chocolate Covered Anything Day, Ntl.: December 16', 'United States', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '16', '2021', '2021-12-16', NULL, 'Daily', 'Same', '', 'https://www.farmflavor.com/at-home/cooking/national-chocolate-covered-anything-day/', '', '', 'About National Chocolate Covered Anything Day', '', '0', 'Unofficial Event. No Sponsor. See Fine Chocolate Industry Association for info/details', 'Seattle', 'WA', 'US', 'Fine Chocolate Industry Association', '4701 SW Admiral Way #324', NULL, NULL, NULL, '98116', '(206) 577.9983', 'info@finechocolateindustry.org', 'Media Relations', 'http://www.finechocolateindustry.org/ballyhoo', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(171, 'Independence Day, (BH)(1971): December 16', 'Bahrain', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '16', '2021', '2021-12-16', NULL, 'Daily', 'Same', '', 'http://www.btea.bh/tourist-destinations', '', '', 'About Independence Day in Bahrain', '', 'Independence Day in the 33 island archipelago of Bahrain, marks the anniversary of December 16, 1971, the day the nation gained independence from Britain. This is a national holiday.', 'Historical Anniversary. National Holiday in Bahrain', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(172, 'Independence Day, (KZ)(1991): December 16', 'Kazakhstan', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '16', '2021', '2021-12-16', NULL, 'Daily', 'Same', '', 'https://www.kz.undp.org', '', '', 'About Independence Day in Kazakhstan', '', 'Independence Day in Kazakhstan marks the anniversary of December 16, 1991, the day the nation gained independence from the Soviet Union. This is a national holiday.', 'Historical Anniversary. National Holiday in Kazakhstan', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(173, 'Las Posadas (C): December 16-24', 'Central & South America', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '24', '2021', '2021-12-24', NULL, 'Weekly', 'Same', '', 'http://www.mexconnect.com/articles/1103-posadas-pastorelas-and-nacimientos', '', '', 'About Las Posadas', '', '0', 'Christian Tradition. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(174, 'Reconciliation, Day of  (ZA)(1994) Ntl.: December 16', 'South Africa', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '16', '2021', '2021-12-16', NULL, 'Daily', 'Same', '', 'http://en.wikipedia.org/wiki/Day_of_Reconciliation', '', '', 'About National Day of Reconciliation in South Africa', '', '0', 'Public Holiday South Africa.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(175, 'Simbang Gabi, (PH)(C): December 16-24', 'Philippines', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '24', '2021', '2021-12-24', NULL, 'Weekly', 'Same', '', 'https://gulfnews.com/going-out/society/why-filipinos-attend-simbang-gabi-1.60921300', '', '', 'About Simbang Gabi', '', 'Simbang Gabi is the official Christmas prayer tradition in the Philippines. It begins nine days before Christmas and includes nine early dawn and nine evening masses (church services). It is preparation leading up to Christmas and celebrated by Filipinos throughout the world. ', 'Filipino Christian Tradition', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(176, 'Tea Party Day, Boston (US-MA) (1773): December 16', 'United States', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '16', '2021', '2021-12-16', NULL, 'Daily', 'Same', '', 'http://www.bostonteapartyship.com', '', '', 'About the Anniversary of the Boston Tea Party in 1773', '', 'December 16 marks the anniversary of the Boston Tea Party Day in 1773. Organized by the \'Sons of Liberty\' as a political protest in defiance of the Tea Act of May 10, 1773, demonstrators destroyed an entire shipment of tea arriving from the East India Company by dumping it into Boston harbor.\n\nThe Boston Tea Party is considered one of the first acts of organized defiance against the British empire, and one of the key events leading up to the American Revolution.', 'Historical Anniversary. See Boston Tea Party Museum', 'Boston', 'MA', 'US', 'Boston Tea Party Museum', 'Congress Street Bridge', NULL, NULL, NULL, '02127', '(866) 955.0667', 'http://www.bostonteapartyship.com/contact-us', 'General Information', 'http://www.bostonteapartyship.com/contact-us', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(177, 'Victory Day, (BD)(1971): December 16', 'Bangladesh', '12', '16', '2021', NULL, NULL, NULL, NULL, '2021-12-16', '12', '16', '2021', '2021-12-16', NULL, 'Daily', 'Same', '', 'https://www.bd.undp.org', '', '', 'About Independence Day in Bahrain', '', 'Victory Day in Bangladesh marks the anniversary of December 16, 1971, a day of victory when East Pakistan became part of the nation. This is a national holiday.', 'Historical Anniversary. National Holiday in Bangladesh', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(178, 'Jasmine Uprising, Tunisia, Arab Spring Begins (TN)(2010): December 17', 'Tunisia', '12', '17', '2021', NULL, NULL, NULL, NULL, '2021-12-17', '12', '17', '2021', '2021-12-17', NULL, 'Daily', 'Same', '', 'https://www.aljazeera.com/indepth/inpictures/2015/12/tunisian-revolution-151215102459580.html', '', '', 'About the Jasmine Uprising in Tunisia and the beginning of the Arab Spring in 2010', '', '0', 'Historical Anniversary. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(179, 'Maple Syrup Day: December 17', 'United States', '12', '17', '2021', NULL, NULL, NULL, NULL, '2021-12-17', '12', '17', '2021', '2021-12-17', NULL, 'Daily', 'Same', '', 'https://parade.com/532416/nancyberk/celebrate-national-maple-syrup-day-with-the-perfect-pancake-recipe/', '', '', 'About Maple Syrup Day', '', '0', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(180, 'Pan American Aviation Day (1903): December 17', 'United States', '12', '17', '2021', NULL, NULL, NULL, NULL, '2021-12-17', '12', '17', '2021', '2021-12-17', NULL, 'Daily', 'Same', '', 'http://en.wikipedia.org/wiki/Pan_American_Aviation_Day', '', '', 'About Pan American Aviation Day', '', 'Pan American Aviation Day seeks to stimulate interest in aviation, spawn further development of rapid communications, and increase cultural development between the countries of the Western Hemisphere. \n\nThe date was chosen in honor of the first successful flight of a mechanically propelled heavier-than-air craft on December 17, 1903 by the Wright brothers in North Carolina.', 'Presidential Decree: U.S. General Services Administration', 'Washington', 'DC', 'US', 'Office of Citizen Services and Innovative Technologies', '1800 F Street, NW', NULL, NULL, NULL, '20405', '(800) 333.4636', 'http://answers.usa.gov/system/templates/selfservice/USAGov/#!portal/1012/email_us', 'Citizen Services', 'http://www.usa.gov/Contact-Us.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(181, 'Saturnalia: December 17-23', 'Worldwide', '12', '17', '2021', NULL, NULL, NULL, NULL, '2021-12-17', '12', '23', '2021', '2021-12-23', NULL, 'Weekly', 'Same', '', 'https://www.history.com/topics/saturnalia', '', '', 'About Saturnalia', '', 'Saturnalia is a festival, which originated in ancient Rome, and celebrates the god of agriculture, Saturnalia.  It is partly due to this pagan celebration that the Christian holiday of Christmas was decided on December 25.  ', 'Pagan Ritual. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(182, 'Smoking, Take a New Year\'s Resolution to Stop: December 17-February 6, 2022', 'Worldwide', '12', '17', '2021', NULL, NULL, NULL, NULL, '2021-12-17', '2', '6', '2022', '2022-02-06', NULL, 'Monthly', 'Changes', 'December 17 - Superbowl Sunday', 'https://www.cdc.gov/features/smokingcessation/index.html', '', '', 'About Take a New Year\'s Resolution to Stop Smoking', '', 'This is the year to finally become a quitter if you\'re a smoker. Each year PPSI sets aside a six week period to help you plan and finally kick this expensive and destructive habit during Take a New Year\'s Resolution to Stop Smoking weeks. ', 'Pharmacists Public Health Initiatives', 'San Rafael', 'CA', 'US', 'Pharmacy Council on Tabaco Dependence', 'PO Box 6760', NULL, NULL, NULL, '94903', '(415) 479.8628', 'ppsi@aol.com', 'Fred Mayer, RPh', 'http://www.ppsinc.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(183, 'Underdog Day, Ntl. (US/UK): December 17', 'United States & United Kingdom', '12', '17', '2021', NULL, NULL, NULL, NULL, '2021-12-17', '12', '17', '2021', '2021-12-17', NULL, 'Daily', 'Changes', '3rd Friday December', 'http://www.telegraph.co.uk/culture/8960709/Happy-National-Underdog-Day-Why-we-root-for-the-underdog-in-a-recession.html', '', '', 'About National Underdog Day in the United States & United Kingdom', '', '0', 'Underdogs International', 'Clio', 'MI', 'US', 'Box 71', '', NULL, NULL, NULL, '48420', '', '', 'AC Vierow', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(184, 'Wright Brothers Day (1903): December 17', 'United States', '12', '17', '2021', NULL, NULL, NULL, NULL, '2021-12-17', '12', '17', '2021', '2021-12-17', NULL, 'Daily', 'Same', '', 'http://www.whitehouse.gov/the-press-office/2010/12/17/presidential-proclamation-wright-brothers-day', '', '', 'About National Wright Brothers Day', '', 'Presidential Proclamation: Wright Brothers Day\n\nOn December 17, 1903, after years of determination and creativity, Orville and Wilbur Wright\'s wooden aircraft sailed the steady winds of Kitty Hawk, North Carolina, and conquered the age old dream of manned flight.  That day, the two brothers from Dayton, Ohio, could only imagine what we now know    that those moments aloft in the North Carolina sky would send mankind on a revolutionary journey and modernize transportation.  On this day, we celebrate their historic accomplishment, the limitless potential they represent, and the vision they spurred for the next generation of inventors and entrepreneurs.\n\nThe Wright brothers\' monumental achievement solidified their place in history and earned them status as American and global icons.  They moved aviation from a curiosity into an indispensable global industry.  Self taught and relentless in their years of work and experimentation, these brothers were a shining illustration of the limitless capacity of human intellect and the resourcefulness of the American entrepreneur.  As part of an era of great visionaries, Orville and Wilbur Wright helped hasten an age of discovery and great technological advancement.  Their unyielding pursuit of powered flight stands as a proud example for young and curious minds eager to transform and advance the world around them.\n\nJust as the Wright brothers\' breakthrough led to a new industry that forever altered our world, a new generation of space pioneers is now following in their footsteps and setting our Nation\'s sights even higher.  Working with the National Aeronautics and Space Administration and the Federal Aviation Administration, leaders in spaceflight are making great progress in ushering in a new commercial space industry that can help boost our economy, create new jobs, and take Americans to soaring new heights.\n\nAmerica\'s long history of technological leadership and innovation has been the product of learning and ingenuity.  To maintain this tradition and propel it forward, America must empower the next generation of doers and makers.  We must ensure our Nation\'s students receive the world class mathematics and science education they need to challenge the boundaries of human knowledge and realize tomorrow what we can only dream today.  We must also ready our children to become the entrepreneurs whose tenacity and creativity will power the engine of our Nation\'s economy for centuries to come.  On Wright Brothers Day, in remembrance of that celebrated flight, let us recommit to preparing the next generation of scientists, engineers, inventors, and entrepreneurs to create a future of promise and progress.\n\nThe Congress, by a joint resolution approved December 17, 1963, as amended (77 Stat. 402; 36 U.S.C. 143), has designated December 17 of each year as \"Wright Brothers Day\" and has authorized and requested the President to issue annually a proclamation inviting the people of the United States to observe that day with appropriate ceremonies and activities.\n\n NOW, THEREFORE, I, BARACK OBAMA, President of the United States of America, do hereby proclaim December 17, 2010, as Wright Brothers Day.\n\n IN WITNESS WHEREOF, I have hereunto set my hand this seventeenth day of December, in the year of our Lord two thousand ten, and of the Independence of the United States of America the two hundred and thirty-fifth.\n\nBARACK OBAMA', 'Presidential Decree: U.S. General Services Administration', 'Washington', 'DC', 'US', 'Office of Citizen Services and Innovative Technologies', '1800 F Street, NW', NULL, NULL, NULL, '20405', '(800) 333.4636', 'http://answers.usa.gov/system/templates/selfservice/USAGov/#!portal/1012/email_us', 'Citizen Services', 'http://www.usa.gov/Contact-Us.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(185, 'Arabic Language Day, Intl.: December 18', 'Worldwide', '12', '18', '2021', NULL, NULL, NULL, NULL, '2021-12-18', '12', '18', '2021', '2021-12-18', NULL, 'Daily', 'Same', '', 'https://www.un.org', '', '', 'About International Arabic Language Day', '', '<p>Arabic is one of the six official languages of the United Nations, and one of three surviving Semitic languages. The other official languages of the United Nations are: Chinese, Spanish, Russian, French and English. Each language gets its own day each year. Arabic is the 4th most spoken language in the world after Mandarine, Spanish, and English.</p> ', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(186, 'Bake Cookies Day, Ntl.: December 18', 'United States', '12', '18', '2021', NULL, NULL, NULL, NULL, '2021-12-18', '12', '18', '2021', '2021-12-18', NULL, 'Daily', 'Same', '', 'https://www.parents.com/parents-magazine/parents-perspective/why-you-need-to-be-celebrating-national-bake-cookies-day/', 'Bake_Cookies_DayF.jpg', 'Bake_Cookies_DayE.jpg', 'About National Bake Cookies Day', '', '0', 'Unofficial Food Event. No Sponsor. See Johnson & Wales University Culinary Arts Museum for topical info.', 'Providence ', 'RI', 'US', 'Johnson & Wales University Culinary Arts Museum', '315 Harborside Boulevard', NULL, NULL, NULL, '02905', '(401) 598.1860', 'richard.gutman@jwu.edu', 'Richard Gutman, Director and Curator', 'http://www.culinary.org/NewsDetail.aspx?id=649&libID=670', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(187, 'Dattatreya Jayanti (H)(2450 BC): December 18', 'Worldwide', '12', '18', '2021', NULL, NULL, NULL, NULL, '2021-12-18', '12', '18', '2021', '2021-12-18', NULL, 'Daily', 'Changes', 'Full Moon Between December and January', 'http://www.astrojyoti.com/dattatreyajayanti.htm', '', '', 'About the Hindu Day of Dattatreya Jayanti', '', 'Dattatreya Jayanti marks the birth of the Hindu god Dattatreya (Datta) in approximately 2450 BC.\n\nDattatreya is a compilation of the Hindu divine male trinity of Brahma, Vishnu and Shiva. The birth is celebrated during the full moon of the Hindu month Agrahayan which occurs in either December or January in the Gregorian calendar. \n\nOn this day, people take their baths early in the morning in holy rivers and streams and observe fasting. A puja of Dattatreya is performed with flowers, incense, lamps and camphor.\n\nPLEASE NOTE: \nWe use the Indian Civil Calendar, which is the official holiday calendar in India, the largest Hindu nation.  The Hindu faith has many calendars, each specific to different regions and tribes with dates and celebrations marked by differing positions of the sun, moon and stars. Names of months and holidays, as well as the corresponding dates in the Gregorian Calendar, vary widely from one calendar to the next. Use our dates as a baseline. Find out which of the dozens of Hindu calendars is used in the region you live or plan to visit if you are looking to attend or witness a specific observance. ', 'Hindu Religious Holiday. See The Hindu Temple Society of North America for more information', ' Flushing', 'NY', 'US', 'New York Ganesh Temple', ' 45-57 Bowne Street', NULL, NULL, NULL, '11355', ' (718) 460.8484   ', 'https://nyganeshtemple.org/', 'Media Relations', 'https://nyganeshtemple.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(188, 'Migrant\'s Day, Intl.: December 18', 'Worldwide', '12', '18', '2021', NULL, NULL, NULL, NULL, '2021-12-18', '12', '18', '2021', '2021-12-18', NULL, 'Daily', 'Same', '', 'http://www.un.org/en/events/migrantsday/', '', '', 'About International Migrant\'s Day', '', '0', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(189, 'Qatar National Day (QA)(1878): December 18', 'Qatar', '12', '18', '2021', NULL, NULL, NULL, NULL, '2021-12-18', '12', '18', '2021', '2021-12-18', NULL, 'Daily', 'Same', '', 'https://www.aljazeera.com/news/2017/12/qatar-marks-national-day-gulf-crisis-171217114224447.html', '', '', 'About National Day in Qatar', '', 'It was on this day in 1878 that the little peninsula country, renowned worldwide for its news channel Al Jazeera (Th Peninsula in Arabic), that Sheikh Muhammad Bin Thani, who would vanquish the Ottomans from his land, succeeded his father Sheik Jassem to the thrown and founded the state of Qatar. The nation would later fall under the British empire until it gained its independence September 3, 1971.\n\nNational Day in Qatar is a national holiday. ', 'Historical Anniversary. Official State Holiday Qatar', 'Doha', '', 'QA', 'Qatar Tourism Authority', '24624', NULL, NULL, NULL, '', '(+974) 44.99.7499', 'info@visitqatar.qa', 'General Information', 'https://www.visitqatar.qa/contact', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(190, 'Republic Day, (NE)(1958): December 18', 'Niger', '12', '18', '2021', NULL, NULL, NULL, NULL, '2021-12-18', '12', '18', '2021', '2021-12-18', NULL, 'Daily', 'Same', '', 'https://www.ne.undp.org', '', '', 'About Republic Day in Niger', '', 'Malta\'s Republic Day marks the anniversary of December 13, 1974, the day the island nation ended the monarchy and became a republic. This is a national holiday.', 'Historical Anniversary. National Holiday in Niger', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(191, 'Roast Suckling Pig Day, Ntl.: December 18', 'United States', '12', '18', '2021', NULL, NULL, NULL, NULL, '2021-12-18', '12', '18', '2021', '2021-12-18', NULL, 'Daily', 'Same', '', 'http://www.popsugar.com/food/Today-National-Roast-Suckling-Pig-Day-81199', '', '', 'About National Roast Suckling Pig Day', '', 'National Roast Suckling Pig Day the dish made from piglets between the ages of two and six weeks that have yet to be weened. \n\nA suckling pig is roasted whole until its skin turns to crisp. Its meat is so tender and succulent, that someone named an entire holiday after it!\n\nThis is an unofficial event with no sponsor.', 'Unofficial Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(192, 'Wear a Plunger on Your Head Day, Ntl.: December 18', 'United States', '12', '18', '2021', NULL, NULL, NULL, NULL, '2021-12-18', '12', '18', '2021', '2021-12-18', NULL, 'Daily', 'Same', '', 'http://adamgustavson.blogspot.com/2007/12/its-wear-plunger-on-your-head-day.html', '', '', 'About National Wear a Plunger on Your Head Day', '', 'Wear a Plunger on Your Head Day is a silly holiday without origin meant to remind people not to take life to seriously.  Smack dab at the height of holiday hectic in December, if the stress of the season is getting to you, put a plunger on your head, look in the mirror and laugh.\nThere, now isn\'t that better?\n\nThis is an unofficial event with no sponsor.', 'Unofficial Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(193, 'Evergreen Day: December 19', 'United States', '12', '19', '2021', NULL, NULL, NULL, NULL, '2021-12-19', '12', '19', '2021', '2021-12-19', NULL, 'Daily', 'Same', '', 'www.christmastree.org', '', '', 'About National Evergreen Day', '', 'Evergreen Day pays tribute to the iconic Christmas Tree, which is usually an a conifer in the genus Pinus, (pine tree).  \n\nEvergreen is a lay term used to describe trees and shrubs that do not lose their leaves in the fall and stay green year around. These include conifers (Hemlock, Redwood), tropical hardwoods (Mahogany, Eucalyptus)  and temperate broadleaf trees (Holly, Rhododendron).', 'Unofficial Event. No Sponsor. See International Society of Arboriculture on topic.', 'Champaign', 'IL', 'US', 'International Society of Arboriculture', 'P.O. Box 3129', NULL, NULL, NULL, '61826-3129', '(217) 355.9411', 'isa@isa-arbor.com', 'General Information', 'http://www.isa-arbor.com/about/contactUs.aspx', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(194, 'Margashirsha Purnima (H): December 19', 'Worldwide', '12', '19', '2021', NULL, NULL, NULL, NULL, '2021-12-19', '12', '19', '2021', '2021-12-19', NULL, 'Daily', 'Changes', '', 'http://timesofhindu.com/margashirsha-purnima-importance-spiritual-significance/', '', '', 'About the Hindu Day of Margashirsha Purnima', '', 'Margashirsha is a month of dedication and devotion to the Lord Krishna. On the morning of the day of the full moon (Margashirsha Purnima), devotees take a holy bath with roots of Tulsi plant. While bathing, they must recite Gayatri mantra or Namo Narayanaya mantra. \n\nPLEASE NOTE: \nWe use the Indian Civil Calendar, which is the official holiday calendar in India, the largest Hindu nation.  The Hindu faith has many calendars, each specific to different regions and tribes with dates and celebrations marked by differing positions of the sun, moon and stars. Names of months and holidays, as well as the corresponding dates in the Gregorian Calendar, vary widely from one calendar to the next. Use our dates as a baseline. Find out which of the dozens of Hindu calendars is used in the region you live or plan to visit if you are looking to attend or witness a specific observance.', 'Hindu Religious Holiday. See The Hindu Temple Society of North America for more information', 'Flushing', 'NY', 'US', 'New York Ganesh Temple', ' 45-57 Bowne Street', NULL, NULL, NULL, '11355', ' (718) 460.8484   ', 'https://nyganeshtemple.org/', 'Media Relations', 'https://nyganeshtemple.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(195, 'Moon-Full: December 19', 'Worldwide', '12', '19', '2021', NULL, NULL, NULL, NULL, '2021-12-19', '12', '19', '2021', '2021-12-19', NULL, 'Daily', 'Changes', '', 'http://lunaf.com/lunar-calendar/2019', '5495_Full_MoonF.jpg', '5495_Full_MoonE.jpg', 'About the December Full Moon', '', '0', 'Natural Event. No Sponsor. See American Astronomical Society for info. ', 'Washington', 'DC', 'US', 'American Astronomical Society', '2000 Florida Ave., NW, Suite 300', NULL, NULL, NULL, '20009-1231', '(202) 328.2010', 'aas@aas.org', 'Media Relations', 'https://aas.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(196, 'Oatmeal Muffin Day: December 19', 'United States', '12', '19', '2021', NULL, NULL, NULL, NULL, '2021-12-19', '12', '19', '2021', '2021-12-19', NULL, 'Daily', 'Same', '', 'http://www.skinnytaste.com/2012/03/insanely-good-blueberry-oatmeal-muffins.html', '', '', 'About Oatmeal Muffin Day', '', '0', 'Unofficial Event. No Sponsor. See Whole Grains Council for topical info.', 'Boston', 'MA', 'US ', 'Whole Grains Council', '266 Beacon Street, Suite 1', NULL, NULL, NULL, '02116', '(617) 421.5500', 'info@oldwayspt.org', 'General  Information', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(197, 'Caroling Day, Go Ntl.: December 20', 'United States', '12', '20', '2021', NULL, NULL, NULL, NULL, '2021-12-20', '12', '20', '2021', '2021-12-20', NULL, 'Daily', 'Same', '', 'http://tlc.howstuffworks.com/family/christmas-caroler1.htm', '', '', 'About National Go Caroling Day', '', '0', 'Unofficial Event. No Sponsor. See the St. Louis Caroling Association on topic.  ', 'St. Louis', 'MO', 'US', 'St. Louis Christmas Carol Association', '7425 Forsyth Blvd, Suite 353', NULL, NULL, NULL, '63105', '(314) 863.1225', 'joankoontz@stlchristmascarols.org', 'Joan Koontz,\nExecutive Director', 'http://stlchristmascarols.org/Calendar.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(198, 'Human Solidarity Day, Intl.: December 20', 'Worldwide', '12', '20', '2021', NULL, NULL, NULL, NULL, '2021-12-20', '12', '20', '2021', '2021-12-20', NULL, 'Daily', 'Same', '', 'http://www.un.org/en/events/humansolidarityday/', '', '', 'About International Human Solidarity Day', '', 'International Human Solidarity Day appreciates and shows solidarity towards our fellow human beings and focuses on working together for a better tomorrow. It\'s a day to celebrate diversity and focus on sustainable solutions that allow people to escape poverty, hunger and disease.', 'United Nations', 'New York City', 'NY', 'US', 'Department of Public Information', ' ', NULL, NULL, NULL, '10017', '(212) 963.7160', 'malu@un.org', 'Media Liaison', 'http://www.un.org/en/media/accreditation/contact.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(199, 'Mudd, Dr. Samuel, Day (1833): December 20', 'United States', '12', '20', '2021', NULL, NULL, NULL, NULL, '2021-12-20', '12', '20', '2021', '2021-12-20', NULL, 'Daily', 'Same', '', 'http://law2.umkc.edu/faculty/projects/ftrials/lincolnconspiracy/mudd.html', '', '', 'About Dr. Samuel Mudd Day', '', '0', 'Historic Anniversary. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(200, 'Pausa (H): December 20 - January 17, 2022', 'Worldwide', '12', '20', '2021', NULL, NULL, NULL, NULL, '2021-12-20', '1', '17', '2022', '2022-01-17', NULL, 'Monthly', 'Changes', 'Follows Astrology', 'http://www.prokerala.com/general/calendar/hinducalendar.php?year=2018&mon=agrahayana', '', '', 'About the Hindu Month of Agrahayana', '', 'In the Hindu Calendar, Pausa is the tenth month.\n\nPLEASE NOTE: \n\nWe use the Indian Civil Calendar, which is the official holiday calendar in India, the largest Hindu nation.  The Hindu faith has many calendars, each specific to different regions and tribes with dates and celebrations marked by differing positions of the sun, moon and stars. Names of months and holidays, as well as the corresponding dates in the Gregorian Calendar, vary widely from one calendar to the next. Use our dates as a baseline. Find out which of the dozens of Hindu calendars is used in the region you live or plan to visit if you are looking to attend or witness a specific observance. ', 'Hindu Religious Holiday. See The Hindu Temple Society of North America for more information', ' Flushing', 'NY', 'US', 'New York Ganesh Temple', ' 45-57 Bowne Street', NULL, NULL, NULL, '11355', ' (718) 460.8484  ', 'https://nyganeshtemple.org/', 'Media Relations', 'https://nyganeshtemple.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(201, 'Anne & Samantha Day: December 21', 'Worldwide', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://www.anneandsamantha.com/', '', '', ' About Anne & Samantha Day', '', 'Anne and Samantha Day occurs on the Summer and Winter Solstice to honor the work of two young women who died to young, and to push for postage stamps to be issued commemorating their contributions to world peace and understanding.  \n\nAnne is for Anne Frank, the author of the Diary of Anne Frank.  Anne died in a concentration camp less than two months before the end of WWII in Europe.  She was just sixteen years old.\n\nSamantha is for Samantha Smith who is known as the world\'s youngest ambassador. She wrote a letter to the head of the Soviet Union, Yuri Andropov, congratulating him on his new job and bring to understand the Cold War. After a couple of letters, she finally received an answer from the leader.  This got her an invitation to visit, from which she wrote a book.  Samantha died on August 25, 1985 in a plane crash.  She was only 13. ', 'John O\'Loughlin', 'Irving', 'TX', 'US', '3124 Chisholm Trail', '', NULL, NULL, NULL, '75062', '(972) 258.4996', 'lldjohn@aol.com', 'John O\'Loughlin', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(202, 'Bright Side Day, Look on the: December 21', 'United States', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://drjeanandfriends.blogspot.com/2017/12/look-on-bright-side-day_21.html', '', '', 'About Look on the Bright Side Day', '', '0', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(203, 'Crossword Puzzle Day (1913): December 21', 'Worldwide', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://www.crosswordtournament.com/more/wynne.html', '', '', 'About Crossword Puzzle Day', '', 'The first officially published crossword puzzle was created by the journalist Arthur Wynne of Liverpool, England on December 21, 1913. \n\nHowever, his was not the first crossword puzzle ever created. \n\nA simple version of word play first appeared in England during the 19th century. \n\nNational Crossword Day celebrates the anniversary of the first crossword puzzle ever published in a major newspaper.', 'Historical Anniversary. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(204, '0', 'China', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Changes', ' ', 'http://www.china.org.cn/english/features/Festivals/78308.htm', '', '', 'About the Dongzhi Festival in China', '', '0', 'National Festival. See China National Tourism Administration for info', 'Beijing', '', 'CN', 'China National Tourism Administration', '9A Jianguomennei Ave', NULL, NULL, NULL, '100740', '(+86) 10.65.20.1114', 'webmaster@cnta.gov.cn ', 'Media Relations', 'http://en.cnta.gov.c bout/Forms/AboutCnta/ContactUs.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(205, '0', 'Worldwide', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', ' ', 'http://en.wikipedia.org/wiki/Desmond_Doyle', '', '', '0', '', '0', 'Historical Anniversary', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(206, 'Flashlight Day, Ntl. : December 21', 'United States', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'https://prezi.com/xspfi0eulxxe/david-misell-inventor-of-the-flashlight/', '', '', 'About National Flashlight Day', '', 'National Flashlight Day occurs on December 21, the Winter Solstice each year.  This is the longest night of the year. It is a reminder to make sure you have emergency candles and lighting ready for the winter.\n\nThe flashlight was invented by David Misell of the United Kingdom in 1899, three years after the batteries used to power it were created.', 'Unofficial Holiday. No Sponsor.', '', '', '', '  ', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(207, 'Fried Shrimp Day: December 21', 'United States', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'https://www.thespruceeats.com/history-of-shrimp-1807665', '', '', 'About Fried Shrimp Day', '', '0', 'Unofficial Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(208, 'Homeless Persons\' Remembrance Day, Ntl.: December 21 ', 'United States', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', 'first day of winter ', 'www.nationalhomeless.org', '', '', 'About National Homeless Persons\' Remembrance Day', '', 'National Homeless Persons\' Remembrance Day occurs on the longest night of the year in the Northern Hemisphere. \n\nIt is a day to remember that there are more than 600 000 homeless people in the USA as of now, and that they live hard and unforgiving lives. It is a day to try and do good for the less fortunate than you and to raise awareness about their struggles.', 'National Coalition for the Homeless', 'Washington', 'DC', 'US', '2201 P St NW', '', NULL, NULL, NULL, '20037', '(202) 462.4822', 'info@nationalhomeless.org', 'General Information', 'http://www.nationalhomeless.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(209, 'Humbug Day, Ntl.: December 21', 'United States', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://www.wellcat.com/december/humbug_day.htm', '', '', 'About National Humbug Day', '', 'How do you propel Ebenezer Scrooge toward the epitome of curmudgeon? Dedicate a Christmas season holiday to him!\n\nHumbug Day is celebrated every year on December 21 and according to its creators from Wellcat.com, is dedicated to those frustrated by all the Christmas preparations and jibber-jabber. It\'s a holiday meant to help us vent our seasonal frustrations.', 'Wellcat Holidays', 'Lebanon', 'PA', 'US', '2418 Long Lane', '', NULL, NULL, NULL, '17046', ' (717) 279.0184   ', 'info@wellcat.com', 'Thomas & Ruth Roy', 'http://www.wellcat.com/Order%20Information.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(210, 'Martyrdom, Sahibzada Zorawar Singh (S)(1705): December 21', 'Worldwide', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://www.sikhiwiki.org/index.php/Main_Page', '', '', 'About the Martyrdom, Sahibzada Zorawar Singh', '', 'Martyrdom, Sahibzada Zorawar Singh marks the death of the Older Sahibzadas brother, Sahibzada Zorawar Singh. He was eight years old when he was executed for refusing to renounce his Sikh faith. His brother, at five years age, died the same way in five days later. The brothers were two of four sons born unto Guru Gobind Singh. ', 'Sikh Religious Month: See World Sikh Council for more details', 'Columbus', 'OH', 'US', 'World Sikh Council', 'PO Box 3635', NULL, NULL, NULL, '43210', '(888) 340.1702', 'contact@worldsikhcouncil.org', ' Media Relations', 'http://www.worldsikhcouncil.org/index.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(211, 'Phileas Fogg Day (1872): December 21', 'Worldwide', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'https://www.gutenberg.org/files/103/103-h/103-h.htm', '', '', 'About Phileas Fogg Day', '', '0', 'Fictional Historic Anniversary.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(212, 'Short Fiction Day, Celebrate: December 21', 'United States', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://www.nancychristie.com/focusonfiction/celebrate-short-fiction-day/', '', '', 'About Celebrate Short Fiction Day', '', 'What better way to spend the shortest day of the year than curled up in your favorite chair reading a book from beginning to end? That is exactly what Celebrate Short Fiction Day is all about. First run in 2012. ', 'Nancy Christie', 'Austintown', 'OH', 'US', 'PO Box 4505', '', NULL, NULL, NULL, '44515', '(330) 793.3675', 'nancy@nancychristie.com', 'Nancy Christie', 'http://www.nancychristie.com/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38');
INSERT INTO `events` (`id`, `name`, `states`, `start_month`, `start_day`, `start_year`, `country`, `event_address1`, `event_address2`, `status`, `start_date`, `end_month`, `end_day`, `end_year`, `end_date`, `duration`, `type`, `static_change`, `notes_not_public`, `url`, `feature_picture`, `picture_name`, `alt_text`, `estimated`, `description`, `event_champion`, `champ_city`, `champ_state`, `champ_country`, `champ_address1`, `champ_address2`, `city`, `state`, `country_code`, `zip`, `ph_num`, `email_form`, `contact_person`, `contact_link`, `physical_address`, `purchase_reserve`, `location_based`, `manager`, `event_physical_address`, `user_id`, `created_at`, `updated_at`) VALUES
(213, 'Shorts Day: December 21', 'Northern Hemisphere', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://www.shakeandfreeze.com', '', '', 'About Shorts Day', '', 'Created in 1986, Shorts Day is a day to flaunt the first day of winter on the solstice by wearing shorts to honor the shortest day of the year. Just be sure to wear a coat, if you go outside!  Have fun.', 'B. Able Inc.', 'Warrington', 'PA', 'US', '1842 Fox Run Terrace', '', NULL, NULL, NULL, '18976', '', 'kwinzz@yahoo.com', 'Jeane Quinn', 'Traditional Source', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(214, 'Summer Begins (Southern Hemisphere): December 21', 'Southern Hemisphere', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://www.australia.com/campaigns/season_04/en', '', '', 'About the Start of Summer in the Southern Hemisphere', '', 'December 21 in the southern hemisphere is the day on which summer officially begins.', 'Seasonal Occurrence, No Sponsor. See University of Queensland, School of Agriculture and Food Sciences', 'Brisbane', 'QLD ', 'AU', 'University of Queensland, School of Environmental Science', 'St Lucia', NULL, NULL, NULL, '0-4072', '(+61) 7.33.651.111 ', 'safs_hos@uq.edu.au', 'Professor Neal Menzies, Head of School ', 'http://www.uq.edu.au/agriculture/executive-staff', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(215, 'Winter Begins, Solstice (Northern): December 21', 'Northern Hemisphere', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'http://en.wikipedia.org/wiki/Winter', '', '', 'About the Start of Winter in the Northern Hemisphere', '', 'In the Northern Hemisphere, winter season starts on the winter solstice. A solstice is an occurrence when the Sun is farthest from the equator. During the winter solstice, the most southern point of the Earth points towards the sun, giving cooler temperatures in the Northern Hemisphere.', 'Seasonal Occurrence. No Sponsor. See University of Washington School of Atmospheric Sciences for topical info.', 'Seattle', 'WA', 'US', 'University of Washington School of Atmospheric Sciences', 'Ocean Sciences Building, Suite 200, Box 355355', NULL, NULL, NULL, '98195', '(206)  685.2183 ', 'steed@atmos.washington.edu', 'Richard Steed, Research Meteorologist ', ' http://coenv.washington.edu/about/contact-us/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(216, 'Yalda (IR): December 21', 'Iran', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', 'On Solstice', 'http://en.wikipedia.org/wiki/Yald%C4%81', '', '', 'About the Persian Holiday of Yalda', '', 'Yalda, Shab-e Chelleh or Shab-e Yalda could be considered equivalent to the \'Thanksgiving Day\' celebration in the Persian world, dominated by Iran but including Azerbaijan, Afghanistan, Kurdistan, Tajikistan and non-Islamic communities in Turkey.  The longest night of the year, on the winter solstice, is a time for family and friends to gather together and feast. The tradition appears to have originated in the 2nd or 3rd Century AD within the pagan communities of the region who were noting the increased celebrations by Christians moving into the area.  This was 300 years before Islam. \n\nOver the years and centuries it became part of the social fabric and in 2008 the government of Iran officially recognized Yalda on its List of National Treasures.', 'Iranian Cultural Heritage Organization', 'Tehran', '', 'IR', '', '', NULL, NULL, NULL, '', '', '', 'General Information', 'https://l.facebook.com/l.php?u=http%3A%2F%2Fichto.ir%2F&h=ATOJt7c-zswxcUcpLwiWA_OPnnuIndm0-tFudDgLmOC8NFSxAoZSu-KAXfozjMmF5vPZINdrCHnlUPPh8OmPmi1UdvDWvtSPQt7DsPUsgn7pFbVRiebBGbhJTKZB7ilcrCIkfzaSBX4TsOiI1z3VgW9f1nZkktn0H3eHswQWv4Cxql7G3wiL8nuhhP9Jba0vK1wh4VAxr3KF7jfUq1eEmFpqjKJKyQdyXWUYH7Y6AE6rbA', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(217, 'Yule: December 21', 'Worldwide', '12', '21', '2021', NULL, NULL, NULL, NULL, '2021-12-21', '12', '21', '2021', '2021-12-21', NULL, 'Daily', 'Same', '', 'https://wicca.org', '', '', 'About the Wiccan Observance of Yule', '', 'Wiccans believe the Yule or Alban Athan, occurs on the longest night of the year. The faithful believe this night marks the death of the sun god and the rebirth of the goddess of the earth.', 'Wiccan Religious Observance. See The Church & School of Wiccan on Topic. ', 'Hinton', 'WV', 'US', 'The Church and School of Wicca', 'Po Box 297', NULL, NULL, NULL, '25951', '', 'https://wicca.org/contact/', 'General Information', 'https://wicca.org/contact/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(218, 'Be a Lover of Silence Day: December 22', 'United States', '12', '22', '2021', NULL, NULL, NULL, NULL, '2021-12-22', '12', '22', '2021', '2021-12-22', NULL, 'Daily', 'Same', '', 'https://www.news8000.com/news/daily-holiday-be-a-lover-of-silence-day/676354284', '', '', 'About Be a Lover of Silence Day', '', 'As the hecticness of the holiday season comes to a climax, take some time for yourself. Set outside. Find a quiet place and simply be. Be a Lover of Silence Day is your opportunity to give yourself a mini-vacation from sound. ', 'Reverend Jane Howard Feldman', 'Upperco', 'MD', 'US', 'P.O. Box 95', ' ', NULL, NULL, NULL, '21155', '(410) 833.6912', 'earthangel4peace@aol.com', 'Reverend Jane Howard Feldman', 'http://www.earthangel4peace.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(219, 'Date-Nut Bread Day, Ntl.: December 22', 'United States', '12', '22', '2021', NULL, NULL, NULL, NULL, '2021-12-22', '12', '22', '2021', '2021-12-22', NULL, 'Daily', 'Same', '', 'http://recipes.wikia.com/wiki/Date_Nut_Bread', '', '', 'About National Date-Nut Bread Day', '', 'Date Nut Bread Day celebrates the non-yeast, cake like loaf of sweet bread first seen in the US during the early 20th century. \n\nThis is an unofficial event with no sponsor.', 'Unofficial Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(220, 'Forefather\'s Day (1620): December 22', 'United States', '12', '22', '2021', NULL, NULL, NULL, NULL, '2021-12-22', '12', '22', '2021', '2021-12-22', NULL, 'Daily', 'Same', '', 'http://en.wikipedia.org/wiki/Forefathers%27_Day', '', '', 'About National Forefather\'s Day', '', 'National Forefathers\' Day is celebrated in Plymouth, Massachusetts on December 22 and marks the anniversary of the pilgrims arrival on December 21, 1620. The date was first celebrated in 1769. \n\nWhy is it on the 22nd instead of the 21st? Somebody didn\'t count right. Up until 1752, the Julian Calendar was used in America to mark time. After 1752, the Gregorian was used. When someone decided to figure out the date in the Gregorian calendar, they miscounted the difference and established the day on December 22 instead of December 21.  Oops! That oops continues to this day. ', 'Old Colony Club', 'Plymouth', 'MA', 'US', '25 Court Street', '', NULL, NULL, NULL, '02360', '(508) 746.0110', ' ', 'Media Relations', 'http://www.oldcolonyclub.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(221, 'Sankashti Chaturthi (H): December 22', 'Worldwide', '12', '22', '2021', NULL, NULL, NULL, NULL, '2021-12-22', '12', '22', '2021', '2021-12-22', NULL, 'Daily', 'Changes', '', 'http://en.wikipedia.org/wiki/Sankashti_Chaturthi', '', '', 'About the Hindu Day of Sankasta Chaturthi', '', 'In Hindu faith, Chaturthi is dedicated to Lord Ganesha. Sankashti Chaturthi (Sankata Chaturthi) is observed on the fourth day of Krishna Paksha (dark lunar phase or the waning phase of the moon). \n\nIf this Chaturthi falls on a Tuesday, it is called Angarki Sankashti Chaturthi.\n\nDevotees observe strict fasting during daylight until darshan (sight of the moon). The breaking of the fast is preceded by prayers to Lord Ganesha.\n\nPLEASE NOTE: \n\nWe use the Indian Civil Calendar, which is the official holiday calendar in India, the largest Hindu nation.  The Hindu faith has many calendars, each specific to different regions and tribes with dates and celebrations marked by differing positions of the sun, moon and stars. Names of months and holidays, as well as the corresponding dates in the Gregorian Calendar, vary widely from one calendar to the next. Use our dates as a baseline. Find out which of the dozens of Hindu calendars is used in the region you live or plan to visit if you are looking to attend or witness a specific observance. ', 'Hindu Religious Holiday. See The Hindu Temple Society of North America for more information', ' Flushing', 'NY', 'US', 'New York Ganesh Temple', ' 45-57 Bowne Street', NULL, NULL, NULL, '11355', ' (718) 460.8484   ', 'https://nyganeshtemple.org/', 'Media Relations', 'https://nyganeshtemple.org/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(222, 'Family Roots Day: December 23', 'United States', '12', '23', '2021', NULL, NULL, NULL, NULL, '2021-12-23', '12', '23', '2021', '2021-12-23', NULL, 'Daily', 'Same', '', 'https://www.familytreemagazine.com/articles/news-blogs/genealogy_insider/celebrating-national-roots-day/', '', '', 'About National Family Roots Day', '', 'In the days preceding Christmas, families begin to gather.  Stories are swapped, legends made and the inevitable questions from children about where they came from come up.  \n\nFamily Roots Day, an initiative of the Mormon faith, is set aside each year to explore each families unique genealogy.  Take this opportunity to map your own family tree and help your children trace their own roots.', 'Family Search, Church of Jesus Christ of Latter Day Saints', 'Salt Lake City', 'UT', 'US', 'Family History Library', '35 N West Temple', NULL, NULL, NULL, '84150', '(801) 240.2584', ' ', 'Media Relations', 'https://familysearch.org/locations/library_hours', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(223, 'Festivus: December 23', 'Worldwide', '12', '23', '2021', NULL, NULL, NULL, NULL, '2021-12-23', '12', '23', '2021', '2021-12-23', NULL, 'Daily', 'Same', '', 'http://www.youtube.com/watch?v=dS7-jcsB_WQ', '', '', 'About the National Celebration of Festivus', '', '0', 'Unofficial Event. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(224, 'Human Light Celebration: December 23', 'Worldwide', '12', '23', '2021', NULL, NULL, NULL, NULL, '2021-12-23', '12', '23', '2021', '2021-12-23', NULL, 'Daily', 'Same', '', 'https://www.npr.org/templates/story/story.php?storyId=98627236', '', '', 'About Humanlight Celebration', '', 'Created in 2001 by the New Jersey Humanist Network as a response and alternative to the Christian celebration of Christmas and Jewish observance of Hanukah, Humanlight Celebration promotes humanist values of tolerance, compassion, empathy, honesty, free inquiry, reason and rationality. Observed by atheists and humanists annually. ', 'American Humanist Association', 'Washington', 'DC', 'US', '1821 Jefferson Pl. NW.', '', NULL, NULL, NULL, '20036', '(202) 238.9088', '', 'General Information', 'https://americanhumanist.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(225, 'Pfeffernusse Cookies Day: December 23', 'United States', '12', '23', '2021', NULL, NULL, NULL, NULL, '2021-12-23', '12', '23', '2021', '2021-12-23', NULL, 'Daily', 'Same', '', 'https://en.wikipedia.org/wiki/Pfeffern%C3%BCsse', '', '', 'About Pfeffernusse Cookies Day', '', '0', 'Unofficial Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(226, 'Radishes, Oaxaca Feast of (MX-OA): December 23', 'Mexico', '12', '23', '2021', NULL, NULL, NULL, NULL, '2021-12-23', '12', '23', '2021', '2021-12-23', NULL, 'Daily', 'Same', '', 'http://www.bbc.com/travel/story/20141217-mexicos-whimsical-night-of-the-radishes', '', '', 'About the Feast of the Radishes in Oaxaca, Mexico', '', 'Described as whimsical and fascinating, each year the city of Oaxaca (Wa-Saw-Kha) in Mexico hosts the Night (or Feast) of the Radishes, Noche de Rabanos. \n\nThe tradition began over 100 years ago when the merchants of the town square were looking for ways to draw worshippers exiting Christmas season services to their stores. Radishes were at peak harvest, so they started carving them into little people and animals. The people loved them and purchased them in force, using them as decoration for holiday festivities. In 1897, the major made this an official festival on December 23rd each year, the day before Christmas Eve.\n\nToday expert and novice carvers alike compete for the best carved radishes.  These are not your common small kumquat size radishes found in the produce section. Oaxaca grows a mega radish that can weigh up to 6.5 pounds (3kg) and be up to 20 inches in length (50 cm). The festival draws people from all over the world and includes a parade, music, food and fireworks. It\'s one of the most unique Christmas celebrations in the world. ', 'City of Oaxaca', 'Oaxaca - Centro', 'OAX', 'MX', 'Tourist Bureau', 'Av. Benito Juarez 703', NULL, NULL, NULL, '', '(+52)(951) 502.1200', '', 'General Information', 'http://www.oaxacaevents.com/cms/services/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(227, 'Re-gifting (White Elephant) Day: December 23', 'United States', '12', '23', '2021', NULL, NULL, NULL, NULL, '2021-12-23', '12', '23', '2021', '2021-12-23', NULL, 'Daily', 'Changes', 'Thurs Before Christmas', 'http://www.regiftable.com', '', '', 'About Re-gifting (White Elephant) Day', '', '0', 'Money Management International', 'Sugar Land', 'TX', 'US', '14141 Southwest Freeway ', 'Suite 1000 ', NULL, NULL, NULL, '77478', '(713) 394.3000', 'domains@moneymanagement.org', 'General Information', 'https://www.moneymanagement.org/About-Us/Contact-Us/Media-Contact.aspx', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(228, 'Christmas Eve (C): December 24', 'Worldwide', '12', '24', '2021', NULL, NULL, NULL, NULL, '2021-12-24', '12', '24', '2021', '2021-12-24', NULL, 'Daily', 'Same', '', 'http://www.christmas-celebrations.com/christmas_eve.htm', '', '', 'About the Christian Celebration of Christmas Eve', '', '0', 'Christian Religious Event: See the Vatican for Details', 'Le Grand-Saconnex ', ' ', 'CH', 'World Council of Churches', 'Ecumenical Centre, 1 Route des Morillons', NULL, NULL, NULL, '1218', '(+41) 79 507.6363', 'mej@wcc-coe.org', 'Marianne Ejdersten, Communications Director ', 'http://www.oikoumene.org/en/press-centre', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(229, 'Eggnog Day, Ntl.: December 24', 'United States', '12', '24', '2021', NULL, NULL, NULL, NULL, '2021-12-24', '12', '24', '2021', '2021-12-24', NULL, 'Daily', 'Same', '', 'http://www.siouxlandmatters.com/news/local-news/christmas-eve-is-also-national-egg-nog-day', '4317_Egg_nog_DayF.jpg', '4317_Egg_nog_DayE.jpg', 'About national Eggnog Day', '', 'Christmas Eve is also National Eggnog Day, but what exactly makes up the milky concoction anyway? \n\nThe Merriam-Webster Dictionary says eggnog is a drink made of eggs, sugar, milk or cream and often includes liquor. Eggnog has been linked to the holidays since the 1700\'s when it was first brought across the ocean to North America. \n\nEnjoy this day by making your own recipe for Eggnog. ', 'Unofficial Event. No Sponsor. See Berkeley Farms on topic.', 'Dallas', 'TX', 'US', 'Berkeley Farms, Suiza Foods Corp', '2515 McKinney Ave Ste. 1200', NULL, NULL, NULL, '75201', '(510) 265.8600', 'http://www.berkeleyfarms.com/about/contactUs', 'Derek Allbee, General Manager', 'http://www.berkeleyfarms.com/about/contactUs', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(230, 'Independence Day, (LY)(1951): December 24', 'Libya', '12', '24', '2021', NULL, NULL, NULL, NULL, '2021-12-24', '12', '24', '2021', '2021-12-24', NULL, 'Daily', 'Same', '', 'https://www.ly.undp.org', '', '', 'About Independence Day in Libya', '', 'Independence Day in Libya marks the anniversary of December 24, 1951, the day the nation gained independence from Italy. This is a national holiday.', 'Historical Anniversary. National Holiday in Italy.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(231, 'King\'s College Christmas Carols & Festival of Nine Lessons (UK): December 24', 'United Kingdom', '12', '24', '2021', NULL, NULL, NULL, NULL, '2021-12-24', '12', '24', '2021', '2021-12-24', NULL, 'Daily', 'Same', '', 'http://www.kings.cam.ac.uk', '', '', 'About King\'s College Christmas Carols & Festival of Nine Lessons event and live broadcast.', '', 'Held annually at Cambridge\'s Kings College in England, the Kings College Christmas Carols & Festival of Nine Lessons has been a Christmas Eve tradition since 1918 and a live broadcast since 1928. Each year the carols and readings change with millions of people around the world tuning in via radio, internet and television. ', 'King\'s College\n', 'Cambridge', '', 'UK', 'King\'s Parade', '', NULL, NULL, NULL, 'CB2 1ST', '(+44)(0)12 23.33.11.00', 'info@kings.cam.ac.uk', 'General Information', 'http://www.kings.cam.ac.uk/contact/index.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(232, 'Stock Exchange Holiday (NYSE Closed): December 24', 'United States', '12', '24', '2021', NULL, NULL, NULL, NULL, '2021-12-24', '12', '24', '2021', '2021-12-24', NULL, 'Daily', 'Changes', '', 'https://www.nyse.com/markets/hours-calendars', '', '', 'About the New York Stock Exchange Holiday', '', 'Stock Market Holidays are days in which the stock exchange is closed and no trading occurs on this day. ', 'Intercontinental Exchange', 'Atlanta', 'GA', 'US', '5660 New Northside Drive NW, 3rd Floor', '', NULL, NULL, NULL, '', '(770) 857.4700 ', '', 'General Information', 'https://www.intercontinentalexchange.com/about/offices', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(233, 'A\'phabet Day: December 25', 'United States', '12', '25', '2021', NULL, NULL, NULL, NULL, '2021-12-25', '12', '25', '2021', '2021-12-25', NULL, 'Daily', 'Same', '', 'https://msumsnhl.wordpress.com/2015/12/25/happy-aphabet-day/', '', '', 'About A\'phabet Day', '', 'A\'phabet Day occurs on Christmas and can provide a little amusement for the family.  Basically, try to make it through a conversation without using the letter \'L\'.  It\'s a lot harder than it sounds. Just writing this, we used eight. This event was created by Robert Birch who passed away July 25, 2005. \n\nIf you love playing with words, his obituary is masterful: http://users.erols.com/jbirch/rlb/memorial.htm', 'Created by Robert Birch. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(234, 'Christmas Day (C): December 25', 'Worldwide', '12', '25', '2021', NULL, NULL, NULL, NULL, '2021-12-25', '12', '25', '2021', '2021-12-25', NULL, 'Daily', 'Same', '', 'http://www.newadvent.org/cathen/03724b.htm', '', '', 'About the Christian Holiday of Christmas', '', '0', 'Christian Religious Event: See the WCC on topic.  ', 'Le Grand-Saconnex ', ' ', 'CH', 'World Council of Churches', 'Ecumenical Centre, 1 Route des Morillons', NULL, NULL, NULL, '1218', '(+41) 79 507.6363', 'mej@wcc-coe.org', 'Marianne Ejdersten, Communications Director ', 'http://www.oikoumene.org/en/press-centre', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(235, 'Christmastide: December 25-January 5, 2021', 'Worldwide', '12', '25', '2021', NULL, NULL, NULL, NULL, '2021-12-25', '1', '5', '2021', '2021-01-05', NULL, 'Weekly', 'Same', '', 'www.fisheaters.com/customschristmas1.html', '', '', 'About the Christian Celebration of Christmastide', '', '0', 'Christian Religious Event: See the WCC on topic.  ', 'Le Grand-Saconnex ', ' ', 'CH', 'World Council of Churches', 'Ecumenical Centre, 1 Route des Morillons', NULL, NULL, NULL, '1218', '(+41) 79 507.6363', 'mej@wcc-coe.org', 'Marianne Ejdersten, Communications Director ', 'http://www.oikoumene.org/en/press-centre', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(236, 'Constitution Day, (TW)(1946): December 25', 'Taiwan', '12', '25', '2021', NULL, NULL, NULL, NULL, '2021-12-25', '12', '25', '2021', '2021-12-25', NULL, 'Daily', 'Same', '', 'https://english.president.gov.tw/page/93', '', '', 'About Constitution Day in Taiwan', '', 'Constitution Day in Taiwan marks the anniversary of December 25, 1946, the day the nation adopted its Constitution. This is a national holiday.', 'Historical Anniversary. National Holiday in Taiwan.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(237, 'Pumpkin Pie Day, Ntl.: December 25', 'United States', '12', '25', '2021', NULL, NULL, NULL, NULL, '2021-12-25', '12', '25', '2021', '2021-12-25', NULL, 'Daily', 'Same', '', 'http://cookingtheamazing.blogspot.com/2011/11/pumpkin-pie.html', '', '', 'About National Pumpkin Pie Day', '', 'Pumpkin pie is the traditional dessert in the United States for Thanksgiving and Christmas.  Therefore someone decided that Christmas Day should also be pumpkin pie day.  \n\nThis is an unofficial holiday with no sponsor.', 'Unofficial Event. No Sponsor. See American Pie Council for Info.', 'Lake Forest', 'IL', 'US', 'American Pie Council', 'P.O. Box 368 ', NULL, NULL, NULL, '60045', '(407) 332.5212', 'mary@deatrickpr.com', 'Mary Deatrick, Media Relations', 'http://www.piecouncil.org/Press/PressKit', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(238, 'Boxing Day (UK/AU/ZA/CA): December 26', 'United Kingdom, Canada, Australia, South Africa', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'http://www.time.com/time/world/article/0,8599,1868711,00.html', '', '', 'About National Boxing Day in the United Kingdom, Australia, South Africa and Canada', '', 'Boxing Day in the Commonwealth countries including the United Kingdom, Ireland, Australia, Canada and South Africa is a day of thanks and sharing. \n\nBeginning during the Victorian era, the day after Christmas was given off to servants in England. It was on this day the employer would present servants with a box of gifts to take home to their families. It is also the day to tip those whom have provided services over the year such as doormen, delivery people and salon workers.  Traditionally, Boxing Day is the second day of Christmastide (The 12 days from Christmas to Epiphany). In the aforementioned countries, Boxing Day is a bank holiday.\n\nThere is also a legend tying Boxing Day into Christmas originating in the 10th century with the Duke of Bohemia, Wenceslas (The same as the Christmas song). Wenceslas, the legend goes, once helped a poor man passing through by giving him food and wine in boxes, prior to Franzia, of course!', 'Official Public Event Commonwealth Nations', 'London', ' ', 'UK', 'UK Department for Business, Innovation and Skills', '1 Victoria Street ', NULL, NULL, NULL, 'SW1H 0ET', '(+44) (0)20.72.15.3234', 'enquiries@bis.gsi.gov.uk', 'General Information', 'https://www.gov.uk/government/organisations/department-for-business-innovation-skills', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(239, 'Candy Cane Day, Ntl.: December 26', 'United States', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'http://inventors.about.com/od/foodrelatedinventions/a/candy_canes.htm', '', '', 'About National Candy Cane Day', '', '0', 'Unofficial Event. No Sponsor. See Cologne Cathedral for history', '0', ' ', 'DE', 'Cologne Cathedral', 'Domkloster 4', NULL, NULL, NULL, '50667', '(+49)(221) 92.58.47.30', 'info@koelntourismus.de', 'Visitor Relations', 'http://www.koelner-dom.de/index.php', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(240, 'Goodwill, Day of (ZA)(1994): December 26', 'South Africa', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'http://www.capetownmagazine.com/public-holiday-day-of-goodwill', '', '', 'About the Day of Goodwill in South Africa', '', '0', 'South African National Holiday', 'Pretoria', '', 'ZA', 'South African Department of Tourism', '17 Trevenna Street, Tourism House', NULL, NULL, NULL, '', '(+27)(0) 12 444.6000', ' ', 'General Information', ' https://www.tourism.gov.za/Pages/ContactUs.aspx', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(241, 'Independence Day, (SI)(1990): December 26', 'Slovenia', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'https://www.sloveniaestates.com/life-in-slovenia/slovenia-s-history', '', '', 'About Independence Day in Slovenia', '', 'Independence Day in Slovenia marks the anniversary of December 26, 1990, the day the nation announced its separation from the Yugoslav Union. This is a national holiday.', 'Historical Anniversary. National Holiday in Slovenia', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(242, 'Junkanoo (BS): December 26', 'Bahamas', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'http://www.bahamas.co.uk/about/junkanoo/what-is-junkanoo', '', '', 'About Junkanoo in the Bahamas', '', 'Lucky you if you are privileged to spend Christmas in the Bahamas because the day after, December 26 is the Junkanoo Festival. Think of rolling Christmas, Mardi Gras and African celebrations into one big, musical colorful celebration. That\'s Junkanoo!', 'Bahamas Tourist Office', 'London', '', 'UK', '10 Chesterfield Street', '', NULL, NULL, NULL, 'W1J 5JL', '(+44)(0)20 7355.0800', 'info@bahamas.co.uk', 'General Information', 'http://www.bahamas.co.uk/contact-us/uk', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(243, 'Kwanzaa (1966): December 26 - January 1, 2021', 'Worldwide', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '1', '1', '2021', '2021-01-01', NULL, 'Weekly', 'Same', '', 'http://www.officialkwanzaawebsite.org', '', '', 'About the African Celebration of Kwanzaa', '', '0', 'African American Cultural Center', 'Los Angeles', 'CA', 'US', '3018 West 48th Street', '', NULL, NULL, NULL, '90043-1335', '(323) 299.6124', 'info@officialkwanzaawebsite.org', 'General Information', 'http://www.officialkwanzaawebsite.org/index.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(244, 'Martyrdom Sahibzada Fateh Singh  (S)(1705): December 26', 'Worldwide', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'http://www.sikhiwiki.org/index.php/Main_Page', '', '', 'About the Martyrdom Sahibzada Fateh Singh ', '', 'Martyrdom Sahibzada Fateh Singh marks the death of the Younger Sahibzadas brother, Sahibzada Fateh Singh. He was five years old when he was executed for refusing to renounce his Sikh faith. His brother, just eight, died the same way in five days prior.  The brothers were two of four sons born unto Guru Gobind Singh. ', 'Sikh Religious Month: See World Sikh Council for more details', 'Columbus', 'OH', 'US', 'World Sikh Council', 'PO Box 3635', NULL, NULL, NULL, '43210', '(888) 340.1702', 'contact@worldsikhcouncil.org', ' Media Relations', 'http://www.worldsikhcouncil.org/index.html', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(245, 'Mummer\'s Day (C)(IE): December 26', 'Ireland', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'http://en.wikipedia.org/wiki/St._Stephen%27s_Day', '', '', 'About Mummer\'s Day in Ireland', '', '0', 'Christian Religious Holiday: See the Vatican for Details. Irish Tradition.', 'Vatican City', '', 'IT', 'The Holy See', '', NULL, NULL, NULL, '', '(+39) 06.6982', 'info@news.va', 'Media Relations', 'http://www.news.va/en/source/press-office', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(246, 'Proclamation Day (AU)(1836): December 26', 'Australia', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'http://foundingdocs.gov.au/scan-sid-981.html', '', '', 'About National Proclamation Day in Australia', '', 'Proclamation Day in Australia celebrates the establishment of Australia as a British province. The proclamation was made by Captain John Hindmarsh beside The Old Gum Tree on December 28, 1836. \n\nToday, Proclamation Day is celebrated on the first working day after Christmas and can fall on December 26 or 27, depending upon year.', 'Australian Historical Date. See Department of Human Services', 'Canberra', 'ACT', 'AU', 'Minister for the Department of Human Services', 'Suite M1.52\nParliament House', NULL, NULL, NULL, '2600', '(+61)(0)4 11.670.958', 'media@humanservices.gov.au', 'Media Relations', 'http://www.mhs.gov.au/contact', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(247, 'Thank You Note Day, Ntl.: December 26', 'United States', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'http://www.npr.org/2010/12/26/132263637/perfect-thank-you-notes-heartfelt-and-handwritten', '', '', 'About National Thank You Note Day', '', 'National Thank You Note Day is the day after Christmas and designed to provide an opportunity to follow etiquette and thank people for the gifts you received.\n\nThis a tradition. ', 'Traditional Event. No Sponsor. ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(248, 'Whiner\'s Day, Ntl.: December 26', 'United States', '12', '26', '2021', NULL, NULL, NULL, NULL, '2021-12-26', '12', '26', '2021', '2021-12-26', NULL, 'Daily', 'Same', '', 'www.nationalwhinersday.com', '', '', 'About National Whiner\'s Day', '', 'National Whiner\'s Day was set aside in 1986 as a day for those who didn\'t get what they wanted for the holidays to whine about it.  Founded by Kevin C Zaborney, each year he publishes the that year\'s most prolific whiner, identified through nomination. Nomination close December 15 each year.  Past Whiner winners have been Toblerone and Lindsey Lohan.  ', 'Kevin Zaborney', 'Caro', 'MI', 'US', '2023 Victory Rd. ', '', NULL, NULL, NULL, '48723', '(989) 673.6696', 'kevin@nationalhuggingday.com', 'Kevin Zaborney', 'http://www.nationalhuggingday.com/about_us', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(249, 'Feast of St. Stephen\'s Day (C) (Orthodox): December 27', 'Worldwide', '12', '27', '2021', NULL, NULL, NULL, NULL, '2021-12-27', '12', '27', '2021', '2021-12-27', NULL, 'Daily', 'Same', '', 'http://en.wikipedia.org/wiki/St._Stephen%27s_Day', '', '', 'About the Christian Orthodox Feast of St. Stephen\'s Day', '', 'Saint Stephen is one of the most venerated Christian saints, being considered the very first martyr who died for Jesus Christ. He was one of Jesus\' most ardent followers, often described as a peaceful, calm and devoted man. \n\nDuring his lifetime, St. Stephen drew thousands of people to Christianity. Due to the difference in calendars from the 1700s, Orthodox Christian countries celebrate a day later than Roman Catholic and Protestant Christians. In a number of Christian countries today, his patron day is also considered a public holiday. St. Stephen is the patron saint of Serbia.\n\nSt. Stephen\'s Day is a popular day for visiting family members and gathering in large groups.', 'Christian Religious Holiday: See the Vatican for Details. Irish Tradition.', 'Vatican City', '', 'IT', 'The Holy See', '', NULL, NULL, NULL, '', '(+39) 06.6982', 'info@news.va', 'Media Relations', 'http://www.news.va/en/source/press-office', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(250, 'Fruitcake Day, Ntl.: December 27', 'United States', '12', '27', '2021', NULL, NULL, NULL, NULL, '2021-12-27', '12', '27', '2021', '2021-12-27', NULL, 'Daily', 'Same', '', 'https://www.usatoday.com/story/news/nation-now/2016/12/27/yikes-national-fruitcake-day-love-hate-christmas-holiday-cakes/95878062/', '', '', 'About National Fruitcake Day', '', 'Rejoice fruitcake lovers, this is your day! \n\nBesides the fact it is extra delicious and not as unhealthy as a \'typical\' cake because it contains fruit inside, as the name suggests, fruitcakes have been around for a very, very long time. \n\nIn some ancient cultures it was a custom to burry one\'s loved ones with fruitcake, but to best celebrate this event you should most definitely treat yourself with some delicious fruitcake!', 'Unofficial Event. No Sponsor. See Claxton Bakery for topical info.', 'Claxton', 'GA', 'US', 'Claxton Bakery, Inc.', '203 West Main Street', NULL, NULL, NULL, '30417', '(800) 841.4211', 'https://www.claxtonfruitcake.com/contact-form', 'Media Relations                                ', 'https://www.claxtonfruitcake.com/contact-form', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(251, 'Make Cut Out Snowflakes Day: December 27', 'United States', '12', '27', '2021', NULL, NULL, NULL, NULL, '2021-12-27', '12', '27', '2021', '2021-12-27', NULL, 'Daily', 'Same', '', 'http://www.ehow.com/about_4596050_paper-snowflakes.html', '', '', 'About Make Cut Out Snowflakes Day', '', 'Make Cut-out Snowflakes Day takes advantage of the down days between Christmas and New Years by providing an indoor activity. Simply give your kids a huge pile of white paper, some scissors and make some cut-out snowflakes with them! Paper snowflakes are one of the best decoration for the home during the winter season and holidays, and fortunately for everyone - they are extremely easy and fun to make!\n\nThis is an unofficial event with no sponsor.', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(252, 'Moon-3rd Quarter: December 27', 'Worldwide', '12', '27', '2021', NULL, NULL, NULL, NULL, '2021-12-27', '12', '27', '2021', '2021-12-27', NULL, 'Daily', 'Changes', '', 'http://lunaf.com/lunar-calendar/2019', '5483_Moon_third_QuarterF.jpg', '5483_Moon_third_QuarterE.jpg', 'About the 3rd Quarter Moon', '', 'Today is the 3rd Quarter of the Moon, meaning it is half way between the Full Moon and New Moon. ', 'Natural Event. No Sponsor. See American Astronomical Society for info. ', 'Washington', 'DC', 'US', 'American Astronomical Society', '2000 Florida Ave., NW, Suite 300', NULL, NULL, NULL, '20009-1231', '(202) 328.2010', 'aas@aas.org', 'Media Relations', 'https://aas.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(253, 'Proclamation Day (AU)(Observed): December 27', 'Australia', '12', '27', '2021', NULL, NULL, NULL, NULL, '2021-12-27', '12', '27', '2021', '2021-12-27', NULL, 'Daily', 'Changes', '', 'http://foundingdocs.gov.au/scan-sid-981.html', '', '', 'About National Proclamation Day Observance in Australia', '', 'When this day falls on a weekend, the nearest Monday is the national holiday. Proclamation Day in Australia celebrates the establishment of Australia as a British province. The proclamation was made by Captain John Hindmarsh beside The Old Gum Tree on December 28, 1836. \n\nToday, Proclamation Day is celebrated on the first working day after Christmas and can fall on December 26 or 27, depending upon year.', 'Australian Historical Date. See Department of Human Services', 'Canberra', 'ACT', 'AU', 'Minister for the Department of Human Services', 'Suite M1.52\nParliament House', NULL, NULL, NULL, '2600', '(+61)(0)4 11.670.958', 'media@humanservices.gov.au', 'Media Relations', 'http://www.mhs.gov.au/contact', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(254, 'Zoo, Ntl. Day to Visit: December 27', 'United States', '12', '27', '2021', NULL, NULL, NULL, NULL, '2021-12-27', '12', '27', '2021', '2021-12-27', NULL, 'Daily', 'Same', '', 'http://blog.library.si.edu/2009/12/visit-the-zoo-daydec-27th/#.Ufca7FMd5Lg', '', '', 'About National Day to Visit the Zoo', '', 'December 27 in the U.S. is the National Day to Visit the Zoo. It\'s the third day of Christmas, when the family holidays are still ongoing, but the primary celebration has passed. By this point the kids are getting restless and though the weather may be a bit chilly, most zoos have discounts and specials going on for this day to entice you to get out of the house and spend some quality time together. \n\nThis is an unofficial event with no specific sponsor. However, many of the zoos around the country do hold special events on this day. Check with your zoo to see if it is doing anything special for National Day to Visit the Zoo.', 'Unofficial Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(255, 'Card Playing Day: December 28', 'Worldwide', '12', '28', '2021', NULL, NULL, NULL, NULL, '2021-12-28', '12', '28', '2021', '2021-12-28', NULL, 'Daily', 'Same', '', 'http://i-p-c-s.org/history.html', '', '', 'About Card Playing Day', '', 'Card Playing Day is celebrated in the U.S. each year. \n\nOrganized by several different groups including the International Playing-Card Society, this is a day to honor and celebrate one of the most - if not most - prominent form of entertainment throughout human history - playing cards! \n\nCommencing in the late 14th century, card playing has been an integral part of every European culture.', 'International Playing Card Society', 'Somerset', ' ', 'UK', ' ', ' ', NULL, NULL, NULL, ' ', ' ', 'secretary@i-p-c-s.org ', 'Ann Smith, Secretary', 'http://www.i-p-c-s.org', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(256, 'Childermas (C): December 28', 'Worldwide', '12', '28', '2021', NULL, NULL, NULL, NULL, '2021-12-28', '12', '28', '2021', '2021-12-28', NULL, 'Daily', 'Same', '', 'http://www.biblearchaeology.org/post/2009/12/08/The-Slaughter-of-the-Innocents-Historical-Fact-or-Legendary-Fiction.aspx#Article', '', '', 'About Childermas', '', 'It is believed, and told through the Gospels, that King Herod ordered the killing of all newborn to two year old male babies in Bethlehem in an attempt destroy Jesus Christ. Called the Slaughter of Innocents, it is believed up to 20 children lost their lives, though there is no mention of it in secular historical records of the time. Childermas is the day of remembrance for this action. ', 'Christian Observance. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(257, 'Chocolate Candy Day: December 28', 'United States', '12', '28', '2021', NULL, NULL, NULL, NULL, '2021-12-28', '12', '28', '2021', '2021-12-28', NULL, 'Daily', 'Same', '', 'https://rapidswholesale.com/learn-about/tag/national-chocolate-candy-day.html', '', '', 'About Chocolate Candy Day', '', '0', 'Unofficial Event. No Sponsor.  See  World Cocoa Foundation for info', 'Washington', 'DC', 'US', 'World Cocoa Foundation ', '1411 K St NW #500 ', NULL, NULL, NULL, '20005', '(202) 737.7870 ', 'Jackie.Marks@worldcocoa.org ', 'Jackie Marks, Communications & Marketing Manager ', 'http://www.worldcocoafoundation.org/about-wcf/contact/ ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(258, 'Pledge of Allegiance Day (1945): December 28', 'United States', '12', '28', '2021', NULL, NULL, NULL, NULL, '2021-12-28', '12', '28', '2021', '2021-12-28', NULL, 'Daily', 'Same', '', 'http://www.freerepublic.com/focus/f-news/2416700/posts', '', '', 'About National Pledge of Allegiance Day', '', '0', 'Historical Anniversary: U.S. General Services Administration', 'Washington', 'DC', 'US', 'Office of Citizen Services and Innovative Technologies', '1800 F Street, NW', NULL, NULL, NULL, '20405', '(800) 333.4636', 'http://answers.usa.gov/system/templates/selfservice/USAGov/#!portal/1012/email_us', 'Citizen Services', 'http://www.usa.gov/Contact-Us.shtml', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(259, 'Pepper Pot Day (1777): December 29', 'United States', '12', '29', '2021', NULL, NULL, NULL, NULL, '2021-12-29', '12', '29', '2021', '2021-12-29', NULL, 'Daily', 'Same', '', 'https://www.theguardian.com/lifeandstyle/2011/dec/29/philadelphia-pepper-pot-soup-revolutionary-war', '', '', 'About Pepper Pot Day', '', 'The origins of the Pepper Pot Day and of the pepper pot itself, go to the Revolutionary War. As the American army was camped at Valley Forge for ten days, on this night, an especially harsh winter night, George Washington asked the army\'s chef to cook a meal that would boost the soldiers\' morale and warm them up. \n\nThe soup the chef came up with on December 29, 1777 was the pepper pot soup, also known as Philadelphia Pepper Pot Soup. It was so well received by the soldiers that it was called \"the soup that won the war\".', 'Historical Anniversary. See Valley Forge National Historical Park for topical information', 'King of Prussia', 'PA', 'US', 'Valley Forge National Historical Park ', '1400 North Outer Line Drive', NULL, NULL, NULL, '19406', '(610) 342.5182', 'https://www.nps.gov/common/utilities/sendmail/sendemail.cfm?o=5D84DDB4A2C0BAAC91A91AA1ED12A5A9439352AF52A69FD15810B8&r=/vafo/contacts.htm', 'Media Relations', 'https://www.nps.gov/vafo/contacts.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(260, 'Tick Tock Day: December 29', 'United States', '12', '29', '2021', NULL, NULL, NULL, NULL, '2021-12-29', '12', '29', '2021', '2021-12-29', NULL, 'Daily', 'Same', '', 'http://www.wellcat.com/winter.htm', '', '', 'About Tick Tock Day', '', '0', 'Wellcat Holidays', 'Lebanon', 'PA', 'US', '2418 Long Lane', '', NULL, NULL, NULL, '17046', ' (717) 279.0184   ', 'info@wellcat.com', 'Thomas & Ruth Roy', 'http://www.wellcat.com/Order%20Information.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(261, 'Bacon Day, Ntl.: December 30', 'United States', '12', '30', '2021', NULL, NULL, NULL, NULL, '2021-12-30', '12', '30', '2021', '2021-12-30', NULL, 'Daily', 'Same', '', 'http://www.kraftrecipes.com/tips-ideas/holiday-list-ideas/recipes-with-bacon-for-national-bacon-day.aspx', '', '', 'About National Bacon Day', '', 'It\'s the end of the year and the countdown to the New Year\'s Diet Resolution.  Time to satiate all those cravings, ergo National Bacon Day.\n\nLike so many great things, from sunglasses to pasta, bacon originated in China around 1500BC. By salting pork, the Chinese were able to preserve it during hot months. The same technique made its way to Europe and eventually America. Bacon is considered an effective hangover food (ever notice you seem to crave fatty foods when hungover?) and the choline found in bacon is said to help in fetal brain development.\n\nPS: For those of you on Halal, Kosher or Vegan diets, nobody said your bacon couldn\'t be turkey, beef or plant based. \n\nAlso check out the Los Angeles Time\'s 18 ways to enjoy bacon (including a bacon martini, bacon-bourbon-pumpkin pie and salads): \n\nhttp://www.latimes.com/food/la-dd-recipes-for-bacon-lovers-from-the-la-times-test-kitchen-20140829-photogallery.html\n\nOr Weber\'s favorite bacon grill recipes.\nhttps://www.weber.com/US/en/blog/grilling-inspiration/six-recipes-to-celebrate-national-bacon-lovers-day/weber-29555.html\n\nThis is an unofficial event with no sponsor. ', 'Unofficial Event. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(262, 'Bicarbonate of Soda Day, Ntl.: December 30', 'United States', '12', '30', '2021', NULL, NULL, NULL, NULL, '2021-12-30', '12', '30', '2021', '2021-12-30', NULL, 'Daily', 'Same', '', 'http://wiki.answers.com/Q/What_is_the_origin_of_baking_soda', '', '', 'About National Bicarbonate of Soda Day', '', '0', 'Unofficial Event. No Sponsor. See Church & Dwight Co., Inc. for ideas. ', 'Princeton', 'NJ', 'US', 'Church & Dwight Co., Inc.', '469 N. Harrison St.', NULL, NULL, NULL, '08540', '(800) 524.1328', 'http://www.armandhammer.com/ContactUs.aspx?ContactTypeId=11', 'Consumer Relations', 'http://www.armandhammer.com/ContactUs.aspx', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(263, 'Falling Needles Family Fest: December 30', 'United States', '12', '30', '2021', NULL, NULL, NULL, NULL, '2021-12-30', '12', '30', '2021', '2021-12-30', NULL, 'Daily', 'Same', '', 'http://www.wellcat.com/december/falling_needles_family_fest.htm', '', '', 'About National Falling Needles Family Fest', '', '0', 'Wellcat Holidays', 'Lebanon', 'PA', 'US', '2418 Long Lane', '', NULL, NULL, NULL, '17046', ' (717) 279.0184   ', 'info@wellcat.com', 'Thomas & Ruth Roy', 'http://www.wellcat.com/Order%20Information.htm', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(264, 'Festival of Enormous Changes at the Last Minute: December 30', 'United States', '12', '30', '2021', NULL, NULL, NULL, NULL, '2021-12-30', '12', '30', '2021', '2021-12-30', NULL, 'Daily', 'Same', '', 'http://www.sun-sentinel.com/news/custom/offbeat/sfl-wacky-holidays-photos-007,0,6341289.photo', '', '', 'About the Festival of Enormous Changes at the Last Minute', '', 'Two days before the beginning of the new calendar year, the Festival of Enormous Changes at the Last Minute is observed. The symbolism derives from the idea that we all vow or make New Year\'s Resolutions at the beginning of each year, and, more often or not, some of our goals are not met. \n\nThis day was invented to give the extra incentive to those who have not reached all their goals during the year and to inspire them to go and do something about it before the year ends.', 'Unofficial Event. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(265, 'Rizal Day, (PH)(1896): December 30', 'Philippines', '12', '30', '2021', NULL, NULL, NULL, NULL, '2021-12-30', '12', '30', '2021', '2021-12-30', NULL, 'Daily', 'Same', '', 'https://www.loc.gov/rr/hispanic/1898/rizal.html', '', '', 'About Rizal Day in the Philippines', '', 'Intellectual and revolutionary Dr. Jose Rizal was a hero of the Philippine revolution. He was martyred on this day, December 30, 1896, executed by firing squad. His death anniversary is a national holiday in the Philippines. ', 'Historical Anniversary. National Holiday in the Philippines', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(266, 'Champagne Day, Intl.: December 31', 'Worldwide', '12', '31', '2021', NULL, NULL, NULL, NULL, '2021-12-31', '12', '31', '2021', '2021-12-31', NULL, 'Daily', 'Same', '', 'http://www.champagnemagic.com/history.htm', '', '', 'About International Champagne Day', '', '0', '0', 'Epernay', 'Champagne', 'FR', '0', '20 avenue de Champagne', NULL, NULL, NULL, '51200', '(+33)(0) 326.51.2020', 'rmoulinchabrot@moet.fr', 'Rodolphe Moulin-Chabrot, Intl. Media Relations', 'https://us.moet.com/Contact-us', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(267, 'Cotton Bowl, Goodyear (US-TX): December 31', 'United States', '12', '31', '2021', NULL, NULL, NULL, NULL, '2021-12-31', '12', '31', '2021', '2021-12-31', NULL, 'Daily', 'Changes', '', 'http://www.attcottonbowl.com', '', '', 'About the Goodyear Cotton Bowl', '', '0', 'Cotton Bowl Classic', 'Arlington', 'TX', 'US', 'One AT&T Way', ' ', NULL, NULL, NULL, '76011', '(888) 792.2695', 'cso@cottonbowl.com', 'General Information', 'http://www.cottonbowl.com/media-portal/credentials/', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38');
INSERT INTO `events` (`id`, `name`, `states`, `start_month`, `start_day`, `start_year`, `country`, `event_address1`, `event_address2`, `status`, `start_date`, `end_month`, `end_day`, `end_year`, `end_date`, `duration`, `type`, `static_change`, `notes_not_public`, `url`, `feature_picture`, `picture_name`, `alt_text`, `estimated`, `description`, `event_champion`, `champ_city`, `champ_state`, `champ_country`, `champ_address1`, `champ_address2`, `city`, `state`, `country_code`, `zip`, `ph_num`, `email_form`, `contact_person`, `contact_link`, `physical_address`, `purchase_reserve`, `location_based`, `manager`, `event_physical_address`, `user_id`, `created_at`, `updated_at`) VALUES
(268, 'Make Up Your Mind Day: December 31', 'United States', '12', '31', '2021', NULL, NULL, NULL, NULL, '2021-12-31', '12', '31', '2021', '2021-12-31', NULL, 'Daily', 'Same', '', 'http://litemind.com/decision-insights', '', '', 'About Make Up Your Mind Day', '', 'While the last day of the year is a time for celebration and parties, it should also be a time for reflection. Because the day after that is the start of the next year, this day is a great time for some serious decisions about our lives, families and careers (preferably before the party and the alcohol in the evening). No more excuses.  Make up your mind!\n\nThis is an unofficial event with no sponsor.', 'Unofficial Event. No Sponsor.', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(269, 'New Year\'s Eve: December 31', 'Worldwide', '12', '31', '2021', NULL, NULL, NULL, NULL, '2021-12-31', '12', '31', '2021', '2021-12-31', NULL, 'Daily', 'Same', '', 'https://en.wikipedia.org/wiki/December_31', '', '', 'About New Year\'s Eve', '', '0', 'Calendar Event. No Sponsor.', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(270, 'No Interruptions Day: December 31', 'United States', '12', '31', '2021', NULL, NULL, NULL, NULL, '2021-12-31', '12', '31', '2021', '2021-12-31', NULL, 'Daily', 'Changes', 'Last Business Day of the Year', 'https://www.fastcompany.com/1706458/no-interruptions-day', '', '', 'About No Interruptions Day', '', 'It\'s the last day of the year and a time to get as much done as possible. No Interruptions Day seeks to give you an excuse to bury yourself in work, or cut off distractions at home. ', 'Idea Success Network', 'Olney', 'MD', 'US', '3570 Olney-Laytonsville Rd', 'Suite 588', NULL, NULL, NULL, '20830', ' (301) 260.1538 ', 'sylvia@springboardtraining.com', 'Sylvia Henderson', 'http://www.springboardtraining.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(271, 'Orange Bowl: December 31', 'United States', '12', '31', '2021', NULL, NULL, NULL, NULL, '2021-12-31', '12', '31', '2021', '2021-12-31', NULL, 'Daily', 'Changes', '', 'http://game.orangebowl.org', '', '', 'About the Orange Bowl', '', 'First played in January 1935, the Orange Bowl continues as a football tradition. It\'s the annual college football bowl game played at New Miami Stadium in Miami Gardens, Florida. \n\nIt\'s a part of the College Football Playoffs which include the Sugar Bowl and the Sun Bowl. The Orange Bowl is the second-oldest bowl game in the country; The Rose Bowl is the oldest.', 'Bowl Championship Series', 'Dallas', 'TX', 'US ', ' ', ' ', NULL, NULL, NULL, ' ', '(469) 262.5200', 'media@collegefootballplayoff.com', 'Media Relations', 'http://www.collegefootballplayoff.com/contact', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(272, 'Stock Exchange Holiday (NYSE Closed): December 31', 'United States', '12', '31', '2021', NULL, NULL, NULL, NULL, '2021-12-31', '12', '31', '2021', '2021-12-31', NULL, 'Daily', 'Changes', '', 'https://www.nyse.com/markets/hours-calendars', '', '', 'About the New York Stock Exchange Holiday', '', 'Stock Market Holidays are days in which the stock exchange is closed and no trading occurs on this day. ', 'Intercontinental Exchange', 'Atlanta', 'GA', 'US', '5660 New Northside Drive NW, 3rd Floor', '', NULL, NULL, NULL, '', '(770) 857.4700 ', '', 'General Information', 'https://www.intercontinentalexchange.com/about/offices', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(273, 'Unlucky Day: December 31', 'United States', '12', '31', '2021', NULL, NULL, NULL, NULL, '2021-12-31', '12', '31', '2021', '2021-12-31', NULL, 'Daily', 'Same', '', 'http://www.thefreedictionary.com/unlucky', '', '', 'About Unlucky Day', '', '0', 'Unofficial Event. No Sponsor. ', '', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `event_attachments`
--

CREATE TABLE `event_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(11) DEFAULT NULL,
  `video1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_title1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_title2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_title3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_image1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_image2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_image3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_tile1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_tile2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_tile3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socail_link1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socail_link2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socail_link3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_attachments`
--

INSERT INTO `event_attachments` (`id`, `event_id`, `video1`, `video2`, `video3`, `download1`, `download2`, `download3`, `download_title1`, `download_title2`, `download_title3`, `extra_image1`, `extra_image2`, `extra_image3`, `image_tile1`, `image_tile2`, `image_tile3`, `socail_link1`, `socail_link2`, `socail_link3`, `created_at`, `updated_at`) VALUES
(1, 1, 'Video 1', 'Video 2', 'Video 3', 'Download 1', 'Download 2', 'Download 3', 'Download Title 1', 'Download Title 2', 'Download Title 3', 'Extra Image 1', 'Extra Image 2', 'Extra Image 3', 'Image Title 1', 'Image Title 2', 'Image Title 3', 'Event Social Media 1', 'Event Social Media 2', 'Event Social Media 3', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(2, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(3, 3, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(4, 4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(5, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(6, 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(7, 7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(8, 8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(9, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(10, 10, '', '', '', '3751_AACR_Facts_Flier_2013rev.pdf', '3751_Facts_About_Cancer_Flier_2013_rev3.pdf', '8362_Cancer_Prevention_Detection_Facts.pdf', 'Facts About Cancer', 'Cancer Facts Flyer', 'Detecting Cancer Fact Sheets', '9258_cancer-survival-stats-2005.gif', '8362_Child_Cancer_Survival.jpg', '', 'Statistics on Cancer Survival', 'Statistics on Child Cancer', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(11, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(12, 12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(13, 13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://www.decembeard.org.au/contact-us', 'https://twitter.com/DecembeardAU', 'https://www.instagram.com/DecembeardAU/', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(14, 14, '<iframe width=\"640\" height=\"360\" src=\"//www.youtube.com/embed/TTUB_3wCTKs\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe width=\"640\" height=\"360\" src=\"//www.youtube.com/embed/ir6dbDts1lY\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe width=\"640\" height=\"360\" src=\"//www.youtube.com/embed/QOKSmjGBwdo\" frameborder=\"0\" allowfullscreen></iframe>', '4317_TomandJerryFromJazzyChristmas.pdf', '', '', 'Tom & Jerry Recipe', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(15, 15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(16, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(17, 17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(18, 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(19, 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(20, 20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(21, 21, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(22, 22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(23, 23, '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(24, 24, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(25, 25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(26, 26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(27, 27, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(28, 28, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(29, 29, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(30, 30, '<iframe width=\"640\" height=\"480\" src=\"//www.youtube.com/embed/jbi-6FmxuRA\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe width=\"640\" height=\"360\" src=\"//www.youtube.com/embed/r3EEHkj34_s\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe width=\"640\" height=\"360\" src=\"//www.youtube.com/embed/Nt-1TrU3cVU\" frameborder=\"0\" allowfullscreen></iframe>', '7612_Toy-Buying Checklist.pdf', '7612_Fact_Sheet_Safe_Toys.pdf', '', 'Toy Buying Checklist', 'Safe Toys Checklist', '', '7612_toys-gifts-infographics.png', '7612_Toys-and-Gifts-Christmas-ideas-infographic-795x1024.jpg', '7612_evolution of christmas gifts gadgets toys Infographic.jpg', 'Infographic of Best Toys Over the Years', 'Types of Toys, a Graphic', 'Evolution of Children\'s Toys and Christmas Gifts', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(31, 31, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(32, 32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(33, 33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(34, 34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(35, 35, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(36, 36, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(37, 37, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(38, 38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(39, 39, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(40, 40, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(41, 41, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(42, 42, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(43, 43, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(44, 44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(45, 45, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(46, 46, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(47, 47, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(48, 48, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(49, 49, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(50, 50, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(51, 51, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(52, 52, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(53, 53, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(54, 54, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(55, 55, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(56, 56, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(57, 57, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(58, 58, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(59, 59, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(60, 60, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(61, 61, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(62, 62, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(63, 63, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(64, 64, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(65, 65, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(66, 66, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(67, 67, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(68, 68, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(69, 69, '0', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(70, 70, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(71, 71, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(72, 72, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(73, 73, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(74, 74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(75, 75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(76, 76, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(77, 77, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(78, 78, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(79, 79, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(80, 80, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(81, 81, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(82, 82, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(83, 83, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(84, 84, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(85, 85, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(86, 86, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(87, 87, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(88, 88, '<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/0EODSI1vGOA\" frameborder=\"0\" allowfullscreen></iframe>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(89, 89, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(90, 90, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(91, 91, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(92, 92, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(93, 93, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(94, 94, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(95, 95, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(96, 96, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(97, 97, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(98, 98, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(99, 99, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(100, 100, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(101, 101, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(102, 102, '', '', '', '', '', '', '', '', '', '9070_Buddhism_infographic.jpg', '9070_bud.png', '', 'Understanding Buddhism, an Infographic', 'Buddhism 101 Infographic', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(103, 103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(104, 104, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(105, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(106, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(107, 107, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(108, 108, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(109, 109, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(110, 110, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(111, 111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(112, 112, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(113, 113, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(114, 114, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://www.facebook.com/C2E2official', 'https://twitter.com/c2e2', 'https://www.youtube.com/user/ReedPOPofficial', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(115, 115, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(116, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(117, 117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(118, 118, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(119, 119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(120, 120, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(121, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(122, 122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(123, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(124, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(125, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(126, 126, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(127, 127, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(128, 128, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(129, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(130, 130, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(131, 131, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(132, 132, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(133, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(134, 134, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(135, 135, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(136, 136, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(137, 137, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(138, 138, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(139, 139, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(140, 140, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(141, 141, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(142, 142, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(143, 143, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(144, 144, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(145, 145, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(146, 146, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(147, 147, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(148, 148, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(149, 149, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(150, 150, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(151, 151, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(152, 152, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(153, 153, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(154, 154, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(155, 155, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(156, 156, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(157, 157, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(158, 158, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(159, 159, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(160, 160, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(161, 161, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(162, 162, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(163, 163, '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(164, 164, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(165, 165, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(166, 166, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(167, 167, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(168, 168, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(169, 169, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(170, 170, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(171, 171, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(172, 172, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(173, 173, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(174, 174, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(175, 175, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(176, 176, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(177, 177, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(178, 178, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(179, 179, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(180, 180, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(181, 181, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(182, 182, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(183, 183, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(184, 184, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(185, 185, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(186, 186, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(187, 187, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(188, 188, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(189, 189, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(190, 190, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(191, 191, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(192, 192, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(193, 193, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(194, 194, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(195, 195, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(196, 196, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(197, 197, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(198, 198, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(199, 199, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(200, 200, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(201, 201, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(202, 202, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(203, 203, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(204, 204, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(205, 205, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(206, 206, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(207, 207, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(208, 208, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(209, 209, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(210, 210, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(211, 211, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(212, 212, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(213, 213, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(214, 214, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(215, 215, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(216, 216, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(217, 217, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(218, 218, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(219, 219, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(220, 220, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(221, 221, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(222, 222, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(223, 223, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(224, 224, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(225, 225, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(226, 226, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(227, 227, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(228, 228, ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(229, 229, '<iframe width=\"640\" height=\"480\" src=\"//www.youtube.com/embed/pVJMxqlZ9Ww\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe width=\"640\" height=\"360\" src=\"//www.youtube.com/embed/M7byjAaLcRM\" frameborder=\"0\" allowfullscreen></iframe>', '<iframe width=\"640\" height=\"360\" src=\"//www.youtube.com/embed/TG8_RSfk3QM\" frameborder=\"0\" allowfullscreen></iframe>', '4317_TomandJerryFromJazzyChristmas.pdf', '', '', 'Tom & Jerry Recipe', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(230, 230, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(231, 231, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(232, 232, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(233, 233, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(234, 234, ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(235, 235, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(236, 236, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(237, 237, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(238, 238, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(239, 239, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(240, 240, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(241, 241, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(242, 242, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(243, 243, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(244, 244, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(245, 245, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(246, 246, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(247, 247, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(248, 248, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(249, 249, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(250, 250, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(251, 251, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(252, 252, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(253, 253, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(254, 254, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(255, 255, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(256, 256, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(257, 257, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(258, 258, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(259, 259, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(260, 260, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(261, 261, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(262, 262, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(263, 263, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(264, 264, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(265, 265, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(266, 266, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(267, 267, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(268, 268, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(269, 269, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(270, 270, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(271, 271, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(272, 272, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(273, 273, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-10-11 03:09:38', '2021-10-11 03:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE `event_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_categories`
--

INSERT INTO `event_categories` (`id`, `event_id`, `category_1`, `category_2`, `category_3`, `category_4`, `category_5`, `category_6`, `created_at`, `updated_at`) VALUES
(1, '1', 'Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5', 'Category 6', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(2, '2', '20', '26', '40', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(3, '3', '20', '28', '49', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(4, '4', '3', '15', '36', '25', '29', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(5, '5', '20', '12', '22', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(6, '6', '1', '69', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(7, '7', '20', '46', '44', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(8, '8', '3', '14', '22', '18', '11', '52', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(9, '9', '12', '13', '58', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(10, '10', '20', '26', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(11, '11', '2', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(12, '12', '20', '60', '19', '26', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(13, '13', '20', '28', '11', '4', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(14, '14', '19', '1', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(15, '15', '19', '20', '8', '42', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(16, '16', '42', '18', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(17, '17', '42', '1', '47', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(18, '18', '3', '36', '25', '59', '16', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(19, '19', '20', '9', '42', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(20, '20', '12', '13', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(21, '21', '39', '18', '36', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(22, '22', '3', '36', '66', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(23, '23', '9', '13', '48', '43', '29', '10', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(24, '24', '2', '17', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(25, '25', '58', '13', '12', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(26, '26', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(27, '27', '3', '59', '12', '36', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(28, '28', '20', '15', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(29, '29', '20', '42', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(30, '30', '42', '9', '39', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(31, '31', '12', '27', '49', '51', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(32, '32', '42', '15', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(33, '33', '8', '18', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(34, '34', '40', '17', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(35, '35', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(36, '36', '2', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(37, '37', '3', '36', '63', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(38, '38', '3', '36', '62', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(39, '39', '3', '25', '59', '8', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(40, '40', '3', '13', '9', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(41, '41', '14', '8', '49', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(42, '42', '10', '24', '33', '26', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(43, '43', '3', '13', '12', '26', '17', '52', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(44, '44', '8', '25', '13', '46', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(45, '45', '8', '19', '15', '64', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(46, '46', '12', '58', '14', '32', '69', '52', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(47, '47', '22', '39', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(48, '48', '20', '26', '60', '59', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(49, '49', '26', '37', '59', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(50, '50', '8', '39', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(51, '51', '3', '8', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(52, '52', '39', '47', '22', '8', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(53, '53', '39', '18', '12', '8', '59', '49', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(54, '54', '44', '39', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(55, '55', '2', NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(56, '56', '19', '14', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(57, '57', '22', '45', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(58, '58', '12', '58', '69', '49', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(59, '59', '15', '43', '31', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(60, '60', '43', '15', '31', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(61, '61', '40', '9', '50', '10', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(62, '62', '9', '10', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(63, '63', '15', '46', '42', '8', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(64, '64', '15', '30', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(65, '65', '26', '44', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(66, '66', '3', '36', '34', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(67, '67', '20', '42', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(68, '68', '20', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(69, '69', '9', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(70, '70', '12', '10', '16', '66', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(71, '71', '3', '29', '36', '12', '14', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(72, '72', '2', '15', '5', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(73, '73', '10', '38', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(74, '74', '3', '1', '25', '36', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(75, '75', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(76, '76', '15', '43', '19', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(77, '77', '24', '38', '62', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(78, '78', '8', '59', '18', '17', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(79, '79', '3', '8', '13', '46', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(80, '80', '3', '36', '25', '16', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(81, '81', '19', '17', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(82, '82', '3', '29', '36', '5', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(83, '83', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(84, '84', '3', '36', '59', '16', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(85, '85', '33', '38', '62', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(86, '86', '29', '20', '46', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(87, '87', '3', '8', '15', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(88, '88', '42', '44', '58', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(89, '89', '3', '32', '22', '12', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(90, '90', '3', '36', '25', '64', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(91, '91', '60', '46', '50', '28', '42', '52', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(92, '92', '3', '18', '39', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(93, '93', '59', '26', '9', '44', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(94, '94', '3', '10', '38', '18', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(95, '95', '3', '48', '47', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(96, '96', '3', '36', '64', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(97, '97', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(98, '98', '13', '40', '17', '8', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(99, '99', '3', '29', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(100, '100', '14', '32', '27', '39', '51', '52', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(101, '101', '3', '36', '59', '13', '62', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(102, '102', '3', '6', '38', '61', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(103, '103', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(104, '104', '3', '25', '36', '63', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(105, '105', '10', '38', '19', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(106, '106', '10', '12', '52', '4', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(107, '107', '19', '20', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(108, '108', '44', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(109, '109', '25', '36', '18', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(110, '110', '12', '22', '10', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(111, '111', '3', '29', '25', '59', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(112, '112', '3', '36', '59', '64', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(113, '113', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(114, '114', '14', '27', '46', '67', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(115, '115', '3', '25', '36', '63', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(116, '116', '3', '58', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(117, '117', '3', '59', '25', '36', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(118, '118', '3', '59', '25', '36', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(119, '119', '3', '59', '50', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(120, '120', '12', '26', '17', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(121, '121', '3', '59', '43', '46', '12', '36', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(122, '122', '22', '46', '14', '68', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(123, '123', '45', '29', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(124, '124', '19', '12', '22', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(125, '125', '2', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(126, '126', '3', '46', '12', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(127, '127', '15', '43', '31', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(128, '128', '15', '12', '26', '59', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(129, '129', '3', '36', '25', '64', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(130, '130', '19', '44', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(131, '131', '3', '9', '59', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(132, '132', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(133, '133', '44', '30', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(134, '134', '17', NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(135, '135', '9', '17', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(136, '136', '17', '40', '46', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(137, '137', '3', '36', '59', '64', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(138, '138', '3', '36', '63', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(139, '139', '3', '36', '25', '29', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(140, '140', '3', '10', '12', '34', '5', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(141, '141', '3', '15', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(142, '142', '10', '38', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(143, '143', '40', '38', '12', '20', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(144, '144', '39', '18', '61', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(145, '145', '19', '39', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(146, '146', '18', '39', '46', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(147, '147', '3', '29', '59', '61', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(148, '148', '20', '8', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(149, '149', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(150, '150', '3', '25', '36', '63', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(151, '151', '10', '16', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(152, '152', '32', '22', '12', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(153, '153', '24', '38', '62', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(154, '154', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(155, '155', '2', '15', '7', '52', '49', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(156, '156', '15', '43', '46', '47', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(157, '157', '21', '38', '12', '58', '70', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(158, '158', '15', '2', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(159, '159', '21', '38', '12', '19', '70', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(160, '160', '2', '43', '15', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(161, '161', '57', '38', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(162, '162', '3', '25', '36', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(163, '163', '2', '44', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(164, '164', '3', '36', '34', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(165, '165', '21', '38', '12', '70', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(166, '166', '3', '19', '62', '59', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(167, '167', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(168, '168', '10', '12', '69', '34', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(169, '169', '9', '14', '44', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(170, '170', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(171, '171', '3', '36', '59', '62', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(172, '172', '3', '36', '59', '63', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(173, '173', '12', '10', '34', '5', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(174, '174', '3', '36', '59', '41', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(175, '175', '10', '12', '63', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(176, '176', '3', '36', '19', '18', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(177, '177', '3', '36', '29', '63', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(178, '178', '3', '29', '36', '59', '62', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(179, '179', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(180, '180', '3', '47', '48', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(181, '181', '15', '8', '35', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(182, '182', '1', '20', '26', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(183, '183', '36', '12', '49', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(184, '184', '3', '48', '47', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(185, '185', '12', '13', '59', '33', '62', '64', '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(186, '186', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(187, '187', '3', '21', '38', '70', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(188, '188', '59', '25', '36', '8', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(189, '189', '3', '36', '59', '62', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(190, '190', '3', '25', '36', '64', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(191, '191', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(192, '192', '44', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(193, '193', '15', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(194, '194', '21', '38', '15', '70', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(195, '195', '15', '43', '31', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(196, '196', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(197, '197', '32', '12', '22', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(198, '198', '59', '36', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(199, '199', '3', '36', '25', '52', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(200, '200', '21', '38', '70', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(201, '201', '36', '9', '59', '58', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(202, '202', '26', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(203, '203', '3', '27', '22', '58', NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(204, '204', '15', '61', '69', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(205, '205', '3', '28', '9', '25', '49', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(206, '206', '42', '46', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(207, '207', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(208, '208', '59', '26', '37', '9', '52', NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(209, '209', '44', '58', '52', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(210, '210', '3', '57', '38', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(211, '211', '3', '58', '18', NULL, NULL, NULL, '2021-10-11 03:09:37', '2021-10-11 03:09:37'),
(212, '212', '58', '12', '52', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(213, '213', '39', '44', '52', '7', '49', '16', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(214, '214', '15', '4', '41', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(215, '215', '15', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(216, '216', '12', '38', '62', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(217, '217', '35', '38', '15', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(218, '218', '26', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(219, '219', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(220, '220', '3', '12', '52', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(221, '221', '21', '38', '70', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(222, '222', '12', '13', '17', '35', '60', '52', '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(223, '223', '44', '14', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(224, '224', '59', '35', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(225, '225', '19', '12', '52', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(226, '226', '19', '69', '34', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(227, '227', '12', '39', '18', '52', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(228, '228', '10', '38', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(229, '229', '19', '1', '52', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(230, '230', '3', '36', '59', '64', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(231, '231', '32', '14', '27', '49', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(232, '232', '18', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(233, '233', '44', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(234, '234', '10', '38', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(235, '235', '10', '38', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(236, '236', '3', '36', '25', '59', '61', NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(237, '237', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(238, '238', '18', '7', '49', '4', '41', NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(239, '239', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(240, '240', '3', '18', '12', '41', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(241, '241', '3', '36', '59', '66', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(242, '242', '12', '32', '69', '34', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(243, '243', '12', '64', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(244, '244', '3', '57', '38', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(245, '245', '10', '38', '19', '49', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(246, '246', '3', '36', '4', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(247, '247', '17', '13', '8', '52', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(248, '248', '44', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(249, '249', '10', '38', '19', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(250, '250', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(251, '251', '22', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(252, '252', '15', '43', '31', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(253, '253', '3', '36', '4', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(254, '254', '2', '13', '15', '52', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(255, '255', '14', '22', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(256, '256', '10', '9', '29', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(257, '257', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(258, '258', '3', '36', '52', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(259, '259', '3', '19', '29', '52', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(260, '260', '44', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(261, '261', '19', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(262, '262', '19', '20', '43', '52', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(263, '263', '17', '44', '52', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(264, '264', '44', '20', '45', '52', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(265, '265', '3', '29', '59', '36', '63', NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(266, '266', '1', NULL, NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(267, '267', '45', '14', '51', '52', NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(268, '268', '26', '40', '8', '44', '52', NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(269, '269', '30', '1', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(270, '270', '8', '26', '52', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(271, '271', '45', '14', '52', NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(272, '272', '18', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38'),
(273, '273', '44', '52', NULL, NULL, NULL, NULL, '2021-10-11 03:09:38', '2021-10-11 03:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `event_nations`
--

CREATE TABLE `event_nations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_events`
--

CREATE TABLE `featured_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `events_id` int(11) NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'free',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limitation` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `type`, `fee`, `limitation`, `created_at`, `updated_at`) VALUES
(1, 'Free', 'Silver', '0', 3, NULL, NULL),
(3, 'Gold', 'Gold', '69.95', 50, NULL, NULL),
(4, 'Premium', 'Premium', '129.95', 200, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_11_143503_create_events_table', 1),
(5, '2020_12_21_210535_create_admins_table', 1),
(6, '2020_12_21_215107_create_members_table', 1),
(7, '2021_01_08_185959_create_featured_events_table', 1),
(8, '2021_01_12_212904_create_categories_table', 1),
(9, '2021_01_17_172305_create_participants_table', 1),
(10, '2021_01_19_065749_create_memberships_table', 1),
(11, '2021_01_28_104150_create_countries_table', 1),
(12, '2021_03_17_034539_create_blogs_table', 1),
(13, '2021_08_24_120552_create_pages_table', 1),
(14, '2021_09_06_083809_create_roles_table', 1),
(15, '2021_09_06_124539_add_column_to_users_table', 1),
(16, '2021_09_14_120632_create_event_categories_table', 1),
(17, '2021_09_15_013443_create_event_attachments_table', 1),
(18, '2021_09_15_013629_create_event_nations_table', 1),
(19, '2021_09_14_112833_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `heading`, `content`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', 'About Us', 'LEEP is an acronym for “Lewis’ Event, Editorial &amp; \r\nPromotional” Calendar. It is conceived and \r\ncreated by our founder LD Lewis. Our parent \r\ncompany is Jubilee LLC, incorporated in \r\nCheyenne, Wyoming, USA.<br><br>LEEP Calendar is an online database of events, holidays, religious observances, industry \r\npromotions, government days, trade shows, fairs, conferences and event anniversaries used by \r\nmedia and marketing people to promote products/services, call attention to causes, educate the \r\npublic, commemorate an event or find a reason to celebrate<br><br>Events listed in LEEP Calendar come from a variety of sources including the US Congress, UK, \r\nCanadian and Australian Parliament, NGOs, Trade Associations, The United Nations, Government \r\nleaders, Commercial Institutions, Historical Dates, Current Events, Advocacy Groups, Non-profits, \r\nNews Organizations, Religious Organizations, Custom, Patent Filings, Copyright Filings, Birth and \r\nDeath Records, Popular Culture and hundreds of other sources, including submissions by the event \r\nchampion.<br><br>Aside from satiating curiosity, LEEP Calendar has many uses. Publishers of news media and blogs \r\nuse it to assign timely stories to columnists. Marketing departments use it for product development, \r\nadvertising and media planning. Retailers use the calendar outlining the most opportune time for \r\nproduct releases and sales promotions. SEO specialists use it to identify keywords that will be in \r\ndemand in the coming weeks. Event planners use it to avoid double booking events that might \r\ncompete with major religious holidays or cultural celebrations (like the Academy Awards). The \r\ninternational nature of LEEP provides insight into what other nations and companies are doing \r\nworldwide.<br><br>Ultimately, LEEP Calendar is about ideas.<br><br>LEEP deals with dynamic information and thousands of different sources and each date is therefore \r\n‘subject to change without notice.’ Approximately 5% of the dates in this calendar will change from \r\ntheir original dates due to a variety of factors: Strikes, weather events, television schedules, venue \r\navailability, current events, conflicting events or the date is not set for sure until a few weeks or days \r\nbefore the event occurs. The US Congress is notorious for renewing or declaring events after \r\nthey’ve occurred Therefore, many of the dates are estimated based upon their previous year’s \r\noccurrence. Please see the LEEP Calendar Legend for an explanation of the various symbols used \r\nin this calendar<br><br>', NULL, NULL, NULL, 'Publish', '2021-09-22 00:56:48', '2021-09-22 01:20:36'),
(2, 'Contact Us', 'contact-us', 'Contact Us', 'Jubilee LLC is available by phone between 9AM-5PM Monday - Friday, eastern United States time zone. You can reach us at: +1 (307) 222.4729<br><h1><b>Our Mailing Address:</b></h1>Jubilee LLC<br>1712 Pioneer Avenue, Suite 2019<br>Cheyenne, WY 82001<br>USA<br><h1><b>Email Us:</b></h1>', NULL, NULL, NULL, 'Publish', '2021-09-22 01:11:54', '2021-09-22 02:23:58'),
(3, 'Privacy Policy', 'privacy-policy', 'Privacy Policy', 'LEEPCalendar.com (Jubilee LLC) uses third party banks and PayPal to process all orders. We \r\ndo not keep any of your transactional information on our servers and we have no access to it. We \r\ndo use Google Analytics to track our marketing activities and effectiveness.<br><br>Privacy is as important to us as it is to you. Our founder is a staunch adversaries of unsolicited \r\ne-mail, direct mail and intrusive telemarketing, which is one of the reasons why at Jubilee LLC \r\nwe are commitment to protecting your privacy. We will never sell, rent, publish or distribute your \r\nname, email address or other identifiable information collected via registration or during an \r\ne-commerce transaction, Web site features or cookies to any third party without your consent. In \r\nthe event that we are sold or acquired by a 3rd party, all members with current contact information \r\nwill be given the opportunity to remove their information from our systems prior to the transfer or \r\nmerging of assets.<br><br>Jubilee LLC is part of Jubilee LLC. Questions asked are purely for the internal marketing, editorial \r\ncreation and product planning use of Jubilee LLC. Though detailed, this information allows us to \r\ndecided what products to carry, what price ranges will suit our membership, where to look for special offers for our members, plus the direction of our editorial, courses and other service offerings. \r\nFor auditing purposes, it substantiates our membership and visitor numbers. Any personal information collected on Jubilee LLC is knowingly and voluntarily provided by customers and visitors \r\nto our site. Under no circumstance is this information ever sold, leased, published or rented to a \r\nthird party without your expressed consent. Should changes be made to our privacy policy, all \r\nregistered customers in our database will be notified of the changes and given the opportunity to \r\nopt-out of their membership.<br><br>In the event that Jubilee LLC is bought, merged or acquired by a third party, all members of the \r\nJubilee LLC Lists with valid contact information will be notified prior to the third party taking possession of Jubilee LLC. This notification will ask whether members prefer to remain members \r\nafter the transfer or prefer to remove their information from the Jubilee LLC Lists prior to the transfer. Federal law and tax requirements mandate we keep on file records relating to purchases for \r\nup to seven years. This includes online transactions initiated via Jubilee LLC. Information contained in these documents can not be changed or eliminated in the event of a sale or transfer. \r\nHowever information collected for commerce purposes will never be used to contact a customer \r\nunless it relates to the transaction covered within the context of the document. This requirement \r\nwill be a non-negotiable item in the event of a sale, acquisition or merger of Storybook Advent \r\nwith a third party.<br><br>Many of our shopping functions are outsourced. Should you choose to purchase from a Jubilee \r\nLLC vendor, you will be prompted for information and given the opportunity to submit to that \r\nvendor individually or allow Jubilee LLC to drop in your name, shipping address, and phone \r\nnumber from your Jubilee LLC Lists member file.<br><br>Your address and phone number are required to ship or deliver products. Your email address will \r\nbe used to send you two emails following a purchase, one to confirm your order has shipped, and \r\nthe second to provide an itemized order summary with your order number and tracking number \r\nso that you can find the status of your order. If necessary, a Jubilee LLC customer service representative may contact you by telephone to resolve any issues concerning your order.<br><br>We may occasionally run contests and other similar promotions on our site. As a visitor, you are \r\nautomatically eligible unless your state or country laws exempt you. Winners of cash prizes and \r\nmerchandise will be required to complete all personal income forms required by their government \r\nto claim prizes. Winners of publishing contracts will be required to sign appropriate publishing \r\ncontracts.<br><br>1. IP address –\r\n<br>a. Diagnose problems with our server and Web site\r\nadministration.\r\n<br>b. Used to identify you and your shopping cart.\r\n<br>c. Used to prevent multiple distribution of digital products to persons other than the person who \r\npurchased<br><br>2. Your name &amp; password<br>a. Verify that you are a registered customer<br>b. Prevent anyone else who may have access to your computer&nbsp;from ordering in your name without your express permission.<br>c. Provides access to marketing materials and samples for organizations using Storybook Advent \r\nfor fundraising purposes.<br><br>Jubilee LLC may share non-personal, non-individual information in aggregate form with our vendors and marketing partners for research purposes. This includes aggregate data about our customers, sales, traffic patterns, and related site information. You always have the opportunity to \r\nopt-out of receiving future mailings from Jubilee LLC or our partners; see the section below entitled Opt-out.<br><br>Jubilee LLC reserves the right to share personal information with legal authorities to the extent \r\nrequired by law<br><br>Users may experience Jubilee LLC within a co-branded environment alongside one of our partners. These companies are strategic partners. Co-branded pages are recognizable by two methods. 1) By the presence of a “frame” either at the top the page and/or when both companies’ \r\nbrand logos are presented together on the page. 2) By a separate browse window opening to \r\nallow access to the partners site without leaving Jubilee LLC. In such situations, individual user \r\ninformation may be shared only between our two companies in an effort to better understand and \r\nmeet our customers’ needs. An example of this would be your region of the country or zip code. \r\nShould you have additional privacy concerns, please also refer to the privacy policy of our partner \r\nfrom whose site you visited prior to arriving at Jubilee LLC.<br><br>Jubilee LLC may at a later date choose to use a feature of your Internet browser called a “cookie” \r\nto assign a unique identification to your computer. Cookies are files that your Web browser places \r\non your computer’s hard drive. Jubilee LLC creates and then uses these cookie files to track your \r\nclicks as you browse the Jubilee LLC Web site.<br><br>Cookies are like your business card and they tell us whether you have visited Jubilee LLC previously and to help us determine whether you came to us from a particular Internet link or banner \r\nadvertisement. They also help us determine which areas are most important to people like you \r\nso we can best determine what features, products and services to carry on Jubilee LLC.<br><br>Cookies allow you to save time and frustration by storing the user names and passwords you use \r\non our site and information on past purchases and personal preferences. By doing this, you do \r\nnot have to re-enter the information. Should you disable the use of cookies on your browser, you \r\nwill need to re-enter this information whenever you visit our site. Jubilee LLC will not and cannot \r\nuse cookies to retrieve personal information about you from your computer.<br><br>Jubilee LLC provides customers the opportunity to opt-out of receiving communications from us \r\nduring your Jubilee LLC Lists registration. We give you the following options to change or modify \r\nyour information in our database and to choose not to receive future communications.<br><br>For Questions, concerns and curiosities about the Jubilee LLC privacy statement and Web site, \r\nplease contact us at:<br><br>Jubilee LLC<br>1712 Pioneer Avenue, Suite 2019,<br>Cheyenne, WY 82001&nbsp;<br>(307) 222.4729<br><br>The articles, opinions and views provided by Jubilee LLC or on LEEPCalendar.com are not \r\nintended as medical, legal or financial advice. All information is provided for entertainment \r\npurposes only. Features are authored by licensed psychologists, mental health professionals, \r\nlegal, financial and other experts or by journalists. Additional content is provided by affiliated \r\ncompanies and Jubilee LLC patrons. Articles and content contained herein are not to be used as \r\na substitute for medical attention, diagnosis, treatment, or other professional mental health or \r\nmedical services. As laws, details and personal situations vary from person to person and state \r\nto state, articles and content contained herein are not and cannot to be used as a substitute for \r\nlegal, parental. health, mental health, career or financial advice.<br><br>', NULL, NULL, NULL, 'Publish', '2021-09-22 03:21:47', '2021-09-22 03:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `banner`, `created_at`, `updated_at`) VALUES
(9, '1627569038.jpg', '2021-03-03 03:11:23', '2021-07-29 14:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2021-09-06 05:54:18', '2021-09-06 05:54:18'),
(2, 'Event Champion', 'event_champ', '2021-09-06 05:54:18', '2021-09-06 05:54:18'),
(3, 'Subscriber', 'subscriber', '2021-09-06 05:54:18', '2021-09-06 05:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_id` int(11) DEFAULT NULL,
  `membership_date` timestamp NULL DEFAULT NULL,
  `events_limitation` int(11) NOT NULL DEFAULT 0,
  `events_count` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `is_verified`, `remember_token`, `membership_id`, `membership_date`, `events_limitation`, `events_count`, `image`, `created_at`, `updated_at`, `role_id`) VALUES
(2, 'noor', 'ul amin', 'user@gmail.com', '2021-02-08 19:00:00', '$2y$10$L4tbuUPAXrlHFigM88UKquwt9xboUReqOEjtzP9p3wfD8bK6.nTq6', 1, NULL, NULL, NULL, 0, 0, '1614839520.jpg', '2020-12-29 04:59:33', '2021-03-04 01:32:00', 0),
(4, 'kami', 'Zaheer Ud Din', 'zaheer4195@hotmail.com', NULL, '$2y$10$shuXAs4LfESEBSzEaK4viuzdHH.wBPBFQkT6RiYizN8j6jf8AYpXi', 1, NULL, NULL, NULL, 0, 0, NULL, '2021-01-08 17:34:34', '2021-01-08 17:34:34', 0),
(5, 'Muhammad Zaheer', 'Din', 'user1@gmail.com', NULL, '$2y$10$2RU4zwjEIQ0lHit8uHkX9.f.DmQVvpfUMuq12JHthCGcBbBXhU3ny', 1, NULL, NULL, NULL, 0, 0, NULL, '2021-01-10 05:50:41', '2021-01-10 05:50:41', 0),
(14, 'alio', 'asjas', 'user00@gmail.com', NULL, '$2y$10$OHl/3d3mvIQnRcFZ4lk6UOEOgkrG9MyqkIYt.s8ods5eXRwANyOrG', 0, NULL, NULL, NULL, 0, 0, NULL, '2021-01-10 11:04:36', '2021-01-10 11:04:36', 0),
(34, 'Muhammad Alam', 'Din', 'hello@irsolutions.tech', '2021-02-08 19:00:00', '$2y$10$hPZg2d..t8u8afJeRBgSrObMphcnQMT62dcg1ZSXvNL71De80X88u', 0, NULL, NULL, NULL, 0, 0, NULL, '2021-01-11 16:54:09', '2021-01-11 16:54:09', 0),
(35, 'Muhammad', 'Ikram', 'user123@gmail.com', '2021-01-19 01:12:22', '$2y$10$zUo.r2WH1xgp5bgvtLVID.fbFw5L3PgZAQK7Ws7xn1qvR6bYz30H.', 0, NULL, NULL, NULL, 0, 0, NULL, '2021-01-18 04:13:57', '2021-01-18 04:13:57', 0),
(41, 'Muhammad Zaheer', 'Din', 'zaheer4195@gmail.com', '2021-01-18 23:19:28', '$2y$10$SCEFENhiHKdpeOWu0o19oeWZ4kDlRbhgcFtpjXnw4ewGlPWgBqfRy', 0, NULL, 4, '2021-02-18 00:28:40', 200, 0, '1614839859.jpg', '2021-01-19 00:36:58', '2021-03-04 01:51:46', 0),
(43, 'Muhammad Zaheer', 'Din', 'mianzaheer4195@gmail.com', '2021-02-04 19:00:00', '$2y$10$ad4pX3KhUo.Uc5lzlcLfp.WKKhOIXWCT56c4Qyl50DBIf6IxAEOvm', 0, NULL, NULL, NULL, 0, 0, NULL, '2021-02-05 09:47:53', '2021-02-05 09:47:53', 0),
(44, 'gJOPNKtAZmXsYfSw', 'DnbrXfBgCTyMw', 'predusedulhl@gmail.com', NULL, '$2y$10$MEaS5qAwhvsPzzgGZBqBPun.uThknJOTByZ.ZIukdX4C1E7ADANCS', 0, NULL, NULL, NULL, 0, 0, NULL, '2021-07-25 08:36:14', '2021-07-25 08:36:14', 0),
(45, 'Subash', 'Gopalaswamy', 'subash@stallioni.com', NULL, '$2y$10$zOWdJ2LnXn6o61CuRwniBORqmwfiRh7dZROGFHwknuZTE5W7Au33C', 0, NULL, NULL, NULL, 0, 0, NULL, '2021-08-13 09:23:14', '2021-08-13 09:23:14', 0),
(46, 'YhpcOKBLzNgrkyZ', 'LxPbdDaSXCURHOM', 'crosswarren977@gmail.com', NULL, '$2y$10$q46MNPYkykY9UjvT21L6k.lkiiQCrCqHfffCYepREIrTpovS6/C0q', 0, NULL, NULL, NULL, 0, 0, NULL, '2021-08-15 20:13:50', '2021-08-15 20:13:50', 0),
(47, 'user', '89', 'user89@gmail.com', '2021-09-08 06:28:12', '$2y$10$FWHNHyyEjVeatKcyjGbSjenr30qj/3XZzSlhnK1tR2iqQHsunqgM.', 0, NULL, 4, '2021-09-30 06:31:43', 0, 0, NULL, '2021-09-08 01:27:50', '2021-09-08 01:27:50', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_attachments`
--
ALTER TABLE `event_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_categories`
--
ALTER TABLE `event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_nations`
--
ALTER TABLE `event_nations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_events`
--
ALTER TABLE `featured_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `event_attachments`
--
ALTER TABLE `event_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `event_nations`
--
ALTER TABLE `event_nations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_events`
--
ALTER TABLE `featured_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
