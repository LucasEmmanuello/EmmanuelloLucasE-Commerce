-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 09 déc. 2022 à 14:55
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `SecSou`
--

-- --------------------------------------------------------

--
-- Structure de la table `Catégorie`
--

CREATE TABLE `Catégorie` (
  `Id_catégorie` int(11) NOT NULL,
  `Catégorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Catégorie`
--

INSERT INTO `Catégorie` (`Id_catégorie`, `Catégorie`) VALUES
(1, 'Clé JV'),
(2, 'Clé licence OS'),
(3, 'Clé licence logiciel'),
(5, 'Monnaie virtuelle');

-- --------------------------------------------------------

--
-- Structure de la table `Panier`
--

CREATE TABLE `Panier` (
  `Position_article` int(11) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Produits`
--

CREATE TABLE `Produits` (
  `Id_produit` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Note` varchar(4) NOT NULL,
  `Url_img` text NOT NULL,
  `id_catégorie` int(11) NOT NULL,
  `Prix` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Produits`
--

INSERT INTO `Produits` (`Id_produit`, `Nom`, `Stock`, `Note`, `Url_img`, `id_catégorie`, `Prix`) VALUES
(1, '1000 pièces Apex', 100, '5', 'https://fr.mmoga.net/images/games/_ext/1110515/apex-legends-1000-apex-coins_large;width=360,height=340,ad8540155d6d07b0b203d3efbb01e9f0e22edde5.png', 5, '5.99 Є'),
(2, '2150 pièces Apex', 100, '5', 'https://fr.mmoga.net/images/games/_ext/1110525/apex-legends-2000-apex-coins-150-bonus_large;width=360,height=340,2969086ee5a7b6b8d882b0faa048e2ed8ba54f3f.png', 5, '15.99 Є'),
(3, '4350 pièces Apex', 100, '5', 'https://fr.mmoga.net/images/games/_ext/1110527/apex-legends-4000-apex-coins-350-bonus_large;width=360,height=340,c934d8bc9ed66c2f8c3c2de5881dfd2b879d2cb6.png', 5, '32.99 Є'),
(4, '6700 pièces Apex', 100, '5', 'https://fr.mmoga.net/images/games/_ext/1110529/apex-legends-6000-apex-coins-700-bonus_large;width=360,height=340,589b1a3d68838219e43a46e4d040dfaa342f6250.png', 5, '50.99 Є'),
(5, '11500 pièces Apex', 100, '5', 'https://cdn-products.eneba.com/resized-products/g3xA6rtBT9aZx7qWHtn6h8iCiWnKV5BJSL0JzCXUcJI_350x200_2x-0.jpeg', 5, '89.99 Є'),
(6, 'Titanfall 2', 2, '5', 'https://cdn.cloudflare.steamstatic.com/steam/apps/1237970/capsule_616x353.jpg?t=1668565264', 1, '5.99 Є '),
(7, 'Windows 10 professionnel', 10, '3.5', 'https://m.media-amazon.com/images/I/51rh6anvYwL._AC_SL1000_.jpg', 2, '29.99 Є'),
(8, 'Adobe Photoshop', 24, '4', 'https://immo2.pro/images/wp-images/2018/05/2000px-adobe_photoshop_express_logo.svg.png', 3, '9.99 Є'),
(9, '500 pièces Overwatch', 100, '5', 'https://s3.gaming-cdn.com/images/products/12992/616x353/overwatch-2-500-overwatch-coins-xbox-one-xbox-series-x-s-500-coins-xbox-one-xbox-series-x-s-jeu-microsoft-store-europe-cover.jpg?v=1664988404', 5, '3.99 Є'),
(10, '1000 pièces Overwatch', 100, '5', 'https://s1.gaming-cdn.com/images/products/12993/616x353/overwatch-2-1000-overwatch-coins-xbox-one-xbox-series-x-s-1000-coins-xbox-one-xbox-series-x-s-jeu-microsoft-store-europe-cover.jpg?v=1666187967', 5, '6.99 Є'),
(11, '2000 pièces Overwatch', 100, '5', 'https://s2.gaming-cdn.com/images/products/12994/616x353/overwatch-2-2000-overwatch-coins-xbox-one-xbox-series-x-s-2000-coins-xbox-series-x-s-xbox-one-jeu-microsoft-store-europe-cover.jpg?v=1666187974', 5, '16.99 Є'),
(12, '5000 pièces Overwatch', 100, '5', 'https://s3.gaming-cdn.com/images/products/13007/616x353/overwatch-2-5000-overwatch-coins-xbox-one-xbox-series-x-s-5000-coins-xbox-series-x-s-xbox-one-jeu-microsoft-store-europe-cover.jpg?v=1666187981', 5, '29.99 Є'),
(13, '11000 pièces Overwatch', 100, '5', 'https://s3.gaming-cdn.com/images/products/12995/616x353/overwatch-2-10000-overwatch-coins-xbox-one-xbox-series-x-s-10000-coins-xbox-series-x-s-xbox-one-jeu-microsoft-store-europe-cover.jpg?v=1666187987', 5, '69.99 Є'),
(14, 'Call of Duty Black Ops 2', 5, '5', 'https://s3.gaming-cdn.com/images/products/95/380x218/call-of-duty-black-ops-ii-pc-jeu-steam-cover.jpg?v=1661178956', 1, '25.99 Є'),
(15, 'Windows 7 professionnel', 10, '4.5', 'https://www.goclecd.fr/wp-content/uploads/buy-windows-7-professional-cd-key-pc-download-img1.jpg', 2, '15.99 Є'),
(16, 'Microsoft Office 365', 12, '4', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Microsoft_Office_logo_%282019%E2%80%93present%29.svg/1200px-Microsoft_Office_logo_%282019%E2%80%93present%29.svg.png', 3, '25.99 Є ');

-- --------------------------------------------------------

--
-- Structure de la table `Uitlisation`
--

CREATE TABLE `Uitlisation` (
  `Id_utils` int(11) NOT NULL,
  `Utils` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Uitlisation`
--

INSERT INTO `Uitlisation` (`Id_utils`, `Utils`) VALUES
(1, 'Admin'),
(2, 'Client'),
(3, 'Verif Vendeur'),
(4, 'Vendeur');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `Id_user` int(11) NOT NULL,
  `Nom` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Mot_de_passe` varchar(225) NOT NULL,
  `Adresse` text NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Utilisation` int(11) NOT NULL,
  `id_card` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`Id_user`, `Nom`, `Email`, `Mot_de_passe`, `Adresse`, `Ville`, `Utilisation`, `id_card`) VALUES
(8, 'Admin', 'xfpro95130@gmail.com', 'admin', '68 Rue du General de Gaulle', 'Saint Leu la Forêt', 1, 'None'),
(9, 'Instant-Gaming', 'instantgaming@gmail.com', 'false', '1 Rue de paris dans paris', 'Paris', 3, 'https://play-lh.googleusercontent.com/lTQcDAzrYZbTDOVMGaSgFAuh3z1pbA2-B3ncK8xLAXHEoYkBPp7wcXT3ZAF__chVs29w'),
(10, 'Maelys Martin', 'MaelysMartin@gmail.com', 'password', '56 Rue Amelot', 'Paris 75001', 4, 'https://lecap.consulfrance.org/IMG/arton465.png?1641476764');

-- --------------------------------------------------------

--
-- Structure de la table `Vendeur`
--

CREATE TABLE `Vendeur` (
  `Id_vendeur` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Note` varchar(4) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Vendeur`
--

INSERT INTO `Vendeur` (`Id_vendeur`, `Nom`, `Note`, `id_user`) VALUES
(1, 'Second Souffle', '5', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Catégorie`
--
ALTER TABLE `Catégorie`
  ADD PRIMARY KEY (`Id_catégorie`);

--
-- Index pour la table `Panier`
--
ALTER TABLE `Panier`
  ADD PRIMARY KEY (`Position_article`);

--
-- Index pour la table `Produits`
--
ALTER TABLE `Produits`
  ADD PRIMARY KEY (`Id_produit`);

--
-- Index pour la table `Uitlisation`
--
ALTER TABLE `Uitlisation`
  ADD PRIMARY KEY (`Id_utils`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Id_user`),
  ADD KEY `Utilisation` (`Utilisation`);

--
-- Index pour la table `Vendeur`
--
ALTER TABLE `Vendeur`
  ADD PRIMARY KEY (`Id_vendeur`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Catégorie`
--
ALTER TABLE `Catégorie`
  MODIFY `Id_catégorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Panier`
--
ALTER TABLE `Panier`
  MODIFY `Position_article` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Produits`
--
ALTER TABLE `Produits`
  MODIFY `Id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `Uitlisation`
--
ALTER TABLE `Uitlisation`
  MODIFY `Id_utils` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `Vendeur`
--
ALTER TABLE `Vendeur`
  MODIFY `Id_vendeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Utilisation`) REFERENCES `Uitlisation` (`Id_utils`);

--
-- Contraintes pour la table `Vendeur`
--
ALTER TABLE `Vendeur`
  ADD CONSTRAINT `vendeur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `User` (`Id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
