-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 déc. 2022 à 17:06
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `maitrise` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `language`
--

INSERT INTO `language` (`id`, `nom`, `description`, `maitrise`) VALUES
(43, 'HTML', 'L\'HyperText Markup Language, HTML, désigne un type de langage informatique descriptif. Il s\'agit plus précisément d\'un format de données utilisé dans l\'univers d\'Internet pour la mise en forme des pages Web. Il permet, entre autres, d\'écrire de l\'hypertexte, mais aussi d\'introduire des ressources multimédias dans un contenu.', 9),
(44, 'CSS', 'CSS est l’acronyme de « Cascading Style Sheets » ce qui signifie « feuille de style en cascade ».  Le CSS correspond à un langage informatique permettant de mettre en forme des pages web (HTML ou XML).  Ce langage est donc composé des fameuses « feuilles de style en cascade » également appelées fichiers CSS', 7),
(45, 'PHP', 'Le PHP, pour Hypertext Preprocessor, désigne un langage informatique, ou un langage de script, utilisé principalement pour la conception de sites web dynamiques. Il s\'agit d\'un langage de programmation sous licence libre qui peut donc être utilisé par n\'importe qui de façon totalement gratuite.', 7),
(46, 'SQL', 'Le langage SQL (Structured Query Language) est un langage informatique utilisé pour exploiter des bases de données. Il permet de façon générale la définition, la manipulation et le contrôle de sécurité de données.', 8),
(47, 'JavaScript', 'JavaScript est un langage de programmation qui permet d\'implémenter des mécanismes complexes sur une page web. À chaque fois qu\'une page web fait plus que simplement afficher du contenu statique — afficher du contenu mis à jour à des temps déterminés, des cartes interactives, des animations 2D/3D, des menus vidéo défilants, ou autre, JavaScript a de bonnes chances d\'être impliqué. C\'est la troisième couche des technologies standards du web, les deux premières (HTML et CSS) étant couvertes bien plus en détail dans d\'autres tutoriels sur MDN.', 3),
(48, 'twig', 'Twig est un moteur de templates pour le langage de programmation PHP, utilisé par défaut par le framework Symfony.', 8),
(49, 'Framework Symfony', 'Symfony est un framework qui représente un ensemble de composants (aussi appelés librairies) PHP autonomes qui peuvent être utilisés dans des projets web privé ou open source. Mais c’est également un puissant Framework PHP développé par une société française : SensioLabs. Il permet de réaliser des sites internet dynamiques de manière rapide, structurée, et avec un développement clair. Les développeurs peuvent travailler sur ce Framework très facilement, seuls ou en équipe, grâce à la facilité de prise en main.', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
