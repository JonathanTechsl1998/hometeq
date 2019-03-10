-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2019 at 03:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w1673675_serverside`
--

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `prodid` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`prodid`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Apple iPad', '237841977.jpeg', '237841977.jpeg', '2018 Apple iPad Pro 11\", A12X Bionic, iOS, Wi-Fi, 64GB, Silver', 'All screen and all-powerful, the iPad Pro 11\" has been completely redesigned and is packed with advanced Apple technology. Featuring Face ID log-in, its edge-to-edge Liquid Retina display offers a stunning visual and touch-response experience, whichever way you hold it. Powered by the A12X Bionic chip, its faster than many PC laptops, so multitasking, playing games or watching Ultra HD videos handle like a dream.', '745.00', 5),
(2, 'Apple Macbook Pro', '237624803.jpeg', '237624803.jpeg', '2018 Apple MacBook Pro 15\" Touch Bar, Intel Core i7, 16GB RAM, 512GB SSD, Radeon Pro 560X, Silver', 'The (2018) MacBook Pro 15” with Apple’s cutting edge Touch Bar technology and Retina display has been created with an Intel Core i7 processor and 16GB RAM. It’s been designed and built to aid the ideas you have and for the work you do every day.', '2350.00', 10),
(3, 'Apple iMac', '236522212.jpeg', '236522212.jpeg', 'Apple iMac Pro MQ2Y2B/A, All-in-One Desktop, Intel Xeon W, 32GB RAM, 1TB, Radeon Pro Vega 56, 27” 5K Display, Space Grey', 'For those who need some serious muscle to complete their innovative visions and assignments, Apple has created the iMac Pro. With a beautiful 5K, 500 nits display, Intel Xeon W processor, 32GB RAM and a Radeon Pro Vega 56 GPU, this stylish beast of a machine will easily power through the most demanding of tasks, such as creating incredible VR environments. Your Apple iMac Pro will positively breeze through Adobe Creative Cloud demands, as well as your music recording and producing projects.', '4899.00', 15),
(4, 'Apple Homepod', '237347082.jpeg', '237347082.jpeg', 'Apple HomePod, White', 'HomePod is a breakthrough speaker that senses its location and tunes the music to sound amazing wherever you are in the room. Together with Apple Music, it gives you access to over 45 million songs. And with the intelligence of Siri, its a helpful home assistant for everyday tasks, and for controlling your smart home accessories; all with just your voice. Welcome HomePod.', '319.00', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`prodid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `prodid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
