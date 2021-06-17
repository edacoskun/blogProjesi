-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Haz 2021, 22:49:50
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `postlar`
--

CREATE TABLE `postlar` (
  `post_id` int(11) NOT NULL,
  `post_basligi` varchar(255) NOT NULL,
  `icerik` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `postlar`
--

INSERT INTO `postlar` (`post_id`, `post_basligi`, `icerik`) VALUES
(33, 'abc', 'a'),
(34, 'A', 'Ab'),
(35, 'aaa', 'aaaa'),
(36, 'ed', 'ed');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `uye_id` int(11) NOT NULL,
  `kullanici_adi` varchar(20) NOT NULL,
  `uye_sifre` varchar(30) NOT NULL,
  `uye_adi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`uye_id`, `kullanici_adi`, `uye_sifre`, `uye_adi`) VALUES
(12, 'eda', 'c1cf01e97872427ced3cc4d2b54107', 'Eda'),
(13, 'e', 'e1671797c52e15f763380b45e841ec', 'e'),
(14, 'edacoskuunn', 'eda1', 'EdaC'),
(15, 'test', 'test', 'test');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `postlar`
--
ALTER TABLE `postlar`
  ADD PRIMARY KEY (`post_id`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`uye_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `postlar`
--
ALTER TABLE `postlar`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
