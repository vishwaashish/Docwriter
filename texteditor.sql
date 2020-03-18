-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 01:45 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `texteditor`
--

-- --------------------------------------------------------

--
-- Table structure for table `ashish`
--

CREATE TABLE `ashish` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ashish`
--

INSERT INTO `ashish` (`id`, `title`, `description`) VALUES
(23, 'assdaksdknskd', 'asddsds'),
(24, 'umair ', 'asdsa'),
(25, 'asdasasa', 'asfsa');

-- --------------------------------------------------------

--
-- Table structure for table `ashish1`
--

CREATE TABLE `ashish1` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ashish1`
--

INSERT INTO `ashish1` (`id`, `title`, `description`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'Ager declaration', 'age', 'age declaration.docx', '2020-02-27 22:20:56', '1'),
(3, 'final bce', 'bce', 'final bce.pdf', '2020-02-27 22:21:47', '1'),
(5, 'beauty', 'beauty', 'Contact1.jpg', '2020-03-12 08:26:36', '1'),
(6, 'logo', 'logo', 'logo.jpg', '2020-03-12 08:27:03', '1'),
(7, 'background', 'background', 'Contact.jpg', '2020-03-12 08:27:58', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `message`, `trn_date`) VALUES
(1, 'ashish', 'ashish@gmail.com', 'hii ashish my name is ashish', '2020-02-24 16:48:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `gender`, `email`, `username`, `password`, `phoneno`) VALUES
(12, 'Ashishkumar Vishwakarma', 'male', 'vishwakarmaashish165@gmail.com', 'ashish', 'e10adc3949ba59abbe56e057f20f883e', 8424847449);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ashish`
--
ALTER TABLE `ashish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ashish1`
--
ALTER TABLE `ashish1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ashish`
--
ALTER TABLE `ashish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ashish1`
--
ALTER TABLE `ashish1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
