-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2023 at 03:54 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout_table`
--

DROP TABLE IF EXISTS `checkout_table`;
CREATE TABLE IF NOT EXISTS `checkout_table` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `payment` varchar(90) DEFAULT NULL,
  `cardnumber` varchar(50) DEFAULT NULL,
  `expiredate` varchar(50) DEFAULT NULL,
  `cvv` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `checkout_table`
--

INSERT INTO `checkout_table` (`id`, `name`, `email`, `city`, `payment`, `cardnumber`, `expiredate`, `cvv`) VALUES
(1, 'Chandima Priyadarshani', 'chalani@gmail.com', 'marawila', 'Rs:2800', '45626326', '01/25', '255'),
(2, 'Chalani', 'chalani@gmail.com', 'Nattandiya', 'Rs:3500', '852569366541522', '01/22', '855'),
(3, 'Chathumini', 'chathu@gmail.com', 'marawila', 'Rs:4800', '28452652305612652', '01/05', '655');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

DROP TABLE IF EXISTS `contactform`;
CREATE TABLE IF NOT EXISTS `contactform` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int NOT NULL,
  `message` varchar(450) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, '', '', 0, ''),
(2, 'Chandima', 'chandima@gmail.com', 763391734, 'Tastes great! Eating something delicious right now? ...'),
(3, 'Chathumini', 'chathu@gmail.com', 796516326, 'Really good Here is something else you could say instead of delicious');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(19, 'cpooh', '123', 'admin'),
(20, 'Dila', '1234', 'user'),
(21, 'Kawya', '12345', 'user'),
(22, 'Dulanja', '20010129', 'user'),
(23, 'Dinithi', '123456', 'user'),
(24, 'Dilani2001', '123', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
