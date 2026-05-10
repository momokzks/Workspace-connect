-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 10 mai 2026 à 22:30
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `workspace_connect`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date_resa` date NOT NULL,
  `creneau` varchar(50) NOT NULL,
  `nb_personnes` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `nom`, `prenom`, `email`, `date_resa`, `creneau`, `nb_personnes`, `id_salle`) VALUES
(1, 'Sissoko', 'Mohammed', 'sissokomohammed10@gmail.com', '2025-10-08', '11h-13h', 20, 1),
(2, 'Sissoko', 'Mohammed', 'sissokomohammed10@gmail.com', '2026-05-21', '15h-17h', 18, 3),
(3, 'Sissoko', 'Mohammed', 'sissokomohammed10@gmail.com', '2026-05-22', '17h-19h', 16, 6),
(4, 'Sissoko', 'Mohammed', 'sissokomohammed10@gmail.com', '2026-05-22', '17h-19h', 16, 6),
(5, ',-u,y,', 'inent nt', 'ekcjzrjcvbe@gmail.com', '2026-05-22', '11h-13h', 20, 2),
(6, 'Sissoko', 'Mohammed', 'sissokomohammed10@gmail.com', '2026-05-30', '15h-17h', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `capacite` int(11) NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `description` text DEFAULT NULL,
  `equipements` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom`, `capacite`, `prix`, `description`, `equipements`, `image`) VALUES
(1, 'Salle Conférence Alpha', 20, 50.00, 'Parfaite pour vos réunions d équipe, équipée de tout le nécessaire pour une collaboration efficace.', 'Écran 4K, Visioconférence, Tableau blanc, WiFi, Climatisation', 'salle1.jpg'),
(2, 'Salle Meeting Beta', 10, 30.00, 'Un espace lumineux et inspirant, idéal pour les sessions de brainstorming et les ateliers créatifs.', 'Écran TV, Visioconférence, WiFi', 'salle2.jpg'),
(3, 'Bureau Focus', 4, 20.00, 'Un environnement calme et confortable, parfait pour les travaux individuels ou les petites équipes.', 'WiFi, Tableau blanc, Café', 'salle3.jpg'),
(4, 'Salle Formation Delta', 15, 40.00, 'Un espace polyvalent avec des équipements modernes, idéal pour les présentations et les formations.', 'Projecteur, WiFi, Micro', 'salle4.jpg'),
(5, 'Espace Créatif Epsilon', 35, 25.00, 'Un espace de travail collaboratif avec une ambiance conviviale, parfait pour les équipes dynamiques.', 'WiFi, Tableau blanc', 'salle5.jpg'),
(6, 'Lab Innovation Zeta', 12, 60.00, 'Un espace moderne et fonctionnel, idéal pour les projets à forte demande en matière de technologie et d innovation.', 'Écran 4K, WiFi, Café', 'salle6.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_salle` (`id_salle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
