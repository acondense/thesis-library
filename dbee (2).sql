-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2017 at 10:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tblthesis`
--

CREATE TABLE `tblthesis` (
  `id` int(11) NOT NULL,
  `thesisTitle` text CHARACTER SET latin1 NOT NULL,
  `authors` text CHARACTER SET latin1 NOT NULL,
  `datePublished` text CHARACTER SET latin1 NOT NULL,
  `abstract` text CHARACTER SET latin1 NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `tblthesis`
--

INSERT INTO `tblthesis` (`id`, `thesisTitle`, `authors`, `datePublished`, `abstract`, `userid`) VALUES
(1, 'Hello its me', 'I was wondering', 'Hi', 'yow', 0),
(2, '', '', '', '', 0),
(3, '', '', '', '', 0),
(4, 'a new thesis', 'ako at si ako', 'feb 2017', 'hello its me i should know better', 0),
(5, 'A thesis', 'help me again', 'feb 2017', 'help me again until the end                        ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `role` varchar(1) CHARACTER SET latin1 NOT NULL,
  `firstname` text CHARACTER SET latin1 NOT NULL,
  `lastname` text CHARACTER SET latin1 NOT NULL,
  `student_no` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `email`, `password`, `role`, `firstname`, `lastname`, `student_no`) VALUES
(1, 'asconde1997@gmail.com', 'abc123', 'S', 'Ariel', 'Conde', '2014-01042-MN-0'),
(2, 'asconde1997@gmail.com', '', 'S', 'Ariel', 'Conde', '2014-01042-MN-0'),
(3, 'asconde1997@gmail.com', 'nice', 'F', 'Ariel', 'Conde', '2014-01042-MN-0'),
(4, 'ada', 'asdas', '', 'fd', 'asd', ''),
(5, 's', 's', '', 's', 's', ''),
(6, 'A', 'A', 'F', 'A', 'A', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblthesis`
--
ALTER TABLE `tblthesis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblthesis`
--
ALTER TABLE `tblthesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
