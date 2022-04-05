-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 12 Mar 2019, 11:43:43
-- Sunucu sürümü: 5.6.12-log
-- PHP Sürümü: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `adm`
--
CREATE DATABASE IF NOT EXISTS `adm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci;
USE `adm`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kariyer`
--

CREATE TABLE IF NOT EXISTS `kariyer` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tc` int(100) NOT NULL,
  `dogumt` date NOT NULL,
  `dogumy` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `cinsiyet` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `posta` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tel` int(18) NOT NULL,
  `adres` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kariyer`
--

INSERT INTO `kariyer` (`sno`, `adsoyad`, `tc`, `dogumt`, `dogumy`, `cinsiyet`, `posta`, `tel`, `adres`, `mesaj`) VALUES
(1, 'kkkkk', 4444444, '2001-04-06', 'aaaaaa', 'KadÄ±n', 'aaa@ggg', 333333, 'eeeeeeeee', 'aaaaaaaaaaaaa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
