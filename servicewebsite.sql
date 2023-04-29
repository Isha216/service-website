-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 07:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servicewebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'serviceprovider001.gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_icon_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_icon_url`) VALUES
(1, 'Photography', '<i class=\"fas fa-camera fa-3x mb-3\"></i>'),
(2, 'Web Development', '<i class=\"fas fa-laptop-code fa-3x mb-3\"></i>'),
(3, 'Writing', '<i class=\"fas fa-pencil-alt fa-3x mb-3\"></i>'),
(4, 'Graphic Design', '<i class=\"fas fa-palette fa-3x mb-3\"></i>'),
(5, 'Music', '<i class=\"fas fa-music fa-3x mb-3\"></i>'),
(6, 'Food', '<i class=\"fas fa-utensils fa-3x mb-3\"></i>'),
(7, 'Travel', '<i class=\"fas fa-plane fa-3x mb-3\"></i>'),
(8, 'Fashion', '<i class=\"fas fa-tshirt fa-3x mb-3\"></i>'),
(9, 'Fitness', '<i class=\"fas fa-dumbbell fa-3x mb-3\"></i>'),
(10, 'Art', '<i class=\"fas fa-paint-brush fa-3x mb-3\"></i>'),
(11, 'Books', '<i class=\"fas fa-book fa-3x mb-3\"></i>'),
(12, 'Beauty', '<i class=\"fas fa-spa fa-3x mb-3\"></i>'),
(13, 'Technology', '<i class=\"fas fa-laptop fa-3x mb-3\"></i>'),
(14, 'Education', '<i class=\"fas fa-graduation-cap fa-3x mb-3\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `fav_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `profile_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`fav_id`, `user_id`, `profile_id`) VALUES
(1, 1, 2),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `per_profiledata`
--

CREATE TABLE `per_profiledata` (
  `profile_id` int(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `img_address` varchar(255) NOT NULL,
  `call_number` int(255) NOT NULL,
  `whatsapp_number` int(255) NOT NULL,
  `google_address` varchar(255) NOT NULL,
  `years_in_business` int(255) NOT NULL,
  `gst_number` int(255) NOT NULL,
  `description` text NOT NULL,
  `social_media_link1` varchar(255) NOT NULL,
  `social_media_link2` varchar(255) NOT NULL,
  `social_media_link3` varchar(255) NOT NULL,
  `social_media_link4` varchar(255) NOT NULL,
  `cat_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `per_profiledata`
--

INSERT INTO `per_profiledata` (`profile_id`, `business_name`, `img_address`, `call_number`, `whatsapp_number`, `google_address`, `years_in_business`, `gst_number`, `description`, `social_media_link1`, `social_media_link2`, `social_media_link3`, `social_media_link4`, `cat_id`) VALUES
(1, 'ABC Corporation', 'https://picsum.photos/800/400?random=1', 555, 555, '123 Main St, Anytown, USA', 5, 1234567890, 'We specialize in providing quality products and services to our customers', 'https://facebook.com/abc', 'https://twitter.com/abc', 'https://instagram.com/abc', 'https://linkedin.com/abc', 1),
(2, 'ABC Company', 'https://picsum.photos/800/400?random=2', 1, 1, '123 Main St, Anytown, USA', 5, 12345, 'This is a description', 'http://twitter.com/ABC', 'http://facebook.com/ABC', 'http://instagram.com/ABC', 'http://linkedin.com/ABC', 2),
(3, 'XYZ Business', 'https://picsum.photos/800/400?random=3', 1, 1, '456 Main St, Anytown, USA', 2, 67890, 'This is another description', 'http://twitter.com/XYZ', 'http://facebook.com/XYZ', 'http://instagram.com/XYZ', 'http://linkedin.com/XYZ', 4),
(4, '123 Industries', 'https://picsum.photos/800/400?random=4', 1, 1, '789 Main St, Anytown, USA', 10, 54321, 'This is a third description', 'http://twitter.com/123', 'http://facebook.com/123', 'http://instagram.com/123', 'http://linkedin.com/123', 4);

-- --------------------------------------------------------

--
-- Table structure for table `recently_viewed`
--

CREATE TABLE `recently_viewed` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `view_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recently_viewed`
--

INSERT INTO `recently_viewed` (`id`, `profile_id`, `view_date`, `user_id`) VALUES
(1, 1, '2023-04-28 12:06:35', 1),
(2, 3, '2023-04-29 04:52:45', 1),
(3, 2, '2023-04-29 06:46:20', 1),
(4, 1, '2023-04-29 08:31:55', 1),
(5, 4, '2023-04-29 11:15:10', 1),
(6, 3, '2023-04-29 13:02:30', 1),
(7, 1, '2023-04-29 14:45:40', 1),
(8, 2, '2023-04-29 16:33:15', 1),
(9, 4, '2023-04-29 18:15:20', 1),
(10, 4, '2023-04-29 20:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `username`, `name`, `user_email`, `password`) VALUES
(1, 'admin', '', 'ishanaik216@gmail.com', '$2y$10$PcuOPDpuhaq/lz7V/OXdB.rel02o2v0a4pGxrfAhe5ZSfK4zXFYsO'),
(6, '', '', '', '$2y$10$j9tZPVT3iD0xh3HvkOHwNe/9MjVsXDohLaZHf369hmDLS8hsQk5tW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `per_profiledata`
--
ALTER TABLE `per_profiledata`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `FK_per_profiledata_category` (`cat_id`);

--
-- Indexes for table `recently_viewed`
--
ALTER TABLE `recently_viewed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `fav_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `per_profiledata`
--
ALTER TABLE `per_profiledata`
  MODIFY `profile_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recently_viewed`
--
ALTER TABLE `recently_viewed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `per_profiledata` (`profile_id`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `per_profiledata`
--
ALTER TABLE `per_profiledata`
  ADD CONSTRAINT `FK_per_profiledata_category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `recently_viewed`
--
ALTER TABLE `recently_viewed`
  ADD CONSTRAINT `recently_viewed_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `per_profiledata` (`profile_id`),
  ADD CONSTRAINT `recently_viewed_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
