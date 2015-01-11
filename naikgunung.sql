-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2015 at 03:25 AM
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
-- Table structure for table `accounts`
--
drop TABLE `accounts`; 
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `cc` varchar(16) DEFAULT NULL,
  `expired` date DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `transaction` decimal(11,2) DEFAULT NULL,
  `message` varchar(140) DEFAULT NULL,
  `balance` decimal(11,2) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account`, `name`, `mobile`, `cc`, `expired`, `otp`, `transaction`, `message`, `balance`, `created`, `modified`, `status`) VALUES
(1, '1122334455', 'Mercu Buana', '0987654321', '0125025003754100', '2014-07-31', 8789, 4000000.00, NULL, 100000000.00, '2014-04-06 07:55:56', NULL, 1),
(2, '6655443322', 'Buana Mercu', '0987654322', '1111222233334444', '2014-07-31', 8990, NULL, NULL, NULL, '2014-04-06 08:20:30', NULL, 1),
(3, '98989898', 'FACHRUL CH', '08555555555555', '777000777', '2015-01-15', NULL, NULL, NULL, 999999999.00, '2014-11-30 16:37:09', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--
drop table `merchants`;
CREATE TABLE IF NOT EXISTS `merchants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `apikey` varchar(16) DEFAULT NULL,
  `url_inquiry` varchar(256) DEFAULT NULL,
  `url_payment` varchar(256) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=778 ;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `name`, `apikey`, `url_inquiry`, `url_payment`, `created`, `modified`, `status`) VALUES
(1, 'Mercu Buana', '0125025003754100', 'http://localhost/ecomm/bank_inquiry.php', 'http://localhost/ecomm/bank_payment.php', '2014-04-06 00:55:56', NULL, 1),
(2, 'Buana Mercu', '1111222233334444', 'http://localhost/ecomm/bank_inquiry.php', 'http://localhost/ecomm/bank_payment.php', '2014-04-06 01:20:30', NULL, 1),
(777, 'Naikgunung', '777000', 'http://fachrul.net/naikgunung/bank_inquiry.php', 'http://fachrul.net/naikgunung/bank_payment.php', '2014-12-14 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ng_member`
--
drop table `ng_member`;
CREATE TABLE IF NOT EXISTS `ng_member` (
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(75) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pinbb` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` tinyint(5) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ng_member`
--

INSERT INTO `ng_member` (`email`, `nama_lengkap`, `nohp`, `pinbb`, `alamat`, `kodepos`, `password`, `tanggal`) VALUES
('$email', '$namalengkap', '$noHP', '$pinBB', '$alamat', 0, '248c4261598771906956764ed7a7b70d', '0000-00-00 00:00:00'),
('alul.cholil@gmail.com', 'Fachrul CH', '085555', '112233', 'Di rumah bro', 127, '74ee55083a714aa3791f8d594fea00c9', '0000-00-00 00:00:00'),
('email.coy', 'aaaaaaaaaaa', '2324242', '234242', 'dfsfsfsfs', 127, 'c73aa4f9bdfc15de604d63550e47de5a', '0000-00-00 00:00:00'),
('ernest', 'Ernest', '09890', '989kk00', 'jl alamat ernest', 127, '1e79137d72df1a869094070b2e602156', '0000-00-00 00:00:00'),
('garuda', 'garuda', '1232321123', '123b3434', 'jl alamat', 127, '586293e168054f480d08e30fba98c295', '0000-00-00 00:00:00'),
('hidayat@gmail.com', 'bahur hidayat', '0909077665', '989jhjhjl', 'kosannya dayat', 127, '37f3c4ac0ecd4a50c7f7ea1bd2b017c7', '0000-00-00 00:00:00'),
('inzaghi', 'inzaghi', '0878', 'i9799j', 'jl alamat inzaghi', 127, '8d64c98e66978ff7e0b6f195ce2d0d0c', '2014-12-27 16:05:22'),
('Jagur', 'Jagur', '82080', '989sd98', 'jl alamat', 127, '83abd9248e34933969c88990397680ca', '0000-00-00 00:00:00'),
('karta@yahoo.com', 'karta wijaya', '090909090', '898jjjk', 'Bekasi city', 127, 'bdae3a2b7b79f31d89cf1e6d58cfa0ec', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ng_order`
--
drop table ng_order;
CREATE TABLE IF NOT EXISTS `ng_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_session` varchar(50) NOT NULL,
  `order_va` varchar(12) NOT NULL,
  `order_cc_no` varchar(15) NOT NULL,
  `order_cc_name` varchar(50) NOT NULL,
  `order_cc_exp` date NOT NULL,
  `order_total` int(20) NOT NULL,
  `order_paid` char(1) NOT NULL DEFAULT '0',
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_email` varchar(100) NOT NULL,
  `order_cara_pembayaran` char(1) NOT NULL,
  `order_member` varchar(50) NOT NULL DEFAULT 'non',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_session` (`order_session`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ng_order`
--

INSERT INTO `ng_order` (`order_id`, `order_session`, `order_va`, `order_cc_no`, `order_cc_name`, `order_cc_exp`, `order_total`, `order_paid`, `order_time`, `order_email`, `order_cara_pembayaran`, `order_member`) VALUES
(1, 'eb7673eb45efabd3c4bb7dee7948a2a8', '7778170806', '', '', '2015-01-03', 146000, '1', '2015-01-02 17:06:21', 'email@gmail.com', 'A', 'ernest'),
(2, '6d789991d1bcf6620a9a366c77eca8e3', '7772272702', '', '', '0000-00-00', 261000, '0', '2014-12-27 17:30:06', '', 'A', 'ernest'),
(3, '2b2151a3ea911dca504ae30122561b61', '7771876689', '', '', '0000-00-00', 131000, '1', '2014-12-21 07:35:47', '', 'A', 'non'),
(6, '119d4d433eb2230c54b2765ee8834c97', '', '', '', '0000-00-00', 7126500, '0', '2014-12-27 19:05:22', 'email@gmail.com', 'C', 'ernest'),
(10, '86c9ecd4e6ca9f0dd6b9efaa07700d53', '', '111222333444', 'SAMSUL', '2015-02-24', 381990, '0', '2015-01-02 18:26:10', 'asoy', 'C', 'non'),
(11, '22401d6ead0285e06fb7d595f2a88991', '', '111222333444', 'Firefox', '2015-02-28', 251000, '1', '2015-01-02 18:32:07', '', 'C', 'non'),
(13, 'a52bebcdc9fb87a124bad59a7fc542d2', '', '', '', '0000-00-00', 156000, '0', '2015-01-02 18:53:25', 'email@gmail.com', 'C', 'non'),
(16, '01f6b12f7050229e45f8a5be5d2b3364', '', '111222333444', 'Tigabelqs', '2015-02-28', 372000, '1', '2015-01-02 18:59:44', 'email@gmail.com', 'C', 'non'),
(17, 'db8016d3387c0152ed9a3693f05ebd59', '', '111222333444', 'Empat belae', '2015-02-28', 736000, '1', '2015-01-02 19:05:47', 'email@gmail.com', 'C', 'non'),
(18, 'a4b048a537b786d4c0bbf0b6f0db9671', '7772783563', '', '', '0000-00-00', 311000, '0', '2015-01-10 14:13:19', 'lawson@gmail.com', 'A', 'non');

-- --------------------------------------------------------

--
-- Table structure for table `ng_order_tmp`
--
drop table ng_order_tmp;
CREATE TABLE IF NOT EXISTS `ng_order_tmp` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_session` varchar(50) NOT NULL,
  `order_product` int(5) NOT NULL,
  `order_warna` varchar(25) DEFAULT NULL,
  `order_ukuran` varchar(5) DEFAULT NULL,
  `order_jumlah` int(5) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_email` varchar(100) NOT NULL,
  `order_nama_pembeli` varchar(50) NOT NULL,
  `order_hp` varchar(15) NOT NULL,
  `order_alamat` text NOT NULL,
  `order_zip` int(5) NOT NULL,
  `order_catatan` text NOT NULL,
  `order_cara_pembayaran` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `ng_order_tmp`
--

INSERT INTO `ng_order_tmp` (`order_id`, `order_session`, `order_product`, `order_warna`, `order_ukuran`, `order_jumlah`, `order_time`, `order_email`, `order_nama_pembeli`, `order_hp`, `order_alamat`, `order_zip`, `order_catatan`, `order_cara_pembayaran`) VALUES
(1, 'tesAlul', 1, 'Merah', 'L', 1, '2014-12-04 18:01:26', 'alul@email.com', 'alul', '0855555', 'jl almat rumah ini', 17124, 'kirim cepat bos', 'T'),
(2, 'adfc3ca9948aee775b1f73c4a98d578c', 4, '', '', 1, '2014-12-04 18:14:12', '', '', '', '', 0, '', ''),
(3, 'adfc3ca9948aee775b1f73c4a98d578c', 2, '', 'M', 1, '2014-12-04 18:15:09', '', '', '', '', 0, '', ''),
(4, 'adfc3ca9948aee775b1f73c4a98d578c', 4, '', '', 1, '2014-12-04 18:24:31', '', '', '', '', 0, '', ''),
(5, '69441dd39428ebf1adf2eb23880928f2', 2, 'Hitam', 'M', 2, '2014-12-07 02:33:15', '', '', '', '', 0, '', ''),
(6, '69441dd39428ebf1adf2eb23880928f2', 4, '', '', 1, '2014-12-07 02:47:32', '', '', '', '', 0, '', ''),
(7, '69441dd39428ebf1adf2eb23880928f2', 1, '', '', 4, '2014-12-07 03:44:36', '', '', '', '', 0, '', ''),
(8, '0e77c803aeef4c350219dcc5ec41ee43', 2, 'Hijau', 'M', 1, '2014-12-07 06:41:09', '', '', '', '', 0, '', ''),
(9, '0e77c803aeef4c350219dcc5ec41ee43', 1, 'Hitam', '', 4, '2014-12-07 06:41:40', '', '', '', '', 0, '', ''),
(10, '57eb8ae21d28a0dbb11a1361e06af6f0', 8, '', '', 2, '2014-12-13 20:00:09', 'dlkjfalk@kjalkfjla', 'Susilo', '24234242', 'jl alamat palse', 28392, 'sfafahfhdgd', 'C'),
(11, 'a830c32797a7ab8cd6e08172a7db367e', 1, 'Merah', '', 3, '2014-12-13 19:28:28', '', '', '', '', 0, '', ''),
(12, 'a830c32797a7ab8cd6e08172a7db367e', 4, 'Merah', '', 3, '2014-12-13 19:28:56', '', '', '', '', 0, '', ''),
(13, 'eb7673eb45efabd3c4bb7dee7948a2a8', 2, 'Hijau', 'XL', 2, '2014-12-14 08:36:01', 'email@gmail.com', 'Tes ajah', '111111', 'tes nih coy', 1712345, 'dikirim ke alamat diatas', 'A'),
(14, 'eb7673eb45efabd3c4bb7dee7948a2a8', 2, 'Hitam', 'M', 1, '2014-12-14 08:36:01', 'email@gmail.com', 'Tes ajah', '111111', 'tes nih coy', 1712345, 'dikirim ke alamat diatas', 'A'),
(15, 'b95b47c2fcb31fefeea03e83c1d575db', 9, 'Hitam,', '', 3, '2014-12-14 06:45:48', '', '', '', '', 0, '', ''),
(16, 'b95b47c2fcb31fefeea03e83c1d575db', 2, 'Hijau', 'S', 2, '2014-12-14 06:47:23', '', '', '', '', 0, '', ''),
(17, '6d789991d1bcf6620a9a366c77eca8e3', 48, '', '', 1, '2014-12-18 16:09:57', 'email@gmail.com', 'Pembeli Baru uuuu', '9028402830', 'Pembeli Baru', 9238, 'Ini adalah catatan coy', 'C'),
(18, '6d789991d1bcf6620a9a366c77eca8e3', 26, 'hitam', '', 1, '2014-12-18 16:12:48', '', '', '', '', 0, '', 'A'),
(19, '23e04e2a12ad73545ec189a6128220a8', 28, 'Merah', '', 1, '2014-12-20 13:46:26', 'email@gmail.com', 'Acha acha', '94203480', 'Acha acha', 234242, 'catanan ajah ini', 'C'),
(20, '23e04e2a12ad73545ec189a6128220a8', 37, 'Hitam', '', 3, '2014-12-20 13:46:26', 'email@gmail.com', 'Acha acha', '94203480', 'Acha acha', 234242, 'catanan ajah ini', 'C'),
(21, '06120b96fde0d254d62df7e4e7c17c86', 21, 'Hitam', '', 2, '2014-12-20 19:22:17', 'alul.cholil@yahoo.com', 'namaaaaaaaaa', '2133131123', 'namaaaaaa', 213131, 'oke', 'C'),
(22, '06120b96fde0d254d62df7e4e7c17c86', 8, '', '', 2, '2014-12-20 19:22:17', 'alul.cholil@yahoo.com', 'namaaaaaaaaa', '2133131123', 'namaaaaaa', 213131, 'oke', 'C'),
(23, '06120b96fde0d254d62df7e4e7c17c86', 22, 'Hitam', '', 4, '2014-12-20 19:22:17', 'alul.cholil@yahoo.com', 'namaaaaaaaaa', '2133131123', 'namaaaaaa', 213131, 'oke', 'C'),
(24, '2b2151a3ea911dca504ae30122561b61', 28, 'Merah', '', 2, '2014-12-21 07:34:09', '', '', '', '', 0, '', 'A'),
(25, '6f539cd29a6b71a7c4a9737f616618c6', 41, '', '', 5, '2014-12-23 17:31:52', 'spiderman@gmail.com', 'Spiderman', '08080809', 'Amerika', 89898, 'Segera gan', 'C'),
(26, '6f539cd29a6b71a7c4a9737f616618c6', 38, 'silver', '', 1, '2014-12-23 17:31:52', 'spiderman@gmail.com', 'Spiderman', '08080809', 'Amerika', 89898, 'Segera gan', 'C'),
(27, '9b1850a5afadee47900fb3ac280c58b3', 23, 'Abu-Abu', '', 5, '2014-12-24 16:37:04', '', '', '', '', 0, '', 'A'),
(28, 'df9d493f2f28d12344ec175d15b3bccd', 23, 'Abu-Abu', '', 3, '2014-12-26 17:03:53', 'alul.cholil@gmail.com', 'Ahmad Sai', '979798734', 'Ahmad Sa', 9837549, 'kirim gan', 'C'),
(29, 'df9d493f2f28d12344ec175d15b3bccd', 23, 'Abu-Abu', '', 3, '2014-12-26 17:03:53', 'alul.cholil@gmail.com', 'Ahmad Sai', '979798734', 'Ahmad Sa', 9837549, 'kirim gan', 'C'),
(30, 'df9d493f2f28d12344ec175d15b3bccd', 45, 'silver', '', 2, '2014-12-26 17:03:53', 'alul.cholil@gmail.com', 'Ahmad Sai', '979798734', 'Ahmad Sa', 9837549, 'kirim gan', 'A'),
(31, 'df9d493f2f28d12344ec175d15b3bccd', 29, 'hitam', '', 1, '2014-12-26 17:03:53', 'alul.cholil@gmail.com', 'Ahmad Sai', '979798734', 'Ahmad Sa', 9837549, 'kirim gan', 'A'),
(32, 'd0688ea55e3db0dfbaa4f77ac0b66867', 42, 'Hitam', '', 5, '2014-12-27 03:57:02', '', '', '', '', 0, '', 'C'),
(33, 'd0688ea55e3db0dfbaa4f77ac0b66867', 25, 'Mrah', '', 5, '2014-12-27 03:57:02', '', '', '', '', 0, '', 'C'),
(34, 'b345a54cf6427bb934a4c2609fbd7c67', 23, 'Abu-Abu', '', 3, '2014-12-27 18:40:41', 'ernest@gmail.com', 'Ernest', '098789', 'jl alamat ernest', 90979, 'kirim segera gan', 'A'),
(35, '119d4d433eb2230c54b2765ee8834c97', 39, 'coklat', '', 5, '2014-12-27 19:05:22', 'email@gmail.com', 'Neng Maya', '123124324', 'jl alamat', 21313, 'oke siap', 'C'),
(36, '86c9ecd4e6ca9f0dd6b9efaa07700d53', 41, '', '', 1, '2015-01-02 18:42:14', 'asoy', 'Samsung', '08527785', 'Samsung', 4580, 'Oke siao kirim', 'C'),
(37, '22401d6ead0285e06fb7d595f2a88991', 14, '', 'M', 1, '2015-01-02 17:16:01', '', '', '', '', 0, '', 'C'),
(38, '22401d6ead0285e06fb7d595f2a88991', 14, '', 'M', 1, '2015-01-02 17:16:01', '', '', '', '', 0, '', 'C'),
(39, '86c9ecd4e6ca9f0dd6b9efaa07700d53', 35, 'Merah', '', 3, '2015-01-02 18:43:15', '', '', '', '', 0, '', 'C'),
(40, 'a52bebcdc9fb87a124bad59a7fc542d2', 47, 'hitam', '', 1, '2015-01-02 18:53:25', 'email@gmail.com', 'Testing duabelas', '0855585', 'Testing duabelas', 1258, 'Oke kirim', 'C'),
(41, '01f6b12f7050229e45f8a5be5d2b3364', 48, 'hitam', '', 1, '2015-01-02 18:58:42', 'email@gmail.com', 'testing tigabelas', '085288', 'JJJ', 5888, '', 'C'),
(42, '01f6b12f7050229e45f8a5be5d2b3364', 7, 'Kuning', 'M', 1, '2015-01-02 18:58:42', 'email@gmail.com', 'testing tigabelas', '085288', 'JJJ', 5888, '', 'C'),
(43, 'db8016d3387c0152ed9a3693f05ebd59', 10, 'Hitam', '', 1, '2015-01-02 19:05:03', 'email@gmail.com', 'testing empat belas', '85850', 'Alamat', 81045, '', 'C'),
(44, 'db8016d3387c0152ed9a3693f05ebd59', 23, 'Abu-Abu', '', 1, '2015-01-02 19:05:03', 'email@gmail.com', 'testing empat belas', '85850', 'Alamat', 81045, '', 'C'),
(45, '75ae150c442d8d4a75323f225a669e70', 41, '', '', 1, '2015-01-02 19:06:15', '', '', '', '', 0, '', 'A'),
(46, '70ded467ded3846e0844c2c2002ed4b0', 28, 'Merah', '', 1, '2015-01-04 12:51:51', '', '', '', '', 0, '', 'A'),
(47, '70ded467ded3846e0844c2c2002ed4b0', 47, 'hitam', '', 1, '2015-01-04 14:07:22', '', '', '', '', 0, '', 'A'),
(48, 'a4b048a537b786d4c0bbf0b6f0db9671', 8, '', '', 2, '2015-01-10 14:13:06', 'lawson@gmail.com', 'Lawson', '909090909', 'jl meruya', 2398, '', 'A'),
(49, '6486aa8fe1a7ee9fdcc26f30fd2d5af5', 4, 'Kuning', '', 1, '2015-01-11 01:58:54', '', '', '', '', 0, '', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `ng_produk`
--
drop table ng_produk;
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
  `produk_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `produk_deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `ng_produk`
--

INSERT INTO `ng_produk` (`produk_id`, `produk_category`, `produk_name`, `produk_price`, `produk_colour`, `produk_size`, `produk_stok`, `produk_feature`, `produk_spec`, `produk_img`, `produk_date`, `produk_deskripsi`) VALUES
(1, 6, 'TAS CONSINA - SIERRA NEVADA 40', 525000, 'Merah, Hitam', '', 4, '<ul>\r\n<li>Large Main Compartement</li>\r\n<li>Hydration Compatible</li>\r\n<li>Vertical Front Pocket</li>\r\n<li>Side Mesh Pocket</li>\r\n<li>Sternum Strap</li>\r\n<li>Padded Hip Belt</li>\r\n<li>Reflective 3M</li>\r\n<li>Ice Axe Loops</li>\r\n<li>Raincover</li>\r\n</ul>', '<ul>\r\n<li>Average Weight : 1 Kg</li>\r\n<li>Volume : 20 to 40 Ltr</li>\r\n<li>Dimensions : 30cm x 52cm x 20cm</li>\r\n</ul>', 'tas-consina-sierra-nevada-40.jpg', '2014-11-30 17:00:00', 'Tas yg paling diminati tahun 2014!'),
(2, 1, 'TOPI KOMANDO CONSINA', 45000, 'Hijau, Hitam', 'L,M', 15, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'topi-komando-consina.jpg', '2014-12-01 17:00:00', 'Topi ini adalah topi...................'),
(3, 5, 'OVERBOARD CAMERA CASE', 205000, '', '', 8, '<ul>\r\n<li>100% waterproof camera case (Class 5)</li>\r\n<li>Will float “most” camera models safely*</li>\r\n<li>LENZFLEX front & back window for ultra clear photos</li>\r\n<li>Guaranteed submersible to 19ft / 6m</li>\r\n<li>Keeps out dust, sand, dirt and water</li>\r\n<li>Made of environmentally-friendly biodegradable thermoplastic polyurethane (TPU)</li>\r\n<li>Fits compact cameras without a telescopic zoom lens and camera phones</li>\r\n</ul>\r\n*Warning: Always test your camera for buoyancy before use and be aware that external environmental factors may affect floatation.', '<ul>\r\n<li>1 x Waterproof Camera Case</li>\r\n<li>1x Neck lanyard</li>\r\n<li>1x Moisture-sensitive desiccant sachet</li>\r\n<li>1x Carabineer clip</li>\r\n<li>1 x Instructions / Care Guide</li>\r\n</ul>', 'overboard-camera-case.jpg', '2014-12-02 17:00:00', 'Case tahan air yg akan membuat aktifitas outdoor anda semakin leluasa'),
(4, 3, 'TENDA CONSINA MAGNUM 6', 1350000, 'Merah, Kuning, Hitam', '', 3, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '<ul>\r\n<li>Size:220cmx270cmx180cm + 100cm</li>\r\n<li>Out : 190T polyester PU COATED</li> \r\n<li>Inner : 170T polyester PA 300MM & Breathable</li>\r\n<li>Floor: PE </li>\r\n<li>Weight : 3.2kgs</li>\r\n<li>Capacity: 6+1 persons</li>\r\n</ul>', 'tenda-consina-magnum-6.jpg', '2014-12-03 17:00:00', 'Tenda kokoh dari merek ternama Consina'),
(7, 1, 'TREKKING POLE', 111000, 'Kuning,', 'S', 10, 'Trekking Pole Keren', '', 'trekking-pole-exponent-consina.jpg', '2014-12-06 17:00:00', ''),
(8, 3, 'COOCING SET', 150000, '', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'cooking-set-consina-masterchef-4.jpg', '2014-12-08 17:25:41', 'Set alat masak, terbuat dari stainless steel anti karat'),
(9, 6, 'TAS GADGET MOLOKINI', 99000, 'Hitam, Merah', '', 10, 'bahan kuat ga gampang rusak', 'berat 500 g', 'tas-gadget-molokini-2.jpg', '2014-12-08 17:27:39', 'Tas trendy untuk gadget anda'),
(10, 6, 'TAS CONSINA WARLOCK', 550000, 'Hitam', '', 10, 'Kapasitas 45 L', 'Berat bersih 1 kg', 'tas-consina-warlock.jpg', '2014-12-08 17:34:43', 'Tas Kuat yg mampu menemani perjalanan anda menaiki gunung manapun'),
(12, 7, 'Jam Tangan Outdoor SUNROAD - 821B', 850000, 'Hitam', '', 10, 'Sports watch FR821B is designed special for mountaineer team, outdoor fans, traveling fans. It combines altimeter, barometer, compass, pedometer, world time, weather forecast, countdown timer, stop watch, time and date etc. ', '', 'jam-tangan-outdoor-sunroad-821b.jpg', '2014-12-14 07:00:44', 'Jam Tangan Outdoor SUNROAD - 821B'),
(14, 2, 'CONSINA GLOVES FULL FINGER D1', 120000, 'Hitam', 'M,L,X', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'consina-gloves-full-finger-d1.jpg', '2014-12-14 07:02:57', '2 item dalam persediaan  Berat Barang : 1Kg  Pemberitahuan: Item terakhir yang ada dalam stok'),
(15, 7, 'Jam Tangan Outdoor SUNROAD - 820A', 850, 'hitam kuning', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', 'FR820A Sports watch is designed special for mountaineer team, outdoor fans, traveling fans. It combines altimeter, barometer, compass, pedometer, world time, weather forecast, countdown timer, stop watch, time and date etc.', 'jam-tangan-outdoor-sunroad-820a.jpg', '2014-12-14 07:04:26', 'Jam Tangan Outdoor SUNROAD - 820A'),
(16, 2, 'Consina Gloves Full Finger D2', 120000, 'Hitam', 'M,L', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'consina-gloves-full-finger-d2.jpg', '2014-12-14 07:05:59', ''),
(17, 7, 'Jam Tangan Outdoor SUNROAD - 802B', 1000, 'silver,Hijau, Hitam', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', 'FR802B Sports watch is designed special for mountaineer team, outdoor fans, traveling fans. It combines altimeter, barometer, compass, pedometer, world time, weather forecast, countdown timer, stop watch, time and date etc. ', 'jam-tangan-outdoor-sunroad-802b.jpg', '2014-12-14 07:07:39', 'Jam Tangan Outdoor SUNROAD - 802B'),
(18, 2, 'Consina Gloves Half Finger D1', 110000, 'Hitam', 'M,L,X', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'consina-gloves-half-finger-d1.jpg', '2014-12-14 07:08:05', '6 item dalam persediaan '),
(19, 7, 'Jam Tangan Outdoor SUNROAD - 802A', 1000, 'hitam,silver,hijau', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', 'FR802A Sports watch is designed special for mountaineer team, outdoor fans, traveling fans. It combines altimeter, barometer, compass, pedometer, world time, weather forecast, countdown timer, stop watch, time and date etc. ', 'jam-tangan-outdoor-sunroad-802a.jpg', '2014-12-14 07:09:31', 'Jam Tangan Outdoor SUNROAD - 802A'),
(20, 2, 'Consina Gloves Half Finger D2', 110000, 'Hitam', 'M,L,X', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'consina-gloves-half-finger-d2.jpg', '2014-12-14 07:10:56', ''),
(21, 5, 'Overboard Waist Packs - 3 litre', 345, 'Hitam', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', 'Our Black Waterproof Waist Pack is the safe way to take small valuables out with you in wet conditions, featuring a handy roll top design for easy access and a removable dry mesh belt so you can strap it to your own belt or pack.', 'overboard-waist-packs-3-litre.jpg', '2014-12-14 07:13:50', 'Overboard Waist Packs - 3 litre'),
(22, 5, 'Overboard Camera Case', 205, 'Hitam,Putih', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', 'Transform your compact camera into an underwater model with the OverBoard Waterproof Camera Case, guaranteed submersible to 19ft / 6m and offering protection from sand and dirt as well.', 'overboard-camera-case.jpg', '2014-12-14 07:16:04', 'Overboard Camera Case'),
(23, 3, 'CONSINA Sleeping Bag - SWEET DREAM', 175000, 'Abu-Abu', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'consina-sweet-dream.jpg', '2014-12-14 07:16:29', 'Sleeping Bag tebal dan nyaman untuk anda sang petualang'),
(24, 5, 'Overboard Zoom Camera Case', 285000, 'Hitam', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', 'Transform your zoom lens camera into an underwater model with the OverBoard Waterproof Zoom Lens Camera Case, guaranteed submersible to 19ft / 6m and offering protection from sand and dirt as well.', 'overboard-zoom-camera-case.jpg', '2014-12-14 07:18:14', 'Overboard Zoom Camera Case'),
(25, 3, 'CONSINA Sleeping Bag - EXPEDITION', 260000, 'Mrah', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'sleeping-bag-sleep-warmer.jpg', '2014-12-14 07:20:17', 'Tidur anda makin nyenyak'),
(26, 7, 'Jam Tangan Outdoor SUNROAD - 820A', 850000, 'hitam kuning', '', 10, 'FR820A Sports watch is designed special for mountaineer team, outdoor fans, traveling fans. It combines altimeter, barometer, compass, pedometer, world time, weather forecast, countdown timer, stop watch, time and date etc. ', '', 'jam-tangan-outdoor-sunroad-820a.jpg', '2014-12-14 07:21:47', 'Jam Tangan Outdoor SUNROAD - 820A'),
(27, 7, 'Jam Tangan Outdoor SUNROAD - 802B', 1000000, 'silver,Hijau, Hitam', '', 10, 'FR802B Sports watch is designed special for mountaineer team, outdoor fans, traveling fans. It combines altimeter, barometer, compass, pedometer, world time, weather forecast, countdown timer, stop watch, time and date etc. ', '', 'jam-tangan-outdoor-sunroad-802b.jpg', '2014-12-14 07:23:29', 'Jam Tangan Outdoor SUNROAD - 802B'),
(28, 3, 'Consina - Folding Stool', 60000, 'Merah,Biru', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'consina-folding-stool.jpg', '2014-12-14 07:25:00', ''),
(29, 7, 'Jam Tangan Outdoor SUNROAD - 802A', 1000000, 'hitam,silver,hijau', '', 10, 'FR802A Sports watch is designed special for mountaineer team, outdoor fans, traveling fans. It combines altimeter, barometer, compass, pedometer, world time, weather forecast, countdown timer, stop watch, time and date etc. ', '', 'jam-tangan-outdoor-sunroad-802a.jpg', '2014-12-14 07:25:04', 'Jam Tangan Outdoor SUNROAD - 802A'),
(30, 5, 'Overboard Smart Phone Case', 275000, 'Hitam', '', 10, 'Want full use of your smart phone while protecting it from water, sand, dirt and dust? The OverBoard Waterproof Smart Phone Case gives you exactly that.', '', 'overboard-smart-phone-case.jpg', '2014-12-14 07:27:30', 'Overboard Smart Phone Case'),
(31, 3, 'Consina - Camping Folding Utensil Set', 95000, '', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'consina-camping-folding-utensil-set.jpg', '2014-12-14 07:28:18', ''),
(33, 5, 'Overboard PSP/GPS Case', 250000, 'putih', '', 10, 'Super-versatile, this product works as a waterproof GPS case, a waterproof PSP case, or a waterproof phone case for large and flip phones. Perfect for water-based sports, it protects devices from water and dirt while allowing full use of the controls.', '', 'overboard-psp-gps-case.jpg', '2014-12-14 07:32:32', 'Overboard PSP/GPS Case'),
(34, 8, 'VICTORINOX Classic LE2011 Sunset Hills ', 196650, 'Merah', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '7 Tools Function, Stainless Steel', 'VICTORINOX-Classic-LE2011-Sunset-Hills-[0-6223-L11', '2014-12-14 07:36:06', ''),
(35, 8, 'VICTORINOX Classic LE2011 Sunset Hills ', 196650, 'Merah', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '7 Tools Function, Stainless Steel', 'VICTORINOX-Classic-LE2011.jpg', '2014-12-14 07:40:43', ''),
(36, 5, 'Overboard Small Phone Case', 250000, 'Hitam', '', 10, 'Water, sand, dirt or dust; the small OverBoard Waterproof Phone Case protects small phones from all of it while giving you full use of your phone.', '', 'overboard-small-phone-case.jpg', '2014-12-14 07:41:24', 'Overboard Small Phone Case'),
(37, 5, 'Overboard Pro-Sports Arm Pack', 270000, 'Hitam', '', 10, 'The OverBoard Waterproof Arm Pack is the perfect way to take your phone, keys, cash and credit cards with you and protect them on the water or during other sports activities, like running.', '', 'overboard-pro-sports-arm-pack.jpg', '2014-12-14 07:48:44', 'Overboard Pro-Sports Arm Pack'),
(38, 8, 'LEATHERMAN Wingman ', 511100, 'silver', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'LEATHERMAN-Wingman.jpg', '2014-12-14 07:50:04', ''),
(39, 8, 'LEATHERMAN- OHT', 1423100, 'coklat', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'LEATHERMAN-OHT.jpg', '2014-12-14 07:55:23', ''),
(40, 8, 'VICTORINOX Compact Swiss Army', 407550, 'Merah', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'VICTORINOX-Compact-Swiss-Army.jpg', '2014-12-14 08:01:46', 'Compact Swiss Army Knife Ukuran L, 5 Fungsi'),
(41, 8, 'baladeo', 370990, '', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'baladeo.jpg', '2014-12-14 08:09:18', 'Ini adalah multi alat serbaguna yang mengukur 5 x 1 x 0,75 inci, dan dirancang untuk menawarkan cara'),
(42, 7, 'Overboard Waterproof Earphones', 300000, 'Hitam', '', 10, 'Take your tunes out on the water with these Black OverBoard Waterproof Earphones, featuring great sound quality above and below the waterline.', '', 'overboard-waterproof-earphones.jpg', '2014-12-14 08:11:14', 'Overboard Waterproof Earphones'),
(43, 7, 'Overboard Zoom Camera Case', 285000, 'hitam', '', 10, 'Transform your zoom lens camera into an underwater model with the OverBoard Waterproof Zoom Lens Camera Case, guaranteed submersible to 19ft / 6m and offering protection from sand and dirt as well.', '', 'overboard-zoom-camera-case.jpg', '2014-12-14 08:13:22', 'Overboard Zoom Camera Case'),
(44, 5, 'Overboard Camera Case', 205000, 'Hitam', '', 10, 'Transform your compact camera into an underwater model with the OverBoard Waterproof Camera Case, guaranteed submersible to 19ft / 6m and offering protection from sand and dirt as well.', '', 'overboard-camera-case.jpg', '2014-12-14 08:15:17', 'Overboard Camera Case'),
(45, 8, 'MULTI TOOLS HAMMER', 110000, 'silver', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', 'Lebar kepala palu 9 cm\r\nPanjang palu 16,5 cm\r\nDiameter bulatan palu 2 cm\r\nTebal gagang/pegangan (kayu warna coklat) 2 cm\r\nbonus sarung buat di sabuk\r\n\r\n', 'MULTI TOOLS HAMMER.jpg', '2014-12-14 08:19:17', 'alat ini sangat praktis dan multifungsi untuk di bawa kemanapun bahan dasar terbuat dari bahan stain'),
(46, 3, 'Consina - Camping Tool Set', 145000, 'Silver', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', '', 'consina-camping-tool-set.jpg', '2014-12-14 08:26:07', ''),
(47, 3, 'SLEEPING BAG KARRIMOR ', 145000, 'Merah,biru,hitam,kuning', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', ' Spesifikasi:\r\nBahan luar                   : nilon/taslan/parasut \r\nBahan dalam               : double/ rangkap polar + dacron\r\nukuran terselimut      : 195 x 70 Cm\r\nukuran bentang max : 195 x 140 Cm\r\nBerat                           : 800 g\r\nTinggi packing           : 32 Cm', 'karrimor.jpg', '2014-12-14 08:30:58', ' Sleeping bag merk "Karrimor" adalah semacam selimut / kantung tidur yang sangat nyaman dan hangat d'),
(48, 1, 'TENDA BESTWAY MONODOME ', 250000, 'hitam', '', 10, '<p>Deskripsi Produk di jelaskan disini</p><p>isi deskripsi</p>', ' Tenda Camping Monodome\r\nMerk: BESTWAY\r\nWarna: Abu abu\r\nBerat: 1,5kg\r\nPacking:3kg (kena volume)\r\nsize : 145cm x 206cm x 99cm', 'tenda2.jpg', '2014-12-14 08:37:18', ' tenda outdoor untuk anak-anak maupun orang dewasa cocok digunakan untuk kegiatan di luar ruangan (o');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
