-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2018 at 01:34 AM
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
(5, 'The Phantom of the Opera', '', 'N91AL8sAh9o', 'A young soprano becomes the obsession of a disfigured musical genius who lives beneath the Paris OpÃ©ra House. He kidnaps the soprano and forces the owners of the play to keep her as the lead role of the play.', 'Trailer', 'N91AL8sAh9o', 'Cole', '09-04-18 at: 12:55'),
(6, 'The Cowboys', '', 'emjnjPfmoPI', 'Rancher Wil Andersen is forced to hire inexperienced boys as cowhands in order to get his herd to market on time but the rough drive is full of dangers and a gang of cattle rustlers is trailing them.', 'Trailer', 'emjnjPfmoPI', 'Cole', '09-04-18 at: 12:56'),
(7, '21 Jump Street', '', 'RLoKtb4c4W0', 'A pair of underachieving cops are sent back to a local high school to blend in and bring down a synthetic drug ring.', 'Trailer', 'RLoKtb4c4W0', 'Cole', '09-04-18 at: 01:03'),
(8, 'Guardians of the Galaxy', '', 'd96cjJhvlMA', 'A group of intergalactic criminals are forced to work together to stop a fanatical warrior from taking control of the universe.', 'Trailer', 'd96cjJhvlMA', 'Cole', '09-04-18 at: 01:09'),
(9, 'Casablanca', '', 'BkL9l7qovsE', 'A cynical nightclub owner protects an old flame and her husband from Nazis in Morocco.', 'Trailer', 'BkL9l7qovsE', 'Cole', '09-04-18 at: 01:12'),
(10, 'The Conjuring', '', 'k10ETZ41q5o', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.', 'Trailer', 'k10ETZ41q5o', 'Cole', '09-04-18 at: 01:12'),
(11, 'The Fifth Element', '', 'fQ9RqgcR24g', 'In the colorful future, a cab driver unwittingly becomes the central figure in the search for a legendary cosmic weapon to keep Evil and Mr. Zorg at bay.', 'Trailer', 'fQ9RqgcR24g', 'Cole', '09-04-18 at: 01:13'),
(12, 'Inception', '', 'YoHD9XEInc0', 'A thief, who steals corporate secrets through the use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.', 'Trailer', 'YoHD9XEInc0', 'Cole', '09-04-18 at: 01:15'),
(13, 'Zootopia', 'Trailer 2', 'jWM0ct-OLsM', 'In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.', 'Trailer', 'jWM0ct-OLsM', 'Cole', '09-04-18 at: 01:15'),
(14, 'Indiana Jones and the Kingdom of the Crystal Skull', '', 'Ibc7Au8SSB0', 'Famed archaeologist and adventurer Dr. Henry Indiana Jones, Jr. is called back into action, when he becomes entangled in a Soviet plot to uncover the secret behind mysterious artifacts known as the Crystal Skulls.', 'Trailer', 'Ibc7Au8SSB0', 'Cole', '09-04-18 at: 01:17'),
(15, 'Pulp Fiction', '', 's7EdQ4FqbhY', 'The lives of two mob hitmen, a boxer, a gangsters wife, and a pair of diner bandits intertwine in four tales of violence and redemption.', 'Trailer', 's7EdQ4FqbhY', 'Cole', '09-04-18 at: 01:18'),
(16, 'Gladiator', '', 'owK1qxDselE', 'When a Roman General is betrayed, and his family murdered by an emperors corrupt son, he comes to Rome as a gladiator to seek revenge', 'Trailer', 'owK1qxDselE', 'Cole', '09-04-18 at: 01:20'),
(17, 'Saving Private Ryan', '', 'RYID71hYHzg', 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.', 'Trailer', 'RYID71hYHzg', 'Cole', '09-04-18 at: 01:21'),
(18, 'The Incredibles', '', 'eZbzbC9285I', 'family of undercover superheroes, while trying to live the quiet suburban life, are forced into action to save the world.', 'Trailer', 'eZbzbC9285I', 'Cole', '09-04-18 at: 01:21'),
(19, 'The Chronicles of Narnia: The Lion, The Witch, and The Wardrobe', '', 'pYcGFLgJ8Uo', 'Four kids travel through a wardrobe to the land of Narnia and learn of their destiny to free it with the guidance of a mystical lion.', 'Trailer', 'pYcGFLgJ8Uo', 'Cole', '09-04-18 at: 01:21'),
(20, 'Glory Road', '', 'uEd69QSBI0s', 'In 1966, Texas Western coach Don Haskins led the first all-black starting line-up for a college basketball team to the NCAA national championship.', 'Trailer', 'uEd69QSBI0s', 'Cole', '09-04-18 at: 01:22'),
(21, 'Ant Man', '', 'pWdKf3MneyI', 'Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, plan and pull off a heist that will save the world.', 'Trailer', 'pWdKf3MneyI', 'Cole', '09-04-18 at: 01:22'),
(22, 'How to lose a guy in 10 days', '', '2ZMGk_Ml1fc', 'Benjamin Barry is an advertising executive and ladies man who, to win a big campaign, bets that he can make a woman fall in love with him in 10 days. Andie Anderson covers the How To beat for Composure magazine and is assigned to write an article on How to Lose a Guy in 10 days. They meet in a bar shortly after the bet is made.', 'Trailer', '2ZMGk_Ml1fc', 'Cole', '09-04-18 at: 01:23'),
(23, 'The Proposal', '', 'RFL8b1p1ELY', 'A pushy boss forces her young assistant to marry her in order to keep her visa status in the U.S. and avoid deportation to Canada.', 'Trailer', 'RFL8b1p1ELY', 'Cole', '09-04-18 at: 01:23'),
(24, 'Jurassic World: Fallen Kingdom', '', 'vn9mMeWcgoM', 'When the islands dormant volcano begins roaring to life, Owen and Claire mount a campaign to rescue the remaining dinosaurs from this extinction-level event.', 'Trailer', 'vn9mMeWcgoM', 'Cole', '09-04-18 at: 01:23'),
(25, 'Ready Player One', '', 'ixWL1BWi44U', 'When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS users to find his Easter Egg, which will give the finder his fortune.', 'Trailer', 'ixWL1BWi44U', 'Cole', '09-04-18 at: 01:24'),
(26, 'Wonder', '', 'Ob7fPOzbmzE', 'Based on the New York Times bestseller, WONDER tells the incredibly inspiring and heartwarming story of August Pullman, a boy with facial differences who enters 5th grade, attending a mainstream elementary school for the first time', 'Trailer', 'Ob7fPOzbmzE', 'Cole', '09-04-18 at: 01:24'),
(27, 'Blade Runner 2049', '', 'gCcx85zbxz4', 'A young blade runners discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, whos been missing for thirty years.', 'Trailer', 'gCcx85zbxz4', 'Cole', '09-04-18 at: 01:25'),
(28, 'It', '', 'xKJmEC5ieOk', 'In the summer of 1989, a group of bullied kids band together to destroy a shapeshifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.', 'Trailer', 'xKJmEC5ieOk', 'Cole', '09-04-18 at: 01:26'),
(29, 'Sisters', '', 'vRnhEjP3R-c', 'Two sisters decide to throw one last house party before their parents sell their family home.', 'Trailer', 'vRnhEjP3R-c', 'Cole', '09-04-18 at: 01:26');

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
(38, 2, 13),
(39, 5, 8),
(40, 6, 11),
(41, 7, 3),
(42, 8, 1),
(43, 9, 15),
(44, 10, 7),
(45, 11, 9),
(46, 12, 9),
(47, 13, 13),
(48, 14, 2),
(49, 15, 4),
(50, 16, 6),
(51, 17, 10),
(52, 18, 12),
(53, 19, 14),
(54, 20, 16),
(55, 21, 1),
(56, 22, 15),
(57, 23, 15),
(58, 24, 14),
(59, 25, 12),
(60, 26, 5),
(61, 27, 9),
(62, 28, 7),
(63, 29, 3);

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
  MODIFY `content_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  MODIFY `mov_genre_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
