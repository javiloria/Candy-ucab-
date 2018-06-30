--inserts  de jorge prueba
insert into roles values(1,'admin','Administrador');
insert into roles values(2,'user','Usuario');

--insert de productos
  insert into Producto(p_cod,p_nombre,p_tipo,p_precio,p_imagen,p_descripcion,p_cantidad,updated_at,created_at) values
(1,'Chupetas Rimbombin','Chupeta',70000.99 ,'rimbombin.jpg','El famoso caramelo con palo ideado por Enric Bernat en 1958 sigue de actualidad en nuestros días. Personajes como Johan Cruyff, Rivaldo, etc',10000,null,null),
(2,'Ricolin','caramelo',5500 ,'ricolin.jpg','Los primeros Ricolin se fabricaron en la década de 1990, como supresores de la tos. Hoy en día Ricolin es la marca líder en el segmento de los caramelos de bolsillo en Venezuela',5505,null,null),
(3,'Los Firi Firi','caramelo',12345,'firi.jpg','Se introducen en el mercado en 1994, teniendo como objetivo un público adulto. Son pastillas que proporcionan frescura, y en ello basan sus campañas publicitarias. Desde el año 1994 hasta hoy', 4804,null,null),
(4,'Chupeta de Corazón','chupeta',8777,'corazon.jpg','En el año 2005 decidimos apostar; gracias al éxito del caramelo Ricura; a la combinación del dulce y picante, por eso se crean unas chupetas en forma de corazón que tienen aspecto sutil',7753,null,null),
(5,'Los Pirulitos','caramelo',7666 ,'pirulitos.jpg','Son caramelos blandos que reciben su nombre por la forma alargada con la que se presentan. Tradicionalmente eran de sabor fresa', 5678,null,null),
(6,'Ricura','chicle', 25000,'ricura.jpg','Se introducen en el mercado en el año 2002 como una edición especial, por su particular combinación de sabores, tanto fue el éxito que son parte de la producción actual de la', 1234,null,null),
(7,'El Original','caramelo',8000,'original.jpg','Un producto clásico de confitería adulta, que aúna un sabor refrescante y agradable con el efecto de aliviar la irritación de garganta y despejar las vías respiratorias',8765,null,null),
(8,'Dulcin','caramelo', 12000,'dulcin.jpg','La receta original es procedente de España del año 1961, pero Candy hizo una adaptación de la receta con productos locales (venezolanos) son los caramelos blandos más conocidos de Candy UCAB,',543,null,null),
(9,'Choco Candy','chocolate',450000 ,'chococandy.jpg','Candy en el año 2005 adaptó la receta agregando un ingrediente especial (el chocolate). Hoy en día los caramelos Choco son líderes en caramelos de chocolate',287,null,null),
(10,'Blue','caramelo',35000,'blue.jpg','Al término de la guerra civil, Javier Ramírez regresó a Navarra tras un exilio en Francia. Fue entonces cuando inventó un caramelo que hoy día sigue siendo un éxito',653,null,null);

    -- insert de status
insert into status values(1,'Listo');
insert into status values(2,'Send-Fabrica');
insert into status values(3,'Send-Pedido');


    -- insert de contacto
insert into CONTACTO(co_nombre,co_descripcion) values( 'Jorge','primo'),
('Alejandro','primo'),
( 'Elias','hermano'),
( 'Jose','hermano'),
( 'Gabriel','tio'),
( 'Herick','tio'),
( 'Miguel','tio'),
( 'Jormary','amiga'),
( 'Camila','papa'),
('Maria','Hijo'),
('Lucho','Hijo'),
('Luis','Hijo'),
('Juan','Hijo'),
('Rebeca','Mamá'),
('Carolina','Tia'),
('Laura','Tia'),
('Valeria','Tia'),
('Miriam','Tia'),
('Manuela','Tia'),
('Pablo','Padrastro'),
('Mercedes','Padrastro'),
('Nazareth','Padrastro'),
('Dexire','Padrastro'),
('Sara','Padrastro'),
('Daniela','Padrastro'),
('Dayana','Mamá'),
('Karla','Papá'),
('Kelly','Papá'),
('Katherine','Papá'),
('Xiomara','Papá'),
('Felicia','Papá'),
('Carlos','Papá'),
('Natalia','Papá'),
('Lionel','Hijo'),
('Isabella','Tia'),
('Mariam','Tia'),
('Maximo','Tia'),
('Bianca','Tia'),
('Roberto','Tia'),
('Andy','Tio'),
('Vanessa','Mamá'),
('Maribel','Mamá'),
('Victor','Papá'),
('Jimy','Mamá'),
('Yuliana','Mamá'),
('Eliana','Mamá'),
('Nina','Hijo'),
('Pedro','Hijo'),
('Sofia','Suegro'),
('Betania','Suegro'),
('Gabriela','Suegro'),
('Graciela','Suegro'),
('Veronica','Suegro'),
('Yuleixi','Suegro'),
('Franchecha','cuñado'),
('Joan','cuñado'),
('David','cuñado'),
('Juliana','cuñado'),
('Manuel','cuñado'),
('Gregorio','cuñado'),
('Emirse','Yerno'),
('Zulema','Yerno'),
('Yamira','Yerno'),
('Estefany','Yerno'),
('Wendy','Yerno'),
('Emilio','Yerno'),
('Ronald','Yerno'),
('Ana','Yerno'),
('Karina','Yerno'),
('Marianny','tio'),
('Valentina','Madre'),
('Andrea','Madre'),
('Andres','Madre'),
('Berta','Madre'),
('Felipe','Padrastro'),
('Demian','Padrastro'),
('Cesar','Padrastro'),
('Angel','Padrastro'),
('Kiara','Tia'),
('Yoleinys','Tia'),
('Amelia','Tia'),
('Nathaly','Hermana'),
('Vanessa','Hermana'),
('Sofia','Hermana'),
('Ruperta','Hermana'),
('Andres','Hijo'),
('Alejandro','Hijo'),
('Bianca','Esposa'),
('Camila','Esposa'),
('Dayana','Esposa'),
('Freddy','Esposo'),
('Gabriela','Esposa'),
('Jimy','Esposo'),
('Valentina','Esposa');


INSERT INTO JUR_CON(jc_contacto,jc_clientejuridico) VALUES(7941589),
(1,93561785),
(2,16943631),   
(3,5140801),
(4,7135453),
(5,18242552),
(6,41222746),
(7,0360485),
(8,30582324),
(9,2176557),
(10,6221322),
(11,8978093),
(12,2568349),
(13,00561977),
(14,79105540),
(15,86477726),
(16,54933866),
(17,76045442),
(18,0361119),
(19,85731743),
(20,0016553),
(21,99984296),
(22,4394645),
(23,92394915),
(24,54213681),
(25,63347793),
(26,65702565),
(27,7759434),
(28,89445910),
(29,07705783),
(30,0665596),
(31,8648346),
(32,88121140),
(33,85245698),
(34,96358265),
(35,5454639),
(36,5457482),
(37,8784823),
(38,6157756),
(39,2254893),
(40,81125140),
(41,17705593),
(42,66655841),
(43,65723955),
(44,56454917),
(45,18159552),
(46,18159553),
(47,18159554),
(48,18159555),
(49,18159556),
(50,18159557),
(51,18159558),
(52,18159559),
(53,18159560),
(54,18159561),
(55,18159562),
(56,18159563),
(57,18159564),
(58,18159565),
(59,18159566),
(60,18159567),
(61,18159568),
(62,81125141),
(63,81125142),
(64,81125143),
(65,81125144),
(66,81125145),
(67,81125146),
(68,81125147),
(69,81125148),
(70,81125149),
(71,81125150),
(72,81125151),
(73,81125152),
(74,81125153),
(75,81125154),
(76,81125155),
(77,81125156),
(78,81125157),
(79,54546391),
(80,54546392),
(81,54546393);