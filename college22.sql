-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 23 Ιαν 2023 στις 20:56:15
-- Έκδοση διακομιστή: 10.4.25-MariaDB
-- Έκδοση PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `college22`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345678');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `websitee`
--

CREATE TABLE `websitee` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `adults` int(30) NOT NULL,
  `children` int(30) NOT NULL,
  `movie_pref` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `websitee`
--

INSERT INTO `websitee` (`id`, `date`, `first_name`, `last_name`, `email`, `phone`, `adults`, `children`, `movie_pref`) VALUES
(37, '2023-01-26', 'admin', 'b', 'admin@gmail.com', 2147483647, 1, 8, 'The Jungle book (Disney)');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `websitee`
--
ALTER TABLE `websitee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `websitee`
--
ALTER TABLE `websitee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
