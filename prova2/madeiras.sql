-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2022 às 03:20
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `avaliacao_php2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `madeiras`
--

CREATE TABLE `madeiras` (
  `nome_madeira` varchar(20) NOT NULL,
  `expessura_chapa` varchar(20) NOT NULL,
  `empresa_fabricante` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `madeiras`
--

INSERT INTO `madeiras` (`nome_madeira`, `expessura_chapa`, `empresa_fabricante`) VALUES
('teste', '3mm', 'duratex'),
('teste2', '3mm', 'duratex'),
('Eucalipto', '6mm', 'Duratex'),
('Jequitibá', '6mm', 'Duratex'),
('Peroba do Norte', '9mm', 'Duratex'),
('Pinus', '3mm', 'Duratex'),
('Pinus', '3mm', 'Duratex'),
('Pinus', '3mm', 'Duratex'),
('Pinus', '18mm', 'Teste'),
('Pinus', '18mm', 'Teste'),
('Pinus', 'teste', 'teste');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
