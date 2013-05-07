-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 08:41 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Pirate Bay', 'India', '', 21, '2013-05-07 05:12:36', '0000-00-00 00:00:00'),
(2, 'Americaaa', 'Africa', '', 20, '2013-05-07 05:12:47', '0000-00-00 00:00:00'),
(3, 'Indonasia', 'Tunasia', '', 22, '2013-05-07 05:12:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE IF NOT EXISTS `dishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `description`, `image`, `sort_order`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Lisa Victor Products', 'fgdfgdfgsssss', '58f55545eb06b3c3d796f0ec8f6670db.PNG', 1, 1, '2013-05-07 09:40:12', '0000-00-00 00:00:00'),
(2, 'sdsd', 'sdsdsd', '07d89574f76f6c86aa8651d38783564a.PNG', 0, 2, '2013-05-07 10:06:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 'About us', '<p align="justify" class="about_p">Glenna Jean, a family business for over 35 years, specializes in soft textured fabrics and hand-patched bedding. Our extensive fabric inventory includes cut velvets, corduroys, jacquards, dupioni, woven cottons, embroideries and opulent trimmings gathered from across the globe.&nbsp; Combine that with our complete line of coordinating accessories and your baby&#39;s nursery will be transformed into the soft, warm, nurturing environment that babies need.</p>\r\n\r\n<p align="justify" class="about_p">We offer a diverse collection of infant, twin and full bedding designed to satisfy your own unique taste and your baby&#39;s need for comfort and security.&nbsp; Because all of our sewing takes place in the United States, we can closely monitor its quality and construction to bring you the best made product on the market using the highest thread count fabrics.&nbsp; And because our product is designed domestically, our patterns are trend driven so you have access to the latest fashion colors and styles for an extra special nursery.</p>\r\n\r\n<p align="justify" class="about_p">Our complete line of accessories grow with your child.&nbsp; This makes the transition from a nursery to a toddler room an easy one.&nbsp; Simply convert the crib to a bed and replace the nursery linens with our coordinating twin and full bedding.&nbsp; The lamps, rug, wall decor, window treatments, pillows and wall color will match and don&#39;t need to be updated.&nbsp;</p>\r\n\r\n<p align="justify" class="about_p">So from our family to yours, we&#39;d like to say &quot;thank you for choosing Glenna Jean&quot;.&nbsp; You can take comfort in knowing that you have access to the best designed, highest quality bedding available.*&nbsp; When you purchase a Glenna Jean crib bedding set, you are purchasing a lovingly handcrafted product with a rich history, still proudly made in America, in the heart of historic Petersburg, Virginia.</p>\r\n\r\n<p class="about_p_bold"><strong><em>Proud to be a 6 time winner of &quot;Best Bedding&quot; by the readers of Baby &amp; Childrens&#39; Product News.&nbsp; </em></strong></p>', '2013-03-07 04:56:10', '0000-00-00 00:00:00'),
(3, 'FAQ/Contact', '<p align="justify">Q: I don&rsquo;t see any prices listed. How much are your bedding sets?<br />\r\nA: We are the manufacturer and do not sell our products directly. Please visit our store locator section for a list of retailers in your area. They will be able to assist you with pricing information.</p>\r\n\r\n<p align="justify"><br />\r\nQ: Do you make bedding for round cribs?<br />\r\nA: We don&rsquo;t make bedding for round cribs at this time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: I want to have my glider covered to match my baby&rsquo;s nursery. Can I buy fabric by the yard?<br />\r\nA: Almost all of our fabrics are available by the yard for you to customize your nursery. Any of the retailers in our store locator section will be able to assist you with fabric widths and availability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: Are your bedding sets available as separates?<br />\r\nA: Yes, all of our products are available individually.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: Is my Glenna Jean bedding washable?<br />\r\nA: With the exception of items that contain tassel trims, all Glenna Jean bedding is machine washable. Wash items on the GENTLE CYCLE in cold water Use only non-chlorine bleach when needed and LAY FLAT TO DRY.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: I would like sample swatches to see the actual colors and quality of the fabrics used in your products.<br />\r\nA: Fabric swatches are available for $5.00 per set by calling our customer service department @ 804.861.0687.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: Who makes the cribs shown in the Latte, Echo, Tickled Pink and Mod Squad photos?<br />\r\nA: The Latte, Echo and Tickled Pink cribs are from Morigeau-Lepine, while the Mod Squad crib was fabricated by our design team for the photo and is not commercially available.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: Your tag line says &ldquo;Made for Life&rdquo;. Does that mean your products are guaranteed forever?<br />\r\nA: While the utmost care goes into the construction and design of every Glenna Jean product, (we have had customers pass their Glenna Jean bedding on to their children&rsquo;s children) they are not guaranteed forever. They are guaranteed from defects in workmanship from 90 days from shipment.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>Contact Info</h1>\r\n\r\n<p align="left"><span class="subtitles">Glenna Jean </span><br />\r\n<span class="tekst2">PO Box 2187,<br />\r\nPetersburg, Virginia, 23804 </span><br /> <span class="subtitles">Contact No. (804) 861-0687</span></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>', '2013-03-07 23:04:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'hm=Home page Slider',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `description`, `category`, `created_at`) VALUES
(14, 'e8156343ad81d181e3615193d28a2aec.jpg', '', 'hm', '2013-03-01 08:47:05'),
(15, 'ed20078a58e20028f4b62c1061598be5.jpg', '', 'hm', '2013-03-01 08:47:13'),
(16, 'ca0d598f691cb373402a2a54a558c5a2.jpg', '', 'hm', '2013-03-01 08:47:21'),
(18, '82168b1b8bef4cfc19753062d16fef06.jpg', '', 'hm', '2013-03-01 10:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE IF NOT EXISTS `special` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `name`, `description`, `image`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'asdasddfgdg', 'asdasdadfgdfg', '9a3a473daeb65f8f4c41255d3401ff6c.jpg', 0, '2013-05-07 12:05:57', '0000-00-00 00:00:00'),
(2, 'Dosa', 'sdasdasd', '1f4cc955ee24495a8e829341bc59bd54.PNG', 1, '2013-05-07 16:56:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(1) NOT NULL COMMENT 'A=Admin,S=Super Admin',
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_loggedin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `username`, `email`, `password`, `last_loggedin`) VALUES
(1, 'S', '01sys', 'Demo@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2013-02-26 16:28:27'),
(2, 'S', 'bandyworks', 'ami@bandyworks.com', '7e9ab5c5b7475f9ef8a9923f42e0fb2d921c006a', '2013-03-13 09:52:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
