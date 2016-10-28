-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 17 Octobre 2016 à 21:00
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `invest.gov.gn`
--

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `doc_nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_doc` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `doc_categorie` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `statut_doc` int(11) NOT NULL,
  `doc_utility` int(11) NOT NULL,
  `langue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `udpated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `document_secteur`
--

CREATE TABLE `document_secteur` (
  `document_id` int(11) NOT NULL,
  `secteur_id` int(11) NOT NULL,
  `filiere_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

CREATE TABLE `filieres` (
  `id` int(11) NOT NULL,
  `filiere_nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filiere_presentation` text COLLATE utf8_unicode_ci NOT NULL,
  `filiere_resume` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `secteur_id` int(11) NOT NULL,
  `filiere_statut` int(11) NOT NULL DEFAULT '0',
  `langue_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `langue_nom` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `langue_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `langue_statut` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `operation_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `table_action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `record_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `media_titre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `media_description` text COLLATE utf8_unicode_ci NOT NULL,
  `media_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `media_source` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `media_lien` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `langue_id` int(11) NOT NULL,
  `media_statut` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_nom` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `menu_code` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `menu_order` int(2) NOT NULL,
  `menu_parent` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `langue_id` int(11) NOT NULL,
  `menu_statut` int(2) NOT NULL,
  `menu_niveau` int(2) NOT NULL,
  `menu_icon` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `menus`
--

INSERT INTO `menus` (`id`, `menu_nom`, `menu_code`, `menu_order`, `menu_parent`, `slug`, `langue_id`, `menu_statut`, `menu_niveau`, `menu_icon`, `created_at`, `updated_at`) VALUES
(1, 'Opportunités', 'opportunites', 3, '0', '', 0, 1, 0, '', '2016-10-14 17:52:12', '0000-00-00 00:00:00'),
(2, 'Investir en Guinée', 'investir-en-guinee', 4, '0', '', 0, 1, 0, '', '2016-10-14 17:52:12', '0000-00-00 00:00:00'),
(5, 'Charte des Investissements', 'charte-des-investissements', 1, '2A', '', 0, 1, 0, '', '2016-10-17 17:54:33', '0000-00-00 00:00:00'),
(6, 'Créer votre entreprise', 'creer-votre-entreprise', 2, '2A', '', 0, 1, 0, '', '2016-10-17 17:54:33', '0000-00-00 00:00:00'),
(7, 'Climats des affaires', 'climats-des-affaires', 5, '0', '', 0, 1, 0, '', '2016-10-14 19:21:14', '0000-00-00 00:00:00'),
(8, 'Trouver des partenaires', '', 1, '2A6B', '', 0, 1, 0, '', '2016-10-17 17:57:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_resume` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `post_statut` int(11) NOT NULL DEFAULT '0',
  `post_parent` int(11) NOT NULL,
  `post_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `langue_id` int(11) NOT NULL,
  `post_order` int(2) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `secteurs`
--

CREATE TABLE `secteurs` (
  `id` int(11) NOT NULL,
  `secteur_nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secteur_presentation` text COLLATE utf8_unicode_ci NOT NULL,
  `secteur_resume` text COLLATE utf8_unicode_ci NOT NULL,
  `langue_id` int(11) NOT NULL,
  `secteur_statut` int(2) NOT NULL DEFAULT '0',
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `structures`
--

CREATE TABLE `structures` (
  `id` int(11) NOT NULL,
  `rue` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `quartier` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `commune` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `altitude` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `langue_id` int(11) NOT NULL,
  `secteur_id` int(11) NOT NULL,
  `tel1` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `structure_statut` int(11) NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_privilege` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_statut` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_categorie`, `user_privilege`, `user_statut`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cissé Ousmnae', 'ousmanecss@live.fr', 'bonjour', '', '', 0, NULL, NULL, NULL),
(2, 'Alpha Oumar Diallo', 'alpha@gmail.com', 'bonjour', '', '', 0, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `langue_id` (`langue_id`);

--
-- Index pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `langue_id` (`langue_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `langue_id` (`langue_id`);

--
-- Index pour la table `secteurs`
--
ALTER TABLE `secteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `langue_id` (`langue_id`);

--
-- Index pour la table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `filieres`
--
ALTER TABLE `filieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `secteurs`
--
ALTER TABLE `secteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;