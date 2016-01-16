-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2016 at 08:56 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiipractic_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `training_id` int(3) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `user_id`, `training_id`, `trainer_id`, `created_at`, `updated_at`) VALUES
(1, 8, 3, 0, '2016-01-16', '2016-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subareas_count` int(1) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(120) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(120) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `subareas_count`, `description`, `title`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'Android Pro', 'icon-androidpro', 'android-pro', '0000-00-00', '0000-00-00'),
(2, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'Front End Development', 'icon-frontend', 'front-end-development', '0000-00-00', '0000-00-00'),
(3, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'Back End Development', 'icon-backend', 'back-end-development', '0000-00-00', '0000-00-00'),
(4, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'Design Graphic', 'icon-designgraphic', 'design-graphic', '0000-00-00', '0000-00-00'),
(5, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'Game Development', 'icon-gamedev', 'game-development', '0000-00-00', '0000-00-00'),
(6, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'DevOps', 'icon-devops', 'devops', '0000-00-00', '0000-00-00'),
(7, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'Project Management', 'icon-project', 'project-management', '0000-00-00', '0000-00-00'),
(8, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'Communication Skills', 'icon-communication', 'communication-skills', '0000-00-00', '0000-00-00'),
(9, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'Management Antreprenorial', 'icon-management', 'management-antreprenorial', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(3) NOT NULL,
  `training_id` int(3) NOT NULL,
  `trainer_id` int(3) NOT NULL,
  `group_name` varchar(60) NOT NULL,
  `groupOrder` int(11) NOT NULL,
  `data` varchar(120) NOT NULL,
  `ora` varchar(120) NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `training_id`, `trainer_id`, `group_name`, `groupOrder`, `data`, `ora`, `count`, `created_at`, `updated_at`) VALUES
(1, 3, 8, 'PHP A1', 1, '20/02/2016', '10:00', 35, '2016-01-15', '2016-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `posted_by` int(3) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `training_id`, `question`, `posted_by`, `required`, `created_at`, `updated_at`) VALUES
(6, 3, 'lorem ipsum dolor sit amet?', 8, 1, '2016-01-16', '2016-01-16'),
(7, 3, 'Lorem ipsum dolor sit met?', 8, 1, '2016-01-16', '2016-01-16'),
(8, 3, 'Lorem ipsum dolor sit amet?', 8, 1, '2016-01-16', '2016-01-16'),
(9, 4, 'Lorem ipsum dolor sit amet?', 8, 0, '2016-01-16', '2016-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(3) NOT NULL,
  `response` text NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `question_id`, `response`, `applicant_id`, `created_at`, `updated_at`) VALUES
(19, 6, 'raspuns1', 8, '2016-01-16', '2016-01-16'),
(20, 7, 'raspuns2', 8, '2016-01-16', '2016-01-16'),
(21, 8, 'raspuns3', 8, '2016-01-16', '2016-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'user', '0000-00-00', '0000-00-00'),
(2, 'admin', '0000-00-00', '0000-00-00'),
(3, 'trainer', '0000-00-00', '0000-00-00'),
(4, 'sponsor', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(3) NOT NULL,
  `name` varchar(120) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subareas`
--

CREATE TABLE `subareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_id` int(1) NOT NULL,
  `title` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(120) NOT NULL,
  `link` varchar(120) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subareas`
--

INSERT INTO `subareas` (`id`, `area_id`, `title`, `description`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 3, 'PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-backend', 'php', '0000-00-00', '0000-00-00'),
(2, 3, 'Java', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-backend', 'java', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `area_id` int(11) NOT NULL,
  `subarea_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `locuri` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `name`, `description`, `image`, `area_id`, `subarea_id`, `link`, `locuri`, `created_at`, `updated_at`) VALUES
(1, 'Android Pro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris sapien, tristique at odio et, porttitor feugiat leo. Curabitur aliquam luctus sem vel scelerisque. Integer dignissim nisl quis ornare commodo. Maecenas eros eros, mattis ac magna in, elementum sagittis sem. Aenean consectetur auctor scelerisque.', 'icon-androidpro', 1, 0, 'android-pro', 35, '2016-01-11', '2016-01-11'),
(2, 'Frontend', 'Lorem ipsum dolor sit amet', 'icon-frontend', 2, 0, 'front-end-development', 35, '2016-01-11', '2016-01-11'),
(3, 'PHP', 'Lorem ipsum dolor sit amet', 'icon-backend', 3, 1, 'php', 35, '2016-01-11', '2016-01-11'),
(4, 'Java', 'Lorem ipsum dolor sit amet', 'icon-backend', 3, 2, 'java', 35, '2016-01-11', '2016-01-11'),
(5, 'Design Grafic', 'Lorem ipsum dolor sit amet', 'icon-designgraphic', 4, 0, 'design-graphic', 35, '2016-01-11', '2016-01-11'),
(6, 'Game Development', 'Lorem ipsum dolor sit amet', 'icon-gamedev', 5, 0, 'game-development', 35, '2016-01-11', '2016-01-11'),
(7, 'DevOps', 'Lorem ipsum dolor sit amet', 'icon-devops', 6, 0, 'devops', 35, '2016-01-11', '2016-01-11'),
(8, 'Project Management', 'Lorem ipsum dolor sit amet', 'icon-project', 7, 0, 'project-management', 35, '2016-01-11', '2016-01-11'),
(9, 'Communication skills', 'Lorem ipsum dolor sit amet', 'icon-communication', 8, 0, 'communication-skills', 35, '2016-01-11', '2016-01-11'),
(10, 'Management Antreprenorial', 'Lorem ipsum dolor sit amet', 'icon-management', 9, 0, 'management-antreprenorial', 35, '2016-01-11', '2016-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(2) NOT NULL DEFAULT '1',
  `username` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `email`, `adress`, `phone`, `created_at`, `updated_at`, `remember_token`) VALUES
(7, 3, 'Stoian Catalin', '$2y$10$Lc4tBmnzR0MSVBozKswNvOz4liiq0qeIYJyhVP0e5yuCin/d480PO', 'stoian.ioan.catalin@gmail.com', 'Lozoveni', '0754312343', '2016-01-01', '2016-01-01', 'qggviIidDI1Vapp92sMcuP04yh8FXsQsaBJoqmLoCtJ97soCiWmtNDleq7Fb'),
(8, 3, 'Bogatu Ion', '$2y$10$2ChaKaGOQyFTo1/xjq0FfOnAPmPoXeME4if/yLEsfmuXu6qwLW5MC', 'ionbogatu@gmail.com', 'Lorem ipsum', '0751234567', '2016-01-01', '2016-01-16', 'jD6fyziuHUxx0vTzQmCK8911LN2EXHV7Jd4BycNoI5PowKlsVn49imcNzm1R');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subareas`
--
ALTER TABLE `subareas`
  ADD PRIMARY KEY (`id`),
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subareas`
--
ALTER TABLE `subareas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
