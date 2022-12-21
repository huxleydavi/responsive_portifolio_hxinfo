-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Dez-2022 às 20:40
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_port`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.usuarios`
--

CREATE TABLE `tb_admin.usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tb_admin.usuarios`
--

INSERT INTO `tb_admin.usuarios` (`id`, `user`, `password`, `img`, `nome`, `cargo`) VALUES
(1, 'hux', 'ley', '639b723264947.jpeg', 'Huxley Davi O. Moreira', 2),
(2, 'teste', 'teste', 'teste.jpg', 'Teste', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.visitas`
--

CREATE TABLE `tb_admin.visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tb_admin.visitas`
--

INSERT INTO `tb_admin.visitas` (`id`, `ip`, `dia`) VALUES
(1, '::1', '2017-06-12'),
(2, '192.168.0.2', '2017-06-11'),
(3, '::1', '2017-06-13'),
(4, '::1', '2017-06-13'),
(5, '::1', '2017-06-13'),
(6, '::1', '2017-06-13'),
(7, '::1', '2017-06-14'),
(8, '::1', '2017-06-14'),
(9, '::1', '2017-06-16'),
(10, '::1', '2017-06-20'),
(11, '::1', '2017-06-20'),
(12, '::1', '2017-06-20'),
(13, '::1', '2017-06-20'),
(14, '::1', '2017-06-26'),
(15, '::1', '2017-06-27'),
(16, '::1', '2017-07-03'),
(17, '::1', '2022-12-15'),
(18, '::1', '2022-12-16'),
(19, '::1', '2022-12-16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chamada.config`
--

CREATE TABLE `tb_chamada.config` (
  `titulo` varchar(255) NOT NULL,
  `sub_titulo` varchar(255) NOT NULL,
  `botao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_chamada.config`
--

INSERT INTO `tb_chamada.config` (`titulo`, `sub_titulo`, `botao`) VALUES
('Hx Info, uma agência de tecnologia.', 'Criamos sistema profissionais para turbinar o seu negócio!', 'Clique e saiba mais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_menu.config`
--

CREATE TABLE `tb_menu.config` (
  `menu1` varchar(255) NOT NULL,
  `menu2` varchar(255) NOT NULL,
  `menu3` varchar(255) NOT NULL,
  `menu4` varchar(255) NOT NULL,
  `menu5` varchar(255) NOT NULL,
  `menu6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_menu.config`
--

INSERT INTO `tb_menu.config` (`menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `menu6`) VALUES
('Início', 'Sobre', 'Projetos', 'Depoimentos', 'Contato', 'Links Úteis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.depoimentos`
--

CREATE TABLE `tb_site.depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tb_site.depoimentos`
--

INSERT INTO `tb_site.depoimentos` (`id`, `nome`, `depoimento`, `data`, `order_id`) VALUES
(14, 'Aristóteles Botinas', 'Estava precisando de um sistema de site e aplicativo, para ajudar no meu negócio. Foi ai que eu conheci o Huxley, ele sabe muito!', '10/10/2022', 15),
(15, 'Bazar Dama', 'Ótima empresa e dono, fez meu e-commerce com menos de 7 dias, estou muito feliz.', '29/06/2021', 14),
(16, 'Delivery True', 'Meu negócio de delivery de açaí está bombando, depois do sistema de automação de pedidos que o Hx fez!!!', '29/12/2022', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.servicos`
--

CREATE TABLE `tb_site.servicos` (
  `id` int(11) NOT NULL,
  `servico` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tb_site.servicos`
--

INSERT INTO `tb_site.servicos` (`id`, `servico`, `order_id`) VALUES
(8, 'CEO HS Corporation', 8),
(9, 'Criador da Hyrms Publicidade', 9),
(10, 'Analista de sistemas da HMS Agência', 10),
(11, 'Confecção de apps', 11),
(12, 'Gerenciamento de redes sociais', 12),
(13, 'Formatação e manutenção de computadores', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre.config`
--

CREATE TABLE `tb_sobre.config` (
  `titulo` varchar(255) NOT NULL,
  `nome_autor` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `icone1` varchar(255) NOT NULL,
  `descricao1` text NOT NULL,
  `icone2` varchar(255) NOT NULL,
  `descricao2` text NOT NULL,
  `icone3` varchar(255) NOT NULL,
  `descricao3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tb_sobre.config`
--

INSERT INTO `tb_sobre.config` (`titulo`, `nome_autor`, `descricao`, `icone1`, `descricao1`, `icone2`, `descricao2`, `icone3`, `descricao3`) VALUES
('Hx Info Portifólio', 'Huxley Davi', 'Me chamo Huxley, tenho 17 anos, nasci em Caratinga/MG, sou desenvolvedor e programador web, onde crio websites e sistemas profissionais para empresas, mini-negócios, lojas etc. Full-Satck Developer, onde faço a parte visual e também a parte de integração com sistemas de fácil entendimento e amigável ao usuário com o intuito de facilitar seu acesso ao sistema.<br />CEO da HS Corporation, onde somos uma empresa no ramo de tecnologia que atua em difertentes áreas, de formatção de computadores até criação de aplicativos altamnete requisitado no mercado.<br />Criador da Hyrms Agência de Plubicidade, que trabalha na parte de divulgação, tráfego pago, métricas, para faciltar o acesso ao website e divulgação do próprio. Criação de layouts, designs, portifólios entre diversas tarefas.', 'fa fa-sitemap', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo consequat finibus. Integer luctus, lacus vitae pretium venenatis, nisl ante fermentum lorem, non volutpat neque ex quis erat.', 'fa fa-user', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo consequat finibus. Integer luctus, lacus vitae pretium venenatis, nisl ante fermentum lorem, non volutpat neque ex quis erat.', 'fa fa-rocket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo consequat finibus. Integer luctus, lacus vitae pretium venenatis, nisl ante fermentum lorem, non volutpat neque ex quis erat.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.servicos`
--
ALTER TABLE `tb_site.servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_site.servicos`
--
ALTER TABLE `tb_site.servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
