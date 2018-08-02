
SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `tasklist`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `task`
--

CREATE TABLE `task` (
  `id` int(11) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `descricao` text NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_edicao` datetime DEFAULT NULL,
  `data_remocao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `task`
--

INSERT INTO `task` (`id`, `titulo`, `status`, `descricao`, `data_criacao`, `data_edicao`, `data_remocao`) VALUES
(1, 'task_1', 1, 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '2018-08-01 15:21:10', NULL, NULL),
(2, 'task_2', 1, 'É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por \'lorem ipsum\' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).', '2018-08-01 15:25:34', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;SET FOREIGN_KEY_CHECKS=1;
COMMIT;