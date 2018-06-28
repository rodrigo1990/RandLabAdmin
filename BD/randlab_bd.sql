-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2018 a las 18:30:07
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `randlab_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`ID`, `usuario`, `pass`) VALUES
(1, 'mcd77.1990@gmail.com', '62d20a3991d66bca46805d4bae46301e'),
(2, 'admin@randlab.com.ar', '746026e5d61410d50c8c816f90eb4278');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `ID` int(11) NOT NULL,
  `img1` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `img3` varchar(200) DEFAULT NULL,
  `img4` varchar(200) DEFAULT NULL,
  `img5` varchar(200) DEFAULT NULL,
  `img6` varchar(200) DEFAULT NULL,
  `img7` varchar(200) DEFAULT NULL,
  `img8` varchar(200) DEFAULT NULL,
  `img9` varchar(200) DEFAULT NULL,
  `img10` varchar(200) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`ID`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `descripcion`, `titulo`, `fecha`) VALUES
(10, '146087646.jpg', '540744018.jpg', '456726074.jpg', '228457641.jpg', '983135986.jpg', '260263061.jpg', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel viverra tortor. Quisque ut turpis auctor, sodales quam ultrices, ultrices felis. Maecenas viverra posuere risus ut gravida. Vestibulum cursus dui at quam molestie ullamcorper. Pellentesque convallis dolor in tempor mattis. Nunc porttitor finibus libero ut consequat. Nullam efficitur orci at pulvinar pharetra. Maecenas pulvinar venenatis turpis sit amet bibendum. Donec lacus est, iaculis a eleifend eget, consectetur eget felis. Maecenas rutrum erat id accumsan pulvinar. Suspendisse aliquam congue neque sit amet lobortis. Vivamus at mi metus.', 'novedad 1', '0000-00-00'),
(11, '729983520.jpg', '918206787.jpg', '776730346.jpg', '754235839.jpg', '932022094.jpg', '946661376.jpg', '344802856.jpg', '535717773.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel viverra tortor. Quisque ut turpis auctor, sodales quam ultrices, ultrices felis. Maecenas viverra posuere risus ut gravida. Vestibulum cursus dui at quam molestie ullamcorper. Pellentesque convallis dolor in tempor mattis. Nunc porttitor finibus libero ut consequat. Nullam efficitur orci at pulvinar pharetra. Maecenas pulvinar venenatis turpis sit amet bibendum. Donec lacus est, iaculis a eleifend eget, consectetur eget felis. Maecenas rutrum erat id accumsan pulvinar. Suspendisse aliquam congue neque sit amet lobortis. Vivamus at mi metus.', 'novedad 2', '0000-00-00'),
(12, '666592407.jpg', '270260620.jpg', '561535644.jpg', '814825439.jpg', '400640869.jpg', '105795288.jpg', '589413452.jpg', '740090942.jpg', '444915771.jpg', '713009643.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel viverra tortor. Quisque ut turpis auctor, sodales quam ultrices, ultrices felis. Maecenas viverra posuere risus ut gravida. Vestibulum cursus dui at quam molestie ullamcorper. Pellentesque convallis dolor in tempor mattis. Nunc porttitor finibus libero ut consequat. Nullam efficitur orci at pulvinar pharetra. Maecenas pulvinar venenatis turpis sit amet bibendum. Donec lacus est, iaculis a eleifend eget, consectetur eget felis. Maecenas rutrum erat id accumsan pulvinar. Suspendisse aliquam congue neque sit amet lobortis. Vivamus at mi metus.', 'novedad 3', '0000-00-00'),
(14, '994781494.jpg', '967123413.jpg', '975830078.jpg', '279544067.jpg', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum malesuada aliquam. Cras ornare id diam vel laoreet. Nunc at sem id nisi pulvinar semper non a dui. Pellentesque sed sem cursus, mollis ante ut, pellentesque diam. Aliquam sed dui dapibus, facilisis magna id, dignissim justo. Suspendisse sagittis quam id arcu rutrum laoreet at in ipsum. Vivamus ut blandit mauris, ac imperdiet lacus. Donec aliquam suscipit leo in hendrerit. Quisque fringilla viverra risus a maximus. Nulla turpis risus, convallis feugiat eleifend ut, rutrum eu urna. Etiam a ex in felis maximus sollicitudin scelerisque non erat. Donec maximus nisi a nibh porta, quis euismod ipsum pharetra.', 'NOVEDAD 4', '1990-10-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
