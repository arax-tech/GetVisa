-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 08:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getvisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_old_passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `name`, `passport_no`, `passport_expiry_date`, `no_of_old_passport`, `date_of_birth`, `country`, `category`, `visa_type`, `priority`, `price`, `payment_status`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(3, 6, 'Arham Khan', '546545', '2022-06-10', '534', '2022-06-10', '232', NULL, 'Dubble Entry', 'Normal', '4000 $', 'Unpaid', 'Pending', 'lorem ipsum dummy testing', '2022-06-02 13:00:24', '2022-06-02 13:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `country_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(3, 101, 'Single Entry', '2000 $', '2022-05-29 13:15:29', '2022-06-02 12:45:42'),
(4, 167, 'Dubble Entry', '4000 $', '2022-06-02 12:33:22', '2022-06-02 12:46:06'),
(5, NULL, 'Multiple Entry', '10000 $', '2022-06-02 12:46:46', '2022-06-02 12:46:46'),
(6, NULL, 'Testing', '5000 $', '2022-06-04 03:02:42', '2022-06-04 03:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(2, 'Aland Islands', '2018-07-20 20:11:03', '2021-10-22 14:43:24'),
(3, 'Albania', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(4, 'Algeria', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(5, 'American Samoa', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(6, 'Andorra', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(7, 'Angola', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(8, 'Anguilla', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(9, 'Antarctica', '2018-07-20 20:11:03', '2021-11-10 14:54:39'),
(10, 'Antigua And Barbuda', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(11, 'Argentina', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(12, 'Armenia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(13, 'Aruba', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(14, 'Australia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(15, 'Austria', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(16, 'Azerbaijan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(17, 'Bahamas The', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(18, 'Bahrain', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(19, 'Bangladesh', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(20, 'Barbados', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(21, 'Belarus', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(22, 'Belgium', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(23, 'Belize', '2018-07-20 20:11:03', '2021-11-10 17:36:56'),
(24, 'Benin', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(25, 'Bermuda', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(26, 'Bhutan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(27, 'Bolivia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(28, 'Bosnia and Herzegovina', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(29, 'Botswana', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(30, 'Bouvet Island', '2018-07-20 20:11:03', '2021-11-10 14:55:03'),
(31, 'Brazil', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(32, 'British Indian Ocean Territory', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(33, 'Brunei', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(34, 'Bulgaria', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(35, 'Burkina Faso', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(36, 'Burundi', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(37, 'Cambodia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(38, 'Cameroon', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(39, 'Canada', '2018-07-20 20:11:03', '2021-11-10 17:37:36'),
(40, 'Cape Verde', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(41, 'Cayman Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(42, 'Central African Republic', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(43, 'Chad', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(44, 'Chile', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(45, 'China', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(46, 'Christmas Island', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(47, 'Cocos (Keeling) Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(48, 'Colombia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(49, 'Comoros', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(50, 'Congo', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(51, 'Democratic Republic of the Congo', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(52, 'Cook Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(53, 'Costa Rica', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(54, 'Cote D\'Ivoire (Ivory Coast)', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(55, 'Croatia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(56, 'Cuba', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(57, 'Cyprus', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(58, 'Czech Republic', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(59, 'Denmark', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(60, 'Djibouti', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(61, 'Dominica', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(62, 'Dominican Republic', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(63, 'East Timor', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(64, 'Ecuador', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(65, 'Egypt', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(66, 'El Salvador', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(67, 'Equatorial Guinea', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(68, 'Eritrea', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(69, 'Estonia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(70, 'Ethiopia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(71, 'Falkland Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(72, 'Faroe Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(73, 'Fiji Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(74, 'Finland', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(75, 'France', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(76, 'French Guiana', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(77, 'French Polynesia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(78, 'French Southern Territories', '2018-07-20 20:11:03', '2021-11-10 14:55:20'),
(79, 'Gabon', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(80, 'Gambia The', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(81, 'Georgia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(82, 'Germany', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(83, 'Ghana', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(84, 'Gibraltar', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(85, 'Greece', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(86, 'Greenland', '2018-07-20 20:11:03', '2021-11-10 17:38:05'),
(87, 'Grenada', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(88, 'Guadeloupe', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(89, 'Guam', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(90, 'Guatemala', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(91, 'Guernsey and Alderney', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(92, 'Guinea', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(93, 'Guinea-Bissau', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(94, 'Guyana', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(95, 'Haiti', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(96, 'Heard Island and McDonald Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(97, 'Honduras', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(98, 'Hong Kong S.A.R.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(99, 'Hungary', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(100, 'Iceland', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(101, 'India', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(102, 'Indonesia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(103, 'Iran', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(104, 'Iraq', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(105, 'Ireland', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(106, 'Israel', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(107, 'Italy', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(108, 'Jamaica', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(109, 'Japan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(110, 'Jersey', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(111, 'Jordan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(112, 'Kazakhstan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(113, 'Kenya', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(114, 'Kiribati', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(115, 'North Korea', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(116, 'South Korea', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(117, 'Kuwait', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(118, 'Kyrgyzstan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(119, 'Laos', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(120, 'Latvia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(121, 'Lebanon', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(122, 'Lesotho', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(123, 'Liberia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(124, 'Libya', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(125, 'Liechtenstein', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(126, 'Lithuania', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(127, 'Luxembourg', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(128, 'Macau S.A.R.', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(129, 'Macedonia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(130, 'Madagascar', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(131, 'Malawi', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(132, 'Malaysia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(133, 'Maldives', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(134, 'Mali', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(135, 'Malta', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(136, 'Man (Isle of)', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(137, 'Marshall Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(138, 'Martinique', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(139, 'Mauritania', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(140, 'Mauritius', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(141, 'Mayotte', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(142, 'Mexico', '2018-07-20 20:11:03', '2021-11-10 17:38:35'),
(143, 'Micronesia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(144, 'Moldova', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(145, 'Monaco', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(146, 'Mongolia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(147, 'Montenegro', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(148, 'Montserrat', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(149, 'Morocco', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(150, 'Mozambique', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(151, 'Myanmar', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(152, 'Namibia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(153, 'Nauru', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(154, 'Nepal', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(155, 'Bonaire, Sint Eustatius and Saba', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(156, 'Netherlands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(157, 'New Caledonia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(158, 'New Zealand', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(159, 'Nicaragua', '2018-07-20 20:11:03', '2021-11-10 17:38:38'),
(160, 'Niger', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(161, 'Nigeria', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(162, 'Niue', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(163, 'Norfolk Island', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(164, 'Northern Mariana Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(165, 'Norway', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(166, 'Oman', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(167, 'Pakistan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(168, 'Palau', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(169, 'Palestinian Territory Occupied', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(170, 'Panama', '2018-07-20 20:11:03', '2021-11-10 17:38:50'),
(171, 'Papua new Guinea', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(172, 'Paraguay', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(173, 'Peru', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(174, 'Philippines', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(175, 'Pitcairn Island', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(176, 'Poland', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(177, 'Portugal', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(178, 'Puerto Rico', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(179, 'Qatar', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(180, 'Reunion', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(181, 'Romania', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(182, 'Russia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(183, 'Rwanda', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(184, 'Saint Helena', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(185, 'Saint Kitts And Nevis', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(186, 'Saint Lucia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(187, 'Saint Pierre and Miquelon', '2018-07-20 20:11:03', '2021-11-10 17:39:09'),
(188, 'Saint Vincent And The Grenadines', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(189, 'Saint-Barthelemy', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(190, 'Saint-Martin (French part)', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(191, 'Samoa', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(192, 'San Marino', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(193, 'Sao Tome and Principe', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(194, 'Saudi Arabia', '2018-07-20 20:11:03', '2021-09-26 13:09:09'),
(195, 'Senegal', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(196, 'Serbia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(197, 'Seychelles', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(198, 'Sierra Leone', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(199, 'Singapore', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(200, 'Slovakia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(201, 'Slovenia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(202, 'Solomon Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(203, 'Somalia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(204, 'South Africa', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(205, 'South Georgia', '2018-07-20 20:11:03', '2021-11-10 14:55:48'),
(206, 'South Sudan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(207, 'Spain', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(208, 'Sri Lanka', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(209, 'Sudan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(210, 'Suriname', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(211, 'Svalbard And Jan Mayen Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(212, 'Swaziland', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(213, 'Sweden', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(214, 'Switzerland', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(215, 'Syria', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(216, 'Taiwan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(217, 'Tajikistan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(218, 'Tanzania', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(219, 'Thailand', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(220, 'Togo', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(221, 'Tokelau', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(222, 'Tonga', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(223, 'Trinidad And Tobago', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(224, 'Tunisia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(225, 'Turkey', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(226, 'Turkmenistan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(227, 'Turks And Caicos Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(228, 'Tuvalu', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(229, 'Uganda', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(230, 'Ukraine', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(231, 'United Arab Emirates', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(232, 'United Kingdom', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(233, 'United States', '2018-07-20 20:11:03', '2021-11-10 17:39:24'),
(234, 'United States Minor Outlying Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(235, 'Uruguay', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(236, 'Uzbekistan', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(237, 'Vanuatu', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(238, 'Vatican City State (Holy See)', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(239, 'Venezuela', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(240, 'Vietnam', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(241, 'Virgin Islands (British)', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(242, 'Virgin Islands (US)', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(243, 'Wallis And Futuna Islands', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(244, 'Western Sahara', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(245, 'Yemen', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(246, 'Zambia', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(247, 'Zimbabwe', '2018-07-20 20:11:03', '2021-08-01 14:37:27'),
(248, 'Kosovo', '2020-08-15 15:33:50', '2021-08-01 14:37:57'),
(249, 'Curaçao', '2020-10-25 14:54:20', '2021-08-01 14:37:27'),
(250, 'Sint Maarten (Dutch part)', '2020-12-05 13:03:39', '2021-08-01 14:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `image`, `status`, `description`, `created_at`, `updated_at`) VALUES
(3, 'New Zealand', 'new zealand.jpg', 'Active', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available', '2022-01-24 12:47:40', '2022-01-24 12:47:40'),
(4, 'Switzerland', 'switzerland.jpg', 'Active', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available', '2022-01-24 12:48:11', '2022-01-24 12:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2022_01_24_143629_create_destinations_table', 2),
(5, '2022_01_24_155925_create_services_table', 3),
(7, '2022_01_24_161940_create_visa_requirments_table', 4),
(10, '2022_01_24_175627_create_packages_table', 6),
(11, '2022_05_29_164451_create_categories_table', 7),
(13, '2022_01_24_170815_create_applications_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_night` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_inclusion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_exclusions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `country`, `city`, `total_night`, `total_day`, `price`, `discount_price`, `amenities`, `package_category`, `package_type`, `package_description`, `package_inclusion`, `package_exclusions`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Switzerland', 'Switzerland', 'Thund', '04', '04', '12000', '50', 'Meal,Internet free wifi,Bathroom with shower,TV facilities,Swimming pool,Coffee and Tea,Fitness,Parking,Blanket', 'International', 'Luxury Package', '<h2 style=\"font-style:italic\">In publishing and graphic design,</h2>\r\n\r\n<p>&nbsp;Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '<h2 style=\"font-style:italic\">In publishing and graphic design,</h2>\r\n\r\n<p>&nbsp;Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '<h2 style=\"font-style:italic\">In publishing and graphic design,</h2>\r\n\r\n<p>&nbsp;Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '1654335456.jpg', 'Active', '2022-06-02 00:31:05', '2022-06-04 04:37:36'),
(8, 'Scott Pate', 'Pakistan', 'Shinkiari', '04', '04', '2000', '200', 'Meal,Swimming pool,Parking,Kitchen facilities,Free Drink,Pillows', 'Domestic', 'Premium Package', '<h3>In publishing and graphic design,</h3>\r\n\r\n<p>&nbsp;Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>In publishing and graphic design, Lore</li>\r\n	<li>m ipsum is a placeholder text commonly used to d</li>\r\n	<li>emonstrate the visual form of a document or a typeface with</li>\r\n	<li>out relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</li>\r\n</ol>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '<h3>Here is Package Inclusion</h3>\r\n\r\n<p>&nbsp;Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>In publishing and graphic design, Lore</li>\r\n	<li>m ipsum is a placeholder text commonly used to d</li>\r\n	<li>emonstrate the visual form of a document or a typeface with</li>\r\n	<li>out relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</li>\r\n</ol>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '<h3>Here is Package ExcIusions</h3>\r\n\r\n<p>&nbsp;Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>In publishing and graphic design, Lore</li>\r\n	<li>m ipsum is a placeholder text commonly used to d</li>\r\n	<li>emonstrate the visual form of a document or a typeface with</li>\r\n	<li>out relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</li>\r\n</ol>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '1654335360.jpg', 'Active', '2022-06-02 02:08:12', '2022-06-04 04:36:00'),
(10, 'Gray Simon', 'Ducimus adipisicing', 'Iste adipisicing com', 'Co', '1', '864', '104', 'Internet free wifi,Swimming pool,Coffee and Tea,Kitchen facilities,Free Drink,Blanket,Pillows,Visa,Meet and Greet,Dinner,Offer,Sightseeing', 'International', 'Honeymoon', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design, Lorem</li>\r\n	<li>ipsum is a placeholder text commonly used</li>\r\n	<li>to demonstrate the visual form of a document or</li>\r\n	<li>a typeface without relying on meaningful content. Lorem ipsu</li>\r\n	<li>m may be used as a placeholder before final copy is available.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design, Lorem</li>\r\n	<li>ipsum is a placeholder text commonly used</li>\r\n	<li>to demonstrate the visual form of a document or</li>\r\n	<li>a typeface without relying on meaningful content. Lorem ipsu</li>\r\n	<li>m may be used as a placeholder before final copy is available.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design, Lorem</li>\r\n	<li>ipsum is a placeholder text commonly used</li>\r\n	<li>to demonstrate the visual form of a document or</li>\r\n	<li>a typeface without relying on meaningful content. Lorem ipsu</li>\r\n	<li>m may be used as a placeholder before final copy is available.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '1654335340.jpg', 'Active', '2022-06-04 04:31:30', '2022-06-04 04:35:40');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Business Visa', 'business visa.jpg', 'Active', 'We helped with other family based employment based and investment based Immigration.', '2022-01-24 11:01:31', '2022-01-24 12:48:35'),
(3, 'Student Visa', 'student visa.jpg', 'Active', 'We helped with other family based employment based and investment based Immigration.', '2022-01-24 12:48:49', '2022-01-24 12:48:49'),
(4, 'Tourest Visa', 'tourist visa.jpg', 'Active', 'We helped with other family based employment based and investment based Immigration.', '2022-01-24 12:49:08', '2022-01-24 12:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@info.com', '$2y$10$Bk6qBtg1w0r7X05E5rDnhuLUHwrWMP72QqWCu2UckKjlyUUfFOWoy', 'Admin', '01.jpg', NULL, NULL, '2022-01-24 09:17:04', '2022-05-23 01:03:37'),
(3, 'User', 'arhamkhaninnocent@gmail.com', '$2y$10$cW4imBndcc.DrMtr5BeE9eUqAQDVh/L8tHFPD..gcsh6X5SqcC6Jq', 'User', '08.jpg', NULL, NULL, '2022-01-24 09:35:59', '2022-05-29 13:13:11'),
(6, 'Arham Khan', 'arham@info.com', '$2y$10$Bk6qBtg1w0r7X05E5rDnhuLUHwrWMP72QqWCu2UckKjlyUUfFOWoy', 'User', '08.jpg', NULL, NULL, '2022-01-25 11:04:10', '2022-01-25 11:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `visa_requirments`
--

CREATE TABLE `visa_requirments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embassy_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tourist_visa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_visa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_timeline` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visa_requirments`
--

INSERT INTO `visa_requirments` (`id`, `country`, `capital`, `currency`, `embassy_address`, `email`, `telephone`, `fax`, `website_link`, `tourist_visa`, `business_visa`, `process_timeline`, `status`, `visa_form`, `image`, `created_at`, `updated_at`) VALUES
(1, '233', 'New York', 'USD', 'New York', 'newyork@usa.com', '+13559556231', '+1 (738) 384-3087', 'www.usa.com', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design,</li>\r\n	<li>Lorem ipsum is a placeholder text c</li>\r\n	<li>ommonly used to demonstrate the visual for</li>\r\n	<li>m of a document or a typeface without relying on me</li>\r\n	<li>aningful content. Lorem ipsum may be used as a placeholder befo</li>\r\n	<li>re the final copy is available.</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design,</li>\r\n	<li>Lorem ipsum is a placeholder text c</li>\r\n	<li>ommonly used to demonstrate the visual for</li>\r\n	<li>m of a document or a typeface without relying on me</li>\r\n	<li>aningful content. Lorem ipsum may be used as a placeholder befo</li>\r\n	<li>re the final copy is available.</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design,</li>\r\n	<li>Lorem ipsum is a placeholder text c</li>\r\n	<li>ommonly used to demonstrate the visual for</li>\r\n	<li>m of a document or a typeface without relying on me</li>\r\n	<li>aningful content. Lorem ipsum may be used as a placeholder befo</li>\r\n	<li>re the final copy is available.</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', 'Active', 'c-1.jpg', 'featurs-4.jpg', '2022-01-24 11:34:35', '2022-05-23 07:19:05'),
(3, '232', 'London', 'Euro', 'UK', 'uk@info.co.uk', '+95-65465-6545646', '+1 (589) 312-3784', 'uk.co.uk', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design,</li>\r\n	<li>Lorem ipsum is a placeholder text c</li>\r\n	<li>ommonly used to demonstrate the visual for</li>\r\n	<li>m of a document or a typeface without relying on me</li>\r\n	<li>aningful content. Lorem ipsum may be used as a placeholder befo</li>\r\n	<li>re the final copy is available.</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design,</li>\r\n	<li>Lorem ipsum is a placeholder text c</li>\r\n	<li>ommonly used to demonstrate the visual for</li>\r\n	<li>m of a document or a typeface without relying on me</li>\r\n	<li>aningful content. Lorem ipsum may be used as a placeholder befo</li>\r\n	<li>re the final copy is available.</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', '<p><strong>In publishing and graphic design,</strong></p>\r\n\r\n<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n\r\n<ul>\r\n	<li>In publishing and graphic design,</li>\r\n	<li>Lorem ipsum is a placeholder text c</li>\r\n	<li>ommonly used to demonstrate the visual for</li>\r\n	<li>m of a document or a typeface without relying on me</li>\r\n	<li>aningful content. Lorem ipsum may be used as a placeholder befo</li>\r\n	<li>re the final copy is available.</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n</blockquote>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', 'Active', 'App Loan.pdf', 'b7.jpg', '2022-01-25 00:46:48', '2022-06-03 01:06:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visa_requirments`
--
ALTER TABLE `visa_requirments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visa_requirments`
--
ALTER TABLE `visa_requirments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
