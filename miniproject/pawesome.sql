-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 06:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawesome`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `userid` int(11) NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `expiry` date NOT NULL,
  `cardholderName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`userid`, `Amount`, `expiry`, `cardholderName`) VALUES
(104, '1234', '0000-00-00', 'sandra'),
(104, '145', '0000-00-00', 'sandra'),
(104, '1234', '2021-04-11', 'sandra'),
(104, '1234', '2021-04-11', 'sandra'),
(104, '1234', '2021-04-11', 'sandra'),
(104, '12345', '0000-00-00', 'bgj'),
(104, '34567', '0000-00-00', 'fghjk'),
(104, '34567', '0000-00-00', 'hj'),
(104, '34567', '0000-00-00', 'hj'),
(104, '34567', '0000-00-00', 'hj'),
(104, '34567', '0000-00-00', 'hj'),
(104, '678', '0000-00-00', 'ghf'),
(104, '6789', '0000-00-00', 'hgh'),
(104, '890', '0000-00-00', 'jh'),
(104, '8', '0000-00-00', 'ghjk');

-- --------------------------------------------------------

--
-- Table structure for table `pet_details`
--

CREATE TABLE `pet_details` (
  `petID` int(11) NOT NULL,
  `images` blob DEFAULT NULL,
  `type_of_pet` varchar(20) NOT NULL,
  `place_of_adoption` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `address2` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_details`
--

INSERT INTO `pet_details` (`petID`, `images`, `type_of_pet`, `place_of_adoption`, `status`, `userid`, `address`, `address2`, `state`, `district`, `pincode`) VALUES
(1, 0x312e6a7067, 'Jogo:Dog', 'Erumeli', 'adopted', 9, 'Puthuparambil', 'C/o Methranparambil', 'Kerala', 'idukki', 685531),
(2, 0x322e6a7067, 'Momo Dog', 'TVM', 'adopted', 0, '', '', '', '', 0),
(3, 0x332e6a7067, 'Cathy Dog', 'Mavelikkara', 'adopted', 10, 'Puthuparambil', 'C/o Methranparambil', 'Kerala', '', 685531),
(4, 0x342e6a7067, 'Titu:Dog', 'ktpna', 'adopted', 10, 'Puthuparambil', 'C/o Methranparambil', 'Kerala', '', 685531),
(5, 0x352e6a7067, 'Puppy:Dog', 'Kochi', 'adopted', 10, '', '', '', '', 0),
(6, 0x362e6a7067, 'soozie:cat', 'Elappara', 'adopted', 10, 'sssss', 'ssssssss', 'ssssssss', 'ssssss', 685531),
(30, 0x372e6a7067, 'Dude CAT', 'TVM', 'adopted', 10, 'Puthuparambil', 'C/o Methranparambil', 'Kerala', '', 685531),
(31, 0x342e6a7067, 'millyy:Dog', 'TVM', 'adopted', 104, 'Puthuparambil', 'C/o Methranparambil', 'Kerala', 'koyttaym', 685531),
(32, 0x362e6a7067, 'sisly cat', 'tvm', 'adopted', 104, 'Puthuparambil', 'C/o Methranparambil', 'Kerala', 'idukki', 685531);

-- --------------------------------------------------------

--
-- Table structure for table `pet_sitting`
--

CREATE TABLE `pet_sitting` (
  `sitting_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `pet_name` varchar(30) DEFAULT NULL,
  `pets` varchar(30) DEFAULT NULL,
  `breed` varchar(30) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `diet` varchar(50) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_sitting`
--

INSERT INTO `pet_sitting` (`sitting_id`, `name`, `number`, `address`, `pet_name`, `pets`, `breed`, `sex`, `diet`, `payment`, `total`, `status`, `email`, `userid`) VALUES
(49, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'Rosie', 'cat', 'naadan', 'female', 'nothing', '5-day', NULL, 'BOOKED', NULL, 104),
(50, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'pooppy', 'cat', 'naadan', 'female', 'nothing', '5-day', NULL, 'booked', NULL, 104),
(51, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'pup', 'cat', 'naadan', 'female', 'nothing', '5-day', NULL, 'BOOKED', NULL, 104),
(52, 'Sandra Lal', '', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'dog', 'naadan', 'female', 'yy', '3-day', NULL, 'booked', NULL, 104),
(53, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'dog', 'naadan', 'female', '', '4-day', NULL, 'booked', NULL, 104),
(54, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'millyy', 'dog', 'lab', 'female', 'sass', '4-day', NULL, 'booked', NULL, 104),
(55, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'cat', '', 'male', 'dfds', '3-day', NULL, 'booked', NULL, 104),
(56, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'cat', '', 'male', 'dfds', '3-day', NULL, 'BOOKED', NULL, 104),
(57, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'aaww', 'cat', 'lab', 'female', 'dgfhdshfd', '3-day', 18, 'booked', NULL, 104),
(58, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'aaww', 'cat', 'lab', 'female', 'dgfhdshfd', '3-day', 18, 'booked', NULL, 104),
(59, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'aaww', 'cat', 'lab', 'female', 'dgfhdshfd', '3-day', 18, 'booked', NULL, 104),
(60, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'aaww', 'rabbit', 'lab', 'male', 'dfhgdsvgfsd', '3-day', 18, 'BOOKED', NULL, 104),
(61, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'aaww', 'rabbit', 'lab', 'male', 'dfhgdsvgfsd', '3-day', 18, 'BOOKED', NULL, 104),
(62, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'aaww', 'rabbit', 'lab', 'male', 'gfhgsdfgd', '1-day', 6, 'BOOKED', NULL, 104),
(63, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'aaww', 'rabbit', 'lab', 'male', 'gfhgsdfgd', '1-day', 100, 'BOOKED', NULL, 104),
(64, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'cat', 'naadan', 'female', 'tfyggyftyf', '4-day', 400, 'BOOKED', NULL, 104),
(65, 'Sandra Lal', '', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'cat', '', 'female', '', '3-day', 300, 'BOOKED', NULL, 104),
(66, '', '', '', '', '', '', '', '', '', 0, 'BOOKED', NULL, 104),
(67, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'dog', 'aaaaaaaaaaa', 'male', '', '2-day', 200, 'BOOKED', NULL, 104),
(68, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'dog', 'aaaaaaaaaaa', 'female', 'nil', '2-day', 200, 'BOOKED', NULL, 104),
(69, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'dog', 'naadan', 'female', 'jhg', '1-day', 100, 'booked', NULL, 104),
(70, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'ricky', 'cat', 'naadan', 'female', 'nil', '4-day', 400, 'booked', NULL, 104),
(71, 'Sandra Lal', '9074432454', 'Puthuparambil\r\nC/o Methranparambil', 'kunjan', 'dog', 'aaaaaaaaaaa', 'male', 'qw', '2-day', 200, NULL, NULL, 104);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `userid` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `phn_number` varchar(12) NOT NULL,
  `category_user` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`userid`, `Name`, `Email`, `Pass`, `phn_number`, `category_user`) VALUES
(103, 'admin', 'admin@gmail.com', 'YWRtaW5AMTIz', '9074432454', 2),
(104, 'sandra', 'sandralalichan.sandra@gmail.com', 'c2FuZHJhQDEyMw==', '9074432454', 1),
(105, 'sandra', 'sandra@gmail.com', 'c2FuZHJhQDI0', '9074432454', 1),
(106, 'sandra', 'sandra@gmail.com', 'c2FuZHJhQDI0', '9074432454', 1),
(107, 'sandra', 'sandra@gmail.com', 'c2FuZHJhQDI0', '9074432454', 1),
(108, 'sandra', 'sandra@gmail.com', 'c2FuZHJhQDI0', '9074432454', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sitting_bills`
--

CREATE TABLE `sitting_bills` (
  `sitid` int(11) DEFAULT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitting_bills`
--

INSERT INTO `sitting_bills` (`sitid`, `full_name`, `email`, `address`, `city`, `state`, `zip`, `total`, `userid`) VALUES
(49, 'Sandra Lal', 'sandralalichan.sandra@gmail.co', 'Puthuparambil', 'Kallarkavala', 'Kerala', 685531, '30 $', 104),
(50, 'Sandra Lal', 'sandralalichan.sandra@gmail.co', 'Puthuparambil', 'Kallarkavala', 'Kerala', 685531, '30 $', 104),
(51, 'Sandra Lal', 'sandralalichan.sandra@gmail.co', 'Puthuparambil', 'Kallarkavala', 'Kerala', 685531, '30 $', 104),
(51, 'Sandra Lal', 'sandralalichan.sandra@gmail.co', 'Puthuparambil', 'Kallarkavala', 'Kerala', 685531, '30 $', 31),
(52, 'Sandra Lal', 'sandralalichan.sandra@gmail.co', 'Puthuparambil', 'Kallarkavala', 'Kerala', 685531, '18 $', 104),
(53, 'Sandra Lal', 'sandralalichan.sandra@gmail.co', 'Puthuparambil', 'Kallarkavala', 'Kerala', 685531, '24 $', 104),
(54, 'Sandra Lal', 'sandralalichan.sandra@gmail.co', 'Puthuparambil', 'Kallarkavala', 'Kerala', 685531, '24 $', 104),
(57, '', '', '', '', '', 0, '', 104);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_tbl`
--

CREATE TABLE `volunteer_tbl` (
  `voID` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `time_contact` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `district` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `experience` varchar(5) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer_tbl`
--

INSERT INTO `volunteer_tbl` (`voID`, `dob`, `time_contact`, `address`, `state`, `district`, `city`, `pincode`, `experience`, `gender`, `userid`) VALUES
(8, '2022-11-15', '7', 'Puthuparambil', 'Kerala', 'Idukki', 'Kallarkavala', 685531, 'on', 'on', 104),
(9, '2022-11-15', '7', 'Puthuparambil', 'Kerala', 'Idukki', 'Kallarkavala', 685531, 'on', 'on', 104),
(10, '2022-11-15', '7', 'Puthuparambil', 'Kerala', 'Idukki', 'Kallarkavala', 685531, 'on', 'on', 104),
(11, '2022-11-17', '7', 'Puthuparambil', 'Kerala', 'Pathanamth', 'Kallarkavala', 685531, 'on', 'on', 104),
(12, '2022-11-17', '7', 'Puthuparambil', 'Kerala', 'Pathanamth', 'Kallarkavala', 685531, 'on', 'on', 104),
(13, '2022-11-17', '7', 'Puthuparambil', 'Kerala', 'Pathanamth', 'Kallarkavala', 685531, 'on', 'on', 104),
(14, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Kasargode', 'Kallarkavala', 685531, 'on', 'on', 104),
(15, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Kasargode', 'Kallarkavala', 685531, 'on', 'on', 104),
(16, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Kasargode', 'Kallarkavala', 685531, 'on', 'on', 104),
(17, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Kasargode', 'Kallarkavala', 685531, 'on', 'on', 104),
(18, '2022-11-18', 'ss', 'Puthuparambil', 'Kerala', 'Kannur', 'Kallarkavala', 685531, 'on', 'on', 104),
(19, '2022-11-18', 'ss', 'Puthuparambil', 'Kerala', 'Kannur', 'Kallarkavala', 685531, 'on', 'on', 104),
(21, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Kozhikkodu', 'Kallarkavala', 685531, 'on', 'female', 104),
(22, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Malappuram', 'Kallarkavala', 685531, 'on', 'others', 104),
(23, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Malappuram', 'Kallarkavala', 685531, 'on', 'others', 104),
(24, '2022-11-15', '7', 'Puthuparambil', 'Kerala', 'Kasargode', 'Kallarkavala', 685531, 'yes', 'male', 104),
(25, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Kasargode', 'Kallarkavala', 685531, 'yes', 'female', 104),
(26, '2022-11-05', '7', 'Puthuparambil', 'Kerala', 'Palakkadu', 'Kallarkavala', 685531, 'yes', 'male', 104),
(27, '2022-11-05', '7', 'Puthuparambil', 'Kerala', 'Palakkadu', 'Kallarkavala', 685531, 'yes', 'male', 104),
(28, '2022-11-05', '7', 'Puthuparambil', 'Kerala', 'Palakkadu', 'Kallarkavala', 685531, 'yes', 'male', 104),
(29, '2022-11-05', '7', 'Puthuparambil', 'Kerala', 'Palakkadu', 'Kallarkavala', 685531, 'yes', 'male', 104),
(30, '2022-11-16', '7', 'Puthuparambil', 'Kerala', 'Kollam', 'Kallarkavala', 685531, 'yes', 'female', 104),
(31, '2022-11-16', '7', 'Puthuparambil', 'Kerala', 'Kollam', 'Kallarkavala', 685531, 'yes', 'female', 104),
(32, '2022-11-16', '7', 'Puthuparambil', 'Kerala', 'Kollam', 'Kallarkavala', 685531, 'yes', 'female', 104),
(33, '2022-11-18', '7', 'Puthuparambil', 'Kerala', 'Palakkadu', 'Kallarkavala', 685531, 'yes', 'female', 104),
(34, '2022-11-18', '7', 'Puthuparambil', 'Kerala', 'Palakkadu', 'Kallarkavala', 685531, 'yes', 'female', 104),
(35, '2022-11-11', '7', 'Puthuparambil', 'Kerala', 'Kannur', 'Kallarkavala', 685531, 'yes', 'male', 104),
(36, '2022-11-16', '7', 'Puthuparambil', 'Kerala', 'Ernakulam', 'Kallarkavala', 685531, 'yes', 'male', 104),
(37, '2022-11-16', '7', 'Puthuparambil', 'Kerala', 'Ernakulam', 'Kallarkavala', 685531, 'yes', 'male', 104),
(38, '2022-11-11', '7', 'Puthuparambil', 'Kerala', 'Kannur', 'Kallarkavala', 685531, 'yes', 'male', 104),
(39, '2022-11-11', '7', '=-098765', 'Kerala', 'Kannur', 'Kallarkavala', 685531, 'yes', 'male', 104),
(40, '2022-11-11', '7', '=-098765', 'Kerala', 'Kannur', 'Kallarkavala', 685531, 'yes', 'male', 104),
(41, '2022-11-12', '7', 'Puthuparambil', 'Kerala', 'Kottayam', 'Kallarkavala', 685531, 'yes', 'male', 104),
(42, '2022-11-09', '7', 'Puthuparambil', 'Kerala', 'Kasargode', 'Kallarkavala', 685531, 'yes', 'female', 104),
(43, '2022-11-19', '7', 'Puthuparambil', 'Kerala', 'Alappuzha', 'Kallarkavala', 685531, 'yes', 'female', 104),
(44, '2022-11-13', '7', 'Puthuparambil', 'Kerala', 'Kozhikkodu', 'Kallarkavala', 685531, 'yes', 'male', 104),
(45, '2022-11-13', '7', 'Puthuparambil', 'Kerala', 'Kozhikkodu', 'Kallarkavala', 685531, 'yes', 'male', 104),
(46, '2022-11-09', '7', 'Puthuparambil', 'Kerala', 'Kollam', 'Kallarkavala', 685531, 'yes', 'female', 104),
(47, '2022-11-09', '7', 'Puthuparambil', 'Kerala', 'Kollam', 'Kallarkavala', 685531, 'yes', 'female', 104),
(48, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Kollam', 'Kallarkavala', 685531, 'yes', 'female', 104),
(49, '2022-11-10', '7', 'Puthuparambil', 'Kerala', 'Kollam', 'Kallarkavala', 685531, 'yes', 'female', 104),
(50, '2022-11-12', '7', 'Puthuparambil', 'Kerala', 'Thrissur', 'Kallarkavala', 685531, 'no', 'female', 104),
(51, '2022-11-16', '7', 'Puthuparambil', 'Kerala', 'Alappuzha', 'Kallarkavala', 685531, 'yes', 'female', 104),
(52, '2022-11-16', '7', 'Puthuparambil', 'Kerala', 'Alappuzha', 'Kallarkavala', 685531, 'yes', 'female', 104),
(53, '2022-11-12', '7', 'Puthuparambil', 'Kerala', 'Wayanadu', 'Kallarkavala', 685531, 'yes', 'female', 104),
(55, '2022-11-11', '7', 'Puthuparambil', 'Kerala', 'Pathanamth', 'Kallarkavala', 685531, 'yes', 'female', 103);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pet_details`
--
ALTER TABLE `pet_details`
  ADD PRIMARY KEY (`petID`);

--
-- Indexes for table `pet_sitting`
--
ALTER TABLE `pet_sitting`
  ADD PRIMARY KEY (`sitting_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `sitting_bills`
--
ALTER TABLE `sitting_bills`
  ADD KEY `sitid` (`sitid`);

--
-- Indexes for table `volunteer_tbl`
--
ALTER TABLE `volunteer_tbl`
  ADD PRIMARY KEY (`voID`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pet_details`
--
ALTER TABLE `pet_details`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pet_sitting`
--
ALTER TABLE `pet_sitting`
  MODIFY `sitting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `volunteer_tbl`
--
ALTER TABLE `volunteer_tbl`
  MODIFY `voID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet_sitting`
--
ALTER TABLE `pet_sitting`
  ADD CONSTRAINT `pet_sitting_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `sign_up` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sitting_bills`
--
ALTER TABLE `sitting_bills`
  ADD CONSTRAINT `sitting_bills_ibfk_1` FOREIGN KEY (`sitid`) REFERENCES `pet_sitting` (`sitting_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer_tbl`
--
ALTER TABLE `volunteer_tbl`
  ADD CONSTRAINT `volunteer_tbl_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `sign_up` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
