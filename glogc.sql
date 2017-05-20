-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2017 at 10:21 AM
-- Server version: 5.5.54
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glogc`
--

-- --------------------------------------------------------

--
-- Table structure for table `glogc_driver`
--

CREATE TABLE `glogc_driver` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `phone` text,
  `address` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `transport` varchar(255) DEFAULT NULL,
  `license` varchar(255) DEFAULT NULL,
  `acceptterms` varchar(255) DEFAULT NULL,
  `add_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `glogc_driver`
--

INSERT INTO `glogc_driver` (`id`, `email`, `password`, `name`, `surname`, `phone`, `address`, `age`, `gender`, `transport`, `license`, `acceptterms`, `add_date`) VALUES
(1, 'zipking1988@gmail.com', '8e810f4f9c47dd0303866c29ab57bef2', 'zipking1988', 'zipking1988', 'hijijijijijji', 'zjiaopapjiwkokaaa', NULL, NULL, 'Car', NULL, '1', '2017-05-16 04:24:16'),
(2, 'dsadsadsad@gmail.com', '8e810f4f9c47dd0303866c29ab57bef2', 'sadsadasd', 'dsadsadsadsa', '324432432423', '432432423423', NULL, NULL, 'Car', NULL, '1', '2017-05-16 04:25:39'),
(3, 'dsaddsa@gmail.com', '0192023a7bbd73250516f069df18b500', 'dsadsadsa', 'dsadsa', 'dsadsadsa', 'dsadsdsadsa', NULL, NULL, 'Car', NULL, '1', '2017-05-16 04:26:56'),
(4, 'zi@gmail.com', '8e810f4f9c47dd0303866c29ab57bef2', 'asdsad', 'dsadsa', 'dsadsa', 'dsadsad', NULL, 'Male', 'Car', NULL, '1', '2017-05-16 04:33:08'),
(5, 'zipking1988@gmail.com', '8e810f4f9c47dd0303866c29ab57bef2', 'dsadsadsa', 'dasdsadsa', '322353255', '532523523523', NULL, 'Male', 'Car', NULL, '1', '2017-05-16 04:35:51'),
(6, 'sadsadasd@gmail.com', '8e810f4f9c47dd0303866c29ab57bef2', 'saddsadas', 'dsadasds', 'dasdsad', 'dsadsad', NULL, 'Male', 'Car', 'info.png', '1', '2017-05-16 04:37:27'),
(7, 'dasdasdas@gmail.com', '0ba64a0dea00947916dfb6a66866e1ca', 'saddsad', 'dsadsa', 'dsadsa', 'dsadsad', '19-30', 'Male', 'Car', 'pen.png', '1', '2017-05-16 04:38:32'),
(8, 'dsadsdsa@gm', 'f970e2767d0cfe75876ea857f92e319b', 'sadasdasd', 'dsadsad', 'dsadsa', 'dsadsad', '19-30', 'Male', 'Car', 'crown.png', '1', '2017-05-16 04:41:38'),
(9, 'test@test.com', '32d7508fe69220cb40af28441ef746d9', 'sdasad', 'dsdasad', 'dsadsa', 'dsadsad', '19-30', 'Male', 'Car', 'book.png', '1', '2017-05-16 20:02:57'),
(10, 'test@gm', '4871999bf4eb9a4cf251b430b1aeab3f', 'asddsa', 'dasdd', 'dsdsa', 'dsdsad', '19-30', 'Male', 'Car', 'form1494991708.jpg', '1', '2017-05-17 09:28:28'),
(11, 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', '19-30', 'Male', 'Car', 'driver1494991982.jpg', '1', '2017-05-17 09:33:02'),
(12, 'justin_tai@glogc.com', 'f8f7d4b8d580af437f55c3bd58394d33', 'Justin', 'Tai', '0163316270', '388, Jalan Layang-layang 11, TAMAN LAYANG-LAYANG', '19-30', 'Male', 'Car', 'driver1495068986.jpg', '1', '2017-05-18 04:56:26'),
(13, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2017-05-18 07:31:06'),
(14, 'sonyft54@gmail.com', '966b3636c3e2143d2191b628e26e5889', 'test', 'testr', '0162101101', 'ksdfnksdfdf', '19-30', 'Female', 'Car', 'driver1495078267.jpg', '1', '2017-05-18 07:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `glogc_user`
--

CREATE TABLE `glogc_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `nric` varchar(255) DEFAULT NULL,
  `transport` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `accepterms` int(255) DEFAULT NULL,
  `add_date` timestamp NULL DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `glogc_user`
--

INSERT INTO `glogc_user` (`id`, `email`, `password`, `name`, `surname`, `phone`, `nric`, `transport`, `category`, `accepterms`, `add_date`, `language`) VALUES
(3, 'dsadsadasd@gmail.com', '8e810f4f9c4', 'dsadasdasd', 'dsadasdsa', '880107050527', 'ewqewqewqeweq', 'English', 'ewewqeq', 1, '2017-05-16 04:12:26', NULL),
(4, 'zipking1988@gmail.com', '8e810f4f9c4', 'ziping1', 'hiking', '09017643689', 'sadsadsawqddsadsa', 'English', 'dasdsdsdsdsa', 1, '2017-05-16 04:25:06', NULL),
(5, 'zip@gmail.cm', '8e810f4f9c4', 'dassadas', 'dsadsa', 'dsadsad', 'dsadasd', NULL, 'dsadsadsa', 1, '2017-05-16 04:34:37', 'English'),
(6, 'ivanchin713@gmail.com', '638bfc28670', 'Ivan', 'Chin ', '0149307798', '880713055553', NULL, 'cosmetic ', 1, '2017-05-18 05:58:55', 'English'),
(7, 'liqyin0505@hotmail.com', '3ccfb93a3ce', 'Chong', 'Katrina', '016-8884387', '870227055540', NULL, '', 1, '2017-05-18 06:32:28', 'English'),
(8, 'sonyft54@gmail.com', '966b3636c3e', 'Test', 'Test', '00292029', '92392340398403', NULL, '', 1, '2017-05-18 07:14:57', 'English'),
(9, NULL, 'd41d8cd98f0', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2017-05-18 07:14:57', NULL),
(10, 'seitzjoshua7@gmail.com', 'ae2b1fca515', 'sdfsf', 'sdfsdfsdf', '57657567', '65756765757', NULL, '', 1, '2017-05-18 16:54:37', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `subsription`
--

CREATE TABLE `subsription` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `add_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `glogc_driver`
--
ALTER TABLE `glogc_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glogc_user`
--
ALTER TABLE `glogc_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsription`
--
ALTER TABLE `subsription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `glogc_driver`
--
ALTER TABLE `glogc_driver`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `glogc_user`
--
ALTER TABLE `glogc_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subsription`
--
ALTER TABLE `subsription`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
