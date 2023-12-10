-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 09 déc. 2023 à 09:27
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evaluation12`
--

-- --------------------------------------------------------

--
-- Structure de la table `action_events`
--

CREATE TABLE `action_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` char(36) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `actionable_type` varchar(255) NOT NULL,
  `actionable_id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fields` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'running',
  `exception` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext DEFAULT NULL,
  `changes` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `action_events`
--

INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`) VALUES
(1, '9acc4856-a1af-4389-b235-07122103a75f', 1, 'Create', 'App\\Models\\Categorie', 1, 'App\\Models\\Categorie', 1, 'App\\Models\\Categorie', 1, '', 'finished', '', '2023-12-08 06:49:36', '2023-12-08 06:49:36', NULL, '{\"name\":\"Mariage\",\"slug\":\"mariage\",\"description\":null,\"updated_at\":\"2023-12-08T07:49:36.000000Z\",\"created_at\":\"2023-12-08T07:49:36.000000Z\",\"id\":1}'),
(2, '9acc486f-4a14-452b-bb80-56585c8f6ad9', 1, 'Create', 'App\\Models\\Categorie', 2, 'App\\Models\\Categorie', 2, 'App\\Models\\Categorie', 2, '', 'finished', '', '2023-12-08 06:49:52', '2023-12-08 06:49:52', NULL, '{\"name\":\"Grossesse\",\"slug\":\"grossesse\",\"description\":null,\"updated_at\":\"2023-12-08T07:49:52.000000Z\",\"created_at\":\"2023-12-08T07:49:52.000000Z\",\"id\":2}'),
(3, '9acc4878-cda3-439e-acbf-baf51acb1635', 1, 'Create', 'App\\Models\\Categorie', 3, 'App\\Models\\Categorie', 3, 'App\\Models\\Categorie', 3, '', 'finished', '', '2023-12-08 06:49:58', '2023-12-08 06:49:58', NULL, '{\"name\":\"B\\u00e9b\\u00e9\",\"slug\":\"bebe\",\"description\":null,\"updated_at\":\"2023-12-08T07:49:58.000000Z\",\"created_at\":\"2023-12-08T07:49:58.000000Z\",\"id\":3}'),
(4, '9acc4882-a56c-4d12-8225-2c6e04ee0736', 1, 'Create', 'App\\Models\\Categorie', 4, 'App\\Models\\Categorie', 4, 'App\\Models\\Categorie', 4, '', 'finished', '', '2023-12-08 06:50:05', '2023-12-08 06:50:05', NULL, '{\"name\":\"Famille\",\"slug\":\"famille\",\"description\":null,\"updated_at\":\"2023-12-08T07:50:05.000000Z\",\"created_at\":\"2023-12-08T07:50:05.000000Z\",\"id\":4}'),
(5, '9acc488b-12a1-41a3-a2be-b646bb5dbeba', 1, 'Create', 'App\\Models\\Categorie', 5, 'App\\Models\\Categorie', 5, 'App\\Models\\Categorie', 5, '', 'finished', '', '2023-12-08 06:50:10', '2023-12-08 06:50:10', NULL, '{\"name\":\"Bapt\\u00eame\",\"slug\":\"bapteme\",\"description\":null,\"updated_at\":\"2023-12-08T07:50:10.000000Z\",\"created_at\":\"2023-12-08T07:50:10.000000Z\",\"id\":5}'),
(6, '9acc4893-e00e-417a-b129-ee3491314300', 1, 'Create', 'App\\Models\\Categorie', 6, 'App\\Models\\Categorie', 6, 'App\\Models\\Categorie', 6, '', 'finished', '', '2023-12-08 06:50:16', '2023-12-08 06:50:16', NULL, '{\"name\":\"Couple\",\"slug\":\"couple\",\"description\":null,\"updated_at\":\"2023-12-08T07:50:16.000000Z\",\"created_at\":\"2023-12-08T07:50:16.000000Z\",\"id\":6}'),
(7, '9acc489f-941a-409e-a7d0-475f0c2068f7', 1, 'Create', 'App\\Models\\Categorie', 7, 'App\\Models\\Categorie', 7, 'App\\Models\\Categorie', 7, '', 'finished', '', '2023-12-08 06:50:24', '2023-12-08 06:50:24', NULL, '{\"name\":\"Portrait\",\"slug\":\"portrait\",\"description\":null,\"updated_at\":\"2023-12-08T07:50:24.000000Z\",\"created_at\":\"2023-12-08T07:50:24.000000Z\",\"id\":7}'),
(8, '9acc4b88-30b3-4d67-ab92-1ad6c3e1e595', 1, 'Create', 'App\\Models\\Post', 1, 'App\\Models\\Post', 1, 'App\\Models\\Post', 1, '', 'finished', '', '2023-12-08 06:58:32', '2023-12-08 06:58:32', NULL, '{\"user_id\":\"1\",\"title\":\"Juste moi\",\"content\":\"<div class=\\\"page\\\" title=\\\"Page 4\\\">\\r\\n<div class=\\\"layoutArea\\\">\\r\\n<div class=\\\"column\\\">\\r\\n<ul>\\r\\n<li>\\r\\n<p>Se\\u0301ance pour une personne, en exte\\u0301rieur ou en studio<\\/p>\\r\\n<\\/li>\\r\\n<\\/ul>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\",\"prix\":\"130\",\"status\":true,\"updated_at\":\"2023-12-08T07:58:32.000000Z\",\"created_at\":\"2023-12-08T07:58:32.000000Z\",\"id\":1}'),
(9, '9acc4bb0-7110-4c90-bc77-ce0d49627fd6', 1, 'Create', 'App\\Models\\Post', 2, 'App\\Models\\Post', 2, 'App\\Models\\Post', 2, '', 'finished', '', '2023-12-08 06:58:58', '2023-12-08 06:58:58', NULL, '{\"user_id\":\"1\",\"title\":\"Pour deux\",\"content\":\"<div class=\\\"page\\\" title=\\\"Page 4\\\">\\r\\n<div class=\\\"layoutArea\\\">\\r\\n<div class=\\\"column\\\">\\r\\n<ul>\\r\\n<li>\\r\\n<p>Pour deux personnes, en exte\\u0301rieur ou en studio<\\/p>\\r\\n<\\/li>\\r\\n<\\/ul>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\",\"prix\":\"195\",\"status\":true,\"updated_at\":\"2023-12-08T07:58:58.000000Z\",\"created_at\":\"2023-12-08T07:58:58.000000Z\",\"id\":2}'),
(10, '9acc4be9-b1a6-462d-94cb-b635dbaea1d8', 1, 'Create', 'App\\Models\\Post', 3, 'App\\Models\\Post', 3, 'App\\Models\\Post', 3, '', 'finished', '', '2023-12-08 06:59:36', '2023-12-08 06:59:36', NULL, '{\"user_id\":\"1\",\"title\":\"Famille\",\"content\":\"<div class=\\\"page\\\" title=\\\"Page 4\\\">\\r\\n<div class=\\\"layoutArea\\\">\\r\\n<div class=\\\"column\\\">\\r\\n<ul>\\r\\n<li>\\r\\n<p>Pour la famille ou les amis jusqu&rsquo;a\\u0300 4 personnes, en exte\\u0301rieur ou en studio.<\\/p>\\r\\n<\\/li>\\r\\n<li>\\r\\n<p>30 euros en supple\\u0301ment par personne au-dela\\u0300 de 4 (hormis enfant jusqu&rsquo;a\\u0300 2 ans).<\\/p>\\r\\n<\\/li>\\r\\n<\\/ul>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\",\"prix\":\"220\",\"status\":true,\"updated_at\":\"2023-12-08T07:59:36.000000Z\",\"created_at\":\"2023-12-08T07:59:36.000000Z\",\"id\":3}'),
(11, '9acc4c0d-5635-48a4-9fae-1c7f8024fbe8', 1, 'Create', 'App\\Models\\Post', 4, 'App\\Models\\Post', 4, 'App\\Models\\Post', 4, '', 'finished', '', '2023-12-08 06:59:59', '2023-12-08 06:59:59', NULL, '{\"user_id\":\"1\",\"title\":\"Il \\u00e9tait une fois\",\"content\":\"<div class=\\\"page\\\" title=\\\"Page 4\\\">\\r\\n<div class=\\\"layoutArea\\\">\\r\\n<div class=\\\"column\\\">\\r\\n<ul>\\r\\n<li>\\r\\n<p>Photo de grossesse (A\\u0300 votre domicile, en exte\\u0301rieur ou en studio)<\\/p>\\r\\n<\\/li>\\r\\n<\\/ul>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\",\"prix\":\"160\",\"status\":true,\"updated_at\":\"2023-12-08T07:59:59.000000Z\",\"created_at\":\"2023-12-08T07:59:59.000000Z\",\"id\":4}'),
(12, '9acc4c2a-9419-4066-ad8d-5b53c50386b8', 1, 'Create', 'App\\Models\\Post', 5, 'App\\Models\\Post', 5, 'App\\Models\\Post', 5, '', 'finished', '', '2023-12-08 07:00:18', '2023-12-08 07:00:18', NULL, '{\"user_id\":\"1\",\"title\":\"Mon b\\u00e9b\\u00e9\",\"content\":\"<div class=\\\"page\\\" title=\\\"Page 4\\\">\\r\\n<div class=\\\"layoutArea\\\">\\r\\n<div class=\\\"column\\\">\\r\\n<ul>\\r\\n<li>\\r\\n<p>Photo d&rsquo;enfant jusqu&rsquo;a\\u0300 3 ans (photo a\\u0300 domicile)<\\/p>\\r\\n<\\/li>\\r\\n<\\/ul>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\",\"prix\":\"100\",\"status\":true,\"updated_at\":\"2023-12-08T08:00:18.000000Z\",\"created_at\":\"2023-12-08T08:00:18.000000Z\",\"id\":5}'),
(13, '9acc4c60-820e-483c-9317-f0543228c847', 1, 'Create', 'App\\Models\\Post', 6, 'App\\Models\\Post', 6, 'App\\Models\\Post', 6, '', 'finished', '', '2023-12-08 07:00:53', '2023-12-08 07:00:53', NULL, '{\"user_id\":\"1\",\"title\":\"J\\u2019immortalise l\\u2019\\u00e9v\\u00e9nement\",\"content\":\"<div class=\\\"page\\\" title=\\\"Page 4\\\">\\r\\n<div class=\\\"layoutArea\\\">\\r\\n<div class=\\\"column\\\">\\r\\n<ul>\\r\\n<li>\\r\\n<p>Prestation de mariage ou bapte\\u0302me sur devis<\\/p>\\r\\n<\\/li>\\r\\n<\\/ul>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\",\"prix\":\"0\",\"status\":true,\"updated_at\":\"2023-12-08T08:00:53.000000Z\",\"created_at\":\"2023-12-08T08:00:53.000000Z\",\"id\":6}'),
(14, '9acc4d22-d75e-4332-b96a-9dd8ba96af8f', 1, 'Create', 'App\\Models\\Medias', 1, 'App\\Models\\Medias', 1, 'App\\Models\\Medias', 1, '', 'finished', '', '2023-12-08 07:03:01', '2023-12-08 07:03:01', NULL, '{\"user_id\":\"1\",\"file_name\":\"Photo 1\",\"file_path\":\"8TeSBgdlQYBPDOUEesfC7ihog5od9ZHYZAwNhjgR.png\",\"updated_at\":\"2023-12-08T08:03:01.000000Z\",\"created_at\":\"2023-12-08T08:03:01.000000Z\",\"id\":1}'),
(15, '9acc4d3f-ba9e-4bd3-baab-81b4453c52b3', 1, 'Create', 'App\\Models\\Medias', 2, 'App\\Models\\Medias', 2, 'App\\Models\\Medias', 2, '', 'finished', '', '2023-12-08 07:03:20', '2023-12-08 07:03:20', NULL, '{\"user_id\":\"1\",\"file_name\":\"Photo 2\",\"file_path\":\"dfqufcU3FM41X36IOhnSOdeRtTO78v37IWqCgzeb.png\",\"updated_at\":\"2023-12-08T08:03:20.000000Z\",\"created_at\":\"2023-12-08T08:03:20.000000Z\",\"id\":2}'),
(16, '9acc4d5a-1bf5-4a3a-b172-d12817e649b7', 1, 'Create', 'App\\Models\\Medias', 3, 'App\\Models\\Medias', 3, 'App\\Models\\Medias', 3, '', 'finished', '', '2023-12-08 07:03:37', '2023-12-08 07:03:37', NULL, '{\"user_id\":\"1\",\"file_name\":\"Photo\",\"file_path\":\"jRAgqaqxqYh6wGlxQs1jwcuvmRrSCOjbT8pV5kUT.png\",\"updated_at\":\"2023-12-08T08:03:37.000000Z\",\"created_at\":\"2023-12-08T08:03:37.000000Z\",\"id\":3}'),
(17, '9acc4d73-fc9d-4c6f-a2d7-768fbd87d7a4', 1, 'Create', 'App\\Models\\Medias', 4, 'App\\Models\\Medias', 4, 'App\\Models\\Medias', 4, '', 'finished', '', '2023-12-08 07:03:54', '2023-12-08 07:03:54', NULL, '{\"user_id\":\"1\",\"file_name\":\"Photo 4\",\"file_path\":\"3xeAuFvEXqskBiXaBlHYsxDLIksCLxGBJ5O2YXKh.png\",\"updated_at\":\"2023-12-08T08:03:54.000000Z\",\"created_at\":\"2023-12-08T08:03:54.000000Z\",\"id\":4}'),
(18, '9acc4d92-a7e8-43e8-bd3a-b809b8ff6081', 1, 'Create', 'App\\Models\\Medias', 5, 'App\\Models\\Medias', 5, 'App\\Models\\Medias', 5, '', 'finished', '', '2023-12-08 07:04:14', '2023-12-08 07:04:14', NULL, '{\"user_id\":\"1\",\"file_name\":\"Photo 5\",\"file_path\":\"upkwStPhwMEVXA0fMlPA3asxwfv3ClD2KVWaGccy.png\",\"updated_at\":\"2023-12-08T08:04:14.000000Z\",\"created_at\":\"2023-12-08T08:04:14.000000Z\",\"id\":5}'),
(19, '9acc4dd7-7ea0-4f9a-a76c-006564fb1f0e', 1, 'Update', 'App\\Models\\Medias', 3, 'App\\Models\\Medias', 3, 'App\\Models\\Medias', 3, '', 'finished', '', '2023-12-08 07:04:59', '2023-12-08 07:04:59', '{\"file_name\":\"Photo\",\"file_path\":\"jRAgqaqxqYh6wGlxQs1jwcuvmRrSCOjbT8pV5kUT.png\"}', '{\"file_name\":\"Photo 3\",\"file_path\":\"2LjQexa6K3jzW3JXqGOjf0Hn7obfCsxmKPDjiGs6.png\"}'),
(20, '9acd4777-22a2-4ad8-b0e2-bbb6027b97b5', 1, 'Update', 'App\\Models\\Post', 1, 'App\\Models\\Post', 1, 'App\\Models\\Post', 1, '', 'finished', '', '2023-12-08 18:42:59', '2023-12-08 18:42:59', '{\"icon\":null,\"status\":\"1\"}', '{\"icon\":\"fa-user\",\"status\":true}'),
(21, '9acd6f60-c931-410e-a742-c2cde45251d1', 1, 'Update', 'App\\Models\\Medias', 1, 'App\\Models\\Medias', 1, 'App\\Models\\Medias', 1, '', 'finished', '', '2023-12-08 20:34:35', '2023-12-08 20:34:35', '{\"categorie_id\":null,\"file_path\":\"8TeSBgdlQYBPDOUEesfC7ihog5od9ZHYZAwNhjgR.png\"}', '{\"categorie_id\":\"1\",\"file_path\":\"FKcOo7EkRAJgjCLka6U85BKaTbCaQdGKxAlyqN1f.jpg\"}'),
(22, '9acda041-98c9-4992-a906-4fa5bd44ac08', 1, 'Update', 'App\\Models\\Medias', 5, 'App\\Models\\Medias', 5, 'App\\Models\\Medias', 5, '', 'finished', '', '2023-12-08 22:51:16', '2023-12-08 22:51:16', '{\"categorie_id\":null}', '{\"categorie_id\":\"2\"}'),
(23, '9acda058-3a2f-4c5b-9b77-450ffd4b111a', 1, 'Update', 'App\\Models\\Medias', 4, 'App\\Models\\Medias', 4, 'App\\Models\\Medias', 4, '', 'finished', '', '2023-12-08 22:51:31', '2023-12-08 22:51:31', '{\"categorie_id\":null}', '{\"categorie_id\":\"3\"}'),
(24, '9acda069-f33e-47ab-8882-9f9ee62e4c51', 1, 'Update', 'App\\Models\\Medias', 3, 'App\\Models\\Medias', 3, 'App\\Models\\Medias', 3, '', 'finished', '', '2023-12-08 22:51:42', '2023-12-08 22:51:42', '{\"categorie_id\":null}', '{\"categorie_id\":\"4\"}'),
(25, '9acda08b-4462-402b-b7d0-7594ca0ebee9', 1, 'Update', 'App\\Models\\Medias', 2, 'App\\Models\\Medias', 2, 'App\\Models\\Medias', 2, '', 'finished', '', '2023-12-08 22:52:04', '2023-12-08 22:52:04', '{\"categorie_id\":null}', '{\"categorie_id\":\"7\"}');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Mariage', 'mariage', NULL, '2023-12-08 06:49:36', '2023-12-08 06:49:36'),
(2, 'Grossesse', 'grossesse', NULL, '2023-12-08 06:49:52', '2023-12-08 06:49:52'),
(3, 'Bébé', 'bebe', NULL, '2023-12-08 06:49:58', '2023-12-08 06:49:58'),
(4, 'Famille', 'famille', NULL, '2023-12-08 06:50:05', '2023-12-08 06:50:05'),
(5, 'Baptême', 'bapteme', NULL, '2023-12-08 06:50:10', '2023-12-08 06:50:10'),
(6, 'Couple', 'couple', NULL, '2023-12-08 06:50:16', '2023-12-08 06:50:16'),
(7, 'Portrait', 'portrait', NULL, '2023-12-08 06:50:24', '2023-12-08 06:50:24');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `sujet`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ismael Tahirou Oumarou', 'tahirouismael123@gmail.com', 'hello', '2023-12-08 17:12:16', '2023-12-08 17:12:16');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `alt_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `medias`
--

INSERT INTO `medias` (`id`, `user_id`, `categorie_id`, `file_name`, `file_path`, `file_type`, `file_size`, `alt_text`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 'Photo 1', 'FKcOo7EkRAJgjCLka6U85BKaTbCaQdGKxAlyqN1f.jpg', NULL, NULL, NULL, '2023-12-08 07:03:01', '2023-12-08 20:34:35'),
(2, '1', 7, 'Photo 2', 'dfqufcU3FM41X36IOhnSOdeRtTO78v37IWqCgzeb.png', NULL, NULL, NULL, '2023-12-08 07:03:20', '2023-12-08 22:52:04'),
(3, '1', 4, 'Photo 3', '2LjQexa6K3jzW3JXqGOjf0Hn7obfCsxmKPDjiGs6.png', NULL, NULL, NULL, '2023-12-08 07:03:37', '2023-12-08 22:51:42'),
(4, '1', 3, 'Photo 4', '3xeAuFvEXqskBiXaBlHYsxDLIksCLxGBJ5O2YXKh.png', NULL, NULL, NULL, '2023-12-08 07:03:54', '2023-12-08 22:51:31'),
(5, '1', 2, 'Photo 5', 'upkwStPhwMEVXA0fMlPA3asxwfv3ClD2KVWaGccy.png', NULL, NULL, NULL, '2023-12-08 07:04:14', '2023-12-08 22:51:16');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_01_000000_create_action_events_table', 1),
(4, '2019_05_10_000000_add_fields_to_action_events_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2021_08_25_193039_create_nova_notifications_table', 1),
(8, '2022_04_26_000000_add_fields_to_nova_notifications_table', 1),
(9, '2023_04_17_102234_create_table_posts', 1),
(10, '2023_04_17_102300_create_table_categories', 1),
(11, '2023_04_17_102315_create_table_tags', 1),
(12, '2023_04_17_102353_create_table_comments', 1),
(13, '2023_04_17_102408_create_table_medias', 1),
(14, '2023_04_17_104526_create_table_postcategories', 1),
(15, '2023_04_17_105932_add_role_to_users_table', 1),
(16, '2023_04_18_164156_add_to_posts_categorie_id_colunm', 1),
(17, '2023_04_24_220938_create_table_contact', 2);

-- --------------------------------------------------------

--
-- Structure de la table `nova_notifications`
--

CREATE TABLE `nova_notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `prix` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `prix`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Juste moi', '<div class=\"page\" title=\"Page 4\">\r\n<div class=\"layoutArea\">\r\n<div class=\"column\">\r\n<ul>\r\n<li>\r\n<p>Séance pour une personne, en extérieur ou en studio</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '130', 'fa-user', '1', '2023-12-08 06:58:32', '2023-12-08 18:42:59'),
(2, 1, 'Pour deux', '<div class=\"page\" title=\"Page 4\">\r\n<div class=\"layoutArea\">\r\n<div class=\"column\">\r\n<ul>\r\n<li>\r\n<p>Pour deux personnes, en extérieur ou en studio</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '195', 'fa-users', '1', '2023-12-08 06:58:58', '2023-12-08 06:58:58'),
(3, 1, 'Famille', '<div class=\"page\" title=\"Page 4\">\r\n<div class=\"layoutArea\">\r\n<div class=\"column\">\r\n<ul>\r\n<li>\r\n<p>Pour la famille ou les amis jusqu&rsquo;à 4 personnes, en extérieur ou en studio.</p>\r\n</li>\r\n<li>\r\n<p>30 euros en supplément par personne au-delà de 4 (hormis enfant jusqu&rsquo;à 2 ans).</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '220', 'fa-users', '1', '2023-12-08 06:59:36', '2023-12-08 06:59:36'),
(4, 1, 'Il était une fois', '<div class=\"page\" title=\"Page 4\">\r\n<div class=\"layoutArea\">\r\n<div class=\"column\">\r\n<ul>\r\n<li>\r\n<p>Photo de grossesse (À votre domicile, en extérieur ou en studio)</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '160', 'fa-globe', '1', '2023-12-08 06:59:59', '2023-12-08 06:59:59'),
(5, 1, 'Mon bébé', '<div class=\"page\" title=\"Page 4\">\r\n<div class=\"layoutArea\">\r\n<div class=\"column\">\r\n<ul>\r\n<li>\r\n<p>Photo d&rsquo;enfant jusqu&rsquo;à 3 ans (photo à domicile)</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '100', 'fa-baby', '1', '2023-12-08 07:00:18', '2023-12-08 07:00:18'),
(6, 1, 'J’immortalise l’événement', '<div class=\"page\" title=\"Page 4\">\r\n<div class=\"layoutArea\">\r\n<div class=\"column\">\r\n<ul>\r\n<li>\r\n<p>Prestation de mariage ou baptême sur devis</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '0', 'fa-ring', '1', '2023-12-08 07:00:53', '2023-12-08 07:00:53');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$skmaezr79HByNW9m2.s5fuQ1zpoBA/UVQxh3cnP44ZUNEvifIKtMu', NULL, '2023-12-07 22:06:09', '2023-12-07 22:06:09', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `action_events`
--
ALTER TABLE `action_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  ADD KEY `action_events_target_type_target_id_index` (`target_type`,`target_id`),
  ADD KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  ADD KEY `action_events_user_id_index` (`user_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat` (`categorie_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nova_notifications`
--
ALTER TABLE `nova_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `action_events`
--
ALTER TABLE `action_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
