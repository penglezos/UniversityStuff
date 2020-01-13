-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 13 Ιαν 2020 στις 09:00:15
-- Έκδοση διακομιστή: 10.4.8-MariaDB
-- Έκδοση PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `plaisio`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categories_alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_alias`) VALUES
(1, 'ΥΠΟΛΟΓΙΣΤΕΣ', 'ypologistes'),
(2, 'ΚΙΝΗΤΑ', 'kinita'),
(3, 'TABLET', 'tablet'),
(4, 'ΕΙΚΟΝΑ - ΗΧΟΣ', 'eikona-hxos');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customers`
--

CREATE TABLE `customers` (
  `customers_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_birthdate` datetime DEFAULT NULL,
  `customers_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_business_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_business_activity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_business_afm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_business_doy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_business_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_business_zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_business_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `emails`
--

CREATE TABLE `emails` (
  `emails_id` int(11) DEFAULT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `emails_text` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `emails_subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emails_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newsletter_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orders`
--

CREATE TABLE `orders` (
  `orders_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orders_datetime` datetime DEFAULT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `payments_id` int(11) DEFAULT NULL,
  `shipment_id` int(11) DEFAULT NULL,
  `orders_notes` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `order_items`
--

CREATE TABLE `order_items` (
  `order_items_id` int(11) DEFAULT NULL,
  `orders_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_items_quantity` int(11) DEFAULT NULL,
  `order_items_price` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `payments`
--

CREATE TABLE `payments` (
  `payments_id` int(11) NOT NULL,
  `payments_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payments_cost` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE `products` (
  `products_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `products_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_quantity` int(11) DEFAULT NULL,
  `products_price` double(6,2) DEFAULT NULL,
  `products_offer` int(11) DEFAULT NULL,
  `subcategories_id` int(11) DEFAULT NULL,
  `products_views` int(11) DEFAULT NULL,
  `products_warranty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_alias`, `products_description`, `products_quantity`, `products_price`, `products_offer`, `subcategories_id`, `products_views`, `products_warranty`) VALUES
('2895684', 'Corsair Desktop RAM Vengeance 8GB 3000MHz DDR4\r\n', 'Corsair-Desktop-RAM-Vengeance-8GB 3000MHz-DDR4', 'Απόλαυσε υψηλές ταχύτητες λειτουργίας, με γρήγορους χρονισμούς, προηγμένες δυνατότητες Overclocking και ψύκτρα αλουμινίου!\r\n', 3, 59.00, 20, 3, NULL, NULL),
('2982129', 'Intel CPU Core i9 9900K (1151/3.6 GHz/16 MB)\r\n', 'Intel-CPU-Core-i9-9900K-(1151-36-GHz-16 MB)', 'Gaming σε άλλο επίπεδο, δημιουργία δίχως όρια, υψηλοί χρονισμοί, ψυχαγωγία σε UHD και Hardware-Based ασφάλεια: αυτοί είναι οι Intel Core 9ης Γενιάς\r\n', 3, 569.00, 15, 1, NULL, 3),
('3072673', 'AMD CPU Ryzen 5 3600 (AM4/3.6 GHz/36 MB)', 'AMD-CPU-Ryzen-5-3600-(AM4-36-GHz-36-MB)\r\n', 'Mε πυρήνες αρχιτεκτονικής Zen 2 και υψηλότερους χρονισμούς, περισσότερο bandwidth, υποστήριξη PCIe 4.0 και αποκλειστικές τεχνολογίες AMD, επαναπροσδιορίζουν την απόδοση των Gaming PCs!', 5, 249.00, 20, 1, NULL, 3),
('3117642', 'Corsair Desktop RAM Vengeance Pro RGB 32GB Kit 3466MHz DDR4\r\n', 'Corsair-Desktop-RAM-Vengeance-Pro-RGB-32GB Kit-3466MHz-DDR4', '32GB μνήμης RAM DDR4 για υψηλές επιδόσεις και χρονισμούς, με built-in heat spreaders και multi-zone RGB φωτισμό που συμπληρώνει το στυλ κάθε gamer\r\n', 5, 309.90, 10, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `product_reviews`
--

CREATE TABLE `product_reviews` (
  `product_reviews_id` int(11) NOT NULL,
  `product_reviews_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `products_reviews_datetime` datetime DEFAULT NULL,
  `rates_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rates`
--

CREATE TABLE `rates` (
  `rates_id` int(11) NOT NULL,
  `rates_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `shipment`
--

CREATE TABLE `shipment` (
  `shipment_id` int(11) DEFAULT NULL,
  `shipment_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipment_cost` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `subcategories`
--

CREATE TABLE `subcategories` (
  `subcategories_id` int(11) NOT NULL,
  `subcategories_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subcategories_alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `subcategories`
--

INSERT INTO `subcategories` (`subcategories_id`, `subcategories_name`, `subcategories_alias`, `categories_id`) VALUES
(1, 'CPU', 'cpu', 1),
(2, 'HDD', 'hdd', 1),
(3, 'RAM', 'ram', 1),
(4, 'ΚΑΡΤΕΣ ΓΡΑΦΙΚΩΝ', 'kartes-grafikon', 1),
(5, 'SMARTPHONE', 'smartphone', 2),
(6, 'iPhone', 'iphone', 2),
(7, 'ANDROID', 'android', 2),
(8, 'ΑΝΑΛΟΓΙΚΑ', 'analogika', 2);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `wishlist_datetime` datetime DEFAULT NULL,
  `customers_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_price` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Ευρετήρια για πίνακα `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payments_id`);

--
-- Ευρετήρια για πίνακα `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Ευρετήρια για πίνακα `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`product_reviews_id`);

--
-- Ευρετήρια για πίνακα `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`rates_id`);

--
-- Ευρετήρια για πίνακα `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcategories_id`);

--
-- Ευρετήρια για πίνακα `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `payments`
--
ALTER TABLE `payments`
  MODIFY `payments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `product_reviews_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `rates`
--
ALTER TABLE `rates`
  MODIFY `rates_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcategories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT για πίνακα `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
