
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `phpoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `nomeanimal` varchar(255) NOT NULL,
  `tamanho` varchar(255) NOT NULL,
  `raca` varchar(255) NOT NULL,
  `servico` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `endereco`, `tel`, `especie`, `nomeanimal`, `tamanho`, `raca`, `servico`, `valor`) VALUES
(1, 'Bruno Nascimento', 'rua campo grande', '23434566', 'cachorro', 'riquinha', 'shi tzu', 'medio', 'tosa', '150,00');
