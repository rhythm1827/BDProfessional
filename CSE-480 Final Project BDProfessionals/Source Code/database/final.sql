-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 07:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `applyid` int(11) NOT NULL,
  `offerid` int(11) NOT NULL,
  `usermail` varchar(50) NOT NULL,
  `offermail` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`applyid`, `offerid`, `usermail`, `offermail`, `status`) VALUES
(12, 8, 'ruhul5347@gmail.com', 'fahimshahrier2@gmail.com', 'denied'),
(13, 1, 'ruhul5347@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(14, 2, 'ruhul5347@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(15, 1, 'swap@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(16, 2, 'swap@gmail.com', 'ruhul5347@gmail.com', 'approved'),
(17, 3, 'swap@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(18, 4, 'swap@gmail.com', 'ruhul5347@gmail.com', 'approved'),
(19, 5, 'swap@gmail.com', 'ruhul5347@gmail.com', 'approved'),
(20, 1, 'fahimshahrier2@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(21, 2, 'fahimshahrier2@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(22, 3, 'fahimshahrier2@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(23, 4, 'fahimshahrier2@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(24, 5, 'fahimshahrier2@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(25, 9, 'ruhul5347@gmail.com', 'swap@gmail.com', 'approved'),
(26, 6, 'swap@gmail.com', 'ruhul5347@gmail.com', 'approved'),
(27, 5, 'swap@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(28, 4, 'swap@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(29, 1, 'swap@gmail.com', 'ruhul5347@gmail.com', 'denied'),
(30, 8, 'ruhul5347@gmail.com', 'fahimshahrier2@gmail.com', 'denied'),
(31, 8, 'ruhul5347@gmail.com', 'fahimshahrier2@gmail.com', 'pending'),
(32, 8, 'ruhul5347@gmail.com', 'fahimshahrier2@gmail.com', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ins` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`fname`, `lname`, `email`, `pass`, `mobile`, `gender`, `address`, `ins`, `type`) VALUES
('Ruhul', 'Kabir', 'ruhul5347@gmail.com', 'Loga61827', '01675742653', 'male', 'Ja 1377A Middle Badda, Dhaka', 'East West University', 'C/C++ Programmer'),
('Fahim', 'Shahriar', 'fahimshahrier2@gmail.com', 'Fahim123456', '015524485656', 'male', 'Ja 1377A Gulshan, Dhaka', 'East West University', 'Web developer (PHP + Laravel framework)'),
('Swapnil', 'Saha', 'swap@gmail.com', 'Swap123456', '0154483453', 'male', 'gulshan mart, Dhaka', 'East West University', 'C/C++ Programmer'),
('AL-Amin', 'Khan', 'ala@gmail.com', '123456Ab', '014845434', 'male', 'gulshan mart, Dhaka', 'East West University', 'Python programmer'),
('Swapnil', 'fggdfgggdf', 'swap1@gmail.com', 'Swap123456', '018123132123', 'male', 'gulshan mart, Dhaka', 'East West University', 'General Member'),
('Sabit', 'Faisal', 'sabit@gmail.com', 'Sabit123456', '0175263489', 'male', 'Aftabnagar Dhaka', 'East West University', 'General Member'),
('Ariful', 'Islam', 'arif@gmail.com', 'Arif123456', '01675742653', 'male', 'gulshan mart, Dhaka', 'East West University', 'Web developer (PHP + Laravel framework)');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offerid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `money` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offerid`, `email`, `title`, `description`, `money`) VALUES
(1, 'ruhul5347@gmail.com', 'Make A Beautiful Portfalio', 'My vfhvjfbv  gjbfjvh fhbvfhv jhfvbfh bvfhb jhbvdfjh fbvdfuj ', 2500),
(2, 'ruhul5347@gmail.com', 'Make A ', 'My dear............', 1200),
(3, 'ruhul5347@gmail.com', 'A train ticketing system', 'Bangladesh railway want to make a new ticketing system for passengers.', 250000),
(4, 'ruhul5347@gmail.com', 'Make A Website', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incidid', 25156),
(5, 'ruhul5347@gmail.com', 'Make A Game', 'fhbvh hcbsdjhbcdjh bcdjhb hbcdjhb jhbvdhbv jhdbv gtr dhcbhb jhcdbdjhcb jhdcbdjh jhcbdhm chd c  djhc djhc djhc djhc djh djh cdzjc zjm csdjk sdmf vvlsf,djs js,vjkdh voa la dvjhdvivkehdr vn', 0),
(6, 'ruhul5347@gmail.com', 'Make a Tic Tac Toe Game', 'Tic-tac-toe (also known as noughts and crosses or Xs and Os) is a paper-and-pencil game for two players, X and O, who take turns marking the spaces in a 3Ã—3 grid. The player who succeeds in placing three of their marks in a horizontal, vertical, or diagonal row wins the game.', 2500),
(7, 'ruhul5347@gmail.com', 'Make a Tic Tac Toe With prolog', 'Tic-tac-toe (also known as noughts and crosses or Xs and Os) is a paper-and-pencil game for two players, X and O, who take turns marking the spaces in a 3Ã—3 grid. The player who succeeds in placing three of their marks in a horizontal, vertical, or diagonal row wins the game.', 1200),
(8, 'fahimshahrier2@gmail.com', 'A bus ticketing system', 'Bangladesh buses want to make a new ticketing system for passengers.', 26000),
(9, 'swap@gmail.com', 'Hotel Management system', 'Hotel ..............................................................................', 10),
(10, 'ruhul5347@gmail.com', 'Make A Website', 'My vfhvjfbv  gjbfjvh fhbvfhv jhfvbfh bvfhb jhbvdfjh fbvdfuj ', 2500),
(11, 'ruhul5347@gmail.com', 'Make A Game', 'Tic-tac-toe (also known as noughts and crosses or Xs and Os) is a paper-and-pencil game for two players, X and O, who take turns marking the spaces in a 3Ã—3 grid. The player who succeeds in placing three of their marks in a horizontal, vertical, or diagonal row wins the game.', 1200),
(12, 'ruhul5347@gmail.com', 'Make A Website ghgh', 'My vfhvjfbv  gjbfjvh fhbvfhv jhfvbfh bvfhb jhbvdfjh fbvdfuj ', 2600);

-- --------------------------------------------------------

--
-- Table structure for table `repairman`
--

CREATE TABLE `repairman` (
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `area` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repairman`
--

INSERT INTO `repairman` (`name`, `type`, `address`, `area`, `mobile`) VALUES
('rhythm', 'Electrician', 'Ja 1377A Middle Badda, Dhaka', 'Gulshan', ''),
('rhythm', 'Electrician', 'Ja 132/A Middle Badda, Dhaka', 'Gulshan', '15451561'),
('jolil', 'GAS mistree', 'Ja 132/A Middle Badda, Dhaka', 'Khilgaon', '52525'),
('alam', 'Plumber', 'gn ghdgf', 'Rampura', '52245'),
('vbcvb', 'AC Repairman', 'gfgfgdfgdfgdfgdfgfgfg', 'Bashundhara/Baridhara', '2532452425'),
('Kuddus Boyati', 'AC Repairman', 'Sayedabad Tre, trek', 'Sayedabad', '0194531243'),
('trfvnkfk', 'Plumber', '', 'Uttara', '05153'),
('fgbxfxb', 'Fridge Repairman', 'gulshan mart, Dhaka', 'Tejgoan', '0198972341'),
('vbcvb', 'GAS mistree', 'gulshan mart, Dhaka', 'Dhanmondi', '1565431346'),
('gfxb', 'Fridge Repairman', '3/k Banasree, Dhaka', 'Rampura', '0198945134'),
('Kamal Mia', 'AC Repairman', 'Mohakhali Dohs', 'Mohakhali', '01587856232'),
('Jhonny Shakil', 'GAS mistree', 'Uttara sector 10, Dhaka', 'Uttara', '01742429282'),
('', 'Electrician', 'cvc hbschsbh bchbdj', 'Mohakhali', '01742429282'),
('fahim', 'Fridge Repairman', 'cvc hbschsbh bchbdj', 'Tejgoan', '01555544244');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`applyid`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `applyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
