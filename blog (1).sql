-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 09:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmnt`
--

CREATE TABLE `cmnt` (
  `uid` varchar(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cmnt` text NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmnt`
--

INSERT INTO `cmnt` (`uid`, `pid`, `cid`, `cmnt`, `ctime`) VALUES
('asd', 1, 1, 'comment to post 1', '2017-10-24 23:30:54'),
('asd', 3, 2, 'this is a comment to post 2', '2017-10-24 23:49:36'),
('asd', 3, 3, 'this is 2nd comment to post 2', '2017-10-24 23:49:47'),
('asd2', 1, 4, 'this is another comment by another id', '2017-10-24 23:50:44'),
('asd2', 3, 5, 'this is 3rd comment by another id', '2017-10-24 23:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `uid` varchar(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `post` text NOT NULL,
  `uvote` int(10) NOT NULL,
  `dvote` int(10) NOT NULL,
  `ptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`uid`, `pid`, `post`, `uvote`, `dvote`, `ptime`) VALUES
('asd', 1, 'this is a post', 0, 0, '2017-10-25 19:04:01'),
('asd', 2, 'this is a post', 0, 0, '2017-10-25 19:04:25'),
('asd', 3, 'this is post 2', 0, 0, '2017-10-25 19:04:36'),
('asd2', 4, 'this is a post by another id\r\n', 0, 0, '2017-10-25 19:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`) VALUES
('asd', 'Asd asD', ''),
('asd', 'Asd asD', 'asd'),
('asd2', 'Asd asD', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `pid` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `vtype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`pid`, `uid`, `vtype`) VALUES
(1, 'asd', 1),
(1, 'asd', 0),
(3, 'asd', 0),
(4, 'asd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmnt`
--
ALTER TABLE `cmnt`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmnt`
--
ALTER TABLE `cmnt`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
