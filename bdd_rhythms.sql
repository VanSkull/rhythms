-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 30 mars 2021 à 09:39
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_rhythms`
--

-- --------------------------------------------------------

--
-- Structure de la table `chanteurs`
--

DROP TABLE IF EXISTS `chanteurs`;
CREATE TABLE IF NOT EXISTS `chanteurs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_genre` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `chanteurs`
--

INSERT INTO `chanteurs` (`id`, `nom`, `photo`, `id_genre`, `created_at`, `updated_at`) VALUES
(1, 'Adèle', '/img/chanteurs/adele.jpg', 5, NULL, NULL),
(2, 'Maroon 5', '/img/chanteurs/maroon5.jpg', 5, NULL, NULL),
(3, 'Eminem', '/img/chanteurs/eminem.jpg', 7, NULL, NULL),
(4, 'Dragonforce', '/img/chanteurs/dragonforce.jpg', 9, NULL, NULL),
(5, 'Elvis Preslay', '/img/chanteurs/elvispreslay.jpg', 9, NULL, NULL),
(6, 'Bebe Rexha', '/img/chanteurs/beberexha.jpg', 5, NULL, NULL),
(7, 'Kanye West', '/img/chanteurs/kanyewest.jpg', 3, NULL, NULL),
(8, 'Johnny Hallyday', '/img/chanteurs/johnnyhallyday.jpg', 9, NULL, NULL),
(9, 'Mozart', '/img/chanteurs/mozart.jpg', 1, NULL, NULL),
(10, 'Chopin', '/img/chanteurs/chopin.jpg', 1, NULL, NULL),
(11, 'Beethoven', '/img/chanteurs/beethoven.jpg', 1, NULL, NULL),
(12, 'Metallica', '/img/chanteurs/metallica.jpg', 4, NULL, NULL),
(13, 'AC/DC', '/img/chanteurs/acdc.jpg', 4, NULL, NULL),
(14, 'Beyoncé', '/img/chanteurs/beyonce.jpg', 8, NULL, NULL),
(15, 'Michael Jackson', '/img/chanteurs/michaeljackson.jpg', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_titre` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_user`, `id_titre`, `created_at`, `updated_at`) VALUES
(19, 2, 6, NULL, NULL),
(17, 1, 3, NULL, NULL),
(20, 2, 2, NULL, NULL),
(18, 1, 6, NULL, NULL),
(16, 1, 2, NULL, NULL),
(21, 2, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `nom`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Classique', '/img/genres/classique.jpg', NULL, NULL),
(2, 'Folk', '/img/genres/folk.jpg', NULL, NULL),
(3, 'Hip-Hop', '/img/genres/hip_hop.jpg', NULL, NULL),
(4, 'Metal', '/img/genres/metal.jpg', NULL, NULL),
(5, 'Pop', '/img/genres/pop.jpg', NULL, NULL),
(6, 'Punk', '/img/genres/punk.jpg', NULL, NULL),
(7, 'Rap', '/img/genres/rap.jpg', NULL, NULL),
(8, 'RnB', '/img/genres/rnb.jpg', NULL, NULL),
(9, 'Rock', '/img/genres/rock.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_15_152018_create_song_table', 1),
(5, '2021_03_15_153930_create_favoris_table', 2),
(6, '2021_03_15_153951_create_chanteurs_table', 2),
(7, '2021_03_15_154014_create_genres_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `song`
--

DROP TABLE IF EXISTS `song`;
CREATE TABLE IF NOT EXISTS `song` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_chanteur` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `song`
--

INSERT INTO `song` (`id`, `titre`, `fichier`, `image`, `id_chanteur`, `id_genre`, `created_at`, `updated_at`) VALUES
(3, 'Can t Help Falling In Love', '/uploads/music_files/BT1sQynVK9q3fzVdt49cRPNHxGleeBm4DEgyJzpm.mp3', '/uploads/music_photos/eyhvHCHs8V8siTLO5PaLUSr0V6WTlwtMx2oysxEW.jpg', 5, 5, '2021-03-29 19:58:26', '2021-03-29 19:58:26'),
(2, 'Through The Fire And Flames', '/uploads/music_files/ViIOuxdrjb42ufsBAdmselrpEfjWfIKval0qEG5a.mp3', '/uploads/music_photos/Oj2lR1hYR0817gRaFdzOTAN787ZgvlwDTvRO8MeD.jpg', 4, 4, '2021-03-29 19:54:01', '2021-03-29 19:54:01'),
(4, 'Für Elise', '/uploads/music_files/CZgc6iqwcntT91HrKCNEeLWT2g6w3HKfHuVk5YMx.mp3', '/uploads/music_photos/u3yNsEZOoCDLLuOl486zkMhduiqPHpq7Zx8VQV2M.jpg', 11, 1, '2021-03-29 20:01:55', '2021-03-29 20:01:55'),
(5, 'Moonlight Sonata', '/uploads/music_files/29FqB9ubHe78ErZECQ4g3Kgqqfz6vdm1OfBsA5up.mp3', '/uploads/music_photos/u2MBtsPgvkYFhWs2DGAOcaKXwlaTFnB5ye7A3lby.jpg', 11, 1, '2021-03-29 20:05:15', '2021-03-29 20:05:15'),
(6, 'Maps', '/uploads/music_files/mkCIgUsnySImjdB2tBnTHq16GHOBbUOsvntMwp7a.mp3', '/uploads/music_photos/17LISpSgUUHa2wLfDgKg6Cu5wN2cWHf5Zzw2OkYF.jpg', 2, 5, '2021-03-29 20:06:49', '2021-03-29 20:06:49'),
(7, 'Animals', '/uploads/music_files/2vfzX190uACJPMAOqOsbXxURMrpGrkyihxC3XVK5.mp3', '/uploads/music_photos/qxZpWfi50RfAP2vCnnBVyUxWW2HiYZcr8vNHYo6k.jpg', 2, 5, '2021-03-29 20:07:45', '2021-03-29 20:07:45'),
(8, 'Girls Like You', '/uploads/music_files/NiuvoiyIHS6Q2fXb8hsh8JP34TayZUgABk6dnrqS.mp3', '/uploads/music_photos/FNeYQuYIbt1Q7QSL3biViAGJ7fOJ5Fi0lpxQUTQ0.jpg', 2, 5, '2021-03-29 20:08:59', '2021-03-29 20:08:59'),
(9, 'I Got You', '/uploads/music_files/xiMmso9k8u073GQlEZ2LmSElZ7UHNuqfLBggOGRO.mp3', '/uploads/music_photos/yn9tma7S1jSy6cTU3RSbs93Q7fp9xTdzPuxqwKOi.jpg', 6, 5, '2021-03-29 20:10:16', '2021-03-29 20:10:16'),
(10, 'I m A Mess', '/uploads/music_files/ZyTqP5IOgm2NJbn83Q7mQsMyBQOC91ScLiJLsnhs.mp3', '/uploads/music_photos/Iln1h5XxvpyZIhFpDkzx6Qz1zDzMXGkrAqi2EAih.jpg', 6, 5, '2021-03-29 20:10:50', '2021-03-29 20:10:50'),
(11, 'Highway To Hell', '/uploads/music_files/NkGtBT3UWTZDaUst3qPHpSbp5KqQJowPWwMN6iOG.mp3', '/uploads/music_photos/UJI6m5RPonIf8VtVPfMNR2NRdXmlWIMP1ohgWOcJ.jpg', 13, 4, '2021-03-29 20:13:46', '2021-03-29 20:13:46'),
(12, 'Fade To Black', '/uploads/music_files/npKcvkRsjAX8gN0ti7wkCyTSK5QCa02shMrAt9IP.mp3', '/uploads/music_photos/htmdHF42oxUYbc7gP3cLnfjp1rd6W9w0i1qX3bUu.jpg', 12, 9, '2021-03-29 20:15:48', '2021-03-29 20:15:48'),
(13, 'Spring Waltz', '/uploads/music_files/FLVtBytUecSHNrTtWBhyhQMjPYMMeFtrcSxnfEwT.mp3', '/uploads/music_photos/JZTJR2EEXyLRCo3X4CsFCJb73Nns0DHUBiVxIcQB.jpg', 10, 1, '2021-03-29 20:20:12', '2021-03-29 20:20:12'),
(14, 'Turkish March', '/uploads/music_files/5iKXS4NNOU9gMP44n5TkKFiQ6UZauWo2Ey17T1GD.mp3', '/uploads/music_photos/9xFgNHlM5LiiTKOHNsCFu6B1tABlBGC2mnZWHFkk.jpg', 9, 1, '2021-03-29 20:22:12', '2021-03-29 20:22:12'),
(15, 'Stronger', '/uploads/music_files/pJDDo59lfqxZpFUsml6qSbtrpDFnnU7Pjla3tzBR.mp3', '/uploads/music_photos/q72Uqc3Ki4fo8z99RJQm9H1DcC9nqTDBKQjsUHCX.jpg', 7, 3, '2021-03-29 20:24:32', '2021-03-29 20:24:32');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Valentin', 1, 'valentinvanh@gmail.com', NULL, '$2y$10$X532.UCR2i7q1InjCZYFF.zhA5eSpmET8U3qUjXEbfdqegOQBZ2g6', '3wArWp7beaRzOVje27ZGnZfCVsQF8iD9JwweBIwWOokOEQ6xOG2u4MBNK7HI', '2021-03-22 08:25:28', '2021-03-22 08:25:28'),
(2, 'test', 0, 'test@gmail.com', NULL, '$2y$10$2ffkKDZfVQW3EUcodc.oxeKMAsJrN1TBXPyWmf1g/tgST252R1zUq', 'ntDwL7odqA8KrNmY6BAVmyw2edfz4MDMqfEK2AKJeGIOcGeyZI7rUuWq6COl', '2021-03-28 14:07:44', '2021-03-28 14:07:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
