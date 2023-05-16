-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16-Maio-2023 às 15:03
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

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
(8, 'Autoajuda'),
(2, 'Aventura'),
(6, 'Biografia'),
(3, 'Ficção Científica'),
(7, 'História'),
(9, 'Negócios e Finanças'),
(4, 'Poesia'),
(1, 'Romance'),
(5, 'Suspense');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `genero` varchar(25) NOT NULL,
  `descricao` varchar(3000) NOT NULL,
  `linkImagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `genero`, `descricao`, `linkImagem`) VALUES
(1, 'Orgulho e Preconceito', 'Jane Austen', 'Romance', 'ere', 'images/uploads/orgulhoreconceito.jpg'),
(13, 'Vidas Secas', 'Graciliano Ramos', 'Romance', '', 'images/uploads/vidassecas.jpg'),
(14, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Ficção Científica', '', 'images/uploads/opequenoprincipe.jpg'),
(27, 'O Morro dos Ventos Uivantes', 'Emily Bronte', 'Romance', '', 'images/uploads/morrodosventosuivantes.jpg'),
(28, 'Razão e Sensibilidade', 'Jane Austen', 'Romance', '', 'images/uploads/razaosensibilidade.jpg'),
(29, 'Anna Karenina', 'Lev Tolstói', 'Romance', '', 'images/uploads/annakarienina.jpg'),
(30, 'O Grande Gatsby', 'F. Scott Fitzgerald', 'Romance', '', 'images/uploads/ograndegatsby.jpg'),
(31, 'Cem Anos de Solidão', 'Gabriel Garcia Marquez', 'Romance', '', 'images/uploads/cemanos.jpg'),
(40, 'A Letra Escarlate', 'Nathaniel Hawthorne', 'Romance', '', 'images/uploads/a-letra-escarlate-5.jpg'),
(41, 'Madame Bovary', 'Gustave Flaubert', 'Romance', '', 'images/uploads/madamebovary.jpg'),
(42, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 'Romance', '', 'images/uploads/memoriaspostumasdebrascubas.jpg'),
(43, 'O Retrato de Dorian Gray', 'Oscar Wilde', 'Romance', '', 'images/uploads/oretratodedoriangray.jpg'),
(44, 'As Pontes de Madison', 'Robert James Waller', 'Romance', '', 'images/uploads/aspontesdemadinson.jpg'),
(45, 'A Montanha Mágica', 'Thomas Mann', 'Romance', '', 'images/uploads/amontanhamagica.jpg'),
(46, 'Fundação', 'Isaac Asimov', 'Ficção Científica', '', 'images/uploads/fundacao.png'),
(47, 'O Guia do Mochileiro das Galáxias', 'Douglas Adams', 'Ficção Científica', '', 'images/uploads/mochileirodasgalaxias.jpg'),
(48, '2001: Uma Odisseia no Espaço', 'Arthur C. Clarke', 'Ficção Científica', '', 'images/uploads/2001umaodisseia.jpg'),
(49, 'O Fim da Eternidade', 'Isaac Asimov', 'Romance', '', 'images/uploads/ofimdaeternidade.jpg'),
(50, 'Eu, Robô', 'Isaac Asimov', 'Ficção Científica', '', 'images/uploads/eurobo.jpg'),
(51, 'A Máquina do Tempo', 'H.G. Wells', 'Ficção Científica', '', 'images/uploads/amaquinadotempo.jpg'),
(52, 'Neuromancer', 'William Gibson', 'Ficção Científica', '', 'images/uploads/neuromancer.jpg'),
(53, 'Eu Sou a Lenda', 'Richard Matheson', 'Ficção Científica', '', 'images/uploads/eusoualenda.jpg'),
(54, 'A Guerra dos Mundos', 'H.G. Wells', 'Romance', '', 'images/uploads/aguerradosmundos.jpg'),
(55, 'Jogador Número 1', 'Ernest Cline', 'Ficção Científica', '', 'images/uploads/jogadorn1.jpg'),
(56, 'O Senhor dos Anéis - A sociedade do anel', 'J.R.R. Tolkien', 'Romance', '', 'images/uploads/asociedadedoanel.jpg'),
(57, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Romance', '', 'images/uploads/harrypoter1.jpg'),
(58, 'As Crônicas de Nárnia', 'C.S. Lewis', 'Romance', '', 'images/uploads/narnia.jpg'),
(59, 'O Nome do Vento', 'Patrick Rothfuss', 'Romance', '', 'images/uploads/onomedovento.jpg'),
(60, 'A Roda do Tempo', 'Robert Jordan', 'Romance', '', 'images/uploads/rodadotempo.jpg'),
(61, 'O Último Desejo', 'Andrzej Sapkowski', 'Romance', '', 'images/uploads/ultimodesejo.jpg'),
(62, 'A Torre Negra', 'Stephen King', 'Romance', '', 'images/uploads/atorrenegra.jpg'),
(63, 'A Dança dos Dragões', 'George R.R. Martin', 'Romance', '', 'images/uploads/adancadosladroes.jpg'),
(64, 'O Príncipe de Westeros e Outras Histórias', 'George R.R. Martin', 'Romance', '', 'images/uploads/oprincipedewesteros.jpg'),
(65, 'A Batalha do Apocalipse', 'Eduardo Spohr', 'Romance', '', 'images/uploads/abatalhadoapocalipse.jpg'),
(66, 'Os Lusíadas', 'Luís de Camões', 'Romance', '', 'images/uploads/oslusiadas.jpg'),
(67, 'Divina Comédia', 'Dante Alighieri', 'Poesia', '', ''),
(68, 'Sonetos', 'William Shakespeare', 'Poesia', '', ''),
(69, 'As Flores do Mal', 'Charles Baudelaire', 'Poesia', '', ''),
(70, 'Ficções do Interlúdio', 'Fernando Pessoa', 'Poesia', '', ''),
(71, 'Odes', 'Horácio', 'Poesia', '', ''),
(72, 'Poemas Negros', 'Jorge de Lima', 'Poesia', '', ''),
(73, 'Antologia Poética', 'Vinicius de Moraes', 'Poesia', '', ''),
(74, 'Cem Poemas de Amor', 'Pablo Neruda', 'Poesia', '', ''),
(75, 'O Corvo', 'Edgar Allan Poe', 'Poesia', '', ''),
(76, 'O Código Da Vinci', 'Dan Brown', 'Suspense', '', ''),
(77, 'O Silêncio dos Inocentes', 'Thomas Harris', 'Suspense', '', ''),
(78, 'O Nome da Rosa', 'Umberto Eco', 'Suspense', '', ''),
(79, 'Garota Exemplar', 'Gillian Flynn', 'Suspense', '', ''),
(80, 'O Iluminado', 'Stephen King', 'Suspense', '', ''),
(81, 'O Caso dos Dez Negrinhos', 'Agatha Christie', 'Suspense', '', ''),
(82, 'O Médico e o Monstro', 'Robert Louis Stevenson', 'Suspense', '', ''),
(83, 'O Jardim das Borboletas', 'Dot Hutchison', 'Suspense', '', ''),
(84, 'Sangue na Neve', 'Jo Nesbø', 'Suspense', '', ''),
(85, 'Boneco de Neve', 'Jo Nesbø', 'Suspense', '', ''),
(86, 'Steve Jobs', 'Walter Isaacson', 'Biografia', '', ''),
(87, 'Che Guevara: Uma Biografia', 'Jon Lee Anderson', 'Biografia', '', ''),
(88, 'Einstein: Sua Vida, Seu Universo', 'Walter Isaacson', 'Biografia', '', ''),
(89, 'Malcolm X: Uma Vida de Reinvenções', 'Manning Marable', 'Biografia', '', ''),
(90, 'Princesa Isabel', 'Roderick J. Barman', 'Biografia', '', ''),
(91, 'Gandhi: Uma Biografia', 'Joseph Lelyveld', 'Biografia', '', ''),
(92, 'Elon Musk: Como o CEO Bilionário da SpaceX e da Tesla Está Moldando Nosso Futuro', 'Ashlee Vance', 'Biografia', '', ''),
(93, 'O Diário de Anne Frank', 'Anne Frank', 'Biografia', '', ''),
(94, 'Frida Kahlo: Uma Biografia', 'Hayden Herrera', 'Biografia', '', ''),
(95, 'Churchill: Uma Vida', 'Martin Gilbert', 'Biografia', '', ''),
(96, 'A Segunda Guerra Mundial', 'Antony Beevor', 'História', '', ''),
(97, 'História do Brasil', 'Boris Fausto', 'História', '', ''),
(98, 'Uma Breve História do Tempo', 'Stephen Hawking', 'História', '', ''),
(99, 'A Origem das Espécies', 'Charles Darwin', 'História', '', ''),
(100, 'Sapiens: Uma Breve História da Humanidade', 'Yuval Noah Harari', 'História', '', ''),
(101, 'A Queda do Czar', 'Robert K. Massie', 'História', '', ''),
(102, 'A Guerra que Salvou a Minha Vida', 'Kimberly Brubaker Bradley', 'História', '', ''),
(103, 'A Guerra dos Cem Anos', 'Robin Neillands', 'História', '', ''),
(104, 'As Cruzadas', 'Thomas Asbridge', 'História', '', ''),
(105, 'Os Últimos Dias de Hitler', 'Hugh Trevor-Roper', 'História', '', ''),
(106, 'O Poder do Hábito', 'Charles Duhigg', 'Autoajuda', '', ''),
(107, 'O Poder da Ação', 'Paulo Vieira', 'Autoajuda', '', ''),
(108, 'Quem Pensa Enriquece', 'Napoleon Hill', 'Autoajuda', '', ''),
(109, 'Como Fazer Amigos e Influenciar Pessoas', 'Dale Carnegie', 'Autoajuda', '', ''),
(110, 'O Segredo', 'Rhonda Byrne', 'Autoajuda', '', ''),
(111, 'Pai Rico, Pai Pobre', 'Robert T.', 'Negócios e Finanças', '', ''),
(112, 'O Investidor Inteligente', 'Benjamin Graham', 'Negócios e Finanças', '', ''),
(113, 'O Homem Mais Rico da Babilônia', 'George S. Clason', 'Negócios e Finanças', '', ''),
(114, 'A Arte da Guerra', 'Sun Tzu', 'Negócios e Finanças', '', ''),
(115, 'Faça Fortuna com Ações Antes que seja Tarde', 'Décio Bazin', 'Negócios e Finanças', '', ''),
(116, 'A Mentalidade do Investidor de Sucesso', 'João Kepler', 'Negócios e Finanças', '', ''),
(117, 'O Jeito Harvard de Ser Feliz', 'Shawn Achor', 'Negócios e Finanças', '', ''),
(119, '1984', 'George Orwell', 'Ficção Científica', 'Publicada originalmente em 1949, a distopia futurista 1984 é um dos romances mais influentes do século XX, um inquestionável clássico moderno. Lançada poucos meses antes da morte do autor, é uma obra magistral que ainda se impõe como uma poderosa reflexão ficcional sobre a essência nefasta de qualquer forma de poder totalitário.', 'images/uploads/1984.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(12, 'arthur', 'teste@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'vitor', 'a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'arthur', 'maicon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
