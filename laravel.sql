-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jul-2021 às 01:08
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `indicacao`
--

CREATE TABLE `indicacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `indicacao`
--

INSERT INTO `indicacao` (`id`, `nome`, `cpf`, `telefone`, `email`, `status_id`) VALUES
(1, 'WAGNER', '02358956895', '985475896', 'wagner@hotmail.com', 1),
(2, 'Elainesssss', '888.859.874-85', '985447596', 'elaine@yahoo.com', 1),
(4, 'Vagner Serqueira', '256.859.987-25', '25615-1258', 'vagner@oi.com', 2),
(5, 'Isaque', '004.897.985-98', '215025-5898', 'isaque@oi.com', 1),
(15, 'Maria Julia', '123.896.578-32', '912562568', 'maju@oi.com.br', 1),
(16, 'André', '256.958.925-62', '2198255555', 'andre@oi.com', 1),
(18, 'WAGNER', '023.666.457-32', '985475896', 'wagner@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_07_06_090606_create_status_indicacao_table', 1),
(4, '2021_07_06_094709_indicacao', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_indicacao`
--

CREATE TABLE `status_indicacao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `status_indicacao`
--

INSERT INTO `status_indicacao` (`id`, `descricao`) VALUES
(1, 'Iniciada'),
(2, 'Em Processo'),
(3, 'Finalizada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wagner França', 'wagnerofranca@hotmail.com', NULL, '$2y$10$UUrpLyUQPqY6p7xLtcQZLuNImLHR09DPETVJcl52Bk1ggPMW63Qt.', NULL, '2021-07-08 10:24:50', '2021-07-08 10:24:50'),
(2, 'WAGNER', 'wagnero@hotmail.com', NULL, '$2y$10$nsCAxmPq.c2aCGp9c9A/.uMPVW4ddJvRGOYzb4NsCqD5XKW0EH5BK', NULL, '2021-07-08 11:33:08', '2021-07-08 11:33:08'),
(3, 'teste', 'teste@yahoo.com.br', NULL, '$2y$10$7lDZEbn542j9FaeMDLe78ePM0/aNrOxWDCtC5X96bg2y5HKMBCxTq', NULL, '2021-07-08 12:50:28', '2021-07-08 12:50:28'),
(4, 'Elaine', 'elaine@hotmail.com', NULL, '$2y$10$ivcfICJOv0eNGah9VoiY2OOmqCcgpxkC362G/z9mRh1mR3AF4tCBi', NULL, '2021-07-08 13:17:19', '2021-07-08 13:17:19');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `indicacao`
--
ALTER TABLE `indicacao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indicacao_cpf_unique` (`cpf`),
  ADD KEY `indicacao_status_id_foreign` (`status_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `status_indicacao`
--
ALTER TABLE `status_indicacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `indicacao`
--
ALTER TABLE `indicacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `status_indicacao`
--
ALTER TABLE `status_indicacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `indicacao`
--
ALTER TABLE `indicacao`
  ADD CONSTRAINT `indicacao_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status_indicacao` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
