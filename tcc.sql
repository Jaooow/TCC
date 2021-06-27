-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 27-Jun-2021 às 04:26
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `tcc`
--
CREATE DATABASE IF NOT EXISTS `tcc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `tipo_de_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_adm`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `email`, `senha`, `tipo_de_usuario`) VALUES
(1, 'christian.g@aluno.ifsp.edu.br', '12345', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `foto` longblob NOT NULL,
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produto` int(11) NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `cod_produto` (`cod_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `nome` varchar(300) NOT NULL,
  `preco` float NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `cod_vendedor` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_produto`),
  KEY `cod_vendendor` (`cod_vendedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `preco`, `descricao`, `cod_vendedor`, `id_produto`) VALUES
('rb', 34, 'ev', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `tipo_de_negocio` varchar(300) NOT NULL,
  `tipo_de_usuario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `tipo_de_negocio`, `tipo_de_usuario`, `id_usuario`) VALUES
(' gh ', 'gh ', 'ertb', 'ertb', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `id_vendedores` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_negocio` int(11) NOT NULL,
  `cnpj` varchar(300) DEFAULT NULL,
  `documentacao` longblob,
  `cod_vendedor` int(11) NOT NULL,
  PRIMARY KEY (`id_vendedores`),
  UNIQUE KEY `cod_vendedor` (`cod_vendedor`),
  UNIQUE KEY `cnpj` (`cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id_produto`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`cod_vendedor`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD CONSTRAINT `vendedores_ibfk_1` FOREIGN KEY (`cod_vendedor`) REFERENCES `usuarios` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
