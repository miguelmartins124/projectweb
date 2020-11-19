-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jan-2020 às 02:33
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `id_user`, `nome`, `id_curso`) VALUES
(1, 3, 'Miguel Martins', 200),
(2120000, 2, 'Joaquim Martins', 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadeira`
--

CREATE TABLE `cadeira` (
  `id` int(10) NOT NULL,
  `nome` varchar(70) DEFAULT NULL,
  `ano` tinyint(4) DEFAULT NULL,
  `semestre` tinyint(4) DEFAULT NULL,
  `ects` tinyint(2) DEFAULT NULL,
  `descriçao` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadeira`
--

INSERT INTO `cadeira` (`id`, `nome`, `ano`, `semestre`, `ects`, `descriçao`) VALUES
(1, 'Algebra', 1, 1, 5, NULL),
(2, 'Base Dados', 2, 1, 5, NULL),
(3, 'Sistemas Digitais', 1, 1, 6, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `id_depart` int(11) DEFAULT NULL,
  `nome` varchar(70) DEFAULT NULL,
  `tipo` varchar(70) DEFAULT NULL,
  `descriçao` varchar(400) DEFAULT NULL,
  `duração` tinyint(5) DEFAULT NULL,
  `horario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `id_depart`, `nome`, `tipo`, `descriçao`, `duração`, `horario`) VALUES
(200, NULL, 'Engenharia Informática', 'Licenciatura ', NULL, 3, 'enghorario.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descrição` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `aluno` varchar(250) NOT NULL,
  `nota` int(11) NOT NULL,
  `cadeira` varchar(250) NOT NULL,
  `id_nota` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `presenças`
--

CREATE TABLE `presenças` (
  `id` int(11) NOT NULL,
  `id_sum` int(11) DEFAULT NULL,
  `id_aluno` int(11) DEFAULT NULL,
  `falta` tinyint(4) DEFAULT NULL COMMENT '0-faltou e 1-presente '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext COLLATE latin1_general_cs DEFAULT NULL,
  `emailUsers` tinytext COLLATE latin1_general_cs DEFAULT NULL,
  `pwdUsers` longtext COLLATE latin1_general_cs DEFAULT NULL,
  `nivel` varchar(4) COLLATE latin1_general_cs NOT NULL COMMENT 'a-aluno  b-professor c-funcionario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `nivel`) VALUES
(2, 'Joaquim Martins', 'joaquimmartins@hotmail.com', '$2y$10$rw3qq8iIOw7GXs8eX9fhGOidrD07MdOjGcY5YrqCTbxAe9n5h9RYu', 'a'),
(3, 'miguel martins', 'miguel@hotmail.com', '$2y$10$JEkopjBj6WI5MiQIhoCa9en0DsIiqqqEJ1kmDnTe1CuOMe//GkE86', 'a'),
(4, 'Albino', 'albino@hotmail.com', '$2y$10$fXMKqzqwr1VnBL7IFPKQ4uFuyWrd/59jq8hs50bpYgdE7ESuWZZbu', 'b'),
(5, 'rosario', 'rosario@academia.pt', '$2y$10$3Dxmfjb7BuyvoehqQ/P/Vez35WM5wgZAsP/doCYUYqBsmfysbo5aO', 'c'),
(8, 'miguelmartins', 'mig@gmail.com', '$2y$10$BJ3G6rnB6uRiBrS9gsHVt.0Mhaz9utqnNd3kjBpZ1mKDShi20LITK', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `cadeira`
--
ALTER TABLE `cadeira`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- Índices para tabela `presenças`
--
ALTER TABLE `presenças`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2120001;

--
-- AUTO_INCREMENT de tabela `cadeira`
--
ALTER TABLE `cadeira`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `presenças`
--
ALTER TABLE `presenças`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `id_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
