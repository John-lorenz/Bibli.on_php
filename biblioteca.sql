-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 02-Maio-2023 às 00:46
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
(1, 'Romance'),
(2, 'Aventura'),
(3, 'Ficção Científica'),
(4, 'Poesia'),
(5, 'Suspense'),
(6, 'Biografia'),
(7, 'História'),
(8, 'Autoajuda'),
(9, 'Negócios e Finanças');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `genero_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `genero_id`) VALUES
(1, 'Orgulho e Preconceito', 'Jane Austen', 1),
(13, 'Vidas Secas', 'Graciliano Ramos', 1),
(14, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 1),
(27, 'O Morro dos Ventos Uivantes', 'Emily Bronte', 1),
(28, 'Razão e Sensibilidade', 'Jane Austen', 1),
(29, 'Anna Karenina', 'Lev Tolstói', 1),
(30, 'O Grande Gatsby', 'F. Scott Fitzgerald', 1),
(31, 'Cem Anos de Solidão', 'Gabriel Garcia Marquez', 1),
(40, 'A Letra Escarlate', 'Nathaniel Hawthorne', 1),
(41, 'Madame Bovary', 'Gustave Flaubert', 1),
(42, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 1),
(43, 'O Retrato de Dorian Gray', 'Oscar Wilde', 1),
(44, 'As Pontes de Madison', 'Robert James Waller', 1),
(45, 'A Montanha Mágica', 'Thomas Mann', 1),
(46, 'Fundação', 'Isaac Asimov', 2),
(47, 'O Guia do Mochileiro das Galáxias', 'Douglas Adams', 2),
(48, '2001: Uma Odisseia no Espaço', 'Arthur C. Clarke', 2),
(49, 'O Fim da Eternidade', 'Isaac Asimov', 2),
(50, 'Eu, Robô', 'Isaac Asimov', 2),
(51, 'A Máquina do Tempo', 'H.G. Wells', 2),
(52, 'Neuromancer', 'William Gibson', 2),
(53, 'Eu Sou a Lenda', 'Richard Matheson', 2),
(54, 'A Guerra dos Mundos', 'H.G. Wells', 2),
(55, 'Jogador Número 1', 'Ernest Cline', 2),
(56, 'O Senhor dos Anéis', 'J.R.R. Tolkien', 3),
(57, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 3),
(58, 'As Crônicas de Nárnia', 'C.S. Lewis', 3),
(59, 'O Nome do Vento', 'Patrick Rothfuss', 3),
(60, 'A Roda do Tempo', 'Robert Jordan', 3),
(61, 'O Último Desejo', 'Andrzej Sapkowski', 3),
(62, 'A Torre Negra', 'Stephen King', 3),
(63, 'A Dança dos Dragões', 'George R.R. Martin', 3),
(64, 'O Príncipe de Westeros e Outras Histórias', 'George R.R. Martin', 3),
(65, 'A Batalha do Apocalipse', 'Eduardo Spohr', 3),
(66, 'Os Lusíadas', 'Luís de Camões', 4),
(67, 'Divina Comédia', 'Dante Alighieri', 4),
(68, 'Sonetos', 'William Shakespeare', 4),
(69, 'As Flores do Mal', 'Charles Baudelaire', 4),
(70, 'Ficções do Interlúdio', 'Fernando Pessoa', 4),
(71, 'Odes', 'Horácio', 4),
(72, 'Poemas Negros', 'Jorge de Lima', 4),
(73, 'Antologia Poética', 'Vinicius de Moraes', 4),
(74, 'Cem Poemas de Amor', 'Pablo Neruda', 4),
(75, 'O Corvo', 'Edgar Allan Poe', 4),
(76, 'O Código Da Vinci', 'Dan Brown', 5),
(77, 'O Silêncio dos Inocentes', 'Thomas Harris', 5),
(78, 'O Nome da Rosa', 'Umberto Eco', 5),
(79, 'Garota Exemplar', 'Gillian Flynn', 5),
(80, 'O Iluminado', 'Stephen King', 5),
(81, 'O Caso dos Dez Negrinhos', 'Agatha Christie', 5),
(82, 'O Médico e o Monstro', 'Robert Louis Stevenson', 5),
(83, 'O Jardim das Borboletas', 'Dot Hutchison', 5),
(84, 'Sangue na Neve', 'Jo Nesbø', 5),
(85, 'Boneco de Neve', 'Jo Nesbø', 5),
(86, 'Steve Jobs', 'Walter Isaacson', 6),
(87, 'Che Guevara: Uma Biografia', 'Jon Lee Anderson', 6),
(88, 'Einstein: Sua Vida, Seu Universo', 'Walter Isaacson', 6),
(89, 'Malcolm X: Uma Vida de Reinvenções', 'Manning Marable', 6),
(90, 'Princesa Isabel', 'Roderick J. Barman', 6),
(91, 'Gandhi: Uma Biografia', 'Joseph Lelyveld', 6),
(92, 'Elon Musk: Como o CEO Bilionário da SpaceX e da Tesla Está Moldando Nosso Futuro', 'Ashlee Vance', 6),
(93, 'O Diário de Anne Frank', 'Anne Frank', 6),
(94, 'Frida Kahlo: Uma Biografia', 'Hayden Herrera', 6),
(95, 'Churchill: Uma Vida', 'Martin Gilbert', 6),
(96, 'A Segunda Guerra Mundial', 'Antony Beevor', 7),
(97, 'História do Brasil', 'Boris Fausto', 7),
(98, 'Uma Breve História do Tempo', 'Stephen Hawking', 7),
(99, 'A Origem das Espécies', 'Charles Darwin', 7),
(100, 'Sapiens: Uma Breve História da Humanidade', 'Yuval Noah Harari', 7),
(101, 'A Queda do Czar', 'Robert K. Massie', 7),
(102, 'A Guerra que Salvou a Minha Vida', 'Kimberly Brubaker Bradley', 7),
(103, 'A Guerra dos Cem Anos', 'Robin Neillands', 7),
(104, 'As Cruzadas', 'Thomas Asbridge', 7),
(105, 'Os Últimos Dias de Hitler', 'Hugh Trevor-Roper', 7),
(106, 'O Poder do Hábito', 'Charles Duhigg', 8),
(107, 'O Poder da Ação', 'Paulo Vieira', 8),
(108, 'Quem Pensa Enriquece', 'Napoleon Hill', 8),
(109, 'Como Fazer Amigos e Influenciar Pessoas', 'Dale Carnegie', 8),
(110, 'O Segredo', 'Rhonda Byrne', 8),
(111, 'Pai Rico, Pai Pobre', 'Robert T.', 9),
(112, 'O Investidor Inteligente', 'Benjamin Graham', 9),
(113, 'O Homem Mais Rico da Babilônia', 'George S. Clason', 9),
(114, 'A Arte da Guerra', 'Sun Tzu', 9),
(115, 'Faça Fortuna com Ações Antes que seja Tarde', 'Décio Bazin', 9),
(116, 'A Mentalidade do Investidor de Sucesso', 'João Kepler', 9),
(117, 'O Jeito Harvard de Ser Feliz', 'Shawn Achor', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(3, 'christian', 'christian@gmail.com', '7b7a53e239400a13bd6be6c91c4f6c4e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genero_id` (`genero_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
