-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2023 at 12:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_ticket_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `show_id` int(11) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `seat_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `email_address`) VALUES
(68, 'dembo1234@gmail.com'),
(64, 'dembo445121121@gmail.com'),
(73, 'dembo4451222@gmail.com'),
(66, 'dembo44522222@gmail.com'),
(65, 'dembo44dddsdsd5@gmail.com'),
(62, 'dembo4ddd45@gmail.com'),
(63, 'dembo55555@gmail.com'),
(67, 'phinlek23@gmail.com'),
(69, 'visal.sork@student.passerellesnumeriques.org'),
(71, 'visal1234@gmail.com'),
(72, 'visal123@gmail.com'),
(70, 'visal2442@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `release_date` varchar(100) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `trailer` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `genre`, `subtitle`, `description`, `release_date`, `duration`, `image`, `trailer`) VALUES
(29, 'MEGAN', 'Horror\r\n', 'English', 'MEGAN', '10 Feb 2023', '1h40mn', 'IMG-63e766ce602c74.44437838.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BRb4U99OU80\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(31, 'Black Adam', 'Fantasy', 'English', 'Black Adam is the Rock.', '13 Feb 2023', '2h04mn', 'IMG-63e793bb85f1d6.45192867.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/X0tOpBuYasI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(39, 'John Wick: 3', 'Action', 'English', 'John Wick is the boogyman', '28 Feb 2023', '1h30mn', 'john-wick-chapter-3-parabellum-28606.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M7XM597XO94\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(40, 'Ms Marvel', 'Adventure', 'English', 'Ms Marvel', '8 Feb 2023', '1h30mn', 'ms-marvel-season-1-1630853522.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/m9EX0f6V11Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(41, 'Jigsaw', 'Horror', 'English', 'Jis Saw', '21 Feb 2023', '2h30mn', 'jigsaw-22505.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/j9_RPSo22A8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(42, 'Fantastic Beast', 'Fantasy', 'English', 'Fantastic Beast', '15 Feb 2023', '2h30mn', 'fantastic-beasts-the-secrets-of-dumbledore-1630853188.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Y9dr2zw-TXQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(43, 'Scrooge', 'Comedy', 'English', 'Scrooge', '8 Feb 2023', '1h40mn', 'scrooge-a-christmas-carol-1630854525.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tZylTiyaWV8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(45, 'Ant Man and The Wash', 'Adventure', 'English', 'Ant Man and The Wash', '20 Feb 2023', '2h40mn', 'ant-man-and-the-wasp-quantumania-1630854867.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZlNFpri-Y40\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(46, 'Knock At The Cabin', 'Mystery', 'English', 'Knock at the cabin', '25 Feb 2023', '1h40mn', 'knock-at-the-cabin-1630854824.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gv_QhoUy-xc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(47, 'Wakada - Forever', 'Action', 'English', 'Wakanda - Forever', '16 Feb 2023', '2h30mn', 'black-panther-wakanda-forever-1630854429.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_Z3QKkl1WyM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(48, 'Black Widow', 'Action', 'English', 'Black Widow', '11 Feb 2023', '1h40mn', 'black-widow-1622988647.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ybji16u608U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(49, 'Puss in Boots', 'Comedy', 'English', 'Puss in boots', '16 Feb 2023', '1h40mn', 'puss-in-boots-the-last-wish-1630854551.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RqrXhwS33yc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(50, 'Avenger End Game', 'Action', 'English', 'Avenger', '22 Feb 2023', '3h10mn', 'avengers-endgame-28501.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TcMBFSGVi1c\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(52, 'Scream VI', 'Horror', 'English', 'Scream VI', '16 Mar 2023', '1h40mn', 'IMG-64100a513cdbe8.03223167.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GxldQ9eX2wo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`seller_id`, `email_address`) VALUES
(1, 'dembo4451@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL,
  `amount_ticket` int(11) NOT NULL,
  `price_per_ticket` int(11) NOT NULL,
  `hall` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `movie_id`, `venue_id`, `date`, `time`, `amount_ticket`, `price_per_ticket`, `hall`) VALUES
(49, 50, 81, '1 Mar 2023', '09:10', 120, 100, 'Hall 4'),
(53, 50, 79, '8 Apr 2023', '20:00', 120, 150, 'Hall 2'),
(54, 52, 80, '7 Apr 2023', '19:00', 120, 100, 'Hall 3'),
(55, 49, 79, '7 Apr 2023', '08:10', 120, 100, 'Hall 3'),
(56, 48, 83, '7 Apr 2023', '09:10', 120, 100, 'Hall 3'),
(57, 47, 80, '7 Apr 2023', '21:00', 120, 100, 'Hall 4'),
(58, 46, 79, '7 Apr 2023', '22:13', 120, 100, 'Hall 5'),
(59, 45, 81, '7 Apr 2023', '20:12', 120, 200, 'Hall 4'),
(60, 45, 82, '7 Apr 2023', '19:11', 120, 200, 'Hall 4'),
(61, 43, 81, '7 Apr 2023', '08:15', 120, 120, 'Hall 3'),
(62, 42, 82, '7 Apr 2023', '19:12', 120, 200, 'Hall 5'),
(63, 41, 81, '7 Apr 2023', '09:15', 100, 100, 'Hall 3'),
(64, 40, 83, '7 Apr 2023', '10:16', 120, 300, 'Hall 3'),
(65, 39, 81, '7 Apr 2023', '19:13', 120, 100, 'Hall 4'),
(66, 29, 80, '7 Apr 2023', '08:15', 120, 100, 'Hall 2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email_address` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(600) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile` varchar(500) NOT NULL DEFAULT 'default.png',
  `role` varchar(10) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email_address`, `username`, `password`, `date_of_birth`, `address`, `profile`, `role`) VALUES
('dembo1234@gmail.com', 'visal2442', '$2y$10$yiuBPs7Uod81XoPNdtEbMuk2FCfSINYMIbtG7hAO6DNOAQB/P55ea', '2023-02-10', 'Phnom Penh', 'default.png', 'customer'),
('dembo445121121@gmail.com', 'visal2442', '$2y$10$WARhwUCSJeWG78ne.eZHD.RFbLGlvpSt8ThQOAkIKTxeBDG46nfgu', '2023-02-24', 'Phnom Penhdd', 'default.png', 'seller'),
('dembo4451222@gmail.com', 'visal2442', '$2y$10$zq4mHeJ1oylE9F.cI/rlBu2IgBeK4MznhJk/GvGK.cfrCkKF87q.S', '2023-03-15', 'Phnom Penh', 'default.png', 'customer'),
('dembo4451@gmail.com', 'visal2442', '$2y$10$mo53ghnb9x5altptVQgkoOgVIzy1uMztlhbEzS4gLR37uLKYfMiAa', '2005-02-09', 'Phnom Penh', 'default.png', 'seller'),
('dembo44522222@gmail.com', 'visal2442', '$2y$10$Kgo1UKm2MsPJveQsLSQZJutMC9GPBZW8VIJzF14LK6mh/d/hyLtEy', '2023-02-15', 'Phnom Penhw', 'default.png', 'customer'),
('dembo44dddsdsd5@gmail.com', 'visal2442', '$2y$10$Z.bCuEi82lViE63YA.ICX.sugHqBPsp8zXvbX1utiMvE/frnQ5.r.', '2023-02-17', 'Phnom Penhdd', 'default.png', 'customer'),
('dembo4ddd45@gmail.com', 'visal2442', '$2y$10$A9pWlPuFH8QUcGiPNyW44Ogl15szfE/OZgbU9XuPmxxe5.QuKqnde', '2023-02-10', 'Phnom Penh', 'default.png', 'customer'),
('dembo55555@gmail.com', 'visal2442', '$2y$10$WLWT5Qxn44hXVhBTafWCZuCCFQnfRPU0.uKw8D52wX6EjTv6CqTMS', '2023-02-16', 'Phnom Penh', 'default.png', 'customer'),
('phinlek23@gmail.com', 'phinlek', '$2y$10$G9/9BFc5kOw.jz0DlRnc1ecdKx1pFntfbjhOXOGYdZ/BSjEIEtvD6', '2023-02-21', 'Kamphong Thom', 'default.png', 'customer'),
('visal.sork@student.passerellesnumeriques.org', 'visal2442', '$2y$10$QElG.ln4JJhTw.Vk/ksLVulwWJtquvRo00hADIoUXDebXoFEs4tuC', '2023-02-16', 'PPPPP', 'default.png', 'customer'),
('visal1234@gmail.com', 'visal1234', '$2y$10$OWyKFWPoPTXDDUmSjeaNKe.i999z.BEIOv315p.fCLfr8GcvcA6UO', '2023-02-14', 'Phnom Penh', 'default.png', 'customer'),
('visal123@gmail.com', 'visal123', '$2y$10$E9YGOrLCrq4H84ZdAfk9Q.zxOHgvyMtkI1nHQK.UtaEwld6R2Iy0a', '2023-02-15', 'Phnom Penh', 'default.png', 'customer'),
('visal2442@gmail.com', 'visal2442', '$2y$10$1Z2xf7ALbNpifhVJkrPINOpcXFIw89XlXgjkQWuvenHY8kUGkssyS', '2023-02-22', 'Phnom Penh', 'default.png', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `venue_id` int(11) NOT NULL,
  `venue_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venue_id`, `venue_name`, `location`) VALUES
(79, 'Zodiac', 'Battambang'),
(80, 'PNC', 'Phnom Penh'),
(81, 'PNC 2023', 'Phnom Penh'),
(82, 'PNC 12', 'Phnom Penh'),
(83, 'PNC 1', 'Phnom Penh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `show_fk` (`show_id`),
  ADD KEY `email_fk` (`email_address`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `email_address` (`email_address`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`),
  ADD KEY `seller_fk` (`email_address`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `movie_fk` (`movie_id`),
  ADD KEY `venue_fk` (`venue_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email_address`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `email_fk` FOREIGN KEY (`email_address`) REFERENCES `users` (`email_address`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `show_fk` FOREIGN KEY (`show_id`) REFERENCES `shows` (`show_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `email_address` FOREIGN KEY (`email_address`) REFERENCES `users` (`email_address`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `seller_fk` FOREIGN KEY (`email_address`) REFERENCES `users` (`email_address`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `movie_fk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venue_fk` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`venue_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
