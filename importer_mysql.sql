SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE `vendas` (
						  `id` int(11) NOT NULL AUTO_INCREMENT,
						  `id_vendedor` int(11) NOT NULL,
						  `valor_venda` decimal(9,3) NOT NULL,
						  `valor_comissao` decimal(9,3) NOT NULL,
						  PRIMARY KEY (`id`),
						  KEY `id_vendedor` (`id_vendedor`),
						  CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `vendedores`;
CREATE TABLE `vendedores` (
							  `id` int(11) NOT NULL AUTO_INCREMENT,
							  `nome` text NOT NULL,
							  `email` text NOT NULL,
							  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2021-08-19 11:00:21
