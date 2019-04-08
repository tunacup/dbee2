-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 05:57 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name_ad` varchar(30) NOT NULL,
  `pass_ad` varchar(30) NOT NULL,
  `email_ad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name_ad`, `pass_ad`, `email_ad`) VALUES
(1, 'ad_Luna', '1111', 'mim@mim.com'),
(2, 'ad_zack', 'fuckingpassword', 'Dbee_zack@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `ticket_status` varchar(30) NOT NULL,
  `total_price` int(11) NOT NULL,
  `card_number` int(11) NOT NULL,
  `card_expdate` date NOT NULL,
  `card_cvv` varchar(50) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `nameoncard` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_id`, `ticket_id`, `ticket_status`, `total_price`, `card_number`, `card_expdate`, `card_cvv`, `bank_name`, `nameoncard`) VALUES
(2, 1, 1, 'Available', 3500, 1518131421, '2020-06-05', '2255', 'KrungThai', 'Sasiwimon'),
(4, 2, 4, 'Available', 8000, 593118752, '2020-11-23', '6842', 'Kasikorn', 'Kittipob'),
(5, 4, 1, 'Available', 40500, 0, '2018-11-22', 'ss', 'KTB', 'eiei'),
(6, 4, 1, 'Available', 45000, 5555555, '2018-11-21', '8888', 'book', 'book'),
(7, 4, 1, 'Available', 10500, 0, '2018-11-23', '3333333333333333', 'book', 'dd'),
(8, 4, 3, 'Available', 0, 0, '0000-00-00', '', '', ''),
(9, 4, 3, 'Available', 0, 0, '0000-00-00', '', '', ''),
(10, 0, 3, 'Available', 22500, 55555, '2018-11-24', '4444', 'rrr', 'rrr'),
(11, 0, 3, 'Available', 22500, 333, '2018-11-24', '333', 'rrr', 'rrr');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ques_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques_no`, `user_id`, `email`, `name`, `question`, `answer`) VALUES
(1, 5, 'lily_uwu@hotmail.com', 'Lily Ghibi', 'Can I edit my profile photo?', 'zz'),
(7, 3, 'help-me-plz@gmail.com', 'Hola Hoop', 'Where can I get the physical ticket?', 'zzzzzzzzz'),
(10, 1, 'lolttcp@gmail.com', 'Thinapat', 'Do you know which flight will Arashi come?', 'zzzzz'),
(12, 4, 'mim@mim.com', 'bbÂ bbb', 'eeeeeeeeeeeeee', 'hahahaha'),
(13, 4, 'mim@mim.com', 'bbÂ bbb', 'Hi!!!!', ''),
(14, 4, 'mim@mim.com', 'bbÂ bbb', 'hello', ''),
(15, 4, 'mim@mim.com', 'bbÂ bbb', 'from the other side', ''),
(16, 5, 'lavizy@gmail.com', 'LaviiÂ Wee', 'jhjhjh', 'huhuhuhu'),
(17, 5, 'lavizy@gmail.com', 'LaviiÂ Wee', 'tyty', ''),
(18, 5, 'lavizy@gmail.com', 'LaviiÂ Wee', 'Noi yu', ''),
(19, 5, 'lavizy@gmail.com', 'LaviiÂ Wee', 'weweii', ''),
(20, 3, 'holahalo@gmail.com', 'HalohaÂ Aho', 'uu', ''),
(21, 0, 'aaa@gmail.com', 'weÂ yui', 'can i see', ''),
(22, 0, 'mm@mm.com', 'mmÂ mm', 'bbb', 'wt'),
(23, 0, 'nn@nn.com', 'nnÂ nn', 'whyyyyyyyyyyyyy', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_book` date NOT NULL,
  `time_book` time NOT NULL,
  `zone` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `user_id`, `date_book`, `time_book`, `zone`, `price`, `quantity`, `total_price`) VALUES
(3, 5, '2018-10-12', '19:33:17', '', 0, 0, 0),
(5, 14, '2018-10-26', '36:06:17', '', 0, 0, 0),
(7, 4, '2018-11-24', '13:39:26', 'A1', 4500, 2, 9000),
(8, 4, '2018-11-24', '13:40:07', 'A1', 4500, 5, 22500),
(9, 4, '2018-11-24', '13:41:04', 'A1', 4500, 3, 13500),
(10, 4, '2018-11-24', '13:42:24', 'A1', 4500, 48, 216000),
(11, 4, '2018-11-24', '13:46:03', 'A1', 4500, 48, 216000),
(12, 4, '2018-11-24', '13:47:22', 'A2', 4500, 4, 18000),
(13, 5, '2018-11-24', '13:48:54', 'B', 3500, 7, 24500),
(14, 5, '2018-11-24', '13:49:50', 'C', 2500, 5, 12500),
(15, 5, '2018-11-24', '13:51:39', 'A2', 4500, 1, 4500),
(20, 5, '2018-11-24', '14:13:05', 'A1', 4500, 2, 9000),
(21, 5, '2018-11-24', '14:13:15', 'A1', 4500, 2, 9000),
(22, 5, '2018-11-24', '14:13:29', 'A1', 4500, 2, 9000),
(23, 5, '2018-11-24', '14:14:42', 'A1', 4500, 2, 9000),
(24, 0, '2018-11-24', '14:29:41', 'A1', 4500, 3, 13500),
(26, 4, '2018-11-24', '14:50:11', 'A1', 4500, 8, 36000),
(27, 4, '2018-11-24', '14:51:17', 'A1', 4500, 9, 40500),
(28, 4, '2018-11-24', '14:54:25', 'A1', 4500, 9, 40500),
(29, 4, '2018-11-24', '14:55:24', 'A1', 4500, 9, 40500),
(30, 4, '2018-11-24', '14:57:37', 'A1', 4500, 10, 45000),
(31, 4, '2018-11-24', '16:04:46', 'B', 3500, 3, 10500),
(32, 4, '2018-11-24', '19:32:39', 'A1', 4500, 0, 0),
(33, 4, '2018-11-24', '19:33:21', 'A1', 4500, 0, 0),
(34, 4, '2018-11-24', '19:33:59', 'A2', 4500, 0, 0),
(35, 4, '2018-11-24', '19:34:28', 'B', 3500, 0, 0),
(36, 4, '2018-11-24', '19:34:49', 'C', 2500, 0, 0),
(37, 0, '2018-11-24', '21:03:38', 'A1', 4500, 5, 22500),
(38, 0, '2018-11-24', '21:09:25', 'A1', 4500, 5, 22500),
(39, 0, '2018-11-24', '21:10:31', 'A1', 4500, 5, 22500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `pass`, `email`, `f_name`, `l_name`, `dateofbirth`, `tel`) VALUES
(1, 'sajin1412', 'lazymesajin@gmail.com', 'Sajin', 'Pornnasri', '1997-07-20', 815879326),
(3, 'donttellanyone', 'holahalo@gmail.com', 'Haloha', 'Aho', '1999-10-10', 569823654),
(4, '1111', 'mim@mim.com', 'bb', 'bbb', '2018-11-05', 815879326),
(5, '1112', 'lavizy@gmail.com', 'Lavii', 'Wee', '2009-06-01', 2555874),
(6, '', '', '', '', '0000-00-00', 0),
(7, '', '', '', '', '0000-00-00', 0),
(8, '1114', 'aaa@gmail.com', 'we', 'yui', '2024-02-01', 214577896),
(9, '1111', 'mm@mm.com', 'mm', 'mm', '2018-11-24', 55555),
(10, '1111', 'nn@nn.com', 'nn', 'nn', '2018-11-24', 666666);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ques_no`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ques_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
