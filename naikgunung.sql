-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2014 at 03:28 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `naikgunung`
--

-- --------------------------------------------------------

--
-- Table structure for table `ng_member`
--

CREATE TABLE IF NOT EXISTS `ng_member` (
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(75) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pinbb` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` tinyint(5) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ng_member`
--

INSERT INTO `ng_member` (`email`, `nama_lengkap`, `nohp`, `pinbb`, `alamat`, `kodepos`, `password`) VALUES
('$email', '$namalengkap', '$noHP', '$pinBB', '$alamat', 0, '248c4261598771906956764ed7a7b70d'),
('alul.cholil@gmail.com', 'Fachrul CH', '085555', '112233', 'Di rumah bro', 127, '74ee55083a714aa3791f8d594fea00c9'),
('email.coy', 'aaaaaaaaaaa', '2324242', '234242', 'dfsfsfsfs', 127, 'c73aa4f9bdfc15de604d63550e47de5a'),
('hidayat@gmail.com', 'bahur hidayat', '0909077665', '989jhjhjl', 'kosannya dayat', 127, '37f3c4ac0ecd4a50c7f7ea1bd2b017c7'),
('karta@yahoo.com', 'karta wijaya', '090909090', '898jjjk', 'Bekasi city', 127, 'bdae3a2b7b79f31d89cf1e6d58cfa0ec');

-- --------------------------------------------------------

--
-- Table structure for table `ng_order_tmp`
--

CREATE TABLE IF NOT EXISTS `ng_order_tmp` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_session` varchar(50) NOT NULL,
  `order_product` int(5) NOT NULL,
  `order_warna` varchar(25) NOT NULL,
  `order_ukuran` varchar(5) NOT NULL,
  `order_jumlah` int(5) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_email` varchar(100) NOT NULL,
  `order_nama_pembeli` varchar(50) NOT NULL,
  `order_hp` varchar(15) NOT NULL,
  `order_alamat` text NOT NULL,
  `order_zip` int(5) NOT NULL,
  `order_catatan` text NOT NULL,
  `order_cara_pembayaran` char(1) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ng_order_tmp`
--

INSERT INTO `ng_order_tmp` (`order_id`, `order_session`, `order_product`, `order_warna`, `order_ukuran`, `order_jumlah`, `order_time`, `order_email`, `order_nama_pembeli`, `order_hp`, `order_alamat`, `order_zip`, `order_catatan`, `order_cara_pembayaran`) VALUES
(1, 'tesAlul', 1, 'Merah', 'L', 1, '2014-12-04 18:01:26', 'alul@email.com', 'alul', '0855555', 'jl almat rumah ini', 17124, 'kirim cepat bos', 'T'),
(2, 'adfc3ca9948aee775b1f73c4a98d578c', 4, '', '', 1, '2014-12-04 18:14:12', '', '', '', '', 0, '', ''),
(3, 'adfc3ca9948aee775b1f73c4a98d578c', 2, '', 'M', 1, '2014-12-04 18:15:09', '', '', '', '', 0, '', ''),
(4, 'adfc3ca9948aee775b1f73c4a98d578c', 4, '', '', 1, '2014-12-04 18:24:31', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ng_produk`
--

CREATE TABLE IF NOT EXISTS `ng_produk` (
  `produk_id` int(2) NOT NULL AUTO_INCREMENT,
  `produk_category` int(2) NOT NULL,
  `produk_name` varchar(50) NOT NULL,
  `produk_price` int(12) NOT NULL,
  `produk_colour` varchar(50) NOT NULL,
  `produk_size` varchar(5) NOT NULL,
  `produk_stok` int(2) NOT NULL,
  `produk_feature` text NOT NULL,
  `produk_spec` text NOT NULL,
  `produk_img` varchar(50) NOT NULL,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ng_produk`
--

INSERT INTO `ng_produk` (`produk_id`, `produk_category`, `produk_name`, `produk_price`, `produk_colour`, `produk_size`, `produk_stok`, `produk_feature`, `produk_spec`, `produk_img`) VALUES
(1, 1, 'TAS CONSINA - SIERRA NEVADA 40', 525000, 'Merah|Hitam', '', 4, '<ul>\r\n<li>Large Main Compartement</li>\r\n<li>Hydration Compatible</li>\r\n<li>Vertical Front Pocket</li>\r\n<li>Side Mesh Pocket</li>\r\n<li>Sternum Strap</li>\r\n<li>Padded Hip Belt</li>\r\n<li>Reflective 3M</li>\r\n<li>Ice Axe Loops</li>\r\n<li>Raincover</li>\r\n</ul>', '<ul>\r\n<li>Average Weight : 1 Kg</li>\r\n<li>Volume : 20 to 40 Ltr</li>\r\n<li>Dimensions : 30cm x 52cm x 20cm</li>\r\n</ul>', 'tas-consina-sierra-nevada-40.jpg'),
(2, 0, 'TOPI KOMANDO CONSINA', 45000, 'Hijau|Hitam', 'L|M', 15, '', '', 'topi-komando-consina.jpg'),
(3, 3, 'OVERBOARD CAMERA CASE', 205000, '', '', 8, '<ul>\r\n<li>100% waterproof camera case (Class 5)</li>\r\n<li>Will float “most” camera models safely*</li>\r\n<li>LENZFLEX front & back window for ultra clear photos</li>\r\n<li>Guaranteed submersible to 19ft / 6m</li>\r\n<li>Keeps out dust, sand, dirt and water</li>\r\n<li>Made of environmentally-friendly biodegradable thermoplastic polyurethane (TPU)</li>\r\n<li>Fits compact cameras without a telescopic zoom lens and camera phones</li>\r\n</ul>\r\n*Warning: Always test your camera for buoyancy before use and be aware that external environmental factors may affect floatation.', '<ul>\r\n<li>1 x Waterproof Camera Case</li>\r\n<li>1x Neck lanyard</li>\r\n<li>1x Moisture-sensitive desiccant sachet</li>\r\n<li>1x Carabineer clip</li>\r\n<li>1 x Instructions / Care Guide</li>\r\n</ul>', 'overboard-camera-case.jpg'),
(4, 4, 'TENDA CONSINA MAGNUM 6', 1350000, 'Merah', '', 3, '', '<ul>\r\n<li>Size:220cmx270cmx180cm + 100cm</li>\r\n<li>Out : 190T polyester PU COATED</li> \r\n<li>Inner : 170T polyester PA 300MM & Breathable</li>\r\n<li>Floor: PE </li>\r\n<li>Weight : 3.2kgs</li>\r\n<li>Capacity: 6+1 persons</li>\r\n</ul>', 'tenda-consina-magnum-6.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
