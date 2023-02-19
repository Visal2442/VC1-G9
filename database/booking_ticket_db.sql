-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2023 at 04:06 AM
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

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `email_address`, `show_id`, `booking_date`, `seat_number`) VALUES
(63, 'dembo4ddd45@gmail.com', 19, '20 Feb 2023', 'G11'),
(64, 'dembo4ddd45@gmail.com', 19, '20 Feb 2023', 'H12'),
(65, 'dembo4ddd45@gmail.com', 19, '24 Feb 2023', 'J12'),
(66, 'dembo4ddd45@gmail.com', 19, '25 Feb 2023', 'E12'),
(67, 'dembo4ddd45@gmail.com', 19, '20 Feb 2023', 'H11'),
(75, 'dembo44dddsdsd5@gmail.com', 32, '20 Feb 2023', 'J4'),
(76, 'dembo4ddd45@gmail.com', 19, '20 Feb 2023', 'J11'),
(77, 'dembo4ddd45@gmail.com', 19, '27 Feb 2023', 'I12'),
(78, 'dembo4ddd45@gmail.com', 19, '20 Feb 2023', 'G12'),
(79, 'dembo4ddd45@gmail.com', 19, '27 Feb 2023', 'I10'),
(80, 'dembo4ddd45@gmail.com', 19, '20 Feb 2023', 'E11'),
(81, 'dembo4ddd45@gmail.com', 32, '22 Feb 2023', 'F12'),
(82, 'dembo4ddd45@gmail.com', 32, '22 Feb 2023', 'F11'),
(83, 'dembo4ddd45@gmail.com', 32, '22 Feb 2023', 'E11');

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
(64, 'dembo445121121@gmail.com'),
(59, 'dembo4451@gmail.com'),
(66, 'dembo44522222@gmail.com'),
(65, 'dembo44dddsdsd5@gmail.com'),
(62, 'dembo4ddd45@gmail.com'),
(63, 'dembo55555@gmail.com');

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
(29, 'MEGAN', 'Action', 'English', 'MEGAN', '10 Feb 2023', '1h40mn', 'IMG-63e766ce602c74.44437838.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BRb4U99OU80\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(30, 'Smile', 'Horror', 'English', 'Smile forever', '20 Feb 2023', '1h20mn', 'IMG-63ebc1ab34c827.59693393.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BcDK7lkzzsU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(31, 'Black Adam', 'Fantasy', 'English', 'Black Adam is the Rock.', '13 Feb 2023', '2h04mn', 'IMG-63e793bb85f1d6.45192867.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/X0tOpBuYasI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(39, 'John Wick: 3', 'Action', 'English', 'John Wick is the boogyman', '28 Feb 2023', '1h30mn', 'john-wick-chapter-3-parabellum-28606.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M7XM597XO94\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(40, 'Ms Marvel', 'Adventure', 'English', 'Ms Marvel', '8 Feb 2023', '1h30mn', 'ms-marvel-season-1-1630853522.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/m9EX0f6V11Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(41, 'Jigsaw', 'Horror', 'English', 'Jis Saw', '21 Feb 2023', '2h30mn', 'jigsaw-22505.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/j9_RPSo22A8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(42, 'Fantastic Beast', 'Fantasy', 'English', 'Fantastic Beast', '15 Feb 2023', '2h30mn', 'fantastic-beasts-the-secrets-of-dumbledore-1630853188.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Y9dr2zw-TXQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(43, 'Scrooge', 'Comedy', 'English', 'Scrooge', '8 Feb 2023', '1h40mn', 'scrooge-a-christmas-carol-1630854525.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tZylTiyaWV8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(44, 'Night Owl', 'Fantasy', 'English', 'Night Owl', '11 Feb 2023', '2h00mn', 'the-night-owl-1630854749.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/m0UcNOeKzt0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(45, 'Ant Man and The Wash', 'Adventure', 'English', 'Ant Man and The Wash', '20 Feb 2023', '2h40mn', 'ant-man-and-the-wasp-quantumania-1630854867.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZlNFpri-Y40\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(46, 'Knock At The Cabin', 'Mystery', 'English', 'Knock at the cabin', '25 Feb 2023', '1h40mn', 'knock-at-the-cabin-1630854824.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gv_QhoUy-xc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');

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
(1, 'dembo4451@gmail.com'),
(2, 'lina123@gmail.com');

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
(19, 29, 55, '23 Feb 2023', '09:00', 120, 200, 'Hall 1'),
(32, 39, 55, '19 Feb 2023', '12:00', 120, 100, 'Hall 1'),
(34, 40, 63, '22 Feb 2023', '22:00', 120, 300, 'Hall 2'),
(35, 42, 78, '23 Feb 2023', '09:00', 120, 200, 'Hall 3'),
(36, 43, 63, '22 Feb 2023', '21:00', 100, 200, 'Hall 5'),
(37, 44, 55, '24 Feb 2023', '10:00', 120, 50, 'Hall 3'),
(38, 45, 63, '25 Feb 2023', '12:00', 120, 300, 'Hall 3'),
(39, 41, 63, '27 Feb 2023', '13:00', 120, 100, 'Hall 2'),
(40, 46, 63, '23 Feb 2023', '23:00', 120, 100, 'Hall 4');

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
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email_address`, `username`, `password`, `date_of_birth`, `address`, `role`) VALUES
('dembo445121121@gmail.com', 'visal2442', '$2y$10$WARhwUCSJeWG78ne.eZHD.RFbLGlvpSt8ThQOAkIKTxeBDG46nfgu', '2023-02-24', 'Phnom Penhdd', 0),
('dembo4451@gmail.com', 'visal2442', '$2y$10$mo53ghnb9x5altptVQgkoOgVIzy1uMztlhbEzS4gLR37uLKYfMiAa', '2005-02-09', 'Phnom Penh', 1),
('dembo44522222@gmail.com', 'visal2442', '$2y$10$Kgo1UKm2MsPJveQsLSQZJutMC9GPBZW8VIJzF14LK6mh/d/hyLtEy', '2023-02-15', 'Phnom Penhw', 0),
('dembo44dddsdsd5@gmail.com', 'visal2442', '$2y$10$Z.bCuEi82lViE63YA.ICX.sugHqBPsp8zXvbX1utiMvE/frnQ5.r.', '2023-02-17', 'Phnom Penhdd', 0),
('dembo4ddd45@gmail.com', 'visal2442', '$2y$10$A9pWlPuFH8QUcGiPNyW44Ogl15szfE/OZgbU9XuPmxxe5.QuKqnde', '2023-02-10', 'Phnom Penh', 0),
('dembo55555@gmail.com', 'visal2442', '$2y$10$WLWT5Qxn44hXVhBTafWCZuCCFQnfRPU0.uKw8D52wX6EjTv6CqTMS', '2023-02-16', 'Phnom Penh', 0),
('lina123@gmail.com', 'visal2442', '123456789', '2023-02-16', 'PP', 1);

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
(55, 'Cinema PP', 'Phnom Penh'),
(63, 'Cinema BTB', 'Battambang'),
(78, 'Cinema SR', 'Siem Reap');

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
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
