-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 05:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `nid` text NOT NULL,
  `gender` text NOT NULL,
  `place` text NOT NULL,
  `shift` text NOT NULL,
  `file` text NOT NULL,
  `image` text NOT NULL,
  `address` text NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `phone`, `nid`, `gender`, `place`, `shift`, `file`, `image`, `address`, `id`) VALUES
('Anik', 'anik@gmail.com', '123456', '018333424545', '434554555', 'female', 'Array', 'Day', 'application/pdf', 'image/jpeg', 'Nikunja-2,road-1/b,house-4,dhaka\r\n', 2),
('Nazmun Nahar', 'anika.viki987@gmail.com', '12345678', '01833342067', '9582', 'male', 'Array', 'Day', 'application/pdf', 'image/jpeg', 'Nikunja-2,road-1/b,house-4,dhaka\r\n', 3),
('Nazmun ', 'viki987@gmail.com', '11111', '01833342067', '45435435', 'male', 'Array', 'Day', 'application/pdf', 'image/jpeg', 'Nikunja-2,road-1/b,house-4,dhaka\r\n', 4),
('siam', 'siam@gmail.com', '22222', '45435435', '543543543', 'male', 'Array', 'Night', 'application/pdf', 'image/jpeg', 'rjfbewiUHUWEGFAEGFYEGFOEYGFEO', 5),
('anik kumar', 'ak@gmail.com', '66666', '34335', '45435435', 'male', 'Array', 'Day', 'application/pdf', 'image/jpeg', 'njdfdijsfhfiofughufghfhgiufhgufh', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
