-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 03:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dgm`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `country_hos` (IN `statut` INT(20), IN `id_com` INT)   BEGIN
	DECLARE dure int;
DECLARE dateexpire varchar(100);
    SET dure = (SELECT type_doc.dure FROM commande INNER JOIN type_doc ON type_doc.id_doc=commande.type_doc WHERE commande.id_com=id_com);

SET dateexpire = (SELECT DATE_ADD(CURDATE(), INTERVAL dure DAY));

if(statut=1) then
UPDATE commande SET expire_date = dateexpire,status=statut where commande.id_com = id_com;
else
UPDATE commande SET status = statut where commande.id_com = id_com;
end if;


END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `authentification`
--

CREATE TABLE `authentification` (
  `id_athentification` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ref_utilisateur` int(11) NOT NULL,
  `created_att` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `authentification`
--

INSERT INTO `authentification` (`id_athentification`, `username`, `email`, `password`, `ref_utilisateur`, `created_att`) VALUES
(1, 'joel', 'jt@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2023-01-12 14:49:26'),
(2, 'danny', 'danny@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, '2022-12-20 13:51:56'),
(3, 'jered', 'jered@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, '2023-05-05 15:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `avenue`
--

CREATE TABLE `avenue` (
  `id_avenus` int(11) NOT NULL,
  `nom_avenue` varchar(50) NOT NULL,
  `ref_quartier` int(11) NOT NULL,
  `created_avenu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avenue`
--

INSERT INTO `avenue` (`id_avenus`, `nom_avenue`, `ref_quartier`, `created_avenu`) VALUES
(1, 'kinshasa', 1, '2023-08-31 09:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `noms` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `date_naiss` varchar(15) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `etat_civil` varchar(20) NOT NULL,
  `proffession` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `nom_pere` varchar(50) NOT NULL,
  `nom_mere` varchar(50) NOT NULL,
  `province_org` varchar(50) NOT NULL,
  `teritoire_org` varchar(50) NOT NULL,
  `ref_avenu` int(11) NOT NULL,
  `num_avenu` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `created_client` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `noms`, `sexe`, `date_naiss`, `lieu`, `etat_civil`, `proffession`, `photo`, `nom_pere`, `nom_mere`, `province_org`, `teritoire_org`, `ref_avenu`, `num_avenu`, `username`, `password`, `user_type`, `created_client`) VALUES
(1, 'Patrice mungara', 'Masculin', '2022-04-29', 'Goma', '0', 'Comptable', 'IMG_7279.jpg', 'Tsongo', 'esperance', 'Nord-kivu', 'Beni', 1, 4, 'joel', '123456', 'user', '2023-09-04 22:55:58'),
(2, 'marcott', 'Masculin', '2003-06-11', 'Goma', 'Celibataire', 'Proffesseur', 's5.jpg', 'Tsongo', 'esperance', 'Nord-kivu', 'Goma', 1, 50, 'marcott', '123456', 'user', '2023-09-24 08:42:07'),
(3, 'KASEREKANIKI', 'Masculin', '1998-06-13', 'GOMA', 'Celibataire', 'ETUDIANT', 'jeune-coiffeur-afro-americain-agace-portant-uniforme-tenant-regardant-telephone-portable-touchant-vi', 'KASEREKA', 'KAVIRA', 'NORD KIVU', 'LUBERO', 1, 63, 'juniorkaniki', '12345678', 'user', '2023-09-27 17:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_com` int(11) NOT NULL,
  `ref_client` int(11) NOT NULL,
  `type_doc` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_com` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expire_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`id_com`, `ref_client`, `type_doc`, `status`, `created_com`, `expire_date`) VALUES
(1, 1, 3, 0, '2023-10-04 14:28:07', ''),
(2, 2, 3, 0, '2023-10-04 14:26:00', ''),
(4, 3, 3, 1, '2023-10-04 14:48:19', '2024-10-04'),
(5, 3, 5, 1, '2023-10-06 11:02:22', '2024-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `commune`
--

CREATE TABLE `commune` (
  `id_com` int(11) NOT NULL,
  `nom_com` varchar(50) NOT NULL,
  `ref_ville` int(11) NOT NULL,
  `created_com` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commune`
--

INSERT INTO `commune` (`id_com`, `nom_com`, `ref_ville`, `created_com`) VALUES
(1, 'karisimbi', 1, '2023-08-26 12:20:06'),
(2, 'DE GOMA', 1, '2023-09-05 20:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(11) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`id_fonction`, `designation`) VALUES
(1, 'admin'),
(2, 'utilisateur'),
(3, 'entreprise');

-- --------------------------------------------------------

--
-- Table structure for table `paiement`
--

CREATE TABLE `paiement` (
  `id_paiement` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `date_p` varchar(15) NOT NULL,
  `ref_commande` int(11) NOT NULL,
  `created_pay` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `nom_pays` varchar(50) NOT NULL,
  `created_pays` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom_pays`, `created_pays`) VALUES
(1, 'DRC', '2023-09-28 21:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id_province` int(11) NOT NULL,
  `nom_province` varchar(50) NOT NULL,
  `ref_pays` int(11) NOT NULL,
  `created_prov` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id_province`, `nom_province`, `ref_pays`, `created_prov`) VALUES
(2, 'Nord-kivu', 1, '2023-08-26 10:33:24'),
(4, 'SUD-KIVU', 1, '2023-08-26 10:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `quartier`
--

CREATE TABLE `quartier` (
  `id_quartier` int(11) NOT NULL,
  `nom_quartier` varchar(50) NOT NULL,
  `ref_commune` int(11) NOT NULL,
  `created_quartier` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quartier`
--

INSERT INTO `quartier` (`id_quartier`, `nom_quartier`, `ref_commune`, `created_quartier`) VALUES
(1, 'mabanga nord', 1, '2023-08-26 12:57:38'),
(2, 'HIMBI', 2, '2023-09-05 20:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agent`
--

CREATE TABLE `tbl_agent` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_complet` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL DEFAULT 'default_user.jpg',
  `date_naiss` varchar(15) NOT NULL,
  `ref_fonction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_agent`
--

INSERT INTO `tbl_agent` (`id_utilisateur`, `nom_complet`, `photo`, `date_naiss`, `ref_fonction`) VALUES
(1, 'joel jt', 'default_user.jpg', '', 1),
(2, 'danny katoro', 'default_user.jpg', '', 2),
(3, 'jered', 'default_user.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_doc`
--

CREATE TABLE `type_doc` (
  `id_doc` int(11) NOT NULL,
  `nom_doc` varchar(50) NOT NULL,
  `dure` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `created_type` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_doc`
--

INSERT INTO `type_doc` (`id_doc`, `nom_doc`, `dure`, `montant`, `created_type`) VALUES
(1, 'tenants', 1, 50, '2023-09-24 20:22:08'),
(2, 'tenant passport', 1, 50, '2023-08-31 11:07:31'),
(3, 'Tenant lieu', 366, 100, '2023-10-04 13:51:26'),
(5, 'CEPGL', 366, 10, '2023-10-04 13:43:12'),
(6, 'ten', 100, 10000, '2023-10-06 11:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(11) NOT NULL,
  `nom_ville` varchar(50) NOT NULL,
  `ref_province` int(11) NOT NULL,
  `created_ville` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom_ville`, `ref_province`, `created_ville`) VALUES
(1, 'Goma', 2, '2023-08-26 11:39:01'),
(2, 'BUKAVU', 2, '2023-09-05 20:38:54'),
(3, 'masisi', 4, '2023-09-28 21:55:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentification`
--
ALTER TABLE `authentification`
  ADD PRIMARY KEY (`id_athentification`);

--
-- Indexes for table `avenue`
--
ALTER TABLE `avenue`
  ADD PRIMARY KEY (`id_avenus`),
  ADD KEY `fk_quartier` (`ref_quartier`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `fk_avenue` (`ref_avenu`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `fk_docs` (`type_doc`),
  ADD KEY `fk_client` (`ref_client`);

--
-- Indexes for table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `fk_ville` (`ref_ville`);

--
-- Indexes for table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`);

--
-- Indexes for table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paiement`),
  ADD KEY `fk_commande` (`ref_commande`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_province`),
  ADD KEY `fk_pays` (`ref_pays`);

--
-- Indexes for table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`id_quartier`),
  ADD KEY `fk_com` (`ref_commune`);

--
-- Indexes for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Indexes for table `type_doc`
--
ALTER TABLE `type_doc`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`),
  ADD KEY `fk_prov` (`ref_province`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authentification`
--
ALTER TABLE `authentification`
  MODIFY `id_athentification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `avenue`
--
ALTER TABLE `avenue`
  MODIFY `id_avenus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commune`
--
ALTER TABLE `commune`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_paiement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `id_quartier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_agent`
--
ALTER TABLE `tbl_agent`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_doc`
--
ALTER TABLE `type_doc`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avenue`
--
ALTER TABLE `avenue`
  ADD CONSTRAINT `fk_quartier` FOREIGN KEY (`ref_quartier`) REFERENCES `quartier` (`id_quartier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_avenue` FOREIGN KEY (`ref_avenu`) REFERENCES `avenue` (`id_avenus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`ref_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_docs` FOREIGN KEY (`type_doc`) REFERENCES `type_doc` (`id_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `fk_ville` FOREIGN KEY (`ref_ville`) REFERENCES `ville` (`id_ville`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `fk_commande` FOREIGN KEY (`ref_commande`) REFERENCES `commande` (`id_com`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `fk_pays` FOREIGN KEY (`ref_pays`) REFERENCES `pays` (`id_pays`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quartier`
--
ALTER TABLE `quartier`
  ADD CONSTRAINT `fk_com` FOREIGN KEY (`ref_commune`) REFERENCES `commune` (`id_com`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `fk_prov` FOREIGN KEY (`ref_province`) REFERENCES `province` (`id_province`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
