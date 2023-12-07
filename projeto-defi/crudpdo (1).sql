-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/12/2023 às 21:36
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
-- Banco de dados: `crudpdo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `login` varchar(6) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `nascimento` varchar(10) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `mae` varchar(80) DEFAULT NULL,
  `endereco` varchar(500) DEFAULT NULL,
  `complemento` varchar(15) DEFAULT NULL,
  `is_master` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `login`, `senha`, `email`, `telefone`, `sexo`, `nascimento`, `cpf`, `mae`, `endereco`, `complemento`, `is_master`) VALUES
(1, 'Maria da silva', 'Maria', '12345678', 'maria@gmail.com', '111111111', 'feminino', '11-11-1111', '11111111111', 'Aparecida da silva', 'qualquer', 'casa', 1),
(7, 'Rodrigo vieira', 'RD', '87654321', 'rd@gmail.com', '000000000', 'masculino', '2001-02-05', '00000000000', 'Viviane', 'qualquer, Bangu', 'apto', 1),
(8, 'Vitctoria oliveira de souza', 'vic', '7744', 'vic@gmail.com', '21933333333', 'Outro', '1991-12-20', '77777777777', 'Neide', 'Resende,77 - Copacabana', 'apto', 0),
(20, 'Eduardo campos', 'Edu', '741741', 'edu@gmail.com', '000000000', 'masculino', '1992-07-23', '74874874874', 'Edna', 'Rua resende,00 - Bangu', 'casa', 0),
(22, 'Lucas ferreira', 'lucas', '96541965', 'lucas@gmail.com', '21955555555', 'masculino', '2002-09-24', '74174174174', 'Laura', 'Camelia,44 - bangu', 'Casa', 0),
(23, 'Vania lima', 'vania', '0201', 'vania@gmail.com', '21966664444', 'feminino', '1998-12-05', '33366699988', 'Vania', 'Cordelia, 99 - bangu', 'apto 8', 0),
(24, 'Marina costa', 'marina', 'marina12', 'marina@gmail.com', '21945852148', 'feminino', '1899-04-28', '83175448521', 'Marcia', 'Consul, 34- bangu', 'casa', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
