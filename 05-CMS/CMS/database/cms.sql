-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para cms
CREATE DATABASE IF NOT EXISTS `cms` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cms`;

-- Copiando estrutura para tabela cms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `adm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cms.users: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `adm`) VALUES
	(1, 'Jose Neto', 'jsn@gmail.com', '$2y$10$lgWQTAUOrlnhNZZP7wYE0uZ70lY2bqZDNGFbV/bQb/Y4pOmq7K/R6', NULL, 0),
	(2, 'master', 'adm@adm', '$2y$10$AF2vdA.CAV41DqnFnMEpEu.NfmuCRV5UfX75LwILShtK/a5zRJ3Ea', 'X4fBDVq7j4Ye6gtWYUKWnLANcpHePA0cwlcSOvZgSlxCI1wv9zRXKrYvZo2B', 1),
	(6, 'Jose Alves De Souza Neto', 'jsn.ads@gmail.com', '$2y$10$Pj0az6wliwI8F6gXiRZgQ.y30/wAhgt8R8dOg2J4wrKE0z4vt3bDC', NULL, 0),
	(7, 'Cristina', 'cris@cris', '$2y$10$09wVClfWckJAwgiaK5Jk4ueoXWdZRO5TCPTE5hX6z3gebkX.88DAe', NULL, 0),
	(8, 'Giselle Alves', 'gi@gmail.com', '$2y$10$ggis4mRG/tzZ/rweVc3gcelh9.pn4L6X6t8.bw2GRz2PzUeBnsUUC', NULL, 0),
	(9, 'Giovanna', 'gio@gio.com', '$2y$10$oj706JwLWEE9RZUb54N9Te35XdUP73TssX2qGDSeA1TMbSIa.roIu', NULL, 0),
	(10, 'Natalia Marques', 'nat@gmail.com', '$2y$10$GnH7suOqRRIYBu7yMi9j8OmyLh0/EFKwuE56GxZUMayT9j0SqkHw.', NULL, 0),
	(11, 'Chelsea Fc', 'chelsea@gmail.com', '$2y$10$DDNpibERWh.vBf05O0KA6eY.HTsDpj23iP4J2r232i9UVdgdnteZy', NULL, 0),
	(12, 'Ubs Tres Marias', 'usb@saude.com', '$2y$10$QnDu5G2KDPDSt5/STDCAgOvMg9H4kU109pxT3F1ppB8Z5QyrhAaDy', NULL, 0),
	(13, 'Usuario', 'usuario@usuario', '$2y$10$yv3xxpXSDF6KUeTkijAP1O2L/DkonWGVda9.229FLcWzEPE1M0GCi', NULL, 0),
	(14, 'Cms Cms', 'cms@cms', '$2y$10$JYv/E3iFKH57ThyLP.CQheG2p4IK39ZW2H8GssH6YfCIvu41xNF5a', NULL, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
