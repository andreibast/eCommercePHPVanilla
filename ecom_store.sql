-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 04:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(7, '127.0.0.1', 1, 'Large'),
(11, '127.0.0.1', 1, 'Small'),
(15, '127.0.0.1', 1, 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.'),
(2, 'Women', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.'),
(3, 'Kids', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.'),
(4, 'Other', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(5, 'Test', 'testingmail@yahoo.uk', 'blabla', 'Blabla', 'Blabla2', '1251235341', 'Blabla', 'waxed-cotton-coat-woman-2.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(1, 2, 2, '2020-03-29 21:25:33', 'Women Diamond Heart Ring', 'women-diamond-heart-ring-1.jpg', 'women-diamond-heart-ring-2.jpg', 'women-diamond-heart-ring-3.jpg', 1565, 'Ring', '<p>Lorem</p>'),
(2, 4, 3, '2020-03-27 16:54:57', 'Boys Puffer Coat With Detachable Hood', 'boys-Puffer-Coat-With-Detachable-Hood-1.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-2.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-3.jpg', 121, 'Hood', '<p>This is for children, during winter times</p>'),
(3, 5, 2, '2020-03-27 16:57:54', 'Girl Polos T-Shirt', 'g-polos-tshirt-1.jpg', 'g-polos-tshirt-2.jpg', '', 55, 'Shirt', '<p>Lorem Ipsum</p>'),
(4, 5, 1, '2020-03-27 17:27:06', 'Grey Man', 'grey-man-1.jpg', 'grey-man-2.jpg', 'grey-man-3.jpg', 55, 'Shirt', '<p>Lorem</p>'),
(6, 3, 2, '2020-03-30 02:30:57', 'High Heels Women Pantofel Brukat', 'High Heels Women Pantofel Brukat-1.jpg', 'High Heels Women Pantofel Brukat-2.jpg', 'High Heels Women Pantofel Brukat-3.jpg', 235, 'Heels', '<p>Lorem Ipsum</p>'),
(7, 3, 1, '2020-03-30 02:32:35', 'Man Adidas Suarez Slop On', 'Man-Adidas-Suarez-Slop-On-1.jpg', 'Man-Adidas-Suarez-Slop-On-2.jpg', 'Man-Adidas-Suarez-Slop-On-3.jpg', 185, 'Sneakers', '<p>Lorem ipsum</p>'),
(8, 1, 1, '2020-03-30 15:40:19', 'Geox Winter Jacket', 'Man-Geox-Winter-jacket-1.jpg', 'Man-Geox-Winter-jacket-2.jpg', 'Man-Geox-Winter-jacket-3.jpg', 135, 'Jacket', '<p>Lorem Ipsum</p>'),
(9, 5, 1, '2020-03-30 02:34:47', 'Man Polo', 'Man-Polo-1.jpg', 'Man-Polo-2.jpg', 'Man-Polo-3.jpg', 35, 'Shirt', '<p>Lorem Ipsum</p>'),
(10, 2, 4, '2020-03-30 03:13:02', 'Mont Blanc Belt Man', 'Mont-Blanc-Belt-man-1.jpg', 'Mont-Blanc-Belt-man-2.jpg', 'Mont-Blanc-Belt-man-3.jpg', 79, 'Belt', '<p>Lorem Ipsum</p>'),
(11, 4, 2, '2020-03-30 02:36:59', 'Red WinterJacket', 'Red-Winter-jacket-1.jpg', 'waxed-cotton-coat-woman-2.jpg', 'waxed-cotton-coat-woman-3.jpg', 120, 'Coat', '<p>Lorem Ipsum</p>'),
(12, 4, 2, '2020-03-30 02:38:22', 'Waxed Cotton Coat Woman', 'waxed-cotton-coat-woman-1.jpg', 'waxed-cotton-coat-woman-2.jpg', 'waxed-cotton-coat-woman-3.jpg', 240, 'Coat Women', '<p>Lorem Ipsum</p>'),
(13, 1, 1, '2020-03-30 15:31:32', 'Levis Trucker Jacket', 'levis-Trucker-Jacket.jpg', 'levis-Trucker-Jacket-2.jpg', 'levis-Trucker-Jacket-3.jpg', 445, 'Levis', '<p>Lorem Ipsum</p>'),
(14, 1, 1, '2020-03-30 15:32:55', 'Merlin Engineer Jacket', 'Merlin-Enginner-Jacket.jpg', 'Merlin-Engineer-Jacket-2.jpg', 'Man-Geox-Winter-jacket-3.jpg', 225, 'Jacket', '<p>Lorem Ipsum</p>'),
(15, 1, 2, '2020-03-30 15:33:55', 'Mobile Power Jacket', 'Mobile-Power-Jacket.jpg', 'Mobile-Power-Jacket-2.jpg', 'Mobile-Power-Jacket-3.jpg', 180, 'Women Jacket', '<p>Lorem Ipsum</p>'),
(16, 5, 1, '2020-03-30 15:39:08', 'Polos T-Shirt', 'polos-tshirt-1.jpg', 'polos-tshirt-2.jpg', '', 60, 'T-Shirt', '<p>Lorem Ipsum</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Jackets', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.'),
(2, 'Accessories', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.'),
(3, 'Shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.'),
(4, 'Coats', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.'),
(5, 'T-Shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consequuntur, est laudantium cumque molestiae, delectus odio quisquam veritatis commodi sed soluta nemo totam distinctio quaerat facilis error ipsa a labore.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide number 1', 'slide-1.jpg'),
(2, 'Slide number 2', 'slide-2.jpg'),
(3, 'Slide number 3', 'slide-3.jpg'),
(4, 'Slide number 4', 'slide-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
