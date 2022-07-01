-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla primero.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nombres` varchar(50) NOT NULL DEFAULT '',
  `cli_apellidos` varchar(50) NOT NULL DEFAULT '',
  `cli_edad` int(11) NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla primero.clientes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
REPLACE INTO `clientes` (`cli_id`, `cli_nombres`, `cli_apellidos`, `cli_edad`) VALUES
	(1, 'Kristal', 'Palomba', 55),
	(2, 'Hazel', 'Copnell', 54),
	(3, 'Joanne', 'Parchment', 63),
	(6, 'Luis', 'Semblantes', 45);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla primero.peliculas
CREATE TABLE IF NOT EXISTS `peliculas` (
  `pel_id` int(11) NOT NULL AUTO_INCREMENT,
  `pel_nombre` varchar(50) DEFAULT NULL,
  `pel_fecha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla primero.peliculas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
REPLACE INTO `peliculas` (`pel_id`, `pel_nombre`, `pel_fecha`) VALUES
	(1, 'Spiderman', '18-18-2022'),
	(2, 'Toy story', '17-08-2022'),
	(3, '4 Fantasticos', '09-08-2022');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
