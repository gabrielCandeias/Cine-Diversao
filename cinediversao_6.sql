-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Fev-2022 às 02:02
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cinediversao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `usuario`, `senha`) VALUES
(4, 'ADM', '$2y$10$T2eUudHzvWEOed.ZmG..d.N/jcb1jQwbqYVq/FDO.eYfFfXtTDZny');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `estado_id`, `status`) VALUES
(34, 'Alto Piquiri', 6, 'S'),
(42, 'Altônia', 6, 'S'),
(53, 'Antônio Olinto', 6, 'S'),
(63, 'Arapongas', 6, 'S'),
(69, 'Araruna', 6, 'S'),
(74, 'Araucária', 6, 'S'),
(85, 'Campina Grande do Sul', 6, 'S'),
(88, 'Campo Largo', 6, 'S'),
(89, 'Campo Magro', 6, 'S'),
(90, 'Campo Mourão', 6, 'S'),
(91, 'Cascavel', 6, 'S'),
(92, 'Cianorte', 6, 'S'),
(93, 'Cidade Gaúcha', 6, 'S'),
(96, 'Cruzeiro do Oeste', 6, 'S'),
(97, 'Cruzeiro do Sul', 6, 'S'),
(98, 'Curitiba', 6, 'S'),
(99, 'Douradina', 6, 'S'),
(100, 'Foz do Iguaçu', 6, 'S'),
(101, 'Francisco Alves', 6, 'S'),
(102, 'Francisco Beltrão', 6, 'S'),
(103, 'Guaíra', 6, 'S'),
(104, 'Guarapuava', 6, 'S'),
(105, 'Guaratuba', 6, 'S'),
(106, 'Ibiporã', 6, 'S'),
(107, 'Icaraíma', 6, 'S'),
(108, 'Iguaraçu', 6, 'S'),
(109, 'Ipiranga', 6, 'S'),
(110, 'Iporã', 6, 'S'),
(111, 'Ivaí', 6, 'S'),
(112, 'Ivaiporã', 6, 'S'),
(113, 'Ivaté', 6, 'S'),
(114, 'Londrina', 6, 'S'),
(115, 'Maria Helena', 6, 'S'),
(116, 'Marilena', 6, 'S'),
(117, 'Mariluz', 6, 'S'),
(118, 'Maringá', 6, 'S'),
(119, 'Nova Londrina', 6, 'S'),
(122, 'Ponta Grossa', 6, 'S'),
(123, 'Porto Rico', 6, 'S'),
(124, 'Quedas do Iguaçu', 6, 'S'),
(125, 'Santa Helena', 6, 'S'),
(126, 'Tapejara', 6, 'S'),
(127, 'Terra Rica', 6, 'S'),
(128, 'Terra Roxa', 6, 'S'),
(129, 'Ubiratã', 6, 'S'),
(130, 'Umuarama', 6, 'S'),
(131, 'União da Vitória', 6, 'S'),
(132, 'Xambrê', 6, 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `classificacao`
--

CREATE TABLE `classificacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `classificacao`
--

INSERT INTO `classificacao` (`id`, `nome`, `descricao`, `status`) VALUES
(9, '14 Anos', 'Não indicado para menores de 14 anos', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `uf` varchar(5) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`, `uf`, `status`) VALUES
(6, 'Paraná', 'PR', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sinopsea` varchar(500) NOT NULL,
  `ano_lancamento` date NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `duracao` time NOT NULL,
  `genero_id` int(11) NOT NULL,
  `produtora_id` int(11) NOT NULL,
  `classificacao_id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id`, `nome`, `sinopsea`, `ano_lancamento`, `idioma`, `duracao`, `genero_id`, `produtora_id`, `classificacao_id`, `imagem`, `status`) VALUES
(22, 'Avatar', 'TESTE', '2022-12-25', 'en-US', '02:30:00', 8, 13, 9, 'avatar-Cartaz.jpg', 'S'),
(26, 'Sing 2', 'Na glamourosa cidade de Redshore, Buster Moon e a galera enfrentam seus medos, fazem novos amigos e superam seus limites em uma jornada para convencer o recluso astro Clay Calloway a subir aos palcos novamente', '2022-01-06', 'pt-BR', '02:15:00', 8, 13, 9, 'sing2-cartaz.jpeg', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id`, `nome`, `status`) VALUES
(8, 'Comédia', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodos_de_pagamento`
--

CREATE TABLE `metodos_de_pagamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `metodos_de_pagamento`
--

INSERT INTO `metodos_de_pagamento` (`id`, `descricao`, `nome`, `status`) VALUES
(10, 'Até 10 X', 'Cartão de Crédito', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtora`
--

CREATE TABLE `produtora` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtora`
--

INSERT INTO `produtora` (`id`, `nome`, `status`) VALUES
(13, 'Holliwood', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessao`
--

CREATE TABLE `sessao` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `filme_id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sessao`
--

INSERT INTO `sessao` (`id`, `nome`, `data`, `hora`, `filme_id`, `status`) VALUES
(22, 'Segunda-Feira', '2022-02-18', '19:00:00', 22, 'S'),
(23, 'Sexta-Feira', '2022-02-18', '19:30:00', 22, 'S'),
(24, 'Terca-Feira', '2022-02-15', '19:20:00', 26, 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telespectador`
--

CREATE TABLE `telespectador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S',
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `telespectador`
--

INSERT INTO `telespectador` (`id`, `nome`, `email`, `sexo`, `data_nascimento`, `logradouro`, `cep`, `bairro`, `numero`, `complemento`, `telefone`, `usuario`, `senha`, `cidade_id`, `status`, `cpf`) VALUES
(89, 'Gabriel Candeia', '123@gmail.com', 'Prefiro não Delarar', '2003-04-20', '123', '321312', '123213123', '321321', 'CASA', '044 9868-7669', '', '$2y$10$.2nBp0q0q.hSwBad/qa.4uiDccN5A.MYV0P.melLaNhssDnGxYTnm', 132, 'S', '078454545184');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` int(11) NOT NULL,
  `numero` varchar(3) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id`, `numero`, `status`) VALUES
(456, '001', 1),
(457, '002', 1),
(458, '003', 1),
(459, '004', 1),
(460, '005', 1),
(461, '006', 0),
(462, '007', 1),
(463, '008', 1),
(464, '009', 1),
(465, '010', 1),
(466, '011', 1),
(467, '012', 1),
(468, '013', 1),
(469, '014', 1),
(470, '015', 1),
(471, '016', 1),
(472, '017', 1),
(473, '018', 1),
(474, '019', 1),
(475, '020', 1),
(476, '021', 1),
(477, '022', 1),
(478, '023', 1),
(479, '024', 1),
(480, '025', 1),
(481, '026', 1),
(482, '027', 1),
(483, '028', 1),
(484, '029', 1),
(485, '030', 1),
(486, '031', 1),
(487, '032', 1),
(488, '033', 1),
(489, '034', 1),
(490, '035', 1),
(491, '036', 1),
(492, '037', 1),
(493, '038', 1),
(494, '039', 1),
(495, '040', 1),
(496, '041', 1),
(497, '042', 1),
(498, '043', 1),
(499, '044', 0),
(500, '045', 1),
(501, '046', 1),
(502, '047', 1),
(503, '048', 1),
(504, '049', 1),
(505, '050', 1),
(506, '051', 1),
(507, '052', 1),
(508, '053', 1),
(509, '054', 1),
(510, '055', 1),
(511, '056', 1),
(512, '057', 1),
(513, '058', 1),
(514, '059', 1),
(515, '060', 1),
(516, '061', 1),
(517, '062', 1),
(518, '063', 1),
(519, '064', 1),
(520, '065', 1),
(521, '066', 1),
(522, '067', 1),
(523, '068', 1),
(524, '069', 1),
(525, '070', 1),
(526, '071', 1),
(527, '072', 1),
(528, '073', 1),
(529, '074', 1),
(530, '075', 1),
(531, '076', 1),
(532, '077', 1),
(533, '078', 1),
(534, '079', 1),
(535, '080', 1),
(536, '081', 1),
(537, '082', 1),
(538, '083', 1),
(539, '084', 1),
(540, '085', 1),
(541, '086', 1),
(542, '087', 1),
(543, '088', 1),
(544, '089', 1),
(545, '090', 1),
(546, '091', 1),
(547, '092', 1),
(548, '093', 1),
(549, '094', 1),
(550, '095', 1),
(551, '096', 1),
(552, '097', 0),
(553, '098', 1),
(554, '099', 0),
(555, '100', 1),
(556, '101', 1),
(557, '102', 1),
(558, '103', 1),
(559, '104', 1),
(560, '105', 1),
(561, '106', 1),
(562, '107', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(20) NOT NULL,
  `valor_total` double NOT NULL,
  `data_venda` date NOT NULL,
  `sessao_id` int(11) NOT NULL,
  `telespectador_id` int(11) NOT NULL,
  `metodos_de_pagamento_id` int(11) NOT NULL,
  `vaga_id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `valor_total`, `data_venda`, `sessao_id`, `telespectador_id`, `metodos_de_pagamento_id`, `vaga_id`, `status`) VALUES
(1076, 50, '2022-02-08', 22, 89, 10, 554, 'S');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cidade_estado` (`estado_id`);

--
-- Índices para tabela `classificacao`
--
ALTER TABLE `classificacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_filme_genero` (`genero_id`),
  ADD KEY `fk_fime_produtora` (`produtora_id`),
  ADD KEY `fk_fimel_classificacao` (`classificacao_id`);

--
-- Índices para tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `metodos_de_pagamento`
--
ALTER TABLE `metodos_de_pagamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtora`
--
ALTER TABLE `produtora`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sessao`
--
ALTER TABLE `sessao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sessao_filme` (`filme_id`);

--
-- Índices para tabela `telespectador`
--
ALTER TABLE `telespectador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_telespectador_cidade` (`cidade_id`);

--
-- Índices para tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_venda_telespectador` (`telespectador_id`),
  ADD KEY `fk_venda_metodos_de_pagamento` (`metodos_de_pagamento_id`),
  ADD KEY `fk_venda_sessao` (`sessao_id`),
  ADD KEY `fk_venda_vaga` (`vaga_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de tabela `classificacao`
--
ALTER TABLE `classificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `metodos_de_pagamento`
--
ALTER TABLE `metodos_de_pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtora`
--
ALTER TABLE `produtora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `sessao`
--
ALTER TABLE `sessao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `telespectador`
--
ALTER TABLE `telespectador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=563;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1078;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_cidade_estado` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`);

--
-- Limitadores para a tabela `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `fk_filme_genero` FOREIGN KEY (`genero_id`) REFERENCES `genero` (`id`),
  ADD CONSTRAINT `fk_fime_produtora` FOREIGN KEY (`produtora_id`) REFERENCES `produtora` (`id`),
  ADD CONSTRAINT `fk_fimel_classificacao` FOREIGN KEY (`classificacao_id`) REFERENCES `classificacao` (`id`);

--
-- Limitadores para a tabela `sessao`
--
ALTER TABLE `sessao`
  ADD CONSTRAINT `fk_sessao_filme` FOREIGN KEY (`filme_id`) REFERENCES `filme` (`id`);

--
-- Limitadores para a tabela `telespectador`
--
ALTER TABLE `telespectador`
  ADD CONSTRAINT `fk_telespectador_cidade` FOREIGN KEY (`cidade_id`) REFERENCES `cidade` (`id`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_metodos_de_pagamento` FOREIGN KEY (`metodos_de_pagamento_id`) REFERENCES `metodos_de_pagamento` (`id`),
  ADD CONSTRAINT `fk_venda_sessao` FOREIGN KEY (`sessao_id`) REFERENCES `sessao` (`id`),
  ADD CONSTRAINT `fk_venda_telespectador` FOREIGN KEY (`telespectador_id`) REFERENCES `telespectador` (`id`),
  ADD CONSTRAINT `fk_venda_vaga` FOREIGN KEY (`vaga_id`) REFERENCES `vaga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
