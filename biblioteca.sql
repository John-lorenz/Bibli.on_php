-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 03-Maio-2023 às 15:10
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
  `linkImagem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `genero`, `linkImagem`) VALUES
(1, 'Orgulho e Preconceito', 'Jane Austen', 'Romance', ''),
(13, 'Vidas Secas', 'Graciliano Ramos', 'Romance', ''),
(14, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Romance', ''),
(27, 'O Morro dos Ventos Uivantes', 'Emily Bronte', 'Romance', ''),
(28, 'Razão e Sensibilidade', 'Jane Austen', 'Romance', ''),
(29, 'Anna Karenina', 'Lev Tolstói', 'Romance', ''),
(30, 'O Grande Gatsby', 'F. Scott Fitzgerald', 'Romance', ''),
(31, 'Cem Anos de Solidão', 'Gabriel Garcia Marquez', 'Romance', ''),
(40, 'A Letra Escarlate', 'Nathaniel Hawthorne', 'Romance', ''),
(41, 'Madame Bovary', 'Gustave Flaubert', 'Romance', ''),
(42, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', 'Romance', ''),
(43, 'O Retrato de Dorian Gray', 'Oscar Wilde', 'Romance', ''),
(44, 'As Pontes de Madison', 'Robert James Waller', 'Romance', ''),
(45, 'A Montanha Mágica', 'Thomas Mann', 'Romance', ''),
(46, 'Fundação', 'Isaac Asimov', 'Aventura', ''),
(47, 'O Guia do Mochileiro das Galáxias', 'Douglas Adams', 'Aventura', ''),
(48, '2001: Uma Odisseia no Espaço', 'Arthur C. Clarke', 'Aventura', ''),
(49, 'O Fim da Eternidade', 'Isaac Asimov', 'Aventura', ''),
(50, 'Eu, Robô', 'Isaac Asimov', 'Aventura', ''),
(51, 'A Máquina do Tempo', 'H.G. Wells', 'Aventura', ''),
(52, 'Neuromancer', 'William Gibson', 'Aventura', ''),
(53, 'Eu Sou a Lenda', 'Richard Matheson', 'Aventura', ''),
(54, 'A Guerra dos Mundos', 'H.G. Wells', 'Aventura', ''),
(55, 'Jogador Número 1', 'Ernest Cline', 'Aventura', ''),
(56, 'O Senhor dos Anéis', 'J.R.R. Tolkien', 'Ficção Científica', ''),
(57, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Ficção Científica', ''),
(58, 'As Crônicas de Nárnia', 'C.S. Lewis', 'Ficção Científica', ''),
(59, 'O Nome do Vento', 'Patrick Rothfuss', 'Ficção Científica', ''),
(60, 'A Roda do Tempo', 'Robert Jordan', 'Ficção Científica', ''),
(61, 'O Último Desejo', 'Andrzej Sapkowski', 'Ficção Científica', ''),
(62, 'A Torre Negra', 'Stephen King', 'Ficção Científica', ''),
(63, 'A Dança dos Dragões', 'George R.R. Martin', 'Ficção Científica', ''),
(64, 'O Príncipe de Westeros e Outras Histórias', 'George R.R. Martin', 'Ficção Científica', ''),
(65, 'A Batalha do Apocalipse', 'Eduardo Spohr', 'Ficção Científica', ''),
(66, 'Os Lusíadas', 'Luís de Camões', 'Poesia', ''),
(67, 'Divina Comédia', 'Dante Alighieri', 'Poesia', ''),
(68, 'Sonetos', 'William Shakespeare', 'Poesia', ''),
(69, 'As Flores do Mal', 'Charles Baudelaire', 'Poesia', ''),
(70, 'Ficções do Interlúdio', 'Fernando Pessoa', 'Poesia', ''),
(71, 'Odes', 'Horácio', 'Poesia', ''),
(72, 'Poemas Negros', 'Jorge de Lima', 'Poesia', ''),
(73, 'Antologia Poética', 'Vinicius de Moraes', 'Poesia', ''),
(74, 'Cem Poemas de Amor', 'Pablo Neruda', 'Poesia', ''),
(75, 'O Corvo', 'Edgar Allan Poe', 'Poesia', ''),
(76, 'O Código Da Vinci', 'Dan Brown', 'Suspense', ''),
(77, 'O Silêncio dos Inocentes', 'Thomas Harris', 'Suspense', ''),
(78, 'O Nome da Rosa', 'Umberto Eco', 'Suspense', ''),
(79, 'Garota Exemplar', 'Gillian Flynn', 'Suspense', ''),
(80, 'O Iluminado', 'Stephen King', 'Suspense', ''),
(81, 'O Caso dos Dez Negrinhos', 'Agatha Christie', 'Suspense', ''),
(82, 'O Médico e o Monstro', 'Robert Louis Stevenson', 'Suspense', ''),
(83, 'O Jardim das Borboletas', 'Dot Hutchison', 'Suspense', ''),
(84, 'Sangue na Neve', 'Jo Nesbø', 'Suspense', ''),
(85, 'Boneco de Neve', 'Jo Nesbø', 'Suspense', ''),
(86, 'Steve Jobs', 'Walter Isaacson', 'Biografia', ''),
(87, 'Che Guevara: Uma Biografia', 'Jon Lee Anderson', 'Biografia', ''),
(88, 'Einstein: Sua Vida, Seu Universo', 'Walter Isaacson', 'Biografia', ''),
(89, 'Malcolm X: Uma Vida de Reinvenções', 'Manning Marable', 'Biografia', ''),
(90, 'Princesa Isabel', 'Roderick J. Barman', 'Biografia', ''),
(91, 'Gandhi: Uma Biografia', 'Joseph Lelyveld', 'Biografia', ''),
(92, 'Elon Musk: Como o CEO Bilionário da SpaceX e da Tesla Está Moldando Nosso Futuro', 'Ashlee Vance', 'Biografia', ''),
(93, 'O Diário de Anne Frank', 'Anne Frank', 'Biografia', ''),
(94, 'Frida Kahlo: Uma Biografia', 'Hayden Herrera', 'Biografia', ''),
(95, 'Churchill: Uma Vida', 'Martin Gilbert', 'Biografia', ''),
(96, 'A Segunda Guerra Mundial', 'Antony Beevor', 'História', ''),
(97, 'História do Brasil', 'Boris Fausto', 'História', ''),
(98, 'Uma Breve História do Tempo', 'Stephen Hawking', 'História', ''),
(99, 'A Origem das Espécies', 'Charles Darwin', 'História', ''),
(100, 'Sapiens: Uma Breve História da Humanidade', 'Yuval Noah Harari', 'História', ''),
(101, 'A Queda do Czar', 'Robert K. Massie', 'História', ''),
(102, 'A Guerra que Salvou a Minha Vida', 'Kimberly Brubaker Bradley', 'História', ''),
(103, 'A Guerra dos Cem Anos', 'Robin Neillands', 'História', ''),
(104, 'As Cruzadas', 'Thomas Asbridge', 'História', ''),
(105, 'Os Últimos Dias de Hitler', 'Hugh Trevor-Roper', 'História', ''),
(106, 'O Poder do Hábito', 'Charles Duhigg', 'Autoajuda', ''),
(107, 'O Poder da Ação', 'Paulo Vieira', 'Autoajuda', ''),
(108, 'Quem Pensa Enriquece', 'Napoleon Hill', 'Autoajuda', ''),
(109, 'Como Fazer Amigos e Influenciar Pessoas', 'Dale Carnegie', 'Autoajuda', ''),
(110, 'O Segredo', 'Rhonda Byrne', 'Autoajuda', ''),
(111, 'Pai Rico, Pai Pobre', 'Robert T.', 'Negócios e Finanças', ''),
(112, 'O Investidor Inteligente', 'Benjamin Graham', 'Negócios e Finanças', ''),
(113, 'O Homem Mais Rico da Babilônia', 'George S. Clason', 'Negócios e Finanças', ''),
(114, 'A Arte da Guerra', 'Sun Tzu', 'Negócios e Finanças', ''),
(115, 'Faça Fortuna com Ações Antes que seja Tarde', 'Décio Bazin', 'Negócios e Finanças', ''),
(116, 'A Mentalidade do Investidor de Sucesso', 'João Kepler', 'Negócios e Finanças', ''),
(117, 'O Jeito Harvard de Ser Feliz', 'Shawn Achor', 'Negócios e Finanças', '');

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
(14, 'vitor', 'a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
