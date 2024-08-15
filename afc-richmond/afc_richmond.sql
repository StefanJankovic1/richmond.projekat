-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 02:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afc_richmond`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `opponent` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `result` varchar(10) NOT NULL,
  `stadium` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `opponent`, `date`, `result`, `stadium`) VALUES
(1, 'Manchester United', '2024-05-01', '2-1', 'Old Trafford'),
(2, 'Chelsea FC', '2024-05-10', '1-1', 'Stamford Bridge'),
(3, 'Liverpool FC', '2024-05-15', '3-2', 'Anfield');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `biography` text NOT NULL,
  `statistics` text NOT NULL,
  `goals` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `matches` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `position`, `number`, `biography`, `statistics`, `goals`, `assists`, `matches`) VALUES
(12, 'Jamie Tartt', 'Napadač', 9, 'Jamie Tartt je talentovani napadač sa izuzetnim veštinama driblinga i postizanja golova.', '', 15, 5, 20),
(13, 'Roy Kent', 'Vezista', 6, 'Roy Kent je iskusni vezista poznat po svom liderstvu i borbenom duhu.', '', 2, 3, 18),
(14, 'Sam Obisanya', 'Odbrambeni', 24, 'Sam Obisanya je mladi odbrambeni igrač sa velikim potencijalom i snažnim pristupom igri.', '', 1, 1, 19),
(15, 'Dani Rojas', 'Napadač', 14, 'Dani Rojas je strastveni napadač sa izvanrednim talentom za postizanje golova. Njegova energija je zarazna.', '', 10, 7, 20),
(16, 'Isaac McAdoo', 'Odbrambeni', 5, 'Isaac McAdoo je snažni odbrambeni igrač poznat po svojim fizičkim sposobnostima i odličnom čitanju igre.', '', 0, 0, 20),
(17, 'Colin Hughes', 'Krilo', 11, 'Colin Hughes je brz i agilan igrač krila, sposoban da probije protivničku odbranu sa lakoćom.', '', 5, 4, 18),
(18, 'Richard Montlaur', 'Vezista', 8, 'Richard Montlaur je tehnički potkovan vezista koji kontroliše tempo igre i pruža kreativne paseve.', '', 3, 6, 19),
(19, 'Jan Maas', 'Odbrambeni', 3, 'Jan Maas je pouzdan odbrambeni igrač sa sjajnim osećajem za pozicioniranje i presretanje lopti.', '', 0, 1, 20),
(20, 'Thierry Zoreaux', 'Golman', 1, 'Thierry Zoreaux je čuvar mreže sa izvanrednim refleksima i sposobnošću da komanduje odbranom.', '', 0, 0, 20),
(21, 'Bumbercatch', 'Vezista', 18, 'Bumbercatch je svestran vezista koji može igrati na više pozicija i doprinosi timu svojom fleksibilnošću.', '', 2, 3, 17),
(22, 'Moe Bumbercatch', 'Vezista', 16, 'Moe Bumbercatch je taktički inteligentan igrač koji odlično organizuje igru iz sredine terena.', '', 1, 2, 18),
(23, 'Danilo Savić', 'Golman', 2, 'Od detinjstva pokazao izuzetan potencijal. Sada je razvio veštine koje ga stavljaju u ravni sa svetskim golmanima.', '', 0, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$Fka4oVfwnhEc6aQmYYghme//Mx/vlB6QAbblQUTCg2zv6wWBOO0Va', 'stefanjankovic12@gmail.com'),
(2, 'admin', '$2y$10$OYlnId0nNQWS/z9OGlbnA.QAiNKhVU88Vp.7ORCDdC4ZNgwF1FPAW', 'stefannadja12@yahoo.com'),
(3, 'admin', '$2y$10$oy1wjXnWc25mK.X1QqF5..p/MZyn0/Q8.Fi1j0AtXKtMxIxaVMvay', 'mladendjokicgolub@yahoo.com'),
(4, 'admin', '$2y$10$cwGAUPQLVwMbh1x/z6S90uQJ2/fz4KPL9/xmc2zjDj4TcDomvcOaa', 'mladendjokicgolub@yahoo.com'),
(5, 'admin', '$2y$10$q5OzZAlZ7KQxMoxAQkudcue3rsG2HPdRTX6Th5aWLntHDEV5OLmQ2', 'stefannadja12@yahoo.com'),
(6, 'admin', 'admin', ''),
(7, 'ma', '$2y$10$WnwkYB4L5pBj3oSzC7bZ2.KYeRYTdstHJPRg1UPgIrHFHpab/jvAC', 'ma@gmail.com'),
(8, 's', '$2y$10$q5RC2HK9v0md74styoqJI.yuMayZCvkjtv2CZSKdbWCAVoCu/ZTEa', 's@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
