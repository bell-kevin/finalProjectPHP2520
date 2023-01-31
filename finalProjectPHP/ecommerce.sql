CREATE DATABASE ecommerce;

USE ecommerce;

CREATE DATABASE ecommerce CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'One Plus 5T', 300),
(2, 'Apple Iphone X', 400),
(3, 'Samsung S8', 500),
(4, 'Apple Iphone 7S', 600),
(5, 'One Plus 3T', 700),
(6, 'Oppo A57', 800);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `contact` bigint(1) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE products
MODIFY COLUMN price DECIMAL(8,2);

ALTER TABLE products CHANGE id product_id INT;

DROP TABLE query;

CREATE TABLE orders (
    order_id INT PRIMARY KEY,
    product_id INT,
    id INT,
    quantity INT,
    dateTime DATETIME,
    total_price DECIMAL(20,2),
    sub_total DECIMAL(20,2),
    tax DECIMAL(20,2),
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    FOREIGN KEY (id) REFERENCES users(id)
);

INSERT INTO orders (order_id, id, product_id, dateTime, total_price) VALUES (1, 1, 3, '2022-01-01', 100);

INSERT INTO orders (order_id, id, product_id, dateTime, total_price) VALUES (2, 1, 3, '2022-01-01 09:15:23', 200);

INSERT INTO orders (order_id, id, product_id, dateTime, total_price) VALUES (3, 9, 1, '2023-02-02 11:15:23', 300);

INSERT INTO orders (order_id, id, product_id, dateTime, total_price, tax) VALUES (4, 9, 1, '2023-02-02 11:15:23', 300, 0);

INSERT INTO orders (order_id, id, product_id, dateTime, total_price, tax, quantity) VALUES (5, 9, 1, '2023-02-02 11:15:23', 300, 0, 7);

INSERT INTO orders (order_id, id, product_id, dateTime, total_price, tax, quantity, sub_total) VALUES (6, 9, 1, '2023-02-02 11:15:23', 300, 0, 7, 300);

INSERT INTO orders (order_id, id, product_id, dateTime, total_price, tax, quantity, sub_total) VALUES (7, 9, 1, '2023-02-02 11:15:23', 300, 6.67, 7, 300);

ALTER TABLE orders
MODIFY order_id INT AUTO_INCREMENT;

INSERT INTO orders (order_id, id, product_id, dateTime, total_price, tax, quantity, sub_total) VALUES (8, 3, 2, '2023-03-03 12:16:24', 400, 7.77, 8, 400);