-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2018 at 07:10 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admincms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `content_id` int(10) UNSIGNED NOT NULL,
  `content_title` varchar(300) NOT NULL,
  `content_slug` text NOT NULL,
  `content_image` varchar(300) NOT NULL,
  `content_desc` text NOT NULL,
  `content_type` varchar(30) NOT NULL,
  `content_data` text NOT NULL,
  `content_by` varchar(100) NOT NULL,
  `content_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `content_title`, `content_slug`, `content_image`, `content_desc`, `content_type`, `content_data`, `content_by`, `content_date`) VALUES
(2, 'Zootopia', 'Trailer 2', 'jWM0ct-OLsM', 'In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.', 'Trailer', 'jWM0ct-OLsM', 'Cole', '08-04-18 at: 07:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `genre_id` tinyint(3) UNSIGNED NOT NULL,
  `genre_name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Drama'),
(6, 'Historical'),
(7, 'Horror'),
(8, 'Musical'),
(9, 'Science Fiction'),
(10, 'War'),
(11, 'Western'),
(12, 'Animation'),
(13, 'Family'),
(14, 'Fantasy'),
(15, 'Romance'),
(16, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mov_genre`
--

CREATE TABLE `tbl_mov_genre` (
  `mov_genre_id` mediumint(8) UNSIGNED NOT NULL,
  `content_id` mediumint(9) NOT NULL,
  `genre_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mov_genre`
--

INSERT INTO `tbl_mov_genre` (`mov_genre_id`, `content_id`, `genre_id`) VALUES
(38, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `users_id` int(10) UNSIGNED NOT NULL,
  `users_name` varchar(30) NOT NULL,
  `users_pass` varchar(255) NOT NULL,
  `users_email` varchar(50) NOT NULL,
  `users_lastlog` varchar(60) DEFAULT NULL,
  `users_ip` varchar(50) DEFAULT NULL,
  `users_level` int(11) NOT NULL,
  `users_fname` varchar(100) NOT NULL,
  `users_firstlog` tinyint(1) NOT NULL DEFAULT '1',
  `users_accountCreationDate` varchar(30) DEFAULT NULL,
  `users_suspensionCheck` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`users_id`, `users_name`, `users_pass`, `users_email`, `users_lastlog`, `users_ip`, `users_level`, `users_fname`, `users_firstlog`, `users_accountCreationDate`, `users_suspensionCheck`) VALUES
(27, 'Cole', '$2y$10$FUPmdQ76wUjqM.6k16sxGO//IOtj6n736A2ouqvEINNExTT6.7oOa', 'Cole', '28-02-18 at 10:27:46pm', '127.0.0.1', 1, 'Cole', 1, NULL, 0),
(39, 'Alex', '$2y$10$0UKA2CqVkKgsxa1zmZETeuThraArsVxby9FHVhW8H5iEaDRj1Whvy', 'Alex', NULL, NULL, 2, 'Alex', 1, NULL, 0),
(40, 'Aardvark', '$2y$10$fT2xOdsfC6aCz0D0YN4Iv.PJQNvub83rY/9XsXFoMVil8drXWyJOu', 'evil', NULL, NULL, 1, 'Cole', 1, NULL, 0),
(41, 'Donnie', '$2y$10$3.yuToz2TOqlwlNd9IHu..AESiRMQu.tNyp22ZeKGphcdyA4kgtuq', 'Donnie', NULL, NULL, 2, 'Donnie', 0, NULL, 0),
(42, 'Dimmie', '$2y$10$IPvWGItXyWodzO5EpyhGkumaGGJCbeHnyu2BiiPqgL.Z1bB1NTP6u', 'Dimmie', NULL, NULL, 2, 'Dimmie', 0, NULL, 0),
(43, 'Darko', '$2y$10$EAt1fHMHD0j9rTVcHWd.Ve6AAROBs5NZvktFh8bHkQ3rBiH7nrGHe', 'Darko', '25-02-18 at 05:59:00am', '127.0.0.1', 2, 'Darko', 1, NULL, 0),
(44, 'Axel', '$2y$10$.uwPDn2DGyEsOfawlr73EuaPUp7wMQYC7q7p1X/Cq.dP4ajVd8ouS', 'Axel', '28-02-18 at 09:53:33pm', '127.0.0.1', 1, 'Axel', 0, 'Hello!', 0),
(45, 'Abder', '$2y$10$iLRRx4iXjEdjzAWtvHkGAuEok5iFfLrCFR89gknGQuR4UgmQpSLhW', 'Abder', NULL, NULL, 1, 'Abder', 0, '000000', 0),
(46, 'asdf', '$2y$10$38Lh05jgdjVYUbK7adOps.ZFwpv9n6/NptkGDAqPlIQ5fIHKFhZ92', 'asdf', NULL, NULL, 1, 'asdf', 0, '1519855325', 0),
(47, 'LK', '$2y$10$FzXjPMy6PaK/zBWbPdqLaedgJMD2MixrohdQrwmqyJPBKapNWQheu', 'LK', '28-02-18 at 10:36:35pm', '127.0.0.1', 1, 'LK', 0, '1519855604', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  ADD PRIMARY KEY (`mov_genre_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `content_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  MODIFY `mov_genre_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
