-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 20 Νοε 2019 στις 18:34:46
-- Έκδοση διακομιστή: 10.4.8-MariaDB
-- Έκδοση PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `somatio`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΑΓΩΝΕΣ`
--

CREATE TABLE `ΑΓΩΝΕΣ` (
  `ΚΩΔΙΚΟΣ ΑΓΩΝΑ` varchar(1) NOT NULL,
  `ΗΜΕΡΟΜΗΝΙΑ ΩΡΑ` datetime(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΓΗΠΕΔΟΥ` varchar(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ` varchar(1) NOT NULL,
  `ΑΝΤΙΠΑΛΟΣ` varchar(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΑΠΟΤΕΛΕΣΜΑΤΟΣ` varchar(1) NOT NULL,
  `ΣΧΟΛΙΟ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΑΓΩΝΕΣ-ΔΙΑΙΤΗΤΕΣ`
--

CREATE TABLE `ΑΓΩΝΕΣ-ΔΙΑΙΤΗΤΕΣ` (
  `ΚΩΔΙΚΟΣ ΑΓΩΝΑ` varchar(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΔΙΑΙΤΗΤΗ` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΑΘΛΗΤΕΣ`
--

CREATE TABLE `ΑΘΛΗΤΕΣ` (
  `ΚΩΔΙΚΟΣ ΑΘΛΗΤΗ` varchar(1) NOT NULL,
  `ΕΠΩΝΥΜΟ` varchar(1) NOT NULL,
  `ΟΝΟΜΑ` varchar(1) NOT NULL,
  `ΔΙΕΥΘΥΝΣΗ` varchar(1) NOT NULL,
  `ΑΡΙΘΜΟΣ` varchar(1) NOT NULL,
  `ΤΚ` varchar(1) NOT NULL,
  `ΠΟΛΗ` varchar(1) NOT NULL,
  `ΚΩΔ. ΦΥΚΛΟΥ` int(1) NOT NULL,
  `ΕΜΑΙΛ` varchar(1) NOT NULL,
  `ΚΙΝΗΤΟ` varchar(1) NOT NULL,
  `ΣΧΟΛΙΟ` text NOT NULL,
  `ΗΜΕΡΟΜΗΝΙΑ ΕΓΓΡΑΦΗΣ` datetime(1) NOT NULL,
  `ΗΜΕΡΟΜΗΝΙΑ ΓΕΝΝΗΣΗΣ` datetime(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΓΗΠΕΔΑ`
--

CREATE TABLE `ΓΗΠΕΔΑ` (
  `ΚΩΔΙΚΟΣ ΓΗΠΕΔΟΥ` varchar(1) NOT NULL,
  `ΟΝΟΜΑ` varchar(1) NOT NULL,
  `ΔΙΕΥΘΥΝΣΗ` varchar(1) NOT NULL,
  `ΤΗΛΕΦΩΝΟ` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΔΙΑΤΗΤΕΣ`
--

CREATE TABLE `ΔΙΑΤΗΤΕΣ` (
  `ΚΩΔΙΚΟΣ ΔΙΑΙΤΗΤΩΝ` varchar(1) NOT NULL,
  `ΕΠΩΝΥΜΟ` varchar(1) NOT NULL,
  `ΟΝΟΜΑ` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΠΛΗΡΩΜΕΣ`
--

CREATE TABLE `ΠΛΗΡΩΜΕΣ` (
  `ΚΩΔΙΚΟΣ ΠΛΗΡΩΜΗ` varchar(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ` varchar(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΑΘΛΗΤΗ` varchar(1) NOT NULL,
  `ΗΜΕΡΩΡΑ` datetime(1) NOT NULL,
  `ΣΧΟΛΙΟ` text NOT NULL,
  `ΠΟΣΟ` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΠΡΟΠΟΝΗΣΕΙΣ`
--

CREATE TABLE `ΠΡΟΠΟΝΗΣΕΙΣ` (
  `ΚΩΔΙΚΟΣ ΠΡΟΠΟΝΗΣΗΣ` varchar(1) NOT NULL,
  `ΗΜΕΡΟΜΗΝΙΑ ΩΡΑ` datetime(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΓΗΠΕΔΟΥ` varchar(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ` varchar(1) NOT NULL,
  `ΔΙΑΡΚΕΙΑ` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΠΡΟΠΟΝΗΤΕΣ`
--

CREATE TABLE `ΠΡΟΠΟΝΗΤΕΣ` (
  `ΚΩΔΙΚΟΣ ΠΡΟΠΟΝΗΤΗ` varchar(1) NOT NULL,
  `ΕΠΩΝΥΜΟ` varchar(1) NOT NULL,
  `ΟΝΟΜΑ` varchar(1) NOT NULL,
  `ΕΜΑΙΛ` varchar(1) NOT NULL,
  `ΤΗΛΕΦΩΝΟ` varchar(1) NOT NULL,
  `ΣΧΟΛΙΟ` text NOT NULL,
  `ΗΜΕΡΟΜΗΝΙΑ ΕΓΓΡΑΦΗΣ` datetime(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΤΜΗΜΑΤΑ-ΑΘΛΗΤΕΣ`
--

CREATE TABLE `ΤΜΗΜΑΤΑ-ΑΘΛΗΤΕΣ` (
  `ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ` varchar(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΑΘΛΗΤΗ` varchar(1) NOT NULL,
  `ΗΜΕΡΟΜΗΝΙΑ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΤΜΗΜΑΤΑ-ΠΡΟΠΟΝΗΣΕΙΣ`
--

CREATE TABLE `ΤΜΗΜΑΤΑ-ΠΡΟΠΟΝΗΣΕΙΣ` (
  `ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ` varchar(1) NOT NULL,
  `ΚΩΔΙΚΟΣ ΠΡΟΠΟΝΗΣΗ` varchar(1) NOT NULL,
  `ΠΕΡΙΟΔΟ` datetime(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Τμήματα`
--

CREATE TABLE `Τμήματα` (
  `ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ` varchar(1) NOT NULL,
  `ΟΝΟΜΑ ΤΜΗΜΑΤΟΣ` varchar(1) NOT NULL,
  `ΣΥΝΔΡΟΜΗ` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΦΥΛΟΥ`
--

CREATE TABLE `ΦΥΛΟΥ` (
  `ΚΩΔΙΚΟΣ ΦΥΛΟΥ` int(1) NOT NULL,
  `ΟΝΟΜΑ` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `ΑΓΩΝΕΣ`
--
ALTER TABLE `ΑΓΩΝΕΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΑΓΩΝΑ`,`ΚΩΔΙΚΟΣ ΓΗΠΕΔΟΥ`,`ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ`);

--
-- Ευρετήρια για πίνακα `ΑΓΩΝΕΣ-ΔΙΑΙΤΗΤΕΣ`
--
ALTER TABLE `ΑΓΩΝΕΣ-ΔΙΑΙΤΗΤΕΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΑΓΩΝΑ`),
  ADD UNIQUE KEY `ΚΩΔΙΚΟΣ ΔΙΑΙΤΗΤΗ` (`ΚΩΔΙΚΟΣ ΔΙΑΙΤΗΤΗ`);

--
-- Ευρετήρια για πίνακα `ΑΘΛΗΤΕΣ`
--
ALTER TABLE `ΑΘΛΗΤΕΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΑΘΛΗΤΗ`);

--
-- Ευρετήρια για πίνακα `ΓΗΠΕΔΑ`
--
ALTER TABLE `ΓΗΠΕΔΑ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΓΗΠΕΔΟΥ`);

--
-- Ευρετήρια για πίνακα `ΔΙΑΤΗΤΕΣ`
--
ALTER TABLE `ΔΙΑΤΗΤΕΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΔΙΑΙΤΗΤΩΝ`);

--
-- Ευρετήρια για πίνακα `ΠΛΗΡΩΜΕΣ`
--
ALTER TABLE `ΠΛΗΡΩΜΕΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΠΛΗΡΩΜΗ`,`ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ`);

--
-- Ευρετήρια για πίνακα `ΠΡΟΠΟΝΗΣΕΙΣ`
--
ALTER TABLE `ΠΡΟΠΟΝΗΣΕΙΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΠΡΟΠΟΝΗΣΗΣ`);

--
-- Ευρετήρια για πίνακα `ΠΡΟΠΟΝΗΤΕΣ`
--
ALTER TABLE `ΠΡΟΠΟΝΗΤΕΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΠΡΟΠΟΝΗΤΗ`);

--
-- Ευρετήρια για πίνακα `ΤΜΗΜΑΤΑ-ΑΘΛΗΤΕΣ`
--
ALTER TABLE `ΤΜΗΜΑΤΑ-ΑΘΛΗΤΕΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ`,`ΚΩΔΙΚΟΣ ΑΘΛΗΤΗ`);

--
-- Ευρετήρια για πίνακα `ΤΜΗΜΑΤΑ-ΠΡΟΠΟΝΗΣΕΙΣ`
--
ALTER TABLE `ΤΜΗΜΑΤΑ-ΠΡΟΠΟΝΗΣΕΙΣ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ`),
  ADD UNIQUE KEY `ΚΩΔΙΚΟΣ ΠΡΟΠΟΝΗΣΗ` (`ΚΩΔΙΚΟΣ ΠΡΟΠΟΝΗΣΗ`);

--
-- Ευρετήρια για πίνακα `Τμήματα`
--
ALTER TABLE `Τμήματα`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΤΜΗΜΑΤΟΣ`);

--
-- Ευρετήρια για πίνακα `ΦΥΛΟΥ`
--
ALTER TABLE `ΦΥΛΟΥ`
  ADD PRIMARY KEY (`ΚΩΔΙΚΟΣ ΦΥΛΟΥ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
