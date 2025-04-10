-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Abr-2025 às 22:36
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedios`
--

DROP TABLE IF EXISTS `remedios`;
CREATE TABLE IF NOT EXISTS `remedios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `remedio` varchar(50) DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `efeitos` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `remedios`
--

INSERT INTO `remedios` (`id`, `remedio`, `vencimento`, `efeitos`) VALUES
(7, 'RemÃ©dio A', '2025-05-10', 'Nenhum'),
(8, 'RemÃ©dio B', '2026-06-15', 'Dor de cabeÃ§a'),
(9, 'RemÃ©dio C', '2025-04-10', 'SonolÃªncia'),
(10, 'RemÃ©dio D', '2025-04-09', 'Nenhum');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
