--insert roles
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
insert into CONTACTO values(1 ,'Jorge','primo');
insert into CONTACTO values( 2,'Alejandro','primo');
insert into CONTACTO values( 3,'Elias','hermano');
insert into CONTACTO values( 4,'Jose','hermano');
insert into CONTACTO values( 5,'Gabriel','tio');
insert into CONTACTO values( 6,'Herick','tio');
insert into CONTACTO values( 7,'Miguel','tio');
insert into CONTACTO values( 8,'Jormary','Mamá');
insert into CONTACTO values( 9,'Camila','papa');
insert into CONTACTO values( 10,'Maria','Hijo');
insert into CONTACTO values(11,'Lucho','Hijo');
insert into CONTACTO values(12,'Luis','Hijo');
insert into CONTACTO values(13,'Juan','Hijo');
insert into CONTACTO values(14,'Rebeca','Mamá');
insert into CONTACTO values(15,'Carolina','Tia');
insert into CONTACTO values(16,'Laura','Tia');
insert into CONTACTO values(17,'Valeria','Tia');
insert into CONTACTO values(18,'Miriam','Tia');
insert into CONTACTO values(19,'Manuela','Tia');
insert into CONTACTO values(20,'Pablo','Padrastro');
insert into CONTACTO values(21,'Mercedes','Padrastro');
insert into CONTACTO values(22,'Nazareth','Padrastro');
insert into CONTACTO values(23,'Dexire','Padrastro');
insert into CONTACTO values(24,'Sara','Padrastro');
insert into CONTACTO values(25,'Daniela','Padrastro');
insert into CONTACTO values(26,'Dayana','Mamá');
insert into CONTACTO values(27,'Karla','Papá');
insert into CONTACTO values(28,'Kelly','Papá');
insert into CONTACTO values(29,'Katherine','Papá');
insert into CONTACTO values(30,'Xiomara','Papá');
insert into CONTACTO values(31,'Felicia','Papá');
insert into CONTACTO values(32,'Carlos','Papá');
insert into CONTACTO values(33,'Natalia','Papá');
insert into CONTACTO values(34,'Lionel','Hijo');
insert into CONTACTO values(35,'Isabella','Tia');
insert into CONTACTO values(36,'Mariam','Tia');
insert into CONTACTO values(37,'Maximo','Tia');
insert into CONTACTO values(38,'Bianca','Tia');
insert into CONTACTO values(39,'Roberto','Tia');
insert into CONTACTO values(40,'Andy','Tio');
insert into CONTACTO values(41,'Vanessa','Mamá');
insert into CONTACTO values(42,'Maribel','Mamá');
insert into CONTACTO values(43,'Victor','Papá');
insert into CONTACTO values(44,'Jimy','Mamá');
insert into CONTACTO values(45,'Yuliana','Mamá');
insert into CONTACTO values(46,'Eliana','Mamá');
insert into CONTACTO values(47,'Nina','Hijo');
insert into CONTACTO values(48,'Pedro','Hijo');
insert into CONTACTO values(49,'Sofia','Suegro');
insert into CONTACTO values(50,'Betania','Suegro');
insert into CONTACTO values(51,'Gabriela','Suegro');
insert into CONTACTO values(52,'Graciela','Suegro');
insert into CONTACTO values(53,'Veronica','Suegro');
insert into CONTACTO values(54,'Yuleixi','Suegro');
insert into CONTACTO values(55,'Franchecha','cuñado');
insert into CONTACTO values(56,'Joan','cuñado');
insert into CONTACTO values(57,'David','cuñado');
insert into CONTACTO values(58,'Juliana','cuñado');
insert into CONTACTO values(59,'Manuel','cuñado');
insert into CONTACTO values(60,'Gregorio','cuñado');
insert into CONTACTO values(61,'Emirse','Yerno');
insert into CONTACTO values(62,'Zulema','Yerno');
insert into CONTACTO values(63,'Yamira','Yerno');
insert into CONTACTO values(64,'Estefany','Yerno');
insert into CONTACTO values(65,'Wendy','Yerno');
insert into CONTACTO values(66,'Emilio','Yerno');
insert into CONTACTO values(67,'Ronald','Yerno');
insert into CONTACTO values(68,'Ana','Yerno');
insert into CONTACTO values(69,'Karina','Yerno');
insert into CONTACTO values(70,'Marianny','tio');
insert into CONTACTO values(71,'Valentina','Madre');
insert into CONTACTO values(72,'Andrea','Madre');
insert into CONTACTO values(73,'Andres','Madre');
insert into CONTACTO values(74,'Berta','Madre');
insert into CONTACTO values(75,'Felipe','Padrastro');
insert into CONTACTO values(76,'Demian','Padrastro');
insert into CONTACTO values(77,'Cesar','Padrastro');
insert into CONTACTO values(78,'Angel','Padrastro');
insert into CONTACTO values(79,'Kiara','Tia');
insert into CONTACTO values(80,'Yoleinys','Tia');
insert into CONTACTO values(81,'Amelia','Tia');
insert into CONTACTO values(82,'Nathaly','Hermana');
insert into CONTACTO values(83,'Vanessa','Hermana');
insert into CONTACTO values(84,'Sofia','Hermana');
insert into CONTACTO values(85,'Ruperta','Hermana');
insert into CONTACTO values(86,'Andres','Hijo');
insert into CONTACTO values(87,'Alejandro','Hijo');
insert into CONTACTO values(88,'Bianca','Esposa');
insert into CONTACTO values(89,'Camila','Esposa');
insert into CONTACTO values(90,'Dayana','Esposa');
insert into CONTACTO values(91,'Freddy','Esposo');
insert into CONTACTO values(92,'Gabriela','Esposa');
insert into CONTACTO values(93,'Jimy','Esposo');
insert into CONTACTO values(94,'Valentina','Esposa');
