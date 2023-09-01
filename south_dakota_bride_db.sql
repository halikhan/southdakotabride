-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 06:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `south_dakota_bride_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_vendors`
--

CREATE TABLE `about_vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutvendor` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stoplight` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_vendors`
--

INSERT INTO `about_vendors` (`id`, `user_id`, `aboutvendor`, `slug`, `reviews`, `stoplight`, `image`, `image2`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'tad-benjamin', 'Lorem ipsum may be used as a placeholder before final copy is available.', 'Lorem ipsum may be used as a placeholder before final copy is available.', 'sample.pdf', 'sample.pdf', '1', '2022-07-08 17:49:30', '2022-07-08 17:49:30'),
(2, '5', 'publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'shad-king', 'Dolore quae dolorem', 'Animi voluptatem co', 'sample.pdf', 'sample.pdf', '1', '2022-07-15 14:21:53', '2022-07-15 14:21:53'),
(3, '6', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'dane-lemel', 'Ut aperiam deserunt', 'Nobis ratione illum', 'sample.pdf', 'sample.pdf', '1', '2022-07-15 14:23:26', '2022-07-15 14:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `groom`, `bride`, `slug`, `content`, `content_two`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'James Albert', 'Julie Williams', 'james-albert-julie-williams', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, 'Articles-img-2.png', '1', '2022-06-08 11:09:54', '2022-07-07 19:29:44'),
(2, 'John Watson', 'Julie Williams', 'john-watson-julie-williams', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, 'Articles-img-1.png', '1', '2022-06-08 11:11:32', '2022-07-06 12:38:13'),
(3, 'John Albert', 'Hellen', 'john-albert-hellen', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, 'Articles-img-3.png', '1', '2022-06-08 11:12:21', '2022-07-06 12:38:24'),
(4, 'John Wick', 'Seriena Taylor', 'john-wick-seriena-taylor', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, 'img3.png', '1', '2022-06-09 11:38:41', '2022-07-06 12:38:39'),
(5, 'Fredston', 'Sophia.', 'fredston-sophia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, 'Articles-img-2.png', '1', '2022-06-09 11:40:03', '2022-07-07 14:02:33'),
(6, 'Alex Carry', 'Emma watson', 'alex-carry-emma-watson', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, 'engagement-banner.png', '1', '2022-06-09 11:40:48', '2022-07-06 12:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `book_vendors`
--

CREATE TABLE `book_vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `wedding_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_vendors`
--

INSERT INTO `book_vendors` (`id`, `user_id`, `wedding_id`, `vendor_id`, `service`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 6, '1', '2022-07-08 17:55:44', '2022-07-19 14:59:53'),
(2, 2, 2, 5, '1', '2022-07-08 18:01:12', '2022-07-13 18:19:51'),
(3, 2, 3, 3, '1', '2022-07-15 11:54:57', '2022-07-15 11:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title4` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page`, `section_name`, `title`, `slug`, `title1`, `title2`, `title3`, `title4`, `content`, `description2`, `description3`, `image2`, `image`, `pdf`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Banner', NULL, 'start-a-new-life-with-the-one-you-love', 'Start  a', 'new life', 'with the one', 'you love', NULL, NULL, NULL, NULL, '2022-06-15__1655305592__couple-image.png', NULL, '1', '2022-06-08 07:52:06', '2022-07-07 10:27:30'),
(3, '1', 'AboutSection', 'About Us', 'about-us', NULL, NULL, NULL, NULL, '<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa inventore officiis quibusdam dolore porro quo odit accusamus blanditiis optio corrupti! dolore porro quo odit accusamus blanditiis optio corrupti! consectetur adipisicing elit. Culpa inventore officiis quibusdam consectetur adipisicing elit. Culpa inventore officiis quibusdam .</p>', NULL, NULL, '2022-06-08__1654720524__about-bg_1.png', '2022-06-08__1654714615__about-overlay.png', NULL, '1', '2022-06-08 08:39:29', '2022-07-06 16:55:47'),
(4, '6', 'Banner Section', 'about us', 'about-us-banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-14__1655242980__about-us.png', NULL, '1', '2022-06-08 09:39:05', '2022-07-07 13:27:15'),
(5, '2', 'Banner Section', 'Real South Dakota Weddings', 'real-south-dakota-weddings', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-15__1655305541__banner-img-wed.png', NULL, '1', '2022-06-08 10:02:13', '2022-07-07 13:38:55'),
(6, '3', 'Engagement Section Banner', NULL, 'south-dakota-bride-engagements-slug', 'South Dakota', 'bride', 'Engagements', 'slug', NULL, NULL, NULL, NULL, '2022-06-15__1655305761__engagement-banner.png', NULL, '1', '2022-06-08 10:11:53', '2022-07-07 15:11:53'),
(7, '4', 'Vendors Banner Section', 'vendors', 'vendors', NULL, NULL, NULL, NULL, NULL, NULL, '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', NULL, '2022-06-15__1655306047__vendors-banner.png', NULL, '1', '2022-06-08 10:17:53', '2022-07-06 17:00:06'),
(8, '7', 'Wedding Blog Banner', 'Weddings blog', 'weddings-blog', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-15__1655306209__Articles-banner.png', NULL, '1', '2022-06-08 10:42:00', '2022-07-06 12:00:34'),
(9, '5', 'Events Banner', 'upcoming events', 'upcoming-events', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-15__1655306292__event-banner.png', NULL, '1', '2022-06-08 10:45:33', '2022-07-06 11:55:23'),
(10, '1', 'Plan Your Wedding Section', 'plan your wedding with us', 'plan-your-wedding-with-us', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore. maxime mollitia nobis unt unde at assumend.<br />\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore. maxime mollitia nobis unt.<br />\r\nmaxime mollitia nobis unt.</p>', NULL, NULL, NULL, '1', '2022-06-08 11:59:44', '2022-07-06 17:14:40'),
(11, '1', 'Attention All Vendors', 'Attention all vendors!', 'attention-all-vendors', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor&nbsp;sit amet consectetur adipisicing elit. Ipsam, assumenda Lorem<br />\r\nipsum dolor sit amet consectetur</p>', NULL, '2022-06-08__1654727156__reg-bg.png', NULL, '1', '2022-06-08 12:13:05', '2022-07-06 17:16:15'),
(12, '1', 'Meet Our vendors', 'Meet Our vendors', 'meet-our-vendors', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore. maxime mollitia nobis unt unde at assumend.<br />\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore. maxime mollitia nobis unt.<br />\r\nmaxime mollitia nobis unt.</p>', NULL, NULL, NULL, '1', '2022-06-09 05:01:46', '2022-07-06 11:56:10'),
(13, '8', 'Contact us Banner Section', 'contact us', 'contact-us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-15__1655305485__contact-us.png', NULL, '1', '2022-06-09 09:05:21', '2022-07-06 11:56:26'),
(17, '9', 'South Dakota Bride Wedding Guide', 'South Dakota Bride Wedding Guide', 'south-dakota-bride-wedding-guide', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, NULL, '2022-06-10__1654878750__sample.pdf', '1', '2022-06-09 11:26:29', '2022-06-10 11:32:30'),
(18, '9', 'getting started', 'getting started', 'getting-started', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, NULL, '2022-06-10__1654878773__sample.pdf', '1', '2022-06-09 11:27:19', '2022-06-10 11:32:53'),
(20, '9', 'discuss finances checklist', 'discuss finances checklist', 'discuss-finances-checklist', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque</p>', NULL, NULL, '2022-06-10__1654878792__sample.pdf', '1', '2022-06-09 11:29:14', '2022-06-10 11:33:12'),
(21, '9', 'budget worksheets', 'budget worksheets', 'budget-worksheets', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, NULL, '2022-06-10__1654878801__sample.pdf', '1', '2022-06-09 11:29:53', '2022-06-10 11:33:21'),
(22, '9', 'now the fun begins', 'now the fun begins', 'now-the-fun-begins', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, NULL, '2022-06-10__1654878812__sample.pdf', '1', '2022-06-09 11:30:18', '2022-06-10 11:33:32'),
(23, '9', 'recepition venues', 'recepition venues', 'recepition-venues', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, NULL, '2022-06-10__1654878821__sample.pdf', '1', '2022-06-09 11:30:44', '2022-06-10 11:33:41'),
(24, '9', 'ceremony details', 'ceremony details', 'ceremony-details', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, NULL, '2022-06-10__1654878832__sample.pdf', '1', '2022-06-09 11:31:21', '2022-06-10 11:33:52'),
(25, '9', 'recepition details', 'recepition details', 'recepition-details', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, NULL, '2022-06-10__1654878842__sample.pdf', '1', '2022-06-09 11:31:50', '2022-06-10 11:34:02'),
(26, '9', 'payment records', 'payment records', 'payment-records', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas</p>', NULL, NULL, '2022-06-10__1654878853__sample.pdf', '1', '2022-06-09 11:32:40', '2022-06-10 11:34:13'),
(27, '9', 'wedding party and timeline', 'wedding party and timeline', 'wedding-party-and-timeline', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas.</p>', NULL, NULL, '2022-06-10__1654878862__sample.pdf', '1', '2022-06-09 11:33:08', '2022-06-10 11:34:22'),
(28, '9', 'wedding day checklist', 'wedding day checklist', 'wedding-day-checklist', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas</p>', NULL, NULL, '2022-06-10__1654878872__sample.pdf', '1', '2022-06-09 11:33:30', '2022-06-10 11:34:32'),
(29, '9', 'photo checklist', 'photo checklist', 'photo-checklist', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas</p>', NULL, NULL, '2022-06-10__1654894540__sample.pdf', '1', '2022-06-09 11:34:10', '2022-06-10 15:55:40'),
(30, '9', '2022-23 calenders', '2022-23 calenders', '2022-23-calenders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-10__1654878909__sample.pdf', '1', '2022-06-09 11:54:57', '2022-06-10 11:35:09'),
(31, '9', 'South-Dakota-Brides planner guide', 'South-Dakota-Brides planner guide', 'south-dakota-brides-planner-guide', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas.</p>', NULL, NULL, '2022-06-10__1654874004__sample.pdf', '1', '2022-06-09 11:55:22', '2022-06-10 05:13:24'),
(32, '9', 'wedding timeline checklist', 'wedding timeline checklist', 'wedding-timeline-checklist', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, '2022-06-14__1655250146__sample.pdf', '1', '2022-06-09 12:00:58', '2022-06-14 18:42:26'),
(33, '6', 'Welcome South Dakota Birde', 'South-Dakota-Bride', 'south-dakota-bride', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! deleniti. Cum consequuntur quisquam placeat est libero quos eaque deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! deleniti. Cum consequuntur quisquam placeat est libero quos eaque deleniti. Cum consequuntur quisquam placeat est libero quos eaque. deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit fugiat ipsa corrupti illo quaerat, sit totam mollitia eaque, expedita labore quas nulla est illum. Voluptatem, consequatur! Ipsam nam iusto, dicta architecto esse sequi veritatis perspiciatis voluptate optio qui eos laboriosam cumque adipisci consectetur minus. Eos vel numquam laborum quo, aut molestias autem exercitationem dolore, maxime delectus reiciendis. Nesciunt repudiandae cupiditate earum nihil soluta, accusantium blanditiis maiores in mollitia amet minus maxime. Alias ipsam nobis saepe officia maxime ab officiis tempora nam aut ullam voluptas laudantium culpa, odit voluptatibus dolore temporibus doloremque, quia porro non. Cumque dolore similique doloremque rerum nemo.</p>', NULL, '2022-06-14__1655248242__about-sec-img.png', NULL, '1', '2022-06-14 11:09:05', '2022-06-14 18:10:42'),
(34, '6', 'Welcome to South-Dakota-Bride', 'South-Dakota-Bride', 'south-dakota-bride-welcome', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! deleniti. Cum consequuntur quisquam placeat est libero quos eaque deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! deleniti. Cum consequuntur quisquam placeat est libero quos eaque deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', NULL, '2022-06-14__1655248177__about-sec-img_1.png', NULL, '1', '2022-06-14 11:35:35', '2022-07-07 13:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `configuration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `configuration`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'COPYRIGHTS ALL RIGHTS RESERVED 2022 BY SOUTH DAKOTA BRIDE', 'copyrights', '2022-06-08 10:05:29', '2022-07-06 16:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `contact_management`
--

CREATE TABLE `contact_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_management`
--

INSERT INTO `contact_management` (`id`, `title`, `slug`, `description`, `phone_number`, `email`, `location`, `created_at`, `updated_at`) VALUES
(2, 'get in touch', 'get-in-touch', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit fugiat ipsa corrupti illo quaerat, sit totam mollitia eaqu</p>', '(121) 212-1221', 'example@Xyz.com', '123 street, new york city, United state', '2022-06-09 11:24:34', '2022-07-07 13:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `engagements`
--

CREATE TABLE `engagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceremony` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_management`
--

CREATE TABLE `event_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_management`
--

INSERT INTO `event_management` (`id`, `title`, `slug`, `image`, `description`, `location`, `event_date`, `event_time`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Party', 'wedding-party', 'event-img2.png', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', 'XYZ Street, New York City, United States', '2022-06-10', '10:48:59 PM', '2022-06-09 13:28:20', '2022-07-06 12:16:49'),
(2, 'Engagement Party', 'engagement-party', 'event-img1.png', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', '123 street, new york city, United state', '2022-06-13', '11:28:54 PM', '2022-06-09 13:29:38', '2022-07-06 12:17:08'),
(3, 'Party Venue', 'party-venue', 'event-img3.png', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque, laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit deleniti. Cum consequuntur quisquam placeat est libero quos eaque.</p>', '123 street, new york city, Unity state', '2022-06-16', '11:30:27 PM', '2022-06-09 13:31:15', '2022-07-06 12:18:52'),
(6, 'Lovers togheter', 'lovers-togheter', '1.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '19-Sep-1982', '2015-11-06', '13-Aug-1995', '2022-07-08 17:05:56', '2022-07-08 17:06:55');

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
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wedding_id` int(11) DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ceremony` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `wedding_id`, `user_id`, `ceremony`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '2', '[\"165732123726.jpg\",\"165732123732.jpg\",\"165732123775.jpg\",\"16573212379.jpg\"]', '2022-07-08 17:48:28', '2022-07-08 18:00:37'),
(3, 2, '2', '2', '[\"165732127270.jpg\",\"165732127290.jpg\",\"165732127233.jpg\",\"165732127291.jpg\"]', '2022-07-08 18:01:12', '2022-07-08 18:01:12'),
(4, NULL, '3', NULL, '[\"165732133558.jpg\",\"165732133529.jpg\",\"16573213354.jpg\",\"165732133580.jpg\",\"165732133577.jpg\",\"165732133587.jpg\",\"16573213357.jpg\"]', '2022-07-08 18:02:15', '2022-07-08 18:02:15'),
(5, 3, '2', '1', '[\"165790409777.jpg\",\"165790409744.jpg\",\"165790409784.jpg\",\"165790409734.jpg\",\"165790409787.jpg\"]', '2022-07-15 11:54:57', '2022-07-15 11:54:57'),
(6, 4, '1', NULL, '[\"16581839826.jpg\"]', '2022-07-18 17:39:42', '2022-07-18 17:39:42'),
(7, NULL, '24', NULL, '[\"165825358623.jpg\",\"165825358645.jpg\",\"165825358688.jpg\",\"16582535865.jpg\"]', '2022-07-19 12:59:46', '2022-07-19 12:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `user_id`, `name`, `slug`, `email`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sybill Alford', 'autem-quis-a-ut-do-f', 'qele@mailinator.com', '(184) 578-2580', 'Autem quis a ut do f', '2022-07-19 13:16:18', '2022-07-19 13:16:18'),
(2, NULL, 'Mia Schroeder', 'aperiam-ut-suscipit', 'vureberus@mailinator.com', '(137) 898-6541', 'Aperiam ut suscipit', '2022-07-19 18:46:01', '2022-07-19 18:46:01'),
(3, NULL, 'Kylee Ball', 'cupiditate-mollit-ve', 'djoy62471@gmail.com', '(113) 482-6434', 'Cupiditate mollit veCupiditate mollit veCupiditate mollit veCupiditate mollit ve', '2022-07-20 14:31:55', '2022-07-20 14:31:55'),
(4, NULL, 'Raven Greene', 'et-numquam-molestias', 'djoy62471@gmail.com', '(178) 227-8846', 'Et numquam molestiasEt numquam molestiasEt numquam molestiasEt numquam molestias', '2022-07-20 14:33:05', '2022-07-20 14:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `user_id`, `location`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sioux Falls', 'sioux-falls', '1', '2022-06-08 18:54:38', '2022-07-06 14:47:16'),
(2, NULL, 'Rapid City', 'rapid-city', '1', '2022-06-08 19:00:38', '2022-07-06 14:47:24'),
(3, NULL, 'Aberdeen', 'aberdeen', '1', '2022-06-08 19:00:47', '2022-07-06 14:47:27'),
(4, NULL, 'Brookings', 'brookings', '1', '2022-06-08 19:00:55', '2022-07-06 14:47:31'),
(5, NULL, 'Watertown', 'watertown', '1', '2022-06-08 19:01:03', '2022-07-06 14:47:35'),
(6, NULL, 'Mitchell', 'mitchell', '1', '2022-06-08 19:01:14', '2022-07-06 14:47:38'),
(7, NULL, 'Yankton', 'yankton', '1', '2022-06-08 19:01:22', '2022-07-06 14:47:43'),
(8, NULL, 'Pierre', 'pierre', '1', '2022-06-08 19:01:29', '2022-07-06 14:47:46'),
(9, NULL, 'Chamberlain', 'chamberlain', '1', '2022-06-08 19:01:37', '2022-07-06 14:47:50'),
(10, NULL, 'Vermillion', 'vermillion', '1', '2022-06-08 19:01:52', '2022-07-06 14:47:53'),
(11, NULL, 'Huron', 'huron', '1', '2022-06-08 19:02:14', '2022-07-06 14:47:58'),
(12, NULL, 'Brandon', 'brandon', '1', '2022-06-08 19:02:28', '2022-07-06 14:48:02'),
(13, NULL, 'Tea', 'tea', '1', '2022-06-08 19:02:37', '2022-07-06 14:48:07'),
(14, NULL, 'Harrisburg', 'harrisburg', '1', '2022-06-08 19:02:49', '2022-07-06 14:48:12'),
(15, NULL, 'Dell Rapids', 'dell-rapids', '1', '2022-06-08 19:03:03', '2022-07-06 14:48:19'),
(16, NULL, 'Sioux City, IA', 'sioux-city-ia', '1', '2022-06-08 19:03:22', '2022-07-06 14:48:25'),
(17, NULL, 'Brandon SD', 'brandon-sd', '1', '2022-06-08 19:04:48', '2022-07-06 14:48:29'),
(18, NULL, 'Madison SD', 'madison-sd', '1', '2022-06-08 19:04:58', '2022-07-06 14:48:34'),
(19, NULL, 'Brookings, SD', 'brookings-sd', '1', '2022-06-08 19:05:34', '2022-07-06 14:48:49'),
(20, NULL, 'Vermillion, SD', 'vermillion-sd', '1', '2022-06-08 19:05:46', '2022-07-06 14:48:52'),
(21, NULL, 'Worthington, MN', 'worthington-mn', '1', '2022-06-08 19:05:57', '2022-07-06 14:48:57'),
(22, NULL, 'Yankton, SD', 'yankton-sd', '1', '2022-06-08 19:06:07', '2022-07-06 14:49:02'),
(23, NULL, 'Le Mars, IA', 'le-mars-ia', '1', '2022-06-08 19:06:16', '2022-07-06 14:49:07'),
(24, NULL, 'Mitchell, SD', 'mitchell-sd', '1', '2022-06-08 19:06:26', '2022-07-06 14:49:12'),
(25, NULL, 'Sioux City, IA', 'sioux-city-ia', '1', '2022-06-08 19:06:36', '2022-07-06 14:49:18'),
(26, NULL, 'South Sioux City, NE', 'south-sioux-city-ne', '1', '2022-06-08 19:06:45', '2022-07-06 14:49:30'),
(27, NULL, 'Marshall, MN', 'marshall-mn', '1', '2022-06-08 19:06:54', '2022-07-06 14:49:35'),
(28, NULL, 'Spencer, IA', 'spencer-ia', '1', '2022-06-08 19:07:03', '2022-07-06 14:49:39'),
(29, NULL, 'Huron, SD', 'huron-sd', '1', '2022-06-08 19:07:15', '2022-07-06 14:49:43'),
(30, NULL, 'Watertown, SD', 'watertown-sd', '1', '2022-06-08 19:07:25', '2022-07-06 14:49:46'),
(31, NULL, 'Storm Lake, IA', 'storm-lake-ia', '1', '2022-06-08 19:07:36', '2022-07-06 14:49:51'),
(32, NULL, 'Okoboji, IA', 'okoboji-ia', '1', '2022-06-08 19:07:47', '2022-07-06 14:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `logo_managers`
--

CREATE TABLE `logo_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo_managers`
--

INSERT INTO `logo_managers` (`id`, `image`, `image_name`, `image_type`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, '2022-07-14__1657820477__2022-06-07__1654638096__logo.svg', NULL, NULL, 'logo', 'logo', '2022-06-07 16:21:33', '2022-07-14 12:41:17'),
(2, '2022-06-07__1654638035__white-logo.svg', NULL, NULL, 'favicon', 'favicon', '2022-06-07 16:22:29', '2022-07-07 13:21:10');

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
(1, '', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_30_184922_create_logo_managers_table', 1),
(6, '2022_03_30_185503_create_cms_table', 1),
(7, '2022_03_31_231228_create_sociallinks_table', 1),
(8, '2022_04_01_165242_create_blogs_table', 1),
(9, '2022_04_01_214720_create_configs_table', 1),
(10, '2022_04_04_222236_create_f_a_q_s_table', 1),
(11, '2022_04_05_181654_create_packages_table', 1),
(12, '2022_04_05_184749_create_subcriptions_table', 1),
(13, '2022_04_12_172819_create_frontends_table', 1),
(14, '2022_04_12_173216_create_pages_table', 1),
(15, '2022_04_13_214717_create_videos_table', 1),
(16, '2022_04_14_173454_create_audio_table', 1),
(17, '2022_04_15_175836_create_background_audio_table', 1),
(18, '2022_05_09_193945_create_checkouts_table', 1),
(19, '2022_05_15_014713_create_appoinments_table', 1),
(20, '2022_05_16_235531_create_book__coaches_table', 1),
(21, '2022_05_17_221414_create_messages_table', 1),
(22, '2022_05_18_194619_create_re_scheduleds_table', 1),
(23, '2022_05_18_194813_create_disputes_table', 1),
(24, '2022_05_18_222755_create_rateings_table', 1),
(25, '2022_05_24_152416_create_book_evaluators_table', 1),
(26, '2022_05_24_230336_create_challenges_table', 1),
(27, '2022_05_25_153119_create_evaluator_assesments_table', 1),
(28, '2022_05_31_195841_create_coach_ratings_table', 1),
(29, '2022_05_31_214932_create_evaluator_rateings_table', 1),
(30, '2022_06_03_163321_create_ratin_by_evaluators_table', 1),
(31, '2022_06_07_223747_create_privacy_policies_table', 2),
(32, '2022_06_07_231633_create_terms_conditions_table', 3),
(33, '2022_06_08_192801_create_weddings_table', 4),
(34, '2022_06_08_215836_create_services_table', 4),
(35, '2022_06_08_234513_create_locations_table', 5),
(36, '2022_06_09_164352_create_engagements_table', 6),
(37, '2022_06_09_174148_create_user_locations_table', 7),
(38, '2022_06_09_204601_create_testimonials_table', 8),
(39, '2022_06_09_225842_create_inquiries_table', 9),
(40, '2014_10_12_000000_create_users_table', 10),
(41, '2022_06_10_192559_create_user_services_table', 11),
(42, '2022_06_15_211028_create_payment_details_table', 12),
(43, '2022_06_16_152837_create_vendor_management_table', 13),
(44, '2022_06_16_232434_create_image_galleries_table', 14),
(45, '2022_06_23_030405_create_book_vendors_table', 15),
(46, '2022_06_28_153614_create_ratings_table', 16),
(47, '2022_06_28_190806_create_vendor_contacts_table', 17),
(48, '2022_06_28_223316_create_about_vendors_table', 18),
(49, '2022_07_04_165959_create_vendor_socials_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deatails` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `type`, `title`, `slug`, `amount`, `deatails`, `mid_details`, `sale_tax`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet,', 'Free', 'free', '599.00', 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet,', '37', '2022-06-08 18:09:33', '2022-07-06 14:15:32'),
(2, 'Lorem ipsum dolor sit amet', 'basic', 'basic', '999.00', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', NULL, '2022-06-08 18:17:34', '2022-07-06 14:15:36'),
(3, 'Lorem ipsum dolor sit amet', 'regular', 'regular', '1999.00', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', NULL, '2022-06-08 18:18:22', '2022-07-06 14:15:39'),
(4, 'Lorem ipsum dolor sit amet', 'vip listing', 'vip-listing', '2599.00', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', NULL, '2022-06-08 18:19:05', '2022-07-06 14:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `created_at`, `updated_at`) VALUES
(1, 'Home', '2022-06-08 11:45:32', '2022-06-08 11:45:32'),
(2, 'Weddings', '2022-06-08 12:33:38', '2022-06-08 12:33:38'),
(3, 'Engagements', '2022-06-08 12:33:49', '2022-06-08 12:33:49'),
(4, 'Vendors', '2022-06-08 12:33:59', '2022-06-08 12:33:59'),
(5, 'Events', '2022-06-08 12:34:17', '2022-06-08 12:34:17'),
(6, 'About US', '2022-06-08 14:37:58', '2022-06-08 14:37:58'),
(7, 'Blog', '2022-06-08 15:40:39', '2022-06-08 15:40:39'),
(8, 'Contact Us', '2022-06-09 14:04:50', '2022-06-09 14:04:50'),
(9, 'Planner', '2022-06-09 16:08:50', '2022-06-09 16:08:50');

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
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_response` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `user_id`, `paypal_response`, `package_title`, `package_amount`, `card_number`, `expire_date`, `cv_code`, `created_at`, `updated_at`) VALUES
(1, '3', '{\"orderID\":\"7YJ78735V46662923\",\"subscriptionID\":\"I-DK0HK4YBX081\",\"facilitatorAccessToken\":\"A21AALT8CT0qJUDzV1JSCvtMOTrrJEgioHDd5ObwMlpKh8vBYgELs8bSSqn9AwYTZiAOFrtmVhqOH-NcisCdF4E6Vknhq2M0A\",\"paymentSource\":\"paypal\"}', 'Free', '599.00', NULL, NULL, NULL, '2022-07-08 17:47:15', '2022-07-08 17:47:15'),
(2, '5', '{\"orderID\":\"3AM286256W262842M\",\"subscriptionID\":\"I-C6JW51MBVRYN\",\"facilitatorAccessToken\":\"A21AAJ3D-pdo6__bUHc1WnuTY4xIo5GUVPpubmlh9BMi0tA9rbbzqJp_mB9z71_oArhKXT5NdK1Alcq0BBddgDArGDE4azGYw\",\"paymentSource\":\"paypal\"}', 'regular', '1999.00', NULL, NULL, NULL, '2022-07-12 12:14:21', '2022-07-12 12:14:21'),
(3, '3', '{\"orderID\":\"0Y0663652A218911X\",\"subscriptionID\":\"I-RFK91P8X0ELG\",\"facilitatorAccessToken\":\"A21AAJ7tm2-t4VGRNOfY8BvFuOIGgHeFSihjW7oLzPih510zO4cOwv1MQdRSxLKhpnd6nO8-KwhYuJhmkIO7ysiUYnLbS0Raw\",\"paymentSource\":\"paypal\"}', 'vip listing', '2599.00', NULL, NULL, NULL, '2022-07-13 10:48:56', '2022-07-13 10:48:56'),
(4, '3', '{\"orderID\":\"0DG27501NN297484Y\",\"subscriptionID\":\"I-MDJL543AJVBY\",\"facilitatorAccessToken\":\"A21AAJ7tm2-t4VGRNOfY8BvFuOIGgHeFSihjW7oLzPih510zO4cOwv1MQdRSxLKhpnd6nO8-KwhYuJhmkIO7ysiUYnLbS0Raw\",\"paymentSource\":\"paypal\"}', 'basic', '999.00', NULL, NULL, NULL, '2022-07-13 10:53:26', '2022-07-13 10:53:26'),
(5, '5', '{\"orderID\":\"01X43769RD8782910\",\"subscriptionID\":\"I-EYPF7B7ULP53\",\"facilitatorAccessToken\":\"A21AAKsLvKztITJsgtLTOhu4LfOQhkuNxYlQh7K4-MZ2LoOI00gIuEFjg39-D3-CAFq534fXJd9viAZsMzoQML3ESXGRiazzg\",\"paymentSource\":\"paypal\"}', 'vip listing', '2599.00', NULL, NULL, NULL, '2022-07-14 12:42:57', '2022-07-14 12:42:57'),
(6, '6', '{\"orderID\":\"0V131797SJ375974D\",\"subscriptionID\":\"I-UD8BSEMXSW7D\",\"facilitatorAccessToken\":\"A21AAKsLvKztITJsgtLTOhu4LfOQhkuNxYlQh7K4-MZ2LoOI00gIuEFjg39-D3-CAFq534fXJd9viAZsMzoQML3ESXGRiazzg\",\"paymentSource\":\"paypal\"}', 'vip listing', '2599.00', NULL, NULL, NULL, '2022-07-14 12:44:29', '2022-07-14 12:44:29'),
(7, '23', '{\"orderID\":\"1XA585162V2666255\",\"subscriptionID\":\"I-A3UXF9XGMKFT\",\"facilitatorAccessToken\":\"A21AAJo2zeBivpXD0GID9ZU66DVV_nokCpeITg9mTycGwzSHvrGZ9AALp6bWwkpjOB8OVMdFNqngfIlkqeJmgV6feFFb-gqxw\",\"paymentSource\":\"paypal\"}', 'basic', '999.00', NULL, NULL, NULL, '2022-07-18 14:59:11', '2022-07-18 14:59:11'),
(8, '24', '{\"orderID\":\"5V322119U75700518\",\"subscriptionID\":\"I-HD102SUHKMVF\",\"facilitatorAccessToken\":\"A21AAL6G39GgsxYe38_UNQhMCP88D-GrGYwYWQHpPUctGX0XyylZ3WqT5xWVyJkXhDbZck1qRp52QE-O6GgRw6VSdGam084bw\",\"paymentSource\":\"paypal\"}', 'Free', '599.00', NULL, NULL, NULL, '2022-07-19 12:56:48', '2022-07-19 12:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy Check', 'privacy-policy-check', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is availableIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful&nbsp;</p>', '2022-06-07 18:02:59', '2022-07-06 12:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stars_rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `vendor_id`, `userName`, `stars_rating`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'babab', '3', 'aaaaaaaaaaaaaaa', 1, '2022-07-08 18:04:07', '2022-07-14 12:03:24'),
(2, 2, 5, 'sam', '3', 'Excellent!', 1, '2022-07-19 11:41:12', '2022-07-19 11:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `vendor_id`, `service`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Bride & Weight Loss', 'bride-weight-loss', '1', '2022-06-08 17:17:30', '2022-07-06 14:26:10'),
(2, NULL, NULL, 'Bridemaid\'s Dressess', 'bridemaids-dressess', '1', '2022-06-08 17:24:50', '2022-07-06 14:26:19'),
(3, NULL, NULL, 'Caterers', 'caterers', '1', '2022-06-08 17:33:37', '2022-07-06 14:26:22'),
(4, NULL, NULL, 'Churches', 'churches', '1', '2022-06-08 17:33:48', '2022-07-06 14:26:26'),
(5, NULL, NULL, 'DJ(Disco Jokey Or Bands)', 'djdisco-jokey-or-bands', '1', '2022-06-08 17:33:57', '2022-07-06 14:26:30'),
(6, NULL, NULL, 'Disco Jokey', 'disco-jokey', '1', '2022-06-08 17:33:57', '2022-07-06 14:27:58'),
(7, NULL, NULL, 'Formal Wear (Suits, Tuxedos)', 'formal-wear-suits-tuxedos', '1', '2022-06-08 17:34:08', '2022-07-06 14:28:11'),
(8, NULL, NULL, 'Honeymoon / Travel', 'honeymoon-travel', '1', '2022-06-08 17:34:17', '2022-07-06 14:28:15'),
(9, NULL, NULL, 'Lumousines / Party Bus', 'lumousines-party-bus', '1', '2022-06-08 17:34:27', '2022-07-06 14:28:21'),
(10, NULL, NULL, 'Photography', 'photography', '1', '2022-06-08 17:34:36', '2022-07-06 14:28:24'),
(11, NULL, NULL, 'Rental Items', 'rental-items', '1', '2022-06-08 17:34:44', '2022-07-06 14:28:30'),
(12, NULL, NULL, 'Wedding Planner', 'wedding-planner', '1', '2022-06-08 17:34:54', '2022-07-06 14:28:34'),
(13, NULL, NULL, 'Bridal Gowns', 'bridal-gowns', '1', '2022-06-08 17:35:31', '2022-07-06 14:28:39'),
(14, NULL, NULL, 'Cake /Cupcake', 'cake-cupcake', '1', '2022-06-08 17:35:39', '2022-07-06 14:28:44'),
(15, NULL, NULL, 'Ceremany Location', 'ceremany-location', '1', '2022-06-08 17:35:49', '2022-07-06 14:28:49'),
(16, NULL, NULL, 'Dance Lessons', 'dance-lessons', '1', '2022-06-08 17:36:00', '2022-07-06 14:28:55'),
(17, NULL, NULL, 'Event Lighting & Decor', 'event-lighting-decor', '1', '2022-06-08 17:36:10', '2022-07-06 14:29:01'),
(18, NULL, NULL, 'Gift Registries', 'gift-registries', '1', '2022-06-08 17:36:18', '2022-07-06 14:29:05'),
(19, NULL, NULL, 'Hotles', 'hotles', '1', '2022-06-08 17:36:25', '2022-07-06 14:29:10'),
(20, NULL, NULL, 'Officiant / Clergy', 'officiant-clergy', '1', '2022-06-08 17:36:36', '2022-07-06 14:29:15'),
(21, NULL, NULL, 'Reception Hall / Venue', 'reception-hall-venue', '1', '2022-06-08 17:36:44', '2022-07-06 14:29:20'),
(22, NULL, NULL, 'Videography', 'videography', '1', '2022-06-08 17:36:52', '2022-07-06 14:29:26'),
(23, NULL, NULL, 'Bridal Shoes', 'bridal-shoes', '1', '2022-06-08 17:37:01', '2022-07-06 14:29:31'),
(24, NULL, NULL, 'Cady /Favors', 'cady-favors', '1', '2022-06-08 17:37:09', '2022-07-06 14:29:36'),
(25, NULL, NULL, 'Ceremany Music', 'ceremany-music', '1', '2022-06-08 17:37:19', '2022-07-06 14:29:48'),
(26, NULL, NULL, 'Destination Wedding', 'destination-wedding', '1', '2022-06-08 17:37:27', '2022-07-06 14:29:54'),
(27, NULL, NULL, 'Florists (Fresh & Silk)', 'florists-fresh-silk', '1', '2022-06-08 17:37:34', '2022-07-06 14:29:59'),
(28, NULL, NULL, 'Gown Preservation', 'gown-preservation', '1', '2022-06-08 17:37:41', '2022-07-06 14:30:04'),
(29, NULL, NULL, 'Invitations / Party Supplies', 'invitations-party-supplies', '1', '2022-06-08 17:37:50', '2022-07-06 14:30:09'),
(30, NULL, NULL, 'Photo Booths', 'photo-booths', '1', '2022-06-08 17:37:58', '2022-07-06 14:30:14'),
(31, NULL, NULL, 'Rehearsal Dinners', 'rehearsal-dinners', '1', '2022-06-08 17:38:06', '2022-07-06 14:30:20'),
(32, NULL, NULL, 'Wedding Rings', 'wedding-rings', '1', '2022-06-08 17:38:13', '2022-07-06 14:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `type`, `social_media`, `slug`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, '1', 'https://www.facebook.com/', 'facebook', NULL, NULL, NULL, '2022-06-07 17:15:38', '2022-07-07 14:43:47'),
(2, '2', 'https://www.instagram.com/', 'instagram', NULL, NULL, NULL, '2022-06-07 17:16:14', '2022-07-07 14:43:54'),
(3, '3', 'https://www.twitter.com/', 'twitter', NULL, NULL, NULL, '2022-06-07 17:17:12', '2022-07-07 14:44:46'),
(4, '4', 'https://www.youtube.com/', 'youtube', NULL, NULL, NULL, '2022-06-07 17:17:29', '2022-07-07 14:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `subcriptions`
--

CREATE TABLE `subcriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcriptions`
--

INSERT INTO `subcriptions` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'imhalikhan3@gmail.com', 1, '2022-07-13 10:22:45', '2022-07-13 10:22:45'),
(2, 'sahibat@a', 1, '2022-07-13 14:50:54', '2022-07-13 14:50:54'),
(3, 'imhalikhan@g', 1, '2022-07-13 15:09:17', '2022-07-13 15:09:17'),
(4, 'imhalikhan@gm', 1, '2022-07-13 15:09:35', '2022-07-13 15:09:35'),
(5, 'iamjamesalbertt@gmail', 1, '2022-07-13 15:12:23', '2022-07-13 15:12:23'),
(6, 'imhalikhan@gmail', 1, '2022-07-13 15:15:12', '2022-07-13 15:15:12'),
(7, 'iamjamesalbertt@g', 1, '2022-07-13 15:16:06', '2022-07-13 15:16:06'),
(8, 'sd@ff', 1, '2022-07-13 15:22:17', '2022-07-13 15:22:17'),
(9, 'admin@lims', 1, '2022-07-13 15:24:35', '2022-07-13 15:24:35'),
(10, 'aaaaa@aa', 1, '2022-07-13 15:26:53', '2022-07-13 15:26:53'),
(11, 'user@gmail.com', 1, '2022-07-13 15:30:41', '2022-07-13 15:30:41'),
(12, 'user@gmail', 1, '2022-07-13 15:30:51', '2022-07-13 15:30:51'),
(13, 'user43@gmail', 1, '2022-07-13 15:32:18', '2022-07-13 15:32:18'),
(14, 'imhalikhan@gmai', 1, '2022-07-13 15:34:22', '2022-07-13 15:34:22'),
(15, 'admin@limwww', 1, '2022-07-13 15:37:29', '2022-07-13 15:37:29'),
(16, 'aaaaaaaaaaaaaaa@aa', 1, '2022-07-13 15:48:30', '2022-07-13 15:48:30'),
(17, 'assas@gmail.com', 1, '2022-07-13 15:53:14', '2022-07-13 15:53:14'),
(18, 'saif@gmail.com', 1, '2022-07-13 15:55:19', '2022-07-13 15:55:19'),
(19, 'imhalian@g.com', 1, '2022-07-13 15:55:36', '2022-07-13 15:55:36'),
(20, 'admin@agenttc.com', 1, '2022-07-13 16:05:42', '2022-07-13 16:05:42'),
(23, NULL, 1, '2022-07-18 13:59:35', '2022-07-18 13:59:35'),
(26, NULL, 1, '2022-07-18 14:14:11', '2022-07-18 14:14:11'),
(27, NULL, 1, '2022-07-18 14:15:32', '2022-07-18 14:15:32'),
(28, 'djoy62471@gmail.com', 1, '2022-07-18 14:40:47', '2022-07-18 14:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Terms & Conditions', 'terms-conditions', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '2022-06-07 18:25:04', '2022-07-06 12:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `slug`, `content`, `content_two`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Watson', 'john-watson', '<p>Lorem ipsum dolor sit amet consectetur adipisicingelit.Porro, sapiente. Lorem ipsum dolor sit ametdolor sit amet.</p>', NULL, '15.jpg', '1', '2022-06-09 15:58:16', '2022-07-06 12:51:05'),
(2, 'Jimmy Grey', 'jimmy-grey', '<p>&nbsp;Porro, sapiente. Lorem ipsum dolor sit amet</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dolor sit amet.</p>', NULL, 'fedc42e9875116bb3d27f3298a90ffec.jpg', '1', '2022-06-09 17:03:52', '2022-07-06 12:51:13'),
(3, 'Alexander Hil', 'alexander-hil', '<p>&nbsp;Porro, sapiente. Lorem ipsum dolor sit amet</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dolor sit amet.</p>\r\n\r\n<p>&nbsp;Porro, sapiente. Lorem ipsum dolor sit amet</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dolor sit amet.</p>', NULL, 'vendor-slider-img1 (1).png', '1', '2022-06-09 17:04:37', '2022-07-06 12:51:22'),
(4, 'Micheal jims', 'micheal-jims', '<p>&nbsp;adipisicing elit. Tempore. maxime mollitia nobis unt. maxime mollitia nobis unt.<br />\r\nadipisicing elit. Tempore. maxime mollitia nobis unt. maxime mollitia nobis unt.</p>', NULL, 'e33d03eae5506f9eff51709fe9d82040.jpg', '1', '2022-06-30 13:21:22', '2022-07-06 12:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groom_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groom_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groom_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groom_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bussinessCategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutvendor` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `slug`, `email`, `type`, `status`, `email_verified_at`, `password`, `show_password`, `date`, `city`, `bride_first_name`, `bride_last_name`, `bride_email`, `bride_phone`, `groom_first_name`, `groom_last_name`, `groom_email`, `groom_phone`, `image`, `bussinessCategory`, `contact`, `company`, `aboutvendor`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, '', 'admin@southdakotabride.com', '1', '1', NULL, '$2y$10$Hitc7Xlx09d3rROXvwVQ.e8nsnsVmsw8UPgeIvStKW6KNHYwtMTE.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Ursula Morris', NULL, 'ursula-morris', 'user@gmail.com', '3', '1', NULL, '$2y$10$VvQcMpgFsifx.lUqi6M.Muo0TqDcHCTSx8w8JB3AdmQqrXD8uG8.e', NULL, '2007-09-11', 'In deserunt tempor d', 'Ursula', 'Morris', 'wiziko@mailinator.com', '(190) 668-3861', 'Chester', 'Reyes', 'user@gmail.com', '(166) 888-2910', '3sq.jpg', NULL, NULL, NULL, NULL, NULL, '2022-07-08 17:43:59', '2022-07-20 14:33:51'),
(3, 'Tad Benjamin', NULL, 'tad-benjamin', 'vendor@gmail.com', '2', '0', NULL, '$2y$10$J1aM5G6sUDWSoSY1PvNiOuzwVFzV.0ny9uKzyX9D17wq4D930IDXW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vendor-slider-img2.png', '6', '(179) 743-3729', 'Petersen Stewart Co', NULL, NULL, '2022-07-08 17:46:40', '2022-07-18 14:28:07'),
(4, 'Jeremy Higgins', NULL, 'kennedy', 'iamjamesalb544ertt@gmail.com', '3', '1', NULL, '$2y$10$ZfwKxAOxWJqL1jfDWVkYUO2UYjSCK8M11BozJUGahwFSl.TVuHvcu', NULL, '1995-11-04', 'In nesciunt archite', 'Jeremy', 'Higgins', 'rexyga@mailinator.com', '(167) 729-1248', 'Kennedy', 'Zimmerman', 'Zimmerman@gmail.com', '(153) 710-3501', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-12 12:05:09', '2022-07-12 12:05:09'),
(5, 'Shad King', NULL, 'shad-king', 'iamjamesalbertt@gmail.com', '2', '1', NULL, '$2y$10$eAu2tLSeclapqbMQJDLZ3OiCFLD6VJDJeBqvPKW8HG4MwaKpueUCi', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'taylor-john-wedding-couple-314-s112507-0116_vert-2000.jpg', '25', '(146) 257-6107', 'Dean and Brady Associates', NULL, NULL, '2022-07-12 12:13:47', '2022-07-18 15:01:25'),
(6, 'Dane lemel', NULL, 'dane-lemel', 'lemel@mailinator.com', '2', '1', NULL, '$2y$10$L9a14eMkwb/6VTMJ.At7e.W2B836yTGZj/uZDOZSkGik1FqeuSc4K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-14__1657820732__3sq.jpg', '32', '(133) 310-5122', 'Cote and Richardson Co', NULL, NULL, '2022-07-14 12:43:58', '2022-07-18 14:29:02'),
(7, NULL, NULL, 'cain-vargas', 'jymygyjoqe@mailinator.com', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-14 18:09:50', '2022-07-14 18:09:50'),
(8, 'Carol Wong', NULL, 'baxter', 'togydivagi@mailinator.com', '3', '1', NULL, '$2y$10$mnOfrh5HNDwT3ysoEcdnNOZICyhrmiXlVZSkIxAb4VALHeUVrVL/i', NULL, '1980-11-08', 'Commodi modi culpa l', 'Carol', 'Wong', 'xaxekaroz@mailinator.com', '(110) 385-2327', 'Baxter', 'Finley', 'togydivagi@mailinator.com', '(133) 778-3636', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-15 13:40:13', '2022-07-15 13:40:13'),
(9, 'Quail Rios', NULL, 'inez', 'maniroxaru@mailinator.com', '3', '1', NULL, '$2y$10$3Sy/v7uVclevrDXGmFt..OntbiHLhE92Pk93x0dQt35xfW1diW12e', NULL, '2019-09-10', 'Culpa excepteur lab', 'Quail', 'Rios', 'deso@mailinator.com', '(169) 836-1632', 'Inez', 'Gay', 'maniroxaru@mailinator.com', '(110) 297-4314', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-15 13:40:38', '2022-07-15 13:40:38'),
(10, 'Yetta Joyner', NULL, 'rhoda', 'lyvezahil@mailinator.com', '3', '1', NULL, '$2y$10$xpua2T.ZuGOAuY.rfuZ.rOuoJBpJQXevQ9z50PILPvHy/gAVo6i2.', NULL, '2021-04-18', 'Dolore voluptatibus', 'Yetta', 'Joyner', 'josur@mailinator.com', '(141) 787-9893', 'Rhoda', 'Haney', 'lyvezahil@mailinator.com', '(131) 595-2191', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-15 13:48:02', '2022-07-18 14:23:57'),
(11, 'Lareina Nicholson', NULL, 'prescott', 'timufa@mailinator.com', '3', '0', NULL, '$2y$10$MLC8NeoaHe5FmQi/Ld1ivu2gR6U0roRfstyGiL1co.pynpoFjAb4C', NULL, '2008-04-01', 'Itaque vel non non c', 'Lareina', 'Nicholson', 'wahybyfisu@mailinator.com', '(122) 294-1764', 'Prescott', 'Hodges', 'timufa@mailinator.com', '(185) 725-6988', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-15 13:48:49', '2022-07-15 13:48:49'),
(13, 'Lydia Travis', NULL, 'evelyn', 'pexymizopu@mailinator.com', '3', '1', NULL, '$2y$10$35GJlWtinB7x5dKlHN6P/.a6wbgAgWWQASZp8VGP0FFEkMmcPZEJG', NULL, '2001-07-06', 'Impedit veniam ex', 'Lydia', 'Travis', 'laqonezepo@mailinator.com', '(151) 195-7400', 'Evelyn', 'Fulton', 'pexymizopu@mailinator.com', '(144) 341-7970', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-18 11:06:26', '2022-07-18 11:06:26'),
(14, 'Lenore George', NULL, 'igor', 'Igor@mailinator.com', '3', '0', NULL, '$2y$10$g4DDD6CysLFPDfo/gKhV4OuVDHoruBdwhxWV138yjfOa2zBu3ws2q', NULL, '1975-04-20', 'Distinctio Libero q', 'Lenore', 'George', 'gemat@mailinator.com', '(119) 817-6285', 'Igor', 'Mckay', 'Igor@mailinator.com', '(153) 888-8947', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-18 11:14:56', '2022-07-18 11:14:56'),
(22, NULL, NULL, 'aphrodite-burris', 'doxujacid@mailinator.com', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-18 14:57:58', '2022-07-18 14:57:58'),
(23, 'Xantha Duke', NULL, 'xantha-duke', 'abdulqadeersolangi007@gmail.com', '2', '1', NULL, '$2y$10$gvrtVpQ2ggbKYe7q4W3Jr.RWM4OFRoWB/NxVW.aMvKlyLFYpxWBe2', 'Pa$$w0rd!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17', '(196) 539-5886', 'Gordon Grant Plc', NULL, NULL, '2022-07-18 14:58:10', '2022-07-18 14:59:50'),
(24, 'Sara Graves', NULL, 'sara-graves', 'james@mail.com', '2', '1', NULL, '$2y$10$rwRNC5i3z6CUVdlQb8Bwe.SpkEYtSFwUSIa8hWop.mLmTwoURgXdi', 'Pa$$w0rd!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1597db69df618056a9f98557702a8527.jpg', '6', '(115) 566-2473', 'Foster and Santana Plc', NULL, NULL, '2022-07-19 12:56:11', '2022-07-19 12:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_locations`
--

CREATE TABLE `user_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `locations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_locations`
--

INSERT INTO `user_locations` (`id`, `user_id`, `locations`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, '[\"17\",\"9\"]', '1', '2022-07-08 17:47:15', '2022-07-08 17:47:15'),
(2, 5, '[\"19\",\"17\"]', '1', '2022-07-12 12:14:21', '2022-07-12 12:14:21'),
(3, 6, '[\"4\",\"19\"]', '1', '2022-07-14 12:44:29', '2022-07-14 12:44:29'),
(4, 23, '[\"4\",\"9\",\"14\"]', '1', '2022-07-18 14:59:11', '2022-07-18 14:59:11'),
(5, 24, '[\"17\",\"9\"]', '1', '2022-07-19 12:56:48', '2022-07-19 12:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `user_id`, `services`, `created_at`, `updated_at`) VALUES
(1, '2', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"8\",\"9\",\"12\",\"13\",\"14\",\"16\",\"20\",\"22\",\"24\",\"26\",\"27\",\"28\",\"30\"]', '2022-07-08 17:43:59', '2022-07-08 17:43:59'),
(2, '4', '[\"2\",\"6\",\"7\",\"10\",\"12\",\"14\",\"15\",\"16\",\"17\",\"21\",\"23\",\"26\",\"27\",\"28\",\"30\",\"31\",\"32\"]', '2022-07-12 12:05:09', '2022-07-12 12:05:09'),
(3, '8', '[\"1\",\"2\",\"5\",\"6\",\"7\",\"8\",\"9\",\"14\",\"18\",\"19\",\"20\",\"22\",\"23\",\"24\",\"26\",\"28\",\"29\",\"30\",\"31\",\"32\"]', '2022-07-15 13:40:13', '2022-07-15 13:40:13'),
(4, '9', '[\"4\",\"6\",\"7\",\"8\",\"9\",\"11\",\"12\",\"20\",\"21\",\"25\",\"26\",\"28\",\"29\",\"32\"]', '2022-07-15 13:40:38', '2022-07-15 13:40:38'),
(5, '10', '[\"1\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"13\",\"15\",\"16\",\"21\",\"24\",\"26\",\"30\",\"32\"]', '2022-07-15 13:48:02', '2022-07-15 13:48:02'),
(6, '11', '[\"1\",\"2\",\"3\",\"5\",\"6\",\"12\",\"14\",\"15\",\"25\",\"26\",\"27\",\"29\",\"30\"]', '2022-07-15 13:48:49', '2022-07-15 13:48:49'),
(7, '12', '[\"1\",\"3\",\"9\",\"11\",\"13\",\"18\",\"22\",\"23\",\"24\",\"26\",\"28\",\"30\",\"31\",\"32\"]', '2022-07-15 13:51:41', '2022-07-15 13:51:41'),
(8, '13', '[\"3\",\"4\",\"6\",\"9\",\"10\",\"12\",\"13\",\"14\",\"16\",\"17\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"27\",\"28\",\"29\",\"30\"]', '2022-07-18 11:06:26', '2022-07-18 11:06:26'),
(9, '14', '[\"1\",\"2\",\"3\",\"4\",\"7\",\"8\",\"12\",\"15\",\"17\",\"18\",\"22\",\"23\",\"25\",\"26\",\"28\",\"29\"]', '2022-07-18 11:14:56', '2022-07-18 11:14:56'),
(10, '15', '[\"1\",\"5\",\"6\",\"7\",\"9\",\"12\",\"14\",\"15\",\"17\",\"19\",\"20\",\"22\",\"23\",\"27\",\"28\",\"30\",\"32\"]', '2022-07-18 13:35:15', '2022-07-18 13:35:15'),
(11, '16', '[\"1\",\"2\",\"3\",\"5\",\"10\",\"11\",\"12\",\"13\",\"14\",\"17\",\"18\",\"20\",\"22\",\"23\",\"24\",\"25\",\"26\",\"30\",\"32\"]', '2022-07-18 13:38:38', '2022-07-18 13:38:38'),
(12, '17', '[\"1\",\"3\",\"4\",\"5\",\"6\",\"12\",\"13\",\"16\",\"20\",\"22\",\"23\",\"24\",\"25\",\"27\",\"28\",\"32\"]', '2022-07-18 13:59:35', '2022-07-18 13:59:35'),
(13, '18', '[\"1\",\"2\",\"3\",\"4\",\"6\",\"11\",\"14\",\"18\",\"20\",\"21\",\"22\",\"23\",\"24\",\"27\",\"29\",\"30\",\"32\"]', '2022-07-18 14:02:42', '2022-07-18 14:02:42'),
(14, '19', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"11\",\"12\",\"14\",\"16\",\"22\",\"25\",\"28\",\"31\",\"32\"]', '2022-07-18 14:11:50', '2022-07-18 14:11:50'),
(15, '20', '[\"1\",\"2\",\"5\",\"7\",\"8\",\"13\",\"16\",\"23\",\"28\",\"31\"]', '2022-07-18 14:14:11', '2022-07-18 14:14:11'),
(16, '21', '[\"3\",\"6\",\"7\",\"8\",\"9\",\"11\",\"14\",\"19\",\"20\",\"26\",\"29\",\"31\"]', '2022-07-18 14:15:32', '2022-07-18 14:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_contacts`
--

CREATE TABLE `vendor_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_contacts`
--

INSERT INTO `vendor_contacts` (`id`, `user_id`, `vendor_id`, `name`, `email`, `phone_number`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, 'Dahlia Miles', 'bymyru@mailinator.com', '(121) 535-1546', 'Irure ullam excepteu', 1, '2022-07-08 18:06:05', '2022-07-08 18:06:05'),
(2, NULL, 3, 'Matthew Gibson', 'nocygihiqu@mailinator.com', '(161) 249-1821', 'Lorem molestiae volu', 1, '2022-07-13 13:36:25', '2022-07-13 13:36:25'),
(3, NULL, 3, 'Matthew Gibson', 'nocygihiqu@mailinator.com', '(161) 249-1821', 'Lorem molestiae volu', 1, '2022-07-13 13:36:54', '2022-07-13 13:36:54'),
(4, NULL, 3, 'Tarik Kirkland', 'iamjamesalbertt@gmail.com', '(157) 642-3224', 'Aut quaerat autem co', 1, '2022-07-13 13:40:40', '2022-07-13 13:40:40'),
(5, NULL, 3, 'Tarik Kirkland', 'iamjamesalbertt@gmail.com', '(157) 642-3224', 'Aut quaerat autem co', 1, '2022-07-13 13:42:11', '2022-07-13 13:42:11'),
(8, NULL, 3, 'Justin Rodriquez', 'qyva@mailinator.com', '(146) 432-5624', 'Necessitatibus aut n', 1, '2022-07-15 13:37:54', '2022-07-15 13:37:54'),
(9, NULL, 3, 'Patience Ford', 'woco@mailinator.com', '(179) 383-3608', 'Sunt esse ipsum ma', 1, '2022-07-15 13:39:52', '2022-07-15 13:39:52'),
(10, NULL, 5, 'Cora Simmons', 'djoy62471@gmail.com', '(187) 835-5796', 'Aut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed vAut ad eu enim sed v', 1, '2022-07-18 14:47:41', '2022-07-18 14:47:41'),
(11, NULL, 5, 'Gareth Rocha', 'djoy62471@gmail.com', '(150) 712-6255', 'Esse neque repellen', 1, '2022-07-18 14:54:11', '2022-07-18 14:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_management`
--

CREATE TABLE `vendor_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bussinessCategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faeture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_socials`
--

CREATE TABLE `vendor_socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_socials`
--

INSERT INTO `vendor_socials` (`id`, `user_id`, `type`, `social_media`, `slug`, `created_at`, `updated_at`) VALUES
(1, 3, '1', 'www.facebook.com/', 'wwwfacebookcom', '2022-07-08 17:49:50', '2022-07-12 10:49:49'),
(2, 3, '2', 'www.Instagram.com/', 'wwwinstagramcom', '2022-07-08 17:49:58', '2022-07-12 10:49:40'),
(3, 3, '3', 'www.twitter.com/', 'wwwtwittercom', '2022-07-08 17:50:12', '2022-07-12 10:49:29'),
(9, 5, '1', 'https://www.facebook.com/', 'httpswwwfacebookcom', '2022-07-12 13:54:43', '2022-07-12 13:54:43'),
(10, 5, '2', 'https://Instagram.com/', 'httpsinstagramcom', '2022-07-12 14:18:59', '2022-07-12 14:18:59'),
(11, 5, '3', 'https://twitter.com/', 'httpstwittercom', '2022-07-12 14:19:07', '2022-07-12 14:19:07'),
(12, 5, '4', 'https://www.youtube.com/vendor', 'httpswwwyoutubecomvendor', '2022-07-12 14:19:21', '2022-07-12 14:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `weddings`
--

CREATE TABLE `weddings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(119) DEFAULT NULL,
  `ceremony` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weddings`
--

INSERT INTO `weddings` (`id`, `user_id`, `ceremony`, `service`, `vendor`, `title`, `title2`, `bride`, `groom`, `slug`, `content`, `content2`, `content3`, `image`, `image2`, `status`, `created_at`, `updated_at`, `location`, `date`) VALUES
(1, 2, '2', '[\"6\",\"32\"]', '[\"5\",\"6\"]', NULL, NULL, 'Shannon Christensen', 'Deirdre Kim', 'deirdre-kim', 'Lorem ipsum may be used as a placeholder before final copy is available.\r\nLorem ipsum may be used as a placeholder before final copy is available.Lorem ipsum may be used as a placeholder before final copy is available.Lorem ipsum may be used as a placeholder before final copy is available.Lorem ipsum may be used as a placeholder before final copy is available.Lorem ipsum may be used as a placeholder before final copy is available.', NULL, NULL, '2022-07-08__1657320944__3sq.jpg', NULL, '1', '2022-07-08 17:55:44', '2022-07-19 14:59:53', 'Mason Weaver', '1977-08-15'),
(3, 2, '1', '[\"6\"]', '[\"3\"]', NULL, NULL, 'Shad Bray', 'Brady Jordan', 'brady-jordan', 'Nulla nesciunt sint', NULL, NULL, '2022-07-15__1657904097__3sq.jpg', NULL, '1', '2022-07-15 11:54:57', '2022-07-15 11:54:57', 'Jamal Bernard', '1989-12-19'),
(4, NULL, '1', NULL, NULL, NULL, NULL, 'Amy Downs', 'Martha Roberts', 'martha-roberts-npar', '<p>a</p>', NULL, NULL, '2022-07-18__1658183982__0.jpg', NULL, '1', '2022-07-18 17:39:42', '2022-07-18 17:39:42', 'Dylan Thornton', '1973-06-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_vendors`
--
ALTER TABLE `about_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_vendors`
--
ALTER TABLE `book_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_management`
--
ALTER TABLE `contact_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engagements`
--
ALTER TABLE `engagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_management`
--
ALTER TABLE `event_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_managers`
--
ALTER TABLE `logo_managers`
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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcriptions`
--
ALTER TABLE `subcriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_locations`
--
ALTER TABLE `user_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_contacts`
--
ALTER TABLE `vendor_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_management`
--
ALTER TABLE `vendor_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_socials`
--
ALTER TABLE `vendor_socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddings`
--
ALTER TABLE `weddings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_vendors`
--
ALTER TABLE `about_vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_vendors`
--
ALTER TABLE `book_vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_management`
--
ALTER TABLE `contact_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `engagements`
--
ALTER TABLE `engagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_management`
--
ALTER TABLE `event_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `logo_managers`
--
ALTER TABLE `logo_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcriptions`
--
ALTER TABLE `subcriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_locations`
--
ALTER TABLE `user_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vendor_contacts`
--
ALTER TABLE `vendor_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendor_management`
--
ALTER TABLE `vendor_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_socials`
--
ALTER TABLE `vendor_socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `weddings`
--
ALTER TABLE `weddings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
