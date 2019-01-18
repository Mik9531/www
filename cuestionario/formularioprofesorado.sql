-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-11-2018 a las 12:00:20
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularioprofesorado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) COLLATE utf8_bin NOT NULL,
  `cont` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `cont`) VALUES
(1, 'isaac', '1234'),
(2, 'juan', '4321'),
(4, 'pepe', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'Realizar encuesta'),
(2, 'Acceso Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilestudiante`
--

DROP TABLE IF EXISTS `perfilestudiante`;
CREATE TABLE IF NOT EXISTS `perfilestudiante` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `edad` enum('<19','19-21','22-23','24-25','>25') COLLATE utf8_bin DEFAULT NULL,
  `sexo` enum('Hombre','Mujer') COLLATE utf8_bin DEFAULT NULL,
  `cursoalto` enum('1','2','3','4','5','6') COLLATE utf8_bin DEFAULT NULL,
  `cursobajo` enum('1','2','3','4','5','6') COLLATE utf8_bin DEFAULT NULL,
  `vecesmatriculado` enum('1','2','3','>3') COLLATE utf8_bin DEFAULT NULL,
  `vecesexaminado` enum('1','2','3','>3') COLLATE utf8_bin DEFAULT NULL,
  `interes` enum('Nada','Algo','Bastante','Mucho') COLLATE utf8_bin DEFAULT NULL,
  `tutorias` enum('Nada','Algo','Bastante','Mucho') COLLATE utf8_bin DEFAULT NULL,
  `dificultad` enum('Baja','Media','Alta','Muy alta') COLLATE utf8_bin DEFAULT NULL,
  `calificacion` enum('N.P.','Sus.','Apr.','Not.','Sobr.','Mat. Hon.') COLLATE utf8_bin DEFAULT NULL,
  `asistencia` enum('Menos 50%','Entre 50% y 80%','Más de 80%') COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Perfil del Alumno que rellena la encuesta';

--
-- Volcado de datos para la tabla `perfilestudiante`
--

INSERT INTO `perfilestudiante` (`ID`, `edad`, `sexo`, `cursoalto`, `cursobajo`, `vecesmatriculado`, `vecesexaminado`, `interes`, `tutorias`, `dificultad`, `calificacion`, `asistencia`) VALUES
(8, NULL, 'Mujer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(10, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(11, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(12, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(13, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(14, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(15, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(16, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(17, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(18, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(19, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(20, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(21, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(22, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(23, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(24, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%'),
(25, '<19', 'Hombre', '1', '1', '1', '1', 'Nada', 'Nada', 'Baja', 'N.P.', 'Menos 50%');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `ID` int(11) NOT NULL,
  `pregunta1` text COLLATE utf8_bin NOT NULL,
  `pregunta2` text COLLATE utf8_bin NOT NULL,
  `pregunta3` text COLLATE utf8_bin NOT NULL,
  `pregunta4` text COLLATE utf8_bin NOT NULL,
  `pregunta5` text COLLATE utf8_bin NOT NULL,
  `pregunta6` text COLLATE utf8_bin NOT NULL,
  `pregunta7` text COLLATE utf8_bin NOT NULL,
  `pregunta8` text COLLATE utf8_bin NOT NULL,
  `pregunta9` text COLLATE utf8_bin NOT NULL,
  `pregunta10` text COLLATE utf8_bin NOT NULL,
  `pregunta11` text COLLATE utf8_bin NOT NULL,
  `pregunta12` text COLLATE utf8_bin NOT NULL,
  `pregunta13` text COLLATE utf8_bin NOT NULL,
  `pregunta14` text COLLATE utf8_bin NOT NULL,
  `pregunta15` text COLLATE utf8_bin NOT NULL,
  `pregunta16` text COLLATE utf8_bin NOT NULL,
  `pregunta17` text COLLATE utf8_bin NOT NULL,
  `pregunta18` text COLLATE utf8_bin NOT NULL,
  `pregunta19` text COLLATE utf8_bin NOT NULL,
  `pregunta20` text COLLATE utf8_bin NOT NULL,
  `pregunta21` text COLLATE utf8_bin NOT NULL,
  `pregunta22` text COLLATE utf8_bin NOT NULL,
  `pregunta23` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`ID`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `pregunta21`, `pregunta22`, `pregunta23`) VALUES
(0, '1. El/La profesor/a informa sobre los distintos aspectos de la guia docente o programa de la asignatura ( objetivos, actividades, contenidos del temario, metodologia, bibliografia, sistemas de evaluacion,...).', '2. Imparte las clases en el horario fijado.', '3. Asiste regularmente a clase.', '4. Cumple adecuadamente su labor de tutoria (presencial o virtual).', '5. Se ajusta a la planificacion de la asignatura.', '6. Se han coordinado las actividades teoricas y practicas previstas.', '7. Se ajusta a los sistemas de evaluacion especificados en la guia docente/programa de la\r\nasignatura.', '8. La bibliografia y otras fuentes de informacion recomendadas en el programa son utiles para el\r\naprendizaje de la asignatura.', '9. El/la profesor/a organiza bien las actividades que se realizan en clase.', '10. Utiliza recursos didacticos (pizarra, transparencias, medios audiovisuales, material de apoyo en\r\nred virtual) que facilitan el aprendizaje ', '11. Explica con claridad y resalta los contenidos importantes.', '12. Se interesa por el grado de comprension de sus explicaciones.', '13. Expone ejemplos en los que se ponen en practica los contenidos de la asignatura.', '14. Explica los contenidos con seguridad.', '15. Resuelve las dudas que se le plantean.', '16. Fomenta un clima de trabajo y participacion.', '17. Propicia una comunicacion fluida y espontanea.', '18. Motiva a los/as estudiantes para que se interesen por la asignatura.', '19. Es respetuoso/a en el trato con los/as estudiantes.', '20. Tengo claro lo que se me va a exigir para superar esta asignatura.', '21. Los criterios y sistemas de evaluacion establecidos se aplican adecuadamente.', '22. Las actividades desarrolladas (teoricas, practicas, de trabajo individual, en grupo) han\r\ncontribuido a alcanzar los objetivos de la asignatura.', '23. Estoy satisfecho/a con la labor docente de este/a profesor/a.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta1` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta2` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta3` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta4` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta5` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta6` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta7` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta8` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta9` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta10` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta11` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta12` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta13` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta14` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta15` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta16` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta17` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta18` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta19` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta20` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta21` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta22` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  `respuesta23` enum('NS','1','2','3','4','5') COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`ID`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta5`, `respuesta6`, `respuesta7`, `respuesta8`, `respuesta9`, `respuesta10`, `respuesta11`, `respuesta12`, `respuesta13`, `respuesta14`, `respuesta15`, `respuesta16`, `respuesta17`, `respuesta18`, `respuesta19`, `respuesta20`, `respuesta21`, `respuesta22`, `respuesta23`) VALUES
(120, 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS'),
(121, 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS', 'NS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `submenu`
--

DROP TABLE IF EXISTS `submenu`;
CREATE TABLE IF NOT EXISTS `submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `submenu`
--

INSERT INTO `submenu` (`id`, `submenu`, `menu_id`) VALUES
(1, 'Modificar Pregunta', 1),
(2, 'Eliminar Pregunta', 1),
(3, 'Grafica', 1),
(4, 'Busqueda', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
