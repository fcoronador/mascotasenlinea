use Mascotas;


/* Inserts cliente */
INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('100', 'fredy', 'coronado', '100', '100A', 'coronado@correo.com', '100');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('200', 'Susana', 'Parra', '200', '200A', 'parra@correo.com', '200');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('300', 'Viviana', 'Ortiz', '300', '300A', 'ortiz@correo.com', '300');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('400', 'Tito', 'Fuentes', '400', '400A', 'correo@correo.com', '400');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('500', 'Julio', 'Iglesias', '500', '500A', 'correo@correo.com', '500');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('600', 'Diomedez', 'Diaz', '600', '600A', 'correo@correo.com', '600');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('700', 'Yoki', 'Barrios', '700', '700A', 'correo@correo.com', '700');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('800', 'Michael', 'Jackson', '800', '800A', 'correo@correo.com', '800');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('900', 'Juan Luis', 'Guerra', '900', '900A', 'correo@correo.com', '900');

INSERT INTO `cliente` (`idCedula`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `contrasena`)
VALUES ('1000', 'Mark', 'Antony', '1000', '10004', 'correo@correo.com', '1000');

/* MASCOTAS */

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('100', 'Agne ', 'Felina', '2', 'Angola', '2019/01/01', NULL, '100');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('101', 'Channel', 'Felina', '2', 'Criolla', '2019/02/02', '2019/10/02', '100');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('200', 'Max', 'Perro', '1', 'Beagle', '2019/12/01', NULL, '200');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('300', 'Larry', 'Loro', '1', 'Perico', '2014/05/01', NULL, '300');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('400', 'Ben', 'Perro', '1', 'Labrador', '2014/05/12', NULL, '400');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('500', 'La Gordita', 'Felina', '2', 'Mupchinks', '2014/05/13', NULL, '500');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('600', 'BadBunny', 'Conejo', '1', 'Lanudo', '2019/12/12', NULL, '600');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('700', 'Coco', 'Gallina', '2', 'Criolla', '2014/05/14', NULL, '700');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('800', 'WarWick', 'Perro', '1', 'Lobo Siberiano', '2014/05/16', NULL, '800');

INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `cliente_idCedula`)
VALUES ('900', 'Lola', 'Conejo', '2', 'Liebre', '2014/05/18', NULL, '900');

/* VETERINARIO */
INSERT INTO `veterin` ( `rol`, `cargo`,`nombre`) VALUES ( '2', 'Veterinario','Dr. Naranjo');

/* SERVICIOS */

INSERT INTO `servicios` ( `servicios`, `veterin_idVeterin`)
VALUES ( 'examen', '1');

INSERT INTO `servicios` ( `servicios`, `veterin_idVeterin`)
VALUES ( 'vacunas', '1');

INSERT INTO `servicios` ( `servicios`, `veterin_idVeterin`)
VALUES ( 'desparacitación', '1');

INSERT INTO `servicios` ( `servicios`, `veterin_idVeterin`)
VALUES ( 'controles', '1');

INSERT INTO `servicios` ( `servicios`, `veterin_idVeterin`)
VALUES ( 'peluqueria', '1');


/* CITAS */

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/12', '10:10', 'Control', '100', '4');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/13', '20:20', 'examen', '200', '1');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/14', '8:10', 'vacunas', '300', '2');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/12', '20:30', 'desparacitacion', '600', '3');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/14', '8:10', 'examen', '700', '3');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/15', '20:40', 'peluqueria', '800', '5');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/16', '20:50', 'control', '900', '4');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/18', '14:30', 'vacunas', '200', '2');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/20', '14:56', 'control', '1000', '4');

INSERT INTO `citas` (`fecha`, `hora`, `motivo`, `cliente_idCedula`, `servicios_idServi`)
VALUES ('2020/04/21', '15:00', 'control', '1000', '4');

/* CONTROLES */

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/04/13', '3', 'bueno', 'mucho amor', 'muy tierno', '1', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/13', '3', 'bueno', 'mucho amor', 'muy tierno', '2', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/13', '3', 'bueno', 'mucho amor', 'muy tierno', '3', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/18', '5', 'qwert', 'qwert', 'qwert', '4', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/19', '2', 'qwert', 'qwert', 'qwert', '5', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/13', '3', 'bueno', 'mucho amor', 'muy tierno', '6', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/13', '3', 'bueno', 'mucho amor', 'muy tierno', '7', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/13', '3', 'bueno', 'mucho amor', 'muy tierno', '8', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/13', '3', 'bueno', 'mucho amor', 'muy tierno', '9', '1');

INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`)
VALUES ('2020/05/13', '3', 'bueno', 'mucho amor', 'muy tierno', '10', '1');




/* VACUNAS */

INSERT INTO `vacunas` ( `nombre`)VALUES ( 'N/A');
INSERT INTO `vacunas` ( `nombre`)VALUES ( 'Leucemia');
INSERT INTO `vacunas` ( `nombre`)VALUES ( 'Triple Virica');
INSERT INTO `vacunas` ( `nombre`)VALUES ( 'Leucemia-14 semanas');
INSERT INTO `vacunas` ( `nombre`)VALUES ( 'Triple Virica-16 semanas');
INSERT INTO `vacunas` ( `nombre`)VALUES ( 'PIF');
INSERT INTO `vacunas` ( `nombre`)VALUES ( 'Antirrabica');
INSERT INTO `vacunas` ( `nombre`)VALUES ( 'PIF-22 semanas');
INSERT INTO `vacunas` ( `nombre`)VALUES ( 'Anual');

/* DESPARACITACIÓN */

INSERT INTO `despara` (`nombre`)VALUES ( 'N/A');
INSERT INTO `despara` (`nombre`)VALUES ( 'Panacur');
INSERT INTO `despara` (`nombre`)VALUES ( 'Drontal Cat');
INSERT INTO `despara` (`nombre`)VALUES ( 'Droncit injection');
INSERT INTO `despara` (`nombre`)VALUES ( 'Droncit spot-on');
INSERT INTO `despara` (`nombre`)VALUES ( 'Stronghold spot-on');
INSERT INTO `despara` (`nombre`)VALUES ( 'Milbemax for cats');
INSERT INTO `despara` (`nombre`)VALUES ( 'Profender spot-on');

/* EXAMENES */

INSERT INTO `examenes` (`tipo`, `resulta`, `lab`)VALUES ('N/A', 'N/A', 'N/A');
INSERT INTO `examenes` (`tipo`, `resulta`, `lab`)VALUES ('Radiografía', 'buena', 'Vetspeciales');
INSERT INTO `examenes` (`tipo`, `resulta`, `lab`)VALUES ('Ecografía', 'buena', 'Vetspeciales');
INSERT INTO `examenes` (`tipo`, `resulta`, `lab`)VALUES ('Endoscopía', 'buena', 'Vetspeciales');
INSERT INTO `examenes` (`tipo`, `resulta`, `lab`)VALUES ('Test Sida Felino', 'buena', 'Vetspeciales');
INSERT INTO `examenes` (`tipo`, `resulta`, `lab`)VALUES ('Test Leucemia', 'buena', 'Vetspeciales');
INSERT INTO `examenes` (`tipo`, `resulta`, `lab`)VALUES ('Test Dirofilaria', 'buena', 'Vetspeciales');

/* PROCEDIMIENTOS */

INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/14', '2020/04/15', '1', '2', '1', '1', '1');
INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/15', '2020/04/15', '2', '1', '2', '1', '1');
INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/16', '2020/04/15', '3', '1', '1', '1', '2');

INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/14', '2020/04/15', '4', '3', '1', '1', '1');
INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/15', '2020/04/15', '5', '1', '3', '1', '1');
INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/16', '2020/04/15', '6', '1', '1', '1', '3');

INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/14', '2020/04/15', '7', '4', '1', '1', '1');
INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/15', '2020/04/15', '8', '1', '4', '1', '1');
INSERT INTO `procedi` (`fecha`, `sigDosis`, `mascota_idMascotas`, `vacunas_idVacun`, `despara_idDespara`, `veterin_idVeterin`, `examenes_idExam`)
VALUES ('2020/04/16', '2020/04/15', '9', '1', '1', '1', '4');


/* INSERTS DE LIBROS */

INSERT INTO `categorialibro` (`catLibId`, `catLibNombre`, `catLibEstado`, `catLibObservacion`) VALUES
	(1, 'General', 1, 'Libros que implican varias categorías o que no se les ha definido'),
	(2, 'Cultura General', 1, 'Cultura General');

INSERT INTO `libros` (`isbn`, `titulo`, `autor`, `precio`, `estado`, `categoriaLibro_catLibId`) VALUES
	(129, '24-TALLER DE FRUTAS Y HORTALIZAS', 'F.A.O', '39000', 1, 2),
	(258, 'ACTIVIDAD FISICA Y SALUD INTEGRAL', 'Medina Jimâenez, Eduardo', '55000', 1, 2),
	(387, 'AGUADA. Cuaderno de Pintura', 'OLMEDO SALVADOR', '42000', 1, 2),
	(516, 'ALTERACIONES DEL HABLA EN LA INFANCIA ASPECTOS CLINICOS', 'Gonzâalez, Jorge Nicolâas', '11900', 1, 2),
	(645, 'ANATOMIA CIENCIA EXPLICADA', 'Archila R., Leonardo, ed', '9514', 1, 1),
	(774, 'Antología de la narrativa mexicana del siglo XX, I', 'Domínguez Michael, Christopher', '144000', 1, 1),
	(903, 'APRENDIZAJE SERVICIO. EDUCAR PARA LA CIUDADANIA', 'PUIG ROVIRA, Josep', '70800', 1, 1),
	(1032, 'ARTE DE TOULOUSE-LAUTREC', 'Harris, Nathaniel', '300000', 1, 1),
	(1161, 'ATENCION A LOS DESPLAZADOS EXPERIENCIAS INSTITUCIONALES EN COLOMBIA', 'VARIOS, Autores', '24000', 1, 1),
	(1290, 'ATLAS DE PLANTAS VIVIENDAS', 'Schneider, Friederike ed', '100800', 1, 1),
	(1419, 'Auguste y Louis Lumière -Entre sombras y luces', 'Saad, Julián', '22500', 1, 1),
	(1548, 'BEBE', 'Levin, Ina Massler', '27300', 1, 1),
	(1677, 'BIOLOGIA LA UNIDAD Y DIVERSIDAD DE LA VIDA', 'Starr, Cecie', '116900', 1, 1),
	(1806, 'BREVE HISTORIA DEL ARTE AFRICANO', 'GILLO WERNER', '244800', 1, 1),
	(1935, 'CALDERON VIDA Y TEATRO', 'PEDRAZA JIMENEZ FELIPE B.', '45400', 1, 1),
	(2064, 'CANTATA DEL MAL, LA (E.N)', 'TOLEDO ZAMORA, Fernando', '39000', 1, 1),
	(2193, 'Casos prácticos de dirección financiera', 'Martín Fernández, Miguel; Martínez Solano, Pedro', '123100', 1, 1),
	(2322, 'CIENCIAS SOCIALES EN DISCUSION, LAS', 'BUNGE, MARIO', '33500', 1, 1),
	(2451, 'CLIMA, EL', 'HARRIS, CAROLINE', '34000', 1, 1),
	(2580, 'COMISIONES FILMICAS, LAS. UN NUEVO DISPOSITIVO PARA LA PROMOCION AUDIOVISUAL', 'Martínez Hermida, Marcelo', '93000', 1, 1),
	(2709, 'Compañia de sueños ilimitada', 'J.G. Ballard', '13200', 1, 1),
	(2838, 'CONCEPTOS FUNDAMENTALES EN LA HISTORIA DE LA MUSIC', 'SALAZAR ADOLFO', '144100', 1, 1),
	(2967, 'CONSULTOR DEL SABER', 'Elorza Martínez, Gustavo de, ed', '22900', 1, 1),
	(3096, 'Copos de espuma', 'Vargas Vila, J. M.', '22300', 1, 1),
	(3225, 'CRONICA DE AMERICA', 'García Jordán, Pilar', '61200', 1, 1),
	(3354, 'CUERPO (IR)', 'HANIF KUREISHI', '57900', 1, 1),
	(3483, 'CYBERGIRLS PORTAFOLIO', 'SHIROW HAR', '56000', 1, 1),
	(3612, 'DEL RACISMO A INTERCULTURALIDAD ', 'Garcia, Alfonso Y Saez, J', '101000', 1, 1),
	(3741, 'DESCUBRIMIENTO DEL UNIVERSO', 'Hacyan, Shahen, 1947-', '160000', 1, 1),
	(3870, 'DIBUJO Y DISENO EN INGENIERIA', 'Jensen, Cecil', '63700', 1, 1),
	(3999, 'DICCIONARIO DE CINE', 'Trueba, Fernando, 1955-', '120000', 1, 1),
	(4128, 'DICCIONARIO DE INTERPRETES Y DE LA INTERPRETACION MUSICAL', 'Paris, Alain, 1947-', '300000', 1, 1),
	(4257, 'DICCIONARIO DE PERIODISMO, PUBLICACIONES Y MEDIOS', ' Consuegra, Jorge ', NULL, 1, 1),
	(4386, 'DICCIONARIO DEL JAZZ', 'Carles, Philippe', '83900', 1, 1),
	(4515, 'DICCIONARIO HISTORICO DE LA ILUSTRACION', 'Ferrone, Vincenzo ed', '118105', 1, 1),
	(4644, 'DICCIONARIO RUSO-ESPANOL 000170.000 VOCES DE ENTRADA 00045', 'Martínez Calvo, Lorenzo', '80000', 1, 1),
	(4773, 'Dirección de empresas', 'Cabanelas Omil, José', '160500', 1, 1),
	(4902, 'DOMINE EXCEL 2007', 'Pérez', '42000', 1, 1),
	(5031, 'EDUCACION E IGUALDAD DE OPORTUNIDADES ENTRE SEXOS', 'Xosé R. Fernández Vazquez', '106000', 1, 1),
	(5160, 'El Mundo de la Célula, 6/ed.', 'BECKER', '215000', 1, 1),
	(5289, 'EN AMERICA', 'SONTAG, Susan', '45000', 1, 1),
	(5418, 'ENCICLOPEDIA DE LAS TECNICAS DE AEROGRAFIA', 'Leek, Michael', '69000', 1, 1),
	(5547, 'ENCICLOPEDIA PRACTICA DE LA PEDAGOGIA', 'Clifford, Margaret M', '80000', 1, 1),
	(5676, 'Enseñar a leer y escribir. Una aproximación histórica', 'Chartier, Anne-Marie', '43000', 1, 1),
	(5805, 'ESCRITOS FILOSOFICOS 2.', 'LAKATOS IMRE', '121800', 1, 1),
	(5934, 'ESTADISTICA Y MATEMATICAS APLICADAS. (EDICION DIRIGIDA A LOS ESTUDIOS DE FARMACIA)', 'SÁNCHEZ, M./FRUTOS, G./CUESTA, P. L.', '153800', 1, 1),
	(6063, 'ESTUCHE CARRASQUILLA', 'CARRASQUILLA, Tomás', '89000', 1, 1),
	(6192, 'Explora tus sentidos ', 'Helen Otway', '19500', 1, 1),
	(6321, 'FILOSOFIA DE LA LOGICA', 'QUINE W.', '72100', 1, 1),
	(6450, 'FISIOLOGIA APLICADA AL DEPORTE', 'Calderâon Montero, Francisco Javier', '52500', 1, 1),
	(6579, 'FREUD Y LA PSICOLOGIA DEL ARTE', 'DEL CONDE, TERESA', '28800', 1, 1),
	(6708, 'FUNDAMENTOS DE QUIMICA', 'ZUMDAHL, STE', '80000', 1, 1),
	(6837, 'GEOMETRIA DESCRIPTIVA SISTEMAS DE PROYECCION CILINDRICA', 'Sánchez Gallego, Juan Antonio', '16650', 1, 1),
	(6966, 'GOYA SU TIEMPO SU VIDA SU OBRA', 'Aribau, Ferrán', '88140', 1, 1),
	(7095, 'Grandes batallas de la historia - Batallas de Alej', 'Varios Autores', '21000', 1, 1),
	(7224, 'GUIA DE EQUIPOS BASICOS PARA EL PROCESAMIENTO AGROINDUSTRI', 'Romero, Arturo', '9350', 1, 1),
	(7353, 'HACIA UNA EDUCACION INFANTIL NO SEXISTA ', 'Browne', '76000', 1, 1),
	(7482, 'HISTOLOGIA VEGETAL', 'Garcia Breijo', '35000', 1, 1),
	(7611, 'HISTORIA DE LA VIDA PRIVADA II De la Europa feudal al Renacimiento', 'ARIES, Philippe / DUBY, Georges', '65000', 1, 1),
	(7740, 'HISTORIA ILUSTRADA DE COLOMBIA', 'OCAMPO LÓPEZ JAVIER', '25000', 1, 1),
	(7869, 'HORTALIZAS FRUTAS Y PLANTAS COMESTIBLES', 'Peel, Lucy', '24000', 1, 1),
	(7998, 'Indicadores de gestión y cuadro de mando', 'SALGUEIRO ANABITARTE A.', '32000', 1, 1),
	(8127, 'INTERACCION DEL COLOR', 'ALBERS JOSEF', '109100', 1, 1),
	(8256, 'INTRODUCCION A LA SOCIOLOGIA POLITICA', 'MICHELS, Roberto', '59800', 1, 1),
	(8385, 'ISO 009000 002000 CALIDAD Y EXCELENCIA', 'Senlle, Andrâes', '55740', 1, 1),
	(8514, 'JUGOS BATIDOS Y SORBETES', 'Gonzâalez, Jorge, fot', '90000', 1, 1),
	(8643, 'LAROUSSE DICCIONARIO ENCICLOPEDICO USUAL', NULL, '23000', 1, 1),
	(8772, 'LETRA', 'Blanchard, Gerard', '135200', 1, 1),
	(8901, 'LIDERAZGO Y LA COMUNICACION EFECTIVA PUNTO DE PARTIDA PARA', 'Cajiao de Pâerez, Gloria', '160000', 1, 1),
	(9030, 'LOS MITOS HEBREOS', 'GRAVES ROBERT', '78100', 1, 1),
	(9159, 'MANEJO POST-COSECHA Y MERCADEO DE TOMATE DE ARBOL CHYPHOMA', 'Gutiâerrez Vâasquez, Albeiro', '77675', 1, 1),
	(9288, 'MANUAL DE HORTICULTURA UNA GUIA PASO A PASO', 'Lesur Esquivel, Luis', '160000', 1, 1),
	(9417, 'MANUAL INTEGRADO DE DISENO Y CONSTRUCCION', 'Merrit, Frederick S., ed', '160000', 1, 1),
	(9546, 'MARKETING EMOCIONAL EL METODO DE HALLMARK PARA GANAR CLIEN', 'Robinette, Scott', '27870', 1, 1),
	(9675, 'MATEMATICAS PARA LOS ESTUDIANTES DE HUMANIDADES', 'Kline, Morris, 1908-', '160000', 1, 1),
	(9804, 'MEMORIA DEL FLAMENCO', 'GRANDE FELIX', '122300', 1, 1),
	(9933, 'MI PRIMER LAROUSSE DE LOS HEROES', 'EDICIONES LAROUSSE', '52400', 1, 1),
	(10062, 'MISTERIOS DE LOS OCEANOS', 'Dipper, Frances', '52200', 1, 1),
	(10191, 'MUJERES DE LA ANTIGUEDAD', 'VARIOS', '45400', 1, 1),
	(10320, 'NACIMIENTO DE LA HISTORIA, EL', 'CHATELET, Francois', '70000', 1, 1),
	(10449, 'NOVELA NATURALISTA HISPANOAMERICANA', 'Prendes, Manuel', '65950', 1, 1),
	(10578, 'NUTRICION DE PECES COMERCIALES EN ESTANQUES', 'Hepher, Balfour', '39000', 1, 1),
	(10707, 'OFICIO DE JURISTA, EL', 'DÍEZ PICAZO, Luis', '74000', 1, 1),
	(10836, 'OTROS ESTUDIOS SOBRE EL ESPAÑOL EN COLOMBIA', 'MONTES GIRALDO, José Joaquín', '30000', 1, 1),
	(10965, 'PASIÓN DE PAPEL- CTOS SOBRE EL MUNDO DEL LIBRO', 'AA.VV.', '67000', 1, 1),
	(11094, 'PERRO CALLEJERO(IR)', 'MARTIN AMIS', '64900', 1, 1),
	(11223, 'PLANTAS MEDICINALES EN VERSO ALIMENTESE Y SANESE', 'Gâomez Giraldo, Felipe, 1960-', '25000', 1, 1),
	(11352, 'Política y gestión pública', 'Bresser-Pereira, Luiz Carlos, et al.', '43000', 1, 1),
	(11481, 'PRIMAVERA DEL SER', 'MANTERO, Manuel', '26500', 1, 1),
	(11610, 'PROCESOS INDUSTRIALES EN FRUTAS Y HORTALIZAS', 'Osorio Dâiaz, Doris Liliana', '14073', 1, 1),
	(11739, 'PSICOTERAPIA Y SENTIDO DE VIDA', 'MARTINEZ ORTIZ,EFREN', '44000', 1, 1),
	(11868, 'QUIMICA GENERAL ORGANICA Y BIOLOGICA', 'Wolfe, Drew H', '51350', 1, 1),
	(11997, 'REDES NEURONALES', 'Anderson', '61000', 1, 1),
	(12126, 'REPENSAR LA RESURRECCION. (3ª ED) LA DIFERENCIA CRISTIANA EN LA CONTINUIDAD DE LAS RELIGIONES Y LA CULTURA', 'TORRES QUEIRUGA, Andrés', '82200', 1, 1),
	(12255, 'ROSTRO MAÑANA 2, TU.  BAILE Y SUEÑO', 'MARIAS, Javier', '45000', 1, 1),
	(12384, 'SEGUNDO SECRETO DE LA VIDA LAS NUEVAS MATEMATICAS DEL MUNDO', 'Stewart, Ian, 1945-', '160000', 1, 1),
	(12513, 'SIMBOLOS EN LA BIBLIA', 'ALVES, Herculano', '128900', 1, 1),
	(12642, 'SOCIOLOGIA URBANA DE MANUEL CASTELLS', 'SUSSER IDA (ed.)', '161200', 1, 1),
	(12771, 'TALMUD. TRATADO DE BERAJOT I', '0', '128000', 1, 1),
	(12900, 'TEOLOGIA DE LA LIBERACION Y REFUNDACION DE LA ESPERANZA', 'GIRARDI, Giulio', '44200', 1, 1),
	(13029, 'Textos políticos.', 'Burke, Edmund', '44000', 1, 1),
	(13158, 'TOXINAS AMBIENTALES Y SUS EFECTOS GENETICOS', 'Rodrâiguez Arnaiz, Rosario', '160000', 1, 1),
	(13287, 'TRIGONOMETRIA', 'Swokowski, Earl William, 1926-', '32200', 1, 1),
	(13416, 'UNIVERSALISMO CONSTRUCTIVO 2', 'TORRES GARCIA JOAQUIN', '209600', 1, 1),
	(13545, 'VIAJE AL CORAZON DE LA TORMENTA', 'EISNER WILL', '44000', 1, 1),
	(13674, 'Vitaminas y minerales esenciales para la salud ', 'Challem, Jack ', '37500', 1, 1),
	(13803, 'YO AMO A MI MAMI', 'JAIME BAYLY', '34900', 1, 1);

INSERT INTO `rol` (`rolNombre`, `rolDescripcion`, `rolEstado`, `rolUsuSesion`, `rolCreatedAt`, `rolUpdatedAt`)
VALUES ('administrador', 'gestionar la plataforma', '1', 'admin', now(), now());

INSERT INTO `rol` (`rolNombre`, `rolDescripcion`, `rolEstado`, `rolUsuSesion`, `rolCreatedAt`, `rolUpdatedAt`)
VALUES ('veterinario', 'cuidar a las mascotas', '1', 'veterinario', now(), now());

INSERT INTO `rol` (`rolNombre`, `rolDescripcion`, `rolEstado`, `rolUsuSesion`, `rolCreatedAt`, `rolUpdatedAt`)
VALUES ('cliente', 'dueño de una mascota', '1', 'cliente', now(), now());

INSERT INTO `usuario_s` (`usuLogin`, `usuPassword`, `usuUsuSesion`, `usuEstado`, `usuCreatedAt`, `usuUpdatedAt`)
VALUES ('coronado@correo.com', '$2y$10$IIdztk/PTzscUFFhqi6dfOaiKxaVah5RFNDLivqpDivAPmA9MHZMa', 'Fredy', '1', now(), now());

INSERT INTO `usuario_s` (`usuLogin`, `usuPassword`, `usuUsuSesion`, `usuEstado`, `usuCreatedAt`, `usuUpdatedAt`)
VALUES ('parra@correo.com', '$2y$10$IIdztk/PTzscUFFhqi6dfOaiKxaVah5RFNDLivqpDivAPmA9MHZMa', 'Susana', '1', now(), now());

INSERT INTO `usuario_s` (`usuLogin`, `usuPassword`, `usuUsuSesion`, `usuEstado`, `usuCreatedAt`, `usuUpdatedAt`)
VALUES ('ortiz@correo.com', '$2y$10$IIdztk/PTzscUFFhqi6dfOaiKxaVah5RFNDLivqpDivAPmA9MHZMa', 'Viviana', '1', now(), now());

INSERT INTO `usuario_s_roles` (`id_rol`, `estado`, `fechaUserRol`, `usuRolUsuSesion`, `created_at`, `updated_at`, `usuario_s_usuId`)
VALUES ('1', '1', now(), 'Fredy', now(), now(), '1');
INSERT INTO `usuario_s_roles` (`id_rol`, `estado`, `fechaUserRol`, `usuRolUsuSesion`, `created_at`, `updated_at`, `usuario_s_usuId`)
VALUES ('2', '1', now(), 'Susana', now(), now(), '2');
INSERT INTO `usuario_s_roles` (`id_rol`, `estado`, `fechaUserRol`, `usuRolUsuSesion`, `created_at`, `updated_at`, `usuario_s_usuId`)
VALUES ('3', '1', now(), 'Viviana', now(), now(), '3');

INSERT INTO `persona` (`perId`, `perDocumento`, `perNombre`, `perApellido`, `perEstado`, `perUsuSesion`, `perCreatedAt`, `perUpdatedAt`, `usuario_s_usuld`, `usuario_s_usuId`)
VALUES ('1','12331', 'fredy', 'coronado', '1', 'coronado@gmail.com', now(), now(), '1', '1');

INSERT INTO `persona` (`perId`, `perDocumento`, `perNombre`, `perApellido`, `perEstado`, `perUsuSesion`, `perCreatedAt`, `perUpdatedAt`, `usuario_s_usuld`, `usuario_s_usuId`)
VALUES ('2', '2000', 'Susana', 'Parra', '1', 'parra@gmail.com', now(), now(), '2', '2');

INSERT INTO `persona` (`perId`, `perDocumento`, `perNombre`, `perApellido`, `perEstado`, `perUsuSesion`, `perCreatedAt`, `perUpdatedAt`, `usuario_s_usuld`, `usuario_s_usuId`)
VALUES ('3', '3000', 'Viviana', 'Ortiz', '1', 'ortiz', now(), now(), '3', '3');































