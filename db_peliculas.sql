-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 19:00:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores`
--

CREATE TABLE `actores` (
  `ID` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Nacionalidad` text NOT NULL,
  `Fecha De Nacimiento` date NOT NULL,
  `Foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actores`
--

INSERT INTO `actores` (`ID`, `Nombre`, `Apellido`, `Nacionalidad`, `Fecha De Nacimiento`, `Foto`) VALUES
(1, 'Jason', 'Statham', 'Estadounidense', '1967-07-26', 'https://images.mubicdn.net/images/cast_member/25100/cache-2388-1688754259/image-w856.jpg'),
(3, 'Josh', 'Hartnett', 'Estadounidense', '1978-07-21', 'https://media.cnn.com/api/v1/images/stellar/prod/230720133007-josh-hartnett-july-13.jpg?c=16x9&q=h_720,w_1280,c_fill'),
(4, 'Amie', 'Donald', 'Neozelandesa', '2010-01-28', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Amie_Donald_by_Gage_Skidmore.jpg/220px-Amie_Donald_by_Gage_Skidmore.jpg'),
(5, 'Allison', 'Williams', 'estadounidense', '1988-04-13', 'https://static.wikia.nocookie.net/doblaje/images/7/72/Allison_Williams.jpg/revision/latest?cb=20220729040623&path-prefix=es'),
(6, 'Zar Amir ', 'Ebrahimi', 'iraní', '1981-07-09', 'https://www.goldenglobes.com/sites/default/files/2023-02/zar-amir-ebrahimi_gettyimages-1423488944_0.jpg?format=pjpg&auto=webp&optimize=high&width=850'),
(7, 'Mehdi', 'Bajestani', 'iraní', '1975-01-12', 'https://images.mubicdn.net/images/cast_member/999111/cache-825694-1666801499/image-w856.jpg?size=800x'),
(8, 'Margot Elise', 'Robbie', 'australiana', '1990-07-02', 'https://static.wikia.nocookie.net/doblaje/images/0/03/MargotRobbi3.jpg/revision/latest?cb=20230703050211&path-prefix=es'),
(9, 'Brad', 'Pitt', 'estadounidense', '1963-12-18', 'https://images.mubicdn.net/images/cast_member/2552/cache-207-1524922850/image-w856.jpg?size=800x'),
(10, 'Tang', 'Wei', 'China', '1979-10-07', 'https://www.themoviedb.org/t/p/w500/1ELNE2JHruIb4r29vzWEGIwkH4c.jpg'),
(11, 'Hae-il', 'Park', 'surcoreano', '1977-01-26', 'https://pics.filmaffinity.com/242677318573658-nm_200.jpg'),
(12, 'Brendan', 'Fraser', 'estadounidense', '1968-12-03', 'https://hips.hearstapps.com/hmg-prod/images/gettyimages-1674722887.jpg?crop=1xw:0.84375xh;center,top&resize=1200:*'),
(13, 'Sadie Elizabeth ', 'Sink', 'estadounidense', '2002-04-16', 'https://fotografias.antena3.com/clipping/cmsimages02/2022/07/29/F0D13EA5-5714-41C5-80ED-09ACC8DAA620/sadie-sink-podria-unirse-universo-cinematografico-marvel-como-villana-songbird_96.jpg?crop=1509,849,x0,y0&width=1200&height=675&optimize=low&format=webply'),
(14, 'Catherine Élise', 'Blanchett', 'australiana', '1969-05-14', 'https://phantom-telva.unidadeditorial.es/7582ad84bf51b4d6745198c7efed34b5/resize/828/f/jpg/assets/multimedia/imagenes/2023/01/25/16746443406596.jpg'),
(15, 'Nina', 'Hoss', 'alemana', '1975-07-07', 'https://images.mubicdn.net/images/cast_member/81/cache-4250-1478101707/image-w856.jpg?size=800x'),
(16, 'Colin James', 'Farrell', 'irlandés', '1976-05-31', 'https://static.wikia.nocookie.net/esharrypotter/images/a/a1/Colin_Farrell_perfil.jpg/revision/latest?cb=20151209090705'),
(17, 'Barry', 'Keoghan', 'irlandés', '1992-10-18', 'https://media.gq.com.mx/photos/6204011db3938d1f596f8dde/1:1/w_1684,h_1684,c_limit/barry%20keoghan.jpg'),
(18, 'Manoj Nelliyattu', 'Shyamalan', 'indio-estadounidense', '1970-08-06', 'https://media.vandalsports.com/i/640x360/6-2023/2023623115214_1.jpg'),
(19, 'Dave', 'Bautista', 'estadounidense', '1969-01-18', 'https://media.cnn.com/api/v1/images/stellar/prod/230106083215-dave-bautista-1016.jpg?c=original'),
(20, 'Michelle Ingrid', 'Williams', 'estadounidense', '1980-09-09', 'https://images.ecestaticos.com/1tokjtzyU1sfvCWOrrcWM4hdLTY=/145x8:2155x1515/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F374%2F0df%2F3b7%2F3740df3b7097dd23c728c9e028587c50.jpg'),
(21, 'Paul Franklin', 'Dano', 'estadounidense', '1984-06-19', 'https://images.mubicdn.net/images/cast_member/2848/cache-1190-1600875036/image-w856.jpg?size=800x'),
(22, 'Xolo', 'Maridueña', 'estadounidense', '2001-07-09', 'https://es.rollingstone.com/wp-content/uploads/2023/08/Heroes-y-representacion-con-Xolo-Mariduena-de-Blue-Beetle.jpg'),
(23, 'Bruna', 'Marquezine', 'brasileña', '1995-08-04', 'https://static.wikia.nocookie.net/doblaje/images/d/d6/Bruna-marquezine.jpg/revision/latest/thumbnail/width/360/height/450?cb=20210505184305&path-prefix=es'),
(24, 'Cillian', 'Murphy', 'irlandés', '1976-05-25', 'https://img.asmedia.epimg.net/resizer/NihB-i2OaOYGB7_yz5utirdcIYw=/1472x1104/cloudfront-eu-central-1.images.arcpublishing.com/diarioas/HTLEV2ZWYVGWLDX7GFLKRFLHKU.jpg'),
(25, 'Emily Olivia Leah', 'Blunt', 'británico-estadounidense', '1983-03-23', 'https://hips.hearstapps.com/hmg-prod/images/emily-blunt-attends-a-quiet-place-part-ii-world-premiere-at-news-photo-1614069227.?crop=0.563xw:1.00xh;0.0513xw,0&resize=1200:*'),
(26, 'Ryan Thomas', 'Gosling', 'canadiense', '1980-11-12', 'https://www.infobae.com/new-resizer/8tUyAE9I9EH1x9sgi2VCcxa5SPA=/arc-anglerfish-arc2-prod-infobae/public/4OHALNVZ2KSUKIVMXF7P7TVAHA.jpg'),
(27, 'Thomas', 'Cruise Mapother IV', 'estadounidense', '1962-07-03', 'https://media.revistavanityfair.es/photos/60e82bd2af2c957f3efefd50/master/w_1600%2Cc_limit/246523.jpg'),
(28, 'Rebecca', 'Ferguson', 'sueca', '1983-10-19', 'https://images.mubicdn.net/images/cast_member/350615/cache-128294-1533458422/image-w856.jpg?size=800x'),
(29, 'Leah', 'Lewis', 'estadounidense ', '1996-12-09', 'https://es.web.img3.acsta.net/pictures/19/05/18/01/26/4360766.jpg'),
(30, 'Harrison', 'Ford', 'estadounidense ', '1942-07-13', 'https://media.gq.com.mx/photos/649dc7e8922ba37647e68244/1:1/w_1998,h_1998,c_limit/Harrison_Ford_107985635.jpg'),
(31, 'Mads Dittmann', 'Mikkelsen', 'danés', '1965-11-22', 'https://media.revistavanityfair.es/photos/60e861029bf55ca1055ad342/4:3/w_1200,h_900,c_limit/98879.jpg'),
(32, 'Matthew Quincy', 'Broderick', 'estadounidense', '1962-03-21', 'https://m.media-amazon.com/images/M/MV5BMTg2NjA0MzM0OF5BMl5BanBnXkFtZTcwMDU5ODAxMw@@._V1_FMjpg_UX1000_.jpg'),
(33, 'Kyle James', 'Mooney', 'estadounidense', '1984-09-04', 'https://static.wikia.nocookie.net/snl/images/f/fc/Kyle_Mooney.png/revision/latest?cb=20130823045613'),
(34, 'Scarlett Ingrid', 'Johansson', 'estadounidense', '1984-11-22', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%29.jpg/220px-Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%29.jpg'),
(35, 'Thomas Jeffrey', 'Hanks', 'estadounidense', '1956-07-09', 'https://static.wikia.nocookie.net/doblaje/images/3/3d/Tom_Hanks.jpg/revision/latest?cb=20230731203150&path-prefix=es'),
(36, 'Ezra Matthew', 'Miller', 'estadounidense', '1992-09-30', 'https://hips.hearstapps.com/hmg-prod/images/ezra-miller-attends-the-los-angeles-premiere-of-warner-bros-news-photo-1686751050-649025fb7e1e9.jpg?resize=1200:*'),
(37, 'Michael', 'Keaton', 'estadounidense', '1951-09-05', 'https://static.wikia.nocookie.net/doblaje/images/1/1c/Michael_Keaton.jpg/revision/latest?cb=20230222014714&path-prefix=es'),
(38, 'Anthony Ramos', 'Martinez', 'estadounidense', '1991-11-01', 'https://static.wikia.nocookie.net/marvelcinematicuniverse/images/9/98/Anthony_Ramos.png/revision/latest?cb=20220804035453&path-prefix=es'),
(39, 'Elizabeth Shaila', 'Koshy', 'estadounidense', '1996-03-31', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Liza_Koshy_on_Pretty_Big_Deal.png/1200px-Liza_Koshy_on_Pretty_Big_Deal.png'),
(40, 'Carla ', 'Campra', 'Española', '1999-04-16', 'https://hips.hearstapps.com/hmg-prod/images/carla-campra-entrevista-1647361467.jpg?crop=1xw:0.5001667222407469xh;center,top&resize=1200:*'),
(41, 'María ', 'Molins', 'Española', '1979-02-14', 'https://estaticos-cdn.elperiodico.com/clip/12bfb6f3-0517-4dd0-ae44-5949bd35492c_16-9-aspect-ratio_default_0.jpg'),
(42, 'Mamoudou', 'Athie', 'mauritano-estadounidense', '1988-07-25', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz6c08hR3yp3R6v2adICESqUvHhBBsYlQ-ZLxyCUidtCjxibTEfRPPNlIhd2DzQ-bzGiU&usqp=CAU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estrenos`
--

CREATE TABLE `estrenos` (
  `ID` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Genero` text NOT NULL,
  `Director` text NOT NULL,
  `Estreno` date NOT NULL,
  `Duracion` time NOT NULL,
  `Mayores de 13` tinyint(1) NOT NULL,
  `ActorID` int(11) NOT NULL,
  `ActorID2` int(11) NOT NULL,
  `Imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estrenos`
--

INSERT INTO `estrenos` (`ID`, `Titulo`, `Genero`, `Director`, `Estreno`, `Duracion`, `Mayores de 13`, `ActorID`, `ActorID2`, `Imagen`) VALUES
(2, 'M3gan', 'Terror', 'Gerard Johnstone', '2023-01-23', '01:42:00', 1, 4, 5, 'https://hips.hearstapps.com/hmg-prod/images/m3gan-terror-1666344226.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(3, 'Holy Spider', 'Crimen', 'Ali Abbasi', '2023-01-13', '01:55:00', 1, 6, 7, 'https://hips.hearstapps.com/hmg-prod/images/official-key-still-2-scaled-1652300096.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(4, 'Babylon', 'Drama ', 'Damien Chazelle', '2023-01-20', '03:09:00', 1, 8, 9, 'https://hips.hearstapps.com/hmg-prod/images/babylon-vanity-fair-margot-robbie-1662594598.png?crop=0.657xw:1.00xh;0.184xw,0&resize=980:*'),
(5, 'Decision to Leave', 'Romance', 'Park Chan-wook', '2023-01-20', '02:18:00', 1, 11, 10, 'https://hips.hearstapps.com/hmg-prod/images/decision-to-leave-1653486271.jpeg?crop=1xw:1xh;center,top&resize=980:*'),
(6, 'The Whale', 'Drama', 'Darren Aronofsky', '2023-01-27', '01:57:00', 1, 12, 13, 'https://hips.hearstapps.com/hmg-prod/images/the-whale-1662304488.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(7, 'TÁR', 'Drama', 'Todd Field', '2023-01-27', '02:38:00', 0, 14, 15, 'https://hips.hearstapps.com/hmg-prod/images/cate-blanchett-tar-todd-field-1662105922.jpeg?crop=1xw:1xh;center,top&resize=980:*'),
(8, 'Almas en pena de Inisherin', 'Comedia', 'Martin McDonagh', '2023-02-03', '01:54:00', 1, 16, 12, 'https://hips.hearstapps.com/hmg-prod/images/the-banshees-of-inisherin-1-1664033823.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(9, 'Knock at the Cabin', 'Terror', 'M. Night Shyamalan', '2023-02-03', '01:40:00', 1, 19, 18, 'https://hips.hearstapps.com/hmg-prod/images/abby-quinn-nikki-amuka-bird-dave-bautista-rupert-grint-knock-at-the-cabin-1674828522.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(10, 'Los Fabelman', 'Drama', 'Steven Spielberg', '2023-02-10', '02:31:00', 1, 20, 21, 'https://hips.hearstapps.com/hmg-prod/images/fabelmans-spielberg-1663063842.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(11, 'La niña de la comunión', 'Drama', 'Víctor García', '2023-02-10', '01:38:00', 1, 40, 41, 'https://hips.hearstapps.com/hmg-prod/images/la-nina-de-la-comunion-1644489183.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(12, 'Blue Beetle', 'Acción', 'Ángel Manuel Soto', '2023-08-18', '02:07:00', 1, 22, 23, 'https://hips.hearstapps.com/hmg-prod/images/blue-beetle-trailer-642bfe0b82fa3.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(13, 'Oppenheimer', 'Drama', 'Christopher Nolan', '2023-07-20', '03:00:00', 1, 24, 25, 'https://hips.hearstapps.com/hmg-prod/images/cillian-murphy-oppenheimer-fotogramas-1645608732.png?crop=1xw:1xh;center,top&resize=980:*'),
(14, 'Barbie', 'Comedia', 'Greta Gerwig', '2023-07-21', '01:54:00', 1, 8, 26, 'https://hips.hearstapps.com/hmg-prod/images/margot-robbie-barbie-1656624646.jpeg?crop=1xw:1xh;center,top&resize=980:*'),
(15, 'Misión Imposible 7: Sentencia mortal - Parte 1', 'Acción', 'Christopher McQuarrie', '2023-07-14', '02:43:00', 1, 27, 28, 'https://hips.hearstapps.com/hmg-prod/images/mision-imposible-6-1560534122.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(16, 'Elemental', 'Comedia\r\n', 'Peter Sohn', '2023-07-14', '01:42:00', 0, 29, 42, 'https://hips.hearstapps.com/hmg-prod/images/elemental-pixar-642ac2997e3be.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(17, 'Indiana Jones 5', 'Aventura', 'James Mangold', '2023-06-30', '02:22:00', 1, 30, 31, 'https://hips.hearstapps.com/hmg-prod/images/indiana-jones-5-harrison-ford-1669636592.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(18, 'No Hard Feelings', 'Comedia', 'Gene Stupnitsky', '2023-06-23', '01:43:00', 1, 32, 33, 'https://hips.hearstapps.com/hmg-prod/images/no-hard-feelings-641d82078302b.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(19, 'Asteroid City', 'Romance', 'Wes Anderson', '2023-06-16', '01:45:00', 1, 34, 35, 'https://hips.hearstapps.com/hmg-prod/images/asteroid-city-scarlett-johansson-642433e8d8879.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(20, 'Flash', 'Acción', 'Andrés Muschietti', '2023-06-16', '02:24:00', 1, 36, 37, 'https://hips.hearstapps.com/hmg-prod/images/flash-ezra-1542796843.jpg?crop=1xw:1xh;center,top&resize=980:*'),
(21, 'Transformers: El despertar de las bestias', 'Acción', 'Steven Caple Jr.', '2023-06-16', '02:24:00', 1, 38, 39, 'https://hips.hearstapps.com/hmg-prod/images/transformers-despertar-bestias-1669970401.png?crop=1xw:1xh;center,top&resize=980:*');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores`
--
ALTER TABLE `actores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `estrenos`
--
ALTER TABLE `estrenos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ActorID` (`ActorID`),
  ADD KEY `ActorID2` (`ActorID2`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actores`
--
ALTER TABLE `actores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `estrenos`
--
ALTER TABLE `estrenos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estrenos`
--
ALTER TABLE `estrenos`
  ADD CONSTRAINT `estrenos_ibfk_1` FOREIGN KEY (`ActorID`) REFERENCES `actores` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estrenos_ibfk_2` FOREIGN KEY (`ActorID2`) REFERENCES `actores` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
