-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14-Nov-2018 às 20:21
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karla_intercambio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendar`
--

CREATE TABLE IF NOT EXISTS `agendar` (
  `id_agendar` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) DEFAULT NULL,
  `plano` int(11) DEFAULT NULL,
  `hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id_agendar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) DEFAULT NULL,
  `email` varchar(330) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `sexo` enum('M','F','O') DEFAULT 'O',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_usuario`, `nome`, `email`, `senha`, `sexo`) VALUES
(1, 'Karla', 'k@rla', '202cb962ac59075b964b07152d234b70', 'F'),
(4, 'Mag', 'm@g', '202cb962ac59075b964b07152d234b70', 'M'),
(5, 'Paulim', 'p@ulo', '202cb962ac59075b964b07152d234b70', 'O');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE IF NOT EXISTS `planos` (
  `id_plano` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) DEFAULT NULL,
  `destino` varchar(200) DEFAULT NULL,
  `imagem` varchar(300) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_plano`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id_plano`, `titulo`, `destino`, `imagem`, `preco`, `descricao`) VALUES
(1, 'Estude Inglês em Toronto', 'Canadá', 'IMG/toronto.jpg', 5500, 'Toronto é o centro financeiro e uma das cidades mais importantes do Canadá. Multicultural, a cidade proporciona muitas opções de programas culturais e de lazer. Venha estudar em Toronto e viva a experiência de uma cidade moderna e que tem muito a oferecer.'),
(2, 'Estude Inglês em Emirados Árabes', 'Emirados Árabes', 'IMG/emirados.jpg', 10000, 'Estudar e ainda trabalhar legalmente em um dos destinos mais desenvolvidos economicamente do mundo, só depende de você! Além de ser avançado em tecnologia, rico em belezas naturais, os Emirados Árabes vai te proporcionar experiências incríveis.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
