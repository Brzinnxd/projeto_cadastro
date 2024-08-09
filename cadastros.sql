-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Ago-2024 às 20:08
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastros`
--
CREATE DATABASE IF NOT EXISTS `cadastros` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cadastros`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebidas`
--

DROP TABLE IF EXISTS `bebidas`;
CREATE TABLE IF NOT EXISTS `bebidas` (
  `id_bebidas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  PRIMARY KEY (`id_bebidas`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bebidas`
--

INSERT INTO `bebidas` (`id_bebidas`, `nome`, `marca`, `preco`, `descricao`) VALUES
(1, 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_pessoas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pessoas`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_pessoas`, `nome`, `cpf`, `email`, `telefone`, `senha`) VALUES
(1, 'a', 'a', 'a', '1', '123'),
(2, 'a', 'a', 'a', 'a', '1'),
(3, 'a', 'a', 'a', 'a', 'aa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lanches`
--

DROP TABLE IF EXISTS `lanches`;
CREATE TABLE IF NOT EXISTS `lanches` (
  `id_lanches` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `ingredientes` varchar(300) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  PRIMARY KEY (`id_lanches`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lanches`
--

INSERT INTO `lanches` (`id_lanches`, `nome`, `ingredientes`, `preco`, `descricao`) VALUES
(4, 'X-BURGER', 'PÃƒO COM HAMBURGER', 'R$ 15,99', 'um lanche com hamburguer'),
(3, 'X-SALADA', 'Pao e salada', 'R$ 20,99', 'um lanche com salada');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
