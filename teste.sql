-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jul-2021 às 19:51
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--
CREATE DATABASE IF NOT EXISTS `teste` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id_pessoa` int(10) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id_pessoa`, `nome`) VALUES
(1, 'Walter'),
(2, 'Daniel'),
(3, 'Fernando'),
(4, 'Gabriel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id_tarefa` int(10) UNSIGNED NOT NULL,
  `nome_tarefa` varchar(30) NOT NULL,
  `prioridade` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id_tarefa`, `nome_tarefa`, `prioridade`, `status`, `pessoa`) VALUES
(1, 'Implementar módulo', 1, 1, 1),
(5, 'Verificar erros', 1, 2, 3),
(7, 'Verificar erros no servidor', 3, 1, 2),
(8, 'Instalar novo template', 1, 0, 2),
(11, 'Alterar dados do sistema', 2, 0, 1),
(12, 'Adicionar novo cadastro', 2, 2, 3),
(13, 'Instalar software', 1, 0, 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id_tarefa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id_pessoa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id_tarefa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
