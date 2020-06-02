-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jun-2020 às 01:35
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corretores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `corretor`
--

CREATE TABLE IF NOT EXISTS `corretor` (
`id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cpf` int(11) NOT NULL,
  `creci` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `corretor`
--

INSERT INTO `corretor` (`id`, `nome`, `cpf`, `creci`) VALUES
(3, 'leandro leonardo da silva aae', 122222, 12332),
(9, 'leandro', 122222, 1233),
(10, 'Healer-alucardeeea', 111111, 12332);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corretor`
--
ALTER TABLE `corretor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corretor`
--
ALTER TABLE `corretor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
