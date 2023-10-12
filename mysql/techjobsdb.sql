-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/10/2023 às 07:49
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
-- Banco de dados: `techjobsdb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `assinatura`
--

CREATE TABLE `assinatura` (
  `id` int(255) NOT NULL,
  `período` int(11) NOT NULL,
  `valor` decimal(11,0) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliação`
--

CREATE TABLE `avaliação` (
  `id` int(255) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int(255) NOT NULL,
  `meio_pagamento` varchar(50) NOT NULL,
  `nome_cartão` varchar(50) NOT NULL,
  `numero_cartão` int(16) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `data_vencimento` date NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(50) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `razao_social` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `ddi` varchar(6) NOT NULL,
  `ddd` varchar(20) NOT NULL,
  `telefone` varchar(17) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `logradouro` varchar(10) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `lote` varchar(10) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `complemento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `razao_social`, `cpf`, `cnpj`, `senha`, `email`, `sexo`, `ddi`, `ddd`, `telefone`, `cep`, `cidade`, `logradouro`, `bairro`, `lote`, `rua`, `complemento`) VALUES
(12, 'Nike', 'Jembalero', '', '11-111-111/1114', '6c30734811916b0f0f24a4630b08036f', 'Jembalero@email.com', '', '55', '61', '998490406', '72251702', 'Ceilândia', '123', 'QNO 7 ', '', 'B', '10'),
(13, '', '', '', '', '202cb962ac59075b964b07152d234b70', 'jordanvieiracarvalho@hotmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Jordan', 'Jordes', '', '11-111-111/1114', '202cb962ac59075b964b07152d234b70', 'jordanvieiracarvalho@hotmail.com', '', '55', '', '998490406', '72251702', 'Ceilândia', '123', 'QNO 7 ', '', 'Conjunto B', 'Casa 10'),
(16, 'Jordan Jorda', '', '', '', '123', 'jordanvieiracarvalho@hotmail.com', '', '', '', '61998490406', '72251702', 'Ceilândia', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` int(255) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `descrição` varchar(500) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `salário` varchar(50) NOT NULL,
  `carga_horária` time NOT NULL,
  `data_publicação` date NOT NULL,
  `data_expiração` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `assinatura`
--
ALTER TABLE `assinatura`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `avaliação`
--
ALTER TABLE `avaliação`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `código cvv` (`cvv`);

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assinatura`
--
ALTER TABLE `assinatura`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliação`
--
ALTER TABLE `avaliação`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
