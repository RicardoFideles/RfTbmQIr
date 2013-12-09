-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: localhost:3306
-- Data de Criação: 08-Dez-2013 às 15:37
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `tbm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(20) NOT NULL,
  `foreign_key` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `link`) VALUES
(1, 'Galinha Pintadinha', 'www.galinhapintadinha.com.br'),
(2, 'Tech Tudo', 'http://www.techtudo.com.br/'),
(3, 'Globo.com', 'http://globo.com'),
(4, 'Google', 'http://google.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`) VALUES
(1, 'Cinemas', 'cinemas'),
(2, 'Teatros', 'teatros'),
(3, 'Museus', 'museus'),
(4, 'Passeios', 'passeios'),
(5, 'Eventos', 'eventos'),
(6, 'Esportes', 'esportes'),
(7, 'Brinquedos', 'brinquedos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories_cities`
--

CREATE TABLE IF NOT EXISTS `categories_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `categories_cities`
--

INSERT INTO `categories_cities` (`id`, `category_id`, `city_id`) VALUES
(2, 2, 1),
(3, 3, 1),
(4, 3, 2),
(5, 4, 1),
(6, 4, 2),
(7, 5, 1),
(8, 5, 2),
(9, 6, 1),
(10, 6, 2),
(11, 7, 2),
(12, 1, 2),
(13, 1, 1),
(14, 7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cities`
--

INSERT INTO `cities` (`id`, `name`, `slug`) VALUES
(1, 'Rio de Janeiro', 'rio-de-janeiro'),
(2, 'São Paulo', 'sao-paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `establishment_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `texto` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `establishments`
--

CREATE TABLE IF NOT EXISTS `establishments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `breve` longtext NOT NULL,
  `texto` longtext NOT NULL,
  `informacoes` longtext NOT NULL,
  `site` varchar(255) NOT NULL,
  `visual` int(11) NOT NULL,
  `auditiva` int(11) NOT NULL,
  `motora` int(11) NOT NULL,
  `intelectual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `establishments`
--

INSERT INTO `establishments` (`id`, `category_id`, `city_id`, `name`, `slug`, `breve`, `texto`, `informacoes`, `site`, `visual`, `auditiva`, `motora`, `intelectual`) VALUES
(1, 1, 1, 'OutBack', 'outback', '', '<p>sssdaaa</p>\r\n<p>&nbsp;</p>\r\n<p>a</p>\r\n<p>a</p>', '<p>dasdas</p>', 'outback.com', 0, 0, 0, 0),
(2, 1, 1, 'Cinema Kinoplex', 'cinema-kinoplex', '', '<p>teste</p>', '<p>teste</p>', 'kinoplex', 0, 0, 0, 0),
(3, 1, 1, 'Cinemagic', 'cinemagic', '', '<p>as</p>', '<p>ass</p>', 'cinemagic', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `interviews`
--

CREATE TABLE IF NOT EXISTS `interviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `texto` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `interviews`
--

INSERT INTO `interviews` (`id`, `name`, `slug`, `subtitulo`, `texto`, `created`, `updated`) VALUES
(2, 'Jordana Silva', 'jordana-silva', 'subituo...', '<p><span>A presidente Dilma Rousseff criou nesta quinta-feira (17) um comit&ecirc; interministerial para acompanhar os pre&ccedil;os, as tarifas e a qualidade de servi&ccedil;os durante os jogos da Copa do Mundo de 2014. O comit&ecirc; ter&aacute; a responsabilidade de monitorar hot&eacute;is, restaurantes, aeroportos e outros servi&ccedil;os tur&iacute;sticos das 12 cidades-sedes do pa&iacute;s, informou a assessoria da Casa Civil.&nbsp;</span><br /><br /><span>A comiss&atilde;o foi instaurada por determina&ccedil;&atilde;o da presidente e ser&aacute; coordenada pela Casa Civil, segundo nota oficial divulgada pela pasta. A primeira reuni&atilde;o t&eacute;cnica do grupo ocorrer&aacute; no pr&oacute;ximo dia 24.&nbsp;</span><br /><br /><span>De acordo com a chefe da Casa Civil, Gleisi Hoffmann, haver&aacute; um &ldquo;monitoramento sistem&aacute;tico&rdquo; do comportamento dos agentes prestadores desses servi&ccedil;os durante a realiza&ccedil;&atilde;o da Copa, mas n&atilde;o haver&aacute; tabelamento de pre&ccedil;o.&nbsp;</span><br /><br /><span>&ldquo;N&atilde;o tabelamos, nem tabelaremos pre&ccedil;os, mas n&oacute;s n&atilde;o permitiremos abusos. Vamos utilizar todos os instrumentos &agrave; disposi&ccedil;&atilde;o do Estado para garantir a defesa dos direitos do consumidor, seja ele brasileiro, ou estrangeiro&rdquo;, disse a ministra no comunicado oficial.</span><br /><br /><span>Mais tarde, por meio do perfil da Casa Civil no microblog Twitter, a ministra disse que &ldquo;n&atilde;o h&aacute; motivos para preocupa&ccedil;&atilde;o&rdquo; e que o Brasil receber&aacute; a todos &ldquo;com pre&ccedil;o justo na Copa&rdquo;. &ldquo;Cabe ao governo, ao Estado brasileiro, monitorar e garantir a defesa dos direitos dos consumidores&rdquo;, complementou Gleisi.&nbsp;</span><br /><br /><span>Comit&ecirc; de pre&ccedil;os da Copa&nbsp;</span><br /><br /><span>Ir&atilde;o integrar o grupo interministerial respons&aacute;vel pelo acompanhamento dos pre&ccedil;os durante a Copa representantes dos minist&eacute;rios do Esporte, Justi&ccedil;a, Turismo, Secretaria de Avia&ccedil;&atilde;o Civil (SAC), Fazenda e Sa&uacute;de. As duas &uacute;ltimas pastas ser&atilde;o representadas pela Receita Federal, pela Secretaria de Acompanhamento Econ&ocirc;mico e pela Ag&ecirc;ncia Nacional de Vigil&acirc;ncia Sanit&aacute;ria (Anvisa).&nbsp;</span><br /><br /><span>O Minist&eacute;rio da Justi&ccedil;a, de acordo com a nota, manter&aacute; contato com os Procons das 12 cidades-sede com o objetivo de fazer um &ldquo;diagn&oacute;stico detalhado dos pre&ccedil;os e da qualidades de servi&ccedil;os, como hot&eacute;is e restaurantes.&nbsp;</span><br /><br /><span>Al&eacute;m disso, o Conselho Administrativo de Defesa Econ&ocirc;mica (Cade) analisar&aacute; os setores a&eacute;reo e hoteleiro no Brasil para identificar eventuais inibi&ccedil;&otilde;es da concorr&ecirc;ncia.</span></p>', '2013-12-01 21:43:20', '2013-12-01 21:43:20'),
(3, 'Luciana Gimenez', 'luciana-gimenez', 'su..', '<p>sas</p>', '2013-12-03 21:39:42', '2013-12-03 21:39:42'),
(4, 'Marcos Paulo', 'marcos-paulo', 'sub', '<p>saa</p>', '2013-12-03 21:40:08', '2013-12-03 21:40:08'),
(5, 'celebri_2', 'celebri-2', 'saas', '<p>aasasa</p>', '2013-12-03 21:40:32', '2013-12-03 21:40:32'),
(6, 'celebri_1', 'celebri-1', 'sub..', '<p>sasaassa</p>', '2013-12-03 21:40:44', '2013-12-03 21:40:44'),
(7, 'celebri_3', 'celebri-3', 'sub', '<p>sasaasas</p>', '2013-12-03 21:40:54', '2013-12-03 21:40:54'),
(8, 'celebri_4', 'celebri-4', 'su', '<p>asaassaas</p>', '2013-12-03 21:41:04', '2013-12-03 21:41:04'),
(9, 'celebri_5', 'celebri-5', 'saas', '<p>ssaa</p>', '2013-12-03 21:41:12', '2013-12-03 21:41:12'),
(10, 'celebri_6', 'celebri-6', 'su', '<p>sas</p>', '2013-12-03 21:41:19', '2013-12-03 21:41:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `emfoco` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `texto` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `emfoco`, `subtitulo`, `texto`, `created`, `updated`) VALUES
(1, 'Comércio funcionará em horário especial para o Dia das Crianças', 'comercio-funcionara-em-horario-especial-para-o-dia-das-criancas', '', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut srisus', '<p><span>A presidente Dilma Rousseff criou nesta quinta-feira (17) um comit&ecirc; interministerial para acompanhar os pre&ccedil;os, as tarifas e a qualidade de servi&ccedil;os durante os jogos da Copa do Mundo de 2014. O comit&ecirc; ter&aacute; a responsabilidade de monitorar hot&eacute;is, restaurantes, aeroportos e outros servi&ccedil;os tur&iacute;sticos das 12 cidades-sedes do pa&iacute;s, informou a assessoria da Casa Civil.&nbsp;</span><br /><br /><span>A comiss&atilde;o foi instaurada por determina&ccedil;&atilde;o da presidente e ser&aacute; coordenada pela Casa Civil, segundo nota oficial divulgada pela pasta. A primeira reuni&atilde;o t&eacute;cnica do grupo ocorrer&aacute; no pr&oacute;ximo dia 24.&nbsp;</span><br /><br /><span>De acordo com a chefe da Casa Civil, Gleisi Hoffmann, haver&aacute; um &ldquo;monitoramento sistem&aacute;tico&rdquo; do comportamento dos agentes prestadores desses servi&ccedil;os durante a realiza&ccedil;&atilde;o da Copa, mas n&atilde;o haver&aacute; tabelamento de pre&ccedil;o.&nbsp;</span><br /><br /><span>&ldquo;N&atilde;o tabelamos, nem tabelaremos pre&ccedil;os, mas n&oacute;s n&atilde;o permitiremos abusos. Vamos utilizar todos os instrumentos &agrave; disposi&ccedil;&atilde;o do Estado para garantir a defesa dos direitos do consumidor, seja ele brasileiro, ou estrangeiro&rdquo;, disse a ministra no comunicado oficial.</span><br /><br /><span>Mais tarde, por meio do perfil da Casa Civil no microblog Twitter, a ministra disse que &ldquo;n&atilde;o h&aacute; motivos para preocupa&ccedil;&atilde;o&rdquo; e que o Brasil receber&aacute; a todos &ldquo;com pre&ccedil;o justo na Copa&rdquo;. &ldquo;Cabe ao governo, ao Estado brasileiro, monitorar e garantir a defesa dos direitos dos consumidores&rdquo;, complementou Gleisi.&nbsp;</span><br /><br /><span>Comit&ecirc; de pre&ccedil;os da Copa&nbsp;</span><br /><br /><span>Ir&atilde;o integrar o grupo interministerial respons&aacute;vel pelo acompanhamento dos pre&ccedil;os durante a Copa representantes dos minist&eacute;rios do Esporte, Justi&ccedil;a, Turismo, Secretaria de Avia&ccedil;&atilde;o Civil (SAC), Fazenda e Sa&uacute;de. As duas &uacute;ltimas pastas ser&atilde;o representadas pela Receita Federal, pela Secretaria de Acompanhamento Econ&ocirc;mico e pela Ag&ecirc;ncia Nacional de Vigil&acirc;ncia Sanit&aacute;ria (Anvisa).&nbsp;</span><br /><br /><span>O Minist&eacute;rio da Justi&ccedil;a, de acordo com a nota, manter&aacute; contato com os Procons das 12 cidades-sede com o objetivo de fazer um &ldquo;diagn&oacute;stico detalhado dos pre&ccedil;os e da qualidades de servi&ccedil;os, como hot&eacute;is e restaurantes.&nbsp;</span><br /><br /><span>Al&eacute;m disso, o Conselho Administrativo de Defesa Econ&ocirc;mica (Cade) analisar&aacute; os setores a&eacute;reo e hoteleiro no Brasil para identificar eventuais inibi&ccedil;&otilde;es da concorr&ecirc;ncia.</span></p>', '2013-12-01 15:58:37', '2013-12-01 15:58:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `texto` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `name`, `slug`, `tipo`, `texto`) VALUES
(4, 'SOBRE', 'sobre', 'sobre', '<p><span>A presidente Dilma Rousseff criou nesta quinta-feira (17) um comit&ecirc; interministerial para acompanhar os pre&ccedil;os, as tarifas e a qualidade de servi&ccedil;os durante os jogos da Copa do Mundo de 2014. O comit&ecirc; ter&aacute; a responsabilidade de monitorar hot&eacute;is, restaurantes, aeroportos e outros servi&ccedil;os tur&iacute;sticos das 12 cidades-sedes do pa&iacute;s, informou a assessoria da Casa Civil.&nbsp;</span><br /><br /><span>A comiss&atilde;o foi instaurada por determina&ccedil;&atilde;o da presidente e ser&aacute; coordenada pela Casa Civil, segundo nota oficial divulgada pela pasta. A primeira reuni&atilde;o t&eacute;cnica do grupo ocorrer&aacute; no pr&oacute;ximo dia 24.&nbsp;</span><br /><br /><span>De acordo com a chefe da Casa Civil, Gleisi Hoffmann, haver&aacute; um &ldquo;monitoramento sistem&aacute;tico&rdquo; do comportamento dos agentes prestadores desses servi&ccedil;os durante a realiza&ccedil;&atilde;o da Copa, mas n&atilde;o haver&aacute; tabelamento de pre&ccedil;o.&nbsp;</span><br /><br /><span>&ldquo;N&atilde;o tabelamos, nem tabelaremos pre&ccedil;os, mas n&oacute;s n&atilde;o permitiremos abusos. Vamos utilizar todos os instrumentos &agrave; disposi&ccedil;&atilde;o do Estado para garantir a defesa dos direitos do consumidor, seja ele brasileiro, ou estrangeiro&rdquo;, disse a ministra no comunicado oficial.</span><br /><br /><span>Mais tarde, por meio do perfil da Casa Civil no microblog Twitter, a ministra disse que &ldquo;n&atilde;o h&aacute; motivos para preocupa&ccedil;&atilde;o&rdquo; e que o Brasil receber&aacute; a todos &ldquo;com pre&ccedil;o justo na Copa&rdquo;. &ldquo;Cabe ao governo, ao Estado brasileiro, monitorar e garantir a defesa dos direitos dos consumidores&rdquo;, complementou Gleisi.&nbsp;</span><br /><br /><span>Comit&ecirc; de pre&ccedil;os da Copa&nbsp;</span><br /><br /><span>Ir&atilde;o integrar o grupo interministerial respons&aacute;vel pelo acompanhamento dos pre&ccedil;os durante a Copa representantes dos minist&eacute;rios do Esporte, Justi&ccedil;a, Turismo, Secretaria de Avia&ccedil;&atilde;o Civil (SAC), Fazenda e Sa&uacute;de. As duas &uacute;ltimas pastas ser&atilde;o representadas pela Receita Federal, pela Secretaria de Acompanhamento Econ&ocirc;mico e pela Ag&ecirc;ncia Nacional de Vigil&acirc;ncia Sanit&aacute;ria (Anvisa).&nbsp;</span><br /><br /><span>O Minist&eacute;rio da Justi&ccedil;a, de acordo com a nota, manter&aacute; contato com os Procons das 12 cidades-sede com o objetivo de fazer um &ldquo;diagn&oacute;stico detalhado dos pre&ccedil;os e da qualidades de servi&ccedil;os, como hot&eacute;is e restaurantes.&nbsp;</span><br /><br /><span>Al&eacute;m disso, o Conselho Administrativo de Defesa Econ&ocirc;mica (Cade) analisar&aacute; os setores a&eacute;reo e hoteleiro no Brasil para identificar eventuais inibi&ccedil;&otilde;es da concorr&ecirc;ncia.</span></p>'),
(6, 'POLÍTICA DE PRIVACIDADE', 'politica-de-privacidade', 'politica-de-privacidade', '<p><span>A presidente Dilma Rousseff criou nesta quinta-feira (17) um comit&ecirc; interministerial para acompanhar os pre&ccedil;os, as tarifas e a qualidade de servi&ccedil;os durante os jogos da Copa do Mundo de 2014. O comit&ecirc; ter&aacute; a responsabilidade de monitorar hot&eacute;is, restaurantes, aeroportos e outros servi&ccedil;os tur&iacute;sticos das 12 cidades-sedes do pa&iacute;s, informou a assessoria da Casa Civil.&nbsp;</span><br /><br /><span>A comiss&atilde;o foi instaurada por determina&ccedil;&atilde;o da presidente e ser&aacute; coordenada pela Casa Civil, segundo nota oficial divulgada pela pasta. A primeira reuni&atilde;o t&eacute;cnica do grupo ocorrer&aacute; no pr&oacute;ximo dia 24.&nbsp;</span><br /><br /><span>De acordo com a chefe da Casa Civil, Gleisi Hoffmann, haver&aacute; um &ldquo;monitoramento sistem&aacute;tico&rdquo; do comportamento dos agentes prestadores desses servi&ccedil;os durante a realiza&ccedil;&atilde;o da Copa, mas n&atilde;o haver&aacute; tabelamento de pre&ccedil;o.&nbsp;</span><br /><br /><span>&ldquo;N&atilde;o tabelamos, nem tabelaremos pre&ccedil;os, mas n&oacute;s n&atilde;o permitiremos abusos. Vamos utilizar todos os instrumentos &agrave; disposi&ccedil;&atilde;o do Estado para garantir a defesa dos direitos do consumidor, seja ele brasileiro, ou estrangeiro&rdquo;, disse a ministra no comunicado oficial.</span><br /><br /><span>Mais tarde, por meio do perfil da Casa Civil no microblog Twitter, a ministra disse que &ldquo;n&atilde;o h&aacute; motivos para preocupa&ccedil;&atilde;o&rdquo; e que o Brasil receber&aacute; a todos &ldquo;com pre&ccedil;o justo na Copa&rdquo;. &ldquo;Cabe ao governo, ao Estado brasileiro, monitorar e garantir a defesa dos direitos dos consumidores&rdquo;, complementou Gleisi.&nbsp;</span><br /><br /><span>Comit&ecirc; de pre&ccedil;os da Copa&nbsp;</span><br /><br /><span>Ir&atilde;o integrar o grupo interministerial respons&aacute;vel pelo acompanhamento dos pre&ccedil;os durante a Copa representantes dos minist&eacute;rios do Esporte, Justi&ccedil;a, Turismo, Secretaria de Avia&ccedil;&atilde;o Civil (SAC), Fazenda e Sa&uacute;de. As duas &uacute;ltimas pastas ser&atilde;o representadas pela Receita Federal, pela Secretaria de Acompanhamento Econ&ocirc;mico e pela Ag&ecirc;ncia Nacional de Vigil&acirc;ncia Sanit&aacute;ria (Anvisa).&nbsp;</span><br /><br /><span>O Minist&eacute;rio da Justi&ccedil;a, de acordo com a nota, manter&aacute; contato com os Procons das 12 cidades-sede com o objetivo de fazer um &ldquo;diagn&oacute;stico detalhado dos pre&ccedil;os e da qualidades de servi&ccedil;os, como hot&eacute;is e restaurantes.&nbsp;</span><br /><br /><span>Al&eacute;m disso, o Conselho Administrativo de Defesa Econ&ocirc;mica (Cade) analisar&aacute; os setores a&eacute;reo e hoteleiro no Brasil para identificar eventuais inibi&ccedil;&otilde;es da concorr&ecirc;ncia.</span></p>'),
(7, 'TEXTO SOBRE NO RODAPÉ', 'texto-sobre-no-rodape', 'sobre_fotter', '<p>Texto sobre no rodap&eacute;</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `texto` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `people`
--

INSERT INTO `people` (`id`, `name`, `slug`, `subtitulo`, `texto`, `created`, `updated`) VALUES
(2, 'Gustavo Kuerten', 'gustavo-kuerten', 'ssaas', '<p>asasaas</p>', '2013-12-03 22:24:09', '2013-12-03 22:24:09'),
(3, 'Nathaly Azeredo', 'nathaly-azeredo', 'Fisioterapeuta', '<p>Trabalhar com pessoas especiais sempre foi uma alegria a mais, porque ver uma pessoa se recuperar &eacute; ver a alegria pura de pessoa com necessidades especiais se superarem.</p>', '2013-12-04 23:00:02', '2013-12-04 23:01:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `establishment_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `mimetype` varchar(255) NOT NULL,
  `filesize` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `photos`
--

INSERT INTO `photos` (`id`, `news_id`, `interview_id`, `person_id`, `establishment_id`, `category_id`, `imagem`, `dir`, `mimetype`, `filesize`, `created`, `updated`) VALUES
(15, 0, 0, 0, 0, 1, 'icon_Cinemas.png', 'fotos', 'image/png', 4623, '2013-12-07 00:08:23', '2013-12-07 00:08:23'),
(16, 0, 0, 0, 0, 2, 'icon_Teatros.png', 'fotos', 'image/png', 5624, '2013-12-07 00:09:08', '2013-12-07 00:09:08'),
(17, 0, 0, 0, 0, 3, 'icon_Museus.png', 'fotos', 'image/png', 2745, '2013-12-07 00:09:19', '2013-12-07 00:09:19'),
(18, 0, 0, 0, 0, 4, 'icon_Passeios.png', 'fotos', 'image/png', 2909, '2013-12-07 00:09:28', '2013-12-07 00:09:28'),
(19, 0, 0, 0, 0, 5, 'icon_Eventos.png', 'fotos', 'image/png', 4094, '2013-12-07 00:09:40', '2013-12-07 00:09:40'),
(20, 0, 0, 0, 0, 6, 'icon_Esportes.png', 'fotos', 'image/png', 4967, '2013-12-07 00:09:51', '2013-12-07 00:09:51'),
(21, 0, 0, 0, 0, 7, 'icon_Brinquedos.png', 'fotos', 'image/png', 5725, '2013-12-07 00:10:11', '2013-12-07 00:10:11'),
(22, 0, 0, 0, 1, 0, 'download.jpeg', 'fotos', 'image/jpeg', 11142, '2013-12-07 14:35:21', '2013-12-07 14:35:21'),
(23, 0, 0, 0, 2, 0, 'kinoplex.jpeg', 'fotos', 'image/jpeg', 15165, '2013-12-07 14:57:06', '2013-12-07 14:57:06'),
(24, 0, 0, 0, 3, 0, 'cinemagic.jpeg', 'fotos', 'image/jpeg', 10664, '2013-12-07 14:57:36', '2013-12-07 14:57:36'),
(25, 0, 0, 0, 1, 0, 'images.jpeg', 'fotos', 'image/jpeg', 7758, '2013-12-08 10:55:10', '2013-12-08 10:55:10'),
(26, 0, 0, 0, 1, 0, 'outback_bloomin_onion2.jpg', 'fotos', 'image/jpeg', 152221, '2013-12-08 10:55:18', '2013-12-08 10:55:18'),
(27, 0, 0, 0, 1, 0, 'outback_ribs.jpg', 'fotos', 'image/jpeg', 141931, '2013-12-08 10:55:26', '2013-12-08 10:55:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `link_facebook` varchar(255) NOT NULL,
  `link_twitter` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`id`, `email`, `link_facebook`, `link_twitter`) VALUES
(1, 'contato@tambemqueroir.com.br', 'https://www.facebook.com/pages/Tamb%C3%A9m-Quero-Ir/532360213518427', 'https://twitter.com/tambemqueroir');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photo_dir` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `cidade`, `estado`, `bairro`, `cpf`, `photo`, `photo_dir`, `username`, `password`, `email`, `created`, `updated`, `role`) VALUES
(1, 'Ricardo', '', '', '', '', '', '', '', 'ricardo', '325a109a26fea1208c0564f36288fd11c4dbb7fa', 'ricardo@ricardofideles.com.br', '2013-11-30 21:10:45', '2013-11-30 21:10:45', 'admin'),
(2, 'Nathaly', '', '', '', '', '', '', '', 'nata', '51a254d933f7798e036db52c5ce19456314da78c', 'nata@gmail.com', '2013-11-30 21:11:45', '2013-11-30 21:11:45', ''),
(3, 'ricardo', '', '', '', '', '', '', '', 'root', 'cd82a9355ad6bc37ea0f103f388db45b131e11e2', 'ricardo@ricardofideles.com.br', '2013-11-30 22:32:49', '2013-11-30 22:32:49', 'admin'),
(4, 'teste', '', '', '', '', '', '', '', 'teste', 'e356fa1576571987f8b314deef788a75606afd82', 'teste@ts.com', '2013-11-30 22:51:21', '2013-11-30 22:51:21', ''),
(5, 'Ricardo_cliente', '', '', '', '', '', 'logo.png', '', 'cliente', '123', 'ricardo@ricardofideles.com.br', '2013-12-02 21:04:50', '2013-12-02 21:04:50', ''),
(6, 'Ricardo_cliente2', '', '', '', '', '', 'Skyrim.jpg', '6', 'cliente2', '123', 'ricardo@ricardofideles.com.br', '2013-12-02 21:12:10', '2013-12-02 21:12:10', ''),
(7, 'Ricardo', 'Fideles', 'NITERÓI', 'Rio de Janeiro', '', '', '', '', '', '787fcb5f8d80f927ebec7c0f20b4b3465999c2f5', 'ricardosa@ricardofideles.com.br', '2013-12-02 21:43:46', '2013-12-02 21:43:46', ''),
(8, 'Ricardo', 'Fideles', 'NITERÓI', 'Rio de Janeiro', '3131212321', '3132131121212', '', '', '', '4f63509cfc15d6a205914188fb88c200acb562ba', 'ricardo@ricardofideles.com.br', '2013-12-02 21:46:00', '2013-12-02 21:46:00', ''),
(9, 'TEste1', 'teste', 'cidade', 'cidade', 'jias', 'sjijasi', '', '', '', 'c7e820c1191ad5ebcd18d72c1e0ea56b62b6912b', 'teste@ts.com', '2013-12-02 21:53:15', '2013-12-02 21:53:15', ''),
(10, 'teste2', 'teste2', 'teste2', 'teste2', 'teste2', '321312321', '', '', '', '787fcb5f8d80f927ebec7c0f20b4b3465999c2f5', 'teste2@teste.com', '2013-12-02 21:57:13', '2013-12-02 21:57:13', ''),
(11, 'teste3', 'teste3', 'teste3', 'teste3', 'teste3', 'teste3', '', '', '', 'c7e820c1191ad5ebcd18d72c1e0ea56b62b6912b', 'teste3@teste3.com', '2013-12-02 22:03:40', '2013-12-02 22:03:40', 'guest'),
(12, 'teste4', 'teste4', 'teste4', 'teste4', 'teste4', 'teste4', '', '', 'teste4', 'effc9f812847db8bf0e68173e59b15ef9f829061', 'teste4@teste4.com', '2013-12-02 22:06:26', '2013-12-02 22:06:26', 'guest'),
(13, 'cliente45', 'cliente45', 'cliente45', 'cliente45', 'cliente45', 'cliente45', '', '', 'cliente45', 'a8f4b55de8d06a81656b634e7e50adcf19218307', 'cliente45@cliente45.com', '2013-12-02 22:36:34', '2013-12-02 22:36:34', 'guest'),
(14, 'Ronaldinho2', 'Gaúcho', 'Rio de Janeiro', 'RJ', 'Centro', '908.232.021-90', '', '', 'ronaldo@hotmail.com', '787fcb5f8d80f927ebec7c0f20b4b3465999c2f5', '', '2013-12-02 22:57:11', '2013-12-03 09:34:13', 'guest');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
