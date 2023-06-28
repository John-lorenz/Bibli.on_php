-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 28-Jun-2023 às 13:39
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_livro` int(11) DEFAULT NULL,
  `data_emprestimo` date DEFAULT NULL,
  `arquivado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id`, `id_usuario`, `id_livro`, `data_emprestimo`, `arquivado`) VALUES
(1, 1, 28, '2023-06-28', 0),
(2, 2, 41, '2023-06-28', 0),
(3, 1, 43, '2023-06-28', 0),
(4, 1, 54, '2023-06-28', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id`, `nome`) VALUES
(2, 'Ação e Aventura'),
(8, 'Autoajuda'),
(6, 'Biografia'),
(17, 'Conto'),
(11, 'Distopia'),
(10, 'Fantasia'),
(3, 'Ficção Científica'),
(15, 'Ficção Contemporânea'),
(14, 'Ficção Histórica'),
(13, 'Ficção Policial'),
(19, 'Graphic Novel'),
(7, 'História'),
(18, 'Infantil'),
(9, 'Negócios e Finanças'),
(12, 'Novela'),
(4, 'Poesia'),
(16, 'Realismo Mágico'),
(1, 'Romance'),
(5, 'Thriller e Suspense');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `genero` varchar(255) DEFAULT 'Gênero Padrão',
  `descricao` varchar(3000) NOT NULL,
  `linkImagem` varchar(100) NOT NULL,
  `unidades` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `genero`, `descricao`, `linkImagem`, `unidades`, `usuario_id`) VALUES
(1, 'Orgulho e Preconceito', 'Jane Austen', 'Romance', 'ere', 'images/uploads/orgulhoreconceito.jpg', 2, NULL),
(13, 'Vidas Secas', 'Graciliano Ramos', 'Romance', '', 'images/uploads/vidassecas.jpg', 0, NULL),
(14, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Ficção Científica', '', 'images/uploads/opequenoprincipe.jpg', 3, NULL),
(27, 'O Morro dos Ventos Uivantes', 'Emily Bronte', 'Romance', '', 'images/uploads/morrodosventosuivantes.jpg', 1, NULL),
(28, 'Razão e Sensibilidade', 'Jane Austen', 'Romance', '', 'images/uploads/razaosensibilidade.jpg', 1, NULL),
(29, 'Anna Karenina', 'Lev Tolstói', 'Romance', '', 'images/uploads/annakarienina.jpg', 2, NULL),
(30, 'O Grande Gatsby', 'F. Scott Fitzgerald', 'Romance', '', 'images/uploads/ograndegatsby.jpg', 3, NULL),
(31, 'Cem Anos de Solidão', 'Gabriel Garcia Marquez', 'Romance', '', 'images/uploads/cemanos.jpg', 2, NULL),
(40, 'A Letra Escarlate', 'Nathaniel Hawthorne', 'Romance', '', 'images/uploads/a-letra-escarlate-5.jpg', 3, NULL),
(41, 'Madame Bovary', 'Gustave Flaubert', 'Romance', '', 'images/uploads/madamebovary.jpg', 1, NULL),
(42, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 'Romance', '', 'images/uploads/memoriaspostumasdebrascubas.jpg', 3, NULL),
(43, 'O Retrato de Dorian Gray', 'Oscar Wilde', 'Romance', '', 'images/uploads/oretratodedoriangray.jpg', 1, NULL),
(44, 'As Pontes de Madison', 'Robert James Waller', 'Romance', '', 'images/uploads/aspontesdemadinson.jpg', 3, NULL),
(45, 'A Montanha Mágica', 'Thomas Mann', 'Romance', '', 'images/uploads/amontanhamagica.jpg', 2, NULL),
(46, 'Fundação', 'Isaac Asimov', 'Ficção Científica', '', 'images/uploads/fundacao.png', 3, NULL),
(47, 'O Guia do Mochileiro das Galáxias', 'Douglas Adams', 'Ficção Científica', '', 'images/uploads/mochileirodasgalaxias.jpg', 0, NULL),
(48, '2001: Uma Odisseia no Espaço', 'Arthur C. Clarke', 'Ficção Científica', '', 'images/uploads/2001umaodisseia.jpg', 3, NULL),
(49, 'O Fim da Eternidade', 'Isaac Asimov', 'Romance', '', 'images/uploads/ofimdaeternidade.jpg', 2, NULL),
(50, 'Eu, Robô', 'Isaac Asimov', 'Ficção Científica', '', 'images/uploads/eurobo.jpg', 2, NULL),
(51, 'A Máquina do Tempo', 'H.G. Wells', 'Ficção Científica', '', 'images/uploads/amaquinadotempo.jpg', 2, NULL),
(52, 'Neuromancer', 'William Gibson', 'Ficção Científica', '', 'images/uploads/neuromancer.jpg', 3, NULL),
(53, 'Eu Sou a Lenda', 'Richard Matheson', 'Ficção Científica', '', 'images/uploads/eusoualenda.jpg', 2, NULL),
(54, 'A Guerra dos Mundos', 'H.G. Wells', 'Romance', '', 'images/uploads/aguerradosmundos.jpg', 2, NULL),
(55, 'Jogador Número 1', 'Ernest Cline', 'Ficção Científica', '', 'images/uploads/jogadorn1.jpg', 2, NULL),
(56, 'O Senhor dos Anéis - A sociedade do anel', 'J.R.R. Tolkien', 'Romance', '', 'images/uploads/asociedadedoanel.jpg', 3, NULL),
(57, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Romance', '', 'images/uploads/harrypoter1.jpg', 2, NULL),
(58, 'As Crônicas de Nárnia', 'C.S. Lewis', 'Romance', '', 'images/uploads/narnia.jpg', 2, NULL),
(59, 'O Nome do Vento', 'Patrick Rothfuss', 'Romance', '', 'images/uploads/onomedovento.jpg', 2, NULL),
(60, 'A Roda do Tempo', 'Robert Jordan', 'Romance', '', 'images/uploads/rodadotempo.jpg', 0, NULL),
(61, 'O Último Desejo', 'Andrzej Sapkowski', 'Romance', '', 'images/uploads/ultimodesejo.jpg', 0, NULL),
(62, 'A Torre Negra', 'Stephen King', 'Romance', '', 'images/uploads/atorrenegra.jpg', 3, NULL),
(63, 'A Dança dos Dragões', 'George R.R. Martin', 'Romance', '', 'images/uploads/adancadosladroes.jpg', 2, NULL),
(64, 'O Príncipe de Westeros e Outras Histórias', 'George R.R. Martin', 'Romance', '', 'images/uploads/oprincipedewesteros.jpg', 2, NULL),
(65, 'A Batalha do Apocalipse', 'Eduardo Spohr', 'Romance', '', 'images/uploads/abatalhadoapocalipse.jpg', 2, NULL),
(66, 'Os Lusíadas', 'Luís de Camões', 'Romance', '', 'images/uploads/oslusiadas.jpg', 3, NULL),
(67, 'Divina Comédia', 'Dante Alighieri', 'Poesia', '', '', 2, NULL),
(68, 'Sonetos', 'William Shakespeare', 'Poesia', '', '', 3, NULL),
(69, 'As Flores do Mal', 'Charles Baudelaire', 'Poesia', '', '', 2, NULL),
(70, 'Ficções do Interlúdio', 'Fernando Pessoa', 'Poesia', '', '', 3, NULL),
(71, 'Odes', 'Horácio', 'Poesia', '', '', 2, NULL),
(72, 'Poemas Negros', 'Jorge de Lima', 'Poesia', '', '', 3, NULL),
(73, 'Antologia Poética', 'Vinicius de Moraes', 'Poesia', '', '', 2, NULL),
(74, 'Cem Poemas de Amor', 'Pablo Neruda', 'Poesia', '', '', 3, NULL),
(75, 'O Corvo', 'Edgar Allan Poe', 'Poesia', '', '', 2, NULL),
(76, 'O Código Da Vinci', 'Dan Brown', 'Suspense', '', '', 3, NULL),
(77, 'O Silêncio dos Inocentes', 'Thomas Harris', 'Suspense', '', '', 2, NULL),
(78, 'O Nome da Rosa', 'Umberto Eco', 'Suspense', '', '', 3, NULL),
(79, 'Garota Exemplar', 'Gillian Flynn', 'Suspense', '', '', 2, NULL),
(80, 'O Iluminado', 'Stephen King', 'Suspense', '', '', 3, NULL),
(81, 'O Caso dos Dez Negrinhos', 'Agatha Christie', 'Suspense', '', '', 2, NULL),
(82, 'O Médico e o Monstro', 'Robert Louis Stevenson', 'Suspense', '', '', 3, NULL),
(83, 'O Jardim das Borboletas', 'Dot Hutchison', 'Suspense', '', '', 2, NULL),
(84, 'Sangue na Neve', 'Jo Nesbø', 'Suspense', '', '', 3, NULL),
(85, 'Boneco de Neve', 'Jo Nesbø', 'Suspense', '', '', 2, NULL),
(86, 'Steve Jobs', 'Walter Isaacson', 'Biografia', '', '', 3, NULL),
(87, 'Che Guevara: Uma Biografia', 'Jon Lee Anderson', 'Biografia', '', '', 2, NULL),
(88, 'Einstein: Sua Vida, Seu Universo', 'Walter Isaacson', 'Biografia', '', '', 3, NULL),
(89, 'Malcolm X: Uma Vida de Reinvenções', 'Manning Marable', 'Biografia', '', '', 2, NULL),
(90, 'Princesa Isabel', 'Roderick J. Barman', 'Biografia', '', '', 3, NULL),
(91, 'Gandhi: Uma Biografia', 'Joseph Lelyveld', 'Biografia', '', '', 2, NULL),
(92, 'Elon Musk: Como o CEO Bilionário da SpaceX e da Tesla Está Moldando Nosso Futuro', 'Ashlee Vance', 'Biografia', '', '', 3, NULL),
(93, 'O Diário de Anne Frank', 'Anne Frank', 'Biografia', '', '', 2, NULL),
(94, 'Frida Kahlo: Uma Biografia', 'Hayden Herrera', 'Biografia', '', '', 3, NULL),
(95, 'Churchill: Uma Vida', 'Martin Gilbert', 'Biografia', '', '', 2, NULL),
(96, 'A Segunda Guerra Mundial', 'Antony Beevor', 'História', '', '', 3, NULL),
(97, 'História do Brasil', 'Boris Fausto', 'História', '', '', 2, NULL),
(98, 'Uma Breve História do Tempo', 'Stephen Hawking', 'História', '', '', 3, NULL),
(99, 'A Origem das Espécies', 'Charles Darwin', 'História', '', '', 2, NULL),
(100, 'Sapiens: Uma Breve História da Humanidade', 'Yuval Noah Harari', 'História', '', '', 3, NULL),
(101, 'A Queda do Czar', 'Robert K. Massie', 'História', '', '', 2, NULL),
(102, 'A Guerra que Salvou a Minha Vida', 'Kimberly Brubaker Bradley', 'História', '', '', 3, NULL),
(103, 'A Guerra dos Cem Anos', 'Robin Neillands', 'História', '', '', 2, NULL),
(104, 'As Cruzadas', 'Thomas Asbridge', 'História', '', '', 3, NULL),
(105, 'Os Últimos Dias de Hitler', 'Hugh Trevor-Roper', 'História', '', '', 2, NULL),
(106, 'O Poder do Hábito', 'Charles Duhigg', 'Autoajuda', '', '', 3, NULL),
(107, 'O Poder da Ação', 'Paulo Vieira', 'Autoajuda', '', '', 2, NULL),
(108, 'Quem Pensa Enriquece', 'Napoleon Hill', 'Autoajuda', '', '', 3, NULL),
(109, 'Como Fazer Amigos e Influenciar Pessoas', 'Dale Carnegie', 'Autoajuda', '', '', 2, NULL),
(110, 'O Segredo', 'Rhonda Byrne', 'Autoajuda', '', '', 3, NULL),
(111, 'Pai Rico, Pai Pobre', 'Robert T.', 'Negócios e Finanças', '', '', 2, NULL),
(112, 'O Investidor Inteligente', 'Benjamin Graham', 'Negócios e Finanças', '', '', 3, NULL),
(113, 'O Homem Mais Rico da Babilônia', 'George S. Clason', 'Negócios e Finanças', '', '', 2, NULL),
(114, 'A Arte da Guerra', 'Sun Tzu', 'Negócios e Finanças', '', '', 3, NULL),
(115, 'Faça Fortuna com Ações Antes que seja Tarde', 'Décio Bazin', 'Negócios e Finanças', '', '', 2, NULL),
(116, 'A Mentalidade do Investidor de Sucesso', 'João Kepler', 'Negócios e Finanças', '', '', 3, NULL),
(117, 'O Jeito Harvard de Ser Feliz', 'Shawn Achor', 'Negócios e Finanças', '', '', 2, NULL),
(119, '1984', 'George Orwell', 'Ficção Científica', 'Publicada originalmente em 1949, a distopia futurista 1984 é um dos romances mais influentes do século XX, um inquestionável clássico moderno. Lançada poucos meses antes da morte do autor, é uma obra magistral que ainda se impõe como uma poderosa reflexão ficcional sobre a essência nefasta de qualquer forma de poder totalitário.', 'images/uploads/1984.jpg', 43, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'joao', 'joao@gmail.com', '$2y$10$6c3/HwWidKFyUW3OgHTPGe4tmMekIjxRX7aYFEZ81XXOPn0qHqUvm'),
(2, 'teste', 'teste@gmail.com', '$2y$10$qa9mtEUoCx2Kb9hrpFMTD.fGD6npyZNrKc0ijrGnpTzMivb/YFuoy'),
(3, 'vitor', 'vitor@gmail.com', '$2y$10$.R/bTjewhME9xeXcf0.ko.Nu6390IcdIRfHi7ovLNX9aFB/BlcAlG'),
(4, 'mateus', 'mateus@gmail.com', '$2y$10$8Pct17m.keox87oG84RuiOFs8/cX/56LuoQPzD0YYO2eD3BdjhAca'),
(5, 'dadada', 'dadada@gmail.com', '$2y$10$K0xl292JBS4NxyluuNMxLOLQK.IdtCbwSDT6RTfbodUPh019ketVi'),
(6, 'rqrqrq', 'rqrqrq@gmail.com', '$2y$10$BddEaMDd.aX8flGXTUIdMOAaLv93.8eGtcZnjGwHd6E2Cj3m72cpm'),
(7, 'dadadadadada', 'dadadadadadadad@gmail.com', '$2y$10$.cz.h3bQxhF.xdtxFBB0Iu/oKkXR.yMAAoKCzWMamcHeYzt/fZglG'),
(8, 'dadadadadadadadada', 'dadadadaddadadadadada@gmail.com', '$2y$10$zKLYB/SNwPptT1nYpUxmvedJ4F7u28R/kLv5Umly45v3rCe7MtdH6'),
(9, 'oi', 'oi@gmail.com', '$2y$10$tvxnBMyw1gQPElC7Q0XpGe1CIO3q5FwKaTWqVuzRHnvbScr.cklRu'),
(10, 'th', 'th@gmail.com', '$2y$10$ikWxaswjoLpedXLMlx6phOrY1rXP3SAZiuKp9W2IPZP49P3RJTh2i'),
(11, 'e', 'e@gmail.com', '$2y$10$eeNFXSsFiSaDhjh85zIT2Op/gSnoQzv9Mmiw0.0qRexedaIwXpu7G'),
(12, 'u', 'u@gmail.com', '$2y$10$sK801OBVNWlF4kC9O8Iih.qEM3QQY3R.6vZvwMYVJx3W7KUV3zszK'),
(13, 't', 't@gmail.com', '$2y$10$dGicI2aQctzUuohxnCZerOCdIcLztkEZS/6emUgKGohuRznFdeChu'),
(14, 'w', 'w@gmail.com', '$2y$10$yI4ZXdhJHEkl4cLQYQDLhO4S2CFTrJv9AS2KvrbkvGzoJknBwGn3K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_livro` (`id_livro`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
