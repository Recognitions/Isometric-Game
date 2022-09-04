-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Mar-2022 às 22:17
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `signalsdatabase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `items_data`
--

CREATE TABLE `items_data` (
  `item_id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` tinyint(4) NOT NULL,
  `token` int(11) NOT NULL,
  `gold` int(11) NOT NULL,
  `creation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `masterkey`
--

CREATE TABLE `masterkey` (
  `keyC` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `masterkey`
--

INSERT INTO `masterkey` (`keyC`) VALUES
('Ékstasisêxtaseçançan195200');

-- --------------------------------------------------------

--
-- Estrutura da tabela `spaces_data`
--

CREATE TABLE `spaces_data` (
  `space_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `link` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_size` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiles` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `spaces_data`
--

INSERT INTO `spaces_data` (`space_id`, `owner_id`, `link`, `name`, `description`, `image`, `space_size`, `tiles`) VALUES
(1, 22, 'ola', 'Casinha', '', 'https://th.bing.com/th/id/R.1740fc7285fca45fbcb10fd8f4b7278f?rik=Xejc8Tve6be3eA&pid=ImgRaw&r=0', '4', ''),
(2, 22, 'rapaz', 'Coito 2dddddddddddddddddd', '', 'https://external-preview.redd.it/Y9EUK5N5cqr8hQJ7DQ195xZbC2vHwaIgVhzJehHd2w8.jpg?auto=webp&s=62e2325745059236ef5eaff5f7793eb5e83d5534', '0', ''),
(3, 23, 'Gelff', 'Space from Gelff', 'This is my inicial space', '../content/media/spaces/default.jpg', '0', ''),
(4, 24, 'bola', 'Space from bola', 'This is my inicial space', '../content/media/spaces/default.jpg', '10', '0'),
(5, 25, 'mikasa', 'Space from Mikasa', 'This is my inicial space', '../content/media/spaces/default.jpg', '5', 'colors[0],colors[1]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `spaces_textures`
--

CREATE TABLE `spaces_textures` (
  `texture_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `spaces_textures`
--

INSERT INTO `spaces_textures` (`texture_id`, `type`, `url`) VALUES
(1, 1, '../content/spaces/base/floor/grass.jpg'),
(2, 1, '../content/spaces/base/floor/grass2.jpg'),
(3, 1, '../content/spaces/base/floor/grass3.jpg'),
(4, 1, '../content/spaces/base/floor/water.png'),
(5, 1, '../content/spaces/base/floor/wood1.jfif'),
(6, 1, '../content/spaces/base/floor/sand1.jfif'),
(7, 1, '../content/spaces/base/floor/rock2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_credits`
--

CREATE TABLE `users_credits` (
  `user_id` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `gold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users_credits`
--

INSERT INTO `users_credits` (`user_id`, `token`, `gold`) VALUES
(22, 1000, 100),
(23, 1000, 100),
(24, 1000, 100),
(25, 1000, 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_custom`
--

CREATE TABLE `users_custom` (
  `user_id` int(11) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `avatar` int(11) NOT NULL,
  `pant` int(11) NOT NULL,
  `shirt` int(11) NOT NULL,
  `shoe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_data`
--

CREATE TABLE `users_data` (
  `user_id` int(11) NOT NULL,
  `nickname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users_data`
--

INSERT INTO `users_data` (`user_id`, `nickname`, `email`, `pass`, `creation`, `gender`) VALUES
(22, 'gabi', 'gabi@gmail.com', 'a0d499c751053663c611a32779a57104', '20/03/22', ''),
(23, 'Gelff', 'gelff@gmail.com', '6c9962c9f2dfc6d96049422ad5f349b8', '22/03/22', ''),
(24, 'BOLA', 'bola@gmail.com', 'aec07f935649a5b028c070251f617de7', '22/03/22', 'm'),
(25, 'Mikasa', 'mikasa@gmail.com', '7ba534c5d0832e943537ec93b747be2d', '22/03/22', 'f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_friends`
--

CREATE TABLE `users_friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `items_data`
--
ALTER TABLE `items_data`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `spaces_data`
--
ALTER TABLE `spaces_data`
  ADD PRIMARY KEY (`space_id`);

--
-- Índices para tabela `spaces_textures`
--
ALTER TABLE `spaces_textures`
  ADD PRIMARY KEY (`texture_id`);

--
-- Índices para tabela `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`user_id`);

--
-- Índices para tabela `users_friends`
--
ALTER TABLE `users_friends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `items_data`
--
ALTER TABLE `items_data`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `spaces_data`
--
ALTER TABLE `spaces_data`
  MODIFY `space_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `spaces_textures`
--
ALTER TABLE `spaces_textures`
  MODIFY `texture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users_data`
--
ALTER TABLE `users_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `users_friends`
--
ALTER TABLE `users_friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
