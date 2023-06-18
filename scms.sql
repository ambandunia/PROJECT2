-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2021 at 02:12 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `client` varchar(10) NOT NULL,
  `consultant` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `client`, `consultant`, `status`) VALUES
(1, 'client', 'karis', 'SOLVED'),
(2, 'joy', 'Sam', 'SOLVED'),
(3, 'tunde', 'joy', 'SOLVED');

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE IF NOT EXISTS `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`id`, `user`, `message`, `date_time`, `ip_address`) VALUES
(12, 'Admin', 'Done', '2014-08-15 05:37:34', '127.0.0.1'),
(13, 'Janan', 'Anybody there?', '2014-08-15 06:44:33', '127.0.0.1'),
(14, 'mahamed', 'Working', '2014-08-17 18:15:15', '::1'),
(15, 'admin', 'welcome', '2014-08-17 18:15:39', '::1'),
(16, 'test', 'hello', '2019-09-17 10:41:10', '127.0.0.1'),
(17, 'chat alone', 'chat alone', '2019-09-19 17:38:38', '127.0.0.1'),
(18, 'chat', 'chat', '2019-09-19 17:42:11', '127.0.0.1'),
(19, 'peter', 'hello', '2020-11-11 13:32:41', '127.0.0.1'),
(20, 'vicor', 'hello', '2020-11-11 13:33:15', '127.0.0.1'),
(21, 'vicor', 'hi', '2020-11-11 13:34:30', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msgid` int(100) NOT NULL AUTO_INCREMENT,
  `sender` varchar(11) NOT NULL,
  `recipient` varchar(11) NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msgid`, `sender`, `recipient`, `msg`, `date`, `status`) VALUES
(5, 'karis', 'client', 'Is it easy to get involved on campus', '2016-05-22 22:11:18', 'READ'),
(7, 'karis', 'client2', 'How are classes scheduled', '2016-05-22 22:11:42', 'READ'),
(9, 'client', 'karis', 'What is the average class size', '2016-05-22 22:12:01', 'READ'),
(10, 'karis', 'client2', 'Do you have to have a personal computer on campus', '2016-05-22 22:12:17', 'UNREAD'),
(11, 'client', 'karis', 'Is there a career services center that can offer help to graduates seeking job opportunities', '2016-05-22 22:12:43', 'READ'),
(12, 'client', 'sam', 'Are there academic advising and counseling services available to students', '2016-05-22 22:13:06', 'READ'),
(13, 'karis', 'client', 'yes', '2014-05-01 18:24:30', 'READ'),
(14, 'mike', 'karis', 'What is the acceptance rate for applicants', '2016-05-22 22:13:41', 'UNREAD'),
(15, 'sam', 'client', 'What is the student to faculty ratio on campus', '2016-05-22 22:14:53', 'UNREAD'),
(16, 'sam', 'mike', 'What is the retention rate for first year students', '2016-05-22 22:15:10', 'READ'),
(17, 'joy', 'Jessy', 'What sort of academic support is available to students', '2016-05-22 22:11:00', 'UNREAD'),
(18, 'joy', 'Sam', 'What is the student population', '2016-05-22 22:13:58', 'READ'),
(19, 'Sam', 'joy', 'Over 1000 students', '2016-05-22 22:14:16', 'READ'),
(20, 'joy', 'Jessy', 'Where do we pay school fees', '2016-05-22 20:04:56', 'UNREAD'),
(21, 'joy', 'Sam', 'How do i get my registration number', '2016-05-22 20:16:58', 'UNREAD'),
(22, 'tunde', 'joy', 'Go to the registrar office', '2016-05-22 20:45:25', 'READ'),
(23, 'joy', 'tunde', 'Thanks', '2016-11-28 11:40:11', 'READ'),
(24, 'tunde', 'francis', 'Did you fix it?', '2016-11-26 13:10:07', 'UNREAD'),
(25, 'tunde', 'francis', 'ok', '2016-11-26 13:11:54', 'UNREAD'),
(26, 'tunde', 'francis', 'ok', '2016-11-26 13:17:57', 'UNREAD'),
(27, 'tunde', 'francis', 'its working now', '2016-11-26 13:19:26', 'UNREAD'),
(28, 'tunde', 'francis', 'Test one', '2016-11-28 10:48:07', 'UNREAD'),
(29, 'tunde', 'francis', 'Test two', '2016-11-28 10:48:27', 'UNREAD'),
(30, 'joy', 'tunde', 'is it working', '2016-11-28 11:18:43', 'READ'),
(31, 'joy', 'tunde', 'the course form', '2016-11-28 11:15:29', 'READ'),
(32, 'tunde', 'joy', 'check it now', '2016-11-28 11:20:05', 'READ'),
(33, 'joy', 'tunde', 'Thanks', '2016-11-28 11:21:39', 'READ'),
(34, 'tunde', 'joy', 'Any other issues', '2016-11-28 11:22:57', 'READ'),
(35, 'joy', 'tunde', 'ok. check plus one', '2016-11-28 11:37:07', 'READ'),
(36, 'tunde', 'joy', '12', '2016-11-28 11:38:02', 'READ'),
(37, 'joy', 'tunde', '121', '2016-11-28 11:39:31', 'READ'),
(38, 'joy', 'tunde', 'tunde test', '2017-12-06 00:19:18', 'READ'),
(39, 'helen', 'tunde', 'I had a missing result', '2017-12-06 00:30:09', 'UNREAD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `category` tinyint(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `speciality` varchar(56) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `category`, `username`, `password`, `firstname`, `lastname`, `status`, `speciality`) VALUES
(1, 2, 'Michael', 'f0f46d191b9de6626c7daebd35335278', 'Michael', 'George', 'active', 'Desktop Officer'),
(2, 1, 'abiodun', '62608e08adc29a8d6dbc9754e659f125', 'Abiodun', 'Fasasi', 'active', ''),
(3, 3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'active', ''),
(5, 1, 'client2', '2c66045d4e4a90814ce9280272e510ec', 'George', 'Fashola', 'active', 'N/A'),
(6, 2, 'Sam', '332532dcfaa1cbf61e2a266bd723612c', 'Samson', 'John', 'active', 'Dean'),
(7, 1, 'mike', '18126e7bd3f84b3f3e4df094def5b7de', 'mike', 'mike', 'active', 'N/A'),
(8, 2, 'Jessy', '8ff32489f92f33416694be8fdc2d4c22', 'Jessica', 'Franca', 'active', 'Class Rep'),
(10, 1, 'joy', 'c2c8e798aecbc26d86e4805114b03c51', 'joy', 'joy', 'active', 'N/A'),
(11, 1, 'francis', 'd0ab7fe6c314f4fe5b6c18a0157c96b4', 'Francis', 'Odega', 'active', 'N/A'),
(12, 2, 'tunde', '8561f4eacced64527e6a195af846c2ae', 'Tunde', 'Adeoye', 'active', 'Desktop Officer'),
(13, 1, 'peter', '51dc30ddc473d43a6011e9ebba6ca770', 'peter', 'peter', 'inactive', 'N/A'),
(14, 1, 'helen', '7a2eb41a38a8f4e39c1586649da21e5f', 'Helen', 'Okoli', 'active', 'N/A');
