-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 02:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lazy_chef`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL,
  `reply` varchar(255) NOT NULL,
  `Admin_reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `reply`, `Admin_reply`) VALUES
(16, 'rana2000', 'Thanks for your efforts on this site. I really benefited from the recipe posts and my kids loved them!', 'thanks for your comment. We wish you and your family a good day and healthy life.', 'roa10820'),
(17, 'rahafgha22', 'I really loved the sweet recipes section, would you please add more? and Thank u!', 'Your request will be taken into consideration. Thank you for your comment!', 'RaghadAlSufayan'),
(20, 'Ahmad1997\n', 'I appreciate this effort. I liked some of the recipes, and I tried them, and they were easy and did not need more time!! Will there be more recipes?  Can I participate in it?', 'Thanks for your compliment. Of course, we welcome new ideas from our distinguished members', 'Khairiah219'),
(22, 'nass123', 'From my point of perspective, i see that recipes on the site not for a lazy chef at all! it consumes time and prepare the ingredients not easy too', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `user_type`) VALUES
(24, 'Raghad', 'RaghadAlSufayan', '2190004263@iau.edu.sa', '60e79f69894f8844df3372268692ab40', 'admin'),
(25, 'Roa', 'roa10820', '2190003001@iau.edu.sa', 'b264cffcf55ad554e9464fc5b55a9556', 'admin'),
(26, 'Khaireya', 'Khairiah219', '2190001593@iau.edu.sa', '74431b4c0d63cbf9e57d02e49cd5b5ea', 'admin'),
(27, 'Rahaf', 'rahafgha22', '2190001867@iau.edu.sa', '436ef6663e9ea631faeba4ec8c54372f', 'user'),
(28, 'Rana', 'rana2000', '2190001000@iau.edu.sa', '4394aef08adb9b1185159b83c33c6d67', 'user'),
(29, 'Ahmad', 'Ahmad1997', 'ahmadsu@gmail.com', 'f3dc82b032abc5a4760846ede6bb3114', 'user'),
(30, 'Nassir', 'nass123', 'nassir@hotmail.com', '23af02a714e3e6e8a43442e8f7a5fd9d', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
