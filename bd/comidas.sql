-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3316
-- Tempo de geração: 09/12/2024 às 21:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comidas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `senha`) VALUES
(1, 'adm', 'abc');

-- --------------------------------------------------------

--
-- Estrutura para tabela `congelados`
--

CREATE TABLE `congelados` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `mensagem_whatsapp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `congelados`
--

INSERT INTO `congelados` (`id`, `nome`, `preco`, `quantidade`, `imagem`, `mensagem_whatsapp`) VALUES
(7, 'Coxinha de Frango', '35', 'kg', '../img/congelados/coxinha-assada.jpeg', 'Coxinha de Frango (congelada).'),
(8, 'Quibe de Carne', '35', 'kg', '../img/congelados/Quibe-pequeno-1.jpg', 'Quibe de carne (congelado).'),
(9, 'Bolinha de Pizza', '35', 'kg', '../img/congelados/bolinha-de-pizza.jpg', 'Bolinha de Pizza (congelada).');

-- --------------------------------------------------------

--
-- Estrutura para tabela `salgados`
--

CREATE TABLE `salgados` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `mensagem_whatsapp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `salgados`
--

INSERT INTO `salgados` (`id`, `nome`, `preco`, `quantidade`, `imagem`, `mensagem_whatsapp`) VALUES
(8, 'Coxinha de Frango', '75', 'Cento', '../img/salgados/coxinhas-02.jpg', 'Coxinha de Frango (salgado) cento.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `congelados`
--
ALTER TABLE `congelados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `salgados`
--
ALTER TABLE `salgados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `congelados`
--
ALTER TABLE `congelados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `salgados`
--
ALTER TABLE `salgados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
