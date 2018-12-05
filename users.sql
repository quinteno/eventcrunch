-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: sulley.cah.ucf.edu
-- Generation Time: Apr 29, 2018 at 02:22 PM
-- Server version: 5.5.60-0ubuntu0.14.04.1
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `th402780`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `password`, `email`) VALUES
(1, 'Thalia', 'Su', 'tsu1', 'Pass123!', 'scrambled@eggs.com'),
(2, 'Sarah', 'B', 'bananaseeds', '$2y$10$tad1unNxJM7p9djwTJMTKeE/d/csgYjs/9CKZ4xo2sEvsfSF0ADzK', 'gottagofast@sanic.net'),
(3, 'Andre', 'Garzia', 'ericandreluverxxx', '$2y$10$U.WWqACl6Po7JrEW8UHx8ubIT.OAWx91UXsuLYPLhJZDRB3/wVxjy', 'ranchituuup@berightback.com'),
(4, 'Timmy', 'Toothpicks', 'highnoon', '$2y$10$qeuJdu4Qd.VuT.jbvMf4aufyw3mkl4b/Ww6886HJoQnGw..XaIr02', 'toothpicksferhands@dnd.net'),
(5, 'Tanisha', 'Calixte', 'Sha01', '$2y$10$oJE/GraUwpZ1B3EItdv0S.7ekiam2QyhLERvlWH5NGVbKeHXbpvXW', 'tanishacalixte@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
