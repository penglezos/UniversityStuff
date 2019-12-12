-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 12 Δεκ 2019 στις 08:53:02
-- Έκδοση διακομιστή: 10.4.6-MariaDB
-- Έκδοση PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `dummy`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `esoda`
--

CREATE TABLE `esoda` (
  `esoda_id` int(4) NOT NULL,
  `esoda_kat_id` int(4) NOT NULL,
  `esoda_poso` double(8,2) NOT NULL,
  `esoda_date` date NOT NULL,
  `esoda_sxolio` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `esoda`
--

INSERT INTO `esoda` (`esoda_id`, `esoda_kat_id`, `esoda_poso`, `esoda_date`, `esoda_sxolio`) VALUES
(1, 1, 2300.00, '2019-01-01', ''),
(2, 1, 2200.00, '2019-02-01', 'meiwsh'),
(3, 2, 1800.00, '2019-01-01', ''),
(4, 2, 1900.00, '2019-02-01', 'aukshsh'),
(5, 3, 1600.00, '2019-01-01', '500 euro doro xreistougenwn'),
(6, 3, 1100.00, '2019-02-01', 'den exei doro tr'),
(7, 4, 2000.00, '2019-01-01', ''),
(8, 4, 20000.00, '2019-02-01', ''),
(9, 5, 2800.00, '2019-01-01', ''),
(10, 5, 2800.00, '2019-02-01', '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `esoda_katathgoria`
--

CREATE TABLE `esoda_katathgoria` (
  `esoda_cat_id` int(4) NOT NULL,
  `esoda_kat_onoma` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `esoda_katathgoria`
--

INSERT INTO `esoda_katathgoria` (`esoda_cat_id`, `esoda_kat_onoma`) VALUES
(1, 'misthos patera'),
(2, 'misthos mhtera'),
(3, 'suntaksh papou'),
(4, 'enoikio magazi ermou'),
(5, 'enoikio magazi tsimiskh');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `exoda`
--

CREATE TABLE `exoda` (
  `exoda_id` int(4) NOT NULL,
  `exoda_kat_id` int(4) NOT NULL,
  `exoda_poso` double(8,2) NOT NULL,
  `exoda_date` date NOT NULL,
  `exoda_sxolio` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `exoda`
--

INSERT INTO `exoda` (`exoda_id`, `exoda_kat_id`, `exoda_poso`, `exoda_date`, `exoda_sxolio`) VALUES
(1, 1, 175.70, '2019-12-12', ''),
(2, 2, 24.50, '2019-08-29', ''),
(3, 1, 180.30, '2019-07-27', ''),
(4, 3, 40.30, '2018-06-20', 'leraa'),
(5, 5, 1090.30, '2019-05-02', 'ellas'),
(6, 2, 190.30, '2019-05-30', ''),
(7, 3, 17.30, '2019-08-02', ''),
(8, 6, 450.40, '2019-01-09', ''),
(9, 7, 1000.30, '2019-06-01', 'bp');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `exoda_kat`
--

CREATE TABLE `exoda_kat` (
  `exoda_kat_id` int(4) NOT NULL,
  `exoda_kat_name` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `exoda_kat`
--

INSERT INTO `exoda_kat` (`exoda_kat_id`, `exoda_kat_name`) VALUES
(1, 'deh'),
(2, 'cosmote'),
(3, 'eyath'),
(4, 'vodafone'),
(5, 'eforia'),
(6, 'enoikio'),
(7, 'thermansh');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `esoda`
--
ALTER TABLE `esoda`
  ADD PRIMARY KEY (`esoda_id`);

--
-- Ευρετήρια για πίνακα `esoda_katathgoria`
--
ALTER TABLE `esoda_katathgoria`
  ADD PRIMARY KEY (`esoda_cat_id`);

--
-- Ευρετήρια για πίνακα `exoda`
--
ALTER TABLE `exoda`
  ADD PRIMARY KEY (`exoda_id`);

--
-- Ευρετήρια για πίνακα `exoda_kat`
--
ALTER TABLE `exoda_kat`
  ADD PRIMARY KEY (`exoda_kat_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `esoda`
--
ALTER TABLE `esoda`
  MODIFY `esoda_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT για πίνακα `esoda_katathgoria`
--
ALTER TABLE `esoda_katathgoria`
  MODIFY `esoda_cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `exoda`
--
ALTER TABLE `exoda`
  MODIFY `exoda_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT για πίνακα `exoda_kat`
--
ALTER TABLE `exoda_kat`
  MODIFY `exoda_kat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
