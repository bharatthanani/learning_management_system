-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 05:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customweb_lana`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_generals`
--

CREATE TABLE `about_us_generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_area_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_area_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_area_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_third_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_second_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_first_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_history_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_history_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upgrade_skill_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upgrade_skill_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upgrade_skill_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upgrade_skill_button_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor_support_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor_support_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_generals`
--

INSERT INTO `about_us_generals` (`id`, `gallery_area_title`, `gallery_area_subtitle`, `gallery_area_desc`, `gallery_third_image`, `gallery_second_image`, `gallery_first_image`, `our_history_title`, `our_history_subtitle`, `upgrade_skill_logo`, `upgrade_skill_title`, `upgrade_skill_subtitle`, `upgrade_skill_button_name`, `team_member_logo`, `team_member_title`, `team_member_subtitle`, `instructor_support_title`, `instructor_support_subtitle`, `created_at`, `updated_at`) VALUES
(1, 'Mere Tranquil Existence', 'Mere Tranquil Existence, That I Neglect My Talents Should', '<p>Possession Of My Entire Soul, Like These Sweet Mornings Of Spring Which I Enjoy With My Whole Heart. I Am Alone, And Charm Of Existence In This Spot, Which Was Created For The Bliss Of Souls Like Mine. I Am So Happy, My Dear Friend, So Absorbed In The Exquisite Sense Of Mere Tranquil Existence</p>', 'uploads_demo/gallery/3.jpg', 'uploads/about_us_general/1667293072-7gQkDi0o3S.jpg', 'uploads_demo/gallery/1.jpg', 'Our History', 'Possession Of My Entire Soul, Like These Sweet Mornings Of Spring Which I Enjoy With My Whole Heart. I Am Alone, And Charm Of Existence In This Spot Which', 'uploads_demo/about_us_general/upgrade.jpg', 'Upgrade Your Skills Today For Upgrading Your Life.', 'Noticed by me when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence stalks, and grow familiar with the countless', 'Find Your Course', 'uploads_demo/about_us_general/team-members-heading-img.png', 'Our Passionate Team Members', 'CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS', 'Quality Course, Instructor And Support', 'CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS', NULL, '2022-11-01 14:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `exam_id` bigint(20) NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `question_option_id` bigint(20) NOT NULL,
  `take_exam_id` bigint(20) NOT NULL,
  `multiple_choice_answer` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_correct` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'yes, no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=active, 2=deactivated',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignment_files`
--

CREATE TABLE `assignment_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignment_submits`
--

CREATE TABLE `assignment_submits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assignment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `marks` double(8,2) DEFAULT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=published, 0=unpublished',
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `uuid`, `user_id`, `title`, `slug`, `details`, `image`, `status`, `blog_category_id`, `created_at`, `updated_at`) VALUES
(1, '6b4b51fc-1c12-4a52-9672-f93238be8fbf', 1, '60 Common C# Interview Questions in 2022: Ace Your Next Interview', '60-common-c-interview-questions-in-2022-ace-your-next-interview', 'Getting hired as a programmer can be a challenge. There’s a lot of talent out there, and there’s a lot of competition. Many employers are wary of “paper programmers”; people who have no programming experience but just a degree. Because of this, they often ask in-depth programming questions during their interview. These questions can be hard to answer if you haven’t properly prepared. In this article, I’ll help you prepare to ace your next interview with these questions related to the C# programming language. At the same time, you might want to practice with some C# projects. These 50 essential C# questions and answers will help you understand the technical concepts of the language. You’ll walk into a meeting with the hiring manager with confidence. As a developer myself, I use these concepts daily.', 'uploads_demo/blog/1.jpg', 1, 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(2, 'cfaed687-b329-4e3a-89c5-1746a02978c3', 1, 'PostgreSQL vs. MySQL: Which SQL Platform Should You Use?', 'postgresql-vs-mysql-which-sql-platform-should-you-use', 'MySQL and PostgreSQL are both leading database technologies built on a foundation of SQL: Structured Query Language. SQL forms the basis of how to create, access, update, and otherwise interact with data stored in a relational database. While MySQL has been the most popular platform for many years, PostgreSQL is another major contender. Many database administrators and developers will know both technologies, which are much more similar than they are different. You can learn more about the history of SQL and how the various “flavors” came to be by watching this brief video: Depending on what you’re trying to create, the data you’re trying to manage, and your own background as a programmer or analyst, you may find one language preferable over the other. But in terms of popularity and marketability, both are widely used, with MySQL maintaining the advantage here. Compared to PostgreSQL, MySQL has the largest market share and, therefore, the most job opportunities. Here’s what you need to know about MySQL vs. PostgreSQL — the differences, benefits, and disadvantages — as well as some basic information about SQL and database platforms.', 'uploads_demo/blog/2.jpg', 1, 2, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(3, 'ad4c7224-d8a2-4d76-b451-0ce280be785f', 1, 'Java vs. Python: Which Is the Best Programming Language for You?', 'java-vs-python-which-is-the-best-programming-language-for-you', 'Java and Python are both excellent choices for a beginning programmer. You really can’t go wrong by choosing either one. Here are some things these languages have in common. Both are popular and in high demand.Both are open source and don’t require a paid license to use for developers.  In the case of Java, if you use the official Oracle Java version, there may be a fee for commercial use payable by your customer/employer when deploying your Java application.  However, there are free runtime versions available from multiple vendors as well. You can get started coding in either language today as long as you have an internet connection to download the installation files and a computer that runs Windows, OS X, or Linux.The two languages do have their differences, and developers sometimes prefer one or the other for various reasons. Below is a discussion of those reasons, with hopefully enough information to help you decide which language is the one for you.', 'uploads_demo/blog/3.jpg', 1, 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(4, '7e1b5f8e-5528-4748-a902-4304203ec985', 1, 'Learn Coding in Scratch with a Cool Game Idea', 'learn-coding-in-scratch-with-a-cool-game-idea', 'A few years ago, the creation of programs and applications was aimed at only a few people with specialized knowledge. Lately, though, programming for beginners has been possible, thanks to software that has been developed, such as Scratch. In this article, you will see how to create your own game in an easy and fun way.\r\nWhy start Scratch Coding?\r\nThe rate at which jobs in the IT sector are growing is almost twice as high as in other industries, and this is only an indication of work in future new technologies. Researchers estimate that “the digital economy is worth $11.5 trillion globally, equivalent to 15.5 percent of global GDP and has grown two and a half times faster than global GDP over the past 15 years.”\r\nIn a few years, programming knowledge will be fully integrated into educational programs for every age. Using coding concepts, it’s possible to design projects that utilize very similar guidelines and rubrics for a digital project, thereby giving students the opportunity to learn about their topic and sharpen their coding skills at the same time. Future human resources, generations Y and Z, will have at their core the digital skills needed to program.', 'uploads_demo/blog/2.jpg', 1, 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=active, 0=deactivated',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `uuid`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'e330efce-0559-455d-b74a-b7ddd0abcc1b', 'Development', 'development', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(2, '007d6a60-21d9-4972-87f3-6de373be38a2', 'IT & Software', 'it-software', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(3, '6393e886-3fd4-450e-a786-76c3985b1db4', 'Data Science', 'data-science', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(4, 'bc62af82-7da1-41ec-9a79-9d31c113b2d2', 'Soft Skills', 'soft-skills', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(5, 'dd734bdf-d6d5-433c-a3b5-22ac3fea860f', 'Business', 'business', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(6, '6ad241a7-c934-45ca-bed7-15f0d86bcfad', 'Marketing', 'marketing', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(7, '6017c7ec-71b0-430b-8ec2-e0a14251acc5', 'Design', 'design', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=active, 2=deactivate',
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_histories`
--

CREATE TABLE `booking_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `instructor_user_id` bigint(20) UNSIGNED NOT NULL,
  `student_user_id` bigint(20) UNSIGNED NOT NULL,
  `consultation_slot_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` tinyint(4) NOT NULL COMMENT '0=sunday,1=monday,2=tuesday,3=wednesday,4=thursday,5=friday,6=saturday',
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=Pending,1=Approve,2=Cancel,3=Completed',
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=In-person,2=Online',
  `start_url` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_url` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_host_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'zoom,bbb,jitsi',
  `moderator_pw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'use only for bbb',
  `attendee_pw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'use only for bbb',
  `cancel_reason` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_back_money_status` tinyint(4) DEFAULT 0 COMMENT '1=Yes, 0=No',
  `back_admin_commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Admin Commission',
  `back_owner_balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Instructor Commission',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1=active,0=disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundle_courses`
--

CREATE TABLE `bundle_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bundle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_management`
--

CREATE TABLE `cart_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `consultation_slot_id` bigint(20) UNSIGNED DEFAULT NULL,
  `consultation_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultation_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultation_available_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bundle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bundle_course_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `main_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_feature` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `uuid`, `name`, `image`, `is_feature`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '0472b531-64ae-49de-afc3-b67115699939', 'Development', 'uploads_demo/category/1.png', 'yes', 'development', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(2, '90b4eaaa-44f6-4c17-91ea-0b1bbcfc251d', 'IT & Software', 'uploads_demo/category/2.png', 'yes', 'it-software', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(3, 'bfef2252-4b72-4f96-bce5-5af1974afab6', 'Office Productivity', 'uploads_demo/category/3.png', 'yes', 'office-productivity', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(4, '7ea0504c-c56d-4c42-8f27-1b7dd3cff842', 'Personal Development', 'uploads_demo/category/4.png', 'yes', 'personal-development', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(5, '862f7316-3237-4fed-9461-473290648944', 'Business', NULL, 'no', 'business', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(6, '7ceb8b95-2e63-435b-9172-24ad70bad031', 'Marketing', NULL, 'no', 'marketing', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(7, '66788939-1c0e-4916-8eb1-58ef006bb490', 'Design', NULL, 'no', 'design', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(8, '42c370fd-efb0-49f2-a1cd-75fd105a0765', 'Health & Fitness', NULL, 'no', 'health-fitness', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(9, 'a51e2e06-f0e8-4c1f-b4c5-aae66c02e4d2', 'Finance & Accounting', NULL, 'no', 'finance-accounting', 1, '2022-10-27 03:14:03', '2022-10-27 03:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'yes, no',
  `number_x_position` int(11) NOT NULL DEFAULT 0,
  `number_y_position` int(11) NOT NULL DEFAULT 0,
  `number_font_size` int(11) NOT NULL DEFAULT 18,
  `number_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_x_position` int(11) NOT NULL DEFAULT 0,
  `title_y_position` int(11) NOT NULL DEFAULT 0,
  `title_font_size` int(11) NOT NULL DEFAULT 20,
  `title_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_date` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'yes, no',
  `date_x_position` int(11) NOT NULL DEFAULT 0,
  `date_y_position` int(11) NOT NULL DEFAULT 16,
  `date_font_size` int(11) NOT NULL DEFAULT 30,
  `date_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_student_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes' COMMENT 'yes, no',
  `student_name_x_position` int(11) NOT NULL DEFAULT 0,
  `student_name_y_position` int(11) NOT NULL DEFAULT 16,
  `student_name_font_size` int(11) NOT NULL DEFAULT 32,
  `student_name_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_max_length` int(11) NOT NULL DEFAULT 80,
  `body_x_position` int(11) NOT NULL DEFAULT 0,
  `body_y_position` int(11) NOT NULL DEFAULT 16,
  `body_font_size` int(11) NOT NULL DEFAULT 20,
  `body_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_1_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_1_signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_1_x_position` int(11) NOT NULL DEFAULT 16,
  `role_1_y_position` int(11) NOT NULL DEFAULT 16,
  `role_1_font_size` int(11) NOT NULL DEFAULT 18,
  `role_1_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_2_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_2_x_position` int(11) NOT NULL DEFAULT 0,
  `role_2_y_position` int(11) NOT NULL DEFAULT 0,
  `role_2_font_size` int(11) NOT NULL DEFAULT 18,
  `role_2_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_by_instructors`
--

CREATE TABLE `certificate_by_instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) DEFAULT NULL,
  `certificate_id` bigint(20) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_x_position` int(11) NOT NULL DEFAULT 0,
  `title_y_position` int(11) NOT NULL DEFAULT 0,
  `title_font_size` int(11) NOT NULL DEFAULT 20,
  `title_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_max_length` int(11) NOT NULL DEFAULT 80,
  `body_x_position` int(11) NOT NULL DEFAULT 0,
  `body_y_position` int(11) NOT NULL DEFAULT 16,
  `body_font_size` int(11) NOT NULL DEFAULT 20,
  `body_font_color` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_2_y_position` int(11) NOT NULL DEFAULT 10,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `incoming_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `outgoing_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` tinyint(4) DEFAULT 2 COMMENT '1=seen,2=not seen',
  `created_user_type` tinyint(4) DEFAULT NULL COMMENT '1=student,2=instructor',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhanmondi', NULL, NULL),
(2, 1, 'Bannai', NULL, NULL),
(3, 2, 'Nirala', NULL, NULL),
(4, 2, 'Zero Point', NULL, NULL),
(5, 3, 'Tomchombridge', NULL, NULL),
(6, 3, 'Cantonment', NULL, NULL),
(7, 4, 'Acton', NULL, NULL),
(8, 4, 'Alamo', NULL, NULL),
(9, 5, 'Albin', NULL, NULL),
(10, 6, 'Bartow', NULL, NULL),
(11, 7, 'Oban', NULL, NULL),
(12, 8, 'Holywood', NULL, NULL),
(13, 9, 'Ely', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_logos`
--

CREATE TABLE `client_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_logos`
--

INSERT INTO `client_logos` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Ovita', 'uploads_demo/client-logo/1.png', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(2, 'Vigon', 'uploads_demo/client-logo/2.png', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(3, 'Betribe', 'uploads_demo/client-logo/3.png', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(4, 'Parsit', 'uploads_demo/client-logo/4.png', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(5, 'Karika', 'uploads_demo/client-logo/5.png', '2022-10-27 03:14:04', '2022-10-27 03:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `consultation_slots`
--

CREATE TABLE `consultation_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `day` tinyint(4) NOT NULL COMMENT '0=sunday,1=monday,2=tuesday,3=wednesday,4=thursday,5=friday,6=saturday',
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour_duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minute_duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_us_issue_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `contact_us_issue_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jena Dejesus', 'paripo@mailinator.com', NULL, 'Ut fugiat quia sed', '2022-11-01 15:05:47', '2022-11-01 15:05:47'),
(2, 'Jena Dejesus', 'paripo@mailinator.com', NULL, 'Ut fugiat quia sed', '2022-11-01 15:07:00', '2022-11-01 15:07:00'),
(3, 'Jena Dejesus', 'paripo@mailinator.com', NULL, 'Ut fugiat quia sed', '2022-11-01 15:07:31', '2022-11-01 15:07:31'),
(4, 'Jacob Jackson', 'babif@mailinator.com', NULL, 'Deleniti magni iusto', '2022-11-01 15:11:12', '2022-11-01 15:11:12'),
(5, 'Jacob Jackson', 'babif@mailinator.com', NULL, 'Deleniti magni iusto', '2022-11-01 15:11:12', '2022-11-01 15:11:12'),
(6, 'Bethany Mccarthy', 'digixybyq@mailinator.com', NULL, 'Numquam maxime nisi', '2022-11-01 15:11:44', '2022-11-01 15:11:44'),
(7, 'Bethany Mccarthy', 'digixybyq@mailinator.com', NULL, 'Numquam maxime nisi', '2022-11-01 15:11:45', '2022-11-01 15:11:45'),
(8, 'Isaiah Ross', 'fyqici@mailinator.com', NULL, 'Commodo assumenda la', '2022-11-01 15:12:26', '2022-11-01 15:12:26'),
(9, 'Illiana Allison', 'vuqapo@mailinator.com', NULL, 'Fugit vel blanditii', '2022-11-01 15:12:35', '2022-11-01 15:12:35'),
(10, 'Zahir Patel', 'vyzawemib@mailinator.com', NULL, 'Dolor amet laborios', '2022-11-01 15:12:49', '2022-11-01 15:12:49'),
(11, 'Ocean Olsen', 'xoqurydul@mailinator.com', NULL, 'Consectetur magna co', '2022-11-01 15:13:29', '2022-11-01 15:13:29'),
(12, 'Ocean Olsen', 'xoqurydul@mailinator.com', NULL, 'Consectetur magna co', '2022-11-01 15:13:29', '2022-11-01 15:13:29'),
(13, 'Conan Rosario', 'juvirene@mailinator.com', NULL, 'Architecto itaque eo', '2022-11-01 15:15:47', '2022-11-01 15:15:47'),
(14, 'dfdsf', 'admin@gmail.com', NULL, 'fdfdss', '2022-11-01 15:16:03', '2022-11-01 15:16:03'),
(15, 'Quyn Ruiz', 'tafixegoz@mailinator.com', NULL, 'Aut dolor autem assu', '2022-11-01 15:16:09', '2022-11-01 15:16:09'),
(16, 'Quyn Ruiz', 'tafixegoz@mailinator.com', NULL, 'Aut dolor autem assu', '2022-11-01 15:16:09', '2022-11-01 15:16:09'),
(17, 'Quyn Ruiz', 'tafixegoz@mailinator.com', NULL, 'Aut dolor autem assu', '2022-11-01 15:16:09', '2022-11-01 15:16:09'),
(18, 'Knox Orr', 'gujeryl@mailinator.com', NULL, 'Qui odio similique c', '2022-11-01 15:16:27', '2022-11-01 15:16:27'),
(19, 'Knox Orr', 'gujeryl@mailinator.com', NULL, 'Qui odio similique c', '2022-11-01 15:16:27', '2022-11-01 15:16:27'),
(20, 'Knox Orr', 'gujeryl@mailinator.com', NULL, 'Qui odio similique c', '2022-11-01 15:16:27', '2022-11-01 15:16:27'),
(21, 'Hu Adams', 'haha@mailinator.com', NULL, 'Magni est aut evenie', '2022-11-01 15:30:20', '2022-11-01 15:30:20'),
(22, 'Hector Mendez', 'lubejize@mailinator.com', NULL, 'Modi cum do quos cul', '2022-11-01 15:31:05', '2022-11-01 15:31:05'),
(23, 'Jaime Carter', 'kosobuk@mailinator.com', NULL, 'Et sit odit rerum e', '2022-11-01 15:35:57', '2022-11-01 15:35:57'),
(24, 'Barclay Gordon', 'dewe@mailinator.com', NULL, 'Magna esse aut pers', '2022-11-01 15:48:10', '2022-11-01 15:48:10'),
(25, 'Ina Carrillo', 'loxelowez@mailinator.com', NULL, 'Accusamus perferendi', '2022-11-01 18:06:42', '2022-11-01 18:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_issues`
--

CREATE TABLE `contact_us_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=active, 0=deactivated',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `continent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `short_name`, `country_name`, `flag`, `slug`, `phonecode`, `continent`, `created_at`, `updated_at`) VALUES
(1, 'BD', 'Bangladesh', '', 'bangladesh', '+88', 'Asia', NULL, NULL),
(2, 'USA', 'United States', '', 'united-states', '+1', 'North America', NULL, NULL),
(3, 'UK', 'United Kingdom', '', 'united-kingdom', '+44', 'Europe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_type` tinyint(4) NOT NULL COMMENT '1=Global,2=Instructor, 3=Course',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=activate, 0=deactivated',
  `creator_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'creator_id=user_id',
  `percentage` decimal(8,2) DEFAULT 0.00,
  `minimum_amount` int(11) DEFAULT NULL,
  `maximum_use_limit` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_courses`
--

CREATE TABLE `coupon_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_instructors`
--

CREATE TABLE `coupon_instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `instructor_id` bigint(20) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `subcategory_id` bigint(20) DEFAULT NULL,
  `course_language_id` bigint(20) DEFAULT NULL,
  `difficulty_level_id` bigint(20) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_details` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `learner_accessibility` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paid,free',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_video_check` tinyint(4) DEFAULT NULL COMMENT '1=normal video, 2=youtube_video',
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_video_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending, 1=published, 2=waiting_for_review, 3=hold, 4=draft',
  `average_rating` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `uuid`, `user_id`, `instructor_id`, `category_id`, `subcategory_id`, `course_language_id`, `difficulty_level_id`, `title`, `subtitle`, `description`, `feature_details`, `price`, `learner_accessibility`, `image`, `intro_video_check`, `video`, `youtube_video_id`, `slug`, `status`, `average_rating`, `created_at`, `updated_at`) VALUES
(1, '08de7865-3bb9-419e-9524-90f33bd28ffb', 2, 1, NULL, NULL, NULL, NULL, 'Culpa ea est est seq', 'Dolores expedita aut', 'Qui sunt dolorem ne', NULL, '0.00', NULL, NULL, NULL, NULL, NULL, 'culpa-ea-est-est-seq', 4, '0.00', '2022-11-01 21:09:58', '2022-11-01 21:09:58'),
(2, 'fbf0dbbb-a598-4522-9bd6-baef9458cb84', 2, 1, 7, 18, 1, 2, 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, '0.00', 'free', 'uploads/course/1667319221-DlhaulfzMm.jpg', NULL, NULL, NULL, 'programming', 2, '0.00', '2022-11-01 21:11:24', '2022-11-01 21:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `course_languages`
--

CREATE TABLE `course_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_languages`
--

INSERT INTO `course_languages` (`id`, `uuid`, `name`, `created_at`, `updated_at`) VALUES
(1, '2736f1ad-34da-47f0-ab32-167747516181', 'English', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(2, 'ff7f566d-19b5-4363-a529-7a1c69e38487', 'Bangla', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(3, '54a71cc1-a330-4254-907a-c10d418a3642', 'Hindi', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(4, '5b00a3d4-23c7-495f-a6b6-8f973efb5624', 'Spanish', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(5, '60e8cefc-77fd-4c84-8439-a8d25b4a1c02', 'Arabic', '2022-10-27 03:14:03', '2022-10-27 03:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `course_lectures`
--

CREATE TABLE `course_lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `lesson_id` bigint(20) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_type` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1=free/show, 2=paid/lock',
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_duration_second` double DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploaded_video' COMMENT 'video, youtube, vimeo, text, image, pdf, slide_document, audio',
  `text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_lectures`
--

INSERT INTO `course_lectures` (`id`, `uuid`, `course_id`, `lesson_id`, `title`, `lecture_type`, `file_path`, `url_path`, `file_size`, `file_duration`, `file_duration_second`, `type`, `text`, `image`, `pdf`, `slide_document`, `audio`, `created_at`, `updated_at`) VALUES
(1, 'afe11859-90f8-4df2-94e1-27bb29bfa5d7', 2, 1, 'If Statement', 1, 'uploads/video/1667319310-Inventory management.mp4', NULL, NULL, '00:32', 32, 'video', NULL, NULL, NULL, NULL, NULL, '2022-11-01 21:15:10', '2022-11-01 21:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `course_lecture_views`
--

CREATE TABLE `course_lecture_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `course_lecture_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_lessons`
--

CREATE TABLE `course_lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_lessons`
--

INSERT INTO `course_lessons` (`id`, `uuid`, `course_id`, `name`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 'ac27d3f0-4b61-45bd-8286-0e50b57be558', 2, 'Introduction to Fundamental programming', NULL, '2022-11-01 21:14:16', '2022-11-01 21:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `course_resources`
--

CREATE TABLE `course_resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `original_filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_tags`
--

CREATE TABLE `course_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_tags`
--

INSERT INTO `course_tags` (`id`, `course_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_upload_rules`
--

CREATE TABLE `course_upload_rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_placement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'before' COMMENT 'before, after',
  `current_currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'on, off',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `currency_code`, `symbol`, `currency_placement`, `current_currency`, `created_at`, `updated_at`) VALUES
(1, 'USD', '$', 'before', 'on', NULL, '2022-12-29 02:49:13'),
(2, 'BDT', '৳', 'before', 'off', NULL, '2022-12-29 02:49:13'),
(3, 'INR', '₹', 'before', 'off', NULL, '2022-12-29 02:49:13'),
(4, 'GBP', '£', 'after', 'off', NULL, '2022-12-29 02:49:13'),
(5, 'MXN', '$', 'before', 'off', NULL, '2022-12-29 02:49:13'),
(6, 'SAR', 'SR', 'before', 'off', NULL, '2022-12-29 02:49:13'),
(7, 'TRY', '₺', 'after', 'off', NULL, '2022-12-29 02:49:13'),
(8, 'ARS', '$', 'before', 'off', NULL, '2022-12-29 02:49:13'),
(9, 'EUR', '€', 'before', 'off', NULL, '2022-12-29 02:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `difficulty_levels`
--

CREATE TABLE `difficulty_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `difficulty_levels`
--

INSERT INTO `difficulty_levels` (`id`, `uuid`, `name`, `created_at`, `updated_at`) VALUES
(1, 'f98f9d47-3943-4e24-ba88-3113fe8c48b5', 'Higher', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(2, '0c4ce668-9f8f-4325-8d45-2fd2a40e5c84', 'Medium', '2022-10-27 03:14:04', '2022-10-27 03:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=active, 2=deactivate',
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment_as` tinyint(4) NOT NULL COMMENT '1=Instructor, 2=Student',
  `view` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1=seen,2=not seen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_notification_settings`
--

CREATE TABLE `email_notification_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `updates_from_classes` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `updates_from_teacher_discussion` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `activity_on_your_project` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `activity_on_your_discussion_comment` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `reply_comment` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `new_follower` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `new_class_by_someone_you_follow` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `new_live_session` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks_per_question` int(11) NOT NULL DEFAULT 0,
  `duration` int(11) NOT NULL DEFAULT 0,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'multiple_choice, true_false',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=unpublish, 1=published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_questions`
--

CREATE TABLE `faq_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_questions`
--

INSERT INTO `faq_questions` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'which I enjoy with my whole heart am alone feel?', 'Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a  greater artist than now. When, while the lovely valley with vapour around me, and the meridian.', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(2, 'which I enjoy with my whole heart am alone feel?', 'Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a  greater artist than now. When, while the lovely valley with vapour around me, and the meridian.', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(3, 'which I enjoy with my whole heart am alone feel?', 'Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a  greater artist than now. When, while the lovely valley with vapour around me, and the meridian.', '2022-10-27 03:14:04', '2022-10-27 03:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=active, 0=disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forum_categories`
--

INSERT INTO `forum_categories` (`id`, `uuid`, `title`, `subtitle`, `logo`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '36ba83fd-8133-4a83-ac38-f6e411a168f2', 'Explicabo Ut volupt', 'Voluptate fugit eiu', NULL, 'explicabo-ut-volupt', 1, '2022-11-01 16:08:03', '2022-11-01 16:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=active, 0=disable',
  `total_seen` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_post_comments`
--

CREATE TABLE `forum_post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forum_post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=active, 0=disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_mini_words_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_first_line_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_second_line_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_second_line_changeable_words` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_third_line_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_first_button_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_first_button_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_second_button_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_second_button_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_feature_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `courses_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `bundle_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `top_category_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `consultation_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `instructor_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `video_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `customer_says_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `achievement_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `faq_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `instructor_support_area` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `banner_mini_words_title`, `banner_first_line_title`, `banner_second_line_title`, `banner_second_line_changeable_words`, `banner_third_line_title`, `banner_subtitle`, `banner_first_button_name`, `banner_first_button_link`, `banner_second_button_name`, `banner_second_button_link`, `banner_image`, `special_feature_area`, `courses_area`, `bundle_area`, `top_category_area`, `consultation_area`, `instructor_area`, `video_area`, `customer_says_area`, `achievement_area`, `faq_area`, `instructor_support_area`, `created_at`, `updated_at`) VALUES
(1, '[\"Come\",\"for\",\"learn\"]', 'A Better', 'Learning', '[\"Future\",\"Platform\",\"Era\",\"Point\",\"Area\"]', 'Starts Here.', 'While the lovely valley teems with vapour around me, and the meridian sun strikes the upper', 'Take A Tour', '#', 'Popular Courses', '#', 'uploads/home/1666835631-QK4HzsY0pC.png', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-10-27 03:14:03', '2022-10-27 05:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_special_features`
--

CREATE TABLE `home_special_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `province_id` bigint(20) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_private` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `remove_from_web_search` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending, 1=approved, 2=blocked',
  `consultation_available` tinyint(4) DEFAULT 0 COMMENT '1=yes, 0=no',
  `hourly_rate` int(11) DEFAULT NULL,
  `available_type` tinyint(4) DEFAULT 3 COMMENT '1=In-person, 0=Online, 3=Both',
  `cv_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `uuid`, `user_id`, `country_id`, `province_id`, `state_id`, `city_id`, `first_name`, `last_name`, `professional_title`, `phone_number`, `postal_code`, `address`, `about_me`, `gender`, `social_link`, `slug`, `is_private`, `remove_from_web_search`, `status`, `consultation_available`, `hourly_rate`, `available_type`, `cv_file`, `cv_filename`, `created_at`, `updated_at`) VALUES
(1, '871dc921-4d33-402d-aa40-75c196357f69', 2, 2, NULL, NULL, NULL, 'Beatrice', 'Logan', 'Odio sit id incididu', '+1 (732) 293-2628', 'Quasi ut elit aliqu', 'Ad labore similique', 'Officiis et magna ex', 'Male', '{\"facebook\":null,\"twitter\":null,\"linkedin\":null,\"pinterest\":null}', 'beatrice-logan', 'no', 'no', 1, 0, NULL, 3, NULL, NULL, '2022-11-01 20:50:41', '2022-11-01 20:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_awards`
--

CREATE TABLE `instructor_awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winning_year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_certificates`
--

CREATE TABLE `instructor_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_consultation_day_statuses`
--

CREATE TABLE `instructor_consultation_day_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `day` tinyint(4) NOT NULL COMMENT '0=sunday,1=monday,2=tuesday,3=wednesday,4=thursday,5=friday,6=saturday',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_features`
--

CREATE TABLE `instructor_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor_features`
--

INSERT INTO `instructor_features` (`id`, `logo`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 'uploads_demo/instructor_feature/build-brand.png', 'Build your Bran', 'Serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(2, 'uploads_demo/instructor_feature/instructor-support-2.png', 'Inspire learners', 'Serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(3, 'uploads_demo/instructor_feature/top-instructor-heading-img.png', 'Get rewarded', 'Serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with', '2022-10-27 03:14:04', '2022-10-27 03:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_procedures`
--

CREATE TABLE `instructor_procedures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor_procedures`
--

INSERT INTO `instructor_procedures` (`id`, `image`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 'uploads_demo/instructor_procedure/become-instructor-1.jpg', 'Plan Your Curriculum', 'Serenity has taken possession of my entire soul, like these sweet mornings spring which I enjoy with my whole heart. I am alone, and feel the charm existence in this spot, which was created for the bliss of souls like mine so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(2, 'uploads_demo/instructor_procedure/become-instructor-2.jpg', 'Plan Your Curriculum', 'Serenity has taken possession of my entire soul, like these sweet mornings spring which I enjoy with my whole heart. I am alone, and feel the charm existence in this spot, which was created for the bliss of souls like mine so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(3, 'uploads_demo/instructor_procedure/become-instructor-3.jpg', 'Plan Your Curriculum', 'Serenity has taken possession of my entire soul, like these sweet mornings spring which I enjoy with my whole heart. I am alone, and feel the charm existence in this spot, which was created for the bliss of souls like mine so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', '2022-10-27 03:14:04', '2022-10-27 03:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_supports`
--

CREATE TABLE `instructor_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor_supports`
--

INSERT INTO `instructor_supports` (`id`, `logo`, `title`, `subtitle`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'uploads_demo/instructor_support/instructor-support-1.png', 'Courses', 'Single stroke at the present moment and yet I feel that was', 'Popular Courses', 'http://lmszai.zainiktheme.com/courses', '2022-10-27 03:14:05', '2022-10-27 03:14:05'),
(2, 'uploads_demo/instructor_support/instructor-support-2.png', 'Expert instructor', 'Single stroke at the present moment and yet I feel that was', 'Explore Instructor', 'http://lmszai.zainiktheme.com/all-instructor', '2022-10-27 03:14:05', '2022-10-27 03:14:05'),
(3, 'uploads_demo/instructor_support/instructor-support-3.png', '27/4 online support', 'Single stroke at the present moment and yet I feel that was', 'Support Center', 'http://lmszai.zainiktheme.com/support-ticket-faq', '2022-10-27 03:14:05', '2022-10-27 03:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtl` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active,2=inactive',
  `default_language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'on,off',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`, `iso_code`, `flag`, `rtl`, `status`, `default_language`, `created_at`, `updated_at`) VALUES
(1, 'EN ( English )', 'en', 'uploads_demo/default/en.png', 0, 1, 'on', NULL, '2022-12-29 02:49:13'),
(2, 'SA ( Arabic )', 'sa', 'uploads_demo/default/sa.png', 1, 1, 'off', NULL, '2022-12-29 02:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `learn_key_points`
--

CREATE TABLE `learn_key_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learn_key_points`
--

INSERT INTO `learn_key_points` (`id`, `course_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kieran Lamb', '2022-11-01 21:09:58', '2022-11-01 21:09:58'),
(2, 2, 'web development', '2022-11-01 21:11:24', '2022-11-01 21:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `live_classes`
--

CREATE TABLE `live_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_topic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'duration must be minutes',
  `start_url` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_url` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting_host_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'zoom,bbb,jitsi',
  `moderator_pw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'use only for bbb',
  `attendee_pw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'use only for bbb',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` bigint(20) UNSIGNED DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL COMMENT '1=static, 2=dynamic',
  `status` tinyint(4) DEFAULT NULL COMMENT '1=active, 2=deactivated',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `url`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blogs', 'blogs', NULL, 1, 1, '2022-10-27 03:14:02', '2022-10-27 03:14:02'),
(2, 'About', 'about', NULL, 1, 1, '2022-10-27 03:14:02', '2022-10-27 03:14:02'),
(3, 'Contact', 'contact', NULL, 1, 1, '2022-10-27 03:14:02', '2022-10-27 03:14:02'),
(4, 'Support', 'support-ticket-faq', NULL, 1, 1, '2022-10-27 03:14:02', '2022-10-27 03:14:02'),
(5, 'Privacy Policy', 'privacy-policy', NULL, 1, 1, '2022-10-27 03:14:02', '2022-10-27 03:14:02'),
(6, 'Cookie Policy', 'cookie-policy', NULL, 1, 1, '2022-10-27 03:14:02', '2022-10-27 03:14:02'),
(7, 'Terms & Conditions', 'terms-conditions', NULL, 1, 1, '2022-10-27 03:14:02', '2022-10-27 03:14:02'),
(10, 'Bookings', 'bookings', NULL, 1, 1, '2022-10-27 14:04:54', '2022-10-27 14:04:54'),
(17, 'packages', 'packages', NULL, 1, 1, '2022-10-27 14:54:37', '2022-10-27 14:54:24'),
(18, 'time table', 'time-table', NULL, 1, 1, '2022-10-26 22:00:00', '2022-10-27 15:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `uuid`, `url`, `page_name`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'a57d23bb-aac0-4f50-9741-8f81838efe50', NULL, 'Home', 'Home | Nabu Tutoring', ': Experienced teacher with a reliable online learning platform to provide multiple academic courses at an affordable fee.', 'NABU, Lms, Learning, Course', NULL, '2022-12-29 22:25:27'),
(2, '5aa6f399-4638-4523-aa98-0cace4d9cf58', NULL, 'Courses', 'Courses', 'NABU Course List', 'nabu, Lms, Learning, Course', NULL, '2022-12-29 02:35:31'),
(3, '47545164-4035-4b07-b98d-0601134d0990', NULL, 'Courses Details', 'Courses Details', 'NABU Course List', 'nabu, Lms, Learning, Course', NULL, '2022-12-29 02:36:44'),
(4, '3fd53b1d-785b-4d7b-9443-ef1c5a1019d5', NULL, 'Category', 'Categories', 'All courses categories', 'course, category', NULL, NULL),
(5, '3710b8d5-8766-4402-8a0a-469acd11eec5', NULL, 'Blog', 'Blog', 'NABU  Blog', 'blog, course', NULL, '2022-12-29 02:33:44'),
(6, 'f6abdcbb-0bbd-4d5f-a9e6-712a820329dd', NULL, 'Blog Details', 'Blog Details', 'NABU Blog Details', 'blog, blog details', NULL, '2022-12-29 02:34:00'),
(7, '087ba6a8-d569-4509-bbb6-8c5223b5d5d3', NULL, 'About Us', 'About Us | Nabu Tutoring', 'Experienced English Language and Mathematics Tutor, inventing new teaching methods to build strong educational foundations.', 'about us', NULL, '2022-12-29 22:22:29'),
(8, 'ff87bfe6-e7fd-43f3-87cb-e91736066106', NULL, 'Contact Us', 'Contact Us', 'NABU contact us', 'nabu , contact us', NULL, '2022-12-29 02:34:37'),
(9, 'b32d3785-0575-4f25-ab77-cb49d82005c3', NULL, 'Support Ticket', 'Support', 'NABU support ticket', 'nabu, support, ticket', NULL, '2022-12-29 02:36:20'),
(10, 'c22ec36f-27fa-4aea-8dbd-ee7826f171ac', NULL, 'Privacy Policy', 'Privacy Policy', 'NABU Privacy Policy', 'nabu, privacy, policy', NULL, '2022-12-29 02:41:00'),
(11, 'f1618dae-5634-41a8-b282-293cb9b3ff43', NULL, 'Cookie Policy', 'Cookie Policy', 'NABU  Cookie Policy', 'nabu , cookie, policy', NULL, '2022-12-29 02:35:06'),
(12, 'f348ad0c-1ae4-432b-b4b4-4385e60c448d', NULL, 'FAQ', 'FAQ', 'NABU FAQ', 'nabu , faq', NULL, '2022-12-29 02:37:08'),
(13, 'f82af816-f8f2-433a-bd4c-354f3e8f2aec', NULL, 'Terms & Conditions', 'Terms & Conditions', 'NABU Terms & Conditions Policy', 'nabu, terms, consitions', NULL, '2022-12-29 02:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_08_120002_create_categories_table', 1),
(6, '2022_03_08_124911_create_blogs_table', 1),
(7, '2022_03_10_113530_create_subcategories_table', 1),
(8, '2022_03_10_114913_create_tags_table', 1),
(9, '2022_03_10_120141_create_difficulty_levels_table', 1),
(10, '2022_03_10_120351_create_course_languages_table', 1),
(11, '2022_03_12_120608_create_currencies_table', 1),
(12, '2022_03_13_084533_create_instructors_table', 1),
(13, '2022_03_13_084819_create_settings_table', 1),
(14, '2022_03_13_100229_create_instructor_certificates_table', 1),
(15, '2022_03_14_052503_create_instructor_awards_table', 1),
(16, '2022_03_14_123059_create_metas_table', 1),
(17, '2022_03_15_092420_create_languages_table', 1),
(18, '2022_03_21_105943_create_countries_table', 1),
(19, '2022_03_21_110018_create_states_table', 1),
(20, '2022_03_21_110027_create_cities_table', 1),
(21, '2022_03_22_123520_create_user_cards_table', 1),
(22, '2022_03_23_061124_create_email_notification_settings_table', 1),
(23, '2022_03_23_104316_create_courses_table', 1),
(24, '2022_03_23_104847_create_course_tags_table', 1),
(25, '2022_03_29_130632_create_course_lessons_table', 1),
(26, '2022_03_29_130734_create_course_lectures_table', 1),
(27, '2022_04_02_104955_create_exams_table', 1),
(28, '2022_04_02_111930_create_questions_table', 1),
(29, '2022_04_02_112024_create_question_options_table', 1),
(30, '2022_04_02_124631_create_take_exams_table', 1),
(31, '2022_04_02_131147_create_answers_table', 1),
(32, '2022_04_02_132217_create_course_lecture_views_table', 1),
(33, '2022_04_03_093413_create_products_table', 1),
(34, '2022_04_07_105025_create_cart_management_table', 1),
(35, '2022_04_08_081131_create_wishlists_table', 1),
(36, '2022_04_09_060811_create_contact_us_issues_table', 1),
(37, '2022_04_09_060926_create_contact_us_table', 1),
(38, '2022_04_11_041217_create_about_us_generals_table', 1),
(39, '2022_04_11_041343_create_our_histories_table', 1),
(40, '2022_04_11_041419_create_team_members_table', 1),
(41, '2022_04_11_043000_create_instructor_supports_table', 1),
(42, '2022_04_11_043147_create_client_logos_table', 1),
(43, '2022_04_14_094216_create_instructor_features_table', 1),
(44, '2022_04_14_094313_create_instructor_procedures_table', 1),
(45, '2022_04_15_051038_create_faq_questions_table', 1),
(46, '2022_04_15_075433_create_home_special_features_table', 1),
(47, '2022_04_15_093248_create_homes_table', 1),
(48, '2022_04_16_085648_create_blog_categories_table', 1),
(49, '2022_04_16_111415_create_blog_tags_table', 1),
(50, '2022_04_18_071259_create_blog_comments_table', 1),
(51, '2022_04_18_103636_create_students_table', 1),
(52, '2022_04_20_090721_create_assignments_table', 1),
(53, '2022_04_21_063711_create_assignment_submits_table', 1),
(54, '2022_04_21_072930_create_assignment_files_table', 1),
(55, '2022_04_22_084931_create_course_resources_table', 1),
(56, '2022_04_22_101227_create_notice_boards_table', 1),
(57, '2022_04_23_044138_create_live_classes_table', 1),
(58, '2022_04_24_121452_create_orders_table', 1),
(59, '2022_04_24_121712_create_order_items_table', 1),
(60, '2022_04_24_122152_create_order_billing_addresses_table', 1),
(61, '2022_04_26_143537_create_coupons_table', 1),
(62, '2022_04_26_145556_create_coupon_instructors_table', 1),
(63, '2022_04_26_145742_create_coupon_courses_table', 1),
(64, '2022_04_27_124958_create_withdraws_table', 1),
(65, '2022_04_29_140534_create_reviews_table', 1),
(66, '2022_04_30_140200_create_discussions_table', 1),
(67, '2022_05_01_015615_create_learn_key_points_table', 1),
(68, '2022_05_01_015853_add_average_rating_to_courses_table', 1),
(69, '2022_05_08_183053_create_certificates_table', 1),
(70, '2022_05_09_122033_create_ranking_levels_table', 1),
(71, '2022_05_10_130657_add_video_to_courses_table', 1),
(72, '2022_05_11_113029_add_original_name_and_size_to_assignments_table', 1),
(73, '2022_05_11_122523_add_original_name_and_size_to_assignment_submits_table', 1),
(74, '2022_05_11_182134_add_view_to_discussions_table', 1),
(75, '2022_05_11_192633_create_support_ticket_questions_table', 1),
(76, '2022_05_12_121255_create_tickets_table', 1),
(77, '2022_05_12_121306_create_ticket_messages_table', 1),
(78, '2022_05_12_121540_create_ticket_departments_table', 1),
(79, '2022_05_12_121557_create_ticket_related_services_table', 1),
(80, '2022_05_12_121621_create_ticket_priorities_table', 1),
(81, '2022_05_12_175640_create_certificate_by_instructors_table', 1),
(82, '2022_05_13_165207_create_chat_messages_table', 1),
(83, '2022_05_15_112035_create_permission_tables', 1),
(84, '2022_05_16_125530_add_provider_id_and_avatar_to_users_table', 1),
(85, '2022_05_18_125922_create_pages_table', 1),
(86, '2022_05_18_152824_create_notifications_table', 1),
(87, '2022_05_18_161357_create_menus_table', 1),
(88, '2022_05_19_192216_create_email_templates_table', 1),
(89, '2022_05_22_165419_create_user_paypals_table', 1),
(90, '2022_05_25_131858_add_images_to_about_us_generals_table', 1),
(91, '2022_05_25_220619_create_student_certificates_table', 1),
(92, '2022_05_26_171757_create_promotions_table', 1),
(93, '2022_05_26_172008_create_promotion_courses_table', 1),
(94, '2022_05_27_154633_create_special_promotion_tags_table', 1),
(95, '2022_05_27_154757_create_special_promotion_tag_courses_table', 1),
(96, '2022_05_28_185325_add_subtitle_to_courses', 1),
(97, '2022_05_28_191647_create_course_upload_rules_table', 1),
(98, '2022_05_31_131109_add_forgot_token_to_users', 1),
(99, '2022_06_01_114750_add_cv_file_and_filename_to_instructors', 1),
(100, '2022_06_13_132354_create_policies_table', 1),
(101, '2022_06_14_180425_add_conversion_rate_and_current_currency_and_currency_amount_to_orders', 1),
(102, '2022_06_15_181443_add_default_language_to_languages', 1),
(103, '2022_07_05_171632_create_banks_table', 1),
(104, '2022_07_06_171634_add_field_to_orders_table', 1),
(105, '2022_07_20_114546_add_meeting_host_name_and_moderator_pw_and_attendee_pw_to_live_classes_table', 1),
(106, '2022_07_22_123555_add_paystack_refrence_number_to_orders_table', 1),
(107, '2022_07_25_151244_add_intro_video_check_and_into_youtube_video_id_to_courses_table', 1),
(108, '2022_08_04_160730_add_city_id_to_instructors', 1),
(109, '2022_08_06_140811_create_bundles_table', 1),
(110, '2022_08_06_140834_create_bundle_courses_table', 1),
(111, '2022_08_08_134556_add_bundle_id_to_wishlists', 1),
(112, '2022_08_08_181304_add_bundle_id_and_bundle_course_ids_to_cart_management', 1),
(113, '2022_08_08_193241_add_bundle_id_to_order_items', 1),
(114, '2022_08_11_180251_create_forum_categories_table', 1),
(115, '2022_08_11_183543_create_forum_posts_table', 1),
(116, '2022_08_12_113405_create_forum_post_comments_table', 1),
(117, '2022_08_13_170419_add_available_and_hourly_rate_to_instructors_table', 1),
(118, '2022_08_13_175625_create_consultation_slots_table', 1),
(119, '2022_08_16_152302_create_instructor_consultation_day_statuses_table', 1),
(120, '2022_08_16_180220_create_booking_histories_table', 1),
(121, '2022_08_18_160213_add_consultation_slot_id_and_consultation_details_and_consultation_date_to_cart_management_table', 1),
(122, '2022_08_19_114213_add_consultation_slot_id_and_consultation_date_to_order_items_table', 1),
(123, '2022_08_22_160209_add_some_new_fields_to_course_lectures_table', 1),
(124, '2022_08_30_115403_add_new_attributes_to_homes_table', 1),
(125, '2022_09_07_185945_add_start_url_to_live_classes_table', 1),
(126, '2022_09_07_193347_add_start_url_to_booking_histories_table', 1),
(127, '2022_09_08_124610_create_zoom_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `uuid`, `user_id`, `course_id`, `topic`, `details`, `created_at`, `updated_at`) VALUES
(1, '19cdaeff-4ef4-4fb6-abbc-ff9ae327cf5e', 2, 1, 'Topic for Notice Board', 'This is a description', '2022-10-27 03:14:04', '2022-10-27 03:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_seen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `user_type` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1=admin, 2=instructor, 3=student',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `uuid`, `sender_id`, `user_id`, `text`, `target_url`, `is_seen`, `user_type`, `created_at`, `updated_at`) VALUES
(1, '97cbb96c-0434-4d00-af4f-2e5598f30af4', 2, NULL, 'Course category has been updated', 'http://lana.customweb.digital/admin/course', 'yes', 1, '2022-11-01 21:13:41', '2022-11-02 12:03:58'),
(2, '8dc7a495-f86b-444a-a5cd-bc6ddd5818ba', 2, NULL, 'New lesson has been added', 'http://lana.customweb.digital/admin/course', 'yes', 1, '2022-11-01 21:15:10', '2022-11-02 12:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `order_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL DEFAULT 0.00,
  `platform_charge` decimal(8,2) NOT NULL DEFAULT 0.00,
  `current_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `payment_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conversion_rate` decimal(28,8) DEFAULT 0.00000000,
  `grand_total_with_conversation_rate` decimal(28,8) DEFAULT 0.00000000,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paystack_reference_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_slip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_comment` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'due' COMMENT 'paid, due, free, pending, cancelled',
  `delivery_status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending, 1=complete',
  `created_by_type` tinyint(4) DEFAULT 1 COMMENT '1=student, 2=admin',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_billing_addresses`
--

CREATE TABLE `order_billing_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `set_as_shipping_address` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `owner_user_id` bigint(20) DEFAULT NULL,
  `bundle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `consultation_slot_id` bigint(20) UNSIGNED DEFAULT NULL,
  `consultation_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` int(11) NOT NULL DEFAULT 1,
  `unit_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `admin_commission` decimal(8,2) NOT NULL DEFAULT 0.00,
  `owner_balance` decimal(8,2) NOT NULL DEFAULT 0.00,
  `sell_commission` int(11) NOT NULL DEFAULT 0 COMMENT 'How much percentage get admin and calculate in admin_commission',
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=course, 2=product, 3=bundle course, 4=consultation',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_histories`
--

CREATE TABLE `our_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_histories`
--

INSERT INTO `our_histories` (`id`, `year`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, '1998', 'Mere tranquil existence', 'Possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart am alone', NULL, NULL),
(2, '1998', 'Incapable of drawing', 'Exquisite sense of mere tranquil existence that I neglect my talents add should be incapable of drawing', NULL, NULL),
(3, '1998', 'Foliage access trees', 'Serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my', NULL, NULL),
(4, '1998', 'Among grass trickling', 'Should be incapable of drawing a single stroke at the present moment; and yet I feel that I never', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(25) DEFAULT NULL,
  `price` bigint(25) DEFAULT NULL,
  `real_price` bigint(25) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `separate_charges` int(11) DEFAULT NULL COMMENT '0=no,1=yes',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,2=deactive',
  `charges_desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `sub_title`, `price`, `real_price`, `description`, `separate_charges`, `status`, `charges_desc`, `created_at`, `updated_at`) VALUES
(4, 'Basic Package', 'Limited Time Offer', 229, 398, '<div><font color=\"#ffffff\"><b>$199/mo for Company Members, which includes</b></font></div><div><font color=\"#ffffff\"><b>Company Video for the company member to create or upload (similar to tutorial) - it\'s a free commercial for them, and they add their bio and includes link to their sit</b></font></div><div><font color=\"#ffffff\"><b>10 tutorial Listings</b></font></div><div><font color=\"#ffffff\"><b>Unlimited Access to tutorial Videos &amp; Bio</b></font></div><div><font color=\"#ffffff\"><b>Access to \'Unlock\' 50 Member Profiles which include tutorial</b></font></div><div><font color=\"#ffffff\"><b>Resume and Contact Info</b></font></div><div><font color=\"#ffffff\"><b>No charge for tutorial members who can have full access to Company profiles/videos(but not tutorial videos)</b></font></div>', NULL, 1, NULL, '2022-11-01 19:42:57', '2022-11-02 12:02:22'),
(5, 'Basic Package', 'Limited Time Offer', 229, 398, '<div><font color=\"#ffffff\">$199/mo for Company Members, which includes</font></div><div><font color=\"#ffffff\">Company Video for the company member to create or upload (similar to tutorial) - it\'s a free commercial for them, and they add their bio and includes link to their sit</font></div><div><font color=\"#ffffff\">10 tutorial Listings</font></div><div><font color=\"#ffffff\">Unlimited Access to tutorial Videos &amp; Bio</font></div><div><font color=\"#ffffff\">Access to \'Unlock\' 50 Member Profiles which include tutorial</font></div><div><font color=\"#ffffff\">Resume and Contact Info</font></div><div><font color=\"#ffffff\">No charge for tutorial members who can have full access to Company profiles/videos(but not tutorial videos)</font></div>', NULL, 1, NULL, '2022-11-01 19:42:57', '2022-11-01 20:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `uuid`, `en_title`, `en_description`, `slug`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, '61f88f1b-7bdf-4b26-9d96-13a7489fba3a', 'booking', '<p>hello booking</p>', 'booking', NULL, NULL, '2022-10-28 02:56:01', '2022-10-28 02:59:16'),
(4, '76945dd4-391c-498f-a109-045ebd1ac228', 'package', '<p>packages</p>', 'package', NULL, NULL, '2022-10-28 03:50:39', '2022-10-28 03:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage_course', 'web', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(2, 'pending_course', 'web', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(3, 'hold_course', 'web', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(4, 'approved_course', 'web', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(5, 'all_course', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(6, 'manage_course_reference', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(7, 'manage_course_category', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(8, 'manage_course_subcategory', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(9, 'manage_course_tag', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(10, 'manage_course_language', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(11, 'manage_course_difficulty_level', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(12, 'manage_instructor', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(13, 'pending_instructor', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(14, 'approved_instructor', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(15, 'all_instructor', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(16, 'add_instructor', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(17, 'manage_student', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(18, 'manage_coupon', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(19, 'manage_promotion', 'web', '2022-10-27 03:13:58', '2022-10-27 03:13:58'),
(20, 'manage_blog', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(21, 'payout', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(22, 'finance', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(23, 'manage_certificate', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(24, 'ranking_level', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(25, 'manage_language', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(26, 'account_setting', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(27, 'support_ticket', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(28, 'manage_contact', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(29, 'application_setting', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(30, 'global_setting', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(31, 'home_setting', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(32, 'mail_configuration', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(33, 'payment_option', 'web', '2022-10-27 03:13:59', '2022-10-27 03:13:59'),
(34, 'content_setting', 'web', '2022-10-27 03:14:00', '2022-10-27 03:14:00'),
(35, 'user_management', 'web', '2022-10-27 03:14:00', '2022-10-27 03:14:00'),
(36, 'packages', 'web', '2022-10-27 03:14:00', '2022-10-27 03:14:00'),
(37, 'teacher-profile', 'web', '2022-10-27 03:14:00', '2022-10-27 03:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=privacy, 2=cookie, 3=terms & conditions',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `type`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); letter-spacing: normal;\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-11-01 14:49:52', '2022-11-01 14:49:52'),
(2, 2, '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); letter-spacing: normal;\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-11-01 14:50:22', '2022-11-01 14:50:22'),
(3, 3, '<h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); letter-spacing: normal;\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2022-11-01 14:51:43', '2022-11-01 14:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_summery` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summery_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ebook, hard_copy',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=approved, 0=unapproved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=deactivated',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion_courses`
--

CREATE TABLE `promotion_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promotion_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `exam_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `question_option_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct_answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no' COMMENT 'yes, no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ranking_levels`
--

CREATE TABLE `ranking_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badge_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `earning` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranking_levels`
--

INSERT INTO `ranking_levels` (`id`, `uuid`, `name`, `badge_image`, `earning`, `student`, `serial_no`, `created_at`, `updated_at`) VALUES
(1, '5467cb17-9e75-4824-a87a-123198654099', 'Level 1', 'uploads_demo/ranking/level-1.png', 0, 0, 1, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(2, '5d02fbeb-78b5-49ee-bcba-1cbce68dd8d6', 'Level 2', 'uploads_demo/ranking/level-2.png', 100, 10, 2, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(3, '97adc0a1-b510-45f1-8438-f1126849059f', 'Level 3', 'uploads_demo/ranking/level-3.png', 200, 20, 3, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(4, 'c88a0eb9-9938-4ad2-9476-bd9f92005d24', 'Level 4', 'uploads_demo/ranking/level-4.png', 300, 30, 4, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(5, '64ebc2f8-2ffe-4919-bb2a-aecd6dcc36f5', 'Level 5', 'uploads_demo/ranking/level-5.png', 400, 40, 5, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(6, '6a6947a8-09b2-447d-9095-f131ad71fac3', 'Level 6', 'uploads_demo/ranking/level-6.png', 500, 50, 6, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(7, 'b706b962-0887-4591-a4e2-1875bb3bb6a2', 'Level 7', 'uploads_demo/ranking/level-7.png', 600, 60, 7, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(8, 'eb066f9f-e5b3-4b01-8378-887714ea2d40', 'Level 8', 'uploads_demo/ranking/level-8.png', 700, 70, 8, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(9, '9b3c6690-c93d-4814-bf36-ec7c3f9114e8', 'Level 9', 'uploads_demo/ranking/level-9.png', 800, 80, 9, '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(10, '68560d8b-6f9f-43cb-8d3f-0e0c41a09f4a', 'Level 10', 'uploads_demo/ranking/level-10.png', 900, 90, 10, '2022-10-27 03:14:04', '2022-10-27 03:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2022-10-27 03:13:57', '2022-10-27 03:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `option_key`, `option_value`, `created_at`, `updated_at`) VALUES
(1, 'app_name', 'NABU', '2022-10-27 03:13:57', '2022-12-28 23:12:18'),
(2, 'app_email', 'demo@mail.com', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(3, 'app_contact_number', '(123-458-987254824185)', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(4, 'app_location', '45/7 dreem street, albania dnobod, USA', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(5, 'app_date_format', 'd/m/Y', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(6, 'app_timezone', 'Asia/Dhaka', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(7, 'allow_preloader', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(8, 'app_preloader', 'uploads/setting/1672251214-KTzaJtyww5.png', '2022-10-27 03:13:57', '2022-12-28 23:13:34'),
(9, 'app_logo', 'uploads/setting/1672251284-NwHfcYU77i.png', '2022-10-27 03:13:57', '2022-12-28 23:14:44'),
(10, 'app_fav_icon', 'uploads/setting/1672264153-ZEfP6bP2Le.png', '2022-10-27 03:13:57', '2022-12-29 02:49:13'),
(11, 'app_copyright', '© 2021 NABU. All Rights Reserved.', '2022-10-27 03:13:57', '2022-12-29 01:46:32'),
(12, 'app_developed', 'Zainiktheme', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(13, 'og_title', 'NABU - Learning Management System', '2022-10-27 03:13:57', '2022-12-29 02:41:18'),
(14, 'og_description', 'Learning Management System', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(15, 'zoom_status', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(16, 'bbb_status', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(17, 'jitsi_status', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(18, 'jitsi_server_base_url', 'https://meet.jit.si/', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(19, 'registration_email_verification', '0', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(20, 'footer_quote', 'Mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(21, 'paystack_currency', 'NGN', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(22, 'paystack_conversion_rate', '420', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(23, 'paystack_status', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(24, 'PAYSTACK_PUBLIC_KEY', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(25, 'PAYSTACK_SECRET_KEY', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(26, 'paypal_currency', 'USD', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(27, 'paypal_conversion_rate', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(28, 'paypal_status', '0', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(29, 'PAYPAL_MODE', 'sandbox', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(30, 'PAYPAL_CLIENT_ID', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(31, 'PAYPAL_SECRET', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(32, 'stripe_currency', 'USD', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(33, 'stripe_conversion_rate', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(34, 'stripe_status', '0', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(35, 'STRIPE_MODE', 'sandbox', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(36, 'STRIPE_SECRET_KEY', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(37, 'STRIPE_PUBLIC_KEY', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(38, 'razorpay_currency', 'INR', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(39, 'razorpay_conversion_rate', '78.04', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(40, 'razorpay_status', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(41, 'RAZORPAY_KEY', 'rzp_test_jI4LNxngs3tF4n', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(42, 'RAZORPAY_SECRET', 'lZo8JpuK897uLRrnMB9imhIy', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(43, 'mollie_currency', 'EUR', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(44, 'mollie_conversion_rate', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(45, 'mollie_status', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(46, 'MOLLIE_KEY', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(47, 'im_currency', 'INR', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(48, 'im_conversion_rate', '79.84', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(49, 'im_status', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(50, 'IM_API_KEY', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(51, 'IM_AUTH_TOKEN', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(52, 'IM_URL', 'https://test.instamojo.com/api/1.1/payment-requests/', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(53, 'sslcommerz_currency', 'BDT', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(54, 'sslcommerz_conversion_rate', '92', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(55, 'sslcommerz_status', '0', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(56, 'sslcommerz_mode', 'sandbox', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(57, 'SSLCZ_STORE_ID', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(58, 'SSLCZ_STORE_PASSWD', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(59, 'MAIL_DRIVER', 'smtp', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(60, 'MAIL_HOST', 'mailhog', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(61, 'MAIL_PORT', '1025', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(62, 'MAIL_USERNAME', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(63, 'MAIL_PASSWORD', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(64, 'MAIL_ENCRYPTION', '', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(65, 'MAIL_FROM_ADDRESS', 'hello@example.com', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(66, 'MAIL_FROM_NAME', '${APP_NAME}', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(67, 'MAIL_MAILER', 'smtp', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(68, 'update', 'Save', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(69, 'sign_up_left_text', 'Discover world best online courses here. 24k online course is waiting for you', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(70, 'sign_up_left_image', 'uploads_demo/home/hero-img.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(71, 'forgot_title', 'Forgot Password?', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(72, 'forgot_subtitle', 'Enter the email address you used when you joined and we’ll send you instructions to reset your password.            For security reasons, we do NOT store your password. So rest assured that we will never send your password via email.', '2022-10-27 03:13:57', '2022-10-27 05:57:34'),
(73, 'forgot_btn_name', 'Send Reset Instructions', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(74, 'facebook_url', '#', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(75, 'twitter_url', '#', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(76, 'linkedin_url', '#', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(77, 'pinterest_url', '#', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(78, 'app_instructor_footer_title', 'Join One Of The World’s Largest Learning Marketplaces.', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(79, 'app_instructor_footer_subtitle', 'Donald valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my tree', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(80, 'get_in_touch_title', 'Get in Touch', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(81, 'send_us_msg_title', 'Send Us a Message', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(82, 'contact_us_location', '32 Yaool, myself down around dupal the street, London', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(83, 'contact_us_email_one', 'mail@nabu.co.uk', '2022-10-27 03:13:57', '2022-12-29 02:44:44'),
(84, 'contact_us_email_two', 'info@nabu.co.uk', '2022-10-27 03:13:57', '2022-12-29 02:44:44'),
(85, 'contact_us_phone_one', '328-456-07875', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(86, 'contact_us_phone_two', '128-456-07875', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(87, 'contact_us_map_link', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1839.0179632416985!2d89.5538504127622!3d22.801132631062536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8f2b1098bf95%3A0xbce09c90b98f8380!2sJust%20Orders%20Khulna!5e0!3m2!1sen!2sbd!4v1636005141952!5m2!1sen!2sbd', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(88, 'contact_us_description', 'Strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal about the human. It might take 6 -12 hour to replay', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(89, 'faq_title', 'Frequently Ask Questions.', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(90, 'faq_subtitle', 'CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(91, 'faq_image_title', 'Still no luck?', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(92, 'faq_image', 'uploads_demo/setting\\faq-img.jpg', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(93, 'faq_tab_first_title', 'Item Support', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(94, 'faq_tab_first_subtitle', 'Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a greater artist than now. When, while the lovely valley with vapour around me, and the meridian', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(95, 'faq_tab_sec_title', 'Licensing', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(96, 'faq_tab_sec_subtitle', 'Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a greater artist than now. When, while the lovely valley with vapour around me, and the meridian', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(97, 'faq_tab_third_title', 'Your Account', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(98, 'faq_tab_third_subtitle', 'Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a greater artist than now. When, while the lovely valley with vapour around me, and the meridian', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(99, 'faq_tab_four_title', 'Tax & Complications', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(100, 'faq_tab_four_subtitle', 'Ranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that was a greater artist than now. When, while the lovely valley with vapour around me, and the meridian', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(101, 'home_special_feature_first_logo', 'uploads_demo/setting\\feature-icon1.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(102, 'home_special_feature_first_title', 'Learn From Experts', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(103, 'home_special_feature_first_subtitle', 'Mornings of spring which I enjoy with my whole heart about the gen', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(104, 'home_special_feature_second_logo', 'uploads_demo/setting/feature-icon2.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(105, 'home_special_feature_second_title', 'Earn a Certificate', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(106, 'home_special_feature_second_subtitle', 'Mornings of spring which I enjoy with my whole heart about the gen', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(107, 'home_special_feature_third_logo', 'uploads_demo/setting\\feature-icon3.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(108, 'home_special_feature_third_title', '5000+ Courses', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(109, 'home_special_feature_third_subtitle', 'Serenity has taken possession of my entire soul, like these sweet spring', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(110, 'course_logo', 'uploads_demo/setting/courses-heading-img.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(111, 'course_title', 'A Broad Selection Of Courses', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(112, 'course_subtitle', 'CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(113, 'bundle_course_logo', 'uploads_demo/setting/bundle-courses-heading-img.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(114, 'bundle_course_title', 'Latest Bundle Courses', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(115, 'bundle_course_subtitle', 'CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(116, 'top_category_logo', 'uploads_demo/setting/categories-heading-img.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(117, 'top_category_title', 'Our Top Categories', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(118, 'top_category_subtitle', 'CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(119, 'top_instructor_logo', 'uploads_demo/setting\\top-instructor-heading-img.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(120, 'top_instructor_title', 'Top Rated Courses From Our Top Instructor.', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(121, 'top_instructor_subtitle', 'CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(122, 'become_instructor_video', 'uploads_demo/setting/test.mp4', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(123, 'become_instructor_video_preview_image', 'uploads_demo/setting/video-poster.jpg', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(124, 'become_instructor_video_logo', 'uploads_demo/setting/top-instructor-heading-img.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(125, 'become_instructor_video_title', 'We Only Accept Professional Courses Form Professional Instructors', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(126, 'become_instructor_video_subtitle', 'Noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(127, 'customer_say_logo', 'uploads_demo/setting/customers-say-heading-img.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(128, 'customer_say_title', 'What Our Valuable Customers Say.', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(129, 'customer_say_first_name', 'DANIEL JHON', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(130, 'customer_say_first_position', 'UI/UX DESIGNER', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(131, 'customer_say_first_comment_title', 'Great instructor, great course', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(132, 'customer_say_first_comment_description', 'Wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(133, 'customer_say_first_comment_rating_star', '5', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(134, 'customer_say_second_name', 'NORTH', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(135, 'customer_say_second_position', 'DEVELOPER', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(136, 'customer_say_second_comment_title', 'Awesome course & good response', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(137, 'customer_say_second_comment_description', 'Noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(138, 'customer_say_second_comment_rating_star', '4.5', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(139, 'customer_say_third_name', 'HIBRUPATH', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(140, 'customer_say_third_position', 'MARKETER', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(141, 'customer_say_third_comment_title', 'Fantastic course', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(142, 'customer_say_third_comment_description', 'Noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(143, 'customer_say_third_comment_rating_star', '5', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(144, 'achievement_first_logo', 'uploads_demo/setting\\1.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(145, 'achievement_first_title', 'Successfully trained', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(146, 'achievement_first_subtitle', '2000+ students', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(147, 'achievement_second_logo', 'uploads_demo/setting\\2.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(148, 'achievement_second_title', 'Video courses', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(149, 'achievement_second_subtitle', '2000+ students', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(150, 'achievement_third_logo', 'uploads_demo/setting\\3.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(151, 'achievement_third_title', 'Expert instructor', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(152, 'achievement_third_subtitle', '2000+ students', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(153, 'achievement_four_logo', 'uploads_demo/setting\\4.png', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(154, 'achievement_four_title', 'Proudly Received', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(155, 'achievement_four_title', 'Proudly Received', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(156, 'achievement_four_subtitle', '2000+ students', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(157, 'support_faq_title', 'Frequently Ask Questions. 2', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(158, 'support_faq_subtitle', 'CHOOSE FROM 5,000 ONLINE VIDEO COURSES WITH NEW ADDITIONS 3', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(159, 'ticket_title', 'Is That Helpful?', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(160, 'ticket_subtitle', 'Are You Still Confusion?', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(161, 'cookie_button_name', 'Allow cookies', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(162, 'cookie_msg', 'Your experience on this site will be improved by allowing cookies', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(163, 'COOKIE_CONSENT_STATUS', '1', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(164, 'platform_charge', '2', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(165, 'sell_commission', '0', '2022-10-27 03:13:57', '2022-10-27 03:13:57'),
(166, 'currency_id', '1', '2022-10-27 05:57:33', '2022-10-27 05:57:33'),
(167, 'language_id', '1', '2022-10-27 05:57:34', '2022-10-27 05:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `special_promotion_tags`
--

CREATE TABLE `special_promotion_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `special_promotion_tag_courses`
--

CREATE TABLE `special_promotion_tag_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_promotion_tag_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhaka', NULL, NULL),
(2, 1, 'Khulna', NULL, NULL),
(3, 1, 'Comilla', NULL, NULL),
(4, 2, 'California', NULL, NULL),
(5, 2, 'Texas', NULL, NULL),
(6, 2, 'Florida', NULL, NULL),
(7, 3, 'Argyll', NULL, NULL),
(8, 3, 'Belfast', NULL, NULL),
(9, 3, 'Cambridge', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `province_id` bigint(20) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=pending, 1=approved, 2=blocked',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `uuid`, `user_id`, `country_id`, `province_id`, `state_id`, `city_id`, `first_name`, `last_name`, `phone_number`, `postal_code`, `address`, `about_me`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 'a639b7ab-3718-4bfb-987a-bab2f5418bf3', 2, 2, NULL, NULL, NULL, 'Beatrice', 'Logan', '+1 (732) 293-2628', 'Quasi ut elit aliqu', 'Ad labore similique', 'Officiis et magna ex', 'Male', 1, '2022-11-01 20:50:41', '2022-11-01 20:50:41'),
(2, '11492dd1-5453-454c-bc39-419187eb011b', 3, 2, NULL, 4, 8, 'John', 'Doe', '123456789', '1234', '1234 abcd strreet', 'just student!', 'Male', 1, '2022-11-02 14:28:26', '2022-11-02 14:28:26'),
(3, '88da4903-0a72-4d90-ba22-069cba14d460', 4, NULL, NULL, NULL, NULL, 'Admin', 'Admin', NULL, NULL, NULL, NULL, NULL, 1, '2022-12-20 01:37:59', '2022-12-20 01:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `student_certificates`
--

CREATE TABLE `student_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `uuid`, `category_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'fa43ce49-17bd-4450-a5ff-5e63c7ded599', 1, 'Web Development', 'web-development', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(2, '0d30edd8-9b0b-419e-a215-8b3645f0578c', 1, 'Data Science', 'data-science', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(3, 'c0bc1ffc-f729-467e-abb6-f3faa14e0260', 1, 'Mobile Development', 'mobile-development', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(4, '75b50d8a-03b1-44b1-bb89-e3fb32b112e7', 1, 'Programming Language', 'programming-language', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(5, '5a96d85f-ea83-48e7-b8a3-84a763b49a4c', 1, 'Game Development', 'game-development', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(6, 'a87d6480-8fc7-424d-bbdb-cbebe3b29a24', 2, 'IT Certifications', 'it-certifications', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(7, 'ac6e63d7-fc67-4009-ba56-9e511b6dc3ad', 2, 'Network & Security', 'network-security', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(8, 'dc4e601d-434d-4d29-828d-0758f3bb002e', 2, 'Hardware', 'hardware', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(9, '40336171-fa47-4f4c-a6ca-7b37efc29d1f', 2, 'Operating System & Servers', 'operating-system-servers', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(10, '1a557a06-a9c7-4761-8855-574590688c98', 3, 'Microsoft', 'microsoft', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(11, 'f39017ba-e596-44aa-b6d7-d5204756532c', 3, 'Apple', 'apple', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(12, 'bfad3230-641a-4205-9ce7-4cf2a2b744b3', 3, 'Google', 'google', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(13, '232ed464-ca3d-49f1-ac45-e0d046f073f0', 4, 'Career Development', 'career-development', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(14, '8708aeff-e5cd-4ce6-8564-9a7d0a39eb8b', 4, 'Creativity', 'creativity', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(15, '5d3897c3-f0f2-40ee-a0ea-3b9fd84d5033', 5, 'Communication', 'communication', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(16, '315eff05-37a5-4ba5-a30b-ce84f4486d69', 5, 'Management', 'management', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(17, '274f8722-c35a-442d-aca3-72781279fe15', 5, 'Sales', 'sales', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(18, '24d18967-9f64-4a46-9cd5-2e8f5dd1688e', 7, 'Web Design', 'web-design', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(19, '1175676f-d7d5-41fe-a484-bdaf3e1c1330', 7, 'Graphic Design', 'graphic-design', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(20, 'ef37a3aa-f816-4e3f-b673-ecf4376c6716', 7, 'Game Design', 'game-design', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(21, '902ef0af-aab0-4919-88f7-74240103e088', 7, 'Fashion Design', 'fashion-design', '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(22, 'f25e5168-f8fb-479a-a243-a5f0d773e25a', 7, 'User Experience Design', 'user-experience-design', '2022-10-27 03:14:03', '2022-10-27 03:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket_questions`
--

CREATE TABLE `support_ticket_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_ticket_questions`
--

INSERT INTO `support_ticket_questions` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Where can I see the status of my refund?', 'In the Refund Status column you can see the date your refund request was submitted or when it was processed.', '2022-10-27 03:14:04', '2022-11-01 15:38:39'),
(2, 'When will I receive my refund?', 'Refund requests are submitted immediately to your payment processor or financial institution after Udemy has received and processed your request. It may take  5 to 10 business days or longer to post the funds in your account, depending on your financial institution or location.', '2022-10-27 03:14:04', '2022-11-01 15:38:39'),
(3, 'Why was my refund request denied?', 'All eligible courses purchased on Udemy can be refunded within 30 days, provided the request meets the guidelines in our refund policy.', '2022-10-27 03:14:04', '2022-11-01 15:38:39'),
(4, 'What is a “credit refund”?', 'In cases where a transaction is not eligible for a refund to your original payment method, the refund will be granted using LMSZAI Credit', '2022-10-27 03:14:04', '2022-11-01 15:38:39'),
(5, 'Where can I see the status of my refund?', 'In the Refund Status column you can see the date your refund request was submitted or when it was processed.', '2022-10-27 03:14:04', '2022-11-01 15:38:39'),
(6, 'When will I receive my refund?', 'Refund requests are submitted immediately to your payment processor or financial institution after Udemy has received and processed your request. It may take  5 to 10 business days or longer to post the funds in your account, depending on your financial institution or location.', '2022-10-27 03:14:04', '2022-11-01 15:38:39'),
(7, 'Why was my refund request denied?', 'All eligible courses purchased on Udemy can be refunded within 30 days, provided the request meets the guidelines in our refund policy.', '2022-10-27 03:14:04', '2022-11-01 15:38:39'),
(8, 'What is a “credit refund”?', 'In cases where a transaction is not eligible for a refund to your original payment method, the refund will be granted using LMSZAI Credit', '2022-10-27 03:14:04', '2022-11-01 15:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `uuid`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, '9261f369-1996-470c-a809-765c8ec43c00', 'Design', 'design', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(2, 'beb50c57-abd6-41be-8716-cf5c99709f59', 'Development', 'development', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(3, '156d73a2-b796-4525-880c-8aeb37408deb', 'IT', 'it', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(4, '43f4042d-8b8a-413e-807e-694a5cbd18c4', 'Programming', 'programming', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(5, '45a25331-27f1-45f0-8821-a473b40da8d7', 'Travel', 'travel', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(6, '18219c25-91c8-4b65-8446-526eb9bb15bc', 'Music', 'music', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(7, 'e22b1bb3-4313-42c7-a82b-65f4dae90432', 'Digital marketing', 'digital-marketing', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(8, '44049498-0b44-47f3-8838-2bf27fc3e436', 'Science', 'science', '2022-10-27 03:14:04', '2022-10-27 03:14:04'),
(9, 'bcc3a4ed-578c-40c5-a15e-3bcfe9f30919', 'Math', 'math', '2022-10-27 03:14:04', '2022-10-27 03:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `take_exams`
--

CREATE TABLE `take_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `exam_id` bigint(20) NOT NULL,
  `number_of_correct_answer` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profiles`
--

CREATE TABLE `teacher_profiles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `tool_desc` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `youtube_intro` longtext DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_profiles`
--

INSERT INTO `teacher_profiles` (`id`, `title`, `hobbies`, `tool_desc`, `image`, `youtube_intro`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Dolor nobis neque au', 'Sed totam corporis q', '<div class=\"intro\" style=\"padding-top: 35px; border: none; outline: none; color: rgb(82, 82, 108); font-family: Jost, sans-serif;\"><h1 style=\"border: none; outline: none; font-weight: 500; line-height: 1.2; font-size: 26px; color: var(--heading-color); font-family: Poppins, sans-serif;\">Introdcution</h1></div><div class=\"instant\" style=\"padding-top: 20px; border: none; outline: none; color: rgb(82, 82, 108); font-family: Jost, sans-serif;\"><h4 style=\"border: none; outline: none; font-weight: 500; line-height: 35px; font-size: 18px; color: rgb(12, 140, 236); font-family: Poppins, sans-serif;\">Instant tutoring<span class=\"fa-solid fa-bolt-lightning\" style=\"padding-left: 8px; border: none; outline: none; display: var(--fa-display,inline-block); font-family: &quot;Font Awesome 6 Pro&quot;;\"></span></h4></div><div class=\"lang\" style=\"padding-top: 8px; padding-bottom: 16px; border: none; outline: none; font-family: Poppins, sans-serif; color: rgb(82, 82, 108);\"><span style=\"border: none; outline: none;\"><span style=\"border: none; outline: none; font-weight: bolder;\">Speaks :</span></span>&nbsp;<span style=\"border: none; outline: none;\">English</span>&nbsp;<span style=\"padding: 1px 6px; border: none; outline: none; color: rgb(12, 140, 236); background-color: rgb(223, 223, 223);\">Native</span>&nbsp;<span style=\"border: none; outline: none;\">,</span>&nbsp;<span style=\"border: none; outline: none;\">Arabic</span>&nbsp;<span style=\"padding: 1px 6px; border: none; outline: none; color: rgb(12, 140, 236); background-color: rgb(223, 223, 223);\">Native</span></div><div class=\"para\" style=\"border: none; outline: none; color: rgb(82, 82, 108); font-family: Jost, sans-serif;\"><p style=\"margin-bottom: 0px; border: none; outline: none; font-size: 15px; color: var(--body-font-color); line-height: 25px; font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed rerum obcaecati, harum accusantium porro dolor laboriosam odit suscipit atque? Voluptatem blanditiis possimus corrupti assumenda, vitae officiis totam mollitia! Voluptatum, quis!</p><p style=\"margin-bottom: 0px; border: none; outline: none; font-size: 15px; color: var(--body-font-color); line-height: 25px; font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed rerum obcaecati, harum accusantium porro dolor laboriosam odit suscipit atque? Voluptatem blanditiis possimus corrupti assumenda, vitae officiis totam mollitia! Voluptatum, quis!</p></div>', '1_pihoomzwh9plr9_ga26jca_1667402022.png', 'https://youtu.be/D0UnqGm_miA', 'video_1667402022.jpg', '2022-11-02 17:58:50', '2022-11-02 20:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `image`, `name`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'uploads_demo/team_member/1.jpg', 'Arnold keens', 'CREATIVE DIRECTOR', '2022-10-27 03:14:05', '2022-10-27 03:14:05'),
(2, 'uploads_demo/team_member/2.jpg', 'James Bond', 'Designer', '2022-10-27 03:14:05', '2022-10-27 03:14:05'),
(3, 'uploads_demo/team_member/3.jpg', 'Ketty Perry', 'Customer Support', '2022-10-27 03:14:05', '2022-10-27 03:14:05'),
(4, 'uploads_demo/team_member/4.jpg', 'Scarlett Johansson', 'CREATIVE DIRECTOR', '2022-10-27 03:14:05', '2022-10-27 03:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1 COMMENT '1=Open, 2=Closed',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `related_service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `priority_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_departments`
--

CREATE TABLE `ticket_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_messages`
--

CREATE TABLE `ticket_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sender_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `reply_admin_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_priorities`
--

CREATE TABLE `ticket_priorities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_related_services`
--

CREATE TABLE `ticket_related_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1=admin, 2=instructor, 3=student',
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forgot_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `phone_number`, `address`, `image`, `avatar`, `forgot_token`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administration', 'admin@gmail.com', '2022-10-27 03:14:03', '$2y$10$gY4zhV9Jq32J6XGUlesIJOI/B8EiH9dTZxSQZ9ZbrrKdAfzlV/S/K', 1, '+8801999999999', 'Dhaka, Bangladesh', 'uploads_demo/user/admin-avatar.jpg', NULL, NULL, NULL, NULL, '2022-10-27 03:14:03', '2022-10-27 03:14:03'),
(2, 'Beatrice Logan', 'vomoniru@mailinator.com', '2022-11-01 20:50:40', '$2y$10$BsAuxzM1TaQPYo.Sqgf3k.qJWgxSiTNiwG6QbyaqG3z44tRjTQvCC', 2, NULL, NULL, 'uploads/user/1667317841-jGXuUr0H66.jpg', NULL, NULL, NULL, NULL, '2022-11-01 20:50:41', '2022-11-01 20:50:41'),
(3, 'John Doe', 'john@gmail.com', '2022-11-02 14:28:26', '$2y$10$gY4zhV9Jq32J6XGUlesIJOI/B8EiH9dTZxSQZ9ZbrrKdAfzlV/S/K', 3, NULL, NULL, 'uploads/user/1667381306-RY4amJWVqq.png', NULL, NULL, NULL, NULL, '2022-11-02 14:28:26', '2022-11-02 14:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_cards`
--

CREATE TABLE `user_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `card_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_paypals`
--

CREATE TABLE `user_paypals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bundle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `transection_id` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending, 1=complete, 2=rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zoom_settings`
--

CREATE TABLE `zoom_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `api_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_secret` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'true, false',
  `participant_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'true, false',
  `waiting_room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'true, false',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=disable, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_generals`
--
ALTER TABLE `about_us_generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `assignments_uuid_unique` (`uuid`);

--
-- Indexes for table `assignment_files`
--
ALTER TABLE `assignment_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment_submits`
--
ALTER TABLE `assignment_submits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `assignment_submits_uuid_unique` (`uuid`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_uuid_unique` (`uuid`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_uuid_unique` (`uuid`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_histories`
--
ALTER TABLE `booking_histories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_histories_uuid_unique` (`uuid`);

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bundles_uuid_unique` (`uuid`);

--
-- Indexes for table `bundle_courses`
--
ALTER TABLE `bundle_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_management`
--
ALTER TABLE `cart_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_uuid_unique` (`uuid`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `certificates_uuid_unique` (`uuid`);

--
-- Indexes for table `certificate_by_instructors`
--
ALTER TABLE `certificate_by_instructors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `certificate_by_instructors_uuid_unique` (`uuid`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_logos`
--
ALTER TABLE `client_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation_slots`
--
ALTER TABLE `consultation_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_issues`
--
ALTER TABLE `contact_us_issues`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_us_issues_uuid_unique` (`uuid`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_uuid_unique` (`uuid`);

--
-- Indexes for table `coupon_courses`
--
ALTER TABLE `coupon_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_instructors`
--
ALTER TABLE `coupon_instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_uuid_unique` (`uuid`);

--
-- Indexes for table `course_languages`
--
ALTER TABLE `course_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_languages_uuid_unique` (`uuid`);

--
-- Indexes for table `course_lectures`
--
ALTER TABLE `course_lectures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_lectures_uuid_unique` (`uuid`);

--
-- Indexes for table `course_lecture_views`
--
ALTER TABLE `course_lecture_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_lessons`
--
ALTER TABLE `course_lessons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_lessons_uuid_unique` (`uuid`);

--
-- Indexes for table `course_resources`
--
ALTER TABLE `course_resources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_resources_uuid_unique` (`uuid`);

--
-- Indexes for table `course_tags`
--
ALTER TABLE `course_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_upload_rules`
--
ALTER TABLE `course_upload_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `difficulty_levels`
--
ALTER TABLE `difficulty_levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `difficulty_levels_uuid_unique` (`uuid`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_notification_settings`
--
ALTER TABLE `email_notification_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_notification_settings_uuid_unique` (`uuid`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_templates_uuid_unique` (`uuid`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exams_uuid_unique` (`uuid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq_questions`
--
ALTER TABLE `faq_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_categories`
--
ALTER TABLE `forum_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forum_categories_uuid_unique` (`uuid`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forum_posts_uuid_unique` (`uuid`);

--
-- Indexes for table `forum_post_comments`
--
ALTER TABLE `forum_post_comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forum_post_comments_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_special_features`
--
ALTER TABLE `home_special_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructors_uuid_unique` (`uuid`);

--
-- Indexes for table `instructor_awards`
--
ALTER TABLE `instructor_awards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructor_awards_uuid_unique` (`uuid`);

--
-- Indexes for table `instructor_certificates`
--
ALTER TABLE `instructor_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructor_certificates_uuid_unique` (`uuid`);

--
-- Indexes for table `instructor_consultation_day_statuses`
--
ALTER TABLE `instructor_consultation_day_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_features`
--
ALTER TABLE `instructor_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_procedures`
--
ALTER TABLE `instructor_procedures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_supports`
--
ALTER TABLE `instructor_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_language_unique` (`language`),
  ADD UNIQUE KEY `languages_iso_code_unique` (`iso_code`);

--
-- Indexes for table `learn_key_points`
--
ALTER TABLE `learn_key_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_classes`
--
ALTER TABLE `live_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `live_classes_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `metas_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notice_boards_uuid_unique` (`uuid`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notifications_uuid_unique` (`uuid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_uuid_unique` (`uuid`);

--
-- Indexes for table `order_billing_addresses`
--
ALTER TABLE `order_billing_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_histories`
--
ALTER TABLE `our_histories`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_uuid_unique` (`uuid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_uuid_unique` (`uuid`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `promotions_uuid_unique` (`uuid`);

--
-- Indexes for table `promotion_courses`
--
ALTER TABLE `promotion_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `questions_uuid_unique` (`uuid`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question_options_uuid_unique` (`uuid`);

--
-- Indexes for table `ranking_levels`
--
ALTER TABLE `ranking_levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ranking_levels_uuid_unique` (`uuid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_promotion_tags`
--
ALTER TABLE `special_promotion_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `special_promotion_tags_uuid_unique` (`uuid`);

--
-- Indexes for table `special_promotion_tag_courses`
--
ALTER TABLE `special_promotion_tag_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_uuid_unique` (`uuid`);

--
-- Indexes for table `student_certificates`
--
ALTER TABLE `student_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_certificates_uuid_unique` (`uuid`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_uuid_unique` (`uuid`);

--
-- Indexes for table `support_ticket_questions`
--
ALTER TABLE `support_ticket_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_uuid_unique` (`uuid`);

--
-- Indexes for table `take_exams`
--
ALTER TABLE `take_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_profiles`
--
ALTER TABLE `teacher_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_uuid_unique` (`uuid`);

--
-- Indexes for table `ticket_departments`
--
ALTER TABLE `ticket_departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_departments_uuid_unique` (`uuid`);

--
-- Indexes for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_priorities`
--
ALTER TABLE `ticket_priorities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_priorities_uuid_unique` (`uuid`);

--
-- Indexes for table `ticket_related_services`
--
ALTER TABLE `ticket_related_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_related_services_uuid_unique` (`uuid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_cards`
--
ALTER TABLE `user_cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_cards_uuid_unique` (`uuid`);

--
-- Indexes for table `user_paypals`
--
ALTER TABLE `user_paypals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `withdraws_uuid_unique` (`uuid`);

--
-- Indexes for table `zoom_settings`
--
ALTER TABLE `zoom_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_generals`
--
ALTER TABLE `about_us_generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignment_files`
--
ALTER TABLE `assignment_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignment_submits`
--
ALTER TABLE `assignment_submits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_histories`
--
ALTER TABLE `booking_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bundles`
--
ALTER TABLE `bundles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bundle_courses`
--
ALTER TABLE `bundle_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_management`
--
ALTER TABLE `cart_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_by_instructors`
--
ALTER TABLE `certificate_by_instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client_logos`
--
ALTER TABLE `client_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consultation_slots`
--
ALTER TABLE `consultation_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact_us_issues`
--
ALTER TABLE `contact_us_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_courses`
--
ALTER TABLE `coupon_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_instructors`
--
ALTER TABLE `coupon_instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_languages`
--
ALTER TABLE `course_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_lectures`
--
ALTER TABLE `course_lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_lecture_views`
--
ALTER TABLE `course_lecture_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_lessons`
--
ALTER TABLE `course_lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_resources`
--
ALTER TABLE `course_resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_tags`
--
ALTER TABLE `course_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_upload_rules`
--
ALTER TABLE `course_upload_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `difficulty_levels`
--
ALTER TABLE `difficulty_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_notification_settings`
--
ALTER TABLE `email_notification_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_questions`
--
ALTER TABLE `faq_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_post_comments`
--
ALTER TABLE `forum_post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_special_features`
--
ALTER TABLE `home_special_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor_awards`
--
ALTER TABLE `instructor_awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_certificates`
--
ALTER TABLE `instructor_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_consultation_day_statuses`
--
ALTER TABLE `instructor_consultation_day_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_features`
--
ALTER TABLE `instructor_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instructor_procedures`
--
ALTER TABLE `instructor_procedures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instructor_supports`
--
ALTER TABLE `instructor_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `learn_key_points`
--
ALTER TABLE `learn_key_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `live_classes`
--
ALTER TABLE `live_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_billing_addresses`
--
ALTER TABLE `order_billing_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_histories`
--
ALTER TABLE `our_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion_courses`
--
ALTER TABLE `promotion_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranking_levels`
--
ALTER TABLE `ranking_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `special_promotion_tags`
--
ALTER TABLE `special_promotion_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `special_promotion_tag_courses`
--
ALTER TABLE `special_promotion_tag_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_certificates`
--
ALTER TABLE `student_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `support_ticket_questions`
--
ALTER TABLE `support_ticket_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `take_exams`
--
ALTER TABLE `take_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_profiles`
--
ALTER TABLE `teacher_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_departments`
--
ALTER TABLE `ticket_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_priorities`
--
ALTER TABLE `ticket_priorities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_related_services`
--
ALTER TABLE `ticket_related_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_cards`
--
ALTER TABLE `user_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_paypals`
--
ALTER TABLE `user_paypals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zoom_settings`
--
ALTER TABLE `zoom_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
