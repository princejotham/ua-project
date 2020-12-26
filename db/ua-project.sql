-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 03:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ua-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_budget`
--

CREATE TABLE `item_budget` (
  `id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `research_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_budget`
--

INSERT INTO `item_budget` (`id`, `description`, `amount`, `research_id`) VALUES
(1, 'Item Budget One', '1000.00', 1),
(2, 'Item BudgetTwo', '2000.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `proponent`
--

CREATE TABLE `proponent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `research_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proponent`
--

INSERT INTO `proponent` (`id`, `name`, `research_id`) VALUES
(1, 'Monique Parkes', 1),
(2, 'Ebrahim Wu', 1),
(3, 'Bernard Page', 1),
(4, 'Camilla Larsen', 2),
(5, 'Maddison Fraser', 2),
(6, 'Rabia Mccall', 2);

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `affiliation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `background_study` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `significant_study` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `definition_terms` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `methodology` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_plan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_involved` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `research_references` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `title`, `affiliation`, `background_study`, `significant_study`, `definition_terms`, `methodology`, `work_plan`, `staff_involved`, `research_references`, `status`, `date_created`, `date_updated`) VALUES
(1, 'Research One', 'Affiliation', 'Background Study', 'Significant Study', 'Definition Terms', 'Methodology', 'Work Plan', 'Staff Involved', 'Research References', 'Pending', '2020-12-26 13:44:32', NULL),
(2, 'Research Two', 'Affiliation Two', 'Background Study Two', 'Significant Study Two', 'Definition Terms Two', 'Methodology Two', 'Work Plan Two', 'Staff Involved Two', 'Research References Two', 'Pending', '2020-12-26 13:45:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_budget`
--
ALTER TABLE `item_budget`
  ADD PRIMARY KEY (`id`),
  ADD KEY `research_id` (`research_id`);

--
-- Indexes for table `proponent`
--
ALTER TABLE `proponent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `research_id` (`research_id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_budget`
--
ALTER TABLE `item_budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proponent`
--
ALTER TABLE `proponent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
