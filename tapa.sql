-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2014 at 10:59 PM
-- Server version: 5.6.13
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id_block` int(10) NOT NULL AUTO_INCREMENT,
  `id_cat` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_block`),
  KEY `FK_blocks_categories` (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id_block`, `id_cat`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 6),
(8, 7),
(9, 8),
(10, 8),
(11, 9),
(12, 10),
(13, 11),
(14, 11),
(15, 11),
(16, 11),
(17, 11),
(18, 11),
(19, 11),
(20, 11);

-- --------------------------------------------------------

--
-- Table structure for table `block_headers`
--

CREATE TABLE IF NOT EXISTS `block_headers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `header` varchar(255) DEFAULT NULL,
  `sub_header` varchar(255) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `id_block` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_block_headers_blocks` (`id_block`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `block_headers`
--

INSERT INTO `block_headers` (`id`, `header`, `sub_header`, `price`, `id_block`) VALUES
(1, 'sandwiches', '', '$4.30 per round', 1),
(2, 'mixed breads', '(baguette, turkish, wraps & gourmet bread)', '$5.30 per round', 1),
(3, 'sandwiches', '', '$5.50 per round', 2),
(4, 'mixed breads', '(baguette, turkish, wraps & gourmet bread)', '$6.50 per round', 2),
(5, 'noodle boxes', 'served individually', '$9.00 per person\r\n', 3),
(6, 'buffet dishes', 'large buffet dish for self serve', 'POA', 3),
(7, 'soup', '', '$8.50 Per person', 4),
(8, 'salads', '', '$8.50 Per person', 5),
(9, 'turkish bread & dips', '', '$5.50 Per person', 6),
(10, 'antipasto platters', '', '$7.50 Per person', 7),
(11, 'executive', '', '$2.00 Per item', 8),
(12, 'gourmet', '', '$2.50 per item/serve', 9),
(13, '.....a little more substantial', '', '$4.00 Each', 10),
(14, 'seasonal fruit platter', '', '$4.50 per person', 11),
(15, 'gourmet cheese platter', '', '$7.50 Per Person', 12),
(16, 'muffins mini or regular', '', '$1.00/$2.50 each', 13),
(17, 'muffins/slide combination', '', '$4.00 per person', 14),
(18, 'scone-12 hours notice required', '12 Hours notice required', '$2.50 each', 15),
(19, 'fruite pastries mini or regular', '24 Hours notice required', '$2.00/$3.00 each', 16),
(20, 'croissants mini or regular', '24 Hours notice required', '$2.00/$3.00 each', 17),
(21, 'filled croissant mini or regular', '24 Hours notice required', '$3.00/$5.00 each', 18),
(22, 'becon & egg english muffins', '', '$4.00 each', 19),
(23, 'large cakes - 24 hours notice required', '', '$30-$40', 20);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_cat` int(10) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_cat`, `desc`) VALUES
(1, 'executive sandwish platters'),
(2, 'gourmet sandwich platters'),
(3, 'hot dishes'),
(4, 'soups'),
(5, 'salads'),
(6, 'savoury platters'),
(7, 'executive finger food platters'),
(8, 'gourmet finger food platters'),
(9, 'fruit platter'),
(10, 'cheese  platter'),
(11, 'morning & afternoon tea');

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE IF NOT EXISTS `imgs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `a_path` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `id_block` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_imgs_blocks` (`id_block`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`id`, `a_path`, `title`, `img_path`, `alt`, `id_block`) VALUES
(1, '/tapa/public/images/menuimages/menupix_07.jpg', 'executive sandwiches', '/tapa/public/images/menuthumbs/menuthmb07.jpg', 'executive sandwiches', 1),
(2, '/tapa/public/images/menuimages/menupix_01.jpg', 'gourmet sandwiches and rolls', '/tapa/public/images/menuthumbs/menuthmb01.jpg', 'gourmet sandwiches and rolls', 2),
(3, '/tapa/public/images/menuimages/menupix_08.jpg', 'noodle box', '/tapa/public/images/menuthumbs/menuthmb08.jpg', 'noodle box', 3),
(4, '/tapa/public/images/menuimages/menupix_09.jpg', 'thai noodle salad', '/tapa/public/images/menuthumbs/menuthmb09.jpg', 'thai noodle salad', 5),
(5, '/tapa/public/images/menuimages/menupix_11.jpg', 'roast pumpkin pinenut spinach and pasta', '/tapa/public/images/menuthumbs/menuthmb12.jpg', 'roast pumpkin pinenut spinach and pasta', 5),
(6, '/tapa/public/images/menuimages/menupix_10.jpg', 'cous cous salad', '/tapa/public/images/menuthumbs/menuthmb10.jpg', 'cous cous salad', 5),
(7, '/tapa/public/images/menuimages/menupix_02.jpg', 'turkish bread and dips', '/tapa/public/images/menuthumbs/menuthmb02.jpg', 'turkish bread and dips', 6),
(8, '/tapa/public/images/menuimages/menupix_14.jpg', 'antipasto platter', '/tapa/public/images/menuthumbs/menuthmb14.jpg', 'antipasto platter', 7),
(9, '/tapa/public/images/menuimages/menupix_18.jpg', 'mediterranean frittata slice', '/tapa/public/images/menuthumbs/menuthmb18.jpg', 'mediterranean frittata slice', 8),
(10, '/tapa/public/images/menuimages/menupix_06.jpg', 'mushroom arancini', '/tapa/public/images/menuthumbs/menuthmb06.jpg', 'mushroom arancini', 8),
(11, '/tapa/public/images/menuimages/menupix_16.jpg', 'sausage rolls', '/tapa/public/images/menuthumbs/menuthmb16.jpg', 'sausage rolls', 8),
(12, '/tapa/public/images/menuimages/menupix_05.jpg', 'mini quiches', '/tapa/public/images/menuthumbs/menuthmb05.jpg', 'mini quiches', 8),
(13, '/tapa/public/images/menuimages/menupix_17.jpg', 'smoked salmon blinis with creme fraiche', '/tapa/public/images/menuthumbs/menuthmb17.jpg', 'smoked salmon blinis with creme fraiche', 9),
(14, '/tapa/public/images/menuimages/menupix_15.jpg', 'thai chicken skewers', '/tapa/public/images/menuthumbs/menuthmb15.jpg', 'thai chicken skewers', 9),
(15, '/tapa/public/images/menuimages/menupix_13.jpg', 'mini beef burgers', '/tapa/public/images/menuthumbs/menuthmb13.jpg', 'mini beef burgers', 10),
(16, '/tapa/public/images/menuimages/menupix_23.jpg', 'seasonal fruit platter', '/tapa/public/images/menuthumbs/menuthmb23.jpg', 'seasonal fruit platter', 11),
(17, '/tapa/public/images/menuimages/menupix_03.jpg', 'cheese platter', '/tapa/public/images/menuthumbs/menuthmb03.jpg', 'cheese platter', 12),
(18, '/tapa/public/images/menuimages/menupix_19.jpg', 'homemade muffins', '/tapa/public/images/menuthumbs/menuthmb19.jpg', 'homemade muffins', 13),
(19, '/tapa/public/images/menuimages/menupix_21.jpg', 'muffins and slices', '/tapa/public/images/menuthumbs/menuthmb21.jpg', 'muffins and slices', 14),
(20, '/tapa/public/images/menuimages/menupix_21.jpg', 'fruit pasteries', '/tapa/public/images/menuthumbs/menuthmb20.jpg', 'fruit pasteries', 16),
(21, '/tapa/public/images/menuimages/menupix_22.jpg', 'cheese and tomato croissants', '/tapa/public/images/menuthumbs/menuthmb22.jpg', 'cheese and tomato croissants', 18);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(10) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) NOT NULL,
  `id_block` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_item`),
  KEY `FK_items_blocks` (`id_block`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_item`, `desc`, `id_block`) VALUES
(1, 'ham & cheese ', 1),
(2, 'ham cheese & salad', 1),
(3, 'chicken avocado & mayo', 1),
(4, 'egg & letttuce', 1),
(5, 'tuna mayo', 1),
(6, 'salad avocado & cheese', 1),
(7, 'salami pesto tomato & tasty cheese', 1),
(8, 'tandoori chicken, riata & spanish onion', 2),
(9, 'smoked salmon, cream cheese, spanish onion & capers', 2),
(10, 'chicken, pistachio, celery & whole egg mayo', 2),
(11, 'rare roast beef, mustard aioli, tomato & rocket', 2),
(12, 'tuna, lemon, olive, capers & rocket', 2),
(14, 'roast pumpkin, pesto, caramalised onion, feta & rocket', 2),
(15, 'ham, brie & caramalised onion', 2),
(16, 'mexican chicken with guacomole, tomato salsa & chipotle', 2),
(17, 'chicken caesar, parmesan & cos lettuce', 2),
(18, 'bacon, egg & mayo', 2),
(19, 'creamy chicken & leek pasta', 3),
(20, 'hearty italian meatballs with pasta', 3),
(21, 'pumpkin & chickpea curry with rice', 3),
(22, 'oven baked gnocchi with pumpkin & blue cheese', 3),
(23, 'hearty lasagne (beef or vegetarian)', 3),
(24, 'asian stir fried noodles', 3),
(25, 'lamb moussaka', 3),
(26, 'spicy thai pumpkin', 4),
(27, 'chicken noodle and vegetable', 4),
(28, 'leek, potato & bacon', 4),
(29, 'minestrone (beef or vegetable)', 4),
(30, 'chicken caeser salad', 5),
(31, 'thai noodle with crunchy veg & fried noodle', 5),
(32, 'roast pumpkin, pinenut & spinach pasta salad', 5),
(33, 'mediterranean vegetable & couscous salad', 5),
(34, 'a selection of fresh breads and homemade dips.', 6),
(35, 'freshly cooked and cured meats, olives, semi dried tomatoes, homemade dips served with turkish bread', 7),
(36, 'mediterranean frittata slice', 8),
(37, 'mushroom arancini', 8),
(38, 'mini beef pies', 8),
(39, 'sausage rolls', 8),
(40, 'mini quiches (a selection of basil & fetta, chicken, asparagus & leek, caramelised onion & brie, tomato & basil)', 8),
(41, 'zucchini & dill fritters with yogurt dressing', 9),
(42, 'smoked salmon blinis with creme fraiche', 9),
(43, 'thai chicken skewers', 9),
(44, 'lamb kofta with tzatziki', 9),
(45, 'mini rare roast beef baguettes', 9),
(46, 'mini goats cheese & proscuitto pizzas', 9),
(47, 'cherry tomato & bocconcini bruschetta', 9),
(48, 'gourmet hotdogs with homemade relish', 10),
(49, 'mini beef burgers with mustard aioli & rocket', 10),
(50, 'a variety of seasonal fresh fruit', 11),
(51, 'a variety of gourmet cheeses served with crusty bread & crackers', 12),
(52, 'homemade muffins baked daily', 13),
(53, 'a combination of homemade muffins & slices', 14),
(54, 'scones with cream & homemade jam', 15),
(55, 'apricot, almond, apple and cherry fruit pastries', 16),
(56, 'plain or chocolate', 17),
(57, 'ham & cheese', 18),
(58, 'cheese & tomato', 18),
(59, 'crispy bacon and egg on a toasted muffin', 19),
(60, 'a delicious variety of large cakes made to order', 20);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_05_27_100322_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Xm4MdvxhbO4Yop4qCkb3k.1aDopwNRVBbf862QWqZgv1TUwXijaFC', 'root', '1', 'CvfaGPSSTfm34NS2WhtERaLhEu44vcMxQ0cY6jY4dzg2ccdivD87rf8BGEW9', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'user', '$2y$10$IDYnP/RC8.yst82Cyucp1Oy98N53fief3UVdc7fdUYkDGFbIMLewy', 'user', '0', 'ilUV0sVevCqwdzJO56UvaqhKOvvEceO8x0dW79vjsDlP9UbK14eTV0cNnsny', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `FK_blocks_categories` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `block_headers`
--
ALTER TABLE `block_headers`
  ADD CONSTRAINT `FK_block_headers_blocks` FOREIGN KEY (`id_block`) REFERENCES `blocks` (`id_block`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imgs`
--
ALTER TABLE `imgs`
  ADD CONSTRAINT `FK_imgs_blocks` FOREIGN KEY (`id_block`) REFERENCES `blocks` (`id_block`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `FK_items_blocks` FOREIGN KEY (`id_block`) REFERENCES `blocks` (`id_block`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
