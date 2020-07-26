-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 26 juil. 2020 à 11:53
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aps`
--

-- --------------------------------------------------------

--
-- Structure de la table `alert`
--

CREATE TABLE `alert` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `editedAt` datetime NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `createdAt`, `editedAt`, `activated`, `idUser`) VALUES
(2, 'Nouvelles mesures gouvernementales', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam similique quam, quaerat numquam eius deserunt, facere consectetur exercitationem, eveniet pariatur nostrum dolores quidem eum obcaecati culpa officiis fuga hic voluptas laborum earum tenetur saepe ipsum expedita consequuntur. Eos, rem. Placeat tenetur voluptatibus nostrum, dicta aperiam veritatis id doloribus assumenda ab adipisci quidem tempore at non harum dolorum, nobis illo ad, animi aut. Voluptas ullam id assumenda facilis accusantium amet molestias magni sint saepe, eum optio. Ad saepe tempore, nemo officia neque aliquid natus incidunt debitis architecto unde beatae, hic ipsam, expedita mollitia! Assumenda possimus sint dolorum officiis obcaecati at voluptatibus.', '2020-07-25 23:22:32', '0000-00-00 00:00:00', 1, 1),
(3, 'Covid 19 délais supplémentaires', 'assumenda facilis accusantium amet molestias magni sint saepe, eum optio. Ad saepe tempore, nemo officia neque aliquid natus incidunt debitis architecto unde beatae, hic ipsam, expedita mollitia! Assumenda possimus sint dolorum officiis obcaecati at voluptatibus.', '2020-07-25 23:22:32', '0000-00-00 00:00:00', 1, 1),
(4, 'Que faire en cas de retard de délivrance des documents ?', 'laborum earum tenetur saepe ipsum expedita consequuntur. Eos, rem. Placeat tenetur voluptatibus nostrum, dicta aperiam veritatis id doloribus assumenda ab adipisci quidem tempore at non harum dolorum, nobis illo ad, animi aut. ic ipsam, expedita mollitia! Assumenda possimus sint dolorum officiis obcaecati at voluptatibus.', '2020-07-25 23:22:32', '0000-00-00 00:00:00', 1, 1),
(5, 'Mesures Covid 19', 'assumenda facilis accusantium amet molestias magni sint saepe, eum optio. Ad saepe tempore, nemo officia neque aliquid natus incidunt debitis architecto unde beatae, hic ipsam, expedita mollitia! Assumenda possimus sint dolorum officiis obcaecati at voluptatibus.', '2020-07-25 23:22:32', '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_adherent` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `information` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `edited_at` datetime NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `role` varchar(100) NOT NULL,
  `alert_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `id_adherent`, `email`, `password`, `firstname`, `lastname`, `gender`, `address`, `postcode`, `city`, `phone`, `information`, `created_at`, `edited_at`, `activated`, `role`, `alert_id`) VALUES
(1, '202007240001', 'admin.aps@gmail.com', '', '', '', '', '', '', '', '', '', '2020-07-26 00:00:15', '0000-00-00 00:00:00', 0, 'admin', 0),
(2, '202007240002', 'user.aps@gmail.com', '', '', '', '', '', '', '', '', '', '2020-07-26 00:00:15', '0000-00-00 00:00:00', 0, 'user', 0),
(3, '202007250003', 'user2.aps@gmail.com', '', '', '', '', '', '', '', '', '', '2020-07-26 00:01:57', '0000-00-00 00:00:00', 0, 'user', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `recipient_id` (`recipient_id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_user` (`idUser`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `alert_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alert_ibfk_2` FOREIGN KEY (`recipient_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
