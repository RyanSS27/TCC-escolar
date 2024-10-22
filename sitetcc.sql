-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/10/2024 às 15:36
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitetcc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `capitulos`
--

CREATE TABLE `capitulos` (
  `id_cap` int(4) NOT NULL,
  `id_user` int(4) DEFAULT NULL,
  `cap1` varchar(100) DEFAULT NULL,
  `cap2` varchar(100) DEFAULT NULL,
  `cap3` varchar(100) DEFAULT NULL,
  `cap4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `progresso`
--

CREATE TABLE `progresso` (
  `id_progresso` int(4) NOT NULL,
  `id_user` int(4) DEFAULT NULL,
  `id_cap` int(4) DEFAULT NULL,
  `progresso1` varchar(100) DEFAULT NULL,
  `progresso2` varchar(100) DEFAULT NULL,
  `progresso3` varchar(100) DEFAULT NULL,
  `progresso4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(4) NOT NULL,
  `nome_completo` varchar(100) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`id_cap`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices de tabela `progresso`
--
ALTER TABLE `progresso`
  ADD PRIMARY KEY (`id_progresso`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cap` (`id_cap`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `id_cap` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `progresso`
--
ALTER TABLE `progresso`
  MODIFY `id_progresso` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `capitulos`
--
ALTER TABLE `capitulos`
  ADD CONSTRAINT `capitulos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`);

--
-- Restrições para tabelas `progresso`
--
ALTER TABLE `progresso`
  ADD CONSTRAINT `progresso_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`),
  ADD CONSTRAINT `progresso_ibfk_2` FOREIGN KEY (`id_cap`) REFERENCES `capitulos` (`id_cap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
