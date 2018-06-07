CREATE TABLE PRODUCTO (
    p_cod numeric(20),
    p_nombre varchar(50),
    p_tipo varchar(50),
    p_precio numeric(20,3),
    p_imagen varchar(200),
    updated_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    constraint PK_producto Primary Key(p_cod)

);


CREATE TABLE LUGAR(
l_cod numeric(5),
l_tipo varchar(15) NOT NULL,
l_nombre varchar(50) NOT NULL,
fk_lugar numeric(5),
constraint PK_lugar primary key(l_cod),
constraint fk_lugar foreign key( fk_lugar ) references lugar(l_cod),
constraint Lugar_check_tipo check( l_tipo in('estado','municipio','parroquia'))
);


CREATE sequence tienda_cod_sec
increment by 1
start with 1;

CREATE TABLE TIENDA(
    t_cod integer DEFAULT nextval('tienda_cod_sec') ,
    t_tipoTamano varchar(30) NOT NULL,
    t_nombre varchar(50) NOT NULL,
    fk_lugar numeric(5) NOT NULL,
    t_imagen varchar(200),
    constraint PK_Tienda
    PRIMARY KEY(t_cod),
    constraint FK_Tienda_Lugar foreign key(fk_lugar) references Lugar(l_cod)
);
