-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2018 at 06:00 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pb`
--

-- --------------------------------------------------------

--
-- Table structure for table `purpleblood`
--

DROP TABLE IF EXISTS `purpleblood`;
CREATE TABLE IF NOT EXISTS `purpleblood` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `bandname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `number1` varchar(10) NOT NULL,
  `number2` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purpleblood`
--

INSERT INTO `purpleblood` (`id`, `user`, `bandname`, `email`, `image`, `city`, `state`, `question`, `number1`, `number2`, `password`) VALUES
(26, 'shikhar', 'rock on', 'abc@gmail.com', '0', 'indore', 'Madhya Pradesh', 'ek no.', '9826980595', '9182736450', '12345'),
(27, 'shekhar', 'rock off', 'abcd@gmail.com', '0', 'indore', 'Rajasthan', 'ek no.', '9826980959', '9182736450', '1234'),
(28, 'pradhumna', 'boss', 'abcde@gmail.com', '0', 'indore', 'Madhya Pradesh', 'good', '9827980959', '9182736450', '1998'),
(29, 'Boss', 'crockroz', 'xyz@gmail.com', '0', 'Mumbai', 'Mharastra', 'Excellent', '9714149714', '9594939291', '999'),
(30, 'Dhoni', 'Cricket', 'dhoni@gmail.com', '0', 'Ranchi', 'Rajasthan', 'Fadddu Band', '9714149714', '7000828086', 'dhoni'),
(31, 'ronak', '93.5', 'ronak@gmail.com', '0', 'gwalior', 'Mharastra', 'we are the best', '8877665544', '9988776655', 'ronak'),
(33, 'Yash', 'rock on group', 'yash@gmail.com', '0', 'jabalpur', 'Mharastra', 'hello', '8987654321', '9009876543', '007'),
(34, 'lakhan', 'lol', 'pra@gmail.com', NULL, 'indore', 'Madhya Pradesh', 'lajwab', '9898989898', '8989898989', '123456'),
(35, 'lakhan bobe', 'lol', 'pra@gmail.com', NULL, 'indore', 'Madhya Pradesh', 'lajwab', '9898989898', '8989898989', '1234567'),
(36, 'maniya', 'surve', 'maniya@surve.com', '5abbc980002d9.jpg', 'indore', 'Mharastra', 'mumbai ka don', '9898989898', '8989898989', '909090'),
(38, 'karim', 'lala', 'karim@lala.com', '5abbce5faa50a.jpg', 'mumbai', 'Mharastra', 'samudra ka raja', '9898989898', '8989898989', '909090'),
(39, 'sulatan', 'mirza', 'sultan@gmail.com', '5abbd0f006d49.jpg', 'mumbai', 'Mharastra', 'badsahoo', '9898989898', '8989898989', '909090'),
(67, 'anil', 'a', 'pra@gmail.com', '5abc798c01f00.jpg', 'a', 'Madhya Pradesh', 'a', '98', '89', '64fcc6f6bc7a815041b4db51f00f4bea8e51c13b27f422da0a8522c94641c7e483c3f17b28d0a59add0c8a44a4e4fc1dd3a9ea48bad8cf5b707ac0f44a5f3536'),
(68, 'shyam', 'bhilai', 'shyam@gmail.com', '5abd1fcb3a174.jpg', 'mumbai', 'Madhya Pradesh', 'bb', '9898989898', '8989898989', ''),
(70, 'mukesh', 'moan', 'mukesh@gmail.com', '5abd23652074d.jpg', 'baroda', 'Madhya Pradesh', 'zakkasss', '9898989898', '8989898989', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09'),
(71, 'hi', 'hell', 'pradhunam@gm.ccc', '5abd27139cffe.jpg', 's', 'Madhya Pradesh', 's', '1', '2', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09'),
(72, 'queen', 'king', 'king@gmail.com', '5abd39b359af0.', 'jhabua', 'Madhya Pradesh', 'bb', '7000828086', '9192939495', 'cHZpcFZjdUhIKzVVQVJ1dzNwN3hDZz09'),
(73, 'Rangeela', 'Rock-On', 'rangeela@gamil.com', '5abdf262cf15a.jpg', 'baroda', 'Madhya Pradesh', 'We are the super one..', '9898989898', '8989898989', 'cHZpcFZjdUhIKzVVQVJ1dzNwN3hDZz09'),
(74, 'rahul', 'stand-up', 'rahul@gmal.com', '5abddaa2abf02.jpeg', 'indore', 'Madhya Pradesh', 'Zakkkaasss..', '9898989898', '8989898989', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09'),
(75, 'raj', 'rorieds', 'raj@gmail.com', '5abe05a7ae0c5.jpg', 'indore', 'Madhya Pradesh', 'zaakass...', '9898989898', '8989898989', 'cHZpcFZjdUhIKzVVQVJ1dzNwN3hDZz09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
