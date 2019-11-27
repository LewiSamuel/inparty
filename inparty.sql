-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 27-Nov-2019 às 18:29
-- Versão do servidor: 5.6.20-log
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inparty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
`id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Descricao` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id`, `id_usuario`, `Titulo`, `Descricao`) VALUES
(5, 1, 'COMO ACERTAR MAIS QUESTÃ•ES DE MATEMÃTICA NO ENEM', 'COMO ACERTAR MAIS QUESTÃ•ES DE MATEMÃTICA NO ENEM'),
(3, 1, 'aaaaaaaaaaaaaaa', 'DescriÃ§Ã£o'),
(6, 2, 'Aluno Evento', '1231'),
(7, 1, 'teste', '1231');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
`id` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `postagem` text NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id`, `id_evento`, `postagem`, `data`) VALUES
(2, 5, 'Teste postagem', '2019-11-26'),
(4, 5, 'Teste postagem adfa dsfa sdfa dsf', '2019-11-26'),
(6, 5, '2222222222222', '2019-11-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Email` text NOT NULL,
  `Senha` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `Nome`, `Email`, `Senha`) VALUES
(1, 'Lewi Samuel dos Santos Nery Nunes Riberio', 'arroba.lewi@gmail.com', 'lewi'),
(2, 'teste', 'aluno@aluno.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
