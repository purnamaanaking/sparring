-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 07:19 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sparring`
--

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE IF NOT EXISTS `keyword` (
  `idteks` int(100) NOT NULL,
  `teks` varchar(255) NOT NULL,
  `Pscore` int(255) NOT NULL,
  `Nscore` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`idteks`, `teks`, `Pscore`, `Nscore`) VALUES
(110, 'setuju', 1, 0),
(111, 'nyusul', 1, 0),
(112, 'level', 12, 13),
(113, 'tapi', 3, 4),
(114, 'sah', 1, 0),
(115, 'tepat', 10, 9),
(116, 'distribusi', 1, 0),
(117, 'salur', 2, 1),
(118, 'nyamar', 1, 0),
(119, 'sehat', 11, 10),
(120, 'ngucur', 1, 0),
(121, 'bantu', 11, 10),
(122, 'nurun', 7, 6),
(123, 'malu', 1, 2),
(124, 'cape', 1, 2),
(125, 'dilema', 1, 0),
(126, 'dukung', 5, 4),
(127, 'patuhi', 11, 10),
(128, 'berjuang', 4, 3),
(129, 'sadar', 2, 1),
(130, 'musuh', 1, 2),
(131, 'patuhi', 11, 10),
(132, 'butuh', 2, 1),
(133, 'bahu', 3, 2),
(134, 'bekerjasama', 2, 1),
(135, 'tak', 1, 2),
(136, 'ngurang', 4, 3),
(137, 'ragu', 2, 3),
(138, 'himbau', 3, 2),
(139, 'semoga', 5, 4),
(140, 'susah', 6, 7),
(141, 'mengsedih', 1, 2),
(142, 'bgst', 1, 2),
(143, 'kerugian', 1, 2),
(144, 'jaga', 4, 3),
(145, 'mematuhi', 3, 2),
(146, 'sabar', 2, 1),
(147, 'perlindungan', 2, 1),
(148, 'njing', 1, 2),
(149, 'saling', 3, 2),
(150, 'disiplin', 3, 2),
(151, 'cegah', 11, 10),
(152, 'mengurangi', 4, 3),
(153, 'nyusahin', 1, 2),
(154, 'tetap', 7, 6),
(155, 'kecewa', 1, 2),
(156, 'tolak', 2, 3),
(157, 'nyengsara', 1, 2),
(158, 'kacau', 1, 2),
(159, 'baik', 21, 20),
(160, 'korban', 1, 2),
(161, 'memantau', 2, 1),
(162, ' gak', 16, 17),
(163, 'PERBEDAAN ', 5, 6),
(164, 'ndasmu', 1, 2),
(165, 'menurunkan', 3, 2),
(166, 'semangat', 2, 1),
(167, 'ndak', 3, 2),
(168, 'gusur', 1, 2),
(169, 'kasihan', 1, 2),
(170, 'optimis', 2, 1),
(171, 'asal-asalan', 1, 2),
(172, 'harus', 11, 10),
(173, 'biasa', 1, 2),
(174, 'hasil', 4, 3),
(175, 'mengedukasi', 3, 2),
(176, 'meresahkan', 1, 2),
(177, 'bukan', 3, 4),
(178, 'anjuran', 2, 1),
(179, 'disudahi', 1, 2),
(180, 'susah', 6, 7),
(181, 'maksimalkan', 3, 2),
(182, 'khatam', 2, 1),
(183, 'nonton', 2, 1),
(184, 'mikir', 0, 1),
(185, 'menghimbau', 1, 0),
(186, 'ajg ajg', 0, 1),
(187, 'jika', 4, 3),
(188, 'kemungkinan', 2, 1),
(189, 'jenuh', 0, 1),
(190, 'kebijakan', 5, 4),
(191, 'kemanusiaan', 0, 1),
(192, 'jelek', 0, 1),
(193, 'susah', 3, 4),
(194, 'tidak', 3, 4),
(195, 'amburadul', 0, 1),
(196, 'stress', 0, 1),
(197, 'langkah', 1, 0),
(198, 'ga', 5, 4),
(199, 'efektif', 2, 3),
(200, 'asuu', 1, 2),
(201, 'evaluasi', 1, 0),
(202, 'kaga', 3, 2),
(203, 'aneh', 0, 1),
(204, 'jgn', 0, 1),
(205, 'menentang', 0, 1),
(206, 'babi', 0, 1),
(207, 'gila', 0, 1),
(208, 'bosen', 0, 1),
(209, 'mules', 0, 1),
(210, 'muntah', 0, 1),
(211, 'menolak', 2, 3),
(212, 'imbas', 0, 1),
(213, 'perpanjangan', 25, 24),
(214, 'mental', 0, 1),
(215, 'tutup', 1, 0),
(216, 'kzl!', 0, 1),
(217, 'anjir', 0, 1),
(218, 'tenang', 3, 2),
(219, 'berat', 1, 2),
(220, 'naek', 1, 0),
(221, 'hadehh', 1, 0),
(222, 'gaada', 0, 1),
(223, 'ndk', 0, 1),
(224, 'gak', 6, 7),
(225, 'yummy', 1, 0),
(226, 'mundur', 0, 1),
(227, 'hindari', 0, 1),
(228, 'tidak', 6, 7),
(229, 'manfaat', 1, 0),
(230, 'diperpanjang', 15, 16),
(231, 'darurat', 36, 37),
(232, 'terdampak', 7, 8),
(233, 'bisa', 13, 12),
(234, 'woe', 0, 1),
(235, 'dirumah aja', 2, 1),
(236, 'terus', 5, 6),
(237, 'darurat', 0, 1),
(238, 'keadilan', 1, 2),
(239, 'lanjut', 1, 0),
(240, 'lock down', 1, 0),
(241, 'berlaku', 1, 0),
(242, 'solusi', 1, 0),
(243, 'terimakasih', 1, 0),
(244, 'dibatasi', 1, 0),
(245, 'bansos', 1, 0),
(246, 'bagikan', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teks`
--

CREATE TABLE IF NOT EXISTS `teks` (
  `id` int(100) NOT NULL,
  `date` varchar(150) NOT NULL,
  `text` varchar(255) NOT NULL,
  `sentiment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
