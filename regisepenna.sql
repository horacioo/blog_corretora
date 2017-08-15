-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Ago-2017 às 21:36
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
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `agendado_para` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `cliente`, `data`, `agendado_para`) VALUES
(1, 78, '2017-08-08 13:08:30', '2017-08-16 13:40:00'),
(2, 64, '2017-08-08 13:10:37', '2017-08-09 14:00:00'),
(3, 74, '2017-08-08 13:14:46', '2017-08-14 17:00:00'),
(4, 93, '2017-08-08 17:56:33', '2017-08-08 16:30:00'),
(5, 93, '2017-08-09 14:14:42', '2017-08-24 11:12:30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `agendamentos_view`
-- (See below for the actual view)
--
CREATE TABLE `agendamentos_view` (
`nome` varchar(250)
,`data` datetime
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento_cliente`
--

CREATE TABLE `atendimento_cliente` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `atendimento` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atendimento_cliente`
--

INSERT INTO `atendimento_cliente` (`id`, `cliente`, `atendimento`, `data`) VALUES
(1, 1, 1, '2017-08-04 12:35:04'),
(2, 2, 1, '2017-08-04 12:35:04'),
(3, 3, 1, '2017-08-04 12:35:33'),
(4, 4, 2, '2017-08-04 12:35:33'),
(5, 5, 1, '2017-08-04 12:35:59'),
(6, 6, 4, '2017-08-04 12:35:59'),
(7, 7, 2, '2017-08-04 12:36:14'),
(8, 8, 1, '2017-08-04 12:38:32'),
(9, 9, 1, '2017-08-04 12:40:47'),
(10, 10, 2, '2017-08-04 12:43:46'),
(11, 11, 2, '2017-08-04 12:48:29'),
(12, 12, 2, '2017-08-04 12:54:51'),
(13, 13, 1, '2017-08-04 12:57:41'),
(14, 14, 1, '2017-08-04 12:59:57'),
(15, 1, 1, '2017-08-04 13:02:10'),
(16, 17, 1, '2017-08-04 13:05:26'),
(17, 2, 1, '2017-08-04 13:09:00'),
(18, 19, 1, '2017-08-04 13:11:18'),
(19, 20, 1, '2017-08-04 13:15:14'),
(20, 21, 1, '2017-08-04 13:17:23'),
(21, 22, 2, '2017-08-04 13:20:15'),
(22, 23, 2, '2017-08-04 13:50:01'),
(23, 24, 3, '2017-08-04 13:55:25'),
(24, 25, 2, '2017-08-04 13:58:37'),
(25, 26, 4, '2017-08-04 14:03:16'),
(26, 27, 1, '2017-08-04 14:07:36'),
(28, 28, 1, '2017-08-04 14:10:24'),
(29, 29, 1, '2017-08-04 14:12:05'),
(30, 30, 1, '2017-08-04 14:14:08'),
(31, 31, 3, '2017-08-04 14:16:05'),
(32, 32, 1, '2017-08-04 14:18:53'),
(33, 33, 4, '2017-08-04 14:21:28'),
(34, 27, 2, '2017-08-04 14:22:59'),
(35, 28, 1, '2017-08-04 14:25:17'),
(36, 34, 1, '2017-08-04 14:26:38'),
(37, 35, 1, '2017-08-04 14:30:10'),
(38, 36, 1, '2017-08-04 14:30:57'),
(39, 37, 1, '2017-08-04 14:32:21'),
(40, 38, 1, '2017-08-04 14:39:26'),
(41, 39, 1, '2017-08-04 16:40:40'),
(42, 40, 1, '2017-08-04 16:44:01'),
(43, 41, 1, '2017-08-04 16:45:43'),
(44, 42, 1, '2017-08-04 16:47:21'),
(45, 43, 1, '2017-08-04 16:49:15'),
(46, 44, 1, '2017-08-04 16:50:54'),
(47, 39, 1, '2017-08-04 16:53:09'),
(48, 46, 1, '2017-08-04 16:54:40'),
(49, 48, 1, '2017-08-04 17:02:39'),
(50, 49, 1, '2017-08-04 17:04:33'),
(51, 50, 1, '2017-08-04 17:07:27'),
(52, 51, 1, '2017-08-04 17:09:15'),
(53, 44, 1, '2017-08-04 17:11:02'),
(54, 53, 1, '2017-08-04 17:17:24'),
(55, 44, 1, '2017-08-04 17:18:49'),
(56, 54, 1, '2017-08-04 17:20:44'),
(57, 42, 1, '2017-08-04 17:21:52'),
(58, 32, 1, '2017-08-04 17:22:43'),
(59, 41, 1, '2017-08-04 17:23:29'),
(60, 55, 1, '2017-08-04 17:25:04'),
(61, 57, 3, '2017-08-04 17:28:04'),
(62, 58, 4, '2017-08-04 17:30:55'),
(63, 59, 2, '2017-08-04 17:33:40'),
(64, 60, 4, '2017-08-04 17:39:17'),
(65, 23, 2, '2017-08-04 17:42:45'),
(66, 61, 4, '2017-08-04 18:17:07'),
(67, 42, 1, '2017-08-04 18:20:09'),
(68, 51, 1, '2017-08-04 18:21:43'),
(69, 41, 1, '2017-08-04 18:22:51'),
(70, 24, 1, '2017-08-04 18:23:45'),
(71, 62, 1, '2017-08-04 18:26:21'),
(72, 63, 1, '2017-08-04 18:28:24'),
(73, 64, 3, '2017-08-04 18:29:34'),
(74, 65, 1, '2017-08-04 18:31:57'),
(75, 66, 4, '2017-08-04 18:34:00'),
(76, 67, 1, '2017-08-04 18:35:18'),
(77, 42, 1, '2017-08-04 18:36:16'),
(78, 68, 1, '2017-08-04 18:39:44'),
(79, 69, 2, '2017-08-04 18:41:30'),
(80, 70, 2, '2017-08-04 18:44:38'),
(81, 56, 1, '2017-08-04 18:48:12'),
(82, 56, 1, '2017-08-04 18:50:17'),
(83, 71, 1, '2017-08-04 18:53:33'),
(84, 38, 6, '2017-08-04 18:56:18'),
(85, 72, 1, '2017-08-04 18:58:56'),
(86, 66, 1, '2017-08-04 19:00:40'),
(87, 54, 1, '2017-08-04 19:03:46'),
(88, 54, 1, '2017-08-04 19:06:38'),
(89, 74, 3, '2017-08-04 19:12:15'),
(90, 76, 3, '2017-08-04 19:16:12'),
(92, 77, 3, '2017-08-04 19:21:22'),
(93, 78, 3, '2017-08-04 19:24:45'),
(94, 79, 3, '2017-08-04 19:27:53'),
(95, 79, 3, '2017-08-04 19:28:27'),
(96, 80, 3, '2017-08-04 19:35:28'),
(97, 81, 3, '2017-08-04 19:39:16'),
(98, 82, 3, '2017-08-04 19:41:10'),
(99, 19, 1, '2017-08-07 12:41:59'),
(102, 19, 1, '2017-08-07 12:42:40'),
(103, 19, 1, '2017-08-07 12:42:40'),
(104, 19, 1, '2017-08-07 12:43:04'),
(106, 19, 1, '2017-08-07 12:45:22'),
(107, 85, 1, '2017-08-07 12:47:37'),
(108, 85, 1, '2017-08-07 12:47:37'),
(109, 85, 1, '2017-08-07 12:48:06'),
(110, 85, 1, '2017-08-07 12:48:06'),
(111, 85, 1, '2017-08-07 12:48:21'),
(112, 85, 1, '2017-08-07 12:48:35'),
(113, 86, 1, '2017-08-07 12:52:06'),
(114, 86, 1, '2017-08-07 12:52:06'),
(115, 86, 1, '2017-08-07 12:52:31'),
(116, 86, 1, '2017-08-07 12:52:31'),
(117, 86, 1, '2017-08-07 12:52:54'),
(118, 86, 1, '2017-08-07 12:52:54'),
(119, 87, 1, '2017-08-07 12:55:37'),
(120, 87, 1, '2017-08-07 12:55:37'),
(121, 87, 1, '2017-08-07 12:56:07'),
(122, 86, 1, '2017-08-07 12:56:07'),
(123, 87, 1, '2017-08-07 12:56:30'),
(124, 87, 1, '2017-08-07 12:56:30'),
(125, 87, 1, '2017-08-07 12:57:09'),
(126, 42, 1, '2017-08-07 19:01:27'),
(127, 44, 1, '2017-08-07 19:07:33'),
(128, 41, 1, '2017-08-07 19:14:49'),
(130, 32, 1, '2017-08-07 19:23:33'),
(131, 56, 1, '2017-08-07 19:26:05'),
(132, 56, 7, '2017-08-07 19:53:48'),
(133, 28, 1, '2017-08-07 19:57:57'),
(134, 88, 1, '2017-08-07 20:50:49'),
(135, 92, 2, '2017-08-08 13:27:20'),
(136, 36, 1, '2017-08-08 14:45:34'),
(137, 93, 1, '2017-08-08 17:57:13'),
(138, 94, 1, '2017-08-08 18:04:46'),
(139, 94, 1, '2017-08-01 18:05:20'),
(140, 94, 1, '2017-07-05 18:05:37'),
(141, 95, 2, '2017-08-08 18:13:03'),
(142, 95, 1, '2017-07-25 17:36:19'),
(143, 95, 1, '2017-07-27 19:34:30'),
(144, 95, 1, '2017-07-28 18:28:48'),
(145, 96, 1, '2017-07-28 18:25:24'),
(146, 96, 1, '2017-08-02 18:25:32'),
(147, 96, 1, '2017-08-03 18:25:32'),
(148, 96, 1, '2017-08-08 18:25:40'),
(150, 97, 1, '2017-08-02 18:35:17'),
(151, 97, 1, '2017-08-08 18:36:07'),
(152, 92, 8, '2017-08-08 18:47:35'),
(153, 99, 1, '2017-08-03 19:01:59'),
(154, 99, 1, '2017-08-08 19:02:03'),
(155, 100, 4, '2017-08-08 19:09:46'),
(156, 101, 4, '2017-05-08 19:13:57'),
(157, 93, 1, '2017-08-08 20:02:06'),
(158, 96, 1, '2017-08-08 20:09:30'),
(159, 93, 2, '2017-08-09 14:16:42'),
(160, 105, 6, '2017-08-14 13:34:49'),
(161, 108, 1, '2017-08-14 13:38:33'),
(162, 103, 4, '2017-08-14 13:42:21'),
(163, 104, 2, '2017-08-14 13:46:13'),
(164, 106, 2, '2017-08-14 13:57:23'),
(165, 107, 8, '2017-08-14 14:05:20'),
(166, 102, 1, '2017-08-14 14:11:43'),
(167, 109, 1, '2017-08-14 14:16:55'),
(168, 54, 1, '2017-08-14 14:31:59'),
(169, 126, 4, '2017-08-14 17:16:49'),
(170, 118, 1, '2017-08-14 17:39:29'),
(171, 119, 1, '2017-08-14 17:44:20'),
(172, 122, 1, '2017-08-14 17:47:47'),
(173, 121, 2, '2017-08-14 17:58:34'),
(174, 124, 1, '2017-08-14 18:02:28'),
(175, 125, 1, '2017-08-14 18:09:21'),
(176, 102, 3, '2017-08-14 18:24:38'),
(177, 127, 4, '2017-08-14 19:02:54'),
(178, 128, 1, '2017-08-14 19:16:43');

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
(1, 'ana maria batista de souza', '09784534843', 2),
(2, 'andreia cristina lourenço alves', '30676615830', 2),
(3, 'Alberto Porcelli', '16235156880', 1),
(4, 'Wilson Riechelmann Junior', '19753673833', 1),
(5, 'Andreia wenzel gaube', '28326396826', 2),
(6, 'Antonio amaral soares', '00776324861', 1),
(7, 'Antonio carlos ambrosio', '83297340800', 1),
(8, 'antonio carlos marques de jesus', '36886658808', 1),
(9, 'antonio carlos ranoya assumpção', '97114510853', 1),
(10, 'antonio josé silva junior', '13424088889', 1),
(11, 'antonio jose mesquita', '78294002887', 1),
(12, 'Zania Maria Pereira Formiga ', '03698437899', 1),
(13, 'amina pires de araújo', '01804001856', 2),
(14, 'adriano pinto de abreu filho', '04712624809', 1),
(17, 'analy lima de andrade nascimento', '36212530840	', 2),
(19, 'miguel grecchi souza figueiredo', '04909478833', 1),
(20, 'antonio luis nunes pereira', '55448330363', 1),
(21, 'aparecida abou arabi de mendonça', '73369640872', 1),
(22, 'Bruno Castaldino Amado', '32299016813', 1),
(23, 'Carlos eduardo luz', '24902109808', 1),
(24, 'carlos eduardo pereira abreu', '13048796827', 1),
(25, 'carlos otero jorge', '02549560841', 1),
(26, 'carlos roberto santos', '01118619501', 1),
(27, 'daniel moreno alves jaques', '29603631833', 1),
(28, 'danilo de andrade roque', '31550723855', 1),
(29, 'Adriana Alves da Costa Bueno ', '25494297888', 1),
(30, 'Dilma tereza lemos souza', '069955918', 2),
(31, 'dorival gonçalves mota', '39885593853', 1),
(32, 'dorival wenzel gaube', '37130625872', 1),
(33, 'edevaldo benedito dos santos', '05315938867', 1),
(34, 'edileuza soares santos diogo', '57514607587', 2),
(35, 'edson de oliveira carvalho', '06680375800', 1),
(36, 'edson jose ferreira ', '01789858801', 1),
(37, 'eduardo nunes de andrade', '08847272890', 1),
(38, 'elaine cristina de souza', '26552098855', 2),
(39, 'eliane de lima santos', '30729104800', 2),
(40, 'eloilde batista santos', '04872757807', 1),
(41, 'enaldo marques santos', '80002366800', 1),
(42, 'Fabiana Araújo queiros', '27461201867', 2),
(43, 'Adriana Maria da Silva', '13357373831', 2),
(44, 'Edeildo francisco de lima', '70576769487', 1),
(46, 'fabiana costa drago', '26009167841', 2),
(47, 'fabio santana', '27062265870', 1),
(48, 'fernanda hashimoto', '31293426806', 2),
(49, 'Fernando augusto monteiro vasques', '13380566896', 1),
(50, 'fernando serio vitória', '17549699844', 1),
(51, 'francisco roque filho', '97168882872', 1),
(53, 'francisco josé de oliveira castilho', '27691947801', 1),
(54, 'joão rodrigues da silva neto', '79956637815', 1),
(55, 'Getúlio Faleiros', '01821619862', 1),
(56, 'gilene vieira batista', '21620030829', 1),
(57, 'handerson cleiton antonio de oliveira', '04962776851', 1),
(58, 'hercilia maria telles neves', '62587811953', 2),
(59, 'hislaine queiroz dos santos', '34565610833', 2),
(60, 'luiz henrique gabriel', '07664379814', 1),
(61, 'marcos roberto silva', '27467018800', 1),
(62, 'ilana aparecida donato', '25602329870', 2),
(63, 'ilza de fátima dos santos silva', '12142678823', 2),
(64, 'ivone do nascimento santana', '13400191833', 2),
(65, 'marta kazue yida nunes', '05953136803', 2),
(66, 'jose alves de oliveira', '97280259804', 1),
(67, 'jose lucio de carvalho', '06960975832', 1),
(68, 'janaina bispo', '16959470889', 2),
(69, 'joão carlos fernandes', '07006990823', 1),
(70, 'joão josé do nascimento filho', '88400905849', 1),
(71, 'joão orlando de jesus rodrigues', '73011096872', 1),
(72, 'jose gomes da silva', '21595348468', 1),
(74, 'luiz fernando alves barbosa', '10093227884', 1),
(76, 'ademilson bezerra belas', '05715871867', 1),
(77, 'antonio carlos rodrigues filho', '11257330802', 1),
(78, 'everaldo cruz almeida', '07029718801', 1),
(79, 'maria aparecida duarte', '06431266862', 1),
(80, 'sergio ricardo navarro', '12904124802', 1),
(81, 'wanderley fernandes', '78380502868', 1),
(82, 'nilton antonio lucindo', '05825506888', 1),
(85, 'camila dos santos', '33926086882', 2),
(86, 'larissa dos santos', '36975488835', 2),
(87, 'gisela esteche', '09803899848', 2),
(88, 'nadiny cristina morais brandao', '47038214861', 2),
(89, 'horacio ciufi neto', '28630597852', 1),
(90, 'francisco fausto de medeiros', '15716503420', 1),
(91, 'fabiana pereira de medeiros ciufi', '30655975861', 2),
(92, 'paulo sergio de matos', '15899099844', 1),
(93, 'benedito', '0000000', 1),
(94, 'waltensy lima de souza', '16242207893', 1),
(95, 'luis carlos oliveira santos', '25603197803', 1),
(96, 'aguinaldo silva gomes santos\r\n', '16961246893', 1),
(97, 'paulo roberto queiroz', '00243465866', 1),
(99, 'pedro leocardio esteves', '05313269852', 1),
(100, 'Edilange Cerqueira Santos', '30704652854', 2),
(101, 'ellen cristina de oliveira ', '28511048880', 2),
(102, 'querginaldo alves de camargo', '06570592858', 1),
(103, 'rayana danan donato', '42806911850', 2),
(104, 'reginaldo souza carrera', '07013504823', 1),
(105, 'renata dos santos santana', '31175106801', 2),
(106, 'renato de souza brait', '08049028879', 1),
(107, 'ricardo souza carrera', '21422802850', 1),
(108, 'renilda bastos teixeira', '34019148805', 2),
(109, 'wiviane cosme de santana', '32247964800', 1),
(116, 'rita de cassia gomes', '97298859820', 2),
(117, 'rita lina maia dias pedroso', '53835956434', 2),
(118, 'robson de lima ramos', '12125682818', 1),
(119, 'rodnei fernandes nunes', '05389060814', 1),
(120, 'rodrigo escaleira melques', '37120647806', 1),
(121, 'romildo alves de oliveira', '45020515515', 1),
(122, 'rubem paulino da silva', '51620260425', 1),
(123, 'roberto gonçalves melques', '05314153840', 1),
(124, 'sergimara da costa', '12925294820', 2),
(125, 'sérgio antonio toniolo oliveira', '13357592800', 1),
(126, 'josé luciano de almeida jesus', '25182451890', 1),
(127, 'sérgio luiz da silva', '04552161857', 1),
(128, 'sidneia maria da silva ferreira', '24928782879', 2);

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
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `comentario`, `data`, `cliente`) VALUES
(1, 'sem contato', '2017-08-03 20:41:00', 1),
(2, 'falou que até tem interesse em previdência, mas falou que desempregado, não pode assumir contas...', '2017-08-04 12:26:43', 4),
(3, 'falou que quando vier a santos passa aqui', '2017-08-04 12:44:30', 10),
(4, 'estava em reunião, ligar novamente depois', '2017-08-04 12:49:10', 11),
(5, 'falou que não tem tempo, ligarei em 2 meses', '2017-08-04 12:55:21', 12),
(6, 'pediu que retornasse em 29/07, ele está muito ocupado trabalhando em 2 turnos agora', '2017-08-04 13:39:31', 22),
(7, 'vou ligar no começo do mes , ele pareceu  receptivo...dia 7 estou ligando novamente', '2017-08-04 13:49:32', 23),
(8, 'pediu que ligasse em 2 semanas, estava passando por alguns procedimentos médicos e não poderia falar no momento', '2017-08-04 13:58:51', 25),
(9, 'não reconheceu a corretora', '2017-08-04 14:04:17', 26),
(10, 'falei com o cliente, ele informou que passa aqui semana que vem para conversarmos disse que estava levando a esposa ao médico mas , semana que vem, até quarta ele vinha aqui', '2017-08-04 14:16:45', 31),
(11, 'ele ficou de marcar, combinamos de caso não falasse com ele até então, ,eu igaria em 2 semanas', '2017-08-04 14:23:09', 27),
(12, 'a pessoa que atendeu falou que o telefone era recado...como deficiente visual ela informou que não tem como me passar o celular da cliente', '2017-08-04 16:41:23', 39),
(13, 'entrei em contato, uma senhora atendeu, e disse que não tem ninguem com esse nome lá, confirmou o telefone, portant, este precisa de atualização', '2017-08-04 16:55:40', 39),
(14, 'falei com ele, ele virá aqui dia 18 de agosto de 2017, marcamos de conversar nesse dia', '2017-08-04 16:59:00', 47),
(15, 'não tem interesse, falou que está desempregada, e falei que retornaria em 2 meses', '2017-08-04 17:31:12', 58),
(16, 'pediu que ligasse na segunda feira, para marcamos um horário', '2017-08-04 17:33:58', 59),
(17, 'falou que não tem interesse, aceitou que eu ligasse em 2 meses', '2017-08-04 17:41:07', 60),
(18, 'está sem tempo para conversar, combinamos que eu ligaria em 15 dias', '2017-08-04 17:42:59', 23),
(19, 'ficou de retornar, estava no trabalho, falou que depois, entrava em contato com a cátia', '2017-08-04 18:42:11', 69),
(20, 'retornar para o cliente, o cliente falou que queria conversar com a esposa primeiramente antes de agendar qualquer coisa', '2017-08-04 18:45:41', 70),
(21, 'liguei no dia 18/04 e ele falou que estava sem condições de fazer qualquer coisa, mas deixou em aberto uma nova conversa em 2 meses...', '2017-08-07 19:17:47', 54),
(22, 'conversei com o everaldo e ele me falou que ainda não viu com calma as apólices, fiquei de ligar na semana que vem para que ele pudesse ver com calma', '2017-08-08 13:07:40', 78),
(23, 'ligar depois, falei com a rosana\r\nligação péssima, ruim para ouvir', '2017-08-08 13:26:08', 92),
(24, 'falei com o cliente e ele falou que não sabe como vai estar a agenda dele para conseguir marcar alguma coisa comigo, falei que entraria em contato semana que vem e veria se ele tem um horário', '2017-08-08 18:17:43', 95),
(25, 'conversei com ele, e ele pediu que eu entrasse em contato dia 24, pois num momento atribulado', '2017-08-09 14:15:59', 93),
(26, 'foi educado, pediu que entreasse em contato em 2 meses, falou que estava em processo de reformulação e agora, não poderia fazer nada.', '2017-08-14 13:46:53', 104),
(27, 'falou que vai ficar fora por 3 meses e vai retornar só dentro de 3 meses, vou entrar em contato com ele após esse tempo...', '2017-08-14 13:58:27', 106),
(28, 'falei com o pai dele, o senhor Gilberto, ele informou que só após as 20 horas consigo falar com ele', '2017-08-14 14:06:03', 107),
(29, 'conversei com ele e ele falou que estava parado, e falou que ia conversar com a esposa e eu voltar a falar  com ele na semana que vem.', '2017-08-14 17:59:03', 121);

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
(1, 1),
(4, 2),
(10, 3),
(11, 4),
(12, 5),
(22, 6),
(23, 7),
(23, 18),
(25, 8),
(26, 9),
(27, 11),
(31, 10),
(39, 12),
(39, 13),
(47, 14),
(54, 21),
(58, 15),
(59, 16),
(60, 17),
(69, 19),
(70, 20);

-- --------------------------------------------------------

--
-- Stand-in structure for view `contatos_realizados`
-- (See below for the actual view)
--
CREATE TABLE `contatos_realizados` (
`total` bigint(21)
,`cliente` int(11)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `indicado`
--

CREATE TABLE `indicado` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `indicado` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `indicado`
--

INSERT INTO `indicado` (`id`, `cliente`, `indicado`, `data`) VALUES
(1, 91, 89, '2017-08-08 12:46:30'),
(2, 91, 90, '2017-08-08 12:46:30'),
(3, 78, 93, '2017-08-08 17:58:36');

-- --------------------------------------------------------

--
-- Stand-in structure for view `relatorio`
-- (See below for the actual view)
--
CREATE TABLE `relatorio` (
`nome` varchar(250)
,`cpf` varchar(20)
,`descricao` varchar(100)
,`comentario` text
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`id`, `descricao`, `parent`) VALUES
(1, 'não atendeu', 1),
(2, 'atendeu', 2),
(3, 'agendado', 2),
(4, 'rejeitado', 2),
(5, 'caixa postal', 1),
(6, 'solicitou e-mail', 2),
(7, 'não reconheceu a corretora', 2),
(8, 'só se encontra fora do horário comercial', 1),
(9, 'ocupado', 1);

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
-- Stand-in structure for view `situacoes_positivas`
-- (See below for the actual view)
--
CREATE TABLE `situacoes_positivas` (
`nome` varchar(250)
,`genero` varchar(30)
,`descricao` varchar(100)
);

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

-- --------------------------------------------------------

--
-- Structure for view `agendamentos_view`
--
DROP TABLE IF EXISTS `agendamentos_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `agendamentos_view`  AS  select `cl`.`nome` AS `nome`,`ag`.`agendado_para` AS `data` from (`agendamentos` `ag` join `cliente` `cl` on((`cl`.`id` = `ag`.`cliente`))) ;

-- --------------------------------------------------------

--
-- Structure for view `contatos_realizados`
--
DROP TABLE IF EXISTS `contatos_realizados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `contatos_realizados`  AS  select count(`ac`.`id`) AS `total`,`ac`.`cliente` AS `cliente` from `atendimento_cliente` `ac` where ((`ac`.`atendimento` = 1) and ('total' > '2')) group by `ac`.`cliente` order by count(`ac`.`id`) desc limit 1000000 ;

-- --------------------------------------------------------

--
-- Structure for view `relatorio`
--
DROP TABLE IF EXISTS `relatorio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relatorio`  AS  select `c`.`nome` AS `nome`,`c`.`cpf` AS `cpf`,`dc`.`descricao` AS `descricao`,`cm`.`comentario` AS `comentario` from ((((`atendimento_cliente` `ac` join `cliente` `c` on((`c`.`id` = `ac`.`cliente`))) join `resposta` `dc` on((`dc`.`id` = `ac`.`atendimento`))) left join `comentario_cliente` `cc` on((`cc`.`cliente` = `c`.`id`))) left join `comentario` `cm` on((`cm`.`id` = `cc`.`comentario`))) order by `c`.`nome`,`dc`.`descricao` limit 30000 ;

-- --------------------------------------------------------

--
-- Structure for view `situacoes_positivas`
--
DROP TABLE IF EXISTS `situacoes_positivas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `situacoes_positivas`  AS  select `c`.`nome` AS `nome`,`sx`.`genero` AS `genero`,`rp`.`descricao` AS `descricao` from (((`atendimento_cliente` `ac` join `cliente` `c` on((`c`.`id` = `ac`.`cliente`))) join `sexo` `sx` on((`sx`.`id` = `c`.`sexo`))) join `resposta` `rp` on((`rp`.`id` = `ac`.`atendimento`))) where (`ac`.`atendimento` in (2,3)) group by `ac`.`id` order by `ac`.`atendimento`,`c`.`nome`,`sx`.`genero` limit 30000 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`);

--
-- Indexes for table `atendimento_cliente`
--
ALTER TABLE `atendimento_cliente`
  ADD PRIMARY KEY (`id`),
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
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`);

--
-- Indexes for table `comentario_cliente`
--
ALTER TABLE `comentario_cliente`
  ADD UNIQUE KEY `comentario` (`cliente`,`comentario`),
  ADD KEY `comentario_id` (`comentario`);

--
-- Indexes for table `indicado`
--
ALTER TABLE `indicado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indicado` (`indicado`),
  ADD KEY `cli_ind` (`cliente`) USING BTREE;

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descricao` (`descricao`),
  ADD KEY `resposta_id` (`parent`);

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
-- AUTO_INCREMENT for table `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `atendimento_cliente`
--
ALTER TABLE `atendimento_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `indicado`
--
ALTER TABLE `indicado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `cliente_agendado` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE;

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
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `cliente_id_coment` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `comentario_cliente`
--
ALTER TABLE `comentario_cliente`
  ADD CONSTRAINT `cliente_id_com` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentario_id` FOREIGN KEY (`comentario`) REFERENCES `comentario` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `indicado`
--
ALTER TABLE `indicado`
  ADD CONSTRAINT `id_cliente_indicado` FOREIGN KEY (`indicado`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_indicado_por` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `resposta_id` FOREIGN KEY (`parent`) REFERENCES `resposta` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
