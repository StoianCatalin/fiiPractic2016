-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Dec 2015 la 23:12
-- Versiune server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiipractic`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `abonaments`
--

CREATE TABLE `abonaments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `training_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `haveSubarea` tinyint(4) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `areas`
--

INSERT INTO `areas` (`id`, `name`, `description`, `icon`, `haveSubarea`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Android Pro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-androidpro', 0, 'android-pro', '2015-12-29', '2015-12-29'),
(2, 'Front End Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-frontend', 0, 'front-end-development', '2015-12-29', '2015-12-29'),
(3, 'Back End Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-backend', 1, 'back-end-development', '2015-12-29', '2015-12-29'),
(4, 'Design Graphic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-designgraphic', 0, 'design-graphic', '2015-12-29', '2015-12-29'),
(5, 'Game Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-gamedev', 0, 'game-development', '2015-12-29', '2015-12-29'),
(6, 'DevOps', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-devops', 0, 'devops', '2015-12-29', '2015-12-29'),
(7, 'Project Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-project', 0, 'project-management', '2015-12-29', '2015-12-29'),
(8, 'Communication Skills', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-communication', 0, 'communication-skills', '2015-12-29', '2015-12-29'),
(9, 'Management Antreprenorial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-management', 0, 'management-antreprenorial', '2015-12-29', '2015-12-29');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `training` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `subareas`
--

CREATE TABLE `subareas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `area_id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `subareas`
--

INSERT INTO `subareas` (`id`, `name`, `description`, `area_id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 3, 'icon-backend', 'php', '2015-12-29', '2015-12-29'),
(2, 'Java', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 3, 'icon-backend', 'java', '2015-12-29', '2015-12-29');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `trainings`
--

CREATE TABLE `trainings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `description` text NOT NULL,
  `locuri` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `ziua` date NOT NULL,
  `ora` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `telefon` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `nume`, `type`, `email`, `adresa`, `telefon`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'dasdsadsadsa', 0, 'dsadsadsa@gmail.com', 'ds', '0765434523', '$2y$10$h79Jn.jqofvXtXzm9hN7t.skKi.0AyWJIWT9isJXSd4DfOWUFH//q', '2015-12-28', '2015-12-28', '0FwYu5j8aD4Y8mhQNMfh9gjgi4pqvMYkzQOX6DyowuwOB9XQpv9M9VZ5Kh1G'),
(2, 'Stoian Catalin', 1, 'stoian.ioan.catalin@gmail.com', 'Stdasdsadas', '076543dsas', '$2y$10$iT4jekbtxzT0TPewhTGa.OCxV2/P9yqrFg8RK0e1lGZIRmPrsYABC', '2015-12-28', '2015-12-29', 'SSBf4RtNY0WoKwXw8yMhiJ0iLb1ZAAYxRMbPLft6xCjku837oMitUPJ6AZsL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonaments`
--
ALTER TABLE `abonaments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subareas`
--
ALTER TABLE `subareas`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonaments`
--
ALTER TABLE `abonaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subareas`
--
ALTER TABLE `subareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
