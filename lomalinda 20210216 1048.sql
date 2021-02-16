-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.28-rc-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema lomalinda
--

CREATE DATABASE IF NOT EXISTS lomalinda;
USE lomalinda;

--
-- Definition of table `bd_tablas`
--

DROP TABLE IF EXISTS `bd_tablas`;
CREATE TABLE `bd_tablas` (
  `bdt_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bdt_nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`bdt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bd_tablas`
--

/*!40000 ALTER TABLE `bd_tablas` DISABLE KEYS */;
INSERT INTO `bd_tablas` (`bdt_id`,`bdt_nombre`) VALUES 
 (1,'usuarios'),
 (2,'usuarios_tipos'),
 (3,'seguridad_historial_acciones'),
 (4,'seguridad_historial_cambios'),
 (5,'bd_tablas');
/*!40000 ALTER TABLE `bd_tablas` ENABLE KEYS */;


--
-- Definition of table `camiones`
--

DROP TABLE IF EXISTS `camiones`;
CREATE TABLE `camiones` (
  `cam_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cam_nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camiones`
--

/*!40000 ALTER TABLE `camiones` DISABLE KEYS */;
INSERT INTO `camiones` (`cam_id`,`cam_nombre`) VALUES 
 (1,'Barcelona'),
 (2,'Covenas'),
 (3,'Sierra minka');
/*!40000 ALTER TABLE `camiones` ENABLE KEYS */;


--
-- Definition of table `recibo_leche`
--

DROP TABLE IF EXISTS `recibo_leche`;
CREATE TABLE `recibo_leche` (
  `reci_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reci_camion` int(10) unsigned DEFAULT NULL,
  `reci_litros` varchar(45) DEFAULT NULL,
  `reci_foto` varchar(255) DEFAULT NULL,
  `reci_usuario` int(10) unsigned DEFAULT NULL,
  `reci_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reci_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recibo_leche`
--

/*!40000 ALTER TABLE `recibo_leche` DISABLE KEYS */;
INSERT INTO `recibo_leche` (`reci_id`,`reci_camion`,`reci_litros`,`reci_foto`,`reci_usuario`,`reci_fecha`) VALUES 
 (1,1,'2000','foto1.png',1,'2021-01-19 10:01:09'),
 (2,2,'5000','img_602952c8cb772.jpg',1,'2021-02-14 11:41:44'),
 (3,1,'8500','img_6029538dc40e9.png',1,'2021-02-14 11:45:01'),
 (4,1,'500','img_602953bbf3190.png',1,'2021-02-14 11:45:47'),
 (5,3,'4000','img_602ac997dd854.jpg',1,'2021-02-15 14:20:55'),
 (6,1,'5000','img_602ad2ead89eb.jpg',1,'2021-02-15 15:00:42');
/*!40000 ALTER TABLE `recibo_leche` ENABLE KEYS */;


--
-- Definition of table `seguridad_historial_acciones`
--

DROP TABLE IF EXISTS `seguridad_historial_acciones`;
CREATE TABLE `seguridad_historial_acciones` (
  `hil_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hil_usuario` int(10) unsigned DEFAULT NULL,
  `hil_url_actual` longtext,
  `hil_pagina` varchar(200) DEFAULT NULL,
  `hil_fecha` datetime DEFAULT NULL,
  `hil_sistema_op` longtext,
  `hil_url_anterior` longtext,
  `hil_ip` longtext,
  PRIMARY KEY (`hil_id`),
  KEY `Index_ordinario_11` (`hil_usuario`,`hil_pagina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seguridad_historial_acciones`
--

/*!40000 ALTER TABLE `seguridad_historial_acciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `seguridad_historial_acciones` ENABLE KEYS */;


--
-- Definition of table `seguridad_historial_cambios`
--

DROP TABLE IF EXISTS `seguridad_historial_cambios`;
CREATE TABLE `seguridad_historial_cambios` (
  `hcam_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hcam_tabla` int(10) unsigned DEFAULT NULL,
  `hcam_registro` int(10) unsigned DEFAULT NULL,
  `hcam_fecha` datetime DEFAULT NULL,
  `hcam_responsable` int(10) unsigned DEFAULT NULL,
  `hcam_tipo_accion` int(10) unsigned DEFAULT NULL COMMENT 'Registro - Modificacion - Eliminacion',
  `hcam_observacion` longtext,
  PRIMARY KEY (`hcam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seguridad_historial_cambios`
--

/*!40000 ALTER TABLE `seguridad_historial_cambios` DISABLE KEYS */;
/*!40000 ALTER TABLE `seguridad_historial_cambios` ENABLE KEYS */;


--
-- Definition of table `tinas`
--

DROP TABLE IF EXISTS `tinas`;
CREATE TABLE `tinas` (
  `tin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tin_nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinas`
--

/*!40000 ALTER TABLE `tinas` DISABLE KEYS */;
INSERT INTO `tinas` (`tin_id`,`tin_nombre`) VALUES 
 (1,'Tina 1'),
 (2,'Tina 2'),
 (3,'Tina 3');
/*!40000 ALTER TABLE `tinas` ENABLE KEYS */;


--
-- Definition of table `tinas_ingreso`
--

DROP TABLE IF EXISTS `tinas_ingreso`;
CREATE TABLE `tinas_ingreso` (
  `ting_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ting_tina` int(10) unsigned DEFAULT NULL,
  `ting_litros` varchar(45) DEFAULT NULL,
  `ting_camion` int(10) unsigned DEFAULT NULL,
  `ting_usuario` int(10) unsigned DEFAULT NULL,
  `ting_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ting_observacion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinas_ingreso`
--

/*!40000 ALTER TABLE `tinas_ingreso` DISABLE KEYS */;
INSERT INTO `tinas_ingreso` (`ting_id`,`ting_tina`,`ting_litros`,`ting_camion`,`ting_usuario`,`ting_fecha`,`ting_observacion`) VALUES 
 (1,1,'1000',1,1,'2021-01-19 10:13:17','La leche parece aguada.'),
 (2,1,'5000',1,1,'2021-02-14 12:23:32','Ninguna'),
 (3,2,'1000',2,1,'2021-02-14 12:23:54','');
/*!40000 ALTER TABLE `tinas_ingreso` ENABLE KEYS */;


--
-- Definition of table `tinas_salida`
--

DROP TABLE IF EXISTS `tinas_salida`;
CREATE TABLE `tinas_salida` (
  `tins_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tins_tina` int(10) unsigned DEFAULT NULL,
  `tins_cantidad` varchar(45) DEFAULT NULL COMMENT 'En bloques',
  `tins_observacion` varchar(255) DEFAULT NULL,
  `tins_usuario` int(10) unsigned DEFAULT NULL,
  `tins_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tins_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinas_salida`
--

/*!40000 ALTER TABLE `tinas_salida` DISABLE KEYS */;
INSERT INTO `tinas_salida` (`tins_id`,`tins_tina`,`tins_cantidad`,`tins_observacion`,`tins_usuario`,`tins_fecha`) VALUES 
 (1,1,'10',NULL,1,'2021-02-14 12:25:35'),
 (2,1,'10','nada',1,'2021-02-14 13:26:41'),
 (3,2,'23','Ninguna',1,'2021-02-14 13:27:00');
/*!40000 ALTER TABLE `tinas_salida` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usr_usuario` varchar(45) DEFAULT NULL,
  `usr_clave` varchar(255) DEFAULT NULL,
  `usr_tipo` int(10) unsigned DEFAULT NULL,
  `usr_nombre` varchar(100) DEFAULT NULL,
  `usr_email` varchar(100) DEFAULT NULL,
  `usr_sesion` int(10) unsigned DEFAULT NULL,
  `usr_estado` int(10) unsigned DEFAULT NULL COMMENT 'inactivo - activo',
  `usr_ultimo_ingreso` datetime DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usr_id`,`usr_usuario`,`usr_clave`,`usr_tipo`,`usr_nombre`,`usr_email`,`usr_sesion`,`usr_estado`,`usr_ultimo_ingreso`) VALUES 
 (1,'gabriel','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',1,'Gabriel',NULL,1,1,'2021-02-15 14:56:43'),
 (2,'pedro','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',2,'Pedro Ayudante',NULL,0,1,NULL),
 (3,'juan','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',2,'Juan Cadena','juan@gmail.com',NULL,1,NULL),
 (4,'jhon','7110eda4d09e062aa5e4a390b0a572ac0d2c0220',1,'Jhon Oderman','jhooderman@gmail.com',NULL,1,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;


--
-- Definition of table `usuarios_tipos`
--

DROP TABLE IF EXISTS `usuarios_tipos`;
CREATE TABLE `usuarios_tipos` (
  `utipo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `utipo_nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`utipo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios_tipos`
--

/*!40000 ALTER TABLE `usuarios_tipos` DISABLE KEYS */;
INSERT INTO `usuarios_tipos` (`utipo_id`,`utipo_nombre`) VALUES 
 (1,'Administrador'),
 (2,'Produccion');
/*!40000 ALTER TABLE `usuarios_tipos` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
