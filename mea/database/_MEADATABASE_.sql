-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/07/2017 às 03:29
-- Versão do servidor: 10.1.21-MariaDB
-- Versão do PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sportschool`
--
CREATE DATABASE IF NOT EXISTS `sportschool` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sportschool`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `idAluno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `turma` char(20) NOT NULL,
  `modalidade` char(20) NOT NULL,
  `turno` char(10) NOT NULL,
  `responsavel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `alunos`
--

INSERT INTO `alunos` (`idAluno`, `matricula`, `nome`, `idade`, `turma`, `modalidade`, `turno`, `responsavel`) VALUES
(4, 1654, 'Roger Vasconcelos Da Silva', 5, 'A2', 'BalÃ©', 'Matutino', 'Judite Vasconcelos Da Silva'),
(5, 2548, 'Pedro Pereira Primeiro', 4, 'A1', 'KaratÃª', 'Matutino', 'Janaina  Pereira Primeiro'),
(6, 2865, 'Judas Escariotes', 6, 'A3', 'Xadrez', 'Matutino', 'Lucios Escariotes'),
(7, 7956, 'Karem De Sousa Pereira', 4, 'A1', 'BalÃ©', 'Matutino', 'Jade De Sousa Pereira'),
(8, 9658, 'Julia Vasconselos', 5, 'A2', 'BalÃ©', 'Matutino', 'Zeila  Vasconselos'),
(9, 4587, ' Agatha Tetris', 6, 'A3', 'BalÃ©', 'Matutino', 'Emilly tetris'),
(10, 3652, 'Luiz Felipe da silva', 4, 'A1', 'Futebol', 'Vespertino', 'Bruna da silva'),
(11, 1254, 'CÃ­cero Pedreira', 5, 'A2', 'KaratÃª', 'Vespertino', 'Amado Pedreira'),
(12, 2581, 'Hermano Duarte', 6, 'A3', 'Xadrez', 'Vespertino', 'GonÃ§alo Duarte'),
(13, 4518, 'Coraline Reymond', 4, 'A1', 'BalÃ©', 'Vespertino', 'Augusta Reymond'),
(14, 1213, 'Dora Aventureira', 5, 'A2', 'BalÃ©', 'Vespertino', 'Amora  Aventureira'),
(15, 7897, 'AÃ§ucena Augusta', 6, 'A3', 'BalÃ©', 'Vespertino', 'Ayla Augusta'),
(16, 4564, 'Barry Allen', 4, 'A1', 'Futebol', 'Matutino', 'Nora Allen'),
(17, 1254, 'Matt Murdock', 5, 'A2', 'KaratÃª', 'Matutino', 'Jack Murdock'),
(18, 4541, 'Bruce Wayne', 6, 'A3', 'BalÃ©', 'Matutino', 'Thomas Wayne'),
(19, 1548, 'Diana Prince', 4, 'A1', 'BalÃ©', 'Matutino', 'Hipolita Prince'),
(20, 8591, 'Shayera Hall', 5, 'A2', 'BalÃ©', 'Matutino', 'Kendra Saunders'),
(21, 8792, 'Selina Kyle', 6, 'A3', 'BalÃ©', 'Matutino', 'Iolanda Kyle'),
(22, 1234, 'Hal Jordan', 4, 'A1', 'Futebol', 'Vespertino', 'Felipa  Jordan'),
(23, 2356, 'Clark Kent', 5, 'A2', 'KaratÃª', 'Vespertino', 'Marta Kent'),
(24, 5678, 'Bruce Banner', 5, 'A2', 'BalÃ©', 'Vespertino', 'David Banner'),
(25, 1245, 'Tony Stark', 6, 'A3', 'Xadrez', 'Vespertino', 'Howard Stark'),
(26, 6548, 'Olga Dolabella', 4, 'A1', 'BalÃ©', 'Vespertino', 'Evelyn Dolabella'),
(27, 9845, 'Teodora Boaventura', 5, 'A2', 'BalÃ©', 'Vespertino', 'Naomi Boaventura'),
(28, 2348, 'Petra FlorenÃ§a', 5, 'A2', 'BalÃ©', 'Vespertino', 'Mabel FlorenÃ§a'),
(29, 5252, 'Flavia Santana', 6, 'A3', 'BalÃ©', 'Vespertino', 'Lins Santana'),
(30, 4242, 'Sherlock Holmes', 6, 'A3', 'Xadrez', 'Matutino', 'Arthur Conan Doyle'),
(31, 8080, 'John Connor', 6, 'A2', 'KaratÃª', 'Matutino', 'Sarah Connor');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `contas`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `contas` (
`id` int(10)
,`login` varchar(50)
,`tipo` int(1)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `lista`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `lista` (
`idAluno` int(11)
,`matricula` int(11)
,`nome` varchar(50)
,`idade` int(11)
,`turma` char(20)
,`modalidade` char(20)
,`turno` char(10)
,`responsavel` varchar(50)
);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `tipo`) VALUES
(6, 'Alison', 'paÃ§oca', 1),
(7, 'VinÃ­cius', 'nivis', 0),
(8, 'Victor', 'vitao', 0);

-- --------------------------------------------------------

--
-- Estrutura para view `contas`
--
DROP TABLE IF EXISTS `contas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `contas`  AS  select `usuarios`.`id` AS `id`,`usuarios`.`login` AS `login`,`usuarios`.`tipo` AS `tipo` from `usuarios` ;

-- --------------------------------------------------------

--
-- Estrutura para view `lista`
--
DROP TABLE IF EXISTS `lista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lista`  AS  select `alunos`.`idAluno` AS `idAluno`,`alunos`.`matricula` AS `matricula`,`alunos`.`nome` AS `nome`,`alunos`.`idade` AS `idade`,`alunos`.`turma` AS `turma`,`alunos`.`modalidade` AS `modalidade`,`alunos`.`turno` AS `turno`,`alunos`.`responsavel` AS `responsavel` from `alunos` order by `alunos`.`nome` ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`idAluno`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
