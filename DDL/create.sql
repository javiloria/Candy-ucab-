// Tabla Lugar-Juridico

create table lug_jur(
	lj_cod numeric(5),
	lj_clientejuridico numeric(10),
	lj_lugar numeric(10),
	constraint pk_lugjur  primary key (lj_cod, lj_clientejuridico, lj_lugar), 
	constraint fk_cj foreign key(lj_clientejuridico) references clientejuridico(c_j_rif),
	constraint fk_l foreign key(lj_lugar) references lugar(l_cod)
);

// Tabla Producto

CREATE TABLE PRODUCTO (
    p_cod numeric(10),
    p_nombre varchar(50),
    p_tipo varchar(50),
    p_precio numeric(15,2),
    constraint PK_producto Primary Key(p_cod)
);

// Tabla Contacto

create sequence con_id_sec
increment by 1
start with 1;

create table contacto(
	co_id integer DEFAULT nextval('con_id_sec'),
	co_nombre varchar(30) not null,
	co_descripcion varchar(191),
	constraint PK_contacto Primary Key(co_id)
);

// Tabla Lugar

    CREATE TABLE LUGAR(
	l_cod numeric(5),
	l_tipo varchar(15) NOT NULL,
	l_nombre varchar(50) NOT NULL,
	fk_lugar numeric(5),
	constraint PK_lugar primary key(l_cod),
	constraint fk_lugar foreign key( fk_lugar ) references lugar(l_cod),
	constraint Lugar_check_tipo check( l_tipo in('estado','municipio','parroquia'))
);

// Tabla Cliente Natural

Create table ClienteNatural(
	C_N_rif numeric(10),
	C_N_cedula numeric(10) NOT NULL,
	C_N_pnombre varchar(30) NOT NULL,
	C_N_snombre varchar(30),
	C_N_papellido varchar(30) NOT NULL,
	C_N_sapellido varchar(30),
	C_N_correo varchar(30) NOT NULL,
	fk_Lugar numeric(5) NOT NULL,
	constraint PK_ClienteNatural Primary Key(C_N_rif),
	constraint FK_ClienteNatural_Lugar foreign Key(fk_Lugar)
	references Lugar(l_cod)
);

// Tabla Telefono

	create sequence tel_id_sec
	increment by 1
	start with 1;

create table telefono(
	t_id integer default nextval('tel_id_sec'),
	t_numero varchar(20) not null,
	fk_clientenatural numeric(10),
	fk_clientejuridico numeric(10),
	fk_contacto integer,
	constraint pk_telefono primary key(t_id),
	constraint fk_telefono_contacto foreign key(fk_contacto) references contacto(co_id),
	constraint fk_telefono_clientenatural foreign key(fk_clientenatural) references
	clientenatural(c_n_rif),
	constraint fk_telefono_clientejuridico foreign key(fk_clientejuridico) references
	clientejuridico(c_j_rif)
);

// Tabla Cliente Juridico

create table clientejuridico(
	c_j_rif numeric(10),
	c_j_correo varchar(50) not null,
	c_j_dcomercial varchar(50) not null,
	c_j_razonsocial varchar(50) not null,
	c_j_sitioweb varchar(100),
	c_j_capital numeric (15,2) not null,
	constraint pk_clientejuridico Primary Key(c_j_rif)
);

// Tabla de Usuario

create table Usuario(
	u_username varchar(50) unique,
	u_password varchar(50) not null,
	fk_clieNat numeric(10),
	fk_clieJur numeric(10),
	constraint pk_usuario primary key(u_username),
	constraint fk_usuario_cn foreign key (fk_clienat) references clientenatural(c_n_rif),
	constraint fk_usuario_cj foreign key (fk_cliejur) references clientejuridico(c_j_rif)
);
