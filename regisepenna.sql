-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Ago-2017 às 22:49
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regisepenna`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento_cliente`
--

CREATE TABLE `atendimento_cliente` (
  `cliente` int(11) NOT NULL,
  `atendimento` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atendimento_cliente`
--

INSERT INTO `atendimento_cliente` (`cliente`, `atendimento`, `data`) VALUES
(1, 1, '2017-08-03 20:43:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `sexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `sexo`) VALUES
(1, 'ana maria batista de souza', '097.845.348-43', 2),
(2, 'andreia cristina lourenço alves', '30676615830', 2),
(3, 'Alberto Porcelli', '16235156880', 1),
(4, 'Wilson Riechelmann Junior', '19753673833', 1),
(5, 'Andreia wenzel gaube', '28326396826', 2),
(6, 'Antonio amaral soares', '00776324861', 1),
(7, 'Antonio carlos ambrosio', '832.973.408-00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_telefone`
--

CREATE TABLE `cliente_telefone` (
  `cliente` int(11) NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente_telefone`
--

INSERT INTO `cliente_telefone` (`cliente`, `telefone`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario_cliente`
--

CREATE TABLE `comentario_cliente` (
  `cliente` int(11) NOT NULL,
  `comentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentario_cliente`
--

INSERT INTO `comentario_cliente` (`cliente`, `comentario`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentário`
--

CREATE TABLE `comentário` (
  `id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentário`
--

INSERT INTO `comentário` (`id`, `comentario`, `data`) VALUES
(1, 'sem contato', '2017-08-03 20:41:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`id`, `descricao`) VALUES
(3, 'agendado'),
(2, 'atendeu'),
(1, 'não atendeu'),
(4, 'rejeitado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `genero` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sexo`
--

INSERT INTO `sexo` (`id`, `genero`) VALUES
(2, 'feminino'),
(1, 'masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `id` int(11) NOT NULL,
  `telerfone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`id`, `telerfone`) VALUES
(3, '13 3236343'),
(2, '13 32381933 '),
(4, '13 32962211'),
(1, '13 974128096');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendimento_cliente`
--
ALTER TABLE `atendimento_cliente`
  ADD KEY `cliente_id_at` (`atendimento`),
  ADD KEY `cliente_` (`cliente`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `nome` (`nome`),
  ADD KEY `sexo` (`sexo`);

--
-- Indexes for table `cliente_telefone`
--
ALTER TABLE `cliente_telefone`
  ADD UNIQUE KEY `cliente_telefone` (`cliente`,`telefone`),
  ADD KEY `telefone_id` (`telefone`);

--
-- Indexes for table `comentario_cliente`
--
ALTER TABLE `comentario_cliente`
  ADD UNIQUE KEY `comentario` (`cliente`,`comentario`),
  ADD KEY `comentario_id` (`comentario`);

--
-- Indexes for table `comentário`
--
ALTER TABLE `comentário`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descricao` (`descricao`);

--
-- Indexes for table `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genero` (`genero`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telerfone` (`telerfone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comentário`
--
ALTER TABLE `comentário`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atendimento_cliente`
--
ALTER TABLE `atendimento_cliente`
  ADD CONSTRAINT `atendimento_id` FOREIGN KEY (`atendimento`) REFERENCES `resposta` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cliente_` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `sexo_id` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id`);

--
-- Limitadores para a tabela `cliente_telefone`
--
ALTER TABLE `cliente_telefone`
  ADD CONSTRAINT `Cliente_id_t` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `telefone_id` FOREIGN KEY (`telefone`) REFERENCES `telefone` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `comentario_cliente`
--
ALTER TABLE `comentario_cliente`
  ADD CONSTRAINT `cliente_id_com` FOREIGN KEY (`comentario`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_id` FOREIGN KEY (`comentario`) REFERENCES `comentário` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
